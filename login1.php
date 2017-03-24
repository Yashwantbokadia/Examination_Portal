<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript"></script>
  <title>Login</title>
</head>
<body>
<?php
  session_start();
include ("db.php");
  //echo "hie";
  if (isset($_POST['login1']))// If form submitted, insert values into the database.
  {
    $uname = $_POST['email']; 
    $pass = $_POST['password'];
    $passkey = $_POST['Passkey'];
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `login` WHERE email='".$uname."' and password='".$pass."'";
    $result = mysql_query($query) or die(mysql_error());
    $rows = mysql_num_rows($result);
    if($rows>=1)
    header("location:dashboard.php");
    else
    {
      header("location:login2.php? logincheck=1");
    }
  }
    ?>
</body>
</html>
      
