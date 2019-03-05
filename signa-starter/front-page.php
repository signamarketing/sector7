<?php
/**
 * The main template file
 *Template Name: Front Page
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package signa-starter
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container-fluid no-gutter">
			<div class="row row-container" style="padding-top: 120px; padding-bottom: 100px;">
				<div class="row" style="padding-bottom: 124px;">
					<div class="col-md-4 m-b-8 text-center services"><img style="width: auto; height: 110px;" src="/wp-content/uploads/2018/07/lightbulb.png">
						<h2>Strategy + Planning</h2>
						The only way to develop a mobile app that addresses your business goals, and solves current pain points, is by
						developing a clearly defined goal, strategy, and laying out a plan for a successful launch and execution of your
						mobile app.

					</div>
					<div class="col-md-4 m-b-8 text-center services"><img style="width: auto; height: 110px;" src="/wp-content/uploads/2018/07/phone.png">
						<h2>iOS + Android</h2>
						Our team of product development strategists, innovative designers, and top-notch developers, specialize in iOS
						and Android mobile application design and development. From concept to launch, our team will see your vision and
						purpose all the way through.

					</div>
					<div class="col-md-4 text-center services"><img style="width: auto; height: 110px;" src="/wp-content/uploads/2018/07/tool.png">
						<h2>Optimization</h2>
						As smart business owners, we all know that this ever-changing market can quickly leave you in the dust. Making
						sure we continue to optimize and enhance your mobile app is extremely important to ensuring you are staying ahead
						of the curve.

					</div>
				</div>
				<div class="col-md-6 m-b-8 text-center"><img style="width: auto; height: 110px;" src="/wp-content/uploads/2018/07/apple.png">
					<h2>iOS Development</h2>
					iPhone app development at it’s finest. The Sector 7 Apps team has the experience and business knowledge to make
					your iPhone app successful.

					<a class="btn black" href="/ios-app-development/">Learn More</a>

				</div>
				<div class="col-md-6 text-center"><img style="width: auto; height: 110px;" src="/wp-content/uploads/2018/07/android.png">
					<h2>Android Development</h2>
					Sector 7 stays ahead of the game in the Android app development space, and is sure to deliver an app that both you
					and your audience will love.

					<a class="btn black" href="/android-app-development/">Learn More</a>

				</div>
			</div>
		</div>
		<div class="container-fluid no-gutter bold-statement-bg">
			<div class="row row-container" style="padding: 0px; min-height: 354px;">
				<div class="col-md-6 fo2 text-center"><img class="bold-statement-img" src="/wp-content/uploads/2018/03/bold-statement-banner-img-2.png"></div>
				<div class="col-md-6 fo1 f-center" style="align-items: center; display: flex;">
					<p class="bold-statement">Make a
						Bold Statement

				</div>
			</div>
		</div>
		<div class="container-fluid no-gutter hp-card-image-spacer">
			<div class="row row-container">
				<div class="col-lg-6 fo2 f-center">
					<h2>Expert Mobile App Developers</h2>
					<p style="color:#39BFC3; font-weight:700; font-size:22px; line-height:1.3;">We thrive off challenges. Our talented
						and experienced design and development team are ready for your next big idea.</p>
					You should only want the best of the best to design and build your mobile applications. At Sector 7 Apps, our team
					is highly capable and experienced in building apps. We’ve utilized and improved upon industry standard processes
					to develop our own unique and efficient concept-to-launch process. Our hard-boiled processes allow us to quickly
					build apps that fit in with your overall business strategy. Your app shouldn’t just be functional, it should
					benefit your company and remain aligned with your brand’s culture and style.

					In this industry, technology is ever-evolving and businesses have to adapt to remain current. So we’ve adopted a
					positive attitude towards change and we’re constantly looking for new software that can quicken app design, app
					development, and aid project management.

					<a class="btn black" href="/start-now/">Schedule A Discovery Meeting</a>

				</div>
				<div class="col-lg-6 fo1 f-center"><img class="hp-card-image" src="/wp-content/uploads/2018/03/Scout-Perspective-Mockups.png"></div>
			</div>
		</div>
		<div class="container-fluid main-nf-bg" style="position: relative; display: block; background: radial-gradient(#4cced1 19% ,#34bec1);">
			<div class="row row-container">
				<div class="col-12">
					<p class="contact-form-title-1">NEED AN APP?</p>
					<p class="contact-form-title-2">LET'S CHAT.</p>
					<?php
						echo do_shortcode('[ninja_form id=2]');
						?>
				</div>
			</div>
		</div>
	</main>
	<!-- #main -->
</div>
<!-- #primary -->





<?php
get_footer();