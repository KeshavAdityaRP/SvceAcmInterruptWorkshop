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
    <meta name="author" content="Interrupt Web Development Workshop by SVCE ACM Chapters: Ganesh Jayaraman, Keshav Aditya">
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
			<h1>Meet John <br> F****** <br> Snow</h1>
			<p>Ruler of the Seven Kingdoms<br> You may now bend the knee</p> 
		</div>
	</div>
	<div class="container">
		<section id="introduction" class="split">
			<div class="row">		
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<h2>A Little Bit About Me</h2>
					<p class="paragraphs">Jon Snow, born Aegon Targaryen, is the son of Lyanna Stark and Rhaegar Targaryen, the late Prince of Dragonstone. From infancy, Jon is presented as the bastard son of Lord Eddard Stark, Lyanna's brother, and raised by Eddard alongside his lawful children at Winterfell but his true parentage is kept secret from everyone, including Jon himself. In order to escape his bastard status, Jon joins the Night's Watch and is eventually chosen as Lord Commander. </p>
				</div>
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<img id="avatar" src="images/JohnSnow3.jpg">
				</div>					
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">
					<p class="paragraphs">However, he is later murdered in a mutiny and resurrected by the Red Priestess Melisandre. Freed from his Night's Watch vows, Jon joins his cousin, Sansa Stark, in building an army and together they retake Winterfell from House Bolton, restoring House Stark's dominion over the North with Jon being declared the new King in the North. However, after successfully capturing a wight and presenting it to the Lannisters as proof that the Army of the Dead are real, Jon pledges himself and his army to Daenerys Targaryen, Rhaegar's sister, and steps down as King of the North</p>
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
										<td>Bow n Arrow</td>
										<td>7/10</td>
									</tr>
									<tr>
										<td>Dagger</td>
										<td>6/10</td>
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
										<td>2/10</td>
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
										<td>6/10</td>
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
										<td>5/10</td>
									</tr>      
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<h3>My Favorite Weapon</h3>
					<p class="paragraphs">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem.</p>	
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
					<p class="paragraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
					<p class="paragraphs">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem.</p>
				</div>
			</div>
			<div class="row" id="experience">
				<div class="col-sm-12 col-md-2 col-lg-2 text-center">
					<h3>Experiance</h3>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 text-center">
				<img class="edu" src="images/combat.png">
				</div>		
				<div class="col-sm-12 col-md-4 col-lg-4 text-center">		
					<p class="paragraphs">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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
					<p class="paragraphs">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem.</p>
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
					<p class="paragraphs">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem.</p>
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