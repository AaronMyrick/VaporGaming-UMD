<?php

session_start();

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $conn = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE name = '%s'",
                   $conn->real_escape_string($_POST["username"]));
    
    $result = $conn->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["username"] = $user["name"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>
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

			<main class="main-content">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login:</h2>

              <p class="text-white-50 mb-5">Please enter your login and password:</p>

              <?php if ($is_invalid): ?>
			        <em>Invalid login</em>
					    <?php endif; ?>
					    
					    <form method="post">

              <div class="form-outline form-white mb-4">
                <input type="text" id="username" name="username" />
                <label class="username">User Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input style="margin-top:5px" type="password" id="password" name="password" />
                <label class="password">Password</label>
              </div>

              <button style="margin-top:10px" class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
              
              </form>

            </div>

            <div>
              <p style="margin-bottom:400px" class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
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
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>