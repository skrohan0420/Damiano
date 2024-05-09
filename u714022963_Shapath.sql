-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 26, 2024 at 11:49 AM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u714022963_Shapath`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about` longtext NOT NULL,
  `about_img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `uid`, `about_title`, `about`, `about_img`, `created_at`, `updated_at`) VALUES
(1, 'ABT5678FGHTYUU', 'Empowering Families through Sustainable Impact in Nutrition, Education, and Skill Building', 'Shapath is a catalyst for sustainable impact in the area of nutrition, education, and skill building amongst the underprivileged considering the family as a unit and inclusions at the core.\r\nWith a committed passion for children and a belief that education empowers, Shapath reaches out to the economically weaker section of society. Shapath is founded as a registered charitable trust in 2022. \r\nWe have evolved from the 1st day to deriving learnings about the needs of the development sector by working at the grassroots level and with the ones at the bottom of the pyramid. We are committed to nation building.', '/uploads/about_img/628bf705ce7f364305418d6786b7792c.jpg', '2024-02-06 15:53:38', '2024-02-06 15:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `uid`, `path`, `type`, `created_at`, `updated_at`) VALUES
(1, 'AUD1A0122F520240218', '/uploads/mp3/audio12.mp3', 'audio', '2024-02-18 17:43:21', '2024-02-18 17:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `description2` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `uid`, `title`, `description`, `description2`, `img`, `img2`, `created_at`, `updated_at`) VALUES
(2, 'BLG427EF1F220240213', 'The Impact of Sukarya\'s Community Health Workers (CHWs)', 'In its unwavering commitment to improving healthcare and well-being in marginalized communities, Sukarya relies on a dedicated team of Community Health Workers (CHWs). These individuals play a crucial role in addressing pressing issues like anemia, malnutrition, and maternal-child health, making them unsung heroes in the communities they serve.\r\n<br>\r\n<br>\r\nThis article delves into the incredible journey and invaluable contributions of Sukarya\'s CHWs, from their selection process to their profound impact as change catalysts. It explores how they not only provide healthcare services but also offer crucial interpersonal communication that can transform lives. Additionally, it discusses the extensive training that equips them with the skills and knowledge needed to uplift their communities.\r\n<br>\r\n<br>\r\nJoin us in celebrating Sukarya\'s CHWs as we uncover the transformative potential of grassroots healthcare initiatives in creating a healthier and more equitable society.\r\n<br>\r\n<br>\r\n<b>The Role of Sukarya\'s Community Health Workers</b>\r\n<br>\r\n<br>\r\nAt the heart of Sukarya\'s mission are its CHWs, entrusted with delivering vital services to communities in need. Their role is instrumental in identifying and ensuring access to services for the target audience. The selection process for CHWs is rigorous, involving criteria such as gender (female), literacy, effective communication skills, and residency within the intervention areas.\r\n<br>\r\n<br>\r\nIn the Mewat region, where female literacy rates are low and cultural constraints limit women\'s work outside their homes, adapting the criteria is necessary. CHWs are required to have a minimum capability to read and write in Hindi.\r\n<br>\r\n<br>\r\nSukarya\'s inclusive approach enhances the credibility and acceptance of its projects within local communities. Involving village stakeholders ensures a transparent and community-centric selection process.\r\n<br>\r\n<br>\r\n<b>Empowerment Through Self-Care: The Ghar Se Shuru Campaign</b>\r\n<br>\r\n<br>\r\nSukarya\'s initiatives, including the Ghar Se Shuru campaign, emphasize the importance of CHWs prioritizing their well-being. This self-care not only enhances their quality of life but also equips them with insights into the challenges associated with health issues, positioning them as informed advocates.\r\n<br>\r\n<br>\r\nThe influence of Sukarya\'s CHWs extends beyond healthcare service provision. Their home visits underscore the importance of nutrition, routine check-ups, and institutional births. Cooking demonstrations and follow-up visits monitor behavioral changes, reinforcing healthy dietary habits.\r\n<br>\r\n<br>\r\n<b>Community Advocates and Agents of Social Change</b>\r\n<br>\r\n<br>\r\nCHWs are community advocates and agents of social change. They understand the social and cultural norms of their communities, enabling them to respond effectively to the needs of community members.\r\n\r\n', 'Conclusion\r\nSukarya\'s CHWs are the driving force behind the organization\'s efforts to bring positive change to marginalized communities. Their dedication, empathy, and continuous training make them invaluable in addressing health challenges. ', '/uploads/blog_img/332330a7d845d2e741e7e9045bf89356.jpg', '/uploads/blog_img/266b247b74953ab91fe97ad430a89370.jpg', '2024-02-13 13:46:22', '2024-02-13 13:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE `causes` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `raised` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `causes`
--

INSERT INTO `causes` (`id`, `uid`, `title`, `details`, `img`, `goal`, `raised`, `created_at`, `updated_at`) VALUES
(4, 'CUS51A422B320240215', 'Hope Canva', 'Unlocking Potential Through Art: Join Hope Canva\'s Mission to Empower Underprivileged Children and Blind Women Artisans. Your Support Makes a Difference!', '/uploads/cause_img/5d3fafceec7b8e42b725b9b06370d175.png', '1245', '489', '2024-02-15 13:05:30', '2024-02-15 13:05:30'),
(7, 'CUS95BD877420240215', 'Saraswati Scholarship', 'The Saraswati Scholarship is a beacon of hope for blind women students facing financial challenges in their pursuit of higher education.', '/uploads/cause_img/316a3ef9dfb745113db150e479b03d3b.png', '10000', '8909', '2024-02-15 18:05:51', '2024-02-15 18:05:51'),
(9, 'CUSD50972C820240215', 'Bastra Bondhu', 'Bastra-Bondhu is a compassionate initiative focused on empowering the homeless by allowing them to choose their own clothes with dignity.', '/uploads/cause_img/33fae35e2bcf6eccf8e3bfdcb8ec425a.png', '109233', '12375', '2024-02-15 18:08:17', '2024-02-15 18:08:17'),
(10, 'CUS0D28CFAF20240215', 'Bastra Bondhu', 'Bastra-Bondhu is a compassionate initiative focused on empowering the homeless by allowing them to choose their own clothes with dignity.', '/uploads/cause_img/7aa843ebe048ea55ab63d7bfa324b14c.png', '213422', '145786', '2024-02-15 18:08:55', '2024-02-15 18:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `pin` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `pan` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL DEFAULT 'pending',
  `project_id` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `uid`, `name`, `email`, `address`, `pin`, `phone`, `date_of_birth`, `pan`, `amount`, `payment_id`, `payment_status`, `project_id`, `created_at`, `updated_at`) VALUES
(71, 'DNT1DB9030E20240224', 'Biswajit Ghosh', 'mco.biswajit@gmail.com', 'Kolkata', '700150', '8697096798', '1991-10-16', 'BGHPG6384H', '1', 'pay_NeoKXI1MFZVsPR', 'pending', 'EVN53E7BD7C20240222', '2024-02-24 18:11:04', '2024-02-24 18:11:04');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `doner_about` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `uid`, `name`, `doner_about`, `img`, `created_at`, `updated_at`) VALUES
(12, 'DONA88EF2B220240215', 'Rohan ', 'Shapath is a catalyst for sustainable impact in the area of nutrition, education, and skill building amongst the underprivileged considering the family as a unit and inclusions at the core. With a committed passion for', '/uploads/donor_img/1e7b9bdf8366da2d964041bf9e0f7092.jpg', '2024-02-15 13:52:15', '2024-02-15 13:52:15'),
(13, 'DONFA34742C20240215', 'Abcd', 'Shapath is a catalyst for sustainable impact in the area of nutrition, education, and skill building amongst the underprivileged considering the family as a unit and inclusions at the core. With a committed passion for', '/uploads/donor_img/a58da91fa80c80cbfc34bd24e9d65376.jpg', '2024-02-15 13:52:50', '2024-02-15 13:52:50'),
(14, 'DON019360FC20240215', 'Sk Rohan ', 'Shapath is a catalyst for sustainable impact in the area of nutrition, education, and skill building amongst the underprivileged considering the family as a unit and inclusions at the core. With a committed passion for', '/uploads/donor_img/0eeac3ff14e61d0a94e71f49f049067c.jpg', '2024-02-15 13:53:01', '2024-02-15 13:53:01'),
(15, 'DON436B410920240215', 'Rohan', 'Shapath is a catalyst for sustainable impact in the area of nutrition, education, and skill building amongst the underprivileged considering the family as a unit and inclusions at the core. With a committed passion for', '/uploads/donor_img/f2df82f915a944c0aed3dc779615ed9f.jpg', '2024-02-15 13:53:16', '2024-02-15 13:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `uid`, `title`, `details`, `img`, `date`, `place`, `created_at`, `updated_at`) VALUES
(3, 'EVNEBF1E57120240213', 'Uddan', 'This initiative focuses on empowering future doctors and engineers by identifying and nurturing talented students aspiring to enter these professions. It aims to eliminate financial barriers by providing free coaching and support to students facing financial constraints. By doing so, it seeks to ensure that individuals entering society as doctors and engineers are equipped with the skills and knowledge to contribute positively, thus creating a long-term societal impact.', '/uploads/event_img/1073e1f9ced7084951648c6a934271b0.jpg', '2024-04-20', 'Kolkata India', '2024-02-13 19:04:56', '2024-02-13 19:04:56'),
(5, 'EVN5B17A44020240213', ' Blank Drive - Bringing Warmth to the Homeless', 'As the winter chill sets in, Shapath is gearing up for its annual Blank Drive event to help the homeless in our community stay warm. This December, join us in our mission to provide winter clothes to those in need. Together, let\'s make this winter a little warmer for those without a roof over their heads. Your support can bring comfort and hope to those in need. Join us for Blank Drive - Bringing Warmth to the Homeless. Together, we can make a difference.', '/uploads/event_img/89619813233cbe93f7d8dcbd99c2ab42.jpg', '2024-12-20', 'Kolkata', '2024-02-13 19:12:58', '2024-02-13 19:12:58'),
(6, 'EVN53E7BD7C20240222', 'Upohar - Spreading Joy to the Homeless this Pujo', 'This Pujo, join Upohar in spreading joy to the homeless by providing them with special gifts. Upohar, meaning \"gift\" in Bengali, is an initiative to bring a smile to those who need it most during the festive season. This Pujo, let\'s come together to make a difference in the lives of the homeless. Your support can bring warmth and happiness to those who need it most. Join us for Upohar - Spreading Joy to the Homeless. Together, we can make this festive season a little brighter for everyone.', '/uploads/event_img/55a76877a7ee3f2ffaa42632ac31807b.jpg', '2024-10-24', 'Kolkata', '2024-02-22 05:21:32', '2024-02-22 05:21:32');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_img`
--

