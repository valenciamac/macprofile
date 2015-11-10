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

	$link = mysql_connect('u569767831_nativ','u569767831_markv', '848501307');
	if (!$link){
		die('could not connect to database' . mysql_error());
	}

	$db_selected = my_sql_select_db('myprofile', $link);

	if (!$db_selected)
	{
		$sql = 'CREATE DATABASE myprofile';

		if (mysql_query($sql, $link))
		{
			echo "Database my_db created successfully\n";
		}
		else
		{
			echo 'Error creating database' . mysql_error() . "\n";
		}
	}
	mysql_close($link);
?>