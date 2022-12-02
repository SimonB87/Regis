-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 11:13 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(250) NOT NULL,
  `eventStatus` varchar(250) CHARACTER SET latin1 NOT NULL,
  `eventName` longtext CHARACTER SET latin1 NOT NULL,
  `eventStartDate` varchar(250) CHARACTER SET latin1 NOT NULL,
  `eventEndDate` varchar(250) CHARACTER SET latin1 NOT NULL,
  `maintainSinglesParity` varchar(10) CHARACTER SET latin1 NOT NULL,
  `earlyBirdsRegistrationEnabled` varchar(10) CHARACTER SET latin1 NOT NULL,
  `earlyBirdsRegistrationName` varchar(250) CHARACTER SET latin1 NOT NULL,
  `earlyBirdsRegistrationsStartDate` varchar(250) CHARACTER SET latin1 NOT NULL,
  `earlyBirdsRegistrationsEndDate` varchar(250) CHARACTER SET latin1 NOT NULL,
  `ticketsAmountEarlyBirdsRegistrationsSingle` int(100) NOT NULL,
  `earlyBirdsTicketPriceSingle` int(100) NOT NULL,
  `earlyBirdsTicketPriceCouple` int(100) NOT NULL,
  `earlyBirdsTicketAmountCouple` int(100) NOT NULL,
  `regularRegistrationEnabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `regularRegistrationName` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `regularRegistrationsStartDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `regularRegistrationsEndDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `regularTicketPriceSingle` int(250) DEFAULT NULL,
  `regularTicketAmountSingle` int(250) DEFAULT NULL,
  `regularTicketPriceCouple` int(250) DEFAULT NULL,
  `regularTicketAmountCouple` int(250) DEFAULT NULL,
  `specialType1RegistrationEnabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `specialType1RegistrationName` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `specialType1RegistrationsStartDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `specialType1RegistrationsEndDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `specialType1TicketPriceSingle` int(250) DEFAULT NULL,
  `specialType1TicketAmountSingle` int(250) DEFAULT NULL,
  `specialType1TicketPriceCouple` int(250) DEFAULT NULL,
  `specialType1TicketAmountCouple` int(250) DEFAULT NULL,
  `specialType2RegistrationEnabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `specialType2RegistrationName` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `specialType2RegistrationsStartDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `specialType2RegistrationsEndDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `specialType2TicketPriceSingle` int(250) DEFAULT NULL,
  `specialType2TicketAmountSingle` int(250) DEFAULT NULL,
  `specialType2TicketPriceCouple` int(250) DEFAULT NULL,
  `specialType2TicketAmountCouple` int(250) DEFAULT NULL,
  `partyRegistrationEnabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `partyRegistrationName` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `partyRegistrationsStartDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `partyRegistrationsEndDate` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `partyTicketPriceSingle` int(250) DEFAULT NULL,
  `partyTicketAmountSingle` int(250) DEFAULT NULL,
  `partyTicketPriceCouple` int(250) DEFAULT NULL,
  `partyTicketAmountCouple` int(250) DEFAULT NULL,
  `eventDescription1` longtext CHARACTER SET latin1,
  `eventDescription2` longtext CHARACTER SET latin1,
  `eventDescription3` longtext CHARACTER SET latin1,
  `agreementsEnabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement1Enabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement1Text` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `agreement2Enabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement2Text` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `agreement3Enabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement3Text` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `posterFileName` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventStatus`, `eventName`, `eventStartDate`, `eventEndDate`, `maintainSinglesParity`, `earlyBirdsRegistrationEnabled`, `earlyBirdsRegistrationName`, `earlyBirdsRegistrationsStartDate`, `earlyBirdsRegistrationsEndDate`, `ticketsAmountEarlyBirdsRegistrationsSingle`, `earlyBirdsTicketPriceSingle`, `earlyBirdsTicketPriceCouple`, `earlyBirdsTicketAmountCouple`, `regularRegistrationEnabled`, `regularRegistrationName`, `regularRegistrationsStartDate`, `regularRegistrationsEndDate`, `regularTicketPriceSingle`, `regularTicketAmountSingle`, `regularTicketPriceCouple`, `regularTicketAmountCouple`, `specialType1RegistrationEnabled`, `specialType1RegistrationName`, `specialType1RegistrationsStartDate`, `specialType1RegistrationsEndDate`, `specialType1TicketPriceSingle`, `specialType1TicketAmountSingle`, `specialType1TicketPriceCouple`, `specialType1TicketAmountCouple`, `specialType2RegistrationEnabled`, `specialType2RegistrationName`, `specialType2RegistrationsStartDate`, `specialType2RegistrationsEndDate`, `specialType2TicketPriceSingle`, `specialType2TicketAmountSingle`, `specialType2TicketPriceCouple`, `specialType2TicketAmountCouple`, `partyRegistrationEnabled`, `partyRegistrationName`, `partyRegistrationsStartDate`, `partyRegistrationsEndDate`, `partyTicketPriceSingle`, `partyTicketAmountSingle`, `partyTicketPriceCouple`, `partyTicketAmountCouple`, `eventDescription1`, `eventDescription2`, `eventDescription3`, `agreementsEnabled`, `agreement1Enabled`, `agreement1Text`, `agreement2Enabled`, `agreement2Text`, `agreement3Enabled`, `agreement3Text`, `posterFileName`) VALUES
