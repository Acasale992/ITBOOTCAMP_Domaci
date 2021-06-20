-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 11:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vodjenje_prodaje`
--
CREATE DATABASE IF NOT EXISTS `33D_6126_Aleksandar_Stojanovic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `33D_6126_Aleksandar_Stojanovic`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` int(3) NOT NULL,
  `kolicina` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, 98, '10', '60', '2021-05-01'),
(2, 98, '20', '70', '2021-06-16'),
(3, 98, '30', '88', '2021-06-17'),
(4, 123, '10', '90', '2021-05-01'),
(5, 123, '20', '80', '2021-06-16'),
(6, 123, '30', '110', '2021-06-17'),
(7, 918, '20', '90', '2021-05-01'),
(8, 918, '30', '88', '2021-06-17'),
(9, 456, '10', '110', '2021-05-01'),
(10, 456, '10', '120', '2021-06-16'),
(12, 789, '20', '220', '2021-06-17'),
(13, 789, '40', '275', '2021-06-17'),
(14, 789, '10', '242', '2021-06-17'),
(15, 776, '30', '50', '2021-05-01'),
(16, 761, '30', '50', '2021-05-01'),
(17, 761, '10', '242', '2021-06-17'),
(18, 761, '50', '200', '2021-06-16'),
(19, 918, '555', '550', '2021-06-19'),
(20, 456, '100', '110', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` int(3) NOT NULL,
  `naziv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cena` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
(98, 'jabuka', '55'),
(123, 'krastavac', '100'),
(456, 'paprika', '129'),
(761, 'beli luk', '80'),
(776, 'crni luk', '50'),
(789, 'paradajz', '200'),
(918, 'kruska', '99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
