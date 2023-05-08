-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 02:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbit3n_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_barangay_clearance`
--

CREATE TABLE `request_barangay_clearance` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  'brgy' varchar(55) NOT NULL,
  'city' varchar(55) NOT NULL,
  'sched' varchar(55) NOT NULL,
  'time' varchar(55) NOT NULL,
  'slot' varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  'status' varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_barangay_clearance`
--

INSERT INTO `request_barangay_clearance` (`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`) VALUES
(1, 'JANE', 'DAW', 'MAIN', 'JR', 'NOVEMBER 11,2030', 'JUPITER', 'SINGLE', 'NON-BINARY', 'EUROPEAN', 'NO', 'WARSHIP', '09090909091', 'JANEDAW@GMAIL.COM', '60', 'De Leon st.', 'YESYES');

-- --------------------------------------------------------

--
-- Table structure for table `request_cedula`
--

CREATE TABLE `request_cedula` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  'brgy' varchar(55) NOT NULL,
  'city' varchar(55) NOT NULL,
  'sched' varchar(55) NOT NULL,
  'time' varchar(55) NOT NULL,
  'slot' varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  'status' varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_cedula`
--

INSERT INTO `request_cedula` (`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`) VALUES
(8, 'Hark', 'Tan', 'Rebolledo', 'no', 'Jan 02 2003', 'QC', 'SINGLE', 'MALE', 'FILIPINO', 'NO', 'STUDENT', '09606324430', 'harktan09@gmail.com', '10', 'Diego St.', 'HELLO BITHES'),
(9, 'joan', 'arc', 'of', 'no', 'Jan 02 2003', 'France', 'Single', 'Female', 'Filipino', 'NO', 'Secret', '09606324430', 'harktan@gmail.com', '90', 'F. Bautista st.', 'yesno');

-- --------------------------------------------------------

--
-- Table structure for table `request_goodmoral`
--


CREATE TABLE `request_goodmoral` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  `brgy` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_id`
--

CREATE TABLE `request_id` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL,
  `blood_type` varchar(55) NOT NULL,
  `tin` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  `brgy` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `em_first_name` varchar(55) NOT NULL,
  `em_last_name` varchar(55) NOT NULL,
  `em_middle_name` varchar(55) NOT NULL,
  `em_suffix_name` varchar(55) NOT NULL,
  `em_contact` varchar(55) NOT NULL,
  `em_relationship` varchar(55) NOT NULL,
  `em_address` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_id`
--

INSERT INTO `request_id` (`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`, `tin`, `blood_type`, `emergency_first_name`, `emergency_last_name`, `emergency_middle_name`, `emergency_contact`, `emergency_suffix_name`, `emergency_relationship`, `emergency_address`) VALUES
(0, 'PETER', 'GREAT', 'THE', 'THE THIRD', 'JANUARY 2003', 'ENGLAND', 'MARRIED', 'MALE', 'BRITISH', 'NO', 'KING OF RUSSIA', '09362199834', 'PETERTHEGREAT@GMAIL.COM', '12', 'Home Centrum Subd.', 'WEW', '1119', 'RARE', 'MARGARETTE', 'FIRST', 'THE', '09606324430', 'SR', 'MOTHER', 'BRITISH ENGLAND');

-- --------------------------------------------------------

--
-- Table structure for table `request_indigency`
--

CREATE TABLE `request_indigency` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  'brgy' varchar(55) NOT NULL,
  'city' varchar(55) NOT NULL,
  'sched' varchar(55) NOT NULL,
  'time' varchar(55) NOT NULL,
  'slot' varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  'status' varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_indigency`
--

INSERT INTO `request_indigency` (`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`) VALUES
(1, 'sdsds', 'sdsds', 'sdsds', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sdsd', 'sddsdsd', 'dsd', '09183466209', 'sdsdsdsdsd@gmail.com', 'sdsd', 'Golden Rd.', 'sdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `request_residency`
--

CREATE TABLE `request_residency` (
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `suffix_name` varchar(55) NOT NULL,
  `birthday` varchar(55) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` varchar(55) NOT NULL,
  `sex` varchar(55) NOT NULL,
  `nationality` varchar(55) NOT NULL,
  `pwd` varchar(55) NOT NULL,
  `occupation` varchar(55) NOT NULL,
  `contact` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `street` varchar(55) NOT NULL,
  'brgy' varchar(55) NOT NULL,
  'city' varchar(55) NOT NULL,
  'sched' varchar(55) NOT NULL,
  'time' varchar(55) NOT NULL,
  'slot' varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  'status' varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(10, 'hark tan', 'harktan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(11, 'user1', 'user1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(12, 'admin1', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(13, 'user2', 'user@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'user'),
(14, 'hark', 'hark@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(15, 'miles', 'miles@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(16, 'marites', 'Marites@Gmail.Com', 'e10adc3949ba59abbe56e057f20f883e', 'user'),
(17, '8', '8@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(18, 'mikel', 'mikel@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin'),
(19, 'matthew', 'matthew@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_barangay_clearance`
--
ALTER TABLE `request_barangay_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_cedula`
--
ALTER TABLE `request_cedula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_goodmoral`
--
ALTER TABLE `request_goodmoral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_indigency`
--
ALTER TABLE `request_indigency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_barangay_clearance`
--
ALTER TABLE `request_barangay_clearance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_cedula`
--
ALTER TABLE `request_cedula`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_goodmoral`
--
ALTER TABLE `request_goodmoral`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_indigency`
--
ALTER TABLE `request_indigency`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
