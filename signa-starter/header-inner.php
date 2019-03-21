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

		<?php
        $thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];?>
		<header class="container-fluid  no-gutter navbar-bg-color header-banner-bg" style="background:url(' <?php echo $thumb_url ?> ');     background-size: cover;">
			<div class="inner-page-banner-filter"></div>
			<div id="navbar">
				<nav class="row navbar-container">

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

			<div id="inner-banner" class="header-banner container-fluid no-gutter">

				<div class="row" style="width:1200px; margin: auto;">
					<div class="col-12" style="display: block; position: relative; padding: 234px 0 56px; width: 100%;">
						<h1>
							<?php the_title(); ?>
						</h1>

						<?php if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
              
                  <div>
                    <?php 
                      function my_display_gravatar() { 
                        // Get User Email Address
                        $getuseremail = get_the_author_meta('user_email');
                  
                        // Convert email into md5 hash and set image size to 200 px
                        $usergravatar = 'https://www.gravatar.com/avatar/' . md5($getuseremail) . '?s=40';
                        echo '<img src="' . $usergravatar . '" class="wpb_gravatar" />';
                      } 
                      echo my_display_gravatar();
                    ?>
                  </div>

                  <div><?php echo the_author_meta('display_name'); ?></div>
                  <div>
                    Published: <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
                  </div>

                  <div>
                    <div class="reading-time"></div>
                  </div>


                </div><!-- .entry-meta -->
              <?php endif; ?>
					</div>
				</div>
			</div>
		</header>

		<div id="content" class="site-content">