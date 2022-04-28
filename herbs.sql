-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 06:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `herbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`) VALUES
(0, 'admin', '$2y$10$dujc2BZD1dhnVJLERS5CnexfYl1YI2sNacTTOhCI2cGQ/.d3/SmIq', '2022-04-19 10:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `number` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`name`, `username`, `shipping`, `code`, `number`) VALUES
('Shadrack Mweu', 'Mweu', 'Mombasa', 'Mxyptsv120', 796845314);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`name`, `image`, `type`, `descrip`, `price`) VALUES
('cloves', 'cloves.png', 'tablet', 'treats all sickness including malaria ', 'ksh 1000'),
('Acikam Tablet', 'acikam-tablets-500x500.jpg', 'Tablet', 'tablets are recommended by the doctors as well for treating weakness and for boosting energy levels.,these presented tablets are easy to consume and completely safe to users aged above 12.', 'Ksh 800'),
('Addiction Leave Powder', 'addiction-leave-powder-500x500.png', 'Powder', 'This powder helps people with addiction problems to quit their addictions', 'Ksh 850');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'mweush', '$2y$10$Yv0iGqUeu2B0nR1C0sh4h.SOrBKkA9cqyrNCyag.Kqax9U4ZNwWN2', '2022-04-16 10:30:52'),
(2, 'Mweu', '$2y$10$m2nXcdP/EeEJx0CI2XXIEezTn0CCRrHl2m4.T/MNyKI4Wcmgolh7q', '2022-04-19 10:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
