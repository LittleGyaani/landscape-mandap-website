<?php

//**This is global configuration file which contains all the necessary php scripts and headers and required variables**//
//** to be used in different files and will be called back in header file.**//

//Hiding all errors and notices
error_reporting(0);

//Enable gzip Compression
ob_start("ob_gzhandler");

//Start the session globally if not set
if(!isset($_SESSION)){

  //Session start
  session_start();

}

//Allow Cross Access from Origin
header("Access-Control-Allow-Origin: *");

//Declaring default Date and Time Zone for Date Time Stamps
date_default_timezone_set('Asia/Kolkata');

//**Global Declarations**//

//Website Base URL
$baseURI = "";

//DT Stamp configuration
$now = date('d/m/Y H:i:s');
$date = explode(" ",$now)[0];
$time =  explode(" ",$now)[1];



//Define Base URL to be used globally
if($_SERVER['HTTP_HOST'] === 'localhost')
//Server address pointed to localhost (local server)
$baseURI = "https://localhost/landscape-mandap-website/";
else
//Server address pointed to website host (production server)
$baseURI = "https://mirrordesign.tech/demo/landscape-new/";

//Including the DB file
include 'db.config.php';

function compressImage($source, $destination, $quality) {

  $url = 'http:://www.sth.com/some_name.format' ;
  $parse_url = parse_url($url) ;
  $path_info = pathinfo($parse_url['path']) ;
  $file_extension = $path_info['extension'] ;
  $save_path = 'any/local/path/' ;
  $file_name = 'name' . "." . $file_extension ;
  file_put_contents($save_path . $file_name , fopen($url, 'r'))

  //Define Compression URL
  $resmushAPIURL = "http://api.resmush.it/ws.php?img=";
  $optimizedImage = json_decode(file_get_contents($resmushAPIURL.$iurl."&qlty=50"));
  echo $optimizedImage->dest; // Get the Optimized URL of Image

  // Getting file name
  $filename = $_FILES['imagefile']['name'];

  // Valid extension
  $valid_ext = array('png','jpeg','jpg');

  // Location
  $location = "images/".$filename;

  // file extension
  $file_extension = pathinfo($location, PATHINFO_EXTENSION);
  $file_extension = strtolower($file_extension);

  // Check extension
  if(in_array($file_extension,$valid_ext)){

    // Compress Image
    compressImage($_FILES['imagefile']['tmp_name'],$location,60);

  }else{
    echo "Invalid file type.";
  }

}
