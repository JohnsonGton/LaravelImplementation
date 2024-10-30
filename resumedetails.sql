-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 01:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `resumedetails`
--

CREATE TABLE `resumedetails` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `skill1` varchar(50) NOT NULL,
  `skill2` varchar(50) NOT NULL,
  `skill3` varchar(50) NOT NULL,
  `skill4` varchar(50) NOT NULL,
  `exp1` varchar(50) NOT NULL,
  `exp2` varchar(50) NOT NULL,
  `exp3` varchar(50) NOT NULL,
  `exp4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumedetails`
--

INSERT INTO `resumedetails` (`fullname`, `email`, `phone`, `skill1`, `skill2`, `skill3`, `skill4`, `exp1`, `exp2`, `exp3`, `exp4`) VALUES
('Johnson Gahaton', 'johnsonzablan2@gmail.com', '09650917330', 'leadership', 'fastlearner', 'UI&UX', 'Fluent in English', 'frontend', 'Web Design', 'Quality Assurance', 'Graphic Design');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
