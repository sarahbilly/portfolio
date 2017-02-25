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
			<h1>My recent projects..</h1>
			<p>Here's a few of my recent projects</p>

			<div class="container">
			  <div id="filters"></div>

			  <div id="gallery">
			  <div class="col">
				    <a href="project_game.php"><img data-tags="Development,Design" src="images/project_game.jpg" alt=""></a>
				    <a href="project_tutorial.php"><img data-tags="Development" src="images/project_tutorial.jpg" alt=""></a>
				    <a href="project_game.php"><img data-tags="Photographers,Filmmakers" src="images/img.jpg" alt=""></a>
			    </div>
			    <div class="col">
				    <img data-tags="Designers" src="images/img.jpg" alt="">
				    <img data-tags="Filmmakers" src="images/img.jpg" alt="">
				    <img data-tags="Designers" src="images/img.jpg" alt="">
			    </div>
			    <div class="col">
				    <img data-tags="Designers" src="images/img.jpg" alt="">
				    <img data-tags="Filmmakers" src="images/img.jpg" alt="">
				    <img data-tags="Designers" src="images/img.jpg" alt="">
			    </div>
			  </div> <!-- end .gallery -->

			</div> <!--end .container -->
		</article>

	</main>

<?php include("footer.php"); ?>