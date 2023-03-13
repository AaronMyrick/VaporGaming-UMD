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

			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.php">Home</a>
						<span>Game Library</span>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="photo">
									<div class="photo-preview photo-detail" data-bg-image="images/RockPaperScissors_Side.png"></div>
									<div class="photo-details">
										<h3 class="photo-title"><a href="RockPaperScissors.php">Rock Paper Scissors</a></h3>
										<p>Created by Aaron Myrick</p>
									</div>
								</div>
								<div class="photo">
									<div class="photo-preview photo-detail" data-bg-image="images/BeeaMazed.png"></div>
									<div class="photo-details">
										<h3 class="photo-title"><a href="BeeaMazed.php">Bee aMazed</a></h3>
										<p>Created by Aaron Myrick</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="photo">
									<div class="photo-preview photo-detail" data-bg-image="images/AlienRush_Side.png"></div>
									<div class="photo-details">
										<h3 class="photo-title"><a href="AlienRush.php">Alien Rush</a></h3>
										<p>Created by Aaron Myrick</p>
									</div>
								</div>
								<div class="photo">
									<div class="photo-preview photo-detail" data-bg-image="images/SplitDimensions_Side.png"></div>
									<div class="photo-details">
										<h3 class="photo-title"><a href="SplitDimensions.php">Split Dimensions</a></h3>
										<p>Created by Aaron Myrick and Omkar Deshpande</p>
									</div>
								</div>
									</div>
								</div>
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