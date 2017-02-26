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
			<h1>projects</h1>
			<p>Here are a few of my most recent projects. Sort through & click on an image to go into more detail about each work!</p>

			<div class="container">
			  <div id="filters"></div>

			  <div id="gallery">
			  <div class="col">
				    <a href="project_game.php"><img data-tags="Development,Design" src="images/project_game.jpg" alt="Bill Murray Match Game"></a>
				    <a href="project_tutorial.php"><img data-tags="Development" src="images/project_tutorial.jpg" alt="Grow A Garden jQuery Tutorial"></a>
				    <a href="project_portfolio.php"><img data-tags="Development,Design" src="images/project_portfolio.jpg" alt="Sarah Billy Portfolio"></a>
			    </div>
			    <div class="col">
			    	<a href="project_group.php"><img data-tags="Development, Teamwork" src="images/project_group.jpg" alt="Das My Jam Group Mock Up"></a>
			    	 <a href="project_responsive.php"><img data-tags="Development" src="images/project_responsive.jpg" alt="ColourMe Responsive Website"></a>
				    <a href="project_meowhouse.php"><img data-tags="Development,Design" src="images/project_meowhouse.jpg" alt="Meowhouse Mock Business Site"></a>
			    </div>
			  </div> <!-- end .gallery -->

			</div> <!--end .container -->
		</article>

	</main>

	<footer class="gradient-bg">
	<?php include("footer.php"); ?>