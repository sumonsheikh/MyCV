-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2018 at 06:50 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `emid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `university` varchar(30) NOT NULL,
  `session` year(4) NOT NULL,
  `result` varchar(10) NOT NULL,
  `hsc_group` varchar(20) NOT NULL,
  `hsc_passing_year` year(4) NOT NULL,
  `hsc_result` varchar(10) NOT NULL,
  `hsc_session` year(4) NOT NULL,
  `hsc_college` varchar(30) NOT NULL,
  `hsc_board` varchar(10) NOT NULL,
  `ssc_group` varchar(10) NOT NULL,
  `ssc_passing_year` year(4) NOT NULL,
  `ssc_result` varchar(10) NOT NULL,
  `ssc_school` varchar(30) NOT NULL,
  `ssc_board` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`emid`, `name`, `address`, `mobile`, `email`, `subject`, `university`, `session`, `result`, `hsc_group`, `hsc_passing_year`, `hsc_result`, `hsc_session`, `hsc_college`, `hsc_board`, `ssc_group`, `ssc_passing_year`, `ssc_result`, `ssc_school`, `ssc_board`) VALUES
(1, 'sheikh', 'rampura', '01222222', 's@gmail.com', 'bcse', 'city university', 2014, '3.30', 'science', 2011, '3.80', 2009, 'madaripur govt. college', 'dhaka', 'science', 2009, '4.56', 'mithapur L.N. high school', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info1`
--

CREATE TABLE `personal_info1` (
  `emid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hsc_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info1`
--

INSERT INTO `personal_info1` (`emid`, `name`, `address`, `mobile`, `email`, `hsc_group`) VALUES
(1, 'sheikh', 'rampura', '016547888', 's@gmail.com', ''),
(2, 'sheikh', 'rampura', '016666666666', 's@gmail.com', ''),
(5, 'sumon', 'rampura', '01683118117', 'sm.sumon117@gmail.com', 'science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`emid`);

--
-- Indexes for table `personal_info1`
--
ALTER TABLE `personal_info1`
  ADD PRIMARY KEY (`emid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_info1`
--
ALTER TABLE `personal_info1`
  MODIFY `emid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
