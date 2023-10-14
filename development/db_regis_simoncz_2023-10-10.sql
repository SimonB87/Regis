-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Počítač: md6.wedos.net:3306
-- Vygenerováno: Úte 10. říj 2023, 13:52
-- Verze serveru: 10.1.44-MariaDB
-- Verze PHP: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `d181478_regis`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `bottomcontent`
--

CREATE TABLE IF NOT EXISTS `bottomcontent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isAllowed` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `displayName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `weblink` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `iconFontAwesome` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `itemContent` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=10 ;

--
-- Vypisuji data pro tabulku `bottomcontent`
--

INSERT INTO `bottomcontent` (`id`, `isAllowed`, `displayName`, `weblink`, `iconFontAwesome`, `itemContent`) VALUES
(1, 'on', 'phone', 'tel:6031112298', NULL, ''),
(2, 'on', 'email', 'mailto:someone@example.com', NULL, ''),
(3, 'on', 'GPS2', '#', '', ''),
(4, 'on', 'telegram', '#', NULL, ''),
(5, 'on', 'facebook', '#', 'fa-facebook-f', ''),
(6, 'on', 'instagram', '#', 'fa-instagram', ''),
(7, 'on', 'tiktok', '#', 'fa-tiktok', ''),
(8, 'on', 'youtube', '#', 'fa-youtube', ''),
(9, 'on', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabulky `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
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
  `eventDescription1` longtext CHARACTER SET latin2 COLLATE latin2_czech_cs,
  `eventDescription2` longtext CHARACTER SET latin2 COLLATE latin2_czech_cs,
  `eventDescription3` longtext CHARACTER SET latin2 COLLATE latin2_czech_cs,
  `agreementsEnabled` varchar(10) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `agreement1Enabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement1Text` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `agreement2Enabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement2Text` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `agreement3Enabled` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `agreement3Text` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs DEFAULT NULL,
  `posterFileName` varchar(250) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- Vypisuji data pro tabulku `events`
--

