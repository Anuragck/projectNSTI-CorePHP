-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 25, 2021 at 11:29 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsti_calicut`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`) VALUES
(1, 'Team_Creators', 'admin', 'creators@gmail.com', 'Male', 'Active', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2020-04-19 04:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admit`
--

CREATE TABLE `tbl_admit` (
  `id` int(255) DEFAULT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `aadharNumber` varchar(100) DEFAULT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `10thCertificateNo` varchar(200) DEFAULT NULL,
  `10thMarkPercentage` varchar(100) DEFAULT NULL,
  `12thCertificateNo` varchar(200) DEFAULT NULL,
  `12thMarkPercentage` varchar(100) DEFAULT NULL,
  `admittedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admit`
--

INSERT INTO `tbl_admit` (`id`, `fullname`, `username`, `email`, `gender`, `aadharNumber`, `courseName`, `dob`, `category`, `phoneNumber`, `address`, `10thCertificateNo`, `10thMarkPercentage`, `12thCertificateNo`, `12thMarkPercentage`, `admittedDate`) VALUES
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 14:36:53'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:17:35'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:17:54'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:17:57'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:18:06'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:18:31'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:18:36'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:17'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:23'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:41'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:44'),
(3, 'AKKU', 'akku', 'akku@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:46'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:24:17'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rejected`
--

CREATE TABLE `tbl_rejected` (
  `id` int(255) DEFAULT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `username` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `aadharNumber` varchar(100) DEFAULT NULL,
  `courseName` varchar(100) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(50) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `10thCertificateNo` varchar(200) DEFAULT NULL,
  `10thMarkPercentage` varchar(100) DEFAULT NULL,
  `12thCertificateNo` varchar(200) DEFAULT NULL,
  `12thMarkPercentage` varchar(100) DEFAULT NULL,
  `rejectedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rejected`
--

INSERT INTO `tbl_rejected` (`id`, `fullname`, `username`, `email`, `gender`, `aadharNumber`, `courseName`, `dob`, `category`, `phoneNumber`, `address`, `10thCertificateNo`, `10thMarkPercentage`, `12thCertificateNo`, `12thMarkPercentage`, `rejectedDate`) VALUES
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 14:39:14'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 14:40:47'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:17:44'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:17:50'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:17:58'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:18:01'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:18:07'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:20:19'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:26'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:29'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:22:54'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:23:06'),
(3, 'AKKU', 'akku', 'akku@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:23:09'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:23:12'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:23:15'),
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:23:19'),
(3, 'AKKU', 'akku', 'akku@gmail.com', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-25 16:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_date` datetime NOT NULL,
  `aadharNumber` varchar(20) DEFAULT NULL,
  `courseName` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `phoneNumber` varchar(15) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `10thCertificateNo` varchar(100) DEFAULT NULL,
  `10thMarkPercentage` varchar(20) DEFAULT NULL,
  `12thCertificateNo` varchar(100) DEFAULT NULL,
  `12thMarkPercentage` varchar(20) DEFAULT NULL,
  `CandidatePhoto` varchar(100) DEFAULT NULL,
  `SignaturePhoto` varchar(100) DEFAULT NULL,
  `10thCertificatePhoto` varchar(100) DEFAULT NULL,
  `12thCertificatePhoto` varchar(100) DEFAULT NULL,
  `status1` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`, `aadharNumber`, `courseName`, `dob`, `category`, `phoneNumber`, `address`, `10thCertificateNo`, `10thMarkPercentage`, `12thCertificateNo`, `12thMarkPercentage`, `CandidatePhoto`, `SignaturePhoto`, `10thCertificatePhoto`, `12thCertificatePhoto`, `status1`) VALUES
(1, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-25 14:03:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1'),
(2, 'AJAY kj', 'ajay', 'aaaaa@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-25 16:17:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2'),
(3, 'AKKU', 'akku', 'akku@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-25 16:19:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
