<?php include("header.php"); ?>
	<header class="page">
		<div class="page-bg"></div>
		<a href="index.php"><img src="images/logo.png" alt="Sarah Billy logo" class="logo"></a>
		<nav class="pages-nav">
			<?php include("nav.php"); ?>
		</nav>
	</header>

	<main id="content">

		<article id="contact">
			<h1>Say hello!</h1>
			<p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:sarah.billy@gmail.com">sarah.billy@gmail.com</a></p>
			<div class="social">
				<a target="_blank" href="http://instagram.com/sarah.yvr"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				<a target="_blank" href="https://www.linkedin.com/in/sarahbilly/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				<a target="_blank" href="http://codepen.io/sarahbilly/"><i class="fa fa-codepen" aria-hidden="true"></i></a>
			</div>
			
			<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

			<form id="contact-form">
			  <p><span class="hey-sarah">Hey Sarah,</span></p>
			  <p>My
			    <label for="your-name">name</label> is
			    <input type="text" name="your-name" id="your-name" minlength="3" placeholder="(your name here)" required> and</p>

			  <p>my
			    <label for="email">email address</label> is
			    <input type="email" name="your-email" id="email" placeholder="(your email address)" required>
			  </p>

			  <p> I have a
			    <label for="your-message">message</label> for you:</p>

			  <p>
			    <textarea name="your-message" id="your-message" placeholder="(your msg here)" class="expanding" required></textarea>
			  </p>
			  <p>
			    <button type="submit">SEND</button>
			  </p>
			</form>


		</article>

		<aside>

		</aside>


	</main>

<?php include("footer.php"); ?>