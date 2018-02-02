<?php
	include_once("./credentials.php");
	
	function retrieve_members(){
		
		$sql_sentence = "CALL am_discipline.retrieve_members();";
		$prepared = $connector->prepare($sql_sentence);
		$prepared->execute();
		$result = $prepared->fetchAll();
		
		return $result;
	}
?>