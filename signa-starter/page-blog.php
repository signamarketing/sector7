<?php
/**
 * Template Name: Blog Page
 * 
 */
get_header('inner'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <?php while ( have_posts() ) : the_post(); ?>

        <!-- Blog Archive -->
        <div class="container-fluid no-gutters">
          <div class="row row-container">

            <!-- Search and cats -->



            <!-- WP Query -->
            

          </div>
        </div>

        <!-- Form CTA -->
        <div class="container-fluid main-nf-bg" style="position: relative; display: block; background: radial-gradient(#4cced1 19%,#34bec1);">
          <div class="row row-container">
            <div class="col-12">
              <p class="bold-statement text-center" style="padding-bottom: 25px;">Need an App?<br>Let's Chat</p>
              <?php echo do_shortcode('[ninja_form id=2]'); ?>
            </div>
          </div>
        </div>

      <?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
