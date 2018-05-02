-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 12:00 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test3`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `id` int(10) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` bigint(255) NOT NULL,
  `disc_price` bigint(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `recommended` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`id`, `product_name`, `product_desc`, `product_image`, `price`, `disc_price`, `color`, `size`, `status`, `stock`, `recommended`, `featured`) VALUES
(1, 'NIrav', 'dafaf', 'Swamiiji.jpg', 12, 11, 'red', 'M', 'no', 'no', 'No', 'nonfeatured'),
(2, 'NIrav', 'dafaf', 'Swamiiji.jpg', 12, 11, 'red', 'M', 'no', 'no', 'No', 'nonfeatured'),
(3, 'NIrav', 'demo demo', 'Swamiiji.jpg', 500, 400, 'Blue  Red', 'M', 'no', 'no', 'No', 'nonfeatured'),
(6, '', '', 'Swamiiji.jpg', 0, 0, '', '', 'yes', 'yes', 'Yes', 'featured'),
(7, 'John', 'Jhon Demo', 'swamiji.png', 500, 400, 'red', 'M', 'no', 'yes', 'No', 'nonfeatured'),
(8, '', '', 'Swamiiji.jpg', 0, 0, '', '', 'yes', 'yes', 'Yes', 'featured'),
(9, '', '', 'swamiji.png', 0, 0, '', '', 'yes', 'yes', 'Yes', 'featured'),
(10, '', '', 'swamiji.png', 0, 0, '', '', 'yes', 'yes', 'Yes', 'featured'),
(11, '', '', 'Penguins.jpg', 0, 0, '', '', 'yes', 'yes', 'Yes', 'featured');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
