-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2019 at 06:21 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'abcd', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `coursefaculty`
--

CREATE TABLE `coursefaculty` (
  `cf_id` int(20) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursefaculty`
--

INSERT INTO `coursefaculty` (`cf_id`, `course_id`, `faculty_id`) VALUES
(1, 'ATP3_1', '4'),
(2, 'OOP1_1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` varchar(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `section` varchar(10) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `seats` int(11) NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `section`, `schedule`, `seats`, `category`) VALUES
('ATP3_1', 'ADVANCED TOPIC IN PROGRAMMING 3', 'A', 'MON 11AM-2PM | WED 12PM-2PM', 30, 'CSE'),
('OOP1_1', 'OBJECT ORIENTED PROGRAMMING 1(JAVA)', 'A', 'MON 11AM-2PM | WED 12PM-2PM', 40, 'CSE'),
('ATP3_2', 'ADVANCED TOPIC IN PROGRAMMING', 'B', 'MON 11AM-2PM | WED 12PM-2PM', 30, 'CSE'),
('TC_1', 'TELECOMMUNICATION ENGINEERING', 'A', 'MON 11AM-2PM | WED 12PM-2PM', 40, 'EEE');

-- --------------------------------------------------------

--
-- Table structure for table `coursestudent`
--

CREATE TABLE `coursestudent` (
  `cs_id` int(20) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `grade` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursestudent`
--

INSERT INTO `coursestudent` (`cs_id`, `course_id`, `student_id`, `grade`) VALUES
(1, 'ATP3_1', 1, 'A+'),
(2, 'ATP3_1', 2, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(20) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `faculty_name`, `student_id`, `mail`) VALUES
(4, 'faculty', 2, 'hello'),
(5, 'faculty', 2, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `full_name` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `contact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `full_name`, `gender`, `contact`) VALUES
(1, 'abyss', 'abyss', 'abyss', 'male', 'abyss'),
(2, 'abyss', 'abyss', 'abyss', 'abyss', 'abyss'),
(3, 'user', 'user', 'user', 'm', 'user'),
(4, 'faculty', 'faculty', 'faculty', 'faculty', 'faculty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursefaculty`
--
ALTER TABLE `coursefaculty`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `coursestudent`
--
ALTER TABLE `coursestudent`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `coursefaculty`
--
ALTER TABLE `coursefaculty`
  MODIFY `cf_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coursestudent`
--
ALTER TABLE `coursestudent`
  MODIFY `cs_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
