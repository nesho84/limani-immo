<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>&Uuml;ber uns - Limani Immo</title>
		<meta charset="utf-8" />
		<meta name="Description" content="Limani Immo Team,
		Dienstleistungsangebot in allen Immobilien-Treuhand-Sparten.
		Hervorragende Marktkenntnisse, persönliche Betreuung und überdurchschnittlicher Einsatz sind unsere Stärken.
		Wir schaffen Freiraum für Lösungen, welche optimal zu den Bedürfnissen unserer Kunden passen.
		Täglich engagieren wir uns zuverlässig dafür, dass unsere Kunden mit ihren Immobilien weniger Aufwand und noch mehr Erfolg haben. Sie sparen dadurch Zeit, Kosten und erhalten mehr Freiraum für das, was ihnen am Herzen liegt.
		Mit unserer aktiven und umsichtigen Personalbetreuung etablierten wir in der Branche ein hervorragendes Image. Dies ermöglicht uns stets bestens qualifizierte neue Mitarbeitende zu gewinnen.
		Lernen Sie uns persönlich kennen. Wir freuen uns über Ihre Kontaktaufnahme.">
		<meta name="Keywords" content="&Uuml;ber uns - Limani Immo">
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
							$pageTitle = "about";
							include "inc/nav.inc.php"; 
						?>

					</nav>
					<!-- Nav END -->

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->
							<article>
								<!-- Gigantic Heading -->
								<header class="major">
									<h2>&Uuml;ber uns</h2>
									<p>Limani Immo - Team</p>
								</header>
								<span class="image featured"><img src="images/pages/ueber2.jpg" alt="" /></span>
							</article>

								<article style="margin-top: 1em;">
									<header class="major">
										<span style="line-height: 2em;">
											Dienstleistungsangebot in allen Immobilien-Treuhand-Sparten.<br>

											Hervorragende Marktkenntnisse, pers&ouml;nliche Betreuung und &uuml;berdurchschnittlicher Einsatz sind unsere
											St&auml;rken.<br>

											Wir schaffen Freiraum f&uuml;r L&ouml;sungen, welche optimal zu den Bed&uuml;rfnissen unserer Kunden passen.<br>

											T&auml;glich engagieren wir uns zuverl&auml;ssig daf&uuml;r, dass unsere Kunden mit ihren Immobilien weniger
											Aufwand und noch mehr Erfolg haben. Sie sparen dadurch Zeit, Kosten und erhalten mehr Freiraum f&uuml;r
											das, was ihnen am Herzen liegt.<br>

											Mit unserer aktiven und umsichtigen Personalbetreuung etablierten wir in der Branche ein
											hervorragendes Image. Dies erm&ouml;glicht uns stets bestens qualifizierte neue Mitarbeitende zu gewinnen.<br>

											Lernen Sie uns pers&ouml;nlich kennen. Wir freuen uns &uuml;ber Ihre Kontaktaufnahme.
											
										</span>
									</header>
								</article>

							<section class="col-4 col-12-narrower">
								<!-- <h2>Team</h2> -->
								<div class="about_box">
									<ul>
										<li><strong>Limani Neshat</strong></li>
										<li><em>Inhaber / Immobilienmakler</em></li>
										<li class="icon fa-address-card">&nbsp; Friedstrasse 4</li>
										<li class="icon fa-map">&nbsp; 5734 Reinach AG</li>
										<li class="icon fa-phone-square">&nbsp;&nbsp;&nbsp;+41 76 805 05 65</li>
										<li class="icon fa-envelope"><a href="mailto:n.limani@limani-immo.ch">&nbsp; n.limani@limani-immo.ch</li>
									</ul>
								</div>
							</section>

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