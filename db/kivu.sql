-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2020 at 09:09 AM
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

INSERT INTO `car_rent` (`carId`, `carName`, `carTransimission`, `carAirCondition`, `carSeats`, `kmPerLitre`, `doors`, `fuelType`, `carPrice`, `carType`, `carDesc`, `thumbnail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`) VALUES
(1, 'hyundai_tucson', 'Manual', 'Yes', 5, 70, 5, 'Fuel', 70000, 'Medium', 'Just for traveling with family at high zones', 'Tucson.jpg', '21cc7af6-9-91c0.jpg', '2005-hyundai-tucson-gls-2-7l-4wd-front-interior.jpg', 'Tucson.jpg', '21cc7af6-9-91c0.jpg', '2005-hyundai-tucson-gls-2-7l-4wd-front-interior.jpg'),
(2, 'HONDA', 'Manual', 'Yes', 8, 69, 5, 'Diesel', 120000, 'Large', 'This is car mostly rent by people for America, where it\' s popular at their zone', 'honda1.jpg', 'honda2.jpg', 'honda3.jpg', 'honda4.jpg', 'honda3.jpg', 'honda6.jpg'),
(3, 'Landcruser V8', 'Automatic', 'Yes', 10, 70, 6, 'Diesel', 170000, 'Large', 'Best and VIP CAR suitable for Rwanda and other officials from outside,', 'landcruserV84.jpg', 'landcruserV82.jpg', 'landcruserV81.jpg', 'landcruserV84.jpg', 'landcruserV85.jpg', 'landcruserV82.jpg'),
(4, 'RAVA 4 BLUE', 'Automatic', 'Yes', 4, 45, 5, 'Fuel', 50000, 'Premium', 'Yes premium', 'blue3.jpg', 'blue1.jpg', 'blue2.jpg', 'blue3.jpg', 'blue4.jpg', 'blue4.jpg'),
(5, 'TOYOTA COROLLA VERSO mini MPV_5_2004', 'Both', 'No', 4, 124, 4, 'Fuel', 35000, 'Small', 'Small Car to travel with your family sans problem', 'TOYOTA-Corolla-Verso-647_26.jpg', 'TOYOTA_COROLLA VERSO_mini MPV_5_2004.jpg', 'Colora verso.jpg', 'TOYOTA-Corolla-Verso-647_29.jpg', 'TOYOTA-Corolla-Verso-647_26.jpg', 'TOYOTA_COROLLA VERSO_mini MPV_5_2004.jpg'),
(6, 'Corolla Altis', 'Manual', 'No', 4, 140, 4, 'Diesel', 64981, 'Small', 'Yes there iso', 'd687725d-b-17d2.jpg', '04812041990003.jpg', '04812041990003.jpg', 'd9feb204-4-d36e.jpg', 'd687725d-b-17d2.jpg', '$0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `car_rent`
--
ALTER TABLE `car_rent`
  ADD PRIMARY KEY (`carId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `car_rent`
--
ALTER TABLE `car_rent`
  MODIFY `carId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
