<?php
/**
 * Template Name: Alumni (Text Only) Page
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
          <?php the_content(); ?>

          <!-- MAIN IMAGE -->
          <?php

          $image = get_field('main_img');

          if( !empty($image) ): ?>

            <img class="main_image" src="<?php echo $image['url']; ?>" alt="<?php the_field('custom_alt_text'); ?>" />

          <?php endif; ?>
          <!-- MAIN IMAGE -->

          <?php the_field('body_content'); ?>
          </div>

        </div>
      </div>





  		<div class="col-md-3 blog_sidebar">
        <div>
          <nav class="blog_side_nav">

            <ul>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni-events/">Alumni Events</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/alumni-association/">Alumni Association</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/continuing-education/">Continuing Education</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/continuing-education/seminar-schedule/">Seminar Schedule</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/continuing-education/policies-and-procedures/">Policies and Procedures</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/student-recruiting-referral/">Student Recruitment & Referral</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/career-resources/">Career Resources</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/classifieds/">Classifieds</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/envoy-program/">Admissions Envoy Networks</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/request-transcript/">Request Transcript</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/">Cleveland College Foundation</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/scholarships-memorials/">Scholarships & Memorials</a></li>
                <li><a target="_blank" href="http://plannedgiving.cleveland.edu/">Planned Giving</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/the-cleveland-legacy-society/">The Cleveland Legacy Society</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/gifts-in-kind/">Gifts In Kind</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/annual-giving-fund/">Give to the Cleveland College Foundation Fund</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/foundation-banquet-rsvp/">Scholarship and Awards Banquet RSVP</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/foundation-scholarship-application/">Foundation Scholarship Application</a></li>


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
        <?php if( have_rows('individual_buttons') ): ?>

            <?php while ( have_rows('individual_buttons') ) : the_row(); ?>

              <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?><?php the_sub_field('button_url'); ?>" class="btn btn-primary"><?php the_sub_field('button_text'); ?></a>

            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>

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
