-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 10:58 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulksms`
--

-- --------------------------------------------------------

--
-- Table structure for table `sellertable`
--

CREATE TABLE `sellertable` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lName` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonNumber` varchar(200) NOT NULL,
  `companyName` varchar(200) NOT NULL,
  `productQuality` varchar(100) NOT NULL,
  `productQuantity` int(50) NOT NULL,
  `baseMetals` varchar(100) NOT NULL,
  `carbonSteel` varchar(150) NOT NULL,
  `structuralSections` varchar(150) NOT NULL,
  `northAmericaCanada` varchar(150) NOT NULL,
  `northAmericaUnitedStates` varchar(150) NOT NULL,
  `mexico` varchar(150) NOT NULL,
  `centralAmerica` varchar(150) NOT NULL,
  `asia` varchar(150) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellertable`
--

INSERT INTO `sellertable` (`id`, `fname`, `lName`, `email`, `phonNumber`, `companyName`, `productQuality`, `productQuantity`, `baseMetals`, `carbonSteel`, `structuralSections`, `northAmericaCanada`, `northAmericaUnitedStates`, `mexico`, `centralAmerica`, `asia`, `comments`) VALUES
(1, 'Mahamud', 'Hasan', 'mahmud@gmail.com', '123456', 'Vertex', 'New', 123, 'Base Metals', '', '', '', '', '', '', 'Central Asia', 'Comments'),
(2, 'Abdur', 'Rahim', 'rahim@gmail.com', '111111111', 'ATI', 'Surplus', 34, '', 'Bars', '', 'British Columbia', '', '', 'Central America', '', 'Comments'),
(3, 'Nasrin', 'Sultana', 'nasrin@gmail.com', '2222222222', 'Housewife', 'Used', 34, '', '', 'Structural Sections', '', 'Alabama', 'Mexico', '', '', 'Comments'),
(4, 'Sohel', 'Ahmed', 'sohel@gmail.com', '333333333', 'Business', 'New', 56, 'Base Metals', 'Billets', 'Structural Sections', 'British Columbia', '', 'Mexico', '', 'Central Asia', 'Comments');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sellertable`
--
ALTER TABLE `sellertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sellertable`
--
ALTER TABLE `sellertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
