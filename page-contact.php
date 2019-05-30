<?php
/**
 * Template Name: Contact Page
 * 
 */
get_header('inner'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				
			endwhile; // End of the loop.
			?>

			<!-- Form CTA -->
			<?php get_template_part('template-parts/content-form-cta'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
