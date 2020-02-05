-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 10:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `swiftfx`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `invoice_id` varchar(20) NOT NULL,
  `transaction_id` tinytext NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_amount` varchar(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
  `user_id` varchar(20) NOT NULL,
  `invoice` varchar(20) NOT NULL,
  `plan` varchar(10) NOT NULL,
  `amount` varchar(4) NOT NULL,
  `payer_id` varchar(16) NOT NULL,
  `payment_date` varchar(32) NOT NULL,
  `payment_status` varchar(16) NOT NULL,
  `subscr_id` varchar(16) NOT NULL,
  `payer_email` varchar(64) NOT NULL,
  `txn_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`user_id`, `invoice`, `plan`, `amount`, `payer_id`, `payment_date`, `payment_status`, `subscr_id`, `payer_email`, `txn_id`) VALUES
('u25d67e94695c22', 'i55d67e94e81976', 'elite', '', '', '', 'Pending', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` tinytext NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` tinytext NOT NULL,
  `date` datetime NOT NULL,
  `user_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `date`, `user_id`) VALUES
('Manish Pandey', 'leomanish098@gmail.com', '$2y$10$3zlX2S9EHAN9ifHDWg3tRem07FZINcdUdIO1GNoEJOTsmjtBpcF9C', '2019-08-29 20:33:34', 'u25d67e94695c22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
