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
            <?php 
              $args_ads = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'orderby' => 'DESC',
              );
              $loop = new WP_Query( $args_ads );
              while ( $loop->have_posts() ) : $loop->the_post(); 

              if ( has_post_thumbnail() ) {
                $large_image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
                $large_image = $large_image[0];
              } else {
                $large_image = false;
              } 

              // vars date


              ?>

              <div class="col-md-4 text-center">
                <article>
                  <header class="entry-header">
                    <div class="post-img-box">
                      <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo $large_image; ?>" alt="">
                      </a>
                    </div>
                    <div class="blog-date-text">
                      <p class="date-text"><?php the_time('F, j, Y'); ?></p>
                    </div>
                    <a href="<?php echo the_permalink(); ?>">
                      <h2 class="post-title"><?php the_title(); ?></h2>
                    </a>
                    <div class="excerpt-text">
                      <p><?php the_excerpt(); ?></p>
                    </div>
                    
                  </header>
                </article>
              </div>
              

            <?php endwhile; ?>

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
