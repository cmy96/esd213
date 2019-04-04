-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2019 at 09:31 AM
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
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `BID` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL,
  `SessionID` int(11) NOT NULL,
  `Availability` int(11) NOT NULL,
  PRIMARY KEY (`BID`),
  KEY `LocationID` (`LocationID`),
  KEY `SessionID` (`SessionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`BID`, `LocationID`, `SessionID`, `Availability`) VALUES
(1, 1, 3, 1),
(3, 1, 0, 1);

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
  `BID` int(11) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  PRIMARY KEY (`bookingID`),
  KEY `SessionID` (`SessionID`),
  KEY `UID` (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `UID`, `SessionID`, `Date`, `Status`, `BID`, `PostalCode`) VALUES
(2, 1, 3, '2019-02-14 00:00:00', 'Paid', 0, 0),
(3, 0, 0, '2019-03-23 14:53:14', 'Accepted', 0, 0),
(4, 0, 0, '2019-03-23 15:32:32', 'Accepted', 0, 0),
(5, 0, 0, '2019-03-27 07:26:27', 'Open', 0, 0),
(6, 0, 0, '2019-03-27 07:53:58', 'Open', 0, 0),
(7, 0, 0, '2019-03-27 08:10:12', 'Open', 0, 0),
(11, 0, 0, '2019-03-27 08:36:13', 'Open', 0, 0),
(12, 0, 0, '2019-03-27 08:55:09', 'Open', 0, 0),
(13, 2, 3, '2019-03-23 14:53:14', 'Open', 0, 0),
(14, 0, 0, '2019-03-27 10:22:46', 'Open', 0, 0),
(15, 0, 0, '2019-03-27 10:22:46', 'Open', 0, 0),
(16, 0, 0, '2019-03-27 10:26:13', 'Open', 0, 0),
(17, 0, 0, '2019-03-27 10:33:15', 'Open', 0, 0),
(18, 0, 0, '2019-03-27 10:37:27', 'Open', 0, 0),
(19, 0, 0, '2019-03-27 11:25:51', 'Open', 0, 0),
(20, 0, 0, '2019-03-27 12:21:39', 'Open', 0, 0),
(21, 0, 3, '2019-03-27 15:53:18', 'Open', 0, 0),
(22, 0, 3, '2019-03-27 17:05:41', 'Open', 0, 0),
(23, 0, 0, '2019-03-28 09:37:39', 'Open', 0, 0),
(24, 0, 3, '2019-03-29 06:10:48', 'Open', 0, 0),
(25, 0, 3, '2019-03-29 06:24:53', 'Open', 0, 0),
(26, 0, 0, '2019-03-29 09:29:35', 'Open', 0, 0),
(27, 0, 0, '2019-04-04 02:04:43', 'Open', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `LocationID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `PostalCode` int(11) NOT NULL,
  `UnitNo` varchar(10) NOT NULL,
  PRIMARY KEY (`LocationID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationID`, `BID`, `PostalCode`, `UnitNo`) VALUES
(1, 1, 689668, '#06-02');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `SessionID` int(11) NOT NULL AUTO_INCREMENT,
  `Time` datetime NOT NULL,
  PRIMARY KEY (`SessionID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `teleID` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `Name`, `teleID`, `email`) VALUES
(1, 'Adrian', '1', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
