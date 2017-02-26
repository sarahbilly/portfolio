<?php include("header.php"); ?>
	<div class="border-gradient"></div>
	
	<header class="page">
		<div class="page-bg"></div>
		<a href="index.php"><img src="images/logo.png" alt="Sarah Billy logo" class="logo"></a>
		<nav class="pages-nav">
			<?php include("nav.php"); ?>
		</nav>
	</header>

	<main id="content">

		<article id="portfolio">
 			<h1>project:<br>
 			<span class="project-title">match game</span>
 			</h1>

 			<a target="_blank" href="http://sbilly.htpwebdesign.ca/game"><img class="project-display" src="images/desktop_game.jpg" alt="Desktop display of Bill Murray Match Game"></a>
 			<div class="project-container">
 				<div class="project-snapshot">
		 			<p>This was one of my earlier projects at BCIT, where we were tasked with creating a functional game with Javascript &amp; jQuery. I chose to make a matching game featuring the great Bill Murray, because why not? He's awesome.</p> 
		 			<p>(This was before we learned responsive web design, so currently this is best viewed on laptop/desktop!)</p>
	 			</div> <!-- end .project-snapshot -->
	 			<div class="project-tools">
	 				<ul>
	 					<li>Javascript</li>
	 					<li>jQuery</li>
	 					<li>Illustrator</li>
	 					<li>Photoshop</li>
	 					<li>HTML5</li>
	 					<li>CSS3</li>
	 				</ul>
	 			</div> <!-- end .project-tools -->
	 		</div> <!-- end .project-container -->
	 		<a target="_blank" href="http://sbilly.htpwebdesign.ca/game">View Live</a>
		</article>

		<article>
			<div class="title">
				<h2>notes</h2>
			</div> <!-- end .title -->
		</article>

		<article>
			<div class="title">
				<h2>style guide</h2>
			</div> <!-- end .title -->
			<div class="palette">
				<img src="">
				<img src="">
				<img src="">
			</div>
			<p>I wanted this game to be a simple, clean design but also wanted it to be fun - this is where Bill Murray comes in. I created the background image and all the matching tiles in Adobe Illustrator, giving them a 'painted' look, with fun colourful backgrounds to make them pop.</p>

			<div class="palette">
				<img src="../game/images/bill_image_01.png" alt="Example tile from Bill Murray Match Game">
				<img src="../game/images/bill_image_05.png" alt="Example tile from Bill Murray Match Game">
				<img src="../game/images/bill_image_08.png" alt="Example tile from Bill Murray Match Game">
			</div>

			<img class="project-display" src="../game/images/bill_bg.png" alt="Background image from Bill Murray Match Game">


		</article>

	</main>

	<footer class="gradient-bg">
	<?php include("footer.php"); ?>