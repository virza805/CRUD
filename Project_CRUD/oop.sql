-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 08:07 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oop`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `age` int(11) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `class`, `email`, `pass`, `age`, `roll`, `fname`, `mname`) VALUES
(1, 'Tanvir', 1, 'tanvit@agmail.com', '1234', 18, '5', 'Patoary', 'Bagum'),
(2, 'Tanvir Hasan', 1, 'amana@agmail.com', '1234', 11, '505', 'Ak', 'Bagum'),
(4, 'Hasan', 0, 'hasan@agmail.com', '1234', 11, '505', 'Akbor', 'Bagum'),
(6, 'MD', 1, 'md@agmail.com', '1234', 11, '505', 'Ak', 'Bagum'),
(8, 'Onamica', 0, 'virza805@gmail.com', 'tanvir', 33, '20', 'MD', 'BANGLADESH'),
(9, 'MD AL AMIN', 0, 'praxis@gmail.com', 'praxis', 40, '75', 'Khalil', 'Hasina');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
