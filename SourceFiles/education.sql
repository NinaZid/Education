-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2017 at 09:42 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

DROP TABLE IF EXISTS `schools`;
CREATE TABLE IF NOT EXISTS `schools` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `max_students` int(4) NOT NULL,
  `fee` int(10) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`name`, `address`, `max_students`, `fee`, `id`) VALUES
('Sv. Kliment Ohridski', 'u.l. Ohridska', 250, 150, 1),
('O.U. Goce Delcev', 'u.l. Delceva', 300, 170, 2),
('O.U. Dobre Jovanoski', 'u.l. Jovanoski', 300, 160, 3),
('O.U Koco Racin', 'ul. Racinova', 345, 300, 12);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `birthday` date NOT NULL,
  `school_id` int(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`first_name`, `last_name`, `birthday`, `school_id`, `id`, `image`) VALUES
('Jana', 'Janeva', '1978-12-31', 1, 49, 'uploads/woman.jpg'),
('Pece', 'Pecev', '1988-12-31', 3, 48, 'uploads/man.png'),
('Batman', 'Batmanov', '1987-04-05', 3, 47, 'uploads/male.png'),
('Ana', 'Anevskaaa', '1879-03-05', 12, 46, 'uploads/FemaleSilouet.jpg'),
('Ace', 'Aceski', '1987-01-02', 2, 45, 'uploads/man.png'),
('Nina', 'Zidrovska', '2017-12-01', 1, 42, 'uploads/female.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
