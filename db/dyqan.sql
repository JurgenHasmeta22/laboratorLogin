-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 11:01 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dyqan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikulli`
--

CREATE TABLE `artikulli` (
  `ArtikullId` int(11) NOT NULL,
  `Emri` varchar(255) DEFAULT NULL,
  `Pershkrim` varchar(5000) DEFAULT NULL,
  `Ngjyra` varchar(255) DEFAULT NULL,
  `Masa` varchar(11) DEFAULT NULL,
  `Cmimi` int(11) DEFAULT NULL,
  `Imazhi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikulli`
--

INSERT INTO `artikulli` (`ArtikullId`, `Emri`, `Pershkrim`, `Ngjyra`, `Masa`, `Cmimi`, `Imazhi`) VALUES
(1, 'Syze', 'Syze Dielli', 'E Zeze', '0', 3000, NULL),
(4, 'Cante', 'Cante per femije', 'Blu', 'XL', 200, NULL),
(5, 'Xhinse', 'Xhinse per femra', 'Blu', 'XL', 500, NULL),
(6, 'Tuta', 'Tuta sportive', 'Blu', 'L', 300, NULL),
(7, 'Bluze', 'Bluze me menge te shkurtra', 'Blu', 'S', 200, NULL),
(8, 'Kemishe', 'Kemishe me menge te shkurtra', 'E Bardhe', 'M', 1000, NULL),
(9, 'Dorashka', 'Dorashka dimri', 'Blu', 'XL', 2000, NULL),
(10, 'Pallto', 'Pallto per meshkuj', 'Blu', 'XL', 800, NULL),
(11, 'Kapele', 'Kapele sportive', 'E Zeze', 'XL', 700, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blerjet`
--

CREATE TABLE `blerjet` (
  `BlerjetId` int(11) NOT NULL,
  `PerdoruesId` int(11) DEFAULT NULL,
  `ArtikullId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perdoruesi`
--

CREATE TABLE `perdoruesi` (
  `PerdoruesId` int(11) NOT NULL,
  `Emri` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Adrese` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Passwordi` varchar(255) DEFAULT NULL,
  `Telefon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perdoruesi`
--

INSERT INTO `perdoruesi` (`PerdoruesId`, `Emri`, `Email`, `Adrese`, `Username`, `Passwordi`, `Telefon`) VALUES
(1, 'Brajan Hasmeta', 'brajanhasmeta@yahoo.com', 'Rr.Dum Alla', 'brajanhasmeta', 'brajan123', '0693728038');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikulli`
--
ALTER TABLE `artikulli`
  ADD PRIMARY KEY (`ArtikullId`);

--
-- Indexes for table `blerjet`
--
ALTER TABLE `blerjet`
  ADD PRIMARY KEY (`BlerjetId`),
  ADD KEY `PerdoruesId` (`PerdoruesId`),
  ADD KEY `ArtikullId` (`ArtikullId`);

--
-- Indexes for table `perdoruesi`
--
ALTER TABLE `perdoruesi`
  ADD PRIMARY KEY (`PerdoruesId`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikulli`
--
ALTER TABLE `artikulli`
  MODIFY `ArtikullId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `blerjet`
--
ALTER TABLE `blerjet`
  MODIFY `BlerjetId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perdoruesi`
--
ALTER TABLE `perdoruesi`
  MODIFY `PerdoruesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blerjet`
--
ALTER TABLE `blerjet`
  ADD CONSTRAINT `blerjet_ibfk_1` FOREIGN KEY (`PerdoruesId`) REFERENCES `perdoruesi` (`PerdoruesId`),
  ADD CONSTRAINT `blerjet_ibfk_2` FOREIGN KEY (`ArtikullId`) REFERENCES `artikulli` (`ArtikullId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
