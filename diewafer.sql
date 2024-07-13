-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 05:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diewafer`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `birthdate` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `quest1` varchar(100) NOT NULL,
  `quest2` varchar(100) NOT NULL,
  `quest3` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `last_name`, `first_name`, `gender`, `age`, `birthdate`, `username`, `password`, `quest1`, `quest2`, `quest3`, `status`) VALUES
(1, 'Cena', 'John', 'Male', 43, '2021-01-01', 'john24', 'johncena', 'Wrestling', 'Black And White', 'Wrestling', 'user'),
(2, 'Admin', 'Admin', 'Male', 0, '0000-00-00', 'Admin', 'admin123', '', '', '', 'admin'),
(4, 'Cvxcvxv', 'Vxcvcxv', 'Male', 12, '2021-01-01', 'asasa', 'karla24d', 'Asas', 'Asa', 'Asas', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `in_going`
--

CREATE TABLE `in_going` (
  `id` int(100) NOT NULL,
  `customer_code` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `plate_number` varchar(100) NOT NULL,
  `hawb` varchar(100) NOT NULL,
  `airway_bill` varchar(100) NOT NULL,
  `peza_ticket` varchar(100) NOT NULL,
  `trucker` varchar(100) NOT NULL,
  `wafer_run` varchar(100) NOT NULL,
  `device_number` varchar(100) NOT NULL,
  `customer_lot_number` varchar(100) NOT NULL,
  `country_origin` varchar(100) NOT NULL,
  `plant_site` int(100) NOT NULL,
  `wafer_type` varchar(100) NOT NULL,
  `airlines` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `container_type` varchar(100) NOT NULL,
  `wafer_size` int(100) NOT NULL,
  `wafer_number` int(100) NOT NULL,
  `die_qty` int(100) NOT NULL,
  `sawn_date` date NOT NULL,
  `unit_price` int(100) NOT NULL,
  `p_o` int(100) NOT NULL,
  `invoice` int(100) NOT NULL,
  `plane_number` varchar(100) NOT NULL,
  `number_box` varchar(100) NOT NULL,
  `wafer_qty` int(100) NOT NULL,
  `customer_info` varchar(100) NOT NULL,
  `edt_date` date NOT NULL,
  `edt_time` time NOT NULL,
  `eta_date` date NOT NULL,
  `eta_time` time NOT NULL,
  `etc_date` date NOT NULL,
  `etc_time` time NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_going`
--

INSERT INTO `in_going` (`id`, `customer_code`, `customer_name`, `plate_number`, `hawb`, `airway_bill`, `peza_ticket`, `trucker`, `wafer_run`, `device_number`, `customer_lot_number`, `country_origin`, `plant_site`, `wafer_type`, `airlines`, `driver`, `container_type`, `wafer_size`, `wafer_number`, `die_qty`, `sawn_date`, `unit_price`, `p_o`, `invoice`, `plane_number`, `number_box`, `wafer_qty`, `customer_info`, `edt_date`, `edt_time`, `eta_date`, `eta_time`, `etc_date`, `etc_time`, `remarks`) VALUES
(11, '707', 'TI(PHILIPPINES)', '454', '4545', '4545', '45454', 'Sample 1', 'cbxncb', 'GHLM3150CA', '3044626CU8', 'United States of America', 1, 'NORMAL WAFER', 'Aegean Airlines', 'asa', 'Sample 1', 454, 2, 2242, '2021-01-01', 454, 1, 1, 'sasa', '1', 1, 'asasa', '2021-01-01', '00:00:00', '2021-01-01', '00:00:00', '2021-01-01', '01:00:00', 'RTB 1S=2242 #22  10/5/13EA\r\n'),
(12, '610', 'M AC TECHNOLOGY', 'asasas121', '4545', '545', '4545', 'trucker', 'asasa', 'J21212-A18-JAZ', 'J11736.1', 'United States of America', 4, 'NORMAL WAFER', 'Aegean Airlines', 'asas', 'Sample 1', 1, 1, 291278, '2021-01-01', 212, 1, 2, 'asa121', '1', 1, 'asas', '2021-01-01', '00:00:00', '2021-01-01', '00:00:00', '2021-01-01', '01:00:00', 'cbxncbnxxc');

-- --------------------------------------------------------

--
-- Table structure for table `in_going_chart`
--

