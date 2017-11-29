<?php
include ("db.php");
  session_start();
  //echo "hie";
  if (isset($_POST['login1']))// If form submitted, insert values into the database.
  {
      
        $uname = $_POST['user']; 
          $pass = $_POST['password'];
          //Checking is user existing in the database or not
          $query = "SELECT * FROM `login` WHERE user='".$uname."' and password='".$pass."'";
          $result = $conn->query($query);
          $rows = mysqli_num_rows($result);
          $_SESSION["emailid"] = $uname;
  if($rows>=1)
  {
    header("location:dashboard.php");
  }
  else
    {
      header("location:studentlogin.php? logincheck=1");
    }
  }
else
{
  header("location:studentlogin.php");
}  
    ?>
