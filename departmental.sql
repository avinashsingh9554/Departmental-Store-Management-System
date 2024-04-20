-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 04:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `departmental`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Wheat'),
(2, 'Oil'),
(4, 'Soap'),
(5, 'Salt');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `com_id` int(3) NOT NULL,
  `com_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`com_id`, `com_name`) VALUES
(1, 'Aashirvaad '),
(2, 'Arjun'),
(4, 'Tata'),
(5, 'Patanjali'),
(6, 'Nirma');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(3) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_products` text NOT NULL,
  `cus_bill` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_email`, `cus_products`, `cus_bill`) VALUES
(3, 'Mohit', 'mohit@gmail.com', 'Tata Salt 1Kg, Saffola Gold 1Kg', '135.00'),
(4, 'Rohan ', 'rohan@gmail.com', 'Aashirvaad atta 10kg', '490.00');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `id` int(1) NOT NULL,
  `product` varchar(255) NOT NULL,
  `umber` varchar(25) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`id`, `product`, `umber`, `Price`) VALUES
(80, 'bb Royal', 'Wheat Flour', 80),
(81, 'bb Royal', 'Wheat Flour', 80),
(82, 'Daawat', 'Basmati Rice', 358),
(83, 'bb Royal', 'Wheat Flour', 80),
(84, 'bb Royal', 'Wheat Flour', 80),
(85, 'India Gate', 'Basmati Rice', 91),
(87, 'bb Royal', 'Wheat Flour', 80),
(88, 'bb Royal', 'Wheat Flour', 80);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(4) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `category_name`, `company_name`, `product_name`, `price`) VALUES
(5, 'Wheat', 'Aashirvaad ', 'Aashirvaad atta 10kg ', '490.00'),
(6, 'Wheat', 'Aashirvaad ', 'Aashirvaad atta 5kg ', '280.00'),
(7, 'Wheat', 'Arjun', 'Arjun atta 10Kg', '320.00'),
(8, 'Wheat', 'Arjun', 'Arjun atta 5Kg', '180.00'),
(9, 'Oil', 'Saffola', 'Saffola Gold 5L', '800.00'),
(10, 'Oil', 'Saffola', 'Saffola Gold 1L', '150.00'),
(11, 'Oil', 'Gagan', 'Gagan Refined 5L', '750.00'),
(12, 'soap', 'rexona', 'rexona 200g', '60.00'),
(15, 'Salt', 'Tata', 'Tata Salt Lite 1Kg', '25.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(3, 'Happy', 'happy252@gmail.com', '594a32c647c5b48f44ff18ddbc88c5e8'),
(4, 'Yash', 'yash152@gmail.com', '860597464b31f718bc28e3994d28d0f0'),
(5, 'Yash Digwal', 'yashdigwal777@gmail.com', '860597464b31f718bc28e3994d28d0f0'),
(6, 'Suraj Parkash Singh', 'suraj152@gmail.com', 'df27f12901ecfb3e3a9614e93eec3712'),
(7, 'Ankit Sharma', 'Ak7851@gmail.com', '5de52ea9d787966e8b598720255a37a7'),
(9, 'aman', 'surajparkashsinghdmk@gmail.com', '8e1bb5107991dc26ab262003af343c71'),
(10, 'sadhu', 'surajparkashsinghdmk@gmail.com', '8e1bb5107991dc26ab262003af343c71');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `com_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
