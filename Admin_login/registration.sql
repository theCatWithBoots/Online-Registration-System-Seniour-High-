-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2019 at 04:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `beneficiary`
--

CREATE TABLE IF NOT EXISTS `beneficiary` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `trn_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `pob` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `beneficiary`
--

INSERT INTO `beneficiary` (`id`, `trn_date`, `name`, `address`, `pob`, `dob`, `citizenship`, `relationship`, `submittedby`) VALUES
(24, '2019-02-07 04:14:48', '', '', '', '0000-00-00', '', '', '123'),
(25, '2019-02-07 04:18:04', '', '', '', '0000-00-00', '1', '1', '123'),
(26, '2019-02-07 04:23:27', '', '', '', '0000-00-00', '', '', '123'),
(27, '2019-02-07 04:28:47', '', '', '', '0000-00-00', '', '', '123'),
(28, '2019-02-07 04:30:10', '', '', '', '0000-00-00', '', '', '123'),
(29, '2019-02-07 04:30:25', '', '', '', '0000-00-00', '', '', '123'),
(30, '2019-02-07 04:30:26', '', '', '', '0000-00-00', '', '', '123'),
(31, '2019-02-07 04:30:44', '', '', '', '0000-00-00', '', '', '123'),
(32, '2019-02-07 04:31:39', '', '', '', '0000-00-00', '', '', '123'),
(33, '2019-02-07 04:31:43', '', '', '', '0000-00-00', '', '', '123'),
(34, '2019-02-07 04:32:12', '', '', '', '0000-00-00', '', '', '123'),
(35, '2019-02-07 04:32:52', '', '', '', '0000-00-00', '', '', '123'),
(36, '2019-02-07 04:34:16', '', '', '', '0000-00-00', '', '', '123');

-- --------------------------------------------------------

--
-- Table structure for table `proposed_insured`
--

CREATE TABLE IF NOT EXISTS `proposed_insured` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `trn_date` datetime NOT NULL,
  `surname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Cstatus` varchar(50) NOT NULL,
  `ResidenceNo` varchar(50) NOT NULL,
  `PurokStreet` varchar(50) NOT NULL,
  `BarangaySubd` varchar(50) NOT NULL,
  `CityTown` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `TnHome` int(50) NOT NULL,
  `TnHomeZipcode` varchar(50) NOT NULL,
  `TnOffice` varchar(50) NOT NULL,
  `TnOfficeZipcode` int(50) NOT NULL,
  `CpNo` int(11) NOT NULL,
  `EmailAdd` varchar(50) NOT NULL,
  `PresentOccupation` varchar(50) NOT NULL,
  `Nameofemployer` varchar(50) NOT NULL,
  `Addofemployer` varchar(50) NOT NULL,
  `NatureofSEB` varchar(50) NOT NULL,
  `TINno` int(50) NOT NULL,
  `SSSno` int(50) NOT NULL,
  `GSISno` int(50) NOT NULL,
  `Philhealthno` int(50) NOT NULL,
  `surname2` varchar(50) NOT NULL,
  `fname2` varchar(50) NOT NULL,
  `mname2` varchar(50) NOT NULL,
  `age2` int(2) NOT NULL,
  `birthdate2` date NOT NULL,
  `birthplace2` varchar(50) NOT NULL,
  `citizenship2` varchar(50) NOT NULL,
  `gender2` varchar(50) NOT NULL,
  `Cstatus2` varchar(50) NOT NULL,
  `ResidenceNo2` varchar(50) NOT NULL,
  `PurokStreet2` varchar(50) NOT NULL,
  `BarangaySubd2` varchar(50) NOT NULL,
  `CityTown2` varchar(50) NOT NULL,
  `province2` varchar(50) NOT NULL,
  `TnHome2` int(50) NOT NULL,
  `TnHomeZipcode2` int(50) NOT NULL,
  `TnOffice2` int(50) NOT NULL,
  `TnOfficeZipcode2` int(50) NOT NULL,
  `CpNo2` int(11) NOT NULL,
  `EmailAdd2` varchar(50) NOT NULL,
  `PresentOccupation2` varchar(50) NOT NULL,
  `Nameofemployer2` varchar(50) NOT NULL,
  `Addofemployer2` varchar(50) NOT NULL,
  `SrcofFund2` varchar(50) NOT NULL,
  `TINno2` int(50) NOT NULL,
  `SSSno2` int(50) NOT NULL,
  `GSISno2` int(50) NOT NULL,
  `Philhealthno2` int(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `PolicyNo` varchar(50) NOT NULL,
  `SumInsured` varchar(50) NOT NULL,
  `premium` varchar(50) NOT NULL,
  `QA` varchar(50) NOT NULL,
  `plan` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `PolicyDated` varchar(50) NOT NULL,
  `QB` varchar(50) NOT NULL,
  `APRno` varchar(50) NOT NULL,
  `QC` varchar(50) NOT NULL,
  `QD` varchar(50) NOT NULL,
  `payorsClause` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `QE` varchar(50) NOT NULL,
  `dividens` varchar(50) NOT NULL,
  `QF` varchar(50) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `proposed_insured`
--

INSERT INTO `proposed_insured` (`id`, `trn_date`, `surname`, `fname`, `mname`, `age`, `birthdate`, `birthplace`, `citizenship`, `gender`, `Cstatus`, `ResidenceNo`, `PurokStreet`, `BarangaySubd`, `CityTown`, `province`, `TnHome`, `TnHomeZipcode`, `TnOffice`, `TnOfficeZipcode`, `CpNo`, `EmailAdd`, `PresentOccupation`, `Nameofemployer`, `Addofemployer`, `NatureofSEB`, `TINno`, `SSSno`, `GSISno`, `Philhealthno`, `surname2`, `fname2`, `mname2`, `age2`, `birthdate2`, `birthplace2`, `citizenship2`, `gender2`, `Cstatus2`, `ResidenceNo2`, `PurokStreet2`, `BarangaySubd2`, `CityTown2`, `province2`, `TnHome2`, `TnHomeZipcode2`, `TnOffice2`, `TnOfficeZipcode2`, `CpNo2`, `EmailAdd2`, `PresentOccupation2`, `Nameofemployer2`, `Addofemployer2`, `SrcofFund2`, `TINno2`, `SSSno2`, `GSISno2`, `Philhealthno2`, `relationship`, `company`, `PolicyNo`, `SumInsured`, `premium`, `QA`, `plan`, `amount`, `PolicyDated`, `QB`, `APRno`, `QC`, `QD`, `payorsClause`, `others`, `QE`, `dividens`, `QF`, `submittedby`) VALUES
(22, '2019-02-07 04:10:37', '1', '1', '1', 1, '2019-02-13', '1', '1', 'M', 'Single', '1', '1', '11', '1', '1', 1, '1', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '11', '1', '1', 1, '2019-02-19', '1', '1', 'M', 'Single', '1', '1', '1', '1', '1', 0, 0, 0, 0, 1, '1@WW', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', '1', '1', 'YES', 'NON-PARTICIPATING', 'Php', '', 'Yes', '', 'quarterly', 'payorsClause', '1', '', 'UTRP', '', 'ETIO', 'submittedby'),
(23, '2019-02-07 04:18:04', '1', '1', '1', 1, '2019-02-28', '1', '1', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '1@WW', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-02-20', '1', '1', 'M', 'Single', '1', '1', '1', '1', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'Php', '', 'Yes', '', 'spotcash', 'ADB', '', '', 'UTBPUI', '', 'ETIO', 'submittedby'),
(24, '2019-02-07 04:22:51', '1', '1', '1', 1, '2019-03-07', '1', '', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-01-30', '1111', '', 'M', 'Single', '1', '1', '1', '11', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'USD', '', 'Yes', '', 'spotcash', 'PW', '', '', '', '', 'ETIO', 'submittedby'),
(25, '2019-02-07 04:23:27', '1', '1', '1', 1, '2019-03-07', '1', '', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-01-30', '1111', '', 'M', 'Single', '1', '1', '1', '11', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'USD', '', 'Yes', '', 'spotcash', 'PW', '', '', '', '', 'ETIO', 'submittedby'),
(26, '2019-02-07 04:23:49', '1', '1', '1', 1, '2019-03-07', '1', '', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-01-30', '1111', '', 'M', 'Single', '1', '1', '1', '11', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'USD', '', 'Yes', '', 'spotcash', 'PW', '', '', '', '', 'ETIO', 'submittedby'),
(27, '2019-02-07 04:25:11', '1', '1', '1', 1, '2019-03-07', '1', '', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-01-30', '1111', '', 'M', 'Single', '1', '1', '1', '11', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'USD', '', 'Yes', '', 'spotcash', 'PW', '', '', '', '', 'ETIO', 'submittedby'),
(28, '2019-02-07 04:28:09', '1', '1', '1', 1, '2019-03-07', '1', '', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-01-30', '1111', '', 'M', 'Single', '1', '1', '1', '11', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'USD', '', 'Yes', '', 'spotcash', 'PW', '', '', '', '', 'ETIO', 'submittedby'),
(29, '2019-02-07 04:28:42', '1', '1', '1', 1, '2019-03-07', '1', '', 'M', 'Single', '1', '1', '1', '1', '1', 0, '', '', 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '1', '1', '1', 1, '2019-01-30', '1111', '', 'M', 'Single', '1', '1', '1', '11', '1', 0, 0, 0, 0, 1, '11@ww', '1', '1', '1', '1', 0, 0, 0, 0, '', '1', '1', '1', '1', 'YES', 'PARTICIPATING', 'USD', '', 'Yes', '', 'spotcash', 'PW', '', '', '', '', 'ETIO', 'submittedby');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`,`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, '123', '123@ww', '698d51a19d8a121ce581499d7b701668', '2019-02-06 07:04:19'),
(4, '123', 'mark@yahoo.com', '202cb962ac59075b964b07152d234b70', '2019-01-31 00:53:54'),
(5, 'jay', 'Mark@yahoo.com', 'baba327d241746ee0829e7e88117d4d5', '2019-01-31 03:39:17'),
(6, 'john', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-01-31 04:03:02'),
(7, 'john', 'mark@yahoo.com', '202cb962ac59075b964b07152d234b70', '2019-02-07 01:42:03'),
(8, 'men', 'mwe@dd', '202cb962ac59075b964b07152d234b70', '2019-02-07 01:42:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
