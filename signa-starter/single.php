<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package signa-starter
 */

get_header('inner'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="container-fluid no-gutters">
			<div class="row row-container">

				<div class="col-sm-8 offset-sm-2">

				<?php while ( have_posts() ) : the_post(); ?>

						<h2><?php the_title(); ?></h2>

						<?php the_content();

						the_post_navigation(); ?>

					<?php endwhile; // End of the loop. ?>

				</div>

			

			</div>
		</div>

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
