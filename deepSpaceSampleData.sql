-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 03:23 AM
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
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `id` int(11) NOT NULL,
  `scoutName` varchar(15) DEFAULT NULL,
  `matchNumber` varchar(9) DEFAULT NULL,
  `teamNumber` varchar(9) DEFAULT NULL,
  `teamPosition` varchar(14) DEFAULT NULL,
  `robotPosition` varchar(9) DEFAULT NULL,
  `foul` varchar(9) DEFAULT NULL,
  `techFoul` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `scoutName`, `matchNumber`, `teamNumber`, `teamPosition`, `robotPosition`, `foul`, `techFoul`) VALUES
(1, ' Milo', '17', '686', ' Best', ' Worst', '0', 0),
(2, ' danny', '1', '5338', 'Blue', ' ', '0', 0),
(3, 'Bennett', '1', '87', ' Blue', ' B2', '0', 0),
(4, ' Tyler', '1', '5115', ' Red', ' Right', '0', 0),
(5, ' Aidan', '1', '4242', ' Red', ' ', '0', 0),
(6, 'Milo', '2', '5338', ' Red', ' ', '', 0),
(7, ' Aidan', '2', '449', ' Blue', ' ', '0', 0),
(8, 'Matthew', '2', '686', ' Blue', '', '', 0),
(9, 'Matthew', '2', '686', ' Blue', ' ', '', 0),
(10, 'Matthew', '', '686', ' ', ' ', '', 0),
(11, ' Tyler', '2', '5587', ' Red', ' Right', '0', 0),
(12, ' Henry', '3', '686', ' Blue', ' Right', '0', 0),
(13, ' Aidan', '3', '5115', ' Blue', ' ', '0', 0),
(14, ' Tyler', '3', '5115', ' Red', ' Right', '', 0),
(15, 'Bennett', '3', '5338', 'Red', ' Left', '', 0),
(16, ' Henry', '', '686', ' Blue', ' Right', '', 0),
(17, ' Milo', '4', '4242', 'Red', ' ', '0', 0),
(18, ' Bennett', '4', '87', ' Blue', 'Right', '0', 0),
(19, ' Aidan', '4', '5338', ' Red', ' ', '0', 0),
(20, 'Ben', '4', '5115', ' Blue', ' Left', '', 0),
(21, ' Bennett', '5', '449', ' Red', ' Left', '', 0),
(22, ' Henry', '7', '5338', ' Red', ' Right', '0', 0),
(23, 'Milo', '7', '4242', ' Blue', ' ', '', 0),
(24, 'Matthew', '', '5115', ' Blue', ' ', '', 0),
(25, ' Aidan', '', '449', ' Red', ' ', '', 0),
(26, ' Henry', '8', '5587', ' Red', ' Right', '', 0),
(27, ' Aidan', '8', '5338', ' Blue', ' ', '0', 0),
(28, ' Henry', '9', '5338', ' Red', ' Right', '', 0),
(29, ' Aidan', '9', '87', ' Blue', ' ', '0', 0),
(30, ' Milo', '9', '5115', ' Red', ' ', '0', 0),
(31, 'Michael', '9', '4242', ' ', ' ', '', 0),
(32, ' Milo', '13', '686', 'help', ' ', '0', 0),
(33, ' Milo', '13', '686', 'help', ' ', '0', 0),
(34, ' Milo', '13', '686', 'wah', ' ', '0', 0),
(35, ' milo', '13', '686', 'wow', ' ', '0', 0),
(36, ' milo', '13', '686', ' ', ' ', '0', 0),
(37, ' milo', '13', '686', ' ', ' ', '0', 0),
(38, ' milo', '13', '686', ' ', ' ', '0', 0),
(39, ' milo', '13', '686', ' ', ' ', '0', 0),
(40, ' milo', '13', '686', ' ', ' ', '0', 0),
(41, ' milo', '13', '686', 'welp', ' ', '0', 0),
(42, ' milo', '13', '686', 'wow', ' ', '0', 0),
(43, ' milo', '13', '686', 'wah', ' ', '0', 0),
(44, ' milo', '13', '686', ' ', ' ', '0', 0),
(45, ' milo', '13', '686', 'wah', ' ', '0', 0),
(46, ' milo', '13', '686', 'wah', ' ', '0', 0),
(47, ' milo', '13', '686', 'hjs', ' ', '0', 0),
(48, ' milo', '13', '686', 'wa', ' ', '0', 0),
(49, ' Milo', '13', '686', 'jsdh', ' ', '0', 0),
(50, ' milo', '13', '686', ' ', ' ', '0', 0),
(51, ' milo', '13', '686', 'there', ' ', '0', 0),
(52, ' milo', '13', '686', 'where', ' ', '0', 0),
(53, ' scooter', '42', '401', ' ', ' ', '0', 0),
(54, ' scooter', '42', '401', ' ', ' ', '', 0),
(55, ' milo', '13', '686', 'lol', ' ', '0', 0),
(56, ' milo', '13', '686', 'blearg', ' ', '0', 0),
(57, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 0),
(58, ' Milo', '13', '686', 'gfh', ' ', '0', 0),
(59, ' milo', '13', '686', 'lel', ' ', '0', 0),
(60, ' milo', '13', '686', 'hkjwdh', ' ', '0', 0),
(61, ' milo', '13', '686', '1312jkh', ' ', '0', 0),
(62, ' milo', '13', '686', 'oirwu', ' ', '', 0),
(63, ' milo', '13', '686', 'kja', ' ', '0', 0),
(64, ' milo', '13', '686', 'kdjha', ' ', '', 0),
(65, ' milo', '13', '686', 'wah', ' ', '0', 0),
(66, ' milo', '13', '686', 'echo that shit', ' ', '0', 0),
(67, ' milo', '13', '686', 'new table?', ' ', '0', 0),
(68, ' milo', '13', '686', 'test', ' ', '0', 0),
(69, ' milo', '13', '686', 'fjhslk', ' ', '', 0),
(70, ' milo', '64', '686', 'gfys', ' ', '0', 0),
(71, ' sarjgald', '13', '686', ' helpful', ' ', '0', 0),
(72, ' Milo', '13', '686', ' heeeelp', ' ', '0', 0),
(73, ' jkh;kjh;k', '13', '686', ' hjfkj', ' ', '0', 0),
(74, ' jkh;kjh;k', '15', '686', ' kfkhfk', ' agh', '', 0),
(75, ' hellz no', '13', 'undefined', ' ', ' ', '0', 0),
(76, 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 0),
(77, ' fs;lkdfgjsjd', '13', 'undefined', ' ', ' ', '0', 0),
(78, ' milo', '13', '686', ' ', ' ', '0', 0),
(79, ' milo', '13', '686', ' ', ' ', '', 0),
(80, ' klds;fjg;lsdkf', '13', '686', 'first test', ' ', '0', 0),
(81, ' aslkd;jalfs', '13', '686', 'first', ' ', '0', 0),
(82, ' sdg/sldkjgl', '13', '87', 'kdls;djfl', ' ', '0', 0),
(83, ' sodfksdjflk', '13', '686', 'kill me', ' ', '0', 0),
(84, ' milo', '13', '686', 'help', ' ', '0', 0),
(101, ' ', '42', '5338', ' ', ' ', '0', 0),
(102, ' ', '42', '5338', ' ', 'true', '', 0),
(127, ' scroo yoo', '13', '401', 'b2', 'b3', '0', 0),
(128, ' foulTechFoul', '45', '401', ' b', 'c', '1', 2),
(129, ' dinkie', '45', '5338', 'redClose', 'l2', '1', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
