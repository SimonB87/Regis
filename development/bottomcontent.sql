-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 04:51 PM
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
-- Table structure for table `bottomcontent`
--

CREATE TABLE `bottomcontent` (
  `id` int(11) NOT NULL,
  `isAllowed` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `displayName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `weblink` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `itemContent` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `iconFontAwesome` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bottomcontent`
--

INSERT INTO `bottomcontent` (`id`, `isAllowed`, `displayName`, `weblink`, `itemContent`, `iconFontAwesome`) VALUES
(1, 'on', 'phone', 'tel:6031112298', '6031112298', NULL),
(2, 'on', 'mail', 'mailto:info@mauritiuselvira.eu', 'info@mauritiuselvira.eu', NULL),
(3, 'on', 'GPS', '#', '50.455,44.233', NULL),
(4, 'on', 'telegram', 'www.telegram.com/4206031112298', '+4206031112298', NULL),
(5, 'on', 'Instagram', 'https://www.instagram.com/bachata_mauritius_elvira', '', 'fa-instagram'),
(6, 'on', 'Facebook', 'https://www.facebook.com/bachata.mauritius.elvira', '', 'fa-facebook-f'),
(7, 'on', 'Youtube', 'https://www.youtube.com/channel/UCjQxCT6jbk5_2WzJ0hAtatg', '', 'fa-youtube'),
(8, 'on', 'TikTok', 'https://www.tiktok.com/', '', 'fa-tiktok'),
(9, 'off', '', '', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bottomcontent`
--
ALTER TABLE `bottomcontent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bottomcontent`
--
ALTER TABLE `bottomcontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
