-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 12:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventorymanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `path` text NOT NULL,
  `uploaded_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `description`, `path`, `uploaded_date`) VALUES
(13, '', '', 'images/new-aspen-brown-pu-8128-33-2-min.jpg', '2021-06-22 17:48:11'),
(15, 'This is a Photo', 'This is a Description', 'images/Solara_Nightstand_Shadow_c429a1a3-3130-4576-92ea-f9e154830be3_1194x.jpg', '2021-06-22 18:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(10) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactnum` bigint(11) NOT NULL,
  `note` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `quantity`, `contactname`, `address`, `contactnum`, `note`, `date`) VALUES
(66, 'sala set', 10000, 2, 'Marv', 'hachenda Kay o', 90909090909, 'I AM LEGEND', '2021-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `mobile` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password_1` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `first_name`, `last_name`, `mobile`, `email`, `password_1`) VALUES
('admin', 'Administrator', 'Administrator', 2147483647, 'admin@yahoo.com', '21232f297a57a5a743894a0e4a801fc3'),
('Adrian', 'Adrian', 'Cobrador', 2147483647, 'adriancobra@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('mae', 'Rizza Mae', 'Gancioso', 2147483647, 'ganciosomae@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
('Marvince', 'Marvince', 'Masculino', 2147483647, 'marbens@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `worker_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `salary` int(30) NOT NULL,
  `salarydeduction` int(30) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`worker_id`, `name`, `salary`, `salarydeduction`, `note`) VALUES
(23, 'Albert Daguhoy', 300, 200, 'Sagwa Banwa Valladolid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
