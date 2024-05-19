-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 12:37 PM
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
-- Table structure for table `about_page_banner`
--

CREATE TABLE `about_page_banner` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_page_banner`
--

INSERT INTO `about_page_banner` (`id`, `uid`, `img_path`, `created_at`) VALUES
(2, 'ABBN663ACB7B20240517', '/uploads/about_banner_img/a474a03b5f5a56d3c4135286a5633dcc.jpg', '2024-05-17 19:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `action_buttons`
--

CREATE TABLE `action_buttons` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `btn_title_1` text NOT NULL,
  `btn_link_1` text NOT NULL,
  `btn_title_2` text NOT NULL,
  `btn_link_2` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `action_buttons`
--

INSERT INTO `action_buttons` (`id`, `uid`, `btn_title_1`, `btn_link_1`, `btn_title_2`, `btn_link_2`, `created_at`) VALUES
(1, 'BTN879654372YFTY', 'APPLY NOW', 'https://www.google.com/', 'VIEW ALL PRODUCTS', 'https://www.google.com/', '2024-05-17 16:34:12');

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `title` text NOT NULL,
  `img_path` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `uid`, `message`, `title`, `img_path`, `link`, `created_at`) VALUES
(2, 'ALTCDE32A1520240517', 'MESSAGE', 'TITLE', '/uploads/allerts_img/50d235b0d2a3fb3c0a1eafa479d077eb.jpeg', 'https://www.google.com/', '2024-05-17 16:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `uid`, `product_id`, `title`, `details`, `img_path`, `created_at`) VALUES
(3, 'FTR706CD22220240515', 'PRDEE94A1EB20240515', 'fdg', 'ghsdfh', '/uploads/feature_img/285e3849a6a28f1e3be9bf74b792b99f.png', '2024-05-15 17:08:19'),
(6, 'FTRB4B40AA320240515', 'PRDF9C2FF6720240515', 'fdghf', 'ghdfhg', '/uploads/feature_img/7a1cb0daf7db79f5d7288ea182dedf8a.jpg', '2024-05-15 19:00:00'),
(7, 'FTRD42117A520240515', 'PRDF9C2FF6720240515', 'gfhjg', 'thsdhtfghftghfghgfhfg', '/uploads/feature_img/99f49a9d66fd5471d5b154429c41a407.jpg', '2024-05-15 19:00:17'),
(8, 'FTR7E39D5A120240516', 'PRDB814E4DF20240516', 'fdgdrgd', 'fsghsdfhgfdsh', '/uploads/feature_img/df61018c046d52b96b160698fca6d954.JPG', '2024-05-16 20:29:18'),
(9, 'FTR5C68FD7520240517', 'PRDF9C2FF6720240515', 'thsrh', 'sher', '/uploads/feature_img/950febb11679070c0324d305ede83c24.jpg', '2024-05-17 15:51:53'),
(10, 'FTRDF4E88CB20240517', 'PRDF9C2FF6720240515', 'fdshgth', 'hgsrjtg', '/uploads/feature_img/68b347f95f1b18d867c0779b893c58ca.jpg', '2024-05-17 15:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `flyers`
--

CREATE TABLE `flyers` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flyers`
--

