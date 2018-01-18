<?php
/**
 * The template for displaying all pages
 *Template Name: Contact Page
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package signa-starter
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
				<div class="container-fluid main-nf-bg" style="position: relative; display: block;">
					<div class="row row-container">
						<div class="col-12">
						<p class="contact-form-title" style="color:#ff783b">Let's Build An App</p>
							<?php
						echo do_shortcode('[ninja_form id=3]');
						?>
						</div>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
