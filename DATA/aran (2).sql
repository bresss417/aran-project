-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 08:01 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aran`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Aran', 'aran@gamil.com', '40281'),
(2, 'Aran', 'aran@gamil.com', '40281');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(20) NOT NULL,
  `booking` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `province` varchar(20) NOT NULL,
  `dd_yyyy` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `booking`, `category`, `province`, `dd_yyyy`) VALUES
(43, 'รอบบ่าย', 'ใบอนุญาติขับรถระหว่างประเทศ', 'ตรัง', '2020-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `rigis`
--

CREATE TABLE `rigis` (
  `id` int(20) NOT NULL,
  `name_last` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_card` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rigis`
--

INSERT INTO `rigis` (`id`, `name_last`, `email`, `id_card`, `pass`) VALUES
(1, 'aranmani', 'Aran', '0937803761', '1258588'),
(2, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40081'),
(3, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(4, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(5, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(6, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(7, 'aranmani', 'aran40081@gmail.com', '1950100219624', '40281'),
(8, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(9, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(10, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(11, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(12, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(13, 'aranmani', 'aran40281@gmail.com', '1950100219624', '40281'),
(14, 'อัฟนาน มูซอ', 'run1234@gmail.com', '123456789', '40081'),
(15, 'อัฟนาน มูซอ', 'Aran', '0937803761', '1213456'),
(16, 'อัฟนาน มูซอ', 'aran40281@gmail.com', '123456789', '123456'),
(17, 'อัฟนาน มูซอ', 'BEMSEEFADKE', '0883884494', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rigis`
--
ALTER TABLE `rigis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rigis`
--
ALTER TABLE `rigis`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
