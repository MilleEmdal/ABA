-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 18, 2017 at 10:55 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aba`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, 'vndsnvsvns-vdv mc vbmf,jngfd vmc,');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Mail` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `CVR` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Mail`, `phone`, `phone2`, `CVR`) VALUES
(1, 'allerbaereralle@hammergod.dk', '+45 51717441', '', '28538723');

-- --------------------------------------------------------

--
-- Table structure for table `front`
--

CREATE TABLE `front` (
  `id` int(11) NOT NULL,
  `txt` text NOT NULL,
  `txtOne` text NOT NULL,
  `txtTwo` text NOT NULL,
  `txtThree` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `front`
--

INSERT INTO `front` (`id`, `txt`, `txtOne`, `txtTwo`, `txtThree`) VALUES
(1, 'Velkommen til det alterative flyttefirma, hvor vi s&aelig;tter humor, prestige , punklighed og en smilende kunde er vores top priotet,\r\n                 derfor hj&aelig;lper vi gerne  med at pakker ned monterer og hj&aelig;lper dig enda med at indrette hvis &oslash;nsket foreligger ingen opgaver er for \r\n                 små og den d&aring;rlige attitude ligger vi hos konkurrenten.', 'Vi lever af vores drikkepenge.', ' Derfor elsker vi trapper, derfor g&oslash;r vi din flytning til poesi og undskylder for sang på trapperne.', 'Der findes ikke problemer kun l&oslash;sninger.');

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `privatOne` varchar(50) NOT NULL,
  `privatTwo` varchar(50) NOT NULL,
  `erhverOne` varchar(50) NOT NULL,
  `erhverTwo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `privatOne`, `privatTwo`, `erhverOne`, `erhverTwo`) VALUES
(1, '650', '850', '750', '950');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front`
--
ALTER TABLE `front`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `front`
--
ALTER TABLE `front`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
