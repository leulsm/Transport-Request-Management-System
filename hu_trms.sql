-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2022 at 04:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hu_trms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE `cc` (
  `coid` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `cabb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`coid`, `cname`, `cpassword`, `cabb`) VALUES
(62, 'HUMAN & BEHEVIORAL', 'CHBS@12', 'CHBS'),
(63, 'COMPUTING &  INFO', 'CCI@12', 'CCI'),
(64, 'AGRICULTURE', 'COA@12', 'COA'),
(65, 'SOCIAL', 'CSS@12', 'CSS'),
(66, 'LOW', 'COL@12', 'COL');

-- --------------------------------------------------------

--
-- Table structure for table `huadmin`
--

CREATE TABLE `huadmin` (
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `huadmin`
--

INSERT INTO `huadmin` (`admin_name`, `admin_password`, `admin_id`) VALUES
('ADMINONE', 'ADMIN@12', 'AD_12');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `name` varchar(30) NOT NULL,
  `name2` varchar(30) NOT NULL,
  `name3` varchar(30) NOT NULL,
  `name4` varchar(30) NOT NULL,
  `name5` varchar(30) NOT NULL,
  `name6` varchar(30) NOT NULL,
  `for_collage` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `cartype` varchar(50) NOT NULL,
  `requestdate` date NOT NULL,
  `startdate` date NOT NULL,
  `starthour` time(6) NOT NULL,
  `enddate` date NOT NULL,
  `endhour` time(6) NOT NULL,
  `status` varchar(100) NOT NULL,
  `staffid` varchar(30) NOT NULL,
  `rid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestform`
--

INSERT INTO `requestform` (`name`, `name2`, `name3`, `name4`, `name5`, `name6`, `for_collage`, `department`, `destination`, `reason`, `cartype`, `requestdate`, `startdate`, `starthour`, `enddate`, `endhour`, `status`, `staffid`, `rid`) VALUES
('leul', 'leiul', 'kytros', 'kemal', 'abdeta', 'abdulahi', 'CCI', 'SWE', 'FINFINNE', 'APPARENT', 'Rava-4', '2022-07-07', '2022-07-14', '00:00:12.000000', '2022-07-31', '00:00:11.000000', 'Approved', 'HU-11', 1),
('leul', 'asd', 'asddf', 'asdfdfff', 'fds', 'dfsd', 'CSS', 'cs', 'ADDIS', 'tour', 'Service bus', '2022-07-14', '2022-07-15', '00:00:05.000000', '2022-07-07', '00:00:11.000000', 'Approved', 'HU-11', 2),
('leul', 'SOL', 'AAS', 'kemal', 'abdeta', 'sd', 'COA', 'narm', 'harar', 'JUST CHILL', 'Pickup', '2022-07-14', '2022-07-22', '00:00:23.000000', '2022-07-13', '00:00:04.000000', 'Approved', 'HU-11', 3),
('leul solomon', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'CCI', 'SWE', 'ADDIS', 'qqqq', 'Service bus', '2022-07-22', '2022-07-22', '00:00:02.000000', '2022-07-21', '00:00:03.000000', 'Approved', 'HU-11', 4),
('leul solomon', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'CSS', 'hsdf', 'ADDIS', 'dddddddddd', 'Pickup', '2022-07-11', '2022-07-22', '00:00:03.000000', '2022-07-21', '00:00:05.000000', 'padding', 'hu-1234', 5),
('leul solomon', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'CSS', 'hsdf', 'harar', 'qqqqqqqqqqqqqqe', 'Service bus', '2022-07-23', '2022-07-30', '00:00:03.000000', '2022-07-14', '00:00:04.000000', 'padding', 'hu-1234', 6),
('leul solomon', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'FOUR', 'CCI', 'SWE', 'Jijiga', 'summer trip', 'Rava-4', '2022-07-21', '2022-07-21', '00:00:02.000000', '2022-07-27', '00:00:01.000000', 'Approved', 'HU-11', 7);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(30) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `collage` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `passwor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `first_name`, `middle_name`, `last_name`, `collage`, `phone`, `passwor`) VALUES
('2200', 'KEMAL', 'TAJUDIN', 'ABDELA', '', '09090909', '123'),
('HU-11', 'leul', 'solomon', 'asefa', 'SWE', '+251932599064', 'hu@12'),
('hu-1234', 'leiul', 'mekonnen', 'bezu', '', '1234554678', 'l@12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cc`
--
ALTER TABLE `cc`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `huadmin`
--
ALTER TABLE `huadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `requestform`
--
ALTER TABLE `requestform`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cc`
--
ALTER TABLE `cc`
  MODIFY `coid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `requestform`
--
ALTER TABLE `requestform`
  MODIFY `rid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
