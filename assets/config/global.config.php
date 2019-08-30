<?php

//**This is global configuration file which contains all the necessary php scripts and headers and required variables**//
//** to be used in different files and will be called back in header file.**//

//Hiding all errors and notices
error_reporting(0);

//Start the session globally if not set
if(!isset($_SESSION)){

//Session start
session_start();

}

//Allow Cross Access from Origin
header("Access-Control-Allow-Origin: *");

//Declaring default Date and Time Zone for Date Time Stamps
date_default_timezone_set('Asia/Kolkata');

//Define Base URL to be used globally
$baseURI = "https://localhost/landscape-mandap-website/";


//**Global Declarations**//

//DT Stamp configuration
$now = date('d/m/Y H:i:s');
$date = explode(" ",$now)[0];
$time =  explode(" ",$now)[1];

//Including the DB file
include 'db.config.php';
