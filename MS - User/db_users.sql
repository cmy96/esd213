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
-- Database: `db_users`
--
CREATE DATABASE IF NOT EXISTS `db_users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_users`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `UID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `CardNo` varchar(16) NOT NULL,
  `TelegramID` varchar(50) NOT NULL,
  `Hairstyle_link` varchar(1000) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `Name`, `Phone`, `Email`, `CardNo`, `TelegramID`, `Hairstyle_link`) VALUES
(1, 'Justin', '90900000', 'justin.choy.2017@sis.smu.edu.sg', '1234567891234567', '@A_CUT_ABOVE_NOTIFICATION', 'https://hairstyles.thehairstyler.com/hairstyles/images/20179/icon/short-bob-hairstyle.jpg'),
(2, 'User2', '90901234', '123@gmail.com', '1234567892345678', '@A_CUT_ABOVE_NOTIFICATION', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_pass`
--

DROP TABLE IF EXISTS `user_pass`;
CREATE TABLE IF NOT EXISTS `user_pass` (
  `UID` int(100) NOT NULL AUTO_INCREMENT,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_pass`
--

INSERT INTO `user_pass` (`UID`, `Username`, `Password`) VALUES
(1, 'adrian_user', '91932b96068e2bde967c23e9489e27c7acf8c6d33baeb107700f576419adae60'),
(2, 'user2_user', '616104ebd93e67ae20bac90c86483da3cae1ee5b1c1483f739372a88ff1e79f9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
