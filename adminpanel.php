
<?php
session_start();
$_SESSION["username"];
if(!$_SESSION["username"])
    {
      header("location:login.php");
    }

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FreeHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.cO" />

  

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
	<?php
	$check1 = $_GET['institutecheck'];
	$check2 = $_GET['institutecheckfail'];
	if(isset($check1))
	{
		echo '<script>';
		echo 'alert("Institue Deleted Sucessfull.")';
		echo '</script>';
	}
	if(isset($check2))
	{
		echo '<script>';
		echo 'alert("Institue Delete Failed.")';
		echo '</script>';
	}
	?>
	<header role="banner" id="fh5co-header">
		
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href=""><span>Online Examination Portal</span></a> 
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="pager" href="" data-nav-section="home"><span>Registered Institue</span></a></li>
						<li><a class="pager" href="" data-nav-section="about"><span>View Queries</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<section id="fh5co-home" data-section="home" style="background-image: url(images/full_image_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="text-wrap">
				<div class="text-inner">
						<div class="col-md-10 col-md-offset-1 to-animate">
							<h3  align="center"><b>Welcome, <?php echo $_SESSION["username"]; ?></b></h3>
							<div><ul class="pager">
    						<li><a class="jumbotron p" href="logout.php"><i><b style="color: black;
    						">Logout</b></i></a></li>
  								</ul>
  							</div>
							
							<div class="call-to-action">
								<div  style="border:px solid black; align:center; margin:0px auto;">
									<table class="table table-bordered"  align="left">
										<h1  align="center">LIST OF ALL INSTITUTE REGISTERED</h1><br>
										<?php
											include('db.php');
											$query="SELECT * FROM `institute`";
											$result=$conn->query($query);
											$no=mysqli_num_rows($result);
											for ($i=0;$i<$no;$i++)
											{ 
												$j=$i+1;
												$row = mysqli_fetch_array( $result );
												$email=$row['email'];
												echo "<tr><td>$j</td><td>$email</td><td><form action='deleteinstitute.php' method='post' align='center'>
												<input type='hidden' value='".$email."'name='email'>
												<button type='submit' class='btn btn-danger btn-sm'>Delete</button>
												</form>
							 					</td></tr><br>";
							 				}
										?>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="fh5co-about" data-section="about">
		<div class="container">

			<div class="row">
				<div class="col-md-5">
					<h1  align="center">LIST OF ALL ENQUIRIES</h1><br>
					<div  style="border:px solid black; align:center; margin:0px auto;">
						<table class="table table-bordered"  align="center">
							<?php
								require('db.php');
								$query="SELECT * FROM `enquiry`";
								$result=$conn->query($query);
								$no=mysqli_num_rows($result);

								
									for ($i=0;$i<$no;$i++)
										{ 
											$j=$i+1;
											$row = mysqli_fetch_array( $result );
											$email=$row['email'];
											$name=$row['Name'];
											$message=$row['message'];
											echo "<tr><td>$j</td><td>$name</td><td>$email</td><td>$message</td></tr><br>";
							 			}
							?>
						</table>
					</div>
				</div>
			</div>

		</div>
	</section>	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Owl Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

