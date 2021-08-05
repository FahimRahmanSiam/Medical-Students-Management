-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 03:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(255) NOT NULL,
  `user_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `user_name`, `password`, `contact`, `address`, `birth_date`, `blood_group`, `gender`, `professional_info`, `profile_image`, `availability`, `email`) VALUES
(1, 'test', '123456', '121313', 'test, dhaka', '22/10/1995', 'test', 'male', 'test', 'thump_1542375555.jpg', 'Sat,Sun,Mon  12.00pm-3.00pm', 'admin@gmail.com'),
(7, 'aasa', '12345', '01478555986', 'adadada', '21/88/1982', 'aa', 'female', 'adada', NULL, NULL, 'devilboy25@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_notice`
--

CREATE TABLE `doctor_notice` (
  `id` int(255) NOT NULL,
  `doctor_email` varchar(222) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_notice`
--

INSERT INTO `doctor_notice` (`id`, `doctor_email`, `notice`, `date`) VALUES
(1, 'admin@gmail.com', 'test notice', 'Thu, 08 Nov 18 17:21:12 +'),
(9, 'admin@gmail.com', 'adad', 'Fri, 16 Nov 18 15:01:32 +');

-- --------------------------------------------------------

--
-- Table structure for table `notice_student`
--

CREATE TABLE `notice_student` (
  `id` int(255) NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_student`
--

INSERT INTO `notice_student` (`id`, `student_id`, `notice`, `date`) VALUES
(1, '121313', 'adaad', '');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(255) NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doctor_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `student_id`, `doctor_email`, `file_location`, `date`, `doc_name`) VALUES
(19, '121313', 'admin@gmail.com', '/medical/report/prescription1541954619.pdf', '10/11/2018', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eyesight` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hearing` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `response` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xray_report` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `student_id`, `father_name`, `mother_name`, `email`, `birth_date`, `gender`, `password`, `weight`, `eyesight`, `hearing`, `response`, `height`, `blood_group`, `bp`, `xray_report`, `profile_pic`, `hall`) VALUES
(1, 'test', '121313', 'test', 'test', 'admin@gmail.com', '22/10/1995', 'male', 'admin', 'abg', 'asd', '3', '4', '5', 'test', '12', '345', 'thump_1542370814.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_notice`
--
ALTER TABLE `doctor_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_student`
--
ALTER TABLE `notice_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor_notice`
--
ALTER TABLE `doctor_notice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notice_student`
--
ALTER TABLE `notice_student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
