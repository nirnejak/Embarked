-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2017 at 06:39 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance1`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `count_columns` (IN `t_name` VARCHAR(50))  begin
    declare tbl_name varchar(50);
    set tbl_name=t_name;
    select count(*) from information_schema.columns where table_schema='attendance1' and table_name=tbl_name and ordinal_position > 4;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `create_user` (IN `userid` VARCHAR(30), IN `fullname` VARCHAR(100))  begin 
DECLARE uid varchar(20);
declare fname varchar(30); 
set uid=userid;
set fname=fullname;
insert into employee_record values (uid,fname);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_branch` ()  BEGIN
select branch_abbriviation from branch_master;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_college` ()  BEGIN
select college_abbriviation from college_master;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_column_name` (IN `tbl_name` VARCHAR(50))  begin 
    declare t_name VARCHAR(50);
    SET t_name=tbl_name;
    select column_name from information_schema.columns where table_schema='attendance1' and table_name=t_name and ordinal_position > 4;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `display_course` ()  begin 
select course_abbriviation from course_master;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_branch` (IN `crs` VARCHAR(30), IN `branch_name` VARCHAR(100), IN `branch_abbr` VARCHAR(30))  begin 
declare course varchar(30);
declare brnch_name varchar(30);
DECLARE brnch_abbr varchar(30);
set course=crs;
set brnch_name=branch_name;
set brnch_abbr=branch_abbr;
insert into branch_master values(course,brnch_name,brnch_abbr);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_college` (IN `cllg_name` VARCHAR(100), IN `cllg_abbr` VARCHAR(30))  BEGIN
declare college_name varchar(100);
declare college_abbr varchar(30);
set college_name=cllg_name;
set college_abbr=cllg_abbr;
insert into college_master values (college_name,college_abbr);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_course` (IN `crs_name` VARCHAR(100), IN `crs_abbr` VARCHAR(30))  BEGIN
   declare course_name varchar(100);
   declare course_abbr varchar(30);
   set course_name=crs_name;
   set course_abbr=crs_abbr;
   insert into course_master values (course_name,course_abbr);
   end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_subject` (IN `crs` VARCHAR(30), IN `sub_id` VARCHAR(40), IN `sub_name` VARCHAR(100), IN `sub_abbr` VARCHAR(30), IN `brnch` VARCHAR(30), IN `sem` INT(3), IN `year` INT(3))  BEGIN
declare course varchar(30);
DECLARE subject_id varchar(40);
DECLARE subject_name varchar(100);
declare subject_abbr varchar(30);
declare branch varchar(30);
declare semester int(3);
declare u_year int(3);
set course=crs;
set subject_id=sub_id;
set subject_name=sub_name;
set subject_abbr=sub_abbr;
set branch=brnch;
set semester=sem;
set u_year=year;
insert into subject_master values(subject_id,subject_name,subject_abbr,course,branch,semester,u_year);
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `login` (IN `v_user` VARCHAR(30), IN `pass` VARCHAR(100), OUT `u_type` VARCHAR(30), OUT `e_id` VARCHAR(30))  begin 
    declare usern varchar(30);
    declare passwrd varchar(100);
    declare type varchar(30);
    declare emp_id varchar(30);
    set usern=v_user;
    set passwrd=pass;
    select user_type into u_type from user_master where username=usern and password=passwrd;
    select employee_id into e_id from user_master where username=usern and password=passwrd;
    end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sign_up` (IN `e_id` VARCHAR(30), IN `user_name` VARCHAR(30), IN `pass` VARCHAR(100), IN `f_name` VARCHAR(50), IN `l_name` VARCHAR(50), IN `p_no` INT(12), IN `dept` VARCHAR(30), IN `v_email` VARCHAR(30), IN `v_abbr` VARCHAR(30), IN `v_f_o_t` VARCHAR(30), IN `u_type` VARCHAR(30))  begin 
    declare emp_id varchar(30);
    declare usern varchar(30);
    declare passwrd varchar(100);
    declare fname varchar(50);
    declare lname varchar(50);
    declare ph_no int(12);
    declare department varchar(30);
    declare email varchar(30);
    declare abbr varchar(30);
    declare f_o_t varchar(30);
    declare type varchar(30);
    set emp_id=e_id;
    set usern=user_name;
    set passwrd=pass;
    set fname=f_name;
    set lname=l_name;
    set ph_no=p_no;
    set department=dept;
    set email=v_email;
    set abbr=v_abbr;
    set f_o_t=v_f_o_t;
    set type=u_type;
    insert into user_master values(emp_id,usern,passwrd,type);
    if type='faculty' THEN 
      insert into faculty values(emp_id,fname,lname,department,ph_no,email,abbr,f_o_t);
    ELSEIF type='hod' THEN
      insert into hod values(emp_id,fname,lname,department,ph_no,email,abbr,f_o_t);
    elseif type='management' then 
       insert into management values(emp_id,fname,lname,department,ph_no,email,abbr,f_o_t);
    end if;
    end$$

DELIMITER ;


-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `college_master`
--

CREATE TABLE `college_master` (
  `college_name` varchar(100) NOT NULL,
  `college_abbriviation` varchar(30) NOT NULL PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `course_master`
--

CREATE TABLE `course_master` (
  `course_name` varchar(100) NOT NULL,
  `course_abbriviation` varchar(30) NOT NULL PRIMARY KEY
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_master`
--


-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `course` varchar(30) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `branch_abbriviation` varchar(30) NOT NULL PRIMARY KEY,
   CONSTRAINT `branch_master_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course_master` (`course_abbriviation`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_master`
--




--
-- Table structure for table `employee_record`
--

CREATE TABLE `employee_record` (
  `employee_id` varchar(30) NOT NULL PRIMARY KEY,
  `full_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_record`
--


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
  `field_of_teaching` varchar(30) NOT NULL,
  CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

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
  `field_of_teaching` varchar(30) NOT NULL,
  CONSTRAINT `hod_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

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
  `field_of_study` varchar(30) NOT NULL,
  CONSTRAINT `management_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `subject_id` varchar(30) NOT NULL PRIMARY KEY,
  `subject_name` varchar(100) NOT NULL,
  `subject_abbriviation` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `semester` int(2) DEFAULT NULL,
  `year` int(2) DEFAULT NULL,
  CONSTRAINT `subject_master_ibfk_1` FOREIGN KEY (`course`) REFERENCES `course_master` (`course_abbriviation`) ON DELETE CASCADE,
  CONSTRAINT `subject_master_ibfk_2` FOREIGN KEY (`branch`) REFERENCES  `branch_master` (`branch_abbriviation`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `employee_id` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL UNIQUE KEY,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  CONSTRAINT `user_master_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee_record` (`employee_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `year_1`
--

CREATE TABLE `year_1` (
  `student_id` varchar(30) NOT NULL PRIMARY KEY,
  `student_name` varchar(100) NOT NULL,
  `college` varchar(30) NOT NULL,
  `batch` int(5) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `section` varchar(3) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `university_roll` varchar(15) NOT NULL UNIQUE KEY,
  CONSTRAINT `year_1_ibfk_1` FOREIGN KEY (`college`) REFERENCES `college_master` (`college_abbriviation`) ON DELETE CASCADE,
  CONSTRAINT `year_1_ibfk_2` FOREIGN KEY (`branch`) REFERENCES `branch_master` (`branch_abbriviation`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_1`
--

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_master`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
