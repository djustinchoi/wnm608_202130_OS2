-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 13, 2021 at 01:46 PM
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
  `date_create` date NOT NULL,
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

INSERT INTO `products` (`id`, `date_create`, `name`, `category`, `url`, `thumbnail`, `price`, `description`, `quantity`) VALUES
(1, '2021-05-01', 'White Rubik’s cube', 'Product', 'cube.jpg', 'cube.jpg', 40.00, 'Rubik’s cube painted in white', 20),
(2, '2021-05-03', 'White Calculator', 'Product', 'calculator.jpg', 'calculator.jpg', 32.00, 'Calculator painted in white', 30),
(3, '2021-05-04', 'White Macintosh', 'Product', 'macintosh.jpg', 'macintosh.jpg', 1440.00, 'Macintosh painted in white', 5),
(4, '2021-05-05', 'White Polaroid', 'Product', 'polaroid.jpg', 'p_polaroid.jpg', 121.00, 'Polaroid painted in white', 10),
(5, '2021-05-07', 'DSLR', 'Product', 'dslr.jpg', 'dslr.jpg', 346.00, 'DSLR in white and black', 5),
(6, '2021-05-08', 'Smartwatch', 'Product', 'smartwatch.jpg', 'smartwatch.jpg', 120.00, 'Smartwatch in white and black', 10),
(7, '2021-05-10', 'White headset', 'Product', 'headset.jpg', 'headset.jpg', 78.00, 'Headset in white and black', 10),
(8, '2021-05-11', 'White earphone', 'Product', 'earphone.jpg', 'earphone.jpg', 99.00, 'Minimal white earphone', 20),
(9, '2021-05-12', 'White pen', 'Product', 'pen.jpg', 'pen.jpg', 28.00, 'White pen with black ink', 30),
(10, '2021-05-13', 'White phone case', 'Product', 'case.jpg', 'case.jpg', 19.00, 'iphone12 case with white', 100),
(11, '2021-05-13', 'White tumbler', 'Product', 'tumbler.jpg', 'tumbler.jpg', 36.00, 'Sustainable white tumbler', 30),
(12, '2021-05-13', 'White notebook', 'Product', 'note.jpg', 'note.jpg', 28.00, 'White notebook ', 25);

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
