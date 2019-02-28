<header id="masthead" class="site-header" role="banner">

	<!-- <nav class="navbar-top" role="navigation">
		<div class="container">
		<div align="right" class="row">

			<div align="" class="cta_advisor col-lg-12">
				<ul class="">
					<li><a href="https://www.cleveland.edu/students-faculty"><i class="fas fa-key"></i> Students &amp; Faculty</a></li>
					<li><a href="https://www.cleveland.edu/alumni"><i class="fas fa-user"></i> Alumni </a></li>
					<li><a href="https://www.cleveland.edu/blog"><i class="fas fa-pencil-alt"></i> Blog</a></li>
					<li><a href="https://chirohealthkc.com" target="_blank"><i class="fas fa-hand-paper"></i> Health Center</a></li>
				</ul>
				<a href="<?php the_field('button_url', 'option'); ?>" class="btn btn-primary"><?php the_field('button_text', 'option'); ?></a>
			</div>
		</div>
	</div>
		<div class="navbar navbar-default">
			<div class="container">

					<div class="navbar-header">
						<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" rel="homepage"><img src="<?php the_field('navigation_logo', 'option'); ?>"></a>
					</div>
					<div class="navbar-collapse navbar-responsive-collapse">
						<div id="menu-main" class="nav navbar-nav justify-content-end">
							<div id="nav-academics" class=""><a href="http://localhost/rebuild/academics/">Academics</a></div>
							<div id="nav-admissions" class=""><a href="http://localhost/rebuild/admissions/">Admissions</a></div>
							<div id="nav-campuslife" class=""><a href="http://localhost/rebuild/campus-life/">Campus Life</a></div>
							<div id="nav-aboutus" class=""><a href="http://localhost/rebuild/about-us/">About Us</a></div>
						</div>
					</div>
			</div>
		</div>
	</nav> -->

<div class="container">
	<div align="right" class="row">

		<div align="" class="cta_advisor col-lg-12">
			<ul class="">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>students-faculty"><i class="fas fa-key"></i> Students &amp; Faculty</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>alumni"><i class="fas fa-user"></i> Alumni </a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog"><i class="fas fa-pencil-alt"></i> Blog</a></li>
				<li><a href="https://chirohealthkc.com" target="_blank"><i class="fas fa-hand-paper"></i> Health Center</a></li>
			</ul>
			<a href="<?php the_field('button_url', 'option'); ?>" class="btn btn-primary"><?php the_field('button_text', 'option'); ?></a>
		</div>
	</div>
	<!-- <nav class="navbar navbar-expand-lg">
		<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="" rel="homepage"><img src="<?php the_field('navigation_logo', 'option'); ?>"></a>

	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Features</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Disabled</a>
	      </li>
	    </ul>
	  </div>
	</nav> -->
	<?php ubermenu( 'main' ); ?>
</div>

</header>
