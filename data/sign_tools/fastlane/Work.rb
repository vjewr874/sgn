require 'spaceship'
require 'openssl'
require 'mysql2'
require 'json'
require 'pathname'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Config'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Login'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Mysql'

username = ENV["FASTLANE_USER"]
password = ENV["FASTLANE_PASSWORD"]
uuid = ARGV[0].to_s
bundleId = ARGV[1].to_s
jsonData = {
	"status" => 0,
	"msg" => "处理失败"
}
addUDID = false
def ad_hocCreate(bundleId, certificateId, proname)
	cert = Spaceship::Portal.certificate.production.find(certificateId)
	if !cert
		raise "证书#{certificateId} 不存在"
	end

	Spaceship::Portal.provisioning_profile.ad_hoc.create!(bundle_id: bundleId, certificate: cert, name: proname)
	sleep 1
end


begin
	userlogin = Login.new(username, password, 1)
	userlogin.login()
    #Spaceship::Portal.login(username, password)
    app = Spaceship::Portal.app.find(bundleId)
    if !app
        app = Spaceship::Portal.app.create!(bundle_id: bundleId, name: bundleId)
    end

	app.update_service(Spaceship::Portal.app_service.push_notification.on)
	app.update_service(Spaceship::Portal.app_service.vpn_configuration.on)
	app.update_service(Spaceship::Portal.app_service.network_extension.on)

    certificates = Spaceship::Portal.certificate.all

    if certificates.empty?
        raise "证书为空"
    end

    client = Mysql.instance.getClient();

    if !Spaceship::Portal.device.find_by_udid(uuid)
        Spaceship::Portal.device.create!(name:uuid, udid: uuid)
		addUDID = true
        total_count = Spaceship::Portal.device.all.length
		limit_count = 100 - total_count
		if limit_count < 0
			limit_count = 0
		end
        client.query("update prefix_super_cert set total_count = '#{total_count}',limit_count = '#{limit_count}'  where username = '#{username}'")
    end
	
	results = client.query("SELECT tid FROM prefix_super_cert where username = '#{username}' limit 1")
	if !results.any?
		raise "苹果账号#{username}不存在, 请先添加"
	end
	certificateObj = results.first
	certificateId = certificateObj['tid']
	Spaceship.provisioning_profile.ad_hoc.all.each do |p|
		p.certificates.each do |cs|
		if cs.id == certificateId && p.app.bundle_id == bundleId
                $ad_hocProfile = p
                break
            end
		end
    end
	if !defined? $ad_hocProfile
        ad_hocCreate(bundleId, certificateId, bundleId + '.' + certificateId)
		sleep 1
		$ad_hocProfile = Spaceship.provisioning_profile.ad_hoc.all.first
    end

	if !defined? $ad_hocProfile
		raise "描述文件生成失败"
	end
	devices = Spaceship.device.all
	$ad_hocProfile.devices = devices
	$ad_hocProfile.update!

	Spaceship.provisioning_profile.ad_hoc.all.each do |p|
		if p.name == $ad_hocProfile.name
			mobileprovision =  '/' + uuid + '.mobileprovision'
			File.write(Config::MOVILE + mobileprovision, p.download)
		end	
	end
	jsonData = {
        "status" => 1,
        "msg" => "处理成功",
        "addUDID" => addUDID
    }
rescue Exception  => e
	if e.message.include?("=>")
		response = JSON.parse e.message.gsub('=>', ':')
		jsonData = {
			"status" => 0,
			"msg" => "处理失败",
			"response" => response
		}
	else
		jsonData = {
			"status" => 0,
			"msg" => e.message
		}
	end
ensure
    Mysql.instance.close()
    puts JSON[jsonData]
end