-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 24. srp 2022, 23:25
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
-- Struktura tabulky `settings`
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
  `appUnderDevelopment` varchar(250) CHARACTER SET latin2 COLLATE latin2_czech_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vypisuji data pro tabulku `settings`
--

INSERT INTO `settings` (`id`, `organizerName`, `adminEmail`, `nationalBankAccount`, `accountIBAN`, `accountBIC`, `accountHolderName`, `accountHolderAddress`, `bankAddress`, `appUnderDevelopment`) VALUES
(1, 'Mauritius & Elvira', 'info@mauritiuselvira.eu', '2002019652/2010 (Fio Banka, a.s.)', 'CZ65 2010 0000 0020 0201 9652', 'FIOBCZPPXXX', 'Elvira Masanlo', '', 'Fio banka, a.s. Millennium Plaza, V Celnici 10, Prague 1, ZIP Code : 117 21, Czech Republic', 'on');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
