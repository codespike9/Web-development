-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 05:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `user_name`, `password`, `status`) VALUES
(2001, 'dharmarajjena694@gmail.com', 'Dharmaraj', 'Active'),
(2002, 'Dj', 'Dj123', 'Active'),
(2003, 'Nature_club', 'Nature_club123', 'Active'),
(2004, 'Dj1', 'Dj1234', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE `category_master` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category_master`
--

INSERT INTO `category_master` (`category_id`, `category_name`) VALUES
(1, 'General'),
(2, 'OBC'),
(7, 'scbc');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `facility_id` int(11) NOT NULL,
  `facility_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`facility_id`, `facility_name`) VALUES
(5, 'Gym'),
(9, 'Sports club'),
(10, 'hostel');

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

CREATE TABLE `students_details` (
  `Student_id` int(11) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Father_Name` varchar(100) NOT NULL,
  `Mother_Name` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `E-Mail` varchar(100) NOT NULL,
  `Phone Number` varchar(100) NOT NULL,
  `Present Address` varchar(100) NOT NULL,
  `Permanent Address` varchar(100) NOT NULL,
  `student_photo` varchar(100) NOT NULL,
  `student_birthcertificate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`Student_id`, `First_Name`, `Last_Name`, `Father_Name`, `Mother_Name`, `Gender`, `Date_of_Birth`, `category_id`, `Religion`, `E-Mail`, `Phone Number`, `Present Address`, `Permanent Address`, `student_photo`, `student_birthcertificate`) VALUES
(5, 'Rajat', 'chauhan', 'Paramveer chahuhan', 'kiran chauhan', 'male', '1999-05-13', '1', 'Hindu', 'jskdkdsjdksjkd45@gmail.com', '23232324345', '99/34', '55/99', '1673060357', '1673060357'),
(6, 'Dharmaraj', 'Jena', 'Pramod kumar Jena', 'Janaki Jena', 'male', '2023-01-19', '1', 'Hindu', 'dharmarajjena694@gmail.com', '08847870369', '55/33', 'Jadupur, near sarakantara M.E school', '1673065021', '1673065021');

-- --------------------------------------------------------

--
-- Table structure for table `student_facility`
--

CREATE TABLE `student_facility` (
  `student_facility_id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_facility`
--

INSERT INTO `student_facility` (`student_facility_id`, `facility_id`, `student_id`) VALUES
(9, 2, 1),
(10, 4, 1),
(13, 1, 3),
(14, 2, 3),
(19, 1, 2),
(20, 5, 2),
(23, 1, 4),
(24, 5, 4),
(25, 1, 5),
(29, 5, 6),
(30, 9, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `category_master`
--
ALTER TABLE `category_master`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`facility_id`);

--
-- Indexes for table `students_details`
--
ALTER TABLE `students_details`
  ADD PRIMARY KEY (`Student_id`);

--
-- Indexes for table `student_facility`
--
ALTER TABLE `student_facility`
  ADD PRIMARY KEY (`student_facility_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2005;

--
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students_details`
--
ALTER TABLE `students_details`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_facility`
--
ALTER TABLE `student_facility`
  MODIFY `student_facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
