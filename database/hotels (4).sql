-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 05:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci NOT NULL,
  `reset_hash` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `user_email`, `reset_hash`) VALUES
(1, '', 'c5c02ae74239ac428c5922ab1e3ed2e07204bc721637172479');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `hotel_id` int(50) NOT NULL,
  `partner_id` int(50) NOT NULL,
  `room_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `total_rooms` int(50) NOT NULL,
  `currencycode` varchar(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USD',
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `beds` int(50) NOT NULL,
  `adults` int(50) NOT NULL,
  `childrens` int(50) NOT NULL,
  `facilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkout` time DEFAULT NULL,
  `checkin` time DEFAULT NULL,
  `footage` int(11) NOT NULL,
  `room_image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `hotel_id`, `partner_id`, `room_name`, `total_rooms`, `currencycode`, `price`, `beds`, `adults`, `childrens`, `facilities`, `checkout`, `checkin`, `footage`, `room_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 61976, 2, 'Marah Bryant', 27, 'GBP', '571', 382, 642, 63, 'laptop,car,phone', '19:00:00', '19:00:00', 280, 'http://localhost:8080/uploads/hotel_images/Picture1.jpg99733b519d46f2cf45d5a28f5ec6fa4d', '2021-11-19 13:07:53', '2021-11-19 15:36:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(225) DEFAULT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `firstname` varchar(500) DEFAULT NULL,
  `lastname` varchar(500) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `role` enum('admin','customer','partner') DEFAULT 'customer',
  `phone` varchar(50) DEFAULT NULL,
  `profile_image` varchar(500) DEFAULT 'default_user.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `fullname`, `firstname`, `lastname`, `address`, `role`, `phone`, `profile_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'perfectwordpre@gmail.com', NULL, '$2y$10$28Ijqw197nO4kOhmxHWMZezgtSfgHcBj/8.jeVJLQIjruxvU8uCfm', 'Kirsten Barrera', 'Kirsten', 'Barrera', NULL, 'admin', '+1561364-4436', 'default_user.jpg', '2021-11-17 18:44:41', '2021-11-17 20:14:03', NULL),
(2, 'fivermail201@gmail.com', 'WEBDESIGN09039395445', '$2y$10$EuSvCtXZrRftHQU2RbCtMO5X0cDRpekg2G/v3M2i/ZnXMY1Ege9hC', 'WEBDESIGN EMMANUEL', 'EMMANUEL', 'WEBDESIGN', 'Ullam officia ab ven', 'partner', '09039395445', 'marker.png-2', '2021-11-17 20:50:09', '2021-11-17 21:01:40', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
