<?php
session_start();
$_SESSION["emailid"];
if(!$_SESSION["emailid"])
    {
      header("location:studentlogin.php");
      
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
				
				<div class="container well scroll container-fluid">
<div class="call-to-action">
<form action="score.php" method="post" name="exam">
								<div>
									
										
										<?php
											include('db.php');
											$query="SELECT * FROM `exam1` ";
											$result=$conn->query($query);
											$no=mysqli_num_rows($result);
											


											while($row = mysqli_fetch_array( $result ))
											{ 
												
												$id=$row['id'];
												$question=$row['ques'];
												$opta=$row['option_a'];
												$optb=$row['option_b'];
												$optc=$row['option_c'];
												$optd=$row['option_d'];
												echo "<table>
												<tr>
												<td><b>$id</b></td>
												<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$question</td>
												</tr>
												</table>

												<table class='table table-borderless text-left'>
												<tr class='table table-borderless' align='left'>
												<html>
												<td>A.&nbsp;&nbsp;<input type='radio' name='$id' value='a'></button>&nbsp;&nbsp;$opta</td>
												<td>C.&nbsp;&nbsp;<input type='radio' name='$id' value='c'></button>&nbsp;&nbsp;$optc</td>
												</tr>
												<tr class='table table-borderless text-left'>
												<td>B.&nbsp;&nbsp;<input type='radio' name='$id' value='b'></button>&nbsp;&nbsp;$optb</td>
												<td>D.&nbsp;&nbsp;<input type='radio' name='$id' value='d'></button>&nbsp;&nbsp;$optd</td>
												</tr>
												</html>

												<br>";
							 				}
										?>
									</table>
								</div>

									<div><center><input type="Submit" name="Submit" class=""></center>
<script>
var upgradeTime = 300;
var seconds = upgradeTime;
function timer() 
{
    var days        = Math.floor(seconds/24/60/60);
    var hoursLeft   = Math.floor((seconds) - (days*86400));
    var hours       = Math.floor(hoursLeft/3600);
    var minutesLeft = Math.floor((hoursLeft) - (hours*3600));
    var minutes     = Math.floor(minutesLeft/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds; 
    }
     if (minutes < 10) {
        minutes = "0" + minutes; 
    }
    if (hours < 10) {
        hours = "0" + hours; 
    }
    document.getElementById('countdown').innerHTML =  hours + ":" + minutes + ":" + remainingSeconds;
    if (seconds == 0) 
    {
        clearInterval(countdownTimer);
       var x = document.getElementById("countdown").innerHTML;
      if(x)
      {
      	document.exam.submit();
      }
    } 
    else 
    {
        seconds--;
    }
}
var countdownTimer = setInterval('timer()', 1000);
</script>
</form>

  
   </ul></div>
								</div>
							</div>
				</div>