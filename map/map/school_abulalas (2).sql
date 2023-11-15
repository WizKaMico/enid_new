-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 08:10 PM
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
-- Table structure for table `tbl_assigned_teacher_section_history`
--

CREATE TABLE `tbl_assigned_teacher_section_history` (
  `haid` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `sid` int(50) NOT NULL,
  `sycode` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'TESTENID', 'ENID', '2023-11-13 00:00:00', '2023-11-15 00:00:00', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (6).png', 'INACTIVE'),
(2, 'TEST', 'TEST', '2023-11-15 00:00:00', '2023-11-15 00:00:00', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (6).png', 'INACTIVE'),
(3, 'test update test', 'test update test', '2023-11-15 00:00:00', '2023-11-15 00:00:00', 'uploads/black-tshirt-man_grande-removebg-preview.png', 'INACTIVE'),
(4, 'TEST', 'TEST', '2023-11-15 00:00:00', '2023-11-15 00:00:00', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (5).png', 'INACTIVE');

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
  `gender` varchar(50) NOT NULL,
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

INSERT INTO `tbl_school_enrollee_fresh` (`eid`, `uid`, `sycode`, `gid`, `email`, `fname`, `mname`, `lname`, `average`, `gender`, `street`, `region_text`, `province_text`, `city_text`, `barangay_text`, `status`, `date_created`) VALUES
(1, '202311137094', 8977, 1, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13'),
(2, '202311136704', 7978, 7, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13'),
(3, '202311148085', 9292, 13, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-14'),
(4, '202311159889', 9292, 13, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-15'),
(5, '202311157575', 9292, 13, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, 'MALE', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-15');

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
  `gender` varchar(50) NOT NULL,
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

INSERT INTO `tbl_school_enrollee_trans` (`eid`, `uid`, `sycode`, `gid`, `email`, `fname`, `mname`, `lname`, `average`, `gender`, `street`, `region_text`, `province_text`, `city_text`, `barangay_text`, `status`, `date_created`) VALUES
(1, '202311139631', 8977, 2, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13'),
(2, '202311137343', 7978, 8, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-13'),
(3, '202311147506', 9292, 14, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, '', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Norzagaray', 'Bangkal', 'APPROVED', '2023-11-14'),
(4, '202311157197', 9292, 14, 'tricore012@gmail.com', 'Gerald', 'Mico', 'Facistol', 88, 'MALE', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', 'Bulacan', 'Hagonoy', 'Abulalas', 'APPROVED', '2023-11-15');

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
(1, 'IPHONE 64 TYEST GB TEST ANOTHER', '202311139631', '1', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (5).png', 'LOST', 'another TEST ', '2023-11-13'),
(2, 'IPHONE 64 GB TEST', '202311148085', '1', 'uploads/black-tshirt-mockup-isolated-grey-background_114853-571 (6).png', 'FOUND', 'TEST TEST', '2023-11-15'),
(3, 'IPHONE 689 GB test', '202311148085', '1', 'uploads/png-clipart-graphy-computer-icons-user-3d-character-icon-material-cartoon-character-camera-icon-removebg-preview.png', 'FOUND', 'TEST', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school_monitoring_attendance`
--

CREATE TABLE `tbl_school_monitoring_attendance` (
  `scid` int(11) NOT NULL,
  `room` int(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `timein` varchar(100) NOT NULL,
  `timeout` varchar(100) NOT NULL,
  `date_inserted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_monitoring_attendance`
--

INSERT INTO `tbl_school_monitoring_attendance` (`scid`, `room`, `uid`, `timein`, `timeout`, `date_inserted`) VALUES
(1, 1, '202311137094', '10:06 PM', '10:08 PM', '2023-11-13'),
(2, 1, '202311137094', '10:06 PM', '10:08 PM', '2023-11-13'),
(3, 2, '202311137094', '10:07 PM', '10:12 PM', '2023-11-13'),
(4, 1, '202311136704', '2:00 AM', '2:00 AM', '2023-11-14'),
(5, 1, '202311137094', '12:07 PM', '', '2023-11-14'),
(7, 1, '202311137094', '2:53 AM', '2:53 AM', '2023-11-16');

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
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `current_level` int(50) NOT NULL,
  `current_section` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_school_student_record`
--

INSERT INTO `tbl_school_student_record` (`rid`, `sycode`, `uid`, `fname`, `gender`, `address`, `current_level`, `current_section`) VALUES
(1, 9292, '202311137094', 'GeraldMicoFacistol', 'FEMALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 14, 19),
(2, 7978, '202311139631', 'GeraldMicoFacistol', 'FEMALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 9, 13),
(3, 7978, '202311136704', 'GeraldMicoFacistol', 'FEMALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 7, 7),
(4, 7978, '202311137343', 'GeraldMicoFacistol', 'MALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 8, 10),
(5, 9292, '202311148085', 'GeraldMicoFacistol', 'MALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 13, 16),
(6, 9292, '202311147506', 'GeraldMicoFacistol', 'MALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanBangkal', 14, 19),
(7, 9292, '202311159889', 'GeraldMicoFacistol', 'MALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 13, 16),
(8, 9292, '202311157575', 'GeraldMicoFacistol', 'MALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 13, 16),
(9, 9292, '202311157197', 'GeraldMicoFacistol', 'MALE', '10 U206 TARRAVILLE SUBDIVISIONRegion III (Central Luzon)BulacanAbulalas', 14, 19);

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
(2, 7978, '202311137094', 1, 'ALSO REJECTING THIS', 'REJECTED', '2023-11-13'),
(3, 7978, '202311137094', 1, 'TEST', 'NEW', '2023-11-13'),
(4, 7978, '202311136704', 1, 'I want my report grade now', 'NEW', '2023-11-14'),
(5, 7978, '202311137094', 4, 'TEST', 'NEW', '2023-11-14'),
(6, 9292, '202311148085', 1, 'test', 'NEW', '2023-11-14'),
(7, 9292, '202311147506', 1, 'TESTING ENID', 'NEW', '2023-11-14'),
(8, 9292, '202311159889', 1, 'testing enid ulit ulit ulit', 'NEW', '2023-11-15');

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
(2, 7978, '65369999', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', '', 'Hagonoy', 'Abulalas', '2023-11-13'),
(3, 9292, '182999478', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', 'Region III (Central Luzon)', '', 'Hagonoy', 'Abulalas', '2023-11-14');

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
(12, 7978, 'GRADE 6'),
(13, 9292, 'GRADE 1'),
(14, 9292, 'GRADE 2'),
(15, 9292, 'GRADE 3'),
(16, 9292, 'GRADE 4'),
(17, 9292, 'GRADE 5'),
(18, 9292, 'GRADE 6');

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
(15, 9, 7978, 'SECTION 3', 75, 79, 40, 1),
(16, 13, 9292, 'SECTION 1-B', 90, 99, 40, 1),
(17, 13, 9292, 'SECTION 2', 80, 89, 40, 1),
(18, 13, 9292, 'SECTION 3', 75, 79, 40, 1),
(19, 14, 9292, 'SECTION 1', 90, 99, 40, 1),
(20, 14, 9292, 'SECTION 2', 80, 89, 40, 1),
(21, 14, 9292, 'SECTION 3', 75, 79, 40, 1),
(22, 15, 9292, 'SECTION 1', 90, 99, 40, 1),
(23, 15, 9292, 'SECTION 2', 80, 89, 40, 1),
(24, 15, 9292, 'SECTION 3', 75, 79, 40, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_confirmation_for_enrollment`
--

CREATE TABLE `tbl_student_confirmation_for_enrollment` (
  `cid` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `sycode` int(50) NOT NULL,
  `confirm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_confirmation_for_enrollment`
--

INSERT INTO `tbl_student_confirmation_for_enrollment` (`cid`, `uid`, `sycode`, `confirm`) VALUES
(1, '202311137094', 9292, 'CONFIRM');

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
(20, '202311137094', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3, 7665, 'VERIFIED'),
(21, '202311139631', 'tricore012@gmail.com', '06d126608ea107f64adc31bc93733a37', 3, 9822, 'UNVERIFIED'),
(22, '202311136704', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3, 9247, 'VERIFIED'),
(23, '202311137343', 'tricore012@gmail.com', '5e8ced789acbb4eee2a95f1485b17e40', 3, 8602, 'UNVERIFIED'),
(24, '65369999', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 2, 9996, 'VERIFIED'),
(25, '202311148085', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3, 9677, 'VERIFIED'),
(26, '202311147506', 'tricore012@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 3, 9854, 'VERIFIED'),
(27, '182999478', 'tricore012@gmail.com', '47aa24d4362449d930091e46bdc92df9', 2, 7620, 'UNVERIFIED'),
(28, '202311159889', 'tricore012@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 3, 7581, 'VERIFIED'),
(29, '202311157575', 'tricore012@gmail.com', 'bd9af4da72af70f2b4e452e9b890f7f6', 3, 9782, 'UNVERIFIED'),
(30, '202311157197', 'tricore012@gmail.com', 'daf20ac7fba3a0a4b12f45e08559a2db', 3, 7382, 'UNVERIFIED');

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
(2, '2023-11-16', '2024-11-16', 7978, '2023-11-13', 'DEACTIVATED'),
(3, '2023-11-14', '2024-11-14', 9292, '2023-11-14', 'ACTIVATED');

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
(6, '202311106896', 'revcoreitsolution@gmail.com', 8783, 'USED', '2023-11-13'),
(7, '202311137094', 'tricore012@gmail.com', 9658, 'UNUSED', '2023-11-13'),
(8, '202311137094', 'tricore012@gmail.com', 8233, 'UNUSED', '2023-11-13'),
(9, '202311137094', 'tricore012@gmail.com', 8992, 'USED', '2023-11-13'),
(10, '202311106896', 'revcoreitsolution@gmail.com', 9906, 'USED', '2023-11-13'),
(11, '202311137094', 'tricore012@gmail.com', 9112, 'USED', '2023-11-13'),
(12, '202311137094', 'tricore012@gmail.com', 9192, 'UNUSED', '2023-11-13'),
(13, '202311137094', 'tricore012@gmail.com', 8424, 'USED', '2023-11-13'),
(14, '202311106896', 'revcoreitsolution@gmail.com', 8478, 'USED', '2023-11-13'),
(15, '202311137094', 'tricore012@gmail.com', 8161, 'USED', '2023-11-13'),
(16, '202311106896', 'revcoreitsolution@gmail.com', 7286, 'USED', '2023-11-13'),
(17, '202311106896', 'revcoreitsolution@gmail.com', 9970, 'USED', '2023-11-14'),
(18, '65369999', 'tricore012@gmail.com', 9736, 'UNUSED', '2023-11-14'),
(19, '202311106896', 'revcoreitsolution@gmail.com', 9121, 'USED', '2023-11-14'),
(20, '202311136704', 'tricore012@gmail.com', 7953, 'UNUSED', '2023-11-14'),
(21, '202311136704', 'tricore012@gmail.com', 8874, 'UNUSED', '2023-11-14'),
(22, '65369999', 'tricore012@gmail.com', 8160, 'USED', '2023-11-14'),
(23, '202311106896', 'revcoreitsolution@gmail.com', 6954, 'UNUSED', '2023-11-14'),
(24, '202311106896', 'revcoreitsolution@gmail.com', 6943, 'USED', '2023-11-14'),
(25, '202311106896', 'revcoreitsolution@gmail.com', 8842, 'USED', '2023-11-14'),
(26, '65369999', 'tricore012@gmail.com', 9570, 'USED', '2023-11-14'),
(27, '202311137094', 'tricore012@gmail.com', 7839, 'USED', '2023-11-14'),
(28, '202311106896', 'revcoreitsolution@gmail.com', 6688, 'USED', '2023-11-14'),
(29, '202311137094', 'tricore012@gmail.com', 6932, 'USED', '2023-11-14'),
(30, '202311106896', 'revcoreitsolution@gmail.com', 9195, 'USED', '2023-11-14'),
(31, '202311137094', 'tricore012@gmail.com', 9695, 'USED', '2023-11-14'),
(32, '202311106896', 'revcoreitsolution@gmail.com', 6930, 'USED', '2023-11-14'),
(33, '202311148085', 'tricore012@gmail.com', 7545, 'UNUSED', '2023-11-14'),
(34, '202311106896', 'revcoreitsolution@gmail.com', 8267, 'USED', '2023-11-14'),
(35, '202311147506', 'tricore012@gmail.com', 8457, 'UNUSED', '2023-11-14'),
(36, '202311106896', 'revcoreitsolution@gmail.com', 6828, 'USED', '2023-11-14'),
(37, '202311106896', 'revcoreitsolution@gmail.com', 8621, 'USED', '2023-11-15'),
(38, '202311159889', 'tricore012@gmail.com', 7900, 'UNUSED', '2023-11-15'),
(39, '202311106896', 'revcoreitsolution@gmail.com', 9672, 'USED', '2023-11-15'),
(40, '202311106896', 'revcoreitsolution@gmail.com', 7108, 'USED', '2023-11-15'),
(41, '202311137094', 'tricore012@gmail.com', 9344, 'USED', '2023-11-16'),
(42, '202311106896', 'revcoreitsolution@gmail.com', 7608, 'USED', '2023-11-16'),
(43, '202311137094', 'tricore012@gmail.com', 8937, 'USED', '2023-11-16'),
(44, '202311106896', 'revcoreitsolution@gmail.com', 8283, 'USED', '2023-11-16'),
(45, '202311137094', 'tricore012@gmail.com', 7140, 'USED', '2023-11-16'),
(46, '202311106896', 'revcoreitsolution@gmail.com', 9841, 'USED', '2023-11-16'),
(47, '202311137094', 'tricore012@gmail.com', 7461, 'USED', '2023-11-16'),
(48, '65369999', 'tricore012@gmail.com', 9547, 'USED', '2023-11-16'),
(49, '202311136704', 'tricore012@gmail.com', 9703, 'USED', '2023-11-16'),
(50, '65369999', 'tricore012@gmail.com', 7387, 'USED', '2023-11-16'),
(51, '202311106896', 'revcoreitsolution@gmail.com', 8211, 'USED', '2023-11-16');

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
(6, 7978, '202311137343', 8, 10, 88, '2023-11-13'),
(7, 9292, '202311148085', 13, 16, 88, '2023-11-14'),
(8, 9292, '202311147506', 14, 19, 88, '2023-11-14'),
(9, 9292, '202311159889', 13, 16, 88, '2023-11-15'),
(10, 9292, '202311157575', 13, 16, 88, '2023-11-15'),
(11, 9292, '202311157197', 14, 19, 88, '2023-11-15'),
(12, 9292, '202311137094', 14, 19, 88, '2023-11-16'),
(13, 9292, '202311137094', 14, 19, 88, '2023-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_assigned_section`
--

CREATE TABLE `teacher_assigned_section` (
  `aid` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `sid` int(50) NOT NULL,
  `sycode` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_assigned_section`
--

INSERT INTO `teacher_assigned_section` (`aid`, `uid`, `sid`, `sycode`) VALUES
(1, '65369999', 7, 7978),
(2, '182999478', 16, 9292);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_assigned_teacher_section_history`
--
ALTER TABLE `tbl_assigned_teacher_section_history`
  ADD PRIMARY KEY (`haid`);

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
-- Indexes for table `tbl_school_monitoring_attendance`
--
ALTER TABLE `tbl_school_monitoring_attendance`
  ADD PRIMARY KEY (`scid`);

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
-- Indexes for table `tbl_student_confirmation_for_enrollment`
--
ALTER TABLE `tbl_student_confirmation_for_enrollment`
  ADD PRIMARY KEY (`cid`);

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
-- Indexes for table `teacher_assigned_section`
--
ALTER TABLE `teacher_assigned_section`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_assigned_teacher_section_history`
--
ALTER TABLE `tbl_assigned_teacher_section_history`
  MODIFY `haid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_school_announcement`
--
ALTER TABLE `tbl_school_announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_school_enrollee_fresh`
--
ALTER TABLE `tbl_school_enrollee_fresh`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_school_enrollee_trans`
--
ALTER TABLE `tbl_school_enrollee_trans`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_school_lost`
--
ALTER TABLE `tbl_school_lost`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_school_monitoring_attendance`
--
ALTER TABLE `tbl_school_monitoring_attendance`
  MODIFY `scid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_school_request_type`
--
ALTER TABLE `tbl_school_request_type`
  MODIFY `req` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_school_student_record`
--
ALTER TABLE `tbl_school_student_record`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_school_student_request`
--
ALTER TABLE `tbl_school_student_request`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_school_student_request_history`
--
ALTER TABLE `tbl_school_student_request_history`
  MODIFY `reqhid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_school_teacher_record`
--
ALTER TABLE `tbl_school_teacher_record`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_school_year_details_grade`
--
ALTER TABLE `tbl_school_year_details_grade`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_school_year_details_map`
--
ALTER TABLE `tbl_school_year_details_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_school_year_details_section`
--
ALTER TABLE `tbl_school_year_details_section`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_student_confirmation_for_enrollment`
--
ALTER TABLE `tbl_student_confirmation_for_enrollment`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_designation`
--
ALTER TABLE `tbl_user_designation`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_information`
--
ALTER TABLE `tbl_user_information`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_user_remember_me_tokens`
--
ALTER TABLE `tbl_user_remember_me_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user_school_year`
--
ALTER TABLE `tbl_user_school_year`
  MODIFY `syid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user_security`
--
ALTER TABLE `tbl_user_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_user_student_history`
--
ALTER TABLE `tbl_user_student_history`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher_assigned_section`
--
ALTER TABLE `teacher_assigned_section`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
