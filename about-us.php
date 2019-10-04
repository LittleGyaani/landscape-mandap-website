<?php

//Include Global Meta Section
require __DIR__.'/assets/config/global.config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landscape Mandap - Luxury of your Event | About Us</title>
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
        <li style="background-image: url(assets/images/about_us.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">About Landscape Ventures</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">We make your event in stories, Stories give your event meaning.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div class="row mb30">
          <div class="col-md-12">
            <!-- <figure>
              <img src="assets/images/slider_1.jpg" alt="Landscape Ventures by uicookies.com" class="img-responsive">
            </figure> -->
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p>Landscape Ventures is a Bhubaneswar based Event Organizer that provide a one-stop solution for your event and turns it into a story to be told forever.</p>
            <p>We pledged to solemnize various events & programs at its customers choice. The events like Wedding, Bachelor Party, Birthday Party, Anniversary Party, Meeting & Conference, Inauguration, Brand Promotion, Musical Party, Star Night, Corporate Events and many more are conducted to accomplish at its best of service.</p>
          </div>
          <div class="col-md-6">
            <p>We always believe in offering our clients good value for money by delivering high-end services. We are committed to bring a corporate ethos and professional touch to every event & to every promotional activity without channeling the client's valuable time or manpower resources.</p>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-section probootstrap-section-dark">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="mt0">Why Choose Us?</h2>
            <p class="mb50"><img src="assets/images/curve.svg" class="svg" alt="Landscape Ventures"></p>
          </div>
          <div class="col-md-4">
            <div class="service left-icon left-icon-sm probootstrap-animate">
              <div class="icon">
                <i class="icon-check"></i>
              </div>
              <div class="text">
                <h3>Creative event organizers</h3>
                <p>Currently stands amongst the top service providing companies in the state, known for its innovation and creating industry benchmarks, Landscape Ventures has a bunch of goodwill to its credit.</p>
                <!-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service left-icon left-icon-sm probootstrap-animate">
              <div class="icon">
                <i class="icon-check"></i>
              </div>
              <div class="text">
                <h3>Professional & Team Qualified</h3>
                <p>Our team of qualified professionals brimming with zeal to make an event of yours an extravagant affair to remember for an entire era. We put enchantment for all the services we provide to our clients as we have an uncanny ability to convert ideas to things, and eventually a reality, which is the backbone to success!</p>
                <!-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> -->
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service left-icon left-icon-sm probootstrap-animate">
              <div class="icon">
                <i class="icon-check"></i>
              </div>
              <div class="text">
                <h3>Entertainment Solution Providers</h3>
                <p>We are a complete entertainment solution provider and an Event Planner for all your event needs. No matter what size your event may be, we will organize your complete event down to every last-minute detail.</p>
                <!-- <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-half">
      <div class="image" style="background-image: url(assets/images/slider_2.jpg);"></div>
      <div class="text">
        <div class="probootstrap-animate fadeInUp probootstrap-animated">
          <h2 class="mt0">Best 5 Star hotel</h2>
          <p><img src="assets/images/curve_white.svg" class="seperator" alt="Landscape Ventures"></p>
          <div class="row">
            <div class="col-md-6">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            <div class="col-md-6">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
          <p><a href="#" class="link-with-icon white">Learn More <i class=" icon-chevron-right"></i></a></p>
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
