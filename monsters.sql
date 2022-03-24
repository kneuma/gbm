-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 26, 2018 at 06:24 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monsters`
--

-- --------------------------------------------------------

--
-- Table structure for table `highscores`
--

DROP TABLE IF EXISTS `highscores`;
CREATE TABLE IF NOT EXISTS `highscores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `wins` int(5) NOT NULL,
  `losses` int(5) NOT NULL,
  `draws` int(5) NOT NULL,
  `winRatio` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `highscores`
--

INSERT INTO `highscores` (`id`, `name`, `wins`, `losses`, `draws`, `winRatio`) VALUES
(71, 'Ryan', 1, 0, 0, '0'),
(66, 'Kayla', 51, 1, 2, '0'),
(67, 'Colin', 0, 44, 1, '0'),
(68, 'Marissa', 0, 2, 0, '0'),
(69, 'James', 0, 4, 0, '0'),
(70, 'Dianna', 0, 1, 0, '0'),
(65, 'Colin Forest', 0, 1, 0, '0'),
(63, 'Kayla Shimbashi', 2, 0, 0, '0'),
(64, 'Lindsay Coley', 0, 1, 0, '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
