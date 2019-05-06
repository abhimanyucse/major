-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 07:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spiritual_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `mid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mid`, `name`, `Designation`, `email`, `phone`) VALUES
(1, 'm', 'k', 'a@.n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `category`) VALUES
(1, 'games'),
(2, 'books'),
(3, 'calender');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `mid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`mid`, `name`, `phone`, `email`) VALUES
(23, 'm', 0, 'macrock1203@gmail.com'),
(27, 'mac', 0, 'macrock1203@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gst`
--

CREATE TABLE `gst` (
  `cgst` float NOT NULL,
  `sgst` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gst`
--

INSERT INTO `gst` (`cgst`, `sgst`) VALUES
(0.18, 0.18);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `mid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `type` text NOT NULL,
  `verify` varchar(1) NOT NULL DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`mid`, `username`, `password`, `status`, `type`, `verify`) VALUES
(1, 'a@.n', 'm', 'A', 'A', 'T'),
(2, 'm@k.m', 'm', 'A', 'S', 'T'),
(3, 'f@g.m', 'm', 'A', 'S', 'T'),
(23, 'macrock1203@gmail.com', 'op', 'A', 'customer', 'T'),
(26, 'psycjoker@gmail.com', 'mac', 'A', 'S', 'T'),
(27, 'macrock1203@gmail.com', 'kl', 'A', 'customer', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `name`, `photo`, `price`, `seller`, `quantity`, `discount`, `category`, `info`) VALUES
(9, 'm', '9.jpg', 90, 2, -1, 90, 1, '1'),
(10, 'ma', '10.jpg', 90, 2, -1, 90, 1, '2'),
(11, 'MAc', '11.jpg', 100, 2, -406, 78, 1, '3'),
(12, 'mac', '12.jpg', 89, 3, 77, 78, 2, 'kl'),
(13, 'mac1', '13.jpg', 89, 2, 78, 78, 2, '89'),
(14, 'mac2', '14.png', 88, 3, 78, 78, 2, 'gh'),
(15, 't1', '15.jpg', 88, 3, 78, 78, 3, '67'),
(16, 't2', '16.jpg', 88, 3, 78, 78, 3, '56'),
(17, 't3', '17.jpg', 88, 26, 80, 78, 3, 'gh'),
(18, 'jk', '18.gif', 89, 26, 100, 78, 2, 'mnmnmnmnmn'),
(19, 'Scented Candels', '19.jpg', 100000, 26, 1000, 5, 2, 'candel');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `mid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `organization` varchar(200) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`mid`, `name`, `organization`, `address`, `phone`, `email`) VALUES
(2, 'm', 'k', 'k', 909090909, 'p'),
(3, 'm', 'jk', 'kl', 9090, 'f@g.m'),
(26, 'mac', 'io', 'kl', 567890, 'psycjoker@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `orderid` varchar(50) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `phone` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tid`, `mid`, `pid`, `orderid`, `transaction_id`, `name`, `quantity`, `address`, `zipcode`, `phone`, `date`, `status`) VALUES
(33, 27, 11, 'ORDS60941406', '', 'mac', 2, '90', 90, 90, '2019-05-04', ''),
(34, 27, 11, 'ORDS65140205', '20190504111212800110168715200468183', 'mac', 3, '90', 90, 90, '2019-05-04', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `seller` (`seller`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `mid` (`mid`),
  ADD KEY `pid` (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `master` (`mid`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `master` (`mid`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`seller`) REFERENCES `seller` (`mid`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`c_id`);

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `master` (`mid`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `master` (`mid`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `products` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
