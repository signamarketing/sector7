<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package signa-starter
 */

get_header('single'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container-fluid no-gutters">
				<div class="row row-container">


					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'We\'re sorry. The page you requested is not available.', 'signa-starter' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'If you used a bookmark, the page may have been moved, or it no longer exists. If you typed in the URL, please check it and try again.', 'signa-starter' ); ?></p>

							<?php
								// get_search_form();

								// the_widget( 'WP_Widget_Recent_Posts' );
							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				


				</div>
			</div>
			

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
