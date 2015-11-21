-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2015 at 08:50 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `t_center`
--
CREATE DATABASE IF NOT EXISTS `t_center` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `t_center`;

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer_req`
--

CREATE TABLE IF NOT EXISTS `fertilizer_req` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(10) NOT NULL,
  `fer_type` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `quantity` varchar(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`req_id`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

-- --------------------------------------------------------

--
-- Table structure for table `month_sup_data`
--

CREATE TABLE IF NOT EXISTS `month_sup_data` (
  `year_month` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` int(11) NOT NULL COMMENT 'value of this month suplied',
  `advanced` int(11) NOT NULL COMMENT 'advanced payment',
  `loan` int(11) NOT NULL COMMENT 'last month loan',
  `payble` int(11) NOT NULL COMMENT 'rest for this month',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `t_data`
--

CREATE TABLE IF NOT EXISTS `t_data` (
  `cus_id` int(11) NOT NULL,
  `year_month` varchar(10) NOT NULL,
  `date` int(11) NOT NULL,
  `weight` int(10) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` varchar(10) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `nic`, `username`, `password`, `privilege`, `contact_no`, `email`) VALUES
(1, 'chamika', 'vishmal', '923464316v', 'chamika', 'e10adc3949ba59abbe56e057f20f883e', 'Administra', '0770373513', 'chamikaudugama@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `month_sup_data`
--
ALTER TABLE `month_sup_data`
  ADD CONSTRAINT `month_sup_data_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `t_data`
--
ALTER TABLE `t_data`
  ADD CONSTRAINT `t_data_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
