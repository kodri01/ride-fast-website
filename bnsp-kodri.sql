-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 03:03 PM
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
-- Database: `bnsp-kodri`
--

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `img_galery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `nama`, `img_galery`) VALUES
(2, 'Galery 1', 'uploads/galeri 1.jpg'),
(3, 'Galeri 2', 'uploads/galeri 2.jpg'),
(4, 'Galeri 3', 'uploads/galeri 3.jpg'),
(5, 'Galeri 4', 'uploads/galeri 4.jpg'),
(6, 'Galeri 5', 'uploads/galeri 5.jpg'),
(7, 'Galeri 6', 'uploads/galeri 6.jpg'),
(8, 'Galeri 7', 'uploads/galeri 7.jpg'),
(9, 'Galeri 8', 'uploads/galeri 8.jpg'),
(10, 'Galeri 9', 'uploads/galeri 9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL,
  `nama_product` varchar(50) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `nama_product`, `img_product`, `harga`) VALUES
(12, 'Suku Cadang', 'Shock Breaker', 'uploads/shock breaker.jpg', '1300000'),
(13, 'Suku Cadang', 'Blok Harley', 'uploads/block.jpg', '23500999'),
(14, 'Suku Cadang', 'Busi', 'uploads/busi.jpg', '59999'),
(15, 'Suku Cadang', 'Turbo', 'uploads/turbo.jpg', '259999'),
(16, 'Suku Cadang', 'Injector', 'uploads/injector.jpg', '328000'),
(17, 'Suku Cadang', 'Radiator', 'uploads/radiator.jpg', '557000'),
(19, 'Peralatan', 'Jaket Kulit Riding', 'uploads/jaket kulit.jpg', '17000500'),
(20, 'Peralatan', 'Helmet Full Face', 'uploads/full face custom.jpg', '1300700'),
(21, 'Peralatan', 'Helmet Half Face', 'uploads/half helmet.jpg', '989000'),
(22, 'Peralatan', 'Sarung Tangan', 'uploads/sarung tangan.jpg', '135000'),
(23, 'Peralatan', 'Jaket Riding', 'uploads/jacket.jpg', '2300999'),
(24, 'Peralatan', 'Celana Pelindung', 'uploads/celana.jpg', '2530000'),
(25, 'Perawatan', 'Oli Motor Bebek', 'uploads/oli motor black.jpg', '59000'),
(26, 'Perawatan', 'Oli Motor Matic', 'uploads/oli motor.jpg', '47000'),
(27, 'Perawatan', 'Oli Motor Premium', 'uploads/oli motor premium.jpg', '84000'),
(28, 'Perawatan', 'Oli Cakram', 'uploads/oli cakram.jpg', '78999'),
(29, 'Perawatan', 'Oli Mesin', 'uploads/oli mesin.jpg', '132000'),
(30, 'Perawatan', 'Oli Rantai ', 'uploads/oli rantai.jpg', '35900'),
(31, 'Merchendise', 'T-Shirt Ride Black', 'uploads/Black Ride.jpg', '259000'),
(32, 'Merchendise', 'Stiker Ride Fast', 'uploads/bnsp.png', '75000'),
(33, 'Merchendise', 'T-Shirt Ride Mechanic', 'uploads/ride mechanic.jpg', '158000'),
(34, 'Merchendise', 'Mug Ride Fast', 'uploads/mug ride fast.jpg', '175000'),
(35, 'Merchendise', 'Stiker Ride', 'uploads/stiker ride.jpg', '65000'),
(36, 'Merchendise', 'Mug Ride Fast Premium', 'uploads/mug fast.jpg', '351999');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(18, 'Kodri', 'Mukhtar', 'mukhtar@gmail.com', '$2y$10$QWfehop8I9/IumSd1.M4EegvyUuwILuIz0EYhggEzfeAI.YBNaB2a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
