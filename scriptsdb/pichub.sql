-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Dez 2017 um 16:53
-- Server-Version: 10.1.28-MariaDB
-- PHP-Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `pichub`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblpost`
--

CREATE TABLE `tblpost` (
  `id` int(11) NOT NULL,
  `Timestamp` date NOT NULL,
  `title` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Picture_pfad` varchar(1111) NOT NULL,
  `restriction` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblrestriction`
--

CREATE TABLE `tblrestriction` (
  `id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tblrole`
--

CREATE TABLE `tblrole` (
  `id` int(11) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tblrole`
--

INSERT INTO `tblrole` (`id`, `Role`) VALUES
(1, 'admin'),
(2, 'Normal User');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `Name_First` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Name_Last` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E-Mail` varchar(25) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Username` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Role_id` int(11) NOT NULL,
  `PW` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `tbluser`
--

INSERT INTO `tbluser` (`id`, `Name_First`, `Name_Last`, `E-Mail`, `Username`, `Role_id`, `PW`) VALUES
(1, 'test', 'test', 'test@gmail.com', 'test', 1, '1234'),
(2, 'timon', 'vandennobelen', 'nobelnetimon@gmail.com', 'timon', 1, '');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `tblpost`
--
ALTER TABLE `tblpost`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post-restriciton` (`restriction`);

--
-- Indizes für die Tabelle `tblrestriction`
--
ALTER TABLE `tblrestriction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restriction-user` (`User_id`);

--
-- Indizes für die Tabelle `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_role` (`Role_id`);

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `tblpost`
--
ALTER TABLE `tblpost`
  ADD CONSTRAINT `post-restriciton` FOREIGN KEY (`restriction`) REFERENCES `tblrestriction` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tblrestriction`
--
ALTER TABLE `tblrestriction`
  ADD CONSTRAINT `restriction-user` FOREIGN KEY (`User_id`) REFERENCES `tbluser` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `tbluser`
--
ALTER TABLE `tbluser`
  ADD CONSTRAINT `user_role` FOREIGN KEY (`Role_id`) REFERENCES `tblrole` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
