-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 10:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbktask`
--

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_text` text,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image_text`, `image`) VALUES
(1, '', '34493116_2243116895703385_5044439093446967296_n.jpg'),
(2, 'good', ''),
(3, 'good', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `avatar`, `password`) VALUES
(1, 'hussein', 'hh@gmail.com', '', '12345'),
(2, 'huss', 'huss@gmail.com', 'images/34493116_2243116895703385_5044439093446967296_n.jpg', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'huss', 'huss@gmail.com', 'images/34493116_2243116895703385_5044439093446967296_n.jpg', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'hh', 'huss@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'hussein1', 'aa@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, '', 'max@max.com', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, '', 'hussein@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'hussein2', 'hhh@gmail.comh', '', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'hussein', 'aa@bb.com', 'images/34493116_2243116895703385_5044439093446967296_n.jpg', '827ccb0eea8a706c4c34a16891f84e7b'),
(10, 'hussein', 'aa@bb.com', 'images/MariaDB.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'hussein', 'aa@bb.com', 'images/MariaDB.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'hussein2', 'hh@bb.com', 'images/MariaDB.png', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'test', 'test@gmail.com', '', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
