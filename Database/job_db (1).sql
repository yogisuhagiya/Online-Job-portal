-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 02:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg`
--

CREATE TABLE `candidate_reg` (
  `candidate_id` int(11) NOT NULL,
  `f_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `l_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pin_code` int(11) NOT NULL,
  `photo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `at_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`candidate_id`, `f_name`, `l_name`, `email`, `username`, `password`, `phone`, `address`, `city`, `state`, `pin_code`, `photo`, `status`, `at_date`) VALUES
(1, 'Suhagiya', 'Axita', 'yogisuhagiya21@gmail.com', 'Yogi', 'yogi@123', '9901234567', '21 Saurastra Bungalows', '3', '1', 396101, 'images/1.png', 'accepted', '2023-04-02'),
(2, 'test', 'test1', 'test@gmail.com', 'test1', 'test12', 'Ahmedabad', '1', '3', '1', 395820, 'images/1.png', 'accepted', '2023-04-03'),
(3, 'Timbadiya', 'Divyesh', 'manudivu@gmail.com', 'divu', 'Manu@123', '9824434578', 'VARSA', '2', '3', 395012, 'images/admin.jpg', 'accepted', '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `citymaster`
--

CREATE TABLE `citymaster` (
  `cityid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citymaster`
--

INSERT INTO `citymaster` (`cityid`, `stateid`, `cityname`) VALUES
(1, 1, 'SURAT'),
(2, 1, 'VADODARA'),
(3, 2, 'JAISALMER'),
(7, 3, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `name` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `message` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `name`, `email`, `message`) VALUES
(1, 'Mihir Soni', 'mihir12@gmail.com', 'sdc'),
(2, 'Mihir Soni', 'mihir12@gmail.com', 'sdc'),
(4, 'jay', 'jay@gmail.com', 'sfsfsf'),
(5, 'mihir', 'mihir12@gmail.com', '1213');

-- --------------------------------------------------------

--
-- Table structure for table `done_exam`
--

CREATE TABLE `done_exam` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `que1_ans` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que2_ans` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que3_ans` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que4_ans` text COLLATE latin1_general_ci NOT NULL,
  `que5_ans` text COLLATE latin1_general_ci NOT NULL,
  `score` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `candidate_status` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `done_exam`
--

INSERT INTO `done_exam` (`id`, `exam_id`, `employer_id`, `candidate_id`, `que1_ans`, `que2_ans`, `que3_ans`, `que4_ans`, `que5_ans`, `score`, `job_id`, `candidate_status`) VALUES
(1, 3, 2, 1, 'Divyesh', 'gtyu', '2', 'fghjkl', 'zxcasdff', 0, 12, 'selected'),
(2, 4, 2, 1, 'Divyesh', 'gtyu', '3', 'ssssss', 'wwwwww', 0, 13, ''),
(3, 3, 2, 3, 'Divyesh', 'gtyu', '3', 'jij', 'huhu', 0, 12, ''),
(5, 5, 2, 3, '1', '2', '4', 'sdaddddddddddddd', 'dddddasssssssssssssssss', 2, 14, '');

-- --------------------------------------------------------

--
-- Table structure for table `employer_reg`
--

CREATE TABLE `employer_reg` (
  `employer_id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `f_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `l_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `state` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `pin_code` int(11) NOT NULL,
  `photo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `at_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `employer_reg`
--

INSERT INTO `employer_reg` (`employer_id`, `company_name`, `position`, `f_name`, `l_name`, `email`, `username`, `password`, `phone`, `address`, `city`, `state`, `pin_code`, `photo`, `status`, `at_date`) VALUES
(1, 'soni', 'CEO', 'Mihir', 'Soni', 'mihir12@gmail.com', 'Mihirsoniiii', 'Mihir@123123', '9408710986', 'Ahmedabad', '1', '3', 395820, 'images/1.png', 'accepted', '2023-03-30'),
(2, 'yogis', 'CEO', 'Yogi', 'Suhagiya', 'yogisuhagiya21@gmail.com', 'yogi', 'Yogi@123', '6356750154', '21 Saurastra Bungalows', '1', '1', 396101, 'images/1.png', 'accepted', '2023-03-31'),
(3, 'Amd', 'CEO', 'Mihir', 'Soni', 'mihir12@gmail.com', 'mihir', 'Mihir@123', '9408710986', 'Ahmedabad', '1', '3', 395820, 'images/test.jpg', 'accepted', '2023-04-01'),
(4, 'yogi', 'CEO', 'Yogi', 'Suhagiya', 'yogisuhagiya21@gmail.com', 'test', 'Yogi@123', '6356750154', '21, Saurashtra bunglow ,maharaja farm near ,mota varachha surat', '1', '1', 394101, 'images/test.jpg', 'accepted', '2023-04-01'),
(5, 'Yash & sons', 'CEO', 'Yash', 'Timbadiya', 'yashsojitra065@gmail.com', 'yash', 'Yash@123', '6356750154', '21, Saurashtra bunglow ,maharaja farm near ,mota varachha surat', '1', '1', 394101, 'images/author-image-3-646x680.jpg', 'accepted', '2023-04-02'),
(6, 'soni', 'CEO', 'Mihir', 'Soni', 'mihir121@gmail.com', 'mahirsoni', 'Mahir@123455', '9408710986', 'Ahmedabad', '1', '3', 395820, 'images/admin.jpg', 'accepted', '2023-04-02'),
(8, 'test', 'CEO', 'Timbadiya', 'dvs', 'divu@gmail.com', 'test', 'Test@123', '9824434545', 'VARSA', '2', '3', 395012, 'images/admin.jpg', 'accepted', '2023-04-03'),
(11, 'soni', 'CEO', 'Mihir', 'Soni', 'mihir12@gmail.com', 'test', 'Test@123', '9408710986', 'Ahmedabad', '1', '3', 395820, 'images/tst-image-4-200x216.jpg', 'accepted', '2023-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `que1` text COLLATE latin1_general_ci NOT NULL,
  `que1_optA` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que1_optB` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que1_optC` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que1_optD` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que1_Ans` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que2` text COLLATE latin1_general_ci NOT NULL,
  `que2_optA` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que2_optB` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que2_optC` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que2_optD` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que2_Ans` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que3` text COLLATE latin1_general_ci NOT NULL,
  `que3_optA` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que3_optB` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que3_optC` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que3_optD` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que3_Ans` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `que4` text COLLATE latin1_general_ci NOT NULL,
  `que5` text COLLATE latin1_general_ci NOT NULL,
  `step` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `job_id`, `employer_id`, `que1`, `que1_optA`, `que1_optB`, `que1_optC`, `que1_optD`, `que1_Ans`, `que2`, `que2_optA`, `que2_optB`, `que2_optC`, `que2_optD`, `que2_Ans`, `que3`, `que3_optA`, `que3_optB`, `que3_optC`, `que3_optD`, `que3_Ans`, `que4`, `que5`, `step`) VALUES
(3, 12, 2, 'hhhhhhh', 'Mihir', 'Divyesh', 'Shreena', 'Dhruvi', 'Bhumi', '222', 'gtyu', 'hgfyu', 'fyuydt', 'yde688', 'uhip', 'ffff', '1', '2', '3', '5', '8', '55522255', '555522555', 6),
(4, 13, 2, '123456', 'Mihir', 'Divyesh', 'Shreena', 'Dhruvi', 'Bhumi', '23456', 'gtyu', 'hgfyu', 'fyuydt', 'yde688', 'uhip', '3456', '1', '2', '3', '5', '8', '456', '56', 6),
(5, 14, 2, 'how many level do you have ???', '1', '2', '3', '4', '2', 'how many languages do you need ???', '1', '2', '3', '4', '2', 'how many animals are there ??', '2', '3', '4', '5', '4', 'why i select you ??', 'in what feild expriance do you have ??', 6);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `company_photo` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `position` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `location` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `job_post` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `skills` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `descriprition` text COLLATE latin1_general_ci NOT NULL,
  `time` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `salary` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `employer_id` int(11) NOT NULL,
  `step` int(11) NOT NULL,
  `at_create` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `company_photo`, `position`, `location`, `job_post`, `skills`, `descriprition`, `time`, `salary`, `employer_id`, `step`, `at_create`) VALUES
(12, 'Soni Industries12', 'images/job/product-3-720x480.jpg', 'HR1233', 'Ahmedabad33', 'Web Designerddddd', 'HTML,CSS,JQuery', 'bgggg', 'Part-time', '8000', 2, 6, '2023-03-20'),
(13, 'Industries', 'images/job/product-1-720x480.jpg', 'CEO', 'Surat', 'Android Designer', 'HTML,CSS,JQuery', 'fgrtyhujiftged', 'Full-time', '6000', 2, 6, '2023-03-22'),
(14, 'Soni Industries12', 'images/job/contact-1-600x400.jpg', 'HR', 'Surat', 'Android developer', 'HTML,android studio', 'aswdefrtgyhujiklbgvfcdxsz', 'Full-time', '23210', 2, 6, '2023-03-24'),
(15, 'soni', 'image/job/product-1-720x480.jpg', 'CFO', 'Surat,Gujarat', 'Android developer', 'HTML,android studio', 'aswdefrtgyhujiklbgvfcdxsz', 'Full-time', '23210', 2, 6, '2023-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `selected_candidate`
--

CREATE TABLE `selected_candidate` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `at_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selected_candidate`
--

INSERT INTO `selected_candidate` (`id`, `candidate_id`, `employer_id`, `job_id`, `at_date`) VALUES
(2, 1, 2, 12, '2023-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `statemaster`
--

CREATE TABLE `statemaster` (
  `stateid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statemaster`
--

INSERT INTO `statemaster` (`stateid`, `statename`) VALUES
(1, 'GUJARAT'),
(2, 'RAJASTHAN'),
(3, 'MAHARASHTRA'),
(4, 'DELHI'),
(12, 'mp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `done_exam`
--
ALTER TABLE `done_exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_reg`
--
ALTER TABLE `employer_reg`
  ADD PRIMARY KEY (`employer_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected_candidate`
--
ALTER TABLE `selected_candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statemaster`
--
ALTER TABLE `statemaster`
  ADD PRIMARY KEY (`stateid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `citymaster`
--
ALTER TABLE `citymaster`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `done_exam`
--
ALTER TABLE `done_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employer_reg`
--
ALTER TABLE `employer_reg`
  MODIFY `employer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `selected_candidate`
--
ALTER TABLE `selected_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statemaster`
--
ALTER TABLE `statemaster`
  MODIFY `stateid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
