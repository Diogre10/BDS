-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 02:18 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accdonortbl`
--

CREATE TABLE `accdonortbl` (
  `dUser` varchar(100) NOT NULL,
  `dPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accdonortbl`
--

INSERT INTO `accdonortbl` (`dUser`, `dPass`) VALUES
('donor', 'donor1234'),
('donor2', 'donor1234'),
('donor3', 'donor1234'),
('donor4', 'donor1234'),
('fsadf', ''),
('test', 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `accpatienttbl`
--

CREATE TABLE `accpatienttbl` (
  `pUser` varchar(100) NOT NULL,
  `pPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accpatienttbl`
--

INSERT INTO `accpatienttbl` (`pUser`, `pPass`) VALUES
('patient', 'patient1234'),
('donor', 'asdasd'),
('patient2', '1234'),
('patient2', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `aUser` varchar(100) NOT NULL,
  `aPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`aUser`, `aPass`) VALUES
('admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `donatedbloodtbl`
--

CREATE TABLE `donatedbloodtbl` (
  `bloodkey` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `mobileNumber` bigint(20) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donatedbloodtbl`
--

INSERT INTO `donatedbloodtbl` (`bloodkey`, `fullName`, `mobileNumber`, `emailAddress`, `age`, `gender`, `bloodGroup`, `address`, `cdate`) VALUES
(1, 'Diomedes Alegre Jr', 9033085756, 'mikoalegre.da@gmail.com', 21, 'Male', 'A+', '6308 EGI HOMES 3 BLDG 6/F UNIT 614 P.MEDINA ST.', '2021-04-22 20:25:08');

-- --------------------------------------------------------

--
-- Table structure for table `patientbloodtbl`
--

CREATE TABLE `patientbloodtbl` (
  `pBloodKey` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `mobileNumber` bigint(20) NOT NULL,
  `emailAddress` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `bloodGroup` varchar(5) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientbloodtbl`
--

INSERT INTO `patientbloodtbl` (`pBloodKey`, `fullName`, `mobileNumber`, `emailAddress`, `age`, `gender`, `bloodGroup`, `address`, `cdate`) VALUES
(1, 'Ellie', 245345, 'ellie@gmail.com', 3, 'Female', 'B+', '6308 EGI HOMES 3 BLDG 6/F UNIT 614 P.MEDINA ST.', '2021-04-22 20:45:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatedbloodtbl`
--
ALTER TABLE `donatedbloodtbl`
  ADD PRIMARY KEY (`bloodkey`);

--
-- Indexes for table `patientbloodtbl`
--
ALTER TABLE `patientbloodtbl`
  ADD PRIMARY KEY (`pBloodKey`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatedbloodtbl`
--
ALTER TABLE `donatedbloodtbl`
  MODIFY `bloodkey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patientbloodtbl`
--
ALTER TABLE `patientbloodtbl`
  MODIFY `pBloodKey` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
