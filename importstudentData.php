<?php
session_start();
include 'db.php';
$mail  = $_SESSION["username"];
$query = "SELECT institute FROM institute WHERE email =  '$mail'";
$result = $db->query($query);
$row = mysqli_fetch_array($result);
?> 
<?php
//load the database configuration file
include 'db.php';
if(isset($_POST['importSubmit'])){
    
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
                $prevQuery = "SELECT id FROM `".$row['institute']."` WHERE email = '".$line[3]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE `".$row['institute']."` SET id = '".$line[0]."', name = '".$line[1]."', rollno = '".$line[2]."', email = '".$line[3]."', password = '".$line[4]."', branch = '".$line[5]."' WHERE email = '".$line[3]."'");
                }else{
                    //insert member data into database
                    $db->query("INSERT INTO `".$row['institute']."`  VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."')");
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
header("Location: importstudentData1.php".$qstring);