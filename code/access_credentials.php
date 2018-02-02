<?php

	class Access_Credentials{
		
		# fill with the needed information.
		private static $domain_server = "";
		private static $user_name = "";
		private static $password = "";
		private static $options = array();
		
		
		public static function get_access_credentials(){
			$credentials = array(
				"domain_server" => self::$domain_server,
				"user_name" => self::$user_name,
				"password" => self::$password,
				"options" => self::$options
			);
			
			return $credentials;
		}
	}
?>