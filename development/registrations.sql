-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 31. čec 2022, 13:49
-- Verze serveru: 10.4.14-MariaDB
-- Verze PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `regis`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `registrations`
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
-- Vypisuji data pro tabulku `registrations`
--

INSERT INTO `registrations` (`id`, `orderID`, `eventID`, `eventName`, `clientName`, `passType`, `registrationType`, `dancerKind`, `otherTicketOptions`, `competitionParticipation`, `location`, `merchandise`, `formPrice`, `clientEmail`, `clientPhone`, `clientCountry`, `clientComments`, `registrationdate`, `confirmPrivateInformation1`, `confirmPrivateInformation2`, `confirmPrivateInformation3`, `confirmPrivateInformation1Description`, `confirmPrivateInformation2Description`, `confirmPrivateInformation3Description`, `paystatus`, `clientTransferedOrder`, `adminEditedOrder`) VALUES
(105, '20220105', 0, 'Demo Generation One Vol. 1', 'Simon Test 1', '1 - Early birds pass leader/follower ', '', '1 - Leader', '', '0 - None', 'Prague', '', '... ,- Kč', 'simon@test.eu', '+420777000333', 'CZ', 'Test Alfa 1', 'Datum: 19. 07. 2022 - 21:45:11', 'Yes, agreed with GDPR therms', 'Denied COVID-19 therms.', '', '', '', '', '', '', ''),
(125, '20220125', 2, 'Demo Generation One Vol. 1', 'Simon Test 9', '2 - Early birds couple ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1600,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 12:42:55', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '', '', ''),
(128, '20220128', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '5 - Partypass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '500,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 12:57:0', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '3 - reminder sent', '', ''),
(129, '20220129', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '1 - Early birds pass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '900,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 13:01:37', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(130, '20220130', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '6 - Partypass couple ', '', '1 - Leader', '0 - None', '', 'Prague', '', '900,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'Alfa 1', 'Datum: 20. 07. 2022 - 13:15:0', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(131, '20220131', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', 'comemnts ', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(133, '20220133', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(134, '20220134', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(135, '20220135', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(136, '20220136', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '1 - Early birds pass leader/follower', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(137, '20220137', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '3 - reminder sent', '', ' edited paystatus 28.07.2022;'),
(138, '20220138', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(139, '20220139', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(140, '20220140', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '2 - Early birds couple', '', '3 - Couple', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(141, '20220141', 2, 'Demo Generation One Vol. 1', 'ALfa Go 2', '3 - Fullpass leader/follower ', '', '1 - Leader', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(142, '20220142', 2, 'Demo Generation One Vol. 1', 'Simon Test 2', '3 - Fullpass leader/follower ', '', '2 - Follower', '0 - None', '', 'Prague', '', '1000,- CZK', 'simon@test.eu', '+420777000333', 'CZ', '', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(143, '20220143', 2, 'Demo Generation One Vol. 1', 'Simon Beta Test Follower 28.07.0006', '5 - Partypass leader/follower', '', '2 - Follower', '1 - Jack and Jill competition', '', 'Prague', '', '1000,- CZK', 'simon@test0006.eu', '+4202807000006', 'SW0006', 'Edit order ID : 20220143 - 0006', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ''),
(144, '20220144', 2, 'Demo Generation One Vol. 1', 'Simon Couple Test 28-07-2022- 0002', '4 - Fullpass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', 'Prague', '', '1000,- CZK', 'simoncouple@t_28070002.eu', '+4207770000002', 'SK0002', 'Edit order ID : 20220144 - 0002', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '3 - reminder sent', '', ''),
(145, '20220145', 2, 'Demo Generation One Vol. 1', 'Simon Test Couple 28.07-0004', '6 - Partypass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', 'Prague', '', '1000,- CZK', 'simontest@test0004.eu', '+4202807000004', 'CZ', 'Edited comments Edit order ID : 20220145, 0004', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ' edited order data 28.07.2022;'),
(146, '20220146', 2, 'Demo Generation One Vol. 1', 'Simon 146 Test Follower 0005', '6 - Partypass couple', '', '3 - Couple', '4 - Master Class', '', 'Prague', '', '1600,- CZK', 'simonFollower005@test.eu', '+4201460005', 'DE0005', '', 'Datum: 28. 07. 2022 - 13:50:52', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', '', ''),
(147, '20220145', 2, 'Demo Generation One Vol. 1', 'Simon Test Couple 28.07-0004', '6 - Partypass couple', '', '3 - Couple', '2 - Jack and Jill competition', '', 'Prague', '', '1000,- CZK', 'simontest@test0004.eu', '+4202807000004', 'CZ', 'Edited comments Edit order ID : 20220145, 0004', 'Datum: 25. 07. 2022 - 15:51:27', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '2 - paid', '', ' edited order data 28.07.2022;'),
(148, '20220148', 2, 'Demo Generation One Vol. 1', 'Štepánka Testovací', '4 - Fullpass couple ', '', '2 - Follower', '4 - Master Class - 700,- Kč', '', 'Prague', '', '2500,- CZK', 'test@stepa2807.cz', '+420777000898', 'SK', 'Štepánka Testovací Customer contact 28.07.2022 19:50', 'Datum: 28. 07. 2022 - 19:48:45', 'Yes', 'Yes', '', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', '', '1 - unpaid', 'Original Order - Datum: 28. 07. 2022 - 19:48:45;', 'Original Order - Datum: 28. 07. 2022 - 19:48:45;');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