INSERT INTO `flyers` (`id`, `uid`, `img_path`, `created_at`) VALUES
(6, 'FLY44062E1620240518', '/uploads/flyer_img/a7507a26eb6ca01dd81c3317c93497b0.jpg', '2024-05-18 18:49:01'),
(7, 'FLYC47EEBDA20240518', '/uploads/flyer_img/1a44f9e76a7f94a8e9c162898a12f743.jpg', '2024-05-18 18:49:05'),
(8, 'FLY17872B6420240518', '/uploads/flyer_img/45544f2f54d2a6adb6449b662f4f5b16.jpg', '2024-05-18 18:49:11'),
(9, 'FLYE452308220240518', '/uploads/flyer_img/36fcfacedfa3589a0582a1f725850697.jpg', '2024-05-18 18:49:16'),
(10, 'FLYAC59F18C20240518', '/uploads/flyer_img/ee3e5b02494f13882cdc767183580c35.jpg', '2024-05-18 18:49:20');

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
(1, 'IMG_1', '/uploads/home_about_img/69bc7a61a7b6c67eeb394733434e4c43.jpg', '2024-05-11 18:50:50'),
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
  `products_text` text NOT NULL,
  `facilities_text` text NOT NULL,
  `global_presence_text` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_about_text`
--

INSERT INTO `home_about_text` (`id`, `uid`, `about_text`, `vision_text`, `mission_text`, `products_text`, `facilities_text`, `global_presence_text`, `address`, `email`, `phone`, `created_at`) VALUES
(1, 'ABT143276SRHDSH', 'Damiano traces its origin as early as 1922. The company was representing the European companies for their procurement activities in India and was a part of the CTC Group which was a dominant player in the jute industry in India. Damiano underwent restructuring in late 1960\'s and re-established itself i', 'Damiano was established in 1968 for manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories, Clamps and Connectors, ABC accessories...', 'Damiano was established in 1968 for manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories, Clamps and Connectors, ABC accessories...', 'Damiano underwent restructuring in late 1960\'s and re established itself in its present from by diversifying into manufacturing in 1968 and has been manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories', 'Damiano was established in 1968 for manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories, Clamps and Connectors, ABC accessories...', 'Damiano was established in 1968 for manufacturing Pole Line Hardware\'s, Steel structures, Insulator and Conductor accessories, Clamps and Connectors, ABC accessories...', '53, Dr. Meghnad Saha Sarani, Southern Avenue\r\nKolkata-700 029, West Bengal, US.', 'info@adamiano.com', '91 33 4063 0070\r\n', '2024-05-11 17:53:22');

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
(7, 'BNHU0AFB1F9D20240513', '/uploads/home_announcement_file/b0f52f87b65b4e73161d4ccf4d135369.pdf', '2024-05-13 16:53:28'),
(8, 'BNHU2D5104C120240516', '/uploads/home_announcement_file/ca28efdf54c57ef7a91ea233179d1245.pdf', '2024-05-16 23:11:42');

-- --------------------------------------------------------

--
-- Table structure for table `home_appreciation_img`
--

CREATE TABLE `home_appreciation_img` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_appreciation_img`
--

INSERT INTO `home_appreciation_img` (`id`, `uid`, `title`, `img_path`, `created_at`) VALUES
(3, 'APR4BABA9A920240514', 'img_1', '/uploads/home_appreciation_img/98a40933baff9868195700862ebe4690.jpg', '2024-05-14 12:55:25'),
(4, 'APRA64630F820240514', 'img_2', '/uploads/home_appreciation_img/ad2d345a85a40a51acdd1d77a384536d.jpg', '2024-05-14 12:55:38'),
(5, 'APR4D9780D820240514', 'img_3', '/uploads/home_appreciation_img/aac9800f6a602347a845a4bb9df4a579.jpg', '2024-05-14 12:55:49'),
(6, 'APRCD179A8820240514', 'img_4', '/uploads/home_appreciation_img/d029c9dadd3fd4627c91d7dc21cd60f8.jpg', '2024-05-14 12:56:01');

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
  `details` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home_infrastructure`
--

INSERT INTO `home_infrastructure` (`id`, `uid`, `title`, `img_path`, `details`, `created_at`) VALUES
(9, 'INF71E81FAB20240518', 'text_1', '/uploads/home_infrastructure_img/0c5bcae1b3f9cd95557bedc82c3cedcc.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-05-18 15:49:55'),
(10, 'INFE57AA7D220240518', 'text_2', '/uploads/home_infrastructure_img/fd4bf136b70314fc752fe4155ea4d462.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.fgdf', '2024-05-18 15:50:11'),
(11, 'INF4DD1BB7120240518', 'text_3', '/uploads/home_infrastructure_img/1d19876c8f6454a13368fd431df535a3.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2024-05-18 15:50:22');

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
(1, 'UBNH86967F20240511', '/uploads/home_update_img/33e26cf35d51106abe87d472d644f458.jpg', '2024-05-13 15:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `infrastructure_page_banner`
--

CREATE TABLE `infrastructure_page_banner` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infrastructure_page_banner`
--