CREATE TABLE `gallery_img` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `images` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery_img`
--

INSERT INTO `gallery_img` (`id`, `uid`, `images`, `created_at`, `updated_at`) VALUES
(21, 'GAL0CB39FF320240216', '/uploads/galary_img/bc54e2cca9e7394d5c583f241518465f.jpg', '0000-00-00 00:00:00', '2024-02-16 15:37:36'),
(22, 'GAL3A4FF18120240216', '/uploads/galary_img/76b2900115feb06ba24b59d79aee1ba1.jpg', '0000-00-00 00:00:00', '2024-02-16 15:37:45'),
(23, 'GAL47C2E8E820240216', '/uploads/galary_img/62c3f19d596bd26e728c566a48179656.jpg', '0000-00-00 00:00:00', '2024-02-16 15:37:54'),
(24, 'GAL0DDC972120240216', '/uploads/galary_img/81beb11dd8992d52e4436495974082c1.jpg', '0000-00-00 00:00:00', '2024-02-16 15:38:13'),
(25, 'GAL698F72D920240216', '/uploads/galary_img/509c4ee2d66ba7a86b6b9a78cb305aab.jpg', '0000-00-00 00:00:00', '2024-02-16 15:38:28'),
(26, 'GALD85CFA3A20240216', '/uploads/galary_img/358fece07bae3fec7e0756542d723e1a.jpg', '0000-00-00 00:00:00', '2024-02-16 15:38:38'),
(27, 'GAL57B1865420240216', '/uploads/galary_img/77d5b5b864f7a4f23b1d4938e9583ab8.jpg', '0000-00-00 00:00:00', '2024-02-16 15:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `mission_vision`
--

CREATE TABLE `mission_vision` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mission_vision`
--

