-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2016 at 05:30 AM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `noelgrac_BlackAndAmber`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `match_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `match_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(16, 2, 1),
(19, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(3) NOT NULL AUTO_INCREMENT,
  `competition` varchar(40) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(5) NOT NULL,
  `teams` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `referee` varchar(15) NOT NULL,
  PRIMARY KEY (`match_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `competition`, `date`, `time`, `teams`, `venue`, `referee`) VALUES
(1, 'National Hurling League Semi Final 1', 'Sunday 17th Apr', '13:30', 'Kilkenny v Clare', 'Semple Stadium', 'Dickie Murphy'),
(2, 'National Hurling League Semi Final 2', 'Sunday 17th Apr', '16:00', 'Waterford v Limerick', 'Semple Stadium', 'Michael Wadding'),
(3, 'National Hurling League Final', 'Sunday 24th Apr', '14:00', 'Waterford v Clare', 'Semple Stadium', 'Michael Wadding'),
(4, 'Leinster Quarter Final', 'Sunday 1st May ', '15:00', 'Dublin v Wexford', 'O''Connor Park', 'Barry Murphy'),
(5, 'Munster Quarter Final', 'Sunday 8th May', '12:00', 'Kerry v Cork', 'Pairc Ui Rinn', 'Barry Kirwan'),
(6, 'Munster Semi Final', 'Sunday 15th May', '13:00', 'Tipperary v Limerick', 'The Gaelic Grounds', 'DJ Carey'),
(7, 'Leinster Semi Final', 'Sunday 22nd May', '14:00', 'Galway v Dublin', 'Salthill', 'Adrian Ronan'),
(8, 'All-Ireland Final', 'Sunday 10th September', '16:00', 'Kilkenny v Clare', 'Croke Park', 'BarryMurphy');

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `query_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `query` varchar(255) NOT NULL,
  PRIMARY KEY (`query_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`query_id`, `first_name`, `last_name`, `email`, `query`) VALUES
(1, 'Noel', 'Grace', 'noelgrace@mail.com', 'When do matches start?'),
(2, 'Noel', 'Grace', 'noelgrace@gmail.com', 'yyy'),
(3, 'Noel', 'Grace', 'noelgrace@gmail.com', 'yyy'),
(4, 'Noel', 'Grace', 'noelgrace@gmail.com', 'yyy'),
(9, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(10, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(11, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(12, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(13, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(14, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(15, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(16, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(17, 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'hi'),
(18, 'Noel', 'Grace', 'noelgrace@gmail.com', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'noelgrace', 'Noel', 'Grace', 'noelgrace@gmail.com', 'password'),
(2, 'paddygrace', 'Paddy', 'Grace', 'paddygrace@gmail.com', 'password'),
(3, 'marygrace', 'Mary', 'Grace', 'maryperpetua13@gmail.com', 'password'),
(4, 'michaelgrace', 'Michael ', 'Grace', 'mickeygmart@msn.com', 'password'),
(5, 'fonzy', 'Pádraic', 'Grace', 'fonzykk@gmail.com', 'password'),
(6, 'mairéadgrace', 'Mairéad', 'Grace', 'mairead.grace3@mail.dcu.ie', 'password'),
(7, 'kevingrace', 'Kevin', 'Grace', 'kevingrace@gmail.com', 'password'),
(8, 'roseann', 'Roseann', 'Grace', 'roseanngrace86@gmail.com', 'password'),
(13, 'colm', 'Colm', 'Grace', 'colmcag@yahoo.co.uk', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
