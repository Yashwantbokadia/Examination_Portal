<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oep";
$institute = $_POST['institute'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$passkey = $_POST['Passkey'];

	$conn = mysql_connect('localhost', 'root', '');
	if (!$conn)
	{
		die("Database Connection Failed" . mysql_error());
	}
	$select_db = mysql_select_db('oep');
	if (!$select_db)
	{
		die("Database Selection Failed" . mysql_error());
	}

$sql = "INSERT INTO `institute` VALUES ('".$institute."','".$mail."','".$pass."','".$phone."','".$passkey."')";
 mysql_select_db( 'oep' );
$retval = mysql_query("CREATE TABLE ".$institute." (".
".id VARCHAR(30) ,".
".name VARCHAR(30) NOT NULL,".
".rollno VARCHAR(15),".
".email VARCHAR(50),".
".password VARCHAR(20),".
".branch TEXT(5)
)",$conn);
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
header("location:dashboard.php");
$conn->close();
?>