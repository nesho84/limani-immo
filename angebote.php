<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Angebote - Limani Immo</title>
		<meta charset="utf-8" />
		<meta name="Description" content="Limani Immo bietet Ihnen immer die besten Immobilien Angebote.">
		<meta name="Keywords" content="Immobilien Angebote - Limani Immo">
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
							$pageTitle = "angebote";
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
							<header>
								<h2>Top Angebote</h2>
								<p>Sehen Sie hier unsere aktuellen Angebote.</p>
							</header>
							
							<!-- Angebote .js ImageGallery -->
							<div class="row_gallery_container">
								<span class="image featured" ><img id="changeImg" src="images/pages/angebote.jpg" alt=""></span>								
								<div class="row_gallery_centered_text"><h2></h2></div>
							</div>
							
							<div class="row_gallery">
							  <div class="column_gallery">
								<a href="#" onclick="document.getElementById('changeImg').src='images/angebote/haus88.jpg'; document.getElementsByClassName('row_gallery_centered_text')[0].innerHTML = '<h2>MFH & EFH</h2><em>Einfamilienhäuser & Mehrfamilienhäuser</em>'; return false;">
								<img src="images/angebote/haus88.jpg" alt="Snow" style="width:100%;" />
								<div class="text_gallery">					
									<h2 style="margin: 9px 0 9px 0;" class="icon fa fa-home"><br />MFH & EFH</h2>
								</div>
								</a>
							  </div>
							  <div class="column_gallery">
								<a href="#" onclick="document.getElementById('changeImg').src='images/angebote/apartment.jpg'; document.getElementsByClassName('row_gallery_centered_text')[0].innerHTML = '<h2>Appartamenten</h2><em>Finden Sie das ideale Appartment zum Mieten oder Kaufen</em>'; return false;">
								<img src="images/angebote/apartment.jpg" alt="Forest" style="width:100%;" />
								<div class="text_gallery">					
									<h2 style="margin: 9px 0 9px 0;" class="icon fa fa-building"><br />Appartamenten</h2>
								</div>
								</a>
							  </div>
							  <div class="column_gallery">
								<a href="#" onclick="document.getElementById('changeImg').src='images/angebote/wohnung.jpg'; document.getElementsByClassName('row_gallery_centered_text')[0].innerHTML = '<h2>Wohnungen</h2><em>Wohnung kaufen oder Wohnung mieten?</em>'; return false;">
								<img src="images/angebote/wohnung.jpg" alt="Mountains" style="width:100%;" />
								<div class="text_gallery">					
									<h2 style="margin: 9px 0 9px 0;" class="icon fa fa-hotel"><br />Wohnungen</h2>
								</div>								
								</a>
							  </div>
							  <div class="column_gallery">
								<a href="#" onclick="document.getElementById('changeImg').src='images/angebote/grundstuck99.jpg'; document.getElementsByClassName('row_gallery_centered_text')[0].innerHTML = '<h2>Grundst&uuml;cke</h2><em>Attraktive Grundstücke für jedes Budget</em>'; return false;">
								<img src="images/angebote/grundstuck99.jpg" alt="Mountains" style="width:100%;" />
								<div class="text_gallery">					
									<h2 style="margin: 9px 0 9px 0;" class="icon fa fa-th"><br />Grundst&uuml;cke</h2>
								</div>
								</a>
							  </div>
							</div>
							
							<span>&nbsp;</span>
							
						</article>

						<div class="alert_angebote warning"> 
						  	<i class="material-icons" style="vertical-align: top; float: left;">info</i>
						  	&nbsp;<i> Wir möchten Ihnen immer die besten &nbsp;Angebote bieten.</i>
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