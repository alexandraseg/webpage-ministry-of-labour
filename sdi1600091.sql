-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 10:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ypakp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adeia`
--

CREATE TABLE `adeia` (
  `id` int(11) NOT NULL,
  `afm` int(11) NOT NULL,
  `adeia_apo` date NOT NULL,
  `adeia_eos` date NOT NULL,
  `afm_etairias` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adeia`
--

INSERT INTO `adeia` (`id`, `afm`, `adeia_apo`, `adeia_eos`, `afm_etairias`) VALUES
(1, 123213, '0013-03-22', '0003-12-03', 213213);

-- --------------------------------------------------------

--
-- Table structure for table `anastoli`
--

CREATE TABLE `anastoli` (
  `id` int(10) NOT NULL,
  `anastoli_apo` date NOT NULL,
  `anastoli_eos` date NOT NULL,
  `afm` int(10) NOT NULL,
  `afm_etairias` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anastoli`
--

INSERT INTO `anastoli` (`id`, `anastoli_apo`, `anastoli_eos`, `afm`, `afm_etairias`) VALUES
(1, '2021-01-22', '2021-01-23', 12345, 112233);

-- --------------------------------------------------------

--
-- Table structure for table `anergoi`
--

CREATE TABLE `anergoi` (
  `afm` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `id_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(12) NOT NULL,
  `afm` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `email` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `epixeirisi`
--

CREATE TABLE `epixeirisi` (
  `afm` int(10) NOT NULL,
  `eponimia` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `epixeirisi`
--

INSERT INTO `epixeirisi` (`afm`, `eponimia`, `address`, `email`) VALUES
(112233, 'Langano Coffee', 'Filis 20', 'info@langano.gr'),
(223344, 'MainSys', 'Kosti Palama 3', 'info@mainsys.eu');

-- --------------------------------------------------------

--
-- Table structure for table `ergazomenos`
--

CREATE TABLE `ergazomenos` (
  `afm` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `id_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ergazomenos`
--

INSERT INTO `ergazomenos` (`afm`, `name`, `surname`, `address`, `email`, `id_number`) VALUES
(12345, 'George', 'Liakopoulos', 'Aidiniou 18', 'gliak@gmail.com', 'AK14562'),
(23456, 'Alexandra', 'Segkou', 'Sofokleous 5', 'alexse@gmail.com', 'AT12413'),
(87454, 'Kostas', 'Papadopoulos', 'Korinthou 3', 'kostas@gmail.com', 'AM21132'),
(98732, 'Maria', 'Stergiou', 'Ermou 93', 'stergiou@gmail.com', 'AT22293');

-- --------------------------------------------------------

--
-- Table structure for table `tilergasia`
--

CREATE TABLE `tilergasia` (
  `id` int(10) NOT NULL,
  `tilergasia_apo` date NOT NULL,
  `tilergasia_eos` date NOT NULL,
  `afm` int(10) NOT NULL,
  `afm_etairias` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tilergasia`
--

INSERT INTO `tilergasia` (`id`, `tilergasia_apo`, `tilergasia_eos`, `afm`, `afm_etairias`) VALUES
(1, '2021-01-23', '2021-01-31', 98732, 112233);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `afm` int(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`afm`, `password`, `username`, `type`) VALUES
(12345, 'gliak', 'gliak', 2),
(23456, 'alex', 'alex', 2),
(87454, 'kostas', 'kostas', 2),
(98732, 'maria', 'maria', 2),
(112233, 'langano', 'langano', 1),
(223344, 'mainsys', 'mainsys', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adeia`
--
ALTER TABLE `adeia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anastoli`
--
ALTER TABLE `anastoli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anergoi`
--
ALTER TABLE `anergoi`
  ADD PRIMARY KEY (`afm`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `epixeirisi`
--
ALTER TABLE `epixeirisi`
  ADD PRIMARY KEY (`afm`);

--
-- Indexes for table `ergazomenos`
--
ALTER TABLE `ergazomenos`
  ADD PRIMARY KEY (`afm`),
  ADD UNIQUE KEY `id_number` (`id_number`);

--
-- Indexes for table `tilergasia`
--
ALTER TABLE `tilergasia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`afm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adeia`
--
ALTER TABLE `adeia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anastoli`
--
ALTER TABLE `anastoli`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tilergasia`
--
ALTER TABLE `tilergasia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
