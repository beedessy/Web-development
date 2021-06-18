-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2021 at 01:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17081298_cart_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `makeupbrushproduct`
--

CREATE TABLE `makeupbrushproduct` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makeupbrushproduct`
--

INSERT INTO `makeupbrushproduct` (`id`, `product_name`, `product_price`, `product_image`, `product_code`) VALUES
(1, 'Trio wide Brush', '300', 'Assets\\Products\\Brush\\brush1.jpg', 'b1'),
(2, 'Complete Set Brushes', '450', 'Assets\\Products\\Brush\\brush2.jpg', 'l2'),
(3, 'White Set Soft Brushes', '500', 'Assets\\Products\\Brush\\brush3.jpg', 'l3'),
(4, 'Professional Brushes', '500', 'Assets\\Products\\Brush\\brush4.jpg', 'l4'),
(5, 'Touch up Brush', '500', 'Assets\\Products\\Brush\\brush5.jpg', 'l5'),
(6, 'Trio powder Brushes', '200', 'Assets\\Products\\Brush\\brush6.jpg', 'l6'),
(7, '7 collection Brushes', '250', 'Assets\\Products\\Brush\\brush7.JPG', 'l7'),
(8, '6 collection Brushes', '300', 'Assets\\Products\\Brush\\brush8.JPG', 'l8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makeupbrushproduct`
--
ALTER TABLE `makeupbrushproduct`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
