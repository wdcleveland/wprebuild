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
    height: 675px;
    background-image: url("https://securedata2.finalsite.com/cf76/cleveland/data/media/fullsize/265.jpg?v=071515140321");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  /* 3 RIGHT COLUMNS */

  div.img_blocks:nth-of-type(1) {
    height: 225px;
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-01.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.img_blocks:nth-of-type(2) {
    height: 225px;
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-02.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.img_blocks:nth-of-type(3) {
    height: 225px;
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-03.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.col-md-6.img_background:nth-child(1) {
    height: 225px;
      padding: 0px;
    background-image: url("https://www.cleveland.edu/uploaded/themes/default/images/home/cu-04.jpg");
    background-size: cover;
    background-position: center;
    position: relative;
  }

  div.col-md-6.img_background:nth-child(2) {
    height: 225px;
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
          <h1>Test<br>1, 2, THREE!...</h1>
          <a class="btn btn-homepage" href="#">The Journey Starts Here</a>
        </div>
      </div>
      <div align="center" class="col-xl-4 col-lg-3 col-md-12 col-sm-12">
        <div class="row">
          <div align="center" class="img_blocks col-lg-12 col-md-4 col-sm-12">
            <div class="img_background">
              <div id="hp_dp">
                <h2>
                  <span>
                    Top Line
                  </span>
                  <br>
                    Bottom Line
                </h2>
                <a class="btn btn-homepage" href="#">Learn More</a>
              </div>
            </div>
          </div>
          <div align="center" class="img_blocks col-lg-12 col-md-4 col-sm-12">
            <div class="img_background">
              <div id="hp_tf">
                <h2>
                  <span>
                    Top Line
                  </span>
                  <br>
                    Bottom Line
                </h2>
                <a class="btn btn-homepage" href="#">Learn More</a>
              </div>
            </div>
          </div>
          <div align="center" class="img_blocks col-lg-12 col-md-4 col-sm-12">
            <div class="img_background">
              <div id="hp_fa">
                <h2>
                  <span>
                    Top Line
                  </span>
                  <br>
                    Bottom Line
                </h2>
                <a class="btn btn-homepage" href="#">Learn More</a>
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
      <div class="tab-content" id="testimonialContent">
        <div class="tab-pane fade show active" id="one" role="tabpanel" aria-labelledby="testimony-one-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
        </div>
        <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="testimony-two-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
        </div>
        <div class="tab-pane fade" id="three" role="tabpanel" aria-labelledby="testimony-three-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
        </div>
        <div class="tab-pane fade" id="four" role="tabpanel" aria-labelledby="testimony-four-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
        </div>
        <div class="tab-pane fade" id="five" role="tabpanel" aria-labelledby="testimony-five-tab">
          <p>I'm too motivated to let anything stop me from becoming the change in health care I envision for myself.</p>
        </div>
      </div>
      <ul class="nav nav-tabs nav-justified" id="testimonialTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="testimony-one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="three" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="two" aria-selected="false">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-four-tab" data-toggle="tab" href="#four" role="tab" aria-controls="four" aria-selected="false">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="testimony-five-tab" data-toggle="tab" href="#five" role="tab" aria-controls="five" aria-selected="false">Contact</a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container-fluid">
    <div align="center" class="row" style="height: 675px;">
      <div class="hp_video col-md-4">
        <div id="hp_kansascity">
          <h2>
            <span>
              Top Line
            </span>
            <br>
              Bottom Line
          </h2>
          <a class="btn btn-homepage" href="#">Learn More</a>
        </div>
          <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="http://securedata2.finalsite.com/cf76/cleveland/data/media/video/720p/266.mp4?rand=1551714557257" type="video/mp4">
          </video>
      </div>
      <div class="col-md-8" style="background-color: #f2f2f2;">
      </div>
    </div>
    <div align="center" class="row" style="height: 225px;">
      <div class="col-md-6 img_background">
        <div id="hp_pioneers">
          <h2>
            <span>
              Top Line
            </span>
            <br>
              Bottom Line
          </h2>
          <a class="btn btn-homepage" href="#">Learn More</a>
        </div>
      </div>
      <div class="col-md-6 img_background">
        <div id="hp_community">
          <h2>
            <span>
              Top Line
            </span>
            <br>
              Bottom Line
          </h2>
          <a class="btn btn-homepage" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </div>

  <div class="hp_padding">
    <div class="container">
      <div id="hp_events" class="row">
        <div class="col-md-4">
          <img src="https://www.cleveland.edu/data/news/thumbs/649.512.jpg">
        </div>
        <div class="col-md-4">
          <img src="https://www.cleveland.edu/data/news/thumbs/649.512.jpg">
        </div>
        <div class="col-md-4">
          <img src="https://www.cleveland.edu/data/news/thumbs/649.512.jpg">
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


<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer') ); ?>
