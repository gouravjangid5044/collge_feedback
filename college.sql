-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 07:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'muj.manipal@edu.in', '34915663e883b514d9a93a9360dd28e2');

-- --------------------------------------------------------

--
-- Table structure for table `allocations`
--

CREATE TABLE `allocations` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `checker` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allocations`
--

INSERT INTO `allocations` (`id`, `email`, `dept`, `checker`) VALUES
(5, 'gourav.219301643@muj.manipal.edu', 'Finance', 'NO'),
(6, 'devansh.219186414@muj.manipal.edu', 'Academic', 'NO'),
(7, 'jatin.219102764@muj.manipal.edu', 'Ecell', 'YES'),
(9, 'jatin.219102764@muj.manipal.edu', 'Finance', 'YES'),
(10, 'devansh.219186414@muj.manipal.edu', 'Finance', 'NO'),
(11, 'jagdeep.219301234@muj.manipal.edu', 'Examination', 'YES'),
(13, 'jatin.219102764@muj.manipal.edu', 'Examination', 'NO'),
(14, 'garvit.219305689@muj.manipal.edu', 'Finance', 'NO'),
(15, 'jyoti.219307683@muj.manipal.edu', 'Examination', 'NO'),
(18, 'divya.219102014@muj.manipal.edu', 'Finance', 'YES'),
(19, 'divya.219102014@muj.manipal.edu', 'Examination', 'YES'),
(20, 'himanshu.219305463@muj.manipal.edu', 'Academic', 'NO'),
(21, 'himanshu.219305463@muj.manipal.edu', 'Ecell', 'YES'),
(23, 'arrav.219301633@muj.manipal.edu', 'Examination', 'NO'),
(26, 'devansh.219186414@muj.manipal.edu', 'HOD', 'NO'),
(27, 'jagdeep.219301234@muj.manipal.edu', 'Admission', 'YES'),
(28, 'jatin.219102764@muj.manipal.edu', 'Director', 'NO'),
(29, 'garvit.219305689@muj.manipal.edu', 'Director', 'NO'),
(30, 'gourav.219301643@muj.manipal.edu', 'Director', 'NO'),
(57, 'gourav.219301643@muj.manipal.edu', 'Admission', 'YES'),
(58, 'divya.219102014@muj.manipal.edu', 'Admission', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `dept`) VALUES
(18, 'need to improve more and should opt a transparent ', 'Examination'),
(19, 'Need to improve more in this department \r\n', 'Admission'),
(20, 'improve more it will be great for all and good', 'Admission'),
(21, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)', 'Admission'),
(22, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has ', 'Admission'),
(24, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages ', 'HOD'),
(26, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. ', 'HOD'),
(27, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages ', 'Ecell'),
(28, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages ', 'Director'),
(29, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here,', 'Director'),
(30, 'of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here', 'HOD'),
(31, 'of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here', 'Examination'),
(32, 'Need more improvement in this area should be more flexible\r\n', 'Ecell');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Q1` int(11) NOT NULL,
  `Q2` int(11) NOT NULL,
  `Q3` int(11) NOT NULL,
  `Q4` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `Q1`, `Q2`, `Q3`, `Q4`, `total`) VALUES
(2, 'Academic', 90, 225, 85, 70, 16),
(3, 'Examination', 105, 65, 105, 45, 11),
(4, 'Finance', 120, 135, 85, 20, 10),
(5, 'Ecell', 115, 105, 50, 30, 9),
(6, 'HOD', 45, 70, 35, 5, 6),
(7, 'Director', 170, 45, 80, 10, 8),
(8, 'Admission', 155, 85, 70, 50, 12);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `email`, `password`, `time`) VALUES
(16, 'gourav.219301643@muj.manipal.edu', '84101c83eea6539b18ee9f4bad03a52c', '2023-02-08 08:49:34'),
(17, 'divya.219102014@muj.manipal.edu', 'ea7eaad738912e1448d8e88634e81c57', '2023-02-08 08:49:34'),
(18, 'devansh.219186414@muj.manipal.edu', '4ec333ebd3d4013e3d1277ae49d5bc3c', '2023-02-08 08:49:34'),
(19, 'garvit.219305689@muj.manipal.edu', 'ade32d238bf12aff03811a475eeb7620', '2023-02-08 08:49:34'),
(20, 'himanshu.219305463@muj.manipal.edu', '2a81c6458dd8a16513363af7214ed36e', '2023-02-08 08:49:34'),
(21, 'jatin.219102764@muj.manipal.edu', 'dba21d9beaba4472db7b987e2525583e', '2023-01-09 08:49:34'),
(22, 'jagdeep.219301234@muj.manipal.edu', 'a86c7bd98b13da062b8467f9a9d4342c', '2023-02-07 08:49:34'),
(23, 'jyoti.219307683@muj.manipal.edu', 'fd21de2f09494f673c8c6610dc4bf7f9', '2023-02-09 06:49:34'),
(24, 'arrav.219301633@muj.manipal.edu', 'aa2bac55a564a19a9379da4c7d08624f', '2023-02-09 07:49:34'),
(38, 'gouravjangid285044@gmail.com', 'abc', '2023-02-09 08:49:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `allocations`
--
ALTER TABLE `allocations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allocations`
--
ALTER TABLE `allocations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
