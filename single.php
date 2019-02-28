<?php
/**
 * The Template for displaying all single posts
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
		<div class="col-md-9 blog_single">
			<?php the_post_thumbnail(); ?>
			<h1><?php the_title(); ?></h1>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Posted <?php the_date(); ?></time>
			<br><br>
			<?php the_content(); ?>


		</div>
		<div class="col-md-3 blog_sidebar">
			<a href="https://www.cleveland.edu/about-us/cleveland-at-a-glance" class="btn btn-primary">CleveLand At A Glance</a>
			<div class="blog_events">
				<h2>News</h2>
				<a href="https://www.cleveland.edu/about-us/cleveland-at-a-glance" class="btn btn-primary">View All News</a>
			</div>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
