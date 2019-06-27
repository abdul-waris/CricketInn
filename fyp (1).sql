-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:1800
-- Generation Time: Oct 04, 2018 at 09:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'admin',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Haziq', 'haziq1@gmail.com', '$2y$10$ZgH/LFlbAQgHP3rhUx1f.ucSwtt6IKzH6n1G.4u9fX6EyuiK0KqPm', 'admin', 'gHdjffLg6gLCeFfVTDQCROkVurLv8afdvQODxJSC1MR4iUagmRKguCJuzpPm', '2018-03-26 08:10:51', '2018-03-26 08:10:51'),
(2, 'haziq', 'muhammadhazii001@gmail.com', '$2y$10$68gDTCld7CPscvtnM1eAo.4tdJqsN5OXCCysILbm3Q1H7Bz5f0rbG', 'admin', NULL, '2018-03-16 05:04:16', '2018-03-16 05:04:16'),
(3, 'haziq', 'muhammadhazii002@gmail.com', '$2y$10$5u.w3jtncKCE24unBSHRruXIbrns9c9/7.HldBHrSXWRQf1mJOR/u', 'admin', NULL, '2018-03-16 05:07:22', '2018-03-16 05:07:22'),
(4, 'haziq', 'muhammadhaziq341@gmail.com', '$2y$10$GOAxRWGmEvUMj9YZuQSvb..8f4OGphVzfh8B7S/hcqDrxNPly8z9m', 'admin', NULL, '2018-03-16 05:08:36', '2018-03-16 05:08:36'),
(5, 'haziq', 'muhammadhaziq342@gmail.com', '$2y$10$169CGlHN.GadkvNREM/BZ.kFlqEQdjs4dcmLaewonaDaACRMLO4ZC', 'admin', NULL, '2018-03-16 05:09:42', '2018-03-16 05:09:42'),
(6, 'haziq', 'muhammadhazii003@gmail.com', '$2y$10$q6Ap/Y.OQXrKoAzuONMH/en58VDBYwSW8rtouUV3p4ZxDsT96Ccyi', 'admin', NULL, '2018-03-16 05:12:39', '2018-03-16 05:12:39'),
(7, 'haziq', 'muhammadhazii004@gmail.com', '$2y$10$vh0DRTI6zj/05leeW/Skku3F9tyen1iIYIT527KvPHmFYi9sQlzsK', 'admin', NULL, '2018-03-16 05:15:23', '2018-03-16 05:15:23'),
(8, 'haziq', 'muhammadhazii005@gmail.com', '$2y$10$Og3w2GiqovFLyoF1KY4LMuMO7pLST9Y/WafJnwyNbLvEIoKyWibEu', 'admin', NULL, '2018-03-16 05:20:06', '2018-03-16 05:20:06'),
(9, 'Haziq', 'haziq008@gmail.com', '$2y$10$.RdSEOg8vG1.3JvcRJ12peRCXKSbVM8K/GsJZonQS7e/Wsi1LgZr2', 'admin', NULL, '2018-03-25 23:41:58', '2018-03-25 23:41:58');

-- --------------------------------------------------------

--
-- Table structure for table `groundbooks`
--

CREATE TABLE `groundbooks` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `opponent_teamname` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `ground_id` int(10) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `overs` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `duration` date DEFAULT NULL,
  `payment` enum('pay','non_pay') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groundbooks`
--

INSERT INTO `groundbooks` (`id`, `user_id`, `admin_id`, `team_name`, `opponent_teamname`, `address`, `city`, `state`, `province`, `status`, `cnic`, `ground_id`, `time`, `overs`, `start_date`, `end_date`, `duration`, `payment`, `created_at`, `updated_at`) VALUES
(12, 2, NULL, 'Pakistan', 'England', 'house no 2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 2, NULL, 20, '2018-02-07', '2018-02-07', NULL, NULL, '2018-03-14 19:28:32', '2018-03-14 19:28:32'),
(13, 2, NULL, 'Pakistan', 'Pakistani', 'houseno2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 20, '2018-02-08', '2018-02-08', NULL, NULL, '2018-03-14 19:28:32', '2018-03-14 19:28:32'),
(17, NULL, 1, 'Pakistan', 'Pakistani', 'houseno2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-03-01', '2018-03-01', NULL, NULL, '2018-03-14 19:28:32', '2018-03-14 19:28:32'),
(18, NULL, 1, 'Pakistan', 'Pakistani', 'houseno2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 2, NULL, 20, '2018-02-15', '2018-02-15', NULL, NULL, '2018-03-14 19:28:32', '2018-03-14 19:28:32'),
(19, NULL, 1, 'Pakistan', 'Pakistani', 'houseno2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-02-16', '2018-02-17', '2018-02-16', NULL, '2018-03-14 19:28:32', '2018-03-14 19:28:32'),
(20, NULL, 1, 'Pakistan', 'Pakistani', 'houseno2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-02-16', '2018-02-17', '2018-02-17', 'pay', '2018-07-05 09:47:52', '2018-07-05 09:47:52'),
(26, 2, NULL, 'Pakistani', 'Pakistan', 'house-no-2', 'lahore', 'pakistan', '', 'user', '35202-4446561-5', 1, NULL, 0, '2018-02-18', '2018-02-19', '2018-02-18', NULL, '2018-03-14 19:28:32', '2018-03-14 19:28:32'),
(27, 2, NULL, 'Pakistani', 'Pakistan', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 0, '2018-02-18', '2018-02-19', '2018-02-19', NULL, '2018-02-16 18:26:05', '2018-02-16 18:26:05'),
(28, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 0, '2018-02-20', '2018-02-20', '2018-02-20', NULL, '2018-02-16 19:11:43', '2018-02-16 19:11:43'),
(29, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 0, '2018-02-21', '2018-02-21', '2018-02-21', NULL, '2018-02-16 19:20:38', '2018-02-16 19:20:38'),
(30, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 2, NULL, 0, '2018-02-22', '2018-02-22', '2018-02-22', NULL, '2018-02-18 17:44:09', '2018-02-18 17:44:09'),
(31, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 0, '2018-03-09', '2018-03-09', '2018-03-09', NULL, '2018-03-09 05:59:05', '2018-03-09 05:59:05'),
(32, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 2, NULL, 20, '2018-03-15', '2018-03-15', '2018-03-15', NULL, '2018-03-14 19:33:45', '2018-03-14 19:33:45'),
(33, NULL, 1, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-03-16', '2018-03-16', '2018-03-16', NULL, '2018-03-14 19:41:54', '2018-03-14 19:41:54'),
(35, NULL, 1, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-03-23', '2018-03-23', '2018-03-23', NULL, '2018-03-23 19:41:54', '2018-03-23 19:41:54'),
(36, NULL, 1, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-03-23', '2018-03-23', '2018-03-23', NULL, '2018-03-22 19:41:54', '2018-03-22 19:41:54'),
(38, NULL, 1, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, NULL, 20, '2018-03-24', '2018-03-25', '2018-03-25', NULL, '2018-03-22 19:41:54', '2018-03-22 19:41:54'),
(39, 2, NULL, 'Pakistan', 'India', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 20, '2018-04-14', '2018-04-15', '2018-04-15', NULL, '2018-04-14 03:39:00', '2018-04-14 03:39:00'),
(40, 2, NULL, 'Pakistan', 'India', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 20, '2018-04-14', '2018-04-15', '2018-04-15', NULL, '2018-04-14 03:39:00', '2018-04-14 03:39:00'),
(41, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-08', '2018-05-10', '2018-05-08', NULL, '2018-05-08 19:09:41', '2018-05-08 19:09:41'),
(42, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-08', '2018-05-10', '2018-05-09', NULL, '2018-05-08 19:09:41', '2018-05-08 19:09:41'),
(43, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-08', '2018-05-10', '2018-05-10', NULL, '2018-05-08 19:09:41', '2018-05-08 19:09:41'),
(44, 2, NULL, 'Pakistan', 'India', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-28', '2018-05-31', '2018-05-28', NULL, '2018-05-28 18:13:40', '2018-05-28 18:13:40'),
(45, 2, NULL, 'Pakistan', 'India', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-28', '2018-05-31', '2018-07-29', NULL, '2018-07-13 20:27:04', '2018-07-13 20:27:04'),
(46, 2, NULL, 'Pakistan', 'India', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-28', '2018-05-31', '2018-07-29', NULL, '2018-07-13 20:27:19', '2018-07-13 20:27:19'),
(47, 2, NULL, 'Pakistan', 'India', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-05-28', '2018-05-31', '2018-05-31', NULL, '2018-05-28 18:13:41', '2018-05-28 18:13:41'),
(48, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-02', '2018-07-03', '2018-07-02', NULL, '2018-07-02 10:03:56', '2018-07-02 10:03:56'),
(49, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-02', '2018-07-03', '2018-07-03', NULL, '2018-07-02 10:03:56', '2018-07-02 10:03:56'),
(50, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-04', '2018-07-04', '2018-07-04', NULL, '2018-07-02 10:04:58', '2018-07-02 10:04:58'),
(51, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-05', '2018-07-05', '2018-07-05', NULL, '2018-07-02 10:19:25', '2018-07-02 10:19:25'),
(52, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 2, NULL, 50, '2018-07-06', '2018-07-06', '2018-07-06', NULL, '2018-07-02 10:25:36', '2018-07-02 10:25:36'),
(53, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 2, NULL, 50, '2018-07-07', '2018-07-07', '2018-07-07', NULL, '2018-07-02 10:27:40', '2018-07-02 10:27:40'),
(54, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-08', '2018-07-08', '2018-07-08', NULL, '2018-07-02 10:28:53', '2018-07-02 10:28:53'),
(55, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-10', '2018-07-10', '2018-07-10', 'non_pay', '2018-07-04 08:52:38', '2018-07-04 08:52:38'),
(56, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-11', '2018-07-11', '2018-07-11', 'pay', '2018-07-04 09:37:18', '2018-07-04 09:37:18'),
(57, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-12', '2018-07-12', '2018-07-12', 'pay', '2018-07-05 05:50:32', '2018-07-05 05:50:32'),
(58, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-13', '2018-07-13', '2018-07-13', 'non_pay', '2018-07-05 06:03:13', '2018-07-05 06:03:13'),
(59, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, NULL, 50, '2018-07-14', '2018-07-14', '2018-07-14', 'pay', '2018-07-05 06:04:43', '2018-07-05 06:04:43'),
(60, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:13:20', '2018-07-26 10:13:20'),
(61, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:24:10', '2018-07-26 10:24:10'),
(62, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:24:24', '2018-07-26 10:24:24'),
(63, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:25:04', '2018-07-26 10:25:04'),
(64, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:25:50', '2018-07-26 10:25:50'),
(65, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:29:23', '2018-07-26 10:29:23'),
(66, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:29:27', '2018-07-26 10:29:27'),
(67, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 1, '2PM-4:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 10:35:08', '2018-07-26 10:35:08'),
(68, 2, NULL, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 2, '11AM-1:30PM', 20, '2018-07-26', '2018-07-26', '2018-07-26', 'non_pay', '2018-07-26 19:54:53', '2018-07-26 19:54:53'),
(69, NULL, 9, 'Pakistan', 'Pakistani', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 1, '11AM-1:30PM', 20, '2018-08-16', '2018-08-16', '2018-08-16', NULL, '2018-08-16 10:24:17', '2018-08-16 10:24:17'),
(70, NULL, 1, 'England', 'Pakistani', 'Samanabad', 'lahore', 'pakistan', 'punjab', 'admin', '35202-4446561-5', 3, '8AM-10:30AM', 20, '2018-08-17', '2018-08-17', '2018-08-17', NULL, '2018-08-16 19:28:23', '2018-08-16 19:28:23'),
(71, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'Lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 23, '11AM-1:30PM', 20, '2018-08-31', '2018-09-01', '2018-08-31', 'pay', '2018-08-31 09:35:27', '2018-08-31 09:35:27'),
(72, 2, NULL, 'Pakistan', 'England', 'house-no-2', 'Lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 23, '11AM-1:30PM', 20, '2018-08-31', '2018-09-01', '2018-09-01', 'non_pay', '2018-08-31 09:33:57', '2018-08-31 09:33:57'),
(73, 5, NULL, 'Pakistan', 'Austrila', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, '8AM-1:00PM', 300, '2018-09-29', '2018-09-30', '2018-09-29', 'non_pay', '2018-09-29 12:25:24', '2018-09-29 12:25:24'),
(74, 5, NULL, 'Pakistan', 'Austrila', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, '8AM-1:00PM', 300, '2018-10-03', '2018-10-03', '2018-10-03', 'pay', '2018-10-03 08:19:01', '2018-10-03 08:19:01'),
(75, 2, NULL, 'England', 'Austrila', 'house-no-3', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 2, '8PM-10:30PM', 20, '2018-09-30', '2018-09-30', '2018-09-30', 'non_pay', '2018-09-30 10:59:53', '2018-09-30 10:59:53'),
(76, 9, NULL, 'lahore qalander', 'England', 'house-no-1', 'lahore', 'Pakistan', 'punjab', 'user', '35202-4446561-5', 14, '8PM-10:30PM', 20, '2018-10-04', '2018-10-04', '2018-10-04', 'pay', '2018-10-04 09:36:56', '2018-10-04 09:36:56'),
(77, 2, NULL, 'Pakistan', 'Austrila', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 7, '8AM-1:00PM', 300, '2018-10-04', '2018-10-05', '2018-10-04', 'non_pay', '2018-10-04 09:52:31', '2018-10-04 09:52:31'),
(78, 2, NULL, 'Pakistan', 'Austrila', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 7, '8AM-1:00PM', 300, '2018-10-04', '2018-10-05', '2018-10-05', 'non_pay', '2018-10-04 09:52:31', '2018-10-04 09:52:31'),
(79, 2, NULL, 'Pakistani', 'Austrila', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, '8AM-1:00PM', 300, '2018-10-04', '2018-10-05', '2018-10-04', 'non_pay', '2018-10-04 09:53:49', '2018-10-04 09:53:49'),
(80, 2, NULL, 'Pakistani', 'Austrila', 'house-no-2', 'lahore', 'pakistan', 'punjab', 'user', '35202-4446561-5', 1, '8AM-1:00PM', 300, '2018-10-04', '2018-10-05', '2018-10-05', 'non_pay', '2018-10-04 09:53:49', '2018-10-04 09:53:49');

-- --------------------------------------------------------

--
-- Table structure for table `livescores`
--

CREATE TABLE `livescores` (
  `id` int(11) NOT NULL,
  `match_id` int(11) DEFAULT NULL,
  `batting_team` varchar(255) DEFAULT NULL,
  `player1` varchar(255) DEFAULT NULL,
  `run1` int(11) DEFAULT NULL,
  `player2` varchar(255) DEFAULT NULL,
  `run2` int(11) DEFAULT NULL,
  `bowler` varchar(255) DEFAULT NULL,
  `no_of_ball` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `livescores`
--

INSERT INTO `livescores` (`id`, `match_id`, `batting_team`, `player1`, `run1`, `player2`, `run2`, `bowler`, `no_of_ball`, `created_at`, `updated_at`) VALUES
(1, 13, NULL, 'haziq', NULL, NULL, NULL, NULL, NULL, '2018-05-10 18:25:55', '2018-05-03 04:41:12'),
(2, 13, NULL, 'haziq', NULL, NULL, NULL, NULL, NULL, '2018-05-10 18:25:56', '2018-05-03 04:43:15'),
(3, 13, NULL, 'haziq', 2, 'hamza', 2, 'bilal', 1, '2018-05-10 18:25:56', '2018-05-03 04:46:36'),
(4, 13, NULL, 'haziq', 3, 'hamza', 2, 'bilal', 2, '2018-05-10 18:25:56', '2018-05-03 04:47:10'),
(5, 13, NULL, 'rizwan', 3, 'bilal', 3, 'ali', 2, '2018-05-10 18:25:56', '2018-05-07 23:13:21'),
(6, 43, NULL, 'haziq', 2, 'Hamza', 4, 'BILAL', 3, '2018-05-10 13:40:09', '2018-05-10 13:40:09'),
(7, 43, NULL, 'haziq', 4, 'hamza', 6, 'bilal', 6, '2018-05-10 19:34:43', '0000-00-00 00:00:00'),
(8, 43, NULL, 'haziq', 4, 'hamza', 6, 'bilal', 6, '2018-05-10 19:34:49', '0000-00-00 00:00:00'),
(9, 43, NULL, 'haziq', 5, 'hamza', 6, 'bilal', 4, '2018-05-14 13:40:54', '2018-05-14 13:40:54'),
(10, 43, NULL, 'haziq', 5, 'hamza', 6, 'BILAL', 5, '2018-05-14 13:46:35', '2018-05-14 13:46:35'),
(11, 69, 'None', 'haziq', 2, 'hamza', 3, 'bilal', 3, '2018-08-16 05:25:02', '2018-08-16 05:25:02'),
(12, 69, 'None', 'haziq', 3, 'hamza', 4, 'bilal', 4, '2018-08-16 05:25:40', '2018-08-16 05:25:40'),
(13, 69, 'None', 'haziq', 5, 'hamza', 5, 'bilal', 5, '2018-08-16 12:12:14', '2018-08-16 12:12:14'),
(14, 69, 'None', 'haziq', 6, 'hamza', 5, 'bilal', 6, '2018-08-16 12:14:09', '2018-08-16 12:14:09'),
(15, 74, 'Austrila', 'hzaiq', 2, 'umar', 2, 'bilal', 2, '2018-09-29 07:46:04', '2018-09-29 07:46:04'),
(16, 74, 'Pakistan', 'hzaiq', 2, 'umar', 2, 'bilal', 2, '2018-09-29 07:46:34', '2018-09-29 07:46:34'),
(17, 73, 'Austrila', 'haziq', 3, 'hamza', 3, 'bilal', 2, '2018-09-29 07:50:26', '2018-09-29 07:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(58, '2014_10_12_000000_create_users_table', 1),
(59, '2014_10_12_100000_create_password_resets_table', 1),
(60, '2017_09_19_073722_create_admins_table', 1),
(61, '2017_10_03_201112_create_postnews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newgroundregister`
--

