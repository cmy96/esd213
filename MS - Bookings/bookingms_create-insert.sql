-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2019 at 05:12 PM
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
-- Database: `bookings`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingID` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) NOT NULL,
  `SessionID` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Status` varchar(10) NOT NULL,
  PRIMARY KEY (`bookingID`),
  KEY `SessionID` (`SessionID`),
  KEY `UID` (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `UID`, `SessionID`, `Date`, `Status`) VALUES
(2, 1, 3, '2019-02-14 00:00:00', 'Open'),
(3, 0, 0, '2019-03-23 14:53:14', 'Open'),
(4, 0, 0, '2019-03-23 15:32:32', 'Open'),
(5, 0, 0, '2019-03-27 07:26:27', 'Open'),
(6, 0, 0, '2019-03-27 07:53:58', 'Open'),
(7, 0, 0, '2019-03-27 08:10:12', 'Open'),
(11, 0, 0, '2019-03-27 08:36:13', 'Open'),
(12, 0, 0, '2019-03-27 08:55:09', 'Open'),
(13, 2, 3, '2019-03-23 14:53:14', 'Open'),
(14, 0, 0, '2019-03-27 10:22:46', 'Open'),
(15, 0, 0, '2019-03-27 10:22:46', 'Open'),
(16, 0, 0, '2019-03-27 10:26:13', 'Open'),
(17, 0, 0, '2019-03-27 10:33:15', 'Open'),
(18, 0, 0, '2019-03-27 10:37:27', 'Open'),
(19, 0, 0, '2019-03-27 11:25:51', 'Open'),
(20, 0, 0, '2019-03-27 12:21:39', 'Open'),
(21, 0, 3, '2019-03-27 15:53:18', 'Open'),
(22, 0, 3, '2019-03-27 17:05:41', 'Open');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
