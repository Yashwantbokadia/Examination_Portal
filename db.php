

<?php
//DB details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'oep';

//Create connection and select DB
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
$connection = mysql_connect('localhost', 'root', '');
if (!$connection)
	{
		die("Database Connection Failed" . mysql_error());
	}
	$select_db = mysql_select_db('oep');
	if (!$select_db)
	{
		die("Database Selection Failed" . mysql_error());
	}
if ($db->connect_error) {
    die("Unable to connect database: " . $db->connect_error);
}
?>
