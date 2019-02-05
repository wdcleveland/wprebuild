<?php
/**
 * Template Name: Front Page
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

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

      <?php if(have_rows('slides')): ?>

          <div class="carousel-inner" role="listbox">

  	       <?php while(have_rows('slides')): the_row(); ?>



             <?php if( get_field('welcome_screen') ):
              while ( get_field('welcome_screen') ) : the_row();
                  the_sub_field('welcome_screen');?>

                <div id="" class="carousel-item active" style="background-image: url('<?php the_sub_field('bg_img'); ?>')">
                  <div class="carousel-caption d-none d-md-block">
                    <h3><?php the_sub_field('text'); ?></h3>
                    <p><?php the_sub_field('subtext'); ?></p>
                  </div>
                </div>
             		<style type="text/css">
             			#hero {
             				background: <?php the_sub_field('color'); ?>;
             			}
             		</style>
             	<?php endwhile; ?>

             <?php endif; ?>




      <?php endwhile; ?>

    </div>

    <?php endif; ?>

  </div>

<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
