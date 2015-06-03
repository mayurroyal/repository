-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 01:53 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `coinxoom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_name`
--

CREATE TABLE IF NOT EXISTS `bank_name` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `statue` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank_name`
--

INSERT INTO `bank_name` (`id`, `bank_name`, `statue`) VALUES
(1, 'American Bank', '1'),
(2, 'RcBP', '1'),
(3, 'American', '1'),
(4, 'American bank', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE IF NOT EXISTS `blog_post` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `author_name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `add_date` date NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `author_id`, `author_name`, `title`, `description`, `image`, `add_date`, `status`) VALUES
(1, 1, 'Jayson Chanchico1', 'TITLE OF THE FEATURE BLOG1', 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. ', 'blogpost.jpg', '2015-05-26', '1'),
(2, 2, 'Jayson Chanchico2', 'TITLE OF THE FEATURE BLOG2', 'Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. ', 'blogpost.jpg', '2015-05-26', '1'),
(3, 3, ' Jayson Chanchico', 'TITLE OF OTHER BLOG\r\n', 'eEtiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.d non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,.', 'blogpost1.jpg', '2015-05-26', '1'),
(4, 4, 'Jayson Chanchico', 'TITLE OF OTHER BLOG 2\r\n', 'eEtiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.d non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,.', 'blogpost1.jpg', '2015-05-25', '1'),
(5, 5, 'Jayson Chanchico', 'TITLE OF OTHER BLOG 3\r\n', 'eEtiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.d non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,.', 'blogpost1.jpg', '2015-05-27', '1');

-- --------------------------------------------------------

--
-- Table structure for table `buy_bit_coin`
--

CREATE TABLE IF NOT EXISTS `buy_bit_coin` (
  `id` int(11) NOT NULL,
  `buyer_user_id` int(11) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `user_wallet` varchar(200) NOT NULL,
  `search_trusted_user` enum('0','1') NOT NULL DEFAULT '0' COMMENT 'default value set 0',
  `seller_userid` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `add_date` datetime NOT NULL,
  `seller_aprovel` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy_bit_coin`
--

INSERT INTO `buy_bit_coin` (`id`, `buyer_user_id`, `amount`, `user_wallet`, `search_trusted_user`, `seller_userid`, `status`, `add_date`, `seller_aprovel`) VALUES
(1, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 12:30:08', '0'),
(2, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 12:41:33', '1'),
(3, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 12:43:15', '0'),
(4, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 12:43:45', '1'),
(5, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 12:55:34', '0'),
(6, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 12:56:58', '1'),
(7, 1, '15', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 13:01:25', '1'),
(8, 1, '23', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-02 13:23:16', '0'),
(9, 1, '7', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-02 13:25:02', '0'),
(10, 1, '45', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-02 13:33:19', '0'),
(11, 1, '35', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-02 13:35:44', '1'),
(12, 1, '55', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-02 14:24:03', '1'),
(13, 1, '50', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-02 14:29:40', '1'),
(14, 1, '103', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-02 14:37:45', '1'),
(15, 1, '66', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 07:13:50', '0'),
(16, 1, '100', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 07:57:18', '1'),
(17, 1, '22', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 08:05:56', '1'),
(18, 1, '10', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 08:08:52', '1'),
(19, 1, '45', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 08:47:01', '1'),
(20, 1, '30', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:04:57', '0'),
(21, 1, '33', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 09:14:52', '0'),
(22, 1, '66', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 09:26:02', '0'),
(23, 1, '33', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:36:04', '0'),
(24, 1, '88', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:36:50', '0'),
(25, 1, '77', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 09:37:41', '0'),
(26, 1, '33', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:38:43', '0'),
(27, 1, '67', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:40:01', '0'),
(28, 1, '44', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:41:12', '0'),
(29, 1, '33', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 09:44:57', '0'),
(30, 1, '30', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:45:25', '0'),
(31, 1, '10', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 09:46:55', '1'),
(32, 1, '333', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 10:40:43', '0'),
(33, 1, '20', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 10:59:23', '0'),
(34, 1, '34', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:02:30', '0'),
(35, 1, '43', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:04:29', '0'),
(36, 1, '4', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:09:19', '0'),
(37, 1, '3', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:20:04', '0'),
(38, 1, '10', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:30:23', '0'),
(39, 1, '10', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:31:18', '0'),
(40, 1, '5', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:33:36', '0'),
(41, 1, '5', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:34:32', '0'),
(42, 1, '3', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:54:34', '0'),
(43, 1, '6', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:56:11', '0'),
(44, 1, '2', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 11:57:56', '0'),
(45, 1, '3', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 11:59:23', '0'),
(46, 1, '2', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 11:59:51', '0'),
(47, 1, '2', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 12:01:32', '0'),
(48, 1, '4', 'CoinXoom Cash Wallet', '0', 3, '0', '2015-06-03 12:04:46', '0'),
(49, 1, '6', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 12:30:59', '0'),
(50, 1, '2', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 12:31:59', '0'),
(51, 1, '2', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 12:33:22', '0'),
(52, 1, '2', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 12:34:18', '0'),
(53, 1, '1', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 12:34:55', '0'),
(54, 1, '2', 'CoinXoom Cash Wallet', '0', 2, '0', '2015-06-03 12:37:18', '0');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `job_title`, `description`, `status`) VALUES
(1, 'JOB TITLE 1', 'This is Photoshop''s version of Lorem Ipsum.\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.', '1'),
(2, 'JOB TITLE 2', 'This is Photoshop''s version of Lorem Ipsum.\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cash_deposite_agent`
--

CREATE TABLE IF NOT EXISTS `cash_deposite_agent` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cda_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `online_status` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cash_deposite_agent`
--

INSERT INTO `cash_deposite_agent` (`id`, `user_id`, `cda_name`, `email`, `mobile`, `location`, `online_status`) VALUES
(1, 1, 'Priya', 'priya@gmail.com', '9876543212', 'Delhi', '1'),
(2, 2, 'Priyanka', 'priya@gmail.com', '9876543212', 'Delhi', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(1) NOT NULL,
  `owner_name` varchar(200) NOT NULL,
  `comp_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `fax` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `owner_name`, `comp_name`, `address`, `phone`, `fax`, `email`) VALUES
(1, 'CoinZoom. Ltd.', 'CoinZoom. Ltd.', '14 Prince George''s Park NUS, Singapore 118412 Singapore', '+65 66816740', '+65 67740762', 'jays@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `deposite_bank`
--

CREATE TABLE IF NOT EXISTS `deposite_bank` (
  `id` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `user_wallet` varchar(255) NOT NULL,
  `deposite_method` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `add_date` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposite_bank`
--

INSERT INTO `deposite_bank` (`id`, `amount`, `user_wallet`, `deposite_method`, `bank_name`, `add_date`, `status`) VALUES
(1, '11', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American', '2015-05-29 09:04:42', '0'),
(2, '22', 'CoinXoom Cash Wallet', 'Cash', '6', '2015-05-29 09:05:04', '0'),
(3, '66666666', 'CoinXoom Cash Wallet', 'Cash', '2', '2015-05-29 09:06:27', '0'),
(4, '777777', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American', '2015-05-29 09:21:10', '0'),
(5, '33', 'CoinXoom Cash Wallet', 'Bank Transfer', 'RcBP', '2015-05-29 09:26:32', '0'),
(6, '23', 'CoinXoom Cash Wallet', 'Cash', '3', '2015-05-29 09:28:10', '0'),
(7, '', 'CoinXoom Cash Wallet', 'Cash', '8', '2015-05-29 11:33:32', '0'),
(8, 'yjuu', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American', '2015-05-29 11:33:50', '0'),
(9, '789898', 'CoinXoom Cash Wallet', 'Bank Transfer', 'RcBP', '2015-05-29 11:34:31', '0'),
(10, '', 'CoinXoom Cash Wallet', 'Cash', '9', '2015-06-01 09:01:34', '0'),
(11, '777878', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American', '2015-06-01 11:03:58', '0'),
(12, '20', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American bank', '2015-06-02 08:35:21', '0'),
(13, '20', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American bank', '2015-06-02 08:47:52', '0'),
(14, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 08:48:05', '0'),
(15, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 08:48:09', '0'),
(16, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 08:48:09', '0'),
(17, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 08:48:50', '0'),
(18, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 08:49:39', '0'),
(19, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 08:54:07', '0'),
(20, '', 'CoinXoom Cash Wallet', 'Bank Transfer', 'American', '2015-06-02 08:54:15', '0'),
(21, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:05:27', '0'),
(22, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:05:31', '0'),
(23, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:05:37', '0'),
(24, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:05:40', '0'),
(25, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:05:41', '0'),
(26, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:08:25', '0'),
(27, '', 'CoinXoom Cash Wallet', 'Cash', '', '2015-06-02 09:08:26', '0');

-- --------------------------------------------------------

--
-- Table structure for table `escrow`
--

CREATE TABLE IF NOT EXISTS `escrow` (
  `id` int(11) NOT NULL,
  `transactionid` int(11) NOT NULL,
  `cashwallet` float(7,2) NOT NULL,
  `coinwallet` float(7,2) NOT NULL,
  `status` set('0','1','2','3') NOT NULL DEFAULT '0',
  `adddate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `escrow`
--

INSERT INTO `escrow` (`id`, `transactionid`, `cashwallet`, `coinwallet`, `status`, `adddate`) VALUES
(1, 5, 0.00, 20.00, '0', '2015-06-02 12:55:34'),
(2, 6, 15.00, 20.00, '0', '2015-06-02 12:56:58'),
(3, 7, 15.00, 20.00, '0', '2015-06-02 13:01:25'),
(4, 8, 23.00, 20.00, '0', '2015-06-02 13:23:16'),
(5, 9, 7.00, 20.00, '0', '2015-06-02 13:25:02'),
(6, 10, 45.00, 20.00, '0', '2015-06-02 13:33:19'),
(7, 11, 35.00, 20.00, '0', '2015-06-02 13:35:44'),
(8, 12, 55.00, 20.00, '0', '2015-06-02 14:24:04'),
(9, 13, 50.00, 20.00, '0', '2015-06-02 14:29:40'),
(10, 14, 103.00, 20.00, '0', '2015-06-02 14:37:45'),
(11, 15, 66.00, 20.00, '0', '2015-06-03 07:13:50'),
(12, 16, 100.00, 20.00, '0', '2015-06-03 07:57:18'),
(13, 17, 22.00, 20.00, '0', '2015-06-03 08:05:56'),
(14, 18, 10.00, 20.00, '0', '2015-06-03 08:08:52'),
(15, 19, 45.00, 20.00, '0', '2015-06-03 08:47:01'),
(16, 21, 33.00, 20.00, '0', '2015-06-03 09:14:52'),
(17, 22, 66.00, 20.00, '0', '2015-06-03 09:26:03'),
(18, 23, 33.00, 20.00, '0', '2015-06-03 09:36:05'),
(19, 24, 88.00, 20.00, '0', '2015-06-03 09:36:50'),
(20, 25, 77.00, 20.00, '0', '2015-06-03 09:37:41'),
(21, 26, 33.00, 20.00, '0', '2015-06-03 09:38:43'),
(22, 28, 44.00, 20.00, '0', '2015-06-03 09:41:12'),
(23, 29, 33.00, 20.00, '0', '2015-06-03 09:44:57'),
(24, 30, 30.00, 20.00, '0', '2015-06-03 09:45:25'),
(25, 31, 10.00, 20.00, '0', '2015-06-03 09:46:55'),
(26, 32, 333.00, 20.00, '0', '2015-06-03 10:40:43'),
(27, 33, 20.00, 20.00, '0', '2015-06-03 10:59:23'),
(28, 34, 34.00, 20.00, '0', '2015-06-03 11:02:30'),
(29, 35, 43.00, 20.00, '0', '2015-06-03 11:04:30'),
(30, 36, 4.00, 20.00, '0', '2015-06-03 11:09:19'),
(31, 37, 3.00, 20.00, '0', '2015-06-03 11:20:04'),
(32, 38, 10.00, 20.00, '0', '2015-06-03 11:30:23'),
(33, 39, 10.00, 20.00, '0', '2015-06-03 11:31:18'),
(34, 40, 5.00, 20.00, '0', '2015-06-03 11:33:36'),
(35, 41, 5.00, 20.00, '0', '2015-06-03 11:34:32'),
(36, 42, 3.00, 20.00, '0', '2015-06-03 11:54:34'),
(37, 43, 6.00, 20.00, '0', '2015-06-03 11:56:11'),
(38, 44, 2.00, 20.00, '0', '2015-06-03 11:57:56'),
(39, 45, 3.00, 20.00, '0', '2015-06-03 11:59:23'),
(40, 46, 2.00, 20.00, '0', '2015-06-03 11:59:52'),
(41, 47, 2.00, 20.00, '0', '2015-06-03 12:01:33'),
(42, 48, 4.00, 20.00, '0', '2015-06-03 12:04:46'),
(43, 49, 6.00, 20.00, '0', '2015-06-03 12:30:59'),
(44, 50, 2.00, 20.00, '0', '2015-06-03 12:31:59'),
(45, 51, 2.00, 20.00, '0', '2015-06-03 12:33:22'),
(46, 52, 2.00, 20.00, '0', '2015-06-03 12:34:18'),
(47, 53, 1.00, 20.00, '0', '2015-06-03 12:34:55'),
(48, 54, 2.00, 20.00, '0', '2015-06-03 12:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `esrowold`
--

CREATE TABLE IF NOT EXISTS `esrowold` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `send_amount` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `seller_aprovel` enum('1','0') NOT NULL DEFAULT '0',
  `add_date` datetime NOT NULL,
  `page_type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `esrowold`
--

INSERT INTO `esrowold` (`id`, `user_id`, `seller_id`, `send_amount`, `status`, `seller_aprovel`, `add_date`, `page_type`) VALUES
(1, 1, 5, '455', '0', '0', '2015-05-27 13:12:44', ''),
(2, 1, 7, '234', '0', '0', '2015-05-27 13:59:53', 'Send Money'),
(3, 1, 1, '5566', '0', '0', '2015-05-27 14:06:17', 'Send Money'),
(4, 1, 1, '12333', '0', '0', '2015-05-27 14:07:48', 'Send Money'),
(5, 1, 1, '454', '0', '0', '2015-05-28 10:56:40', 'Send Money'),
(6, 1, 0, '1030', '0', '0', '2015-05-28 13:50:35', 'Withdraw Money'),
(7, 1, 10, '342', '0', '0', '2015-05-28 13:51:38', 'Withdraw Money'),
(8, 1, 6, '69', '0', '0', '2015-05-28 13:52:38', 'Withdraw Money'),
(9, 1, 4, '571', '0', '0', '2015-05-28 13:53:32', 'Withdraw Money'),
(10, 1, 11, '126', '0', '0', '2015-05-28 13:54:34', 'Withdraw Money'),
(11, 1, 6, '45', '0', '0', '2015-05-28 13:56:24', 'Withdraw Money'),
(12, 1, 6, '33', '0', '0', '2015-05-28 13:56:48', 'Withdraw Money'),
(13, 5, 8, '', '0', '0', '2015-05-29 08:19:24', 'Withdraw Money'),
(14, 1, 0, '33', '0', '0', '2015-05-29 09:26:32', 'Send Money'),
(15, 1, 3, '23', '0', '0', '2015-05-29 09:28:10', 'Send Money'),
(16, 5, 8, '', '0', '0', '2015-05-29 11:33:32', 'Deposite Money'),
(17, 5, 0, 'yjuu', '0', '0', '2015-05-29 11:33:50', 'Deposite Money'),
(18, 5, 0, '789898', '0', '0', '2015-05-29 11:34:31', 'Deposite Money'),
(19, 5, 9, '', '0', '0', '2015-06-01 09:01:34', 'Deposite Money'),
(20, 5, 0, '777878', '0', '0', '2015-06-01 11:03:58', 'Deposite Money'),
(21, 5, 0, '20', '0', '0', '2015-06-02 08:35:21', 'Deposite Money'),
(22, 5, 0, '20', '0', '0', '2015-06-02 08:47:52', 'Deposite Money'),
(23, 5, 0, '', '0', '0', '2015-06-02 08:48:05', 'Deposite Money'),
(24, 5, 0, '', '0', '0', '2015-06-02 08:48:09', 'Deposite Money'),
(25, 5, 0, '', '0', '0', '2015-06-02 08:48:10', 'Deposite Money'),
(26, 5, 0, '', '0', '0', '2015-06-02 08:48:50', 'Deposite Money'),
(27, 5, 0, '', '0', '0', '2015-06-02 08:49:39', 'Deposite Money'),
(28, 5, 0, '', '0', '0', '2015-06-02 08:54:07', 'Deposite Money'),
(29, 5, 0, '', '0', '0', '2015-06-02 08:54:15', 'Deposite Money'),
(30, 5, 0, '', '0', '0', '2015-06-02 09:05:27', 'Deposite Money'),
(31, 5, 0, '', '0', '0', '2015-06-02 09:05:31', 'Deposite Money'),
(32, 5, 0, '', '0', '0', '2015-06-02 09:05:37', 'Deposite Money'),
(33, 5, 0, '', '0', '0', '2015-06-02 09:05:40', 'Deposite Money'),
(34, 5, 0, '', '0', '0', '2015-06-02 09:05:41', 'Deposite Money'),
(35, 5, 0, '', '0', '0', '2015-06-02 09:07:31', 'Deposite Money'),
(36, 5, 0, '', '0', '0', '2015-06-02 09:07:33', 'Deposite Money'),
(37, 5, 0, '', '0', '0', '2015-06-02 09:08:22', 'Deposite Money'),
(38, 5, 0, '', '0', '0', '2015-06-02 09:08:25', 'Deposite Money'),
(39, 5, 0, '', '0', '0', '2015-06-02 09:08:26', 'Deposite Money');

-- --------------------------------------------------------

--
-- Table structure for table `other_setting`
--

CREATE TABLE IF NOT EXISTS `other_setting` (
  `id` int(11) NOT NULL,
  `buyer_userid` int(11) NOT NULL,
  `setting_name` varchar(200) NOT NULL,
  `setting_value` enum('0','1') NOT NULL DEFAULT '1' COMMENT 'default value 1',
  `add_date` datetime NOT NULL,
  `page_type` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_setting`
--

INSERT INTO `other_setting` (`id`, `buyer_userid`, `setting_name`, `setting_value`, `add_date`, `page_type`) VALUES
(1, 1, 'search_trusted_users', '1', '2015-06-02 12:30:08', 'buy_coins');

-- --------------------------------------------------------

--
-- Table structure for table `press_release`
--

CREATE TABLE IF NOT EXISTS `press_release` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `add_date` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `press_release`
--

INSERT INTO `press_release` (`id`, `title`, `image`, `description`, `add_date`, `status`) VALUES
(1, 'TITLE OF THE PRESS RELEASE', 'blogpost1.jpg', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra', '2015-05-26 00:00:00', '1'),
(2, 'TITLE OF THE PRESS RELEASE 2', 'blogpost1.jpg', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,', '0000-00-00 00:00:00', '1'),
(3, 'TITLE OF THE PRESS RELEASE 3', 'blogpost1.jpg', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,', '0000-00-00 00:00:00', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sell_bit_coin`
--

CREATE TABLE IF NOT EXISTS `sell_bit_coin` (
  `id` int(11) NOT NULL,
  `seller_user_id` int(11) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `user_wallet` varchar(150) NOT NULL,
  `search_trusted_user` enum('0','1') NOT NULL DEFAULT '0',
  `buyer_user_id` int(11) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `buyer_aprovel` enum('1','0') NOT NULL DEFAULT '0',
  `passkey` varchar(150) NOT NULL DEFAULT '',
  `add_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell_bit_coin`
--

INSERT INTO `sell_bit_coin` (`id`, `seller_user_id`, `amount`, `user_wallet`, `search_trusted_user`, `buyer_user_id`, `status`, `buyer_aprovel`, `passkey`, `add_date`) VALUES
(1, 1, '123', 'CoinXoom Cash Wallet', '0', 2, '0', '0', '7f9d6810354658d7345ce1beca8cf734', '2015-05-25 12:39:54'),
(2, 1, '66666666', 'CoinXoom Cash Wallet', '0', 2, '0', '0', 'a2b414e3e7b94c5dd88217c43bfbbe8b', '2015-05-25 12:41:26'),
(3, 1, '66666666', 'CoinXoom Cash Wallet', '0', 2, '0', '0', '95a6fb87fc24634d1e550dc483065372', '2015-05-25 12:42:03'),
(4, 1, '', 'CoinXoom Cash Wallet', '0', 3, '0', '0', '350979fa500a9224d92623f5a3882534', '2015-05-25 12:42:18'),
(5, 1, '23', 'CoinXoom Cash Wallet', '0', 2, '0', '0', '67b7fba3157ce883355fa2da5565a80f', '2015-05-25 12:44:04'),
(6, 1, '56', 'CoinXoom Cash Wallet', '0', 3, '0', '0', 'cf7a920e5e189690beb72f998a88665a', '2015-05-25 13:10:40'),
(7, 1, '', 'CoinXoom Cash Wallet', '0', 0, '0', '0', '4c0b17414d188a6f5fe8b34d591cf31e', '2015-05-25 13:10:42'),
(8, 1, '123', 'CoinXoom Cash Wallet', '0', 2, '0', '0', '3cd5285ee0a807c9050803b1aaeb833f', '2015-05-25 13:18:33'),
(9, 1, '66666666', 'CoinXoom Cash Wallet', '0', 2, '0', '0', '0983cb25d793c3510544653d72b4b2d9', '2015-05-25 13:19:25'),
(10, 1, '22', 'CoinXoom Cash Wallet', '0', 3, '0', '0', '3976ae2e50a27f09746fd81238466c30', '2015-05-25 13:19:42'),
(11, 1, '', 'CoinXoom Cash Wallet', '0', 0, '0', '0', '73da07e6dfd24980e19ac62410b2b560', '2015-05-25 13:31:41'),
(12, 1, '', 'CoinXoom Cash Wallet', '0', 0, '0', '0', '5c08dcea67ab663eb2c116fdd4e53995', '2015-05-25 13:31:43'),
(13, 1, '', 'CoinXoom Cash Wallet', '0', 0, '0', '0', '38e5ab361d50253eb8d90b4c34c0aaf2', '2015-05-25 13:31:48'),
(14, 1, '', 'CoinXoom Cash Wallet', '0', 3, '0', '0', 'ac119686f68e460ef33d0d6ce7e1818f', '2015-05-25 13:31:54'),
(15, 5, '', 'CoinXoom Cash Wallet', '0', 9, '0', '0', '4ada5d5d1a9dc7a84f8bf56c4b0d5357', '2015-05-29 08:18:45'),
(16, 5, '', 'CoinXoom Cash Wallet', '0', 0, '0', '0', 'a3e320e3dd02d3c45dfb8814113a9d24', '2015-06-02 09:07:15');

-- --------------------------------------------------------

--
-- Table structure for table `send_money`
--

CREATE TABLE IF NOT EXISTS `send_money` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `send_form_wallet` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `search_trusted_user` varchar(200) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `seller_aprovel` enum('0','1') NOT NULL DEFAULT '0',
  `passkey` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `add_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send_money`
--

INSERT INTO `send_money` (`id`, `user_id`, `send_form_wallet`, `amount`, `search_trusted_user`, `seller_id`, `seller_aprovel`, `passkey`, `status`, `add_date`) VALUES
(1, 1, 'Bitcoin Wallet', '667', '', 3, '0', 'f65a0defe9f2c5a39517fb0115fa9ef0', '0', '2015-05-27 07:20:09'),
(2, 1, 'Cash Wallet', '234', '', 7, '0', '02d5adab16581f8b14360f99fee3fac4', '0', '2015-05-27 07:27:46'),
(3, 1, 'Cash Wallet', '23', '', 7, '0', '7816dfbc8c8ec8823b0d08c5165b987d', '0', '2015-05-27 07:33:04'),
(4, 1, 'Cash Wallet', 'ww', '', 6, '0', 'b34a244f1b5f7afa8cdf67fa8351731d', '0', '2015-05-27 07:35:03'),
(5, 1, 'Cash Wallet', '67', '', 5, '0', '376ae4b84461e8b7c007af266cab5db2', '0', '2015-05-27 07:38:45'),
(6, 1, 'Cash Wallet', '334', '', 5, '0', '6c7d18897cfc918fdbe444b15093d5b8', '0', '2015-05-27 07:42:59'),
(7, 1, 'Cash Wallet', '7878', '', 8, '0', '55585ae8bcdfcc7b84258aa26906baf7', '0', '2015-05-27 07:45:32'),
(8, 1, 'Bitcoin Wallet', '23', '', 7, '0', 'c1592fe477ab01332c49688bcdde5402', '0', '2015-05-27 07:52:23'),
(9, 1, 'Cash Wallet', '', '', 0, '0', '352a831849e899fc13be5b9567823e70', '0', '2015-05-27 07:53:46'),
(10, 1, 'Bitcoin Wallet', '34', '', 3, '0', 'c365a22686dc98d9e32dcb8d4d37114a', '0', '2015-05-27 07:55:03'),
(11, 1, 'Bitcoin Wallet', '', '', 2, '0', '34ae0bdec0d363ca029c590cd0b7355c', '0', '2015-05-27 08:14:07'),
(12, 1, 'Bitcoin Wallet', '', '', 2, '0', '4647f1873d6bf4a0717709db77e11d0f', '0', '2015-05-27 08:14:49'),
(13, 1, 'Bitcoin Wallet', '103', '', 7, '0', '6d59992bb17f7ea06006e9625669340e', '0', '2015-05-27 08:28:32'),
(14, 1, 'Cash Wallet', '678', '', 7, '0', '7b5349563c8094d5f0c6f301a1d510bd', '0', '2015-05-27 08:35:37'),
(15, 1, 'Bitcoin Wallet', '66666666', '', 7, '0', 'ea0ffbae64abfc432b3312a748deb71e', '0', '2015-05-27 08:49:22'),
(16, 1, 'Cash Wallet', '44444444444', '', 7, '0', '635f959dc019521904b2a0166714926a', '0', '2015-05-27 08:53:44'),
(17, 1, 'Bitcoin Wallet', '34', '', 6, '0', '88faedcf7e26160175ac2e3ee5f88bfa', '0', '2015-05-27 08:55:26'),
(18, 1, 'Cash Wallet', '34', '', 5, '0', '0212af7a7d53daf9b5f6abdff32ddde4', '0', '2015-05-27 08:56:31'),
(19, 1, 'Bitcoin Wallet', '345', '', 6, '0', 'be7405ba7c80011d4d3bd79f02f605ac', '0', '2015-05-27 08:58:02'),
(20, 1, 'Cash Wallet', '66666666', '', 1, '0', 'e80e5d394d47976c6e05a016e3172a09', '0', '2015-05-27 09:00:04'),
(21, 1, 'Bitcoin Wallet', '45', '', 5, '0', '9f0faeccc1b7c8f3c7342ce798e652d0', '0', '2015-05-27 09:02:40'),
(22, 1, 'Bitcoin Wallet', '22', '', 1, '0', '160a56f0af3bbd9564323cbbebcee0c0', '0', '2015-05-27 09:03:20'),
(23, 1, 'Bitcoin Wallet', '33', '', 3, '0', 'aa84b8692c56b9d0b7ef32af3455715a', '0', '2015-05-27 09:12:48'),
(24, 1, 'Bitcoin Wallet', '23', '', 6, '0', '9ff8f5c7b1d779e36378862a7a203e9b', '0', '2015-05-27 09:17:31'),
(25, 1, 'Bitcoin Wallet', '787', '', 1, '0', '259607ae306dfe2426bfd5ba135b095a', '0', '2015-05-27 09:18:28'),
(26, 1, 'Bitcoin Wallet', '66666666', '', 5, '0', 'd5433c803dab5cc137b80fe1a1c83aa1', '0', '2015-05-27 09:20:41'),
(27, 1, 'Bitcoin Wallet', '89', '', 5, '0', 'edaf85b98b122ef6c52bd52740031d2f', '0', '2015-05-27 09:21:33'),
(28, 1, 'Bitcoin Wallet', '78', '', 2, '0', '26d9bc9c5c41e17ad7f78045a6671aea', '0', '2015-05-27 09:22:03'),
(29, 1, 'Bitcoin Wallet', '45', '', 2, '0', '957c47573712c1acfbd9e6d2de8e7b6c', '0', '2015-05-27 09:22:41'),
(30, 1, 'Bitcoin Wallet', '455', '', 5, '0', '3b11e0d7435260f512367bf936727e0f', '0', '2015-05-27 13:12:44'),
(31, 1, 'Bitcoin Wallet', '234', '', 7, '0', '4747c17fdfd2b632431d11b182156296', '0', '2015-05-27 13:59:53'),
(32, 1, 'Cash Wallet', '5566', '', 1, '0', '0bcfdeabd81f20d597957c230b0e2310', '0', '2015-05-27 14:06:17'),
(33, 1, 'Bitcoin Wallet', '12333', '', 1, '0', '020c86a7537673539767a7c3f96241cf', '0', '2015-05-27 14:07:48'),
(34, 1, 'Cash Wallet', '454', '', 1, '0', 'fa9ed4272883bd31d9629d3d701b3cd0', '0', '2015-05-28 10:56:40'),
(35, 5, 'Cash Wallet', '', '', 0, '0', '5f9fa364f51a90639e211f8cb85a8787', '0', '2015-06-02 09:07:31'),
(36, 5, 'Cash Wallet', '', '', 0, '0', 'cc3c4c1b77c0cf4322f44cd69112bfeb', '0', '2015-06-02 09:07:33'),
(37, 5, 'Cash Wallet', '', '', 0, '0', '971613beae83df533c43af9625e1cf0e', '0', '2015-06-02 09:08:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Isdcode` varchar(5) NOT NULL,
  `Security_Code` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `AddDate` datetime NOT NULL,
  `UserIp` varchar(23) NOT NULL,
  `Cash_wallet` float(7,2) NOT NULL,
  `Coin_wallet` float(7,2) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `pic_upadte_date` date NOT NULL,
  `cash_withdraw_agent` enum('0','1') NOT NULL DEFAULT '1',
  `cash_deposit_agent` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `UserName`, `Email`, `Mobile`, `Isdcode`, `Security_Code`, `Password`, `AddDate`, `UserIp`, `Cash_wallet`, `Coin_wallet`, `profile_pic`, `pic_upadte_date`, `cash_withdraw_agent`, `cash_deposit_agent`) VALUES
(1, '', 'madhusmita', 'madhusmita.madhavi20@gmail.com', '', '', '', 'madhusmita', '2015-05-19 13:28:15', '::1', 6.00, 180.00, 'userdata/1/profile_pic/advis-3.jpg', '2015-05-25', '1', '1'),
(2, '', 'msmitam', 'madhusmita11@gmail.com', '57588', '234', '7057', 'msmitam', '2015-05-19 13:29:02', '::1', 510.00, 260.00, '', '0000-00-00', '1', '1'),
(3, '', 'madhu', 'madhu@gmail.com', '', '', '', 'madhu', '2015-05-19 13:29:46', '::1', 300.00, 240.00, '', '0000-00-00', '1', '1'),
(4, '', 'neha', 'neha@gmail.com', '', '', '', 'neha', '2015-05-19 13:31:09', '::1', 0.00, 0.00, 'userdata/4/profile_pic/crowsel3.jpg', '2015-05-27', '1', '0'),
(5, '', 'priyanka', 'priyankamadeshia1@gmail.com', '78980090', '989', '19879', 'priyanka', '2015-05-21 09:24:54', '127.0.0.1', 0.00, 0.00, 'userdata/5/profile_pic/In the office.jpg', '2015-05-26', '1', '0'),
(6, '', 'neha11', 'neha11@gmail.com', '6777', '7676', '29895', 'neha11', '2015-05-21 09:36:06', '127.0.0.1', 0.00, 0.00, '', '0000-00-00', '1', '0'),
(7, '', 'priya', 'priya@gmail.com', '', '', '', 'priya', '2015-05-22 07:31:58', '127.0.0.1', 0.00, 0.00, '', '0000-00-00', '1', '0'),
(8, '', 'pri', 'priyanka@gmail.com', '', '', '', 'pri', '2015-05-22 07:32:42', '127.0.0.1', 0.00, 0.00, '', '0000-00-00', '1', '0'),
(9, '', 'pria', 'priyas@gmail.com', '', '', '', 'pri', '2015-05-22 07:37:26', '127.0.0.1', 0.00, 0.00, '', '0000-00-00', '1', '0'),
(10, '', 'sunanda', 'sunanda@gmail.com', '', '', '', 'sunanda', '2015-05-27 12:51:42', '127.0.0.1', 0.00, 0.00, '', '0000-00-00', '1', '0'),
(11, '', 'sunada', 'sunada@gmail.com', '', '', '', 'sunada', '2015-05-27 12:53:20', '127.0.0.1', 0.00, 0.00, '', '0000-00-00', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user_account_setting`
--

CREATE TABLE IF NOT EXISTS `user_account_setting` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `trusted_network` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0=>disable , 1=>enable',
  `cash_deposite_agent` enum('0','1') NOT NULL DEFAULT '0',
  `cash_withdraw_agent` enum('0','1') NOT NULL DEFAULT '0',
  `notification` enum('0','1') NOT NULL DEFAULT '0',
  `add_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_account_setting`
--

INSERT INTO `user_account_setting` (`id`, `userid`, `trusted_network`, `cash_deposite_agent`, `cash_withdraw_agent`, `notification`, `add_date`) VALUES
(1, 1, '0', '0', '0', '0', '2015-05-19 13:28:15'),
(2, 2, '0', '0', '0', '0', '2015-05-19 13:29:02'),
(3, 3, '1', '1', '0', '0', '2015-05-19 13:29:46'),
(4, 4, '1', '0', '0', '0', '2015-05-19 13:31:09'),
(5, 5, '1', '1', '1', '1', '2015-05-21 09:24:54'),
(6, 6, '0', '0', '0', '0', '2015-05-21 09:36:06'),
(7, 7, '0', '0', '0', '0', '2015-05-22 07:31:58'),
(8, 8, '0', '0', '0', '0', '2015-05-22 07:32:42'),
(9, 9, '0', '0', '0', '0', '2015-05-22 07:37:26'),
(10, 10, '0', '0', '0', '0', '2015-05-27 12:51:42'),
(11, 11, '0', '0', '0', '0', '2015-05-27 12:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_network`
--

CREATE TABLE IF NOT EXISTS `user_network` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `parentid` int(11) NOT NULL,
  `adddate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_network`
--

INSERT INTO `user_network` (`id`, `userid`, `parentid`, `adddate`) VALUES
(2, 1, 0, '2015-05-19 13:28:15'),
(3, 2, 1, '2015-05-19 13:29:02'),
(4, 3, 1, '2015-05-19 13:29:46'),
(5, 4, 3, '2015-05-19 13:31:09'),
(6, 5, 0, '2015-05-21 09:24:54'),
(7, 6, 2, '2015-05-21 09:36:06'),
(8, 7, 0, '2015-05-22 07:31:59'),
(9, 8, 0, '2015-05-22 07:32:42'),
(10, 9, 5, '2015-05-22 07:37:26'),
(11, 10, 0, '2015-05-27 12:51:42'),
(12, 11, 0, '2015-05-27 12:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_verification`
--

CREATE TABLE IF NOT EXISTS `user_verification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email_verification` enum('N','Y') NOT NULL DEFAULT 'N',
  `mobile_verification` enum('N','Y') NOT NULL DEFAULT 'N',
  `add_date` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_verification`
--

INSERT INTO `user_verification` (`id`, `user_id`, `email_verification`, `mobile_verification`, `add_date`) VALUES
(1, 5, 'Y', 'Y', '2015-05-27 00:00:00'),
(2, 11, 'Y', 'N', '2015-05-27 12:53:20'),
(3, 2, 'N', 'Y', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE IF NOT EXISTS `withdraw` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` float(7,2) NOT NULL,
  `transation_fee` float(7,2) NOT NULL,
  `total_amount` float(7,2) NOT NULL,
  `withdraw_type` varchar(200) NOT NULL,
  `search_trusted_user` enum('0','1') NOT NULL DEFAULT '0',
  `agent_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `seller_aprovel` enum('0','1') NOT NULL DEFAULT '0',
  `passkey` varchar(200) NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `user_id`, `amount`, `transation_fee`, `total_amount`, `withdraw_type`, `search_trusted_user`, `agent_id`, `status`, `seller_aprovel`, `passkey`, `add_date`) VALUES
(1, 1, 99999.99, 444.00, 88989.00, '1', '0', 7, '0', '0', 'b82e696a380cc1309d35ef740faeb547', '2015-05-28 10:25:51'),
(2, 1, 99999.99, 444.00, 88989.00, '1', '0', 3, '0', '0', '47f51835a10a46f221be59dd5f8f0bb5', '2015-05-28 11:05:24'),
(3, 5, 0.00, 0.00, 0.00, '1', '0', 0, '0', '0', 'edd8b7a1d32b8d54e4481e3dee48fa5a', '2015-05-28 12:13:53'),
(4, 1, 6.00, 6.00, 12.00, '1', '0', 1, '0', '0', 'ed6f6781a2a93a4c6bd37c6b264a2c14', '2015-05-28 12:14:13'),
(5, 1, 34.00, 1.02, 35.00, '1', '0', 5, '0', '0', '613186b0ae7f0beb7781c30975054240', '2015-05-28 13:33:48'),
(6, 1, 1000.00, 30.00, 1030.00, '1', '0', 2, '0', '0', 'd01e0481f19935ae651824c81e18345c', '2015-05-28 13:50:35'),
(7, 1, 333.00, 9.99, 342.00, '1', '0', 10, '0', '0', '510b6d09151d2f74ae262fd3f0c149cc', '2015-05-28 13:51:38'),
(8, 1, 67.00, 2.01, 69.00, '1', '0', 6, '0', '0', '23f29e8dd5d579a121cacf4f92ab348a', '2015-05-28 13:52:38'),
(9, 1, 555.00, 16.65, 571.00, '1', '0', 4, '0', '0', '195d441efba22c7baa30ae56a92a4a2b', '2015-05-28 13:53:32'),
(10, 1, 123.00, 3.69, 126.00, '1', '0', 11, '0', '0', 'ae9e5175db6484dcacc5d5e7095825a4', '2015-05-28 13:54:33'),
(11, 1, 44.00, 1.32, 45.00, '1', '0', 6, '0', '0', 'e3a1719fdd708ba547693259d18b664a', '2015-05-28 13:56:22'),
(12, 1, 33.00, 0.99, 33.00, '1', '0', 6, '0', '0', '624eddafc831c1359550b6b9eb965098', '2015-05-28 13:56:48'),
(13, 5, 0.00, 0.00, 0.00, '1', '0', 8, '0', '0', 'b69f4970a743563548e4a6bc4d48c285', '2015-05-29 08:19:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_name`
--
ALTER TABLE `bank_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_bit_coin`
--
ALTER TABLE `buy_bit_coin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cash_deposite_agent`
--
ALTER TABLE `cash_deposite_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposite_bank`
--
ALTER TABLE `deposite_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `escrow`
--
ALTER TABLE `escrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esrowold`
--
ALTER TABLE `esrowold`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_setting`
--
ALTER TABLE `other_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press_release`
--
ALTER TABLE `press_release`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_bit_coin`
--
ALTER TABLE `sell_bit_coin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_money`
--
ALTER TABLE `send_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_account_setting`
--
ALTER TABLE `user_account_setting`
  ADD PRIMARY KEY (`id`), ADD KEY `userid` (`userid`);

--
-- Indexes for table `user_network`
--
ALTER TABLE `user_network`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_verification`
--
ALTER TABLE `user_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_name`
--
ALTER TABLE `bank_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buy_bit_coin`
--
ALTER TABLE `buy_bit_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cash_deposite_agent`
--
ALTER TABLE `cash_deposite_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deposite_bank`
--
ALTER TABLE `deposite_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `escrow`
--
ALTER TABLE `escrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `esrowold`
--
ALTER TABLE `esrowold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `other_setting`
--
ALTER TABLE `other_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `press_release`
--
ALTER TABLE `press_release`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sell_bit_coin`
--
ALTER TABLE `sell_bit_coin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `send_money`
--
ALTER TABLE `send_money`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_account_setting`
--
ALTER TABLE `user_account_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_network`
--
ALTER TABLE `user_network`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_verification`
--
ALTER TABLE `user_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
