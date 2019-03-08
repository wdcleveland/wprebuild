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
			<div class="col-md-9 page_header blog_single page_about">
				<div class="row">
					<div class="col-md-12">
						<?php the_post_thumbnail(); ?>

					<!-- MAIN IMAGE -->
					<?php

					$image = get_field('lead_img');

					if( !empty($image) ): ?>

						<a href=""><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

					<?php endif; ?>
					<!-- MAIN IMAGE -->

					<h1><?php the_title(); ?></h1>
					<p><?php the_tags(); ?></p>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>Posted <?php the_date(); ?></time>
					<?php the_field('summary'); ?>
					<?php the_field('body_copy'); ?>

					<!-- CTA IMAGE -->
					<?php

					$image = get_field('call_to_action_img');

					if( !empty($image) ): ?>

						<a href="the_field('call_to_action_url');"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>

					<?php endif; ?>
					<!-- CTA IMAGE -->
					</div>
				</div>
			</div>





			<div class="col-md-3 blog_sidebar">
				<a id="blog_campus_tour" href="https://www.cleveland.edu/admissions/visit-campus" class="btn btn-primary">Campus Tour</a>
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

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
