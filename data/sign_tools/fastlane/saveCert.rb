require 'spaceship'
require 'openssl'
require 'mysql2'
require 'json'
require 'pathname'
require 'time'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Config'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Login'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Mysql'

username = ENV["FASTLANE_USER"]
password = ENV["FASTLANE_PASSWORD"]
iss = ARGV[0].to_s
cover = false
if !ARGV[1].empty?
	cover = true
end
jsonData = {
	"status" => 0,
	"msg" => "处理失败"
}
begin
	if iss.empty?
	   raise '请填写iss'
	end

	userlogin = Login.new(username, password, 1)
	userlogin.login()

    certificates = Spaceship::Portal.certificate.production.all

    if certificates.empty?
        csr = File.read(Config::CERT + 'ios.certSigningRequest')
        certificateObj = Spaceship::Portal.certificate.production.create!(csr: csr)
		cover = 1
    else
        certificateObj = certificates.first        
    end
	
	if cover
		issPath = Config::CERT + iss
		system "mkdir -p #{issPath}"
		system "chmod 777 #{issPath}"

		pemPath = issPath + "/#{iss}.pem"
		File.write(pemPath, certificateObj.download)

		p12Path = issPath + "/#{iss}.p12"
		keyPath = Config::CERT + 'public/ios.key'

		output =  system "openssl pkcs12 -export -inkey #{keyPath} -in #{pemPath} -out #{p12Path} -passout pass:123456"
		if !output
			raise "p12生成失败"
		end
		total_count = Spaceship::Portal.device.all.length
		limit_count = 100 - total_count
		if limit_count < 0
			limit_count = 0
		end
		tid = certificateObj.id

		client = Mysql.instance.getClient();

		client.query("update prefix_super_cert set tid = '#{tid}',total_count = '#{total_count}',limit_count = '#{limit_count}' where username = '#{username}'")
	end
	jsonData = {
        "status" => 1,
		"user" => username,
        "msg" => "处理成功"
    }
rescue Exception  => e
	if e.message.include?("=>")
		response = JSON.parse e.message.gsub('=>', ':')
		jsonData = {
			"status" => 0,
			"msg" => "处理失败",
			"user" => username,
			"response" => response
		}
	else
		jsonData = {
			"status" => 0,
			"user" => username,
			"msg" => e.message
		}
	end
ensure
    Mysql.instance.close()
    puts JSON[jsonData]
end