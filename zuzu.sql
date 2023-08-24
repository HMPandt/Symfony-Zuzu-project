-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 02:51 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuzu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zipcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fname`, `lname`, `email`, `adress`, `city`, `zipcode`) VALUES
(1, 'q', 'q', 'q@email.com', 'q', 'q', 'q'),
(2, 'a', 'q', 'hi@gmail.com', 'a', 'a', 'q'),
(3, 'q', 'a', 'hi@gmail.com', 'a', 'q', 'a'),
(4, 'hun', 'gsad', '302150134@student.rocmondriaan.nl', '1e Van der Kunstraat', '2521AV', 'den haaf'),
(5, 'hun', 'gsadhjkgh', 'Ziquepandt@hotmail.com', '3 Uitgeeststraat', '2547VA', 'den haaf'),
(6, 'Hunter', 'Pandt', 'hunterpandt1@hotmail.com', '3 Uitgeeststraat', '&#39;s-Gravenhage', '2547VA');

-- --------------------------------------------------------

--
-- Table structure for table `sushi`
--

CREATE TABLE `sushi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sushi`
--

INSERT INTO `sushi` (`id`, `name`, `image`, `price`, `amount`) VALUES
(1, 'Maki komkommer', 'makikomkommer.jpg', '5.00', 100),
(2, 'Maki Avocado', 'makiavocado.jpeg', '5.20', 100),
(3, 'Nigiri Zalm', 'nigiri.jpg', '5.00', 85),
(4, 'Philadelphia Roll', 'philyroll.jpg', '5.00', 85),
(5, 'Spicy Tuna Roll', 'Spicy+Tuna+Crunch+Roll.jpg', '5.20', 85),
(6, 'California Roll', 'California-Roll.jpg', '6.00', 85);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sushi`
--
ALTER TABLE `sushi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sushi`
--
ALTER TABLE `sushi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
