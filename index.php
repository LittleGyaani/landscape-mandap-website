<?php

//Include Global Meta Section
require __DIR__.'/assets/config/global.config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Landscape Ventures - Luxury of your Event | Home</title>
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
</head>
<body>
  <!-- Website Pre-Loader -->
  <div id="loading"></div>
  <?php
  //Include Header and Navigation
  include 'assets/templates/template-navigation.php';
  ?>
  <section class="probootstrap-slider probootstrap-animate flexslider">
    <ul class="slides">

      <li style="background-image: url(<?=ImageCompression('https://i.ytimg.com/vi/qmhsoY9IIwY/maxresdefault.jpg');?>); display: list-item;" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <!--<p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>-->
                <h1 class="probootstrap-heading probootstrap-animate">Welcome to <strong>Landscape</strong></h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">IMAGINE BEAUTIFUL! We bring the awesomeness.</div>
              </div>
            </div>
          </div>
        </div>
      </li>

      <li style="background-image: url(<?=ImageCompression($baseURI.'assets/images/Landscape-Hall.jpeg');?>);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <!--<p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>-->
                <h1 class="probootstrap-heading probootstrap-animate">Luxury Starts Here</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Enjoy the beauty of handcrafted decoration and submersible arrangements.</div>
              </div>
            </div>
          </div>
        </div>
      </li>

      <li style="background-image: url(<?=ImageCompression($baseURI.'assets/images/events/galanights.jpg');?>);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <!--<p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>-->
                <h1 class="probootstrap-heading probootstrap-animate">Gala Nights</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Best in class.</div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(<?=ImageCompression($baseURI.'assets/images/events/Corporate-Event-6.jpg');?>);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <!--<p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>-->
                <h1 class="probootstrap-heading probootstrap-animate">Corporate Events</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Best in corporate event organizer.</div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(<?=ImageCompression($baseURI.'assets/images/events/govevents2.jpg');?>);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <!--<p><img src="assets/images/curve_white.svg" class="seperator probootstrap-animate" alt="Landscape Ventures"></p>-->
                <h1 class="probootstrap-heading probootstrap-animate">Government Events</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Best Govt Events.</div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <section class="probootstrap-cta probootstrap-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="probootstrap-cta-heading">Let's make your special occassion even more memorable.<span> &mdash; Beautiful venues, dramatic experince and cinematic feel, live them all together.</span></h2>
          <div class="probootstrap-cta-button-wrap"><a href="venue-booking" class="btn btn-primary">Book Venue now</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Events Section -->
  <section class="probootstrap-section eventsBG">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center probootstrap-animate">
          <h2>Events we Organise</h2>
          <p class="lead">Findout the types of Events we organize and strive to be the best among all.</p>
          <p><img src="assets/images/curve.svg" class="svg" alt="Landscape Ventures"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service probootstrap-animate">
            <div class="text">
              <center>
                <div class="centerTitle">Weddings</div>
              </center>
              <div class="textWithBlurredBg">
                <h3>Weddings</h3>
                <p>As a wedding planner and decorator service based out of Bhubaneswar which has been planning, managing and executing weddings in a fabulous manner.</p>
                <img class="imgblur" class="imgblur" src="<?=ImageCompression($baseURI.'assets/images/events/wedding3.jpg');?>" height="300" width="350" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service probootstrap-animate">
            <!-- <div class="icon">
            <img src="https://img.icons8.com/dusk/80/000000/prize.png" class="svg" alt="Landscape Ventures">
          </div> -->
          <div class="text">
            <div class="centerTitle">Gala & Awards</div>
            <div class="textWithBlurredBg">
              <h3>Gala & Awards</h3>
              <p>We ensure that you get the best possible Gala and Award event planning services, technical expertise to guarantee the best use of the investment to create the night of the year.</p>
              <img class="imgblur" src="<?=ImageCompression($baseURI.'assets/images/events/galanights.jpg');?>" height="300" width="350" />
            </div>
            <!-- <p><a href="#" class="link-with-icon">Explore More <i class=" icon-chevron-right"></i></a></p> -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service probootstrap-animate">
          <!-- <div class="icon">
          <img src="https://img.icons8.com/color/80/000000/meeting-room.png" class="svg" alt="Landscape Ventures">
        </div> -->
        <div class="text">
          <div class="centerTitle">Corporate Events</div>
          <div class="textWithBlurredBg">
            <h3>Corporate Events</h3>
            <p>Corporate events are a cornerstone of doing business and generating results. But where you choose to hold your meeting can make or break your meeting.</p>
            <img class="imgblur" src="<?=ImageCompression($baseURI.'assets/images/events/Corporate-Event3.jpg');?>" height="300" width="350" />
          </div>
          <br />
          <!-- <p><a href="#" class="link-with-icon">Explore More <i class=" icon-chevron-right"></i></a></p> -->
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service probootstrap-animate">
        <div class="text">
          <div class="centerTitle">Product Launches</div>
          <div class="textWithBlurredBg">
            <h3>Product Launches</h3>
            <p>First impressions are enduring. If you are launching any products, you will only get one chance to build a spontaneously powerful connection with your target audience.</p>
            <img class="imgblur" src="<?=ImageCompression($baseURI.'assets/images/events/Product-Launch-Event-.jpg');?>" height="300" width="350" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service probootstrap-animate">
        <div class="text">
          <div class="centerTitle">Conferences & Webinars</div>
          <div class="textWithBlurredBg">
            <h3>Conferences & Webinars</h3>
            <p>Successful conferences, forums and webinars need ultra-efficient organisation, perfect administration and study to detail. So the best facility is always preferred.</p>
            <img class="imgblur" src="<?=ImageCompression($baseURI.'assets/images/events/conference-.png');?>" height="300" width="350" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service probootstrap-animate">
        <div class="text">
          <div class="centerTitle">Government Events</div>
          <div class="textWithBlurredBg">
            <h3>Government Events</h3>
            <p>Landscape Venturess has built an outstanding reputation for successfully planning and achieving complex, large-scale, multi-stakeholder Government conferences and business events.</p>
            <img class="imgblur" src="<?=ImageCompression($baseURI.'assets/images/events/govevents.jpg');?>" height="300" width="350" />
          </div>
          <br />
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<!-- Service Section -->
<section class="probootstrap-section">
  <div class="container">
    <div class="row mb30">
      <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center probootstrap-animate">
        <h2>Explore our Services</h2>
        <p class="lead">Your desire is our passion, and our passion is our work. We as a established venture and with lots of experience ready to create the best memorable event of your life.</p>
        <p><img src="assets/images/curve.svg" class="svg" alt="Landscape Ventures"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="service ls-serv probootstrap-animate">
          <div class="text">
            <div class="centerTitle">Venue</div>
            <div class="textWithBlurredBg">
              <h3>Venue</h3>
              <img src="<?=ImageCompression($baseURI.'assets/images/Landscape-Intro.jpeg');?>" height="300" width="350" />
              <p>As the preferred space for high profile weddings, social fetes, conventions and corporate celebrations, this one-of-a-kind event venue has played on several occasions.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service ls-serv probootstrap-animate">
          <div class="text">
            <div class="centerTitle">Video & Photo</div>
            <div class="textWithBlurredBg">
              <h3>Video & Photo</h3>
              <img src="<?=ImageCompression($baseURI.'assets/images/services/photography2.jpg');?>" height="300" width="350" />
              <p>Specializing in creating Video & Photo masterpieces. We really listen to our client's needs and work with you the entire step of the way to ensure the best output.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service ls-serv probootstrap-animate">
          <div class="text">
            <div class="centerTitle">Make-up & Mehendi</div>
            <div class="textWithBlurredBg">
              <h3>Make-up & Mehendi</h3>
              <img src="<?=ImageCompression($baseURI.'assets/images/services/mehendi1.jpg');?>" height="300" width="350" />
              <p>We understand each wedding is different and accordingly plan the bride’s overall appearance. Look like a star at your wedding with the exclusive make-up and mehndi.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service ls-serv probootstrap-animate">
          <div class="text">
            <div class="centerTitle">DJ & Band</div>
            <div class="textWithBlurredBg">
              <h3>DJ & Band</h3>
              <img src="<?=ImageCompression($baseURI.'assets/images/services/DJ.jpg');?>" height="300" width="350" />
              <p>We offer premium and professional wedding DJ services. No matter what your music style is, we'll find the right DJ & Band to stay in sync with your favourite tunes.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service ls-serv probootstrap-animate">
          <div class="text">
            <div class="centerTitle">Decoration</div>
            <div class="textWithBlurredBg">
              <h3>Decoration</h3>
              <img src="<?=ImageCompression($baseURI.'assets/images/services/decoration2.jpg');?>" height="300" width="350" />
              <p>Life is all about the little fleeting moments. With our decoration services, you can create some everlasting memories that you and your loved ones will remember forever.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service ls-serv probootstrap-animate">
          <div class="text">
            <div class="centerTitle">Catering</div>
            <div class="textWithBlurredBg">
              <h3>Catering</h3>
              <img src="<?=ImageCompression($baseURI.'assets/images/services/catering2.jpg');?>" height="300" width="350" />
              <p>With dedicated and handpicked culinary staff, we offer high-quality catering services in Bhubaneswar. We strive to provide authentic food to make the special blend.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Facts Section -->
