-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 03:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(30) DEFAULT NULL,
  `cust_address` varchar(30) DEFAULT NULL,
  `cust_city` varchar(30) DEFAULT NULL,
  `cust_state` varchar(30) DEFAULT NULL,
  `cust_zip` int(10) DEFAULT NULL,
  `cust_country` varchar(30) DEFAULT NULL,
  `cust_contact` varchar(30) DEFAULT NULL,
  `cust_email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_address`, `cust_city`, `cust_state`, `cust_zip`, `cust_country`, `cust_contact`, `cust_email`) VALUES
(10002, 'mouse house', 'gejayan yogya', 'columbus', 'OH', 43333, 'INA', 'jerry mouse', 'NULL'),
(10003, 'wascals', '1 sunny place', 'munchie', 'IN', 42222, 'USA', 'jim jones', 'rabbit@wascally.com'),
(10004, 'yosemite place', '829 riverside drive', 'phoenix', 'AZ', 88888, 'USA', 'y sam', 'sam@yosemite.com'),
(10005, 'e fudd', '4545 53rd street', 'chicago', 'IL', 54545, 'USA', 'e fudd', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_num` int(10) NOT NULL,
  `tgl_order` int(10) DEFAULT NULL,
  `cust_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_num` int(10) NOT NULL,
  `order_items` int(10) NOT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_num`, `order_items`, `prod_id`, `quantity`) VALUES
(20005, 1, 'ANV01', 10),
(20005, 2, 'ANV02', 3),
(20005, 3, 'TNT2', 5),
(20005, 4, 'FB', 1),
(20006, 1, 'JP2000', 1),
(20007, 1, 'TNT2', 100),
(20008, 1, 'FC', 50),
(20009, 1, 'FB', 1),
(20009, 2, 'OL1', 1),
(20009, 3, 'SLING', 1),
(20009, 4, 'ANV03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` varchar(30) NOT NULL,
  `vend_id` int(10) DEFAULT NULL,
  `prod_name` varchar(30) DEFAULT NULL,
  `prod_price` int(10) DEFAULT NULL,
  `prod_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `vend_id`, `prod_name`, `prod_price`, `prod_desc`) VALUES
('ANV02', 1001, '1 ton anvil', 10, '1 ton anvil, black, complete with handy hook and carrying case'),
('ANV03', 1001, '2 ton anvil', 15, '2 ton anvil, black, complete with handy hook and carrying case'),
('DTNTR', 1003, 'detonator', 13, 'detonator (plunger powered), fuses not included'),
('FB', 1003, 'bird seed', 10, 'large bag (suitable for road runners'),
('FC', 1003, 'carrots', 3, 'carrots (rabbit hunting season only)'),
('FU1', 1002, 'fuses', 3, '1 dozen, extra long'),
('JP1000', 1005, 'jetpack 1000', 35, 'jetpack 1000, intended for single use'),
('JP2000', 1005, 'jetpack 2000', 55, 'jetpack 2000, multiuse'),
('OL1', 1002, 'oil can', 9, 'oil can, red'),
('SAFE', 1003, 'safe', 50, 'safe with combination lock'),
('SLING', 1003, 'sling', 4, 'sling, one size first all'),
('TNT1', 1003, 'TNT (1 stick)', 3, 'TNT, red, single stick'),
('TNT2', 1003, 'TNT (5 stick)', 10, 'TNT, red, pack of 10 sticks');

-- --------------------------------------------------------

--
-- Table structure for table `product_notes`
--

CREATE TABLE `product_notes` (
  `note_id` varchar(30) NOT NULL,
  `prod_id` varchar(30) DEFAULT NULL,
  `note_date` varchar(30) DEFAULT NULL,
  `note_text` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vend_id` int(10) NOT NULL,
  `vend_name` varchar(30) DEFAULT NULL,
  `vend_address` varchar(30) DEFAULT NULL,
  `vend_city` varchar(30) DEFAULT NULL,
  `vend_state` varchar(30) DEFAULT NULL,
  `vend_zip` varchar(30) DEFAULT NULL,
  `vend_country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vend_id`, `vend_name`, `vend_address`, `vend_city`, `vend_state`, `vend_zip`, `vend_country`) VALUES
(1001, 'anvils r us', '123 main street', 'southfield', 'MI', '48075', 'USA'),
(1002, 'lt supplies', '500 park street', 'anytown', 'OH', '44333', 'USA'),
(1003, 'acme', '555 high street', 'los angeles', 'CA', '90046', 'USA'),
(1004, 'furball inc', '1000 5th avenue', 'new york', 'NY', '11111', 'USA'),
(1005, 'jet set', '42 galaxy road', 'london', 'NULL', 'N16 6PS', 'ENGLAND'),
(1006, 'joets et ours', '1 rue amusement', 'paris', 'NULL', '45678', 'FRANCE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_num`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_num`,`order_items`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`),
  ADD KEY `vend_id` (`vend_id`);

--
-- Indexes for table `product_notes`
--
ALTER TABLE `product_notes`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vend_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`cust_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`vend_id`) REFERENCES `vendors` (`vend_id`);

--
-- Constraints for table `product_notes`
--
ALTER TABLE `product_notes`
  ADD CONSTRAINT `product_notes_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
