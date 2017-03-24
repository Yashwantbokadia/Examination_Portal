<?php
	require("db.php");
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$query = "INSERT INTO `enquiry` (Name,email,message)
			VALUES ('$name','$email','$message');";
	$enquiry=mysql_query($query);
	header("location:index.html");
?>