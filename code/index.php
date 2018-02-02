<?php
	include("data_retriever.php") ;
	
	$data_retriever = new Data_retriever();
	$members = $data_retriever->retrieve_members();
	
	foreach ($members as $member)
		print_r($member[1] . "<br/>");