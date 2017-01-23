-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2017 at 02:15 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cmt_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmt_postid` varchar(10) NOT NULL,
  `cmt_user` varchar(100) NOT NULL,
  `cmt_comment` varchar(500) NOT NULL,
  PRIMARY KEY (`cmt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cmt_id`, `cmt_postid`, `cmt_user`, `cmt_comment`) VALUES
(1, '22', 'Kazol raj', 'fhf'),
(2, '27', 'Bappy raisul', 'well played WI'),
(3, '27', 'Kazol raj', 'sisu'),
(4, '28', 'niloy', 'good'),
(5, '29', 'niloy', 'good'),
(6, '', 'niloy', 'dthdg'),
(7, '', 'niloy', 'fghdh'),
(8, '', 'niloy', 'bappi'),
(9, '29', 'niloy', 'fbdhdth'),
(10, '31', 'jamil yusuf', 'good'),
(11, '28', 'Kazol raj', 'kl'),
(12, '', 'Kazol raj', 'loiuu'),
(13, '31', 'Kazol raj', 'lki'),
(14, '31', 'Kazol raj', 'bad');

-- --------------------------------------------------------

--
-- Table structure for table `post_add`
--

CREATE TABLE IF NOT EXISTS `post_add` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dateposted` date NOT NULL,
  `post` varchar(10000) NOT NULL,
  `hour` time(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `post_add`
--

INSERT INTO `post_add` (`id`, `title`, `name`, `dateposted`, `post`, `hour`) VALUES
(22, 'Bangladesh T20 Asia cup 2016', 'Kazol raj', '2016-03-08', 'Bangladesh played asia cup final against India on 6 march 2016.Bangladesh played well but unfortunately lost the game.We support BD from core of our heart.kkjjy', '02:22:43.000000'),
(23, 'About last match', 'Siddiqur r Sumon', '2016-03-08', 'We all are bangladeshi supporter.we hope bd will continue their performance in the world T20.Bangladeshi captain masrafee said that second round is the first target in the wct20.', '02:27:33.000000'),
(24, 'Cricket wct20', 'Hasan mahmud', '2016-03-08', 'ctctctctccccccccccctttttttttttttttttttttttttcccccccccccccccccccccccccccccccttttttttttttttttttttttttttttttttttttttttttttttttccccccccccccccccccccccccccccccccccccccctttttttttttttttttttttttttttttccccccc', '02:30:45.000000'),
(25, 'football', 'Hasan mahmud', '2016-03-08', 'sdbkkkkkkkkkkkkkkkkkkkkkkkkffvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvurrrrrrrrrrrrrrrrrrrrrrrrrivvvvvvvvvvvvvvvvvvvvvvvvkkkkkkkkkkkkkkkkkkkkkkkkkkrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrnnkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkvvvvvvvvvvvvvvvvvvvvvv', '02:31:42.000000'),
(27, 'west indies', 'Bappy raisul', '2016-03-16', 'west indies won the match today.well played', '23:31:13.000000'),
(28, 'jvjev', 'Kazol raj', '2016-05-03', 'v afverververveqr', '22:02:54.000000'),
(29, 'Real madrid', 'niloy', '2016-08-07', 'Real madrid is the worst football team', '01:16:54.000000'),
(30, 'Barcelona', 'nasia ahmed', '2016-08-30', 'today is friday', '20:31:22.000000'),
(31, 'real madrid', 'jamil yusuf', '2016-12-09', 'real madrid draw the match.', '17:57:50.000000'),
(32, 'lokji', 'Kazol raj', '2016-12-28', 'nnnnnnnnnnbddddddddddd', '20:02:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` int(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `dob` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `education` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `address`, `dob`, `gender`, `education`) VALUES
(4, 'Kazol raj', 'kazol', '123', 'kajal@gmail.com', 2147483647, 'Dhaka', '1/1/1993', 'male', ''),
(5, 'Siddiqur r Sumon', 'sumon', '123', 'sumon@gmail.com', 1632548963, 'Dhaka', '1/1/1993', 'male', ''),
(6, 'Hasan mahmud', 'hasan', '123', 'hasan@gmail.com', 1683264953, 'Dhaka', '1/1/1993', 'male', ''),
(7, 'Bappy raisul', 'bappy', '123', 'ghcg', 12345, 'Dhaka', '1/1/1993', '', ''),
(8, 'Kazol raj', 'kazol', '12345', 'kajal.raj@gmail.com', 12345, 'Dhaka', '1/1/1993', '', ''),
(9, 'niloy', 'niloy', '123', 'kkw', 16, 'mih', '26549', '', ''),
(10, 'nasia ahmed', 'nasia', '123', 'kkw', 65656, 'dhaka', '26549', '', ''),
(11, 'jamil yusuf', 'jamil', '12345', 'jamail@gmail.com', 1254875633, 'dhaka', '01-02-1992', '', ''),
(12, 'test', 'test', '12345', 'test@gmail.com', 123564789, 'dhaka', '01-02-1992', 'male', ''),
(13, 'syner', 'sign', '12345', 'test@gmail.com', 12345, 'dhaka', '01-02-1992', 'male', ''),
(14, 'syner', 'sign', '3214', 'test@gmail.com', 12345, 'dhaka', '01-02-1992', 'male', ''),
(15, 'a', 'a', '12345', 'test@gmail.com', 1673900901, 'dhaka', '01-02-1992', 'male', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
