<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="en">
	<head>
		<title>Home - Limani Immo</title>
		<meta charset="utf-8" />
		<meta name="Description" content="Herzlich Willkommen bei Limani Immo.ch Homepage!">
		<meta name="Keywords" content="Entwicklung, Vermittlung und Verkauf von Immobilien Die Immobilie bleibt die beste Wertanlage – wir helfen Ihnen, diese zu erhalten. UNSER ZIEL Wir sind oft Lautlose Vermittler von Punk A "Verkäufer" zum punkt B "Käufer" Absolut Diskret. ">
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
 		<!--ResponsiveSlides.js ss start-->
		 <link rel="stylesheet" href="assets/css/w3-slideshow.css" />
  		<!--ResponsiveSlides.js css end-->
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

				<!-- Header START -->
				<div id="header">

				<!-- Logo -->
					<div class="logo-banner"><a href="http://limani-immo.ch" id="logo-banner"><img src="images/Desktop_250x115.svg" alt="" /></a></div>
					<!-- Logo for Mobile #titleBar in CSS and change it in main.js -->
					<h1 style="display:none;"><a href="#" id="logo-banner2"><img src="images/Mob_170x70.svg" alt="" /></a></h1>
					
					<!-- Nav START -->
					<nav id="nav">

						<?php 
							$pageTitle = "home";
							include "inc/nav.inc.php"; 
						?>

					</nav>
					<!-- Nav END -->

				</div>
				<!-- Header END -->				

				<!-- W3schools Slideshow -->
					<div class="slideshow-container">
					
						<div class="mySlides fade">
							<div class="numbertext">1 / 5</div>
							<img src="images/banner/building1.jpg" style="width:100%">
							<div class="text">
							<header>					
								<h2 style="margin:5px 0 5px 0;">Vermietung von Gewerberäumen, Büro/Gewerbe/Industrie.</h2>
								<a href="about" class="button" style="margin-bottom:10px;">Mehr erfahren</a>
							</header>
							</div>
						</div>
					
						<div class="mySlides fade">
							<div class="numbertext">2 / 5</div>
							<img src="images/banner/bussines1.jpg" style="width:100%">
							<div class="text">
							<header>					
								<h2 style="margin:5px 0 5px 0;">Wir vermittlen Bauland, Neubauten, bewilligte Projekte und Handwerker.</h2>			
							</header>
							</div>
						</div>
					
						<div class="mySlides fade">
							<div class="numbertext">3 / 5</div>
							<img src="images/banner/haus1.jpg" style="width:100%">
							<div class="text">
							<header>					
								<h2 style="margin:5px 0 5px 0;">Bei uns finden Sie Ihr Zuhause.</h2>
							</header>
							</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">4 / 5</div>
							<img src="images/banner/kulm1.jpg" style="width:100%">
							<div class="text">
							<header>					
								<h2 style="margin:5px 0 5px 0;">Wir verkaufen Renditeobjekte absolut diskret.</h2>
							</header>
							</div>
						</div>
						
						<div class="mySlides fade">
							<div class="numbertext">5 / 5</div>
							<img src="images/banner/home2.jpg" style="width:100%">
							<div class="text">
							<header>					
								<h2 style="margin:5px 0 5px 0;">Wir helfen Ihnen die geeignete Finanzierung für Ihr Traumobjekt zu finden.</h2>
							</header>
							</div>
						</div>
					
						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					
					</div>
					
					<div class="dot_container">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
						<span class="dot" onclick="currentSlide(4)"></span>
						<span class="dot" onclick="currentSlide(5)"></span>
					</div>
				<!--<header>					
					<h2><em>Handel und Vermittlung von <a href="https://de.wikipedia.org/wiki/Immobilie"> Immobilien</a></em></h2>
					<a href="about.html" class="button">Mehr erfahren</a>
				</header>-->
				<!--W3schools Slideshow script-->
				<script>
					var slideIndex = 1;
					var timer = null;
					showSlides(slideIndex);
					function plusSlides(n) {
						clearTimeout(timer);
						showSlides(slideIndex += n);
					}
					function currentSlide(n) {
						clearTimeout(timer);
						showSlides(slideIndex = n);
					}
					function showSlides(n) {
						var i;
						var slides = document.getElementsByClassName("mySlides");
						var dots = document.getElementsByClassName("dot");
						if (n == undefined) { n = ++slideIndex }
						if (n > slides.length) { slideIndex = 1 }
						if (n < 1) { slideIndex = slides.length }
						for (i = 0; i < slides.length; i++) {
							slides[i].style.display = "none";
						}
						for (i = 0; i < dots.length; i++) {
							dots[i].className = dots[i].className.replace(" active", "");
						}
						slides[slideIndex - 1].style.display = "block";
						dots[slideIndex - 1].className += " active";
						timer = setTimeout(showSlides, 5000);
					} 
				</script>
				<!--W3Schools Slideshow end-->
			
			<!-- Gigantic Heading -->
			<section class="wrapper style2" style="padding-top: 4em;">
				<div class="container">
					<div id="content">
				
						<header class="major">
							<h2>Entwicklung, Vermittlung und Verkauf von Immobilien</h2>
							<p>Die Immobilie bleibt die beste Wertanlage – wir helfen Ihnen, diese zu erhalten.</p>
							<h2></h2>
							<p></p>
						</header>					
						
						<article class="box post" style="text-align:center;">
							<img src="images/pages/home_sign300.png" class="image" width="40%" alt="" />
								<h2>UNSER ZIEL</h2>
								<p>Wir sind oft Lautlose Vermittler von Punk A "Verkäufer" zum punkt B "Käufer"  Absolut Diskret.</p>

								<p>&nbsp;</p>
						</article>

					</div>
				</div>
			</section>			

			<!--<section class="wrapper style1">
				<div class="container">
					<div class="row gtr-200">
						<section class="col-4 col-12-narrower">
							<div class="box highlight">
								<i class="icon major fa-paper-plane"></i>
								<h3>This Is Important</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
							</div>
						</section>
						<section class="col-4 col-12-narrower">
							<div class="box highlight">
								<i class="icon major fa-pencil"></i>
								<h3>Also Important</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
							</div>
						</section>
						<section class="col-4 col-12-narrower">
							<div class="box highlight">
								<i class="icon major fa-wrench"></i>
								<h3>Probably Important</h3>
								<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
							</div>
						</section>
					</div>
				</div>
			</section>-->

				<!-- <section id="cta" class="wrapper style3">
					<div class="container">
						<header>
							<h2>Are you ready to continue your quest?</h2>
							<a href="#" class="button">Insert Coin</a>
						</header>
					</div>
				</section> -->			

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