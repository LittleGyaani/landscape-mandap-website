<?php

//Hiding all errors and notices
error_reporting(0);

//Start the Session
session_start();

/**
 * This file is for establishing connection with Database.
 */

 //Declaring variables and assigning values to it for establishing communication with DB
 $dbHost = "localhost";
 $dbUser = "root";
 $dbPass = "";
 $dbName = "landscape_mandap_DB";

 //Establishing connection to Database using MySQLi
 $conn = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

 if(!$conn)
   echo 'Unable to Establish connection at this moment.'.mysql_erro_no($conn);

//*End of File*//
