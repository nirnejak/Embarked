-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2019 at 02:19 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3016630_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `be_cse`
--

CREATE TABLE `be_cse` (
  `student_id` varchar(30) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `college` varchar(30) NOT NULL,
  `batch` int(6) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `section` varchar(3) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `university_roll` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `be_year_1`
--

CREATE TABLE `be_year_1` (
  `student_id` varchar(30) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `college` varchar(30) NOT NULL,
  `batch` int(6) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sec` varchar(3) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `university_roll` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bpharm_pharma`
--

CREATE TABLE `bpharm_pharma` (
  `student_id` varchar(30) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `college` varchar(30) NOT NULL,
  `batch` int(6) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `sec` varchar(3) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `university_roll` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `course` varchar(30) NOT NULL,
  `branch_name` varchar(200) NOT NULL,
  `branch_abbriviation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college_master`
--

CREATE TABLE `college_master` (
  `college_name` varchar(100) NOT NULL,
  `college_abbriviation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `course_name` varchar(100) NOT NULL,
  `course_abbriviation` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_allotment`
--

CREATE TABLE `employee_allotment` (
  `employee_id` varchar(30) NOT NULL,
  `allotment1` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_record`
--

CREATE TABLE `employee_record` (
  `employee_id` varchar(30) NOT NULL,
  `full_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `employee_id` varchar(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `abbriviation` varchar(30) NOT NULL,
  `field_of_teaching` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `employee_id` varchar(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `abbriviation` varchar(30) NOT NULL,
  `field_of_teaching` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `employee_id` varchar(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `abbriviation` varchar(30) NOT NULL,
  `field_of_study` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rcetbe_cse2015a`
--

CREATE TABLE `rcetbe_cse2015a` (
  `date` date NOT NULL,
  `lec_no` tinyint(3) NOT NULL,
  `sub_id` varchar(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `cse1510211` tinyint(2) NOT NULL,
  `cse1510274` tinyint(2) NOT NULL,
  `cse1510188` tinyint(2) NOT NULL,
  `cse1510215` tinyint(2) NOT NULL,
  `cse1510262` tinyint(2) NOT NULL,
  `cse1510209` tinyint(2) NOT NULL,
  `cse1510275` tinyint(2) NOT NULL,
  `cse1510213` tinyint(2) NOT NULL,
  `cse1510195` tinyint(2) NOT NULL,
  `cse1510206` tinyint(2) NOT NULL,
  `cse1510250` tinyint(2) NOT NULL,
  `cse1510207` tinyint(2) NOT NULL,
  `cse1510193` tinyint(2) NOT NULL,
  `cse1510271` tinyint(2) NOT NULL,
  `cse1510245` tinyint(2) NOT NULL,
  `cse1510263` tinyint(2) NOT NULL,
  `cse1510695` tinyint(2) NOT NULL,
  `cse1510197` tinyint(2) NOT NULL,
  `cse1510191` tinyint(2) NOT NULL,
  `cse1510700` tinyint(2) NOT NULL,
  `cse1510202` tinyint(2) NOT NULL,
  `cse1510258` tinyint(2) NOT NULL,
  `cse1510205` tinyint(2) NOT NULL,
  `cse1510255` tinyint(2) NOT NULL,
  `cse1510190` tinyint(2) NOT NULL,
  `cse1510238` tinyint(2) NOT NULL,
  `cse1510189` tinyint(2) NOT NULL,
  `cse1510253` tinyint(2) NOT NULL,
  `cse1510185` tinyint(2) NOT NULL,
  `cse1510265` tinyint(2) NOT NULL,
  `cse1510214` tinyint(2) NOT NULL,
  `cse1510266` tinyint(2) NOT NULL,
  `cse1510237` tinyint(2) NOT NULL,
  `cse1510256` tinyint(2) NOT NULL,
  `cse1510137` tinyint(2) NOT NULL,
  `cse1510229` tinyint(2) NOT NULL,
  `cse1510221` tinyint(2) NOT NULL,
  `cse1510241` tinyint(2) NOT NULL,
  `cse1510249` tinyint(2) NOT NULL,
  `cse1510667` tinyint(2) NOT NULL,
  `cse1510208` tinyint(2) NOT NULL,
  `cse1510240` tinyint(2) NOT NULL,
  `cse1510251` tinyint(2) NOT NULL,
  `cse1510254` tinyint(2) NOT NULL,
  `cse1510218` tinyint(2) NOT NULL,
  `cse1510267` tinyint(2) NOT NULL,
  `cse1511415` tinyint(2) NOT NULL,
  `cse127320` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rcetbe_cse2015b`
--

CREATE TABLE `rcetbe_cse2015b` (
  `date` date NOT NULL,
  `lec_no` int(3) NOT NULL,
  `sub_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cse1519201` tinyint(2) NOT NULL,
  `cse1519202` tinyint(2) NOT NULL,
  `cse1519203` tinyint(2) NOT NULL,
  `cse1519204` tinyint(2) NOT NULL,
  `cse1519205` tinyint(2) NOT NULL,
  `cse1519206` tinyint(2) NOT NULL,
  `cse1519207` tinyint(2) NOT NULL,
  `cse1519208` tinyint(2) NOT NULL,
  `cse1519209` tinyint(2) NOT NULL,
  `cse1519210` tinyint(2) NOT NULL,
  `cse1519211` tinyint(2) NOT NULL,
  `cse1519212` tinyint(2) NOT NULL,
  `cse1519213` tinyint(2) NOT NULL,
  `cse1519214` tinyint(2) NOT NULL,
  `cse1519215` tinyint(2) NOT NULL,
  `cse1519216` tinyint(2) NOT NULL,
  `cse1519217` tinyint(2) NOT NULL,
  `cse1519218` tinyint(2) NOT NULL,
  `cse1519219` tinyint(2) NOT NULL,
  `cse1519220` tinyint(2) NOT NULL,
  `cse1519221` tinyint(2) NOT NULL,
  `cse1519222` tinyint(2) NOT NULL,
  `cse1519223` tinyint(2) NOT NULL,
  `cse1519224` tinyint(2) NOT NULL,
  `cse1519225` tinyint(2) NOT NULL,
  `cse1519226` tinyint(2) NOT NULL,
  `cse1519227` tinyint(2) NOT NULL,
  `cse1519228` tinyint(2) NOT NULL,
  `cse1519229` tinyint(2) NOT NULL,
  `cse1519230` tinyint(2) NOT NULL,
  `cse1519231` tinyint(2) NOT NULL,
  `cse1519232` tinyint(2) NOT NULL,
  `cse1519233` tinyint(2) NOT NULL,
  `cse1519234` tinyint(2) NOT NULL,
  `cse1519235` tinyint(2) NOT NULL,
  `cse1519236` tinyint(2) NOT NULL,
  `cse1519237` tinyint(2) NOT NULL,
  `cse1519238` tinyint(2) NOT NULL,
  `cse1519239` tinyint(2) NOT NULL,
  `cse1519240` tinyint(2) NOT NULL,
  `cse1519241` tinyint(2) NOT NULL,
  `cse1519242` tinyint(2) NOT NULL,
  `cse1519243` tinyint(2) NOT NULL,
  `cse1519244` tinyint(2) NOT NULL,
  `cse1519245` tinyint(2) NOT NULL,
  `cse1519246` tinyint(2) NOT NULL,
  `cse1519247` tinyint(2) NOT NULL,
  `cse1519248` tinyint(2) NOT NULL,
  `cse1519249` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rcetbe_cse2016a`
--

CREATE TABLE `rcetbe_cse2016a` (
  `date` date NOT NULL,
  `lec_no` int(3) NOT NULL,
  `sub_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cse1610185` tinyint(2) NOT NULL,
  `cse1610188` tinyint(2) NOT NULL,
  `cse1610189` tinyint(2) NOT NULL,
  `cse1610190` tinyint(2) NOT NULL,
  `cse1610191` tinyint(2) NOT NULL,
  `cse1610193` tinyint(2) NOT NULL,
  `cse1610137` tinyint(2) NOT NULL,
  `cse1610195` tinyint(2) NOT NULL,
  `cse1610197` tinyint(2) NOT NULL,
  `cse1610202` tinyint(2) NOT NULL,
  `cse1610205` tinyint(2) NOT NULL,
  `cse1610206` tinyint(2) NOT NULL,
  `cse1610207` tinyint(2) NOT NULL,
  `cse1610208` tinyint(2) NOT NULL,
  `cse1610209` tinyint(2) NOT NULL,
  `cse1610211` tinyint(2) NOT NULL,
  `cse1610213` tinyint(2) NOT NULL,
  `cse1610214` tinyint(2) NOT NULL,
  `cse1610215` tinyint(2) NOT NULL,
  `cse1610218` tinyint(2) NOT NULL,
  `cse1610221` tinyint(2) NOT NULL,
  `cse1610229` tinyint(2) NOT NULL,
  `cse1610237` tinyint(2) NOT NULL,
  `cse1610238` tinyint(2) NOT NULL,
  `cse1610240` tinyint(2) NOT NULL,
  `cse1610241` tinyint(2) NOT NULL,
  `cse1610245` tinyint(2) NOT NULL,
  `cse1610249` tinyint(2) NOT NULL,
  `cse1610250` tinyint(2) NOT NULL,
  `cse1610251` tinyint(2) NOT NULL,
  `cse1610253` tinyint(2) NOT NULL,
  `cse1610254` tinyint(2) NOT NULL,
  `cse1610255` tinyint(2) NOT NULL,
  `cse1610256` tinyint(2) NOT NULL,
  `cse1610258` tinyint(2) NOT NULL,
  `cse1610262` tinyint(2) NOT NULL,
  `cse1610263` tinyint(2) NOT NULL,
  `cse1610265` tinyint(2) NOT NULL,
  `cse1610266` tinyint(2) NOT NULL,
  `cse1610267` tinyint(2) NOT NULL,
  `cse1610271` tinyint(2) NOT NULL,
  `cse1610274` tinyint(2) NOT NULL,
  `cse1610275` tinyint(2) NOT NULL,
  `cse1610667` tinyint(2) NOT NULL,
  `cse1610695` tinyint(2) NOT NULL,
  `cse1610700` tinyint(2) NOT NULL,
  `cse1611415` tinyint(2) NOT NULL,
  `cse1673206` tinyint(2) NOT NULL,
  `cse1673217` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rcetbe_cse2016b`
--

CREATE TABLE `rcetbe_cse2016b` (
  `date` date NOT NULL,
  `lec_no` int(3) NOT NULL,
  `sub_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cse1695642` tinyint(2) NOT NULL,
  `cse1695643` tinyint(2) NOT NULL,
  `cse1695601` tinyint(2) NOT NULL,
  `cse1695602` tinyint(2) NOT NULL,
  `cse1695603` tinyint(2) NOT NULL,
  `cse1695604` tinyint(2) NOT NULL,
  `cse1695605` tinyint(2) NOT NULL,
  `cse1695606` tinyint(2) NOT NULL,
  `cse1695607` tinyint(2) NOT NULL,
  `cse1695608` tinyint(2) NOT NULL,
  `cse1695609` tinyint(2) NOT NULL,
  `cse1695610` tinyint(2) NOT NULL,
  `cse1695611` tinyint(2) NOT NULL,
  `cse1695612` tinyint(2) NOT NULL,
  `cse1695613` tinyint(2) NOT NULL,
  `cse1695614` tinyint(2) NOT NULL,
  `cse1695615` tinyint(2) NOT NULL,
  `cse1695616` tinyint(2) NOT NULL,
  `cse1695617` tinyint(2) NOT NULL,
  `cse1695618` tinyint(2) NOT NULL,
  `cse1695619` tinyint(2) NOT NULL,
  `cse1695620` tinyint(2) NOT NULL,
  `cse1695621` tinyint(2) NOT NULL,
  `cse1695622` tinyint(2) NOT NULL,
  `cse1695623` tinyint(2) NOT NULL,
  `cse1695624` tinyint(2) NOT NULL,
  `cse1695626` tinyint(2) NOT NULL,
  `cse1695625` tinyint(2) NOT NULL,
  `cse1695627` tinyint(2) NOT NULL,
  `cse1695628` tinyint(2) NOT NULL,
  `cse1695629` tinyint(2) NOT NULL,
  `cse1695630` tinyint(2) NOT NULL,
  `cse1695631` tinyint(2) NOT NULL,
  `cse1695632` tinyint(2) NOT NULL,
  `cse1695633` tinyint(2) NOT NULL,
  `cse1695634` tinyint(2) NOT NULL,
  `cse1695635` tinyint(2) NOT NULL,
  `cse1695636` tinyint(2) NOT NULL,
  `cse1695637` tinyint(2) NOT NULL,
  `cse1695638` tinyint(2) NOT NULL,
  `cse1695639` tinyint(2) NOT NULL,
  `cse1695640` tinyint(2) NOT NULL,
  `cse1695641` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rcetbe_csec`
--

CREATE TABLE `rcetbe_csec` (
  `date` date NOT NULL,
  `lec_no` int(3) NOT NULL,
  `sub_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rcetbe_year_12019a`
--

CREATE TABLE `rcetbe_year_12019a` (
  `date` date NOT NULL,
  `lec_no` int(3) NOT NULL,
  `sub_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `employee_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `subject_id` varchar(30) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_abbriviation` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `year` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `employee_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `be_cse`
--
ALTER TABLE `be_cse`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `university_roll` (`university_roll`),
  ADD KEY `college` (`college`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `be_year_1`
--
ALTER TABLE `be_year_1`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `university_roll` (`university_roll`),
  ADD KEY `be_year_1_ibfk_2` (`college`),
  ADD KEY `be_year_1_ibfk_3` (`branch`);

--
-- Indexes for table `bpharm_pharma`
--
ALTER TABLE `bpharm_pharma`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `university_roll` (`university_roll`),
  ADD KEY `college` (`college`),
  ADD KEY `branch` (`branch`);

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`branch_abbriviation`),
  ADD KEY `branch_master_ibfk_1` (`course`);

--
-- Indexes for table `college_master`
--
ALTER TABLE `college_master`
  ADD PRIMARY KEY (`college_abbriviation`);

--
-- Indexes for table `course_master`
--
ALTER TABLE `course_master`
  ADD PRIMARY KEY (`course_abbriviation`);

--
-- Indexes for table `employee_allotment`
--
ALTER TABLE `employee_allotment`
  ADD UNIQUE KEY `employee_id` (`employee_id`);

--
-- Indexes for table `employee_record`
--
ALTER TABLE `employee_record`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD KEY `faculty_ibfk_1` (`employee_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD KEY `hod_ibfk_1` (`employee_id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD KEY `management_ibfk_1` (`employee_id`);

--
-- Indexes for table `rcetbe_cse2015a`
--
ALTER TABLE `rcetbe_cse2015a`
  ADD PRIMARY KEY (`date`,`lec_no`);

--
-- Indexes for table `rcetbe_cse2015b`
--
ALTER TABLE `rcetbe_cse2015b`
  ADD PRIMARY KEY (`date`,`lec_no`);

--
-- Indexes for table `rcetbe_cse2016a`
--
ALTER TABLE `rcetbe_cse2016a`
  ADD PRIMARY KEY (`date`,`lec_no`);

--
-- Indexes for table `rcetbe_cse2016b`
--
ALTER TABLE `rcetbe_cse2016b`
  ADD PRIMARY KEY (`date`,`lec_no`);

--
-- Indexes for table `rcetbe_csec`
--
ALTER TABLE `rcetbe_csec`
  ADD PRIMARY KEY (`date`,`lec_no`);

--
-- Indexes for table `rcetbe_year_12019a`
--
ALTER TABLE `rcetbe_year_12019a`
  ADD PRIMARY KEY (`date`,`lec_no`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `subject_master_ibfk_1` (`course`),
  ADD KEY `subject_master_ibfk_2` (`branch`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user_master_ibfk_1` (`employee_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `be_cse`
--
ALTER TABLE `be_cse`
  ADD CONSTRAINT `be_cse_ibfk_1` FOREIGN KEY (`college`) REFERENCES `college_master` (`college_abbriviation`),
  ADD CONSTRAINT `be_cse_ibfk_2` FOREIGN KEY (`college`) REFERENCES `college_master` (`college_abbriviation`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_cse_ibfk_3` FOREIGN KEY (`branch`) REFERENCES `branch_master` (`branch_abbriviation`) ON DELETE CASCADE;

--
-- Constraints for table `be_year_1`
--
ALTER TABLE `be_year_1`
  ADD CONSTRAINT `be_year_1_ibfk_1` FOREIGN KEY (`college`) REFERENCES `college_master` (`college_abbriviation`),
  ADD CONSTRAINT `be_year_1_ibfk_2` FOREIGN KEY (`college`) REFERENCES `college_master` (`college_abbriviation`) ON DELETE CASCADE,
  ADD CONSTRAINT `be_year_1_ibfk_3` FOREIGN KEY (`branch`) REFERENCES `branch_master` (`branch_abbriviation`) ON DELETE CASCADE;

--
-- Constraints for table `bpharm_pharma`
--
ALTER TABLE `bpharm_pharma`
  ADD CONSTRAINT `bpharm_pharma_ibfk_1` FOREIGN KEY (`college`) REFERENCES `college_master` (`college_abbriviation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bpharm_pharma_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `branch_master` (`branch_abbriviation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_allotment`
--
ALTER TABLE `employee_allotment`
  ADD CONSTRAINT `employee_allotment_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hod`
--
ALTER TABLE `hod`
  ADD CONSTRAINT `hod_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `management`
--
ALTER TABLE `management`
  ADD CONSTRAINT `management_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD CONSTRAINT `subject_master_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course_master` (`course_abbriviation`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_master`
--
ALTER TABLE `user_master`
  ADD CONSTRAINT `user_master_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
