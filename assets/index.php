<!-- Global Include -->
<?php
//Initiate Global File Call
require($_SERVER['DOCUMENT_ROOT'].'/landscape-mandap-website/assets/config/global.config.php');
?>
<!-- End Global Include -->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">
<head>

  <!--=========================*
  Meta Section
  *===========================-->
  <!-- Include Meta -->
  <?php
  //Call Meta Section
  include 'assets/templates/template-meta.php';
  ?>
  <!-- End Include Meta -->

  <!--=========================*
  Page Title
  *===========================-->
  <title>Home - Landscape Mandap</title>

  <!--=========================*
  Page Head
  *===========================-->
  <!-- Include Header -->
  <?php
  //Call Header Section
  include 'assets/templates/template-header.php';
  ?>
  <!-- End Include Header -->

  <!--=========================*
  Page Navigation
  *===========================-->
  <!-- Include Navigation -->
  <?php
  //Call Navigation Section
  include 'assets/templates/template-navigation.php';
  ?>
  <!-- End Include Navigation -->

  <!--=========================*
  Banner
  *===========================-->
  <section id="mt_banner" style="background-image: url(http://dulhanmandap.com/wp-content/uploads/2016/03/4-Pearson-Hindu-Wedding-Elephants.jpg)">
    <div class="container">
      <div class="row">
        <div class="banner-wrapper">
          <div class="banner-caption">
            <h1 class="wow fadeInUp" data-wow-delay="0.1">IMAGINE<span>BEAUTIFUL!</span></h1>
            <p>We bring the awesomeness.</p>
            <a href="#mt_portfolio" class="mt_btn_color banner_down"><i class="ion-ios-arrow-thin-down"></i></a>
          </div><!--banner-caption-->
        </div><!--banner-wrapper-->
      </div>
    </div>
  </section>
  <!--=========================*
  End	Banner
  *===========================-->

  <section id="mt_banner_slider" style="background: url(https://via.placeholder.com/1600x1080); background-size: cover; background-attachment: fixed; background-repeat: no-repeat; margin-top: 50px;">
    <div class="swiper-container swiper-container-horizontal" style="cursor: grab;">
      <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-2880px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 1440px; height: 100%; transition: all 0ms ease 0s;">
        <div class="slide-inner" style="background-image: url(&quot;assets/images/slider/bg4.jpg&quot;); transform: translate3d(1440px, 0px, 0px); transition: all 0ms ease 0s;"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner_caption_text">
                <h2 style="color: #fff;">Fashion Design</h2>
                <a href="#">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0" style="width: 1440px; transition: all 0ms ease 0s;">
        <div class="slide-inner" style="background-image: url(&quot;assets/images/slider/bg2.jpg&quot;); transform: translate3d(720px, 0px, 0px); transition: all 0ms ease 0s;"></div>
        <!-- <div class="overlay"></div> -->
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner_caption_text">
                <h2 style="color: #fff;">Creative Design</h2>
                <a href="#">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1440px; transition: all 0ms ease 0s;">
        <div class="slide-inner" style="background-image: url(https://www.thefotowalla.in/img/u22.jpg); transform: translate3d(0px, 0px, 0px); transition: all 0ms ease 0s;"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner_caption_text">
                <h2>Web Design</h2>
                <a href="#">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2" style="width: 1440px; transition: all 0ms ease 0s;">
        <div class="slide-inner" style="background-image: url(https://www.thefotowalla.in/images/project72.jpg); transform: translate3d(-720px, 0px, 0px); transition: all 0ms ease 0s;"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner_caption_text">
                <h2 style="color: #fff;">3d Art Design</h2>
                <a href="#">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide" data-swiper-slide-index="3" style="width: 1440px; transition: all 0ms ease 0s;">
        <div class="slide-inner" style="background-image: url(https://www.thefotowalla.in/images/project7.jpg); transform: translate3d(-1440px, 0px, 0px); transition: all 0ms ease 0s;"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner_caption_text">
                <h2 style="color: #fff;">Fashion Design</h2>
                <a href="#">View Project</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 1440px; transition: all 0ms ease 0s;">
      <div class="slide-inner" style="background-image: url(https://www.thefotowalla.in/images/b13.jpg); transform: translate3d(-2160px, 0px, 0px); transition: all 0ms ease 0s;"></div>
      <div class="container">
      <div class="row">
      <div class="col-md-12">
      <div class="banner_caption_text">
      <h2 style="color: #fff;">Creative Design</h2>
      <a href="#">View Project</a>
    </div>
  </div>
</div>
</div>
</div> -->
</div>
<div class="swiper-button-next swiper-button-white"></div>
<div class="swiper-button-prev swiper-button-white"></div>
</div>
</section>

