<ul>

	<li<?php if ($pageTitle == "home") { echo ' class="current"'; } ?>><a href="index.php">HOME</a></li>
	<li<?php if ($pageTitle == "dienstleistungen") { echo ' class="current"'; } ?>><a href="dienstleistungen.php">DIENSTLEISTUNGEN</a></li>
	<li<?php if ($pageTitle == "referenzen") { echo ' class="current"'; } ?>><a href="referenzen.php">REFERENZEN</a></li>
	<li<?php if ($pageTitle == "angebote") { echo ' class="current"'; } ?>><a href="angebote.php">ANGEBOTE</a></li>
	<li<?php if ($pageTitle == "about") { echo ' class="current"'; } ?>><a href="about.php">&Uuml;BER UNS</a></li>
	<li<?php if ($pageTitle == "kontakt") { echo ' class="current"'; } ?>><a href="kontakt.php">KONTAKT</a></li>

	<!--<li>
		<a href="#">Dropdown</a>
		<ul>
			<li><a href="#">Lorem dolor</a></li>
			<li><a href="#">Magna phasellus</a></li>
			<li>
				<a href="#">Submenu</a>
				<ul>
					<li><a href="#">Lorem dolor</a></li>
					<li><a href="#">Phasellus magna</a></li>
				</ul>
			</li>
			<li><a href="#">Veroeros feugiat</a></li>
		</ul>
	</li>-->

</ul>

<!-- <script>
         $(document).ready(function(){
           $("#home").click(function(e){
           	e.preventDefault();
             $('#home').addClass('active');
           });
        });
</script> -->