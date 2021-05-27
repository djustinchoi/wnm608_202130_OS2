-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 27, 2021 at 06:03 AM
-- Server version: 5.6.51-cll-lve
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
  `image` varchar(256) NOT NULL,
  `price` decimal(9,2) NOT NULL,
  `description` text NOT NULL,
  `quantity` decimal(9,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `date_create`, `date_modify`, `name`, `category`, `image`, `price`, `description`, `quantity`) VALUES
(1, '2021-05-01 00:00:00', '2021-05-11 16:23:30', 'White Rubik’s cube', 'Product', 'img/product1.jpg', 40.00, 'Rubik’s cube painted in white. Museum quality: archival inks, 100% cotton rag paper unless noted', 20),
(2, '2021-05-03 00:00:00', '2021-05-11 16:23:30', 'White Calculator', 'Product', 'img/product2.jpg', 32.00, 'Calculator painted in white. Museum quality: archival inks, 100% cotton rag paper unless noted', 30),
(3, '2021-05-04 00:00:00', '2021-05-11 16:23:30', 'White Macintosh', 'Product', 'img/product3.jpg', 1440.00, 'Macintosh painted in white. Museum quality: archival inks, 100% cotton rag paper unless noted', 5),
(4, '2021-05-05 00:00:00', '2021-05-11 16:23:30', 'White Polaroid', 'Product', 'img/product4.jpg', 121.00, 'Polaroid painted in white. Museum quality: archival inks, 100% cotton rag paper unless noted', 10),
(5, '2021-05-07 00:00:00', '2021-05-11 16:23:30', 'DSLR', 'Product', 'img/product5.jpg', 346.00, 'DSLR in white and black. Museum quality: archival inks, 100% cotton rag paper unless noted', 5),
(6, '2021-05-08 00:00:00', '2021-05-11 16:23:30', 'Smartwatch', 'Product', 'img/product6.jpg', 120.00, 'Smartwatch in white and black. Museum quality: archival inks, 100% cotton rag paper unless noted', 10),
(7, '2021-05-10 00:00:00', '2021-05-12 16:23:30', 'White balloon', 'Product', 'img/product7.jpg', 78.00, 'White balloon sculpture. Museum quality: archival inks, 100% cotton rag paper unless noted', 10),
(8, '2021-05-11 00:00:00', '2021-05-12 16:23:30', 'White typewriter', 'Product', 'img/product8.jpg', 99.00, 'Minimal white typewriter. Museum quality: archival inks, 100% cotton rag paper unless noted', 20),
(9, '2021-05-12 00:00:00', '2021-05-12 16:23:30', 'White book pile', 'Product', 'img/product9.jpg', 28.00, 'White pile of books. Museum quality: archival inks, 100% cotton rag paper unless noted', 30),
(10, '2021-05-13 00:00:00', '2021-05-13 16:23:30', 'White phone case', 'Product', 'img/product10.jpg', 19.00, 'iphone12 case with white. Museum quality: archival inks, 100% cotton rag paper unless noted', 100),
(11, '2021-05-13 00:00:00', '2021-05-13 16:23:30', 'White tumbler', 'Product', 'img/product11.jpg', 36.00, 'Sustainable white tumbler. Museum quality: archival inks, 100% cotton rag paper unless noted', 30),
(12, '2021-05-13 00:00:00', '2021-05-13 16:23:30', 'White Hershey', 'Product', 'img/product12.jpg', 28.00, 'White Hershey sculpture. Museum quality: archival inks, 100% cotton rag paper unless noted', 25);

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
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
