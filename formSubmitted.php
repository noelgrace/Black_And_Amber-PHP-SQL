<?php $page = 'contact'; ?>

<?php
session_start();
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
		<title>Black & Amber - Contact</title>
		
		
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
                    <li class="active"><a href="contact.php" data-toggle="tooltip" title="Contact Page!">Contact</a></li>
					<li id="bookings"><a href="bookings.php" data-toggle="tooltip" title="Book your tickets!" >Bookings</a></li>
					<li id="register"><a href="registration.php" data-toggle="tooltip" title="Register with our site!" >Register</a></li>
					<li id="login"><a href="login.php" data-toggle="tooltip" title="Sign in here!" >Login</a></li>
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
			<h1>Thank you for your query!</h1>
		
		</div>	
		
		<div class="container theme-showcase" role="main">
	
			<div class="row">
			
			<p>We endeavour to respond to all queries immediately. However this is not always possible due to limited resources at times but rest assured we will reply to you as soon as is possible or else we will reply to all queries within 24 hours. It is our promise that <em>We will get back to you as soon as possible.</em>
			
			
			
			<h2>Details of Your Query</h2>
				
				<div class="row">
				
		 
		 <div class="col-sm-6">
		 
		<?php 
		  if(isset($_REQUEST['newsletter'])) 
		    $newsletter = "yes"; 
			else $newsletter = "no"; 
		?>
		
		<?php include 'connect.php'; 
		
		$sql="INSERT INTO queries (first_name, last_name, email, query)
		VALUES('$_REQUEST[inputFirstName]','$_REQUEST[inputLastName]',
		'$_REQUEST[inputEmail]','$_REQUEST[inputQuery]')";

		if ($conn->query($sql) === TRUE) {
			echo "<h4>Your query has been saved! </h4>";
		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		?>
		
		<h4>Confirmation: here are the details you entered:</h4>
		
		<p>
			First Name:<?php echo $_REQUEST["inputFirstName"]; ?><br />
			Last Name:<?php echo $_REQUEST["inputLastName"]; ?><br />
			Email:<?php echo $_REQUEST["inputEmail"]; ?><br />
			Query:<?php echo $_REQUEST["inputQuery"]; ?><br /><br />
			Date: <?php echo "Today is " . date("d/m/Y") . "<br>"; ?>
			Time: <?php  echo "The time is " . date("h:i:sa"); ?><br />
			
		</p>

	 </div>
	</div>
	  
    </div> 
		
		
		
		
			</div>
		</div>
		</div>
		</div>
		
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