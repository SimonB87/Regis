-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Ned 07. srp 2022, 21:52
-- Verze serveru: 10.1.30-MariaDB
-- Verze PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktura tabulky `events`
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
-- Vypisuji data pro tabulku `events`
--

INSERT INTO `events` (`id`, `eventStatus`, `eventName`, `eventStartDate`, `eventEndDate`, `maintainSinglesParity`, `earlyBirdsRegistrationEnabled`, `earlyBirdsRegistrationName`, `earlyBirdsRegistrationsStartDate`, `earlyBirdsRegistrationsEndDate`, `ticketsAmountEarlyBirdsRegistrationsSingle`, `earlyBirdsTicketPriceSingle`, `earlyBirdsTicketPriceCouple`, `earlyBirdsTicketAmountCouple`, `regularRegistrationEnabled`, `regularRegistrationName`, `regularRegistrationsStartDate`, `regularRegistrationsEndDate`, `regularTicketPriceSingle`, `regularTicketAmountSingle`, `regularTicketPriceCouple`, `regularTicketAmountCouple`, `specialType1RegistrationEnabled`, `specialType1RegistrationName`, `specialType1RegistrationsStartDate`, `specialType1RegistrationsEndDate`, `specialType1TicketPriceSingle`, `specialType1TicketAmountSingle`, `specialType1TicketPriceCouple`, `specialType1TicketAmountCouple`, `specialType2RegistrationEnabled`, `specialType2RegistrationName`, `specialType2RegistrationsStartDate`, `specialType2RegistrationsEndDate`, `specialType2TicketPriceSingle`, `specialType2TicketAmountSingle`, `specialType2TicketPriceCouple`, `specialType2TicketAmountCouple`, `partyRegistrationEnabled`, `partyRegistrationName`, `partyRegistrationsStartDate`, `partyRegistrationsEndDate`, `partyTicketPriceSingle`, `partyTicketAmountSingle`, `partyTicketPriceCouple`, `partyTicketAmountCouple`, `eventDescription1`, `eventDescription2`, `eventDescription3`, `agreementsEnabled`, `agreement1Enabled`, `agreement1Text`, `agreement2Enabled`, `agreement2Text`, `agreement3Enabled`, `agreement3Text`, `posterFileName`) VALUES
(1, '0 - Registrations closed', 'Alfa Prime X', '2022-02-28', '2022-03-01', 'on', 'on', 'The Early Birds Registrations', '2022-02-21', '2022-02-22', 1000, 1000, 1900, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(2, '2 - Event passed', 'Demo Generation One Vol. 1', '2022-09-02', '2022-09-04', 'Yes', 'Yes', 'Demo ACigknYOoE', '2022-07-25', '2022-08-07', 4, 900, 1600, 2, 'Yes', 'Demo AYvujAuoEa', '2022-07-19', '2022-09-30', 1000, 4, 1800, 2, 'Yes', 'Jack and Jill competition', '2022-07-01', '2022-09-07', 20, 500, 3, 950, 'Yes', 'Master Class', '2022-07-25', '2022-09-05', 500, 10, 700, 4, 'Yes', 'Demo AOnXZKYRCG', '2022-07-19', '2022-08-07', 500, 4, 900, 2, ' Famous Tester & Testie for the 1st time in Prague! Experience beautiful Easter Prague and feel that the Bachata love is all around you ?\r\n? Exclusive 2-day workshop of romantic Bachata with Tester & Testie, special workshop Bachata connection principles with Mauritius & Elvira, pre-party workshops\r\n? Parties with DJ MomoLatino, Tester & Testie and other artists\r\n? Jack & Jill (max. 6 leaders, 6 followers), 1st price: private lesson with Tester & Testie!\r\n? Possibility to arrange private lessons (both Tester & Testie will be present for the couple)\r\n', '? Venue:\r\nTresor Club Prague, Vinohradská 25, Prague\r\n(pre-party in Dancer\'s Club, Kon?vova 929)\r\n', '? Prices:\r\nFullpass: SOLD OUT !!!\r\nPossibility to go on the waiting list. In case some dancer will not be able to participate, we will contact you. Let us know.\r\n\r\nParty Pass: 450 CZK / 18 euro\r\nJack & Jill starting fee (max. 6 leaders, 6 followers): 250 CZK / 10 euro for Fullpass holders, 500 CZK / 20 euro for others', 'Yes', 'Yes', 'I agree with storing the information I am providing you and I agree with your company GDP policy/therms GDP policy/therms', 'Yes', 'I am vaccinated against COVID-19 or I have valid COVID-19 test COVID-19 policy', 'No', '', 'uploads/poster_janis_zoe.jpg'),
(3, '1 - Registrations open', 'Sensual Weekend - Bachata workshop', '2022-12-02', '2022-12-03', 'Yes', 'Yes', 'Early birds', '2022-08-05', '2022-11-30', 6, 2500, 4700, 3, 'Yes', 'Full pass', '2022-08-05', '2022-11-30', 3000, 6, 5500, 3, 'Yes', 'Master class', '2022-08-05', '2022-11-30', 750, 2, 1200, 2, 'No', '', '', '', 0, 0, 0, 0, 'Yes', 'Party pass', '2022-08-05', '2022-11-30', 1900, 4, 3500, 2, 'Artists\r\n????\r\n? Melvin y Gatica, Bachata Influence - for the 1st time in Prague!\r\n? Igor y Rocio, Bachata Feeling - after 2021 big success again in Prague!\r\n? DJ MomoLatino, international DJ, Italy\r\n', 'What awaits you?\r\n????????\r\n? 8 hours of main workshops with 4 artists (2 levels of workshops, happening simultaneously)\r\n? 2 special Lady styling lessons with Gatica\r\n? Gender Bachata battle pre-party class with Sorush & Greta\r\n? 2 rooftop parties\r\n? Main party in legendary Tresor Club with DJ Tony Pecino and DJ MomoLatino\r\n Types of tickets\r\n Fullpass advanced (30-40 couples, 8 hours of advanced lessons - 3 hours with Melvin-Gatica, 3 hours with Igor-Rocio, 60 min with Sorush-Greta, 60 min with Mauritius-Elvira, 3 parties, Gender Bachata battle with Sorush y Grete)\r\n Fullpass classic (30-40 couples, 8 hours of intermediate-advanced lessons - 3 hours with Melvin-Gatica, 3 hours with Igor-Rocio, 60 min with Sorush-Greta, 60 min with Mauritius-Elvira, 3 parties, Gender Bachata battle with Sorush y Grete)\r\n', 'FAQ - Frequently asked questions\r\n???????????????\r\n? What is the difference between Group 1 (Advanced) and Group 2 (classical Fullpass)?\r\n Main difference is the level, Group 1 being only advanced+, group 2 something between intermediate-advanced. Workshops in both groups will be happening simultaneously. Both groups will have 8 hours of workshops. The basic content of workshops will be the same, only it will be suited according to the level of the dancers. We have chosen idea of 2 separate groups of different levels to make the learning as effective as possible for everybody, it\'s the new concept. In case somebody will not be suitable for either of the level, Artists may suggest moving the person to the other group.\r\n? What if I will find out that I am not a good fit for the level group?\r\n In that case talk to us and we will try to find a solution.\r\n? What if somebody else will suggest different level for me?\r\n In case some of the artists would notice that you are not a good fit for the level that you have bought, then you will be asked to switch to the other group.\r\n? If I will be moved to the other group based on the recommendation of the Artists, will I get refund of a price difference?\r\n', 'Yes', 'Yes', 'I confirm therms of sevice', 'Yes', 'I confirm GDPR therms', 'No', '', 'uploads/melvin_june23.jpg');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `events`
--
ALTER TABLE `events`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
