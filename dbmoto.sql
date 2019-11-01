-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 05:29 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbmoto`
--
CREATE DATABASE IF NOT EXISTS `dbmoto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbmoto`;

-- --------------------------------------------------------

--
-- Table structure for table `motos`
--

CREATE TABLE IF NOT EXISTS `motos` (
  `moto_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `description` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `moto_price` int(6) NOT NULL,
  `img_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motos`
--

INSERT INTO `motos` (`moto_id`, `year`, `description`, `image`, `moto_price`, `img_id`) VALUES
(101, 2018, 'Triumph Bonneville Bobber', '1smallT.png', 34200, 'myImg'),
(102, 2019, 'Triumph Speedmaster', '2smallT.png', 33000, 'myImg1'),
(103, 2018, 'Triumph Scrambler 800 XE', '3smallT.png', 23000, 'myImg2'),
(104, 2019, 'Triumph 2019 Tiger 1200 XRX Low', '4smallT.png', 19800, 'myImg3'),
(105, 2019, 'Triumph Speed Twin', '5smallT.png', 25300, 'myImg4'),
(106, 2017, 'Triumph Bonneville T100', '6smallT.jpg', 22222, 'myImg5'),
(107, 2017, 'Triumph Street Triple R 2019', '7smallT.jpg', 49999, 'myImg6'),
(108, 2019, 'Triumph Tiger 1200 XCA', '8smallT.png', 28777, 'myImg7'),
(109, 2019, 'Triumph Street Scrambler', '9smallT.png', 26120, 'myImg8');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motos`
--
ALTER TABLE `motos`
  ADD PRIMARY KEY (`moto_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
