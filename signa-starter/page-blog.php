<?php
/**
 * Template Name: Blog Page
 * 
 */
get_header('inner'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <?php while ( have_posts() ) : the_post(); ?>

        <!-- Hero -->

        <!-- Blog Archive -->

        <!-- CTA -->

      <?php endwhile; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
