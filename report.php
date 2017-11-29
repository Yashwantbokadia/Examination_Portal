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
	<style>
table, th, td {
    border-collapse: collapse;
  	border-spacing: 0;
  	border-width: auto;
  	width: 100%;
  	padding-left: 0px;
  	font-style: italic;
  	font-weight: bold;
  	font-stretch: expanded;
  	font-family: 'Tangerine' ,serif;
  	font-size: 18px;
  	text-align: center;
}
</style>
		<header role="banner" id="fh5co-header">
			
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<!-- Mobile Toggle Menu Button -->
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
						<a class="navbar-brand" href="#"><span>Online Examination Portal</span></a> 
					</div>
					<div id="navbar" >
						<ul class="nav navbar-nav navbar-right">
							<li><h2>
							<span id="countdown" class="timer"></span></h2></li></div>
						</ul>
					</div>
				</div>
				</nav>
	<div class="jumbotron">
		<?php
session_start();
include 'db.php';
$_SESSION["username"];
$query1 = $conn->query("SELECT institute FROM institute where email='".$_SESSION['username']."' ");
$row1 = $query1->fetch_assoc();
$inst=strtoupper($row1['institute']);
echo "<h1><center>$inst</center></h1>";
if(!$_SESSION["username"])
    {
      header("location:login.php");
    }
else
{
	$query = $conn->query("SELECT * FROM login where institute='".$inst."' ORDER BY id ");
    if($query->num_rows > 0){ 
    	echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<th >ID</th>";
		echo "<th >NAME</th>";
		echo "<th >EMAIL</th>";
		echo "<th >BRANCH</th>";
		echo "<th >SCORE</th>";
		echo "</tr>";
		echo("</thead>");
		echo "</table>";              
    while($row = $query->fetch_assoc())
	{
		echo "<table>";
		echo "<thead>";
		echo "<tr>";
		echo "<td >".$row['id']."</td>";
		echo "<td style=text-align:left>".$row['name']."</td>";
		echo "<td style=text-align:left>".$row['email']."</td>";
		echo "<td style=text-align:left>".$row['branch']."</td>";
		echo "<td >".$row['score']."</td>";
		echo "</tr>";
		echo("</thead>");
		echo "</table>";              
	}
}
}
	?>
	<br>
	<div><ul class="pager">
    <li><a class="jumbotron" href="logout.php" style="color: black;"><b>Logout</b></a></li>
  </ul></div>
	</div>
	</header>
	</body>
	</html>


<?php
	require("fpdf.php");
?>

	