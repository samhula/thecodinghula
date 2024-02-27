<?php 
	require_once "constants.php";
?>

<header class="nav-container">
	<a href="<?php echo URL?>">
		<img id="logo" src="<?php echo URL?>/assets/imgs/logo.svg" height="100" width="100" alt="Sam Hula's portfolio logo">
	</a>
	<nav class="navbar">
		<div class="flex" id="nav-desktop">
			<ul class="navbar-links">
				<li><a href="#projects">Projects</a></li>
				<li><a href="#core-skills">Core Skills</a></li>
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