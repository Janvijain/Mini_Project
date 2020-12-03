-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 03:40 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `activity`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event` varchar(250) NOT NULL,
  `convenor` varchar(250) NOT NULL,
  `description` varchar(550) NOT NULL,
  `date` date NOT NULL,
  `guest` varchar(250) NOT NULL,
  `footfall` varchar(250) NOT NULL,
  `spotlight` varchar(250) NOT NULL,
  `other` varchar(250) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event`, `convenor`, `description`, `date`, `guest`, `footfall`, `spotlight`, `other`, `pic`) VALUES
(11, 'Paper Presentation', 'Janvi', 'Presenting IQAC Report Generation', '2020-11-25', 'Hezal Maam', '25', 'Presentation', 'Xyz', 'rsz_iqac4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `id` int(11) NOT NULL,
  `place` varchar(250) NOT NULL,
  `domain` varchar(250) NOT NULL,
  `faculty` int(250) NOT NULL,
  `students` int(250) NOT NULL,
  `date` date NOT NULL,
  `spotlight` varchar(250) NOT NULL,
  `learning` varchar(250) NOT NULL,
  `other` varchar(250) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`id`, `place`, `domain`, `faculty`, `students`, `date`, `spotlight`, `learning`, `other`, `pic`) VALUES
(8, 'Silvasa', 'Computer', 4, 120, '2018-12-31', 'Kitech', 'Web development', 'Web Development', 'rsz_iqac4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `id` int(11) NOT NULL,
  `project` varchar(250) NOT NULL,
  `guide` varchar(250) NOT NULL,
  `ay` int(250) NOT NULL,
  `details` varchar(250) NOT NULL,
  `students` varchar(250) NOT NULL,
  `application` varchar(250) NOT NULL,
  `other` varchar(250) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`id`, `project`, `guide`, `ay`, `details`, `students`, `application`, `other`, `pic`) VALUES
(3, 'Locker Management System', 'Mrs. Vishakha Shelke', 2019, 'It was an initiative to convert the manual work of managing lockers into automated management system. ', '1. Janvi Shree Shrimal\r\n2. Pallavi Pawar\r\n3.Pragati Tiwari', 'This system is deployed in Universal College Of Engineering', 'This project was declared as winner in Project Based Learning ', 'Screenshot (18).png'),
(5, 'Locker Management System', 'Vishakha Shelke', 2018, 'It was an initiative to convert the manual work into automated management of locker', '1. Janvi Shree Shrimal\r\n2. Pallavi Pawar\r\n3.Pragati Tiwari', 'This system is deployed in Universal College Of Engineering.', 'This project was declared as winner in Project Based Learning', 'Screenshot (18).png');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `competition` varchar(250) NOT NULL,
  `organiser` varchar(250) NOT NULL,
  `venue` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `winner` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `publisher` varchar(250) NOT NULL,
  `other` varchar(250) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `competition`, `organiser`, `venue`, `description`, `winner`, `date`, `publisher`, `other`, `pic`) VALUES
(24, 'Aurora', 'UCOE', 'UCOE', 'It is an intercollege sports event', '1.Janvi', '2018-12-31', 'UCOE', 'Best Sports Day Event', 'rsz_iqac4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `venue` varchar(250) NOT NULL,
  `organiser` varchar(250) NOT NULL,
  `participants` varchar(250) NOT NULL,
  `speaker` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `learning` varchar(250) NOT NULL,
  `other` varchar(250) NOT NULL,
  `pic` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `topic`, `venue`, `organiser`, `participants`, `speaker`, `date`, `learning`, `other`, `pic`) VALUES
(4, 'Workshop on Web Development', 'UCOE', 'UCOE', '80', 'XYZ\r\nABC\r\nPQR', '2018-12-31', 'Basic Web Development Skills', 'Wordpress was introduced', 'iete.jpg'),
(5, 'WEB DEVELOPMENT', 'UCOE', 'UCOE', '120', 'RAVI SIR\r\nASST.PROF UCOE', '2018-12-31', 'BASIC WEB DEVELOPMENT', 'AMAZING RESPONSE FROM STUDENTS', 'rsz_iqac4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
