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
-- Database: `fourthyear`
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
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `civil`
--

INSERT INTO `civil` (`Name`, `Rollno`, `Branch`, `Semester`, `Section`, `Email`, `room`, `status`) VALUES
('Raghava', 'B16CE001', 'civil', 7, 2, '', 6, 0),
('Manohar', 'B16CE002', 'civil', 7, 2, '', 6, 0),
('Kittu', 'B16CE003', 'civil', 7, 2, '', 6, 0),
('Sumanth', 'B16CE004', 'civil', 7, 2, '', 6, 0),
('Sushmitha', 'B16CE005', 'civil', 7, 2, '', 6, 0),
('Anish', 'B16CE006', 'civil', 7, 2, '', 6, 0),
('Spandana', 'B16CE007', 'civil', 7, 2, '', 6, 0),
('Laxmi', 'B16CE008', 'civil', 7, 2, '', 6, 0),
('Rasagnya', 'B16CE009', 'civil', 7, 2, '', 6, 0),
('Preethi', 'B16CE010', 'civil', 7, 2, '', 6, 0),
('Akshith', 'B16CE011', 'civil', 7, 2, '', 6, 0),
('SaiKumar', 'B16CE012', 'civil', 7, 2, '', 6, 0),
('Hanani', 'B16CE013', 'civil', 7, 2, '', 7, 0),
('Keerthy', 'B16CE014', 'civil', 7, 2, '', 7, 0),
('Yaseen', 'B16CE015', 'civil', 7, 2, '', 7, 0);

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
('Raghava', 'B16CS061', 'CSE', 7, 2, 'raghavarao18.arrebelly@gmail.com', 6, 0),
('Manohar', 'B16CS062', 'CSE', 7, 2, '', 6, 0),
('Kittu', 'B16CS063', 'CSE', 7, 2, '', 6, 0),
('Sumanth', 'B16CS064', 'CSE', 7, 2, '', 6, 0),
('Sushmitha', 'B16CS065', 'CSE', 7, 2, '', 6, 0),
('Anish', 'B16CS066', 'CSE', 7, 2, '', 6, 0),
('Spandana', 'B16CS067', 'CSE', 7, 2, '', 6, 0),
('Laxmi', 'B16CS068', 'CSE', 7, 2, '', 6, 0),
('Rasagnya', 'B16CS069', 'CSE', 7, 2, '', 6, 0),
('Preethi', 'B16CS070', 'CSE', 7, 2, '', 6, 0),
('Akshith', 'B16CS071', 'CSE', 7, 2, '', 6, 0),
('SaiKumar', 'B16CS072', 'CSE', 7, 2, '', 6, 0),
('Hanani', 'B16CS073', 'CSE', 7, 2, '', 6, 0),
('Keerthy', 'B16CS074', 'CSE', 7, 2, '', 7, 0),
('Yaseen', 'B16CS075', 'CSE', 7, 2, '', 7, 0);

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
('manish', 'B16EC001', 'ECE', 7, 2, '', 6, 0),
('Ayush', 'B16EC002', 'ECE', 7, 2, '', 6, 0),
('Anumanula', 'B16EC003', 'ECE', 7, 2, '', 6, 0),
('Rajesh', 'B16EC004', 'ECE', 7, 2, '', 6, 0),
('Mahesh', 'B16EC005', 'ECE', 7, 2, '', 6, 0),
('Anil', 'B16EC006', 'ECE', 7, 2, '', 6, 0),
('George', 'B16EC007', 'ECE', 7, 2, '', 6, 0),
('Praveen', 'B16EC008', 'ECE', 7, 2, '', 6, 0),
('Uthkarsh', 'B16EC009', 'ECE', 7, 2, '', 6, 0),
('Kiran', 'B16EC010', 'ECE', 7, 2, '', 6, 0),
('Shiva', 'B16EC011', 'ECE', 7, 2, '', 6, 0),
('Kiran', 'B16EC012', 'ECE', 7, 2, '', 6, 0),
('Vignu', 'B16EC013', 'ECE', 7, 2, '', 7, 0),
('Rahul', 'B16EC014', 'ECE', 7, 2, '', 7, 0),
('Vijay', 'B16EC015', 'ECE', 7, 2, '', 7, 0);

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
('Rohan', 'B16IT001', 'IT', 7, 2, '', 6, 0),
('Ayush', 'B16IT002', 'IT', 7, 2, '', 6, 0),
('Anumanula', 'B16IT003', 'IT', 7, 2, '', 6, 0),
('Rajesh', 'B16IT004', 'IT', 7, 2, '', 6, 0),
('Mahesh', 'B16IT005', 'IT', 7, 2, '', 6, 0),
('Anil', 'B16IT006', 'IT', 7, 2, '', 6, 0),
('George', 'B16IT007', 'IT', 7, 2, '', 6, 0),
('Praveen', 'B16IT008', 'IT', 7, 2, '', 6, 0),
('Uthkarsh', 'B16IT009', 'IT', 7, 2, '', 6, 0),
('Kiran', 'B16IT010', 'IT', 7, 2, '', 6, 0),
('Shiva', 'B16IT011', 'IT', 7, 2, '', 6, 0),
('Kiran', 'B16IT012', 'IT', 7, 2, '', 6, 0),
('Vignu', 'B16IT013', 'IT', 7, 2, '', 7, 0),
('Rahul', 'B16IT014', 'IT', 7, 2, '', 7, 0),
('Vijay', 'B16IT015', 'IT', 7, 2, '', 7, 0);

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
('manish', 'B16ME001', 'MECH', 7, 2, '', 6, 0),
('Ayush', 'B16ME002', 'MECH', 7, 2, '', 6, 0),
('Anumanula', 'B16ME003', 'MECH', 7, 2, '', 6, 0),
('Rajesh', 'B16ME004', 'MECH', 7, 2, '', 6, 0),
('Mahesh', 'B16ME005', 'MECH', 7, 2, '', 6, 0),
('Anil', 'B16ME006', 'MECH', 7, 2, '', 6, 0),
('George', 'B16ME007', 'MECH', 7, 2, '', 6, 0),
('Praveen', 'B16ME008', 'MECH', 7, 2, '', 6, 0),
('Uthkarsh', 'B16ME009', 'MECH', 7, 2, '', 6, 0),
('Kiran', 'B16ME010', 'MECH', 7, 2, '', 6, 0),
('Shiva', 'B16ME011', 'MECH', 7, 2, '', 6, 0),
('Kiran', 'B16ME012', 'MECH', 7, 2, '', 6, 0),
('Vignu', 'B16ME013', 'MECH', 7, 2, '', 7, 0),
('Rahul', 'B16ME014', 'MECH', 7, 2, '', 7, 0),
('Vijay', 'B16ME015', 'MECH', 7, 2, '', 7, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
