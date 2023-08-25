-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 12:15 PM
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
-- Database: `maharlikaph`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productCat` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(255) NOT NULL,
  `productQty` varchar(255) NOT NULL,
  `productDes` varchar(255) NOT NULL,
  `productImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tbl`
--

INSERT INTO `cart_tbl` (`userID`, `productID`, `productCat`, `productName`, `productPrice`, `productQty`, `productDes`, `productImg`) VALUES
(3, 13, 'Cup', 'Salakot', '300', '10', 'Wooden Salakot', '32379.jpg'),
(3, 12, 'Walis', 'Walis', '150', '20', 'Walis\r\n', '53114.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `productID` int(11) NOT NULL,
  `productCat` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productDes` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productQty` int(11) NOT NULL,
  `productImg` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`productID`, `productCat`, `productName`, `productDes`, `productPrice`, `productQty`, `productImg`, `userID`) VALUES
(9, 'Lamp', 'Honey Combe', 'Light and Airy, these handcrafted lighting pieces weaves their own magic and brings great ambience. A conversation piece in itself', 5000, 2, '33940.jpg', 0),
(10, 'Holder', 'Candle Holder', 'Bamboo Candle Holder', 2000, 5, '47991.jpg', 0),
(11, 'Basket', 'Bamboo Basket', 'Bamboo made Basket', 300, 16, '32101.jpg', 0),
(12, 'Walis', 'Walis', 'Walis\r\n', 150, 20, '53114.jpg', 0),
(13, 'Cup', 'Salakot', 'Wooden Salakot', 300, 10, '32379.jpg', 0),
(14, 'Bag', 'Wooden Bag', 'Wooden Bag', 2500, 4, '64835.jpg', 0),
(15, 'Bag', 'Woden Bag', 'Wooden Bag', 2000, 4, '74490.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `userID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`userID`, `fname`, `lname`, `phone`, `email`, `password`, `address`) VALUES
(1, 'John Lance', 'Tumala', '09275410852', 'sample@gmail.com', 'a0dbbe668d50e1dc837ab2249f4cb4a0247b7c2f', 'Arellano Street'),
(2, 'Kim', 'Tumala', '09876543212', 'kimeh@gmail.com', 'b1b3773a05c0ed0176787a4f1574ff0075f7521e', 'Arellano Street'),
(3, 'Lance', 'Tumala', '09123456789', 'lancetumala@sample.com', 'a0dbbe668d50e1dc837ab2249f4cb4a0247b7c2f', 'Sample Ave');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
