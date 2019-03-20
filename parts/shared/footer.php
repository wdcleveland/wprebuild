<footer>

	<div class="navbar-bottom">
		<div class="container">
			<div class="row">
				<div class="footer_address col-md-4">
					<img src="<?php the_field('footer_logo', 'option'); ?>">
					<p><?php the_field('address', 'option'); ?></p>
					<a href="<?php the_field('contact_url', 'option'); ?>">Contact Us <i class="fas fa-angle-double-right"></i></a>
				</div>
				<div class="footer_links col-md-4">
					<a href="<?php the_field('facebook_url', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
					<a href="<?php the_field('instagram_url', 'option'); ?>" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
					<a href="<?php the_field('twitter_url', 'option'); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
					<a href="<?php the_field('youtube_url', 'option'); ?>" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
					<p>I'd like to</p>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/cleveland-foundation-giving/annual-giving-fund" data-page-name="Annual Giving Fund">Give</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni-events/send-a-student" data-page-name="Send A Student">Refer a Student</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>calendar" data-page-name="Calendar">View Calendar</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni/request-transcript" data-page-name="Request Transcript">Request my Transcript</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/consumer-information" target="" title="Consumer Information">Consumer Information</a></li>
					</ul>
				</div>
				<div align="left" class="footer_health col-md-4">
					<h3><?php the_field('heading', 'option'); ?></h3>
					<?php the_field('description', 'option'); ?>
					<a href="<?php the_field('appointment_url', 'option'); ?>" target="_blank">Schedule an Appointment <i class="fas fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
		<div class="footer_copyright container-fluid">
			<div class="container">
				<div class="row">
					<div align="left" class="col-md-6">
						<ul>
						  <li>
						    <a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/employment" data-page-name="Employment">Employment</a>
						  </li>
						  <li>
						    <a href="<?php echo esc_url( home_url( '/' ) ); ?>site-map" data-page-name="Site Map">Sitemap</a>
						  </li>
						  <li>
						    <a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy" data-page-name="Privacy Policy">Privacy Policy</a>
						  </li>
						</ul>
					</div>
					<div align="right" class="col-md-6">
						<p><?php the_field('copyright', 'option'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</footer>
