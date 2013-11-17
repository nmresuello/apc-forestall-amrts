-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2013 at 09:26 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forestall amrts`
--
CREATE DATABASE IF NOT EXISTS `forestall amrts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forestall amrts`;

-- --------------------------------------------------------

--
-- Table structure for table `assured`
--

CREATE TABLE IF NOT EXISTS `assured` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_lastname` varchar(45) DEFAULT NULL,
  `client_firstname` varchar(45) DEFAULT NULL,
  `client_middlename` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email_add` varchar(45) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `broker`
--

CREATE TABLE IF NOT EXISTS `broker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner_firstname` varchar(45) DEFAULT NULL,
  `owner_lastname` varchar(45) DEFAULT NULL,
  `owner_middlename` varchar(45) DEFAULT NULL,
  `employee_firstname` varchar(45) DEFAULT NULL,
  `employee_middlename` varchar(45) DEFAULT NULL,
  `employee_lastname` varchar(45) DEFAULT NULL,
  `broker_address` varchar(45) DEFAULT NULL,
  `broker_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `commission`
--

CREATE TABLE IF NOT EXISTS `commission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `amount` varchar(45) DEFAULT NULL,
  `receipt` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `broker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_commission_broker1_idx` (`broker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

CREATE TABLE IF NOT EXISTS `insurance_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_id` int(11) NOT NULL,
  `broker_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_insurance company_broker1_idx` (`broker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company_details`
--

CREATE TABLE IF NOT EXISTS `insurance_company_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(45) DEFAULT NULL,
  `company_address` varchar(45) DEFAULT NULL,
  `owner_firstname` varchar(45) DEFAULT NULL,
  `owner_middlename` varchar(45) DEFAULT NULL,
  `owner_lastname` varchar(45) DEFAULT NULL,
  `employee_firstname` varchar(45) DEFAULT NULL,
  `employee_middlename` varchar(45) DEFAULT NULL,
  `employee_lastname` varchar(45) DEFAULT NULL,
  `insurance_company_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_insurance_company_details_insurance company1_idx` (`insurance_company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paymenttype` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `receipt` varchar(45) DEFAULT NULL,
  `paymentamount` decimal(6,2) DEFAULT NULL,
  `commission_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payment_commission1_idx` (`commission_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE IF NOT EXISTS `policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_dateissued` date DEFAULT NULL,
  `insurance_type` varchar(45) DEFAULT NULL,
  `insurance_attachment_details` varchar(45) DEFAULT NULL,
  `policy_date_expiration` date DEFAULT NULL,
  `policy_coverage` varchar(45) DEFAULT NULL,
  `insureditems` varchar(45) DEFAULT NULL,
  `termprice` decimal(6,2) DEFAULT NULL,
  `payment_id` int(11) NOT NULL,
  `insurance_company_id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_policy_payment1_idx` (`payment_id`),
  KEY `fk_policy_insurance company1_idx` (`insurance_company_id`),
  KEY `fk_policy_applicant1_idx` (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `fk_commission_broker1` FOREIGN KEY (`broker_id`) REFERENCES `broker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `insurance_company`
--
ALTER TABLE `insurance_company`
  ADD CONSTRAINT `fk_insurance?company_broker1` FOREIGN KEY (`broker_id`) REFERENCES `broker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `insurance_company_details`
--
ALTER TABLE `insurance_company_details`
  ADD CONSTRAINT `fk_insurance_company_details_insurance?company1` FOREIGN KEY (`insurance_company_id`) REFERENCES `insurance_company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_commission1` FOREIGN KEY (`commission_id`) REFERENCES `commission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `policy`
--
ALTER TABLE `policy`
  ADD CONSTRAINT `fk_policy_payment1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_policy_insurance?company1` FOREIGN KEY (`insurance_company_id`) REFERENCES `insurance_company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_policy_applicant1` FOREIGN KEY (`applicant_id`) REFERENCES `assured` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
