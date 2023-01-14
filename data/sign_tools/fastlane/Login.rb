require 'spaceship'
require 'mysql2'
require 'json'
require 'pathname'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Mysql'

class Login
	@@showTime = 0;

	def initialize(username, password, sleep = 1)
		@username = username
		@password = password
		@sleep = sleep
	end
	
	def setShowTime(show = 1)
		@@showTime = show
	end
	
	def login()
		begin
			thr = Thread.new{ Spaceship::Portal.login(@username, @password) }
			for i in 0..11
				sleep @sleep
				case thr.status
				when false
					client = Mysql.instance.getClient();
					client.query("update prefix_super_cert set status = 1 where type = 1 and status = 1 and username = '#{@username}'")
					break
				when nil
					raise 'error: 双重验证错误'
					break
				else
					#puts Time.new if @@showTime
				end
			end

			if thr.status
				thr.exit
			raise 'error: 双重验证超时'
			end
		rescue Exception  => e
			 client.query("update prefix_super_cert set status = 3 where type = 1 and username = '#{@username}'")
			 if e.message.include?("=>")
				response = JSON.parse e.message.gsub('=>', ':')
				jsonData = {
					"status" => 0,
					"msg" => "登录失败",
					"response" => response
				}
			else
				jsonData = {
					"status" => 0,
					"msg" => e.message
				}
			end
			puts JSON[jsonData]
			exit
		ensure
			#Mysql.instance.close()
		end	
	end	
end