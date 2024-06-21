-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 06:29 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `major_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `cse`
--

CREATE TABLE IF NOT EXISTS `cse` (
  `Name` varchar(100) DEFAULT NULL,
  `Rollno` varchar(100) DEFAULT NULL,
  `Branch` varchar(100) DEFAULT NULL,
  `Semester` double DEFAULT NULL,
  `Section` double DEFAULT NULL,
  `room` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `room`, `status`) VALUES
('Raghava', 'B16CS061', 'CSE', 7, 2, 1, 0),
('Manohar', 'B16CS062', 'CSE', 7, 2, 1, 0),
('Kittu', 'B16CS063', 'CSE', 7, 2, 1, 0),
('Sumanth', 'B16CS064', 'CSE', 7, 2, 1, 0),
('Sushmitha', 'B16CS065', 'CSE', 7, 2, 1, 0),
('Anish', 'B16CS066', 'CSE', 7, 2, 1, 0),
('Spandana', 'B16CS067', 'CSE', 7, 2, 1, 0),
('Laxmi', 'B16CS068', 'CSE', 7, 2, 1, 0),
('Rasagnya', 'B16CS069', 'CSE', 7, 2, 1, 0),
('Preethi', 'B16CS070', 'CSE', 7, 2, 2, 0),
('Akshith', 'B16CS071', 'CSE', 7, 2, 2, 0),
('SaiKumar', 'B16CS072', 'CSE', 7, 2, 2, 0),
('Hanani', 'B16CS073', 'CSE', 7, 2, 2, 0),
('Keerthy', 'B16CS074', 'CSE', 7, 2, 2, 0),
('Yaseen', 'B16CS075', 'CSE', 7, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ece`
--

CREATE TABLE IF NOT EXISTS `ece` (
  `Name` varchar(30) NOT NULL,
  `Rollno` varchar(15) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `Semester` int(20) NOT NULL,
  `Section` int(3) NOT NULL,
  `room` int(5) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `room`, `status`) VALUES
