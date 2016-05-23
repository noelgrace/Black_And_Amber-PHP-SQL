-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 11:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `black_and_amber`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
(16, 1, 1),
(18, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
  `match_id` int(3) NOT NULL,
  `competition` varchar(40) NOT NULL,
  `date` varchar(25) NOT NULL,
  `time` varchar(5) NOT NULL,
  `teams` varchar(30) NOT NULL,
  `venue` varchar(30) NOT NULL,
  `referee` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

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
  `query_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `query` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

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
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`query_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `match_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `query_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
