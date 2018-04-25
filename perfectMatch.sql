-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2018 at 01:08 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfectMatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `initlogin`
--

CREATE TABLE `initlogin` (
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `aboutyourself` varchar(250) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `initlogin`
--

INSERT INTO `initlogin` (`firstname`, `lastname`, `emailid`, `aboutyourself`, `password`) VALUES
('a', 'a', 'a', 'a', NULL),
('a', 'a', 'a', 'a', 'a'),
('first', 'last', 'email@gmail.com', 'shutki khawar magi chudi na.', 'password'),
('', '', 'a', '', 'a'),
('1', NULL, NULL, NULL, NULL),
('3', NULL, NULL, NULL, NULL),
('Jami', 'Habib', 'jamihabib@gmail.com', 'I am a good boy. I smoke too.', '12345'),
('Jami', 'Habib', 'jamihabib@gmail.com', 'I am a good boy. I smoke too.', '12345'),
('Rupoke', 'Kibriya', 'rupoke@gmail.com', 'I am rupoke', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `gender` varchar(10) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `religion` varchar(10) DEFAULT NULL,
  `skincolor` varchar(10) DEFAULT NULL,
  `height` varchar(10) DEFAULT NULL,
  `location` varchar(10) DEFAULT NULL,
  `education` varchar(10) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `time` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`gender`, `age`, `religion`, `skincolor`, `height`, `location`, `education`, `photo`, `time`) VALUES
('1', '1', '', '1', '', '', 'Choose...', '', NULL),
('1', '1', '', '1', '', '', 'Choose...', '', NULL),
('1', '1', '', '1', '', '', 'Choose...', '', NULL),
('1', '1', 'Choose...', '1', '', '', 'Choose...', '', NULL),
('1', '1', 'Choose...', '1', '', '', 'Choose...', '', NULL),
('1', '1', 'Choose...', '1', '', '', 'Choose...', '', NULL),
('1', '1', 'Choose...', '1', '', '', 'Choose...', '', NULL),
('1', '1', 'Choose...', '1', '', '', 'Choose...', '', NULL),
('1', '1', 'Choose...', '1', 'Feet ft In', '', 'Choose...', '', NULL),
('2', '5', '1', '2', '3 ft 3 inc', 'Chittagong', '2', 'dollar-gil', NULL),
('2', '5', '1', '2', '4 ft 3 inc', 'Chittagong', '2', 'dollar-gil', NULL),
('Female', '19', 'Hindu', 'Brown', '4 ft 3 inc', 'Dhaka', 'College Gr', 'wine-dharm', NULL),
('Female', '20', 'Others', 'Brown', '4 ft 2 inc', 'asdfsdf', 'University', 'super-design-ideas-floor-length-windows.jpg', NULL),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', '', '07:44:53am'),
('Female', '21', 'Muslim', 'Brown', '3 ft 3 inc', 'asdfsdf', 'College Gr', '11435a35506a9458dcd1171f3f40dc5f.jpg', '07:45:12am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', 'Flying-Saucer-Abstract-4K-Wallpaper.jpg', '07:57:07am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', 'Flying-Saucer-Abstract-4K-Wallpaper.jpg', '07:57:49am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', 'Flying-Saucer-Abstract-4K-Wallpaper.jpg', '07:58:30am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', 'Flying-Saucer-Abstract-4K-Wallpaper.jpg', '07:58:39am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', '', '08:30:43am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', '', '08:31:35am'),
('Choose...', 'Select Age', 'Choose...', 'Choose...', 'Feet ft In', '', 'Choose...', '', '08:31:56am'),
('Male', '23', 'Muslim', 'Brown', '5 ft 2 inc', 'Dhaka', 'University', 'Flying-Saucer-Abstract-4K-Wallpaper.jpg', '09:26:14am'),
('Male', '20', 'Muslim', 'Brown', '5 ft 8 inc', 'Chittagong', 'University', '226_colorful_lines.jpg', '09:33:50am'),
('Female', '18', 'Muslim', 'White', '3 ft 1 inc', 'Jessore', 'High Schoo', 'Flying-Saucer-Abstract-4K-Wallpaper.jpg', '09:52:51am');

-- --------------------------------------------------------

--
-- Table structure for table `userrecommendation`
--

CREATE TABLE `userrecommendation` (
  `preferredgender` char(10) DEFAULT NULL,
  `agerangeform` int(11) DEFAULT NULL,
  `agerangeto` int(11) DEFAULT NULL,
  `interestedreligion` varchar(100) DEFAULT NULL,
  `skincolor` varchar(50) DEFAULT NULL,
  `heightrangefrom` varchar(11) DEFAULT NULL,
  `heightrangeto` varchar(11) DEFAULT NULL,
  `places` varchar(50) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userrecommendation`
--

INSERT INTO `userrecommendation` (`preferredgender`, `agerangeform`, `agerangeto`, `interestedreligion`, `skincolor`, `heightrangefrom`, `heightrangeto`, `places`, `education`) VALUES
('Choose...', 0, 0, 'Choose...', 'Choose...', '0', '0', 'Choose...', 'Choose...'),
('2', 2, 2, 'Hindu', 'Brown', '3', '3', 'Custom', 'High School Graduate'),
('2', 2, 2, 'Hindu', 'Brown', '3', '3', 'Custom', 'High School Graduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '42', '53', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '0', '0', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '0', '0', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '0', '0', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4', '5', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4ft2', '5ft3', 'Nearby', 'University Undergraduate'),
('Female', 19, 19, 'Others', 'Black', '4 ft 2 inch', '5 ft 3 inch', 'Nearby', 'University Undergraduate'),
('Female', 19, 21, 'Hindu', 'Brown', '6 ft 1 inch', '6 ft 3 inch', 'Custom', 'College Graduate'),
('', 0, 0, '', 'White', ' ft  inch', ' ft  inch', '', 'College Graduate'),
('Choose...', 0, 0, 'Choose...', 'Choose...', 'Feet ft Inc', 'Feet ft Inc', 'Choose...', 'Choose...'),
('Choose...', 0, 0, 'Choose...', 'Choose...', 'Feet ft Inc', 'Feet ft Inc', 'Choose...', 'Choose...'),
('Female', 19, 21, 'Muslim', 'White', '5 ft 4 inch', '5 ft 5 inch', 'Nearby', 'University Undergraduate'),
('Female', 20, 22, 'Muslim', 'White', '5 ft 2 inch', '5 ft 3 inch', 'Nearby', 'University Undergraduate'),
('Male', 18, 18, 'Muslim', 'White', '3 ft 1 inch', '3 ft 1 inch', 'Nearby', 'High School Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(15) NOT NULL,
  `profilePicture` int(15) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `emailId` varchar(255) DEFAULT NULL,
  `aboutYourself` varchar(300) DEFAULT NULL,
  `religion` varchar(15) DEFAULT NULL,
  `personalLink` varchar(300) DEFAULT NULL,
  `facebookId` varchar(500) DEFAULT NULL,
  `languages` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
