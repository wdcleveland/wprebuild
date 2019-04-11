<?php
/**
 * Template Name: Blog Page
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="container">
    	<div class="row">
    		<div class="col-md-9 page_header page_about">
          <div class="row">
            <div class="col-md-12">
      			<h1><?php the_title(); ?></h1>

            <!-- MAIN IMAGE -->
            <?php

            $image = get_field('main_img');

            if( !empty($image) ): ?>

              <img class="main_image" src="<?php echo $image['url']; ?>" alt="<?php the_field('custom_alt_text'); ?>" />

            <?php endif; ?>
            <!-- MAIN IMAGE -->

            <?php the_field('body_content'); ?>
            </div>

            <div class="page_calendar ">
              <?php
              $args = array( 'post_type' => 'Post',  'posts-type' => 'Blog', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'DSC' );
              $loop = new WP_Query( $args );
              while ( $loop->have_posts() ) : $loop->the_post();
                echo '<div class="event_single row"><div class="col-md-4 col-sm-12"><div style="background: #f1f2f2; margin-bottom: 20px; padding: 40px; max-width: 100%; min-height: 200px;"></div></div><div class="col-md-8 col-sm-12"><strong><time datetime="';
                the_time( 'Y-m-d' );
                echo '" pubdate>Posted ';
                the_date();
                echo '</time></strong><h2><a href="';
                esc_url( the_permalink() );
                echo '">';
                the_title();
                echo '</a></h2>Communications Staff</div><div class="col-lg-12">';
                the_field('summary');
                echo ' <a href="';
                esc_url( the_permalink() );
                echo '">Learn More</a></div></div>';

              endwhile; ?>
            </div>

          </div>
        </div>





    		<div class="col-md-3 blog_sidebar">
          <div>


          </div>
          <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/cleveland-at-a-glance" class="btn btn-primary">Cleveland At A Glance</a>
          <div class="sidebar_news">
            <h2>News</h2><br>
            <?php
            $args = array( 'post_type' => 'Post',  'post-type' => 'Blog', 'posts_per_page' =>3, 'orderby' => 'menu_order', 'order' => 'ASC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="sidebar_border sidebar_padding row"><div class="col-lg-12"><time datetime="';
              the_time( 'Y-m-d' );
              echo '" pubdate>Posted ';
              the_date();
              echo '</time></div><div class="col-lg-12"><a href="';
              esc_url( the_permalink() );
              echo '">';
              the_title();
              echo '</a></div></div>';

            endwhile; ?>
            <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>news-archive/" class="btn">View All News</a>

          </div>
    		</div>
    	</div>
    </div>


  <?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
