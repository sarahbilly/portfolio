
		<nav class="social-nav">
			<ul>
				<li>
					<a target="_blank" href="http://instagram.com/sarah.yvr"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li>
					<a target="_blank" href="https://www.linkedin.com/in/sarahbilly/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li>
					<a target="_blank" href="http://codepen.io/sarahbilly/"><i class="fa fa-codepen" aria-hidden="true"></i></a>
				</li>		
			</ul>
		</nav> 

		<!-- 
		mobile menu 
		-->
 		<div class="menu">
		    <span class="menu-circle"></span>
		    <a href="#" class="menu-link">
		      <span class="menu-icon">
		        <span class="menu-line menu-line-1"></span>
		        <span class="menu-line menu-line-2"></span>
		        <span class="menu-line menu-line-3"></span>
		      </span>
	   		</a>
		</div> <!-- end .menu -->

		<div class="menu-overlay">
			<nav class="overlay-nav">
			 	<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="projects.php">Projects</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>		    
			<ul class="social">
				<li>
					<a target="_blank" href="http://instagram.com/sarah.yvr"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
				<li>
					<a target="_blank" href="https://www.linkedin.com/in/sarahbilly/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li>
					<a target="_blank" href="http://codepen.io/sarahbilly/"><i class="fa fa-codepen" aria-hidden="true"></i></a>
				</li>		
			</ul>
		 </div> <!-- end .menu-overlay -->

		<p class="menu-title">MENU</p>
		<p class="copyright">&copy; Sarah Billy, 2017</p>
	</footer>

    <script> 

//  Call in the Unslider
	   jQuery(document).ready(function($) {
	      $('.my-slider').unslider({
	      	autoplay: true,
	      	delay: 5000,
	      	infinite: true

	      });
	    }); 

//  Mobile Nav Menu
		$(function() {
		  $(".menu-link").click(function(e) {
		    e.preventDefault();
		    $(".menu").toggleClass("open");
		    $(".menu-overlay").toggleClass("open");
		  });

		});
    </script>
    <script src="scripts/script.js"></script>
</body>
</html>