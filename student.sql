-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 09:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getposition` ()  SELECT * from `tbposition`$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

CREATE TABLE `tbadministrators` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'admin', '123', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbcandidates`
--

CREATE TABLE `tbcandidates` (
  `candidate_id` int(11) NOT NULL,
  `candidate_name` varchar(35) NOT NULL,
  `candidate_position` varchar(35) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(9, 'kavya', 'secretary', 4),
(10, 'vaishnavi', 'President', 10),
(11, 'suprabha', 'President', 3),
(13, 'varun', 'chief', 0),
(14, 'ramesh', 'calss rep(5)', 0),
(15, 'suresh', 'wise president', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

CREATE TABLE `tbmembers` (
  `member_id` int(11) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(15, 'VAISHNAVI', 'vaishnavi', 'vaishu@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Triggers `tbmembers`
--
DELIMITER $$
CREATE TRIGGER `getvalue` BEFORE UPDATE ON `tbmembers` FOR EACH ROW insert into `tbvoters` (`id`,`first_name`,`last_name`,`email`,`password`) values (new.member_id,new.first_name,new.last_name,new.email,new.password)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbposition`
--

CREATE TABLE `tbposition` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbposition`
--

INSERT INTO `tbposition` (`position_id`, `position_name`) VALUES
(1, 'President'),
(5, 'secretary'),
(8, 'chief'),
(10, 'calss rep(5)'),
(11, 'wise president');

-- --------------------------------------------------------

--
-- Table structure for table `tbvoters`
--

CREATE TABLE `tbvoters` (
  `id` int(11) NOT NULL,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbvoters`
--

INSERT INTO `tbvoters` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'vaishnavi', 'sampigethaya', 'vaishu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'abc', 'xyz', '123@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(10, 'suprabha', '128', 'subby@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(11, 'teja', 'gouda', 'teja@gmail.com', '19edacd33ab84209efc96eb76f578f38'),
(12, 'pavitra', 'hebbar', 'pavitrapadmanabha@gmail.com', '4939db953eb7f60975146122e6017f97'),
(13, 'rama', 'sampigethaya', 'rama@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(14, 'Suprabha', 'Sampigethaya', 'suprabhassampigethaya@gmail.com', '7884a9652e94555c70f96b6be63be216');

-- --------------------------------------------------------

--
-- Table structure for table `tbvotes`
--

CREATE TABLE `tbvotes` (
  `sl_no` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL,
  `position` varchar(35) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbvotes`
--

INSERT INTO `tbvotes` (`sl_no`, `voter_id`, `position`, `status`) VALUES
(3, 1, 'secretary', 1),
(5, 11, 'President', 1),
(6, 11, 'secretary', 1),
(7, 12, 'secretary', 1),
(8, 12, 'President', 1),
(9, 13, 'President', 1),
(10, 1, 'President', 1),
(11, 14, 'President', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbadministrators`
--
ALTER TABLE `tbadministrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbcandidates`
--
ALTER TABLE `tbcandidates`
  ADD PRIMARY KEY (`candidate_id`),
  ADD KEY `fk1` (`candidate_position`);

--
-- Indexes for table `tbmembers`
--
ALTER TABLE `tbmembers`
  ADD PRIMARY KEY (`member_id`,`email`);

--
-- Indexes for table `tbposition`
--
ALTER TABLE `tbposition`
  ADD PRIMARY KEY (`position_id`,`position_name`),
  ADD KEY `position_name` (`position_name`);

--
-- Indexes for table `tbvoters`
--
ALTER TABLE `tbvoters`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `tbvotes`
--
ALTER TABLE `tbvotes`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `position` (`position`),
  ADD KEY `voter_id` (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbadministrators`
--
ALTER TABLE `tbadministrators`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbcandidates`
--
ALTER TABLE `tbcandidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbmembers`
--
ALTER TABLE `tbmembers`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbposition`
--
ALTER TABLE `tbposition`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbvotes`
--
ALTER TABLE `tbvotes`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbcandidates`
--
ALTER TABLE `tbcandidates`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`candidate_position`) REFERENCES `tbposition` (`position_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbvotes`
--
ALTER TABLE `tbvotes`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`position`) REFERENCES `tbposition` (`position_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk3` FOREIGN KEY (`voter_id`) REFERENCES `tbvoters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
