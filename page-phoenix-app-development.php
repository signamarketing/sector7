<?php

/**
 * Template Name: Phoenix App Development
 * 
 * @package signa-starter
 */

get_header('phoenix-page'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="container-fluid no-gutter">
			<div class="row row-container">
				<div class="col-lg-6 fo1 f-center">
					<img class="phoenix-page work-with-us lazy" src="/wp-content/themes/signa-starter/img/iPhone-XR-black-iconic-input-min@2x.jpg" alt="ICONIC HAUS app image">
				</div>
				<div class="col-lg-6 fo2 f-center">
					<!-- <img src="/wp-content/themes/signa-starter/img/scout-perspective-mockup-min.jpg" class="hp-card-image lazy" alt="app mockup image" aos="fade-left" aos-once="true" > -->
					<h2 class="mt-0">Why work with Sector 7 Apps?</h2>
					<p style="color:#39BFC3; font-weight:700; font-size:22px; line-height:1.3;">We work with Phoenix startups and businesses in strategizing, designing and developing their web applications and mobile apps.</p>
					<p>At Sector 7 Apps, our Team has the knowledge and skills to develop applications that meet or exceed your business and user’s needs. You won’t have to worry about communication across state-lines, as all the help you’ll need is in our downtown Phoenix office. You’ll be able to meet and interact with all members of our talented team through the process of creating your app.</p>
					<p>Schedule a discovery call with us now by calling (602) 358-0199 to become one step closer to launching your mobile app!</p>
					<a class="btn black" href="/start-now/">Schedule A Discovery Meeting</a>
				</div>
			</div>
		</div>
		<div class="container-fluid main-nf-bg" style="position: relative; display: block; background: radial-gradient(#4cced1 19%,#34bec1);">
			<div class="row row-container services-list phoenix-app-dev">
				<div class="col-12" style="display: flex;flex-direction: row;margin-bottom:50px;margin-bottom:50px;">
					<img class="hp-card-image lazy" alt="" src="/wp-content/themes/signa-starter/img/strategy-icon-phoenix-dev.png">
					<div>
						<h2 class="white-text m-t-0">Strategy</h2>
						<p class="white-text">The only way to develop a web app or mobile app that addresses your business goals and solves current pain points, is by developing a clearly defined goal, strategy, and business plan. Our team has the strategic expertise to ensure your app thrives, whether your audience is in the local Phoenix area or the broad national market.</p>

					</div>
				</div>
				<div class="col-12" style="display: flex;flex-direction: row;margin-bottom:50px;">
					<img src="/wp-content/themes/signa-starter/img/ios_android-phoenix-dev.png" class="hp-card-image lazy" alt="">
					<div>
						<h2 class="white-text m-t-0">Mobile App Development (iOS & Android)</h2>
						<p class="white-text">Our Phoenix app development team consists of product strategists, innovative designers, and top-notch developers, who specialize in iOS and Android mobile applications. From first concept to launching and maintaining your app on the app store, our team will see your vision and purpose all the way through.</p>

					</div>
				</div>
				<div class="col-12" style="display: flex;flex-direction: row;margin-bottom:50px;">
					<img src="/wp-content/themes/signa-starter/img/web-app-phoenix-dev.png" class="hp-card-image lazy" alt="">
					<div>
						<h2 class="white-text m-t-0">Web App Development</h2>
						<p class="white-text">Whether you’re an existing business or a startup, we deliver not only mobile apps but also web app development services. You may need an Admin Dashboard for Business to Business apps, an app landing page for promotional purposes, or any other kind of web app to compliment your business venture. In many cases the web application can also be used to provide the same functionality as the mobile app, but for browser-based applications as some users may prefer to use a browser-accessed app.</p>
					</div>
				</div>
				<div class="col-12" style="display: flex;flex-direction: row;">
					<img src="/wp-content/themes/signa-starter/img/optimization-phoenix-dev.png" class="hp-card-image lazy" alt="">
					<div>
						<h2 class="white-text m-t-0">Optimization</h2>
						<p class="white-text">Continuous updates and improvements will keep your app ahead of the competition in today’s ever-changing market. Making sure we continue to optimize and enhance your mobile application is crucial to ensuring you are staying ahead of the curve and capitalize on the ever-evolving app user.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid no-gutter hp-card-image-spacer">
			<h2 style="text-align: center;margin-top: 75px;margin-bottom:0;">Process</h2>
			<div class="row row-container" style="justify-content:center;padding-bottom:0;">
				<div class="phoenix-process-tile f-center">
					<p class="mt-0 process-title">Ideation</p>
					<p>Identifying the practical uses of your app</p>
				</div>
				<div class="col-lg-4 phoenix-process-tile f-center">
					<p class="mt-0 process-title">Defining Scope</p>
					<p>Making the strategic decisions your app needs</p>
				</div>
				<div class="col-lg-4 phoenix-process-tile f-center">
					<p class="mt-0 process-title">Design</p>
					<p>Designing how your app will look, feel, and function</p>
				</div>
			</div>
			<div class="row row-container" style="justify-content:center;padding-top:0;">
				<div class="phoenix-process-tile f-center">
					<p class="mt-0 process-title">Development</p>
					<p>Coding your app to deliver a prototype and final product</p>
				</div>
				<div class="col-lg-4 phoenix-process-tile f-center">
					<p class="mt-0 process-title">Launch</p>
					<p>Delivering your app to the people who will use it</p>
				</div>
				<div class="col-lg-4 phoenix-process-tile f-center">
					<p class="mt-0 process-title">Maintenance and Growth</p>
					<p>Optimizing your app to keep you on the cutting edge</p>
				</div>
			</div>
		</div>

		<!-- Form CTA -->
		<?php get_template_part('template-parts/content-form-cta'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
