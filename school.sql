-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 07:24 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `COMMENTid` int(11) NOT NULL,
  `insert_date` datetime NOT NULL,
  `user` varchar(256) NOT NULL,
  `notice` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`COMMENTid`, `insert_date`, `user`, `notice`) VALUES
(30, '2018-11-10 09:05:04', 'principal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec porta sem, nec placerat velit. Aenean scelerisque turpis et rhoncus laoreet. Aliquam id enim venenatis, eleifend urna ac, convallis est. Suspendisse ac pharetra massa, sit amet efficitur arcu. Integer luctus elit faucibus dui hendrerit, ut viverra ipsum tempor. Ut velit sapien, suscipit vitae velit vel, tincidunt rutrum quam. Phasellus tempus, augue vitae pretium hendrerit, urna turpis congue ante, et facilisis neque massa ac nunc. Sed pellentesque placerat tincidunt. Aenean a augue sit amet elit elementum aliquet. Nulla laoreet imperdiet orci, non condimentum nunc tristique non. Morbi et erat viverra, feugiat nulla et, elementum dolor. Curabitur rutrum nulla at enim varius sagittis. Duis vulputate tempor nisl, non fringilla diam interdum sollicitudin.'),
(31, '2018-11-19 10:20:23', 'principal', 'this is a notice'),
(32, '2018-11-19 11:27:16', 'principal', '');

-- --------------------------------------------------------

--
-- Table structure for table `std.parent`
--

CREATE TABLE `std.parent` (
  `sn` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone.number` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` text NOT NULL,
  `class` text NOT NULL,
  `cteacher` text NOT NULL,
  `section` text NOT NULL,
  `validity` int(11) NOT NULL,
  `parentname` varchar(256) NOT NULL,
  `stdfullname` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std.parent`
--

INSERT INTO `std.parent` (`sn`, `firstname`, `lastname`, `phone.number`, `username`, `password`, `email`, `class`, `cteacher`, `section`, `validity`, `parentname`, `stdfullname`) VALUES
(8, 'Dewanik', 'Koirala', 2147483647, 'dewanik', '$2y$10$PBc5oTdoT1uZwEJX6/5nSuy/po./hm6OH.9dGI9NVPb5SlIRAYNy2', 'Kdewanik@gmail.com', 'Grade 10', 'Kdewanik@gmail.com', 'B', 1, 'hari kumar', 'Dewanik Koirala'),
(9, 'Ashim', 'Dahal', 2147483647, 'ashim12', '$2y$10$DiqtkX/MouGQ6mqXKJX4xeiMBupSq5iYhy5oCVhjgiLV8ilD6yFa.', 'bboxchmpx@gmail.com', 'Grade 1', 'll@gmail.com', 'C', 1, 'raja haris', 'Ashim dahal'),
(10, 'class', 'one', 1234567890, 'class1', '$2y$10$8XwOfqM0V99vHpD1svfhaO6InsTPS2blGjrxsnO3YliyAoRa1aCTi', 'p@gmail.com', 'Grade 1', 'kkl@gmail.com', 'A', 1, 'hero alom', 'Class one'),
(11, 'Ashim', 'Dahal', 2147483647, 'ten', '$2y$10$a6EnLd.lfN1tgXbxM1lU8.b4ucqykeew85SyXTdjBnrE8BKuG/8KO', 'bboxchmpx@gmail.com', 'Grade 10', 'kklm@gmail.com', 'A', 1, 'mr don', 'Ashim Dahal'),
(12, 'fivekostd', 'jpt', 1234567890, '56p', '$2y$10$Ejl7NT8PGzUYai3qwhqsWuhscm.x0xrBRF/IWjc/qIJLjaFnAFhlu', 'lpl@gmail.com', 'Grade 5', 'klp@gmail.com', 'A', 1, 'my dad', 'fivekostd jpt'),
(13, 'Ashim', 'Dahal', 2147483647, '789', '$2y$10$80sAwn6cgR4/4ORybDEo/enQm89YW/TnMpSvxOaGB6KFrScJ/rTDm', 'bboxchmpx@gmail.com', 'Grade 10', 'klp@gmail.com', 'C', 1, 'Bhima Devi Dahal', 'Ashim Dahal'),
(15, 'test', 'test', 2147483647, 'df78', '$2y$10$nXatxtL9WJwGVLGG00S6X.p/xfLT6iOahMLNLMKa08fjk4qYzzM0i', 'df@gmail.com', 'Grade 9', 'kklm@gmail.com', 'B', 1, 'jpt ho', 'test test'),
(16, 'Jenish', 'Gautam', 2147483647, 'jenish15', '$2y$10$nvZOsIcbLkoxZ9Xocni/v.IcLu46Hj3081CUMFYSIzkUC41kRwAQm', 'jenishgautam12@gmail.com', 'Grade 10', 'll@gmail.com', 'A', 1, 'Ganga Gautam', 'Jenish Gautam');

-- --------------------------------------------------------

--
-- Table structure for table `teachers.detail`
--

CREATE TABLE `teachers.detail` (
  `ID` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phone.number` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `assigned.class` text NOT NULL,
  `email` varchar(256) NOT NULL,
  `assigned.section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers.detail`
--

INSERT INTO `teachers.detail` (`ID`, `firstname`, `lastname`, `phone.number`, `username`, `password`, `assigned.class`, `email`, `assigned.section`) VALUES
(5, 'principal', '', 2147483647, 'principal12', '$2y$10$48uRnmEH211ngDL8.qI2luefEG.7GNMZsDpCr9daWyZFhseM9A9tW', '0', 'pr@gmail.com', ''),
(9, 'teacher', 'sahab', 2147483647, 'teacher12', '$2y$10$4/xctbLc4za0Brho/j.5buzc5rehvIsJ3RNJdf6KeZyB04PIZDDTq', 'Nursery', 'kkl@gmail.com', 'A'),
(10, 'sahhaab', 'sir', 1234567890, '45l', '$2y$10$LPyxvZHma5OrnfOflPUgEeaEyLnKW3nqCsCx7SCvTN38ziyxIsZVm', 'Grade 1', 'kklm@gmail.com', 'A'),
(11, 'test', 'sir', 1234567890, 'klp', '$2y$10$kvlj5H5YF7pjECFw9QHt5.ggQM/5u6JnHfuy./N/Q1RUJW896evry', 'Grade 5', 'klp@gmail.com', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`COMMENTid`);

--
-- Indexes for table `std.parent`
--
ALTER TABLE `std.parent`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `teachers.detail`
--
ALTER TABLE `teachers.detail`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `COMMENTid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `std.parent`
--
ALTER TABLE `std.parent`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers.detail`
--
ALTER TABLE `teachers.detail`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
