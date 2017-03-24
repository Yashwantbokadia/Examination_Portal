<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oep";
$institute = $_POST['institute'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `institute` VALUES ('".$uname."','".$mail."','".$pass."','".$phone."','".$institute."')";

$sql = "CREATE TABLE student (

usr VARCHAR(30) NOT NULL,
pwd VARCHAR(30) NOT NULL,
mailid VARCHAR(50),
reg_date TIMESTAMP
)";


if ($conn->query($sql) === TRUE) {
	   header("Location:dashboard.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>