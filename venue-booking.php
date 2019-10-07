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

    <div id="progress" class="ajax-progress"></div>
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
        <div class="row probootstrap-gutter40">
          <div class="col-md-8">
            <h2 class="mt0">Book Venue Form</h2>
            <form action="javascript:void(0);" method="post" enctype="multipart/form-data" autocomplete="off" class="probootstrap-form" id="venueBooking">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fname">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="lname">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <div class="form-field">
                      <i class="icon icon-mail"></i>
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <div class="form-field">
                      <i class="icon icon-phone"></i>
                      <input type="tel" class="form-control" id="phone" name="phone" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="10" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date-arrival">Booking Date</label>
                    <div class="form-field">
                      <i class="icon icon-calendar2"></i>
                      <input type="text" class="form-control" id="booking-date" name="booking-date" required readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="adults">Number of Guests</label>
                    <div class="form-field">
                      <i class="icon icon-users"></i>
                      <input type="text" maxlength="3" class="form-control" id="guest-count" name="guest-count" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block btn-lg" id="submit" name="submit" value="Booke Venue Now">
              </div>
            </form>
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
