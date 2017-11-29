<?php
session_start();
?>
<?php
include'db.php';
if (isset($_POST['signup']))
{
	$institute = $_POST['institute'];
	$mail = $_POST['email'];
	$pass = $_POST['password'];
	$phone = $_POST['phone'];
	$passkey = $_POST['passkey'];

	$query = "SELECT * FROM `institute` WHERE institute='".$institute."' and email='".$mail."'";
	          $result = $conn->query($query);
	          $rows = mysqli_num_rows($result);
	    if($rows==1)
	    {
	    	header("location:signup.php? signupcheck=1");
	    }
	    else
	    {
			$sql = "INSERT INTO `institute` VALUES ('".$institute."','".$mail."','".$pass."','".$phone."','".$passkey."')";
			$res=$conn->query($sql);
			if($res)
			{
				header("location:login.php");
				if(! $retval )
				{
			  		die('Could not Sign Up. Try again later !' . mysql_error());
				}
			}
	}
}
$conn->close();
?>