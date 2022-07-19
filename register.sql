-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 04, 2020 at 05:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library2`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `transactionID` int(10) NOT NULL,
  `bkID` int(10) NOT NULL,
  `bkNM` varchar(100) NOT NULL,
  `usID` int(10) NOT NULL,
  `usNM` varchar(100) NOT NULL,
  `issuedate` date NOT NULL DEFAULT current_timestamp(),
  `setdate` date NOT NULL DEFAULT current_timestamp(),
  `returndate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`transactionID`, `bkID`, `bkNM`, `usID`, `usNM`, `issuedate`, `setdate`, `returndate`, `status`, `date`) VALUES
(9, 1026, 'Technology', 3, 'Giancarlo Hancock', '2020-12-01', '2020-12-02', '2020-12-02', 'Returned', '2020-12-03'),
(10, 1027, 'Technology', 3, 'Giancarlo Hancock', '2020-12-01', '2020-12-02', '2020-12-02', 'Returned', '2020-12-03'),
(11, 1026, 'Technology', 3, 'Giancarlo Hancock', '2020-12-01', '2020-12-02', '2020-12-02', 'Returned', '2020-12-03'),
(12, 1026, 'Technology', 3, 'Giancarlo Hancock', '2020-12-02', '2020-12-01', '2020-12-01', 'Returned', '2020-12-03'),
(13, 1047, 'Roads', 4, 'Jaydon Patton', '2020-12-03', '2020-12-04', '2020-12-04', 'Returned', '2020-12-03'),
(14, 1045, 'Engineering', 4, 'Jaydon Patton', '2020-12-01', '2020-12-02', '2020-12-02', 'Returned', '2020-12-03'),
(15, 1036, 'Science', 4, 'Jaydon Patton', '2020-12-03', '2020-12-05', '2020-12-05', 'Returned', '2020-12-03'),
(16, 1017, 'Environment', 5, 'William Griffith', '2020-12-01', '2020-12-03', '2020-12-01', 'Pending', '2020-12-03'),
(17, 1054, 'Chemical', 6, 'Maxwell Travis', '2020-12-03', '2020-12-04', '2020-12-03', 'Issued', '2020-12-03'),
(18, 1047, 'Roads', 5, 'William Griffith', '2020-12-04', '2020-12-11', '2020-12-04', 'Issued', '2020-12-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`transactionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `transactionID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
