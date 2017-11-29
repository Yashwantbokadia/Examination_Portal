<?php
	$email=$_POST['email'];
	require('db.php');
	echo"$email";
	$query="DELETE  FROM `institute` WHERE  email ='".$email."'";
	$sql=$conn->query($query);
	if($sql)
	{
		header("location:adminpanel.php? institutecheck=1");
	}
	else
	{
		header("location:adminpanel.php? institutecheckfail=1");
	}

?>