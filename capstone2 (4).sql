-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2019 at 05:03 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equip_id` int(11) NOT NULL,
  `equip_name` text NOT NULL,
  `equip_model` text NOT NULL,
  `equip_desc` text NOT NULL,
  `serial_num` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equip_id`, `equip_name`, `equip_model`, `equip_desc`, `serial_num`) VALUES
(3, 'RFID Tags', 'asd', 'asd', '2134'),
(4, 'Networking Equipment', 'asd', 'asd', '534'),
(5, 'Barcode Scanner', 'asd', 'asd', '4566'),
(6, 'Biometric Device', 'asd', 'asd', '4876'),
(7, 'POS Printer', 'asd', 'asd', '0987'),
(8, 'Printer', 'asda', 'asd', '3455'),
(9, 'Computer', 'asd', 'asd', '5689'),
(10, 'Router', 'Linkxis', 'Router', '4775');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` int(11) NOT NULL,
  `fac_name` text NOT NULL,
  `fac_degree` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fac_id`, `fac_name`, `fac_degree`) VALUES
(1, 'Johaira Lidasan', 'NBA'),
(2, 'Martina Tagacay', 'MIM'),
(3, 'Jodeen Lib-atin', 'MBA'),
(4, 'Jan Irvin Initan', 'MIM'),
(5, 'Rodelyn Garde', 'MIM'),
(6, 'Masako Magno', 'MIT');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `stat` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `user_id`, `sem_id`, `equip_id`, `sub_id`, `stat`, `date`) VALUES
(16, 3, 2, 3, 8, 'Done', '2019-03-01'),
(17, 3, 2, 4, 8, 'Disapproved', '2019-03-01'),
(18, 3, 2, 5, 8, 'Pending', '2019-03-01'),
(19, 4, 2, 3, 7, 'Done', '2019-03-22'),
(20, 4, 2, 6, 7, 'Pending', '2019-03-22'),
(21, 4, 2, 7, 7, 'Pending', '2019-03-22'),
(22, 4, 2, 8, 7, 'Pending', '2019-03-22'),
(23, 4, 2, 9, 7, 'Pending', '2019-03-22'),
(24, 3, 2, 3, 6, 'Pending', '0012-12-12'),
(25, 3, 2, 5, 5, 'Pending', '2019-03-08'),
(26, 27, 2, 3, 8, 'Done', '2019-03-15'),
(27, 27, 2, 10, 8, 'Done', '2019-03-15'),
(28, 28, 2, 3, 5, 'Approved', '2019-03-08'),
(29, 28, 2, 4, 5, 'Pending', '2019-03-08'),
(30, 28, 2, 7, 5, 'Pending', '2019-03-08'),
(31, 28, 2, 9, 5, 'Approved', '2019-03-08'),
(32, 26, 2, 3, 12, 'Pending', '2019-03-11'),
(33, 26, 2, 10, 12, 'Done', '2019-03-11'),
(34, 29, 2, 3, 5, 'Approved', '2019-03-29'),
(35, 29, 2, 8, 5, 'Approved', '2019-03-29'),
(36, 29, 2, 9, 5, 'Approved', '2019-03-29'),
(37, 29, 2, 8, 5, 'Approved', '2019-03-30'),
(38, 29, 2, 8, 0, 'Approved', '123123'),
(39, 29, 2, 9, 0, 'Approved', '123123'),
(40, 29, 2, 10, 0, 'Approved', '123123'),
(41, 29, 2, 8, 7, 'Approved', '2019-03-16'),
(42, 29, 2, 9, 7, 'Approved', '2019-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `sem_id` int(11) NOT NULL,
  `sem` text NOT NULL,
  `sy` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem`, `sy`, `status`) VALUES
(1, '1st', '2018-2019', 'not active'),
(2, '2nd', '2018-2019', 'active'),
(3, '1st', '2019-2020', 'not active'),
(4, '2nd', '2019-2020', 'not active');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `id_number` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `crs` text NOT NULL,
  `year` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `user_id`, `sem_id`, `id_number`, `fname`, `mname`, `lname`, `gender`, `crs`, `year`) VALUES
(4, 4, 2, '150123', 'me', 'me', 'me', 'male', 'BSCS', '4th'),
(5, 5, 2, 'admin', 'admin', 'admin', 'admin', 'male', 'BSIT', '4th'),
(6, 6, 2, '150115', 'GG', 'GG', 'GG', 'male', 'BSCS', '1st'),
(20, 22, 2, 'wolar150555', 'aw', 'aw', 'aw', 'male', 'BSIS', '2nd'),
(21, 24, 2, '123123', 'asd', 'asd', 'asd', 'male', 'BLIS', '1st'),
(22, 25, 2, 'wolar123123', 'asd', 'asd', 'asd', 'male', 'BLIS', '1st'),
(23, 26, 2, '000000', 'aw', 'aw', 'aw', 'male', 'MMA', '2nd'),
(24, 27, 2, '150999', 'Maryam', 'Ka', 'Ampakay', 'female', 'BSIT', '4th'),
(25, 28, 2, '110022', 'blis', 'blis', 'blis', 'male', 'BLIS', '1st'),
(26, 29, 2, '666666', 'aw', 'aw', 'aw', 'male', 'BLIS', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `sub_code` text NOT NULL,
  `sub_name` text NOT NULL,
  `sub_desc` text NOT NULL,
  `college` text NOT NULL,
  `time` text NOT NULL,
  `day` text NOT NULL,
  `units` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `fac_id`, `sub_code`, `sub_name`, `sub_desc`, `college`, `time`, `day`, `units`) VALUES
(5, 1, 'ITE 121N', 'ITE', 'Intermediate Programming', 'CCS', '8:30-9:30', 'TTh', 3),
(6, 2, 'ITE 211n', 'ITE', 'Data Structrues and Algorithms', 'CCS', '8:30 - 9:30', 'TTh', 3),
(7, 3, 'CS 212n', 'CS', 'Object-Oriented Programming', 'CCS', '8:30 - 9:30', 'MWF', 3),
(8, 4, 'ITE 221n', 'ITE', 'Information Management', 'CCS', '8:30 - 9:30', 'S', 3),
(9, 5, 'CS 222n', 'CS', 'Human Computer Interaction', 'CCS', '8:30 - 9:30', 'MWF', 1),
(10, 2, 'CS 314n', 'CS', 'Software Engineering 1', 'CCS', '8:30 - 9:30', 'MWF', 3),
(11, 1, 'CS 315n', 'CS', 'Programming Languages', 'CCS', '8:30 - 9:30', 'MWF', 3),
(12, 2, 'CS ELECT 1', 'CS', 'Elective 1', 'CCS', '8:30 - 9:30', 'TTh', 3),
(13, 3, 'ITE 322n', 'ITE', 'Application Development & Engineering Technologies', 'CCS', '8:30 - 9:30', 'S', 3),
(14, 1, 'CS 321n', 'CS', 'Operating System', 'CCS', '8:30 - 9:30', 'MWF', 3),
(15, 1, 'CS 323n', 'CS', 'Software Engineering 2', 'CCS', '8:30 - 9:30', 'MWF', 3),
(16, 4, 'CS 324n', 'CS', 'Networks and Communications', 'CCS', '8:30 - 9:30', 'TTh', 3),
(17, 3, 'CS ELECT 2', 'CS', 'Elective 2', 'CCS', '8:30 - 9:30', 'TTh', 3),
(18, 3, 'ICT 106', 'ICT', 'Database Design for Libraries', 'CCS', '8:30 - 9:30', 'TTh', 3),
(19, 3, 'MMA 112', 'MMA', 'Drawing 1', 'CCS', '8:30 - 9:30', 'MWF', 2),
(20, 2, 'MMA 121', 'MMA', 'Elements and Principles of Design', 'CCS', '8:30 - 9:30', 'MWF', 3),
(21, 1, 'MMA 122', 'MMA', 'Drawing 2', 'CCS', '8:30 - 9:30', 'S', 2),
(22, 2, 'MMA 211', 'MMA', 'Color Theory', 'CCS', '8:30 - 9:30', 'S', 3),
(23, 3, 'MMA 212', 'MMA', 'Digital Photography', 'CCS', '8:30 - 9:30', 'S', 3),
(24, 4, 'MMA 221', 'MMA', 'Typography and Layout', 'CCS', '8:30 - 9:30', 'MWF', 3),
(25, 5, 'MMA 222', 'MMA', '2D Animation', 'CCS', '8:30 - 9:30', 'MWF', 3),
(26, 5, 'MMA 223', 'MMA', 'Fundamentals in Film and Video Production', 'CCS', '8:30 - 9:30', 'MWF', 3),
(27, 2, 'MMA 311', 'MMA', 'Multimedia Publishing', 'CCS', '8:30 - 9:30', 'MWF', 3),
(28, 2, 'MMA 312', 'MMA', '3D Modeling', 'CCS', '8:30 - 9:30', 'S', 3),
(29, 2, 'MMA 313', 'MMA', 'Digital Sound Production', 'CCS', '8:30 - 9:30', 'TTh', 3),
(30, 1, 'MMA 321', 'MMA', 'Interactive Media Design', 'CCS', '8:30 - 9:30', 'TTh', 3),
(31, 4, 'MMA 323', 'MMA', 'Post-Production Techniques', 'CCS', '8:30 - 9:30', 'TTh', 3),
(32, 5, 'MMA 324', 'MMA', '3D Animation', 'CCS', '8:30 - 9:30', 'TTh', 3),
(33, 2, 'MMA 412', 'MMA', 'Multimedia Seminars', 'CCS', '8:30 - 9:30', 'S', 3),
(34, 3, 'MMA 413', 'MMA', 'Portfolio Preparation and Exhibit Design', 'CCS', '8:30 - 9:30', 'S', 3),
(35, 3, 'ITE 112n', 'ITE', 'Computer Programming 1', 'CCS', '8:30 - 9:30', 'S', 3),
(36, 4, 'ITE 121n', 'ITE', 'Computer Programming 2', 'CCS', '8:30 - 9:30', 'S', 3),
(37, 5, 'IS 222n', 'IS', 'System Analysis and Design', 'CCS', '8:30 - 9:30', 'MWF', 3),
(38, 2, 'IS 223n', 'IS', 'IT Infrastructures and Network Technologies', 'CCS', '8:30 - 9:30', 'MWF', 3),
(39, 1, 'IS 311n', 'IS', 'Enterprise Architecture', 'CCS', '8:30 - 9:30', 'MWF', 3),
(40, 2, 'IS 322n', 'IS', 'Application Development & Emerging Technologies', 'CCS', '8:30 - 9:30', 'TTh', 3),
(41, 2, 'IS ELECT 4', 'IS', 'Elective 4', 'CCS', '8:30 - 9:30', 'MWF', 3),
(42, 3, 'asd', 'asd', 'asasd', 'CCS', '8:30 - 9:30', 'MWF', 4),
(45, 3, 'dfdfgdfg', 'dfgdfgdf', 'dfgdfgdfgdf', 'CCS', '8:30 - 9:30', 'TTh', 3),
(46, 5, 'asdasdasd', 'dasdasd', 'asdasd', 'CCS', '10:30 - 11:30', 'S', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`) VALUES
(4, '150123', 'aw', 'student'),
(5, 'admin', 'admin', 'admin'),
(6, '150115', 'aw', 'student'),
(17, '150909', 'a', 'student'),
(18, 'wolar150909', 'a', 'wolar'),
(22, 'wolar150555', 'aw', 'wolar'),
(23, '150000', 'lol', 'student'),
(24, '123123', 'aw', 'student'),
(25, 'wolar123123', 'aw', 'wolar'),
(26, '000000', 'aw', 'student'),
(27, '150999', 'aw', 'student'),
(28, '110022', 'aw', 'student'),
(29, '666666', 'aw', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
