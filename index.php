<!-- <!DOCTYPE html>
<html>
<head>
	<title>Welcome to my Portfolio</title>
	<link rel="stylesheet" type="text/css" href="css/mystyle.css
	">
</head>
<body>
	<div class="center">
		<h1>Site Under Construction</h1>
	</div>
</body>
</html> -->

<?php

	$host = "mysql.hostinger.ph";
	$username = "u569767831_markv";
	$password = "848501307";

	try
	{
		$conn = new PDO("mysql:host=$server;dbname=u569767831_nativ",$username , $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "CREATE DATABASE IF NOT EXISTS u569767831_nativ";

		$conn->exec($sql);
		echo "Database created successfully.<br>";
	}
	catch(PDOEXCEPTION $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;
?>