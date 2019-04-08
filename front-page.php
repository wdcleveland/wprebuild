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

<style>

/* MAIN HERO COLUMN */

  div.main_block:nth-of-type(1) {
    /* height: 675px; */
    background-image: url("https://securedata2.finalsite.com/cf76/cleveland/data/media/fullsize/265.jpg?v=071515140321");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.main_block:nth-of-type(2) {
    /* height: 675px; */
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/experience.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  /* 3 RIGHT COLUMNS */

  div.img_blocks:nth-of-type(1) {
    /* height: 225px; */
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-01.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.img_blocks:nth-of-type(2) {
    /* height: 225px; */
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-02.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.img_blocks:nth-of-type(3) {
    /* height: 225px; */
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-03.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.col-md-4.img_background:nth-child(1) {
    /* height: 225px; */
    padding: 0px;
    background-image: url("https://www.cleveland.edu/uploaded/images/campus_life/bigstock-Kansas-City-Mo-usa--Circa-Ju-119498249.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.col-md-4.img_background:nth-child(2) {
    /* height: 225px; */
    padding: 0px;
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-04.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.col-md-4.img_background:nth-child(3) {
    /* height: 225px; */
    padding: 0px;
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-05.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  @media (pointer: coarse) and (hover: none) {
    .hp_video {
      background: url('http://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
    }
    .hp_video video {
      display: none;
    }
  }

</style>

  <div class="container-fluid">
    <div class="row hp_blocks_top">
      <div align="center" class="main_block col-xl-8 col-lg-9 col-md-12">
        <div id="hp_main">
          <div align="right" class="cta_advisor_overlay">
            <a href="<?php the_field('button_url', 'option'); ?>" class="btn btn-primary"><?php the_field('button_text', 'option'); ?></a>
          </div>
          <h1><?php the_field('main_text'); ?></h1>
          <a class="btn btn-homepage" href="<?php the_field('main_url'); ?>"><?php the_field('main_button_text'); ?></a>
        </div>
      </div>
      <div align="center" class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
        <div class="row">
          <div align="center" class="img_blocks col-lg-12 col-md-4 col-sm-12">
            <div class="img_background">
              <div id="hp_dp">
                <h2>
                  <span>
                    <?php the_field('dp_top'); ?>
                  </span>
                  <br>
                    <?php the_field('dp_bottom'); ?>
                </h2>
                <a class="btn btn-homepage" href="<?php the_field('dp_url'); ?>"><?php the_field('dp_button_text'); ?></a>
              </div>
            </div>
          </div>
          <div align="center" class="img_blocks col-lg-12 col-md-4 col-sm-12">
            <div class="img_background">
              <div id="hp_tf">
                <h2>
                  <span>
                    <?php the_field('tuition_top'); ?>
                  </span>
                  <br>
                  <?php the_field('tuition_bottom'); ?>
                </h2>
                <a class="btn btn-homepage" href="<?php the_field('tuition_url'); ?>"><?php the_field('tuition_button_text'); ?></a>
              </div>
            </div>
          </div>
          <div align="center" class="img_blocks col-lg-12 col-md-4 col-sm-12">
            <div class="img_background">
              <div id="hp_fa">
                <h2>
                  <span>
                    <?php the_field('fa_top'); ?>
                  </span>
                  <br>
                  <?php the_field('fa_bottom'); ?>
                </h2>
                <a class="btn btn-homepage" href="<?php the_field('fa_url'); ?>"><?php the_field('fa_button_text'); ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hp_padding">
    <div id="hp_students" class="container">
      <div align="center" class="row">
        <div class="col-md-12">
          <h2>Hear From Our Students</h2>
        </div>
      </div>
      <!-- <div class="tab-content" id="testimonialContent">
        <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="testimony-one-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
          <h3>- John Doe</h3>
        </div>
        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="testimony-two-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
          <h3>- Jane Doe</h3>
        </div>
        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="testimony-three-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
          <h3>- Jack Doe</h3>
        </div>
        <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="testimony-four-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
          <h3>- Johnny Doe Jr.</h3>
        </div>
        <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="testimony-five-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
          <h3>- Jim Doe</h3>
        </div>
      </div> -->
      <!-- <ul class="nav nav-tabs nav-justified" id="testimonialTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="testimony-one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">
            <div class="student_highlight">
            </div>
            <h4>TEST</h4>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="three" aria-selected="false">
            <div class="student_highlight">
            </div>
            <h4>TEST</h4>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="two" aria-selected="false">
            <div class="student_highlight">
            </div>
            <h4>TEST</h4>
          <a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">
            <div class="student_highlight">
            </div>
            <h4>TEST</h4>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">
            <div class="student_highlight">
            </div>
            <h4>TEST</h4>
          </a>
        </li>
      </ul> -->

      <?php if( have_rows('tab_panes') ): ?>
        <div class="tab-content" id="">
        <?php $row = 1; // number rows ?>
        <?php // Step 2: Loop through rows, now displaying tab contents
         while( have_rows('tab_panes') ): the_row();
        // Display each item as a list ?>
            <div role="tabpanel" class="tab-pane <?php if($row == 1) {echo 'active';}?>" id="<?php echo $row; ?>">
                <p><?php the_sub_field('tab_contents'); ?></p>
                <h3>- <?php the_sub_field('student_name'); ?></h3>
            </div>
            <?php $row++; endwhile; // (have_rows('tab_panes') ):?>
          </div>

      <?php endif; // (have_rows('tab_panes') ): ?>

      <!-- Check for parent repeater row -->
      <?php if( have_rows('tab_panes') ): ?>
        <ul class="nav nav-tabs nav-justified" role="tablist">
        <?php $row = 1; // number rows ?>
        <?php // Step 1: Loop through rows, first displaying tab titles
         while( have_rows('tab_panes') ): the_row();
        //  ?>
          <li class="nav-item">
            <a
              href="#<?php echo $row; ?>"
              role="tab"
              data-toggle="tab"
              class="nav-link <?php if($row == 1) {echo 'active';}?>"
              >
            <!-- <?php the_sub_field('tab_title'); ?> -->
            <div class="student_highlight">
            </div>
            <h4><?php the_sub_field('tab_title'); ?></h4>
            </a>
          </li>
          <?php $row++; endwhile; // (have_rows('tab_panes') ):?>
        </ul>
      <?php endif; // (have_rows('tab_panes') ): ?>

    </div>
  </div>

  <div class="container-fluid">
    <div align="center" class="row" style="">
      <div class="hp_video col-lg-4">
        <div id="hp_kansascity">
          <h2>
            <span>
              <?php the_field('kc_top'); ?>
            </span>
            <br>
            <?php the_field('kc_bottom'); ?>
          </h2>
          <a class="btn btn-homepage" href="<?php the_field('kc_url'); ?>"><?php the_field('kc_button_text'); ?></a>
        </div>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="http://securedata2.finalsite.com/cf76/cleveland/data/media/video/720p/266.mp4?rand=1551714557257" type="video/mp4">
          </video>
      </div>
      <div class="main_block col-lg-8 col-md-12" style="">
        <div id="hp_experience">
          <h1><?php the_field('exp_text'); ?></h1>
          <a class="btn btn-homepage" href="<?php the_field('exp_url'); ?>"><?php the_field('exp_button_text'); ?></a>
        </div>
      </div>
    </div>
    <div align="center" class="row" style="">
      <div class="hide_show col-lg-6 col-md-4 col-sm-12 img_background">
        <div id="kc_mobile">
          <h2>
            <span>
              <?php the_field('kc_top'); ?>
            </span>
            <br>
            <?php the_field('kc_bottom'); ?>
          </h2>
          <a class="btn btn-homepage" href="<?php the_field('kc_url'); ?>"><?php the_field('kc_button_text'); ?></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-12 img_background">
        <div id="hp_pioneers">
          <h2>
            <span>
              <?php the_field('cp_top'); ?>
            </span>
            <br>
            <?php the_field('cp_bottom'); ?>
          </h2>
          <a class="btn btn-homepage" href="<?php the_field('cp_url'); ?>"><?php the_field('cp_button_text'); ?></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-12 img_background">
        <div id="hp_community">
          <h2>
            <span>
              <?php the_field('cl_top'); ?>
            </span>
            <br>
            <?php the_field('cl_bottom'); ?>
          </h2>
          <a class="btn btn-homepage" href="<?php the_field('cl_url'); ?>"><?php the_field('cl_button_text'); ?></a>
        </div>
      </div>
    </div>
  </div>

  <div class="hp_padding">
    <div id="hp_events" class="container">
      <div align="" class="row">
        <div align="left" class="col-md-4 col-sm-6">
          <h2>Our News And Events</h2>
        </div>
        <div align="right" class="col-md-8 col-sm-6">
          <a href="#">View All News <i class="fas fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="row hp_news_events">
        <?php $args = array( 'post_type' => 'Event', 'posts_per_page' => 3 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          echo '<div class="col-md-4"><img src="';
          the_field('headshot');
          echo '" alt="';
          the_field('custom_alt_text');
          echo '"/><time datetime="';
          the_time( 'Y-m-d' );
          echo '"pubdate>Posted ';
          the_date();
          echo '</time><br><a href="';
          esc_url( the_permalink() );
          echo '"><h1>';
          the_title();
          echo '</h1></a></div>';
        endwhile; ?>
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


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
