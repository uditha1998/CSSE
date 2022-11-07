-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 12:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`id`, `name`) VALUES
(0, 'Super Admin'),
(1, 'Line Manager'),
(2, 'Finance'),
(3, 'HR'),
(4, 'Site Manager');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `fname`, `lname`, `email`, `designation`, `password`) VALUES
(14, 'Sahan', 'Randika', 'sahanrandika28@gmail.com', 'Manager', '123'),
(17, 'sahan', 'randika', 'randikasahan652@gmail.com', 'manager', '1234'),
(18, 'shahan', 'randikaaa', 'r@gmail.com', 'salesman', '1234567'),
(19, 'sahan', 'randika', 'randi@gmail.com', 'manager', '1234h');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `unitPrice` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id`, `name`, `unitPrice`, `seller`, `quantity`, `date`) VALUES
(1, 'Cement', 21000, 2, 23, '2022-11-07 20:41:08'),
(2, 'Sheets', 21000, 2, 23, '2022-11-07 20:41:08'),
(3, 'Tiles', 21000, 2, 23, '2022-11-07 20:41:08'),
(4, 'Cement', 21000, 2, 23, '2022-11-07 20:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `material_name`
--

CREATE TABLE `material_name` (
  `itemCode` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `material_name`
--

INSERT INTO `material_name` (`itemCode`, `Name`) VALUES
(1, 'Cement'),
(2, 'Tiles');

-- --------------------------------------------------------

--
-- Table structure for table `purchaserequest`
--

CREATE TABLE `purchaserequest` (
  `id` int(11) NOT NULL,
  `sideId` varchar(25) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `material` varchar(25) NOT NULL,
  `quantity` varchar(25) NOT NULL,
  `deliveryAddress` varchar(255) NOT NULL,
  `requisitionerName` varchar(25) NOT NULL,
  `supplierId` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `total` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaserequest`
--

INSERT INTO `purchaserequest` (`id`, `sideId`, `companyName`, `material`, `quantity`, `deliveryAddress`, `requisitionerName`, `supplierId`, `date`, `total`, `status`) VALUES
(1, '1', 'ABC', 'Cement', '5', 'Homagama', 'Sahan Randika', '1', '5-11-2022', '12500.0', 'Received'),
(2, '2', 'ABC', 'Tiles', '500', 'Homagama', 'Sahan Randika', '7', '17-11-2022', '475000.0', 'Pending'),
(3, '3', 'ABC', 'Sand', '5', 'Homagama', 'Sahan Randika', '5', '16-11-2022', '175000.0', 'Approved'),
(4, '2', 'ABC', 'Sand', '6', 'Homagama', 'Sahan Randika', '6', '19-11-2022', '210000.0', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `item` int(11) NOT NULL,
  `quantitty` int(11) NOT NULL,
  `supplier` int(11) NOT NULL,
  `staff` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `siteId` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `manager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `location`, `manager`) VALUES
(1, 'Galle', 3);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `supplies` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `address`, `supplies`) VALUES
(1, 'Sahan', 'Homagama', 'Cement'),
(2, 'Randika', 'Maharagama', 'Steel_Nails'),
(3, 'Thusith', 'Kandy', 'Cement'),
(4, 'Kavindu', 'Nugegoda', 'Steel_Nails'),
(5, 'Sadun', 'Awissawella', 'Sand'),
(6, 'Kasun', 'Homagama', 'Sand'),
(7, 'Namal', 'Maharagama', 'Tiles'),
(8, 'Pubudu', 'Colombo', 'Tiles'),
(9, 'Pasan', 'Borella', 'Steel_Bars'),
(10, 'Thilan', 'Kottawa', 'Steel_Bars'),
(11, 'Chalindu', 'Padukka', 'Block_Stone'),
(12, 'Dayan', 'Peliyagoda', 'Block_Stone'),
(13, 'Saman', 'Horana', 'Interlock'),
(14, 'Ajith', 'Anuradhapura', 'Interlock'),
(15, 'Thimira', 'Chilaw', 'Polycarbonate'),
(16, 'Asitha', 'Horana', 'Polycarbonate'),
(17, 'Kusal', 'Kandy', 'Asbestos_Sheets'),
(18, 'Tharindu', 'Mathara', 'Asbestos_Sheets'),
(19, 'Deshitha', 'Kegalle', 'Working_Jumpers'),
(20, 'Jeewantha', 'Galle', 'Working_Jumpers');

-- --------------------------------------------------------

--
-- Table structure for table `supply_item`
--

CREATE TABLE `supply_item` (
  `supplier_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `createdAt` datetime NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `authToken` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastLogin` datetime NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resetcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userType` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image_name`, `createdAt`, `isActive`, `authToken`, `lastLogin`, `password`, `resetcode`, `userType`, `username`) VALUES
(1, 'admin', 'admin@construction.lk', '', '2022-02-06 16:12:52', 0, '3788edb298c1aca3f2669cd527d1c77a', '2022-11-07 23:48:51', '123456', '21324', 0, 'admin@construction.lk'),
(2, 'Samantha', '1234567', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00', '', '', 1, '1234567'),
(3, 'Lasith Aththanayaka', 'isiwarauditha@gmail.com', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00', '21212121', '', 4, 'isiwarauditha@gmail.com'),
(4, '', '', '', '0000-00-00 00:00:00', 1, '', '0000-00-00 00:00:00', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchaserequest`
--
ALTER TABLE `purchaserequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchaserequest`
--
ALTER TABLE `purchaserequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
