
<?php

	include('db.php');
	session_start();
	if(isset($_POST['submit']))// If form submitted,check validation role
	{	
		$email = $_POST['email']; 
		$password = $_POST['password'];
		$role = $_POST['role'];
		$_SESSION["username"] = $email;
		
		//Checking is user existing in the database or not
		
		if ($role=="ADMINISTRATOR")
		{
			$query = "SELECT * FROM `admin` WHERE email='".$email."' and password='".$password."'";

			

			$result = $conn->query($query);		
			$rows = mysqli_num_rows($result);
			if($rows>=1)
			{
			
				header("Location: adminpanel.php"); 
			}
			else
			{
			header('Location:login.php? logincheck=1');
			}
		}
		else if($role=="INSTITUTE")
		{	

			$query = "SELECT * FROM `institute` WHERE email='$email' and password='".$password."'";

			$result = $conn->query($query);
		
			$rows = mysqli_num_rows($result);
			
			if($rows >= 1)
			{
			

				header("Location: institutepanel.php"); 
			}
			else
			{
			header('Location:login.php? logincheck=1"');
			}
		}
	}
	else
{
header('Location:login.php');
}
?>
		