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
                //check whether member already exists in database with same question
                $prevQuery = "SELECT id FROM exam1 WHERE ques = '".$line[0]."'";
                $prevResult = $conn->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $conn->query("UPDATE exam1 SET option_a = '".$line[1]."', option_b = '".$line[2]."', option_c = '".$line[3]."', option_d = '".$line[4]."', answer = '".$line[5]."' WHERE ques = '".$line[0]."'");
                }else{
                    //insert member data into database
                    $conn->query("INSERT INTO exam1 (ques,option_a,option_b,option_c,option_d,answer) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."','".$line[5]."')");
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
header("Location: importquesbank1.php".$qstring);
?>