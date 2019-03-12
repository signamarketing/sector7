<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package signa-starter
 */

?>

	</div>
	<!-- #content -->
	<footer>
	<div id="colophon" class="site-footer container-fluid no-gutter">
		<div id="main-footer-section" class="row row-container">
		<div id="footer-sidebar3" class="col-md-6 f-center" style="align-items: center; display: flex; margin-right:auto;">
				<?php if(is_active_sidebar('footer-sidebar-3')){ dynamic_sidebar('footer-sidebar-3');}?>
			</div>
			<div id="footer-sidebar1" class="col-md-3 col-lg-3 f-center">
				<?php if(is_active_sidebar('footer-sidebar-1')){ dynamic_sidebar('footer-sidebar-1');}?>
			</div>

			<div id="footer-sidebar2" class="col-md-3 col-lg-3 f-center">
				<?php if(is_active_sidebar('footer-sidebar-2')){ dynamic_sidebar('footer-sidebar-2');}?>
			</div>


		</div>
		<!-- .site-info -->
</div>
	<div class="copyright-section">
			<div class="row row-container text-center" style="padding:0px;">
				<p class="copyright-text">
					<a href="#">Sitemap</a> | © Copyright 2019, Sector 7 Apps, All Rights reserved
				</p>
			</div>
		</div>
</footer>
	<!-- #colophon -->
	</div>
	<!-- #page -->
	<script src="https://use.fontawesome.com/52dda3483b.js"></script>	
	<script src="/wp-content/themes/signa-starter/js/master-js.js"></script>
	<?php wp_footer(); ?>

	</body>

	</html>