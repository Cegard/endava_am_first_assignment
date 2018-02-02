<?php include_once("./data_retriever.php") ?>

<html>
	<head>
		<title> first_assignment </title>
	</head>
	
	<body>
		<?php
			foreach (retrieve_members() as $member)
				print_r($member[1] . "<br/>");
		?>
	</body>
	
</html>