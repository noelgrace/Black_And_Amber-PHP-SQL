<?php $page = 'matches'; ?>

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	
<SCRIPT language = "javascript" type = "text/javascript">
 <!-- Start hiding JavaScript statements
 
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
 </SCRIPT>	
	
	<!-- Included to make the website responsive responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<META name="description" content="Kilkenny hurlers">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<meta http-equiv="Content-Language" content="en-ie">
	<meta name="keywords" content="HTML, CSS, JavaScript, Richie Hogan, Kilkenny, Brian Cody, Hurling, All-Ireland, GAA">
	<meta name="author" content="Noel Grace">
		<title>Black & Amber - Matches</title>
		
		
		<!-- Original styles for this template -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!-- Bootstrap theme -->
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/theme.css" rel="stylesheet">
		
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/bootstrap-social.css" rel="stylesheet">
		
		
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
					<li class="active"><a href="matches.php" data-toggle="tooltip" title="Matches!" >Matches</a></li>
                    <li id="contact"><a href="contact.php" data-toggle="tooltip" title="Contact Page!">Contact</a></li>
					<li id="bookings"><a href="bookings.php" data-toggle="tooltip" title="Book your tickets!" >Bookings</a></li>
					<li id="register"><a href="register.php" data-toggle="tooltip" title="Register with our site!" >Register</a></li>
					<li id="login"><a href="login.php" data-toggle="tooltip" title="Sign in here!" >Login</a></li>
                </ul>
            </div>
        </nav> 

		<div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
        </div>
		</div>
		
				
			
		
			<header class="jumbotron">
			<h1>Matches</h1>
		
		</div>	
		
		<div class="container theme-showcase" role="main">
	
			<div class="row">
		
			<p>Book your tickets for all Inter County hurling matches across all competitions and all levels through our site.  <em>Black and Amber</em> provides secure access to ticket bookings</p>
			
			<h2>Game Schedule</h2>
					
			<H4>Upcoming Fixtures</H4>
		
		
				
			<div class="row">
        <div class="col-md-6">
		
		<?php include 'connect.php';
		
		$sql = "SELECT competition, date, time, teams, venue, referee FROM matches where date='$_REQUEST[dateSelect]'"; 
		
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			echo
			"<table class='table'>
				<thead>
					<tr>
						<th>COMPETITION</th>
						<th>DATE</th>
						<th>TIME</th>
						<th>TEAMS</th>
						<th>VENUE</th>
						<th>REFEREE</th>
					</tr>
				</thead>
				<tbody>";
				
			while($row = $result->fetch_assoc())
				{
				echo "<tr>";
				echo "<td>" . $row['competition'] . "</td>";
				echo "<td>" . $row['date'] . "</td>";
				echo "<td>" . $row['time'] . "</td>";
				echo "<td>" . $row['teams'] . "</td>";
				echo "<td>" . $row['venue'] . "</td>";
				echo "<td>" . $row['referee'] . "</td>";
				echo "</tr>";
				}
		
			echo
			"</tbody>
			</table>";
			}
			else{
				echo "No matches found.";
				
				
			}
				
			$conn->close();
			?>
		
			<br><br><br><br/>
		
          </table>
		  <div class="row">
		<div class="col-md-6">
		  <H4>Results</H4>
		
		<div id='tablediv'>
			<table>
				<caption>Results</caption>
				
				<tr class="head">
				<th scope="col">Competition</th>
				<th scope="col">Date</th>
				<th scope="col">Time</th>
				<th scope="col">Teams</th>
				<th scope="col">Venue</th>
				<th scope="col">Referee</th>
				</tr>
				
				<tr>
				<td><strong>National Hurling League Quarter Final 1</strong></td>
				<td>Sunday 10<sup>th</sup> April</td>
				<td> 13:30</td>
                <td>Kilkenny 6-20 Offaly3-9</td>
				<td>Nowlan Park</td>
                <td>Mick Byrne</td>
                </tr>
				
					
				
				<tr class="even">
					<td><strong>National Hurling League Quarter Final 2</strong></td>
					<td>Saturay 9<sup>th</sup> April</th></td>
					<td>16:00</td>
					<td>Clare 1-19 Tipperary 1-16</td>
					<td>Semple Stadium</td>
					<td>John Walsh</td>			
				</tr>
				
				<tr>
					<td><strong>National Hurling League Quarter Final 3</strong></td>
					<td>Sunday 10<sup>th</sup> April</th>
					<td>14:00</td>
					<td>Limerick 2-13 Dublin 1-15</td>
					<td>Parnell Park</td>
					<td>Noel Grace</td>
				</tr>
				
				
				
			</table>	
		  </div>
        </div>
		</div>
		</div>
		
		<div class="row">
		<div class="col-md-6">
	   
		<form action="matchesDay.php" name="dateSelectForm">
			<label>Select a date to see matches for that day:</label>
			
			<br>
				<select name="dateSelect">
					<option value="" selected>Select DATE</option>
					<option value="Sunday 17th Apr">Sunday 17th Apr</option>
					<option value="Sunday 24th Apr">Sunday 24th Apr</option>
					<option value="Sunday 1st May">Sunday 1st May</option>
					<option value="Sunday 8th May">Sunday 8th May</option>
					<option value="Sunday 15th May">Sunday 15th May</option>
					<option value="Sunday 22nd May">Sunday 22nd May</option>
					<option value="Sunday 10th September">Sunday 10th September</option>
				</select>
			<br><br>
			
			<button class="btn btn-sm btn-primary"
			type="submit">Submit</button>
		</form>	
		
	   </div>
	   </div>


    </div> <!-- /container -->
			
			<h2>Kilkenny's History</h2>
		
			<div id='maindiv'>
				
			<div class="row">
			<div class="col-sm-12 col-md-4">
			
				<div class="article column1">
				<br><br><figure>
					<img src="images/team.jpg" alt="team" title="Kilkenny Team" />
					<figcaption>Kilkenny Team</figcaption>
				</figure><br><br><br>
				
				<video width="240" height="320" CONTROLS PRELOAD>
				<source src="video/kilkenny_team.mp4" type='video/mp4' />
				
				<p>A video of Richie Hogan</p>
				 </video>
				
				
				</div>
				</div>
				
			
			<div class="col-sm-12 col-md-4">
			<div class="article column2">
				<br><p>The Kilkenny County Board of the Gaelic Athletic Association (Kilkenny GAA) (Irish: Cumann Lúthchleas Gael Coiste Cill Chainnigh) is one of the 32 county boards of the GAA in Ireland and is responsible for Gaelic Games in County Kilkenny. The county board has its head office and main grounds at Nowlan Park and is also responsible for Kilkenny inter-county teams in all codes at all levels. The Kilkenny branch of the Gaelic Athletic Association was founded in 1887.
				In hurling, the dominant sport in the county, Kilkenny compete annually in the All-Ireland Senior Hurling Championship, which they have won thirty-six times, the Leinster Senior Hurling Championship, which they have won seventy times, and the National Hurling League, which they have won seventeen times. Kilkenny is the most successful hurling county. Brian Cody has been manager of the Kilkenny senior hurling team since the 1999 championship. Joey Holden from the Ballyhale Shamrocks club captained the Kilkenny senior hurling team that recently won the 2015 All-Ireland Senior Hurling Championship.</p>
			</div>
			</div>
			
			<div class="col-sm-12 col-md-4">
			<div class="article column3">
				<br><h3>Links</h3>
				
				<ul>
 
 <li><A HREF="http://www.kilkennygaa.ie"
 onMouseOver = 'DisplayA("Click Me!")';
 onMouseOut = 'DisplayA("Go to our sister site if you wish to view a more in depth knowledge about Kilkenny hurling. Kilkenny - The new home of hurling.")';>
 Go to www.kilkennygaa.ie</A>
 <P><B><DIV id="firstLink"> </DIV></B></P></li>
 
 
 <li><A HREF="http://www.thekilkennyway.com/index.asp"
 onMouseOver = 'DisplayB("Click Me!")';
 onMouseOut = 'DisplayB("Are you interested in visiting the medieval city with all the tourist attractions, vibrant nite-life and hurling people then look here.")';>
 Go to www.thekilkennyway.com</A>
 <P><B><DIV id="secondLink"> </DIV></B></P></li>
 
 
 <li><A HREF="https://www.facebook.com/KilkennyBanterPage/"
 onMouseOver = 'DisplayC("Click Me!")';
 onMouseOut = 'DisplayC("Why not join or view the Kilkenny hurling Facebook page and interact with all the other followers through social media. We are after all in the technological age.")';>
 Visit Facebook Page</A>
 <P><B><DIV id="thirdLink"> </DIV></B></P></li>
 
 <li><A HREF="https://en.wikipedia.org/wiki/Kilkenny_GAA"
 onMouseOver = 'DisplayD("Click Me!")';
 onMouseOut = 'DisplayD("If you are interested in finding out more about the history of Kilkenny hurling then take a peak at our Wikepedia page")';>
 Go to the Kilkenny Wikepedia page</A>
 <P><B><DIV id="fourthLink"> </DIV></B></P></li>
 
 <li><A HREF="http://www.kilkennypeople.ie/"
 onMouseOver = 'DisplayE("Click Me!")';
 onMouseOut = 'DisplayE("Have an interest in local news, gossip, the word on the street and indeed within the county! Then this is the newspaper you need - Read Here!")';>
 Read the Kilkenny  People Newspaper</A>
 <P><B><DIV id="fifthLink"> </DIV></B></P></li>
 
 <li><A HREF="http://www.kilkennycastle.ie/"
 onMouseOver = 'DisplayF("Click Me!")';
 onMouseOut = 'DisplayF("Come Visit Kilkenny&apos;s historic landmark built by the Normans in 1195. A fun day for kids and families. Lots of entertainment in the Castle Park and playground")';>
 Visit Kilkenny Castle</A>
 <P><B><DIV id="sixthLink"> </DIV></B></P></li>
 
 <li><A HREF=="http://www.gaa.ie/"
 onMouseOver = 'DisplayG("Click Me")';
 onMouseOut = 'DisplayG("Official GAA website.")';>
 Go to www.gaa.ie</A>
 <P><B><DIV id="seventhLink"> </DIV></B></P></li>
 
 <li><A HREF="http://kilkennyreporter.ie/"
 onMouseOver = 'DisplayH("Click Me!")';
 onMouseOut = 'DisplayH("Read Me.")';>
 Read the Kilkenny Reporter</A>
 <P><B><DIV id="eighthLink"> </DIV></B></P></li>
 
 <li><A HREF="http://www.hoganstand.com/Homepage.aspx"
 onMouseOver = 'DisplayI("Click Me")';
 onMouseOut = 'DisplayI("GAA stuff.")';>
 Go to HoganStand</A>
 <P><B><DIV id="ninthLink"> </DIV></B></P></li>
 
 
 <li><a href="http://www.hostelkilkenny.ie/"
 onMouseOver = 'DisplayJ("Click Me")';
 onMouseOut = 'DisplayJ("Looking for somewhere to stay.")';>
 Find a Hostel</A>
 <P><B><DIV id="tenthLink"> </DIV></B></P></li>

 
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
		<script	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/
jquery.min.js"></script>	

<script	src="js/bootstrap.min.js"></script>
	</body>
</html>