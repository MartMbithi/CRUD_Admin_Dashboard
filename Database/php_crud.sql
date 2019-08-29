-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2019 at 12:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `repeatpassword` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `repeatpassword`, `email`) VALUES
(2, 'admin', 'df0056bf1e9ee39794c7680a186bed41a7d5c0ec', 'df0056bf1e9ee39794c7680a186bed41a7d5c0ec', 'martdevelopers254@gmail.com'),
(5, 'admind', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'martdevelopers254@gmail.com'),
(6, 'Adminwo', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'admin@devlan.martdev.info');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(20) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `bank_details` varchar(200) NOT NULL,
  `passport` varchar(200) NOT NULL,
  `fb_id` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `address` longtext NOT NULL,
  `c_type` varchar(200) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `fname`, `lname`, `email`, `mobile`, `pic`, `bank_details`, `passport`, `fb_id`, `dob`, `address`, `c_type`, `sex`, `status`) VALUES
(1, 'Martin', 'Mbithi', 'martdevelopers254@gmail.com', '+25403729776', 'mart.JPG', '1270001', '35574881', 'mbithi martin', '07/13/1997', '127.0.0.1\r\nLocalhost', 'vendor', 'male', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `event_name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `notification_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `day`, `month`, `event_name`, `city`, `country`, `notification_type`) VALUES
(1, '1', 'Apr', 'Devlan UserMeetup', 'Nairobi', 'Kenya', 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(20) NOT NULL,
  `bank_account` varchar(200) NOT NULL,
  `to_bankacc` varchar(200) NOT NULL,
  `posting_date` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `bank_account`, `to_bankacc`, `posting_date`, `description`, `amount`, `type`) VALUES
(1, 'Brac Bank', '', '08/27/2019', 'DevLan First Invoice', '1200', 'Deposit'),
(2, 'Brac Bank', '', '08/28/2019', 'Paid Devlan Invoice', '1200', 'Expense'),
(3, 'Brac Bank', 'National Bank', '08/27/2019', 'Devlan Invoice Payment', '1200', 'Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(20) NOT NULL,
  `account` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `invoice_date` varchar(200) NOT NULL,
  `due_date` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `account`, `amount`, `invoice_date`, `due_date`, `type`, `status`) VALUES
(1, '127001 Bank Of LocalHost', '$1200', '2019-08-28', '2019-08-31', 'Onetime', 'Active'),
(2, '127001 Bank Of LocalHost', '$1200', '2019-08-28', '2019-08-31', 'Reccurring', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(20) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_progress` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_progress`, `status`) VALUES
(1, 'Admin dashboard update', '50', 'Progressing'),
(2, 'Database Administration', '30', 'Failed'),
(3, 'Back End Development', '100', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `id` int(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `quotes` varchar(200) NOT NULL,
  `exp_date` varchar(200) NOT NULL,
  `entry_date` varchar(200) NOT NULL,
  `c_mobile` varchar(200) NOT NULL,
  `stages` varchar(200) NOT NULL,
  `sales_tax` varchar(200) NOT NULL,
  `discount` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`id`, `subject`, `customer`, `quotes`, `exp_date`, `entry_date`, `c_mobile`, `stages`, `sales_tax`, `discount`) VALUES
(1, 'Devlan Platform  ', 'Martin Mbithi', 'This is the devlan platform quotes', '08/28/2019', '08/28/2019', '+25403729776', 'Accept', '0.16%', '10%');

-- --------------------------------------------------------

--
-- Table structure for table `tax_reports`
--

CREATE TABLE `tax_reports` (
  `id` int(20) NOT NULL,
  `date` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `credit` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax_reports`
--

INSERT INTO `tax_reports` (`id`, `date`, `account`, `type`, `category`, `amount`, `description`, `credit`, `balance`) VALUES
(1, '2019-08-28', 'Devlan Account', 'Income', 'Small Amount', '$1200', 'Tax Payment For Devlan Acconut', '$1200', '$0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax_reports`
--
ALTER TABLE `tax_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tax_reports`
--
ALTER TABLE `tax_reports`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
