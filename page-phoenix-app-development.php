<?php

/**
 * Template Name: Phoenix App Development
 * 
 * @package signa-starter
 */

get_header('inner'); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<div class="container-fluid no-gutter">
			<div class="row row-container">
				<div class="col-12 text-center">
					<picture>
						<source srcset="/wp-content/themes/signa-starter/img/webp/apple.webp" type="image/webp" alt="ios apple logo" style="width: auto; height: 110px;">
						<source srcset="/wp-content/uploads/2018/07/apple.png" type="image/png" alt="ios apple logo" style="width: auto; height: 110px;">
						<img src="/wp-content/uploads/2018/07/apple.png" alt="ios apple logo" style="width: auto; height: 110px;" class="lazy">
					</picture>
				</div>
				<div class="col-12">
					<h2 class="text-center">iPhone App Development Experts</h2>
					<p class="text-center">You have a killer app idea and we have the know how to bring that app to life on all iOS devices. At Sector 7 Apps, we’re all about building polished fine-tuned mobile apps. We’ll leverage our team of iOS software development experts to turn your idea into a reality.</p>
				</div>
			</div>
		</div>

		<div class="container-fluid no-gutter ios-page-row-bg">
			<div class="row row-container fixed-phone-row-padding">

				<div class="col-md-6 fixed-phone-clip">
					<div class="fixed-phone-position">
						<picture>
							<source srcset="/wp-content/themes/signa-starter/img/webp/ios-strategy.webp" type="image/webp" alt="ios app strategy">
							<source srcset="/wp-content/uploads/2019/05/ios-strategy.png" type="image/png" alt="ios app strategy">
							<img src="/wp-content/uploads/2019/05/ios-strategy.png" alt="ios app strategy" class="lazy">
						</picture>
					</div>
				</div>

				<div class="col-md-6 offset-md-6 col-12 white-text f-center">
					<h2 class="m-t-0">iPhone (iOS) Planning & Strategy</h2>
					<p>Illuminate the blindspots in your mobile strategy. We’ll help you further focus and expand your strategy to cover all aspects of the project and post-launch operations. This helps create a roadmap for the rest of our project development and integrating the app into your overall business strategy. During this stage we seek to understand your business, your app’s purpose, and the scope of the project so that we can deliver a custom tailored solution on time.</p>
					<ul class="text-left">
						<li>Brand & Business Exploration and Analysis</li>
						<li>Business Goals</li>
						<li>Competitive Research and Analysis</li>
						<li>Opportunity and Challenge Analysis and Identification</li>
						<li>Audience Insights</li>
						<li>Customer Journey Roadmap</li>
					</ul>
				</div>
			</div>
		</div>

		<div class="container-fluid no-gutter">
			<div class="row row-container fixed-phone-row-padding">

				<div class="col-md-6 fixed-phone-clip">
					<div class="fixed-phone-position">
						<picture>
							<source srcset="/wp-content/themes/signa-starter/img/webp/ios-design.webp" type="image/webp" alt="ios app design icon">
							<source srcset="/wp-content/uploads/2019/05/ios-design.png" type="image/png" alt="ios app design icon">
							<img src="/wp-content/uploads/2019/05/ios-design.png" alt="ios app strategy" class="lazy">
						</picture>
					</div>
				</div>

				<div class="col-md-6 offset-md-6 col-12 f-center">
					<h2 class="m-t-0">Design & User Experience</h2>
					<p>Our UI/UX experts design beautiful apps that make lasting impressions on your intended audience. The focus of this stage, is to create a convenient and seamless customer journey through an intuitive user interface. Your mobile application will be one of the best ways to interact with your company at the convenience of the customer. Innovative and branded designs will promote user engagement and satisfaction.</p>

				</div>
			</div>
		</div>

		<div class="container-fluid no-gutter ios-page-row-bg">
			<div class="row row-container fixed-phone-row-padding">

				<div class="col-md-6 fixed-phone-clip">
					<div class="fixed-phone-position">
						<picture>
							<source srcset="/wp-content/themes/signa-starter/img/webp/ios-development.webp" type="image/webp" alt="ios app development">
							<source srcset="/wp-content/uploads/2019/05/ios-development.png" type="image/png" alt="ios app development">
							<img src="/wp-content/uploads/2019/05/ios-development.png" alt="ios app development" class="lazy">
						</picture>
					</div>
				</div>

				<div class="col-md-6 offset-md-6 col-12 white-text f-center">
					<h2 class="m-t-0">Development & Testing</h2>
					<p>We utilize the latest technologies, like frameworks and SDK, to increase the pace of progress of the project and get the app in your user’s hands as fast as possible. It’s during this stage where we build full functionality and features that will help your app stand out from the crowd.</p>
					<p>In the testing phase, we’ll take the app through multiple stress tests, unit testing, compatibility testing, and memory and performance optimization testing. At the same time, we’ll be able to gather beta user test data and gather the feedback so this app is perfect for your target audience. </p>
				</div>
			</div>
		</div>

		<div class="container-fluid no-gutter">
			<div class="row row-container fixed-phone-row-padding">

				<div class="col-md-6 fixed-phone-clip">
					<div class="fixed-phone-position">
						<picture>
							<source srcset="/wp-content/themes/signa-starter/img/webp/ios-launch.webp" type="image/webp" alt="ios app launch icon">
							<source srcset="/wp-content/uploads/2019/05/ios-launch.png" type="image/png" alt="ios app launch icon">
							<img src="/wp-content/uploads/2019/05/ios-launch.png" alt="ios app launch icon" class="lazy">
						</picture>
					</div>
				</div>

				<div class="col-md-6 offset-md-6 col-12 f-center">
					<h2 class="m-t-0">Launching & Optimizing</h2>
					<p>Initially, your post-launch efforts will be focused on accruing a large audience of users and then keeping that audience engaged. One way to keep users coming back, is by rolling out feature updates and fixing any bugs that can appear post-launch. Essentially, we want the user experience and app functionality to get better and better for the user each time they interact with your app. </p>
				</div>
			</div>
		</div>

		<!-- Form CTA -->
		<?php get_template_part('template-parts/content-form-cta'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
