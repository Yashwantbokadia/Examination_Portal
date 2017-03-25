
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
							<li><h2><span >Welcome</span></h2></li>
						</ul>
					</div>
				</div>
				</nav>
				<div class="text-right">
				<h2><span id="countdown" class="timer" ></span></h2>
				</div>
				<div class="container well scrol" style="background-color:white,">
					                                        <b>  <center>
					                                          <h1 style="color: black"> Exam Instructions for Students</h1>
					                                          <br> 

<h2 class="text-left" style="color: black">Exam information:</h2></b>
<h4 class="text-left" style="color: black">
•	Each question is of 1 mark.
<br><br><br>
•	Total time allotted is 2 hours 30 min.
<br><br><br>
•	After completing the exam hit the submit button to submit.
<br><br><br>
•	In case of connection lost contact invigilator immediately. 
<br><br><br>
•	Do not bring any unauthorised material (e.g. written notes, notes in dictionaries, paper, and sticky tape eraser). Pencil cases and &nbsp;&nbsp;glasses cases must not be taken to your desks. These will be checked and confiscated. 
<br><br><br>
•	You are allowed to bring tissue Paper and a drink (but not food) into the exam. 
<br><br><br>
•	Ensure that you use the washroom before arriving for your exam as you will not be permitted to leave during the first hour. In the case  &nbsp; of listening and oral exams you may not be allowed to leave during the exam. 

				</center></div>
				<div><ul class="pager">
  
    <li><a class="jumbotron" href="dashboard.php" style="color: black;"><b>Start Exam</b></a></li>
  </ul></div>
<script>
var upgradeTime = 120;
var seconds = upgradeTime;
function timer() {
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
    if (seconds == 0) {
        clearInterval(countdownTimer);
      var x = document.getElementById("countdown").innerHTML;
      if(x)
      window.location.href = ('dashboard.php');
    } else {
        seconds--;
    }
}
var countdownTimer = setInterval('timer()', 1000);
</script>
