-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2019 at 03:29 PM
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
-- Database: `bookstore`
--
DROP DATABASE IF EXISTS `bookstore`;
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `title` varchar(64) NOT NULL,
  `isbn13` char(13) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` int(11) DEFAULT NULL,
  PRIMARY KEY (`isbn13`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`title`, `isbn13`, `price`, `availability`) VALUES
('SQL in Nutshell', '9781129474251', '21.50', 2),
('Understanding People', '9781349471231', '99.40', 25),
('Happy in Workplace', '9781434474234', '94.00', 1),
('PHP Soup', '9781442374221', '20.50', 2),
('Brief History of Time', '9781449474211', '20.00', 23),
('It', '9781449474212', '1.00', 2),
('Founder of Php', '9781449474221', '34.00', 1),
('Albert Enstein\'s Works', '9781449474223', '18.00', 7),
('Interstellar', '9781449474254', '10.00', 4),
('Milk and Honey', '9781449474256', '25.00', 18),
('Cooking Book', '9781449474323', '99.90', 4),
('The Gathering', '9781449474342', '20.00', 50),
('Tale of Zelda', '9781449474453', '33.40', 21);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `username` varchar(32) NOT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `password` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`username`, `gender`, `password`, `name`) VALUES
('apple', 'male', '$2y$10$5R5QAN/bOSz0/ARxAzB/meUnjC9PVMHBoMbGp.O1PgXiOxQSarAZu', 'Apple TAN'),
('orange', 'female', '$2y$10$sxy4yfGsVZER6rylbaMaI.rGubMg/ituRBaJ3vY..eSRakPsS74VC', 'Orange TAN'),
('pear', 'male', '$2y$10$DpCQXba9AwA086Et7yAq.Ok9ihHy1uNvawvb3bvdTMw26nyS0JLae', 'Pear TAN');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(32) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `timestamp`) VALUES
(5, 'Apple TAN', '2018-11-14 14:42:31'),
(6, 'Apple TAN', '2018-11-14 14:42:39'),
(7, 'Apple TAN', '2018-11-14 14:43:51'),
(8, 'Apple TAN', '2018-12-07 03:17:06'),
(9, 'Apple TAN', '2018-12-26 03:15:07'),
(10, 'Apple TAN', '2019-01-11 06:36:58');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `book_id` char(13) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `FK_order_id` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `book_id`, `quantity`) VALUES
(5, 5, '9781434474234', 1),
(6, 5, '9781449474212', 1),
(7, 5, '9781449474254', 2),
(8, 6, '9781449474223', 1),
(9, 7, '9781449474254', 1),
(10, 8, '9781442374221', 1),
(11, 9, '9781349471231', 1),
(12, 9, '9781449474223', 1),
(13, 10, '9781129474251', 1),
(14, 10, '9781434474234', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `FK_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
