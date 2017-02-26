<?php include("header.php"); ?>
	<div class="border"></div>
	<div class="diagonal-border"></div>
	<div class="diagonal-border-2"></div>

	<header id="front-page">
		<div class="header-bg"></div>
		<a href="index.php"><img src="images/logo.png" alt="Sarah Billy logo" class="logo"></a>
		<h1 role="banner">Sarah Billy</h1>
		<nav class="header-nav">
			<?php include("nav.php"); ?>
		</nav>
	</header>


	<main id="content" class="front-content">

		<article class="front-hello transparent">
			<img src="images/pic.png" alt="Profile picture of Sarah Billy" class="profile">
			<div class="intro">
				<h2><span class="enlarge">hello,</span></h2>
				<p>I am Sarah Billy, a Vancouver-based Front-End Web Developer. I love clean, beautiful, functional designs and I am passionate about creating better digital experiences.</p>
				<div class="read-more">
					<img src="images/heart.png" alt="heart">
					<a href="about.php">Read More...</a>
				</div> <!-- end .read-more -->
			</div> <!--end .intro -->
		</article> 

		<article class="skills">
			<div class="title">
				<h2>toolkit</h2>
			</div> <!-- end .title -->
			<div class="toolkit">
				<div class="tool">
					<img src="images/wordpress.png" alt="Wordpress">
				</div>
				<div class="tool">
					<img src="images/github.png" alt="Github">
				</div>
				<div class="tool">
					<img src="images/illustrator.png" alt="Adobe Illustrator">
				</div>
				<div class="tool">
					<img src="images/photoshop.png" alt="Adobe Photoshop">
				</div>
				<div class="tool">
					<img src="images/git.png" alt="Git">
				</div>
				<div class="tool">
					<img src="images/googleanalytics.png" alt="Google Analytics">
				</div>
				<div class="tool">
					<img src="images/php.png" alt="PHP">
				</div>
				<div class="tool">
					<img src="images/css.png" alt="CSS3">
				</div>
				<div class="tool">
					<img src="images/html.png" alt="HTML5">
				</div>
				<div class="tool">
					<img src="images/codepen.png" alt="Codepen">
				</div>
				<div class="tool">
					<img src="images/sass.png" alt="Sass">
				</div>
				<div class="tool">
					<img src="images/sublime.png" alt="Sublime">
				</div>
				<div class="tool">
					<img src="images/javascript.png" alt="Javascript">
				</div>
				<div class="tool">
					<img src="images/mysql.png" alt="MySQL">
				</div>
				<div class="tool">
					<img src="images/jquery.png" alt="jQuery">
				</div>
			</div> <!-- end .toolkit -->
		</article> 

		<article>
			<div class="title">
				<h2>projects</h2>
			</div> <!-- end .title -->

			<div class="my-slider">
				<ul>
					<li><img src="images/desktop_game.jpg" alt="Desktop display of Bill Murray Match Game"></li>
					<li><img src="images/desktop_tutorial.jpg" alt="Grow a Garden Responsive Displays"></li>
				</ul>
			</div> <!-- end .my-slider -->
		</article> 

		<article>
			<div class="title">
				<h2>let's chat</h2>
			</div> <!-- end .title -->
			<p>Have a project or work opportunity? Just want to say hello? I'd love to hear from you!</p>
			<p class="center"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></p>
			<p class="center"><a href="mailto:sarah.billy@gmail.com">sarah.billy@gmail.com</a></p>
		</article>

	</main>

	<footer>
	<?php include("footer.php"); ?>