('manish', 'B16EC01', 'ECE', 7, 2, 1, 0),
('Ayush', 'B16EC02', 'ECE', 7, 2, 1, 0),
('Anumanula', 'B16EC03', 'ECE', 7, 2, 1, 0),
('Rajesh', 'B16EC04', 'ECE', 7, 2, 1, 0),
('Mahesh', 'B16EC05', 'ECE', 7, 2, 1, 0),
('Anil', 'B16EC06', 'ECE', 7, 2, 1, 0),
('George', 'B16EC07', 'ECE', 7, 2, 1, 0),
('Praveen', 'B16EC08', 'ECE', 7, 2, 1, 0),
('Uthkarsh', 'B16EC09', 'ECE', 7, 2, 1, 0),
('Kiran', 'B16EC10', 'ECE', 7, 2, 2, 0),
('Shiva', 'B16EC11', 'ECE', 7, 2, 2, 0),
('Kiran', 'B16EC12', 'ECE', 7, 2, 2, 0),
('Vignu', 'B16EC13', 'ECE', 7, 2, 2, 0),
('Rahul', 'B16EC14', 'ECE', 7, 2, 2, 0),
('Vijay', 'B16EC15', 'ECE', 7, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `friday`
--

CREATE TABLE IF NOT EXISTS `friday` (
  `Id` int(11) NOT NULL,
  `1_period` varchar(5) NOT NULL,
  `2_period` varchar(5) NOT NULL,
  `3_period` varchar(5) NOT NULL,
  `4_period` varchar(5) NOT NULL,
  `5_period` varchar(5) NOT NULL,
  `6_period` varchar(5) NOT NULL,
  `7_period` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friday`
--

INSERT INTO `friday` (`Id`, `1_period`, `2_period`, `3_period`, `4_period`, `5_period`, `6_period`, `7_period`, `Name`) VALUES
(1, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'FREE', 'K.Vinay Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `invigilators`
--

CREATE TABLE IF NOT EXISTS `invigilators` (
  `Name` varchar(25) NOT NULL,
  `Id` int(16) NOT NULL,
  `Available` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `allot` int(11) NOT NULL,
  `Room` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invigilators`
--

INSERT INTO `invigilators` (`Name`, `Id`, `Available`, `count`, `allot`, `Room`, `Email`) VALUES
('K.Vinay Kumar', 1, 1, 11, 1, 3, 'vijaykumarpinna@gmail.com'),
('T.krishna', 2, 1, 20, 0, 0, ''),
('Rekha', 3, 1, 13, 0, 0, ''),
('Jhonson', 4, 1, 19, 0, 0, ''),
('Santosh', 5, 1, 10, 1, 2, ''),
('Praveen', 6, 1, 4, 0, 0, ''),
('sai krishna', 11, 1, 6, 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE IF NOT EXISTS `it` (
  `Name` varchar(100) DEFAULT NULL,
  `Rollno` varchar(100) DEFAULT NULL,
  `Branch` varchar(100) DEFAULT NULL,
  `Semester` double DEFAULT NULL,
  `Section` double DEFAULT NULL,
  `room` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `room`, `status`) VALUES
('Rohan', 'B16IT01', 'IT', 7, 2, 1, 0),
('Ayush', 'B16IT02', 'IT', 7, 2, 1, 0),
('Anumanula', 'B16IT03', 'IT', 7, 2, 1, 0),
('Rajesh', 'B16IT04', 'IT', 7, 2, 1, 0),
('Mahesh', 'B16IT05', 'IT', 7, 2, 1, 0),
('Anil', 'B16IT06', 'IT', 7, 2, 1, 0),
('George', 'B16IT07', 'IT', 7, 2, 1, 0),
('Praveen', 'B16IT08', 'IT', 7, 2, 1, 0),
('Uthkarsh', 'B16IT09', 'IT', 7, 2, 1, 0),
('Kiran', 'B16IT10', 'IT', 7, 2, 2, 0),
('Shiva', 'B16IT11', 'IT', 7, 2, 2, 0),
('Kiran', 'B16IT12', 'IT', 7, 2, 2, 0),
('Vignu', 'B16IT13', 'IT', 7, 2, 2, 0),
('Rahul', 'B16IT14', 'IT', 7, 2, 2, 0),
('Vijay', 'B16IT15', 'IT', 7, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mech`
--

CREATE TABLE IF NOT EXISTS `mech` (
  `Name` varchar(30) NOT NULL,
  `Rollno` varchar(15) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `Semester` int(10) NOT NULL,
  `Section` int(10) NOT NULL,
  `room` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mech`
--

INSERT INTO `mech` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `room`, `status`) VALUES
('manish', 'B16ME01', 'MECH', 7, 2, 1, 0),
('Ayush', 'B16ME02', 'MECH', 7, 2, 1, 0),
('Anumanula', 'B16ME03', 'MECH', 7, 2, 1, 0),
('Rajesh', 'B16ME04', 'MECH', 7, 2, 1, 0),
('Mahesh', 'B16ME05', 'MECH', 7, 2, 1, 0),
('Anil', 'B16ME06', 'MECH', 7, 2, 1, 0),
('George', 'B16ME07', 'MECH', 7, 2, 1, 0),
('Praveen', 'B16ME08', 'MECH', 7, 2, 1, 0),
('Uthkarsh', 'B16ME09', 'MECH', 7, 2, 1, 0),
('Kiran', 'B16ME10', 'MECH', 7, 2, 2, 0),
('Shiva', 'B16ME11', 'MECH', 7, 2, 2, 0),
('Kiran', 'B16ME12', 'MECH', 7, 2, 2, 0),
('Vignu', 'B16ME13', 'MECH', 7, 2, 2, 0),
('Rahul', 'B16ME14', 'MECH', 7, 2, 2, 0),
('Vijay', 'B16ME15', 'MECH', 7, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `monday`
--

CREATE TABLE IF NOT EXISTS `monday` (
  `Id` int(11) NOT NULL,
  `1_period` varchar(10) NOT NULL,
  `2_period` varchar(10) NOT NULL,
  `3_period` varchar(10) NOT NULL,
  `4_period` varchar(10) NOT NULL,
  `5_period` varchar(10) NOT NULL,
  `6_period` varchar(10) NOT NULL,
  `7_period` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monday`
--

INSERT INTO `monday` (`Id`, `1_period`, `2_period`, `3_period`, `4_period`, `5_period`, `6_period`, `7_period`, `Name`) VALUES
(1, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'K.Vinay Kumar'),
(2, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'T.krishna'),
(3, 'FREE', 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Rekha'),
(4, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Jhonson'),
(5, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Santosh'),
(7, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Praveen'),
(11, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'sai krishna');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `Room_no` int(4) NOT NULL,
  `Capacity` int(3) NOT NULL,
  `Benches` int(2) NOT NULL,
  `Cols` int(1) NOT NULL DEFAULT '3',
  `Available` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  UNIQUE KEY `Room_no` (`Room_no`),
  UNIQUE KEY `Room_no_2` (`Room_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`Room_no`, `Capacity`, `Benches`, `Cols`, `Available`, `status`) VALUES
(1, 18, 18, 3, 1, 0),
(2, 18, 18, 3, 18, 0),
(3, 18, 18, 3, 18, 0),
(4, 18, 18, 3, 18, 0),
(5, 36, 36, 3, 36, 0),
(6, 36, 36, 3, 36, 0),
(7, 36, 36, 3, 36, 0),
(8, 36, 36, 3, 36, 0),
(9, 72, 72, 3, 72, 0),
(10, 18, 18, 3, 18, 0),
(11, 18, 18, 3, 18, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `password`) VALUES
('student', '12345'),
('B16CS063', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`username`, `password`, `Id`) VALUES
('teacher', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `thursday`
--

CREATE TABLE IF NOT EXISTS `thursday` (
  `Id` int(11) NOT NULL,
  `1_period` varchar(5) NOT NULL,
  `2_period` varchar(5) NOT NULL,
  `3_period` varchar(5) NOT NULL,
  `4_period` varchar(5) NOT NULL,
  `5_period` varchar(5) NOT NULL,
  `6_period` varchar(5) NOT NULL,
  `7_period` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thursday`
--

INSERT INTO `thursday` (`Id`, `1_period`, `2_period`, `3_period`, `4_period`, `5_period`, `6_period`, `7_period`, `Name`) VALUES
(1, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'K.Vinay Kumar'),
(2, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'T.krishna'),
(3, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Rekha'),
(4, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Jhonson'),
(5, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Santosh'),
(7, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Praveen'),
(11, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'sai krishna');

-- --------------------------------------------------------

--
-- Table structure for table `tuesday`
--

CREATE TABLE IF NOT EXISTS `tuesday` (
  `Id` int(11) NOT NULL,
  `1_period` varchar(5) NOT NULL,
  `2_period` varchar(5) NOT NULL,
  `3_period` varchar(5) NOT NULL,
  `4_period` varchar(5) NOT NULL,
  `5_period` varchar(5) NOT NULL,
  `6_period` varchar(5) NOT NULL,
  `7_period` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuesday`
--

INSERT INTO `tuesday` (`Id`, `1_period`, `2_period`, `3_period`, `4_period`, `5_period`, `6_period`, `7_period`, `Name`) VALUES
(1, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'K.Vinay Kumar'),
(2, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'T.krishna'),
(3, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Rekha'),
(4, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Jhonson'),
(5, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Santosh'),
(7, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Praveen'),
(11, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'sai krishna');

-- --------------------------------------------------------

--
-- Table structure for table `wednesday`
--

CREATE TABLE IF NOT EXISTS `wednesday` (
  `Id` int(11) NOT NULL,
  `1_period` varchar(5) NOT NULL,
  `2_period` varchar(5) NOT NULL,
  `3_period` varchar(5) NOT NULL,
  `4_period` varchar(5) NOT NULL,
  `5_period` varchar(5) NOT NULL,
  `6_period` varchar(5) NOT NULL,
  `7_period` varchar(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wednesday`
--

INSERT INTO `wednesday` (`Id`, `1_period`, `2_period`, `3_period`, `4_period`, `5_period`, `6_period`, `7_period`, `Name`) VALUES
(1, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'K.Vinay Kumar'),
(2, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'T.krishna'),
(3, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Rekha'),
(4, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Jhonson'),
(5, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Santosh'),
(7, 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'Praveen'),
(11, 'CLASS', 'FREE', 'FREE', 'FREE', 'FREE', 'FREE', 'CLASS', 'sai krishna');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
