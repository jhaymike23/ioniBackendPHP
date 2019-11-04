-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 08:10 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `fnd_id` int(11) NOT NULL,
  `fnd_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fnd_detail` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fnd_image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fnd_birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `friend`
--

INSERT INTO `friend` (`fnd_id`, `fnd_name`, `fnd_detail`, `fnd_image`, `fnd_birthday`) VALUES
(1, 'James', 'Web Dev ', 'http://ionicframework.com/img/docs/venkman.jpg', '1989-05-31'),
(2, 'Miguel', 'Tech Support', '../img/spengler.jpg', '1989-10-11'),
(3, 'Arnold', 'Tech Support', '../img/stantz.jpg', '1989-02-16');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `mem_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `mem_use` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mem_schedule` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `mem_course` varchar(99) COLLATE utf8_unicode_ci NOT NULL,
  `mem_room` varchar(99) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `mem_name`, `mem_use`, `mem_pass`, `mem_schedule`, `mem_course`, `mem_room`) VALUES
(1, 'Admin  Tester', 'admin', '123456', 'August 7,2019 - August 8,2019', 'Marine', '202'),
(2, 'Michael', 'jm', 'admin', 'August 7,2019 - September 7,2019', 'Information Technology', '203');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`fnd_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `fnd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
