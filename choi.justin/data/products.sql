-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 04:32 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `choijustin_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(13) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `name` varchar(46) NOT NULL,
  `category` varchar(46) NOT NULL,
  `url` varchar(256) NOT NULL,
  `thumbnail` varchar(256) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `description` text NOT NULL,
  `quantity` decimal(9,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `name`, `category`, `url`, `thumbnail`, `price`, `description`, `quantity`) VALUES
(1, '2021-05-01 00:00:00', '2021-05-11 16:23:30', 'White Rubik’s cube', 'Product', 'img/product1.jpg', 'img/product1.jpg', 40.00, 'Rubik’s cube painted in white', 20),
(2, '2021-05-03 00:00:00', '2021-05-11 16:23:30', 'White Calculator', 'Product', 'img/product2.jpg', 'img/product2.jpg', 32.00, 'Calculator painted in white', 30),
(3, '2021-05-04 00:00:00', '2021-05-11 16:23:30', 'White Macintosh', 'Product', 'img/product3.jpg', 'img/product3.jpg', 1440.00, 'Macintosh painted in white', 5),
(4, '2021-05-05 00:00:00', '2021-05-11 16:23:30', 'White Polaroid', 'Product', 'img/product4.jpg', 'img/product4.jpg', 121.00, 'Polaroid painted in white', 10),
(5, '2021-05-07 00:00:00', '2021-05-11 16:23:30', 'DSLR', 'Product', 'img/product5.jpg', 'img/product5.jpg', 346.00, 'DSLR in white and black', 5),
(6, '2021-05-08 00:00:00', '2021-05-11 16:23:30', 'Smartwatch', 'Product', 'img/product6.jpg', 'img/product6.jpg', 120.00, 'Smartwatch in white and black', 10),
(7, '2021-05-10 00:00:00', '2021-05-12 16:23:30', 'White headset', 'Product', 'img/product7.jpg', 'img/product7.jpg', 78.00, 'Headset in white and black', 10),
(8, '2021-05-11 00:00:00', '2021-05-12 16:23:30', 'White earphone', 'Product', 'img/product8.jpg', 'img/product8.jpg', 99.00, 'Minimal white earphone', 20),
(9, '2021-05-12 00:00:00', '2021-05-12 16:23:30', 'White pen', 'Product', 'img/product9.jpg', 'img/product9.jpg', 28.00, 'White pen with black ink', 30),
(10, '2021-05-13 00:00:00', '2021-05-13 16:23:30', 'White phone case', 'Product', 'img/product10.jpg', 'img/product10.jpg', 19.00, 'iphone12 case with white', 100),
(11, '2021-05-13 00:00:00', '2021-05-13 16:23:30', 'White tumbler', 'Product', 'img/product11.jpg', 'img/product11.jpg', 36.00, 'Sustainable white tumbler', 30),
(12, '2021-05-13 00:00:00', '2021-05-13 16:23:30', 'White notebook', 'Product', 'img/product12.jpg', 'img/product12.jpg', 28.00, 'White notebook ', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
