-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2019 at 07:58 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`SessionID`, `BID`, `LocationID`, `Availability`, `timeslot`, `price`) VALUES
(1, 1, 1, 8, '2002-05-30 09:00:00', 15),
(2, 2, 2, 10, '2019-03-28 15:45:23', 5),
(3, 3, 3, 12, '2019-03-28 16:20:04', 25),
(4, 4, 4, 10, '2019-03-29 02:55:27', 20.55),
(5, 1, 1, 1, '2019-04-03 03:52:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
CREATE TABLE IF NOT EXISTS `location` (
  `LocationID` int(11) NOT NULL AUTO_INCREMENT,
  `BID` int(11) NOT NULL,
  `Postal_Code` int(6) NOT NULL,
  `Unit_Number` varchar(10) NOT NULL,
  `region` varchar(20) NOT NULL,
  `Description` varchar(400) NOT NULL,
  PRIMARY KEY (`LocationID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`LocationID`, `BID`, `Postal_Code`, `Unit_Number`, `region`, `Description`) VALUES
(1, 1, 178906, '#01-62 ', 'Central', '15 Stamford Rd, #01-62 Capitol Piazza, Singapore 178906'),
(2, 2, 188030, '', 'Central', '241A Victoria St, Bugis Village, Singapore 188030'),
(3, 3, 757713, '', 'North', '30 Sembawang Dr, Singapore 757713'),
(4, 4, 520510, '', 'East', '510 Tampines Central 1, Singapore 520510'),
(5, 5, 307632, '', 'Central', '191 Thomson Rd, Singapore 307632'),
(6, 5, 640494, ' #01-132', 'West', '494 Jurong West Street 41, #01-132, Singapore 640494');

-- --------------------------------------------------------

--
-- Table structure for table `salon`
--

DROP TABLE IF EXISTS `salon`;
CREATE TABLE IF NOT EXISTS `salon` (
  `BID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  PRIMARY KEY (`BID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salon`
--

INSERT INTO `salon` (`BID`, `Name`) VALUES
(1, 'PREP Luxe'),
(2, 'Zeal Salon'),
(3, 'Lili Beauty'),
(4, 'Full House Salon'),
(5, 'Super Cuts'),
(6, 'Xquizit Hair Design');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
