<?php
include 'db.php';
session_start();
$_SESSION["emailid"];
if(!$_SESSION["emailid"])
    {
      header("location:studentlogin.php");
      
    }
$query="SELECT  FROM `exam1` ";
error_reporting(0);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.cO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Prata" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<header role="banner" id="fh5co-header">
			
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="index.html"><span >Online Examination Portal</span></a> 
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><h2><span >Welcome , <?php echo $_SESSION["emailid"]; ?></span></h2></li>
						</ul>
					</div>
				</div>
				</nav>
				<?php
$USER=$_SESSION["emailid"];
				if(isset($_POST['Submit']))
				{  
					$query="SELECT * FROM `exam1` ";
					$result=$conn->query($query);
					$no=mysqli_num_rows($result);
					$count=0;
					for($i=1 , $row=0 ; $i<$no , $row = mysqli_fetch_array( $result ) ; $i++ , $row++)
					{ 			
						$answer[$i-1]=$_POST[$i];								
						$answercheck=$row['answer'];
						if ($answer[$i-1]==$answercheck) 
							{
								$count=$count+1;
							}
				}
				
				$query1="UPDATE login SET score=".$count." WHERE user='".$USER."'";
				$result1=$conn->query($query1);
				$per=($count*100)/$no;
				echo "<br>";
				echo("<center><div class=container container-fluid>
					<div class=jumbotron>
					You Have Scored <b>$count</b> marks out of <b>$no</b>
					<br>
					");
				if($per<35)
				{	
					echo "<br>";
					echo "You are Failed.Work Hard..!";
				}
				else if($per>=35 && $per<75)
				{
					echo "<br>";
					echo "Congratulations!You are passed..";
				}
				else if($per>=75)
				{
					echo "<br>";
					echo "Distinction...!";
				}
				echo "</div>
				</div></center>";

}
else
{
	$query="SELECT * FROM `exam1` ";
					$result=$conn->query($query);
					$no=mysqli_num_rows($result);
					$count=0;
					for($i=1 , $row=0 ; $i<$no , $row = mysqli_fetch_array( $result ) ; $i++ , $row++)
					{ 			
						$answer[$i-1]=$_POST[$i];								
						$answercheck=$row['answer'];
						if ($answer[$i-1]==$answercheck) 
							{
								$count=$count+1;
							}
				}
				$query1="UPDATE login SET score=".$count." WHERE user='".$USER."'";
				$result1=$conn->query($query1);
				$per=($count*100)/$no;
				echo "<br>";
				echo("<center><div class=container container-fluid>
					<div class=jumbotron>
					You Have Scored <b>$count</b> marks out of <b>$no</b>
					<br>
					");
				if($per<35)
				{	
					echo "<br>";
					echo "You are Failed.Work Hard..!";
				}
				else if($per>=35 && $per<75)
				{
					echo "<br>";
					echo "Congratulations!You are passed..";
				}
				else if($per>=75)
				{
					echo "<br>";
					echo "Distinction...!";
				}
				echo "</div>
				</div></center>";
}
?>
				</center></div>
				<div><ul class="pager">
    <li><a class="jumbotron" href="logout.php" style="color: black;"><b>Logout</b></a></li>
  </ul></div>

