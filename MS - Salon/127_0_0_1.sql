-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 26, 2019 at 10:04 AM
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
-- Database: `db_salon`
--
CREATE DATABASE IF NOT EXISTS `db_salon` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_salon`;

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `SessionID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `LocationID` int(11) NOT NULL,
  `Availability` int(11) NOT NULL,
  `timeslot` datetime NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`SessionID`),
  KEY `LocationID` (`LocationID`),
  KEY `SessionID` (`SessionID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`SessionID`, `BID`, `LocationID`, `Availability`, `timeslot`, `price`) VALUES
(1, 1, 2, 3, '2002-05-30 09:00:00', 12.05);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `bookingID` int(11) NOT NULL AUTO_INCREMENT,
  `UID` int(11) NOT NULL,
  `SessionID` int(11) NOT NULL,
  `booking_status` varchar(10) NOT NULL,
  PRIMARY KEY (`bookingID`),
  KEY `SessionID` (`SessionID`),
  KEY `UID` (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `UID`, `SessionID`, `booking_status`) VALUES
(1, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `LocationID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `Postal_Code` int(11) NOT NULL,
  `Unit_Number` varchar(10) NOT NULL,
  `region` varchar(20) NOT NULL,
  PRIMARY KEY (`LocationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

DROP TABLE IF EXISTS `salon`;
CREATE TABLE IF NOT EXISTS `salon` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Description` varchar(400) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`BID`, `Name`, `Description`) VALUES
(1, 'HappyGoLucky', 'Happy salon'),
(2, 'HappyGoLucy', 'Lucky salon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
