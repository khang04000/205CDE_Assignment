-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:17 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`) VALUES
(1, 'cdc', 'cd', 'dsc', 'cdscd', 'cdsc'),
(2, 'Wong', 'Yee Khang', 'wongyeekhang@gmail.com', '012345678', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_name` varchar(1000) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `category` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_name`, `price`, `quantity`, `image`, `category`) VALUES
(1, 'Samsung Note 8', '3299.00', 6, 'note8.jpg', 'electric_appliances'),
(2, 'Huawei Mate 10', '2699.00', 1, 'mate10_3.jpg', 'electric_appliances'),
(3, 'Samsung Galaxy S8', '2599.00', 5, 's8.jpg', 'electric_appliances'),
(4, 'Iphone 8', '3699.00', 6, 'iphone8_2.jpg', 'electric_appliances'),
(5, 'Samsung Galaxy S7', '1699.00', 6, 's7.jpg', 'electric_appliances'),
(6, 'Black Chair', '120.00', 10, 'chair1.jpg', 'home_living'),
(7, 'Black Swivel Chair', '255.00', 12, 'chair2.jpg', 'home_living'),
(8, 'Roxanne Sofa', '599.00', 5, 'sofa1.jpg', 'home_living'),
(9, 'Black Computer Desk', '199.00', 3, 'table1.jpg', 'home_living'),
(10, 'Wooden Table', '299.00', 7, 'table2.jpg', 'home_living'),
(11, 'Iphone X', '5399.00', 3, 'iphone X_2.jpg', 'electric_appliances'),
(12, 'Pure Clay Mask', '34.99', 20, 'item1.jpg', 'health'),
(13, 'SENKA Perfect UV Milk', '20.00', 15, 'item2.jpg', 'health'),
(14, 'WISHTREND Advanced Serum', '89.90', 18, 'item3.jpg', 'health'),
(15, 'NH Colla-plus 3', '98.00', 30, 'item4.jpg', 'health\r\n'),
(16, 'Always First Tee', '199.00', 25, 'item1.jpg', 'mens_fashion'),
(17, 'Black Sign T-shirt', '152.00', 10, 'item2.jpg', 'mens_fashion'),
(18, 'Regular Fit Tee', '99.00', 8, 'item3.jpg', 'mens_fashion'),
(19, 'Text T-shirt', '237.00', 10, 'item4.jpg', 'mens_fashion'),
(20, 'Neck Tie Swing Top', '59.00', 5, 'item1.jpg', 'womens_fashion'),
(21, 'Love Cropped Top', '39.00', 15, 'item2.jpg', 'womens_fashion'),
(22, 'Slogan Muscle Tee', '35.00', 10, 'item3.jpg', 'womens_fashion'),
(23, 'Embroidered Neckline Tee', '35.00', 10, 'item4.jpg', 'womens_fashion'),
(24, 'Elliptical Exercise Bike', '379.00', 5, 'item1.jpg', 'sport'),
(25, 'VIGOR FITNESS Orbitrac ', '333.00', 5, 'item2.jpg', 'sport'),
(26, 'Lexcon Elliptical Bike ', '328.00', 5, 'item3.jpg', 'sport'),
(27, 'VIGOR Running Machine', '929.00', 5, 'item4.jpg', 'sport');

-- --------------------------------------------------------

--
-- Table structure for table `item_order`
--

CREATE TABLE `item_order` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `item_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_order`
--

INSERT INTO `item_order` (`id`, `user_id`, `name`, `contact`, `address`, `item_id`, `quantity`) VALUES
(1, 2, 'Wong Yee Khang', '0123456789', 'Penang', 2, 1),
(2, 3, 'Wong Yee Khang', '0123456789', 'Penang', 1, 1),
(3, 1, 'Wong Yee Khang', '019-5778392', 'Penang', 1, 1),
(4, 1, 'Wong Yee Khang', '019-5778392', 'Butterworth', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'wong', 'wong123'),
(2, 'aaa', 'aaa123'),
(3, 'test', 'test12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
