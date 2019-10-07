-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2019 at 02:07 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landscape_mandap_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_enquiry_details`
--

CREATE TABLE `booking_enquiry_details` (
  `booking_enquiry_details_id` int(200) NOT NULL,
  `booking_enquiry_details_customer_full_name` varchar(200) NOT NULL,
  `booking_enquiry_details_customer_email` varchar(200) NOT NULL,
  `booking_enquiry_details_customer_phone` bigint(12) NOT NULL,
  `booking_enquiry_details_customer_booking_date` varchar(50) NOT NULL,
  `booking_enquiry_details_customer_guest_count` float NOT NULL,
  `booking_enquiry_details_is_confirmed` tinyint(1) NOT NULL,
  `booking_enquiry_details_added_on` varchar(50) NOT NULL,
  `booking_enquiry_details_updated_on` varchar(50) NOT NULL,
  `booking_enquiry_details_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_enquiry_details`
--
ALTER TABLE `booking_enquiry_details`
  ADD PRIMARY KEY (`booking_enquiry_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_enquiry_details`
--
ALTER TABLE `booking_enquiry_details`
  MODIFY `booking_enquiry_details_id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
