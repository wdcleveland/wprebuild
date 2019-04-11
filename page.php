<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
	  		<div class="col-md-12 page_header page_about">
	        <div class="row">

	    			<h1><?php the_title(); ?></h1>

	          <!-- MAIN IMAGE -->
	          <?php

	          $image = get_field('main_img');

	          if( !empty($image) ): ?>

	            <img class="main_image" src="<?php echo $image['url']; ?>" alt="<?php the_field('custom_alt_text'); ?>" />

	          <?php endif; ?>
	          <!-- MAIN IMAGE -->

	          <div class="col-12"><?php the_field('body_content'); ?></div>

	        </div>
	      </div>
	  	</div>
	  </div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
