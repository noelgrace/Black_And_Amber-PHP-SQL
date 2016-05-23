<?php $page = 'register'; ?>

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
		<title>Black & Amber - Registration Complete</title>
		
		
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
					<li class="active"><a href="register.php" data-toggle="tooltip" title="Register with our site!" >Register</a></li>
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
			<h1>Registration Complete!</h1>
		
		</div>	
		
		<div class="container theme-showcase" role="main">
	
			<div class="row">
			
			<p>Welcome new users. Thanks for taking a few moments to register for our site. Now that registration is complete you can login and book seats at any of the upcoming fixtures available on the matches page. Best of luck and we hope you enjoy using our site.
			
			
			
			<h2>Login</h2>
				<div class="row">
				
		 
		 <div class="col-sm-6">
		 
		<br><br><br>
			
		<!-- Add your PHP here -->
		<?php include 'connect.php';
		$sql= "INSERT INTO users (username, firstname, lastname, email, password)
				VALUES('$_REQUEST[inputUsername]','$_REQUEST[inputFirstName]',
				'$_REQUEST[inputLastName]', '$_REQUEST[inputEmail]',
				'$_REQUEST[inputPassword]')";
				
		if ($conn->query($sql) === TRUE) {
			echo "You can now <a href='login.php'>log in</a>.";
		} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
		}
		?>
	  
				
		
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