CREATE TABLE `newgroundregister` (
  `id` int(11) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `groundname` varchar(255) DEFAULT NULL,
  `ownername` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `cnic` varchar(15) DEFAULT NULL,
  `groundrate` int(11) DEFAULT NULL,
  `electricityrate` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newgroundregister`
--

INSERT INTO `newgroundregister` (`id`, `admin_id`, `groundname`, `ownername`, `address`, `city`, `province`, `state`, `cnic`, `groundrate`, `electricityrate`, `created_at`, `updated_at`) VALUES
(1, 1, 'jazz', 'haziq', 'houseno2', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-02-14 12:07:28', '2018-02-14 19:13:55'),
(2, 1, 'jazz', 'haziq', 'houseeno2', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-02-14 12:08:20', '2018-02-14 19:13:55'),
(3, 1, 'Butt', 'Haziq', 'house-no-2', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 14:30:06', '2018-08-06 14:30:06'),
(7, 1, 'samanabad', 'Haziq', 'house-no-3', 'Lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 15:13:28', '2018-08-06 15:13:28'),
(11, 1, 'samanabad', 'Haziq', 'house-no-4', 'Lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 15:20:47', '2018-08-06 15:20:47'),
(12, 1, 'samanabad', 'Haziq', 'house-no-6', 'Lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 15:21:38', '2018-08-06 15:21:38'),
(13, 1, 'samanabad', 'Haziq', 'house-no-5', 'Lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 15:22:39', '2018-08-06 15:22:39'),
(14, 1, 'samanabad', 'Haziq', 'house-no-1', 'Lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 15:23:16', '2018-08-06 15:23:16'),
(15, 1, 'samanabad', 'Haziq', 'house-no-8', 'Lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-06 15:24:53', '2018-08-06 15:24:53'),
(16, 1, 'Butt', 'Haziq', 'Samanabad', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 4000, 1000, '2018-08-07 14:56:35', '2018-08-07 14:56:35'),
(17, 1, 'Butt', 'Haziq', 'Samanabad1', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 4000, 1000, '2018-08-07 14:59:05', '2018-08-07 14:59:05'),
(18, 1, 'Butt', 'Haziq', 'Samanabad2', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 4000, 1000, '2018-08-07 15:01:23', '2018-08-07 15:01:23'),
(19, 1, 'Butt', 'Haziq', 'Samanabad3', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 4000, 1000, '2018-08-07 15:02:19', '2018-08-07 15:02:19'),
(20, 1, 'Butt', 'Haziq', 'Samanabad4', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 4000, 1000, '2018-08-07 15:05:06', '2018-08-07 15:05:06'),
(21, 1, 'Butt', 'Haziq', 'Samanabad5', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 4000, 1000, '2018-08-07 15:17:51', '2018-08-07 15:17:51'),
(22, 1, 'Butt', 'Haziq', 'Samanabad7', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-08 12:47:48', '2018-08-08 12:47:48'),
(23, 1, 'Butt', 'Haziq', 'Samanabad8', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-08 12:48:37', '2018-08-08 12:48:37'),
(24, 1, 'Butt', 'Haziq', 'Samanabad9', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-08 12:49:38', '2018-08-08 12:49:38'),
(25, 1, 'Butt', 'Haziq', 'Samanabad10', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-08 12:51:34', '2018-08-08 12:51:34'),
(26, 1, 'Butt', 'Haziq', 'Samanabad11', 'lahore', 'punjab', 'pakistan', '35202-4446561-5', 2000, 2000, '2018-08-08 12:52:27', '2018-08-08 12:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` binary(250) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `notifiable` varchar(255) DEFAULT NULL,
  `notifiable_id` int(11) DEFAULT NULL,
  `notifiable_type` varchar(255) DEFAULT NULL,
  `data` text,
  `date` text,
  `read_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable`, `notifiable_id`, `notifiable_type`, `data`, `date`, `read_at`, `created_at`, `updated_at`) VALUES
