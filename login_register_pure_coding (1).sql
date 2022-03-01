-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 11:00 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_register_pure_coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `post` varchar(20) DEFAULT NULL,
  `phn_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `username`, `email`, `password`, `name`, `post`, `phn_number`) VALUES
(0, 'newadmin', 'newadmin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL),
(1, 'admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL),
(2, 'samia', 'samia@gmail.com', '71b3b26aaa319e0cdf6fdb8429c112b0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emp_login_id` varchar(255) NOT NULL,
  `emp_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `email`, `username`, `emp_login_id`, `emp_password`) VALUES
(2, 'emp1@gmail.com', 'emp1', 'emp1000', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `problem_submit`
--

CREATE TABLE `problem_submit` (
  `problem` varchar(255) NOT NULL,
  `probId` int(11) NOT NULL,
  `solution` varchar(500) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `ad_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem_submit`
--

INSERT INTO `problem_submit` (`problem`, `probId`, `solution`, `status`, `emp_id`, `userId`, `ad_id`) VALUES
('hi i am fin', 14, 'solution for fin', 'solved', 0, 23, NULL),
('hi i am mia', 15, '', 'assigned', 0, 18, NULL),
('hi i am emma', 16, '', 'assigned', 0, 19, NULL),
('i am emma.this is 2nd problem', 17, 'solution for emmas 2nd problem', 'solved', 0, 19, NULL),
('mias 2nd problem', 18, '', 'assigned', 0, 18, NULL),
('mias 3rd problem', 19, 'dsfgvhj', 'solved', 0, 18, NULL),
('hi this is eve', 20, 'solution.....', 'solved', 0, 20, NULL),
('eves 2nd problem', 21, 'solution to eves 2nd problem', 'solved', 0, 20, NULL),
('eves 3rd problem', 22, 'solved 2', 'solved', 0, 20, NULL),
('jdgfgdg', 23, '', 'assigned', 0, 18, NULL),
('hiiiiiiiiiiiiiiiiiiiiiiiiii', 24, NULL, 'unsolved', 0, 18, NULL),
('999--this  is a big problem.', 25, NULL, 'unsolved', 0, 27, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `promotional_post`
--

CREATE TABLE `promotional_post` (
  `post` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promotional_post`
--

INSERT INTO `promotional_post` (`post`) VALUES
('Post 1:\r\nThis is the post No 1.'),
('Post 2:\r\nThis is the post No 2.'),
('post 3: this is the 3rd offer'),
('hjdsfgjhdgf'),
('kkkkk'),
('ggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `phone`, `address`) VALUES
(18, 'mia', 'mia@gmail.com', 'e154e212f88557130a2fe3de73299ad9', '012-34-556', 'jfkjd,71-hfh,890kg'),
(19, 'emma', 'emma@gmail.com', '1f050242921954f2c734eec74ce2ecb6', '000-12-999', 'jfkjd,71-hfh'),
(20, 'eveert', 'eve34@gmail.com', '7a8a900ed78ded2820a0e706b4a6de57', '012-34-997', 'dsfhjdfgiurityiuhg'),
(21, 'nia', 'nia@gmail.com', '8728075abafefc9ed2c8e5e610c64917', '012-34-999', 'dgfgdg'),
(22, 'kate', 'kate@gmail.com', '0dead1dcb2d3ffccb45b53ec126967ed', '012-34-777', 'jfkjdh,890kg'),
(23, 'fin', 'fin@gmail.com', 'e14595f44bd87921dc9b297fe58f7a4f', '002-90-556', 'kiop,71-hfh'),
(24, 'samia', 'samia.cse.ewu@gmail.com', '24f7e4f404330b963460b781487755f2', '000-12-999', 'jfkjd,71-hfh'),
(25, 'sultana', '2018-1-60-182@std.ewubd.edu', '8c2a804932c40968823558dd3c81dc20', '000-12-999', 'dsfhjdfgiurityiuhg'),
(26, 'Fahim', 'fahim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '017-73-039', 'Banasry Dhaka'),
(27, 'shaho', 'shaho@gmail.com', '5a49af6c1faf825d055924febde37bb5', '027282005', 'East Hazipara, Rampura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `problem_submit`
--
ALTER TABLE `problem_submit`
  ADD PRIMARY KEY (`probId`),
  ADD KEY `fk` (`userId`),
  ADD KEY `fkadid` (`ad_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `problem_submit`
--
ALTER TABLE `problem_submit`
  MODIFY `probId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `problem_submit`
--
ALTER TABLE `problem_submit`
  ADD CONSTRAINT `fk` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `fkadid` FOREIGN KEY (`ad_id`) REFERENCES `admin` (`ad_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
