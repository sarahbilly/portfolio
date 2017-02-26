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
 			<h1>project:<br>
 			<span class="project-title">jQuery tutorial</span>
 			</h1>

 			<a target="_blank" href="http://sbilly.htpwebdesign.ca/tutorial"><img class="project-display" src="images/desktop_tutorial.jpg" alt="Grow a Garden Responsive Displays"></a>

 			<div class="project-container">
 				<div class="project-snapshot">
		 			<p>Learning JavaScript &amp; jQuery can be overwhelming at first if you're new to coding! I wanted to make the learning process enjoyable, so I decided to style this quick tutorial as a story of growing a garden. Here you will learn three easy effects: Drag &amp; Drop, Altering CSS On Click, and Fade In.</p>
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
	 		<a target="_blank" href="http://sbilly.htpwebdesign.ca/tutorial">View Live</a> 
		</article>

		<article>
			<div class="title">
				<h2>notes</h2>
			</div> <!-- end .title -->
			<p>This was a project from BCIT's Technical Web Design Program. I made this site responsive but after we learned about "Mobile First" so I found the media queries rather taxing. My latest work all uses the Mobile First approach! I am not very happy with the overall design, but wanted to showcase it because of the use of jQuery which was the main purpose of the site.</p>
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
			<p>I love to watercolour paint, so I experimented with using some of my watercolours and using them as images for this tutorial. I used Adobe Photoshop for this. </p>

			<div>
				<img class="project-display" src="../tutorial/images/flowerlogo.png" alt="Example of the Grow a Garden watercolour logo">
			</div>


		</article>

	</main>

	<footer class="gradient-bg">
	<?php include("footer.php"); ?>