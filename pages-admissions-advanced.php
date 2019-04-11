<?php
/**
 * Template Name: Admissions (Adv) Page
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
      <div class="col-xl-9 col-lg-8 col-md-12 page_header page_about">
        <div class="row">
          <div class="col-md-12">
  			    <h1><?php the_title(); ?></h1>

            <!-- MAIN IMAGE -->
            <?php

            $image = get_field('main_img');

            if( !empty($image) ): ?>

            <img class="main_image" src="<?php echo $image['url']; ?>" alt="<?php the_field('custom_alt_text'); ?>" />

            <?php endif; ?>

            <?php the_post_thumbnail(); ?>

            <!-- PAGE BLOCKS -->

            <?php if( get_field('page_blocks') ): ?>

             <div class="col-md-12">

               <?php while( has_sub_field("page_blocks") ): ?>

                 <?php if(get_row_layout() == "paragraph_block"): // BLOCK - paragraph(s) ?>

                   <?php the_sub_field('paragraph_text'); ?>

                 <?php elseif(get_row_layout() == "image_block"): // BLOCK - additional image(s) ?>

                   <?php
                   $image = get_field('additional_img');
                   if( !empty($image) ): ?>
                   	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                   <?php endif; ?>

                 <?php elseif(get_row_layout() == "accordion_block"): // BLOCK - accordion(s) ?>

                   <?php if( have_rows('accordion_content') ): ?>
            				<div id="accordion" role="tablist">
            					<?php $i=1; while ( have_rows('accordion_content') ) : the_row(); ?>
            						<div class="card">
          						    <div class="card-header" role="tab" id="heading-<?php echo $i; ?>">
          						      <h3 class="mb-0">
          						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" href="#collapse-<?php echo $i; ?>" aria-expanded="true" aria-controls="collapseOne">
                                <div class="row">
                                  <div align="left" class="col-md-10">
                                    <?php the_sub_field('item_title'); ?>
                                  </div>
                                  <div align="right" class="col-md-2">
                                    <i class="fas fa-plus-circle"></i><i class="fas fa-minus-circle"></i>
                                  </div>
                                </div>
          						        </button>
          						      </h3>
          						    </div>
            						    <div id="collapse-<?php echo $i; ?>" class="collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="heading-<?php echo $i; ?>">
            						      <div class="card-body">
            						       	<?php the_sub_field('item_description'); ?>
                                <?php if ( is_page( 'admissions/visit-campus/' ) ) {
                                  the_sub_field('optional_code');
                                  // echo '<div class="page_calendar">';
                                  //   $args = array( 'post_type' => 'Event',  'event-type' => 'Main Calendar', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' );
                                  //   $loop = new WP_Query( $args );
                                  //   while ( $loop->have_posts() ) : $loop->the_post();
                                  //     echo '<div class="event_single row"><div align="center" class="col-md-2"><div class="calendar_bg"><div class="calendar_month">';
                                  //     // echo $date->format('M');
                                  //     if(get_field('date'))
                                  //         {
                                  //           $date = DateTime::createFromFormat('F j, Y', get_field('date'));
                                  //           echo $date->format('M');
                                  //           echo '</div><div class="calendar_day">';
                                  //           echo $date->format('j');
                                  //         }
                                  //     // echo '</div><div class="calendar_day">';
                                  //     // echo $date->format('j');
                                  //     echo '</div></div></div><div class="col-md-10"><a href="';
                                  //     esc_url( the_permalink() );
                                  //     echo '">';
                                  //     the_field('display_name');
                                  //     echo '</a><p class="event_date_time"><i class="far fa-clock"></i>';
                                  //     the_field('start_time');
                                  //     echo ' - ';
                                  //     the_field('end_time');
                                  //     echo'<br><i class="fas fa-map-marker-alt"></i>';
                                  //     the_field('location');
                                  //     echo'</p><a class="btn btn-primary" href="';
                                  //     esc_url( the_permalink() );
                                  //     echo '">Learn More</a></div></div>';
                                  //
                                  //   endwhile;
                                  // echo '</div>';
} else {
    echo '<br>';
} ?>

            						      </div>
            						    </div>
            						</div>
            					<?php $i++; endwhile; ?>
            				</div>
            			<?php endif; ?>

                 <?php endif; ?>

               <?php endwhile; ?>

             </div>

             <?php endif; ?>

          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-4 col-md-12 blog_sidebar">
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
        <?php if( have_rows('individual_buttons') ): ?>

            <?php while ( have_rows('individual_buttons') ) : the_row(); ?>

              <a id="" href="<?php echo esc_url( home_url( '/' ) ); ?><?php the_sub_field('button_url'); ?>" class="btn btn-primary"><?php the_sub_field('button_text'); ?></a>

            <?php endwhile; ?>

        <?php else : ?>

        <?php endif; ?>
        <div class="sidebar_events">
  				<h2>Calendar</h2><br>
          <?php
          $args = array( 'post_type' => 'Event',  'event-type' => 'Featured (Sidebar)', 'posts_per_page' =>5, 'orderby' => 'menu_order', 'order' => 'ASC' );
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post();
            echo '<div class="event_single sidebar_padding row"><div align="center" class="sidebar_fix col-lg-4 col-md-2 col-sm-3 col-xs-2"><div class="calendar_bg"><div class="calendar_month">';
            // echo $date->format('M');
            if(get_field('date'))
                {
                  $date = DateTime::createFromFormat('F j, Y', get_field('date'));
                  echo $date->format('M');
                  echo '</div><div class="calendar_day">';
                  echo $date->format('j');
                }
            // echo '</div><div class="calendar_day">';
            // echo $date->format('j');
            echo '</div></div></div><div class="sidebar_fix col-lg-8 col-md-10 col-sm-9 col-xs-10"><a href="';
            esc_url( the_permalink() );
            echo '">';
            the_field('display_name');
            echo '</a><p class="event_date_time"><i class="far fa-clock"></i>';
            the_field('start_time');
            echo ' - ';
            the_field('end_time');
            echo'<br><i class="fas fa-map-marker-alt"></i>';
            the_field('location');
            echo'</p></div></div>';

          endwhile; ?>
  				<a id="" href="<?php echo esc_url( home_url( '/' ) ); ?>calendar/" class="btn">View All Events</a>
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
