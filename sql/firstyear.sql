-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 06:28 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `firstyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE IF NOT EXISTS `civil` (
  `Name` varchar(11) NOT NULL,
  `Rollno` varchar(11) NOT NULL,
  `Branch` varchar(11) NOT NULL,
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
('Raghava', 'B19CE001', 'civil', 7, 2, '', 1, 0),
('Manohar', 'B19CE002', 'civil', 7, 2, '', 1, 0),
('Kittu', 'B19CE003', 'civil', 7, 2, '', 1, 0),
('Sumanth', 'B19CE004', 'civil', 7, 2, '', 1, 0),
('Sushmitha', 'B19CE005', 'civil', 7, 2, '', 1, 0),
('Anish', 'B19CE006', 'civil', 7, 2, '', 1, 0),
('Spandana', 'B19CE007', 'civil', 7, 2, '', 1, 0),
('Laxmi', 'B19CE008', 'civil', 7, 2, '', 2, 0),
('Rasagnya', 'B19CE009', 'civil', 7, 2, '', 2, 0),
('Preethi', 'B19CE010', 'civil', 7, 2, '', 2, 0),
('Akshith', 'B19CE011', 'civil', 7, 2, '', 2, 0),
('SaiKumar', 'B19CE012', 'civil', 7, 2, '', 2, 0),
('Hanani', 'B19CE013', 'civil', 7, 2, '', 2, 0),
('Keerthy', 'B19CE014', 'civil', 7, 2, '', 2, 0),
('Yaseen', 'B19CE015', 'civil', 7, 2, '', 3, 0);

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
('Raghava', 'B19CS061', 'CSE', 1, 2, '', 1, 1),
('Manohar', 'B19CS062', 'CSE', 1, 2, '', 1, 1),
('Kittu', 'B19CS063', 'CSE', 1, 2, 'krishnavamshipinna@gmail.com', 1, 1),
('Sumanth', 'B19CS064', 'CSE', 1, 2, '', 1, 1),
('Sushmitha', 'B19CS065', 'CSE', 1, 2, '', 1, 1),
('Anish', 'B19CS066', 'CSE', 1, 2, '', 1, 1),
('Spandana', 'B19CS067', 'CSE', 1, 2, '', 1, 1),
('Laxmi', 'B19CS068', 'CSE', 1, 2, '', 1, 1),
('Rasagnya', 'B19CS069', 'CSE', 1, 2, '', 1, 1),
('Preethi', 'B19CS070', 'CSE', 1, 2, '', 1, 1),
('Akshith', 'B19CS071', 'CSE', 1, 2, '', 1, 1),
('SaiKumar', 'B19CS072', 'CSE', 1, 2, '', 1, 1),
('Hanani', 'B19CS073', 'CSE', 1, 2, '', 1, 1),
('Keerthy', 'B19CS074', 'CSE', 1, 2, '', 1, 1),
('Yaseen', 'B19CS075', 'CSE', 1, 2, '', 1, 1),
('Souram', 'B19CS197L', 'CSE', 1, 2, '', 1, 1),
('Vineeth', 'B19CS196L', 'CSE', 1, 2, '', 1, 1),
('Farhan', 'B19CS194L', 'cse', 1, 1, '', 0, 0);

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
('manish', 'B19EC001', 'ECE', 1, 2, '', 1, 0),
('Ayush', 'B19EC002', 'ECE', 1, 2, '', 1, 0),
('Anumanula', 'B19EC003', 'ECE', 1, 2, '', 1, 0),
('Rajesh', 'B19EC004', 'ECE', 1, 2, '', 1, 0),
('Mahesh', 'B19EC005', 'ECE', 1, 2, '', 1, 0),
('Anil', 'B19EC006', 'ECE', 1, 2, '', 1, 0),
('George', 'B19EC007', 'ECE', 1, 2, '', 1, 0),
('Praveen', 'B19EC008', 'ECE', 1, 2, '', 2, 0),
('Uthkarsh', 'B19EC009', 'ECE', 1, 2, '', 2, 0),
('Kiran', 'B19EC010', 'ECE', 1, 2, '', 2, 0),
('Shiva', 'B19EC011', 'ECE', 1, 2, '', 2, 0),
('Kiran', 'B19EC012', 'ECE', 1, 2, '', 2, 0),
('Vignu', 'B19EC013', 'ECE', 1, 2, '', 2, 0),
('Rahul', 'B19EC014', 'ECE', 1, 2, '', 2, 0),
('Vijay', 'B19EC015', 'ECE', 1, 2, '', 3, 0);

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
('Rohan', 'B19IT001', 'IT', 1, 2, '', 1, 0),
('Ayush', 'B19IT002', 'IT', 1, 2, '', 2, 0),
('Anumanula', 'B19IT003', 'IT', 1, 2, '', 2, 0),
('Rajesh', 'B19IT004', 'IT', 1, 2, '', 2, 0),
('Mahesh', 'B19IT005', 'IT', 1, 2, '', 2, 0),
('Anil', 'B19IT006', 'IT', 1, 2, '', 2, 0),
('George', 'B19IT007', 'IT', 1, 2, '', 2, 0),
('Praveen', 'B19IT008', 'IT', 1, 2, '', 2, 0),
('Uthkarsh', 'B19IT009', 'IT', 1, 2, '', 2, 0),
('Kiran', 'B19IT010', 'IT', 1, 2, '', 2, 0),
('Shiva', 'B19IT011', 'IT', 1, 2, '', 2, 0),
('Kiran', 'B19IT012', 'IT', 1, 2, '', 2, 0),
('Vignu', 'B19IT013', 'IT', 1, 2, '', 2, 0),
('Rahul', 'B19IT014', 'IT', 1, 2, '', 2, 0),
('Vijay', 'B19IT015', 'IT', 1, 2, '', 2, 0);

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
('manish', 'B19ME001', 'MECH', 1, 2, '', 1, 0),
('Ayush', 'B19ME002', 'MECH', 1, 2, '', 1, 0),
('Anumanula', 'B19ME003', 'MECH', 1, 2, '', 1, 0),
('Rajesh', 'B19ME004', 'MECH', 1, 2, '', 1, 0),
('Mahesh', 'B19ME005', 'MECH', 1, 2, '', 1, 0),
('Anil', 'B19ME006', 'MECH', 1, 2, '', 1, 0),
('George', 'B19ME007', 'MECH', 1, 2, '', 1, 0),
('Praveen', 'B19ME008', 'MECH', 1, 2, '', 2, 0),
('Uthkarsh', 'B19ME009', 'MECH', 1, 2, '', 2, 0),
('Kiran', 'B19ME010', 'MECH', 1, 2, '', 2, 0),
('Shiva', 'B19ME011', 'MECH', 1, 2, '', 2, 0),
('Kiran', 'B19ME012', 'MECH', 1, 2, '', 2, 0),
('Vignu', 'B19ME013', 'MECH', 1, 2, '', 2, 0),
('Rahul', 'B19ME014', 'MECH', 1, 2, '', 2, 0),
('Vijay', 'B19ME015', 'MECH', 1, 2, '', 3, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
