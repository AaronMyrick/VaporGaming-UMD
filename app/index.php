<?php session_start(); ?>		
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Vapor Games</title>
		<link rel = "icon" href="images/logo.png" type = "image/x-icon">

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" class="branding">
						<?php if (isset($_SESSION["username"])) { ?>
							<img style="margin-top:45px" src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 style="margin-top:45px" class="site-title">Vapor Games</h1>
								<small class="site-description">University of Michigan - Dearborn</small>
							</div>
						<?php  } else { ?>
							<img src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Vapor Games</h1>
								<small class="site-description">University of Michigan - Dearborn</small>
							</div>
						<?php } ?>
					</a>
					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<?php if (isset($_SESSION["username"])) { ?>
						<h1 style="text-align:right;margin-right:20px"><?php echo $_SESSION["username"]; ?></h1>
						<?php } ?>
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="games.php">Game Library</a></li>
							<?php if(isset($_SESSION["username"])) { ?>
								<li class="menu-item"><a href="logout.php">Log Out</a></li>
							<?php  } else { ?>
								<li class="menu-item"><a href="login.php">Login</a></li>
							<?php } ?>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			</div>
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Games Library Preview:</h2>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/RockPaperScissors_Full.png" alt=""></figure>
									<h3 class="location">Rock Paper Scissors</h3>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/AlienRush.png" alt=""></figure>
									<h3 class="location">Alien Rush</h3>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/BeeaMazed.png" alt=""></figure>
									<h3 class="location">Bee aMazed</h3>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="live-camera">
									<figure class="live-camera-cover"><img src="images/SplitDimensions.png" alt=""></figure>
									<h3 class="location">Split Dimensions</h3>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">What Are We?</h2>
								<ul class="arrow-feature">
									<li>
										<h3>Cloud Based Web Game Hosting Service Prototype</h3>
										<p>Hosted by Google Cloud Products</p>
									</li>
									<li>
										<h3>ECE-528: Cloud Computing</h3>
										<p>University of Michigan-Dearborn</p>
									</li>
									<li>
										<h3>Made By:</h3>
										<p>Aaron Myrick & Maharaja Thiyagarajan</p>
									</li>
								</ul>
							</div>
							<div class="col-md-4">
								<h2 class="section-title">How to Use</h2>
								<ul class="arrow-feature">
									<li><h3>Go to the Games Library and select a game to play online</h3></li>
									<li><h3>Login/Sign-Up to be able to download a game to a local computer</h3></li>
									<li><h3>Local Versions of games have these additional features:</h3>
										<p>Controller Support</p>
										<p>Windows Support</p>
										<p>Save and Load Game Support</p>
										<p>Fullscreen Support</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

			<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<form action="#" class="subscribe-form">
						</form>
					</div>
					<div class="col-md-3 col-md-offset-1">
						</div>
					</div>
				</div>

				<p class="colophon">University of Michigan - Dearborn</p>
				<p style="margin-bottom:-5px" class="colophon">Aaron Myrick</p>
				<p class="colophon">Maharaja Thiyagarajan</p>
				<p class="colophon">Copyright 2023 VaporGames-UMD. Designed by Themezy. All rights reserved</p>
			</div>
		</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>