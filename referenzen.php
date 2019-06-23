<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Referenzen - Limani Immo</title>
		<meta charset="utf-8" />
		<meta name="Description" content="Referenzen - Limani Immo">
		<meta name="Keywords" content="Immobilien Referenzen - Limani Immo">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
		<link rel="manifest" href="images/favicon/site.webmanifest">
		<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body class="is-preload">
	
			<!--Button to go on TOP start-->
		<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="material-icons">&#xe316;</i></button>
		<script>
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				document.getElementById("myBtn").style.display = "block";
			} else {
				document.getElementById("myBtn").style.display = "none";
			}
		}
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
		</script>
		<!--Button to go on TOP end-->
	
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
					<div class="logo-banner"><a href="#" id="logo-banner"><img src="images/Desktop_250x115.svg" alt="" /></a></div>
					<!-- Logo for Mobile #titleBar in CSS and change it in main.js -->
					<h1 style="display:none;"><a href="#" id="logo-banner2"><img src="images/Mob_170x70.svg" alt="" /></a></h1>
						
					<!-- Nav START -->
					<nav id="nav">

						<?php
							$pageTitle = "referenzen";
							include "inc/nav.inc.php"; 
						?>

					</nav>
					<!-- Nav END -->

				</div>

				<!-- Banner -->
				<section id="banner" style="background-image: url('images/banner/banner_ref.jpg'); background-position: center center; background-size: cover;">
					<!-- <header>
						<span></span>
					</header> -->
				</section>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

						<!-- Content -->
							<article style="margin-top: -2.6em;">
									<!-- Gigantic Heading -->
									<header class="major">
										<h2>Unsere Referenzen</h2>
										<p></p>
									</header>
							</article> 
							
							<article>
							<!-- <h2>Team</h2> -->							
								<div class="row_gallery" style="margin-top: -2em; text-align: center;">

						 				<div class="column_referenzen">
											<a href="https://immopulse.swisslife.ch/de/">
												<img src="images/referenzen/swisslife.png" style="width:100%;">
												<span>Swiss Life AG</span>
											</a>
										</div>

										<div class="column_referenzen">
											<a href="https://www.amberg-bau.ch/">
												<img src="images/referenzen/amberg_logo.png" style="width:100%;">
												<span>AMBERG</span>
											</a>							
										</div>

										<div class="column_referenzen">
											<a href="https://www.shitrit.ch/">
												<img src="images/referenzen/MeirShitrit.jpg" style="width:100%;">
												<span>Meir Shitrit, Advocate-GmbH</span>
											</a>
										</div>										
										
										<div class="column_referenzen">
											<a href="https://www.stalder-immobilien.ch/">
												<img src="images/referenzen/peter_6.jpg" style="width:100%;">
												<span>Peter Stalder Immobilien AG</span>
											</a>
										</div>										
										
										<div class="column_referenzen">
											<a href="http://www.berisha-ag.ch/">
												<img src="images/referenzen/landing-immo.png" style="width:100%;">
												<span>Berisha AG</span>
											</a>
										</div>
										
										<div class="column_referenzen">
											<a href="http://www.eapartnersag.ch/">
												<img src="images/referenzen/e.a_partners.jpg" style="width:100%;">
												<span>E.A PARTNERS AG</span>
											</a>
										</div>										
										
										<div class="column_referenzen">
											<a href="http://sfdbauag.com/">
												<img src="images/referenzen/SFD-logo-400.108-pix.png" style="width:100%;">
												<span>SFD BAU AG</span>
											</a>
										</div>										
								</div>
							</article>

						</div>
					</div>
					<br><!-- dividing from the footer, just this page -->
				</section>				
			<!-- Footer START -->
			<div id="footer">	

				<?php include "inc/footer.inc.php";	?>		
					
			</div>
			<!-- Footer END -->

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>