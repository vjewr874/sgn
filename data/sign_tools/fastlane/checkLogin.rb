#!/usr/bin/env ruby

require 'base64'
require 'json'
require 'mysql2'
require 'json'
require 'pathname'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Mysql'
session = nil
jsonData = {
	"status" => 0,
	"msg" => "处理失败"
}
username = ENV["FASTLANE_USER"]
begin
	spaceauth_output = `exec fastlane spaceauth`
	fastlane_session_regex = %r{Pass the following via the FASTLANE_SESSION environment variable:\n(?<session>.+)\n\n\nExample:\n.+}

	if match = spaceauth_output.match(fastlane_session_regex)
	  session = match[:session].gsub("\e[4m\e[36m", "").gsub("\e[0m\e[0m", "")
	end
	if !session.nil?
	  jsonData = {
        "status" => 1,
        "msg" => "处理成功",
		"username" => username,
        "session" => Base64.encode64(session)
      }
	  client = Mysql.instance.getClient();
	  client.query("update prefix_super_cert set fastlane_session = '#{session}' where username = '#{username}'")
	  Mysql.instance.close()
	end
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
    puts JSON[jsonData]
end