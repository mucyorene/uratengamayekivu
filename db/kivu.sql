-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 08:59 PM
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

--
-- Dumping data for table `airportservices`
--

INSERT INTO `airportservices` (`id`, `carId`, `driveType`, `numberOfpickups`, `picDate`, `names`, `email`, `phoneNumber`, `bookingNumber`, `status1`) VALUES
(2, 19, 'no', 'Pickup Three', '03/08/2021', 'Rene MUCYO TUYISENGE', 'renemucyomucici@gmail.com', '0784494820', '#19078449482003/08/2021', 'unread'),
(3, 19, 'yes', 'Pickup Two', '30/3/2021', 'Kangabe', 'carine@gmail.com', '034344', '#1903434430/3/2021', 'read');

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
(7, '09/30/2020', 'Rene MUCYO TUYISENGE', 'renemucyomucici@gmail.com', '0784494820', 'INTWALI', 'KK 190 AV', '#2209/30/20200784494820', 22, 'unread');

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
(14, 'Corolla Altis', 'Manual', 'Yes', 4, 213, 10, 'Fuel', 12300, 'Small', 'Yes small car altis', '', '5f574c1166d61.jpg', '5f574c1166d72.jpg', '5f574c1166d79.jpg', '5f574c1166d7e.jpg'),
(15, 'COROLLA Verso 2002 Voiture', 'Manual', 'No', 5, 130, 4, 'Fuel', 0, 'Small', 'Yes corolla small car', '', '5f574d76b2b2e.jpg', '5f574d76b2b34.jpg', '5f574d76b2b35.jpg', '5f574d76b2b37.jpg'),
(16, 'Honda crv', 'Automatic', 'Yes', 8, 70, 6, 'Fuel', 60000, 'Large', 'Yes Honda Amerca', '', '5f574df578b32.jpg', '5f574df578b38.jpg', '5f574df578b3a.jfif', '5f574df578b3b.jpg'),
(17, 'Hyundai Tucson', 'Automatic', 'Yes', 5, 95, 5, 'Diesel', 65000, 'Medium', 'Yes Rwanda medium Hundai', '', '5f574ee5c76eb.jpg', '5f574ee5c76f1.jpg', '5f574ee5c76f3.jpg', '5f574ee5c76f5.jpg'),
(18, 'RAVA 4 Dark Blue', 'Automatic', 'Yes', 5, 70, 6, 'Fuel', 124324, 'Medium', 'Yes Rava 4 Dark blue rav4_dark_blue', '', '5f574f6a6a2b6.jpg', '5f574f6a6a2bd.jpg', '5f574f6a6a2be.jpg', '5f574f6a6a2c0.jpg'),
(19, 'Land Cruiser V8', 'Manual', 'Yes', 5, 150, 5, 'Diesel', 0, 'Large', 'land_cruiser_v8', '', '5f57510263a6c.jpg', '5f57510263a76.jpg', '5f57510263a79.jpg', '5f57510263a7c.jpg'),
(20, 'TXL', 'Automatic', 'Yes', 5, 70, 5, 'Diesel', 60000, 'Large', 'TXL kayumba', '', '5f5751646703e.jpg', '5f57516467044.jpg', '5f57516467046.jpg', '5f57516467047.jpg'),
(21, 'RAV4 2004 SILVER', 'Automatic', 'No', 4, 130, 5, 'Fuel', 12500, 'Vans And Trucks', 'Kiyovu Yetu RAV4_2004_SILVER', '', '5f5751e7aaa68.jpg', '5f5751e7aaa6d.jpg', '5f5751e7aaa6f.jpg', '5f5751e7aaa70.jpg'),
(22, 'RAVA 2007 BLUE', 'Automatic', 'Yes', 5, 139, 5, 'Diesel', 90000, 'Premium', 'RAVA 2007 BLUE RAYON', '', '5f5752d6082eb.jpg', '5f5752d6082f1.jpg', '5f5752d6082f3.jpg', '5f5752d6082f5.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `car_rent`
--
ALTER TABLE `car_rent`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
