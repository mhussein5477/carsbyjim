-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 06:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsbyjim`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `carname` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `old_new` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `gearsystem` varchar(250) NOT NULL,
  `oil` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `brand` varchar(250) NOT NULL,
  `slider` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `carname`, `price`, `old_new`, `year`, `gearsystem`, `oil`, `description`, `image`, `brand`, `slider`) VALUES
(12, 'Toyota Vitz 2014 Blue', '3.4 m', 'Used', '2015', 'Manual', 'Disel', 'Toyota vitz  hire purchase terms accepted balance pay in one year', '2019_Toyota_Corolla_Icon_Tech_VVT-i_Hybrid_1.8.jpg', 'Nissan', 'Featured');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `carid`, `image`) VALUES
(18, 12, '2022-toyota-corolla-hybrid-le-cvt-natl-angular-front-exterior-view_100805308_m.jpg'),
(19, 12, 'NIS3486_xTrailNSPORT_Social.png'),
(20, 12, 'vitz_ogp_01.jpg'),
(21, 12, 'WhatsApp_Image_2022-01-02_at_6.47.24_PM-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `username`, `password`, `last_login`) VALUES
(1, 'Admin', 'jim', '89b7bb72250e38a06a550df66f4892d7f28a8ff2', '2022-01-02 14:34:52'),
(2, 'Admin', 'admin', '2bf4621bd8bdba0c938d9dea443c5497fe1aea10', '2022-01-01 20:19:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
