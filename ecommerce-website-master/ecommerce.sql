-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 05:04 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Kellogs Museli', 300),
(2, 'Paneer', 50),
(3, 'Pulses', 35),
(4, 'Bread', 17),
(5, 'Masala', 30),
(6, 'Maggi', 80),
(7, 'Oil', 50),
(8, 'Wheat', 350),
(9, 'Iphone', 20000),
(10, 'Redmi', 10000),
(11, 'HP', 60000),
(12, 'DELL', 70000),
(13, 'Earpods', 180),
(14, 'Neckband', 251),
(15, 'Sony Watch', 1500),
(16, 'Fastrack Watch', 3500);
(17, 'Tomato', 10);
(18, 'Strawberry', 7);
(19, 'Peas', 7);
(20, 'Watermelon', 60);
(21, 'Grapes', 60);
(22, 'Lady Finger', 30);
(23, 'Potato', 7);
(24, 'Onion', 80);
(25, 'Notebook', 22);
(26, 'Ball Pen', 4);
(27, 'Gel Pen', 6);
(28, 'Pouch', 15);
(29, 'Highlighter', 22);
(30, 'Pencil', 2);
(31, 'Fevicol', 10);
(32, 'Oil Pastels', 95);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` int(10) NOT NULL,
  `registration_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email_id`, `first_name`, `last_name`, `phone`, `registration_time`, `password`) VALUES
(65, 'sharew5m123@gmail.com', 'reys', 'rudt', 0, '2019-03-18 13:46:33', 'e4f194cba29960e12d8b8f1bfedc972b'),
(66, 'sgah234@gmail.com', 'werty', 'erty', 0, '2019-03-18 13:55:46', 'e10adc3949ba59abbe56e057f20f883e'),
(67, 'sham1234@gmail.com', 'Sham', 'das', 0, '2019-03-19 07:37:46', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

CREATE TABLE `users_products` (
  `id` int(34) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Added To Cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `item_id`, `status`) VALUES
(11, 67, 6, 'Confirmed'),
(17, 67, 1, 'Confirmed'),
(18, 67, 5, 'Confirmed'),
(19, 67, 6, 'Confirmed'),
(20, 67, 1, 'Confirmed'),
(23, 67, 1, 'Confirmed'),
(24, 67, 2, 'Confirmed'),
(25, 67, 9, 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_products`
--
ALTER TABLE `users_products`
  ADD CONSTRAINT `users_products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_products_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
