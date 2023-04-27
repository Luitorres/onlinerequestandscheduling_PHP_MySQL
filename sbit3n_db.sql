-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 09:25 AM
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
  `id` int(255) NOT NULL,
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
  `message` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_cedula`
--

INSERT INTO `request_cedula` (`id`, `first_name`, `last_name`, `middle_name`, `suffix_name`, `birthday`, `place_of_birth`, `civil_status`, `sex`, `nationality`, `pwd`, `occupation`, `contact`, `email`, `address`, `street`, `message`) VALUES
(8, 'Hark', 'Tan', 'Rebolledo', 'no', 'Jan 02 2003', 'QC', 'SINGLE', 'MALE', 'FILIPINO', 'NO', 'STUDENT', '09606324430', 'harktan09@gmail.com', '10', 'Diego St.', 'HELLO BITHES');

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
-- Indexes for table `request_cedula`
--
ALTER TABLE `request_cedula`
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
-- AUTO_INCREMENT for table `request_cedula`
--
ALTER TABLE `request_cedula`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;