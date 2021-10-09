-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 10:34 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carts`
--

-- --------------------------------------------------------

--
-- Table structure for table `pc`
--

CREATE TABLE `pc` (
  `products` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `pc` (`products`) VALUES
('Amd FX'),
('Samsung Evo 8 gb'),
('MSI'),
('Nvidia Geforce Titan V'),
('Intel Core i7'),
('Intel Core i7'),
('Corsair Vengeance 8GB'),
('Intel Core i7'),
('Intel Core i7'),
('Corsair Vengeance 8GB'),
('Corsair Vengeance 8GB');

-- --------------------------------------------------------

--
-- Table structure for table `scabc`
--

CREATE TABLE `scabc` (
  `products` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scabc`
--

INSERT INTO `scabc` (`products`) VALUES
('Corsair Vengeance 8GB'),
('Intel Core i7'),
('Corsair Vengeance 8GB'),
('AMD Radeon RX580'),
('Zebronics 450 W'),
('AMD Radeon RX580'),
('AMD Radeon RX580'),
('AMD Radeon RX580'),
('Intel Core i7'),
('Corsair Vengeance 8GB'),
('Gigabyte'),
('AMD Radeon RX580'),
('Intel Core i5'),
('Transcend Mega 8 GB'),
('Zebronics'),
('Nvidia Geforce 1070');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
