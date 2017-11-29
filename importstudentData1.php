<?php
//load the database configuration file
include 'db.php';
session_start();
$_SESSION["username"];
if(!$_SESSION["username"])
    {
      header("location:login.php");
      
    }
if(isset($_POST['importSubmit'])){
    $query1 = $conn->query("SELECT institute FROM institute where email='".$_SESSION['username']."' ");
$row1 = $query1->fetch_assoc();
$inst=$row1['institute'];
    //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prevQuery = "SELECT id FROM login WHERE email = '".$line[3]."'";
                $prevResult = $conn->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $conn->query("UPDATE login SET name = '".$line[1]."', user = '".$line[2]."', password = '".$line[4]."', branch = '".$line[5]."', institute = '".$inst."' WHERE email = '".$line[3]."'");
                }else{
                    //insert member data into database
                    $conn->query("INSERT INTO login (name,user,email,password,branch,institute) VALUES ('".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."','".$inst."')");
                }
            }
            
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
header("Location: importstudentData.php".$qstring);