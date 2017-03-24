
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
	<header role="banner" id="fh5co-header">
		
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
					<a class="navbar-brand" href="index.html"><span>Online Examination Portal</span></a> 
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
						<li><a href="#" data-nav-section="about"><span>View Requests</span></a></li>
						<li><a href="#" data-nav-section="services"><span>View Schedule</span></a></li>
						<li><a href="#" data-nav-section="contact"><span>Generate Records</span></a></li>
						<li><a href="#"><span>Logout</span></a></li>
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
							<h1  align="center"><b>Welcome Admin.</b></h1><br><br>
							<div class="call-to-action">
								<div  style="border:px solid black; align:center; margin:0px auto;">
									<table class="table table-bordered"  align="left">
										<h1  align="center">LIST OF ALL INSTITUTE REGISTERED</h1><br>
										<?php
											include('db.php');
											$query="SELECT * FROM `institute`";
											$result=mysql_query($query);
											$no=mysql_num_rows($result);
											echo $no;


											for ($i=0;$i<$no;$i++)
											{ 
												$j=$i+1;
												$row = mysql_fetch_array( $result );
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
								$result=mysql_query($query);
								$no=mysql_num_rows($result);

								
									for ($i=0;$i<$no;$i++)
										{ 
											$j=$i+1;
											$row = mysql_fetch_array( $result );
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
	
	<section id="fh5co-services" data-section="services">
		<div class="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Your Upcoming Schedule</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">Here are the few features of the services which we provide you </h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="box-services">
							<i class="icon-shield to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Instant Result</h3>
								<p>We value your time.We provide you with the result as soon you comlete the test</p>
							</div>
						</div>

						<div class="box-services">
							<i class="icon-shield to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Less Chances Of Errors</h3>
								<p>In our fast and easy way of giving examination we take care of the mistakes also. There is very low chances of error in our checking process</p>
							</div>
						</div>
						<div class="box-services">
							<i class="icon-shield to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>Full report generated of your student</h3>
								<p>As an institution you will recive a full specified report of the test which you conduct with us </p>
							</div>
						</div>
						<div class="box-services">
							<i class="icon-shield to-animate-2"></i>
							<div class="fh5co-post to-animate">
								<h3>No additional cost for reciving all the above benefits</h3>
								<p>We cost you no additional amount to recive whole benefits of this site </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	

	<section id="fh5co-team" data-section="team">
		<div class="fh5co-team">
			<div class="container">
				<div class="row">
					<div class="col-md-12 section-heading text-center">
						<h2 class="to-animate">Meet The Developers</h2>
						<div class="row">
							<div class="col-md-8 col-md-offset-2 subtext">
								<h3 class="to-animate">The following site have been developed and maintained by the 4 students of techno NJR institute of technology udaipur</h3>
							</div>
						</div> 
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/person4.jpg" alt="Roger Garfield"></div>
							<h3>Aashi Joshi</h3>
							<span class="position">Develper</span>
							<p>A second year student of Information technology at Techno India NJR institute of technlogy was one of the Developer of this project</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/person2.jpg" alt="Roger Garfield"></div>
							<h3>Yashwant Bokadia</h3>
							<span class="position">Developer</span>
							<p>A second year student of Information technology at Techno India NJR institute of technlogy was one of the Developer of this project</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/person3.jpg" alt="Roger Garfield"></div>
							<h3>Vaibhav Lodha </h3>
							<span class="position">Developer</span>
							<p>A second year student of Computer Science at Techno India NJR institute of technlogy was one of the Developer of this project</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="team-box text-center to-animate-2">
							<div class="user"><img class="img-reponsive" src="images/person3.jpg" alt="Roger Garfield"></div>
							<h3>Himanshu Kotadia </h3>
							<span class="position">Developer</span>
							<p>A second year student of Computer Science at Techno India NJR institute of technlogy was one of the Developer of this project</p>
							<ul class="social-media">
								<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	

	<section id="fh5co-footer" data-section="contact" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4 to-animate">
					<h3 class="section-title">About Us</h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics.</p>
					<p class="copy-right">&copy; 2015 Legal Free Template. <br>All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a>
						Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a>
					</p>
				</div>

				<div class="col-md-4 to-animate">
					<h3 class="section-title">Our Address</h3>
					<ul class="contact-info">
						<li><i class="icon-map-marker"></i>Techno India NJR Institute of technology,Kaladwas Udaipur Rajasthan, India</li>
						<li><i class="icon-phone"></i>9783972424</li>
						<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
					</ul>
					<h3 class="section-title">Connect with Us</h3>
					<ul class="social-media">
						<li><a href="#" class="facebook"><i class="icon-facebook"></i></a></li>
						<li><a href="#" class="github"><i class="icon-github-alt"></i></a></li>
					</ul>
				</div>
				<div class="col-md-4 to-animate">
					<h3 class="section-title">Drop us a line</h3>
					<form class="contact-form">
						<div class="form-group">
							<label for="name" class="sr-only">Name</label>
							<input type="name" class="form-control" id="name" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label for="message" class="sr-only">Message</label>
							<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	
	<div id="map" class="fh5co-map"></div>

	
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

