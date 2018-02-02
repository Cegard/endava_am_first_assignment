<?php
	# fill with the needed information.
	$domain_server = "mysql:host=localhost;dbname=am_discipline";
	$user_name = "cegard";
	$password = "#a1B2c3D4";
	$options = array(
		PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	);
	
	$connector = new PDO($domain_server, $user_name, $password, $options);
?>