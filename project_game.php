<?php include("header.php"); ?>

	<header class="page">
		<div class="page-bg"></div>
		<a href="index.php"><img src="images/logo.png" alt="Sarah Billy logo" class="logo"></a>
		<nav class="pages-nav">
			<?php include("nav.php"); ?>
		</nav>
	</header>

	<main id="content">

		<article id="portfolio">
 			<h1>Bill Murray Match Game</h1>

 			<div class="featured">
				<div class="featuredproject">
					<h3>Bill Murray Match Game</h3>
					<div class="featuredbox"></div><!-- end .featured -->
					<img src="images/bill.png" alt="Bill Murray Match Game">
				</div> <!-- end .featuredproject -->
			</div>

 			<div class="project-container">
 				<div class="project-snapshot">
		 			<p>This was one of my earlier projects at BCIT, where we were tasked with creating a functional game with Javascript &amp; jQuery. I chose to make a matching game featuring the great Bill Murray, because why not? He's awesome.</p> 
		 			<p>(This was before we learned responsive web design, so currently this is best viewed on laptop/desktop!)</p>
	 			</div> <!-- end .project-snapshot -->
	 			<div class="project-tools">
	 				<p>TOOLS:</p>
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
				<h2>Style Guide</h2>
			</div> <!-- end .title -->
			<div class="palette">
				<img src="">
				<img src="">
				<img src="">
			</div>
			<p>I wanted this game to be a simple, clean design but also wanted it to be fun - this is where Bill Murray comes in. I created the background image and all the matching tiles in Adobe Illustrator, giving them a 'painted' look, with fun colourful backgrounds to make them pop.</p>

			<div class="palette">
				<img src="../game/images/bill_image_01.png" alt="">
				<img src="../game/images/bill_image_05.png" alt="">
				<img src="../game/images/bill_image_08.png" alt="">
			</div>

			<img src="../game/images/bill_bg.png" alt="">


		</article>

	</main>

<?php include("footer.php"); ?>