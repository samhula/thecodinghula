<!DOCTYPE html>
<?php
	require_once 'includes/constants.php';
?>
<html lang="en">
<?php
	require_once 'includes/head.php';
?>
<body>
	<?php
		require_once 'includes/navigation.php';
	?>
	<main class="container">
		<canvas class="intro-canvas" id="intro-canvas">
		</canvas>
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
		<div class="not-canvas">
			<div class="projects" id="projects">
				<h2>Projects</h2>
				<div class="project-container">
					<div class="project-expl">
						<img src="assets/carousel-imgs/img-1.png" class="project-desktop-img">
						<img src="assets/carousel-imgs/img-1-mobile.png" class="project-mobile-img">
						<a href="#"><h3>Job Board</h3></a>
						<p class="tech-used">PHP (Laravel) | JavaScript | MySQL | Tailwindcss</p>
						<div class="project-buttons">
							<a href="projects/job-board" class="live-site">Live Website</a>
							<a href="projects/job-board.php" class="read-more">Read More</a>
						</div>
						<!-- <section>This site is currently in progress. I just added a section here to force me to complete it. This site will allow me to implement more security and APIs because it involes personal data and finance. I would like to develop this site further and become a market leader in terms of job boards. I have seen many job boards charge a signifiant amount for 1 job to be displayed for 30 days. I will undercut the market so that smaller businesses would not have to pay through the nose in order to advertise jobs.</section> -->
					</div>
					<div class="project-expl">
						<img src="assets/carousel-imgs/img-2.png" class="project-desktop-img">
						<img src="assets/carousel-imgs/img-2-mobile.png" class="project-mobile-img">
						<a href="#"><h3>Tech News Website</h3></a>
						<p class="tech-used">PHP (Laravel) | JavaScript | MySQL | Tailwindcss</p>
						<div class="project-buttons">
							<a href="projects/techratz" class="live-site">Live Website</a>
							<a href="projects/techratz.php" class="read-more">Read More</a>
						</div>
						<!-- <section>This website builds upon, and vastly improves, my dissertation. It was a PHP CRUD web application that gives users the latest news, reviews and guides in the technoloy niche. The original site was built using a custom MVC framework, however I decided to learn Laravel and it greatly improved development time whilst allowing me to continue learning about the MVC framework and properly structuring code so that other people could develop on it. The design of my dissertation was lackluster so I spent a significant amount of time learning Tailwindcss to improve what the website looks like. It is fully mobile responsive</section> -->
					</div>
					<div class="project-expl">
						<img src="assets/carousel-imgs/img-3.png" class="project-desktop-img">
						<img src="assets/carousel-imgs/img-3-mobile.png" class="project-mobile-img">
						<a href="https://famouscelebstats.com" target="_blank" rel="noopener noreferrer"><h3>FamousCelebStats</h3></a>
						<p class="tech-used">PHP (Laravel) | JavaScript | MySQL | Tailwindcss</p>
						<div class="project-buttons">
							<a href="https://famouscelebstats.com" target="_blank" rel="noopener noreferrer" class="live-site">Live Website</a>
							<a href="projects/famouscelebstats.php" class="read-more">Read More</a>
						</div>
						<!-- <section>This website is an experiment to rank on the SERPs and generate as many page views as possible. After researching many niches, I came to the conclusion that this niche is still low competitvely whilst having a high search volume. This website talks about the statistics and general trivia behind celebrities. It was developed on the WAMP stack and is deployed on the LAMP stack. It was the first time using tailwindcss. This framework was extremely nice to work with and allowed me to build the site more efficiently.</section> -->
					</div>
					<div class="project-expl">
						<img src="assets/carousel-imgs/img-4.jpg" class="project-desktop-img">
						<a href="#"><h3>Image to ASCII art</h3></a>
						<p class="tech-used">Laravel | MySQL | Tailwindcss</p>
						<div class="project-buttons">
							<a href="#" class="live-site">Live Website</a>
							<a href="#" class="read-more">Read More</a>
						</div>
						<!-- <section>Explanation</section> -->
					</div>
					<div class="project-expl">
						<img src="assets/carousel-imgs/img-5.png" class="project-desktop-img">
						<img src="assets/carousel-imgs/img-5-mobile.png" class="project-mobile-img">
						<a href="#"><h3>Brainrot</h3></a>
						<p class="tech-used">HTML | CSS | JavaScript</p>
						<div class="project-buttons">
							<a href="#" class="live-site">Live Website</a>
							<a href="#" class="read-more">Read More</a>
						</div>
						<!-- <section>Explanation</section> -->
					</div>
					<div class="project-expl">
						<img src="assets/carousel-imgs/img-6.jpg" class="project-desktop-img">
						<a href="#"><h3>Portfolio</h3></a>
						<p class="tech-used">HTML | CSS | JavaScript</p>
						<div class="project-buttons">
							<a href="#" class="read-more">Read More</a>
						</div>
						<!-- <section>This is my first portfolio website! I wanted to make it stand out so that I can get my first web developer job whilst challenging myself creatively. I learnt many things making this website and will contiune to learn more about design and front end development. This portfolio uses no libraries, just plain old HTML5, CSS3 and JavaScript.</section> -->
					</div>
				</div>
			</div>
			<div class="core-skills" id="core-skills">
				<h2>Core Skills</h2>
				<div class="skills-container">
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
							<li>Database Management</li>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="contact" id="contact">
				<h2>Contact</h2>
				<div class="contact-container">
					<form>
					
					</form>
				</div>
			</div>
		</div>
	</main>
</body>
<script type="text/javascript" src="js/nav.js"></script>
<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/typing.js"></script>
</html>