INSERT INTO `mission_vision` (`id`, `uid`, `title`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'MV5678VGKVKFVK56', 'SHAPATH\'S MISSION', 'To drive sustainable change for underprivileged children, youth, and women across India. Employing a life-cycle development approach, we encourage active participation from civil society through civic-driven change. Committed to exemplary governance, we strive to emerge as a leading, innovative, and scalable development organization within the Indian context. Our focus remains on empowering the underprivileged through tailored education, healthcare, and livelihood programs, ensuring optimal Social Return on Investment (SROI). Bridging corporate competitiveness with social initiatives, we aim to sensitize privileged individuals within India to champion Civic Driven Change.', 'mission', '2024-02-06 15:54:58', '2024-02-06 15:54:58'),
(2, 'MV5656758CGGHTF', 'SHAPATH\'S VISION', 'Envisioning a transformed India where the lives of underprivileged individuals undergo lasting positive change. As a pioneering force in civic-driven change, we aspire to be a recognized leader, setting standards for governance, innovation, and scalability. Our vision is to provide relevant education, healthcare, and livelihood opportunities tailored to the Indian context. Employing cutting-edge methodologies, we aim for ideal Social Return on Investment (SROI), fostering collaboration between corporate and social sectors. We inspire privileged individuals within India to actively contribute to and champion Civic Driven Change, fostering a brighter and more equitable future for all.', 'vision', '2024-02-06 15:55:55', '2024-02-06 15:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `uid`, `email`, `created_at`, `updated_at`) VALUES
(1, 'NL5678FGHTYUU', 'shapath@gmail.com', '2024-02-06 15:53:38', '2024-02-06 15:53:38'),
(2, 'NL3ED3BEBB20240218', 'ar@emial.com', '2024-02-18 15:53:09', '2024-02-18 15:53:09'),
(3, 'NL2003F88E20240219', 'skrohan0420@gmail.com', '2024-02-19 12:34:39', '2024-02-19 12:34:39');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `about_member` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `uid`, `name`, `about_member`, `img`, `type`, `created_at`, `updated_at`) VALUES
(11, 'OUT0746703020240215', 'Mr.Prosenjit Mondal', 'As a trustee, I am dedicated to fostering innovative solutions that empower underprivileged individuals through education and livelihood opportunities.', '/uploads/our_team_img/8abf701d5a41abd0b75124a58e2cd58f.png', 'trustees', '2024-02-15 17:37:14', '2024-02-15 17:37:14'),
(12, 'OUTAFD66E7220240215', 'Mr. Namoshi Roy', 'Committed to exemplary governance, my role as a trustee involves ensuring transparency and accountability in every aspect of Shapath\'s operations.', '/uploads/our_team_img/dfc6a141ac4a14d95d10a875b2219097.png', 'trustees', '2024-02-15 17:38:25', '2024-02-15 17:38:25'),
(13, 'OUTC58F630920240215', 'Mr. Amit Bose', 'With a focus on healthcare initiatives, I am proud to contribute to Shapath\'s mission as a trustee, striving to make a lasting impact on the well-being of the underprivileged.', '/uploads/our_team_img/b8b9087405543f9d04448ec5a0954df0.png', 'trustees', '2024-02-15 17:38:58', '2024-02-15 17:38:58'),
(14, 'OUT8D4F6E1E20240215', 'Mr. Sumit Mondal', 'As a trustee, my passion lies in bridging the corporate and social sectors, promoting collaboration that maximizes the social return on investment for Shapath\'s initiatives.', '/uploads/our_team_img/fb79f827383a5bd55928a9b49c8225a4.png', 'trustees', '2024-02-15 17:39:39', '2024-02-15 17:39:39'),
(15, 'OUT4674C47720240215', 'Mr.Sudeep Mondal', 'Guided by the vision of a transformed India, I, as a trustee, am committed to setting high standards for scalability and innovation within Shapath.', '/uploads/our_team_img/c49b1d9a7cc7558cbf32a2d619592eaf.png', 'trustees', '2024-02-15 17:40:06', '2024-02-15 17:40:06'),
(16, 'OUT115251A020240215', 'Mr. Archan Ghosh', 'My role as a trustee involves championing civic-driven change, inspiring privileged individuals to actively contribute to Shapath\'s noble cause.', '/uploads/our_team_img/786afee957fa45186b17b628d8cd2065.png', 'trustees', '2024-02-15 17:40:30', '2024-02-15 17:40:30'),
(17, 'OUT02B28E2620240215', 'Ms.Nisha Shyamal', 'In my role as a trustee, I am passionate about creating opportunities for underprivileged women, contributing to Shapath\'s mission of empowerment and equality.', '/uploads/our_team_img/36b3b42e46711951278f74c5c3f61e0a.png', 'trustees', '2024-02-15 17:41:19', '2024-02-15 17:41:19'),
(18, 'OUT07A6EB2E20240215', 'Mrs. Riya Chakrobarty', 'As a trustee, I am dedicated to fostering an inclusive environment, ensuring that Shapath\'s initiatives leave no one behind in our pursuit of positive change.', '/uploads/our_team_img/d7eaafa16326c21842f468784deb0e26.png', 'trustees', '2024-02-15 17:41:43', '2024-02-15 17:41:43'),
(19, 'OUT37F70C3520240215', 'Ms. Susmita Mondal', 'With a passion for community development, I am honored to be a trustee, steering Shapath towards creating a brighter and more equitable future.', '/uploads/our_team_img/cc0b20f96325664d9aa656150682cec5.png', 'trustees', '2024-02-15 17:42:11', '2024-02-15 17:42:11'),
(20, 'OUT0F914BFB20240215', 'Mr. Sumon Mondal', 'Striving for excellence, I serve as a trustee to elevate Shapath\'s reputation as a leading force in civic-driven change with a focus on exemplary governance.', '/uploads/our_team_img/a9bc6069cc6e7d5d885ede1b3f9e17aa.png', 'trustees', '2024-02-15 17:42:41', '2024-02-15 17:42:41'),
(21, 'OUT93EA53D620240215', 'Mr. Bubai Ghosh', 'My role as a trustee involves leveraging technology to enhance the efficiency and impact of Shapath\'s programs for the underprivileged.', '/uploads/our_team_img/605587cd75b3d0c9d1363106a26a5ded.png', 'trustees', '2024-02-15 17:42:57', '2024-02-15 17:42:57'),
(22, 'OUT8E7969FC20240215', 'Mr. Suvanjan Ghosh', 'Contributing to Shapath as a trustee, my commitment is to uphold ethical standards and support initiatives that make a positive difference in the lives of the underprivileged.', '/uploads/our_team_img/f269c782f4139f3dacedca994e9278e6.png', 'trustees', '2024-02-15 17:43:19', '2024-02-15 17:43:19'),
(24, 'OUTB72800A920240215', 'Mr. Sudipta Naga', 'As a trustee, my focus is on building strong community connections, ensuring that Shapath remains deeply rooted in the diverse needs and aspirations of the underprivileged.\r\n', '/uploads/our_team_img/aefa7ee56d63272097a4d87dd09c569a.png', 'trustees', '2024-02-15 17:44:00', '2024-02-15 17:44:00'),
(25, 'OUT48545BA420240215', 'Mr. Akash Ghosh', 'Embracing my role as a trustee, I am dedicated to fostering collaboration and partnerships that amplify the reach and impact of Shapath\'s initiatives.', '/uploads/our_team_img/dd8a50e87cb5322653cdea61d20c81d4.png', 'trustees', '2024-02-15 17:44:32', '2024-02-15 17:44:32'),
(28, 'OUT81AD386C20240218', 'Mr. Anurag Halder', 'I am honored to serve as the Secretary of Shapath, working alongside dedicated individuals committed to driving positive change in the lives of the underprivileged. As we navigate our journey towards exemplary governance, innovation, and scalability, I look forward to supporting our mission and fostering collaboration within our community. Together, let’s continue to make a meaningful impact through Civic Driven Change.', '/uploads/our_team_img/e5b9c7413b3d5e4a4fe091ed174760ec.jpeg', 'secretary', '2024-02-18 16:00:01', '2024-02-18 16:00:01'),
(30, 'OUT87DC697820240218', 'Mr. Rahul Gupta', 'It is with great dedication and responsibility that I take on the role of Treasurer for Shapath. As we strive for impactful initiatives and sustainable change, I am committed to ensuring transparent financial management. Together, let us uphold the highest standards of fiscal responsibility, making each contribution count towards our shared vision of a brighter, more equitable future.', '/uploads/our_team_img/e43fcff45491132834a2609a7409a4a7.jpeg', 'treasurer', '2024-02-18 16:01:54', '2024-02-18 16:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `wallet` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `uid`, `payment_id`, `amount`, `currency`, `status`, `method`, `description`, `wallet`, `contact`, `created_at`, `updated_at`) VALUES
(49, 'PMT2126AAEF20240224', 'pay_NeoKXI1MFZVsPR', '100', 'INR', 'authorized', 'upi', 'Shapath Donation test', NULL, '+918697096798', '2024-02-24 18:12:13', '2024-02-24 18:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `project_cover_details` longtext NOT NULL,
  `project_page_title` varchar(255) NOT NULL,
  `project_page_video` varchar(255) NOT NULL,
  `project_page_description` longtext NOT NULL,
  `project_img` varchar(255) NOT NULL,
  `project_logo` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `uid`, `project_title`, `project_cover_details`, `project_page_title`, `project_page_video`, `project_page_description`, `project_img`, `project_logo`, `created_at`, `updated_at`) VALUES
(23, 'PRO440FB68E20240222', 'Shristi', 'The workshop is designed to empower visually impaired women by teaching them the art of making phenyl (cleaning solution). Beyond just a skill, this initiative provides them with an opportunity to earn daily wages, fostering financial independence and a sense of empowerment. The workshop not only focuses on the craft itself but also on creating a supportive and inclusive environment where participants feel valued and capable. By learning and engaging in this workshop, blind women can gain valuable skills, earn a livelihood, and contribute meaningfully to their communities.', '', 'https://www.youtube.com/embed/fUcq6m9NYwA?si=w9_C3P2yuK_i6Aft', '', '/uploads/project_img/e55e156eb9754d905694eb9d287349b2.jpg', '/uploads/project_logo/99d70b1df698f4173678d10af86b5f30.png', '2024-02-22 03:34:10', '2024-02-22 03:34:10'),
(25, 'PRO0E33123B20240222', 'Hope Canvas', 'Hope Canvas is a drawing school for underprivileged children, held every Sunday, where they can express themselves through art. This initiative goes beyond teaching drawing skills; it aims to instill confidence and a sense of accomplishment in the children, helping them realize their potential. By providing a safe and nurturing environment, Hope Canvas offers these children hope for a brighter future, where their creativity and talents are valued.', '', 'https://www.youtube.com/embed/fUcq6m9NYwA?si=w9_C3P2yuK_i6Aft', '', '/uploads/project_img/9142a3e3667986d0e7708e67d34ffa1e.jpg', '/uploads/project_logo/3129c8753b96f0a3c7d50f1b5e4ea4ed.jpg', '2024-02-22 04:26:11', '2024-02-22 04:26:11'),
(26, 'PRO8A99CEBD20240222', 'Saraswati scholarship ', 'The Saraswati Scholarship is a special initiative aimed at empowering blind women by providing them with educational opportunities. Named after Saraswati, the Hindu goddess of knowledge, music, arts, wisdom, and learning, this scholarship is designed to support blind women in their pursuit of education and personal development.', '', 'https://www.youtube.com/embed/fUcq6m9NYwA?si=w9_C3P2yuK_i6Aft', '', '/uploads/project_img/1ce3629b4cc2fe7abbcca088fa351a56.jpg', '/uploads/project_logo/9956815aea2c89907567c67276eda778.jpg', '2024-02-22 05:44:54', '2024-02-22 05:44:54'),
(27, 'PROD08B2D4A20240222', 'Blanket Drive', 'As the winter chill sets in, Shapath is gearing up for its annual Blank Drive event to help the homeless in our community stay warm. This December, join us in our mission to provide winter clothes to those in need. Together, let\'s make this winter a little warmer for those without a roof over their heads. Your support can bring comfort and hope to those in need. Join us for Blank Drive - Bringing Warmth to the Homeless. Together, we can make a difference.', '', 'https://www.youtube.com/embed/fUcq6m9NYwA?si=w9_C3P2yuK_i6Aft', '', '/uploads/project_img/7c06081bcc71c515051845403b8c9036.jpg', '/uploads/project_logo/4991c35970e9b6db95a84c0253498cdd.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(29, 'PROA5448E8920240223', 'Upohar', 'Each year, Shapath organizes the Upohar project, an initiative aimed at bringing joy and support to underprivileged children. This project, held on the auspicious day of Mahalaya, involves the distribution of new clothes and nourishing food to those in need. The success of Upohar is measured not just in material provisions but in the smiles and gratitude of the children reached. This ongoing initiative serves as a beacon of Shapath\'s core values, guiding their mission to build a world without poverty. The continued support of team members, supporters, and partners empowers Shapath to turn their shared vision into reality, creating a more compassionate and equitable world for all.', '', 'https://www.youtube.com/embed/uAiDC-SgF7o?si=7PW4RAarvEhCB9id', '', '/uploads/project_img/733800496982acdfd20800e5bdbf26e6.jpg', '/uploads/project_logo/892cf42cceb4c26295ba0d39d8d84658.jpg', '2024-02-23 07:47:36', '2024-02-23 07:47:36'),
(30, 'PROE311911220240223', 'Bastra Bondhu ', 'Bastra Bondhu, a project by Shapath, offers a unique opportunity for homeless and financially weak individuals to choose their own clothes. Every Sunday, a shop is set up in Sonarpur, where these individuals can browse and select clothing items that suit their preferences and needs. This initiative not only provides essential clothing but also empowers individuals by giving them the freedom to make choices and maintain their dignity. Bastra Bondhu embodies the spirit of compassion and inclusivity, ensuring that everyone has access to clothing and the ability to express their individuality.', '', 'https://www.youtube.com/embed/uAiDC-SgF7o?si=7PW4RAarvEhCB9id', '', '/uploads/project_img/d8fb01d7a9c15453e98a4024b4f6097b.jpg', '/uploads/project_logo/a706eeb5f154ecbde121bc67691db723.png', '2024-02-23 08:26:11', '2024-02-23 08:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `project_events`
--

CREATE TABLE `project_events` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_events`
--

INSERT INTO `project_events` (`id`, `uid`, `p_id`, `title`, `details`, `img`, `created_at`, `updated_at`) VALUES
(3, 'PREV2FFB8D7220240219', 'PROCADBC14820240216', 'At Hope Canva, we are dedicated', 'At Hope Canva, we are dedicated to making a meaningful impact in the lives of underprivileged children. Join us in our Sunday drawing schools, where art becomes a tool for expression and hope. Step into our bamboo workshop, where blind women showcase their artistic skills, receiving daily wages for financial assistance. Together, we paint a brighter future and weave a tapestry of empowerment. Explore the transformative power of art and craftsmanship with Hope Canva.', '/uploads/project_event_img/64043c47d30306d7c19a8e22f812b3ee.jpg', '2024-02-19 16:32:35', '2024-02-19 16:32:35'),
(4, 'PREV9B35C74920240219', 'PROCADBC14820240216', 'At Hope Canva', 'At Hope Canva, we are dedicated to making a meaningful impact in the lives of underprivileged children. Join us in our Sunday drawing schools, where art becomes a tool for expression and hope. Step into our bamboo workshop, where blind women showcase their artistic skills, receiving daily wages for financial assistance. Together, we paint a brighter future and weave a tapestry of empowerment. Explore the transformative power of art and craftsmanship with Hope Canva', '/uploads/project_event_img/cb00a661632730f49cd78f2f6dc2e918.jpg', '2024-02-19 16:32:54', '2024-02-19 16:32:54'),
(5, 'PREV59EB82D520240219', 'PROCADBC14820240216', 'ession and hope. S', 'At Hope Canva, we are dedicated to making a meaningful impact in the lives of underprivileged children. Join us in our Sunday drawing schools, where art becomes a tool for expression and hope. Step into our bamboo workshop, where blind women showcase their artistic skills, receiving daily wages for financial assistance. Together, we paint a brighter future and weave a tapestry of empowerment. Explore the transformati', '/uploads/project_event_img/d093b3089a826a5b576f8ceedad29575.jpg', '2024-02-19 16:33:24', '2024-02-19 16:33:24'),
(8, 'PREV5EBB46DE20240219', 'PRO930C856F20240219', 's', 'sd', '/uploads/project_event_img/e5624c8ef9986ec03ab693ee0a384d94.png', '2024-02-19 11:47:55', '2024-02-19 11:47:55'),
(9, 'PREV7DB390E620240220', 'PRO65B9343820240220', 'event', 'event', '/uploads/project_event_img/5e10c439fd7632e6968cc3dee8ae2d6a.jpg', '2024-02-20 22:28:47', '2024-02-20 22:28:47'),
(16, 'PREVC19D09E820240222', 'PRO0E33123B20240222', 'Hope Canvas: Empowering Underprivileged Children through Art', 'Hope Canvas is a drawing school for underprivileged children, offering them a platform to express themselves through art. Held every Sunday, this initiative provides these children with an opportunity to develop their artistic skills and creativity. Beyond just learning to draw, Hope Canvas aims to instill confidence and a sense of accomplishment in these children, helping them realize their potential and offering them hope for a brighter future.', '/uploads/project_event_img/000dbef9397a74c7a048088e2368e76f.jpg', '2024-02-22 04:36:31', '2024-02-22 04:36:31'),
(17, 'PREV3AE6F92220240222', 'PRO0E33123B20240222', 'Hope Canvas Drawing School for Underprivileged Children', 'Every Sunday, Hope Canvas opens its doors to underprivileged children, providing them with a safe and nurturing environment to learn and create art. Through this initiative, children not only develop their drawing skills but also build self-esteem and discover their artistic talents, opening doors to new possibilities and a brighter tomorrow.', '/uploads/project_event_img/780039a0a4a6a523798d7d67e2130747.jpg', '2024-02-22 04:38:45', '2024-02-22 04:38:45'),
(18, 'PREV8A2B6BC820240222', 'PRO8A99CEBD20240222', 'Saraswati Scholarship for Blind Women: Empowering Education', 'This scholarship provides financial assistance and career guidance to blind women, empowering them through education and enabling them to become leaders in their communities.', '/uploads/project_event_img/802295efa59e6f7e4cd1def521cebad0.jpg', '2024-02-22 05:46:54', '2024-02-22 05:46:54'),
(19, 'PREV072B600820240222', 'PRO8A99CEBD20240222', ' Bridging the Gap: Saraswati Scholarship for Blind Women', 'The Saraswati Scholarship bridges the gap in education for blind women, offering them the support they need to pursue their academic and career aspirations.', '/uploads/project_event_img/dfaf2c3db7142bd6509c7fad34aafa6f.png', '2024-02-22 05:47:28', '2024-02-22 05:47:28'),
(20, 'PREVAE8C9AD320240222', 'PROD08B2D4A20240222', 'Donate Warm Clothing:', ' Clean, gently used or new blankets, sweaters, jackets, socks, and gloves can make a big difference in someone\'s life.', '/uploads/project_event_img/563e9b4a3ad1bb29f56bb4d058b33466.jpg', '2024-02-22 05:51:14', '2024-02-22 05:51:14'),
(21, 'PREVDEB0AFB620240222', 'PROD08B2D4A20240222', 'Volunteer Your Time:', 'Help us sort and distribute the donated items to ensure they reach those who need them most.', '/uploads/project_event_img/d240e9b7fc5c84316606faa56e99ac56.jpg', '2024-02-22 05:51:37', '2024-02-22 05:51:37'),
(22, 'PREV8372F66420240222', 'PROD08B2D4A20240222', 'Spread the Word:', 'Share our event on social media and encourage your friends and family to participate.', '/uploads/project_event_img/7d55343251dd8bccb77f0d0e11ce32a6.jpg', '2024-02-22 05:51:58', '2024-02-22 05:51:58'),
(23, 'PREV776B0C4520240223', 'PROA5448E8920240223', 'Joy and Happiness', 'The Upohar project brings joy and happiness to underprivileged children by providing them with new clothes and nourishing food. This not only meets their basic needs but also brightens their spirits, making them feel cared for and valued.', '/uploads/project_event_img/de9c3e5107799ee515d0307c75939da9.jpg', '2024-02-23 07:49:39', '2024-02-23 07:49:39'),
(24, 'PREV9BF6B5B720240223', 'PROA5448E8920240223', 'Support and Care', 'By offering support and care through the distribution of essentials, Upohar helps create a sense of community and belonging among underprivileged children. This support system can have a positive impact on their overall well-being and development.', '/uploads/project_event_img/8a8d8fd4869bddd8a30166d736e0f7f8.jpg', '2024-02-23 07:50:22', '2024-02-23 07:50:22'),
(25, 'PREV242B149720240223', 'PROA5448E8920240223', 'Empowerment and Confidence', 'Receiving new clothes and nourishing food can empower underprivileged children and boost their confidence. It gives them a sense of dignity and self-worth, which are crucial for their future success and well-being.\r\n\r\n\r\n\r\n\r\n', '/uploads/project_event_img/cc39e734c20f444835b05b65088777ca.jpg', '2024-02-23 07:51:07', '2024-02-23 07:51:07'),
(26, 'PREVFFEDA48F20240223', 'PROE311911220240223', 'Project Support', 'Insight: Your support can help sustain and expand projects like Bastra Bondhu, ensuring that more homeless and financially weak individuals have access to essential clothing.\r\nBenefit: By supporting this project, you are directly contributing to improving the lives of those in need, providing them with not just clothing but also a sense of dignity and choice.', '/uploads/project_event_img/79a74a497d55739a0d024dec824d04ad.jpg', '2024-02-23 08:28:21', '2024-02-23 08:28:21'),
(27, 'PREV88019EE420240223', 'PROE311911220240223', 'Community Engagement', 'Insight: Bastra Bondhu fosters community engagement by providing a platform for individuals to come together and support each other.\r\nBenefit: Engaging with this project can create a sense of unity and compassion within the community, promoting empathy and understanding for those facing hardship.\r\n\r\n\r\n\r\n', '/uploads/project_event_img/789aeae7e8be9030a30368a98995669e.jpg', '2024-02-23 08:28:43', '2024-02-23 08:28:43'),
(28, 'PREV0B97FA8D20240226', 'PRO440FB68E20240222', 'Phenyl Making Workshop for Visually Impaired Women', 'This workshop is dedicated to teaching visually impaired women how to make phenyl. Participants will receive daily wages, providing them with financial support and independence.', '/uploads/project_event_img/b0054aa252ea8b9d15e9423614cf748d.jpg', '2024-02-26 05:54:41', '2024-02-26 05:54:41'),
(29, 'PREVE58506CC20240226', 'PRO440FB68E20240222', 'Phenyl Making Workshop for Financial Independence', 'This workshop offers visually impaired women the opportunity to learn phenyl making, enabling them to earn daily wages and achieve financial independence.', '/uploads/project_event_img/c92463c9f87bf00aab1a77e7b88d237d.jpg', '2024-02-26 06:00:44', '2024-02-26 06:00:44'),
(30, 'PREV0C92161120240226', 'PRO440FB68E20240222', 'Empowering Blind Women through Phenyl Making Workshop', 'This workshop aims to empower blind women by teaching them how to make phenyl. By earning daily wages, participants can gain financial stability and enhance their self-reliance.', '/uploads/project_event_img/51ebc0daaec204d3107bec1fd4b2de57.jpg', '2024-02-26 06:03:53', '2024-02-26 06:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE `project_images` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_images`
--

INSERT INTO `project_images` (`id`, `uid`, `p_id`, `image`, `created_at`, `updated_at`) VALUES
(17, 'PRGF931703020240216', 'PROCADBC14820240216', '/uploads/project_galary_img/78905a7223f53549fb1d4a39b7c4795f.jpg', '2024-02-16 17:39:11', '2024-02-16 17:39:11'),
(18, 'PRG09C9EF3B20240216', 'PROCADBC14820240216', '/uploads/project_galary_img/b8c455b8f1a70a4bfb18c9f5dbd03941.jpg', '2024-02-16 17:39:11', '2024-02-16 17:39:11'),
(24, 'PRG2EC48CC320240219', 'PRO930C856F20240219', '/uploads/project_galary_img/960e9afaa5455861bd47476e357ae78a.jpg', '2024-02-19 13:04:33', '2024-02-19 13:04:33'),
(39, 'PRGC74AB8AE20240219', 'PRO930C856F20240219', '/uploads/project_galary_img/13c0c9678b7aa7fa8f58255f434e6679.jpg', '2024-02-19 15:22:14', '2024-02-19 15:22:14'),
(40, 'PRGF510E13720240219', 'PRO930C856F20240219', '/uploads/project_galary_img/4adbc19411192cb8eb3cbd7b34ec3aab.jpg', '2024-02-19 15:22:19', '2024-02-19 15:22:19'),
(41, 'PRGE724DA2820240219', 'PROCADBC14820240216', '/uploads/project_galary_img/43e9f41c4d4254664461df2e9bda6186.png', '2024-02-19 11:32:56', '2024-02-19 11:32:56'),
(42, 'PRGD6EA9E9820240220', 'PROFBFCE34A20240220', '/uploads/project_galary_img/b0cdf97a70123899d38b5db96059db42.jpg', '2024-02-20 15:26:40', '2024-02-20 15:26:40'),
(43, 'PRG875718D720240220', 'PROFBFCE34A20240220', '/uploads/project_galary_img/49a6bbb70b35aa9663f9562965d74926.jpg', '2024-02-20 15:26:40', '2024-02-20 15:26:40'),
(44, 'PRGCEF0CFE120240220', 'PRO17B0710420240220', '/uploads/project_galary_img/8944a9e59b1666ab48b7f4d83160d498.jpg', '2024-02-20 15:27:10', '2024-02-20 15:27:10'),
(45, 'PRG38E19CD720240220', 'PRO17B0710420240220', '/uploads/project_galary_img/0ab04dad05e325a3a904f3f57f6ee898.jpg', '2024-02-20 15:27:10', '2024-02-20 15:27:10'),
(46, 'PRG4471738D20240220', 'PRO60A0459520240220', '/uploads/project_galary_img/d6a484d8e93d41f82dc39b7ee87168ad.jpg', '2024-02-20 15:27:38', '2024-02-20 15:27:38'),
(47, 'PRGEF5DD38920240220', 'PRO60A0459520240220', '/uploads/project_galary_img/8a45bda913ff3aad71ff5647dce65fa9.jpg', '2024-02-20 15:27:38', '2024-02-20 15:27:38'),
(48, 'PRGCC0C2D1920240220', 'PROF39DB59620240220', '/uploads/project_galary_img/2fc6161b37c4c7188479dbfb921bba08.jpg', '2024-02-20 15:27:49', '2024-02-20 15:27:49'),
(49, 'PRG16C193EE20240220', 'PROF39DB59620240220', '/uploads/project_galary_img/abb5ec5848c81bb8ff66709f7e8799f1.jpg', '2024-02-20 15:27:49', '2024-02-20 15:27:49'),
(50, 'PRGC6B98FCB20240220', 'PRO1C2561EC20240220', '/uploads/project_galary_img/23ca15ef652e84ea709dd4efc7179734.jpg', '2024-02-20 15:40:11', '2024-02-20 15:40:11'),
(51, 'PRG7F375AF720240220', 'PRO1C2561EC20240220', '/uploads/project_galary_img/fd8169a0245e5400987868497aeb5d19.jpg', '2024-02-20 15:40:11', '2024-02-20 15:40:11'),
(52, 'PRG222DBBE620240220', 'PRO60BEDDAB20240220', '/uploads/project_galary_img/d70fb4c9d79a41669d53936b32c07958.jpg', '2024-02-20 15:48:49', '2024-02-20 15:48:49'),
(53, 'PRGEA4E68B720240220', 'PRO60BEDDAB20240220', '/uploads/project_galary_img/728fa0c859150d5c33a2f9173fd87051.jpg', '2024-02-20 15:48:49', '2024-02-20 15:48:49'),
(63, 'PRGF15FB58F20240221', 'PROF248D03F20240221', '/uploads/project_galary_img/5f540d273eacdbfc1e3b37aa76d406d0.jpg', '2024-02-20 18:37:23', '2024-02-20 18:37:23'),
(66, 'PRG86FADD2C20240221', 'PRO65B9343820240220', '/uploads/project_galary_img/17042c19b1e87e3decfdee355e639d90.jpg', '2024-02-21 10:26:21', '2024-02-21 10:26:21'),
(67, 'PRG84CC006520240221', 'PRO65B9343820240220', '/uploads/project_galary_img/a67cbdc2c03f5e46b77c1e8677ba6fe3.jpg', '2024-02-21 10:27:22', '2024-02-21 10:27:22'),
(71, 'PRG96476B0A20240222', 'PRO51A5012920240222', '/uploads/project_galary_img/f82cfe9cbf307811b41d4fca70921e26.jpg', '2024-02-22 04:18:52', '2024-02-22 04:18:52'),
(77, 'PRG6EF0AF5320240222', 'PRO0E33123B20240222', '/uploads/project_galary_img/dfa0fd1c079c3702db6e08a5f67aaaae.jpg', '2024-02-22 04:30:50', '2024-02-22 04:30:50'),
(78, 'PRG87BB895020240222', 'PRO0E33123B20240222', '/uploads/project_galary_img/73ee925ec242f2ab50cb9d55201ebbad.jpg', '2024-02-22 04:35:48', '2024-02-22 04:35:48'),
(79, 'PRGA5B91C1A20240222', 'PRO0E33123B20240222', '/uploads/project_galary_img/93070e125d0b5a5b034fc1646cf6671c.jpg', '2024-02-22 04:35:57', '2024-02-22 04:35:57'),
(80, 'PRG07DED62020240222', 'PRO8A99CEBD20240222', '/uploads/project_galary_img/3ef7765eff2b8fccb0235130dc273e82.png', '2024-02-22 05:44:54', '2024-02-22 05:44:54'),
(81, 'PRG30F660B620240222', 'PRO8A99CEBD20240222', '/uploads/project_galary_img/9cd28c14109f0ce03ceee6e09454abeb.png', '2024-02-22 05:45:08', '2024-02-22 05:45:08'),
(82, 'PRGC5F98D9F20240222', 'PRO8A99CEBD20240222', '/uploads/project_galary_img/3df6609e08d0b2bd0b9c0420276a35b0.png', '2024-02-22 05:45:17', '2024-02-22 05:45:17'),
(83, 'PRG7FC6E70120240222', 'PRO8A99CEBD20240222', '/uploads/project_galary_img/7b6258e84c0ca2a8e1178221c5561703.png', '2024-02-22 05:45:23', '2024-02-22 05:45:23'),
(84, 'PRG392DF92320240222', 'PROD08B2D4A20240222', '/uploads/project_galary_img/649ff5aa2e9ac153d62ac0b48c058d92.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(85, 'PRG63ACCF4020240222', 'PROD08B2D4A20240222', '/uploads/project_galary_img/a294af492897c0ae67849eaab41b141c.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(86, 'PRG0A18AC2420240222', 'PROD08B2D4A20240222', '/uploads/project_galary_img/3fc07e2ec9b4b72363eda70c8e02eb55.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(87, 'PRG25F1FF7E20240222', 'PROD08B2D4A20240222', '/uploads/project_galary_img/26ea924277804d56e4f2780a00f1b09e.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(88, 'PRGFD22054220240222', 'PROD08B2D4A20240222', '/uploads/project_galary_img/02b89d4f706e5d807b97320dba46670b.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(89, 'PRG65895D0A20240222', 'PROD08B2D4A20240222', '/uploads/project_galary_img/cad9755c9aeaf2ba1c31ab41057af8a5.jpg', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(94, 'PRGFCA6551B20240223', 'PROA5448E8920240223', '/uploads/project_galary_img/7317aa95919401e64e5e3da7d59cd5dc.jpg', '2024-02-23 07:47:36', '2024-02-23 07:47:36'),
(95, 'PRG9D11B5E120240223', 'PROA5448E8920240223', '/uploads/project_galary_img/de30b525ed1df5597ef74ea932bcf361.jpg', '2024-02-23 07:53:15', '2024-02-23 07:53:15'),
(96, 'PRG2F66291420240223', 'PROA5448E8920240223', '/uploads/project_galary_img/ed79bfaf01ee634d77a6fb1135ad82e8.jpg', '2024-02-23 07:53:22', '2024-02-23 07:53:22'),
(97, 'PRGAD484DF720240223', 'PROA5448E8920240223', '/uploads/project_galary_img/ce1a6c076d6eed360710781a612aa637.jpg', '2024-02-23 07:53:30', '2024-02-23 07:53:30'),
(98, 'PRGE71994C120240223', 'PROA5448E8920240223', '/uploads/project_galary_img/1addc5e17ba79b8fa62db5d78ab4b413.jpg', '2024-02-23 07:54:04', '2024-02-23 07:54:04'),
(99, 'PRG2799DE0520240223', 'PROE311911220240223', '/uploads/project_galary_img/f472376896319dcab10fdaa16dbae495.jpg', '2024-02-23 08:26:11', '2024-02-23 08:26:11'),
(100, 'PRG8E00BE1620240226', 'PRO440FB68E20240222', '/uploads/project_galary_img/fd5cc0dfa8163dd9a54a376644faaa68.jpg', '2024-02-26 05:51:08', '2024-02-26 05:51:08'),
(101, 'PRG7F7C60AF20240226', 'PRO440FB68E20240222', '/uploads/project_galary_img/b678639a94b5a5ea6a783fdf202aaf34.jpg', '2024-02-26 05:51:27', '2024-02-26 05:51:27'),
(103, 'PRG0436C62C20240226', 'PRO440FB68E20240222', '/uploads/project_galary_img/b9eb1104d60e457218e181ce8664a03e.jpg', '2024-02-26 05:51:44', '2024-02-26 05:51:44'),
(104, 'PRGE89170BD20240226', 'PRO440FB68E20240222', '/uploads/project_galary_img/e64913957f12268248fbfe5dbc383c76.jpg', '2024-02-26 05:51:53', '2024-02-26 05:51:53'),
(106, 'PRGA207EA9620240226', 'PRO440FB68E20240222', '/uploads/project_galary_img/799e0d91aecb603933dabb8dc79d5b8c.jpg', '2024-02-26 05:53:23', '2024-02-26 05:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `quote_by` varchar(255) NOT NULL,
  `quote_img` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `type_id` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `uid`, `quote`, `quote_by`, `quote_img`, `position`, `type`, `type_id`, `created_at`, `updated_at`) VALUES
(1, 'QOT564678GHFGJVTR', '\"The best way to find yourself is to lose yourself in the service of others.\"\r\n\r\n', 'Mahatma Gandhi', '', 'top', 'home', NULL, '2024-02-05 11:22:15', '2024-02-05 11:22:15'),
(2, 'QOT5645678GFHHJU', 'Where the mind is without fear and the head is held high into the heaven of freedom. My father, let my country awake.', 'Rabindranath Thakur', '/uploads/quotes_img/5cd08844778f089fad792e1f22820117.png', 'bottom', 'home', NULL, '2024-02-06 10:54:09', '2024-02-06 10:54:09'),
(4, 'QT00536F1620240220', 'abcd<', 'Rabindra nath tegore edited', '/uploads/quotes_img/090a9fcf43f274c5fca987b016857ef7.jpg', 'bottom', 'project', 'PRO1C2561EC20240220', '2024-02-20 15:40:11', '2024-02-20 15:40:11'),
(5, 'QTA2CDF5BD20240220', 'sfdcsgvvdvvsdsvdksvd', 'Najrul Islam', '/uploads/quotes_img/2d0419b2036b85c357ac2ce19e69101b.jpg', 'bottom', 'project', 'PRO60BEDDAB20240220', '2024-02-20 15:48:49', '2024-02-20 15:48:49'),
(6, 'QTB7CA84C220240220', 'Do not wait for the future. The future is now.', 'Swami Vivekananda', '/uploads/quotes_img/abfab5fb403188c267762dd751f9fa5b.png', 'bottom', 'project', 'PRO65B9343820240220', '2024-02-20 16:44:04', '2024-02-20 16:44:04'),
(7, 'QT689CD8C820240221', 'Gg', 'Gg', '/uploads/quotes_img/a6b57933a8cf1fef8cadfc80fb99f271.jpg', 'bottom', 'project', 'PROF248D03F20240221', '2024-02-20 18:37:23', '2024-02-20 18:37:23'),
(8, 'QT97952A4C20240222', 'True happiness is found in the service of others.', 'Mahatma Gandhi', '/uploads/quotes_img/d048bd652bd3aa0cbf0e48cfe2f851d4.png', 'bottom', 'project', 'PRO440FB68E20240222', '2024-02-22 03:34:10', '2024-02-22 03:34:10'),
(9, 'QTCB4B315D20240222', 'Arise, awake, and stop not until the goal is achieved.', 'Swami Vivekananda', '/uploads/quotes_img/fd029e472dc1f9cc32d834428294cd8e.png', 'bottom', 'project', 'PRO51A5012920240222', '2024-02-22 04:18:52', '2024-02-22 04:18:52'),
(10, 'QTCFB05D8D20240222', 'Arise, awake, and stop not until the goal is achieved.', 'Swami Vivekananda', '/uploads/quotes_img/12148237e698d1ba443671b365ce217e.png', 'bottom', 'project', 'PRO0E33123B20240222', '2024-02-22 04:26:11', '2024-02-22 04:26:11'),
(11, 'QT7568BDAA20240222', 'Democracy is good. I say this because other systems are worse.', 'Jawaharlal Nehru', '/uploads/quotes_img/8dc549a31e79bb15b5324affffd69749.png', 'bottom', 'project', 'PRO8A99CEBD20240222', '2024-02-22 05:44:54', '2024-02-22 05:44:54'),
(12, 'QTF0F66F4820240222', 'There is an important distinction between barriers to entry and barriers to imitation.”', 'C.K.Prahalad', '/uploads/quotes_img/52ee14c841d282e60b1de3c38925c3d1.jpg', 'bottom', 'project', 'PROD08B2D4A20240222', '2024-02-22 05:50:18', '2024-02-22 05:50:18'),
(13, 'QT62682B9E20240222', 'It is no measure of health to be well-adjusted to a profoundly sick society.\r\n', 'Jiddu Krishnamurti', '/uploads/quotes_img/437b57bbecd9e6202f36570941e08625.jpg', 'bottom', 'project', 'PROBFD59B3420240222', '2024-02-22 06:33:07', '2024-02-22 06:33:07'),
(14, 'QT5971DB8020240223', 'It is no measure of health to be well-adjusted to a profoundly sick society.', 'Jiddu Krishnamurti', '/uploads/quotes_img/6160c85588aa44a9eec709c710938487.jpg', 'bottom', 'project', 'PROA5448E8920240223', '2024-02-23 07:47:36', '2024-02-23 07:47:36'),
(15, 'QTC40E06A620240223', 'Freedom is not given, it is taken.', 'Subhas Chandra Bose', '/uploads/quotes_img/eecbc130e5b22999f7bf7c1ea59cbd6d.png', 'bottom', 'project', 'PROE311911220240223', '2024-02-23 08:26:11', '2024-02-23 08:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `uid`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(31, 'WDODEE61D3320240226', 'Empowering Women', 'At Shapath, we\'re committed to empowering women. Through education, skill-building, and advocacy, we pave the way for women to achieve their dreams. Together, we\'re shaping a future where every woman can lead with confidence and contribute to a thriving society. Join us in our mission to empower women and transform communities.', '/uploads/work_img/d9d4b6e0f96e3671ac54f103729c9c53.jpg', '2024-02-26 05:39:26', '2024-02-26 05:39:26'),
(32, 'WDO46843F9F20240226', 'Education', 'At Shapath, we\'re committed to nurturing children\'s holistic development. Through quality education, nutritious meals, and holistic support, we empower them to thrive. Our approach fosters lifelong skills, healthy habits, and well-rounded individuals ready to shape a brighter future. Join us in empowering tomorrow\'s leaders.', '/uploads/work_img/b6d4a7116df27e1bbd12f994a9c9ac5b.jpg', '2024-02-26 05:39:50', '2024-02-26 05:39:50'),
(33, 'WDO1FB9D1A920240226', 'Livelihood', 'At Shapath, we believe in providing skill training and placement support for underprivileged youth. Through our programs, we equip them with valuable skills and connect them with employment opportunities, empowering them to break the cycle of poverty and build a brighter future. Join us in transforming the lives of young individuals and creating pathways to success.', '/uploads/work_img/06db83237ac1ab43729e66b62fce9f5b.jpg', '2024-02-26 05:40:19', '2024-02-26 05:40:19'),
(34, 'WDOC73AEDA420240226', 'Children Development', 'At Shapath, we are dedicated to fostering comprehensive child development. Our initiatives focus on education, healthcare, and emotional well-being, ensuring that every child has the opportunity to reach their full potential. Through targeted programs, community engagement, and parental support, we strive to create an environment where children thrive and grow into confident, capable individuals. Join us in shaping a brighter future for our children.', '/uploads/work_img/a41976cc707ba57091200fea391a42ad.jpg', '2024-02-26 05:40:48', '2024-02-26 05:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(1, 'USR49TYOJ127856', 'QB', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2024-02-03 11:21:43', '2024-02-03 11:21:43');

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
(1, 'UMSG05E17B0620240215', 'Rohan ', 'skrohan0420@gmail.com', '6290353314', 'erwtf', 'fwetw3ety', '2024-02-15 16:18:35', '2024-02-15 16:18:35'),
(2, 'UMSG41E16C8020240215', 'Arijit', 'admin@gmail.com', '91233 25003', 'asd', 'afdsad', '2024-02-15 17:05:26', '2024-02-15 17:05:26'),
(3, 'UMSGEA7AEB3620240215', 'Casey Frawley Frawley', 'frawley.casey63@gmail.com', '06-76185797', 'I have some bad news for you', 'Hello,\r\n\r\nUnfortunately I have some bad news for you.\r\n\r\nI wanted to write to you here about the fingerprint of your scanner thanks to an app/plugin that I cannot name for privacy reasons. \r\n\r\nEvery Scanner has an identification number. Browser fingerprints are more powerful than a trojan. Since we know what you do, what websites you have, what kind of videos you watch, your fingerprint is proof that you did it. With the system we have, we keep log records of these (as I said above, I won\'t name it now). I don\'t want to embarrass you, just do what\'s necessary.\r\n\r\nWith this system we can track all your activities (even if you use an incognito tab)\r\n\r\nUnfortunately, you have a lot of illegal activities on the Internet. \r\n\r\nYou know very well what your illegal activities are... it\'s not nice. It may not be right to name names here, because I don\'t want to reveal your information yet.\r\n\r\nWe\'re supposed to report this kind of activity. But I have good news for you now.\r\n\r\nAll you have to do is; Sending between 0.02 and 0.20 bitcoins to the bitcoin (BTC network) address I will give you.\r\n\r\nOnce you do that, you will know how I catch you, how I track you. You will use the internet more safely.\r\n\r\nIf you don\'t send me bitcoins, you will receive a high penalty for what you have done. You have 3 days.\r\n\r\nBe sure, I keep my promises.\r\n\r\nYou can easily buy Bitcoin (BTC) here:\r\n\r\nhttps://cex.io/buy-bitcoins\r\nhttps://nexo.com/buy-crypto/bitcoin-btc\r\nhttps://bitpay.com/buy-bitcoin/?crypto=BTC\r\nhttps://paybis.com/\r\nhttps://invity.io/buy-crypto\r\n\r\nOr simply google other exchanger.\r\n\r\nAfter that send the Bitcoin (BTC) directly to my wallet, or install the free software: Atomicwallet, or: Exodus wallet, then receive and send to mine.\r\n\r\nMy Bitcoin (BTC) address is: \r\n\r\nbc1q9708we8uafdkd33kuae696r03k90nzwdr7d0y7\r\n\r\nYes, that\'s how the address looks like, copy and paste my address, it\'s (cAsE-sEnSEtiVE).\r\n\r\nYou are aware that you have committed a huge crime. Instead of paying the penalty for this, send us a tip. And let us teach you privacy. We want to do this in a friendly way.\r\n\r\nHave a good day.', '2024-02-15 19:53:07', '2024-02-15 19:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `uid`, `path`, `type`, `page`, `created_at`, `updated_at`) VALUES
(1, 'VDO34567GKFJJKGGHJ', 'https://www.youtube.com/embed/ox3VFMNBXjA?&unmute=1&loop=1&playlist=ox3VFMNBXjA', 'url', 'home', '2024-02-05 11:25:55', '2024-02-05 11:25:55');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` int(11) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `volunteer_about` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `uid`, `name`, `volunteer_about`, `img`, `created_at`, `updated_at`) VALUES
(10, 'VOLUNTEERB1EC2D6320240212', 'Subhankar Sharma', 'i am subhankar sharma.', '/uploads/volunteers_img/91ffcf082d4cdd7bc948fb3bc192982c.jpg', '2024-02-12 13:20:34', '2024-02-12 13:20:34'),
(12, 'VOLUNTEERA5F0F34C20240213', 'Rohan ', 'hrthrh', '/uploads/volunteers_img/331781c40e8bd493f2c22ed155d49dea.jpg', '2024-02-13 11:56:30', '2024-02-13 11:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_img`
--
ALTER TABLE `gallery_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission_vision`
--
ALTER TABLE `mission_vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_events`
--
ALTER TABLE `project_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `causes`
--
ALTER TABLE `causes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery_img`
--
ALTER TABLE `gallery_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mission_vision`
--
ALTER TABLE `mission_vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `project_events`
--
ALTER TABLE `project_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_message`
--
ALTER TABLE `user_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
