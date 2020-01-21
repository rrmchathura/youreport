-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2020 at 07:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accidentsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accidentcase`
--

CREATE TABLE `accidentcase` (
  `caseId` int(11) NOT NULL,
  `timeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(20) NOT NULL,
  `vehicleType` varchar(20) NOT NULL,
  `vehicleNumber` varchar(8) NOT NULL,
  `user` int(11) NOT NULL,
  `lang` decimal(12,10) NOT NULL,
  `lat` decimal(12,10) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'NOT_SLOVED',
  `flag` varchar(12) NOT NULL DEFAULT 'WAITIING',
  `approvel` varchar(15) NOT NULL DEFAULT 'WAITIING'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accidentcase`
--

INSERT INTO `accidentcase` (`caseId`, `timeStamp`, `type`, `vehicleType`, `vehicleNumber`, `user`, `lang`, `lat`, `status`, `flag`, `approvel`) VALUES
(2, '0000-00-00 00:00:00', 'GALLE', 'BIKE', 'ABD-2555', 1, '7.1869190000', '79.8681180000', 'SLOVED', 'NOT_SERIOUS', 'APPROVED'),
(3, '0000-00-00 00:00:00', 'KANDY', 'VAN', 'ABD-2555', 1, '7.2920760000', '80.6392570000', 'SLOVED', 'SERIOUS', 'NOT_APPROVED'),
(13, '2019-10-08 18:41:57', 'COLOMBO', 'CAR', 'CB-8894', 1, '6.8528046200', '79.9269104000', 'NOT_SLOVED', 'NOT_SERIOUS', 'APPROVED'),
(14, '2019-09-08 18:30:00', 'COLOMBO', 'CAR', 'VB-8964', 1, '6.8446236700', '80.0381469700', 'NOT_SLOVED', 'SERIOUS', 'WAITIING'),
(15, '2019-11-08 18:30:00', 'COLOMBO', 'CAR', 'AS-8964', 1, '6.9264268500', '80.1425170900', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(16, '2019-11-08 18:30:00', 'GALLE', 'CAR', 'AQ-8964', 1, '6.0094592400', '80.3155517600', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(17, '2019-12-08 18:30:00', 'HAMBANTHOTA', 'CAR', 'ABC8964', 1, '6.1733236500', '81.1010742200', 'SLOVED', 'SERIOUS', 'APPROVED'),
(18, '2020-01-08 18:41:57', 'COLOMBO', 'BIKE', 'AB-8964', 1, '6.9209737400', '79.9090576200', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(19, '2020-01-08 18:41:57', 'KANDY', 'BUS', 'AB-8864', 1, '7.2643943300', '80.6671142600', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(20, '2020-01-08 18:41:57', 'COLOMBO', 'VAN', 'ABP8964', 1, '7.2099003100', '80.4034423800', 'NOT_SLOVED', 'SERIOUS', 'WAITIING'),
(21, '2020-01-08 18:41:57', 'ANURADHAPURA', 'BUS', 'AB-8964', 1, '8.7004991300', '80.3430175800', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(22, '2020-01-08 18:41:57', 'AMPARA', 'VAN', 'AB-8964', 1, '7.1335976900', '81.0791015600', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(23, '2020-01-08 18:41:57', 'GAMPAHA', 'CAR', 'AB-8964', 1, '7.1117946000', '80.0463867200', 'NOT_SLOVED', 'NOT_SERIOUS', 'NOT_APPROVED'),
(24, '2020-01-08 18:41:57', 'RATHNAPURA', 'BUS', 'AB-8964', 1, '6.4463177500', '80.3100585900', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(25, '2020-01-08 18:41:57', 'COLOMBO', 'BIKE', 'ACD8964', 1, '6.9209737400', '79.9090576200', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(26, '2020-01-08 18:41:57', 'KALUTHARA', 'BIKE', 'AB-8964', 1, '6.4244835500', '80.0244140600', 'SLOVED', 'SERIOUS', 'APPROVED'),
(27, '2020-01-08 18:41:57', 'NUWARA ELIYA', 'BIKE', 'AB-8964', 1, '6.7846257600', '80.6835937500', 'NOT_SLOVED', 'SERIOUS', 'WAITIING'),
(28, '2020-01-08 18:41:57', 'BADULLA', 'CAR', 'AB-8964', 1, '6.9209737400', '81.2109375000', 'NOT_SLOVED', 'SERIOUS', 'WAITIING'),
(29, '2020-01-08 18:41:57', 'COLOMBO', 'BUS', 'BBH8964', 1, '6.1405547800', '80.7165527300', 'NOT_SLOVED', 'SERIOUS', 'WAITIING'),
(30, '2020-01-09 06:12:12', 'COLOMBO', 'CAR', 'ABD-2555', 1, '6.8207405000', '80.0402417000', 'SLOVED', 'SERIOUS', 'NOT_APPROVED'),
(31, '2020-01-16 21:50:15', 'MATHALE', 'VAN', 'asd123', 46, '6.9016086000', '80.0087746000', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(32, '2020-01-16 21:52:09', 'MATHALE', 'VAN', 'asd123', 46, '6.8254958000', '80.0293257000', 'NOT_SLOVED', 'WAITIING', 'WAITIING'),
(33, '2020-01-20 17:57:51', '', '', '', 4, '0.0000000000', '0.0000000000', 'NOT_SLOVED', 'WAITIING', 'WAITIING');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` enum('DRIVER','POLICE','RDA','INSURENCE') NOT NULL,
  `nic` varchar(12) NOT NULL,
  `insuranceID` int(11) NOT NULL,
  `insuranceCompany` varchar(50) NOT NULL,
  `vehicleNo` varchar(8) NOT NULL,
  `contactNo` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `name`, `role`, `nic`, `insuranceID`, `insuranceCompany`, `vehicleNo`, `contactNo`, `email`, `password`, `status`) VALUES
(1, 'Ajith', 'DRIVER', '943247232v', 123456, 'AIA', 'BCA6728', 773561243, 'ajith@gmail.com', '123', ''),
(2, 'Bandara', 'DRIVER', '932673822v', 234567, 'Janashakthi', 'BDD3672', 2147483647, 'bandara@gmail.com', '456', ''),
(3, 'Chapa', 'DRIVER', '921782792v', 345678, 'SLIC', 'ND5638', 756439834, 'chapa@gmail.com', '789', ''),
(4, 'Diyath', 'DRIVER', '954738292v', 456789, 'Ceylinco', 'AAB2936', 712356946, 'diyath@gmail.com', '321', ''),
(5, 'Surath', 'DRIVER', '96357282v', 567890, 'Allianze', 'BN5678', 78235493, 'surath@gmail.com', '654', ''),
(6, 'Kapila', 'DRIVER', '975323622v', 9876543, 'Fairfist', 'ND9379', 762435987, 'kapila@gmail.com', '987', ''),
(58, 'Chathura', 'POLICE', '987564232v', 0, '', '', 718831661, 'chathura@gmail.com', 'pol', ''),
(59, 'Thilan', '', '961521300v', 0, '', '', 775166463, 'thilan@gmail.com', 'ins', ''),
(60, 'Akila', 'DRIVER', '993473700v', 56754535, 'AIA', 'ND4646', 785263697, 'akila@gmail.com', 'dri', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accidentcase`
--
ALTER TABLE `accidentcase`
  ADD PRIMARY KEY (`caseId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nic` (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accidentcase`
--
ALTER TABLE `accidentcase`
  MODIFY `caseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
