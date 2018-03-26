-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 10:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `username`, `pass`) VALUES
(1, 'Kabir Hasan', 'acrush@gmail.com', 'acrush', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `att_id` int(11) NOT NULL,
  `std_id` int(11) DEFAULT NULL,
  `cls_id` int(11) DEFAULT NULL,
  `pre_abs` int(11) DEFAULT NULL,
  `_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `cls_id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(10) NOT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`cls_id`, `class`, `section`, `capacity`) VALUES
(10, 6, 'Sec A', 10),
(12, 6, 'Sec B', 20),
(13, 7, 'Sec A', 20),
(14, 7, 'Sec B', 20),
(15, 8, 'Sec A', 20),
(16, 8, 'Sec B', 5),
(17, 6, 'Sec C', 20),
(18, 8, 'Sec C', 20),
(19, 10, 'Sec A', 20),
(20, 7, 'Sec C', 20);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `fac_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `desig` varchar(30) NOT NULL,
  `phone_no` char(14) NOT NULL DEFAULT '+880',
  `email` varchar(35) NOT NULL,
  `address` varchar(80) NOT NULL,
  `blood_group` varchar(6) NOT NULL,
  `joining_date` date NOT NULL,
  `no_of_leaves` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`fac_id`, `name`, `desig`, `phone_no`, `email`, `address`, `blood_group`, `joining_date`, `no_of_leaves`) VALUES
(1, 'Kabir Hasan', 'Lect', '+880', '', '', '', '0000-00-00', 0),
(2, 'Kabir Hsan', 'Desig 1', '+880', '', '', 'A(+ve', '2018-02-06', 0),
(3, '', '', '', '', '', '', '0000-00-00', 0),
(4, 'Sadab Fatin', 'Desig 2', '+880', '', '', 'B(+ve', '2018-02-05', 0),
(5, 'Sonjoy Saha', 'Desig 2', '+880', '', '', 'B(+ve)', '2018-02-06', 0),
(6, 'Kabir', 'Head Teacher', '+880', '', '', 'A(+ve)', '2018-03-20', 0),
(7, 'ksk', 'lls', '+880', '', '', 'A(+ve)', '2018-03-20', 0),
(8, 'ami', 'new', '+880', '', '', 'A(+ve)', '2018-03-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `faculties_classes`
--

CREATE TABLE `faculties_classes` (
  `fac_cls_id` int(11) NOT NULL,
  `fac_id` int(11) DEFAULT NULL,
  `cls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties_classes`
--

INSERT INTO `faculties_classes` (`fac_cls_id`, `fac_id`, `cls_id`) VALUES
(1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `roll_track`
--

CREATE TABLE `roll_track` (
  `class` int(11) NOT NULL,
  `current_std` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roll_track`
--

INSERT INTO `roll_track` (`class`, `current_std`) VALUES
(6, 9),
(7, 3),
(8, 5),
(9, 0),
(10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `rou_id` int(11) NOT NULL,
  `cls_id` int(11) DEFAULT NULL,
  `day` char(3) DEFAULT NULL,
  `start_time` varchar(5) DEFAULT NULL,
  `end_time` varchar(5) DEFAULT NULL,
  `subject` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`rou_id`, `cls_id`, `day`, `start_time`, `end_time`, `subject`) VALUES
(3, 10, 'sun', '10 AM', '11 AM', 'English'),
(4, 10, 'sun', '10 AM', '11 AM', 'Bangla'),
(5, 14, 'Sat', '1 AM', '1 AM', 'Bangla'),
(6, 16, 'Sat', '1 AM', '1 AM', 'Bangla'),
(7, 16, 'Sat', '1 AM', '1 AM', 'Bangla'),
(8, 15, 'Sat', '1 AM', '1 AM', 'Bangla'),
(9, 13, 'Sat', '1 AM', '1 AM', 'Bangla'),
(10, 13, 'Sat', '1 AM', '1 AM', 'Bangla'),
(11, 13, 'Sat', '1 AM', '1 AM', 'Bangla'),
(13, 12, 'Sat', '1 AM', '1 AM', 'Bangla'),
(14, 12, 'Tue', '1 AM', '3 AM', 'English'),
(15, 12, 'Mon', '3 PM', '4 PM', 'Math'),
(16, 12, 'Tue', '2 PM', '3 PM', 'Bangla'),
(17, 12, 'Tue', '2 PM', '3 PM', 'Math'),
(18, 10, 'Sat', '1 AM', '1 AM', 'Bangla'),
(19, 10, 'Sat', '1 AM', '1 AM', 'English'),
(20, 10, 'Sat', '1 AM', '1 AM', 'Math'),
(21, 10, 'Sat', '1 AM', '1 AM', 'English'),
(22, 12, 'Tue', '1 AM', '1 AM', 'Bangla'),
(23, 12, 'Sat', '1 AM', '1 AM', 'Bangla'),
(24, 10, 'Sat', '1 AM', '1 AM', 'Bangla'),
(25, 10, 'Tue', '1 AM', '1 AM', 'Bangla');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(11) NOT NULL,
  `std_roll` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  `class` int(11) NOT NULL,
  `section` varchar(15) NOT NULL,
  `phone_no` char(14) NOT NULL DEFAULT '+880',
  `email` varchar(35) NOT NULL,
  `address` varchar(80) NOT NULL,
  `date_of_birth` date NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `parent_phone_no` char(14) NOT NULL DEFAULT '+880'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `std_roll`, `name`, `class`, `section`, `phone_no`, `email`, `address`, `date_of_birth`, `blood_group`, `parent_phone_no`) VALUES
