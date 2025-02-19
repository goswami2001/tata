-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 09:12 AM
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
-- Database: `tata`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbuy`
--

CREATE TABLE `carbuy` (
  `id` int(240) NOT NULL,
  `name` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `mobileno` int(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `adharno` varchar(24) NOT NULL,
  `payment` varchar(200) NOT NULL,
  `choose catagory` varchar(200) NOT NULL,
  `choose modal` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carbuy`
--

INSERT INTO `carbuy` (`id`, `name`, `state`, `city`, `birthdate`, `mobileno`, `email`, `adharno`, `payment`, `choose catagory`, `choose modal`) VALUES
(4, 'Raj Joshi', 'Gujarat', ' Porbandar ', '2000-05-22', 2147483647, 'raj123@gmail.com', '1234567812347659', 'Loan', 'HatchBack', 'Altroz XT 6,99,000'),
(5, 'GOSWAMI NISARG', 'Gujarat', ' Ahmedabad ', '2001-02-21', 2147483647, 'nisarg@gmail.com', '1234567891234567', 'Cash On Delivery', 'Mpv', 'Tiago XZA+DT New 6,73,000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(240) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `feedback` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phoneno`, `feedback`) VALUES
(2, 'raj joshi', 'raj123@gmail.com', 2147483647, 'tata tiago is a best car in segment. Music System is Very Good. Engine refiment is good but improvement to engine refiment level and power and pickup.'),
(3, 'Goswami Nisarg', 'nisarg@gmail.com', 2147483647, 'Tata tigor is best sedan in a segment .  music system best in segment . safty is very good .engine is refinment is good but engine noise is not good to refine engine . thanks tata motors. ');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(240) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `username`, `password`) VALUES
(16, 'Raj Joshi', 'raj123@gmail.com', 'raj', 'RajJoshi123'),
(17, 'Goswami Nisarg', 'njgoswami15@gmail.com', 'nisarg', 'Nisarg@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbuy`
--
ALTER TABLE `carbuy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbuy`
--
ALTER TABLE `carbuy`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
