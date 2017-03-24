<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oep";
$institute = $_POST['institute'];
$mail = $_POST['email'];
$pass = $_POST['password'];
$phone = $_POST['phone'];
$passkey = $_POST['Passkey'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `institute` VALUES ('".$institute."','".$mail."','".$pass."','".$phone."','".$passkey."')";

$sql1 = "CREATE TABLE ".$institute." (
id VARCHAR(30) AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
rollno VARCHAR(15),
email VARCHAR(50),
password VARCHAR(20),
branch TEXT(5)
)";


if ($conn->query($sql1) === TRUE) {
	   echo "created sucessfully";
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
?>