-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 10:17 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer table`
--

CREATE TABLE `customer table` (
  `Sl No.` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Current Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer table`
--

INSERT INTO `customer table` (`Sl No.`, `Name`, `Email`, `Current Balance`) VALUES
(1, 'Prashanth', 'prash@gmail.com', 2100),
(2, 'Lohith', 'loh@gmail.com', 5000),
(3, 'Vidya', 'vid@gmail.com', 5000),
(4, 'Jagan', 'jag@gmail.com', 6100),
(5, 'Jyothi', 'jyo@gmail.com', 5000),
(6, 'Thiyagarajan', 'thi@gmail.com', 5000),
(7, 'Kanakaraj', 'kan@gmail.com', 5000),
(8, 'Indira', 'ind@gmail.com', 5100),
(9, 'Jack', 'jac@gmail.com', 4400),
(10, 'Jill', 'jil@gmail.com', 6900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer table`
--
ALTER TABLE `customer table`
  ADD PRIMARY KEY (`Sl No.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer table`
--
ALTER TABLE `customer table`
  MODIFY `Sl No.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
