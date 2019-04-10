-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2019 at 07:57 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payment`
--
CREATE DATABASE IF NOT EXISTS `payment` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `payment`;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `PaymentID` int(11) NOT NULL AUTO_INCREMENT,
  `SessionID` int(11) NOT NULL,
  `BID` int(11) NOT NULL,
  `timeslot` datetime NOT NULL,
  `Amount` float(200,2) NOT NULL,
  PRIMARY KEY (`PaymentID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`PaymentID`, `SessionID`, `BID`, `timeslot`, `Amount`) VALUES
(1, 1, 1, '2002-05-30 09:00:00', 15.00),
(2, 1, 1, '2004-05-30 10:00:00', 33.00),
(3, 1, 1, '2002-05-30 09:00:00', 10.00),
(4, 1, 2, '2002-05-30 09:00:00', 20.00),
(5, 1, 2, '2019-05-30 09:00:00', 20.00),
(6, 1, 2, '2019-05-30 09:00:00', 20.00),
(7, 28, 2, '2019-05-30 09:00:00', 20.00),
(8, 28, 28, '2019-05-30 09:00:00', 20.00),
(9, 1, 30, '2019-04-04 09:06:21', 20.00),
(10, 1, 30, '2019-04-04 09:07:12', 20.00),
(11, 1, 37, '2019-04-04 09:33:12', 20.00),
(12, 1, 31, '2019-04-04 12:48:27', 20.00),
(13, 1, 3, '2019-04-04 02:56:00', 20.00),
(14, 1, 3, '2019-04-04 02:56:31', 20.00),
(15, 1, 3, '2019-04-04 02:57:08', 20.00),
(16, 1, 4, '2019-04-05 01:26:14', 20.00),
(17, 1, 2, '2019-04-05 02:48:13', 20.00),
(18, 1, 17, '2019-04-05 03:53:18', 20.00),
(19, 1, 34, '2019-04-05 04:21:26', 20.00),
(20, 1, 37, '2019-04-09 08:37:58', 20.00),
(21, 1, 37, '2019-04-09 08:43:58', 20.00);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
