-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 04:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guestlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbrands`
--

CREATE TABLE `carbrands` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(255) NOT NULL,
  `BrandImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbrands`
--

INSERT INTO `carbrands` (`BrandID`, `BrandName`, `BrandImage`) VALUES
(1, 'BMW', 'BMW.PNG'),
(2, 'Dodge', 'Dodge.jfif'),
(3, 'FORD', 'FORD.jfif'),
(4, 'Nissan', 'Nissan.jfif'),
(5, 'Toyota', 'Toyota.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `cartable`
--

CREATE TABLE `cartable` (
  `ID` int(11) NOT NULL,
  `CarName` varchar(255) NOT NULL,
  `CarImage1` varchar(255) NOT NULL,
  `CarImage2` varchar(255) NOT NULL,
  `CarImage3` varchar(255) NOT NULL,
  `CarImage4` varchar(255) NOT NULL,
  `CarImage5` varchar(255) NOT NULL,
  `CarBand` varchar(255) NOT NULL,
  `FuelType` varchar(255) NOT NULL,
  `CarPrices` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartable`
--

INSERT INTO `cartable` (`ID`, `CarName`, `CarImage1`, `CarImage2`, `CarImage3`, `CarImage4`, `CarImage5`, `CarBand`, `FuelType`, `CarPrices`) VALUES
(1, 'Aygo-x', '2021-toyota-aygo-x-5 1.png', '2021-toyota-aygo-x-7 2.png', '2021-toyota-aygo-x-1 3.png', '2021-toyota-aygo-x-2 4.webp', '', 'Toyota', 'Petrol', 185),
(2, 'BMW', 'BMW 1.PNG', 'BMW2.PNG', 'BMW3.PNG', 'BMW4.PNG', 'BMW5.PNG', 'BMW', '', 0),
(4, 'Charger ', 'Charger1.png', 'Charger2.png', 'Charger3.png', 'Charger4.png', 'Charger5.png', 'Dodge ', '', 0),
(6, 'Bronco', 'Bronco 1.png', 'Bronco 2.png', 'Bronco 3.png', 'Bronco 4.png', 'Bronco 5.png', 'Ford ', 'P', 222),
(7, 'Rogue', 'Nissan 1.png', 'Nissan 2.png', 'Nissan 3.png', 'Nissan 4.png', 'Nissan 5.png', 'Nissan', 'D', 333);

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `ID` int(11) NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `Image3` varchar(255) NOT NULL,
  `Image4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`ID`, `Image1`, `Image2`, `Image3`, `Image4`) VALUES
(1, 'car1.jpg', 'car2.jpg', 'car3.jpg', 'car 4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UsersID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `Email` text NOT NULL,
  `JoinDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsersID`, `Username`, `Password`, `Name`, `Surname`, `Admin`, `Email`, `JoinDate`) VALUES
(1, 'JChapman', '123', 'Jake', 'Chapman', 1, 'Jchapman@ghhwgw.co.ik', '2023-12-01 15:39:28'),
(4, 'A', '1', 'K', 'SD', 0, 'Dg@fds.co.uk', '2023-12-01 15:39:28'),
(5, 'v', '1', 'V', 'K', 0, 'Ds@fds.co.uk', '2023-12-01 15:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `users_infroamtion`
--

CREATE TABLE `users_infroamtion` (
  `ID` int(11) NOT NULL,
  `UsersID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Email` text NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `PNumber` text NOT NULL,
  `Location` geometry NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbrands`
--
ALTER TABLE `carbrands`
  ADD PRIMARY KEY (`BrandID`);

--
-- Indexes for table `cartable`
--
ALTER TABLE `cartable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`);

--
-- Indexes for table `users_infroamtion`
--
ALTER TABLE `users_infroamtion`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UsersID` (`UsersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbrands`
--
ALTER TABLE `carbrands`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cartable`
--
ALTER TABLE `cartable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_infroamtion`
--
ALTER TABLE `users_infroamtion`
  ADD CONSTRAINT `users_infroamtion_ibfk_1` FOREIGN KEY (`UsersID`) REFERENCES `users` (`UsersID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
