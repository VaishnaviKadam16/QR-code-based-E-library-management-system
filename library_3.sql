-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Nov 02, 2020 at 01:39 PM
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
-- Database: `library_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admins` (
  `adminid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `name`, `email`, `phone`, `password`) VALUES
(1, 'username', 'mail@mail.com', '9999999999', '$2y$10$LogRxndo9nDfp'),
(2, 'username', 'mail1@mail.com', '9999999999', '$2y$10$EA97vYWZG48bCsrfLmv1deouHcb02cia2oFHQha2i.jhARRfeCosO');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(10) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `edition` varchar(10) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookname`, `author`, `publisher`, `edition`, `isbn`, `category`, `description`) VALUES
(1002, 'bookname', 'book', 'publisher', '1', '', 'Handicrafts. Arts and crafts', 'description'),
(1003, 'engineering', 'engineer', 'engineers', '1', '', 'Mining engineering. Metallurgy', 'engineering'),
(1004, 'engineering book', 'author', 'engineers', '1', '', 'Hydraulic Engineering. Ocean engineering', 'engineering book'),
(1005, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1006, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1007, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1008, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1009, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1010, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1011, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1012, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications'),
(1013, 'Engineering Book', 'Author', 'Engg Publications', '1', '', 'Handicrafts. Arts and crafts', 'Engineering Book by Author Engg Publications');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `branch`, `year`, `rollno`, `phone`, `email`, `password`) VALUES
(2, 'abc', 'Mechanical Engineering', 'BE', '1', '9999999999', 'mail1@mail.com', '$2y$10$Bz0ifEcgBA5SKrR/Kb9lo.A5Y.9lpa1/lsu64TC0OZFLeHb8Gl/xW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admins`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
