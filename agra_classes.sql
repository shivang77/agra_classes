-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 05:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agra_classes`
--

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

CREATE TABLE IF NOT EXISTS `institute` (
  `institute_name` varchar(20) NOT NULL,
  `category1` varchar(20) NOT NULL,
  `category2` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `location` varchar(20) NOT NULL,
  `contact1` varchar(10) NOT NULL,
  `contact2` varchar(10) NOT NULL,
  `year` varchar(4) NOT NULL,
  `description` varchar(250) NOT NULL,
  `imgurl` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  PRIMARY KEY (`mobile`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`institute_name`, `category1`, `category2`, `city`, `location`, `contact1`, `contact2`, `year`, `description`, `imgurl`, `mobile`) VALUES
('Nit', 'B.tech', 'M.tech', 'pauri', 'srinagar', '7979797987', '9879879879', '7867', 'National Institute of Technology', 'details/Nit/picNit.jpg', '7877383873'),
('coaching', 'java', 'php', 'jhunjhunu', 'rajasthan', '6666555547', '8754968754', '2016', 'join us and hava great future and get good job too!!!!!!!!!!!!', 'details/coaching/piccoaching.JPG', '8787878787');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `mobile`, `email`, `password`) VALUES
('devendra dhakad', '7877383873', 'dkdhakad97@gmail.com', 'd.k.7777'),
('vikash', '8787878787', 'vikas@gmail.com', '12345678'),
('shivang', '783469846', 'shivanggarg7@gmail.com', 'shivang@12'),
('abhilash', '1234567890', 'shivanggarg7@gmail.com', '12345678');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
