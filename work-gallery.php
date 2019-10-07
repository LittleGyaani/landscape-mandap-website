<?php

//Include Global Meta Section
require __DIR__.'/assets/config/global.config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landscape Mandap - Luxury of your Event | Book Venue</title>
  <?php
  //Include Meta Section
  include 'assets/templates/template-meta.php';
  ?>

  <?php
  //Include Main Header
  include 'assets/templates/template-header.php';
  ?>

  <!--[if lt IE 9]>
  <script src="assets/js/vendor/html5shiv.min.js"></script>
  <script src="assets/js/vendor/respond.min.js"></script>
  <![endif]-->
  <body>
    <!-- Website Pre-Loader -->
    <div id="loading"></div>
    <?php
    //Include Header and Navigation
    include 'assets/templates/template-navigation.php';
    ?>

    <section class="probootstrap-slider flexslider probootstrap-inner">
      <ul class="slides">
        <li style="background-image: url(assets/images/book-venue-header.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Book Your Venue</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">Best Venues. Submersive Experience. Aesthetic Memories.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div id="lightgallery">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <a href="assets/images/about_us.jpg">
                <img src="assets/images/about_us.jpg">
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <a href="assets/images/about_us.jpg">
                <img src="assets/images/about_us.jpg">
              </a>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <a href="assets/images/about_us.jpg">
                <img src="assets/images/about_us.jpg">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    //Include Footer Section
    include 'assets/templates/template-footer.php';
    ?>

    <?php
    //Include Scrits Section
    include 'assets/templates/template-scripts.php';
    ?>
  </body>
  </html>
