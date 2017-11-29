<?php
//load the database configuration file
include 'db.php';
session_start();
$_SESSION["username"];
if(!$_SESSION["username"])
    {
      header("location:login.php");
      
    }
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Students data has been inserted successfully.';
            break;
        case 'err':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusMsgClass = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusMsgClass = '';
            $statusMsg = '';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
    .panel-heading a{float: right;}
    #importFrm{margin-bottom: 20px;display: none;}
    #importFrm input[type=file] {display: inline;}
  </style>
</head>
<body>

<div class="container">
    
    <?php if(!empty($statusMsg)){
        echo '<div class="alert '.$statusMsgClass.'">'.$statusMsg.'</div>';
    } ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            Students list
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Add Students</a>
        </div>
        <div class="panel-body">
            <form action="importstudentData1.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>User</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Branch</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //get rows query
                    $query1 = $conn->query("SELECT institute FROM institute where email='".$_SESSION['username']."' ");
                    $row1 = $query1->fetch_assoc();
                    $inst=$row1['institute'];
                    $query = $conn->query("SELECT * FROM login where institute='".$inst."' ORDER BY id ASC");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){
                        ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['user']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo ($row['password']); ?></td>
                      <td><?php echo ($row['branch']); ?></td>
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="5">No student(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>