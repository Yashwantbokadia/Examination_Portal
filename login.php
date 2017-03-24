<?php

	include('db.php');
	
	session_start();

	if(isset($_POST['email']))// If form submitted, insert values into the database.
	{
		$email = $_POST['email']; 
		$password = $_POST['password'];
		$role = $_POST['role'];
		//$username = stripslashes($email);
		//$username = mysql_real_escape_string($email); 	
		//$password = stripslashes($password);
		//$password = mysql_real_escape_string($password);
		//Checking is user existing in the database or not
		echo "This is $role";
		
		if ($role=="ADMINISTRATOR")
		{
			$query = "SELECT * FROM `admin` WHERE email='$email' and password='".md5($password)."'";

			$result = mysql_query($query) or die(mysql_error());
		
			$rows = mysql_num_rows($result);

			if($rows==1)
			{
			echo"hello";
				$_SESSION['email'] = $email;
				header("Location: adminpanel.php"); // Redirect user to index.php
			}
			else
			{
			echo"something is wrong1";
			}
		}
		else if($role=="INSTITUTE")
		{	

			$query = "SELECT * FROM `institute` WHERE email='$email' and password='".md5($password)."'";

			$result = mysql_query($query) or die(mysql_error());
		
			$rows = mysql_num_rows($result);
			echo $rows;
			if($rows == 1)
			{
			echo"hello";
				$_SESSION['email'] = $email;
				header("Location: institutepanel.php"); // Redirect user to index.php
			}
			else
			{
			echo"something is wrong2";
			}
		}
	}
?>
			