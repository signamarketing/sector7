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
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="site">

			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'signa-starter' ); ?>
			</a>
		

			<header class="container-fluid  no-gutter navbar-bg-color header-banner-bg">
				<div class="homepage-background-img-filter"></div>
				<div id="navbar">
					<nav class="row navbar-container">

						<a class="logo-container" alt="Sector 7 logo and homepage link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<img class="logo" src="/wp-content/uploads/2018/01/Sector7Apps_logo.png">
							<img class="logo-2" src="/wp-content/uploads/2018/01/Sector7Apps_logo_white.png">
						</a>
						<span id="open-menu-btn" class="open-menu-btn" onclick="openMenu()">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
						<span id="close-menu-btn" class="closebtn" onclick="closeMenu()">
							<i class="fa fa-times" aria-hidden="true"></i>
						</span>
						<?wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_id' => 'primary-menu' ) ); 
?>
					</nav>
				</div>

				<div id="hp-banner" class="header-banner row no-gutter">
					<div style="width:1200px; max-width:100%; margin: auto auto; padding-top:40px;">
						<div class="col-12">
							<p style="margin-bottom: 0px; font-weight: 700; font-size: 22px; letter-spacing: 1px;">iOS + ANDROID</p>
							<h1 style="margin-top:0px;">Mobile App Experts</h1>
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