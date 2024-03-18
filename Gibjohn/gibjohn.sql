-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 10:57 PM
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
-- Database: `gibjohn`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE `studentdb` (
  `StudentID` int(20) NOT NULL COMMENT 'Starts with 1',
  `Studentname` varchar(20) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL COMMENT '@GibJohn.com',
  `TutorID` int(20) NOT NULL COMMENT 'Starts with 8',
  `Date of Create` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tutordb`
--

CREATE TABLE `tutordb` (
  `TutorID` int(20) NOT NULL DEFAULT 8000 COMMENT 'Starts with 8',
  `Tutorname` varchar(20) NOT NULL,
  `Email` text NOT NULL COMMENT '@GibJohn.com',
  `Password` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `Date of Create` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `StudentID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tutordb`
--

INSERT INTO `tutordb` (`TutorID`, `Tutorname`, `Email`, `Password`, `PhoneNumber`, `Date of Create`, `StudentID`) VALUES
(80001, 'Joe Doe', 'JDoe@GibJohn.com', '123', '01245 854758', '2024-02-17 15:16:47.815082', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentdb`
--
ALTER TABLE `studentdb`
  ADD PRIMARY KEY (`StudentID`);

--
-- Indexes for table `tutordb`
--
ALTER TABLE `tutordb`
  ADD PRIMARY KEY (`TutorID`),
  ADD UNIQUE KEY `StudentID` (`StudentID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentdb`
--
ALTER TABLE `studentdb`
  ADD CONSTRAINT `studentdb_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `tutordb` (`StudentID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
