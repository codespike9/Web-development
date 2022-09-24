-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 03:32 PM
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
  `admin_id` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `user_name`, `password`, `status`) VALUES
('2001', 'dharmarajjena694@gmail.com', 'Dharmaraj', 'Active'),
('2002', 'eee.21beeb10@silicon.ac.in', '21beeb10', 'Active');

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
(3, 'Others');

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
(1, 'Hostel'),
(5, 'Gym'),
(6, 'Canteen');

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
(2, 'Dharmaraj', 'Jena', 'Pramod kumar Jena', 'Amber Rubel', 'male', '2022-08-18', '3', 'Hindu', 'dharmarajjena694@gmail.com', '08847870369', '92/868', 'Jadupur, near sarakantara M.E school', '1663254062', '1663254062');

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
(20, 5, 2);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `category_master`
--
ALTER TABLE `category_master`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students_details`
--
ALTER TABLE `students_details`
  MODIFY `Student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_facility`
--
ALTER TABLE `student_facility`
  MODIFY `student_facility_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