INSERT INTO `infrastructure_page_banner` (`id`, `uid`, `img_path`, `created_at`) VALUES
(2, 'INBN9E61543320240517', '/uploads/infrastructure_banner_img/4fc63abcf2015e9775f293256cdadae9.jpg', '2024-05-17 23:50:22'),
(3, 'INBNC824015520240517', '/uploads/infrastructure_banner_img/14e120885bd7b40c0ec3ef7a2793e0f5.jpg', '2024-05-17 23:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `details` text NOT NULL,
  `img_path` text NOT NULL,
  `banner_img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `uid`, `name`, `details`, `img_path`, `banner_img_path`, `created_at`) VALUES
(4, 'PRDEE94A1EB20240515', 'product 1', ' Damiano traces its origin as early as 1922. The company was representing the European companies for their procurement activities in India and was a part of the CTC Group which was a \r\n                                dominant player in the jute industry in India. Damiano underwent restructuring in late 1960\'s and re-established itself in its present form by diversifying into manufacturing in 1968 and has been manufacturing Pole Line Hardware\'s, \r\n                                Steel structures, insulator and Conductor accessories, Clamps and Connectors, Aerial Cable Accessories, Fuse Cutouts and Telecommunications OSP Hardware. The steps were small but firm and the company expanded from cottage scale manufacturer \r\n                                to a large industry with in house facilities for fabrication, forging, machining, wire forming, moulding, die casting, hot dip galvanizing (including centrifuge) and electroplating. The company started exporting from 1972 and has niche presence \r\n                                not only in the domestic market but also across the globe. The company started exporting from 1972 and has niche presence not only in the domestic market but also across the globe. Damiano has also undertaken turnkey project exports of plants to \r\n                                manufacture stranded wires and conductors and other components. Damiano believes in providing its customers competitive prices, standard quality, durable packing, in-house tested products, just in time delivery and flexibility in operations. \r\n                                It prides itself for its professionalism and focus on quality and believes that with the support of its customers it can successfully exceed its present annual capacity of 40000 tonnes.', '/uploads/product_img/f1a44977a8144176f0813d57dd494c69.jpg', '/uploads/product_banner_img/2c8fd3485b563ccd9d021f2e57cf83f0.jpg', '2024-05-15 15:38:09'),
(5, 'PRDF9C2FF6720240515', 'product_2', ' Damiano traces its origin as early as 1922. The company was representing the European companies for their procurement activities in India and was a part of the CTC Group which was a \r\n                                dominant player in the jute industry in India. Damiano underwent restructuring in late 1960\'s and re-established itself in its present form by diversifying into manufacturing in 1968 and has been manufacturing Pole Line Hardware\'s, \r\n                                Steel structures, insulator and Conductor accessories, Clamps and Connectors, Aerial Cable Accessories, Fuse Cutouts and Telecommunications OSP Hardware. The steps were small but firm and the company expanded from cottage scale manufacturer \r\n                                to a large industry with in house facilities for fabrication, forging, machining, wire forming, moulding, die casting, hot dip galvanizing (including centrifuge) and electroplating. The company started exporting from 1972 and has niche presence \r\n                                not only in the domestic market but also across the globe. The company started exporting from 1972 and has niche presence not only in the domestic market but also across the globe. Damiano has also undertaken turnkey project exports of plants to \r\n                                manufacture stranded wires and conductors and other components. Damiano believes in providing its customers competitive prices, standard quality, durable packing, in-house tested products, just in time delivery and flexibility in operations. \r\n                                It prides itself for its professionalism and focus on quality and believes that with the support of its customers it can successfully exceed its present annual capacity of 40000 tonnes.', '/uploads/product_img/fe21fec8dcc2a3cd5feeb3d5a8bc3ce6.jpg', '/uploads/product_banner_img/084188e098bbc4379443c69b0f5fabbd.jpg', '2024-05-15 17:49:54'),
(7, 'PRD6C8820B820240516', 'fghdhg', 'gfhsfh', '/uploads/product_img/', '/uploads/product_banner_img/', '2024-05-16 18:27:18'),
(8, 'PRD482FF27F20240516', 'trst', 'gfdh', '', '', '2024-05-16 18:47:35'),
(9, 'PRDB814E4DF20240516', '123456', 'gdryhdha', '', '', '2024-05-16 19:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_banner_img`
--

CREATE TABLE `product_banner_img` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_banner_img`
--

INSERT INTO `product_banner_img` (`id`, `uid`, `product_id`, `img_path`, `created_at`) VALUES
(1, 'PRBNB1F441B920240516', 'PRD482FF27F20240516', '/uploads/product_banner_img/b0891c2ad8ddb46c94ecbd4d516abeb6.png', '2024-05-16 18:47:35'),
(2, 'PRBN9641D18520240516', 'PRD482FF27F20240516', '/uploads/product_banner_img/d580f7cfb7cd4880c8f9898890fd0680.png', '2024-05-16 18:47:35'),
(3, 'PRBNDE41F70820240516', 'PRD482FF27F20240516', '/uploads/product_banner_img/5765d4ad022d1ea3c5a6900d990700fc.png', '2024-05-16 18:47:35'),
(4, 'PRBN7800443720240516', 'PRD482FF27F20240516', '/uploads/product_banner_img/b363796434c7b26d416f97ac3dd0d46b.png', '2024-05-16 18:47:35'),
(5, 'PRBNF4F0BB6120240516', 'PRD482FF27F20240516', '/uploads/product_banner_img/ce58d06078a77dfc78c51a1024addd21.png', '2024-05-16 18:47:35'),
(6, 'PRBNDA2D219020240516', 'PRD482FF27F20240516', '/uploads/product_banner_img/0c6cfee2d6dc1f34a51800c3b7a5744d.png', '2024-05-16 18:47:35'),
(7, 'PRBNBBD569FE20240516', 'PRDB814E4DF20240516', '/uploads/product_banner_img/11affdb384cebf3d4677764c37337893.jpg', '2024-05-16 19:44:32'),
(8, 'PRBNFB0F45F620240516', 'PRDB814E4DF20240516', '/uploads/product_banner_img/af962c303218672779cd7e8528b707b9.JPG', '2024-05-16 19:44:32'),
(16, 'PRBN500BE8EC20240517', 'PRDF9C2FF6720240515', '/uploads/product_banner_img/f29058ef30c8bbdb658f0e87d35a36c9.jpg', '2024-05-17 15:51:27');

-- --------------------------------------------------------

--
-- Table structure for table `quality`
--

CREATE TABLE `quality` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quality`
--

INSERT INTO `quality` (`id`, `uid`, `title`, `description`, `img_path`, `created_at`) VALUES
(1, 'QLT8D4BC95020240518', 'text 1', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '/uploads/quality_img/c20f3855d0ffddb7010a72e83884bbba.jpeg', '2024-05-18 17:34:37'),
(3, 'QLT194B5B0E20240518', 'text 2dfsrgedrg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.rtgrgtyer', '/uploads/quality_img/5028806f27b771a769ce37e1a9560f1e.jpg', '2024-05-18 17:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `quality_banner`
--

CREATE TABLE `quality_banner` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quality_banner`
--

INSERT INTO `quality_banner` (`id`, `uid`, `img_path`, `created_at`) VALUES
(1, 'QTBN24B6303420240518', '/uploads/quality_banner_img/08eb4279a8ddcb7ce2e3271ad1175a63.jpg', '2024-05-18 17:51:32'),
(2, 'QTBNCD03D47F20240518', '/uploads/quality_banner_img/3d7bbc767fed1643386b20886d303bdc.jpg', '2024-05-18 17:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `update_page_banner`
--

CREATE TABLE `update_page_banner` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `img_path` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `update_page_banner`
--

INSERT INTO `update_page_banner` (`id`, `uid`, `img_path`, `created_at`) VALUES
(3, 'UPBNE27A0ABE20240518', '/uploads/updates_banner_img/7b159823a0d32b3d6b748ae4ca029e72.jpeg', '2024-05-18 13:45:36');

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
(4, 'MSG4D2D332020240513', 'fvgdg fgdsgd', 'admin@gmail.com', '43554', '', 'fhdshg', '2024-05-13 19:06:30', '2024-05-13 19:06:30'),
(5, 'MSGBA0FDC3020240514', ' ', '', '', '', '', '2024-05-14 13:06:30', '2024-05-14 13:06:30'),
(6, 'MSGB41BE60C20240514', 'fvgdg fgdsgd', 'admin@gmail.com', '1234567', '', 'fghdhghdfh', '2024-05-14 15:14:29', '2024-05-14 15:14:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_page_banner`
--
ALTER TABLE `about_page_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `action_buttons`
--
ALTER TABLE `action_buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flyers`
--
ALTER TABLE `flyers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `home_appreciation_img`
--
ALTER TABLE `home_appreciation_img`
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
-- Indexes for table `infrastructure_page_banner`
--
ALTER TABLE `infrastructure_page_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_banner_img`
--
ALTER TABLE `product_banner_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality`
--
ALTER TABLE `quality`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quality_banner`
--
ALTER TABLE `quality_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_page_banner`
--
ALTER TABLE `update_page_banner`
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
-- AUTO_INCREMENT for table `about_page_banner`
--
ALTER TABLE `about_page_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `action_buttons`
--
ALTER TABLE `action_buttons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `flyers`
--
ALTER TABLE `flyers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_appreciation_img`
--
ALTER TABLE `home_appreciation_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `home_updates_img`
--
ALTER TABLE `home_updates_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infrastructure_page_banner`
--
ALTER TABLE `infrastructure_page_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_banner_img`
--
ALTER TABLE `product_banner_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quality`
--
ALTER TABLE `quality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quality_banner`
--
ALTER TABLE `quality_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `update_page_banner`
--
ALTER TABLE `update_page_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
