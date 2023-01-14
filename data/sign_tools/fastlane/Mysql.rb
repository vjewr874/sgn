require 'mysql2'
require 'pathname'
require Pathname.new(File.dirname(__FILE__)).realpath.to_s + '/Config'
require 'singleton'


class Mysql
	include Singleton
	@@client = nil

	def getClient()
		if !@@client
			@@client = Mysql2::Client.new(
				:host     => Config::HOST,
				:username => Config::USER,
				:password => Config::PASSWORD,
				:database => Config::DBNAME,
				:encoding => Config::CHARSET
			)
		end
		return @@client
	end
	
	def close()
		if @@client
			@@client.close
		end
		@@client = nil
	end
end

END{
	Mysql.instance.close();
}