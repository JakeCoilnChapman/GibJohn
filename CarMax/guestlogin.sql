-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 12:53 AM
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
-- Database: `guestlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbrands`
--

CREATE TABLE `carbrands` (
  `BrandID` int(11) NOT NULL,
  `BrandName` varchar(255) NOT NULL,
  `BrandImage` text NOT NULL,
  `a` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carbrands`
--

INSERT INTO `carbrands` (`BrandID`, `BrandName`, `BrandImage`, `a`) VALUES
(1, 'BMW', 'BMW.PNG', ''),
(2, 'Dodge', 'Dodge.jfif', ''),
(3, 'FORD', 'FORD.jfif', ''),
(4, 'Nissan', 'Nissan.jfif', ''),
(5, 'Toyota', 'Toyota.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `cartable`
--

CREATE TABLE `cartable` (
  `CarID` int(11) NOT NULL,
  `CarName` varchar(255) NOT NULL,
  `CarDespic` varchar(255) NOT NULL,
  `CarImage1` varchar(255) NOT NULL,
  `CarImage2` varchar(255) NOT NULL,
  `CarImage3` varchar(255) NOT NULL,
  `CarImage4` varchar(255) NOT NULL,
  `CarImage5` varchar(255) NOT NULL,
  `BrandID` int(11) NOT NULL,
  `CarBand` varchar(255) NOT NULL,
  `FuelType` varchar(255) NOT NULL,
  `CarPrices` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartable`
--

INSERT INTO `cartable` (`CarID`, `CarName`, `CarDespic`, `CarImage1`, `CarImage2`, `CarImage3`, `CarImage4`, `CarImage5`, `BrandID`, `CarBand`, `FuelType`, `CarPrices`) VALUES
(1, 'Aygo-x', 'The Aygo X is equipped with a reliable and efficient engine that optimizes fuel consumption, making it an economical choice for daily commuting and long drives.', '2021-toyota-aygo-x-5 1.png', '2021-toyota-aygo-x-7 2.png', '2021-toyota-aygo-x-1 3.png', '2021-toyota-aygo-x-2 4.webp', '', 0, 'Toyota', 'Petrol', 185),
(2, 'BMW', 'The BMW 8 Series is a range of grand tourer coupes and convertibles produced by BMW. ', 'BMW 1.PNG', 'BMW2.PNG', 'BMW3.PNG', 'BMW4.PNG', 'BMW5.PNG', 0, 'BMW', '', 0),
(3, 'Charger ', 'possessed by a 807-horsepower Supercharged 6.2L HEMI® High-Output SRT V8 engine, the 2023 Dodge Charger SRT Redeye Jailbreak lives and breathes pure performance, leading its class in torque and horsepower6.', 'Charger1.png', 'Charger2.png', 'Charger3.png', 'Charger4.png', 'Charger5.png', 0, 'Dodge ', '', 0),
(4, 'Bronco', 'The Ford Bronco is a model line of SUVs manufactured and marketed by Ford. ', 'Bronco 1.png', 'Bronco 2.png', 'Bronco 3.png', 'Bronco 4.png', 'Bronco 5.png', 0, 'Ford ', 'P', 222),
(5, 'Rogue', 'The Nissan Rogue is a compact crossover SUV produced by the Japanese automobile manufacturer Nissan. ', 'Nissan 1.png', 'Nissan 2.png', 'Nissan 3.png', 'Nissan 4.png', 'Nissan 5.png', 0, 'Nissan', 'D', 333);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivered_to` varchar(150) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `delivered_to`, `phone_no`, `deliver_address`, `pay_method`, `pay_status`, `order_status`, `order_date`) VALUES
(1, 2, 'Self', '9802234675', 'Matepani-12', 'Cash', 0, 0, '2022-04-10'),
(3, 2, 'Test  Firstuser', '980098322', 'matepani-12', 'Khalti', 1, 0, '2022-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServicesID` int(11) NOT NULL,
  `Services` text NOT NULL,
  `Decription` text NOT NULL,
  `Prices` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServicesID`, `Services`, `Decription`, `Prices`) VALUES
(1, 'Interim Service', '50 point, 6,000 miles inspection, Essential maintenance tasks to keep your vehicle running smoothly, Save when booking with an MOT', 150),
(2, 'Full Service', '77 point\r\n12,000 miles inspection\r\nA more detailed maintenance checkup than an interim service\r\nSave when booking with an MOT', 210),
(3, 'Major Service', '77 point, 24,000 miles inspection\r\nAn extensive and thorough maintenance option\r\nSave when booking with an MOT', 260),
(4, 'Oil and Filter Change', 'Lubricates key components and maintains performance\r\nOil replaced is to manufacturer specification\r\nUpgrade to a Service for additional checks', 110),
(5, 'Major Service + MOT Bundle', 'MOT + 77 point, 24,000 miles inspection\r\nAn extensive and thorough maintenance option\r\nSave when booking together, on the same day or different days\r\n', 275);

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
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `TestDriveID` int(11) NOT NULL,
  `CarID` int(11) NOT NULL,
  `UsersInforID` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`TestDriveID`, `CarID`, `UsersInforID`, `Date`) VALUES
(1, 1, 1, '2023-12-20 23:23:00');

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
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsersID`, `Username`, `Password`, `Name`, `Surname`, `Admin`, `Email`) VALUES
(1, 'JChapman', '123', 'Jake', '', 1, 'Jchapman@ghhwgw.co.ik'),
(5, 'a', '123', 'j', 'a', 0, 'Ds@fds.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `users_infroamtion`
--

CREATE TABLE `users_infroamtion` (
  `UsersInforID` int(11) NOT NULL,
  `UsersID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Email` text NOT NULL,
  `Admin` tinyint(1) NOT NULL,
  `PNumber` text NOT NULL,
  `Location` text NOT NULL,
  `Join_Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_infroamtion`
--

INSERT INTO `users_infroamtion` (`UsersInforID`, `UsersID`, `Username`, `Name`, `Surname`, `DOB`, `Email`, `Admin`, `PNumber`, `Location`, `Join_Date`) VALUES
(1, 5, 'a', 'j', 'a', '2023-11-30', 'Ds@fds.co.uk', 0, '136216', 'Barnstaple', '2023-12-08 16:32:16');

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
  ADD PRIMARY KEY (`CarID`),
  ADD KEY `BrandID` (`BrandID`) USING BTREE;

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServicesID`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`TestDriveID`),
  ADD UNIQUE KEY `CarID` (`CarID`,`UsersInforID`),
  ADD KEY `UsersInforID` (`UsersInforID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`);

--
-- Indexes for table `users_infroamtion`
--
ALTER TABLE `users_infroamtion`
  ADD PRIMARY KEY (`UsersInforID`),
  ADD KEY `UsersID` (`UsersID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbrands`
--
ALTER TABLE `carbrands`
  MODIFY `BrandID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cartable`
--
ALTER TABLE `cartable`
  MODIFY `CarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ServicesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `TestDriveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD CONSTRAINT `testdrive_ibfk_1` FOREIGN KEY (`UsersInforID`) REFERENCES `users_infroamtion` (`UsersInforID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testdrive_ibfk_2` FOREIGN KEY (`CarID`) REFERENCES `cartable` (`CarID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_infroamtion`
--
ALTER TABLE `users_infroamtion`
  ADD CONSTRAINT `users_infroamtion_ibfk_1` FOREIGN KEY (`UsersID`) REFERENCES `users` (`UsersID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
