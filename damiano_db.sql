-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2024 at 03:42 PM
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
-- Database: `damiano_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_about_img`
--

CREATE TABLE `home_about_img` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_about_img`
--

INSERT INTO `home_about_img` (`id`, `uid`, `img_path`, `created_at`) VALUES
(1, 'IMG_1', '/uploads/home_about_img/e3bac3297d32e4fa28dd40a2ba9b2ef1.jpg', '2024-05-11 18:50:50'),
(2, 'IMG_2', '/uploads/home_about_img/1d1799cc7da7976097ef22e1c08d457c.jpg', '2024-05-11 18:51:29'),
(3, 'IMG_3', '/uploads/home_about_img/aa178c2b8c6ce9715a1ca4dd2b612f97.jpg', '2024-05-11 18:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `home_about_text`
--

CREATE TABLE `home_about_text` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `about_text` text NOT NULL,
  `vision_text` text NOT NULL,
  `mission_text` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_about_text`
--

INSERT INTO `home_about_text` (`id`, `uid`, `about_text`, `vision_text`, `mission_text`, `created_at`) VALUES
(1, 'ABT143276SRHDSH', 'Damiano traces its origin as early as 1922. The company was representing the European companies for their procurement activities in India and was a part of the CTC Group which was a dominant player in the jute industry in India. Damiano underwent restructuring in late 1960\'s and re-established itself in its present form by diversifying into manufacturing in 1968 and has been manufacturing Pole Line Hardware\'s, Steel structures, insulator and Conductor accessories, Clamps and Connectors, Aerial Cable Accessories, Fuse Cutouts and Telecommunications OSP Hardware. The steps were small but firm and the company expanded from cottage scale manufacturer to a large industry within house facilities for fabrication, forging, machining, wire forming, moulding, die casting, hot dip galvanizing (including centrifuge) and electroplating. The company started exporting from 1972 and has niche presence not only in the domestic market but also across the globe. Damiano prides itself to be small and slow but never lacking in its commitment towards quality and ethics. The steps have been slow but steady and the foundation based on hard work, commitment and integrity which makes us different.', 'Damiano was established in 1968 for manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories, Clamps and Connectors, ABC accessories...', 'Damiano was established in 1968 for manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories, Clamps and Connectors, ABC accessories...', '2024-05-11 17:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `home_announcement_file`
--

CREATE TABLE `home_announcement_file` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_announcement_file`
--

INSERT INTO `home_announcement_file` (`id`, `uid`, `path`, `created_at`) VALUES
(7, 'BNHU0AFB1F9D20240513', '/uploads/home_announcement_file/b0f52f87b65b4e73161d4ccf4d135369.pdf', '2024-05-13 16:53:28');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_img`
--

CREATE TABLE `home_banner_img` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner_img`
--

INSERT INTO `home_banner_img` (`id`, `uid`, `img_path`, `created_at`) VALUES
(7, 'BNH7CCCD25B20240513', '/uploads/home_banner_img/0ef5313946962bfd010d33fe62dfe935.jpg', '2024-05-13 17:25:21'),
(12, 'BNH598FD88F20240513', '/uploads/home_banner_img/79fa99c16ed949357772cd1f075eb2e3.JPG', '2024-05-13 17:26:50'),
(14, 'BNHC8B3DDCE20240513', '/uploads/home_banner_img/c4888e601359550eb99096f8e6a01690.jpg', '2024-05-13 17:27:53'),
(15, 'BNH467BDCE320240513', '/uploads/home_banner_img/3e84a2df32ce99c9f52a20a16d79fc27.JPG', '2024-05-13 17:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `home_banner_text`
--

CREATE TABLE `home_banner_text` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `heading` text NOT NULL,
  `heading_two` text NOT NULL,
  `corner_text` text NOT NULL,
  `corner_text_two` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_banner_text`
--

INSERT INTO `home_banner_text` (`id`, `uid`, `heading`, `heading_two`, `corner_text`, `corner_text_two`, `created_at`) VALUES
(1, 'BNR90678546498', 'TEXT_1', 'TEXT_2', 'TEXT_3', 'TEXT_4', '2024-05-11 15:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `home_infrastructure`
--

CREATE TABLE `home_infrastructure` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_infrastructure`
--

INSERT INTO `home_infrastructure` (`id`, `uid`, `title`, `img_path`, `created_at`) VALUES
(3, 'INFFE3A0F2C20240513', 'abc', '/uploads/home_infrastructure_img/3630c0ffcec15ce8fdc35d2bd18284ad.jpg', '2024-05-13 17:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `home_updates_img`
--

CREATE TABLE `home_updates_img` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_updates_img`
--

INSERT INTO `home_updates_img` (`id`, `uid`, `img_path`, `created_at`) VALUES
(1, 'UBNH86967F20240511', '/uploads/home_update_img/670d6df2ac5797fd26b39eb6e18224fa.jpg', '2024-05-13 15:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uid`, `user_name`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'USR49TYOJ127856', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2024-02-03 11:21:43', '2024-02-03 11:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`id`, `uid`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(4, 'MSG4D2D332020240513', 'fvgdg fgdsgd', 'admin@gmail.com', '43554', '', 'fhdshg', '2024-05-13 19:06:30', '2024-05-13 19:06:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_about_img`
--
ALTER TABLE `home_about_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_about_text`
--
ALTER TABLE `home_about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_announcement_file`
--
ALTER TABLE `home_announcement_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_img`
--
ALTER TABLE `home_banner_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_banner_text`
--
ALTER TABLE `home_banner_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_infrastructure`
--
ALTER TABLE `home_infrastructure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_updates_img`
--
ALTER TABLE `home_updates_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_message`
--
ALTER TABLE `user_message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_about_img`
--
ALTER TABLE `home_about_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_about_text`
--
ALTER TABLE `home_about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_announcement_file`
--
ALTER TABLE `home_announcement_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home_banner_img`
--
ALTER TABLE `home_banner_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `home_banner_text`
--
ALTER TABLE `home_banner_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_infrastructure`
--
ALTER TABLE `home_infrastructure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_updates_img`
--
ALTER TABLE `home_updates_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
