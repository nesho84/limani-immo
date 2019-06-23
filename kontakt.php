<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Kontakt - Limani Immo</title>
		<meta charset="utf-8" />
		<meta name="Description" content="Kontaktieren Sie uns!
		Wir freuen uns, wenn Sie mit uns Kontakt aufnehmen und einen Termin vereinbaren. Wir beraten Sie gerne persönlich!">
		<meta name="Keywords" content="Immobilien, Kontaktieren Sie uns  - Limani Immo">
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
							$pageTitle = "kontakt";
							include "inc/nav.inc.php"; 
						?>

					</nav>
					<!-- Nav END -->

				</div>

			<!-- Main Title Header -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">
							<!-- Content -->
							<article>								
								<!-- Gigantic Heading -->
								<header class="major">
									<h2>Kontaktieren Sie uns!</h2>
									<p>Wir freuen uns, wenn Sie mit uns Kontakt aufnehmen und einen Termin vereinbaren. Wir beraten Sie gerne persönlich!</p>
								</header>								
							</article>
						</div>
					</div>
				</section>

			<!-- Highlights Links with Big Icons-->
				<section class="wrapper style1" style="padding: 1em 2em 1em 2em;">
					<div class="container">
						<div id="content">
							<div class="major" style="padding-left:0;">
								<ul class="links" style="text-align:center;">
									<!-- Email Icon with link-->
									<li style="padding-left:0;"><a href="#kontakt"><i class="icon major fa-envelope"></i></a>
									<h3>Kontaktformular</h3>
									<p>Klicken Sie hier, um uns eine Nachricht per Kontaktformular zu senden.</p>
									</li>
									<!-- Location Icon with link-->
									<li style="padding-left:0;"><a href="https://goo.gl/maps/3SUigY2dBSx"><i class="icon major fa-map-marker"></i></a>
									<h3>Standort</h3>
									<p>Wo Sie uns finden.</p>
									</li>
									<!-- Tel Icon with link-->
									<li style="padding-left:0;"><a href="tel:+41768050565"><i class="icon major fa-phone-square"></i></a>
									<h3>Telefon</h3>
									<p>Telefonieren Sie uns.</p>
									</li>
									<!-- Mail Icon with link mailto-->
									<li style="padding-left:0;"><a href="mailto:info@limani-immo.ch"><i class="icon major fa-at"></i></a>
									<h3>E-mail</h3>
									<p>Schreiben Sie uns ein E-Mail.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</section>

				<!-- Google Maps -->
				<section class="wrapper style1" id="maps" style="padding-top:0;">
					<div class="container">
						<div id="content">
						<div class="major">
						
						<header class="major"><p></p></header>	
						
							<section class="col-6 col-12-narrower">
								<h3>Standort</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2707.953737110514!2d8.182333315728082!3d47.256607920082494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479019164c49f775%3A0xd352ea1ffea641f9!2sFriedstrasse+4%2C+5734+Reinach%2C+Switzerland!5e0!3m2!1sen!2sat!4v1539000937098" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
							</section>
						</div>
						</div>
					</div>
				</section>
				
			<!-- Kontakt -->
			<script src="kontakt_mailer.js"></script>
				<section class="wrapper style1">
					<div class="container">
						<div id="content">
						<div class="major">										
						
						<!-- line above Kontakt form -->
						<header class="major"><p></p></header>						
							
							<!-- Kontakt form begin -->
							<div class="email_form">
							<section class="col-6 col-12-narrower">
								
								<h3 id="kontakt">Kontaktformular</h3>

								<!-- Form START -->
								<form action="kontakt_mailer.php" method="POST" >
									<div class="row gtr-50">
										<div class="col-6 col-12-mobilep">
											<input id="mail-name" type="text" name="name" placeholder="Name" />
										</div>
										<div class="col-6 col-12-mobilep">
											<input id="mail-email" type="text" name="email" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea id="mail-message" name="message" placeholder="Message" rows="10"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li>
													<button id="mail-submit" type="submit" name="submit" class="button alt">Senden</button> 
												</li>
											</ul>
										</div>
									</div>
								</form>

								<!--Error Messages-->
								<div id="email_msg"></div>
								<!-- Form END -->

							</section>
						</div>

						</div>
						</div>
					</div>
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