CREATE TABLE `in_going_chart` (
  `id` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `sale` int(100) NOT NULL,
  `expenses` int(100) NOT NULL,
  `profit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `in_going_chart`
--

INSERT INTO `in_going_chart` (`id`, `month`, `sale`, `expenses`, `profit`) VALUES
(1, 'January', 1000, 400, 200),
(2, 'Febuary', 1170, 460, 250),
(3, 'March', 660, 1120, 300),
(5, 'April', 1030, 540, 350);

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE `login_history` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_date` date NOT NULL,
  `time_in` time NOT NULL,
  `time_out` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`id`, `username`, `user_date`, `time_in`, `time_out`) VALUES
(1, 'John', '2021-09-12', '22:30:39', '00:00:00'),
(2, 'John', '2021-09-12', '22:32:50', '00:00:00'),
(3, 'John', '2021-09-12', '22:43:32', '00:00:00'),
(4, 'John', '2021-09-12', '22:44:54', '00:00:00'),
(5, 'John', '2021-09-12', '22:46:29', '22:53:17'),
(6, 'John', '2021-09-12', '22:54:03', '23:01:22'),
(7, 'John', '2021-09-12', '23:02:35', '23:04:00'),
(8, 'John', '2021-09-12', '23:12:02', '23:13:18'),
(9, 'John', '2021-09-16', '06:53:59', '06:54:23'),
(10, 'John', '2021-09-16', '09:18:30', '10:26:51'),
(11, 'Vxcvcxv', '2021-09-17', '10:23:55', '10:24:04'),
(12, 'Vxcvcxv', '2021-09-17', '10:24:10', '19:04:26'),
(13, 'John', '2021-09-19', '19:04:33', '19:04:44'),
(14, 'John', '2021-09-20', '11:18:34', '11:33:55'),
(15, 'John', '2021-09-20', '11:40:12', '11:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `out_going`
--

CREATE TABLE `out_going` (
  `id` int(100) NOT NULL,
  `customer_code` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `plate_number` varchar(100) NOT NULL,
  `hawb` varchar(100) NOT NULL,
  `airway_bill` varchar(100) NOT NULL,
  `peza_ticket` varchar(100) NOT NULL,
  `trucker` varchar(100) NOT NULL,
  `wafer_run` varchar(100) NOT NULL,
  `device_number` varchar(100) NOT NULL,
  `customer_lot_number` varchar(100) NOT NULL,
  `country_origin` varchar(100) NOT NULL,
  `plant_site` int(100) NOT NULL,
  `wafer_type` varchar(100) NOT NULL,
  `airlines` varchar(100) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `container_type` varchar(100) NOT NULL,
  `wafer_size` varchar(100) NOT NULL,
  `wafer_number` int(100) NOT NULL,
  `die_qty` int(100) NOT NULL,
  `sawn_date` date NOT NULL,
  `unit_price` int(100) NOT NULL,
  `p_o` int(100) NOT NULL,
  `invoice` int(100) NOT NULL,
  `plane_number` varchar(100) NOT NULL,
  `number_box` int(100) NOT NULL,
  `wafer_qty` int(100) NOT NULL,
  `customer_info` varchar(100) NOT NULL,
  `edt_date` date NOT NULL,
  `edt_time` time NOT NULL,
  `eta_date` date NOT NULL,
  `eta_time` time NOT NULL,
  `etc_date` date NOT NULL,
  `etc_time` time NOT NULL,
  `eoh` int(100) NOT NULL,
  `schedule_lot` date NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_going`
--

INSERT INTO `out_going` (`id`, `customer_code`, `customer_name`, `plate_number`, `hawb`, `airway_bill`, `peza_ticket`, `trucker`, `wafer_run`, `device_number`, `customer_lot_number`, `country_origin`, `plant_site`, `wafer_type`, `airlines`, `driver`, `container_type`, `wafer_size`, `wafer_number`, `die_qty`, `sawn_date`, `unit_price`, `p_o`, `invoice`, `plane_number`, `number_box`, `wafer_qty`, `customer_info`, `edt_date`, `edt_time`, `eta_date`, `eta_time`, `etc_date`, `etc_time`, `eoh`, `schedule_lot`, `remarks`) VALUES
(6, '311', 'SEQUOIA', 'asas545', '454', '454', '5454', 'Sample 2', '454', 'SILICON WAFER', '7SH33000W7', 'Taiwan', 1, 'SAWED WAFER', 'Aegean Airlines', 'asas', 'Sample 1', '454', 454, 390, '2021-01-01', 1, 545, 545454, '5454asas', 1, 1, 'aas', '2021-01-01', '00:00:00', '2021-01-01', '00:00:00', '2021-01-01', '01:00:00', 545, '2021-01-02', 'nxcbnxcbxnc'),
(7, '727', 'TRANSWITCH', 'sasasa', '454', '4545', '4545', 'Sample 2', 'asas', 'CUBIT3', 'F37877.1-1', 'United States of America', 2, 'NORMAL WAFER', 'Aer Lingus', 'zxzxzx', 'Sample 1', '454', 5454, 7616, '2021-01-01', 4545, 4545, 45454, '4545', 1, 1, 'xzxzxzx', '2021-01-01', '01:00:00', '2021-01-01', '01:00:00', '2021-01-01', '01:00:00', 1, '2021-01-01', 'xbcxnbcnxc');

-- --------------------------------------------------------

--
-- Table structure for table `out_going_chart`
--

CREATE TABLE `out_going_chart` (
  `id` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `sale` int(11) NOT NULL,
  `expenses` int(100) NOT NULL,
  `profit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `out_going_chart`
--

INSERT INTO `out_going_chart` (`id`, `year`, `month`, `sale`, `expenses`, `profit`) VALUES
(1, 2020, 'January', 40000, 2300, 10000),
(2, 2020, 'Febuary', 70500, 30000, 10500),
(3, 2020, 'March', 50000, 5000, 2000),
(4, 2020, 'April', 60000, 5000, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `return_chart`
--

CREATE TABLE `return_chart` (
  `id` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `return` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `profit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_chart`
--

INSERT INTO `return_chart` (`id`, `year`, `month`, `return`, `balance`, `profit`) VALUES
(1, 2020, 'January', 500, 1000, 400),
(2, 2020, 'Febuary', 1000, 3000, 350),
(3, 2020, 'March', 200, 900, 150),
(4, 2020, 'April', 660, 1200, 400);

-- --------------------------------------------------------

--
-- Table structure for table `return_transaction`
--

CREATE TABLE `return_transaction` (
  `id` int(100) NOT NULL,
  `returns` int(100) NOT NULL,
  `inflow` int(100) NOT NULL,
  `balances` int(100) NOT NULL,
  `date` date NOT NULL,
  `remark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_transaction`
--

INSERT INTO `return_transaction` (`id`, `returns`, `inflow`, `balances`, `date`, `remark`) VALUES
(6, 50, 200, 150, '2021-09-11', 'sdsadasdasd'),
(7, 50, 600, 550, '2021-09-12', 'zxczxczxc');

-- --------------------------------------------------------

--
-- Table structure for table `split_chart`
--

CREATE TABLE `split_chart` (
  `id` int(100) NOT NULL,
  `year` int(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `outflow` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `profit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `split_chart`
--

INSERT INTO `split_chart` (`id`, `year`, `month`, `outflow`, `balance`, `profit`) VALUES
(1, 2020, 'January', 200, 1000, 250),
(2, 2020, 'Febuary', 300, 900, 300),
(3, 2020, 'March', 1000, 4000, 600),
(4, 2020, 'April', 1000, 2000, 100);

-- --------------------------------------------------------

--
-- Table structure for table `split_transaction`
--

CREATE TABLE `split_transaction` (
  `id` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `customer` varchar(100) NOT NULL,
  `lot_number` int(11) NOT NULL,
  `outflow` int(100) NOT NULL,
  `inflow` int(100) NOT NULL,
  `balance` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `split_transaction`
--

INSERT INTO `split_transaction` (`id`, `department`, `customer`, `lot_number`, `outflow`, `inflow`, `balance`, `date`) VALUES
(4, 'bvxncvbxm', 'qwqwqw', 1213, 9000, 50, 8950, '2021-09-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_going`
--
ALTER TABLE `in_going`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_going_chart`
--
ALTER TABLE `in_going_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_going`
--
ALTER TABLE `out_going`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_going_chart`
--
ALTER TABLE `out_going_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_chart`
--
ALTER TABLE `return_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `return_transaction`
--
ALTER TABLE `return_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `split_chart`
--
ALTER TABLE `split_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `split_transaction`
--
ALTER TABLE `split_transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `in_going`
--
ALTER TABLE `in_going`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `in_going_chart`
--
ALTER TABLE `in_going_chart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `out_going`
--
ALTER TABLE `out_going`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `out_going_chart`
--
ALTER TABLE `out_going_chart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return_chart`
--
ALTER TABLE `return_chart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `return_transaction`
--
ALTER TABLE `return_transaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `split_chart`
--
ALTER TABLE `split_chart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `split_transaction`
--
ALTER TABLE `split_transaction`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
