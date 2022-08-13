-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2017 at 02:46 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polling`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbAdministrators`
--

CREATE TABLE `tbAdministrators` (
  `admin_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbAdministrators`
--

INSERT INTO `tbAdministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Ellen', 'Johnson', 'ellen@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Allan', 'Ayata', 'allan@gmail.com', 'b993e4526238d62f6b1b90e605532ff8');

-- --------------------------------------------------------

--
-- Table structure for table `tbCandidates`
--

CREATE TABLE `tbCandidates` (
  `candidate_id` int(5) NOT NULL,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbCandidates`
--

INSERT INTO `tbCandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(1, 'Michael', 'Secretary', 2),
(3, 'Judy', 'Chairperson', 1),
(4, 'Harry', 'Chairperson', 0),
(5, 'Peter', 'Secretary', 1),
(6, 'Phil', 'Vice', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbMembers`
--

CREATE TABLE `tbMembers` (
  `member_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbMembers`
--

INSERT INTO `tbMembers` (`member_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Kimani', 'Kahiga', 'kahiga@gmail.com', '547da2b03f947606f1d06a8dec093e64'),
(2, 'Andrew', 'Niamani', 'andres@gmail.com', 'd914e3ecf6cc481114a3f534a5faf90b');

-- --------------------------------------------------------

--
-- Table structure for table `tbPositions`
--

CREATE TABLE `tbPositions` (
  `position_id` int(5) NOT NULL,
  `position_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbPositions`
--

INSERT INTO `tbPositions` (`position_id`, `position_name`) VALUES
(1, 'Chairperson'),
(2, 'Secretary'),
(3, 'Vice Secretary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbAdministrators`
--
ALTER TABLE `tbAdministrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbCandidates`
--
ALTER TABLE `tbCandidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `tbMembers`
--
ALTER TABLE `tbMembers`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbPositions`
--
ALTER TABLE `tbPositions`
  ADD PRIMARY KEY (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbAdministrators`
--
ALTER TABLE `tbAdministrators`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbCandidates`
--
ALTER TABLE `tbCandidates`
  MODIFY `candidate_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbMembers`
--
ALTER TABLE `tbMembers`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbPositions`
--
ALTER TABLE `tbPositions`
  MODIFY `position_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
