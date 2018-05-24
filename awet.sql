-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 05:16 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admini`
--

CREATE TABLE `admini` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admini`
--

INSERT INTO `admini` (`id`, `Username`, `password`) VALUES
(1, 'DrinPer', 'drinper'),
(2, 'EndritG', 'endri'),
(3, 'GramozG', 'gramozi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(300) DEFAULT NULL,
  `hosting` varchar(30) DEFAULT NULL,
  `comment` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `website`, `hosting`, `comment`) VALUES
(5, NULL, '321', 'sasas', 'aaaaa', 'yes', NULL),
(72, 'perquku\\', 'perquku\\', 'djkl@hotmail.com', 'www.youtube.com', NULL, 'sndkalkslkja'),
(73, 'Drin Perquku', '', 'drinperquku@gmail.com', 'http://www.google.com', NULL, 'ubt'),
(74, 'Drin Perquku', '', 'drinperquku@gmail.com', 'http://www.google.com', NULL, 'sdjkalkslajklak');

-- --------------------------------------------------------

--
-- Table structure for table `creditc`
--

CREATE TABLE `creditc` (
  `id` int(11) NOT NULL,
  `Owner` varchar(100) NOT NULL,
  `CVV` int(11) NOT NULL,
  `CardNr` bigint(20) NOT NULL,
  `ExpM` int(11) NOT NULL,
  `ExpD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditc`
--

INSERT INTO `creditc` (`id`, `Owner`, `CVV`, `CardNr`, `ExpM`, `ExpD`) VALUES
(0, 'Drin Peruqku', 132, 4564, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `creditcard`
--

CREATE TABLE `creditcard` (
  `id` int(11) NOT NULL,
  `Owner` varchar(255) NOT NULL,
  `CVV` int(11) DEFAULT NULL,
  `CardNr` int(255) DEFAULT NULL,
  `ExpM` int(11) DEFAULT NULL,
  `ExpY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creditcard`
--

INSERT INTO `creditcard` (`id`, `Owner`, `CVV`, `CardNr`, `ExpM`, `ExpY`) VALUES
(1, 'Drini', 123, 4564232, 11, 12),
(2, 'Endrit Gashi', 132, 4565, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `paketa`
--

CREATE TABLE `paketa` (
  `id` int(11) NOT NULL,
  `Plani` varchar(33) DEFAULT NULL,
  `kosto` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paketa`
--

INSERT INTO `paketa` (`id`, `Plani`, `kosto`) VALUES
(1, 'Basic', '47.88 $/Y'),
(2, 'Pro', '71.88 $/Y'),
(3, 'Business ', '95.88 $/Y');

-- --------------------------------------------------------

--
-- Table structure for table `porosia`
--

CREATE TABLE `porosia` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `FirstName2` varchar(255) NOT NULL,
  `LastName2` varchar(255) DEFAULT NULL,
  `cardNr` int(255) DEFAULT NULL,
  `expiration` varchar(55) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porosia`
--

INSERT INTO `porosia` (`id`, `FirstName`, `LastName`, `email`, `password`, `address`, `address2`, `city`, `state`, `zip`, `FirstName2`, `LastName2`, `cardNr`, `expiration`, `cvv`) VALUES
(1, 'Drin', 'PEruqku', 'drini@gmail', 'dhhjkj', 'qq', 'dsas', 'vushtrri', 'Kosoto', NULL, ' Drin', 'Perquku', 45654, '08/09', 123),
(2, 'Drin', 'Perquku', 'drinperquku@gmail.com', '$2y$10$Vhm.kxGPdvI6/UN2jYDheOnrXaEmhazU8b3ctEoPJ.TYmc28wP1Uq', 'Qemajl Shaqiri, q, q, q, q', 'q', 'Vushtrri', 'kosovo', NULL, 'Drin', 'Perquku', 2147483647, '08/09', 3422),
(3, 'Drin ', 'Perquku', 'drinperquku@gmail.com', '$2y$10$/jK.8FhUsJYhjtife/7GYel7Rg9h1Jqxmv.XTNrfb2Xqv91Uprjnm', 'Qemajl Shaqiri, ', 'qemali', 'Vushtrri', 'kosovo', NULL, 'Drin', 'sjklklj', 2147483647, '08/09', 312);

-- --------------------------------------------------------

--
-- Table structure for table `userat`
--

CREATE TABLE `userat` (
  `id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(130) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userat`
--

INSERT INTO `userat` (`id`, `Username`, `name`, `email`, `password`) VALUES
(1, 'root', 'Drin perquku', 'drinperquku@gmail.com', '$2y$10$bLzDnw6oWhJp/.438oZWCuZPPuJeIK1kQudp7YqvXKwMuDtvu0wLm'),
(2, 'root', 'Endrit Gashi`', 'enndrit@gmail.com', '$2y$10$ek5wv2M5Thv/oyXCp6hfb.HH6p0gSsfMMSaUpsqbLZg3PCG4SDYWS'),
(22, 'root', 'zeqa', 'asjakl@email.com', '$2y$10$qIsGXelpPcw2P2Ip6iG1DuL3phZleabZrQRJwR671aLdhqx2gF7G.'),
(23, 'root', 'zeqa', 'asjakl@email.com', '$2y$10$G9Srr4kTFbEYaM0R19stmeCSpfR0UB2/RiPTJehPkzxmuQcbU/Dbq'),
(24, 'root', 'Drin perquku', 'drinperquku@gmail.com', '$2y$10$2lEErPLUtbb1/vrlk3IGT.Nkd6IB2xvGkYCetXBSR5FesWH1RBwT6'),
(25, 'root', 'Drin perquku', 'drinperquku@gmail.com', '$2y$10$.eEDWsiuU3T4rVMGMIcSsuyvzg6wULcwcuX/5p0Br31CiEU6rL0U6'),
(26, 'root', 'drinperquku', 'drini14@gmail.com', '$2y$10$.1F1.Zve/CJgODT60la/MeysXvHFWniTJ9FvPwNNAb9caQLD16odq'),
(27, 'root', 'Drinperquku', 'drini14@hotmail.com', '$2y$10$EXw3Ae7iHmLF7k54rihhGucnP27PxPeODbZMoUjfW/YgYsZcTlnPa'),
(28, 'root', 'dd', 'djkl@hotmail.com', '$2y$10$5niBpS3PM8cLzABlEyKYyOTGtvrdy08jCyC5R5xEmEBZ9toscWe.S'),
(29, 'root', 'Drinperquku', 'drinperquku@gmail.com', '$2y$10$TowOO7f9RVQOXgdjlDLJJOhGfYks0dj89IHq37FAx8pywbDlsHkWq'),
(30, 'root', 'Drinperquku', 'drinperquku@gmail.com', '$2y$10$bIq/zYLnmImQ0N5ng.bOUuo8sieFt2Rr/RhLEecavVl1DAJyGs.sC'),
(31, 'drini123', 'Drinperquku', 'drinperquku@gmail.com', '$2y$10$ydicFPz1MUzCCGJFB7D4kuZKNzN2jB49EXtDOS.Sr8rmCfhdoM3Je'),
(32, 'drini123', 'Drinperquku', 'drinperquku@gmail.com', '$2y$10$7Cd2tsJjRb.SzB9sHsmMN.bUN23hAsf59FZO9Lt32utT2w1lVXjW6'),
(33, 'endri', 'Endrit Gashi`', 'enndrit@gmail.com', '$2y$10$UWrI8HOlRKI8tbbyiRm7ou.SbpS/h0uouCWtq.zbwEOO50Cy1Gmeq'),
(34, 'drini123', 'ss', 'drinperquku@gmail.com', '$2y$10$AEp0zpPlDXILc2aX3nQ0..vJpIfMvsLVgcZC9Q2dA6ltovxVoUErS'),
(35, 'drini123', 'ss', 'drinperquku@gmail.com', '$2y$10$i/DCvyIxVlDGT0X42RF6PedKLEVkll3ErYsSQOHfrB9QHRbX/Vblu'),
(52, 'Dperquku', 'Drin Perquku', 'drinperquku@gmail.com', '$2y$10$vonej6shMfVIoEPcU4xBMuXfcMAhTccnpMvd1hQBTwMRL2jCSFP4e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `name` varchar(19) NOT NULL,
  `email` varchar(132) NOT NULL,
  `password` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `name`, `email`, `password`) VALUES
(0, 'root', 'Drinperquku', 'drinperquku@gmail.com', '$2y$10$IegAML0o42bl/8V79VtqluihTwAOOVN00NUAGP/u7bfLhVjW/124C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admini`
--
ALTER TABLE `admini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditc`
--
ALTER TABLE `creditc`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paketa`
--
ALTER TABLE `paketa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `porosia`
--
ALTER TABLE `porosia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userat`
--
ALTER TABLE `userat`
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
-- AUTO_INCREMENT for table `admini`
--
ALTER TABLE `admini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `creditcard`
--
ALTER TABLE `creditcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paketa`
--
ALTER TABLE `paketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `porosia`
--
ALTER TABLE `porosia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userat`
--
ALTER TABLE `userat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `creditc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
