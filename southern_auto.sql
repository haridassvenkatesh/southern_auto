-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 11:37 AM
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
-- Table structure for table `controller`
--

CREATE TABLE `controller` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `controller`
--

INSERT INTO `controller` (`id`, `name`, `description`, `status`) VALUES
(1, 'common_controller', 'common_controller', 1),
(2, 'customer_controller', 'customer_controller', 1),
(3, 'designation_controller', 'designation_controller', 1),
(4, 'employee_controller', 'employee_controller', 1),
(5, 'enquiry_controller', 'enquiry_controller', 1);

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
  `contact_no1` varchar(50) NOT NULL,
  `contact_no2` varchar(50) DEFAULT NULL,
  `email1` varchar(250) NOT NULL,
  `email2` varchar(250) DEFAULT NULL,
  `remarks` varchar(250) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `company_name`, `image`, `address`, `gst_no`, `contact_no1`, `contact_no2`, `email1`, `email2`, `remarks`, `created_date`, `created_by`, `updated_date`, `updated_by`, `status`) VALUES
(1, 'SUEZ Water Technologies India (P) Ltd', '', 'C/o Agility Logistics Pvt Ltd,\r\nShed 9, No 31, 18th Km Old Madras Road, Vigro Nagar PO,\r\nBangalore', '29AACCO5095L1ZU', '9994511545', '', 'sk.manoj.ext@suez.com', '', '', '2018-12-07 11:24:47', 1, '2019-02-07 11:37:31', 1, 1),
(2, 'Hotel Raveez', '', 'The Raviz Resort\r\nKaduvu Resort, Calicut, Kerela', '', '8086820666', '', 'ce.kadavu@theraviz.com', '', '', '2018-12-07 11:36:55', 1, '2018-12-07 11:36:55', 1, 1),
(3, 'Pepsico India , Tirunelveli', '', 'Pepsico India Pvt Ltd,\r\nGangaiKondan, Tirunelveli', '', '8447749388', '', 's.mohanraj@pepsico.com', '', '', '2018-12-15 12:21:00', 1, '2018-12-15 12:21:00', 1, 1),
(4, 'ALSTOM TRANSPORT INDIA LTD', '', 'S.F.NO.41, Kangeyampalayam village, Sulur,\r\nCoimbatore – 641401', '', '9677333043', '', 'karthi.mani@alstomgroup.com', '', '', '2018-12-15 12:35:58', 1, '2018-12-31 12:57:20', 1, 1),
(5, 'PepsiCo India Holdings Pvt. Ltd, Palakkad', '', 'Wise Park, Industrial Development Area,\r\nKanjikode, Palakkad – 678621.', '', '8593022282', '', 'aravindan.n@pepsico.com', '', '', '2018-12-18 14:19:48', 1, '2018-12-18 14:19:48', 1, 1),
(6, 'Flowserve India controls Pvt.Ltd', '', 'Flowserve India controls Pvt.Ltd\r\nSF.No:136/3&137, Myleripalayam – PO,\r\nOthakalmandapam | Coimbatore- 641032', '', '04226611845', '', 'SRD@flowserve.com', '', '', '2018-12-18 18:00:33', 1, '2019-02-07 11:41:04', 1, 1),
(7, 'DANALAKSHMI PAPER MILLS', '', 'DANALAKSHMI PAPER MILLS. \r\nHO: Villampatti, Nilakottai (TK), Dindigul (DT) Tamilnadu.', '', '04543269300', '', 'mills@danalakshmi.in', '', '', '2018-12-18 18:13:30', 1, '2018-12-18 18:13:30', 1, 1),
(8, 'Manalipetro', '', 'Chennai', '', '9445690461', '', 'jayarams@manalipetro.com', '', '', '2019-01-12 13:20:05', 7, '2019-01-12 13:20:59', 7, 1),
(9, 'KR POWER SUPPORTS', '', 'Coimbatore', '', '9363005598', '', 'krpower1045@gmail.com', '', '', '2019-02-07 11:23:57', 1, '2019-02-07 11:23:57', 1, 1);

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
(1, 'Manoj', 1, 9994511545, 'sk.manoj.ext@suez.com', 'Purchase', 'Purchase', 2),
(2, 'Ramesh', 2, 8086820666, 'ce.kadavu@theraviz.com', 'Cheif Engineer', 'Cheif Engineer', 1),
(3, 'Mohan Raj', 3, 8447749388, 's.mohanraj@pepsico.com', 'Plant Manager', 'Plant Manager', 1),
(4, 'Mani karthik', 4, 9677333043, 'karthi.mani@alstomgroup.com', 'Testing Engineer', 'Testing Engineer', 2),
(5, 'Aravindan', 5, 8593022282, 'aravindan.n@pepsico.com', 'Project Division', 'Project Division', 1),
(6, 'Mr.Sekar', 6, 9842026353, 'SRD@flowserve.com', 'Procurement Engg', 'Procurement Engg', 2),
(7, 'Manoj', 1, 9994511545, 'sk.manoj.ext@suez.com', 'Purchase', 'Purchase', 2),
(8, 'Mr.Manoj', 1, 9994511545, 'sk.manoj.ext@suez.com', 'Purchase', 'Purchase', 2),
(9, 'Mr.Mohan', 1, 8123338100, 'mohan.r@suez.com', 'E&IC Service Specialist', 'E&IC Service Specialist', 2),
(10, 'Mr.Paranidaran', 7, 9943054018, 'dpmpulper@danalakshmi.in', 'E&I Superviosor', 'E&I Superviosor', 1),
(11, 'Mani karthik', 4, 9677333043, 'karthi.mani@alstomgroup.com', 'Testing Engineer', 'Testing Engineer', 1),
(12, 'Alex', 4, 7358331893, 'alex.soosaimonickam@alstomgroup.com', 'Enginner', 'Enginner', 1),
(13, 'S. Jayaram', 8, 9445690461, 'jayarams@manalipetro.com', 'Manager', 'Manager', 2),
(14, 'S. Jayaram', 8, 9445690461, 'jayarams@manalipetro.com', 'Manager', 'Manager', 1),
(15, 'Mr.Sekar', 6, 9842026353, 'SRD@flowserve.com', 'Procurement Engg', 'Procurement Engg', 2),
(16, 'Mr. Karthik', 6, 9790441414, 'KNagaraj@flowserve.com', 'Maintenance department', 'Maintenance department', 2),
(17, 'Mr.Manoj', 1, 9994511545, 'sk.manoj.ext@suez.com', 'Technical', 'Technical', 2),
(18, 'Mr.Mohan', 1, 8123338100, 'mohan.r@suez.com', 'E&IC Service Specialist', 'E&IC Service Specialist', 2),
(19, 'Mr.Kovendhan', 1, 9787905001, 'kovendhan.s.ext@suez.com', 'Technical', 'Technical', 2),
(20, 'Mrs.Neelam', 1, 9880057711, 'neelam.agrawal@suez.com', 'Purchase', 'Purchase', 2),
(21, 'Mrs.Abitha', 1, 9535788522, 'abitha.shreenivasan@suez.com', 'Purchase', 'Purchase', 2),
(22, 'Mrs.Sumathi Ramalingam', 9, 9363005598, 'krpower1045@gmail.com', 'Director', 'Director', 1),
(23, 'Mr.Manoj', 1, 9994511545, 'sk.manoj.ext@suez.com', 'Technical', 'Technical', 1),
(24, 'Mr.Mohan', 1, 8123338100, 'mohan.r@suez.com', 'E&IC Service Specialist', 'E&IC Service Specialist', 1),
(25, 'Mr.Kovendhan', 1, 9787905001, 'kovendhan.s.ext@suez.com', 'Technical', 'Technical', 1),
(26, 'Mrs.Neelam', 1, 9880057711, 'neelam.agrawal@suez.com', 'Purchase', 'Purchase', 1),
(27, 'Mrs.Abitha', 1, 9535788522, 'abitha.shreenivasan@suez.com', 'Purchase', 'Purchase', 1),
(28, 'Mr. Swapnil Gharte', 1, 9730378777, 'swapnil.gharte@suez.com', 'Sourcing', 'Sourcing', 1),
(29, 'Mr.Sekar', 6, 9842026353, 'SRD@flowserve.com', 'Procurement Engg', 'Procurement Engg', 1),
(30, 'Mr. Karthik', 6, 9790441414, 'KNagaraj@flowserve.com', 'Maintenance Department', 'Maintenance Department', 1),
(31, 'Mr.Jude', 6, 9994227218, 'JAntone@flowserve.com', 'Instrumentation', 'Instrumentation', 1),
(32, 'Mr.Elumalai', 6, 8122719308, 'ESakthivel@flowserve.com', 'Maintenance Department', 'Maintenance Department', 1);

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
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `name`, `description`, `parent_id`, `created_by`, `created_date`, `updated_date`, `updated_by`, `status`) VALUES
(1, 'Admin', 'Admin', 0, 1, '2018-11-17 17:33:59', '0000-00-00 00:00:00', 0, 1),
(5, 'Senior Project Engineer', 'Project', 0, 1, '2018-12-07 11:15:56', '2018-12-07 11:16:14', 1, 1),
(6, 'Manager', 'Admin', 0, 1, '2018-12-07 12:45:46', '2018-12-07 12:45:46', 1, 1),
(7, 'Project Engineer', 'Project Division', 0, 1, '2018-12-11 12:23:18', '2018-12-11 12:23:18', 1, 1),
(8, 'Accounts', 'Accounts', 0, 1, '2018-12-11 12:23:55', '2018-12-11 12:23:55', 1, 1),
(9, 'Business Development Executive', 'Business Development Executive', 0, 1, '2018-12-11 12:24:28', '2018-12-11 12:24:28', 1, 1);

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
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `remark` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `employee_unique_id`, `photo`, `designation_id`, `address`, `phone_no1`, `phone_no2`, `email`, `dob`, `doj`, `releaving_date`, `created_date`, `created_by`, `updated_date`, `updated_by`, `remark`, `status`) VALUES
(1, 'Admin', 'admin', '', 1, 'Perundurai,\r\nErode', 9876543210, NULL, 'admin@gmail.com', '1994-03-07', '2018-12-02', NULL, '2018-12-05 11:26:10', 0, '0000-00-00 00:00:00', 0, NULL, 1),
(5, 'Jagadesan', '001', 'photo/5c0a0a1413d30_001_9659348647.jpeg', 5, 'Erode', 9659348647, NULL, 'jagadesan@southernautomation.in', '1993-06-08', '2018-11-05', NULL, '2018-12-07 11:20:12', 1, '2018-12-07 11:20:12', 1, NULL, 1),
(6, 'Madhan', '002', '', 6, 'Erode', 7502623776, NULL, 'madhansiva@southernautomation.in', '1995-10-19', '2017-11-06', NULL, '2018-12-07 12:46:52', 1, '2018-12-07 12:46:52', 1, NULL, 1),
(7, 'Sabeek A Sahabudeen', '003', 'photo/5c14a9f3dc9d8_003_9384294849.jpeg', 9, 'Pollachi', 9384294849, NULL, 'sabeek@southernautomation.in', '2002-12-11', '2018-12-11', NULL, '2018-12-11 12:26:24', 1, '2018-12-21 19:38:09', 1, NULL, 1),
(8, 'Gokul Kannan', '004', '', 7, '1/53, Neelakadu, \r\nTiruppur', 9894925991, NULL, 'gokulkannan@southernautomation.in', '1994-08-05', '2019-01-08', NULL, '2019-02-07 10:54:15', 1, '2019-02-07 10:54:15', 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_restriction`
--

CREATE TABLE `employee_restriction` (
  `id` int(11) NOT NULL,
  `controller_id` int(11) NOT NULL,
  `function_name` varchar(300) NOT NULL,
  `role_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_restriction`
--

INSERT INTO `employee_restriction` (`id`, `controller_id`, `function_name`, `role_id`, `status`) VALUES
(1, 2, 'add_customer', 1, 1),
(2, 2, 'view_customer', 1, 1),
(3, 2, 'edit_customer', 1, 1),
(4, 3, 'view_designation', 1, 1),
(5, 3, 'add_designation', 1, 1),
(6, 3, 'edit_designation', 1, 1),
(7, 4, 'view_employee', 1, 1),
(8, 4, 'add_employee', 1, 1),
(9, 4, 'edit_employee', 1, 1),
(10, 5, 'enquiry_master', 1, 1),
(11, 5, 'view_enquiry', 1, 1),
(12, 5, 'create_enquiry', 1, 1),
(13, 5, 'edit_enquiry', 1, 1),
(14, 5, 'view_enquiry_quoted', 1, 1),
(15, 5, 'view_enquiry_converted', 1, 1),
(16, 5, 'view_enquiry_lost', 1, 1),
(17, 5, 'view_enquiry_closed', 1, 1),
(18, 5, 'view_enquiry_hold', 1, 1);

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
  `project_name` varchar(300) NOT NULL,
  `allotted_to` int(11) NOT NULL,
  `remarks` varchar(300) DEFAULT NULL,
  `enquiey_date` date NOT NULL,
  `quoted_date` date DEFAULT NULL,
  `quotation_no` varchar(300) DEFAULT NULL,
  `po_no` varchar(300) DEFAULT NULL,
  `po_date` varchar(100) DEFAULT NULL,
  `delivery_date` varchar(300) DEFAULT NULL,
  `project_no` varchar(300) DEFAULT NULL,
  `invoice_no` varchar(300) DEFAULT NULL,
  `invoice_date` varchar(300) DEFAULT NULL,
  `transporter` varchar(300) DEFAULT NULL,
  `lr_no` varchar(300) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_date` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
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

INSERT INTO `enquiry` (`id`, `enquiry_id`, `company_id`, `contact_id`, `business_vertical`, `enquiry_source`, `refered_by`, `project_name`, `allotted_to`, `remarks`, `enquiey_date`, `quoted_date`, `quotation_no`, `po_no`, `po_date`, `delivery_date`, `project_no`, `invoice_no`, `invoice_date`, `transporter`, `lr_no`, `created_date`, `created_by`, `updated_date`, `updated_by`, `enquiry_status`, `status`, `amo_with_out_tax`, `discount`, `discount_value`, `gst_percent`, `gst_value`, `net_value`) VALUES
(1, 'ENQ0001', 1, 23, 1, 1, 'sethu raman', 'San Project Testing', 5, 'San Project Testing', '2019-02-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-21 10:42:10', 1, '2019-02-21 10:42:10', 1, 4, 1, '1000', '0', '0', 0, '0', '1000'),
(2, 'ENQ0002', 2, 2, 1, 1, '', 'Southern Project', 5, 'Southern Project Testing', '2019-02-21', '2019-02-21', 'SA-Q-19001', 'Po-001', '2019-02-21', '2019-02-21', 'PRJ-19001', '', '', '', '', '2019-02-21 10:43:06', 1, '2019-02-21 10:45:09', 1, 6, 1, '10000', '0', '0', 18, '1800', '11800');

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
(1, 1, 'software', 1, '1000', '1000', 1),
(2, 2, 'southern', 1, '1000', '1000', 2),
(3, 2, 'southern', 1, '1000', '1000', 2),
(4, 2, 'southern', 1, '10000', '10000', 2),
(5, 2, 'southern', 1, '10000', '10000', 1);

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
(5, 'Quoted', 3, 1),
(6, 'Converted', 3, 1),
(7, 'Lost', 3, 1),
(8, 'Closed', 3, 1),
(9, 'Hold', 3, 1);

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
(1, 1, 'admin', '2f80e8253a6d34c2061ae42befc938d2', 1, '2018-12-05 11:26:10', 1),
(5, 5, '001', 'a743a1003c98d6d84301ec9f7af84a08', 5, '2018-12-07 11:20:12', 1),
(6, 6, '002', '8feb7cfa4ff438a2e8f92371320332f3', 6, '2018-12-07 12:46:52', 1),
(7, 7, '003', 'de64a0726b489c70926a69c96e021df8', 9, '2018-12-21 19:38:09', 1),
(8, 8, '004', 'e0c5c83fabb5e16169287de41fc0e408', 7, '2019-02-07 10:54:15', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_vertical`
--
ALTER TABLE `business_vertical`
  ADD PRIMARY KEY (`vertical_id`);

--
-- Indexes for table `controller`
--
ALTER TABLE `controller`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `employee_restriction`
--
ALTER TABLE `employee_restriction`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `controller`
--
ALTER TABLE `controller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer_contact_person`
--
ALTER TABLE `customer_contact_person`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_restriction`
--
ALTER TABLE `employee_restriction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry_follow_up`
--
ALTER TABLE `enquiry_follow_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_product`
--
ALTER TABLE `enquiry_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry_source`
--
ALTER TABLE `enquiry_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
