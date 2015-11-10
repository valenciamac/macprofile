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
		$conn = new PDO("mysql:host=$host;dbname=u569767831_nativ",$username , $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$check = $conn->query("use myprofile");

		if(!$check)
		{
			$conn;
			$sql = "CREATE DATABASE myprofile";

			$success = $conn->exec($sql);

			if ($success)
			{
				echo "Database created successfully.<br>";
			}
			else
			{
				echo "Error creating database" . "<br>" . mysql_error() . "\n";
			}
		}
	}
	catch(PDOEXCEPTION $e)
	{
		echo $sql . "<br>" . $e->getMessage();
	}

	$conn = null;
?>