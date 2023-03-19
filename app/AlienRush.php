<?php session_start(); ?>		
<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vapor Games: Alien Rush</title>
	<link rel = "icon" href="images/logo.png" type = "image/x-icon">


<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">


</head>
<body>
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" class="branding">
						<?php if (isset($_SESSION["username"])) { ?>
							<img style="margin-top:45px" src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 style="margin-top:45px" class="site-title">Vapor Games: Alien Rush</h1>
								<small class="site-description">University of Michigan - Dearborn</small>
							</div>
						<?php  } else { ?>
							<img src="images/logo.png" alt="" class="logo">
							<div class="logo-type">
								<h1 class="site-title">Vapor Games: Alien Rush</h1>
								<small class="site-description">University of Michigan - Dearborn</small>
							</div>
						<?php } ?>
					</a>
<div id="wrapper">
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
	<div id="main">
		<center><canvas id="canvas" width="1280" height="720" style="margin-top:10px;margin-bottom:10px;max-width:100%;background:#000;vertical-align:middle"></canvas></center>
		<?php if (isset($_SESSION["username"])) { ?>
		<center><a href="Games/Alien Rush.zip" download>
		<img style="margin-top:75px;margin-bottom:75px" src="images/download.png">
		<?php } ?>
		</a></center>
	</div>
</div>
<footer class="site-footer">
	<div id="footer">&copy; Aaron Myrick &middot; Made using the <a href="https://love2d.org/" target="_blank">LÖVE Framework</a> (<a href="https://bitbucket.org/rude/love/raw/default/license.txt" target="_blank">License</a>) &middot; Packaged using <a href="https://schellingb.github.io/LoveWebBuilder/" target="_blank">LÖVE Web Builder</a></div>
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
<script type="text/javascript">(function(){
var TXT =
{
	PLAYBTN: 'Click here to launch the game',
	LOAD:    'Downloading Game',
	EXECUTE: 'Starting Game',
	DLERROR: 'Error while downloading game data.\nCheck your internet connection.',
	NOWEBGL: 'Your browser or graphics card does not seem to support <a href="http://khronos.org/webgl/wiki/Getting_a_WebGL_Implementation">WebGL</a>.<br>Find out how to get it <a href="http://get.webgl.org/">here</a>.',
};
var canvas = document.getElementById('canvas'), ctx;
var Msg = function(m)
{
	ctx.clearRect(0, 0, canvas.width, canvas.height);
	ctx.fillStyle = '#888';
	for (var i = 0, a = m.split('\n'), n = a.length; i != n; i++)
		ctx.fillText(a[i], canvas.width/2, canvas.height/2-(n-1)*20+10+i*40);
};
var Fail = function(m)
{
	canvas.outerHTML = '<div style="max-width:90%;width:'+canvas.clientWidth+'px;height:'+canvas.clientHeight+'px;background:#000;display:table-cell;vertical-align:middle"><div style="background-color:#FFF;color:#000;padding:1.5em;max-width:640px;width:80%;margin:auto;text-align:center">'+TXT.NOWEBGL+(m?'<br><br>'+m:'')+'</div></div>';
};
var DoExecute = function()
{
	Msg(TXT.EXECUTE);
	Module.canvas = canvas.cloneNode(false);
	Module.canvas.oncontextmenu = function(e) { e.preventDefault() };
	Module.setWindowTitle = function(title) { };
	Module.postRun = function()
	{
		if (!Module.noExitRuntime) { Fail(); return; }
		canvas.parentNode.replaceChild(Module.canvas, canvas);
		Txt = Msg = ctx = canvas = null;
		Module.canvas.focus();
	};
	setTimeout(function() { Module.run(['/p']); }, 50);
};
var DoLoad = function()
{
	Msg(TXT.LOAD);
	window.onerror = function(e,u,l) { Fail(e+'<br>('+u+':'+l+')'); };
	Module = { TOTAL_MEMORY: 1024*1024*50, TOTAL_STACK: 1024*1024*2, currentScriptUrl: '-', preInit: DoExecute };
	var s = document.createElement('script'), d = document.documentElement;
	s.src = 'Alien Rush.js';
	s.async = true;
	s.onerror = function(e) { d.removeChild(s); Msg(TXT.DLERROR); canvas.disabled = false; };
	d.appendChild(s);
};
var DoSetup = function()
{
	canvas.onclick = function()
	{
		if (canvas.disabled) return;
		canvas.disabled = true;
		canvas.scrollIntoView();
		DoLoad();
	};
	ctx.fillStyle = '#888';
	ctx.fillRect(canvas.width/2-254, canvas.height/2-104, 508, 208);
	ctx.fillStyle = '#333';
	ctx.fillRect(canvas.width/2-250, canvas.height/2-100, 500, 200);
	ctx.fillStyle = '#888';
	ctx.fillText(TXT.PLAYBTN, canvas.width/2, canvas.height/2+10);
};
canvas.oncontextmenu = function(e) { e.preventDefault() };
ctx = canvas.getContext('2d');
ctx.font = '30px sans-serif';
ctx.textAlign = 'center';
DoSetup();
})()</script>
</html>
</body>
