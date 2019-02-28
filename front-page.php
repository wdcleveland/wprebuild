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

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8" style="height: 675px; background-color: #f2f2f2;">
      </div>
      <div class="col-md-4" style="padding-left: 0px; padding-right: 0px;">
        <div style="height: 225px; background-color: rgba(182, 0, 80, 0.8)">
        </div>
        <div style="height: 225px; background-color: rgba(253, 163, 31, 0.8)">
        </div>
        <div style="height: 225px; background-color: rgba(120, 162, 47, 0.8)">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <br><br><br>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row" style="height: 675px;">
      <div class="col-md-4" style="background-color: rgba(96, 55, 110, 0.8);">
      </div>
      <div class="col-md-8" style="background-color: #f2f2f2;">
      </div>
    </div>
    <div class="row" style="height: 225px;">
      <div class="col-md-6" style="background-color: rgba(216, 88, 88, 0.8);">
      </div>
      <div class="col-md-6" style="background-color: rgba(77, 138, 164, 0.8);">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <br><br><br>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row" style="height: 250px;">
      <div class="col-md-12" style="background-color: rgba(253, 163, 31, 0.8);">
      </div>
    </div>
  </div>

<?php endwhile; ?>


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
