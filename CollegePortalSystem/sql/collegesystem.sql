-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 04:37 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `grade` varchar(10) DEFAULT NULL,
  `courseType` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `image`, `fullname`, `dob`, `gender`, `address`, `grade`, `courseType`, `password`) VALUES
(7, 'Screenshot_1.jpg', 'Jagaran', '2059-04-29', 'male', 'manamaiju', '13', 'java', '123456789'),
(8, 'aasda.jpg', 'bibek', '2057-04-29', 'male', 'manamaiju', '14', 'java', '123456789'),
(10, 'asd.jpg', 'subarna', '2050-04-29', 'male', 'manamaiju', '14', 'java', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(11) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `dob` varchar(10) DEFAULT NULL,
  `gender` varchar(6) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `subject` varchar(10) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `image`, `fullname`, `dob`, `gender`, `address`, `subject`, `department`, `password`) VALUES
(1, 'amir.jpg', 'Amir', '2057-04-28', 'male', 'manamaiju', 'ads', 'finance', 'asdasdasd'),
(3, 'DSC_1964.JPG', 'Janak', 'idk', 'male', 'chargharey', 'Pariyatti', 'teacher', '123456789'),
(4, 'asd.jpg', 'subarna', '2057-04-29', 'male', 'manamaiju', 'computer', 'teacher', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
