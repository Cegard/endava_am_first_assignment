<?php include_once("./data_retriever.php") ;



			foreach (retrieve_members() as $member)
				print_r($member[1] . "<br/>");