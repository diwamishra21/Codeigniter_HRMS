-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 04:09 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `code` int(11) NOT NULL,
  `id` int(11) UNSIGNED NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `e_contact` varchar(20) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`code`, `id`, `contact`, `e_contact`, `address`, `city`, `state`) VALUES
(1001, 9, '9266913291', NULL, 'vijay vihar phase 1 rohini sec 5', 'New delhi', ''),
(1012, 30, '9718108739', '', 'Vill+post--&gt;Piro', 'Ara', 'Bihar'),
(1011, 29, '9761622241', '9761622241', 'Pratap Nagar', 'New Delhi', 'Delhi'),
(1006, 20, '7042022982', '', 'J.J. Colony Uttam nagar', 'New Delhi', 'Delhi'),
(1007, 25, '7417506572', '', 'Gulaothi', 'Gulaothi', 'Uttar Pradesh'),
(1008, 26, '8010343670', '', 'Gurgaon', 'New Delhi', 'Delhi'),
(1009, 27, '9650248237', '9650248237', 'aksherdham', 'New Delhi', 'Delhi'),
(1010, 28, '9540705853', '9540705853', 'Z-3, Z-block, Shyam Vihar-I, Najafgarh, New delhi-110043', 'New Delhi', 'Delhi'),
(1013, 31, '7532037003', '9616398004', '292 b block a vijay vihar', 'New delhi', 'Delhi'),
(1014, 32, '1234567890', '', 'delhi', 'delhi', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`) VALUES
(1, 'Fresher'),
(6, 'BCA'),
(7, 'BSC-IT'),
(8, 'BTECH(CS)'),
(9, 'BTECH(IT)'),
(10, 'MCA'),
(11, 'MBA');

-- --------------------------------------------------------

--
-- Table structure for table `edit_profile_history`
--

CREATE TABLE `edit_profile_history` (
  `id` int(11) NOT NULL,
  `code` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edit_profile_history`
--

INSERT INTO `edit_profile_history` (`id`, `code`, `first_name`, `last_name`, `contact`, `address`, `city`, `status`) VALUES
(6, 1002, 'Sunny', 'Saini', 9761622241, 'Ramnagar Dholana bus stand ', 'Gulaothi(BSR)', 1),
(2, 1003, 'Shiwjee1', 'Pandey1', 9718108739, 'HNO. -1 gandhi park deenpur najafgarh ', 'New Delhi', 1),
(3, 1003, 'Shiwjee', 'Pandey', 0, 'HNO. -1 gandhi park deenpur najafgarh ', 'New Delhi', 1),
(4, 1002, 'Sunny', 'Saini', 9761622241, 'Ramnagar Dholana bus stand ', 'Gulaothi(BSR)', 1),
(5, 1003, 'Shiwjee', 'Pandey', 9718108739, 'Najafgarh', 'Delhi', 1),
(7, 1002, 'Sunny', 'Saini', 9761622241, 'Ramnagar Dholana bus stand ', 'Gulaothi(BSR)', 1),
(8, 1002, 'Sunny', 'Saini', 9761622241, 'Ramnagar Dholana bus stand ', 'Gulaothi(BSR)', 1),
(9, 1007, 'Jyotin', 'Goyal', 7417506572, 'Gulaothi', 'Gulaothi', 1),
(10, 1010, 'ABHISHEK KUMAR', 'MISHRA', 9540705853, 'Z-3, Z-block, Shyam Vihar-I, Najafgarh, New delhi-110043', 'New Delhi', 1),
(13, 1012, 'Shiwjee', 'Pandey', 9718108739, 'Vill+post--&gt;Piro', 'Ara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educational_info`
--

CREATE TABLE `educational_info` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `highest_qualification` varchar(255) NOT NULL,
  `passing_year` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_info`
--

INSERT INTO `educational_info` (`id`, `code`, `highest_qualification`, `passing_year`) VALUES
(1002, 0, '', ''),
(1011, 1012, 'MCA', '2008'),
(1005, 1006, '', '2016'),
(1006, 1007, 'BCA', '2013'),
(1007, 1008, 'BTECH(CS)', '2015'),
(1008, 1009, 'MCA', '2016'),
(1009, 1010, 'MCA', '2013'),
(1010, 1011, 'MCA', '2015'),
(1012, 1013, 'BCA', '2012'),
(1013, 1014, 'MCA', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(255) NOT NULL,
  `exp` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `exp`) VALUES
(1, 'Fresher'),
(2, '1 year'),
(3, '1.5 years'),
(4, '2 years'),
(5, '2.5 years'),
(6, '3 years'),
(7, '3.5 years'),
(8, '4 years'),
(9, '4.5 years'),
(10, '5 years'),
(11, '5.5 years'),
(12, '6 years'),
(13, '6.5 years'),
(14, '7 years');

-- --------------------------------------------------------

--
-- Table structure for table `full_report`
--

CREATE TABLE `full_report` (
  `id` int(11) NOT NULL,
  `e_code` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `full_report`
--

INSERT INTO `full_report` (`id`, `e_code`, `email_id`, `last_login`, `logout_time`) VALUES
(1, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 02:12:42', '0000-00-00 00:00:00'),
(2, 'codeyiizen-2016-1003', 'pappu.shiwjee1985@gmail.com', '2016-07-06 11:32:41', '0000-00-00 00:00:00'),
(3, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-06 11:33:34', '0000-00-00 00:00:00'),
(4, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-06 11:34:30', '0000-00-00 00:00:00'),
(5, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-07-06 12:05:00', '0000-00-00 00:00:00'),
(6, 'codeyiizen-2016-1005', 'pappu.shiwjee1985@gmail.com', '2016-07-07 11:29:57', '0000-00-00 00:00:00'),
(7, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-07 11:30:07', '0000-00-00 00:00:00'),
(8, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-07 11:31:54', '0000-00-00 00:00:00'),
(9, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-08 12:12:55', '0000-00-00 00:00:00'),
(10, 'codeyiizen-2016-1005', 'pappu.shiwjee1985@gmail.com', '2016-07-08 12:13:26', '0000-00-00 00:00:00'),
(11, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-11 08:02:26', '2016-07-11 08:08:17'),
(12, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-12 11:25:09', '0000-00-00 00:00:00'),
(13, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-12 11:25:53', '0000-00-00 00:00:00'),
(14, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-16 03:37:19', '2016-07-16 05:13:46'),
(15, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-16 03:54:12', '2016-07-16 03:55:51'),
(16, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-19 11:33:22', '0000-00-00 00:00:00'),
(17, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-19 11:34:03', '0000-00-00 00:00:00'),
(18, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-20 11:12:01', '2016-07-20 07:53:52'),
(19, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-20 07:22:51', '0000-00-00 00:00:00'),
(20, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-20 07:31:34', '2016-07-20 07:32:57'),
(21, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-21 10:40:37', '2016-07-21 07:22:45'),
(22, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-21 10:42:46', '2016-07-21 07:48:45'),
(23, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-21 11:24:24', '2016-07-21 07:49:21'),
(24, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-22 11:11:37', '2016-07-22 07:20:28'),
(25, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-22 11:15:41', '0000-00-00 00:00:00'),
(26, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-23 11:10:46', '2016-07-23 05:44:37'),
(27, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-23 11:44:24', '2016-07-23 05:18:27'),
(28, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-23 05:44:50', '0000-00-00 00:00:00'),
(29, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-25 01:23:09', '0000-00-00 00:00:00'),
(30, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-25 01:26:08', '0000-00-00 00:00:00'),
(31, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-25 01:26:16', '0000-00-00 00:00:00'),
(32, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-26 12:24:29', '0000-00-00 00:00:00'),
(33, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-26 12:33:50', '0000-00-00 00:00:00'),
(34, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-26 12:34:09', '0000-00-00 00:00:00'),
(35, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-28 11:44:03', '2016-07-28 07:39:51'),
(36, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-28 04:22:37', '0000-00-00 00:00:00'),
(37, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-29 07:00:41', '2016-07-29 07:49:53'),
(38, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-30 11:02:39', '0000-00-00 00:00:00'),
(39, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-08-01 07:23:15', '2016-08-01 07:24:58'),
(40, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-08-02 11:52:55', '2016-08-02 07:23:06'),
(41, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-28 08:26:07', '0000-00-00 00:00:00'),
(42, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-29 11:36:51', '0000-00-00 00:00:00'),
(43, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-29 03:27:47', '0000-00-00 00:00:00'),
(44, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-30 04:04:42', '0000-00-00 00:00:00'),
(45, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-30 06:03:34', '0000-00-00 00:00:00'),
(46, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-09-30 06:22:23', '2016-09-30 07:05:00'),
(47, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-09-30 06:26:33', '2016-09-30 07:29:06'),
(48, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-09-30 08:09:52', '2016-09-30 08:27:11'),
(49, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-01 10:22:36', '2016-10-01 01:22:40'),
(50, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-01 10:37:08', '0000-00-00 00:00:00'),
(51, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-01 11:18:03', '0000-00-00 00:00:00'),
(52, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-01 11:19:30', '0000-00-00 00:00:00'),
(53, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-01 11:28:52', '0000-00-00 00:00:00'),
(54, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-01 11:29:07', '0000-00-00 00:00:00'),
(55, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-01 11:48:49', '0000-00-00 00:00:00'),
(56, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-01 12:00:20', '0000-00-00 00:00:00'),
(57, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-03 10:22:52', '0000-00-00 00:00:00'),
(58, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-03 10:58:33', '2016-10-03 07:51:43'),
(59, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-03 11:07:44', '0000-00-00 00:00:00'),
(60, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-03 11:10:31', '2016-10-03 08:26:03'),
(61, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-03 12:50:19', '2016-10-03 08:26:10'),
(62, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-03 01:08:03', '0000-00-00 00:00:00'),
(63, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-04 10:32:00', '0000-00-00 00:00:00'),
(64, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-04 10:59:34', '2016-10-04 08:03:47'),
(65, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-04 11:03:01', '0000-00-00 00:00:00'),
(66, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-04 11:03:04', '0000-00-00 00:00:00'),
(67, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-04 11:23:40', '0000-00-00 00:00:00'),
(68, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-04 11:56:41', '0000-00-00 00:00:00'),
(69, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-04 08:21:52', '0000-00-00 00:00:00'),
(70, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-05 11:20:28', '0000-00-00 00:00:00'),
(71, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-05 11:20:39', '0000-00-00 00:00:00'),
(72, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-05 11:28:20', '0000-00-00 00:00:00'),
(73, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-05 11:42:26', '0000-00-00 00:00:00'),
(74, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-05 11:59:13', '0000-00-00 00:00:00'),
(75, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-05 12:57:10', '0000-00-00 00:00:00'),
(76, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-06 10:33:45', '0000-00-00 00:00:00'),
(77, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-06 10:42:08', '0000-00-00 00:00:00'),
(78, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-06 10:46:14', '0000-00-00 00:00:00'),
(79, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-06 10:48:42', '0000-00-00 00:00:00'),
(80, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-06 10:50:23', '0000-00-00 00:00:00'),
(81, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-06 10:58:04', '0000-00-00 00:00:00'),
(82, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-06 11:10:54', '0000-00-00 00:00:00'),
(83, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-07 10:44:10', '0000-00-00 00:00:00'),
(84, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-07 10:45:43', '0000-00-00 00:00:00'),
(85, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-07 11:20:23', '0000-00-00 00:00:00'),
(86, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-07 11:47:07', '0000-00-00 00:00:00'),
(87, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-08 11:06:05', '0000-00-00 00:00:00'),
(88, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-08 11:30:35', '0000-00-00 00:00:00'),
(89, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-08 11:38:48', '0000-00-00 00:00:00'),
(90, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-08 11:46:09', '0000-00-00 00:00:00'),
(91, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-08 12:13:07', '0000-00-00 00:00:00'),
(92, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-09 11:12:02', '0000-00-00 00:00:00'),
(93, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-09 11:17:15', '0000-00-00 00:00:00'),
(94, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-12 10:57:57', '0000-00-00 00:00:00'),
(95, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-12 12:34:54', '0000-00-00 00:00:00'),
(96, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-13 10:40:53', '0000-00-00 00:00:00'),
(97, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-13 11:16:53', '0000-00-00 00:00:00'),
(98, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-13 12:22:29', '0000-00-00 00:00:00'),
(99, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-14 10:57:48', '0000-00-00 00:00:00'),
(100, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-14 11:27:15', '0000-00-00 00:00:00'),
(101, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-15 11:12:27', '0000-00-00 00:00:00'),
(102, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-15 11:38:31', '0000-00-00 00:00:00'),
(103, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-17 10:49:55', '0000-00-00 00:00:00'),
(104, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-18 11:39:38', '0000-00-00 00:00:00'),
(105, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-18 12:01:58', '0000-00-00 00:00:00'),
(106, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-18 02:58:15', '0000-00-00 00:00:00'),
(107, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-19 11:15:23', '0000-00-00 00:00:00'),
(108, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-19 11:37:45', '0000-00-00 00:00:00'),
(109, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-19 11:47:07', '0000-00-00 00:00:00'),
(110, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-19 04:26:40', '0000-00-00 00:00:00'),
(111, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-19 04:27:51', '0000-00-00 00:00:00'),
(112, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-20 10:38:42', '0000-00-00 00:00:00'),
(113, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-20 11:15:58', '0000-00-00 00:00:00'),
(114, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-20 11:19:29', '0000-00-00 00:00:00'),
(115, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-20 11:21:00', '0000-00-00 00:00:00'),
(116, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-21 12:34:01', '0000-00-00 00:00:00'),
(117, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-22 10:43:45', '0000-00-00 00:00:00'),
(118, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-24 11:14:47', '0000-00-00 00:00:00'),
(119, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-24 12:07:26', '0000-00-00 00:00:00'),
(120, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-10-24 12:11:14', '0000-00-00 00:00:00'),
(121, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-24 02:03:10', '0000-00-00 00:00:00'),
(122, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-24 02:03:20', '0000-00-00 00:00:00'),
(123, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-25 11:03:08', '0000-00-00 00:00:00'),
(124, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-25 11:16:58', '0000-00-00 00:00:00'),
(125, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-25 11:34:42', '0000-00-00 00:00:00'),
(126, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-25 12:19:19', '0000-00-00 00:00:00'),
(127, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-10-25 12:21:34', '0000-00-00 00:00:00'),
(128, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-26 11:04:30', '0000-00-00 00:00:00'),
(129, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-26 11:13:43', '0000-00-00 00:00:00'),
(130, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-27 10:59:08', '0000-00-00 00:00:00'),
(131, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-27 11:12:50', '0000-00-00 00:00:00'),
(132, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-27 11:14:26', '0000-00-00 00:00:00'),
(133, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-28 10:49:13', '0000-00-00 00:00:00'),
(134, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-28 11:01:58', '0000-00-00 00:00:00'),
(135, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-28 11:07:46', '0000-00-00 00:00:00'),
(136, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-30 10:16:05', '0000-00-00 00:00:00'),
(137, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-02 12:53:07', '0000-00-00 00:00:00'),
(138, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-02 12:54:15', '0000-00-00 00:00:00'),
(139, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-03 11:37:00', '0000-00-00 00:00:00'),
(140, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-03 11:37:34', '0000-00-00 00:00:00'),
(141, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-04 11:14:20', '0000-00-00 00:00:00'),
(142, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-04 11:15:38', '0000-00-00 00:00:00'),
(143, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-04 11:17:06', '0000-00-00 00:00:00'),
(144, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-05 10:51:20', '0000-00-00 00:00:00'),
(145, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-05 11:01:12', '0000-00-00 00:00:00'),
(146, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-05 11:02:46', '0000-00-00 00:00:00'),
(147, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-07 11:02:21', '0000-00-00 00:00:00'),
(148, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-08 11:22:50', '0000-00-00 00:00:00'),
(149, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-11-08 06:30:33', '2016-11-08 06:32:24'),
(150, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-09 11:25:14', '0000-00-00 00:00:00'),
(151, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-09 12:37:40', '0000-00-00 00:00:00'),
(152, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-10 11:32:05', '0000-00-00 00:00:00'),
(153, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-11-10 11:58:08', '0000-00-00 00:00:00'),
(154, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-11 10:58:20', '0000-00-00 00:00:00'),
(155, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-11 11:47:51', '0000-00-00 00:00:00'),
(156, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-12 11:14:30', '0000-00-00 00:00:00'),
(157, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-12 11:31:33', '0000-00-00 00:00:00'),
(158, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-14 11:19:55', '0000-00-00 00:00:00'),
(159, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-14 11:40:31', '0000-00-00 00:00:00'),
(160, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-14 07:08:04', '0000-00-00 00:00:00'),
(161, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-11-15 11:04:14', '0000-00-00 00:00:00'),
(162, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-15 11:23:55', '0000-00-00 00:00:00'),
(163, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-11-15 11:26:02', '0000-00-00 00:00:00'),
(164, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-15 11:42:38', '0000-00-00 00:00:00'),
(165, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-15 11:48:52', '0000-00-00 00:00:00'),
(166, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-15 12:22:34', '2016-11-15 08:10:02'),
(167, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-16 10:59:32', '0000-00-00 00:00:00'),
(168, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-16 11:09:26', '2016-11-16 11:09:57'),
(169, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-16 11:09:32', '0000-00-00 00:00:00'),
(170, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-16 11:12:54', '0000-00-00 00:00:00'),
(171, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-16 11:40:00', '0000-00-00 00:00:00'),
(172, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-11-16 11:40:13', '0000-00-00 00:00:00'),
(173, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-17 06:36:57', '0000-00-00 00:00:00'),
(174, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-18 03:37:00', '0000-00-00 00:00:00'),
(175, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-05 07:28:53', '0000-00-00 00:00:00'),
(176, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-05 07:50:31', '0000-00-00 00:00:00'),
(177, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-06 04:22:57', '0000-00-00 00:00:00'),
(178, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-06 04:26:54', '0000-00-00 00:00:00'),
(179, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-07 11:32:37', '0000-00-00 00:00:00'),
(180, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-09 11:56:13', '0000-00-00 00:00:00'),
(181, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-10 12:36:12', '0000-00-00 00:00:00'),
(182, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-11 04:17:41', '0000-00-00 00:00:00'),
(183, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 02:28:35', '2016-12-13 02:56:27'),
(184, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 02:58:54', '2016-12-13 08:13:51'),
(185, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-14 12:12:12', '2016-12-14 08:03:03'),
(186, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14 12:13:22', '2016-12-14 01:18:11'),
(187, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-15 01:08:09', '2016-12-15 08:15:19'),
(188, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-15 01:27:02', '0000-00-00 00:00:00'),
(189, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-16 11:43:21', '2016-12-16 06:12:00'),
(190, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-16 01:00:31', '2016-12-16 05:24:13'),
(191, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-17 01:17:38', '2016-12-17 05:20:23'),
(192, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-17 03:10:49', '2016-12-17 05:21:51'),
(193, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-12-17 05:25:20', '0000-00-00 00:00:00'),
(194, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-19 12:06:01', '0000-00-00 00:00:00'),
(195, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-20 02:03:16', '0000-00-00 00:00:00'),
(196, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-21 11:58:36', '2016-12-21 12:25:10'),
(197, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-21 07:54:57', '0000-00-00 00:00:00'),
(198, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-22 12:03:42', '0000-00-00 00:00:00'),
(199, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-22 06:27:51', '0000-00-00 00:00:00'),
(200, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-23 11:45:00', '0000-00-00 00:00:00'),
(201, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-23 03:12:04', '0000-00-00 00:00:00'),
(202, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-24 11:31:39', '0000-00-00 00:00:00'),
(203, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-25 12:51:32', '0000-00-00 00:00:00'),
(204, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-26 12:46:08', '0000-00-00 00:00:00'),
(205, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-29 12:37:40', '0000-00-00 00:00:00'),
(206, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-30 02:53:49', '0000-00-00 00:00:00'),
(207, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-01-04 03:05:54', '0000-00-00 00:00:00'),
(208, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-01-09 01:04:51', '0000-00-00 00:00:00'),
(209, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-01-10 01:48:32', '0000-00-00 00:00:00'),
(210, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-04 04:49:11', '2017-02-04 04:49:39'),
(211, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-17 09:59:02', '0000-00-00 00:00:00'),
(212, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-21 04:42:20', '0000-00-00 00:00:00'),
(213, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-08 06:53:09', '0000-00-00 00:00:00'),
(214, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-09 11:50:42', '0000-00-00 00:00:00'),
(215, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-13 12:17:41', '0000-00-00 00:00:00'),
(216, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-05-06 05:32:32', '0000-00-00 00:00:00'),
(217, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-05-16 10:53:22', '0000-00-00 00:00:00'),
(218, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-05-17 03:08:04', '0000-00-00 00:00:00'),
(219, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-06-25 02:20:29', '0000-00-00 00:00:00'),
(220, 'codeyiizen-2016-1001', 'admin@admin.com', '2018-09-25 06:45:40', '0000-00-00 00:00:00'),
(221, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 06:47:28', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type`
--

CREATE TABLE `leave_type` (
  `id` int(11) NOT NULL,
  `leave_name` varchar(255) NOT NULL,
  `short_code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_type`
--

INSERT INTO `leave_type` (`id`, `leave_name`, `short_code`) VALUES
(1, 'Sick Leave', 'sl'),
(2, 'Casual Leave', 'cl');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(50) NOT NULL,
  `e_code` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL,
  `logout_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `e_code`, `email_id`, `last_login`, `logout_time`) VALUES
(1, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-21 11:39:10', '0000-00-00 00:00:00'),
(2, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-22 05:20:16', '0000-00-00 00:00:00'),
(3, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-28 01:02:45', '0000-00-00 00:00:00'),
(4, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-28 04:51:03', '0000-00-00 00:00:00'),
(5, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-28 04:59:56', '2016-06-28 05:00:26'),
(6, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-28 05:00:56', '2016-06-28 05:01:02'),
(7, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-28 05:01:10', '2016-06-28 05:20:15'),
(8, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-28 08:28:10', '0000-00-00 00:00:00'),
(9, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-29 12:31:56', '0000-00-00 00:00:00'),
(10, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-30 05:37:57', '2016-06-30 06:00:55'),
(11, 'codeyiizen-2016-1003', 'pappu.shiwjee1985@gmail.com', '2016-06-30 06:06:21', '2016-06-30 06:08:32'),
(12, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-30 06:06:59', '2016-06-30 07:26:20'),
(13, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-06-30 06:08:04', '2016-06-30 06:37:54'),
(14, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-06-30 06:38:13', '2016-06-30 06:48:29'),
(15, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-06-30 06:48:47', '2016-06-30 08:23:16'),
(16, 'codeyiizen-2016-1003', 'pappu.shiwjee1985@gmail.com', '2016-06-30 06:53:01', '0000-00-00 00:00:00'),
(17, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-06-30 07:26:24', '0000-00-00 00:00:00'),
(18, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-01 05:44:19', '2016-07-01 06:33:15'),
(19, 'codeyiizen-2016-1003', 'pappu.shiwjee1985@gmail.com', '2016-07-01 05:45:35', '2016-07-01 06:03:11'),
(20, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-01 05:51:29', '2016-07-01 07:31:53'),
(21, 'codeyiizen-2016-1003', 'pappu.shiwjee1985@gmail.com', '2016-07-01 06:03:12', '0000-00-00 00:00:00'),
(22, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-01 06:33:54', '2016-07-01 07:32:07'),
(23, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 01:24:00', '0000-00-00 00:00:00'),
(24, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 01:42:29', '2016-07-05 01:48:17'),
(25, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 01:48:20', '2016-07-05 01:50:17'),
(26, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 01:50:19', '2016-07-05 02:01:56'),
(27, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 02:01:57', '0000-00-00 00:00:00'),
(28, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 02:02:32', '0000-00-00 00:00:00'),
(29, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-05 02:12:42', '2016-07-05 08:20:18'),
(30, 'codeyiizen-2016-1003', 'pappu.shiwjee1985@gmail.com', '2016-07-06 11:32:41', '0000-00-00 00:00:00'),
(31, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-06 11:33:34', '2016-07-06 12:27:26'),
(32, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-06 11:34:30', '2016-07-06 12:13:39'),
(33, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-07-06 12:05:00', '2016-07-06 12:08:51'),
(34, 'codeyiizen-2016-1005', 'pappu.shiwjee1985@gmail.com', '2016-07-06 12:11:22', '0000-00-00 00:00:00'),
(35, 'codeyiizen-2016-1005', 'pappu.shiwjee1985@gmail.com', '2016-07-07 11:29:57', '0000-00-00 00:00:00'),
(36, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-07 11:30:07', '2016-07-07 11:31:51'),
(37, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-07 11:31:54', '2016-07-07 11:46:29'),
(38, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-07 11:31:59', '2016-07-07 11:46:19'),
(39, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-08 12:12:55', '0000-00-00 00:00:00'),
(40, 'codeyiizen-2016-1005', 'pappu.shiwjee1985@gmail.com', '2016-07-08 12:13:26', '0000-00-00 00:00:00'),
(41, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-11 08:02:26', '2016-07-11 08:08:59'),
(42, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-11 08:15:43', '0000-00-00 00:00:00'),
(43, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-12 11:25:09', '0000-00-00 00:00:00'),
(44, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-12 11:25:53', '0000-00-00 00:00:00'),
(45, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-12 02:07:44', '0000-00-00 00:00:00'),
(46, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-12 02:08:25', '2016-07-12 02:09:27'),
(47, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-16 03:37:19', '2016-07-16 05:13:50'),
(48, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-16 03:54:12', '2016-07-16 03:55:55'),
(49, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-19 11:33:22', '2016-07-19 11:33:47'),
(50, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-19 11:34:03', '2016-07-19 12:25:17'),
(51, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-20 11:12:01', '0000-00-00 00:00:00'),
(52, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-20 07:22:51', '0000-00-00 00:00:00'),
(53, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-20 07:31:34', '2016-07-20 07:33:42'),
(54, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-20 07:52:48', '2016-07-20 07:54:00'),
(55, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-21 10:40:37', '0000-00-00 00:00:00'),
(56, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-21 10:42:46', '0000-00-00 00:00:00'),
(57, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-21 11:24:24', '0000-00-00 00:00:00'),
(58, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-21 12:36:08', '2016-07-21 07:49:25'),
(59, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-21 04:32:22', '0000-00-00 00:00:00'),
(60, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-21 07:17:27', '2016-07-21 07:48:49'),
(61, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-21 07:18:47', '2016-07-21 07:22:59'),
(62, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-22 11:11:37', '0000-00-00 00:00:00'),
(63, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-22 11:15:41', '0000-00-00 00:00:00'),
(64, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-22 07:18:43', '2016-07-22 07:20:40'),
(65, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-23 11:10:46', '0000-00-00 00:00:00'),
(66, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-23 11:44:24', '0000-00-00 00:00:00'),
(67, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-23 05:04:44', '2016-07-23 05:18:29'),
(68, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-23 05:44:29', '2016-07-23 05:44:46'),
(69, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-23 05:44:50', '0000-00-00 00:00:00'),
(70, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-25 01:23:09', '0000-00-00 00:00:00'),
(71, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-25 01:26:08', '0000-00-00 00:00:00'),
(72, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-25 01:26:16', '2016-07-25 02:09:28'),
(73, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-25 01:59:08', '0000-00-00 00:00:00'),
(74, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-25 07:43:30', '0000-00-00 00:00:00'),
(75, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-26 12:24:29', '0000-00-00 00:00:00'),
(76, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-26 12:33:50', '0000-00-00 00:00:00'),
(77, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-26 12:34:09', '0000-00-00 00:00:00'),
(78, 'codeyiizen-2016-1002', 'sunny@seaoftech.com', '2016-07-26 06:46:53', '0000-00-00 00:00:00'),
(79, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-28 11:44:03', '0000-00-00 00:00:00'),
(80, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-28 04:22:37', '2016-07-28 04:28:36'),
(81, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-28 07:37:15', '0000-00-00 00:00:00'),
(82, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-28 07:48:41', '2016-07-28 07:50:24'),
(83, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-29 07:00:41', '0000-00-00 00:00:00'),
(84, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-07-29 07:45:29', '2016-07-29 07:49:55'),
(85, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-07-30 11:02:39', '2016-07-30 11:14:07'),
(86, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-08-01 07:23:15', '0000-00-00 00:00:00'),
(87, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-08-02 11:52:55', '2016-08-02 11:53:04'),
(88, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-08-02 07:17:33', '2016-08-02 07:22:38'),
(89, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-08-02 07:22:59', '0000-00-00 00:00:00'),
(90, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-28 08:26:07', '0000-00-00 00:00:00'),
(91, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-29 11:36:51', '0000-00-00 00:00:00'),
(92, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-29 01:53:04', '0000-00-00 00:00:00'),
(93, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-29 03:27:47', '2016-09-29 03:28:50'),
(94, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-29 03:33:35', '2016-09-29 03:42:39'),
(95, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-29 03:42:59', '0000-00-00 00:00:00'),
(96, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-30 04:04:42', '2016-09-30 04:04:51'),
(97, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-09-30 04:05:35', '2016-09-30 04:06:34'),
(98, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-30 06:03:34', '2016-09-30 07:10:44'),
(99, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-09-30 06:22:23', '0000-00-00 00:00:00'),
(100, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-09-30 06:26:33', '0000-00-00 00:00:00'),
(101, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-09-30 08:09:52', '0000-00-00 00:00:00'),
(102, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-09-30 08:10:19', '0000-00-00 00:00:00'),
(103, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-01 10:22:36', '0000-00-00 00:00:00'),
(104, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-01 10:37:08', '0000-00-00 00:00:00'),
(105, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-01 11:18:03', '0000-00-00 00:00:00'),
(106, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-01 11:19:30', '0000-00-00 00:00:00'),
(107, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-01 11:24:28', '2016-10-01 11:28:50'),
(108, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-01 11:28:52', '2016-10-01 11:28:58'),
(109, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-01 11:29:07', '0000-00-00 00:00:00'),
(110, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-01 11:29:35', '2016-10-01 11:30:30'),
(111, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-01 11:48:49', '0000-00-00 00:00:00'),
(112, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-01 12:00:20', '0000-00-00 00:00:00'),
(113, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-01 01:05:11', '2016-10-01 01:22:55'),
(114, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-01 01:23:31', '0000-00-00 00:00:00'),
(115, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-01 05:16:16', '0000-00-00 00:00:00'),
(116, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-01 08:08:41', '0000-00-00 00:00:00'),
(117, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-03 10:22:52', '0000-00-00 00:00:00'),
(118, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-03 10:58:33', '0000-00-00 00:00:00'),
(119, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-03 11:07:44', '0000-00-00 00:00:00'),
(120, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-03 11:10:31', '0000-00-00 00:00:00'),
(121, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-03 12:50:19', '0000-00-00 00:00:00'),
(122, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-03 01:08:03', '0000-00-00 00:00:00'),
(123, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-03 07:09:40', '0000-00-00 00:00:00'),
(124, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-03 08:25:45', '0000-00-00 00:00:00'),
(125, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-03 08:25:59', '0000-00-00 00:00:00'),
(126, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-04 10:32:00', '0000-00-00 00:00:00'),
(127, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-04 10:59:34', '0000-00-00 00:00:00'),
(128, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-04 11:03:01', '0000-00-00 00:00:00'),
(129, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-04 11:03:04', '0000-00-00 00:00:00'),
(130, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-04 11:23:40', '0000-00-00 00:00:00'),
(131, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-04 11:56:41', '0000-00-00 00:00:00'),
(132, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-04 08:03:41', '0000-00-00 00:00:00'),
(133, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-04 08:21:52', '0000-00-00 00:00:00'),
(134, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-05 11:20:28', '0000-00-00 00:00:00'),
(135, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-05 11:20:39', '0000-00-00 00:00:00'),
(136, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-05 11:28:20', '0000-00-00 00:00:00'),
(137, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-05 11:42:26', '0000-00-00 00:00:00'),
(138, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-05 11:59:13', '0000-00-00 00:00:00'),
(139, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-05 12:57:10', '0000-00-00 00:00:00'),
(140, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-05 01:42:24', '0000-00-00 00:00:00'),
(141, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-06 10:33:45', '2016-10-06 10:43:00'),
(142, 'codeyiizen-2016-1009', 'rashi@codeyiizen.com', '2016-10-06 10:42:08', '0000-00-00 00:00:00'),
(143, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-06 10:46:14', '0000-00-00 00:00:00'),
(144, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-06 10:46:50', '0000-00-00 00:00:00'),
(145, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-06 10:48:42', '0000-00-00 00:00:00'),
(146, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-06 10:50:23', '0000-00-00 00:00:00'),
(147, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-06 10:58:04', '0000-00-00 00:00:00'),
(148, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-06 11:10:54', '2016-10-06 11:11:02'),
(149, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-06 11:11:27', '0000-00-00 00:00:00'),
(150, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-07 10:44:10', '0000-00-00 00:00:00'),
(151, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-07 10:45:43', '0000-00-00 00:00:00'),
(152, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-07 11:20:23', '0000-00-00 00:00:00'),
(153, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-07 11:47:07', '0000-00-00 00:00:00'),
(154, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-08 11:06:05', '0000-00-00 00:00:00'),
(155, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-08 11:30:35', '0000-00-00 00:00:00'),
(156, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-08 11:38:48', '0000-00-00 00:00:00'),
(157, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-08 11:46:09', '0000-00-00 00:00:00'),
(158, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-08 12:13:07', '0000-00-00 00:00:00'),
(159, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-09 11:12:02', '0000-00-00 00:00:00'),
(160, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-09 11:17:15', '2016-10-09 11:17:42'),
(161, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-09 11:17:48', '0000-00-00 00:00:00'),
(162, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-12 10:57:57', '0000-00-00 00:00:00'),
(163, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-10-12 12:34:54', '0000-00-00 00:00:00'),
(164, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-13 10:40:53', '0000-00-00 00:00:00'),
(165, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-13 11:16:53', '0000-00-00 00:00:00'),
(166, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-13 12:22:29', '0000-00-00 00:00:00'),
(167, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-14 10:57:48', '0000-00-00 00:00:00'),
(168, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-14 11:27:15', '0000-00-00 00:00:00'),
(169, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-15 11:12:27', '0000-00-00 00:00:00'),
(170, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-15 11:38:31', '0000-00-00 00:00:00'),
(171, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-17 10:49:55', '0000-00-00 00:00:00'),
(172, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-18 11:39:38', '0000-00-00 00:00:00'),
(173, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-18 12:01:58', '0000-00-00 00:00:00'),
(174, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-18 02:58:15', '0000-00-00 00:00:00'),
(175, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-19 11:15:23', '0000-00-00 00:00:00'),
(176, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-19 11:37:45', '0000-00-00 00:00:00'),
(177, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-19 11:47:07', '0000-00-00 00:00:00'),
(178, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-19 04:26:40', '2016-10-19 04:27:29'),
(179, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-19 04:27:51', '2016-10-19 04:29:15'),
(180, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-20 10:38:42', '0000-00-00 00:00:00'),
(181, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-20 11:15:58', '0000-00-00 00:00:00'),
(182, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-10-20 11:19:29', '0000-00-00 00:00:00'),
(183, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-20 11:21:00', '0000-00-00 00:00:00'),
(184, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-20 03:53:46', '0000-00-00 00:00:00'),
(185, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-21 12:34:01', '0000-00-00 00:00:00'),
(186, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-22 10:43:45', '0000-00-00 00:00:00'),
(187, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-24 11:14:47', '0000-00-00 00:00:00'),
(188, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-24 12:07:26', '0000-00-00 00:00:00'),
(189, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-10-24 12:11:14', '2016-10-24 12:14:49'),
(190, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-10-24 12:15:11', '0000-00-00 00:00:00'),
(191, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-24 02:03:10', '0000-00-00 00:00:00'),
(192, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-24 02:03:20', '0000-00-00 00:00:00'),
(193, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-24 05:22:04', '0000-00-00 00:00:00'),
(194, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-25 11:03:08', '0000-00-00 00:00:00'),
(195, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-25 11:16:58', '0000-00-00 00:00:00'),
(196, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-25 11:34:42', '0000-00-00 00:00:00'),
(197, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-25 12:19:19', '0000-00-00 00:00:00'),
(198, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-10-25 12:21:34', '0000-00-00 00:00:00'),
(199, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-25 01:13:13', '0000-00-00 00:00:00'),
(200, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-26 11:04:30', '0000-00-00 00:00:00'),
(201, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-26 11:13:43', '2016-10-26 11:16:17'),
(202, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-27 10:59:08', '0000-00-00 00:00:00'),
(203, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-27 11:12:50', '0000-00-00 00:00:00'),
(204, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-27 11:14:26', '0000-00-00 00:00:00'),
(205, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-10-28 10:49:13', '0000-00-00 00:00:00'),
(206, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-10-28 11:01:58', '0000-00-00 00:00:00'),
(207, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-10-28 11:07:46', '0000-00-00 00:00:00'),
(208, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-10-30 10:16:05', '2016-10-30 10:22:00'),
(209, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-02 12:53:07', '0000-00-00 00:00:00'),
(210, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-02 12:54:15', '0000-00-00 00:00:00'),
(211, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-03 11:37:00', '0000-00-00 00:00:00'),
(212, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-03 11:37:34', '0000-00-00 00:00:00'),
(213, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-04 11:14:20', '0000-00-00 00:00:00'),
(214, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-04 11:15:38', '0000-00-00 00:00:00'),
(215, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-04 11:17:06', '0000-00-00 00:00:00'),
(216, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-05 10:51:20', '0000-00-00 00:00:00'),
(217, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-05 11:01:12', '0000-00-00 00:00:00'),
(218, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-05 11:02:46', '0000-00-00 00:00:00'),
(219, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-07 11:02:21', '0000-00-00 00:00:00'),
(220, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-08 11:22:50', '0000-00-00 00:00:00'),
(221, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-11-08 06:30:33', '2016-11-08 06:32:31'),
(222, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-09 11:25:14', '0000-00-00 00:00:00'),
(223, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-09 12:37:40', '0000-00-00 00:00:00'),
(224, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-10 11:32:05', '0000-00-00 00:00:00'),
(225, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-11-10 11:58:08', '0000-00-00 00:00:00'),
(226, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-11 10:58:20', '0000-00-00 00:00:00'),
(227, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-11 11:47:51', '0000-00-00 00:00:00'),
(228, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-12 11:14:30', '0000-00-00 00:00:00'),
(229, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-12 11:31:33', '0000-00-00 00:00:00'),
(230, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-14 11:19:55', '0000-00-00 00:00:00'),
(231, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-14 11:40:31', '0000-00-00 00:00:00'),
(232, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-14 07:08:04', '0000-00-00 00:00:00'),
(233, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-11-15 11:04:14', '0000-00-00 00:00:00'),
(234, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-15 11:23:55', '0000-00-00 00:00:00'),
(235, 'codeyiizen-2016-1004', 'maneeshtiwari007@gmail.com', '2016-11-15 11:26:02', '2016-11-15 11:26:21'),
(236, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-15 11:42:38', '0000-00-00 00:00:00'),
(237, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-15 11:48:52', '0000-00-00 00:00:00'),
(238, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-15 12:22:34', '2016-11-15 12:25:36'),
(239, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-15 12:25:58', '0000-00-00 00:00:00'),
(240, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-15 07:50:15', '0000-00-00 00:00:00'),
(241, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-15 07:50:55', '2016-11-15 08:08:48'),
(242, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-15 08:09:01', '2016-11-15 08:10:09'),
(243, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-16 10:59:32', '0000-00-00 00:00:00'),
(244, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-16 11:09:26', '2016-11-16 11:10:15'),
(245, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-16 11:09:32', '0000-00-00 00:00:00'),
(246, 'codeyiizen-2016-1013', 'rahul@codeyiizen.com', '2016-11-16 11:10:24', '0000-00-00 00:00:00'),
(247, 'codeyiizen-2016-1007', 'jyotin@codeyiizen.com', '2016-11-16 11:12:54', '0000-00-00 00:00:00'),
(248, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-16 11:40:00', '0000-00-00 00:00:00'),
(249, 'codeyiizen-2016-1012', 'shiwjee@codeyiizen.com', '2016-11-16 11:40:13', '0000-00-00 00:00:00'),
(250, 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-16 01:18:42', '0000-00-00 00:00:00'),
(251, 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-16 01:20:26', '0000-00-00 00:00:00'),
(252, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-17 06:36:57', '0000-00-00 00:00:00'),
(253, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-11-18 03:37:00', '2016-12-05 07:28:37'),
(254, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-05 07:28:53', '2016-12-05 07:50:06'),
(255, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-05 07:50:31', '2016-12-05 07:52:16'),
(256, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-05 07:52:21', '2016-12-06 04:22:40'),
(257, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-06 04:22:57', '2016-12-06 04:26:49'),
(258, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-06 04:26:54', '2016-12-06 04:27:34'),
(259, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-06 04:27:38', '2016-12-06 04:34:37'),
(260, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-06 04:34:43', '2016-12-06 04:51:52'),
(261, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-06 04:51:57', '2016-12-06 05:11:18'),
(262, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-06 05:11:22', '2016-12-06 07:49:31'),
(263, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-07 11:32:37', '0000-00-00 00:00:00'),
(264, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-09 11:56:13', '0000-00-00 00:00:00'),
(265, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-10 12:36:12', '0000-00-00 00:00:00'),
(266, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-10 11:46:33', '0000-00-00 00:00:00'),
(267, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-10 03:04:11', '0000-00-00 00:00:00'),
(268, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-11 04:17:41', '0000-00-00 00:00:00'),
(269, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 02:28:35', '2016-12-13 02:48:52'),
(270, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 02:49:00', '2016-12-13 02:57:38'),
(271, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 02:58:54', '0000-00-00 00:00:00'),
(272, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 03:02:49', '2016-12-13 05:41:53'),
(273, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 04:00:21', '0000-00-00 00:00:00'),
(274, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 04:00:21', '0000-00-00 00:00:00'),
(275, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 04:01:32', '0000-00-00 00:00:00'),
(276, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-13 04:01:44', '0000-00-00 00:00:00'),
(277, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 05:42:18', '2016-12-13 05:42:28'),
(278, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 05:43:16', '2016-12-13 05:43:57'),
(279, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 05:44:29', '2016-12-13 05:45:04'),
(280, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-13 05:45:06', '0000-00-00 00:00:00'),
(281, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-14 12:12:12', '0000-00-00 00:00:00'),
(282, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14 12:13:22', '2016-12-14 12:50:24'),
(283, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14 12:50:31', '0000-00-00 00:00:00'),
(284, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-14 02:29:04', '0000-00-00 00:00:00'),
(285, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-14 12:24:16', '0000-00-00 00:00:00'),
(286, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14 01:17:54', '0000-00-00 00:00:00'),
(287, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-15 01:08:09', '2016-12-15 02:06:28'),
(288, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-15 01:27:02', '0000-00-00 00:00:00'),
(289, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-15 02:12:12', '0000-00-00 00:00:00'),
(290, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-15 03:45:52', '0000-00-00 00:00:00'),
(291, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-16 11:43:21', '2016-12-16 12:32:46'),
(292, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-16 12:33:02', '0000-00-00 00:00:00'),
(293, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-16 01:00:31', '0000-00-00 00:00:00'),
(294, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-16 03:22:34', '2016-12-16 03:23:20'),
(295, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-16 03:23:22', '2016-12-16 05:24:20'),
(296, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-17 01:17:38', '2016-12-17 01:39:18'),
(297, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-17 01:39:23', '0000-00-00 00:00:00'),
(298, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-17 01:39:24', '2016-12-17 05:38:11'),
(299, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-17 03:10:49', '2016-12-17 03:11:48'),
(300, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-17 03:11:50', '2016-12-17 05:22:55'),
(301, 'codeyiizen-2016-1008', 'ashu.orient@gmail.com', '2016-12-17 05:25:20', '2016-12-17 05:26:20'),
(302, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-17 05:27:15', '2016-12-17 05:27:45'),
(303, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-19 12:06:01', '0000-00-00 00:00:00'),
(304, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-19 02:54:05', '0000-00-00 00:00:00'),
(305, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-19 05:43:40', '0000-00-00 00:00:00'),
(306, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-20 02:03:16', '0000-00-00 00:00:00'),
(307, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-21 11:58:36', '0000-00-00 00:00:00'),
(308, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-21 07:54:57', '2016-12-21 07:55:06'),
(309, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-22 12:03:42', '0000-00-00 00:00:00'),
(310, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-22 06:27:51', '2016-12-22 06:28:10'),
(311, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-23 11:45:00', '0000-00-00 00:00:00'),
(312, 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-23 03:12:04', '0000-00-00 00:00:00'),
(313, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-23 07:10:52', '0000-00-00 00:00:00'),
(314, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-24 11:31:39', '0000-00-00 00:00:00'),
(315, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-25 12:51:32', '0000-00-00 00:00:00'),
(316, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-26 12:46:08', '0000-00-00 00:00:00'),
(317, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-29 12:37:40', '0000-00-00 00:00:00'),
(318, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-30 02:53:49', '0000-00-00 00:00:00'),
(319, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2016-12-30 03:17:10', '0000-00-00 00:00:00'),
(320, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-01-04 03:05:54', '0000-00-00 00:00:00'),
(321, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-01-09 01:04:51', '0000-00-00 00:00:00'),
(322, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-01-10 01:48:32', '0000-00-00 00:00:00'),
(323, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-04 04:49:11', '2017-02-04 04:49:43'),
(324, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-04 05:14:45', '0000-00-00 00:00:00'),
(325, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-04 05:22:51', '0000-00-00 00:00:00'),
(326, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-17 09:59:02', '0000-00-00 00:00:00'),
(327, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-02-21 04:42:20', '0000-00-00 00:00:00'),
(328, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-08 06:53:09', '2017-03-08 07:08:13'),
(329, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-08 07:08:20', '0000-00-00 00:00:00'),
(330, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-09 11:50:42', '0000-00-00 00:00:00'),
(331, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-03-13 12:17:41', '0000-00-00 00:00:00'),
(332, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-05-06 05:32:32', '2017-05-06 05:37:20'),
(333, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-05-16 10:53:22', '0000-00-00 00:00:00'),
(334, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-05-17 03:08:04', '0000-00-00 00:00:00'),
(335, 'codeyiizen-2016-1001', 'shiv.iimt2012@gmail.com', '2017-06-25 02:20:29', '0000-00-00 00:00:00'),
(336, 'codeyiizen-2016-1001', 'admin@admin.com', '2018-09-25 06:45:40', '0000-00-00 00:00:00'),
(337, 'codeyiizen-2016-1001', 'admin@admin.com', '2018-09-25 06:46:36', '0000-00-00 00:00:00'),
(338, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 06:47:28', '0000-00-00 00:00:00'),
(339, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 06:48:04', '0000-00-00 00:00:00'),
(340, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 06:48:29', '0000-00-00 00:00:00'),
(341, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 06:49:06', '0000-00-00 00:00:00'),
(342, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 06:55:49', '0000-00-00 00:00:00'),
(343, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:14:59', '0000-00-00 00:00:00'),
(344, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:18:05', '0000-00-00 00:00:00'),
(345, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:18:07', '0000-00-00 00:00:00'),
(346, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:19:05', '0000-00-00 00:00:00'),
(347, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:19:15', '0000-00-00 00:00:00'),
(348, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:22:03', '0000-00-00 00:00:00'),
(349, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:24:50', '0000-00-00 00:00:00'),
(350, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:25:20', '0000-00-00 00:00:00'),
(351, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:30:34', '0000-00-00 00:00:00'),
(352, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:30:40', '0000-00-00 00:00:00'),
(353, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:31:55', '0000-00-00 00:00:00'),
(354, 'codeyiizen-2016-1001', 'admin@gmail.com', '2018-09-25 07:33:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July '),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board`
--

CREATE TABLE `notice_board` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL,
  `on_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2555) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `on_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `title`, `description`, `user_id`, `on_date`, `status`) VALUES
(1, 'sick leave', 'viral infection', 'arbiindkumar42@gmail.com', '2016-12-05 18:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `passing_year`
--

CREATE TABLE `passing_year` (
  `id` int(255) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passing_year`
--

INSERT INTO `passing_year` (`id`, `year`) VALUES
(1, 2000),
(2, 2001),
(3, 2002),
(4, 2003),
(5, 2004),
(6, 2005),
(7, 2006),
(8, 2007),
(9, 2008),
(10, 2009),
(11, 2010),
(12, 2011),
(13, 2012),
(14, 2013),
(15, 2014),
(16, 2015),
(17, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `prev_company`
--

CREATE TABLE `prev_company` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `company1` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `company2` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prev_company`
--

INSERT INTO `prev_company` (`id`, `code`, `exp`, `company1`, `address1`, `company2`, `address2`) VALUES
(2, 0, '3', 'Gapinfotech pvt. ltd.', 'spazeitech park gurgaon', '', ''),
(21, 1012, '2 years', 'adfsaf', 'sadfsafd', 'asdfsadf', 'asdfasfd'),
(11, 1006, '', 'NA', 'NA', 'NA', 'NA'),
(12, 1007, 'Fresher', '', '', '', ''),
(17, 1008, 'Fresher', '', '', '', ''),
(18, 1009, 'Fresher', '', '', '', ''),
(19, 1010, 'Fresher', '', '', '', ''),
(20, 1011, 'Fresher', '', '', '', ''),
(22, 1013, '1 year', 'Digiinteract', '', '', ''),
(23, 1014, '2 years', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `taken_leave`
--

CREATE TABLE `taken_leave` (
  `id` int(11) NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `e_code` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `from_when` date NOT NULL,
  `till_when` date NOT NULL,
  `days` int(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `code` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `update_date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taken_leave`
--

INSERT INTO `taken_leave` (`id`, `leave_type`, `e_code`, `email_id`, `from_when`, `till_when`, `days`, `reason`, `apply_date`, `code`, `status`, `update_date`) VALUES
(1, 'Sick Leave', 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-01', '2016-11-03', 0, 'I was suffering from viral fever and eye infection ', '2016-11-16 07:51:52', '1010', 0, '2016-11-16 : 13:11:52'),
(2, 'Casual Leave', 'codeyiizen-2016-1011', 'sunny@codeyiizen.com', '2016-11-14', '2016-11-16', 10, 'for some personal work ', '2016-12-16 10:46:32', '1011', 0, '2016-11-16 : 13:11:36'),
(3, 'Casual Leave', 'codeyiizen-2016-1010', 'amishra@codeyiizen.com', '2016-11-12', '2016-11-12', 0, 'Due to some personal reason (bank)', '2016-12-05 13:55:09', '1010', 1, '2016-11-16 : 13:11:43'),
(4, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-11-01', '2016-11-23', 9, 'infected with bacterial infection', '2016-12-16 10:54:21', '1006', 0, '2016-12-05 : 19:12:26'),
(5, 'Casual Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-10-03', '2016-10-08', 0, 'Went for pre-training exam', '2016-12-05 14:22:09', '1006', 0, '2016-12-05 : 19:12:09'),
(6, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-04', '2016-12-06', 12, 'hello', '2016-12-16 10:47:20', '1006', 0, '2016-12-06 : 16:12:40'),
(7, 'Casual Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-08', '2016-12-09', 0, 'sdff', '2016-12-06 10:58:07', '1006', 0, '2016-12-06 : 16:12:07'),
(8, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-09', '2016-12-22', 0, 'hj', '2016-12-06 11:27:35', '1006', 0, '2016-12-06 : 16:12:35'),
(9, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14', '2016-12-14', 0, 'rebght', '2016-12-13 10:39:40', '1006', 0, '2016-12-13 : 16:12:40'),
(10, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14', '2016-12-16', 0, 'gvare', '2016-12-13 10:52:22', '1006', 0, '2016-12-13 : 16:12:22'),
(11, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14', '2016-12-16', 0, 'vsvg', '2016-12-13 10:56:28', '1006', 0, '2016-12-13 : 16:12:28'),
(12, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-14', '2016-12-19', 6, 'ds', '2016-12-13 11:21:04', '1006', 0, '2016-12-13 : 16:12:04'),
(13, 'Sick Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-16', '2016-12-20', 5, 'hello', '2016-12-16 11:11:00', '1006', 0, '2016-12-16 : 16:12:00'),
(14, 'Casual Leave', 'codeyiizen-2016-1006', 'arbindkumar42@gmail.com', '2016-12-16', '2016-12-30', 15, 'sqd', '2016-12-16 11:19:55', '1006', 0, '2016-12-16 : 16:12:55');

-- --------------------------------------------------------

--
-- Table structure for table `total_working_hours`
--

CREATE TABLE `total_working_hours` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `total_working_second` int(11) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_working_hours`
--

INSERT INTO `total_working_hours` (`id`, `code`, `email_id`, `last_login`, `logout_time`, `working_hours`, `total_working_second`) VALUES
(151, 1001, 'shiv.iimt2012@gmail.com', '2016-12-15 13:08:09', '2016-12-15 20:00:00', '07:07:10', NULL),
(149, 1001, 'shiv.iimt2012@gmail.com', '2016-12-14 00:12:12', '2016-12-14 20:00:00', '19:50:51', NULL),
(150, 1006, 'arbindkumar42@gmail.com', '2016-12-14 00:13:22', '2016-12-13 20:00:00', '13:04:49', NULL),
(153, 1001, 'shiv.iimt2012@gmail.com', '2016-12-16 11:43:21', '2016-12-16 20:00:00', '06:28:39', 23319),
(154, 1006, 'arbindkumar42@gmail.com', '2016-12-16 13:00:31', '2016-12-16 20:00:00', '04:23:42', 15822),
(155, 1001, 'shiv.iimt2012@gmail.com', '2016-12-17 13:17:38', '2016-12-17 20:00:00', '04:02:45', 14565),
(156, 1006, 'arbindkumar42@gmail.com', '2016-12-17 15:10:49', '2016-12-17 20:00:00', '02:11:02', 7862),
(157, 1008, 'ashu.orient@gmail.com', '2016-12-17 17:25:20', '2016-12-17 20:00:00', '', NULL),
(158, 1001, 'shiv.iimt2012@gmail.com', '2016-12-19 12:06:01', '2016-12-19 20:00:00', '', NULL),
(159, 1001, 'shiv.iimt2012@gmail.com', '2016-12-20 14:03:16', '2016-12-20 20:00:00', '', NULL),
(160, 1001, 'shiv.iimt2012@gmail.com', '2016-12-21 11:58:36', '2016-12-21 12:25:10', '00:26:34', 1594),
(161, 1006, 'arbindkumar42@gmail.com', '2016-12-21 19:54:57', '2016-12-21 20:00:00', '', NULL),
(162, 1001, 'shiv.iimt2012@gmail.com', '2016-12-22 12:03:42', '2016-12-22 20:00:00', '', NULL),
(163, 1006, 'arbindkumar42@gmail.com', '2016-12-22 18:27:51', '2016-12-22 20:00:00', '', NULL),
(164, 1001, 'shiv.iimt2012@gmail.com', '2016-12-23 11:45:00', '2016-12-23 20:00:00', '', NULL),
(165, 1006, 'arbindkumar42@gmail.com', '2016-12-23 15:12:04', '2016-12-23 20:00:00', '', NULL),
(166, 1001, 'shiv.iimt2012@gmail.com', '2016-12-24 11:31:39', '2016-12-24 20:00:00', '', NULL),
(167, 1001, 'shiv.iimt2012@gmail.com', '2016-12-25 12:51:32', '2016-12-25 20:00:00', '', NULL),
(168, 1001, 'shiv.iimt2012@gmail.com', '2016-12-26 12:46:08', '2016-12-26 20:00:00', '', NULL),
(169, 1001, 'shiv.iimt2012@gmail.com', '2016-12-29 12:37:40', '2016-12-29 20:00:00', '', NULL),
(170, 1001, 'shiv.iimt2012@gmail.com', '2016-12-30 14:53:49', '2016-12-30 20:00:00', '', NULL),
(171, 1001, 'shiv.iimt2012@gmail.com', '2017-01-04 15:05:54', '2017-01-04 20:00:00', '', NULL),
(172, 1001, 'shiv.iimt2012@gmail.com', '2017-01-09 13:04:51', '2017-01-09 20:00:00', '', NULL),
(173, 1001, 'shiv.iimt2012@gmail.com', '2017-01-10 13:48:32', '2017-01-10 20:00:00', '', NULL),
(174, 1001, 'shiv.iimt2012@gmail.com', '2017-02-04 16:49:11', '2017-02-04 16:49:39', '00:00:28', 28),
(175, 1001, 'shiv.iimt2012@gmail.com', '2017-02-17 09:59:02', '2017-02-17 20:00:00', '', NULL),
(176, 1001, 'shiv.iimt2012@gmail.com', '2017-02-21 16:42:20', '2017-02-21 20:00:00', '', NULL),
(177, 1001, 'shiv.iimt2012@gmail.com', '2017-03-08 18:53:09', '2017-03-08 20:00:00', '', NULL),
(178, 1001, 'shiv.iimt2012@gmail.com', '2017-03-09 11:50:42', '2017-03-09 20:00:00', '', NULL),
(179, 1001, 'shiv.iimt2012@gmail.com', '2017-03-13 12:17:41', '2017-03-13 20:00:00', '', NULL),
(180, 1001, 'shiv.iimt2012@gmail.com', '2017-05-06 17:32:32', '2017-05-06 20:00:00', '', NULL),
(181, 1001, 'shiv.iimt2012@gmail.com', '2017-05-16 10:53:22', '2017-05-16 20:00:00', '', NULL),
(182, 1001, 'shiv.iimt2012@gmail.com', '2017-05-17 15:08:04', '2017-05-17 20:00:00', '', NULL),
(183, 1001, 'shiv.iimt2012@gmail.com', '2017-06-25 02:20:29', '0000-00-00 00:00:00', '', NULL),
(184, 1001, 'admin@admin.com', '2018-09-25 18:45:40', '0000-00-00 00:00:00', '', NULL),
(185, 1001, 'admin@gmail.com', '2018-09-25 18:47:28', '0000-00-00 00:00:00', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `e_code` varchar(30) NOT NULL,
  `code` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `access_type` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `logout_time` datetime NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `fullpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `password`, `e_code`, `code`, `ip_address`, `access_type`, `last_login`, `logout_time`, `image_name`, `fullpath`) VALUES
(1, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'codeyiizen-2016-1001', 1001, '::1', 'super admin', '2018-09-25 06:45:40', '2017-02-04 04:49:39', 'BF09B94E-0143-4646-A3CA-4F73359BE3F7.png', '12741928_1001406339938110_3847158583915322098_n.jpg'),
(170, 'arbindkumar42@gmail.com', 'ed84f8847cf4669052076d7e361552f3', 'codeyiizen-2016-1006', 1006, '::1', 'employee', '2016-12-23 03:12:04', '2016-12-17 05:21:51', '', ''),
(175, 'jyotin@codeyiizen.com', 'fae90f5f61d52bf58e87f005ccd4523e', 'codeyiizen-2016-1007', 1007, '103.47.66.238', 'employee', '2016-11-16 11:12:54', '0000-00-00 00:00:00', '8521D44F-C0AC-4710-9EFD-5077802A50F6.jpg', ''),
(176, 'ashu.orient@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'codeyiizen-2016-1008', 1008, '::1', 'employee', '2016-12-17 05:25:20', '2016-10-03 08:26:10', 'FC92D374-6143-4FF6-85A9-9B9906AA7AFD.jpg', ''),
(177, 'rashi@codeyiizen.com', 'fb3c5037b7110b635cdd86bf338f198b', 'codeyiizen-2016-1009', 1009, '103.47.66.238', 'employee', '2016-10-06 10:42:08', '2016-10-01 01:22:40', '', ''),
(178, 'amishra@codeyiizen.com', 'e10adc3949ba59abbe56e057f20f883e', 'codeyiizen-2016-1010', 1010, '103.47.66.238', 'employee', '2016-11-16 10:59:32', '2016-10-04 08:03:47', '2477C95D-3771-4FDB-A4F1-829DE3429DD8.png', ''),
(179, 'sunny@codeyiizen.com', '7bc74405d3f6c6b667ecbd5bfae7d49c', 'codeyiizen-2016-1011', 1011, '103.47.66.238', 'employee', '2016-11-16 11:09:32', '0000-00-00 00:00:00', '5633DE19-B7C6-40A3-84AC-CE5253E69F84.jpg', ''),
(180, 'shiwjee@codeyiizen.com', 'e10adc3949ba59abbe56e057f20f883e', 'codeyiizen-2016-1012', 1012, '103.47.66.238', 'employee', '2016-11-16 11:40:13', '0000-00-00 00:00:00', '', ''),
(181, 'rahul@codeyiizen.com', 'ebaaba27b32928a25f2ad6185fc0cc74', 'codeyiizen-2016-1013', 1013, '103.47.66.238', 'employee', '2016-11-16 11:09:26', '2016-11-16 11:09:57', '16122738-469A-489A-99B6-94ED0AD19146.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_detail`
--

CREATE TABLE `users_detail` (
  `id` int(30) NOT NULL,
  `code` int(255) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `marital_status` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_detail`
--

INSERT INTO `users_detail` (`id`, `code`, `first_name`, `last_name`, `gender`, `dob`, `marital_status`, `blood_group`) VALUES
(1, 1001, 'Shiv Kumar', 'Tiwari', 'male', '07/14/1992', 'married', 'AB+'),
(24, 1012, 'Shiwjee', 'Pandey', 'male', '05-01-1985', 'female', 'A+'),
(23, 1011, 'Sunny', 'Saini', 'male', '14-07-1992', 'male', 'N/a'),
(14, 1006, 'Arbind Kumar', 'Sonkar', 'male', '', '', 'B+'),
(19, 1007, 'Jyotin', 'Goyal', 'male', '09-09-1992', 'male', 'AB+'),
(20, 1008, 'Abhishek', 'Singh', 'male', '20-01-1995', '', 'B+'),
(21, 1009, 'Rashi', 'Singh', 'female', '30-06-1993', 'male', 'B+'),
(22, 1010, 'ABHISHEK KUMAR1', 'MISHRA', 'male', '25-06-1987', '', 'a+'),
(25, 1013, 'Rahul', 'Upadhyay', 'male', '12-01-1989', 'male', 'B+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `edit_profile_history`
--
ALTER TABLE `edit_profile_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educational_info`
--
ALTER TABLE `educational_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `full_report`
--
ALTER TABLE `full_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type`
--
ALTER TABLE `leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notice_board`
--
ALTER TABLE `notice_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passing_year`
--
ALTER TABLE `passing_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prev_company`
--
ALTER TABLE `prev_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taken_leave`
--
ALTER TABLE `taken_leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_working_hours`
--
ALTER TABLE `total_working_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_detail`
--
ALTER TABLE `users_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `edit_profile_history`
--
ALTER TABLE `edit_profile_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `educational_info`
--
ALTER TABLE `educational_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `full_report`
--
ALTER TABLE `full_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT for table `leave_type`
--
ALTER TABLE `leave_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `prev_company`
--
ALTER TABLE `prev_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `taken_leave`
--
ALTER TABLE `taken_leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `total_working_hours`
--
ALTER TABLE `total_working_hours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `users_detail`
--
ALTER TABLE `users_detail`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
