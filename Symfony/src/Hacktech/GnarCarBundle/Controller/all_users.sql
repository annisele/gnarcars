-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2014 at 02:28 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `all_users`
--
CREATE DATABASE IF NOT EXISTS `all_users` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `all_users`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `activated` int(1) NOT NULL DEFAULT '0',
  `confirmation` varchar(35) NOT NULL,
  `reg_date` int(11) NOT NULL,
  `last_login` int(11) NOT NULL DEFAULT '0',
  `group_id` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `activated`, `confirmation`, `reg_date`, `last_login`, `group_id`) VALUES
(2, 'annisele', '8c50cdd4b3c31c4565a8a6bc20cfcee5', 'lovenal@gmail.com', 1, '', 1390739938, 0, 1),
(3, 'okok', '05fec20d455ddde7b7f562a9ad366fe1', 'hu@hsa.com', 1, '', 1390740342, 0, 1),
(4, 'jenny', '4df17beb43246b5fe486f04b48609cb4', 'jenny@jenny.com', 1, '', 1390740492, 1390744596, 1),
(5, 'asd', 'fd289d4fa66cfbe73bbab589ddde34a2', 'sadas@das.cim', 1, '', 1390740835, 0, 1),
(6, 'sad', '641dcd8afca78465589fc2ddd3a6eac1', 'dasdas@dadd.com', 1, '', 1390741034, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
