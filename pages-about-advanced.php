<?php
/**
 * Template Name: About (Adv) Page
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