INSERT INTO `events` (`id`, `eventStatus`, `eventName`, `eventStartDate`, `eventEndDate`, `maintainSinglesParity`, `earlyBirdsRegistrationEnabled`, `earlyBirdsRegistrationName`, `earlyBirdsRegistrationsStartDate`, `earlyBirdsRegistrationsEndDate`, `ticketsAmountEarlyBirdsRegistrationsSingle`, `earlyBirdsTicketPriceSingle`, `earlyBirdsTicketPriceCouple`, `earlyBirdsTicketAmountCouple`, `regularRegistrationEnabled`, `regularRegistrationName`, `regularRegistrationsStartDate`, `regularRegistrationsEndDate`, `regularTicketPriceSingle`, `regularTicketAmountSingle`, `regularTicketPriceCouple`, `regularTicketAmountCouple`, `specialType1RegistrationEnabled`, `specialType1RegistrationName`, `specialType1RegistrationsStartDate`, `specialType1RegistrationsEndDate`, `specialType1TicketPriceSingle`, `specialType1TicketAmountSingle`, `specialType1TicketPriceCouple`, `specialType1TicketAmountCouple`, `specialType2RegistrationEnabled`, `specialType2RegistrationName`, `specialType2RegistrationsStartDate`, `specialType2RegistrationsEndDate`, `specialType2TicketPriceSingle`, `specialType2TicketAmountSingle`, `specialType2TicketPriceCouple`, `specialType2TicketAmountCouple`, `partyRegistrationEnabled`, `partyRegistrationName`, `partyRegistrationsStartDate`, `partyRegistrationsEndDate`, `partyTicketPriceSingle`, `partyTicketAmountSingle`, `partyTicketPriceCouple`, `partyTicketAmountCouple`, `eventDescription1`, `eventDescription2`, `eventDescription3`, `agreementsEnabled`, `agreement1Enabled`, `agreement1Text`, `agreement2Enabled`, `agreement2Text`, `agreement3Enabled`, `agreement3Text`, `posterFileName`) VALUES
(1, '0 - Registrations closed', 'Alfa Prime X', '2022-02-28', '2022-03-01', 'on', 'on', 'The Early Birds Registrations', '2022-02-21', '2022-02-22', 1000, 1000, 1900, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, '2 - Event passed', 'Demo Generation One Vol. 1', '2022-09-02', '2022-09-04', 'Yes', 'Yes', 'Demo ACigknYOoE', '2022-07-25', '2022-08-07', 4, 900, 1600, 2, 'Yes', 'Demo AYvujAuoEa', '2022-07-19', '2022-09-30', 1000, 4, 1800, 2, 'Yes', 'Jack and Jill competition', '2022-07-01', '2022-09-07', 20, 500, 3, 950, 'Yes', 'Master Class', '2022-07-25', '2022-09-05', 500, 10, 700, 4, 'Yes', 'Demo AOnXZKYRCG', '2022-07-19', '2022-08-07', 500, 4, 900, 2, ' Famous Tester & Testie for the 1st time in Prague! Experience beautiful Easter Prague and feel that the Bachata love is all around you ?\r\n? Exclusive 2-day workshop of romantic Bachata with Tester & Testie, special workshop Bachata connection principles with Mauritius & Elvira, pre-party workshops\r\n? Parties with DJ MomoLatino, Tester & Testie and other artists\r\n? Jack & Jill (max. 6 leaders, 6 followers), 1st price: private lesson with Tester & Testie!\r\n? Possibility to arrange private lessons (both Tester & Testie will be present for the couple)\r\n', '? Venue:\r\nTresor Club Prague, Vinohradská 25, Prague\r\n(pre-party in Dancer''s Club, Kon?vova 929)\r\n', '? Prices:\r\nFullpass: SOLD OUT !!!\r\nPossibility to go on the waiting list. In case some dancer will not be able to participate, we will contact you. Let us know.\r\n\r\nParty Pass: 450 CZK / 18 euro\r\nJack & Jill starting fee (max. 6 leaders, 6 followers): 250 CZK / 10 euro for Fullpass holders, 500 CZK / 20 euro for others', 'Yes', 'Yes', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'Yes', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', 'No', '', 'uploads/poster_janis_zoe.jpg'),
(3, '1 - Registrations open', 'Extra Sensual Weekend - Bachata workshop', '2022-12-02', '2022-12-03', 'Yes', 'Yes', 'Early birds', '2022-08-01', '2023-12-29', 10, 1000, 1900, 10, 'Yes', '', '', '', 0, 0, 0, 0, 'Yes', 'Master class', '2022-01-08', '2022-12-12', 500, 10, 900, 8, 'Yes', 'Musicality class', '2022-01-01', '2022-12-30', 500, 20, 800, 4, 'Yes', 'Party pass', '2022-08-05', '2022-11-30', 1900, 4, 3500, 2, 'Artists <br>\r\n\r\n? Melvin y Gatica, Bachata Influence - for the 1st time in Prague! <br>\r\n? Igor y Rocio, Bachata Feeling - after 2021 big success again in Prague! <br>\r\n? DJ MomoLatino, international DJ, Italy\r\n', 'What awaits you? <br>\r\n? 8 hours of main workshops with 4 artists (2 levels of workshops, happening simultaneously) <br>\r\n? 2 special Lady styling lessons with Gatica <br>\r\n? Gender Bachata battle pre-party class with Sorush & Greta <br>\r\n? 2 rooftop parties <br>\r\n? Main party in legendary Tresor Club with DJ Tony Pecino and DJ MomoLatino <br>\r\n Types of tickets <br>\r\n Fullpass advanced (30-40 couples, 8 hours of advanced lessons - 3 hours with Melvin-Gatica, 3 hours with Igor-Rocio, 60 min with Sorush-Greta, 60 min with Mauritius-Elvira, 3 parties, Gender Bachata battle with Sorush y Grete) <br>\r\n Fullpass classic (30-40 couples, 8 hours of intermediate-advanced lessons - 3 hours with Melvin-Gatica, 3 hours with Igor-Rocio, 60 min with Sorush-Greta, 60 min with Mauritius-Elvira, 3 parties, Gender Bachata battle with Sorush y Grete)\r\n', 'FAQ - Frequently asked questions <br>\r\n\r\n? What is the difference between Group 1 (Advanced) and Group 2 (classical Fullpass)  <br>\r\n? Main difference is the level, Group 1 being only advanced+, group 2 something between intermediate-advanced. Workshops in both groups will be happening simultaneously. Both groups will have 8 hours of workshops. The basic content of workshops will be the same, only it will be suited according to the level of the dancers. We have chosen idea of 2 separate groups of different levels to make the learning as effective as possible for everybody, it''s the new concept. In case somebody will not be suitable for either of the level, Artists may suggest moving the person to the other group.  <br>\r\n? What if I will find out that I am not a good fit for the level group?  <br>\r\n In that case talk to us and we will try to find a solution.  <br>\r\n? What if somebody else will suggest different level for me?  <br>\r\n In case some of the artists would notice that you are not a good fit for the level that you have bought, then you will be asked to switch to the other group.  <br>\r\n? If I will be moved to the other group based on the recommendation of the Artists, will I get refund of a price difference?  <br>\r\n', 'Yes', 'Yes', 'I confirm therms of sevice', 'Yes', 'I confirm GDPR therms', 'No', '', 'uploads/poster.jpeg');

-- --------------------------------------------------------

--
-- Struktura tabulky `navitems`
--

CREATE TABLE IF NOT EXISTS `navitems` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `itemAllowed` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `displayName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `itemWebLink` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `navitems`
--

INSERT INTO `navitems` (`id`, `itemAllowed`, `displayName`, `itemWebLink`) VALUES
(1, 'on', 'Lessons', '#'),
(2, 'on', 'Photo', '#'),
(3, 'on', 'Video', '#'),
(4, 'off', '', '#'),
(5, 'off', '', '#');

-- --------------------------------------------------------

--
-- Struktura tabulky `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `eventID` int(255) NOT NULL,
  `eventName` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `clientName` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `passType` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `registrationType` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `dancerKind` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `otherTicketOptions` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `otherDancerKind` varchar(255) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
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
  `adminEditedOrder` mediumtext CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=170 ;

--
-- Vypisuji data pro tabulku `registrations`
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
(135, '20220135', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(136, '20220136', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '1 - Early birds pass leader/follower', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(137, '20220137', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '3 - reminder sent', '', ' edited paystatus 28.07.2022;'),
(138, '20220138', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(139, '20220139', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(140, '20220140', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '2 - Early birds couple', '', '3 - Couple', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(141, '20220141', 2, 'Demo Generation One Vol. 1', 'ALfa Go 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(142, '20220142', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '2 - Follower', '0 - None', '', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(143, '20220143', 2, 'Demo Generation One Vol. 1', 'Simon Beta Test Follower 28.07.0006', '5 - Partypass leader/follower', '', '2 - Follower', '1 - Jack and Jill competition', '', '', 'Prague', '', '1000,- CZK', 'simon@test0006.eu', '+4202807000006', 'SW0006', 'Edit order ID : 20220143 - 0006', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(144, '20220144', 2, 'Demo Generation One Vol. 1', 'Simon Couple Test 28-07-2022- 0002', '4 - Fullpass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', '', 'Prague', '', '1000,- CZK', 'simoncouple@t_28070002.eu', '+4207770000002', 'SK0002', 'Edit order ID : 20220144 - 0002', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '3 - reminder sent', '', ''),
(145, '20220145', 2, 'Demo Generation One Vol. 1', 'Simon Test Couple 28.07-0004', '6 - Partypass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', '', 'Prague', '', '1000,- CZK', 'simontest@test0004.eu', '+4202807000004', 'CZ', 'Edited comments Edit order ID : 20220145, 0004', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ' edited order data 28.07.2022;'),
(146, '20220146', 2, 'Demo Generation One Vol. 1', 'Simon 146 Test Follower 0005', '6 - Partypass couple', '', '3 - Couple', '4 - Master Class', '', '', 'Prague', '', '1600,- CZK', 'simonFollower005@test.eu', '+4201460005', 'DE0005', '', 'Datum: 28. 07. 2022 - 13:50:52', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(147, '20220145', 2, 'Demo Generation One Vol. 1', 'Simon Test Couple 28.07-0004', '6 - Partypass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', '', 'Prague', '', '1000,- CZK', 'simontest@test0004.eu', '+4202807000004', 'CZ', 'Edited comments Edit order ID : 20220145, 0004', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ' edited order data 28.07.2022;'),
(148, '20220148', 2, 'Demo Generation One Vol. 1', 'Štepánka Testovací', '4 - Fullpass couple ', '', '2 - Follower', '4 - Master Class - 700,- Kč', '', '', 'Prague', '', '2500,- CZK', 'test@stepa2807.cz', '+420777000898', 'SK', 'Štepánka Testovací Customer contact 28.07.2022 19:50', 'Datum: 28. 07. 2022 - 19:48:45', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', 'Original Order - Datum: 28. 07. 2022 - 19:48:45;', 'Original Order - Datum: 28. 07. 2022 - 19:48:45;'),
(149, '20220149', 3, 'Sensual Weekend - Bachata workshop', 'Stepanka 1', '3 - Fullpass leader/follower ', '', '2 - Follower', '0 - None', '', '', 'Prague', '', '3000,- CZK', 'sim@on.cz', '+4207777', 'Czechia', 'b drhd hrdh djh', 'Datum: 06. 08. 2022 - 23:15:23', 'Yes', 'Yes', '', 'I confirm orginizers'' therms of service.', 'I confirm orginizers'' GDPR therms. Organizer will store mz personal data for event admission purpose.', '', '2 - paid', 'Original Order - Datum: 06. 08. 2022 - 23:15:23;', ' edited paystatus 06.08.2022;'),
(150, '20220150', 3, 'Sensual Weekend - Bachata workshop', 'Stepanka 2', '3 - Fullpass leader/follower ', '', '2 - Follower', '0 - None', '', '', 'Prague', '', '3000,- CZK', 'sim@on.cz', '+4207777', 'Czechia', 'alwafp fqofn fqflpmn rvbů§m', 'Datum: 06. 08. 2022 - 23:21:25', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '2 - paid', 'Original Order - Datum: 06. 08. 2022 - 23:21:25;', ' edited paystatus 06.08.2022;'),
(151, '20220151', 3, 'Sensual Weekend - Bachata workshop', 'Stepnka 4', '3 - Fullpass leader/follower ', '', '2 - Follower', '0 - None', '', '', 'Prague', '', '3000,- CZK', 'sim@on.cz', '+4207777', 'Czechia', 'fajk fafmn gveasm bs bsroúm', 'Datum: 07. 08. 2022 - 12:27:24', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 07. 08. 2022 - 12:27:24;', 'Original Order - Datum: 07. 08. 2022 - 12:27:24;'),
(152, '20220152', 3, 'Sensual Weekend - Bachata workshop', 'Stepanie 3', '3 - Fullpass leader/follower ', '', '2 - Follower', '0 - None', '', '', 'Prague', '', '3000,- CZK', 'sim@on.cz', '732716030', 'Czechia', 'sgnmp rgomg rúm ůsrml gbú sngiéav', 'Datum: 07. 08. 2022 - 12:29:24', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 07. 08. 2022 - 12:29:24;', 'Original Order - Datum: 07. 08. 2022 - 12:29:24;'),
(153, '20220153', 3, 'Sensual Weekend - Bachata workshop', 'Stepanie 5', '3 - Fullpass leader/follower ', '', '2 - Follower', '1 - Master class - 750,- Kč', '', '', 'Prague', '', '3750,- CZK', 'sim@on.cz', '+420777', 'Czechia', 'h d  tjh', 'Datum: 07. 08. 2022 - 12:30:20', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 07. 08. 2022 - 12:30:20;', 'Original Order - Datum: 07. 08. 2022 - 12:30:20;'),
(154, '20220154', 3, 'Sensual Weekend - Bachata workshop', 'Stepanie 6', '3 - Fullpass leader/follower', '', '2 - Follower', '0 - None', '2 - Follower', '', 'Prague', '', '3000,- CZK', 'sim@on.cz', '+420777', 'Czechia', 'gsgsg hh fgz', 'Datum: 07. 08. 2022 - 15:19:51', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 07. 08. 2022 - 15:19:51;', ' edited order data 13.08.2022;'),
(155, '20220155', 3, 'Sensual Weekend - Bachata workshop', 'Stepanie 7', '5 - Partypass leader/follower', '', '2 - Follower', '3 - special type2 single', '2 - Follower', '', 'Prague', '', '3000,- CZK', 'testemail@mail.com', '', '', '', 'Datum: 07. 08. 2022 - 15:21:58', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '2 - paid', 'Original Order - Datum: 07. 08. 2022 - 15:21:58;', '? imon_buryan edited order data 18.08.2022;'),
(156, '20220156', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 10', '1 - Early birds pass leader/follower ', '', '1 - Leader', '1 - special type1 single', '1 - Leader', '', 'Prague', '', '3250,- CZK', 'test@stepa2807.cz', '+4201460004', 'DE', '', 'Datum: 11. 08. 2022 - 09:40:10', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - Datum: 11. 08. 2022 - 09:40:10;', '? imon_buryan edited paystatus 17.08.2022'),
(157, '20220157', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 12', '6 - Partypass couple ', '', '3 - Couple', '4 - special type2 couple', '3 - Couple', '', 'Prague', '', '5250,- CZK', 'simon.buryan@seznam.cz', '+42028070000002', 'DE', 'Alfa test 12', 'Datum: 13. 08. 2022 - 21:38:0', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '3 - reminder sent', 'Original Order - Datum: 13. 08. 2022 - 21:38:0;', '? imon_buryan edited paystatus 17.08.2022'),
(158, '20220158', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 13', '3 - Fullpass leader/follower', '', '1 - Leader', '1 - special type1 single', '1 - Leader', '', 'Prague', '', '5250,- CZK', 'simon.buryan@seznam.cz', '+42028070000002', 'DE', 'Alfa test 13', 'Datum: 14. 08. 2022 - 0:15:56', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 14. 08. 2022 - 0:15:56;', 'Simon_Buryan edited paystatus 18.08.2022'),
(159, '20220159', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 14', '1 - Early birds pass leader/follower', '', '1 - Leader', '1 - special type1 single', '1 - Leader', '', 'Prague', '', '5250,- CZK', 'simon.buryan@seznam.cz', '+42028070000002', 'DE', 'Alfa test 14', 'Datum: 14. 08. 2022 - 0:17:48', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '1 - unpaid', 'Original Order - Datum: 14. 08. 2022 - 0:17:48;', '? imon_buryan edited order data 18.08.2022;'),
(160, '20220160', 4, 'Test 101', 'Simon Test 1', '1 - Early birds pass leader/follower ', '', '1 - Leader', '1 - special type1 single', '1 - Leader', '', 'Prague', '', '1500,- CZK', 'simon@test.eu', '+4201460004', 'DE', 'Alfa go', 'Datum: 18. 08. 2022 - 17:05:25', 'Yes', 'Yes', '', 'GDPR agreement', 'Therms and conditions agreement', '', '2 - paid', 'Original Order - Datum: 18. 08. 2022 - 17:05:25;', 'Simon_Buryan edited paystatus 18.08.2022'),
(161, '20220161', 3, 'Sensual Weekend - Bachata workshop', 'Simon Test 2', '5 - Partypass leader/follower ', '', '2 - Follower', '3 - special type2 single', '2 - Follower', '', 'Prague', '', '2800,- CZK', 'simon.buryan@seznam.cz', '+4201460004', 'DE', 'Alfa go', 'Datum: 18. 08. 2022 - 20:52:45', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '2 - paid', 'Original Order - Datum: 18. 08. 2022 - 20:52:45;', 'Simon_Buryan edited paystatus 18.08.2022'),
(162, '20220162', 3, 'Sensual Weekend - Bachata workshop', 'Marian Vanek', '1 - Early birds pass leader/follower', '', '2 - Follower', '2 - special type1 couple', '1 - Leader', '', 'Prague', '', '3700,- CZK', 'vanek.mauritius@gmail.com', '777216875', 'Czechia', 'Je mozne dostat slevu?', 'Datum: 18. 08. 2022 - 21:35:12', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '2 - paid', 'Original Order - Datum: 18. 08. 2022 - 21:35:12;', 'Simon_Buryan edited order data 18.08.2022;'),
(163, '20220163', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester T', '1 - Early birds pass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon.buryan@seznam.cz', '+420', '', 'I confirm therms of sevice', '2022-09-10 17:05:02', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '2 - paid', 'Original Order - 2022-09-10 17:05:02;', 'Simon_Buryan edited paystatus 10.09.2022'),
(164, '20220169', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester Simi 1', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1900,- CZK', 'buryans@gmail.com', '+420', '', 'I confirm therms of sevice', '2022-09-11 17:52:46', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - 2022-09-11 17:52:46;', 'Simon_Buryan edited paystatus 11.09.2022'),
(165, '20220169', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester Simi 1', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1900,- CZK', 'buryans@gmail.com', '+420', '', 'I confirm therms of sevice', '2022-09-11 17:52:46', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - 2022-09-11 17:52:46;', 'Simon_Buryan edited paystatus 11.09.2022'),
(166, '20220169', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester Simi 1', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1900,- CZK', 'buryans@gmail.com', '+420', '', 'I confirm therms of sevice', '2022-09-11 17:52:46', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - 2022-09-11 17:52:46;', 'Simon_Buryan edited paystatus 11.09.2022'),
(167, '20220169', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester Simi 1', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1900,- CZK', 'buryans@gmail.com', '+420', '', 'I confirm therms of sevice', '2022-09-11 17:52:46', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - 2022-09-11 17:52:46;', 'Simon_Buryan edited paystatus 11.09.2022'),
(168, '20220169', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester Simi 1', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1900,- CZK', 'buryans@gmail.com', '+420', '', 'I confirm therms of sevice', '2022-09-11 17:52:46', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - 2022-09-11 17:52:46;', 'Simon_Buryan edited paystatus 11.09.2022'),
(169, '20220169', 3, 'Extra Sensual Weekend - Bachata workshop', 'Tester Simi 1', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '0 - None', '', 'Prague', '', '1900,- CZK', 'buryans@gmail.com', '+420', '', 'I confirm therms of sevice', '2022-09-11 17:52:46', 'Yes', 'Yes', '', 'I confirm therms of sevice', 'I confirm GDPR therms', '', '4 - cancelled registration', 'Original Order - 2022-09-11 17:52:46;', 'Simon_Buryan edited paystatus 11.09.2022');

-- --------------------------------------------------------

--
-- Struktura tabulky `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) NOT NULL,
  `organizerName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `adminEmail` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `nationalBankAccount` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountIBAN` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountBIC` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountHolderName` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `accountHolderAddress` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `bankAddress` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL,
  `appUnderDevelopment` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `settings`
--

INSERT INTO `settings` (`id`, `organizerName`, `adminEmail`, `nationalBankAccount`, `accountIBAN`, `accountBIC`, `accountHolderName`, `accountHolderAddress`, `bankAddress`, `appUnderDevelopment`) VALUES
(1, 'Mauritius & Elvira', 'info@mauritiuselvira.eu', '2002019652/2010 (Fio Banka, a.s.)', 'CZ65 2010 0000 0020 0201 9652', 'FIOBCZPPXXX', 'Elvira Masanlo', '', 'Fio banka, a.s. Millennium Plaza, V Celnici 10, Prague 1, ZIP Code : 117 21, Czech Republic', '2 - off');

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `user_level` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `user_level`) VALUES
(2, 'Simon', 'Buryan', 'Simon_Buryan', 'simon.buryan@seznam.cz', '0cbb3ad466ebb557f1317c066e3db03a', '2021-12-25', 'assets/images/profile_pics/defaults/head_emerald.png', 0, 0, 'no', ',Ã… imon_buryan,demo_uÃ…Â¾ivatel,', 9),
(5, 'Marian', 'Vanek', 'marian_vanek', 'vanek.mauritius@gmail.com', 'e5026b1d941952b5248907c6135d9f40', '2022-08-18', '', 0, 0, 'no', '', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