(0x30343334356261302d616539632d343534392d386333302d30366266346236613931656200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"zxa\",\"des\":\"ASA\",\"admin_id\":1},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, '2018-09-05 19:00:00', '2018-09-06 13:08:25', '2018-09-06 18:28:17'),
(0x30373364613464342d333833382d343837622d613566342d61386266303738613035346500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:54:04\",\"created_at\":\"2018-08-31 07:54:04\",\"id\":74},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, '2018-09-06 19:00:00', '2018-08-31 02:54:06', '2018-09-06 18:28:41'),
(0x30396638346434382d383030382d343735372d393732622d64313665633230386463636400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"hahas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:03:39\",\"created_at\":\"2018-09-11 19:03:39\",\"id\":77},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-09-11 14:03:39', '2018-09-11 14:03:39'),
(0x31316236326161362d626333322d343864372d393065632d65343137336332323530623100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"g\",\"des\":\"j\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2017-12-30 07:47:09', '2018-09-11 13:59:34'),
(0x31356634363030352d666233342d346366302d616436392d63386332663234643437316400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, NULL, '2018-10-04 02:10:42', '2018-10-04 02:10:42'),
(0x31386436386433632d376534632d343136392d396539612d63646464656332333536633100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"England\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2018-01-26 12:13:41', '2018-09-11 14:00:24'),
(0x31613963313464332d613836612d346536312d393630302d66646265346561323537373700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x31626336663966312d616433342d346233642d623639622d36396161633065653562623900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"huura\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:17\",\"created_at\":\"2018-09-11 19:02:17\",\"id\":75},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:03:49', '2018-09-11 14:02:17', '2018-09-11 14:03:49'),
(0x31633038666436392d633230612d343862312d383730612d63303631633535376437623400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"haa\",\"des\":\"j\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2017-12-30 07:46:06', '2018-09-11 13:59:34'),
(0x31633730383862622d616164612d343966642d393634302d37616261373136313835333400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"a\",\"news\":\"s\",\"des\":\"d\",\"admin_id\":1,\"updated_at\":\"2017-12-21 09:48:50\",\"created_at\":\"2017-12-21 09:48:50\",\"id\":57},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hazma@gmail.com\",\"created_at\":\"2017-12-19 09:50:16\",\"updated_at\":\"2017-12-19 09:50:16\"}}', NULL, '2018-09-11 14:00:25', '2017-12-21 04:48:50', '2018-09-11 14:00:25'),
(0x31646563306636302d636233332d343461302d626538342d64373232656636363564626600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:54:04\",\"created_at\":\"2018-08-31 07:54:04\",\"id\":74},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-08-31 02:54:07', '2018-08-31 02:54:07'),
(0x31656435376166382d323732642d343936362d393438622d35356265666365363033376200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:52:31\",\"created_at\":\"2018-08-31 07:52:31\",\"id\":73},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-08-31 02:52:31', '2018-09-11 13:59:34'),
(0x32313136373631392d613465332d343262302d623735332d31663137346437373734366600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:52:31\",\"created_at\":\"2018-08-31 07:52:31\",\"id\":73},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-08-31 02:52:31', '2018-08-31 02:52:31'),
(0x32333135343861352d366233342d346535662d386530372d38383337386666663933326500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 7, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":7,\"name\":\"Asif\",\"email\":\"Asif@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-01 16:35:04\",\"updated_at\":\"2018-10-01 16:35:04\"}}', NULL, NULL, '2018-10-04 02:10:43', '2018-10-04 02:10:43'),
(0x32363764356435352d336436362d343035632d383334392d63353462356439353337333700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"England\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1,\"updated_at\":\"2018-01-26 17:19:08\",\"created_at\":\"2018-01-26 17:19:08\",\"id\":66},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2018-01-26 12:19:08', '2018-09-11 14:00:24'),
(0x32363930333938382d383161612d346638382d393836342d61363138616633373763313600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"haa\",\"des\":\"j\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2017-12-30 07:30:51', '2018-09-11 14:00:24'),
(0x32373463663537652d326266352d346437302d626234332d66363465636330396261333100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, NULL, '2018-10-04 02:10:42', '2018-10-04 02:10:42'),
(0x32383438346563352d636365312d346664382d393562632d34326134653130306139636200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"e\",\"des\":\"e\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:25', '2017-12-30 07:29:34', '2018-09-11 14:00:25'),
(0x32613633646464642d613163372d343364352d383036392d32303064333664303834643800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:52:31\",\"created_at\":\"2018-08-31 07:52:31\",\"id\":73},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-08-31 02:52:31', '2018-09-11 14:00:23'),
(0x32623063346439372d323036312d343364332d396266352d66346163366434626564333900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"waho\",\"des\":\"you won thw match\",\"admin_id\":1,\"updated_at\":\"2018-02-12 08:11:02\",\"created_at\":\"2018-02-12 08:11:02\",\"id\":67},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2018-02-12 03:11:02', '2018-09-11 14:00:24'),
(0x32636339623631612d343862662d343939372d383033382d63343333343338623964306600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"Won\",\"des\":\"Hurrrsa\",\"admin_id\":1,\"updated_at\":\"2017-12-29 19:17:07\",\"created_at\":\"2017-12-29 19:17:07\",\"id\":61},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-29 14:17:07', '2018-09-11 13:59:35'),
(0x33303166643862372d663038382d343034322d383262312d62336436373463643462363800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"haa\",\"des\":\"j\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2017-12-30 07:30:51', '2018-09-11 13:59:34'),
(0x33303237633534372d306330332d346130332d616537652d39636136613632663036373500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"hello\",\"des\":\"you won thematch\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-29 05:45:02', '2018-09-11 13:59:35'),
(0x33316166666166622d353136612d346666652d623363302d31616265316164616531373500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:52:31\",\"created_at\":\"2018-08-31 07:52:31\",\"id\":73},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-08-31 02:52:31', '2018-08-31 02:52:31'),
(0x33323034663765352d613631382d343764622d383236622d64393665626362336432353400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"tomorrow is your match\",\"des\":\"ajkshsa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:36:24\",\"created_at\":\"2018-06-12 07:36:24\",\"id\":69},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-06-12 02:36:24', '2018-09-11 13:59:34'),
(0x33323861653331382d653833362d343034372d626366322d32663730623264393234613900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pak Vs Ind\",\"news\":\"huurra\",\"des\":\"we win\",\"admin_id\":1,\"updated_at\":\"2017-12-29 19:07:49\",\"created_at\":\"2017-12-29 19:07:49\",\"id\":59},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-29 14:07:50', '2018-09-11 13:59:35'),
(0x33363439326661622d373665312d346539322d626536652d30643861346562396462616100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"tomorrow is your match\",\"des\":\"ajkshsa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:36:24\",\"created_at\":\"2018-06-12 07:36:24\",\"id\":69},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-06-12 02:36:24', '2018-06-12 02:36:24'),
(0x33363462653434382d663835372d346338652d613837332d39643739326234323532653600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"tomorrow is your match\",\"des\":\"ajkshsa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:36:24\",\"created_at\":\"2018-06-12 07:36:24\",\"id\":69},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-06-12 02:36:24', '2018-06-12 02:36:24'),
(0x33383536613136312d633432632d343638382d626333642d64306635636336353063303000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"a\",\"news\":\"s\",\"des\":\"d\",\"admin_id\":1,\"updated_at\":\"2017-12-21 09:48:50\",\"created_at\":\"2017-12-21 09:48:50\",\"id\":57},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-21 04:48:50', '2018-09-11 13:59:35'),
(0x33653633346666312d303964312d343162322d396232322d32383230333936346239376100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"waho\",\"des\":\"you won thw match\",\"admin_id\":1,\"updated_at\":\"2018-02-12 08:11:02\",\"created_at\":\"2018-02-12 08:11:02\",\"id\":67},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-02-12 03:11:02', '2018-09-11 13:59:34'),
(0x33656263373763612d343861392d346635352d386534332d32383837626430383865386600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"England\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-01-26 12:13:41', '2018-09-11 13:59:34'),
(0x33656537613139662d343731352d343162642d386163372d65306332653064633437323800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"f\",\"des\":\"h\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:25', '2017-12-30 07:18:41', '2018-09-11 14:00:25'),
(0x34313562636661392d306161322d343665342d626633312d66366231363638396362646400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"hahas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:03:39\",\"created_at\":\"2018-09-11 19:03:39\",\"id\":77},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-09-11 14:03:39', '2018-09-11 14:03:39'),
(0x34353464653236392d303330362d343962622d396630612d35336561646664666337366300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"helo\",\"des\":\"wom\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-30 06:57:15', '2018-09-11 13:59:35'),
(0x34353566666666382d346637372d346235622d626561372d30346335653431306533376500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-01-26 12:12:11', '2018-09-11 13:59:34'),
(0x34373563383436372d373261622d343834332d616134362d62326531366161313466653800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:40:32\",\"created_at\":\"2018-08-31 07:40:32\",\"id\":71},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-08-31 02:40:33', '2018-08-31 02:40:33'),
(0x34383636386337372d613238302d343338352d623435352d30633561313534373066646200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"aaa\",\"des\":\"sa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:39:55\",\"created_at\":\"2018-06-12 07:39:55\",\"id\":70},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-06-12 02:39:55', '2018-09-11 14:00:23'),
(0x34393335343732652d646461642d343833342d626132372d39623162323634336661636200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"England\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1,\"updated_at\":\"2018-01-26 17:19:08\",\"created_at\":\"2018-01-26 17:19:08\",\"id\":66},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-01-26 12:19:08', '2018-09-11 13:59:34'),
(0x34613232356136662d363563662d343035392d626432372d34633731323135666131633900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"zxa\",\"des\":\"ASA\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:39:32', '2018-09-06 13:08:24', '2018-09-11 13:39:32'),
(0x34613464613562302d313164322d346163642d386332362d66323632656234343762373900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"You Won\",\"des\":\"kkkakakas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:42\",\"created_at\":\"2018-09-11 19:02:42\",\"id\":76},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-09-11 14:02:42', '2018-09-11 14:02:42'),
(0x34623031303636382d343231302d343166622d613539332d32613839336333643939656500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"hahas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:03:39\",\"created_at\":\"2018-09-11 19:03:39\",\"id\":77},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-09-11 14:03:39', '2018-09-11 14:03:39'),
(0x34623562656331342d316131372d346261392d616434352d35313331383239303239353900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"xz\",\"des\":\"ds\",\"admin_id\":1},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-09-06 12:58:37', '2018-09-06 12:58:37'),
(0x34663132663130302d366161322d346639312d396162372d65383437386364363765353900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"helo\",\"des\":\"wom\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:25', '2017-12-30 06:57:15', '2018-09-11 14:00:25'),
(0x35306663643833362d343435612d343535312d613464622d30333861633366343366316400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"aaa\",\"des\":\"sa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:39:55\",\"created_at\":\"2018-06-12 07:39:55\",\"id\":70},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-06-12 02:39:55', '2018-06-12 02:39:55'),
(0x35316461613963632d653466372d343234362d386430362d34663663396338666330666300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"huura\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:17\",\"created_at\":\"2018-09-11 19:02:17\",\"id\":75},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-09-11 14:02:17', '2018-09-11 14:02:17'),
(0x35356134376639332d363164632d346539342d626634382d66653361303739343839333300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:40:32\",\"created_at\":\"2018-08-31 07:40:32\",\"id\":71},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-08-31 02:40:33', '2018-09-11 13:59:34'),
(0x35363363333733622d363838382d346333322d393133352d64323164306338373834346200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1,\"updated_at\":\"2018-03-03 04:50:25\",\"created_at\":\"2018-03-03 04:50:25\",\"id\":68},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-03-02 23:50:26', '2018-09-11 13:59:34'),
(0x35373331363464362d663136342d346362362d623139372d31643265306663326538316100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"austrslia\",\"news\":\"wow\",\"des\":\"haahaha\",\"admin_id\":1,\"updated_at\":\"2018-10-02 16:42:01\",\"created_at\":\"2018-10-02 16:42:01\",\"id\":78},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-10-02 11:42:17', '2018-10-02 11:42:02', '2018-10-02 11:42:17'),
(0x35396166383835312d636639332d343932322d623836652d30373633356238356436366400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:49:22\",\"created_at\":\"2018-08-31 07:49:22\",\"id\":72},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-08-31 02:49:23', '2018-09-11 13:59:34'),
(0x35613266376531322d333530332d343130342d616632332d31333531643235616266633700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"aaa\",\"des\":\"sa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:39:55\",\"created_at\":\"2018-06-12 07:39:55\",\"id\":70},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:34', '2018-06-12 02:39:55', '2018-09-11 13:59:34'),
(0x35623930366533342d643965362d343136302d623565632d36383436376635313263386100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"huura\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:17\",\"created_at\":\"2018-09-11 19:02:17\",\"id\":75},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-09-11 14:02:17', '2018-09-11 14:02:17'),
(0x36333565326463372d663632382d343734342d393634632d37626439613737373131633300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"huura\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:17\",\"created_at\":\"2018-09-11 19:02:17\",\"id\":75},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 14:02:49', '2018-09-11 14:02:17', '2018-09-11 14:02:49');
INSERT INTO `notifications` (`id`, `type`, `notifiable`, `notifiable_id`, `notifiable_type`, `data`, `date`, `read_at`, `created_at`, `updated_at`) VALUES
(0x36363331643864612d383061362d343434332d383964312d38346535643532353338363700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:40:32\",\"created_at\":\"2018-08-31 07:40:32\",\"id\":71},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-08-31 02:40:33', '2018-08-31 02:40:33'),
(0x36643834393634362d656232612d346534622d383536622d61623333663063623662623800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-10-04 02:10:42', '2018-10-04 02:10:42'),
(0x36646564336335372d626434352d346665652d383664632d63623734353831343137313500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"tomorrow is your match\",\"des\":\"ajkshsa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:36:24\",\"created_at\":\"2018-06-12 07:36:24\",\"id\":69},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2018-06-12 02:36:24', '2018-09-11 14:00:24'),
(0x36653139326535322d313034642d346566342d383239622d33616464323965373936316300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:49:22\",\"created_at\":\"2018-08-31 07:49:22\",\"id\":72},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-08-31 02:49:24', '2018-08-31 02:49:24'),
(0x37323532643132302d396238652d343130322d396535352d65333039393231666334666300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"zxa\",\"des\":\"ASA\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-09-06 13:08:24', '2018-09-11 14:00:23'),
(0x37363034333231612d626666632d343339302d613962322d31653961623961333934303700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"You Won\",\"des\":\"kkkakakas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:42\",\"created_at\":\"2018-09-11 19:02:42\",\"id\":76},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:03:49', '2018-09-11 14:02:42', '2018-09-11 14:03:49'),
(0x37376564376534662d643536312d343065362d616631372d39306161386165663463636500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"q\",\"news\":\"s\",\"des\":\"w\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-24 13:07:39', '2018-09-11 13:59:35'),
(0x37396435373164392d653132342d343830372d386464352d61343163393762303130313800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"xz\",\"des\":\"ds\",\"admin_id\":1},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-09-06 12:58:37', '2018-09-06 12:58:37'),
(0x37636365623434332d666232622d343537622d386462622d39646564643862613236316500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x37653565623139312d653739352d343765312d383036352d33353630393564666664313100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"f\",\"des\":\"h\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-30 07:18:41', '2018-09-11 13:59:35'),
(0x38323130353061362d653464322d346333332d396230312d62353631323461343031306100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:40:32\",\"created_at\":\"2018-08-31 07:40:32\",\"id\":71},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-08-31 02:40:33', '2018-08-31 02:40:33'),
(0x38356365343031372d353733392d343330322d393235642d66333263633662626637626100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"You Won\",\"des\":\"kkkakakas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:42\",\"created_at\":\"2018-09-11 19:02:42\",\"id\":76},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 14:02:49', '2018-09-11 14:02:42', '2018-09-11 14:02:49'),
(0x38376364313537652d393735612d343661302d613435302d30376439616665633935373400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"aaa\",\"des\":\"sa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:39:55\",\"created_at\":\"2018-06-12 07:39:55\",\"id\":70},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-03-16 05:27:49\"}}', NULL, NULL, '2018-06-12 02:39:55', '2018-06-12 02:39:55'),
(0x38383162653137652d356562622d346630302d616136382d63303665666337343230346100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:52:31\",\"created_at\":\"2018-08-31 07:52:31\",\"id\":73},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-08-31 02:52:31', '2018-08-31 02:52:31'),
(0x38613337393530652d376433322d343232362d613634642d36636663656233323464306100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 9, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":9,\"name\":\"qasim\",\"email\":\"qasim@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-03 13:53:55\",\"updated_at\":\"2018-10-03 13:53:55\"}}', NULL, NULL, '2018-10-04 02:10:43', '2018-10-04 02:10:43'),
(0x38616264366530332d373064372d346365372d616337372d62353034316335363734653900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"zxa\",\"des\":\"ASA\",\"admin_id\":1},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-09-06 13:08:25', '2018-09-06 13:08:25'),
(0x38643732656365332d656162302d346532642d623561622d63303830626136626563363400000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"You Won\",\"des\":\"kkkakakas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:42\",\"created_at\":\"2018-09-11 19:02:42\",\"id\":76},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-09-11 14:02:42', '2018-09-11 14:02:42'),
(0x39333131363837632d346636352d346563352d623738312d66383135343630653934653000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"huura\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:17\",\"created_at\":\"2018-09-11 19:02:17\",\"id\":75},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-09-11 14:02:17', '2018-09-11 14:02:17'),
(0x39333439313339382d316566392d346365342d386535632d35633537316564346438346500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"xz\",\"des\":\"ds\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-09-06 12:58:37', '2018-09-11 14:00:23'),
(0x39393034623733362d393431632d343337382d613732312d39633166316163356130373900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:49:22\",\"created_at\":\"2018-08-31 07:49:22\",\"id\":72},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-08-31 02:49:23', '2018-09-11 14:00:23'),
(0x39626134616436322d616261622d343231312d383265392d35346639356339623261363500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"austrslia\",\"news\":\"wow\",\"des\":\"haahaha\",\"admin_id\":1,\"updated_at\":\"2018-10-02 16:42:01\",\"created_at\":\"2018-10-02 16:42:01\",\"id\":78},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-10-02 11:42:02', '2018-10-02 11:42:02'),
(0x39653261653464612d353732642d346538652d386561372d65656632313939653832363900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:54:04\",\"created_at\":\"2018-08-31 07:54:04\",\"id\":74},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-08-31 02:54:06', '2018-09-11 14:00:23'),
(0x61306232376439302d323030362d346566392d626661332d66623235666335376664326500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x61306264663364622d646137322d343631612d386236392d33376161333538386431316300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"haa\",\"des\":\"j\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2017-12-30 07:46:06', '2018-09-11 14:00:24'),
(0x61306363363833392d376235612d346334362d613161352d30396338376361623665373600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"hahas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:03:39\",\"created_at\":\"2018-09-11 19:03:39\",\"id\":77},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:03:48', '2018-09-11 14:03:39', '2018-09-11 14:03:48'),
(0x61363739393139312d653730352d346431382d623334372d32613637373236666232386500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"aaa\",\"des\":\"sa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:39:55\",\"created_at\":\"2018-06-12 07:39:55\",\"id\":70},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-06-12 02:39:55', '2018-06-12 02:39:55'),
(0x61363962656336372d343061652d346263632d383863632d38666139326636626639386600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"hahas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:03:39\",\"created_at\":\"2018-09-11 19:03:39\",\"id\":77},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-30 05:53:14', '2018-09-11 14:03:39', '2018-09-30 05:53:14'),
(0x61383033316361632d633637382d343137312d383737352d63613734663766373665616300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"austrslia\",\"news\":\"wow\",\"des\":\"haahaha\",\"admin_id\":1,\"updated_at\":\"2018-10-02 16:42:01\",\"created_at\":\"2018-10-02 16:42:01\",\"id\":78},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-10-02 11:42:02', '2018-10-02 11:42:02'),
(0x61383938666431652d643737322d343963632d383739352d66646561303833653162343100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistan\",\"news\":\"hello\",\"des\":\"you won thematch\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-29 05:58:47', '2018-09-11 13:59:35'),
(0x62363636313638632d613636322d343738322d396335612d64383236303839346234396500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-09-29 11:50:24\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x63323961616463352d343166302d343661642d393936312d66613738653730363435616600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 8, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":8,\"name\":\"umar\",\"email\":\"umar1@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-03 13:44:01\",\"updated_at\":\"2018-10-03 13:44:01\"}}', NULL, NULL, '2018-10-04 02:10:43', '2018-10-04 02:10:43'),
(0x63396235616266652d336232302d346131392d383131632d61366564653462613437326100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:54:04\",\"created_at\":\"2018-08-31 07:54:04\",\"id\":74},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:33', '2018-08-31 02:54:05', '2018-09-11 13:59:33'),
(0x63396662316538302d636233362d343966312d386563392d33373131353937666438623300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 1, 'App\\User', '{\"news\":{\"fixture\":\"a\",\"news\":\"s\",\"des\":\"d\",\"admin_id\":1,\"updated_at\":\"2017-12-21 09:48:50\",\"created_at\":\"2017-12-21 09:48:50\",\"id\":57},\"user\":{\"id\":1,\"name\":\"Haziq\",\"email\":\"haziq@gmial.com\",\"created_at\":\"2017-12-04 19:59:21\",\"updated_at\":\"2017-12-04 19:59:21\"}}', NULL, NULL, '2017-12-21 04:48:50', '2017-12-21 04:48:50'),
(0x63396663333632312d343833342d346233302d383563382d62643765373562333166646600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-10-04 02:10:42', '2018-10-04 02:10:42'),
(0x63613131616165332d386263352d346164312d613762392d62326637333032386439643800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2018-01-26 12:12:11', '2018-09-11 14:00:24'),
(0x63623764373930392d396536392d343338662d386136362d35366665323164363066666200000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 7, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":7,\"name\":\"Asif\",\"email\":\"Asif@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-01 16:35:04\",\"updated_at\":\"2018-10-01 16:35:04\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x63643163383761372d653938362d346231352d613333312d30316231306462306236373900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"austrslia\",\"news\":\"wow\",\"des\":\"haahaha\",\"admin_id\":1,\"updated_at\":\"2018-10-02 16:42:01\",\"created_at\":\"2018-10-02 16:42:01\",\"id\":78},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, NULL, '2018-10-02 11:42:02', '2018-10-02 11:42:02'),
(0x63666332343166642d343535342d346635652d383833362d62636465646164326166333300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"pak win\",\"des\":\"xyz\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:10:42\",\"created_at\":\"2018-10-04 07:10:42\",\"id\":80},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-09-29 11:50:24\"}}', NULL, NULL, '2018-10-04 02:10:42', '2018-10-04 02:10:42'),
(0x63666431323965652d333737612d343038392d623665312d33363330326639656537346600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 5, 'App\\User', '{\"news\":{\"fixture\":\"austrslia\",\"news\":\"wow\",\"des\":\"haahaha\",\"admin_id\":1,\"updated_at\":\"2018-10-02 16:42:01\",\"created_at\":\"2018-10-02 16:42:01\",\"id\":78},\"user\":{\"id\":5,\"name\":\"hazii\",\"email\":\"muhammadhaziq341@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 05:24:31\",\"updated_at\":\"2018-09-29 11:50:24\"}}', NULL, NULL, '2018-10-02 11:42:02', '2018-10-02 11:42:02'),
(0x64303964303662332d353632352d346163372d613834362d63653061633835386535316100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 9, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":9,\"name\":\"qasim\",\"email\":\"qasim@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-03 13:53:55\",\"updated_at\":\"2018-10-03 13:53:55\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x64613461316132612d616264322d343533392d386431382d31613134646630353964666100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pak Vs Ind\",\"news\":\"huurra\",\"des\":\"we win\",\"admin_id\":1,\"updated_at\":\"2017-12-29 19:16:27\",\"created_at\":\"2017-12-29 19:16:27\",\"id\":60},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-29 14:16:28', '2018-09-11 13:59:35'),
(0x64633364363936392d626430622d343766342d613936312d31383565343363616433613700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:40:32\",\"created_at\":\"2018-08-31 07:40:32\",\"id\":71},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:23', '2018-08-31 02:40:33', '2018-09-11 14:00:23'),
(0x64636332313565372d666636652d346536662d623735342d35336433376265333732613900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:49:22\",\"created_at\":\"2018-08-31 07:49:22\",\"id\":72},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-08-31 02:49:23', '2018-08-31 02:49:23'),
(0x64646531633161322d643762322d343931662d396333612d39333561343137353262643900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1,\"updated_at\":\"2018-03-03 04:50:25\",\"created_at\":\"2018-03-03 04:50:25\",\"id\":68},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2018-03-02 23:50:27', '2018-09-11 14:00:24'),
(0x64653532303435612d356265652d346663372d393234302d65316166313063643032336300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"tomorrow is your match\",\"des\":\"ajkshsa\",\"admin_id\":1,\"updated_at\":\"2018-06-12 07:36:24\",\"created_at\":\"2018-06-12 07:36:24\",\"id\":69},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-06-12 02:36:24', '2018-06-12 02:36:24'),
(0x64663338303137342d363664662d343963342d626635362d30643538303036333262363800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"zxa\",\"des\":\"ASA\",\"admin_id\":1},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-09-06 13:08:25', '2018-09-06 13:08:25'),
(0x65383036326365362d616332612d343166622d613836392d62306562393332616562616300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 7, 'App\\User', '{\"news\":{\"fixture\":\"austrslia\",\"news\":\"wow\",\"des\":\"haahaha\",\"admin_id\":1,\"updated_at\":\"2018-10-02 16:42:01\",\"created_at\":\"2018-10-02 16:42:01\",\"id\":78},\"user\":{\"id\":7,\"name\":\"Asif\",\"email\":\"Asif@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-01 16:35:04\",\"updated_at\":\"2018-10-01 16:35:04\"}}', NULL, NULL, '2018-10-02 11:42:02', '2018-10-02 11:42:02'),
(0x65383233316164382d326438352d343534662d393135302d38306230326633353734323100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 3, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"g\",\"des\":\"j\",\"admin_id\":1},\"user\":{\"id\":3,\"name\":\"Hamza\",\"email\":\"hamza@gmail.com\",\"created_at\":\"2017-12-29 19:41:50\",\"updated_at\":\"2017-12-29 19:41:50\"}}', NULL, '2018-09-11 14:00:24', '2017-12-30 07:47:09', '2018-09-11 14:00:24'),
(0x65393039653633332d616161392d346534662d623437612d31316231323930376266333900000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"xz\",\"des\":\"ds\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"status\":\"user\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:33', '2018-09-06 12:58:37', '2018-09-11 13:59:33'),
(0x66303465333035302d326464362d343534342d383139612d62366664623865313239306500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Australia\",\"news\":\"You Won\",\"des\":\"kkkakakas\",\"admin_id\":1,\"updated_at\":\"2018-09-11 19:02:42\",\"created_at\":\"2018-09-11 19:02:42\",\"id\":76},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-09-11 14:02:42', '2018-09-11 14:02:42'),
(0x66313534303234342d366430372d343136362d383364322d39613633356433313962393600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45'),
(0x66326663623632322d356236632d343939622d396533332d65336562363433353363383300000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Congratus\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:49:22\",\"created_at\":\"2018-08-31 07:49:22\",\"id\":72},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-08-31 02:49:24', '2018-08-31 02:49:24');
INSERT INTO `notifications` (`id`, `type`, `notifiable`, `notifiable_id`, `notifiable_type`, `data`, `date`, `read_at`, `created_at`, `updated_at`) VALUES
(0x66353261643535362d336133362d343835342d386233312d39326264323836356163623500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 2, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"e\",\"des\":\"e\",\"admin_id\":1},\"user\":{\"id\":2,\"name\":\"Haziq\",\"email\":\"haziq1@gmail.com\",\"created_at\":\"2017-12-06 11:48:57\",\"updated_at\":\"2017-12-06 11:48:57\"}}', NULL, '2018-09-11 13:59:35', '2017-12-30 07:29:34', '2018-09-11 13:59:35'),
(0x66356664626235382d623738302d346266302d393032312d37656431323866383762396100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Pakistani\",\"news\":\"hello\",\"des\":\"you won\",\"admin_id\":1,\"updated_at\":\"2018-03-03 04:50:25\",\"created_at\":\"2018-03-03 04:50:25\",\"id\":68},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-03-02 23:50:27', '2018-03-02 23:50:27'),
(0x66643134643231322d313437652d343333312d396136362d64633666653263376465373600000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 6, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"You Won\",\"des\":\"Conrguate\",\"admin_id\":1,\"updated_at\":\"2018-08-31 07:54:04\",\"created_at\":\"2018-08-31 07:54:04\",\"id\":74},\"user\":{\"id\":6,\"name\":\"Haziq\",\"email\":\"muhammadhazii001@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-03-16 07:01:22\",\"updated_at\":\"2018-03-16 07:01:22\"}}', NULL, NULL, '2018-08-31 02:54:07', '2018-08-31 02:54:07'),
(0x66656265316536362d643261622d346365342d386566362d62626531633838383636373700000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 4, 'App\\User', '{\"news\":{\"fixture\":\"Austrila\",\"news\":\"xz\",\"des\":\"ds\",\"admin_id\":1},\"user\":{\"id\":4,\"name\":\"imran\",\"email\":\"aa@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-02-13 07:32:14\",\"updated_at\":\"2018-02-13 07:32:14\"}}', NULL, NULL, '2018-09-06 12:58:37', '2018-09-06 12:58:37'),
(0x66666662376139662d646334632d343936312d393131322d32386239343538386135366500000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 'App\\Notifications\\newsalert', NULL, 8, 'App\\User', '{\"news\":{\"fixture\":\"lahore\",\"news\":\"we won\",\"des\":\"abcd\",\"admin_id\":1,\"updated_at\":\"2018-10-04 07:09:44\",\"created_at\":\"2018-10-04 07:09:44\",\"id\":79},\"user\":{\"id\":8,\"name\":\"umar\",\"email\":\"umar1@gmail.com\",\"status\":\"user\",\"created_at\":\"2018-10-03 13:44:01\",\"updated_at\":\"2018-10-03 13:44:01\"}}', NULL, NULL, '2018-10-04 02:09:45', '2018-10-04 02:09:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('haziq1@gmail.com', '$2y$10$uZ0dNE.7Ekikxs6nJrSPhuRTBG0G274YOwVJ7gPrnceNQF8RLXqQu', '2018-09-29 06:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_name` varchar(255) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `key` text,
  `invoice_id` text,
  `pay_id` varchar(255) DEFAULT NULL,
  `card_holder_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_name`, `sid`, `key`, `invoice_id`, `pay_id`, `card_holder_name`, `created_at`, `updated_at`) VALUES
(1, 'Ground Booking', 901384323, 'AD15D0E6CE12C1626A7260C632ABE722', '2147483647', '56', 'Muhammad Haziq', '2018-07-04 05:41:08', '2018-07-04 05:41:08'),
(2, 'Ground Booking', 901384323, 'D626605CB225BA0E4EB112E327BC40E6', '9093743432583', '57', 'Muhammad Haziq', '2018-07-05 00:50:32', '2018-07-05 00:50:32'),
(3, 'Ground Booking', 901384323, '409A532595A4C52D226260F0FEED3305', '9093743432844', '59', 'Muhammad Haziq', '2018-07-05 01:04:43', '2018-07-05 01:04:43'),
(4, 'Ticket Booking', 901384323, 'E66E9D401A268D640AFCDBEDB1F9266D', '9093743438955', '20', 'Muhammad Haziq', '2018-07-05 04:47:51', '2018-07-05 04:47:51'),
(5, 'Ticket Booking', 901384323, 'BD119106E82CE440121319EF8C253E1D', '9093743439393', '20', 'Muhammad Haziq', '2018-07-05 04:59:30', '2018-07-05 04:59:30'),
(6, 'Ticket Booking', 901384650, '73BBB360082AF2169541D4F307D85BFE', '9093743439582', '22', 'Muhammad Haziq', '2018-07-05 05:37:02', '2018-07-05 05:37:02'),
(7, 'Ticket Booking', 901384650, '73BBB360082AF2169541D4F307D85BFE', '9093743439582', '22', 'Muhammad Haziq', '2018-07-05 05:38:10', '2018-07-05 05:38:10'),
(8, 'Ticket Booking', 901384650, '73BBB360082AF2169541D4F307D85BFE', '9093743439582', '22', 'Muhammad Haziq', '2018-07-05 05:38:45', '2018-07-05 05:38:45'),
(9, 'Ticket Booking', 901384650, '73BBB360082AF2169541D4F307D85BFE', '9093743439582', '22', 'Muhammad Haziq', '2018-07-05 05:39:49', '2018-07-05 05:39:49'),
(10, 'Ticket Booking', 901384650, '73BBB360082AF2169541D4F307D85BFE', '9093743439582', '22', 'Muhammad Haziq', '2018-07-05 05:40:03', '2018-07-05 05:40:03'),
(11, 'Ticket Booking', 901384650, '73BBB360082AF2169541D4F307D85BFE', '9093743439582', '22', 'Muhammad Haziq', '2018-07-05 05:41:52', '2018-07-05 05:41:52'),
(12, 'Ground Booking', 901384323, '3C0432F80E30D80500602D8EDDF72CBC', '9093744782715', '71', 'Muhammad haziq', '2018-08-31 04:35:27', '2018-08-31 04:35:27'),
(13, 'Ground Booking', 901384323, '18FD834057BBC4367D0F29463CD1B30B', '9093745570695', '74', 'MuhammadHaziq', '2018-09-29 07:28:11', '2018-09-29 07:28:11'),
(14, 'Ticket Booking', 901384650, 'C29677D952EEB5F287F95A935CA37AC1', '9093745570854', '25', 'MuhammadHaziq', '2018-09-29 07:33:35', '2018-09-29 07:33:35'),
(15, 'Ground Booking', 901384323, 'F953F1D04774FC179175659E8E30064F', '9093745691085', '76', 'qasim', '2018-10-03 09:06:18', '2018-10-03 09:06:18'),
(16, 'Ticket Booking', 901384650, '9B3144CD071DF6081630457F2770E3B0', '9093745700676', '5bb51b3eb4e60', 'Muhammad Haziq', '2018-10-03 14:48:49', '2018-10-03 14:48:49'),
(17, 'Ticket Booking', 901384650, '9F20AF9217E3A7CBB3A6C29931E022FE', '9093745700826', '5bb51dbc6b5a9', 'Muhammad Haziq', '2018-10-03 14:58:45', '2018-10-03 14:58:45'),
(18, 'Ticket Booking', 901384650, '9F20AF9217E3A7CBB3A6C29931E022FE', '9093745700826', '5bb51dbc6b5a9', 'Muhammad Haziq', '2018-10-03 15:04:34', '2018-10-03 15:04:34');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `team_id` int(11) UNSIGNED DEFAULT NULL,
  `playerrole` varchar(250) DEFAULT NULL,
  `player_role` varchar(250) DEFAULT NULL,
  `captain_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `player_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `team_id`, `playerrole`, `player_role`, `captain_name`, `created_at`, `updated_at`, `player_name`) VALUES
(69, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:15', '2018-06-14 05:35:15', 'Ali'),
(70, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:15', '2018-06-14 05:35:15', 'haziq'),
(71, 2, 'Batsman', 'All Rounder', NULL, '2018-06-14 05:35:15', '2018-06-14 05:35:15', 'bilal'),
(72, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:15', '2018-06-14 05:35:15', 'usman'),
(73, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:15', '2018-06-14 05:35:15', 'dhoni'),
(74, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:15', '2018-06-14 05:35:15', 'wahab'),
(75, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:16', '2018-06-14 05:35:16', 'amir'),
(76, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:16', '2018-06-14 05:35:16', 'bila'),
(77, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:16', '2018-06-14 05:35:16', 'usmana'),
(78, 2, 'Batsman', 'Bowler', NULL, '2018-06-14 05:35:16', '2018-06-14 05:35:16', 'zain'),
(79, 2, 'Batsman', 'All Rounder', NULL, '2018-06-14 05:35:16', '2018-06-14 05:35:16', 'nawaz'),
(80, 3, 'Batsman', 'Batsman', NULL, '2018-06-21 18:06:00', '2018-06-21 18:06:00', 'Umar'),
(81, 3, 'Batsman', 'Batsman', NULL, '2018-06-21 18:06:00', '2018-06-21 18:06:00', 'Bilal'),
(83, 3, 'Batsman', 'Bowler', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'Bili'),
(84, 3, 'Batsman', 'Batsman', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'zain'),
(85, 3, 'Batsman', 'Bowler', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'haris'),
(86, 3, 'Batsman', 'Batsman', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'usman'),
(87, 3, 'Batsman', 'Bowler', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'shabaz'),
(88, 3, 'Batsman', 'Bowler', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'doni'),
(89, 3, 'Batsman', 'All Rounder', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'qasir'),
(90, 3, 'Batsman', 'All Rounder', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'mudasir'),
(93, 3, 'Batsman', 'Batsman', NULL, '2018-06-21 18:13:06', '2018-06-21 18:13:06', 'Umar'),
(94, 27, 'Batsman', 'Batsman', NULL, '2018-06-26 05:58:07', '2018-06-26 05:58:07', 'shawag'),
(95, 27, 'Batsman', 'Batsman', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'kholi'),
(96, 27, 'Batsman', 'Batsman', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'dhoni'),
(97, 27, 'Batsman', 'Bowler', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'amir'),
(98, 27, 'Batsman', 'All Rounder', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'shaker dawan'),
(99, 27, 'Batsman', 'Bowler', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'mooli'),
(100, 27, 'Batsman', 'Batsman', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'bilal'),
(101, 27, 'Batsman', 'Bowler', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'samba'),
(102, 27, 'Batsman', 'All Rounder', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'kamran'),
(103, 27, 'Batsman', 'Batsman', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'sulman'),
(104, 27, 'Batsman', 'Batsman', NULL, '2018-06-26 05:58:08', '2018-06-26 05:58:08', 'jawad'),
(105, 28, 'Bowler', 'Batsman', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'bilal'),
(106, 28, 'Bowler', 'Batsman', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'kholi'),
(107, 28, 'Bowler', 'Batsman', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'dhoni'),
(108, 28, 'Bowler', 'Bowler', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'amir'),
(109, 28, 'Bowler', 'Bowler', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'shaker dawan'),
(110, 28, 'Bowler', 'Bowler', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'mooli'),
(111, 28, 'Bowler', 'All Rounder', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'bilal'),
(112, 28, 'Bowler', 'Batsman', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'samba'),
(113, 28, 'Bowler', 'Batsman', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'kamran'),
(114, 28, 'Bowler', 'All Rounder', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'sulman'),
(115, 28, 'Bowler', 'Batsman', NULL, '2018-06-26 06:51:51', '2018-06-26 06:51:51', 'jawad'),
(116, 46, 'Batsman', 'Batsman', NULL, '2018-06-26 07:41:36', '2018-06-26 07:41:36', 'shawag'),
(117, 46, 'Batsman', 'Batsman', NULL, '2018-06-26 07:41:36', '2018-06-26 07:41:36', 'kholi'),
(118, 46, 'Batsman', 'Batsman', NULL, '2018-06-26 07:41:36', '2018-06-26 07:41:36', 'dhoni'),
(119, 46, 'Batsman', 'Bowler', NULL, '2018-06-26 07:41:36', '2018-06-26 07:41:36', 'amir'),
(120, 46, 'Batsman', 'Bowler', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'shaker dawan'),
(121, 46, 'Batsman', 'All Rounder', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'mooli'),
(122, 46, 'Batsman', 'Bowler', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'bilal'),
(123, 46, 'Batsman', 'Bowler', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'samba'),
(124, 46, 'Batsman', 'All Rounder', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'kamran'),
(125, 46, 'Batsman', 'Batsman', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'sulman'),
(126, 46, 'Batsman', 'Batsman', NULL, '2018-06-26 07:41:37', '2018-06-26 07:41:37', 'jawad'),
(127, 47, 'Batsman', 'Batsman', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Wiliams'),
(128, 47, 'Batsman', 'Batsman', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'smit'),
(129, 47, 'Batsman', 'Bowler', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'jonson'),
(130, 47, 'Batsman', 'Batsman', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'clark'),
(131, 47, 'Batsman', 'Batsman', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Finch'),
(132, 47, 'Batsman', 'All Rounder', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Maxwell'),
(133, 47, 'Batsman', 'Bowler', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Natton'),
(134, 47, 'Batsman', 'Batsman', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Travis'),
(135, 47, 'Batsman', 'Bowler', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Andrew'),
(136, 47, 'Batsman', 'Batsman', NULL, '2018-07-07 06:04:56', '2018-07-07 06:04:56', 'Alex'),
(137, 47, 'Batsman', 'Bowler', NULL, '2018-07-07 06:04:57', '2018-07-07 06:04:57', 'Jackson'),
(138, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:07', '2018-08-16 20:01:07', 'Ashton Agar'),
(139, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:07', '2018-08-16 20:01:07', 'Alex Carey'),
(140, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:07', '2018-08-16 20:01:07', 'Pat Cummins'),
(141, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:07', '2018-08-16 20:01:07', 'Aaron Finch'),
(142, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Peter Handscomb'),
(143, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Josh Hazlewood'),
(144, 48, 'Batsman', 'Batsman', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Travis Head'),
(145, 48, 'Batsman', 'Bowler', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Usman Khawaja'),
(146, 48, 'Batsman', 'Bowler', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Nathan Lyon'),
(147, 48, 'Batsman', 'All Rounder', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Glenn Maxwell'),
(148, 48, 'Batsman', 'Bowler', NULL, '2018-08-16 20:01:08', '2018-08-16 20:01:08', 'Mitchell Marsh'),
(149, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:52', '2018-09-29 12:08:52', 'Ashton Agar'),
(150, 49, 'All Rounder', 'All Rounder', NULL, '2018-09-29 12:08:52', '2018-09-29 12:08:52', 'Alex Carey'),
(151, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:52', '2018-09-29 12:08:52', 'Pat Cummins'),
(152, 49, 'All Rounder', 'All Rounder', NULL, '2018-09-29 12:08:53', '2018-09-29 12:08:53', 'Aaron Finch'),
(153, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:53', '2018-09-29 12:08:53', 'Peter Handscomb'),
(154, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:53', '2018-09-29 12:08:53', 'Josh Hazlewood'),
(155, 49, 'All Rounder', 'All Rounder', NULL, '2018-09-29 12:08:53', '2018-09-29 12:08:53', 'Travis Head'),
(156, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:53', '2018-09-29 12:08:53', 'Usman Khawaja'),
(157, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:54', '2018-09-29 12:08:54', 'Nathan Lyon'),
(158, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:54', '2018-09-29 12:08:54', 'Glenn Maxwell'),
(159, 49, 'All Rounder', 'Bowler', NULL, '2018-09-29 12:08:54', '2018-09-29 12:08:54', 'Mitchell Marsh'),
(160, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Ashton Agar'),
(161, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Alex Carey'),
(162, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Pat Cummins'),
(163, 54, 'Bowler', 'Batsman', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Aaron Finch'),
(164, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Peter Handscomb'),
(165, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Josh Hazlewood'),
(166, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Travis Head'),
(167, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Usman Khawaja'),
(168, 54, 'Bowler', 'All Rounder', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Nathan Lyon'),
(169, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Glenn Maxwell'),
(170, 54, 'Bowler', 'Bowler', NULL, '2018-10-03 13:53:14', '2018-10-03 13:53:14', 'Mitchell Marsh'),
(171, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:14', '2018-10-03 13:56:14', 'ramdin'),
(172, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:14', '2018-10-03 13:56:14', 'fakhar'),
(173, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'nasir'),
(174, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'saad'),
(175, 55, 'Bowler', 'All Rounder', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'amir'),
(176, 55, 'Bowler', 'All Rounder', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'afridi'),
(177, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'waseem'),
(178, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'devilier'),
(179, 55, 'Bowler', 'Batsman', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'lara'),
(180, 55, 'Bowler', 'Bowler', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'marsh'),
(181, 55, 'Bowler', 'Bowler', NULL, '2018-10-03 13:56:15', '2018-10-03 13:56:15', 'narine');

-- --------------------------------------------------------

--
-- Table structure for table `postnews`
--

CREATE TABLE `postnews` (
  `id` int(10) UNSIGNED NOT NULL,
  `fixture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` int(10) UNSIGNED DEFAULT NULL,
  `image` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `postnews`
--

INSERT INTO `postnews` (`id`, `fixture`, `news`, `des`, `admin_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won!', 1, NULL, '2017-12-14 14:13:25', '2018-08-31 07:54:52'),
(2, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Wonf', 1, NULL, '2017-12-14 14:16:35', '2018-06-25 19:02:38'),
(3, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Wsonssss', 1, NULL, '2017-12-14 14:18:11', '2018-06-25 18:38:56'),
(4, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won', NULL, NULL, '2017-12-14 14:21:44', '2017-12-14 14:21:44'),
(5, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won', NULL, NULL, '2017-12-14 14:24:44', '2017-12-14 14:24:44'),
(6, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won', NULL, NULL, '2017-12-14 14:25:11', '2017-12-14 14:25:11'),
(7, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won', NULL, NULL, '2017-12-14 14:26:14', '2017-12-14 14:26:14'),
(8, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won', NULL, NULL, '2017-12-14 14:32:07', '2017-12-14 14:32:07'),
(9, 'Pak Vs Ind', 'Pak won the Match', 'hhhuuuurrrraaaa we Won', NULL, NULL, '2017-12-14 15:14:50', '2017-12-14 15:14:50'),
(10, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 12:58:27', '2017-12-19 12:58:27'),
(11, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 12:59:24', '2017-12-19 12:59:24'),
(12, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:01:03', '2017-12-19 13:01:03'),
(13, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:12:05', '2017-12-19 13:12:05'),
(14, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:13:36', '2017-12-19 13:13:36'),
(15, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:13:57', '2017-12-19 13:13:57'),
(16, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:14:24', '2017-12-19 13:14:24'),
(17, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:14:54', '2017-12-19 13:14:54'),
(18, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', NULL, NULL, '2017-12-19 13:16:40', '2017-12-19 13:16:40'),
(19, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', 1, NULL, '2017-12-19 13:24:17', '2017-12-19 13:24:17'),
(20, 'Pak Vs Ind', 'Pak won the Match', 'hoorraaa we won thw match', 1, NULL, '2017-12-19 13:24:32', '2017-12-19 13:24:32'),
(21, 'Pak Vs Ind', 'Pak won the Match', 'hhahhahaha', 1, NULL, '2017-12-19 13:24:59', '2017-12-19 13:24:59'),
(22, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:28:29', '2017-12-19 13:28:29'),
(23, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:28:30', '2017-12-19 13:28:30'),
(24, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:30:13', '2017-12-19 13:30:13'),
(25, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:32:50', '2017-12-19 13:32:50'),
(26, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:35:34', '2017-12-19 13:35:34'),
(27, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:37:33', '2017-12-19 13:37:33'),
(28, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:38:03', '2017-12-19 13:38:03'),
(29, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:38:27', '2017-12-19 13:38:27'),
(30, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:39:30', '2017-12-19 13:39:30'),
(31, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:40:07', '2017-12-19 13:40:07'),
(32, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:46:24', '2017-12-19 13:46:24'),
(33, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:46:44', '2017-12-19 13:46:44'),
(34, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:47:36', '2017-12-19 13:47:36'),
(35, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:48:29', '2017-12-19 13:48:29'),
(36, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:51:57', '2017-12-19 13:51:57'),
(37, 'Pakistan', 'Pak won the Match', 'jajjs', 1, NULL, '2017-12-19 13:55:04', '2017-12-19 13:55:04'),
(38, 'p', 'n', 's', 1, NULL, '2017-12-19 13:55:38', '2017-12-19 13:55:38'),
(39, 'p', 'n', 's', 1, NULL, '2017-12-19 13:57:20', '2017-12-19 13:57:20'),
(40, 'p', 'n', 's', 1, NULL, '2017-12-19 13:57:46', '2017-12-19 13:57:46'),
(41, 'Pak Vs Ind', 'Pak won the Match', 'kqsm', 1, NULL, '2017-12-19 14:08:57', '2017-12-19 14:08:57'),
(42, 'Pak Vs Ind', 'Pak won the Match', 'kqsm', 1, NULL, '2017-12-19 14:14:14', '2017-12-19 14:14:14'),
(43, 'sah', 'ho', 'hoi', 1, NULL, '2017-12-19 14:14:29', '2017-12-19 14:14:29'),
(44, 'sah', 'ho', 'hoi', 1, NULL, '2017-12-19 14:14:54', '2017-12-19 14:14:54'),
(45, 'hah', 'hs', 'sb', 1, NULL, '2017-12-19 14:15:04', '2017-12-19 14:15:04'),
(46, 'p', 'p', 'p', 1, NULL, '2017-12-20 05:45:34', '2017-12-20 05:45:34'),
(47, 'p', 'p', 'p', 1, NULL, '2017-12-20 05:46:27', '2017-12-20 05:46:27'),
(48, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:26:59', '2017-12-21 04:26:59'),
(49, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:27:55', '2017-12-21 04:27:55'),
(50, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:28:15', '2017-12-21 04:28:15'),
(51, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:28:27', '2017-12-21 04:28:27'),
(52, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:33:00', '2017-12-21 04:33:00'),
(53, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:34:22', '2017-12-21 04:34:22'),
(54, 'pL', 'l', 'k', 1, NULL, '2017-12-21 04:34:33', '2017-12-21 04:34:33'),
(55, 'kL', 'l', 'l', 1, NULL, '2017-12-21 04:45:05', '2017-12-21 04:45:05'),
(56, 'kL', 'l', 'l', 1, NULL, '2017-12-21 04:47:07', '2017-12-21 04:47:07'),
(57, 'a', 's', 'd', 1, NULL, '2017-12-21 04:48:50', '2017-12-21 04:48:50'),
(58, 'Pakistani', 'sq', 'q', 1, NULL, '2017-12-29 07:21:40', '2017-12-29 07:21:40'),
(59, 'Pak Vs Ind', 'huurra', 'we win', 1, NULL, '2017-12-29 14:07:49', '2017-12-29 14:07:49'),
(60, 'Pak Vs Ind', 'huurra', 'we win', 1, NULL, '2017-12-29 14:16:27', '2017-12-29 14:16:27'),
(61, 'Pakistan', 'Won', 'Hurrrsa', 1, NULL, '2017-12-29 14:17:07', '2017-12-29 14:17:07'),
(62, 'Pakistani', 'hello', 'hay', 1, NULL, '2017-12-29 14:38:38', '2017-12-29 14:38:38'),
(63, 'Pakistani', 'hello', 'hay', 1, NULL, '2017-12-29 14:38:55', '2017-12-29 14:38:55'),
(64, 'Pakistani', 'hello', 'hay', 1, NULL, '2017-12-29 14:40:35', '2017-12-29 14:40:35'),
(65, 'Pakistani', 'hello', 'hay', 1, NULL, '2017-12-29 14:41:11', '2017-12-29 14:41:11'),
(66, 'England', 'hello', 'you won', 1, NULL, '2018-01-26 12:19:08', '2018-01-26 12:19:08'),
(67, 'Pakistani', 'waho', 'you won thw match', 1, NULL, '2018-02-12 03:11:02', '2018-02-12 03:11:02'),
(68, 'Pakistani', 'hello', 'you won', 1, NULL, '2018-03-02 23:50:25', '2018-03-02 23:50:25'),
(69, 'Australia', 'tomorrow is your match', 'ajkshsa', 1, NULL, '2018-06-12 02:36:24', '2018-06-12 02:36:24'),
(70, 'Australia', 'aaa', 'sa', 1, NULL, '2018-06-12 02:39:55', '2018-06-12 02:39:55'),
(71, 'Austrila', 'You Won', 'Congratus', 1, NULL, '2018-08-31 02:40:32', '2018-08-31 02:40:32'),
(72, 'Austrila', 'You Won', 'Congratus', 1, NULL, '2018-08-31 02:49:22', '2018-08-31 02:49:22'),
(73, 'Austrila', 'You Won', 'Conrguate', 1, NULL, '2018-08-31 02:52:31', '2018-08-31 02:52:31'),
(74, 'Austrila', 'You Won', 'Conrguate', 1, NULL, '2018-08-31 02:54:04', '2018-08-31 02:54:04'),
(75, 'Austrila', 'You Won', 'huura', 1, NULL, '2018-09-11 14:02:17', '2018-09-11 14:02:17'),
(76, 'Australia', 'You Won', 'kkkakakas', 1, NULL, '2018-09-11 14:02:42', '2018-09-11 14:02:42'),
(77, 'Austrila', 'You Won', 'hahas', 1, NULL, '2018-09-11 14:03:39', '2018-09-11 14:03:39'),
(78, 'austrslia', 'wow', 'haahaha', 1, NULL, '2018-10-02 11:42:01', '2018-10-02 11:42:01'),
(79, 'lahore', 'we won', 'abcd', 1, NULL, '2018-10-04 02:09:44', '2018-10-04 02:09:44'),
(80, 'lahore', 'pak win', 'xyz', 1, NULL, '2018-10-04 02:10:42', '2018-10-04 02:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `team_name` varchar(255) DEFAULT NULL,
  `captain_name` varchar(255) DEFAULT NULL,
  `captain_role` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `status`, `team_name`, `captain_name`, `captain_role`, `cnic`, `created_at`, `updated_at`) VALUES
(2, 2, 'admin', 'Pakistani', 'Haziq', 'Batsman', '35202-4446561-5', '2017-12-09 12:13:25', '2018-06-11 07:57:24'),
(3, 2, 'user', 'Pakistan', 'Hamza', 'Batsman', '35202-4446561-5', '2017-12-09 12:43:36', '2018-06-21 18:34:51'),
(5, 2, 'admin', 'England', 'Haziq', 'Batsman', '35202-4446561-5', '2018-01-02 11:18:06', '2018-06-08 05:00:04'),
(14, 2, 'user', 'India', 'doni', 'Batsman', '35202-4446561-5', '2018-04-11 05:27:01', '2018-05-09 18:48:03'),
(22, 2, 'user', 'Srilanka', 'Bial', NULL, '35202-4446561-5', '2018-06-03 14:59:38', '2018-06-03 14:59:38'),
(27, 1, 'admin', 'Pakistanii', 'Haziq', 'Batsman', '35202-4446561-5', '2018-06-26 00:58:07', '2018-06-26 00:58:07'),
(46, 1, 'admin', 'NewsLand', 'Haziq', 'Batsman', '35202-4446561-5', '2018-06-26 02:41:36', '2018-06-26 02:41:36'),
(47, 1, 'admin', 'Australia', 'James', 'Batsman', '35202-4446561-5', '2018-07-07 01:04:55', '2018-07-07 01:04:55'),
(48, 2, 'user', 'Austrila', 'Watson', 'Batsman', '35202-4446561-5', '2018-08-16 15:01:07', '2018-08-16 15:01:07'),
(49, 5, 'user', 'austrslia', 'haziq', 'All Rounder', '35202-4446561-5', '2018-09-29 07:08:50', '2018-09-29 07:08:50'),
(52, 8, 'user', 'world 11', 'dhoni', 'Batsman', '35240-7766665-8', '2018-10-03 08:48:19', '2018-10-03 08:48:19'),
(54, 8, 'user', 'world11', 'Umar', 'Bowler', '35202-4446561-5', '2018-10-03 08:53:14', '2018-10-03 08:53:14'),
(55, 9, 'user', 'lahore qalander', 'umer akamal', 'Bowler', '32457-4446561-5', '2018-10-03 08:56:14', '2018-10-03 08:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `ticketbooking`
--

CREATE TABLE `ticketbooking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `payment` enum('pay','no-pay') DEFAULT NULL,
  `unique_number` varchar(255) DEFAULT NULL,
  `ground_id` int(11) DEFAULT NULL,
  `groundname` varchar(255) DEFAULT NULL,
  `enclouser_name` varchar(255) DEFAULT NULL,
  `match_name` varchar(255) DEFAULT NULL,
  `no_of_ticket` int(11) DEFAULT NULL,
  `seats` varchar(255) DEFAULT NULL,
  `match_date` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketbooking`
--

INSERT INTO `ticketbooking` (`id`, `user_id`, `admin_id`, `payment`, `unique_number`, `ground_id`, `groundname`, `enclouser_name`, `match_name`, `no_of_ticket`, `seats`, `match_date`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Inzamam', 'Pakistan VS India', 2, '30,35', '2018-03-24', '2018-07-05 08:21:55', '2018-04-13 23:19:37'),
(3, 2, NULL, 'no-pay', NULL, 1, 'jazz', 't Sarfaraz Nawaz', 'Pakistan VS Pakistani', 4, '35,40,45,50', '2018-03-24', '2018-07-05 08:22:01', '2018-04-25 02:16:40'),
(4, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Wasi Akram', 'Pakistan VS India', 3, '40,45,50', '2018-05-28', '2018-07-05 08:22:06', '2018-05-28 13:15:48'),
(5, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Wasi Akram', 'Pakistan VS India', 1, '43', '2018-05-28', '2018-07-05 08:22:10', '2018-05-28 13:51:39'),
(6, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS India', 1, '43', '2018-05-28', '2018-07-05 08:22:15', '2018-05-28 13:52:11'),
(7, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS India', 1, '43', '2018-05-28', '2018-07-05 08:22:22', '2018-05-28 13:52:33'),
(8, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS India', 1, '49', '2018-05-28', '2018-07-05 08:22:27', '2018-05-28 13:52:44'),
(9, NULL, 1, 'no-pay', NULL, 2, 'jazz', 'Rajas', 'Pakistan VS India', 2, '44', '2018-05-28', '2018-07-05 08:22:31', '2018-06-23 11:17:01'),
(10, NULL, 1, 'no-pay', NULL, 1, 'jazz', 'Rajas', 'Pakistan VS India', 2, '49', '2018-05-28', '2018-07-05 08:22:35', '2018-06-23 11:17:01'),
(11, NULL, 1, 'pay', NULL, 2, 'jazz', 't Sarfaraz Nawaz', 'Pakistan VS England', 1, '50', '2018-02-22', '2018-07-05 08:22:41', '2018-06-29 09:54:22'),
(12, NULL, 1, 'no-pay', NULL, 1, 'jazz', 't Sarfaraz Nawaz', 'Pakistan VS Pakistani', 1, '30', '2018-02-20', '2018-07-05 08:22:51', '2018-06-30 05:12:38'),
(13, 2, NULL, 'no-pay', NULL, NULL, NULL, 'Rajas', 'Pakistan VS England', 1, '45', '2018-07-05', '2018-07-05 08:22:56', '2018-07-05 06:13:56'),
(14, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Rajas', 'Pakistan VS England', 1, '45', '2018-07-05', '2018-07-05 08:23:01', '2018-07-05 06:21:08'),
(15, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Rajas', 'Pakistan VS England', 1, '35', '2018-07-05', '2018-07-05 08:23:08', '2018-07-05 06:24:06'),
(16, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '30', '2018-07-06', '2018-07-05 09:41:09', '2018-07-05 09:41:09'),
(17, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '40', '2018-07-06', '2018-07-05 09:42:30', '2018-07-05 09:42:30'),
(18, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '45', '2018-07-06', '2018-07-05 09:43:58', '2018-07-05 09:43:58'),
(19, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '50', '2018-07-06', '2018-07-05 09:44:31', '2018-07-05 09:44:31'),
(20, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '49', '2018-07-06', '2018-07-05 09:46:57', '2018-07-05 09:46:57'),
(21, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '20', '2018-07-06', '2018-07-05 09:59:52', '2018-07-05 09:59:52'),
(22, 2, NULL, 'pay', NULL, 2, 'jazz', 'Wasi Akram', 'Pakistan VS England', 1, '29', '2018-07-06', '2018-07-05 10:37:06', '2018-07-05 10:02:47'),
(23, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Wasi Akram', 'Pakistan VS Pakistani', 2, '45', '2018-08-16', '2018-08-16 18:40:55', '2018-08-16 18:40:55'),
(24, 2, NULL, 'no-pay', NULL, 1, 'jazz', 'Wasi Akram', 'Pakistan VS Pakistani', 2, '50', '2018-08-16', '2018-08-16 18:40:55', '2018-08-16 18:40:55'),
(25, 5, NULL, 'pay', NULL, 1, 'jazz', 'Wasi Akram', 'Pakistan VS Austrila', 2, '39', '2018-09-29', '2018-09-29 12:33:35', '2018-09-29 12:31:45'),
(26, 5, NULL, 'no-pay', NULL, 1, 'jazz', 'Wasi Akram', 'Pakistan VS Austrila', 2, '44', '2018-09-29', '2018-09-29 12:31:45', '2018-09-29 12:31:45'),
(27, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Inzamam', 'England VS Austrila', 2, '1', '2018-09-30', '2018-09-30 11:03:31', '2018-09-30 11:03:31'),
(28, 2, NULL, 'no-pay', NULL, 2, 'jazz', 'Inzamam', 'England VS Austrila', 2, '7', '2018-09-30', '2018-09-30 11:03:31', '2018-09-30 11:03:31'),
(29, 9, NULL, 'no-pay', NULL, 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 1, '1', '2018-10-03', '2018-10-03 14:24:13', '2018-10-03 14:24:13'),
(30, 2, NULL, 'no-pay', '212', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 3, '40', '2018-10-03', '2018-10-03 18:52:26', '2018-10-03 17:55:06'),
(31, 2, NULL, 'no-pay', '212', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 3, '45', '2018-10-03', '2018-10-03 18:52:22', '2018-10-03 17:55:06'),
(32, 2, NULL, 'no-pay', '212', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 3, '50', '2018-10-03', '2018-10-03 18:52:18', '2018-10-03 17:55:06'),
(33, 2, NULL, 'no-pay', '5bb50e20997c5', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 1, '20', '2018-10-03', '2018-10-03 18:44:48', '2018-10-03 18:44:48'),
(34, 2, NULL, 'no-pay', '5bb5158894be8', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 1, '15', '2018-10-03', '2018-10-03 19:16:24', '2018-10-03 19:16:24'),
(35, 2, NULL, 'no-pay', '5bb515c582b06', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 4, '14', '2018-10-03', '2018-10-03 19:17:25', '2018-10-03 19:17:25'),
(36, 2, NULL, 'no-pay', '5bb515c582b06', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 4, '19', '2018-10-03', '2018-10-03 19:17:25', '2018-10-03 19:17:25'),
(37, 2, NULL, 'no-pay', '5bb515c582b06', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 4, '24', '2018-10-03', '2018-10-03 19:17:25', '2018-10-03 19:17:25'),
(38, 2, NULL, 'no-pay', '5bb515c582b06', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 4, '29', '2018-10-03', '2018-10-03 19:17:25', '2018-10-03 19:17:25'),
(39, 2, NULL, 'pay', '5bb51b3eb4e60', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 2, '13', '2018-10-03', '2018-10-03 19:48:49', '2018-10-03 19:40:46'),
(40, 2, NULL, 'pay', '5bb51b3eb4e60', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 2, '18', '2018-10-03', '2018-10-03 19:48:49', '2018-10-03 19:40:46'),
(41, 2, NULL, 'no-pay', '5bb51d3ea02aa', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '40', '2018-10-03', '2018-10-03 19:49:18', '2018-10-03 19:49:18'),
(42, 2, NULL, 'no-pay', '5bb51d3ea02aa', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '45', '2018-10-03', '2018-10-03 19:49:18', '2018-10-03 19:49:18'),
(43, 2, NULL, 'no-pay', '5bb51d71f3601', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '14', '2018-10-03', '2018-10-03 19:50:09', '2018-10-03 19:50:09'),
(44, 2, NULL, 'no-pay', '5bb51d71f3601', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '15', '2018-10-03', '2018-10-03 19:50:10', '2018-10-03 19:50:10'),
(45, 2, NULL, 'no-pay', '5bb51db7bcb3c', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '14', '2018-10-03', '2018-10-03 19:51:19', '2018-10-03 19:51:19'),
(46, 2, NULL, 'no-pay', '5bb51db7bcb3c', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '15', '2018-10-03', '2018-10-03 19:51:19', '2018-10-03 19:51:19'),
(47, 2, NULL, 'pay', '5bb51dbc6b5a9', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '14', '2018-10-03', '2018-10-03 19:58:45', '2018-10-03 19:51:24'),
(48, 2, NULL, 'pay', '5bb51dbc6b5a9', 14, 'samanabad', 'Rajas', 'lahore qalander VS England', 2, '15', '2018-10-03', '2018-10-03 19:58:45', '2018-10-03 19:51:24'),
(49, 2, NULL, 'no-pay', '5bb5e015d443f', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 2, '35', '2018-10-04', '2018-10-04 09:40:37', '2018-10-04 09:40:37'),
(50, 2, NULL, 'no-pay', '5bb5e015d443f', 14, 'samanabad', 't Sarfaraz Nawaz', 'lahore qalander VS England', 2, '40', '2018-10-04', '2018-10-04 09:40:38', '2018-10-04 09:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `ground_id` int(11) UNSIGNED DEFAULT NULL,
  `T20` varchar(255) DEFAULT NULL,
  `oneday` varchar(255) DEFAULT NULL,
  `test` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `ground_id`, `T20`, `oneday`, `test`, `created_at`, `updated_at`) VALUES
(3, 7, '8AM-10:30AM', '1:30PM-6:30PM', '8AM-4:00PM', '2018-08-06 20:13:29', '2018-08-06 20:13:29'),
(16, 11, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-06 20:20:48', '2018-08-06 20:20:48'),
(17, 11, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-06 20:20:48', '2018-08-06 20:20:48'),
(18, 11, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-06 20:20:48', '2018-08-06 20:20:48'),
(19, 11, '8PM-10:30PM', '', '', '2018-08-06 20:20:48', '2018-08-06 20:20:48'),
(20, 12, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-06 20:21:38', '2018-08-06 20:21:38'),
(21, 12, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-06 20:21:38', '2018-08-06 20:21:38'),
(22, 12, '8PM-10:30PM', '', '', '2018-08-06 20:21:38', '2018-08-06 20:21:38'),
(23, 13, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-06 20:22:39', '2018-08-06 20:22:39'),
(24, 13, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-06 20:22:40', '2018-08-06 20:22:40'),
(25, 13, '8PM-10:30PM', '', '', '2018-08-06 20:22:40', '2018-08-06 20:22:40'),
(26, 14, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-06 20:23:17', '2018-08-06 20:23:17'),
(27, 14, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-06 20:23:17', '2018-08-06 20:23:17'),
(28, 14, '8PM-10:30PM', '', '', '2018-08-06 20:23:17', '2018-08-06 20:23:17'),
(29, 15, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-06 20:24:53', '2018-08-06 20:24:53'),
(30, 15, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-06 20:24:53', '2018-08-06 20:24:53'),
(31, 15, '8PM-10:30PM', '', '', '2018-08-06 20:24:54', '2018-08-06 20:24:54'),
(32, 16, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-07 19:56:36', '2018-08-07 19:56:36'),
(33, 16, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-07 19:56:36', '2018-08-07 19:56:36'),
(34, 16, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-07 19:56:36', '2018-08-07 19:56:36'),
(35, 16, '5PM-7:30PM', '', '', '2018-08-07 19:56:36', '2018-08-07 19:56:36'),
(36, 16, '8PM-10:30PM', '', '', '2018-08-07 19:56:36', '2018-08-07 19:56:36'),
(37, 17, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-07 19:59:05', '2018-08-07 19:59:05'),
(38, 17, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-07 19:59:05', '2018-08-07 19:59:05'),
(39, 17, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-07 19:59:05', '2018-08-07 19:59:05'),
(40, 17, '5PM-7:30PM', '', '', '2018-08-07 19:59:05', '2018-08-07 19:59:05'),
(41, 17, '8PM-10:30PM', '', '', '2018-08-07 19:59:06', '2018-08-07 19:59:06'),
(42, 18, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-07 20:01:23', '2018-08-07 20:01:23'),
(43, 18, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-07 20:01:24', '2018-08-07 20:01:24'),
(44, 18, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-07 20:01:24', '2018-08-07 20:01:24'),
(45, 18, '5PM-7:30PM', '', '', '2018-08-07 20:01:24', '2018-08-07 20:01:24'),
(46, 18, '8PM-10:30PM', '', '', '2018-08-07 20:01:24', '2018-08-07 20:01:24'),
(47, 19, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-07 20:02:19', '2018-08-07 20:02:19'),
(48, 19, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-07 20:02:20', '2018-08-07 20:02:20'),
(49, 19, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-07 20:02:20', '2018-08-07 20:02:20'),
(50, 19, '5PM-7:30PM', '', '', '2018-08-07 20:02:20', '2018-08-07 20:02:20'),
(51, 19, '8PM-10:30PM', '', '', '2018-08-07 20:02:20', '2018-08-07 20:02:20'),
(52, 20, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-07 20:05:06', '2018-08-07 20:05:06'),
(53, 20, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-07 20:05:06', '2018-08-07 20:05:06'),
(54, 20, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-07 20:05:06', '2018-08-07 20:05:06'),
(55, 20, '5PM-7:30PM', '', '', '2018-08-07 20:05:06', '2018-08-07 20:05:06'),
(56, 20, '8PM-10:30PM', '', '', '2018-08-07 20:05:06', '2018-08-07 20:05:06'),
(57, 21, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-07 20:17:51', '2018-08-07 20:17:51'),
(58, 21, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-07 20:17:52', '2018-08-07 20:17:52'),
(59, 21, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-07 20:17:52', '2018-08-07 20:17:52'),
(60, 21, '5PM-7:30PM', '', '', '2018-08-07 20:17:52', '2018-08-07 20:17:52'),
(61, 21, '8PM-10:30PM', '', '', '2018-08-07 20:17:52', '2018-08-07 20:17:52'),
(62, 22, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-08 17:47:48', '2018-08-08 17:47:48'),
(63, 22, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-08 17:47:49', '2018-08-08 17:47:49'),
(64, 22, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-08 17:47:49', '2018-08-08 17:47:49'),
(65, 22, '5PM-7:30PM', '', '', '2018-08-08 17:47:49', '2018-08-08 17:47:49'),
(66, 22, '8PM-10:30PM', '', '', '2018-08-08 17:47:49', '2018-08-08 17:47:49'),
(67, 23, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-08 17:48:37', '2018-08-08 17:48:37'),
(68, 23, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-08 17:48:37', '2018-08-08 17:48:37'),
(69, 23, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-08 17:48:37', '2018-08-08 17:48:37'),
(70, 23, '5PM-7:30PM', '', '', '2018-08-08 17:48:37', '2018-08-08 17:48:37'),
(71, 23, '8PM-10:30PM', '', '', '2018-08-08 17:48:37', '2018-08-08 17:48:37'),
(72, 24, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-08 17:49:38', '2018-08-08 17:49:38'),
(73, 24, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-08 17:49:38', '2018-08-08 17:49:38'),
(74, 24, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-08 17:49:38', '2018-08-08 17:49:38'),
(75, 24, '5PM-7:30PM', '', '', '2018-08-08 17:49:39', '2018-08-08 17:49:39'),
(76, 24, '8PM-10:30PM', '', '', '2018-08-08 17:49:39', '2018-08-08 17:49:39'),
(77, 25, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-08 17:51:34', '2018-08-08 17:51:34'),
(78, 25, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-08 17:51:34', '2018-08-08 17:51:34'),
(79, 25, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-08 17:51:34', '2018-08-08 17:51:34'),
(80, 25, '5PM-7:30PM', '', '', '2018-08-08 17:51:34', '2018-08-08 17:51:34'),
(81, 25, '8PM-10:30PM', '', '', '2018-08-08 17:51:34', '2018-08-08 17:51:34'),
(82, 26, '8AM-10:30AM', '8AM-1:00PM', '8AM-4:00PM', '2018-08-08 17:52:28', '2018-08-08 17:52:28'),
(83, 26, '11AM-1:30PM', '1:30PM-6:30PM', '', '2018-08-08 17:52:28', '2018-08-08 17:52:28'),
(84, 26, '2PM-4:30PM', '7PM-12:00AM', '', '2018-08-08 17:52:28', '2018-08-08 17:52:28'),
(85, 26, '5PM-7:30PM', '', '', '2018-08-08 17:52:28', '2018-08-08 17:52:28'),
(86, 26, '8PM-10:30PM', '', '', '2018-08-08 17:52:28', '2018-08-08 17:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Haziq', 'haziq1@gmail.com', '$2y$10$v0nWzPiPGUVAV0GdnLHl5OvhN2iL.mEfA9QmlCU9gdM1xuuZRrRaO', 'user', 'lglmY4SoNviDzgVC8GnssuXIJcmDeGBMsx9JiPhbl7V5cI1aebHMHnmuoL5t', '2017-12-06 06:48:57', '2017-12-06 06:48:57'),
(3, 'Hamza', 'hamza@gmail.com', '$2y$10$Y5yyWKRyhK8NVd/QzLr17eYI4Ub1QX/Lw8VYV9ABmclacdkcExPbu', 'user', 'mOYwsRna2Iev5eWxsR0DtZuyGAFiXh7FHdo3xPGSJAzyA7Z6jsqIm4172K2K', '2017-12-29 14:41:50', '2017-12-29 14:41:50'),
(4, 'imran', 'aa@gmail.com', '$2y$10$P4ZkTjoxzOu/e0NvZTaVPOvT0xeCBX/6LwkXaLUK.YELGXJu0x2Ze', 'user', 'Z55V3rWkwsJ3jfqwyLtS9Ca3NYMIuI5p2n7iyzPorTBuJP4kwbdWPwDr9Ou5', '2018-02-13 02:32:14', '2018-02-13 02:32:14'),
(5, 'hazii', 'muhammadhaziq341@gmail.com', '$2y$10$xtcfLBBVVup78y3886h0zOncqQ7OEL6JERSFjhokbVErv6FqHku8m', 'user', '0Vm0oZY9LTqqZnE4kwodLseW85XhNiew6gz3k2HmdlU9LWCxx9NlKM0kqJrJ', '2018-03-16 00:24:31', '2018-09-29 06:50:24'),
(6, 'Haziq', 'muhammadhazii001@gmail.com', '$2y$10$HIUKVevGenDQtBQXZJlI3.DDeaXwnPGroBXrto..LW0IaXHJnmwNO', 'user', 'yY4ykP7SSCfdlGXKd1FS5GHnBwNLZe4F2b45bT91ONpCvQdoPij4f2OJArGp', '2018-03-16 02:01:22', '2018-03-16 02:01:22'),
(7, 'Asif', 'Asif@gmail.com', '$2y$10$SftMNoMtl5zYPJI8SkBxIO8Efi0OrWs1ntOzEibMXoYseQ.9a3tRS', 'user', NULL, '2018-10-01 11:35:04', '2018-10-01 11:35:04'),
(8, 'umar', 'umar1@gmail.com', '$2y$10$GAi1UT3xJDVV92J7Aqmf/uHWYbLpJYxMYgR.HYteeOjbncn2ZCHOC', 'user', 'bgTC8YSphk2u2TGEh0PPV38XM9vGQhGVbjpeWcGLY7lXk1PyR3z5h51FdwWN', '2018-10-03 08:44:01', '2018-10-03 08:44:01'),
(9, 'qasim', 'qasim@gmail.com', '$2y$10$evteQL3Gxwsx9AL4wXngi.2JrwNaUaCQdUnGzUG3jQ0HQZOc92YF.', 'user', NULL, '2018-10-03 08:53:55', '2018-10-03 08:53:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `groundbooks`
--
ALTER TABLE `groundbooks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `livescores`
--
ALTER TABLE `livescores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newgroundregister`
--
ALTER TABLE `newgroundregister`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postnews`
--
ALTER TABLE `postnews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `postnews_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_name` (`team_name`),
  ADD KEY `Foreign key` (`user_id`);

--
-- Indexes for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ground_id` (`ground_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `groundbooks`
--
ALTER TABLE `groundbooks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `livescores`
--
ALTER TABLE `livescores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `newgroundregister`
--
ALTER TABLE `newgroundregister`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `postnews`
--
ALTER TABLE `postnews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `ticketbooking`
--
ALTER TABLE `ticketbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `groundbooks`
--
ALTER TABLE `groundbooks`
  ADD CONSTRAINT `FK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `groundbooks_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newgroundregister`
--
ALTER TABLE `newgroundregister`
  ADD CONSTRAINT `newgroundregister_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `postnews`
--
ALTER TABLE `postnews`
  ADD CONSTRAINT `postnews_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`);

--
-- Constraints for table `times`
--
ALTER TABLE `times`
  ADD CONSTRAINT `times_ibfk_1` FOREIGN KEY (`ground_id`) REFERENCES `newgroundregister` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
