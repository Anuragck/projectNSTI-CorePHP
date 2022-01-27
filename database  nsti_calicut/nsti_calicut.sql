-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 09:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `id` int(255) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `aadharNumber` varchar(100) NOT NULL,
  `courseName` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `10thCertificateNo` varchar(200) NOT NULL,
  `10thMarkPercentage` varchar(100) NOT NULL,
  `12thCertificateNo` varchar(200) NOT NULL,
  `12thMarkPercentage` varchar(100) NOT NULL,
  `admittedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admit`
--

INSERT INTO `tbl_admit` (`id`, `fullname`, `username`, `email`, `gender`, `aadharNumber`, `courseName`, `dob`, `category`, `phoneNumber`, `address`, `10thCertificateNo`, `10thMarkPercentage`, `12thCertificateNo`, `12thMarkPercentage`, `admittedDate`) VALUES
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 17:09:48'),
(13, 'AJAY kj', 'ajay', 'anuragck2@gmail.com', 'Female', '777777777777', 'ADIT', '2021-02-18', 'General', '7878787878', 'nsti calicut', '12345678', '100', '12345678', '100', '2021-02-22 17:11:32'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:19:48'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:21:10'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:30:30'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:31:01'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:33:56'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:35:23'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:35:36'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:37:43'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:38:43'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:39:17'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:40:18'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:40:43'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:41:50'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:42:11'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:43:18'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:43:47'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:44:07'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:44:45'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:46:55'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:48:11'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:57:08'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:57:35'),
(24, 'testing', 'testing', 'dlarg@gmail.com', 'Male', '', '', '', '', '', '', '', '', '', '', '2021-02-23 00:34:45'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-23 00:37:39'),
(25, 'ajay kj', 'ajayajay', 'bbkj@gmail.com', 'Male', '00000000000', 'ADIT', '2021-02-15', 'General', '0000000000000', 'nsti calicut', '000000000000000', '100', '111111111111111', '100', '2021-02-23 00:39:21'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-23 11:32:17'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-23 11:33:44'),
(23, 'didha', 'lachu', 'anuragck2@gmail.com', 'Female', '0000000000000', 'IOT', '2021-02-10', 'General', '00000000000', 'nsti calicut', '000000000', '100', '0000000000', '100', '2021-02-23 12:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rejected`
--

CREATE TABLE `tbl_rejected` (
  `id` int(255) NOT NULL,
  `fullname` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `aadharNumber` varchar(100) NOT NULL,
  `courseName` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `10thCertificateNo` varchar(200) NOT NULL,
  `10thMarkPercentage` varchar(100) NOT NULL,
  `12thCertificateNo` varchar(200) NOT NULL,
  `12thMarkPercentage` varchar(100) NOT NULL,
  `rejectedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_rejected`
--

INSERT INTO `tbl_rejected` (`id`, `fullname`, `username`, `email`, `gender`, `aadharNumber`, `courseName`, `dob`, `category`, `phoneNumber`, `address`, `10thCertificateNo`, `10thMarkPercentage`, `12thCertificateNo`, `12thMarkPercentage`, `rejectedDate`) VALUES
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:19:43'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:21:02'),
(14, 'akarsh', 'akarsh', 'aaaaa@gmail.com', 'Male', '4444', 'ADIT', '2021-02-25', 'OBC', '00', '00', '00', '00', '00', '00', '2021-02-22 23:21:30'),
(24, 'testing', 'testing', 'dlarg@gmail.com', 'Male', '', '', '', '', '', '', '', '', '', '', '2021-02-22 23:24:05'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:38:48'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:40:38'),
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', '2021-02-22 23:47:02'),
(25, 'ajay kj', 'ajayajay', 'bbkj@gmail.com', 'Male', '00000000000', 'ADIT', '2021-02-15', 'General', '0000000000000', 'nsti calicut', '000000000000000', '100', '111111111111111', '100', '2021-02-23 00:34:53'),
(25, 'ajay kj', 'ajayajay', 'bbkj@gmail.com', 'Male', '00000000000', 'ADIT', '2021-02-15', 'General', '0000000000000', 'nsti calicut', '000000000000000', '100', '111111111111111', '100', '2021-02-23 11:32:25');

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
  `12thCertificatePhoto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fullname`, `username`, `email`, `gender`, `status`, `password`, `created_date`, `aadharNumber`, `courseName`, `dob`, `category`, `phoneNumber`, `address`, `10thCertificateNo`, `10thMarkPercentage`, `12thCertificateNo`, `12thMarkPercentage`, `CandidatePhoto`, `SignaturePhoto`, `10thCertificatePhoto`, `12thCertificatePhoto`) VALUES
(12, 'AJAY kj', 'aj', 'anuragck2@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-10 17:02:25', '000000000000000', 'ADIT', '2021-02-18', 'OBC', '0000000000', 'nmvnbxcbcvbcv', '0', '88', '0', '90', 'Screenshot (16).png', 'Screenshot (10).png', 'Screenshot (10).png', 'Screenshot (10).png'),
(13, 'AJAY kj', 'ajay', 'anuragck2@gmail.com', 'Female', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-10 17:02:45', '777777777777', 'ADIT', '2021-02-18', 'General', '7878787878', 'nsti calicut', '12345678', '100', '12345678', '100', 'aboutme.png', 'aboutme.png', 'aboutme.png', 'aboutme.png'),
(14, 'akarsh', 'akarsh', 'aaaaa@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-11 11:33:03', '4444', 'ADIT', '2021-02-25', 'OBC', '00', '00', '00', '00', '00', '00', 'Screenshot (1).png', 'Screenshot (2).png', 'Screenshot (3).png', ''),
(15, 'anurag', 'anurag', 'anuragck2@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-12 14:48:08', '444', 'ADIT', '2021-02-12', 'General', '44', '44', '44', '44', '44', '44', 'Screenshot (18).png', 'Screenshot (27).png', 'Screenshot (20).png', 'Screenshot (19).png'),
(16, 'abcd', 'abcd', 'anuraglailal@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-14 12:53:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'b', 'nnnn', 'dlarg@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-14 12:54:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'angel', 'anuragck2@gmail.com', 'anuragck2@gmail.com', 'Female', 'Active', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-02-14 12:55:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'aa', 'Anurag ck', 'anuraglailal@gmail.com', 'Male', 'Active', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '2021-02-14 12:55:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'aa', 'cc', 'bbkj@gmail.com', 'Male', 'Active', '0f58d5a5515f1a8a9d179aa58858b67b2f8a3388', '2021-02-14 12:55:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'ajjaja', 'akakak', 'anuraglailal@gmail.com', 'Male', 'Active', '0f58d5a5515f1a8a9d179aa58858b67b2f8a3388', '2021-02-14 12:56:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'zzz', 'zzzz', 'dlarg@gmail.com', 'Male', 'Active', '0f58d5a5515f1a8a9d179aa58858b67b2f8a3388', '2021-02-14 12:56:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'didha', 'lachu', 'anuragck2@gmail.com', 'Female', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-14 21:52:51', '0000000000000', 'IOT', '2021-02-10', 'General', '00000000000', 'nsti calicut', '000000000', '100', '0000000000', '100', 'aboutme.png', 'aboutme.png', 'aboutme.png', 'aboutme.png'),
(24, 'testing', 'testing', 'dlarg@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-15 09:34:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'ajay kj', 'ajayajay', 'bbkj@gmail.com', 'Male', 'Active', '7c222fb2927d828af22f592134e8932480637c0d', '2021-02-15 11:44:53', '00000000000', 'ADIT', '2021-02-15', 'General', '0000000000000', 'nsti calicut', '000000000000000', '100', '111111111111111', '100', 'aboutme.png', 'aboutme.png', 'aboutme.png', 'aboutme.png');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
