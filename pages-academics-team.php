<?php
/**
 * Template Name: Academics (Team) Page
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
            $args = array( 'post_type' => 'Employee',  'department' => 'faculty', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' );
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
          		<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-chiropractic/">College of Chiropractic</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-chiropractic/doctor-of-chiropractic/">Doctor of Chiropractic</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-chiropractic/concurrent-dcbs-program/">Concurrent DC/BS Program</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-chiropractic/doctor-of-chiropractic-landing/">Be the Difference in Health Care</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/">College of Health Sciences</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/ms-in-health-promotion/">MS in Health Education and Promotion</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/bs-in-human-biology/">BS in Human Biology</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/accelerated-health-sciences/">AA in Biological Sciences</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/occupational-therapy-assistant-degree/">AAS in Occupational Therapy Assistant</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/radiologic-technology-degree/">AAS Degree in Radiologic Technology</a></li>
                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/college-of-health-sciences/workplace-health-promotion-certificate/">Workplace Health Promotion Certificate</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/degrees-and-certifications/">Degrees & Certifications</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/university-catalogs/">University Catalogs</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/academic-calendar/">Academic Calendar</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/faculty/">Faculty</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/library/">Library</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/internships-clinical-experience/">Internships & Clinical Experience</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/online-degrees/">Online Degrees</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/dc-ebook/">Your Complete Guide to the Chiropractic Profession</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/radtech-ebook/">Your Complete Guide to Becoming a Radiologic Technologist</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>academics/graduation/">Graduation</a></li>
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
