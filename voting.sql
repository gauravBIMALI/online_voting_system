-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 06:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(255) NOT NULL,
  `username` varchar(26) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `username`, `phone`, `password`) VALUES
(1, 'luffy', 445567, '$2y$10$ioyzFQwtkF.E670OwaikK.QzTrICAg3WTELFDE'),
(2, 'zoro', 73737372, 'zoro'),
(3, 'gaurav', 980404213, 'gaurav');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `id` int(10) NOT NULL,
  `election_id` int(100) DEFAULT NULL,
  `candidate_name` varchar(100) DEFAULT NULL,
  `candidate_detail` text DEFAULT NULL,
  `candidate_photo` text DEFAULT NULL,
  `inserted_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`id`, `election_id`, `candidate_name`, `candidate_detail`, `candidate_photo`, `inserted_on`) VALUES
(11, 0, 'Gaurav Bimali', 'bca 4th Gaurav', '../candidate_photo/4561gaurav.jpg', '2023-07-29'),
(12, 0, 'manish pokhrel', 'bca 4th manish', '../candidate_photo/9052manish.jpg', '2023-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `elections`
--

CREATE TABLE `elections` (
  `id` int(11) NOT NULL,
  `election_topic` varchar(255) DEFAULT NULL,
  `number_of_candidates` int(11) DEFAULT NULL,
  `starting_date` date DEFAULT NULL,
  `ending_date` date DEFAULT NULL,
  `status` varchar(60) DEFAULT NULL,
  `inserted_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `elections`
--

INSERT INTO `elections` (`id`, `election_topic`, `number_of_candidates`, `starting_date`, `ending_date`, `status`, `inserted_on`) VALUES
(9, 'Class CR', 2, '2023-07-29', '2023-07-30', 'Active', '2023-07-29');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `roll` int(5) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `vote` int(100) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `phone`, `roll`, `password`, `role`, `status`, `vote`, `photo`) VALUES
(16, 'gaurav', 9804042123, 77314, 'gaurav', 1, 0, 0, ''),
(17, 'gaurav', 9804042123, 77314, 'gaurav', 1, 0, 0, ''),
(18, 'suman', 8888888, 111, 'suman', 1, 0, 0, ''),
(19, 'grishma', 1234567889999, 1237, 'grishma', 2, 0, 0, ''),
(20, 'tilasma', 14256374, 77329, 'tilasma', 1, 0, 0, ''),
(21, '', 0, 0, '', 0, 0, 0, 'uploads1/gaurav.jpg'),
(22, '', 0, 0, '', 0, 0, 0, 'uploads1/359677208_190876223686665_3202422976792022323_n.jpg'),
(23, 'saurav', 3456789, 55, 'saurav', 1, 0, 0, ''),
(24, '', 0, 0, '', 0, 0, 0, 'uploads1/suman.jpg'),
(25, 'apple', 980438570, 88, 'apple', 1, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`,`phone`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elections`
--
ALTER TABLE `elections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`,`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `elections`
--
ALTER TABLE `elections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
