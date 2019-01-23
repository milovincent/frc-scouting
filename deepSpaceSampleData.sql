-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 02:53 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frcdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL COMMENT 'id of result',
  `timer` double NOT NULL,
  `event` text NOT NULL COMMENT '$message',
  `prime` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `timer`, `event`, `prime`) VALUES
(174, 1.91, 'blue-hab-1', 47),
(174, 2.48, 'blue-hab-3', 48),
(174, 3.01, 'blue-hab-2', 49),
(174, 3.24, 'blue-hab-2', 50),
(174, 3.44, 'blue-hab-2', 51),
(174, 4.98, 'blue-rocket-2.cargo-miss.medium', 52),
(174, 5.63, 'blue-cargo.cargo', 53),
(174, 6.04, 'blue-cargo.cargo', 54),
(174, 6.31, 'blue-cargo.cargo', 55),
(174, 6.85, 'blue-cargo.hatch', 56),
(174, 7.47, 'blue-cargo.hatch-miss', 57),
(174, 7.71, 'blue-cargo.hatch-miss', 58),
(174, 8.34, 'blue-cargo.cargo-miss', 59);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL,
  `scoutName` varchar(50) NOT NULL DEFAULT 'some idiot who didn''t put their name',
  `matchNumber` varchar(9) NOT NULL,
  `teamNumber` varchar(9) NOT NULL,
  `teamPosition` varchar(14) NOT NULL,
  `robotPosition` varchar(9) NOT NULL,
  `foul` varchar(9) NOT NULL DEFAULT '0',
  `techFoul` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `scoutName`, `matchNumber`, `teamNumber`, `teamPosition`, `robotPosition`, `foul`, `techFoul`) VALUES
(173, ' milo', '13', '686', 'blueFar', '1', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`prime`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `prime` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=174;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
