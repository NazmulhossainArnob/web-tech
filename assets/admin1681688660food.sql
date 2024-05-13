-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 05:03 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddeliver`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(20) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `category` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `foodname`, `description`, `category`, `price`, `image`) VALUES
(1, 'Mutton Kacchi', 'this is mutton kacchi', 'biriyani', '300', 'kacchi.jpeg'),
(2, 'bashmoti kacchi', 'kacchi', 'biriyani', '300', 'bashmoti kacchi.png'),
(3, 'Kacchi Khadok', 'Kacchi with more meat', 'biriyani', '450', 'kacchi khadok.png'),
(4, 'chuijhal', 'meat', 'meat', '250', 'chuijhal.png'),
(6, 'Kacchi Platter', 'kacchi with chicken,kabab and borhani ', 'biriyani ', '1000', 'kacchi platter.png'),
(7, 'BBQ Chicken Pizza', 'chicken pizza', 'fast food', '300', 'b.png'),
(8, 'Cheese Pizza', 'pizza with cheese', 'fast food', '350', 'cheese pizza.png'),
(9, 'Extra Sausage', 'pizza with extra sausage', 'fast food', '400', 'extra sausage.png'),
(10, 'Meat Pizza', 'pizza with meat', 'fast food', '350', 'meat pizza.png'),
(11, 'Sausage Pizza', 'pizza with sausage', 'fast food', '300', 'sausage pizza.png'),
(12, 'Bucket', 'meat bucket', 'fast food', '300', 'bucket.png'),
(13, 'platter 1', 'burger', 'fast food', '600', 'x.png'),
(14, 'platter 2', 'burger', 'fast food', '500', 'y.png'),
(15, 'platter 3', 'burger', 'fast food', '400', 'z.png'),
(16, 'Smoky BBQ Cheese', 'burger', 'fast food', '300', 'smoky bbq cheese.png'),
(17, 'Smoky Grilled', 'meat', 'fast food', '350', 'smoky grilled.png'),
(18, 'Gourmet Burgers', 'burger', 'fast food', '350', 'gourmet burgers.png'),
(19, 'platter1', 'meat and burger', 'fast food', '700', 'platter1.png'),
(20, 'platter2', 'meat', 'fast food', '600', 'platter2.png'),
(21, 'platter3', 'meat', 'fast food', '700', 'platter3.png'),
(22, 'CAPPUCCINO', 'coffee', 'drinks', '350', 'CAPPUCCINO.png'),
(23, 'Doppio', 'coffee', 'drinks', '400', 'doppio.png'),
(24, 'Coffee With Milk', 'coffee', 'drinks', '300', 'g.png'),
(25, 'Macchiato', 'coffee', 'drinks', '250', 'p.png'),
(26, 'Long Black', 'coffee', 'drinks', '450', 's.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
