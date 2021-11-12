-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2021 at 01:33 AM
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
-- Database: `hotels`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hotel_id` varchar(50) NOT NULL,
  `services` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `booking_from` timestamp NULL DEFAULT NULL,
  `booking_to` timestamp NULL DEFAULT NULL,
  `total` float NOT NULL DEFAULT 0,
  `status` varchar(500) NOT NULL,
  `date` date DEFAULT NULL,
  `no_infact` int(50) NOT NULL DEFAULT 0,
  `no_adult` int(50) NOT NULL DEFAULT 0,
  `no_children` int(50) NOT NULL DEFAULT 0,
  `payment_method` varchar(500) DEFAULT NULL,
  `payment_status` varchar(500) NOT NULL DEFAULT 'pending',
  `base_price` int(50) NOT NULL DEFAULT 0,
  `sub_total` int(50) NOT NULL DEFAULT 0,
  `tax` int(50) NOT NULL DEFAULT 0,
  `total_paid` int(50) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `hotel_id`, `services`, `quantity`, `booking_from`, `booking_to`, `total`, `status`, `date`, `no_infact`, `no_adult`, `no_children`, `payment_method`, `payment_status`, `base_price`, `sub_total`, `tax`, `total_paid`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '1', 'rentals', 1, NULL, NULL, 1, '1', '2021-07-10', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 20:59:11', '2021-10-07 22:27:18', NULL),
(2, 1, '1', 'apartments', 1, NULL, NULL, 1, '1', '2010-09-05', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 21:00:35', '2021-10-07 22:27:25', NULL),
(3, 1, '1', 'hostel', 1, NULL, NULL, 1, '1', '2010-09-05', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 21:00:35', '2021-10-07 22:27:31', NULL),
(4, 1, '1', 'hotel', 1, NULL, NULL, 1, '1', '2010-09-05', 0, 1, 0, 'Flutterwave', 'pending', 0, 0, 0, 0, '2021-10-07 21:00:35', '2021-10-07 22:27:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
