<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<link rel="icon" href="images/logo_square_white_t_icon.ico" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<link rel="stylesheet" href="assets/css/EditStyle.css" />		
	</head>
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt topnav">
						<a href="index.html" class="logo"><img src="svg/logo_horizontal_white.svg" alt="LogoOfConcierge" style="height: 100%;"></a>
						<input type="text" placeholder="Search.." id="searchicon" />
						<nav style="margin: 4px 0 0">
							<a href="#menu">Sign In</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<a href="index.html" class="signin"><img src="svg/logo_horizontal_white.svg" alt="LogoOfConcierge" style="height: 90%; width: 100%;"></a>


						<form method="post" action="#">
							<div class="row uniform">
							<div class="6u 12u$(xsmall)" style="margin: auto; float: none; padding: 1em 0 0;">
								<input type="text" name="demo-name" id="demo-name" value="" placeholder="Username/Email" style="text-align:center;" />
							</div>
							<div class="6u$ 12u$(xsmall)" style="margin: auto; float: none; padding: 1em 0 0;">
								<input type="password" name="password" id="demo-email" value="" placeholder="Password" style="text-align:center;" />
							</div>
							<div class="12u$" id="sign-in_reset">
								<ul class="actions" style="text-align: center;">
									<li><input type="submit" value="Sign In" class="special" onclick="home" /></li>
									<li><input type="reset" value="Reset" /></li>
								</ul>
							</div>

							<div id="sign-or">
								<h4 style="color:#4c4c4c;"> Or </h4>
							</div>
		
							<div class="inner" id="signin-social-icon">
								<ul class="icons" style="margin: 1%;">
									<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon alt fa-google"><span class="label">Google</span></a></li>
									<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</div>
							<div class="12u$">
								<ul class="actions" style="text-align: center;">
									<li><input type="submit" value="Sign Up" class="special" onclick="home" /></li>
	
								</ul>
							</div>
							</div>
						</form>
					</nav>