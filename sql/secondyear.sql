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
-- Database: `secondyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE IF NOT EXISTS `civil` (
  `Name` varchar(30) NOT NULL,
  `Rollno` varchar(20) NOT NULL,
  `Branch` varchar(5) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Section` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `room` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  UNIQUE KEY `Rollno` (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil`
--

INSERT INTO `civil` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `Email`, `room`, `status`) VALUES
('Raghava', 'B18CE001', 'civil', 7, 2, '', 3, 0),
('Manohar', 'B18CE002', 'civil', 7, 2, '', 3, 0),
('Kittu', 'B18CE003', 'civil', 7, 2, '', 3, 0),
('Sumanth', 'B18CE004', 'civil', 7, 2, '', 3, 0),
('Sushmitha', 'B18CE005', 'civil', 7, 2, '', 3, 0),
('Anish', 'B18CE006', 'civil', 7, 2, '', 3, 0),
('Spandana', 'B18CE007', 'civil', 7, 2, '', 4, 0),
('Laxmi', 'B18CE008', 'civil', 7, 2, '', 4, 0),
('Rasagnya', 'B18CE009', 'civil', 7, 2, '', 4, 0),
('Preethi', 'B18CE010', 'civil', 7, 2, '', 4, 0),
('Akshith', 'B18CE011', 'civil', 7, 2, '', 4, 0),
('SaiKumar', 'B18CE012', 'civil', 7, 2, '', 4, 0),
('Hanani', 'B18CE013', 'civil', 7, 2, '', 4, 0),
('Keerthy', 'B18CE014', 'civil', 7, 2, '', 5, 0),
('Yaseen', 'B18CE015', 'civil', 7, 2, '', 5, 0);

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
  `Email` varchar(50) NOT NULL,
  `room` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  UNIQUE KEY `Rollno` (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cse`
--

INSERT INTO `cse` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `Email`, `room`, `status`) VALUES
('Raghava', 'B18CS061', 'CSE', 3, 2, '', 3, 0),
('Manohar', 'B18CS062', 'CSE', 3, 2, '', 3, 0),
('Kittu', 'B18CS063', 'CSE', 3, 2, '', 3, 0),
('Sumanth', 'B18CS064', 'CSE', 3, 2, '', 3, 0),
('Sushmitha', 'B18CS065', 'CSE', 3, 2, '', 3, 0),
('Anish', 'B18CS066', 'CSE', 3, 2, '', 3, 0),
('Spandana', 'B18CS067', 'CSE', 3, 2, '', 3, 0),
('Laxmi', 'B18CS068', 'CSE', 3, 2, '', 4, 0),
('Rasagnya', 'B18CS069', 'CSE', 3, 2, '', 4, 0),
('Preethi', 'B18CS070', 'CSE', 3, 2, '', 4, 0),
('Akshith', 'B18CS071', 'CSE', 3, 2, '', 4, 0),
('SaiKumar', 'B18CS072', 'CSE', 3, 2, '', 4, 0),
('Hanani', 'B18CS073', 'CSE', 3, 2, '', 4, 0),
('Keerthy', 'B18CS074', 'CSE', 3, 2, '', 4, 0),
('Yaseen', 'B18CS075', 'CSE', 3, 2, '', 4, 0);

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
  `Email` varchar(50) NOT NULL,
  `room` int(5) NOT NULL,
  `status` int(1) NOT NULL,
  UNIQUE KEY `Rollno` (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `Email`, `room`, `status`) VALUES
