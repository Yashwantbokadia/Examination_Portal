
<?php
session_start();
$_SESSION["username"];
if(!$_SESSION["username"])
    {
      header("location:login.php");
      
    }
//load the database configuration file
include 'db.php';

if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusMsgClass = 'alert-success';
            $statusMsg = 'Question Paper Uploaded successfully.';
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
  <title>Import Question Paper</title>
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
             <div class="panel-heading">
            Upload New Paper
            <a href="javascript:void(0);" onclick="$('#importFrm').slideToggle();">Upload Question Paper</a>
        </div>
       
        <div class="panel-body">
            <form action="importquesbank.php" method="post" enctype="multipart/form-data" id="importFrm">
                <input type="file" name="file" />
                <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
            </form>
            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th>Id</th>
                      <th>Question</th>
                      <th>Option A</th>
                      <th>Option B</th>
                      <th>Option C</th>
                      <th>Option D</th>
                      <th>Answer</th>
                      <th>Passkey</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //get rows query
                    $query = $conn->query("SELECT * FROM exam1 ORDER BY id ");
                    if($query->num_rows > 0){ 
                        while($row = $query->fetch_assoc()){
                        ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['ques']; ?></td>
                      <td><?php echo $row['option_a']; ?></td>
                      <td><?php echo $row['option_b']; ?></td>
                      <td><?php echo $row['option_c']; ?></td>
                      <td><?php echo $row['option_d']; ?></td>
                      <td><?php echo $row['answer']; ?></td>
                      <td><?php echo $row['passkey']; ?></td>
                      
                    </tr>
                    <?php } }else{ ?>
                    <tr><td colspan="9">No question(s) found.....</td></tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>