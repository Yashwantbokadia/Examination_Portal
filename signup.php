<?php
include'db.php';
$institute = $_POST['institute'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];


	

$sql = "INSERT INTO `institute` VALUES ('".$institute."','".$mail."','".$pass."','".$phone."')";
$res=mysql_query($sql);
if($res)
{
	$retval = mysql_query("CREATE TABLE ".$institute." (".
".id VARCHAR(30) ,".
".name VARCHAR(30) NOT NULL,".
".rollno VARCHAR(15),".
".email VARCHAR(50),".
".password VARCHAR(20),".
".branch TEXT(5)
)");

header("location:login.html");
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
}
$conn->close();
?>