-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 06:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fooddelivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `appwallet`
--

CREATE TABLE `appwallet` (
  `appwalletid` int(20) NOT NULL,
  `username` varchar(400) NOT NULL,
  `balance` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appwallet`
--

INSERT INTO `appwallet` (`appwalletid`, `username`, `balance`) VALUES
(1, 'customer2', 9750),
(2, 'admin', 49820961),
(3, 'customer', 2120098),
(4, 'db', 200000),
(5, 'vendor', 0),
(6, 'abcde', 5583572),
(7, 'dm', 0),
(8, 'c1', 0),
(9, 'SunniestWig', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(20) NOT NULL,
  `customername` varchar(400) NOT NULL,
  `foodid` int(100) NOT NULL,
  `restaurentid` int(100) NOT NULL,
  `foodname` varchar(200) NOT NULL,
  `description` varchar(400) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complainmodel`
--

CREATE TABLE `complainmodel` (
  `id` int(11) NOT NULL,
  `restaurant` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainmodel`
--

INSERT INTO `complainmodel` (`id`, `restaurant`, `product`, `email`, `subject`, `details`) VALUES
(1, 'Sultan\'s Dine', 'ghf', 'hajjajbin149138@gmail.com', 'dassadasd', 'kjh'),
(2, 'Sultan\'s Dine', 'ads', 'b@gmail.com', 'as', 'as'),
(3, 'kacchi bhai', 'kacchi', 'asifahmednirob43@gmail.com', 'food was not hot', 'food was cold as cucumber');

-- --------------------------------------------------------

--
-- Table structure for table `emailsupport`
--

CREATE TABLE `emailsupport` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emailsupport`
--

INSERT INTO `emailsupport` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Hajjaj', 'hajjaj149138@gmail.com', 'dassadasd', 'wdw', '2023-04-17 05:57:41'),
(2, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:50:35'),
(3, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:53:39'),
(4, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:55:42'),
(5, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:57:06'),
(6, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:57:54'),
(7, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:58:17'),
(8, 'd', 'hajjajbin149138@gmail.com', 'asd', 'zcx sdf', '2023-05-01 12:58:28'),
(9, 'hajjaj', 'sonosi@gmail.com', 'why to use this app', 'why i need to use this app', '2023-05-02 19:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `starttime` date NOT NULL,
  `endtime` date NOT NULL,
  `description` varchar(400) NOT NULL,
  `addedby` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `title`, `duration`, `starttime`, `endtime`, `description`, `addedby`) VALUES
(1, 'HELLOWORLD', '2 WEEKS', '2023-05-01', '2023-05-15', 'PARTYMOOD', 'admin'),
(2, 'showmitra', '1 week', '2023-05-03', '2023-05-10', 'showmitras event', 'admin'),
(3, 'hajjaj', '1 month', '2023-05-02', '2023-06-02', 'hajju', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`, `created_at`) VALUES
(1, 'sa', 'ds@sad.ds', 'add', '2023-04-27 20:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `financial_reports`
--

CREATE TABLE `financial_reports` (
  `id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `expenses` decimal(10,2) NOT NULL,
  `profits_losses` decimal(10,2) NOT NULL,
  `gross_margin` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financial_reports`
--

INSERT INTO `financial_reports` (`id`, `month`, `expenses`, `profits_losses`, `gross_margin`) VALUES
(1, 'January, 2023', '1000.00', '100.00', '10.00'),
(2, 'February, 2023', '200000.00', '200.00', '1000.00'),
(3, 'February, 2023', '200000.00', '200.00', '1000.00'),
(4, 'February, 2023', '20000000.00', '2000.00', '10000.00'),
(5, 'January, 2024', '99999999.99', '100000.00', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodid` int(20) NOT NULL,
  `restaurentid` int(20) NOT NULL,
  `foodname` varchar(100) NOT NULL,
  `description` varchar(400) NOT NULL,
  `category` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `restaurentid`, `foodname`, `description`, `category`, `price`, `image`) VALUES
(2, 1, 'bashmoti kacchi', 'kacchi', 'biriyani', '300', 'bashmoti kacchi.png'),
(3, 1, 'Kacchi Khadok', 'Kacchi with more meat', 'biriyani', '450', 'kacchi khadok.png'),
(4, 1, 'chuijhal', 'meat', 'meat', '250', 'chuijhal.png'),
(6, 1, 'Kacchi Platter', 'kacchi with chicken,kabab and borhani ', 'biriyani ', '1000', 'kacchi platter.png'),
(7, 3, 'BBQ Chicken Pizza', 'chicken pizza', 'fast food', '300', 'b.png'),
(8, 3, 'Cheese Pizza', 'pizza with cheese', 'fast food', '350', 'cheese pizza.png'),
(9, 3, 'Extra Sausage', 'pizza with extra sausage', 'fast food', '400', 'extra sausage.png'),
(10, 3, 'Meat Pizza', 'pizza with meat', 'fast food', '350', 'meat pizza.png'),
(11, 3, 'Sausage Pizza', 'pizza with sausage', 'fast food', '300', 'sausage pizza.png'),
(12, 5, 'Bucket', 'meat bucket', 'fast food', '300', 'bucket.png'),
(13, 2, 'platter 1', 'burger', 'fast food', '600', 'x.png'),
(14, 2, 'platter 2', 'burger', 'fast food', '500', 'y.png'),
(15, 2, 'platter 3', 'burger', 'fast food', '400', 'z.png'),
(16, 2, 'Smoky BBQ Cheese', 'burger', 'fast food', '300', 'smoky bbq cheese.png'),
(17, 5, 'Smoky Grilled', 'meat', 'fast food', '350', 'smoky grilled.png'),
(18, 2, 'Gourmet Burgers', 'burger', 'fast food', '350', 'gourmet burgers.png'),
(19, 5, 'platter1', 'meat and burger', 'fast food', '700', 'platter1.png'),
(20, 5, 'platter2', 'meat', 'fast food', '600', 'platter2.png'),
(21, 5, 'platter3', 'meat', 'fast food', '700', 'platter3.png'),
(22, 4, 'CAPPUCCINO', 'coffee', 'drinks', '350', 'CAPPUCCINO.png'),
(23, 4, 'Doppio', 'coffee', 'drinks', '400', 'doppio.png'),
(24, 4, 'Coffee With Milk', 'coffee', 'drinks', '300', 'g.png'),
(25, 4, 'Macchiato', 'coffee', 'drinks', '250', 'p.png'),
(26, 4, 'Long Black', 'coffee', 'drinks', '450', 's.png'),
(28, 1, 'burger', 'its a burger', 'fastfood', '290', 'vendor1682937511gourmet burgers.png'),
(29, 1, 'burger', 'its burger', 'fastfood', '454', 'vendor16829376111682937483gourmet burgers.png'),
(30, 1, 'burger', 'dad', 'fastfood', '4355', 'vendor16829377331682937483gourmet burgers.png'),
(31, 1, 'burger', 'dwad', 'fastfood', '45', 'vendor1682937866a.png');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `product_serial` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unit` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `product_serial`, `product_name`, `quantity`, `price_per_unit`) VALUES
(1, '1', 'Swarma', 11, '70.00');

-- --------------------------------------------------------

--
-- Table structure for table `notificationmodel`
--

CREATE TABLE `notificationmodel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notificationmodel`
--

INSERT INTO `notificationmodel` (`id`, `title`, `description`, `created_at`) VALUES
(27, 'asd', 'asdasd', '2023-05-01 09:21:11'),
(28, 'hajjaj', 'showmitra', '2023-05-02 17:45:14'),
(30, 'hjsd', 'afssef', '2023-05-02 17:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(200) NOT NULL,
  `customername` varchar(400) NOT NULL,
  `foodid` int(200) NOT NULL,
  `restaurentid` int(200) NOT NULL,
  `foodname` varchar(400) NOT NULL,
  `description` varchar(400) NOT NULL,
  `category` varchar(400) NOT NULL,
  `price` int(200) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customername`, `foodid`, `restaurentid`, `foodname`, `description`, `category`, `price`, `image`) VALUES
(36, 'customer2', 2, 1, 'bashmoti kacchi', 'kacchi', 'biriyani', 300, 'bashmoti kacchi.png'),
(37, 'customer2', 4, 1, 'chuijhal', 'meat', 'meat', 250, 'chuijhal.png');

-- --------------------------------------------------------

--
-- Table structure for table `restaurent`
--

CREATE TABLE `restaurent` (
  `restaurentid` int(20) NOT NULL,
  `restaurentname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `joindate` date NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurent`
--

INSERT INTO `restaurent` (`restaurentid`, `restaurentname`, `username`, `address`, `phonenumber`, `status`, `joindate`, `image`) VALUES
(1, 'Kacchi Bhai', 'vendor', 'bashundhara,dhaka', '01937283434', 'available', '2023-04-01', 'kacchibhai.png'),
(2, 'Chillox', 'vendor2', 'kuratoli', '0138566456', 'available', '2023-04-09', 'chillox.png'),
(3, 'Pizzaburg', 'vendor3', 'badda', '01893824332', 'available', '2023-04-09', 'pizzaburg.png'),
(4, 'Star Bucks', 'vendor4', 'bakshibazar', '01923434556', 'available', '2023-04-09', 'starbucks.png'),
(5, 'KFC', 'vendor5', 'Bashundhara', '01932349873', 'available', '2023-04-09', 'kfc.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviewmodel`
--

CREATE TABLE `reviewmodel` (
  `id` int(11) NOT NULL,
  `restaurantName` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviewmodel`
--

INSERT INTO `reviewmodel` (`id`, `restaurantName`, `productName`, `email`, `rating`, `review`) VALUES
(1, 'Kachi Vai', 'Basmati Kachi', 'hajjaj149138@gmail.com', 5, 'Very Tasty'),
(2, 'Hajjaj\'s Cafe Rio', 'Beef BBQ', 'hajjajbin149138@gmail.com', 5, 'One of the best BBQ in this world to have...'),
(3, 'dsf', 'asd', 'a@df.sed', 2, 'awd'),
(4, 'dwad', 'awdaw', 'asifahmednirobdfd43@gmail.com', 5, 'asif is the best'),
(5, 'dwad', 'awdaw', 'asifahmednirobdfd43@gmail.com', 5, 'asif is the best');

-- --------------------------------------------------------

--
-- Table structure for table `salesordersmodel`
--

CREATE TABLE `salesordersmodel` (
  `id` int(11) NOT NULL,
  `order_serial` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price_per_unit` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salesordersmodel`
--

INSERT INTO `salesordersmodel` (`id`, `order_serial`, `product_name`, `quantity`, `price_per_unit`) VALUES
(1, '001', 'Burger', 10, '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sl` int(20) NOT NULL,
  `transactionid` varchar(400) NOT NULL,
  `ammount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `amount`, `date`, `time`, `status`) VALUES
(1, '101.00', '2023-04-04', '14:18:13', 'Successfull'),
(2, '210.00', '2023-04-04', '14:18:19', 'Successfull'),
(3, '123.00', '2023-04-02', '14:18:11', 'Unsuccessfull'),
(4, '123432.00', '2023-04-01', '12:18:11', 'Successfull');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phonenumber` varchar(30) NOT NULL,
  `address` varchar(400) NOT NULL,
  `joiningdate` date NOT NULL,
  `profilepicture` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`, `name`, `email`, `gender`, `dob`, `phonenumber`, `address`, `joiningdate`, `profilepicture`) VALUES
(31, 'customer2', '12345678', 'customer', 'customer2', 'customer24@gmail.com', 'Male', '2002-05-14', '01839248434', 'feasfase', '2023-04-09', 'profilepicture.png'),
(35, 'vendor', '12345678', 'vendor', 'sunjida', 'a@gmail.com', 'Male', '2019-02-19', '3454765', 'ewrqw3', '2023-04-10', 'profilepicture.png'),
(36, 'abcde', '12345678', 'customer', 'Asif Ahmed Tanjid', 'asifahmednirobdfddad43@gmail.com', 'Male', '2001-02-28', '01976261162', 'stregsrg', '2023-04-28', 'profilepicture.png'),
(37, 'admin', '12345678', 'admin', 'admin', 'admin@gmail.com', 'Male', '2002-10-10', '01744398675', 'aiub', '2023-05-01', 'admin1683045507admin1681716302download.jpg'),
(38, 'dm', '12345678', 'deliveryman', 'Sajid', 'deliveryman@gmail.com', 'Male', '2004-01-07', '01938172634', 'kuril', '2023-05-02', 'profilepicture.png'),
(39, 'customer', '12345678', 'customer', 'Asif Ahmed', 'asifahmednirob44@gmail.com', 'Male', '1999-12-01', '01966157186', 'home', '2023-05-02', 'profilepicture.png'),
(40, 'c1', '12345678', 'customer', 'Asif Ahmed Tanjid', 'asifahmedtanjid@gmail.com', 'Male', '2000-06-06', '01982388234', 'eqeq', '2023-05-02', 'profilepicture.png'),
(41, 'SunniestWig', '12345678', 'deliveryman', 'Nirob Ahmed', 'asifahmednirob43@gmail.com', 'Female', '2002-01-01', '01983827382', 'wales', '2023-05-02', 'profilepicture.png');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `voucherid` int(20) NOT NULL,
  `vouchercode` varchar(100) NOT NULL,
  `discountammount` int(100) NOT NULL,
  `minimumspend` int(200) NOT NULL,
  `addedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`voucherid`, `vouchercode`, `discountammount`, `minimumspend`, `addedby`) VALUES
(1, 'abcd', 300, 10000, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appwallet`
--
ALTER TABLE `appwallet`
  ADD PRIMARY KEY (`appwalletid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `complainmodel`
--
ALTER TABLE `complainmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `emailsupport`
--
ALTER TABLE `emailsupport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_reports`
--
ALTER TABLE `financial_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodid`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notificationmodel`
--
ALTER TABLE `notificationmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `restaurent`
--
ALTER TABLE `restaurent`
  ADD PRIMARY KEY (`restaurentid`);

--
-- Indexes for table `reviewmodel`
--
ALTER TABLE `reviewmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesordersmodel`
--
ALTER TABLE `salesordersmodel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`voucherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appwallet`
--
ALTER TABLE `appwallet`
  MODIFY `appwalletid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `complainmodel`
--
ALTER TABLE `complainmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emailsupport`
--
ALTER TABLE `emailsupport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `financial_reports`
--
ALTER TABLE `financial_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notificationmodel`
--
ALTER TABLE `notificationmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `restaurent`
--
ALTER TABLE `restaurent`
  MODIFY `restaurentid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviewmodel`
--
ALTER TABLE `reviewmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `salesordersmodel`
--
ALTER TABLE `salesordersmodel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `voucherid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
