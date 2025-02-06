-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2024 at 04:46 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sujithfurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartinfo`
--

DROP TABLE IF EXISTS `cartinfo`;
CREATE TABLE IF NOT EXISTS `cartinfo` (
  `cartNum` int NOT NULL AUTO_INCREMENT,
  `ProductName` varchar(30) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `imagePath` varchar(500) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`cartNum`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cartinfo`
--

INSERT INTO `cartinfo` (`cartNum`, `ProductName`, `Price`, `imagePath`, `Email`) VALUES
(13, 'school desk', 10000.00, 'uploads/s13.png', 'k@gmail.com'),
(5, 'school desk', 10000.00, 'uploads/s12.png', 's@gmail.com'),
(6, 'school chair', 8500.00, 'uploads/s14.png', 's@gmail.com'),
(11, 'home table', 24000.00, 'uploads/h17.png', 'k@gmail.com'),
(12, 'school chair', 8500.00, 'uploads/s14.png', 'k@gmail.com'),
(14, 'school desk', 10000.00, 'uploads/s12.png', 'k@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderview`
--

DROP TABLE IF EXISTS `orderview`;
CREATE TABLE IF NOT EXISTS `orderview` (
  `cartNum` int NOT NULL AUTO_INCREMENT,
  `Email` varchar(30) NOT NULL,
  `totalCost` int NOT NULL,
  `dateOfOrder` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Product` varchar(50) NOT NULL,
  PRIMARY KEY (`cartNum`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderview`
--

INSERT INTO `orderview` (`cartNum`, `Email`, `totalCost`, `dateOfOrder`, `Address`, `Product`) VALUES
(1, 's@gmail.com', 28500, '2024-06-24', '25/A baiyagamna', 'school desk'),
(2, 's@gmail.com', 28500, '2024-06-24', '25/A baiyagamna', 'school desk'),
(3, 's@gmail.com', 37000, '2024-06-24', '25/A baiyagamna', 'school desk'),
(4, 's@gmail.com', 37000, '2024-06-24', '25/A baiyagamna', 'school desk'),
(5, 'k@gmail.com', 32500, '2024-06-24', '25/A kaluthara', 'school chair'),
(6, 'k@gmail.com', 32500, '2024-06-24', '25/A kaluthara', 'school chair');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `AddID` varchar(8) NOT NULL,
  `ProductName` varchar(50) NOT NULL,
  `Categories` varchar(10) NOT NULL,
  `Price` int NOT NULL,
  `imagePath` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`AddID`, `ProductName`, `Categories`, `Price`, `imagePath`) VALUES
('003', 'school desk', 'School', 10000, 'uploads/s12.png'),
('001', 'school chair', 'School', 2500, 'uploads/s11.png'),
('002', 'school chair', 'School', 8500, 'uploads/s14.png'),
('004', 'school desk', 'School', 10000, 'uploads/s13.png'),
('005', 'home table', 'home', 24000, 'uploads/h9.png'),
('006', 'home chair', 'home', 14000, 'uploads/h17.png'),
('021', 'school table', 'School', 5000, 'uploads/s20.jpg'),
('008', 'home chair', 'home', 18600, 'uploads/h3.png'),
('009', 'home chair', 'home', 20000, 'uploads/h1.png'),
('010', 'home chair', 'home', 20000, 'uploads/h10.png'),
('011', 'Home Bed', 'home', 40000, 'uploads/h14.png'),
('012', 'Home Bed', 'home', 48000, 'uploads/h12.png'),
('0013', 'Home sofa', 'home', 48000, 'uploads/h19.png'),
('014', 'Home sofa', 'home', 50000, 'uploads/h18.png'),
('015', 'Home sofa', 'home', 60000, 'uploads/h20.png'),
('016', 'Home sofa', 'home', 6000, 'uploads/h16.png'),
('017', 'Home sofa', 'home', 15000, 'uploads/h7.png'),
('0018', 'school chair', 'School', 45000, 'uploads/s16.png'),
('019', 'school chair', 'School', 4000, 'uploads/s19.jpg'),
('022', 'school table', 'School', 5000, 'uploads/s18.jpg'),
('023', 'school table', 'School', 5000, 'uploads/s17.jpg'),
('024', 'school table', 'School', 5000, 'uploads/s5.png'),
('025', 'school rack', 'School', 5000, 'uploads/s2.png'),
('026', 'school rack', 'School', 10000, 'uploads/s3.png'),
('027', 'school rack', 'School', 12000, 'uploads/s4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Phone Number` int NOT NULL,
  `Address` varchar(100) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Name`, `Email`, `Password`, `Phone Number`, `Address`) VALUES
('kavesha', 'k@gmail.com', '12345', 71822715, '25/A kaluthara'),
('chanuka', 'cravikantha@gmail.com', '1234', 718242714, '22/A Galewela'),
('Sujith Furniture', 'adminsf@gmail.com', '789', 760927044, ''),
('sandun', 's@gmail.com', '123', 778242714, '25/A baiyagamna');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
