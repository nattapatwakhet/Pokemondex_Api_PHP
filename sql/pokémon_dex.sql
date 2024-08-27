-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 04:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pokemondex`
--

-- --------------------------------------------------------

--
-- Table structure for table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `num` varchar(11) DEFAULT NULL,
  `name` varchar(18) DEFAULT NULL,
  `img` varchar(48) DEFAULT NULL,
  `type0` varchar(8) DEFAULT NULL,
  `type1` varchar(8) DEFAULT NULL,
  `height` varchar(6) DEFAULT NULL,
  `weight` varchar(8) DEFAULT NULL,
  `candy` varchar(24) DEFAULT NULL,
  `egg` varchar(13) DEFAULT NULL,
  `multipliers0` decimal(4,2) DEFAULT NULL,
  `multipliers1` decimal(4,2) DEFAULT NULL,
  `weaknesses0` varchar(8) DEFAULT NULL,
  `weaknesses1` varchar(8) DEFAULT NULL,
  `weaknesses2` varchar(8) DEFAULT NULL,
  `weaknesses3` varchar(8) DEFAULT NULL,
  `weaknesses4` varchar(6) DEFAULT NULL,
  `weaknesses5` varchar(5) DEFAULT NULL,
  `weaknesses6` varchar(4) DEFAULT NULL,
  `candy_count` int(11) DEFAULT NULL,
  `spawn_chance` decimal(6,4) DEFAULT NULL,
  `avg_spawns` decimal(6,3) DEFAULT NULL,
  `spawn_time` varchar(5) DEFAULT NULL,
  `next_evolution0num` varchar(11) DEFAULT NULL,
  `next_evolution0name` varchar(10) DEFAULT NULL,
  `next_evolution1num` varchar(11) DEFAULT NULL,
  `next_evolution1name` varchar(10) DEFAULT NULL,
  `next_evolution2num` varchar(11) NOT NULL,
  `next_evolution2name` varchar(7) DEFAULT NULL,
  `prev_evolution0num` varchar(11) DEFAULT NULL,
  `prev_evolution0name` varchar(15) DEFAULT NULL,
  `prev_evolution1num` varchar(11) DEFAULT NULL,
  `prev_evolution1name` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(26) NOT NULL,
  `first_name` varchar(7) NOT NULL,
  `last_name` varchar(8) NOT NULL,
  `avatar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `first_name`, `last_name`, `avatar`) VALUES
(7, 'michael.lawson@reqres.in', 'Michael', 'Lawson', 'https://reqres.in/img/faces/7-image.jpg'),
(8, 'lindsay.ferguson@reqres.in', 'Lindsay', 'Ferguson', 'https://reqres.in/img/faces/8-image.jpg'),
(9, 'tobias.funke@reqres.in', 'Tobias', 'Funke', 'https://reqres.in/img/faces/9-image.jpg'),
(10, 'byron.fields@reqres.in', 'Byron', 'Fields', 'https://reqres.in/img/faces/10-image.jpg'),
(11, 'george.edwards@reqres.in', 'George', 'Edwards', 'https://reqres.in/img/faces/11-image.jpg'),
(12, 'rachel.howell@reqres.in', 'Rachel', 'Howell', 'https://reqres.in/img/faces/12-image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