<!--=========================*
Portfolio
*===========================-->

<section id="mt_portfolio" class="gallery-section gallery-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="mt_filter">
          <ul class="list-inline text-center filter">
            <li>
              <a class="active" href="#" data-filter="*">All</a>
            </li>
            <li>
              <a href="#" data-filter=".marketing">Pre-wedding</a>
            </li>
            <li>
              <a href="#" data-filter=".webdesign">Wedding</a>
            </li>
            <li>
              <a href="#" data-filter=".webdevelopment">Candid</a>
            </li>
          </ul>
        </div> <!-- .isotope-filter_links -->
      </div>
    </div>
    <div class="row portfolio_row">
      <div class="isotopeContainer">
        <!-- Portfolio Item -->
        <div class="portfolio_grid no-padding isotopeSelector webdesign grid-item">
          <figure class="portfolio_hover">
            <img src="https://www.vivahphoto.in/wp-content/uploads/2017/12/IMG_4091.jpg" alt="image" class="img-responsive center-block"/>
            <figcaption>
              <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
              <a href="https://www.vivahphoto.in/wp-content/uploads/2017/12/IMG_4091.jpg" class="fancybox open_img"><h5><i
                class="ion-ios-plus-empty"></i></h5></a>
              </figcaption>
            </figure>
          </div>
          <!-- Portfolio Item -->
          <div class="portfolio_grid no-padding isotopeSelector webdevelopment grid-item">
            <figure class="portfolio_hover">
              <img src="https://www.vivahphoto.in/wp-content/uploads/2018/10/IMG_3887-1.jpg" alt="image" class="img-responsive center-block"/>
              <figcaption>
                <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                <a href="https://www.vivahphoto.in/wp-content/uploads/2018/10/IMG_3887-1.jpg" class="fancybox open_img"><h5><i
                  class="ion-ios-plus-empty"></i></h5></a>
                </figcaption>
              </figure>
            </div>
            <!-- Portfolio Item -->
            <div class="portfolio_grid no-padding isotopeSelector webdesign grid-item">
              <figure class="portfolio_hover">
                <img src="https://www.vivahphoto.in/wp-content/uploads/2017/12/IMG_1304-1.jpg" alt="image" class="img-responsive center-block"/>
                <figcaption>
                  <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                  <a href="https://www.vivahphoto.in/wp-content/uploads/2017/12/IMG_1304-1.jpg" class="fancybox open_img"><h5><i
                    class="ion-ios-plus-empty"></i></h5></a>
                  </figcaption>
                </figure>
              </div>
              <!-- Portfolio Item -->
              <div class="portfolio_grid no-padding isotopeSelector marketing grid-item">
                <figure class="portfolio_hover">
                  <img src="https://www.vivahphoto.in/wp-content/uploads/2018/10/guddy.jpg" alt="image" class="img-responsive center-block"/>
                  <figcaption>
                    <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                    <a href="https://www.vivahphoto.in/wp-content/uploads/2018/10/guddy.jpg" class="fancybox open_img"><h5><i
                      class="ion-ios-plus-empty"></i></h5></a>
                    </figcaption>
                  </figure>
                </div>
                <!-- Portfolio Item -->
                <div class="portfolio_grid no-padding isotopeSelector webdesign grid-item">
                  <figure class="portfolio_hover">
                    <img src="https://www.vivahphoto.in/wp-content/uploads/2019/01/IMG_1184.jpg" alt="image" class="img-responsive center-block"/>
                    <figcaption>
                      <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                      <a href="https://www.vivahphoto.in/wp-content/uploads/2019/01/IMG_1184.jpg" class="fancybox open_img"><h5><i
                        class="ion-ios-plus-empty"></i></h5></a>
                      </figcaption>
                    </figure>
                  </div>
                  <!-- Portfolio Item -->
                  <div class="portfolio_grid no-padding isotopeSelector webdesign grid-item">
                    <figure class="portfolio_hover">
                      <img src="https://www.vivahphoto.in/wp-content/uploads/2018/10/G7A7647.jpg" alt="image" class="img-responsive center-block"/>
                      <figcaption>
                        <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                        <a href="https://www.vivahphoto.in/wp-content/uploads/2018/10/G7A7647.jpg" class="fancybox open_img"><h5><i
                          class="ion-ios-plus-empty"></i></h5></a>
                        </figcaption>
                      </figure>
                    </div>
                    <!-- Portfolio Item -->
                    <div class="portfolio_grid no-padding isotopeSelector webdevelopment grid-item">
                      <figure class="portfolio_hover">
                        <img src="https://www.vivahphoto.in/wp-content/uploads/2018/10/IMG_2607.jpg" alt="image" class="img-responsive center-block"/>
                        <figcaption>
                          <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                          <a href="https://www.vivahphoto.in/wp-content/uploads/2018/10/IMG_2607.jpg" class="fancybox open_img"><h5><i
                            class="ion-ios-plus-empty"></i></h5></a>
                          </figcaption>
                        </figure>
                      </div>
                      <!-- Portfolio Item -->
                      <div class="portfolio_grid no-padding isotopeSelector webdevelopment grid-item">
                        <figure class="portfolio_hover">
                          <img src="https://www.vivahphoto.in/wp-content/uploads/2018/10/IMG_3060.jpg" alt="image" class="img-responsive center-block"/>
                          <figcaption>
                            <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                            <a href="https://www.vivahphoto.in/wp-content/uploads/2018/10/IMG_3060.jpg" class="fancybox open_img"><h5><i
                              class="ion-ios-plus-empty"></i></h5></a>
                            </figcaption>
                          </figure>
                        </div>
                        <!-- Portfolio Item -->
                        <div class="portfolio_grid no-padding isotopeSelector marketing grid-item">
                          <figure class="portfolio_hover">
                            <img src="https://www.vivahphoto.in/wp-content/uploads/2018/10/G7A4255.jpg" alt="image" class="img-responsive center-block"/>
                            <figcaption>
                              <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                              <a href="https://www.vivahphoto.in/wp-content/uploads/2018/10/G7A4255.jpg" class="fancybox open_img"><h5><i
                                class="ion-ios-plus-empty"></i></h5></a>
                              </figcaption>
                            </figure>
                          </div>
                          <!-- Portfolio Item -->
                          <div class="portfolio_grid no-padding isotopeSelector marketing grid-item">
                            <figure class="portfolio_hover">
                              <img src="https://www.vivahphoto.in/wp-content/uploads/2019/01/IMG_9342.jpg" alt="image" class="img-responsive center-block"/>
                              <figcaption>
                                <a href="#" class="detail_portfolio"><h3>Portfolio Item</h3></a>
                                <a href="https://www.vivahphoto.in/wp-content/uploads/2019/01/IMG_9342.jpg" class="fancybox open_img"><h5><i
                                  class="ion-ios-plus-empty"></i></h5></a>
                                </figcaption>
                              </figure>
                            </div>

                          </div>
                        </div>
                      </div>
                    </section>
                    <div class="clearfix"></div>

                    <!--=========================*
                    End Portfolio
                    *===========================-->

                    <!--=========================*
                    Services
                    *===========================-->
                    <section id="mt_services" class="light-bg">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-12">
                            <h3>We offer Best Services</h3>
                          </div>
                          <div class="clearfix"></div>
                          <!-- Service 1 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="box text-center">
                              <div class="icon">
                                <i class="icon-wine"></i>
                              </div>
                              <h3>Venue</h3>
                              <p>As the preferred space for high profile weddings, social fetes, conventions and corporate celebrations, this one-of-a-kind event venue has played on several occasions.</p>
                              <a href="#" class="mt_btn_color">View Service</a>
                            </div>
                          </div>
                          <!-- Service 2 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="box text-center">
                              <div class="icon">
                                <i class="icon-megaphone"></i>
                              </div>
                              <h3>DJ & Band</h3>
                              <p>We offer premium and professional wedding DJ services. No matter what your music style is, we'll find the right DJ & Band to stay in sync with your favourite tunes.</p>
                              <a href="#" class="mt_btn_color">View Service</a>
                            </div>
                          </div>
                          <!-- Service 3 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="box text-center">
                              <div class="icon">
                                <i class="icon-ribbon"></i>
                              </div>
                              <h3>Decorator</h3>
                              <p>Life is all about the little fleeting moments. With our decoration services, you can create some everlasting memories that you and your loved ones will remember forever.</p>
                              <a href="#" class="mt_btn_color">View Service</a>
                            </div>
                          </div>
                          <!-- Service 4 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="box text-center">
                              <div class="icon">
                                <i class="icon-hourglass"></i>
                              </div>
                              <h3>Catering</h3>
                              <p>With dedicated and handpicked culinary staff, we offer high-quality catering services in Bhubaneswar. We strive to provide authentic food to make the special blend.</p>
                              <a href="#" class="mt_btn_color">View Service</a>
                            </div>
                          </div>
                          <!-- Service 5 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="box text-center">
                              <div class="icon">
                                <i class="icon-profile-female"></i>
                              </div>
                              <h3>Makeup & Mehndi</h3>
                              <p>We understand each wedding is different and accordingly plan the bride’s overall appearance. Look like a star at your wedding with the exclusive make-up and mehndi.</p>
                              <a href="#" class="mt_btn_color">View Service</a>
                            </div>
                          </div>
                          <!-- Service 6 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="box text-center">
                              <div class="icon">
                                <i class="icon-aperture"></i>
                              </div>
                              <h3>Video & Photo</h3>
                              <p>Specializing in creating Video & Photo masterpieces. We really listen to our client's needs and work with you the entire step of the way to ensure the best output.</p>
                              <a href="#" class="mt_btn_color">View Service</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!--=========================*
                    End Services
                    *===========================-->

                    <!--=========================*
                    Team
                    *===========================-->
                    <section id="mt_team">
                      <div class="container">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="mt_about_me">
                              <h3>Meet Our Team</h3>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="owl-carousel">
                            <!--Team Member-->
                            <div class="item">
                              <div class="col-md-12">
                                <div class="team_member">
                                  <img src="assets/images/team/member1.jpg" alt="Team Member">
                                  <div class="member_name">
                                    <h3>JHON DOE</h3>
                                    <span>CEO/Founder</span>
                                  </div>
                                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!--Team Member-->
                            <div class="item">
                              <div class="col-md-12">
                                <div class="team_member">
                                  <img src="assets/images/team/member2.jpg" alt="Team Member">
                                  <div class="member_name">
                                    <h3>Monica</h3>
                                    <span>Creative Lead</span>
                                  </div>
                                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!--Team Member-->
                            <div class="item">
                              <div class="col-md-12">
                                <div class="team_member">
                                  <img src="assets/images/team/member3.jpg" alt="Team Member">
                                  <div class="member_name">
                                    <h3>David Walsh</h3>
                                    <span>UI/UX Designer</span>
                                  </div>
                                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!--Team Member-->
                            <div class="item">
                              <div class="col-md-12">
                                <div class="team_member">
                                  <img src="assets/images/team/member4.jpg" alt="Team Member">
                                  <div class="member_name">
                                    <h3>Jason Roy</h3>
                                    <span>Graphic Designer</span>
                                  </div>
                                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!--Team Member-->
                            <div class="item">
                              <div class="col-md-12">
                                <div class="team_member">
                                  <img src="assets/images/team/member5.jpg" alt="Team Member">
                                  <div class="member_name">
                                    <h3>Jessica Stone</h3>
                                    <span>Ios Developer</span>
                                  </div>
                                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <!--Team Member-->
                            <div class="item">
                              <div class="col-md-12">
                                <div class="team_member">
                                  <img src="assets/images/team/member6.jpg" alt="Team Member">
                                  <div class="member_name">
                                    <h3>Rebecca</h3>
                                    <span>Marketing Lead</span>
                                  </div>
                                  <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                  <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </section>
                    <!--=========================*
                    End Team
                    *===========================-->

                    <!--=========================*
                    Testimonial
                    *===========================-->
                    <section id="mt_testimonial">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <h3>What our Client Says</h3>
                            <div class="owl-carousel">
                              <!-- Slide 1 -->
                              <div class="item">
                                <div class="testimonial_main">
                                  <div class="col-xs-12">
                                    <p>lIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                    <em>Alex Hale</em>
                                    <span>CEO of Revo</span>
                                  </div>
                                </div>
                              </div>
                              <!-- Slide 2 -->
                              <div class="item">
                                <div class="testimonial_main">
                                  <div class="col-xs-12">
                                    <p>lIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                    <em>Alex Hale</em>
                                    <span>CEO of Revo</span>
                                  </div>
                                </div>
                              </div>
                              <!-- Slide 3 -->
                              <div class="item">
                                <div class="testimonial_main">
                                  <div class="col-xs-12">
                                    <p>lIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                    <em>Alex Hale</em>
                                    <span>CEO of Revo</span>
                                  </div>
                                </div>
                              </div>
                              <!-- Slide 4 -->
                              <div class="item">
                                <div class="testimonial_main">
                                  <div class="col-xs-12">
                                    <p>lIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                    <em>Alex Hale</em>
                                    <span>CEO of Revo</span>
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </section>
                    <!--=========================*
                    End	Testimonial
                    *===========================-->

                    <!--=========================*
                    Page Footer
                    *===========================-->
                    <!-- Include Footer -->
                    <?php
                    //Call Footer Section
                    include 'assets/templates/template-footer.php';
                    ?>
                    <!-- End Include Footer -->

                  </body>
                  </html>

                  <!--=========================*
                  Page Scripts
                  *===========================-->
                  <!-- Include Scripts -->
                  <?php
                  //Call Scripts Section
                  include 'assets/templates/template-scripts.php';
                  ?>
                  <!-- End Include Scripts -->
