/*
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '981px',   '1280px' ],
			narrow:    [ '841px',   '980px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ '481px',   '736px'  ],
			mobilep:   [ null,      '480px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Dropdowns.
		$('#nav > ul').dropotron({
			offsetY: -15,
			hoverDelay: 0,
			alignment: 'center'
		});

	// Nav.

		// Bar.
			$(
				'<div id="titleBar">' +
					'<a href="#navPanel" class="toggle"></a>' +
					'<span class="title"><a href="http://limani-immo.ch">' + $('#logo-banner2').html() + '<a/></span>' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)

			/*$(
				'<div id="navPanel">' +
					'<nav>' +
						'<div">' + 

						'<a id="home" class="link depth-0" href="index.php">HOME</a>' +
						'<a id="dienstleistungen" class="link depth-0" href="dienstleistungen.php">DIENSTLEISTUNGEN</a>' +
						'<a id="referenzen" class="link depth-0" href="referenzen.php">REFERENZEN</a>' +
						'<a id="angebote" class="link depth-0" href="angebote.php">ANGEBOTE</a>' +
						'<a id="about" class="link depth-0" href="about.php">&Uuml;BER UNS</a>' +
						'<a id="kontakt" class="link depth-0" href="kontakt.php">KONTAKT</a>' +

						'</div>' +
					'</nav>' +
				'</div>'
			) */

				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: false,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

})(jQuery);