(2, '070001', 'Kabir Hasan', 7, '', '+880', '', '', '2018-02-06', '', '+880'),
(3, '080001', 'Sadab Fatin', 8, '', '+880', '', '', '2018-02-07', '', '+880'),
(4, '080002', 'Salman', 8, '', '+880', '', '', '2018-02-07', '', '+880'),
(6, '060001', 'Kabir Hasan', 6, '', '+880', '', '', '2018-02-05', '', '+880'),
(7, '060002', 'xyz', 6, '', '+880', '', '', '2018-02-05', '', '+880'),
(8, '070002', 'xyz', 7, '', '+880', '', '', '2018-02-05', '', '+880'),
(9, '060003', 'xyz', 6, '', '+880', '', '', '2018-02-05', '', '+880'),
(10, '0001', 'mno', 0, '', '+880', '', '', '2018-02-12', '', '+880'),
(11, '060004', 'zz', 6, '', '+880', '', '', '2018-02-04', '', '+880'),
(12, '060005', 'zz', 6, '', '+880', '', '', '2018-02-04', '', '+880'),
(13, '060006', 'zz', 6, '', '+880', '', '', '2018-02-04', '', '+880'),
(14, '080003', 'Salman Mahmud', 8, '', '+880', '', '', '2018-02-04', '', '+880'),
(15, '080004', 'Salman Mahmud', 8, 'Sec B', '+880', '', '', '2018-02-04', '', '+880'),
(16, '060007', 'xyz', 6, 'Sec C', '+880', '', '', '2018-02-05', '', '+880'),
(17, '060008', 'mnolsllswoowsklxd', 6, 'Sec A', '+880', '', '', '2018-02-05', '', '+880'),
(18, '0001', '', 0, 'Sec C', '+880', '', '', '0000-00-00', '', '+880'),
(19, '0001', '', 0, 'Sec C', '+880', '', '', '0000-00-00', '', '+880'),
(20, '0001', '', 0, 'Sec B', '+880', '', '', '0000-00-00', '', '+880'),
(21, '0001', '', 0, 'Sec B', '+880', '', '', '0000-00-00', '', '+880'),
(22, '060009', 'qqqqqqqq', 6, 'Sec A', '+880', '', '', '2018-03-15', '', '+880'),
(23, '080005', 'KabirKabir', 8, 'Sec C', '+880', '', '', '2018-03-20', '', '+880'),
(24, '070003', '4125', 7, 'Sec B', '+880', '', '', '2018-03-20', '', '+880');

-- --------------------------------------------------------

--
-- Table structure for table `students_classes`
--

CREATE TABLE `students_classes` (
  `std_cls_id` int(11) NOT NULL,
  `std_id` int(11) DEFAULT NULL,
  `cls_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`att_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `cls_id` (`cls_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`cls_id`),
  ADD KEY `capacity` (`capacity`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `faculties_classes`
--
ALTER TABLE `faculties_classes`
  ADD PRIMARY KEY (`fac_cls_id`),
  ADD KEY `fac_id` (`fac_id`),
  ADD KEY `cls_id` (`cls_id`);

--
-- Indexes for table `roll_track`
--
ALTER TABLE `roll_track`
  ADD PRIMARY KEY (`class`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`rou_id`),
  ADD KEY `cls_id` (`cls_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `students_classes`
--
ALTER TABLE `students_classes`
  ADD PRIMARY KEY (`std_cls_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `cls_id` (`cls_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `cls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculties_classes`
--
ALTER TABLE `faculties_classes`
  MODIFY `fac_cls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `rou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `students_classes`
--
ALTER TABLE `students_classes`
  MODIFY `std_cls_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `students` (`std_id`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`cls_id`) REFERENCES `classes` (`cls_id`);

--
-- Constraints for table `faculties_classes`
--
ALTER TABLE `faculties_classes`
  ADD CONSTRAINT `faculties_classes_ibfk_1` FOREIGN KEY (`fac_id`) REFERENCES `faculties` (`fac_id`),
  ADD CONSTRAINT `faculties_classes_ibfk_2` FOREIGN KEY (`cls_id`) REFERENCES `classes` (`cls_id`);

--
-- Constraints for table `routine`
--
ALTER TABLE `routine`
  ADD CONSTRAINT `routine_ibfk_1` FOREIGN KEY (`cls_id`) REFERENCES `classes` (`cls_id`);

--
-- Constraints for table `students_classes`
--
ALTER TABLE `students_classes`
  ADD CONSTRAINT `students_classes_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `students` (`std_id`),
  ADD CONSTRAINT `students_classes_ibfk_2` FOREIGN KEY (`cls_id`) REFERENCES `classes` (`cls_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
