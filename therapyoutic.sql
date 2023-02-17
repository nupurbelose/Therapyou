-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2023 at 06:06 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `therapyoutic`
--

-- --------------------------------------------------------

--
-- Table structure for table `ap_users`
--

DROP TABLE IF EXISTS `ap_users`;
CREATE TABLE IF NOT EXISTS `ap_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ap_users`
--

INSERT INTO `ap_users` (`id`, `fullname`, `phone`, `Email`, `doctor`, `date`, `time`) VALUES
(1, 'nupur belose', '8169624259', 'nupur1@gmail.com', 'Dr.Gorav Gupta', '2023-02-03', '06:30:00'),
(3, 'nupur belose', '0816962425', 'belosenupur10@gmail.com', 'Dr.Vasantha Jayarama', '2023-02-09', '18:20:00'),
(6, 'nupur belose', '2147483647', 'nupur1@gmail.com', 'Dr.Murali Raj', '2023-02-25', '23:00:00'),
(5, 'nupur belose', '0816962425', 'belosenupur10@gmail.com', 'Dr.Vasantha Jayarama', '2023-02-09', '18:20:00'),
(7, 'nupur belose', '0214748364', 'nupur1@gmail.com', 'Dr.Sameer Malhotra', '2023-02-17', '20:05:00'),
(8, 'nupur belose', '8169624259', 'nupur1@gmail.com', 'Dr.Jyoti Maheshwari', '2023-02-24', '21:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

DROP TABLE IF EXISTS `chatbot`;
CREATE TABLE IF NOT EXISTS `chatbot` (
  `id` int NOT NULL AUTO_INCREMENT,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `Phone` int NOT NULL,
  `mail` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `Phone`, `mail`, `message`) VALUES
(1, 'nupur', 987654321, 'nupur2@gmail.com', 'hii'),
(4, 'hii', 2147483647, 'nupur1@gmail.com', 'jjjkk'),
(5, 'n', 2147483647, 'nupur4@gmail.com', 'hii'),
(6, 'arfan', 2147483647, 'nupur4@gmail.com', 'hello'),
(7, 'n', 2147483647, 'nupur4@gmail.com', 'www'),
(8, 'nuppura', 2147483647, 'nupur4@gmail.com', 'hmmmmmm'),
(9, 'n', 987654321, 'nupur2@gmail.com', 'aaaaaaaaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `e_name` varchar(20) NOT NULL,
  `deets` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

DROP TABLE IF EXISTS `signup`;
CREATE TABLE IF NOT EXISTS `signup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmpass` varchar(10) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `username`, `email`, `password`, `confirmpass`, `user_type`) VALUES
(1, 'nupur', 'nupur2@gmail.com', '12345', '12345', ''),
(3, 'n', 'n1@gmail.com', '1', '1', 'user'),
(4, 'a', 'a1@gmail.com', '1', '1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

DROP TABLE IF EXISTS `ticket`;
CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `event` varchar(20) NOT NULL,
  `e_number` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `Name`, `email`, `event`, `e_number`, `date`) VALUES
(1, 'nupur belose', 'belosenupur10@gmail.com', 'standard-access', 'st', '0000-00-00'),
(2, 'nupur belose', 'nupur1@gmail.com', 'Human Library', 'E1', '0000-00-00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
