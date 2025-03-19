<?php
	require("includes/config.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>JoseMolinaResume.com</title>
		<link rel="shortcut icon" href="https://www.josemolinaresume.com/uploads/favicon.png">

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta property="og:title" content="JoseMolinaResume.com">
		<meta property="og:description" content="Hello, I am Jose Molina. Freelance Web Developer and Photographer">
		<meta property="og:image" content="https://www.josemolinaresume.com/uploads/home.jpg">
		<link rel="image_src" href="httsp://www.josemolinaresume.com/uploads/home.jpg">
		<meta name="keywords" content="jose, molina, webdeveloper, php, mysql, photographer, css, less, sass, bootstrap, codeigniter, laravel, zend">
		<meta name="description" content="Hello, I am Jose Molina. Freelance Web Developer and Photographer.">
		<meta name="author" content="Jose Molina - info@josemolinaresume.com">

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

		<!-- Locals Styles -->
		<link rel="stylesheet" href="<?php echo $route; ?>css/style.css">
		<link rel="stylesheet" href="<?php echo $route; ?>css/animate.css">
		<link rel="stylesheet" href="<?php echo $route; ?>css/circle.css">
	</head>
	<body class="">
		<div class="wrapper">
			<nav id="menuHome" class="navbar navbar-toggleable-md navbar-light px-4 pt-0 pb-4">
				<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="navbar-brand logo mt-4">
					<a href="">
						<span class="jose text-uppercase">Jose</span>
						<span class="molina text-uppercase">Molina</span>
					</a>
				</div>
				<div class="collapse navbar-collapse justify-content-end" id="navbarHeader">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link home-link scrollitem selected" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link about-me-link scrollitem" href="#aboutme">About Me</a>
						</li>
						<li class="nav-item">
							<a class="nav-link resume-link scrollitem" href="#resume">Resume</a>
						</li>
						<li class="nav-item">
							<a class="nav-link skills-link scrollitem" href="#skills">My Skills</a>
						</li>
						<li class="nav-item">
							<a class="nav-link postfolio-link scrollitem" href="#portfolio">Portfolio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link contactme-link scrollitem" href="#contactme">Contact</a>
						</li>
					</ul>
				</div>
			</nav>
			<?php require("includes/home.php"); ?>
			<?php require("includes/aboutme.php"); ?>
			<?php require("includes/resume.php"); ?>
			<?php require("includes/skills.php"); ?>
			<?php require("includes/portfolio.php"); ?>
			<?php require("includes/contactme.php"); ?>
		</div>

		

		<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.0/jquery.scrollTo.min.js"></script>
		<!-- Locals JS -->
		<script src="<?php echo $route; ?>js/main.js"></script>
	</body>
</html>