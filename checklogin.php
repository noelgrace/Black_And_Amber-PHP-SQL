<?php $page = 'login'; ?>

<?php
session_start();
?>

<?php

		// Include connection details
		include 'connect.php'; 

		// Save username and password received from form
		$myusername=$_POST['myusername'];
		$mypassword=$_POST['mypassword'];

		// To protect against MySQL injection 
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
		$myusername = mysqli_real_escape_string($conn, $myusername);
		$mypassword = mysqli_real_escape_string($conn, $mypassword);
		
		// Select matching member from table
		$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
		$result = $conn->query($sql);

		// Use mysql_num_row to count rows in result 
		$count=$result->num_rows;

		// If username and password matched, there should be 1 result only
		if($count==1){

		// Start session and create variables, redirect to login_success.php
		session_start();
		$_SESSION["myusername"] = $myusername;
		$_SESSION["mypassword"] = $mypassword;
		header("location:login_success.php");
		}

		
		// If username and password did not match, display this message
		else {
		echo "Sorry you have entered a wrong username or password. Click the link below to take you back to re-enter your login details <br>";
		echo ("<a href='login.php'>Log In</a>");
		}
		?>

<!DOCTYPE html>
<html lang="en">
	<head>
	
<script language = "javascript" type = "text/javascript">
<!-- Start hiding JavaScript statements

//submit message	
 function DisplayMessage(msgInput){
 document.getElementById('Msg').innerHTML = msgInput;
	}
	
//Link A
 function DisplayA(msgInput) {
 document.getElementById('firstLink').innerHTML = msgInput;
 }
 
 //Link B
 function DisplayB(msgInput) {
 document.getElementById('secondLink').innerHTML = msgInput;
 }
 
//Link C
 function DisplayC(msgInput) {
 document.getElementById('thirdLink').innerHTML = msgInput;
 }
 
 //Link D
 function DisplayD(msgInput) {
 document.getElementById('fourthLink').innerHTML = msgInput;
 }
 
 //Link E
 function DisplayE(msgInput) {
 document.getElementById('fifthLink').innerHTML = msgInput;
 }
 
 //Link F
 function DisplayF(msgInput) {
 document.getElementById('sixthLink').innerHTML = msgInput;
 }
 
 //Link G
 function DisplayG(msgInput) {
 document.getElementById('seventhLink').innerHTML = msgInput;
 }
 
 //Link H
 function DisplayH(msgInput) {
 document.getElementById('eighthLink').innerHTML = msgInput;
 }
 
 //Link I
 function DisplayI(msgInput) {
 document.getElementById('ninthLink').innerHTML = msgInput;
 }
 
 //Link J
 function DisplayJ(msgInput) {
 document.getElementById('tenthLink').innerHTML = msgInput;
 }	
	// End hiding JavaScript statements -->
	</script>
	
	<!-- Included to make the website responsive responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<META name="description" content="Kilkenny hurlers">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Content-Language" content="en-ie">
	<meta name="keywords" content="HTML, CSS, JavaScript, Richie Hogan, Kilkenny, Brian Cody, Hurling, All-Ireland, GAA">
	<meta name="author" content="Noel Grace">
		<title>Black & Amber - Unsuccessful Login</title>
		
		
		<!-- Original styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap theme -->
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		

		<!-- Custom styles for this template -->
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap-social.css" rel="stylesheet">
		
		<!-- Custom styles for form -->
    <link href="query-form.css" rel="stylesheet">
	
	</head>

	<body>
	
			
	
		<div id="header">
		<div class="container">
		<div class="row">
		
		<!--logo 1 -->
		<div class="col-sm-6 col-md-3">
			<figure class="logo">
					<img class="logo" src="logos/logo.png" alt="crest" title="crest" />
					<figcaption class="logo">Kilkenny</figcaption>
			</figure>
		</div>
		
		<!--logo 2 -->
		<div class="col-sm-6 col-md-3">
			<figure class="logo">
					<img class="logo" src="logos/GAA_Crest.jpg" alt="gaa crest" title="gaa crest" />
					<figcaption class="logo">GAA Crest</figcaption>
			</figure>
		</div>
		
		<!--logo 3 -->
		<div class="col-sm-6 col-md-3">
			<figure class="logo">
					<img class="logo" src="logos/jersey_image.jpe" alt="kilkenny jersey" title="gaa crest" />
					<figcaption class="logo">Kilkenny Jersey</figcaption>
			</figure>
		</div>
		
		<!--logo 4 -->
		<div class="col-sm-6 col-md-3">
			<figure class="logo">
					<img class="logo" src="logos/leinster_crest.jpe" alt="Leinster Crest" title="gaa crest" />
					<figcaption class="logo">Leinster Crest</figcaption>
			</figure>
		</div>	
		</div><br>
		
		
		<div id="navigation">
		<nav class="navbar navbar-inverse navbar" role="navigation">
            <div class="container">
                <ul class="nav navbar-nav">	
                    
					<li id="home"><a href="index.php" data-toggle="tooltip" title="Home Page!">Home</a></li>
                    <li id="manager"><a href="manager.php" data-toggle="tooltip" title="Brian Cody's Page!">Brian Cody</a>  </li>
					<li id="player"><a href="richie.php" data-toggle="tooltip" title="Richie Hogan's Page!">Richie Hogan</a>  </li>
                    <li id="team"><a href="kilkenny.php" data-toggle="tooltip" title="Visit the Kilkenny Team Page!" >Kilkenny Team</a></li>
					<li id="matches"><a href="matches.php" data-toggle="tooltip" title="Matches!" >Matches</a></li>
                    <li id="contact"><a href="contact.php" data-toggle="tooltip" title="Contact Page!">Contact</a></li>
					<li id="bookings"><a href="bookings.php" data-toggle="tooltip" title="Book your tickets!" >Bookings</a></li>
					<li id="register"><a href="register.php" data-toggle="tooltip" title="Register with our site!" >Register</a></li>
					<li class="active"><a href="login.php" data-toggle="tooltip" title="Sign in here!" >Login</a></li>
                </ul>
            </div>
        </nav> 

<!--		<div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
        </div> -->
		</div>
		
				
			
		
			<header class="jumbotron">
			<h1>Please Try Logging In Again!</h1>
		
		</div>	
		
		<div class="container theme-showcase" role="main">
	
			<div class="row">
			
			
			
			
			
			
			
			
				<div class="row">
				
		 
		 <div class="col-sm-6">
		 
		<br><br><br>

		
		
		</div>
		
			
		
		 	
			
			</div>
		</div>
		</div>

		
				<br><br><br><br>
				
				
				
				</div>
				</div>
				
		
		
		
		
		
			<div class="col-sm-12 col-md-4">
			<div class="article column3">
			
			<br>


 
 </ul>
				
			</div>
			</div>
				
			</div>
			<br />
			 			
			<br />
		
		</div>
		
		<div id="footer">
		<div class="col-sm-12 col-md-12">
				<p><a href="http://jigsaw.w3.org/css-validator/check/referer">
				<img style="border:0;width:88px;height:31px"
				src="http://jigsaw.w3.org/css-validator/images/vcss"
				alt="Valid CSS!" />
				</a></p>
			
				&copy; Copyright 2016 Noel Grace
		</div>
		</div>

<!--	Include	all	compiled	plugins	(below),	or	include	individual	files	
as	needed	-->	

<script src="js/formVal.js"></script>
	
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/
jquery.min.js"></script>

<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>	

<script	src="js/bootstrap.min.js"></script>

<script src="js/docs.min.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

	</body>
</html>