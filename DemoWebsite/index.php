<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The meta name="viewport" tag is particularly important for responsive design – it ensures that your website has a 1:1 ratio with the viewport (screen size).
    =====================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="John Snow,Interrupt, Ace, SVCE, Shri Venkateswara College of Engineering, ACM, SVCE ACM Chapters">
    <meta name="description" content="John Snow's Website">
    <meta name="author" content=" Interrupt Web Development Workshop by SVCE ACM Chapters in collaboration with ACE: Ganesh Jayaraman, Keshav Aditya">
    <link rel="icon" type="image/png" href="images/Favicon.png">    
    <title>My Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="#home">My Website</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="#introduction"><span class="glyphicon glyphicon-user"></span> John Snow</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#skills"><span class="glyphicon glyphicon-console"></span> Skills</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-education"></span> Education <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#experience">Experience</a></li>
							<li><a href="#projects">Jobs</a></li>
						</ul>
					</li>					
					<li><a href="#achievments"><span class="glyphicon glyphicon-fire"></span> Achievement</a></li>				
					<li><a href="#contact"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="jumbotron text-center" id="home">
		<div class="centered highlight">
			<h1>Meet<br>Jon Snow</h1>
			<p>The King in the North</p>
			<p>
			<?php
			if( $_SESSION["message"] != NULL) { 
				echo $_SESSION["message"];
			} 
			else{
				echo "";
			}
			?>	
			</p> 
		</div>
	</div>
	<div class="container">
		<section id="introduction" class="split">
			<div class="row">		
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<h2>A Little Bit About Me</h2>
					<p class="paragraphs">I am Jon Snow, born Aegon Targaryen, the son of Lyanna Stark and Rhaegar Targaryen, the late Prince of Dragonstone. From infancy, I was presented as the illegitimate son of Lord Eddard Stark, Lyanna's brother, and raised by Eddard alongside his lawful children at Winterfell but my true parentage was kept secret from everyone, including myself. In order to escape my bastard status, I joined the Night's Watch and was eventually chosen as Lord Commander. </p>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<img id="avatar" src="images/JohnSnow3.jpg">
				</div>					
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<p class="paragraphs">However, I was murdered in a mutiny and eventually resurrected by the Red Priestess Melisandre. Freed from my Night's Watch vows, I joined my cousin, Sansa Stark, in building an army and together we retook Winterfell from House Bolton, restoring House Stark's dominion over the North and I was declared the new King in the North. However, after successfully capturing a wight and presenting it to the Lannisters as proof that the Army of the Dead are real, I pledged myself and my army to Daenerys Targaryen, Rhaegar's sister, and stepped down as King of the North</p>
				</div>
			</div>
		</section>	
		<section id="skills" class="split">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>Skills</h2>
				</div>
			</div>			
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<ul class="nav nav-tabs">
						<li class="active"><a data-toggle="tab" href="#tech">Combat</a></li>
						<li><a data-toggle="tab" href="#nonTech">Survivor Skills</a></li>
					</ul>
				</div>			
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<div class="tab-content">
						<div id="tech" class="tab-pane fade in active">
							<h3>Combat</h3>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">Language</th>
										<th class="text-center">Rating</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bow and Arrow</td>
										<td>9/10</td>
									</tr>
									<tr>
										<td>Dagger</td>
										<td>8/10</td>
									</tr>
									<tr>
										<td>Sword</td>
										<td>10/10</td>
									</tr>
									<tr>
										<td>Melee</td>
										<td>6/10</td>
									</tr>
									<tr>
										<td>Healin</td>
										<td>7/10</td>
									</tr>
									<tr>
										<td>Stealth</td>
										<td>5/10</td>
									</tr>           
								</tbody>
							</table>
						</div>
						<div id="nonTech" class="tab-pane fade">
							<h3>Survivor Skills</h3>
							<table class="table">
								<thead>
									<tr>
										<th class="text-center">Soft Skill</th>
										<th class="text-center">Rating</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Leadership</td>
										<td>7/10</td>
									</tr>
									<tr>
										<td>Friendship</td>
										<td>7/10</td>
									</tr>
									<tr>
										<td>Speaking</td>
										<td>8/10</td>
									</tr>
									<tr>
										<td>Courage</td>
										<td>10/10</td>
									</tr>      
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<h3>My Favorite Weapon</h3>
					<p class="paragraphs">Longclaw is a Valyrian steel sword that was the ancestral weapon of House Mormont for five centuries. When Lord Jeor Mormont retired from his lordship to take the black and command the Night's Watch, he passed it to his son and heir, Ser Jorah Mormont. When Jorah went into exile after trying to sell some poachers into slavery, he left the sword and Ser Jeor Mormont's sister returned it to him on the Wall.
					Years later, Jeor gave Longclaw to me as a reward for saving his life from a wight. Before giving it to me, he had the pommel remade, replacing the bear with a direwolf, the sigil of House Stark.

					Longclaw is my favorite weapon because it is a bastard sword or hand and a half sword, which means it is a good half a foot longer than a standard long sword, tapered to thrust as well as slash with three fullers incised into the blade to reduce weight. There are ripples in the dark steel indicating it is of Valyrian steel.
					</p>	
				</div>
			</div>
		</section>
		<section id="education" class="split">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>Education</h2>
				</div>
			</div>
			<div class="row">			
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<p class="paragraphs">Raised under the tutelage of Lord Eddard Stark in Winterfell, I received excellent education about the history of Westeros, the various houses, the geography of Westeros and other elements from Maester Luwin. Apart from this, I received my military training from Ser Rodrik Cassel - the Master-at-arms of Winterfell.
					</p>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<p class="paragraphs">I was extremely proficient in my swordsmanship and hand-hand combat. I was equally proficient in my archery training.</p>
				</div>
			</div>
			<div class="row" id="experience">
				<div class="col-sm-12 col-md-2 col-lg-2 text-center">
					<h3>Experience</h3>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<img class="edu" src="images/combat.png">
				</div>		
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">		
					<p class="paragraphs">I served as the personal steward to Lord Commander of the Night's Watch. 
					I was instrumental in dealing with a wight that crossed over the wall, and was rewarded with Longclaw, the mighty Valyrian Steel sword for my efforts. 
					Following this, I led an expedition along with the Lord Commander beyond the wall, and joined slaid Qhorin Halfhand as part of my covert operation into the Wildling camp. I successfully posed as a deserter of the Night's Watch and learned the tactics of the Wildlings. Later, I rejoined the Night's watch and with the help of Stannis Baratheon, I successfully captured and slayed the King Beyond the Wall - Mance Rayder. After my resurrection, I took over Winterfell from the traitor Bolton and was crowned King in the North.</p>
				</div>
			</div>
			<div class="row" id="projects">
				<div class="col-sm-12 col-md-2 col-lg-2 text-center">
					<h3>Projects</h3>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<img class="edu" src="images/sword.jpg">			
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<p class="paragraphs">The dead zombie/skeleton things are not White Walkers.  Those are the dead, raised by the White Walkers, called wights.  Jon only fought one true White Walker, the weird-skinned dude in the black armor who had a badass sword/staff thing.When they initially went at it, Jon was hit hard and lost his sword (Longclaw, given to him by Lord Commander Mormont).  It flew outside of the burned shelter.  During the fight, he picks up another sword (not Longclaw) and uses it against the White Walker.  The sword shatters.  </p>
				</div>
			</div>
		</section>	
		<section id="achievments" class="split">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>Achievements</h2>
				</div>
			</div>		
			<div class="row">		
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<img class="edu" src="images/IronThrone.jpg">
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<p class="paragraphs">
					1. Killed a stray wight single handedly without prior knowledge of how they must be killed. <br>
					2. Succesfully breached the Wildling camp and posed as a deserter. <br>
					3. Defended the Wall from the Wildling army and captured and executed Mance Rayder.<br>
					4. Was crowned King in the North. <br>
					5. Extracted Dragonglass by successfully collaborating with Daenerys Targaryen. <br>
					6. Successfully survived an onslaught from the wight army and captured a wight alive. <br>
					</p>
				</div>
			</div>
		</section>
		<section id="contact" class="split">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center">
					<h2>Contacts</h2>
				</div>
			</div>		
			<div class="row">		
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">		
				</div>
			</div>
			<form action="feedback.php" method="post">
				<div class="row">		
					<div class="col-sm-12 col-md-6 col-lg-6 text-center">
						<div class="form-group">
							<label for="FormControlInputEmail">Email address</label>
							<input type="email" class="form-control" id="FormControlInputEmail" name="email" placeholder="name@example.com" required="true">
						</div>
						<div class="form-group">
							<label for="FormControlInputName">First Name</label>
							<input type="text" class="form-control" id="FormControlName" name="firstname" placeholder="First name" required="true">
						</div>
						<div class="form-group">
							<label for="FormControlTextarea">What's on your mind</label>
							<textarea class="form-control" placeholder="Feel free to send me your feedback" name="response" id="FormControlTextarea" rows="3" required="true"></textarea>
						</div>
						<button type="submit" id="SubmitButton" class="btn btn-primary">Send Feedback</button>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 text-center">
						<div id="map"></div>
					</div>
				</div>		
			</form>
		</section>					
	</div>
			<section id="copyright">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center">
					<p class="paragraphs copy">&copy;SVCE ACM CHAPTERS, ACE INTERRUPT . All Rights Reserved.</p>
				</div>
			</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.2/umd/popper.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/javascript.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoYHb95TvUI9SeRQ1oUwWl6g04b3qVvbQ&callback=myMap"></script>
</body>
</html>