<div class="container-fluid text-center">
  <h1>Some facts about Landscape</h1>
  <div class="row">
    <div class="col-sm-3">
      <i class="fa fa-user"></i>
      <h2 data-max="50000">+ Happy Customers</h2>
    </div>
    <div class="col-sm-3">
      <i class="fa fa-code"></i>
      <h2 data-max="25000">+ Events Organized</h2>
    </div>
    <div class="col-sm-3">
      <i class="fa fa-lock"></i>
      <h2 data-max="10">+ Venues</h2>
    </div>
    <div class="col-sm-3">
      <i class="fa fa-briefcase"></i>
      <h2 data-max="3500" id="test">+ Facebook Page Likes</h2>
    </div>
  </div>
</div>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 probootstrap-relative">
        <h3 class="mt0 mb30">Our Recent Portfolio</h3>
        <ul class="probootstrap-owl-navigation absolute right">
          <li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
          <li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 probootstrap-relative">
        <div class="owl-carousel owl-carousel-carousel">
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <p>Starting from <strong>₹2900.00/Night</strong></p>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="probootstrap-room">
              <a href="assets/images/Landscape-Office.jpeg"><img src="assets/images/Landscape-Office.jpeg" alt="Landscape Ventures" class="img-responsive image-popup"></a>
              <div class="text">
                <h3>Classic Venue</h3>
                <div class="post-meta">
                  <ul>
                    <li><span class="review-rate">4.7</span> <i class="icon-star"></i> 252 Reviews</li>
                    <li><i class="icon-user2"></i> 100 Guests</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class="probootstrap-half">
  <div class="image" style="background-image: url(<?=ImageCompression($baseURI.'https://www.weddingdoers.com/wiki/assets/admin/imgs/upload/article/Pleasant_Tips_for_Selecting_a_Marriage_Venue.jpg');?>);"></div>
  <div class="text">
    <div class="probootstrap-animate fadeInUp probootstrap-animated">
      <h2 class="mt0">Landscape Banquet Hall : Best Venue Provider</h2>
      <p><img src="assets/images/curve_white.svg" class="seperator" alt="Landscape Ventures"></p>
      <div class="row">
        <div class="col-md-6">
          <p>As a bespoke event management company, based in Bhubaneswar, offering inspiration, corporate conferencing and venue management services, Landscape Venturess have the quality and qualified team to guarantee your event’s success. Our Event Managers expert in corporate event designing and planning, creative event production, stage management and audio-visual management for webinars.</p>
        </div>
        <div class="col-md-6">
          <p>Landscape Banquet Hall is a part of Landscape Ventures. Landscape Ventures the most active Entrainment Management Company in India, we are definitely the most Trendsetters in the Event Industry. Some of the most magnificent, breath-taking and unique event venues in Bhubaneswar. Whether you are looking to host a conference, marriage reception and party hall especially ac banquets we’ve got the venue for you.</p>
        </div>
      </div>
      <p><a href="#" class="link-with-icon white">Explore More <i class=" icon-chevron-right"></i></a></p>
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

<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Quick Booking Form</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/action_page.php">
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
              </div>
            </div>
            <div class="col-md-12 col-12">
              <center>
                <button type="submit" class="btn btn-rounded btn-info btn-md">Book now</button>
              </center>
            </div>
          </div>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
