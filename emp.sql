-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2018 at 10:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `image` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `firstname`, `middlename`, `password`, `username`, `lastname`, `role`, `created_at`, `updated_at`, `image`, `remember_token`, `address`, `birthdate`, `position`) VALUES
(1, 'admin', 'admin', '$2y$10$EBDpEA1qpYdpqrPJjzkgWem/pHbP4stwL3Y/W/16nZvg9avwj.D7W', 'admin', 'admin', 'admin', '2018-02-28 05:47:59', '2018-02-28 05:47:59', '', 'bAxoWwF0qKz77iXXgVQAmva0Zgetc0DJxbsA6JUpCwaHqRv7iRvsAwIn6eQl', '', '', ''),
(2, 'admin', 'admin', '$2y$10$hnuNaDEvTGk6umvlaMiA.uT2zIpSyJ8RV0rEdxNbgzEiABskYloAy', 'adadm', 'admin', 'user', '2018-02-28 05:48:03', '2018-02-28 05:48:03', 'default/user.png', '', '', '', ''),
(3, 'sads', 'dfdsf', '$2y$10$9IaqsYX243dNcxc/X5NzbeTDFQ3M12VUlB7.o33BGqdmHZWU3g3Va', 'sdf_sa', 'sdf', 'user', '2018-03-07 02:04:40', '2018-03-07 02:04:40', 'default/user.png', NULL, NULL, NULL, NULL),
(4, 'sdf', 'asdsa', '$2y$10$bIZz0QhxO4BznAZhVsQRbuoAP2vpwkGPVgJ0ze8LUd3MRK386VMDO', 'asdsa_sd', 'asdsa', 'user', '2018-03-07 02:37:37', '2018-03-07 02:37:37', 'default/user.png', NULL, 'dfd', '2018-03-21', 'fdsf');

-- --------------------------------------------------------

--
-- Table structure for table `employee_log`
--

CREATE TABLE `employee_log` (
  `l_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_log`
--

INSERT INTO `employee_log` (`l_id`, `start_date`, `status`, `end_date`, `emp_id`, `created_at`, `updated_at`) VALUES
(2, '2018-03-07', NULL, '2018-03-07', 2, '2018-03-07 03:02:10', '2018-03-07 03:02:10'),
(3, '2018-03-07', NULL, '2018-03-07', 2, '2018-03-07 03:13:48', '2018-03-07 03:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `employee_log_history`
--

CREATE TABLE `employee_log_history` (
  `lh_id` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `time_in` time DEFAULT NULL,
  `time_out` time DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_training`
--

CREATE TABLE `employee_training` (
  `et_id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_training`
--

INSERT INTO `employee_training` (`et_id`, `emp_id`, `t_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, '2018-02-28 09:19:22', '2018-02-28 09:19:22'),
(3, 2, 2, '2018-02-28 09:19:22', '2018-02-28 09:19:22'),
(4, 1, 1, '2018-03-06 07:16:51', '2018-03-06 07:16:51'),
(5, 2, 2, '2018-02-28 09:25:01', '2018-02-28 09:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `t_id` int(11) NOT NULL,
  `end` varchar(255) DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`t_id`, `end`, `start`, `venue`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, ' 03/05/2018', '02/28/2018 ', 'butuan', 'training1', 'training1', '2018-02-28 08:20:09', '2018-02-28 08:20:09'),
(2, ' 03/01/2018', '02/28/2018 ', 'butuan', 'training2', 'training2', '2018-02-28 08:20:30', '2018-02-28 08:20:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `employee_log`
--
ALTER TABLE `employee_log`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employee_log_history`
--
ALTER TABLE `employee_log_history`
  ADD PRIMARY KEY (`lh_id`),
  ADD KEY `l_id` (`l_id`);

--
-- Indexes for table `employee_training`
--
ALTER TABLE `employee_training`
  ADD PRIMARY KEY (`et_id`),
  ADD KEY `t_id` (`t_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee_log`
--
ALTER TABLE `employee_log`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee_log_history`
--
ALTER TABLE `employee_log_history`
  MODIFY `lh_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_training`
--
ALTER TABLE `employee_training`
  MODIFY `et_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_log`
--
ALTER TABLE `employee_log`
  ADD CONSTRAINT `employee_log_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_log_history`
--
ALTER TABLE `employee_log_history`
  ADD CONSTRAINT `employee_log_history_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `employee_log` (`l_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_training`
--
ALTER TABLE `employee_training`
  ADD CONSTRAINT `employee_training_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `training` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_training_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
