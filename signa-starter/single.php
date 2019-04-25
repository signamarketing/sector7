<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package signa-starter
 */

get_header('single'); ?>



<section class="bg-blog-hero margin-header">
    <div class="blog-container">

      <?php 
        if(is_singular('post')) {
          get_template_part('template-parts/content', 'socialshare');
        }
      ?>

      <div class="blog-row">
        <div class="blog-half">
          <?php the_title( '<h1 class="blog-entry-title">', '</h1>' ); ?>

          <!-- author meta -->

          <?php if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta blog-entry-meta">
          
						<div class="blog-photo-meta">
                <?php 
                  function my_display_gravatar() { 
                    // Get User Email Address
                    $getuseremail = get_the_author_meta('user_email');
              
                    // Convert email into md5 hash and set image size to 200 px
                    $usergravatar = 'https://www.gravatar.com/avatar/' . md5($getuseremail) . '?s=90';
                    echo '<img src="' . $usergravatar . '" class="wpb_gravatar blog-gravatar" />';
                  } 
                  echo my_display_gravatar();
                ?>
              </div>

              <div class="blog-text-meta">

                <div class="blog-author-name"><?php echo the_author_meta('display_name'); ?></div>
                <div class="blog-post-date">
									<?php 
											$lastupdated = get_the_modified_time('F j, Y');
											echo $lastupdated;
									?>
                </div>

                <div>
                  <div class="reading-time"></div>
								</div>
								
              </div>
            </div><!-- .entry-meta -->
          <?php endif; ?>

        </div>
        <div class="blog-half">
				<?php
					$thumb_id = get_post_thumbnail_id();
					$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
					$thumb_url = $thumb_url_array[0];
				?>

						<img src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>" class=" img-fluid" loading="lazy">
        </div>
      </div>
    </div>
  </section>

















	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<div class="container-fluid no-gutters">
			<div class="row row-container pt-0">

				<div class="col-md-8 offset-md-2 blog-entry-content">

				<?php while ( have_posts() ) : the_post(); ?>

						<?php the_content() ?>

					<?php endwhile; // End of the loop. ?>

				</div>

			

			</div>
		</div>

		<!-- After post content -->
		<section class="bg-white">
			<div class="container-fluid no-gutters">




				<div class="row row-container">
					<div class="col-md-8 offset-md-2">
						<div class="after-post-meta">


						<div class="end-of-post-categories">
							<div class="end-of-post-categories-text">Categories & Tags</div>
							<div class="end-of-post-categories-separator"></div>
						</div>
						<div class="end-of-post-categories-2">
							<?php
								$category = get_the_category();
								echo '<a href="'.get_category_link($category[0]->cat_ID).'">' . $category[0]->cat_name . '</a>';
							?>
						</div>





							<div class="end-of-post-categories" style="margin-top: 75px">
								<div>

									<div class="end-of-post-categories-text">Previous & Next Posts</div>

								</div>
								
								<div class="end-of-post-categories-separator"></div>
							</div>
							<div class="row no-gutters-mobile">

								<div class="single-nav-column post-33-container col-12 col-sm-6">
								<?php $prevPost = get_previous_post(false);
									if ($prevPost) {?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header class="entry-header">
											<div class="post-img-box">
												<?php $prevthumbnail = get_the_post_thumbnail($prevPost->ID);?>
												<?php previous_post_link('%link',"$prevthumbnail", false);  ?>
											</div>
											<div id="blog-date-text">
												<?php $prev_post = get_previous_post(); ?><?php echo mysql2date('F, j Y', $prev_post->post_date, false)?> 
											</div>
											<div class="single-nav-title-text">
												<?php previous_post_link('%link',"<h3 class=\"post-title\">%title</h3>", false);  ?>
											</div>
										</header>
									</article><?php } ?>
								</div>

								<div class="single-nav-column post-33-container col-12 col-sm-6">
								<?php $nextPost = get_next_post(false);
									if ($nextPost) {?>
									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
										<header class="entry-header">
											<div class="post-img-box">
												<?php $nextthumbnail = get_the_post_thumbnail($nextPost->ID);?>
												<?php next_post_link('%link',"$nextthumbnail", false);  ?>
											</div>
											<div id="blog-date-text">
												<?php $next_post = get_next_post(); ?><?php echo mysql2date('F, j Y', $next_post->post_date, false)?> 
											</div>
											<div class="single-nav-title-text">
												<?php next_post_link('%link',"<h3 class=\"post-title\">%title</h3>", false);  ?>
											</div>
											<?php } ?>
											
										</header>
									</article>
								</div>
								
							</div>
						</div><!-- after post meta -->
					</div><!-- col 8 -->
				</div>
			</div>
		</section>

		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
