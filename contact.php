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
  <title>Contact - Landscape Mandap</title>

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
<section id="mt_general_banner">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="banner-wrapper">
                    <div class="banner-caption wow fadeInUp" data-wow-delay="0.3">
                        <h1>Contact Us</h1>
                        <p>It is a long established fact that a reader will be distracted by the readable content.It is
                            a long established fact that a reader will be distracted by the readable content.</p>
                    </div><!--banner-caption-->
                </div><!--banner-wrapper-->
            </div>
        </div>
    </div>
</section>
<!--=========================*
            End	Banner
*===========================-->

<!--=========================*
           Contact Info
*===========================-->
<section id="mt_contact_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="mt_address">
                    121 King Street, Melbourne Victoria 3000 Australia
                </div>
                <div class="mt_phone"><span>Call Us:</span>+61 3 8376 6284</div>
            </div>
            <div class="col-sm-8">
                <div class="contact_form">
                    <h3>Stay in Touch</h3>
                    <form id="contact_form">
                        <input type="text" name="name" id="name" placeholder="Your name" required>
                        <input type="email" name="email" id="email" placeholder="Your email" required>
                        <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message"
                                  required></textarea>
                        <button class="mt_btn_color" id="submit-btn">SEND MESSAGE<span
                                class="mt_load"><span></span></span></button>
                        <div id="msg"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========================*
         End Contact
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
