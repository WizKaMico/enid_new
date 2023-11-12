-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2023 at 09:22 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_abulalas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_announcement`
--

CREATE TABLE `tbl_school_announcement` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_announcement`
--

INSERT INTO `tbl_school_announcement` (`id`, `title`, `description`, `start`, `end`, `image_path`, `status`) VALUES
(1, 'TESTENID', 'ENID', '2023-11-13 00:00:00', '2023-11-16 00:00:00', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (6).png', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_enrollee_fresh`
--

CREATE TABLE `tbl_school_enrollee_fresh` (
  `eid` int(11) NOT NULL,
  `uid` varchar(250) NOT NULL,
  `sycode` int(50) NOT NULL,
  `gid` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `average` int(50) NOT NULL,
  `street` varchar(250) NOT NULL,
  `region_text` varchar(250) NOT NULL,
  `province_text` varchar(250) NOT NULL,
  `city_text` varchar(250) NOT NULL,
  `barangay_text` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_enrollee_fresh`
--

INSERT INTO `tbl_school_enrollee_fresh` (`eid`, `uid`, `sycode`, `gid`, `email`, `fname`, `mname`, `lname`, `average`, `street`, `region_text`, `province_text`, `city_text`, `barangay_text`, `status`, `date_created`) VALUES
(1, '202311137094', 8977, 1, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13'),
(2, '202311136704', 7978, 7, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_enrollee_trans`
--

CREATE TABLE `tbl_school_enrollee_trans` (
  `eid` int(11) NOT NULL,
  `uid` varchar(250) NOT NULL,
  `sycode` int(50) NOT NULL,
  `gid` int(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `average` int(50) NOT NULL,
  `street` varchar(250) NOT NULL,
  `region_text` varchar(250) NOT NULL,
  `province_text` varchar(250) NOT NULL,
  `city_text` varchar(250) NOT NULL,
  `barangay_text` varchar(250) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_enrollee_trans`
--

INSERT INTO `tbl_school_enrollee_trans` (`eid`, `uid`, `sycode`, `gid`, `email`, `fname`, `mname`, `lname`, `average`, `street`, `region_text`, `province_text`, `city_text`, `barangay_text`, `status`, `date_created`) VALUES
(1, '202311139631', 8977, 2, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13'),
(2, '202311137343', 7978, 8, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_lost`
--

CREATE TABLE `tbl_school_lost` (
  `fid` int(11) NOT NULL,
  `item` varchar(50) NOT NULL,
  `foundby` varchar(50) NOT NULL,
  `foundin` varchar(50) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `another` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_lost`
--

INSERT INTO `tbl_school_lost` (`fid`, `item`, `foundby`, `foundin`, `image_path`, `status`, `another`, `date`) VALUES
(1, 'IPHONE 64 GB', '202311139631', '2', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (6).png', 'LOST', 'TEST', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_request_type`
--

CREATE TABLE `tbl_school_request_type` (
  `req` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_request_type`
--

INSERT INTO `tbl_school_request_type` (`req`, `type`) VALUES
(1, 'REPORT OF GRADE'),
(2, 'GOOD MORAL'),
(3, 'ENROLLMENT'),
(4, 'FORM 137'),
(5, 'FORM 138'),
(6, 'FORM TEST REQUEST');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_student_record`
--

CREATE TABLE `tbl_school_student_record` (
  `rid` int(11) NOT NULL,
  `sycode` int(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `address` text NOT NULL,
  `current_level` int(50) NOT NULL,
  `current_section` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_student_record`
--

INSERT INTO `tbl_school_student_record` (`rid`, `sycode`, `uid`, `fname`, `address`, `current_level`, `current_section`) VALUES
(1, 7978, '202311137094', 'GeraldMicoFacistol', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 8, 10),
(2, 7978, '202311139631', 'GeraldMicoFacistol', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 9, 13),
(3, 7978, '202311136704', 'GeraldMicoFacistol', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 7, 7),
(4, 7978, '202311137343', 'GeraldMicoFacistol', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_student_request`
--

CREATE TABLE `tbl_school_student_request` (
  `reqid` int(11) NOT NULL,
  `sycode` int(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `request_type` int(50) NOT NULL,
  `note` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_student_request`
--

INSERT INTO `tbl_school_student_request` (`reqid`, `sycode`, `uid`, `request_type`, `note`, `status`, `date_created`) VALUES
(1, 7978, '202311137094', 1, 'THIS IS A REJECT', 'REJECTED', '2023-11-13'),
(2, 7978, '202311137094', 1, 'ALSO REJECTING THIS', 'REJECTED', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_student_request_history`
--

CREATE TABLE `tbl_school_student_request_history` (
  `reqhid` int(11) NOT NULL,
  `reqid` int(50) NOT NULL,
  `note` text NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_student_request_history`
--

INSERT INTO `tbl_school_student_request_history` (`reqhid`, `reqid`, `note`, `date_added`) VALUES
(1, 1, 'I need my grade asap, please would you be able to help ? ', '2023-11-13'),
(2, 1, 'This is already approved and can be seen on the 3rd of July 2024', '2023-11-13'),
(3, 1, 'This is my final note on the 4th of July', '2023-11-13'),
(4, 1, 'I THINK SINCE YOU ARE NOT GOOD I WILL JUST REJECT', '2023-11-13'),
(5, 2, 'I need this FORM138 Asap', '2023-11-13'),
(6, 2, 'No i will note approve this for now ', '2023-11-13'),
(7, 1, 'test test test ', '2023-11-13'),
(8, 1, 'I dont want to approve your request', '2023-11-13'),
(9, 1, 'i change my mind i want to approve your request', '2023-11-13'),
(10, 1, 'just approving', '2023-11-13'),
(11, 2, 'TEST', '2023-11-13'),
(12, 2, 'ALWAYS APPROVE', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_teacher_record`
--

CREATE TABLE `tbl_school_teacher_record` (
  `eid` int(11) NOT NULL,
  `sycode` int(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `region_text` varchar(255) NOT NULL,
  `province_text` varchar(255) NOT NULL,
  `city_text` varchar(255) NOT NULL,
  `barangay_text` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_teacher_record`
--

INSERT INTO `tbl_school_teacher_record` (`eid`, `sycode`, `uid`, `fname`, `mname`, `lname`, `street`, `region_text`, `province_text`, `city_text`, `barangay_text`, `date_created`) VALUES
(1, 9890, '101213', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', '', 'Hagonoy', 'Abulalas', '2023-11-13'),
(2, 7978, '65369999', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', '', 'Hagonoy', 'Abulalas', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_year_details_grade`
--

CREATE TABLE `tbl_school_year_details_grade` (
  `gid` int(11) NOT NULL,
  `sycode` int(50) NOT NULL,
  `grade` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_year_details_grade`
--

INSERT INTO `tbl_school_year_details_grade` (`gid`, `sycode`, `grade`) VALUES
(1, 8977, 'GRADE 1'),
(2, 8977, 'GRADE 2'),
(3, 8977, 'GRADE 3'),
(4, 8977, 'GRADE 4'),
(5, 8977, 'GRADE 5'),
(6, 8977, 'GRADE 6'),
(7, 7978, 'GRADE 1'),
(8, 7978, 'GRADE 2'),
(9, 7978, 'GRADE 3'),
(10, 7978, 'GRADE 4'),
(11, 7978, 'GRADE 5'),
(12, 7978, 'GRADE 6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_year_details_map`
--

CREATE TABLE `tbl_school_year_details_map` (
  `id` int(11) NOT NULL,
  `mid` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `building` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_year_details_map`
--

INSERT INTO `tbl_school_year_details_map` (`id`, `mid`, `room`, `building`) VALUES
(1, '1', 'ROOM001', 'BUILDING 1'),
(2, '2', 'ROOM002', 'BUILDING 2'),
(3, '3', 'ROOM003', 'BUILDING 3'),
(4, '4', 'ROOM004', 'BUILDING 4'),
(5, '5', 'ROOM005', 'BUILDING 5'),
(6, '6', 'ROOM006', 'BUILDING 6'),
(7, '7', 'ROOM007', 'BUILDING 7'),
(8, '8', 'ROOM008', 'BUILDING 8'),
(9, '9', 'ROOM009', 'BUILDING 9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_year_details_section`
--

CREATE TABLE `tbl_school_year_details_section` (
  `sid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `sycode` int(50) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `min` int(50) NOT NULL,
  `max` int(50) NOT NULL,
  `student_max` int(50) NOT NULL,
  `rid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_year_details_section`
--

INSERT INTO `tbl_school_year_details_section` (`sid`, `gid`, `sycode`, `section_name`, `min`, `max`, `student_max`, `rid`) VALUES
(1, 1, 8977, 'SECTION 1', 90, 99, 40, 1),
(2, 1, 8977, 'SECTION 2', 80, 89, 40, 1),
(3, 1, 8977, 'SECTION 3', 75, 79, 40, 1),
(4, 2, 8977, 'SECTION 1', 90, 99, 40, 1),
(5, 2, 8977, 'SECTION 2', 80, 89, 40, 1),
(6, 2, 8977, 'SECTION 3', 75, 79, 40, 1),
(7, 7, 7978, 'SECTION 1', 90, 99, 40, 1),
(8, 7, 7978, 'SECTION 2', 80, 89, 40, 1),
(9, 7, 7978, 'SECTION 3', 75, 79, 40, 2),
(10, 8, 7978, 'SECTION 1', 90, 99, 40, 1),
(11, 8, 7978, 'SECTION 2', 80, 89, 40, 1),
(12, 8, 7978, 'SECTION 3', 75, 79, 40, 1),
(13, 9, 7978, 'SECTION 1', 90, 99, 40, 1),
(14, 9, 7978, 'SECTION 2', 80, 89, 40, 1),
(15, 9, 7978, 'SECTION 3', 75, 79, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_designation`
--

CREATE TABLE `tbl_user_designation` (
  `did` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_designation`
--

INSERT INTO `tbl_user_designation` (`did`, `role`) VALUES
(1, 'ADMIN'),
(2, 'TEACHER'),
(3, 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_information`
--

CREATE TABLE `tbl_user_information` (
  `user_id` int(11) NOT NULL,
  `uid` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `designation` int(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_information`
--

INSERT INTO `tbl_user_information` (`user_id`, `uid`, `email`, `password`, `designation`, `code`, `status`) VALUES
(1, '202311106896', 'revcoreitsolution@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 6899, 'VERIFIED'),
(20, '202311137094', 'tricore012@gmail.com', '315cbf9a36a74db5b5cbe48074f23a72', 3, 7665, 'UNVERIFIED'),
(21, '202311139631', 'tricore012@gmail.com', '06d126608ea107f64adc31bc93733a37', 3, 9822, 'UNVERIFIED'),
(22, '202311136704', 'tricore012@gmail.com', 'b7ee7429dee6b347930336251acd2aac', 3, 9247, 'UNVERIFIED'),
(23, '202311137343', 'tricore012@gmail.com', '5e8ced789acbb4eee2a95f1485b17e40', 3, 8602, 'UNVERIFIED'),
(24, '65369999', 'tricore012@gmail.com', '97cbf2332b14bddab0159f04af75f104', 2, 9996, 'UNVERIFIED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_remember_me_tokens`
--

CREATE TABLE `tbl_user_remember_me_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiration_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_school_year`
--

CREATE TABLE `tbl_user_school_year` (
  `syid` int(11) NOT NULL,
  `year_from` date NOT NULL,
  `year_to` date NOT NULL,
  `sycode` int(100) NOT NULL,
  `date_created` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_school_year`
--

INSERT INTO `tbl_user_school_year` (`syid`, `year_from`, `year_to`, `sycode`, `date_created`, `status`) VALUES
(1, '2023-11-13', '2024-11-13', 8977, '2023-11-13', 'DEACTIVATED'),
(2, '2023-11-16', '2024-11-16', 7978, '2023-11-13', 'ACTIVATED');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_security`
--

CREATE TABLE `tbl_user_security` (
  `id` int(11) NOT NULL,
  `uid` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_security`
--

INSERT INTO `tbl_user_security` (`id`, `uid`, `email`, `code`, `status`, `date_created`) VALUES
(1, '202311106896', 'revcoreitsolution@gmail.com', 8755, 'USED', '2023-11-11'),
(2, '202311106896', 'revcoreitsolution@gmail.com', 6810, 'USED', '2023-11-11'),
(3, '202311106896', 'revcoreitsolution@gmail.com', 6726, 'USED', '2023-11-11'),
(4, '202311106896', 'revcoreitsolution@gmail.com', 8274, 'USED', '2023-11-11'),
(5, '202311106896', 'revcoreitsolution@gmail.com', 7674, 'UNUSED', '2023-11-13'),
(6, '202311106896', 'revcoreitsolution@gmail.com', 8783, 'USED', '2023-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_student_history`
--

CREATE TABLE `tbl_user_student_history` (
  `hid` int(11) NOT NULL,
  `sycode` int(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `gid` int(50) NOT NULL,
  `section` int(50) NOT NULL,
  `average` int(50) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_student_history`
--

INSERT INTO `tbl_user_student_history` (`hid`, `sycode`, `uid`, `gid`, `section`, `average`, `date_added`) VALUES
(1, 8977, '202311137094', 1, 1, 88, '2023-11-13'),
(2, 8977, '202311139631', 2, 4, 88, '2023-11-13'),
(3, 7978, '202311137094', 8, 10, 88, '2023-11-13'),
(4, 7978, '202311139631', 9, 13, 88, '2023-11-13'),
(5, 7978, '202311136704', 7, 7, 88, '2023-11-13'),
(6, 7978, '202311137343', 8, 10, 88, '2023-11-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_school_announcement`
--
ALTER TABLE `tbl_school_announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_school_enrollee_fresh`
--
ALTER TABLE `tbl_school_enrollee_fresh`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_school_enrollee_trans`
--
ALTER TABLE `tbl_school_enrollee_trans`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_school_lost`
--
ALTER TABLE `tbl_school_lost`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tbl_school_request_type`
--
ALTER TABLE `tbl_school_request_type`
  ADD PRIMARY KEY (`req`);

--
-- Indexes for table `tbl_school_student_record`
--
ALTER TABLE `tbl_school_student_record`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `tbl_school_student_request`
--
ALTER TABLE `tbl_school_student_request`
  ADD PRIMARY KEY (`reqid`);

--
-- Indexes for table `tbl_school_student_request_history`
--
ALTER TABLE `tbl_school_student_request_history`
  ADD PRIMARY KEY (`reqhid`);

--
-- Indexes for table `tbl_school_teacher_record`
--
ALTER TABLE `tbl_school_teacher_record`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tbl_school_year_details_grade`
--
ALTER TABLE `tbl_school_year_details_grade`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `tbl_school_year_details_map`
--
ALTER TABLE `tbl_school_year_details_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_school_year_details_section`
--
ALTER TABLE `tbl_school_year_details_section`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tbl_user_designation`
--
ALTER TABLE `tbl_user_designation`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `tbl_user_remember_me_tokens`
--
ALTER TABLE `tbl_user_remember_me_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_user_school_year`
--
ALTER TABLE `tbl_user_school_year`
  ADD PRIMARY KEY (`syid`);

--
-- Indexes for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_student_history`
--
ALTER TABLE `tbl_user_student_history`
  ADD PRIMARY KEY (`hid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_school_announcement`
--
ALTER TABLE `tbl_school_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_school_enrollee_fresh`
--
ALTER TABLE `tbl_school_enrollee_fresh`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_school_enrollee_trans`
--
ALTER TABLE `tbl_school_enrollee_trans`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_school_lost`
--
ALTER TABLE `tbl_school_lost`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_school_request_type`
--
ALTER TABLE `tbl_school_request_type`
  MODIFY `req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_school_student_record`
--
ALTER TABLE `tbl_school_student_record`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_school_student_request`
--
ALTER TABLE `tbl_school_student_request`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_school_student_request_history`
--
ALTER TABLE `tbl_school_student_request_history`
  MODIFY `reqhid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_school_teacher_record`
--
ALTER TABLE `tbl_school_teacher_record`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_school_year_details_grade`
--
ALTER TABLE `tbl_school_year_details_grade`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_school_year_details_map`
--
ALTER TABLE `tbl_school_year_details_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_school_year_details_section`
--
ALTER TABLE `tbl_school_year_details_section`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user_designation`
--
ALTER TABLE `tbl_user_designation`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_user_remember_me_tokens`
--
ALTER TABLE `tbl_user_remember_me_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_school_year`
--
ALTER TABLE `tbl_user_school_year`
  MODIFY `syid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_user_student_history`
--
ALTER TABLE `tbl_user_student_history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
