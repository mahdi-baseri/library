-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 05:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(3, 'mahdi', '1234'),
(7, 'ali', '4321'),
(10, 'mahdis', '6666'),
(11, 'fateme', '1234'),
(12, 'mahdis', '6666');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `writer` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `subject`, `writer`, `publisher`) VALUES
(11, 'شازده کوچولو', 'رمان', 'آنتوان دو سنت اگروپر', 'نگاه'),
(12, 'صد سال تنهایی', 'رمان', 'گابریل گارسیا مارکز', 'پر'),
(111, 'پدر پولدار پدر', 'اقتصاد', 'رابرت کیوساکی', 'ایران نشر'),
(112, 'خودشناسی', 'عرفان', 'اصغر طاهر زاده', 'ایران نشر'),
(113, 'xcvb', 'gh', 'fh', 'dasfdgfh');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `link`) VALUES
(92, 'خانه', 'http://localhost/old/library/index.php');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(3) NOT NULL,
  `bg-color` varchar(255) NOT NULL,
  `panel-color` varchar(255) NOT NULL,
  `text-color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `bg-color`, `panel-color`, `text-color`) VALUES
(1, '#dbc8af ', '#d6a93b', '#2e3460');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `father-name` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `phone` int(70) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `student-number` int(50) NOT NULL,
  `national-code` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `father-name`, `major`, `phone`, `date`, `address`, `student-number`, `national-code`) VALUES
(231, 'محمدمهدی', 'باصری', 'محمدمهدی', 'ریاضی', 2147483647, '2021-08-17', 'ورامین خیابان پورشیرازی کوچه کرامت پلاک 29.', 256483, 410942881),
(232, 'علی', 'محمدی', 'عباس', 'فیزیک', 225412535, '2021-08-24', 'تهران ونک خیابان نرگس کوچه پانزدهم', 257896, 420262113),
(234, 'نرگس', 'خدابنده', 'محمد', 'علوم انسانی', 937196251, '2021-08-24', 'شیراز ، دروازه ، کوچه میخک ، پلاک 56.', 254695, 420658114),
(235, 'مرصاد', 'شیرکوند', 'علی', 'شیمی', 937196251, '2021-08-04', 'ورامین ، کارخانه قند ، خیابان ابراهیمی ، پلاک 14.', 254156, 422563122);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `file`) VALUES
(1, 'screen', ''),
(2, '', 'Screenshot (213).png'),
(3, '', 'Screenshot (213).png'),
(4, '', ''),
(5, '', 'Screenshot (213).png');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `father-name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `phone` int(50) NOT NULL,
  `national-code` int(50) NOT NULL,
  `adress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `firstname`, `lastname`, `father-name`, `date`, `phone`, `national-code`, `adress`) VALUES
(1, 'محمدمهدی', 'باصری', 'محمدمهدی', '2021-08-25', 0, 410942881, 'ورامین خیابان پورشیرازی کوچه کرامت پلاک 29.'),
(2, 'علی', 'اصغری', 'محمدرضا', '2021-08-12', 2147483647, 410942881, 'ورامین خیابان پورشیرازی کوچه کرامت پلاک 29.'),
(5, 'محمدمهدی', 'باصری', 'محمدمهدی', '0000-00-00', 2147483647, 410942881, 'ورامین خیابان پورشیرازی کوچه کرامت پلاک 29.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
