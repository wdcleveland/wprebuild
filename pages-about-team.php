<?php
/**
 * Template Name: About (Team) Page
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

<style>

</style>

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

          <div align="center" class="page_team row">
            <?php
            $args = array( 'post_type' => 'Employee',  'department' => 'administration', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="team_single col-md-4"><img src="';
              the_field('headshot');
              echo '" alt="';
              the_field('custom_alt_text');
              echo '"/><a href="';
              esc_url( the_permalink() );
              echo '"><h3>';
              the_title();
              echo '</h3></a>';
              the_field('titles');
              echo '</div>';

            endwhile; ?>
          </div>

        </div>
      </div>





  		<div class="col-md-3 blog_sidebar">
        <div>
          <nav class="blog_side_nav">

          	<ul>
          		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/why-cleveland/">Why Cleveland?</a></li>
          		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/the-cleveland-story/">The Cleveland Story</a></li>
          		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/cleveland-at-a-glance/">Cleveland at a Glance</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/board-of-trustees/">Board Of Trustees</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/administration/">Administration</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/accreditation/">Accreditation</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/consumer-information/">Consumer Information</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/employment/">Employment</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/contact-cleveland/">Contact Cleveland</a></li>
          	</ul>

          </nav>

          <script>

          $(document).ready(function() {
            console.log(window.location.protocol + "//");
            console.log(window.location.host);
            console.log(window.location.pathname);
          	// get current URL path and assign 'active' class
            var host = window.location.protocol + "//";
            var protocol = window.location.host;
            var pathname = window.location.pathname;
          	$('.blog_side_nav > ul > li > a[href="'+host+protocol+pathname+'"]').addClass('active');
          })

          </script>

        </div>
        <!-- <?php if( have_rows('individual_buttons') ): ?>

            <?php while ( have_rows('individual_buttons') ) : the_row(); ?>

              <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?><?php the_sub_field('button_url'); ?>" class="btn btn-primary"><?php the_sub_field('button_text'); ?></a>

            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?> -->
        <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/visit-campus" class="btn btn-primary">Campus Tour</a>
        <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>alumni-events/send-a-student" class="btn btn-primary">Refer A Student To Cleveland</a>
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

  <div class="container-fluid">
    <div id="hp_cta_bottom" align="center" class="row" style="height: 250px;">
      <div class="col-md-12" style="background-color: rgba(253, 163, 31, 0.8);">
        <h1>Shape the Future of Health Care</h1>
        <a class="btn btn-homepage" href="#">Begin Here</a>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
