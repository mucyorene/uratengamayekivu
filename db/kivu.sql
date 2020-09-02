-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2020 at 05:04 PM
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
  `bookingNumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airportservices`
--

INSERT INTO `airportservices` (`id`, `carId`, `driveType`, `numberOfpickups`, `picDate`, `names`, `email`, `phoneNumber`, `bookingNumber`) VALUES
(1, 5, 'yes', 'Pickup Two', '02/26/2021', 'Rene MUCYO TUYISENGE', 'renemucyomucici@gmail.com', '0784494820', '#5078449482002/26/2021');

-- --------------------------------------------------------

--
-- Table structure for table `carrentbookings`
--

CREATE TABLE `carrentbookings` (
  `id` int(11) NOT NULL,
  `numberOfCars` varchar(100) DEFAULT NULL,
  `datePickedUp` varchar(100) DEFAULT NULL,
  `numberOfDropOffs` varchar(100) DEFAULT NULL,
  `dateReturned` varchar(100) DEFAULT NULL,
  `names` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phoneNumber` varchar(100) DEFAULT NULL,
  `streetNumber` varchar(100) DEFAULT NULL,
  `bookingCode` varchar(100) DEFAULT NULL,
  `carId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `photo3` varchar(255) NOT NULL,
  `photo4` varchar(255) NOT NULL,
  `photo5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_rent`
--

INSERT INTO `car_rent` (`carId`, `carName`, `carTransimission`, `carAirCondition`, `carSeats`, `kmPerLitre`, `doors`, `fuelType`, `carPrice`, `carType`, `carDesc`, `trucks`, `thumbnail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`) VALUES
(3, 'Landcruser V8', 'Automatic', 'Yes', 10, 70, 6, 'Diesel', 170000, 'Large', 'Best and VIP CAR suitable for Rwanda and other officials from outside,', '', 'landcruserV84.jpg', 'landcruserV82.jpg', 'landcruserV81.jpg', 'landcruserV84.jpg', 'landcruserV85.jpg', 'landcruserV82.jpg'),
(4, 'RAVA 4 BLUE', 'Automatic', 'Yes', 4, 45, 5, 'Fuel', 50000, 'Premium', 'Yes premium', '', 'blue3.jpg', 'blue1.jpg', 'blue2.jpg', 'blue3.jpg', 'blue4.jpg', 'blue4.jpg'),
(5, 'TOYOTA COROLLA VERSO mini MPV_5_2004', 'Manual', '', 4, 124, 4, '', 35000, 'Small', 'Small Car to travel with your family sans problem', '', 'Colora verso.jpg', 'TOYOTA_COROLLA VERSO_mini MPV_5_2004.jpg', 'TOYOTA-Corolla-Verso-647_26.jpg', 'TOYOTA-Corolla-Verso-647_29.jpg', 'TOYOTA_COROLLA VERSO_mini MPV_5_2004.jpg', 'Colora verso.jpg'),
(7, 'Corolla Altis', 'Automatic', 'Yes', 4, 35, 5, 'Diesel', 60000, 'Medium', 'Great voiture for fam', '', 'd687725d-b-17d2.jpg', '04812041990003.jpg', 'altis1.jpg', 'd9feb204-4-d36e.jpg', 'd687725d-b-17d2.jpg', '04812041990003.jpg'),
(8, 'TXR', 'Automatic', '', 10, 70, 6, '', 119981, 'Premium', 'VIP CAR FOR OFFICIAL', '', 'txr_thumb.jpg', 'txr_3.jpg', 'txr_2.jpg', 'txr_4.jpg', 'txr_1.jpg', 'txr_3.jpg'),
(9, 'RAV4 2004 black', 'Automatic', 'Yes', 4, 89, 5, 'Fuel', 77000, 'Medium', 'Hello Rava we want you', '', '1.jpg', '6.jpg', '4.jfif', '2.jpg', '3.jpg', '5.jpg'),
(10, 'RAV4 2006 KAKI', 'Manual', '', 5, 118, 5, '', 12780, 'Vans And Trucks', 'Yes Rwanda', '', 'ravakaki2.jpg', 'ravakaki1.jpg', 'ravakaki3.jpg', 'ravakaki2.jpg', 'ravakaki1.jpg', 'ravakaki3.jpg');

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
  `sentAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `names`, `email`, `subject`, `message`, `sentAt`) VALUES
(1, 'Rene MUCYO TUYISENGE', 'renemucyomucici@gmail.com', 'Yello rwanda', 'Hi Rwanda we love you', '0000-00-00 00:00:00'),
(2, 'Mungu', 'kc2@gmail.com', 'Failed to book', 'hello i tried to click book, but failed', '0000-00-00 00:00:00'),
(3, 'Toxxy', 'bthrey@gmail.rw', 'Feedback about web', 'Hello your web looks freat', '0000-00-00 00:00:00'),
(4, 'Serge Neg-J', 'serge@gmail.rw', 'Your domain looks like hucked', 'Hello i checked and reviewd your domain has a big issues.', '0000-00-00 00:00:00');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carrentbookings`
--
ALTER TABLE `carrentbookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `car_rent`
--
ALTER TABLE `car_rent`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
