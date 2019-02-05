<?php
/**
 * Template Name: Zone 1 Page
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

   <div id="carouselExampleIndicators" class="carousel slide" data-interval="17000" data-ride="carousel">

    <?php if( get_field('zone_slides') ): ?>

      <div class="carousel-inner" role="listbox">

      	<?php while( has_sub_field("zone_slides") ): ?>

          <?php if(get_row_layout() == "welcome_screen"): // layout: welcome_screen ?>

            <div id="" class="carousel-item active" style="background: url('<?php the_sub_field('bg_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh; background: url('<?php the_field('overlay_bg', 'option'); ?>') no-repeat bottom right fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="col-md-2">
                </div>
                <div class="col-md-8" style="">
                  <div style="position: absolute; bottom: 200px;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-size: 6rem; padding-bottom: 20px; border-bottom: 3px solid #F0B310; max-width: 65%; margin-bottom: 20px;"><?php the_sub_field('text'); ?></h1>
                    <h2 style="color: #ffffff; font-size: 3rem; font-weight: 600; max-width: 75%; margin: 0px;"><?php the_sub_field('subtext'); ?></h2>
                  </div>
                </div>
                <div class="col-md-2">
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "cafe_cleveland"): // layout: cafe_cleveland ?>

            <div id="" class="carousel-item" style="background: url('<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/2019/01/Chalkboard-Background.jpg') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh; ">
                <div class="col-md-12" style="width: 100vw; height: 30vh;">
                  <div style="position: absolute; bottom: 0px; width: 100%;">
                    <h1 style="color: #ffffff; font-size: 3.5rem; font-weight: 800; margin-top: 0px; margin-bottom: 5px;">Café Cleveland Menu</h1>
                    <h2 style="color: #F0B310; font-size: 2.5rem; margin-bottom: 0px; margin-top: 0px;"><?php the_sub_field('dates'); ?></h2>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 45px 0px; height: 45vh; ">
                  <div class="row">
                    <div class="col-md-6" style="">
                      <h3 style="color: #F0B310; font-size: 3em; font-style: italic; width: 60%; padding-bottom: 10px; border-bottom: 3px solid #F0B310;" >On The Grill</h3>
                      <!-- <hr> -->
                      <?php the_sub_field('on_the_grill'); ?>
                    </div>
                    <div class="col-md-6" style="">
                      <h3 style="color: #F0B310; font-size: 3em; font-style: italic; width: 60%; padding-bottom: 10px; border-bottom: 3px solid #F0B310;" >Daily Entrees</h3>
                      <!-- <hr> -->
                      <?php the_sub_field('daily_entrees'); ?>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="height: 25vh;">
                  <div style="position: absolute; top: 30px; width: 100%;">
                    <h1 style="color: #ffffff; font-size: 2.75rem; margin-bottom: 0px;"><?php the_sub_field('company_kitchen'); ?></h1>
                  </div>
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "prospective_students"): // layout: prospective students ?>

            <!-- <div id="" class="carousel-item" style="background-color: #a41d41;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh;">
                <div class="col-md-12" style="width: 100vw; height: 15vh;">
                  <div class="" style="position: absolute; bottom: 30px; width: 100%;">
                  </div>
                </div>
                <div class="col-md-12" style="padding: 0px 0px; height: 65vh; background-color:;">
                  <div class="row" style="position: absolute; top: 60px; width: 100%;">
                    <div class="col-md-6" style="">
                      <img style="max-width: 80%; margin-left: auto; margin-right: auto; border: 3px solid #ffffff; border-radius: 5px;" src="<?php the_sub_field('campus_img'); ?>">
                    </div>
                    <div align="center" class="col-md-6">
                      <h1 style="color: #ffffff; font-size: 3.5rem; font-weight: 800; margin-top: 0px; margin-bottom: 5px;">Prospective Students</h1>

                      <h4 style="color: #F0B310; margin-top: 45px;"><?php the_sub_field('names'); ?></h4>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="height: 20vh;">
                  <div style="position: absolute; top: 30px; width: 100%;">
                    <h1 style="color: #ffffff; font-size: 2rem; font-weight: 400; font-style: italic; margin-bottom: 0px;"></h1>
                  </div>
                </div>
              </div>
            </div> -->

            <div id="" class="carousel-item" style="background: url('<?php the_sub_field('campus_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <div align="left" class="row">
                <div class="col-md-6">
                </div>
                <div id="dyk_health" align="left" class="col-md-6" style="height: 100vh; background-color: rgba(182,0,80,0.85);">
                  <div style="padding: 30px; position: absolute; top: 20%; left: 5%;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 4rem; padding-bottom: 20px; border-bottom: 3px solid #f0b310; margin-bottom: 20px;">Prospective Students</h1>
                    <h2 style="color: #ffffff; font-size: 3.75rem; font-weight: 600; margin-bottom: 0px;"><?php the_sub_field('names'); ?></h2>
                    <!-- <img style="max-width: 200px; margin-top: 20px;" src="<?php the_field('main_logo', 'option'); ?>"> -->
                  </div>
                  <div style="padding: 30px; position: absolute; bottom: 20%; left: 5%;">
                    <h2 style="color: #ffffff; font-size: 2.25rem; font-weight: 600; font-style: italic; margin-bottom: 0px;"><strong>Touring Campus</strong>:
                      <br><?php the_sub_field('tour_date'); ?></h2>
                  </div>
                </div>

              </div>
            </div>

          <?php elseif(get_row_layout() == "custom"): // layout: custom ?>

            <div id="" class="carousel-item"  style="width: 100vw; height: 100vh; background: url('<?php the_sub_field('full_size_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
            </div>

      		<?php elseif(get_row_layout() == "wifi"): // layout: wifi ?>

            <div id="" class="carousel-item" style="background-color: #4d8aa4;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh; background: url('<?php the_field('overlay_bg', 'option'); ?>') no-repeat bottom right fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="col-md-12" style="width: 100vw; height: 35vh;">
                  <div style="position: absolute; bottom: 35px; width: 100%;">
                    <h1 style="color: #ffffff; font-size: 3.5rem; font-weight: 800; margin-bottom: 10px;">Student Wifi Password</h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 0px 0px; height: 40vh;">
                  <div style="position: absolute; top: 25px; width: 100%;">
                    <!-- <img style="max-width: 340px; margin-left: auto; margin-right: auto;" src="<?php the_field('wifi_logo', 'option'); ?>"> -->
                    <h1><i style="width: 400px; margin-left: auto; margin-right: auto;" class="fa fa-wifi fa-2x" aria-hidden="true"></i></h1>
                    <h2 style="color: #ffffff; font-size: 4rem; letter-spacing: 1px; font-weight: 600; margin-bottom: 0px;"><?php the_sub_field('password'); ?></h2>

                  </div>
                </div>
                <div class="col-md-12" style="height: 25vh;">
                  <div style="position: absolute; top: 35px; width: 100%;">
                    <h1 style="color: #ffffff; font-size: 2rem; font-weight: 400; font-style: italic; margin-bottom: 0px;"><?php the_sub_field('term'); ?></h1>
                  </div>
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "history"): // layout: history ?>

            <div id="" class="carousel-item" style="background: url('<?php the_sub_field('img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <!-- <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh; ">
                <div class="col-md-12" style="width: 100vw; height: 30vh;">
                  <div style="position: absolute; bottom: 0px; width: 100%;">
                    <h1 style="color: #444444; font-size: 4rem; font-weight: 800; font-family: minion-pro, serif; font-style: italic; margin-bottom: 10px;"><?php the_sub_field('title'); ?></h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 50px 0px; height: 50vh;">
                  <div class="row" style="position: absolute; bottom: 30px;">
                    <div align="right" class="col-md-6" style="">
                      <img style="max-width: 80%; margin-left: auto; margin-right: auto; border: 3px solid #444444; border-radius: 5px;" src="<?php the_sub_field('img'); ?>">
                    </div>
                    <div align="left" class="col-md-6" style="padding-right: 10%; font-family: minion-pro, serif;">
                      <h5><?php the_sub_field('excerpt'); ?></h5>
                      <hr>
                      <p>Source:<br><?php the_sub_field('source'); ?></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-12" style="height: 10vh;">
                </div>
              </div> -->

              <div align="left" class="row" style="background-color: rgba(128,128,132,0.90);">
                <div class="col-md-4">
                  <div style="padding-left: 30px; position: absolute; top: 15%; left: 5%;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 3rem; padding-bottom: 20px; border-bottom: 3px solid #f0b310; margin-bottom: 20px;"><?php the_sub_field('title'); ?></h1>
                    <h2 style="color: #ffffff; font-size: 2.75rem; margin-bottom: 20px;"><?php the_sub_field('excerpt'); ?></h2>
                    <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 400; margin-bottom: 0px;">Source: <?php the_sub_field('source'); ?></h2>

                  </div>
                </div>
                <div id="curved_left" class="col-md-8" style="height: 100vh; border: 9px solid #ffffff; background: url('<?php the_sub_field('img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                </div>
              </div>

            </div>

          <?php elseif(get_row_layout() == "counseling"): // layout: counseling ?>

            <div id="" class="carousel-item" style="background-color: #c9cacc;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh;">
                <div id="" class="col-md-12" style="width: 100vw; height: 35vh; border-bottom: 9px solid #F0B310;">
                  <div style="position: absolute; bottom: 20px; width: 100%;">
                    <h1 style="color: #444444; text-transform: uppercase; font-weight: 800; font-size: 4.5; margin-bottom: 0px;"><?php the_sub_field('header'); ?></h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 50px 0px; height: 55vh;">
                  <div style="position: absolute; bottom: 30px; width: 100%; padding: 10%;">
                    <h1 style="color: #444444; font-size: 4em; margin-bottom: 10px;"><strong><?php the_sub_field('phone_number'); ?></strong></h1>
                    <h1 style="color: #444444; font-size: 3rem; margin-bottom: 10px;"><?php the_sub_field('subtext_a'); ?></h1>
                    <h2 style="color: #444444; font-size: 2rem; margin-bottom: 0px;"><?php the_sub_field('subtext_b'); ?></h2>
                  </div>
                </div>
                <div class="col-md-12" style="height: 10vh;">
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "business_cards"): // layout: biz cards ?>

            <!-- <div id="" class="carousel-item"  style="text-shadow: #000000 3px; width: 100vw; height: 100vh; background: url('<?php the_sub_field('dyk_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; ">
              <div align="left" class="row">
                <div class="" style="width: 100vw; height: 100vh; margin: 150px 60px ;">
                  <div style="padding: 30px; position: absolute; top: 25%; left: 50px;">
                    <h1><?php the_sub_field('dyk_title'); ?></h1>
                    <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 0px; max-width: 75%;"><?php the_sub_field('dyk_fact'); ?></h2>
                    <img style="max-width: 250px; margin-top: 30px;" src="<?php the_field('main_logo', 'option'); ?>">
                  </div>
                </div>
              </div>
            </div> -->
            <div id="" class="carousel-item" style="background: url('<?php the_sub_field('group_img'); ?>') no-repeat center center fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
              <div align="left" class="row">
                <div class="col-md-8">
                </div>
                <div id="dyk_health" align="left" class="col-md-4" style="height: 65vh; background-color: none;">
                </div>
              </div>
              <div align="left" class="row">
                <div class="col-md-8">
                </div>
                <div id="dyk_health" align="left" class="col-md-4" style="height: 35vh; background-color: rgba(182,0,80,0.85);">
                  <div style="padding: 60px; position: absolute; bottom: 25%; left: 5%;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 3.5rem; padding-bottom: 20px; border-bottom: 3px solid #f0b310; margin-bottom: 20px;"><?php the_sub_field('bc_title'); ?></h1>
                    <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 0px;"><?php the_sub_field('bc_text'); ?></h2>
                  </div>
                  <div style="padding: 60px; position: absolute; bottom: 20%; left: 5%;">
                    <!-- <h2 style="color: #ffffff; font-size: 1.5rem; font-weight: 200; font-style: italic; margin-bottom: 0px;">Learn more at cleveland.edu!</h2> -->
                  </div>
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "information_technology"): // layout: IT ?>

            <div id="" class="carousel-item" style="background-color: #a41d41;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh; ">
                <div id="" class="col-md-12" style="width: 100vw; height: 35vh; border-bottom: 9px solid #F0B310; background-color: #a41d41;">
                  <div style="position: absolute; bottom: 20px; width: 100%;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 4.5; margin-bottom: 0px;"><?php the_sub_field('heading'); ?></h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 50px 0px; height: 55vh;">
                  <div style="position: absolute; bottom: 40px; width: 100%; padding: 10%;">
                    <h1 style="color: #ffffff; font-size: 5rem; margin-bottom: 10px;"><strong>Available 24/7</strong></h1>
                    <h1 style="color: #ffffff; font-size: 3.5rem; margin-bottom: 10px;"><?php the_sub_field('top_subtext'); ?></h1>
                    <h2 style="color: #ffffff; font-size: 2rem; margin-bottom: 0px;"><?php the_sub_field('bottom_subtext'); ?></h2>
                  </div>
                </div>
                <div class="col-md-12" style="height: 10vh;">
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "event"): // layout: event ?>

            <div id="" class="carousel-item" style="background-color: #808084;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh;">
                <div id="" class="col-md-12" style="width: 100vw; height: 35vh; border-bottom: 9px solid #F0B310;">
                  <div style="position: absolute; bottom: 20px; width: 100%;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 4.5; margin-bottom: 0px;"><?php the_sub_field('event_title'); ?></h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 50px 0px; height: 65vh;">

                  <div class="row" style="position: absolute; top: 40px; width: 100%;">
                    <!-- <div class="col-md-2" style="">
                    </div> -->
                    <div align="right" class="col-md-6" style="max-width: 85%;">
                      <h1 style="color: #ffffff; font-size: 3.5rem; margin-bottom: 40px;"><strong><?php the_sub_field('event_name'); ?></strong></h1>
                      <h1 style="color: #ffffff; font-size: 2.5rem; line-height: 1.25; margin-bottom: 20px;"><?php the_sub_field('event_date'); ?></h1>
                      <h2 style="color: #ffffff; font-size: 3rem; padding-left: 40px; margin-bottom: 0px;"><?php the_sub_field('event_info'); ?></h2>
                    </div>
                    <div align="left" class="col-md-6" style="">
                      <img style="max-width: 60%; border: 3px solid #ffffff; border-radius: 5px;" src="<?php the_sub_field('event_img'); ?>">
                    </div>
                    <!-- <div class="col-md-2" style="">
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "guest_speaker"): // layout: guest speaker ?>

            <div id="" class="carousel-item" style="background-color: #f18c21;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh;">
                <div id="" class="col-md-12" style="width: 100vw; height: 35vh; border-bottom: 9px solid #a41d41;">
                  <div style="position: absolute; bottom: 20px; width: 100%;">
                    <h1 style="color: #ffffff; text-transform: uppercase; font-weight: 800; font-size: 4.5rem; margin-bottom: 0px;"><?php the_sub_field('event'); ?></h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 50px 0px; height: 65vh;">

                  <div class="row" style="position: absolute; top: 40px; width: 100%;">
                    <!-- <div class="col-md-2" style="">
                    </div> -->
                    <div align="right" class="col-md-6" style="">
                      <img style="max-width: 100%; border: 3px solid #ffffff; border-radius: 5px;" src="<?php the_sub_field('headshot'); ?>">
                    </div>
                    <div align="left" class="col-md-6" style="max-width: 85%;">
                      <h1 style="color: #ffffff; font-size: 3.5rem; margin-bottom: 40px;"><strong><?php the_sub_field('guest_name'); ?></strong></h1>
                      <h1 style="color: #ffffff; font-size: 2.5rem; line-height: 1.5; margin-bottom: 20px;"><?php the_sub_field('date_time'); ?></h1>
                      <h2 style="color: #ffffff; font-size: 3rem; padding-right: 40px; margin-bottom: 0px;"><?php the_sub_field('description'); ?></h2>
                    </div>
                    <!-- <div class="col-md-2" style="">
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

          <?php elseif(get_row_layout() == "connect"): // layout: connect ?>

            <div id="" class="carousel-item" style="background-color: #F0B310;">
              <div align="center" class="row" style="margin: 0px; width: 100vw; height: 100vh; background: url('<?php the_field('overlay_bg', 'option'); ?>') no-repeat bottom right fixed;   -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="col-md-12" style="width: 100vw; height: 35vh;">
                  <div style="position: absolute; bottom: 35px; width: 100%;">
                    <h1 style="color: #a41d41; font-size: 4.5rem; font-weight: 800; margin-bottom: 10px;"><?php the_sub_field('connect_heading'); ?></h1>
                  </div>
                </div>
                <div class="col-md-12" style="padding: 0px 0px; height: 40vh;">
                  <div style="position: absolute; top: 25px; width: 100%;">
                    <h1><i style="width: 300px; height: 300px; padding: 60px; border-radius: 50%; border: 3px solid #ffffff; margin-left: 5px; margin-right: 5px;" class="fa fa-facebook fa-2x" aria-hidden="true"></i><i style="width: 300px; height: 300px; padding: 60px; border-radius: 50%; border: 3px solid #ffffff;  margin-left: 5px; margin-right: 5px;" class="fa fa-twitter fa-2x" aria-hidden="true"></i><i style="width: 300px; height: 300px; padding: 60px; border-radius: 50%; border: 3px solid #ffffff; margin-left: 5px; margin-right: 5px;" class="fa fa-instagram fa-2x" aria-hidden="true"></i></h1>
                    <h2 style="color: #ffffff; font-size: 4.5rem; letter-spacing: 1px; font-weight: 600; margin-bottom: 0px;"><?php the_sub_field('connect_top'); ?></h2>

                  </div>
                </div>
                <div class="col-md-12" style="height: 25vh;">
                  <div style="position: absolute; top: 35px; width: 100%;">
                    <h1 style="color: #a41d41; font-size: 3rem; margin-bottom: 0px;"><?php the_sub_field('connect_bottom'); ?></h1>
                  </div>
                </div>
              </div>
            </div>

      		<?php endif; ?>

      	<?php endwhile; ?>

      </div>

      <?php endif; ?>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  <?php endwhile; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
