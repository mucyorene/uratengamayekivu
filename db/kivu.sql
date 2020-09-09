-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 11:48 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kivu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `profile` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `profile`) VALUES
(1, 'kivurarwanda@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `airportservices`
--

CREATE TABLE `airportservices` (
  `id` int(11) NOT NULL,
  `carId` int(11) DEFAULT NULL,
  `driveType` varchar(255) DEFAULT NULL,
  `numberOfpickups` varchar(100) DEFAULT NULL,
  `picDate` varchar(255) DEFAULT NULL,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(255) DEFAULT NULL,
  `bookingNumber` varchar(100) DEFAULT NULL,
  `status1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carrentbookings`
--

CREATE TABLE `carrentbookings` (
  `id` int(11) NOT NULL,
  `datePickedUp` varchar(100) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `hNumber` varchar(100) NOT NULL,
  `streetNumber` varchar(100) DEFAULT NULL,
  `bookingCode` varchar(100) DEFAULT NULL,
  `carId` int(11) DEFAULT NULL,
  `status1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrentbookings`
--

INSERT INTO `carrentbookings` (`id`, `datePickedUp`, `names`, `email`, `phoneNumber`, `hNumber`, `streetNumber`, `bookingCode`, `carId`, `status1`) VALUES
(9, '09/16/2020', 'Kamanzi Yves', 'tuyishimeserge@gmail.com', '1 1997 8 0010624 0 00', 'Kigali rwanda', '52', '#2709/16/20201 1997 8 0010624 0 00', 27, 'unread'),
(10, '09/16/2020', 'Kamanzi Yves', 'boysonserge@gmail.com', '07801332', 'Kigali rwanda', '05', '#2709/16/202007801332', 27, 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `car_rent`
--

CREATE TABLE `car_rent` (
  `carId` int(11) NOT NULL,
  `carName` varchar(100) NOT NULL,
  `carTransimission` varchar(100) NOT NULL,
  `carAirCondition` varchar(10) NOT NULL,
  `carSeats` int(11) NOT NULL,
  `kmPerLitre` int(11) NOT NULL,
  `doors` int(11) NOT NULL,
  `fuelType` varchar(100) NOT NULL,
  `carPrice` int(11) NOT NULL,
  `carType` varchar(255) NOT NULL,
  `carDesc` varchar(255) NOT NULL,
  `trucks` varchar(100) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL,
  `photo3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_rent`
--

INSERT INTO `car_rent` (`carId`, `carName`, `carTransimission`, `carAirCondition`, `carSeats`, `kmPerLitre`, `doors`, `fuelType`, `carPrice`, `carType`, `carDesc`, `trucks`, `thumbnail`, `photo1`, `photo2`, `photo3`) VALUES
(23, 'Corolla altis', 'Automatic', 'Yes', 4, 2, 4, 'Fuel', 30, 'Small', 'Very good voiture ', '', '5f594363e73cd.jpg', '5f594363e73d5.jpg', '5f594363e73d7.jpg', '5f594363e73d9.jpg'),
(24, 'Corolla Verso', 'Manual', 'Yes', 4, 3, 4, 'Fuel', 30, 'Small', 'Very good corolla verso for travelling with your fam', '', '5f5944cf933dc.jpg', '5f5944cf933e0.jpg', '5f5944cf933e1.jpg', '5f5944cf933e2.jpg'),
(25, 'Honda crv', 'Manual', 'Yes', 5, 2, 4, 'Diesel', 35, 'Medium', 'Good conditioned Honda for travel', '', '5f59463fa4196.jpg', '5f59463fa419c.jpg', '5f59463fa419e.jpg', '5f59463fa419f.jpg'),
(26, 'TXL ', 'Automatic', 'Yes', 8, 5, 4, 'Diesel', 60, 'Large', 'VIP Car ', '', '5f59484dc1cc7.jpg', '5f59484dc1ccb.jpg', '5f59484dc1ccc.jpg', '5f59484dc1ccd.jpg'),
(27, 'V8', 'Automatic', 'Yes', 9, 4, 4, 'Fuel', 65, 'Premium', 'VIP GOOD CAR ', '', '5f594959beb38.jpg', '5f594959beb44.jpg', '5f594959beb45.jpg', '5f594959beb47.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `sentAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `names`, `email`, `subject`, `message`, `sentAt`, `status1`) VALUES
(1, 'Rene MUCYO TUYISENGE', 'renemucyomucici@gmail.com', 'Feedback about web', 'Great and great bavandimweGreat and great bavandimweGreat and great bavandimweGreat and great bavandimwe', '2020-09-09 16:43:58', 'read'),
(2, 'BIZIMANA KUNDWA Didier', 'kaydidier82@gmail.com', 'Yello rwanda', 'We want to recognize and reflskfk flsajlfja flasflj  ljlsajf998er eoereij fajfl;sajljfa fsalkfjlas  sjfosafijljdfjew fsaf a after being scanned, umurenge wa gisozi wafunze amazu uru rusaku mwumva ni imashini ishinzwe gusudira', '2020-09-09 17:50:18', 'read');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `airportservices`
--
ALTER TABLE `airportservices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carFk` (`carId`);

--
-- Indexes for table `carrentbookings`
--
ALTER TABLE `carrentbookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carFks` (`carId`);

--
-- Indexes for table `car_rent`
--
ALTER TABLE `car_rent`
  ADD PRIMARY KEY (`carId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `airportservices`
--
ALTER TABLE `airportservices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `carrentbookings`
--
ALTER TABLE `carrentbookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `car_rent`
--
ALTER TABLE `car_rent`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `airportservices`
--
ALTER TABLE `airportservices`
  ADD CONSTRAINT `carFk` FOREIGN KEY (`carId`) REFERENCES `car_rent` (`carId`) ON DELETE CASCADE;

--
-- Constraints for table `carrentbookings`
--
ALTER TABLE `carrentbookings`
  ADD CONSTRAINT `carFks` FOREIGN KEY (`carId`) REFERENCES `car_rent` (`carId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
