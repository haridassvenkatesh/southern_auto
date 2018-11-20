-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 02:16 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `southern_auto`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_vertical`
--

CREATE TABLE `business_vertical` (
  `vertical_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_vertical`
--

INSERT INTO `business_vertical` (`vertical_id`, `name`, `parent_id`, `status`) VALUES
(1, 'Sales', 0, 1),
(2, 'Service', 0, 1),
(3, 'Project', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `gst_no` varchar(15) DEFAULT NULL,
  `contact_no1` bigint(20) DEFAULT NULL,
  `contact_no2` bigint(20) DEFAULT NULL,
  `email1` varchar(250) NOT NULL,
  `email2` varchar(250) DEFAULT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `company_name`, `image`, `address`, `gst_no`, `contact_no1`, `contact_no2`, `email1`, `email2`, `remarks`, `created_date`, `status`) VALUES
(1, 'San Tech', NULL, 'Erode', '2345', 9876543210, NULL, 'santech@gmail.com', NULL, NULL, '2018-11-17 00:00:00', 1),
(2, 'Southern Automation', NULL, 'Coimbatore', '23453543', 1234567890, NULL, 'southern@gmail.com', NULL, NULL, '2018-11-17 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact_person`
--

CREATE TABLE `customer_contact_person` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `remarks` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_contact_person`
--

INSERT INTO `customer_contact_person` (`contact_id`, `name`, `company_id`, `phone_no`, `email`, `designation`, `remarks`, `status`) VALUES
(1, 'Mounika', 1, 7894561230, 'mounika@gmail.com', 'Developer', 'Developer', 1),
(2, 'Muthu', 1, 8529637410, 'muthu@gmail.com', 'Developer', 'Developer', 1),
(3, 'Jegha', 2, 7418965230, 'jegha@gmail.com', 'Project Engineer', 'Project Engineer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `name`, `description`, `parent_id`, `created_by`, `created_date`, `status`) VALUES
(1, 'Project Engineer', 'Project Engineer', 0, 1, '2018-11-17 17:33:59', 1),
(2, 'Senior Project Engineer', 'Senior Project Engineer', 0, 1, '2018-11-17 17:42:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `employee_unique_id` varchar(30) NOT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `designation_id` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone_no1` bigint(20) NOT NULL,
  `phone_no2` bigint(20) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `releaving_date` date DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `remark` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `employee_unique_id`, `photo`, `designation_id`, `address`, `phone_no1`, `phone_no2`, `email`, `dob`, `doj`, `releaving_date`, `created_date`, `remark`, `status`) VALUES
(1, 'Kavitha', 'kavitha01', 'photo\\5bf00ac6438f9_kavitha01_9876543210.jpeg', 1, 'Erode\r\nPerundurai', 9876543210, NULL, 'kavi@gmail.com', '2002-11-01', '2018-11-08', NULL, '2018-11-17 18:05:10', NULL, 1),
(2, 'Sethu', 'Sethu01', 'photo\\5bf00ad54c125_Sethu01_9879879870.jpeg', 2, 'Erode', 9879879870, NULL, 'sethu@gmail.com', '2002-11-01', '2018-11-14', NULL, '2018-11-17 18:05:04', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_id` varchar(100) NOT NULL,
  `company_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `business_vertical` int(11) NOT NULL COMMENT '1-sales,2-service,3-project',
  `enquiry_source` int(11) NOT NULL,
  `refered_by` varchar(100) DEFAULT NULL,
  `allotted_to` int(11) NOT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `enquiey_date` date NOT NULL,
  `created_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `timestamp` datetime NOT NULL,
  `enquiry_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `amo_with_out_tax` varchar(20) NOT NULL,
  `discount` varchar(4) DEFAULT NULL COMMENT 'in Precentage',
  `discount_value` varchar(10) DEFAULT NULL,
  `gst_percent` int(11) DEFAULT NULL,
  `gst_value` varchar(10) DEFAULT NULL,
  `net_value` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `enquiry_id`, `company_id`, `contact_id`, `business_vertical`, `enquiry_source`, `refered_by`, `allotted_to`, `remarks`, `enquiey_date`, `created_date`, `created_by`, `timestamp`, `enquiry_status`, `status`, `amo_with_out_tax`, `discount`, `discount_value`, `gst_percent`, `gst_value`, `net_value`) VALUES
