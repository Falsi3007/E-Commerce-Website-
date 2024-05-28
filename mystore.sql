-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 02:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(2, 'Colligens'),
(3, 'Industrial chemical'),
(4, 'Commercial chemical'),
(5, 'School Item'),
(9, 'terrere');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(3, 'Conical flask'),
(4, 'Buret'),
(5, 'Beaker'),
(6, 'Thermometer'),
(7, 'Board'),
(8, 'black board'),
(10, 'jjjj');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(1, 7, 290865706, 2, 2, 'pending'),
(2, 7, 1897320151, 2, 1, 'pending'),
(3, 7, 382004229, 2, 1, 'pending'),
(4, 7, 398983703, 2, 1, 'pending'),
(5, 7, 1977298688, 6, 1, 'pending'),
(6, 7, 1534351147, 6, 1, 'pending'),
(7, 8, 236798222, 7, 1, 'pending'),
(8, 8, 759436903, 3, 1, 'pending'),
(9, 9, 1045915664, 3, 1, 'pending'),
(10, 9, 1504703683, 8, 2, 'pending'),
(11, 9, 1909627816, 9, 3, 'pending'),
(12, 9, 293893848, 4, 1, 'pending'),
(13, 9, 1623924038, 2, 1, 'pending'),
(14, 9, 732547154, 6, 1, 'pending'),
(15, 9, 751787204, 2, 1, 'pending'),
(16, 11, 640701059, 2, 1, 'pending'),
(17, 11, 72584503, 4, 1, 'pending'),
(18, 11, 1005330888, 4, 2, 'pending'),
(19, 11, 1428960568, 8, 2, 'pending'),
(20, 11, 1928293301, 6, 2, 'pending'),
(21, 12, 103774880, 8, 2, 'pending'),
(22, 12, 1014017769, 4, 1, 'pending'),
(23, 12, 602915331, 7, 5, 'pending'),
(24, 12, 238555707, 6, 2, 'pending'),
(25, 12, 2011973681, 8, 2, 'pending'),
(26, 12, 982126077, 4, 2, 'pending'),
(27, 12, 1366907628, 4, 2, 'pending'),
(28, 12, 996364131, 7, 2, 'pending'),
(29, 12, 1622724189, 7, 3, 'pending'),
(30, 12, 1386847526, 7, 2, 'pending'),
(31, 12, 2146036132, 7, 2, 'pending'),
(32, 12, 127050170, 7, 1, 'pending'),
(33, 12, 757688772, 8, 2, 'pending'),
(34, 12, 999864457, 8, 2, 'pending'),
(35, 12, 1278906562, 6, 2, 'pending'),
(36, 12, 1483474688, 6, 2, 'pending'),
(37, 12, 836764687, 8, 2, 'pending'),
(38, 12, 1556423525, 11, 2, 'pending'),
(39, 12, 379198561, 11, 7, 'pending'),
(40, 12, 655407765, 8, 1, 'pending'),
(41, 12, 802104985, 10, 2, 'pending'),
(42, 12, 461567682, 8, 5, 'pending'),
(43, 12, 2142319517, 4, 2, 'pending'),
(44, 12, 1420233365, 8, 1, 'pending'),
(45, 12, 827465969, 6, 2, 'pending'),
(46, 12, 1535675701, 6, 2, 'pending'),
(47, 12, 900750409, 8, 3, 'pending'),
(48, 12, 1256654893, 6, 2, 'pending'),
(49, 12, 1551026784, 7, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(4, 'Conical flask', 'Why are conical flasks...are usefull', 'conical flask,Conical flask,flask,Mixing tool', 3, 0, 'conical.jpg', 'coni.jpg', 'c2.jpg', '100', '2023-03-02 18:33:37', 'true'),
(6, 'Buret', 'burette, also spelled buret, laboratory apparatus used.', 'Buret,Burette,buret,burette', 4, 0, 'burette', 'burettewith', 'burette', '70', '2023-03-02 18:34:03', 'true'),
(7, 'Beaker', 'Beakers are useful as a reaction container.', 'beaker,Beaker', 5, 0, 'bearker.jpg', 'bearker.jpg', 'bearker.jpg', '90', '2023-03-02 18:32:55', 'true'),
(8, 'Thermometer', 'A thermometer is an instrument that measures temperature.', 'thermometer,Thermometer', 6, 0, 'thermometer.png', 'Thermometer2.png', 't3.jpg', '200', '2023-03-02 18:34:30', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(5, 7, 70, 1977298688, 1, '2022-09-26 16:26:14', 'pending'),
(6, 7, 70, 1534351147, 1, '2022-09-20 17:42:32', 'pending'),
(7, 8, 90, 236798222, 1, '2022-09-20 17:52:13', 'pending'),
(8, 8, 50, 759436903, 1, '2022-09-20 17:55:54', 'pending'),
(9, 9, 50, 1045915664, 1, '2022-09-26 17:14:16', 'complete'),
(10, 9, 400, 1504703683, 1, '2022-09-26 17:18:39', 'complete'),
(11, 9, 30, 1909627816, 1, '2022-09-21 12:25:37', 'pending'),
(12, 9, 100, 293893848, 1, '2022-09-26 15:46:28', 'pending'),
(13, 9, 50, 1623924038, 1, '2022-09-26 15:50:22', 'pending'),
(14, 9, 120, 732547154, 2, '2022-09-26 16:26:52', 'pending'),
(15, 9, 50, 751787204, 1, '2022-09-26 16:31:04', 'pending'),
(16, 11, 50, 640701059, 1, '2022-09-27 16:31:27', 'complete'),
(17, 11, 100, 72584503, 1, '2022-09-28 13:15:10', 'complete'),
(18, 11, 200, 1005330888, 1, '2022-09-29 14:22:10', 'complete'),
(19, 11, 400, 1428960568, 1, '2022-11-02 16:21:24', 'pending'),
(20, 11, 140, 1928293301, 1, '2022-11-02 16:46:16', 'pending'),
(21, 11, 0, 14209262, 0, '2022-11-02 16:46:28', 'pending'),
(22, 12, 400, 103774880, 1, '2022-11-03 07:02:12', 'complete'),
(23, 12, 100, 1014017769, 1, '2022-11-03 07:02:21', 'complete'),
(24, 12, 450, 602915331, 1, '2022-11-03 07:02:28', 'complete'),
(25, 12, 140, 238555707, 1, '2022-11-03 07:42:09', 'complete'),
(26, 12, 400, 2011973681, 1, '2022-11-05 07:37:48', 'complete'),
(27, 12, 200, 982126077, 1, '2022-11-05 10:51:09', 'complete'),
(28, 12, 200, 1366907628, 1, '2022-11-11 15:40:19', 'complete'),
(29, 12, 180, 996364131, 1, '2022-11-12 03:53:25', 'complete'),
(30, 12, 270, 1622724189, 1, '2023-04-01 07:00:49', 'complete'),
(31, 12, 180, 1386847526, 1, '2022-11-12 06:49:19', 'complete'),
(32, 12, 180, 2146036132, 1, '2023-02-21 07:29:05', 'complete'),
(33, 12, 160, 127050170, 2, '2023-03-03 09:10:52', 'complete'),
(34, 12, 400, 757688772, 1, '2022-11-12 07:06:28', 'complete'),
(35, 12, 400, 999864457, 1, '2023-01-30 16:41:04', 'complete'),
(36, 12, 140, 1278906562, 1, '2022-11-12 08:08:33', 'complete'),
(37, 12, 140, 1483474688, 1, '2023-01-30 16:41:11', 'complete'),
(38, 12, 400, 836764687, 1, '2022-12-22 03:03:34', 'complete'),
(39, 12, 50, 1556423525, 1, '2024-05-19 13:55:28', 'complete'),
(40, 12, 175, 379198561, 1, '2023-01-30 16:40:45', 'pending'),
(41, 12, 200, 655407765, 1, '2023-02-21 07:28:42', 'pending'),
(42, 12, 200, 802104985, 1, '2023-03-01 16:08:25', 'pending'),
(43, 12, 1000, 461567682, 1, '2023-03-03 09:10:17', 'pending'),
(44, 12, 200, 2142319517, 1, '2023-04-01 06:59:13', 'pending'),
(45, 12, 200, 1420233365, 1, '2023-04-01 08:02:22', 'complete'),
(46, 12, 140, 827465969, 1, '2023-04-01 08:02:02', 'pending'),
(47, 12, 140, 1535675701, 1, '2023-04-01 16:27:58', 'pending'),
(48, 12, 600, 900750409, 1, '2023-04-11 07:59:03', 'pending'),
(49, 12, 140, 1256654893, 1, '2023-04-11 08:00:50', 'pending'),
(50, 12, 190, 1551026784, 2, '2024-05-19 13:54:57', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(1, 9, 1045915664, 50, 'Paypal', '2022-09-26 17:14:16'),
(2, 10, 1504703683, 400, 'Paypal', '2022-09-26 17:18:39'),
(3, 16, 640701059, 50, 'Netbanking', '2022-09-27 16:31:27'),
(4, 17, 72584503, 100, 'UPI', '2022-09-28 13:15:10'),
(5, 18, 1005330888, 200, 'Netbanking', '2022-09-29 14:22:10'),
(6, 22, 103774880, 400, 'Netbanking', '2022-11-03 07:02:12'),
(7, 23, 1014017769, 100, 'Cash on Delivery', '2022-11-03 07:02:21'),
(8, 24, 602915331, 450, 'Cash on Delivery', '2022-11-03 07:02:28'),
(9, 25, 238555707, 140, 'Netbanking', '2022-11-03 07:42:09'),
(10, 26, 2011973681, 400, 'UPI', '2022-11-05 07:37:48'),
(11, 27, 982126077, 200, 'UPI', '2022-11-05 10:51:09'),
(12, 28, 1366907628, 200, 'UPI', '2022-11-11 15:40:19'),
(13, 29, 996364131, 180, 'Cash on Delivery', '2022-11-12 03:53:25'),
(14, 31, 1386847526, 180, 'Cash on Delivery', '2022-11-12 06:49:19'),
(15, 34, 757688772, 400, 'UPI', '2022-11-12 07:06:28'),
(16, 36, 1278906562, 140, 'UPI', '2022-11-12 08:08:33'),
(17, 38, 836764687, 400, 'Netbanking', '2022-12-22 03:03:34'),
(18, 35, 999864457, 400, 'Cash on Delivery', '2023-01-30 16:41:04'),
(19, 37, 1483474688, 140, 'Netbanking', '2023-01-30 16:41:11'),
(20, 32, 2146036132, 180, 'Cash on Delivery', '2023-02-21 07:29:05'),
(21, 33, 127050170, 160, 'Cash on Delivery', '2023-03-03 09:10:52'),
(22, 30, 1622724189, 270, 'Netbanking', '2023-04-01 07:00:49'),
(23, 45, 1420233365, 200, 'Cash on Delivery', '2023-04-01 08:02:22'),
(24, 39, 1556423525, 50, 'Netbanking', '2024-05-19 13:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(12, 'raj', 'raj@mail.com', '$2y$10$5mcdbItv4Co5JWPwXcuX5OmXYQBo7b82J9rLU3En4ET/NexDDhtXm', '', '::1', 'sdfsdg', '783470583'),
(13, 'riya', '21dce135@charusat.edu.in', '$2y$10$pB8cC/KZ0xiIRz6Z1mzJF.9BxWvGk3bbtve64BsR3Qn5CEUOrs9be', '', '::1', 'porbandar', '45778990'),
(14, 'dhara', 'dhara@123', '$2y$10$ybhWew49vy3QJQ35Rf9tle.eIB8ExOQgTCLEAU6imgDhOAJO.6mcq', '', '::1', 'pbr', '3243');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
