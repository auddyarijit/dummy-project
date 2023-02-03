-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2023 at 05:37 PM
-- Server version: 8.0.31-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techsum`
--

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int NOT NULL,
  `position` varchar(50) NOT NULL,
  `resume` varchar(50) NOT NULL,
  `create_time` timestamp NOT NULL,
  `update_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `name`, `email`, `contact`, `position`, `resume`, `create_time`, `update_time`) VALUES
(1, 'payal', 'employee@gmail.com', 2147483647, 'Web Developer', 'uploads/resume', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'payal', '', 2147483647, '', 'uploads/resume', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'payal', 'employee@gmail.com', 2147483647, 'Graphic Designer', 'uploads/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'payal', 'employee@gmail.com', 2147483647, 'PHP Development- Lead ', 'uploads/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'payal', 'employee@gmail.com', 2147483647, 'Operations Executive', 'uploads/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'payal', 'pratikshagupta@gmail.com', 2147483647, 'PHP Development- Lead ', 'uploads/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'payal', 'pratikshagupta@gmail.com', 2147483647, 'Operations Executive', 'uploads/', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'payal', 'employee@gmail.com', 2147483647, 'Operations Executive', 'uploads/', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `msg`) VALUES
(1, 'pratiksha', 'pratiksha@gmail.com', '1234567890', 'hello'),
(2, '', '', '', ''),
(3, 'payal', 'admin@gmail.com', '9876543221', 'gfvcbfcfnbgfc'),
(4, 'james', 'james12@gmail.com', '763535353', 'techsum'),
(5, 'Uzair ', 'uzair2@gmail.com', '632838r', 'Hi'),
(6, 'Yalmaz', 'uzair2@gmail.com', '632838eeee', 'Jjjj'),
(7, 'Yalmaz', 'uzair2@gmail.com', 'eeee', 'Jjjj'),
(8, '', '', '', ''),
(9, 'pratiksha gupta', 'employee@gmail.com', '09876543210', 'fsd'),
(10, 'pratiksha gupta', 'employee@gmail.com', '09876543210', 'fdgzsdgvdx'),
(11, 'pratiksha gupta', 'employee@gmail.com', '09876543210', 'hello'),
(12, 'pratiksha gupta', 'employee@gmail.com', '09876543210', 'hello');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
