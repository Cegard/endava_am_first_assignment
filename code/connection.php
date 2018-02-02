<?php
	include_once("./access_credentials.php");


	class Connection {
		
		public $connector;
		
		
		public function createConnection(){
			$credentials = Access_Credentials::get_access_credentials();
			
			return  new PDO($credentials["domain_server"], $credentials["user_name"],
							$credentials["password"], $credentials["options"]);
		}
}

?>