(1, 'ENQ0001', 1, 1, 1, 1, 'kavitha', 1, 'kavitha create a enquiry', '2018-11-19', '2018-11-19', 1, '2018-11-19 15:53:24', 4, 1, '100', '10', '90', 10, '99', '99'),
(2, 'ENQ0002', 2, 3, 1, 2, 'kavitha', 1, 'second enquiry created', '2018-11-19', '2018-11-19', 1, '2018-11-20 10:46:41', 8, 1, '100', '10', '90', 0, '0', '90'),
(3, 'ENQ0003', 2, 3, 1, 1, 'kavitha', 2, 'kavitha', '2018-11-01', '2018-11-19', 1, '2018-11-20 10:41:04', 5, 1, '100', '0', '0', 0, '0', '100'),
(4, 'ENQ0004', 1, 1, 1, 1, 'kavitha', 1, 'kavitha', '2018-11-01', '2018-11-20', 1, '2018-11-20 11:08:58', 4, 1, '100.9', '0', '0', 0, '0', '100.9'),
(5, 'ENQ0005', 2, 3, 1, 1, 'kavitha', 1, 'kavitha', '2018-11-01', '2018-11-20', 1, '2018-11-20 10:19:51', 4, 1, '100', '10', '90', 10, '99', '99');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_follow_up`
--

CREATE TABLE `enquiry_follow_up` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `updated_time` datetime NOT NULL,
  `follow_by` int(11) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `next_follow_up_date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_product`
--

CREATE TABLE `enquiry_product` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `product_name` varchar(300) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` varchar(20) NOT NULL,
  `amount` varchar(20) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_product`
--

INSERT INTO `enquiry_product` (`id`, `enquiry_id`, `product_name`, `qty`, `price`, `amount`, `status`) VALUES
(1, 1, 'product', 1, '100', '100', 1),
(2, 2, 'product b', 2, '50', '100', 2),
(3, 3, 'sample product', 1, '100', '100', 2),
(4, 4, 'sample product1', 1, '100', '100', 2),
(5, 5, 'sample product', 1, '100', '100', 1),
(6, 3, 'sample product', 1, '100', '100', 2),
(7, 3, 'sample product', 1, '100', '100', 2),
(8, 3, 'sample product', 1, '100', '100', 2),
(9, 3, 'sample product', 1, '100', '100', 2),
(10, 3, 'sample product', 1, '100', '100', 2),
(11, 3, 'sample product', 1, '100', '100', 2),
(12, 3, 'dsf', 1, '21', '21', 2),
(13, 3, 'sample product', 1, '100', '100', 2),
(14, 3, 'dsf', 1, '21', '21', 2),
(15, 3, 'sample product', 1, '100', '100', 2),
(16, 3, 'dsf', 1, '21', '21', 2),
(17, 3, 'sample product', 1, '100', '100', 2),
(18, 3, 'dsf', 1, '21', '21', 2),
(19, 3, 'sample product', 1, '100', '100', 1),
(20, 2, 'product b', 2, '50', '100', 1),
(21, 4, 'sample product1', 1, '100.90', '100.9', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_source`
--

CREATE TABLE `enquiry_source` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry_source`
--

INSERT INTO `enquiry_source` (`id`, `name`, `status`) VALUES
(1, 'Walk In', 1),
(2, 'Referral', 1),
(3, 'Phone', 1),
(4, 'Mail', 1),
(5, 'India Mart', 1),
(6, 'Others', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `name`, `parent_id`, `status`) VALUES
(1, 'Active', 0, 1),
(2, 'Inactive', 0, 1),
(3, 'Enquiry Status', 0, 1),
(4, 'Created', 3, 1),
(5, 'Converted', 3, 1),
(6, 'Closed', 3, 1),
(7, 'Followup', 3, 1),
(8, 'Lost', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`login_id`, `user_id`, `user_name`, `password`, `designation_id`, `created_date`, `status`) VALUES
(1, 1, 'kavitha01', 'b4c718df937c3f7a4e51cc942dd197d7', 1, '2018-11-17 18:05:10', 1),
(2, 2, 'Sethu01', 'e73494504cc5cdb9ccf6951ef3183ff5', 2, '2018-11-17 18:05:04', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_vertical`
--
ALTER TABLE `business_vertical`
  ADD PRIMARY KEY (`vertical_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_contact_person`
--
ALTER TABLE `customer_contact_person`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_follow_up`
--
ALTER TABLE `enquiry_follow_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_product`
--
ALTER TABLE `enquiry_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_source`
--
ALTER TABLE `enquiry_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD UNIQUE KEY `login_id` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_vertical`
--
ALTER TABLE `business_vertical`
  MODIFY `vertical_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_contact_person`
--
ALTER TABLE `customer_contact_person`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry_follow_up`
--
ALTER TABLE `enquiry_follow_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_product`
--
ALTER TABLE `enquiry_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `enquiry_source`
--
ALTER TABLE `enquiry_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
