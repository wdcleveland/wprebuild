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
	<div class="page_header page_about">
		<div class="page_calendar">
			<!-- <div class="event_single row">
				<div class="col-md-11">
					<a href="<?php esc_url( the_permalink() ) ?>"><?php the_field('display_name') ?></a>
					<p class="event_date_time">
						<i class="far fa-clock"></i><?php the_field('start_time') ?> - <?php the_field('end_time') ?></i>
						<br>
						<i class="fas fa-map-marker-alt"></i> <?php the_field('location') ?></i>
					</p>
					<?php the_field('details') ?>
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>calendar/">View Event Calendar</a></li>
					<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>alumni-events/">View Alumni Calendar</a></li>
				</div>
			</div> -->

			<div class="event_single row">
				<div class="col-md-12">
					<em><sup>Type Of Opportunity:</sup></em>
					<h3>
						<a href="mailto:<?php the_field('contact_email') ?>"><?php the_field('opportunity_type') ?></a>
					</h3>
					<h2 class="event_date_time"><span>Contact Name: </span><?php the_field('contact_name') ?></h2>
			 		<h2 class="event_date_time"><span>Address: </span><?php the_field('address_city') ?>, <?php the_field('address_state') ?>, <?php the_field('address_province') ?></h2>
					<h2 class="event_date_time"><span>Phone: </span><?php the_field('contact_phone') ?></h2>
					<h2 class="event_date_time"><span>Email: </span><?php the_field('contact_email') ?></h2>
					<h2 class="event_date_time"><span>Additional Information: </span><?php the_field('additional_information') ?></h2>
					<a class="btn btn-primary" href="mailto:<?php the_field('contact_email') ?>">Email Contact</a>
				</div>
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
