-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 03:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `username`, `password`) VALUES
(2, 'abcd', '11-11-11', '1234'),
(3, 'status', '12-11-11', '1234'),
(4, 'admin', '12-12-11', 'admin'),
(5, 'ssss', 'abdb', 'www');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `count` int(11) NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `count`, `category`) VALUES
(1, 'Advance Programming', 40, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `coursefacultys`
--

CREATE TABLE `coursefacultys` (
  `cf_id` int(20) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `faculty_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursefacultys`
--

INSERT INTO `coursefacultys` (`cf_id`, `course_id`, `faculty_id`) VALUES
(1, 'ATP3_1', '4'),
(2, 'OOP1_1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `coursenotes`
--

CREATE TABLE `coursenotes` (
  `id` int(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursenotes`
--

INSERT INTO `coursenotes` (`id`, `course_id`, `faculty_id`, `notes`) VALUES
(1, 'ATP3_1', 1, 'upload/33521.JPG'),
(2, 'ATP3_1', 1, 'upload/33521.JPG'),
(3, 'ATP3_1', 1, 'upload/33521.JPG'),
(4, 'OOP1_1', 1, 'upload/33521.JPG'),
(5, 'ATP3_1', 1, 'upload/33521.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `c_id` int(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `section` varchar(10) NOT NULL,
  `seats` int(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `preq` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`c_id`, `id`, `course_name`, `section`, `seats`, `category`, `preq`, `status`) VALUES
(1, 'ATP3_1', 'ADVANCED TOPIC IN PROGRAMMING 3', 'A', 30, 'CSE', NULL, 1),
(2, 'OOP1_1', 'OBJECT ORIENTED PROGRAMMING 1(JAVA)', 'A', 40, 'CSE', NULL, 1),
(3, 'ATP3_2', 'ADVANCED TOPIC IN PROGRAMMING', 'B', 30, 'CSE', 'OOP1_1', 1),
(4, 'TC_1', 'TELECOMMUNICATION ENGINEERING', 'A', 40, 'EEE', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `coursestudents`
--

CREATE TABLE `coursestudents` (
  `cs_id` int(20) NOT NULL,
  `course_id` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `grade` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE `mails` (
  `id` int(20) NOT NULL,
  `faculty_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `faculty_id`, `student_id`, `subject`, `mail`) VALUES
(4, 0, 2, '', 'hello'),
(5, 0, 2, '', 'hello'),
(6, 4, 2, 'hello', 'hello'),
(7, 4, 3, 'yo', 'yo');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `content`) VALUES
(1, 'ttt', 't34terter'),
(2, 'ttt', 't34terter'),
(3, 'bv', 'cbcbcv');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `full_name` varchar(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `gender`, `contact`, `role`) VALUES
(1, 'abyss', 'abyss', 'abyss', 'male', 'abyss', 'student'),
(3, 'user', 'user', 'user', 'male', 'user', 'student'),
(4, 'faculty', 'faculty', 'faculty', 'male', 'faculty', 'faculty'),
(5, '15-30530-3', '1111', 'Saif Ahamed', 'male', '01711111111', 'student'),
(7, 'admin3', 'admin', 'tete', 'male', 'wr4w', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursefacultys`
--
ALTER TABLE `coursefacultys`
  ADD PRIMARY KEY (`cf_id`);

--
-- Indexes for table `coursenotes`
--
ALTER TABLE `coursenotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `coursestudents`
--
ALTER TABLE `coursestudents`
  ADD PRIMARY KEY (`cs_id`);

--
-- Indexes for table `mails`
--
ALTER TABLE `mails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coursefacultys`
--
ALTER TABLE `coursefacultys`
  MODIFY `cf_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `coursenotes`
--
ALTER TABLE `coursenotes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `coursestudents`
--
ALTER TABLE `coursestudents`
  MODIFY `cs_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mails`
--
ALTER TABLE `mails`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
