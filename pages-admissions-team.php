<?php
/**
 * Template Name: Admissions (Team) Page
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

          <div class="page_team row">
            <?php
            $args = array( 'post_type' => 'Employee',  'department' => 'admissions', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
              echo '<div class="team_single col-md-6"><img src="';
              the_field('headshot');
              echo '" alt="';
              the_field('custom_alt_text');
              echo '"/><a href="';
              esc_url( the_permalink() );
              echo '"><h3>';
              the_title();
              echo '</h3></a>';
              the_field('departments');
              echo '</div>';

            endwhile; ?>
          </div>

        </div>
      </div>





  		<div class="col-md-3 blog_sidebar">
        <div>
          <nav class="blog_side_nav">

            <ul>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/admission-requirements/">Admission Requirements</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/tuition-costs/">Tuition & Costs</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/transfer-guides/">Transfer Guides</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/financial-aid-scholarships/">Financial Aid & Scholarships</a></li>
                <!-- <ul> -->
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/financial-aid-scholarships/process/">Financial Aid Process</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/financial-aid-scholarships/scholarships-grants/">Scholarships & Grants</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/financial-aid-scholarships/scholarships-grants/scholarship-application/">Scholarship Application</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/financial-aid-scholarships/resources/">Financial Aid Resources</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/financial-aid-scholarships/faq/">FAQ</a></li>
                <!-- </ul> -->
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/open-house-schedule/">Open House Schedule</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/visit-campus/">Visit Campus</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/how-to-apply/">How to Apply</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/request-information/">Request Information</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/refer-friend/">Refer a Friend</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/admissions-team/">Admissions Team</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/for-parents/">For Parents</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/for-advisors-counselors/">For Advisors & Counselors</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>admissions/admission-application/">Application for Admission</a></li>

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
  			<!-- <a id="blog_campus_tour" href="https://www.cleveland.edu/admissions/visit-campus" class="btn btn-primary">Campus Tour</a> -->
        <a id="blog_refer_student" href="https://www.cleveland.edu/alumni-events/send-a-student" class="btn btn-primary">CleveLand At A Glance</a>
  			<div class="blog_events">
  				<h2>News</h2>
  				<a href="https://www.cleveland.edu/about-us/cleveland-at-a-glance" class="btn btn-primary">View All News</a>
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