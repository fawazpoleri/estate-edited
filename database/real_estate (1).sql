-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 11:09 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory_name`
--

CREATE TABLE `catagory_name` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catagory_name`
--

INSERT INTO `catagory_name` (`cat_id`, `cat_name`) VALUES
(1, 'Residential Apartment'),
(2, 'Residential House/Villa'),
(3, 'Residential Land'),
(4, 'Residential Other'),
(5, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(3, 'kannur', 1),
(5, 'chennai', 2),
(6, 'coimbator', 2),
(7, 'banglore', 3),
(8, 'mysore', 3),
(80, 'mumbai', 4),
(145, 'calicut', 1),
(146, 'kochi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `intrest` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `message` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `intrest`, `username`, `message`) VALUES
(1, 'fgvhbjn', '', ''),
(2, 'intrest', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(7, 'fawaz', '12345', 'user'),
(8, 'vishnu', '12345', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(11) NOT NULL,
  `pro_name` varchar(25) NOT NULL,
  `pro_description` varchar(25) NOT NULL,
  `area` varchar(25) NOT NULL,
  `proom` varchar(25) NOT NULL,
  `pcost` varchar(25) NOT NULL,
  `image` varchar(100) NOT NULL,
  `loc` varchar(25) NOT NULL,
  `date` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `property_catagory` varchar(20) NOT NULL,
  `city_id` int(11) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `pro_name`, `pro_description`, `area`, `proom`, `pcost`, `image`, `loc`, `date`, `username`, `cat_id`, `property_catagory`, `city_id`, `status`) VALUES
(5, 'house', '', '2500', '4', '9000', 'images/photo/blog2.jpg', 'palakkad', '2019-05-02', '0', 2, 'Lease', 0, 1),
(6, 'villa', '', '2000', '5', '5000', 'images/photo/e2.jpg', 'palakkad', '2019-05-02', 'vishnu', 0, 'Rent', 0, 1),
(8, 'appartment', '', '2000', '5', '1000', 'images/photo/banner.jpg', 'thrissur', '2019-05-02', '0', 0, 'Rent', 0, 1),
(22, 'rose villa', '', '3000', '3', '250000', 'images/photo/', 'west', '0000-00-00', '0', 0, 'Buy', 0, 1),
(25, 'villa home', 'sdfaghjkls;', '2500', '4', '250000', '', 'west hill', '0000-00-00', '0', 0, 'Rent', 0, 1),
(26, 'new villa', 'new appaert', '50000', '8', '25000000', '', 'banglore', '0000-00-00', '0', 0, 'Lease', 0, 1),
(38, 'aaaaaaaaaaa', 'sdfgdhfjk', '3000', '4', '30000000', 'block1.jpeg', 'asdf', ' 20/01/2020', 'vishnu', 7, 'Rent', 3, 1),
(39, 'dream', '', '3000', '3', '30000000', 'BLOCK_IRRI.jpeg', 'asdf', ' 20/01/2020', 'admin', 5, 'Rent', 0, 0),
(40, 'house', 'near town', '2000', '3', '250000', 'photo-1480074568708-e7b720bb3f09.jfif', 'thalassery', ' 1/3/2020', 'fawaz', 1, 'Buy', 3, 1),
(41, 'new property', 'near', '3000', '4', '300000', 'gettyimages-183881669-612x612.jpg', 'vadakara', ' 2/3/2020', 'admin', 1, 'Rent', 145, 1),
(42, 'dream', 'new property', '50000', '8', '30000000', 'download.jfif', 'ernakulam', ' 1/3/2020', 'admin', 1, 'Lease', 146, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `cpassword` varchar(25) NOT NULL,
  `status` int(5) NOT NULL DEFAULT 0,
  `stat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `email`, `address`, `phoneno`, `password`, `cpassword`, `status`, `stat`) VALUES
(5, 'fawaz p', 'fawaz', 'fawaz@gmail.com', 'calicut', 1234567890, '12345', '12345', 0, 'REJECTED/PENDING'),
(6, 'VISHNU', 'vishnu', 'vishnu@gmail.com', 'kochi', 1234567890, '12345', '12345', 1, 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(35) NOT NULL,
  `state_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'kerala'),
(2, 'tamilnadu'),
(3, 'karnataka'),
(4, 'maharashtra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory_name`
--
ALTER TABLE `catagory_name`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory_name`
--
ALTER TABLE `catagory_name`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
