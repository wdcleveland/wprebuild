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
					<div class="event_single row">
						<div align="center" class="col-md-1">
							<?php
								if(get_field('date'))
									{
										$date = DateTime::createFromFormat('F j, Y', get_field('date'));
										echo '<div class="calendar_bg"><div class="calendar_month">';
										echo $date->format('M');
										echo '</div><div class="calendar_day">';
										echo $date->format('j');
										echo '</div></div>';
									}
							?>
						</div>
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
