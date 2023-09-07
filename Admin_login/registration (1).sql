-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2019 at 09:44 AM
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
-- Table structure for table `proposed_insured`
--

CREATE TABLE IF NOT EXISTS `proposed_insured` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `trn_date` int(50) NOT NULL,
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
  `province` text NOT NULL,
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
  `province2` smallint(50) NOT NULL,
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
  `name3` varchar(50) NOT NULL,
  `address3` varchar(50) NOT NULL,
  `pob3` varchar(50) NOT NULL,
  `dob3` date NOT NULL,
  `citizenship3` varchar(50) NOT NULL,
  `relationship3` varchar(50) NOT NULL,
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
  `ssubmittedby` varchar(50) NOT NULL,
  PRIMARY KEY (`id`,`surname`,`fname`,`mname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, '123', '123@ww', '698d51a19d8a121ce581499d7b701668', '2019-02-06 07:04:19'),
(4, '123', 'mark@yahoo.com', '202cb962ac59075b964b07152d234b70', '2019-01-31 00:53:54'),
(5, 'jay', 'Mark@yahoo.com', 'baba327d241746ee0829e7e88117d4d5', '2019-01-31 03:39:17'),
(6, 'john', '123@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-01-31 04:03:02');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
