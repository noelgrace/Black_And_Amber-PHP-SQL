<?php $page = 'bookings'; ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	

	
	<!-- Included to make the website responsive responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<META name="description" content="Kilkenny hurlers">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Content-Language" content="en-ie">
	<meta name="keywords" content="HTML, CSS, JavaScript, Richie Hogan, Kilkenny, Brian Cody, Hurling, All-Ireland, GAA">
	<meta name="author" content="Noel Grace">
		<title>Black & Amber - Bookings</title>
		
		
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
					<li class="active"><a href="bookings.php" data-toggle="tooltip" title="Book your tickets!" >Bookings</a></li>
					<li id="register"><a href="register.php" data-toggle="tooltip" title="Register with our site!" >Register</a></li>
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
			<h1>Book your seat!</h1>
		
		</div>	
		
		<div class="container theme-showcase" role="main">
	
			<div class="row">
			
			<p>Seats are readily available for all matches up to 24 hours beforehand. However due to a limited amount of seats available for certain matches you may need to book your seats early to avoid disappointment.</p>
			
			
			
			<h2>Make another Booking</h2>
				<div class="row">
				
		 
		 <div class="col-sm-6">
		 
		<br><br><br>
		
		<?php include 'connect.php'; 
		
			//save current username into currentUser variable
			$currentUser=$_SESSION['myusername'];
			
			//find out the userID of the current user
			$sql = "SELECT user_id FROM users WHERE username='$currentUser'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
			//save the userID in the userID variable
			$userID=($row['user_id']);
		?>
				
	  <form class="query-form" action="bookingAdded.php" name="queryForm" method="post">
        <label for="userID">Your User ID:</label>
        <input type="text" name="userID" class="form-control" placeholder="<?php echo $userID; ?>" autofocus readonly>
		
		<br>
		
		<label for="selectClass">Select Match:</label>
		<select class="form-control" id="selectMatch" name="selectMatch">		
		
		<?php include 'connect.php';
		
		
		$sql = "SELECT match_id, competition, date, time,teams, venue, referee
		FROM matches";
		
		
		
		$result = $conn->query($sql);
		
		while($row = $result->fetch_assoc())
				
		{
			echo "<option value='" . $row['match_id'] . "'>";
			echo $row['competition'] . ", " . $row['date'] . ", " .
			$row['time'] .", " . $row['teams'] . ", " .
			$row['venue'] .", " . $row['referee'];  
			 
		}
		?>
		
		</select> 
		
		<br>
		<br>
		
		<button class="btn btn-lg btn-success" type="submit">Create Booking</button>
		</form>
		<br>
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