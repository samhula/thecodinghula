<!DOCTYPE html>
<?php
	require_once 'includes/constants.php';
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta author="Sam Hula">
	<meta description="Welcome to my portfolio. Here I have showcased some of my best projects.">
	<link rel="icon" type="image/x-icon" href="assets/imgs/Logo.svg">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>The Coding Hula</title>
</head>
<body>
	<div class="mouse"></div>
	<header class="nav-container">
		<img id="logo" src="assets/imgs/logo.svg" height="100" width="100" alt="Sam Hula's portfolio logo">
		<nav class="navbar">
			<div class="flex" id="nav-desktop">
				<ul class="navbar-links">
					<li><a href="#projects">Projects</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<div class="hidden" id="hamburger-open">
				<svg class="hamburger-svg hamburger-dimensions" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" fill-rule="evenodd" d="M19 4a1 1 0 01-1 1H2a1 1 0 010-2h16a1 1 0 011 1zm0 6a1 1 0 01-1 1H2a1 1 0 110-2h16a1 1 0 011 1zm-1 7a1 1 0 100-2H2a1 1 0 100 2h16z"></path> </g></svg>
			</div>
			<div class="hidden" id="hamburger-close">
				<svg class="hamburger-svg hamburger-dimensions" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" fill="none"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill="#ffffff" fill-rule="evenodd" d="M16.293 17.707a1 1 0 001.414-1.414L11.414 10l6.293-6.293a1 1 0 00-1.414-1.414L10 8.586 3.707 2.293a1 1 0 00-1.414 1.414L8.586 10l-6.293 6.293a1 1 0 101.414 1.414L10 11.414l6.293 6.293z"></path> </g></svg>
			</div>
		</nav>
	</header>
	<main class="container">
		<canvas class="intro-canvas" id="intro-canvas">
		</canvas>
		<div class="not-canvas">
			<div class="intro-container">
				<div class="intro-bio">
					<h1>Samuel Hula</h1>
					<p class="intro" id="intro">
						<span>Hello! </span>
						<span class="typed-text"></span>
						<span class="cursor">&nbsp;</span>
					</p>
				</div>
				<a href="#projects" class="button-to">
					Projects
				</a>
			</div>
			<div class="projects" id="projects">
				<div class="project-content">
					<div class="project-expl">
						<a href="#"><h4 class="project-name">Job Board</h4></a>
						<section>Explanation</section>
					</div>
					<div class="project-expl">
						<a href="#"><h4>Tech News Website</h4></a>
						<section>Explanation</section>
					</div>
					<div class="project-expl">
						<a href="https://famouscelebstats.com"><h4>FamousCelebStats</h4></a>
						<section>Explanation</section>
					</div>
					<div class="project-expl">
						<a href="#"><h4>Example</h4></a>
						<section>Explanation</section>
					</div>
					<div class="project-expl">
						<a href="#"><h4>Portfolio</h4></a>
						<section>Explanation</section>
					</div>
				</div>
			</div>
			<div class="core-skills" id="core-skills">
				<h2>Core Skills</h2>
				<span class="skills">
					<div>
						<h3>Languages</h3>
						<ul>
							<li>HTML5</li>
							<li>CSS3</li>
							<li>JavaScript</li>
							<li>PHP</li>
							<li>Java</li>
							<li>MySQL</li>
						</ul>
					</div>
					<div>
						<h3>Frameworks</h3>
						<ul>
							<li>Laravel</li>
							<li>Tailwindcss</li>
							<li>JavaFX</li>
						</ul>
					</div>
					<div>
						<h3>General IT</h3>
						<ul>
							<li>Basic Linux</li>
							<li>Use Case Diagrams</li>
							<li>Class Diagrams</li>
							<li>Sequence Diagrams</li>
							<li>Website Configuration</li>
							<li>MariaDB</li>
							<li>Database Management</li>
							<li>Git</li>
						</ul>
					</div>
				</span>
			</div>
			<div class="contact" id="contact">
				<h3>Contact</h3>
				<div class="contact-container">
					<form>
					
					</form>
				</div>
			</div>
		</div>
	</main>
</body>
<script type="text/javascript" src="js/main.js"></script>
</html>