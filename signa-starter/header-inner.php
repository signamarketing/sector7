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
		(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-KQ2747V');
		</script>
		<!-- End Google Tag Manager -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css?family=Heebo:300,400,700,900" rel="stylesheet">
		<script src="/wp-content/themes/signa-starter/js/master-js.js"></script>
		<script type="text/javascript" src="wp-content/themes/signa-starter/js/retina.min.js"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ2747V"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div id="page" class="site">

			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'signa-starter' ); ?>
			</a>

			<?php
        $thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];?>
				<header class="container-fluid  no-gutter navbar-bg-color header-banner-bg" style="background:url(' <?php echo $thumb_url ?> ');     background-size: cover;">
					<div class="inner-page-banner-filter"></div>
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
							<?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_id' => 'primary-menu' ) ); 
?>
						</nav>
					</div>

					<div id="inner-banner" class="header-banner container-fluid no-gutter">

						<div class="row" style="width:1200px; margin: auto;">
							<div class="col-12" style="display: block;
    position: relative;
    padding: 234px 0 56px;
    width: 100%;">
								<h1><?php the_title(); ?></h1>
							</div>
						</div>
					</div>
				</header>

				<div id="content" class="site-content">