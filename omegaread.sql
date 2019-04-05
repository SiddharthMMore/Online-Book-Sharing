-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 08:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `omegaread`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `edition` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mobilenumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `user_id`, `book_name`, `author`, `edition`, `genre`, `description`, `mobilenumber`, `email`) VALUES
(1, 'dharmesh', 'dharmesh', 'kljdklsafjklj', 'kljkldjafkljkl', 'jkjdklflajkljfh', 'dafkjdhfuahdf', '', ''),
(2, 'lkjklj', 'akash', 'kljdsajfk', 'jkljdksjaklfj', 'kjkldsjalkfj', 'kljkldfsjaklfj', '', ''),
(3, 'jkljdaklfj', 'prateek', 'jkjdkajflkj', 'kljdklajflkj', 'lkjklfdjaklfjkl', 'jkljfdaklsfjlk', '', ''),
(11, 'rahulsahu', 'Backchodi', 'Rahul Sahu', '1', 'Read', 'Only Backchodi ', '8173014504', 'rs8489501@gmail.com'),
(27, 'dharmesh', 'dharmesh', 'kljdklsafjklj', 'kljkldjafkljkl', 'jkjdklflajkljfh', 'dafkjdhfuahdf', '7123477123', 'dha9672632716@gmail.com'),
(28, 'dharmesh', 'dharmesh', 'kljdklsafjklj', 'kljkldjafkljkl', 'jkjdklflajkljfh', 'dafkjdhfuahdf', '7123477123', 'dha9672632716@gmail.com'),
(29, 'dharmesh', 'dharmesh', 'kljdklsafjklj', 'kljkldjafkljkl', 'jkjdklflajkljfh', 'dafkjdhfuahdf', '7123477123', 'dha9672632716@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `locality` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`user_id`, `email`, `password`, `first_name`, `last_name`, `area`, `locality`, `city`, `mobile_no`, `pincode`) VALUES
('dharmesh', 'dha9672632716@gmail.com', 'dharmesh', 'Dharmesh', 'Yadav', 'Manit', 'Mata', 'Bhopal', '7123477123', 462003),
('kapilmore', 'sik@gmail.com', '$2y$10$iMvS5nxVY6Pgy21g5Cld6O2o3K.LPnSvgUVs2b6NjilBQCu0nenp6', 'kapil', 'more', 'DHule', 'dhule', 'dhule', '546356345', 424001),
('lazyultron', 'sid94048.more@gmail.com', '$2y$10$qqEcpklG77yCDDvsgAu0.uHVlv9TCbZtA1AICWCMdSQyWoqqFck0a', 'siddharth', 'more', 'Manit', 'mata', 'bhopal', '878548375', 462003),
('rahulsahu', 'rs8489501@gmail.com', 'rahulsahu', 'Rahul', 'Sahu', 'Manit', 'Mata', 'Bhopal', '8173014504', 462003),
('siddharth', 'sid94048.more@gmail.com', 'thermo1020', 'Siddharth', 'More', 'Bhopal', 'Manit', 'Bhopal', '2147483647', 462003);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
