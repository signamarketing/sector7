<?php 
/**
 * ATTENTION: This header is used for single blog post pages and does not have hero section with background image at the top like the other pages. This header only contains the navbar.
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
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2747V" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="page" class="site">

		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'signa-starter' ); ?>
		</a>


		<header class="container-fluid  no-gutter navbar-bg-color header-banner-bg">
			<div id="navbar">
				<nav class="row navbar-container bg-black">

					<a class="logo-container" alt="Sector 7 logo and homepage link" href="<?php echo esc_url( home_url( '/' ) ); ?>"
					 rel="home">
						<img class="logo" src="/wp-content/uploads/2018/07/Sector7Apps_logo.png">
						<img class="logo-2" src="/wp-content/uploads/2018/07/Sector7Apps_logoWHITE.png">
					</a>
					<span id="open-menu-btn" class="open-menu-btn" onclick="openMenu()">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</span>
					<span id="close-menu-btn" class="closebtn" onclick="closeMenu()">
						<i class="fa fa-times" aria-hidden="true"></i>
					</span>
					<?php
						wp_nav_menu( array ( 
							'theme_location' => 'my-custom-menu', 
							'container_id' => 'primary-menu' 
						) ); 
					?>
				</nav>
			</div>

			<!-- Page progress bar -->
			<?php if('post' === get_post_type()): ?>
				<div class="progress-container">
					<div class="progress-bar"></div>
				</div>
			<?php endif; ?>

		</header>

		<div id="content" class="site-content">
		