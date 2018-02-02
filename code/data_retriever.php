<?php
	include("connection.php");


	class Data_Retriever{
		
		
		public function retrieve_members(){
			$connection = new Connection();
			$sql_sentence = "CALL am_discipline.retrieve_members();";
			$prepared = $connection->createConnection()->prepare($sql_sentence);
			$prepared->execute();
			$result = $prepared->fetchAll();
			
			return $result;
		}
	}
?>