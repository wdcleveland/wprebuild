<?php
/**
 * Template Name: Blog Page
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

    <div class="container">
      <div class="page_header row">
        <h1>Blog</h1>
      </div>
      <div class="blog_main row" style="">

       <?php
        $args = array( 'post_type' => 'post', 'posts_per_page' => 10 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          echo '<div class="col-md-9"><h2>';
          the_title();
          echo '</h2><p>';
          the_excerpt();
          echo '</p></div><hr>';
        endwhile;
        ?>

      </div>
    </div>

  <?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
