<?php 
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signa-starter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-KQ2747V');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<?php wp_head(); ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "LocalBusiness",
			"additionalType": "Mobile App Development iOS and Android",
			"name": "Sector 7 Apps",
			"image": "https://www.sector7apps.com/wp-content/uploads/2018/07/Sector7Apps_logo.png",
			"logo": "https://www.sector7apps.com/wp-content/uploads/2018/07/Sector7Apps_logo.png",
			"@id": "https://www.sector7apps.com/",
			"url": "https://www.sector7apps.com/",
			"description": "Sector 7 Apps is a skilled in-house iPhone and Android App Development team for startups and enterprise clients. We build the best apps through extensive strategy, careful development, rigorous QA and user testing, and creative branding and design.",
			"priceRange": "$$",
			"telephone": "602-358-0199",
			"address": {
				"@type": "PostalAddress",
				"addressLocality": "Phoenix",
				"addressRegion": "AZ",
				"postalCode": "85034",
				"streetAddress": "1201 E Jefferson St #4A "
			},
			"geo": {
				"@type": "GeoCoordinates",
				"latitude": 33.4468662,
				"longitude": -112.05602440000001
			},
			"openingHoursSpecification": [{
				"@type": "OpeningHoursSpecification",
				"dayOfWeek": [
					"Monday",
					"Tuesday",
					"Wednesday",
					"Thursday",
					"Friday"
				],
				"opens": "09:00",
				"closes": "17:00"
			}]
		}
	</script>

</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2747V" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'signa-starter' ); ?>
		</a>

		<header class="container-fluid  no-gutter navbar-bg-color header-banner-bg">
			<div class="homepage-background-img-filter"></div>
			<div id="navbar">
				<nav class="row navbar-container">

					<a class="logo-container" alt="Sector 7 logo and homepage link"
						href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img class="logo-2 lazy" data-src="/wp-content/uploads/2018/07/Sector7Apps_logoWHITE.png">
						<img class="logo lazy" data-src="/wp-content/uploads/2018/07/Sector7Apps_logo.png">
					</a>
					<span id="open-menu-btn" class="open-menu-btn" onclick="openMenu()">
						<i class="icon-menu"></i>
					</span>
					<span id="close-menu-btn" class="closebtn" onclick="closeMenu()">
						<i class="icon-cancel"></i>
					</span>
					<?php
						wp_nav_menu( 
							array( 
    					'theme_location' => 'my-custom-menu', 
							'container_id' => 'primary-menu'
							) 
						); 
					?>
				</nav>
			</div>

			<div id="hp-banner" class="header-banner row no-gutter">
				<div class="padding-hero">
					<div class="col-12">
						<p class="above-header">iOS + ANDROID</p>
						<h1 style="margin-top:0px;">Mobile App Development</h1>
					</div>
					<div class="col-12">
						<p>If your plans don't include mobile, your plans are not finished</p>
					</div>
					<div class="col-12">
						<a href="/contact-us/" class="btn">Contact Us</a>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">