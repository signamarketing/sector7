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
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
				<div class="container-fluid main-nf-bg" style="position: relative; display: block; background: radial-gradient(#4cced1 19% ,#34bec1);">
					<div class="row row-container">
						<div class="col-12">
							<p "contact-form-title-1">NEED AN APP?</p>
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