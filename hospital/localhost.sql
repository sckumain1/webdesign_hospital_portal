-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2015 at 08:42 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--
CREATE DATABASE `healthcare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `healthcare`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('k.kiran@gmail.com', 'kiran');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `name` varchar(60) NOT NULL,
  `doctor` varchar(60) NOT NULL,
  `date` varchar(15) NOT NULL,
  `about` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `doctor`, `date`, `about`) VALUES
('rohit singh', 'robin sharma', '07/05/2014', 'your appointment schedulehd at 10am with Dr robin sharma'),
('sandeep chand kumain', 'robin sharma', '08/05/2014', 'date 8/05/2014 :your appointment schedulehd at 8am with Dr robin sharma'),
('mohit singh', 'robin sharma', '16/05/2014', 'your appointment schedulehd at10am with Dr robin shrama.'),
('saurabh dwivedi', 'robin sharma', '14/05/2014', 'your appointment schedulehd at 1pm with Dr robin sharma'),
('sandeep chand kumain', 'rajesh pandey', '17/05/2014', 'date 17/05/2014:your appointment schedulehd at 2:30pm with Dr rajesh pandey.'),
('sandeep chand kumain', 'robin sharma', '14/05/2014', 'your appointment schedule at 2.30 pm.'),
('ratnesh pandey', 'ravinder singh negi', '02/06/2014', 'appointment time :4pm');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` bigint(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `specialization` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1008 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `age`, `mobile`, `password`, `email`, `specialization`, `gender`) VALUES
(1005, 'geeta bhatt', '28', '6677667766', 'geeta28', 'geeta@gmail.com', 'child specialist', 'female'),
(1006, 'harish singh', '40', '8998123456', 'harish40', 'harish@hotmail.com', 'child shpecilalist', 'male'),
(1004, 'rahul singh', '32', '9867764554', 'rahul32', 'rahul@gamail.com', 'physician', 'male'),
(1002, 'rajesh pandey', '40', '7895421010', 'rajesh40', 'rajesh@gmail.com', 'cardiologist', 'male'),
(1007, 'ravinder singh negi', '28', '8755005503', 'ravi28', 'ravi@gmail.com', 'child spcialist', 'male'),
(1003, 'robin sharma', '30', '9878987896', 'robin30', 'robin@gmail.com', 'physiotherapist', 'male'),
(1001, 'varun sharma', '35', '9876543210', 'varun35', 'varun@gmail.com', 'child specialist', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` bigint(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `age`, `gender`, `mobile`, `password`, `email`, `address`) VALUES
(20140009, 'mohit singh', '35', 'male', '8908900987', 'mohit35', 'mohit@gmail.com', 'clock tower dehradun'),
(20140012, 'Raman sharma', '25', 'male', '4444444444', 'qwerty', 'raman@gmail.com\n', 'ddn'),
(20140010, 'ratnesh pandey', '20', 'male', '0120120123', 'qwerty', 'ratnesh@gmail.com', 'clement town ddn'),
(20140007, 'rohan varma', '24', 'male', '8912345678', 'rohan24', 'rohan@yahoo.com', 'clock tower dehradun'),
(20140006, 'rohit middha', '34', 'm', '8976488373', 'rohit34', 'rahul@rediff.com', 'gurgaon'),
(20140004, 'rohit singh', '25', 'male', '0123456789', 'qwerty', 'rohit@gmail.com', 'rajeev nagar dehradun'),
(20140008, 'sahil baghla', '30', 'male', '9007765676', 'sahil30', 'sahil@bluegape.com', 'rajori garden delhi'),
(20140001, 'sandeep chand kumain', '19', 'male', '7895194106', 'sandeep', 'sckumain1@gmail.com', 'dharampur dehradun'),
(20140003, 'saurabh dwivedi', '20', 'male', '8957442804', 'saurabh', 'saurabh.dwivedi11@gmail.com', 'clement town dehradun');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `name` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`name`, `address`, `mobile`) VALUES
('raj medical store', 'hospital road near clock tower, lucknow', '8754912467'),
('star medical store', 'hospital road near bank of india lucknow', '8787545369');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20140014 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`) VALUES
(20140001, 'sandeep chand kumain'),
(20140003, 'saurabh dwivedi'),
(20140004, 'rohit sharama'),
(20140005, 'saurav chauhan'),
(20140006, 'rohit middha'),
(20140007, 'rohan varma'),
(20140008, 'sahil baghla'),
(20140009, 'mohit singh'),
(20140010, 'ratnesh pandey'),
(20140012, 'raman sharma'),
(20140013, 'kiran');
