<?php
/**
 * Template Name: Blog Page
 * 
 */
get_header('inner'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <?php while ( have_posts() ) : the_post(); ?>

        <div class="container-fluid no-gutters">
          <div class="row row-container">

            <div class="col-sm-8">
              <div class="blog-tabs hidden-screen-sm">
                <span>TOPICS: </span>
                <ul class="blog-cat-list">
                  <li><a href="/blog/">All</a></li>
                </ul>
              </div>
              
              <ul class="mobile-tabs visible-screen-sm menu-left">
                <li>TOPICS: 

                  <a href="javascript:"><?php if(is_archive() || is_home()) { echo 'All'; } else { echo single_cat_title(); } ?> 
                    <img src="<?php echo get_template_directory_uri(); ?>/img/sort-blog.png" aria-hidden="true" width="20">
                  </a>

                  <ol class="mobile-tabs-items">
                    <li><a href="/blog/">All</a></li>
                  </ol>

                </li>
              </ul>
            </div>

            <div class="col-sm-4">
              <div class="blog-sidebar">
                <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                  <label>
                    <input type="image" class="search-submit" src="<?php echo get_template_directory_uri(); ?>/img/search-icon-blog.png" alt="Submit Form" />
                    <span class="screen-reader-text">Search for:</span>
                    <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:" />
                    <input type="hidden" name="post_type" value="post" />
                  </label>
                </form>
              </div><!-- blog-sidebar -->
            </div>

          </div>
        </div>

        <!-- Blog Archive -->
        <div class="container-fluid no-gutters">
          <div class="row row-container" style="padding-top: 0px;">

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

              <div class="col-12 col-sm-6 col-lg-4 text-center">
                <article class="blog-post-container">
                  <header class="entry-header">
                    <div class="post-img-box">
                      <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo $large_image; ?>" alt="">
                      </a>
                    </div>
                    <div class="blog-date-text">
                      <p class="date-text"><?php the_time('F, j Y'); ?></p>
                    </div>
                    <a href="<?php echo the_permalink(); ?>" class="nostyle">
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
