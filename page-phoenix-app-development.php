<?php

/**
 * Template Name: Phoenix App Development
 * 
 * @package signa-starter
 */

get_header('inner'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="container-fluid no-gutter hp-card-image-spacer">
			<div class="row row-container">
				<div class="col-lg-6 fo2 f-center">
					<img data-src="/wp-content/themes/signa-starter/img/iPhone-XR-black-iconic-input-min@2x.jpg" class="hp-card-image lazy" alt="ICONIC HAUS app image">
				</div>
				<div class="col-lg-6 fo1 f-center">
					<!-- <img data-src="/wp-content/themes/signa-starter/img/scout-perspective-mockup-min.jpg" class="hp-card-image lazy" alt="app mockup image" data-aos="fade-left" data-aos-once="true" > -->
					<h2 class="mt-0">Why work with Sector 7 Apps?</h2>
					<p style="color:#39BFC3; font-weight:700; font-size:22px; line-height:1.3;">We work with Phoenix startups and businesses in strategizing, designing and developing their web applications and mobile apps.</p>

					<p>At Sector 7 Apps, our Team has the knowledge and skills to develop applications that meet or exceed your business and user’s needs. You won’t have to worry about communication across state-lines, as all the help you’ll need is in our downtown Phoenix office. You’ll be able to meet and interact with all members of our talented team through the process of creating your app.</p>

					<p>Schedule a discovery call with us now by calling (602) 358-0199 to become one step closer to launching your mobile app!</p>

					<a class="btn black" href="/start-now/">Schedule A Discovery Meeting</a>
				</div>
			</div>
		</div>

		<!-- Form CTA -->
		<?php get_template_part('template-parts/content-form-cta'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
