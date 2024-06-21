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
-- Database: `thirdyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `civil`
--

CREATE TABLE IF NOT EXISTS `civil` (
  `Name` varchar(30) NOT NULL,
  `Rollno` varchar(15) NOT NULL,
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
('Raghava', 'B17CE001', 'civil', 7, 2, '', 5, 0),
('Manohar', 'B17CE002', 'civil', 7, 2, '', 5, 0),
('Kittu', 'B17CE003', 'civil', 7, 2, '', 5, 0),
('Sumanth', 'B17CE004', 'civil', 7, 2, '', 5, 0),
('Sushmitha', 'B17CE005', 'civil', 7, 2, '', 5, 0),
('Anish', 'B17CE006', 'civil', 7, 2, '', 5, 0),
('Spandana', 'B17CE007', 'civil', 7, 2, '', 5, 0),
('Laxmi', 'B17CE008', 'civil', 7, 2, '', 5, 0),
('Rasagnya', 'B17CE009', 'civil', 7, 2, '', 5, 0),
('Preethi', 'B17CE010', 'civil', 7, 2, '', 5, 0),
('Akshith', 'B17CE011', 'civil', 7, 2, '', 5, 0),
('SaiKumar', 'B17CE012', 'civil', 7, 2, '', 5, 0),
('Hanani', 'B17CE013', 'civil', 7, 2, '', 5, 0),
('Keerthy', 'B17CE014', 'civil', 7, 2, '', 6, 0),
('Yaseen', 'B17CE015', 'civil', 7, 2, '', 6, 0);

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
('Raghava', 'B17CS061', 'CSE', 5, 2, '', 5, 0),
('Manohar', 'B17CS062', 'CSE', 5, 2, '', 5, 0),
('Kittu', 'B17CS063', 'CSE', 5, 2, '', 5, 0),
('Sumanth', 'B17CS064', 'CSE', 5, 2, '', 5, 0),
('Sushmitha', 'B17CS065', 'CSE', 5, 2, '', 5, 0),
('Anish', 'B17CS066', 'CSE', 5, 2, '', 5, 0),
('Spandana', 'B17CS067', 'CSE', 5, 2, '', 5, 0),
('Laxmi', 'B17CS068', 'CSE', 5, 2, '', 5, 0),
('Rasagnya', 'B17CS069', 'CSE', 5, 2, '', 5, 0),
('Preethi', 'B17CS070', 'CSE', 5, 2, '', 5, 0),
('Akshith', 'B17CS071', 'CSE', 5, 2, '', 5, 0),
('SaiKumar', 'B17CS072', 'CSE', 5, 2, '', 5, 0),
('Hanani', 'B17CS073', 'CSE', 5, 2, '', 5, 0),
('Keerthy', 'B17CS074', 'CSE', 5, 2, '', 6, 0),
('Yaseen', 'B17CS075', 'CSE', 5, 2, '', 6, 0);

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
('manish', 'B17EC001', 'ECE', 5, 2, '', 5, 0),
('Ayush', 'B17EC002', 'ECE', 5, 2, '', 5, 0),
('Anumanula', 'B17EC003', 'ECE', 5, 2, '', 5, 0),
('Rajesh', 'B17EC004', 'ECE', 5, 2, '', 5, 0),
('Mahesh', 'B17EC005', 'ECE', 5, 2, '', 5, 0),
('Anil', 'B17EC006', 'ECE', 5, 2, '', 5, 0),
('George', 'B17EC007', 'ECE', 5, 2, '', 5, 0),
('Praveen', 'B17EC008', 'ECE', 5, 2, '', 5, 0),
('Uthkarsh', 'B17EC009', 'ECE', 5, 2, '', 5, 0),
('Kiran', 'B17EC010', 'ECE', 5, 2, '', 5, 0),
('Shiva', 'B17EC011', 'ECE', 5, 2, '', 5, 0),
('Kiran', 'B17EC012', 'ECE', 5, 2, '', 5, 0),
('Vignu', 'B17EC013', 'ECE', 5, 2, '', 5, 0),
('Rahul', 'B17EC014', 'ECE', 5, 2, '', 6, 0),
('Vijay', 'B17EC015', 'ECE', 5, 2, '', 6, 0);

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
('Rohan', 'B17IT001', 'IT', 5, 2, '', 5, 0),
('Ayush', 'B17IT002', 'IT', 5, 2, '', 5, 0),
('Anumanula', 'B17IT003', 'IT', 5, 2, '', 5, 0),
('Rajesh', 'B17IT004', 'IT', 5, 2, '', 5, 0),
('Mahesh', 'B17IT005', 'IT', 5, 2, '', 5, 0),
('Anil', 'B17IT006', 'IT', 5, 2, '', 5, 0),
('George', 'B17IT007', 'IT', 5, 2, '', 5, 0),
('Praveen', 'B17IT008', 'IT', 5, 2, '', 5, 0),
('Uthkarsh', 'B17IT009', 'IT', 5, 2, '', 5, 0),
('Kiran', 'B17IT010', 'IT', 5, 2, '', 5, 0),
('Shiva', 'B17IT011', 'IT', 5, 2, '', 5, 0),
('Kiran', 'B17IT012', 'IT', 5, 2, '', 5, 0),
('Vignu', 'B17IT013', 'IT', 5, 2, '', 5, 0),
('Rahul', 'B17IT014', 'IT', 5, 2, '', 6, 0),
('Vijay', 'B17IT015', 'IT', 5, 2, '', 6, 0);

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
('manish', 'B17ME001', 'MECH', 5, 2, '', 5, 0),
('Ayush', 'B17ME002', 'MECH', 5, 2, '', 5, 0),
('Anumanula', 'B17ME003', 'MECH', 5, 2, '', 5, 0),
('Rajesh', 'B17ME004', 'MECH', 5, 2, '', 5, 0),
('Mahesh', 'B17ME005', 'MECH', 5, 2, '', 5, 0),
('Anil', 'B17ME006', 'MECH', 5, 2, '', 5, 0),
('George', 'B17ME007', 'MECH', 5, 2, '', 5, 0),
('Praveen', 'B17ME008', 'MECH', 5, 2, '', 5, 0),
('Uthkarsh', 'B17ME009', 'MECH', 5, 2, '', 5, 0),
('Kiran', 'B17ME010', 'MECH', 5, 2, '', 5, 0),
('Shiva', 'B17ME011', 'MECH', 5, 2, '', 5, 0),
('Kiran', 'B17ME012', 'MECH', 5, 2, '', 5, 0),
('Vignu', 'B17ME013', 'MECH', 5, 2, '', 6, 0),
('Rahul', 'B17ME014', 'MECH', 5, 2, '', 6, 0),
('Vijay', 'B17ME015', 'MECH', 5, 2, '', 6, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
