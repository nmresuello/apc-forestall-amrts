-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2013 at 07:06 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forestall-amrts`
--
CREATE DATABASE IF NOT EXISTS `forestall-amrts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forestall-amrts`;

-- --------------------------------------------------------

--
-- Table structure for table `assured`
--

CREATE TABLE IF NOT EXISTS `assured` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_lastname` varchar(45) DEFAULT NULL,
  `client_firstname` varchar(45) DEFAULT NULL,
  `client_middlename` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email_add` varchar(45) DEFAULT NULL,
  `contact_number` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `assured`
--

INSERT INTO `assured` (`id`, `client_lastname`, `client_firstname`, `client_middlename`, `gender`, `address`, `age`, `email_add`, `contact_number`) VALUES
(1, 'Basco', 'Jelbert', 'Nixon', 'M', 'Ilocos', 19, 'jnb04', '09123455');

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_id` int(11) DEFAULT NULL,
  `filename` varchar(45) DEFAULT NULL,
  `attachment` blob,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `broker`
--

INSERT INTO `broker` (`id`, `owner_firstname`, `owner_lastname`, `owner_middlename`, `employee_firstname`, `employee_middlename`, `employee_lastname`, `broker_address`, `broker_name`) VALUES
(1, 'Jenny', 'Anastacio', 'Cambay', 'Chloe', 'Anne', 'Sanchez', 'Magallanes', 'APC');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE IF NOT EXISTS `claim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_id` int(11) NOT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `description` text NOT NULL,
  `type_of_accident` varchar(45) DEFAULT NULL,
  `insured_items` text,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_claim_policy1_idx` (`policy_id`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `commission`
--

INSERT INTO `commission` (`id`, `amount`, `receipt`, `date`, `broker_id`) VALUES
(1, '1000', '', '2013-12-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

CREATE TABLE IF NOT EXISTS `insurance_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(45) DEFAULT NULL,
  `company_address` varchar(45) DEFAULT NULL,
  `broker_id` int(11) NOT NULL,
  `policy_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_insurance company_broker1_idx` (`broker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `insurance_company`
--

INSERT INTO `insurance_company` (`id`, `company_name`, `company_address`, `broker_id`, `policy_id`) VALUES
(2, 'Forestall', 'Paranaque', 1, 1);

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
  `policy_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_payment_commission1_idx` (`commission_id`),
  KEY `fk_payment_policy1_idx` (`policy_id`)
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
  `insurance_company_id` int(11) NOT NULL,
  `assured_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_policy_insurance company1_idx` (`insurance_company_id`),
  KEY `fk_policy_assured1_idx` (`assured_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `policy_dateissued`, `insurance_type`, `insurance_attachment_details`, `policy_date_expiration`, `policy_coverage`, `insureditems`, `termprice`, `insurance_company_id`, `assured_id`) VALUES
(1, '2013-12-10', '', NULL, '2013-12-16', '', '', '0.00', 2, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `fk_claim_policy1` FOREIGN KEY (`policy_id`) REFERENCES `policy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commission`
--
ALTER TABLE `commission`
  ADD CONSTRAINT `fk_commission_broker1` FOREIGN KEY (`broker_id`) REFERENCES `broker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `insurance_company`
--
ALTER TABLE `insurance_company`
  ADD CONSTRAINT `fk_insurance company_broker1` FOREIGN KEY (`broker_id`) REFERENCES `broker` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_payment_commission1` FOREIGN KEY (`commission_id`) REFERENCES `commission` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_policy1` FOREIGN KEY (`policy_id`) REFERENCES `policy` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `policy`
--
ALTER TABLE `policy`
  ADD CONSTRAINT `fk_policy_assured1` FOREIGN KEY (`assured_id`) REFERENCES `assured` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_policy_insurance company1` FOREIGN KEY (`insurance_company_id`) REFERENCES `insurance_company` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