(1, '0 - Registrations closed', 'Alfa Prime X', '2022-02-28', '2022-03-01', 'on', 'on', 'The Early Birds Registrations', '2022-02-21', '2022-02-22', 1000, 1000, 1900, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'uploads/bachata_daniel_desire2.jpg'),
(2, '2 - Event passed', 'Demo Generation One Vol. 1', '2022-09-02', '2022-09-04', 'Yes', 'Yes', 'Demo ACigknYOoE', '2022-07-25', '2022-08-07', 4, 900, 1600, 2, 'Yes', 'Demo AYvujAuoEa', '2022-07-19', '2022-09-30', 1000, 4, 1800, 2, 'Yes', 'Jack and Jill competition', '2022-07-01', '2022-09-07', 20, 500, 3, 950, 'Yes', 'Master Class', '2022-07-25', '2022-09-05', 500, 10, 700, 4, 'Yes', 'Demo AOnXZKYRCG', '2022-07-19', '2022-08-07', 500, 4, 900, 2, ' Famous Tester & Testie for the 1st time in Prague! Experience beautiful Easter Prague and feel that the Bachata love is all around you ?\r\n? Exclusive 2-day workshop of romantic Bachata with Tester & Testie, special workshop Bachata connection principles with Mauritius & Elvira, pre-party workshops\r\n? Parties with DJ MomoLatino, Tester & Testie and other artists\r\n? Jack & Jill (max. 6 leaders, 6 followers), 1st price: private lesson with Tester & Testie!\r\n? Possibility to arrange private lessons (both Tester & Testie will be present for the couple)\r\n', '? Venue:\r\nTresor Club Prague, Vinohradská 25, Prague\r\n(pre-party in Dancer\'s Club, Kon?vova 929)\r\n', '? Prices:\r\nFullpass: SOLD OUT !!!\r\nPossibility to go on the waiting list. In case some dancer will not be able to participate, we will contact you. Let us know.\r\n\r\nParty Pass: 450 CZK / 18 euro\r\nJack & Jill starting fee (max. 6 leaders, 6 followers): 250 CZK / 10 euro for Fullpass holders, 500 CZK / 20 euro for others', 'Yes', 'Yes', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'Yes', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', 'No', '', 'uploads/poster_janis_zoe.jpg'),
(3, '1 - Registrations open', 'Essential Sensual Weekend - Bachata weekend', '2022-11-02', '2022-12-03', 'Yes', 'Yes', 'Early birds', '2022-08-05', '2022-11-30', 6, 2500, 4700, 3, 'Yes', 'Full pass', '2022-08-05', '2022-11-30', 3000, 6, 5500, 3, 'Yes', 'Master class', '2022-08-05', '2022-11-30', 750, 4, 1200, 4, 'Yes', '', '2022-12-01', '2022-12-04', 400, 10, 500, 5, 'Yes', 'Party pass', '2022-08-05', '2022-11-30', 1900, 4, 3500, 2, 'Artists <br>\r\n<br>\r\n* <strong>Melvin y Gatica,</strong> <i>Bachata Influence</i> - for the 1st time in Prague! <br>\r\n* <strong>Igor y Rocio,</strong> <i>Bachata Feeling</i> - after 2021 big success again in Prague! <br>\r\n* <strong>DJ MomoLatino</strong>, <i>international</i> DJ, Italy <br>\r\n', 'What awaits you? <br>\r\n<br>\r\n? 8 hours of main workshops with 4 artists (2 levels of workshops, happening simultaneously)\r\n? 2 special Lady styling lessons with Gatica\r\n? Gender Bachata battle pre-party class with Sorush & Greta\r\n? 2 rooftop parties\r\n? Main party in legendary Tresor Club with DJ Tony Pecino and DJ MomoLatino\r\n Types of tickets\r\n Fullpass advanced (30-40 couples, 8 hours of advanced lessons - 3 hours with Melvin-Gatica, 3 hours with Igor-Rocio, 60 min with Sorush-Greta, 60 min with Mauritius-Elvira, 3 parties, Gender Bachata battle with Sorush y Grete)\r\n Fullpass classic (30-40 couples, 8 hours of intermediate-advanced lessons - 3 hours with Melvin-Gatica, 3 hours with Igor-Rocio, 60 min with Sorush-Greta, 60 min with Mauritius-Elvira, 3 parties, Gender Bachata battle with Sorush y Grete)\r\n', 'FAQ - Frequently asked questions\r\n<br>\r\n<br>*  What is the difference between Group 1 (Advanced) and Group 2 (classical Fullpass)?\r\n Main difference is the level, Group 1 being only advanced+, group 2 something between intermediate-advanced. Workshops in both groups will be happening simultaneously. Both groups will have 8 hours of workshops. The basic content of workshops will be the same, only it will be suited according to the level of the dancers. We have chosen idea of 2 separate groups of different levels to make the learning as effective as possible for everybody, it\'s the new concept. In case somebody will not be suitable for either of the level, Artists may suggest moving the person to the other group.\r\n<br>* What if I will find out that I am not a good fit for the level group?\r\n In that case talk to us and we will try to find a solution.\r\n<br>* What if somebody else will suggest different level for me?\r\n In case some of the artists would notice that you are not a good fit for the level that you have bought, then you will be asked to switch to the other group.\r\n<br>*  If I will be moved to the other group based on the recommendation of the Artists, will I get refund of a price difference?\r\n', 'Yes', 'Yes', 'I confirm therms of sevice', 'Yes', 'I confirm GDPR therms', 'No', '', 'uploads/melvin_june23.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `merchandiseitems`
--

CREATE TABLE `merchandiseitems` (
  `id` int(250) NOT NULL,
  `merchName` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `merchPrice` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `merchAvailable` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merchandiseitems`
--

INSERT INTO `merchandiseitems` (`id`, `merchName`, `merchPrice`, `merchAvailable`) VALUES
(1, 'ja', 'ty', 'my'),
(2, 'ja', 'ty', 'my'),
(3, 'ja', 'ty', 'my'),
(4, 'ja', 'ty', 'my');

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

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(255) NOT NULL,
  `orderID` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `eventID` int(255) NOT NULL,
  `eventName` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientName` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `passType` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `registrationType` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `dancerKind` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `otherTicketOptions` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `otherDancerKind` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `competitionParticipation` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `location` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `merchandise` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `formPrice` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientEmail` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientPhone` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientCountry` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientComments` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `registrationdate` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `confirmPrivateInformation1` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `confirmPrivateInformation2` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `confirmPrivateInformation3` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `confirmPrivateInformation1Description` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `confirmPrivateInformation2Description` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `confirmPrivateInformation3Description` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `paystatus` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientTransferedOrder` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `adminEditedOrder` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `orderID`, `eventID`, `eventName`, `clientName`, `passType`, `registrationType`, `dancerKind`, `otherTicketOptions`, `otherDancerKind`, `competitionParticipation`, `location`, `merchandise`, `formPrice`, `clientEmail`, `clientPhone`, `clientCountry`, `clientComments`, `registrationdate`, `confirmPrivateInformation1`, `confirmPrivateInformation2`, `confirmPrivateInformation3`, `confirmPrivateInformation1Description`, `confirmPrivateInformation2Description`, `confirmPrivateInformation3Description`, `paystatus`, `clientTransferedOrder`, `adminEditedOrder`) VALUES
(105, '20220105', 1, 'Alfa Prime X', 'Simon Test 1', '1 - Early birds pass leader/follower ', '', '1 - Leader', '', '', '0 - None', 'Prague', '', '1600,- CZK 	', 'simon@test.eu', '+420777000333', 'CZ', 'Test Alfa 1', 'Datum: 19. 07. 2022 - 21:45:11', 'Yes, agreed with GDPR therms', 'Denied COVID-19 therms.', '', '', '', '', '', '', ''),
(125, '20220125', 1, 'Alfa Prime X', 'Simon Test 9', '2 - Early birds couple ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1600,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 12:42:55', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '', '', ''),
(128, '20220128', 1, 'Alfa Prime X', 'Simon Test 2', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '500,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 12:57:0', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '3 - reminder sent', '', ''),
(129, '20220129', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '1 - Early birds pass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '900,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 13:01:37', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(130, '20220130', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '6 - Partypass couple ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '900,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 13:15:0', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(131, '20220131', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'comemnts ', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(133, '20220133', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(134, '20220134', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(145, '20220145', 2, 'Demo Generation One Vol. 1', 'Simon Test Couple 28.07-0004', '6 - Partypass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', '', 'Prague', '', '1000,- CZK', 'simontest@test0004.eu', '+4202807000004', 'CZ', 'Edited comments Edit order ID : 20220145, 0004', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ' edited order data 28.07.2022;'),
(146, '20220146', 2, 'Demo Generation One Vol. 1', 'Simon 146 Test Follower 0005', '6 - Partypass couple', '', '3 - Couple', '4 - Master Class', '', '', 'Prague', '', '1600,- CZK', 'simonFollower005@test.eu', '+4201460005', 'DE0005', '', 'Datum: 28. 07. 2022 - 13:50:52', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(147, '20220145', 2, 'Demo Generation One Vol. 1', 'Simon Test Couple 28.07-0004', '6 - Partypass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', '', 'Prague', '', '1000,- CZK', 'simontest@test0004.eu', '+4202807000004', 'CZ', 'Edited comments Edit order ID : 20220145, 0004', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ' edited order data 28.07.2022;'),
(161, '20220163', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 20', '5 - Partypass leader/follower ', '', '2 - Follower', '1 - special type1 single', '2 - Follower', '', 'Prague', '', '2650,- CZK', 'sim@on.cz', '+420', 'DE', 'Alfa go!', 'Datum: 14. 08. 2022 - 16:43:29', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 14. 08. 2022 - 16:43:29;', 'Original Order - Datum: 14. 08. 2022 - 16:43:29;'),
(187, '20220188', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 13', '1 - Early birds pass leader/follower ', '', '1 - Leader', '2 - special type1 couple', '3 - Couple', '', 'Prague', '', '3700,- CZK', 'sim@on.cz', '+420777', 'FI', 'Finish him !', 'Datum: 14. 08. 2022 - 21:17:38', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 14. 08. 2022 - 21:17:38;', 'Original Order - Datum: 14. 08. 2022 - 21:17:38;'),
(188, '20220187', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 13', '1 - Early birds pass leader/follower ', '', '1 - Leader', '2 - special type1 couple', '3 - Couple', '', 'Prague', '', '3700,- CZK', 'sim@on.cz', '+420777', 'FI', 'Finish him !', 'Datum: 14. 08. 2022 - 21:17:38', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 14. 08. 2022 - 21:17:38;', 'Original Order - Datum: 14. 08. 2022 - 21:17:38;');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `organizerName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `adminEmail` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `nationalBankAccount` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountIBAN` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountBIC` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountHolderName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountHolderAddress` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `bankAddress` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `appUnderDevelopment` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `emailTextRegistrationNotice` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `emailTextOrderPaid` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `emailTextPaymentReminder` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `emailTextRegistrationCancelled` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `organizerName`, `adminEmail`, `nationalBankAccount`, `accountIBAN`, `accountBIC`, `accountHolderName`, `accountHolderAddress`, `bankAddress`, `appUnderDevelopment`, `emailTextRegistrationNotice`, `emailTextOrderPaid`, `emailTextPaymentReminder`, `emailTextRegistrationCancelled`) VALUES
(1, 'Mauritius & Elvira Bachata Prague', 'info@mauritiuselvira.eu', '2002019652/2010 (Fio Banka, a.s.)', 'CZ65 2010 0000 0020 0201 9652', 'FIOBCZPPXXX', 'Elvira Masanlo', '', 'Fio banka, a.s. Millennium Plaza, V Celnici 10, Prague 1, ZIP Code : 117 21, Czech Republic', '2 - off', 'Thank you for registering for then event, below you will find the payment instructions. After paying the event organizer will send you your ticket.', ' Since you paid, you will receive your ticket soon by email within next day. ', ' Thank you for registering for then event. <strong>We remind you to send us payment</strong> for the event <strong>within 7 days</strong>. Below you will find the payment instructions. After paying the event organizer will send you your ticket. ', ' Your registration was cancelled by event organizer. For further information contact us. ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `num_posts` int(11) NOT NULL,
  `num_likes` int(11) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `friend_array` text NOT NULL,
  `user_level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `user_level`) VALUES
(13, 'Simon', 'Buryan', 'Simon_Buryan', 'Simon.buryan@seznam.cz', '0cbb3ad466ebb557f1317c066e3db03a', '2021-12-25', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',Ã… imon_buryan,demo_uÃ…Â¾ivatel,', 9),
(16, 'Test', 'Tester', 'test_tester', 'My@email.co', '126cfbcd4d16ae6d25c9bfcae76d8ee4', '2022-08-15', '', 0, 0, 'no', '', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bottomcontent`
--
ALTER TABLE `bottomcontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merchandiseitems`
--
ALTER TABLE `merchandiseitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navitems`
--
ALTER TABLE `navitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bottomcontent`
--
ALTER TABLE `bottomcontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `merchandiseitems`
--
ALTER TABLE `merchandiseitems`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `navitems`
--
ALTER TABLE `navitems`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=189;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
