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

		<div class="container-fluid no-gutters">
			<div class="row row-container">
				<div class="col-lg-4 text-center services" data-aos="fade-up" data-aos-once="true" >
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/lightbulb.webp" type="image/webp" class="lazy" alt="lightbulb icon" style="width: auto; height: 110px;">
						<source data-srcset="/wp-content/uploads/2018/07/lightbulb.png" type="image/png" class="lazy" alt="lightbulb icon" style="width: auto; height: 110px;"> 
						<img data-src="/wp-content/uploads/2018/07/lightbulb.png" class="lazy" alt="lightbulb icon" style="width: auto; height: 110px;">
          </picture>
					<h2>Strategy + Planning</h2>
					<p>The only way to develop a mobile app that addresses your business goals, and solves current pain points, is by
						developing a clearly defined goal, strategy, and laying out a plan for a successful launch and execution of your
						mobile app.</p>
				</div>
				<div class="col-lg-4 text-center services" data-aos="fade-up" data-aos-once="true" >
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/phone.webp" type="image/webp" class="lazy" alt="phone icon" style="width: auto; height: 110px;">
						<source data-srcset="/wp-content/uploads/2018/07/phone.png" type="image/png" class="lazy" alt="phone icon" style="width: auto; height: 110px;"> 
						<img data-src="/wp-content/uploads/2018/07/phone.png" class="lazy" alt="phone icon" style="width: auto; height: 110px;">
          </picture>
					<h2>iOS + Android</h2>
					<p>Our team of product development strategists, innovative designers, and top-notch developers, specialize in iOS
						and Android mobile application design and development. From concept to launch, our team will see your vision and
						purpose all the way through.</p>
				</div>
				<div class="col-lg-4 text-center services" data-aos="fade-up" data-aos-once="true" >
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/tool.webp" type="image/webp" class="lazy" alt="tool icon" style="width: auto; height: 110px;">
						<source data-srcset="/wp-content/uploads/2018/07/tool.png" type="image/png" class="lazy" alt="tool icon" style="width: auto; height: 110px;"> 
						<img data-src="/wp-content/uploads/2018/07/tool.png" class="lazy" alt="tool icon" style="width: auto; height: 110px;">
          </picture>
					<h2>Optimization</h2>
					<p>As smart business owners, we all know that this ever-changing market can quickly leave you in the dust. Making sure we continue to optimize and enhance your mobile app is extremely important to ensuring you are staying ahead of the curve.</p>
				</div>
			</div>

			<div class="row row-container" style="padding-top: 0px;">
				<div class="col-lg-6 text-center services-buttons" data-aos="fade-up" data-aos-once="true" >
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/apple.webp" type="image/webp" class="lazy" alt="apple icon" style="width: auto; height: 110px;">
						<source data-srcset="/wp-content/uploads/2018/07/apple.png" type="image/png" class="lazy" alt="apple icon" style="width: auto; height: 110px;"> 
						<img data-src="/wp-content/uploads/2018/07/apple.png" class="lazy" alt="apple icon" style="width: auto; height: 110px;">
          </picture>
					<h2>iOS Development</h2>
					<p>iPhone app development at it’s finest. The Sector 7 Apps team has the experience and business knowledge to make your iPhone app successful.</p>
					<a class="btn black" href="/ios-app-development/">Learn More</a>
				</div>
				<div class="col-lg-6 text-center services-buttons" data-aos="fade-up" data-aos-once="true" >
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/android.webp" type="image/webp" class="lazy" alt="android icon" style="width: auto; height: 110px;">
						<source data-srcset="/wp-content/uploads/2018/07/android.png" type="image/png" class="lazy" alt="android icon" style="width: auto; height: 110px;"> 
						<img data-src="/wp-content/uploads/2018/07/android.png" class="lazy" alt="android icon" style="width: auto; height: 110px;">
          </picture>
					<h2>Android Development</h2>
					<p>Sector 7 stays ahead of the game in the Android app development space, and is sure to deliver an app that both you and your audience will love.</p>
					<a class="btn black" href="/android-app-development/">Learn More</a>
				</div>
			</div>
		</div>

		<!-- Bold Statement -->
		<div class="container-fluid no-gutter bold-statement-bg" data-aos="fade-up" data-aos-once="true" >
			<div class="row row-container bold-statement-box">
				<div class="col-md-6 col-lg-5 fo2 text-center">
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/bold-statement-banner-img-2.webp" type="image/webp" class="bold-statement-img lazy" alt="three shiny phones" >
						<source data-srcset="/wp-content/uploads/2018/03/bold-statement-banner-img-2.png" type="image/png" class="bold-statement-img lazy" alt="three shiny phones" > 
						<img data-src="/wp-content/uploads/2018/03/bold-statement-banner-img-2.png" class="bold-statement-img lazy" alt="three shiny phones" >
          </picture>
				</div>
				<div class="col-md-6 col-lg-4 fo1 f-center" style="align-items: center; display: flex;">
					<p class="bold-statement">Make a Bold Statement</p>
				</div>
			</div>
		</div>

		<!-- App Development -->
		<div class="container-fluid no-gutter hp-card-image-spacer">
			<div class="row row-container">
				<div class="col-lg-6 fo2 f-center">
					<h2 class="mt-0">Expert Mobile App Developers</h2>
					<p style="color:#39BFC3; font-weight:700; font-size:22px; line-height:1.3;">We thrive off challenges. Our talented
						and experienced design and development team are ready for your next big idea.</p>

					<p>You should only want the best of the best to design and build your mobile applications. At Sector 7 Apps, our team is highly capable and experienced in building apps. We’ve utilized and improved upon industry standard processes to develop our own unique and efficient concept-to-launch process. Our hard-boiled processes allow us to quickly build apps that fit in with your overall business strategy. Your app shouldn’t just be functional, it should benefit your company and remain aligned with your brand’s culture and style.</p>
					
					<p> In this industry, technology is ever-evolving and businesses have to adapt to remain current. So we’ve adopted a positive attitude towards change and we’re constantly looking for new software that can quicken app design, app
					development, and aid project management.</p>

					<a class="btn black" href="/start-now/">Schedule A Discovery Meeting</a>
				</div>
				<div class="col-lg-6 fo1 f-center">
					<picture>
						<source data-srcset="/wp-content/themes/signa-starter/img/webp/scout-perspective-mockup-min.webp" type="image/webp" class="hp-card-image lazy" alt="app mockup image" data-aos="fade-left" data-aos-once="true" >
						<source data-srcset="/wp-content/themes/signa-starter/img/scout-perspective-mockup-min.jpg" type="image/jpg" class="hp-card-image lazy" alt="app mockup image" data-aos="fade-left" data-aos-once="true" > 
						<img data-src="/wp-content/themes/signa-starter/img/scout-perspective-mockup-min.jpg" class="hp-card-image lazy" alt="app mockup image" data-aos="fade-left" data-aos-once="true" >
          </picture>
				</div>
			</div>
		</div>

		<!-- Form CTA -->
		<?php get_template_part('template-parts/content-form-cta'); ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>