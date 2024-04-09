-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 06:58 AM
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
-- Database: `boutique`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) UNSIGNED NOT NULL,
  `ADMIN_ID` varchar(6) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `ADMIN_ID`, `PASSWORD`) VALUES
(1, '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `PHONE` varchar(50) NOT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `COMMENT` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `NAME`, `PHONE`, `EMAIL`, `COMMENT`) VALUES
(1, 'kritima shrestha', '9812345678', 'kritima@gmail.com', 'all good.'),
(3, 'rockey', '9812345678', 'rocky@gmail.com', 'good'),
(4, 'nikesh', '1234567890', 'nikesh@gmail.com', 'all good.');

-- --------------------------------------------------------

--
-- Table structure for table `lehenga`
--

CREATE TABLE `lehenga` (
  `ID` int(100) UNSIGNED NOT NULL,
  `LEHENGA_NAME` varchar(200) NOT NULL,
  `PRICE` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lehenga`
--

INSERT INTO `lehenga` (`ID`, `LEHENGA_NAME`, `PRICE`, `Image`) VALUES
(9, 'Bridal Lehenga', '60000', 'uploaded_img/menu1.jpg'),
(16, 'Daura Surwal', '30000', 'uploaded_img/daura.webp'),
(18, 'Mirror Lehenga', '400000', 'uploaded_img/menu10.avif'),
(24, 'kurtha red', '10000', 'uploaded_img/kurtha3.webp'),
(26, 'Mirror kurtha', '70000', 'uploaded_img/kurtha9.jpg'),
(28, 'abc', '2000', 'uploaded_img/baby5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(10) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `NAME`, `EMAIL`, `PHONE`, `PASSWORD`) VALUES
(1, 'Kritima', 'kritima@gmail.com', '9812345679', 'kritima'),
(2, 'kri', 'kri@gmail.com', '9176523423', 'kri'),
(3, 'ram', 'ram@gmail.com', '9065443221', 'ram'),
(4, 'kk', 'kk@gmail.com', '746456585', 'kk'),
(5, 'jenisha s', 'j@gmail.com', '9812456081', '12'),
(6, 'surag', 'surag@gmail.com', '9841111111', 'GARUS'),
(7, 'surag', 'surag@gmail.com', '9841111111', 'GARUS'),
(8, 'sarif', 'sarif@gmail.com', '9841222222', 'sir'),
(9, 'nischal', 'nischal@gmail.com', '9811111111', '12'),
(10, 'Creation', 'creation@gmail.com', '1234567890', '123'),
(11, 'ram', 'ram@gmail.com', '1234567890', '123');

-- --------------------------------------------------------

--
-- Table structure for table `skjorder`
--

CREATE TABLE `skjorder` (
  `ID` int(11) NOT NULL,
  `CUSTOMER_NAME` varchar(40) NOT NULL,
  `PRODUCT_NAME` varchar(120) NOT NULL,
  `QUANTITY` int(60) NOT NULL,
  `TOTAL_PAYMENT` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skjorder`
--

INSERT INTO `skjorder` (`ID`, `CUSTOMER_NAME`, `PRODUCT_NAME`, `QUANTITY`, `TOTAL_PAYMENT`) VALUES
(4, 'kritish', 'Plain Black 3 Piece Suit', 1, '16000'),
(5, 'kri', 'Velvet Lehenga', 1, '50000'),
(6, 'kkk', 'Green Lehenga', 12, '720000'),
(9, 'Jenisha', 'Suit Set', 1, '10000'),
(10, 'sarif', 'Suit Set', 3, '30000'),
(11, 'sarif', 'Bridal Lehenga', 0, '0'),
(12, 'kkk', 'Mirror kurtha', 1, '70000'),
(13, 'creation', 'kurtha red', 1, '10000'),
(14, 'ram', 'Daura Surwal', 2, '60000'),
(15, '', 'Daura Surwal', 2, '60000'),
(16, 'Creation', 'Bridal Lehenga', 9, '540000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lehenga`
--
ALTER TABLE `lehenga`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skjorder`
--
ALTER TABLE `skjorder`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lehenga`
--
ALTER TABLE `lehenga`
  MODIFY `ID` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `skjorder`
--
ALTER TABLE `skjorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
