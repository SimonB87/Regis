-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 04:56 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regis`
--

-- --------------------------------------------------------

--
-- Table structure for table `navitems`
--

CREATE TABLE `navitems` (
  `id` int(200) NOT NULL,
  `itemAllowed` varchar(250) NOT NULL,
  `displayName` varchar(250) NOT NULL,
  `itemWebLink` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navitems`
--

INSERT INTO `navitems` (`id`, `itemAllowed`, `displayName`, `itemWebLink`) VALUES
(1, 'on', 'Lessons', 'https://www.mauritiuselvira.com/bachata'),
(2, 'on', 'Pricing', 'https://www.mauritiuselvira.com/prices'),
(3, 'on', 'About us', 'https://www.mauritiuselvira.com/about-us'),
(4, 'on', 'Contact', 'https://www.mauritiuselvira.com/contact'),
(5, 'off', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navitems`
--
ALTER TABLE `navitems`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `navitems`
--
ALTER TABLE `navitems`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
