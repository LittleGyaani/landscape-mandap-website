<?php

//Include Global Meta Section
require __DIR__.'/assets/config/global.config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landscape Mandap - Luxury of your Event | Contact Us</title>
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
    <div id="progress" class="ajax-progress"></div>
    <?php
    //Include Header and Navigation
    include 'assets/templates/template-navigation.php';
    ?>

    <section class="probootstrap-slider flexslider probootstrap-inner">
      <ul class="slides">
        <li style="background-image: url(assets/images/contac_us.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Contact Us</h1>
                  <div class="probootstrap-animate probootstrap-sub-wrap">We promise to get back to you at the earliest.</div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>
    <section class="probootstrap-section">
      <div class="container">
        <div class="row probootstrap-gutter60">
          <div class="col-md-8">
            <h2 class="mt0">Contact Form</h2>
            <form action="javascript:void(0);" autocomplete="off" enctype="multipart/form-data" method="post" class="probootstrap-form" id="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Send Message">
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <h2 class="mt0">Get In Touch</h2>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>Bhubaneswar, Odisha</span></li>
              <li><i class="icon-mail"></i><span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="86efe8e0e9c6e2e9ebe7efe8a8e5e9eb">landscape@gmail.com</a></span></li>
              <li><i class="icon-phone2"></i><span>+91 9999 999 999</span></li>
            </ul>
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
