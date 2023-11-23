-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2023 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `section`
--

-- --------------------------------------------------------

--
-- Table structure for table `section a`
--

CREATE TABLE `section a` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section a`
--

INSERT INTO `section a` (`id`, `teacher`, `section`, `course`, `course_time`, `room`) VALUES
(18, 'eman macapia', '1A', 'stem', '9:00 to 11:00', 'COE room 102'),
(24, 'eman', '3C', 'stem', '9:00 to 11:00', 'COE room 102');

-- --------------------------------------------------------

--
-- Table structure for table `section b`
--

CREATE TABLE `section b` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section c`
--

CREATE TABLE `section c` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section d`
--

CREATE TABLE `section d` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section e`
--

CREATE TABLE `section e` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section f`
--

CREATE TABLE `section f` (
  `id` int(250) NOT NULL,
  `teacher` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_time` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `section a`
--
ALTER TABLE `section a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section b`
--
ALTER TABLE `section b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section c`
--
ALTER TABLE `section c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section d`
--
ALTER TABLE `section d`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section e`
--
ALTER TABLE `section e`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section f`
--
ALTER TABLE `section f`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `section a`
--
ALTER TABLE `section a`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `section b`
--
ALTER TABLE `section b`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `section c`
--
ALTER TABLE `section c`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `section d`
--
ALTER TABLE `section d`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `section e`
--
ALTER TABLE `section e`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `section f`
--
ALTER TABLE `section f`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