('manish', 'B18EC001', 'ECE', 3, 2, '', 3, 0),
('Ayush', 'B18EC002', 'ECE', 3, 2, '', 3, 0),
('Anumanula', 'B18EC003', 'ECE', 3, 2, '', 3, 0),
('Rajesh', 'B18EC004', 'ECE', 3, 2, '', 3, 0),
('Mahesh', 'B18EC005', 'ECE', 3, 2, '', 3, 0),
('Anil', 'B18EC006', 'ECE', 3, 2, '', 3, 0),
('George', 'B18EC007', 'ECE', 3, 2, '', 4, 0),
('Praveen', 'B18EC008', 'ECE', 3, 2, '', 4, 0),
('Uthkarsh', 'B18EC009', 'ECE', 3, 2, '', 4, 0),
('Kiran', 'B18EC010', 'ECE', 3, 2, '', 4, 0),
('Shiva', 'B18EC011', 'ECE', 3, 2, '', 4, 0),
('Kiran', 'B18EC012', 'ECE', 3, 2, '', 4, 0),
('Vignu', 'B18EC013', 'ECE', 3, 2, '', 4, 0),
('Rahul', 'B18EC014', 'ECE', 3, 2, '', 5, 0),
('Vijay', 'B18EC015', 'ECE', 3, 2, '', 5, 0);

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
  `Email` varchar(50) NOT NULL,
  `room` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  UNIQUE KEY `Rollno` (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `Email`, `room`, `status`) VALUES
('Rohan', 'B18IT001', 'IT', 3, 2, '', 3, 0),
('Ayush', 'B18IT002', 'IT', 3, 2, '', 3, 0),
('Anumanula', 'B18IT003', 'IT', 3, 2, '', 3, 0),
('Rajesh', 'B18IT004', 'IT', 3, 2, '', 3, 0),
('Mahesh', 'B18IT005', 'IT', 3, 2, '', 3, 0),
('Anil', 'B18IT006', 'IT', 3, 2, '', 3, 0),
('George', 'B18IT007', 'IT', 3, 2, '', 4, 0),
('Praveen', 'B18IT008', 'IT', 3, 2, '', 4, 0),
('Uthkarsh', 'B18IT009', 'IT', 3, 2, '', 4, 0),
('Kiran', 'B18IT010', 'IT', 3, 2, '', 4, 0),
('Shiva', 'B18IT011', 'IT', 3, 2, '', 4, 0),
('Kiran', 'B18IT012', 'IT', 3, 2, '', 4, 0),
('Vignu', 'B18IT013', 'IT', 3, 2, '', 4, 0),
('Rahul', 'B18IT014', 'IT', 3, 2, '', 5, 0),
('Vijay', 'B18IT015', 'IT', 3, 2, '', 5, 0);

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
  `Email` varchar(50) NOT NULL,
  `room` int(10) NOT NULL,
  `status` int(1) NOT NULL,
  UNIQUE KEY `Rollno` (`Rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mech`
--

INSERT INTO `mech` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `Email`, `room`, `status`) VALUES
('manish', 'B18ME001', 'MECH', 3, 2, '', 3, 0),
('Ayush', 'B18ME002', 'MECH', 3, 2, '', 3, 0),
('Anumanula', 'B18ME003', 'MECH', 3, 2, '', 3, 0),
('Rajesh', 'B18ME004', 'MECH', 3, 2, '', 3, 0),
('Mahesh', 'B18ME005', 'MECH', 3, 2, '', 3, 0),
('Anil', 'B18ME006', 'MECH', 3, 2, '', 3, 0),
('George', 'B18ME007', 'MECH', 3, 2, '', 4, 0),
('Praveen', 'B18ME008', 'MECH', 3, 2, '', 4, 0),
('Uthkarsh', 'B18ME009', 'MECH', 3, 2, '', 4, 0),
('Kiran', 'B18ME010', 'MECH', 3, 2, '', 4, 0),
('Shiva', 'B18ME011', 'MECH', 3, 2, '', 4, 0),
('Kiran', 'B18ME012', 'MECH', 3, 2, '', 4, 0),
('Vignu', 'B18ME013', 'MECH', 3, 2, '', 4, 0),
('Rahul', 'B18ME014', 'MECH', 3, 2, '', 5, 0),
('Vijay', 'B18ME015', 'MECH', 3, 2, '', 5, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
