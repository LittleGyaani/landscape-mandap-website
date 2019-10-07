<?php

//Include Global Meta Section
require __DIR__.'/assets/config/global.config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landscape Mandap - Luxury of your Event | Events Home</title>
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
        <li style="background-image: url(assets/images/events_landing.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Services Provided by Landscape</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">We are all about Passion, Creativity & Flawless Execution.</div>
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
          <p>For decades, Landscape Ventures has delivered event management services that achieve your most important goals. You choose the level of service you need. We can provide end-to-end professional event management, or you pick the services that are right for you.</p>
        </div>
        <div class="col-md-6">
          <p>As a part of Landscape ventures, our Banquet Hall offers fully customizable and viable packages – from your wedding event, to corporate lunches and full-day workshops or seminar – allow our staff of industry event experts to show you our venues and in-house catering packages to suit your every need.</p>
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

  <section class="probootstrap-section">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center probootstrap-animate">
          <h2>Explore our Services</h2>
          <p class="lead">Your desire is our passion, and our passion is our work. We as a established venture and with lots of experience ready to create the best memorable event of your life.</p>
          <p><img src="assets/images/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="https://img.icons8.com/color/80/000000/park-concert-shell.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Venue</h3>
              <p>As the preferred space for high profile weddings, social fetes, conventions and corporate celebrations, this one-of-a-kind event venue has played on several occasions.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="https://img.icons8.com/nolan/80/000000/video-conference.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Video & Photo</h3>
              <p>Specializing in creating Video & Photo masterpieces. We really listen to our client's needs and work with you the entire step of the way to ensure the best output.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="https://img.icons8.com/color/80/000000/bride.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Make-up & Mehendi</h3>
              <p>We understand each wedding is different and accordingly plan the bride’s overall appearance. Look like a star at your wedding with the exclusive make-up and mehndi.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="https://img.icons8.com/dusk/80/000000/dj.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>DJ & Band</h3>
              <p>We offer premium and professional wedding DJ services. No matter what your music style is, we'll find the right DJ & Band to stay in sync with your favourite tunes.</p>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="https://img.icons8.com/plasticine/80/000000/christmas-tree.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Decoration</h3>
              <p>Life is all about the little fleeting moments. With our decoration services, you can create some everlasting memories that you and your loved ones will remember forever.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="https://img.icons8.com/color/80/000000/tableware.png" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Catering</h3>
              <p>With dedicated and handpicked culinary staff, we offer high-quality catering services in Bhubaneswar. We strive to provide authentic food to make the special blend.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-half">
    <div class="image" style="background-image: url(assets/images/company-services-half.jpg);"></div>
    <div class="text" style="background: #014558 !important;">
      <div class="probootstrap-animate fadeInUp probootstrap-animated">
        <h2 class="mt0">We Understand Your Needs</h2>
        <p><img src="assets/images/curve_white.svg" class="seperator" alt="Landscape Ventures"></p>
        <div class="row">
          <div class="col-md-6">
            <p><b>Landscape Ventures</b> is skilled in the technical as well as the creative and logistical implementation of events. Whether it’s a trade show, product launch, wedding, cocktail party, awards ceremony or a sit-down gala dinner, we first identify the audience of each event and go out of the way to understand your brand and budget as well. We come up with innovative ways to inspire, communicate, and entertain. The look after the most important aspects of event production including lighting, décor, theming, styling, catering, sound, vision, and entertainment.</p>
          </div>
          <div class="col-md-6">
            <p> Our aim is to take the stress out of planning a special event by taking a step ahead of the market. They can provide beautiful centrepieces, comfortable linens, stunning floral arrangements and funky entertainment options to make your special event perfect and make it memorable.</p>
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
