<?php
/**
 * Template Name: Zone 3 Page
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

    <div id="carouselExampleIndicators" class="carousel slide" data-interval="17000" data-ride="carousel">

      <?php if(have_rows('slides')): ?>

        <div class="carousel-inner" role="listbox">

          <?php while(have_rows('slides')): the_row(); ?>

            <div id="" class="carousel-item <?php the_sub_field('starting_slide'); ?>" style="background: url('<?php the_sub_field('bg_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">

              <div class="row">
                <div class="" style="">
                  <!-- <div style="padding: 30px; position: absolute; top: 400; left: 50; border-radius: 0px 0px 25px 0px; border-right: 3px solid #ffffff; border-bottom: 3px solid #ffffff; background-color: <?php the_sub_field('overlay_color'); ?>;">
                    <img style="max-width: 150px;" src="<?php the_field('white_logo', 'option'); ?>">
                  </div> -->

                </div>
              </div>
            </div>

          <?php endwhile; ?>

          <div style="padding: 45px 60px; position: absolute; bottom: 100px; right: 150px; border-radius: 25px 25px 0px 0px; border: 3px solid #ffffff; background-color: #b60050;">
            <h1 style="color: #ffffff; font-size: 45px; font-weight: 600; letter-spacing: 1px; font-style: italic; margin-bottom: 0px;">Be the difference.</h1>
          </div>

        </div>

      <?php endif; ?>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  <?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
