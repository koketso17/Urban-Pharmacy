-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 07:12 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `surname`, `email`, `phone`, `id`) VALUES
('koketso', 'modise', 'kktsmodise7@gmail.com', '0712163441', 1),
('bhjbdfcjsd', 'magongoa', 'kktsmodise7@gmail.com', '0658440731', 2),
('bhjbdfcjsd', 'bdjbhsf', 'kktsmodise7@gmail.com', '0671987531', 3);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `stName_No` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `psCode` varchar(4) NOT NULL,
  `formOfPayment` varchar(20) NOT NULL,
  `delivery` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `name`, `surname`, `email`, `phone`, `stName_No`, `city`, `psCode`, `formOfPayment`, `delivery`) VALUES
(1, 'client', 'modise', 'kktsmodise7@gmail.com', '0658440731', '809 block k', 'pretoria', '0152', 'Credit Card', 'yes'),
(2, 'fefv', 'magongoa', 'kktsmodise7@gmail.com', '0658440731', '809 block k', 'pretoria', '0152', 'Credit Card', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `self`
--

CREATE TABLE `self` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `stName_No` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `psCode` varchar(4) NOT NULL,
  `formOfPayment` varchar(50) NOT NULL,
  `delivery` varchar(3) NOT NULL,
  `selfMed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self`
--

INSERT INTO `self` (`id`, `name`, `surname`, `email`, `phone`, `stName_No`, `city`, `psCode`, `formOfPayment`, `delivery`, `selfMed`) VALUES
(1, 'client', 'modise', 'kktsmodise7@gmail.com', '0658440731', '809 block k', 'pretoria', '0152', 'Credit Card', 'yes', 'i have pain on my neck and back'),
(2, 'bhjbdfcjsd', 'magongoa', 'kktsmodise7@gmail.com', '0658440731', '809 block k', 'pretoria', '0152', 'Credit Card', 'yes', 'i have pain on my neck and back');

-- --------------------------------------------------------

--
-- Table structure for table `uploadedfiles`
--

CREATE TABLE `uploadedfiles` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploadedfiles`
--

INSERT INTO `uploadedfiles` (`id`, `filename`) VALUES
(1, 'koketso modise'),
(2, 'kkkk bbbb ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `self`
--
ALTER TABLE `self`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploadedfiles`
--
ALTER TABLE `uploadedfiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `self`
--
ALTER TABLE `self`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploadedfiles`
--
ALTER TABLE `uploadedfiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
