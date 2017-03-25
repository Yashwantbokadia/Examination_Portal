<?php
session_start();
?>
<?php
include'db.php';
$institute = $_POST['institute'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];


	

$sql = "INSERT INTO `institute` VALUES ('".$institute."','".$mail."','".$pass."','".$phone."')";
$res=$db->query($sql);
if($res)
{
	$retval = $db->query("CREATE TABLE ".$institute." (".
".id VARCHAR(30) ,".
".name VARCHAR(30) NOT NULL,".
".rollno VARCHAR(15),".
".email VARCHAR(50),".
".password VARCHAR(20),".
".branch TEXT(5),".
".status INT(1)
)");

header("location:login.html");
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
}
$db->close();
?>