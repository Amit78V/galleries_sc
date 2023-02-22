-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 12:48 PM
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
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_eng`
--

CREATE TABLE `admin_eng` (
  `id` int(11) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `description1` varchar(8000) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_eng`
--

INSERT INTO `admin_eng` (`id`, `button_name`, `description1`, `image1`, `audio`, `video`) VALUES
(1, 'asdf', 'swefr', 'upimages/2.png', 'upaudio/oldphoneringing-4-59126.mp3', 'upvideo/Pexels Videos 4409.mp4'),
(2, 'ase', 'frt', 'upimages/3.png', 'upaudio/adharam-madhuram-status-shri-krishna-status-f0-9f-99-8f-e2-9d-a4-ef-b8-59150.mp3', 'upvideo/video.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `admin_guj`
--

CREATE TABLE `admin_guj` (
  `id` int(11) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `description1` varchar(8000) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_guj`
--

INSERT INTO `admin_guj` (`id`, `button_name`, `description1`, `image1`, `audio`, `video`) VALUES
(1, 'ertt', 'frhyj', 'upimagesguj/4.png', 'upaudioguj/sukoonmilafullvideomarykompriyankachoprringtone-40726-59001.mp3', 'upvideoguj/Pexels Videos 4336.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `admin_hindi`
--

CREATE TABLE `admin_hindi` (
  `id` int(11) NOT NULL,
  `button_name` varchar(255) NOT NULL,
  `description1` varchar(8000) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_hindi`
--

INSERT INTO `admin_hindi` (`id`, `button_name`, `description1`, `image1`, `audio`, `video`) VALUES
(1, 'aset', '345', 'upimageshin/6.png', 'upaudiohin/gj-gjgjgjgjhkgjgjgjgj-59034.mp3', 'upvideohin/video (1).mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_eng`
--
ALTER TABLE `admin_eng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_guj`
--
ALTER TABLE `admin_guj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_hindi`
--
ALTER TABLE `admin_hindi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_eng`
--
ALTER TABLE `admin_eng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_guj`
--
ALTER TABLE `admin_guj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_hindi`
--
ALTER TABLE `admin_hindi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
