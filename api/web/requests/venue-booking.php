<?php

//require Global Meta Section
require '../../../assets/config/global.config.php';

//Setting Header Type for JSON Output
header('Content-Type:application/json');

//Global Declarations
$fullname = $_POST['fname'].' '.$_POST['lname'];
$email = $_POST['email'];
$bookingdate = $_POST['booking-date'];
$phone = "91".$_POST['phone'];
$guests = $_POST['guest-count'];


//Call phpMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require phpMailer Class
include '../../../assets/library/phpMailer/PHPMailer.php';
include '../../../assets/library/phpMailer/Exception.php';
include '../../../assets/library/phpMailer/SMTP.php';



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//Server settings
$mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
$mail->isSMTP();                                            // Send using SMTP
$mail->Host       = 'mail.mirrordesign.tech';                    // Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
$mail->Username   = 'test@mirrordesign.tech';                     // SMTP username
$mail->Password   = 'Test#1234';                               // SMTP password
$mail->Port       = 587;                                    // TCP port to connect to
//$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
if(!empty($_POST)){

  //Recipients
  $mail->setFrom('test@mirrordesign.tech', 'MIRRORDESIGN TECHSOLUTIONS');
  $mail->addAddress($email, $fullname);           // Add a recipient
  $mail->addAddress('test@mirrordesign.tech');   // Name is optional
  $mail->addReplyTo('test@mirrordesign.tech', 'MIRRORDESIGN TECHSOLUTIONS');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  // Attachments
  // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Booking Enquiry for Landscape Mandap';
  $mail->Body    = 'Please note the Details below <br /> Name : "'.$fullname.'" <br /> E-Mail : "'.$email.'" <br /> Phone : "'.$phone.'" <br /> Booking Date : "'.$bookingdate.'" <br /> Number of Guests : "'.$guests.'"';
  $mail->AltBody = 'We will get in touch with you at the earliest.';

  //send the message, check for errors
  if (!$mail->send()) {

    $resp = array('message' => "Unable to send enquiry", 'resp' => "error");

  }else{

    $pushBookingData = $conn -> query("INSERT INTO `booking_enquiry_details`(`booking_enquiry_details_customer_full_name`, `booking_enquiry_details_customer_email`, `booking_enquiry_details_customer_phone`, `booking_enquiry_details_customer_booking_date`, `booking_enquiry_details_customer_guest_count`, `booking_enquiry_details_is_confirmed`, `booking_enquiry_details_added_on`, `booking_enquiry_details_updated_on`, `booking_enquiry_details_status`) VALUES ('$fullname','$email',$phone,'$bookingdate',$guests,0,'$now','$now',1)");
    if($pushBookingData)
    $resp = array('message' => "Customer Venue Booking Enquiry Sent", 'resp' => "success");
    else
    $resp = array('message' => "Unable to send enquiry", 'resp' => "failed");
  }

}else{

  $resp = array('message' => "Unable to process", 'resp' => "empty");

}

//Send JSON Response Back to AJAX
echo json_encode($resp,JSON_PRETTY_PRINT);

//Close the MySQLi Connection Bridge
$conn -> close();
