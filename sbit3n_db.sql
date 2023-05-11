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
  `barangay` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_cedula`
--

INSERT INTO `request_clearance`(`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `sched`, `time`, `slot`, `message`, `status`) 
VALUES (1,'MIKKEL','LAMOK','T','JR','01-01-2001','QC','SINGLE','OTHER','OTHER','YES','STUDENT','0999 999 9999','sample@gmail.com','BLK 1 #187','ADONT STREET','MAPULANG LUPA','VALENZUELA CITY','01-01-2023','MORNING','1','MESSAGE','PENDING...')

-- --------------------------------------------------------

--
-- Table structure for table `request_clearance`
--

CREATE TABLE `request_clearance` (
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
  `barangay` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_clearance`
--

INSERT INTO `request_clearance`(`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `sched`, `time`, `slot`, `message`, `status`) 
VALUES (1,'MIKKEL','LAMOK','T','JR','01-01-2001','QC','SINGLE','OTHER','OTHER','YES','STUDENT','0999 999 9999','sample@gmail.com','BLK 1 #187','ADONT STREET','MAPULANG LUPA','VALENZUELA CITY','01-01-2023','MORNING','1','MESSAGE','PENDING...')

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
  `barangay` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_goodmoral`
--

INSERT INTO `request_goodmoral`(`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `sched`, `time`, `slot`, `message`, `status`) 
VALUES (1,'MIKKEL','LAMOK','T','JR','01-01-2001','QC','SINGLE','OTHER','OTHER','YES','STUDENT','09123456789','sample@gmail.com','BLK 1 #187','ADONT STREET','MAPULANG LUPA','VALENZUELA CITY','01-01-2023','MORNING','1','MESSAGE','PENDING...')

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
  `barangay` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `em-first_name` varchar(55) NOT NULL,
  `em-last_name` varchar(55) NOT NULL,
  `em-middle_name` varchar(55) NOT NULL,
  `em-suffix_name` varchar(55) NOT NULL,
  `em-contact` varchar(55) NOT NULL,
  `em-relationship` varchar(55) NOT NULL,
  `em-address` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_id`
--

INSERT INTO `request_id`(`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `blood_type`, `tin`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `em-first_name`, `em-last_name`, `em-middle_name`, `em-suffix_name`, `em-contact`, `em-relationship`, `em-address`, `sched`, `time`, `slot`, `message`, `status`) 
VALUES (1,'MIKKEL','LAMOK','T','JR','01-01-2001','QC','SINGLE','OTHER','OTHER','YES','A','000-000-000-0000','STUDENT','09123456789','sample@gmail.com','BLK 1 #187','ADONT STREET','MAPULANG LUPA','VALENZUELA CITY','MIKKEL','TATAY','T','JR','09123456789','FATHER','BLK 2 #187 ADONT STREET MAPULANG LUPA VALENZUELA CITY','01-01-2023','MORNING','1','MESSAGE','PENDING...')

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
  `barangay` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_indigency`
--

INSERT INTO `request_indigency`(`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `sched`, `time`, `slot`, `message`, `status`) 
VALUES (1,'MIKKEL','LAMOK','T','JR','01-01-2001','QC','SINGLE','OTHER','OTHER','YES','STUDENT','0999 999 9999','sample@gmail.com','BLK 1 #187','ADONT STREET','MAPULANG LUPA','VALENZUELA CITY','01-01-2023','MORNING','1','MESSAGE','PENDING...')

-- --------------------------------------------------------

--
-- Table structure for table `request_recidency`
--

CREATE TABLE `request_recidency` (
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
  `barangay` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `sched` varchar(55) NOT NULL,
  `time` varchar(55) NOT NULL,
  `slot` varchar(55) NOT NULL,
  `message` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_residency`
--

INSERT INTO `request_recidency`(`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `barangay`, `city`, `sched`, `time`, `slot`, `message`, `status`) 
VALUES (1,'MIKKEL','LAMOK','T','JR','01-01-2001','QC','SINGLE','OTHER','OTHER','YES','STUDENT','0999 999 9999','sample@gmail.com','BLK 1 #187','ADONT STREET','MAPULANG LUPA','VALENZUELA CITY','01-01-2023','MORNING','1','MESSAGE','PENDING...')

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
(1, 'Admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'User', 'user@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_cedula`
--
ALTER TABLE `request_cedula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_clearance`
--
ALTER TABLE `request_clearance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_goodmoral`
--
ALTER TABLE `request_goodmoral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_id`
--
ALTER TABLE `request_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_indigency`
--
ALTER TABLE `request_indigency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_recidency`
--
ALTER TABLE `request_recidency`
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
-- AUTO_INCREMENT for table `request_barangay_cedula`
--
ALTER TABLE `request_cedula`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_clearance`
--
ALTER TABLE `request_clearance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_goodmoral`
--
ALTER TABLE `request_goodmoral`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_id`
--
ALTER TABLE `request_id`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_indigency`
--
ALTER TABLE `request_indigency`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_recidency`
--
ALTER TABLE `request_recidency`
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
