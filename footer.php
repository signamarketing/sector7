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

</div><!-- #content -->
<footer>

	<div id="colophon" class="site-footer container-fluid no-gutter">
		<div id="main-footer-section" class="row row-container">

			<div id="footer-sidebar3" class="col-sm-12 col-md-12 col-lg-6" style="align-items: initial; display: flex; margin-right:auto;">
				<?php if (is_active_sidebar('footer-sidebar-3')) {
					dynamic_sidebar('footer-sidebar-3');
				} ?>
			</div>

			<div id="footer-sidebar1" class="col-sm-12 col-md-6 col-lg-3">
				<?php if (is_active_sidebar('footer-sidebar-1')) {
					dynamic_sidebar('footer-sidebar-1');
				} ?>
			</div>
			<div id="footer-sidebar2" class="col-sm-12 col-md-6 col-lg-3">
				<?php if (is_active_sidebar('footer-sidebar-2')) {
					dynamic_sidebar('footer-sidebar-2');
				} ?>
				<div id="footer-socialShare">
					<a href="https://www.facebook.com/sector7apps" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-share/facebook.svg" alt="Signa Marketing Share on Facebook"></a>
					<!-- Twitter -->
					<a href="https://twitter.com/sector7apps" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-share/twitter.svg" alt="Signa Marketing Share on Facebook"></a>

					<!-- Instagram -->
					<a href="https://www.instagram.com/sector7apps/" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-share/instagram.svg" alt="Signa Marketing Share on Facebook"></a>

					<!-- Linkedin -->
					<a href="https://www.linkedin.com/company/sector7apps" rel="nofollow" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/social-share/linkedin.svg" alt="Signa Marketing Share on Facebook"></a>
				</ul>
			</div>
		</div><!-- .site-info -->
	</div><!-- #colophon -->

	<div class="copyright-section">
		<div class="row row-container text-center" style="padding:0px;">
			<p class="copyright-text">
				<a href="/sitemap_index.xml">Sitemap</a> | &copy; Copyright <?php echo date("Y"); ?>, Sector 7 Apps, All Rights reserved
			</p>
		</div>
	</div>
</footer>
</div><!-- #page -->

<!-- Lazy Loading -->
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@11.0.5/dist/lazyload.min.js"></script>
<script>
	/*var myLazyLoad = */
	new LazyLoad({
		data_src: "src",
		data_srcset: "srcset",
		show_while_loading: true, //best for progressive JPEG
		callback_set: function(img) {
			picturefill({
				elements: [img]
			});
		}
	});
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fontello/css/fontello.css">

<?php wp_footer(); ?>

<script async src="/wp-content/themes/signa-starter/js/master-js.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>0
<!-- <script src="/wp-content/themes/signa-starter/js/modernizr-custom-webp.js"></script> -->

<script>
	// AOS.init();

	Modernizr.on('webp', function(result) {
  if (result) {
	// supported
	console.log('WebP support detected');
  } else {
	// not-supported
	console.log('Missing webp support');
  }
});
</script>
</body>

</html>