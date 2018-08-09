<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
	$userName = $_GET["name"];
	$userEmail = $_GET["email"];
	$userComment = $_GET["comment"];
	$bool_x="true";
	
	
		echo "Hello ".$userName." !<br>Your email is : ".$userEmail." .<br>Your comment is : ".$userComment." <br> ";
	
	
	?>
	
</body>
</html>