-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 08:13 AM
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
-- Database: `devxpart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employe`
--

CREATE TABLE `tbl_employe` (
  `id` int(16) NOT NULL,
  `name` varchar(250) NOT NULL,
  `reg` varchar(200) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `salary` int(10) NOT NULL,
  `joining_month` varchar(30) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`id`, `name`, `reg`, `position`, `email`, `phone`, `salary`, `joining_month`, `status`) VALUES
(1, 'Ariful Islam', '245425', 'Project Manager', 'ariful3c@gmail.com', '01731454650', 100000, 'January 2023', 1),
(3, 'dfsdffgd', '4155456', 'Asisten Manager', 'dsfsdfd@gmail.com', '01736958450', 2500285, 'January 2023', 2),
(4, 'Ariful Islam', '245425', 'Project Manager', 'ariful3c@gmail.com', '01731454650', 100000, 'January 2023', 1),
(5, 'Ariful Islam', '245425', 'Project Manager', 'ariful3c@gmail.com', '01731454650', 100000, 'January 2023', 2),
(6, 'Ariful Islam', '245425', 'Project Manager', 'ariful3c@gmail.com', '01731454650', 100000, 'January 2023', 1),
(7, 'Ariful Islam', '245425', 'Project Manager', 'ariful3c@gmail.com', '01731454650', 100000, 'January 2023', 2),
(8, 'Rakibul Islam', '245425', 'Project Manager', 'rakib3c@gmail.com', '01731454650', 100000, 'January 2023', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
