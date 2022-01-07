-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2022 at 10:58 AM
-- Server version: 10.0.38-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trinityng_tricol`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `user` varchar(200) DEFAULT NULL,
  `activity` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `user`, `activity`, `created`) VALUES
(227, 'admin@admin.com', 'User login', '2020-09-17 20:09:06'),
(228, 'admin@admin.com', 'User login', '2020-09-18 13:26:56'),
(229, 'admin@admin.com', 'User login', '2020-09-20 17:46:44'),
(230, 'admin@admin.com', 'User login', '2020-09-23 14:37:47'),
(231, 'admin@admin.com', 'User login', '2020-10-05 15:03:50'),
(232, 'admin@admin.com', 'User login', '2020-10-05 20:05:24'),
(233, 'admin@admin.com', 'User login', '2020-10-23 12:14:57'),
(234, 'admin@admin.com', 'User login', '2020-11-03 11:09:29'),
(235, 'admin@admin.com', 'User login', '2020-11-18 13:17:18'),
(236, 'admin@admin.com', 'User login', '2020-11-24 16:26:32'),
(237, 'admin@admin.com', 'User login', '2020-11-28 11:13:02'),
(238, 'admin@admin.com', 'User login', '2020-12-14 15:46:14'),
(239, 'admin@admin.com', 'User login', '2020-12-17 16:33:10'),
(240, 'admin@admin.com', 'User login', '2020-12-21 13:10:59'),
(241, 'admin@admin.com', 'User login', '2020-12-22 18:05:47'),
(242, 'admin@admin.com', 'User login', '2020-12-29 11:56:58'),
(243, 'admin@admin.com', 'User login', '2020-12-29 16:22:17'),
(244, 'admin@admin.com', 'User login', '2020-12-29 21:04:18'),
(245, 'admin@admin.com', 'User login', '2021-01-01 20:34:24'),
(246, 'admin@admin.com', 'User login', '2021-01-07 15:11:51'),
(247, 'admin@admin.com', 'User login', '2021-01-12 11:24:17'),
(248, 'admin@admin.com', 'User login', '2021-01-13 21:29:20'),
(249, 'admin@admin.com', 'User login', '2021-01-18 15:13:24'),
(250, 'admin@admin.com', 'User login', '2021-01-19 12:35:03'),
(251, 'admin@admin.com', 'User login', '2021-01-22 17:03:30'),
(252, 'admin@admin.com', 'User login', '2021-01-22 17:03:50'),
(253, 'admin@admin.com', 'User login', '2021-01-22 17:04:51'),
(254, 'admin@admin.com', 'User login', '2021-01-23 09:43:58'),
(255, 'admin@admin.com', 'User login', '2021-01-23 09:46:03'),
(256, 'admin@admin.com', 'User login', '2021-01-23 09:47:14'),
(257, 'admin@admin.com', 'User login', '2021-01-23 17:57:14'),
(258, 'admin@admin.com', 'User login', '2021-01-23 19:51:06'),
(259, 'admin@admin.com', 'User login', '2021-01-30 11:25:12'),
(260, 'admin@admin.com', 'User login', '2021-01-30 16:11:18'),
(261, 'admin@admin.com', 'User login', '2021-02-01 12:56:29'),
(262, 'admin@admin.com', 'User login', '2021-02-01 13:13:32'),
(263, 'john@affiliate.com', 'User login', '2021-02-01 13:17:38'),
(264, 'john@affiliate.com', 'User login', '2021-02-01 13:17:52'),
(265, 'admin@admin.com', 'User login', '2021-02-01 13:38:26'),
(266, 'admin@admin.com', 'User login', '2021-02-01 13:42:27'),
(267, 'admin@admin.com', 'User login', '2021-02-01 13:43:12'),
(268, 'admin@admin.com', 'User login', '2021-02-01 14:34:25'),
(269, 'admin@admin.com', 'User login', '2021-02-01 14:35:34'),
(270, 'info@test.com', 'User login', '2021-02-01 14:36:02'),
(271, 'info@test.com', 'User login', '2021-02-01 14:36:19'),
(272, 'info@test.com', 'User login', '2021-02-01 14:38:02'),
(273, 'info@test.com', 'User login', '2021-02-01 14:41:54'),
(274, 'info@test.com', 'User login', '2021-02-01 14:43:20'),
(275, 'info@test.com', 'User login', '2021-02-01 14:44:40'),
(276, 'info@test.com', 'User login', '2021-02-01 14:45:39'),
(277, 'info@test.com', 'User login', '2021-02-01 14:48:35'),
(278, 'info@test.com', 'User login', '2021-02-01 14:52:25'),
(279, 'info@test.com', 'User login', '2021-02-01 14:53:40'),
(280, 'admin@admin.com', 'User login', '2021-02-03 13:27:25'),
(281, 'a.affiliate@yahoo.com', 'User login', '2021-02-03 13:48:52'),
(282, 'admin@admin.com', 'User login', '2021-02-03 13:53:46'),
(283, 'a.affiliate@yahoo.com', 'User login', '2021-02-03 14:04:38'),
(284, 'a.affiliate@yahoo.com', 'User login', '2021-02-03 14:05:08'),
(285, 'sholasqz@gmail.com', 'User login', '2021-02-03 14:07:59'),
(286, 'admin@admin.com', 'User login', '2021-02-08 10:45:56'),
(287, 'a.affiliate@yahoo.com', 'User login', '2021-02-08 21:24:23'),
(288, 'g.jane@yahoo.com', 'User login', '2021-02-10 09:56:53'),
(289, 'admin@admin.com', 'User login', '2021-02-10 09:57:44'),
(290, 'g.jane@yahoo.com', 'User login', '2021-02-10 10:00:31'),
(291, 'g.jane@yahoo.com', 'User login', '2021-02-10 10:04:32'),
(292, 'g.jane@yahoo.com', 'User login', '2021-02-10 10:19:40'),
(293, 'oke.james@gmail.com', 'User login', '2021-02-10 10:44:01'),
(294, 'oke.james@gmail.com', 'User login', '2021-02-10 16:49:52'),
(295, 'oke.james@gmail.com', 'User login', '2021-02-11 07:53:25'),
(296, 'admin@admin.com', 'User login', '2021-02-11 09:17:09'),
(297, 's.ojo@hybridsoft.com.ng', 'User login', '2021-02-11 10:24:07'),
(298, 'admin@admin.com', 'User login', '2021-02-11 10:53:39'),
(299, 'sholasolomon@yahoo.com', 'User login', '2021-02-12 10:26:35'),
(300, 'raylaymond@gmail.com', 'User login', '2021-02-13 05:43:36'),
(301, 'raylaymond@gmail.com', 'User login', '2021-02-13 06:08:50'),
(302, 'sholasolomon@yahoo.com', 'User login', '2021-02-13 12:28:27'),
(303, 'sholasolomon@yahoo.com', 'User login', '2021-02-13 12:53:29'),
(304, 'komolafeonome@yahoo.com', 'User login', '2021-02-13 13:58:21'),
(305, 'komolafeonome@yahoo.com', 'User login', '2021-02-13 14:09:49'),
(306, 'sholasolomon@yahoo.com', 'User login', '2021-02-13 14:55:31'),
(307, 'admin@admin.com', 'User login', '2021-02-13 15:28:06'),
(308, 'admin@admin.ng', 'User login', '2021-02-13 15:33:33'),
(309, 'boboyeafolabi@gmail.com', 'User login', '2021-02-13 15:36:59'),
(310, 'dele.raymond@trinityng.com', 'User login', '2021-02-13 15:38:54'),
(311, 'boboyeafolabi@gmail.com', 'User login', '2021-02-13 15:39:21'),
(312, 'raylaymond@gmail.com', 'User login', '2021-02-13 16:12:29'),
(313, 'boboyeafolabi@gmail.com', 'User login', '2021-02-15 09:14:30'),
(314, 'boboyeafolabi@gmail.com', 'User login', '2021-02-15 09:24:05'),
(315, 'dele.raymond@trinityng.com', 'User login', '2021-02-15 09:27:44'),
(316, 'smithiemuk@yahoo.com', 'User login', '2021-02-15 12:18:41'),
(317, 'oyinkanawosika@gmail.com', 'User login', '2021-02-15 13:49:14'),
(318, 'admin@admin.com', 'User login', '2021-02-15 15:18:14'),
(319, 'anobisarha@gmail.com', 'User login', '2021-02-15 15:40:24'),
(320, 'sholasolomon@yahoo.com', 'User login', '2021-02-15 16:17:08'),
(321, 'sholasolomon@yahoo.com', 'User login', '2021-02-15 16:26:07'),
(322, 'sholasolomon@yahoo.com', 'User login', '2021-02-16 10:22:20'),
(323, 'sholasolomon@yahoo.com', 'User login', '2021-02-16 13:11:33'),
(324, 'dele.raymond@gmail.com', 'User login', '2021-02-17 04:55:48'),
(325, 'a.affiliate@yahoo.com', 'User login', '2021-02-17 10:50:09'),
(326, 'a.affiliate@yahoo.com', 'User login', '2021-02-17 10:51:30'),
(327, 's.ojo@hybridsoft.com.ng', 'User login', '2021-02-17 11:02:34'),
(328, 'dele.raymond@gmail.com', 'User login', '2021-02-17 18:21:13'),
(329, 'marketing@trinityng.com', 'User login', '2021-02-18 10:52:07'),
(330, 'marketing@trinityng.com', 'User login', '2021-02-18 10:52:54'),
(331, 'marketing@trinityng.com', 'User login', '2021-02-18 10:54:26'),
(332, 'admin@admin.com', 'User login', '2021-02-18 11:03:50'),
(333, 'dele.raymond@gmail.com', 'User login', '2021-02-18 11:04:16'),
(334, 'marketing@trinityng.com', 'User login', '2021-02-18 11:06:42'),
(335, 'marketing@trinityng.com', 'User login', '2021-02-18 11:13:10'),
(336, 'admin@admin.com', 'User login', '2021-02-18 11:13:49'),
(337, 'boboyeafolabi@gmail.com', 'User login', '2021-02-18 11:39:16'),
(338, 'boboyeafolabi@gmail.com', 'User login', '2021-02-18 11:46:04'),
(339, 'marketing@trinityng.com', 'User login', '2021-02-18 12:02:54'),
(340, 'info@tedf.org.ng', 'User login', '2021-02-18 12:19:02'),
(341, 'marketing@trinityng.com', 'User login', '2021-02-18 12:25:36'),
(342, 'marketing@trinityng.com', 'User login', '2021-02-18 12:56:10'),
(343, 'jonathanenudi@gmail.com', 'User login', '2021-02-18 15:40:00'),
(344, 'marketing@trinityng.com', 'User login', '2021-02-18 15:56:48'),
(345, 'smithmukoro47@gmail.com', 'User login', '2021-02-18 16:00:44'),
(346, 'jonathanenudi@gmail.com', 'User login', '2021-02-18 16:30:35'),
(347, 'marketing@trinityng.com', 'User login', '2021-02-18 17:10:03'),
(348, 'marketing@trinityng.com', 'User login', '2021-02-19 08:03:06'),
(349, 'jonathan.enudi@yahoo.com', 'User login', '2021-02-19 10:57:34'),
(350, 'marketing@trinityng.com', 'User login', '2021-02-19 11:26:18'),
(351, 'boboyeafolabi@gmail.com', 'User login', '2021-02-19 11:42:39'),
(352, 'boboyeafolabi@gmail.com', 'User login', '2021-02-19 11:45:37'),
(353, 'boboyeafolabi@gmail.com', 'User login', '2021-02-19 11:45:41'),
(354, 'admin@admin.com', 'User login', '2021-02-19 12:00:30'),
(355, 'jonathan.enudi@yahoo.com', 'User login', '2021-02-19 12:46:51'),
(356, 'marketing@trinityng.com', 'User login', '2021-02-19 13:21:41'),
(357, 'boboyeafolabi@gmail.com', 'User login', '2021-02-19 13:58:04'),
(358, 'dele.raymond@gmail.com', 'User login', '2021-02-19 14:28:48'),
(359, 'admin@admin.com', 'User login', '2021-02-19 14:43:19'),
(360, 'amygifted86@gmail.com', 'User login', '2021-02-19 15:06:07'),
(361, 'boboyeafolabi@gmail.com', 'User login', '2021-02-19 16:41:51'),
(362, 'boboyeafolabi@gmail.com', 'User login', '2021-02-19 16:50:56'),
(363, 'marketing@trinityng.com', 'User login', '2021-02-20 13:52:55'),
(364, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-20 14:15:32'),
(365, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-20 14:20:03'),
(366, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-20 14:31:13'),
(367, 'admin@admin.com', 'User login', '2021-02-20 15:07:56'),
(368, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 15:12:50'),
(369, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 15:27:30'),
(370, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 15:29:02'),
(371, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 15:59:22'),
(372, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:04:17'),
(373, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:14:22'),
(374, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:17:10'),
(375, 'admin@admin.com', 'User login', '2021-02-20 16:20:49'),
(376, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:22:52'),
(377, 'marketing@trinityng.com', 'User login', '2021-02-20 16:23:07'),
(378, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:29:35'),
(379, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:36:35'),
(380, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:40:12'),
(381, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 16:51:27'),
(382, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 17:10:39'),
(383, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-20 17:11:26'),
(384, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 17:43:22'),
(385, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 17:45:37'),
(386, 'dele.preciouscomfort@gmail.com', 'User login', '2021-02-20 17:47:24'),
(387, 'marketing@trinityng.com', 'User login', '2021-02-20 17:56:55'),
(388, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-20 21:09:07'),
(389, 'marketing@trinityng.com', 'User login', '2021-02-22 00:08:26'),
(390, 'boboyeafolabi@gmail.com', 'User login', '2021-02-22 08:32:20'),
(391, 'admin@admin.com', 'User login', '2021-02-22 09:18:51'),
(392, 'admin@admin.com', 'User login', '2021-02-22 09:29:26'),
(393, 'marketing@trinityng.com', 'User login', '2021-02-22 10:40:33'),
(394, 'boboyeafolabi@gmail.com', 'User login', '2021-02-22 10:43:40'),
(395, 'marketing@trinityng.com', 'User login', '2021-02-22 11:42:17'),
(396, 'admin@admin.com', 'User login', '2021-02-22 11:47:37'),
(397, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-22 11:59:30'),
(398, 'boboyeafolabii@gmail.com', 'User login', '2021-02-22 12:37:15'),
(399, 'chika4god07@yahoo.com', 'User login', '2021-02-22 12:39:10'),
(400, 'boboyeafolabii@gmail.com', 'User login', '2021-02-22 12:55:01'),
(401, 'boboyeafolabii@gmail.com', 'User login', '2021-02-22 13:03:47'),
(402, 'boboyeafolabii@gmail.com', 'User login', '2021-02-22 13:12:34'),
(403, 'boboyeafolabi@gmail.com', 'User login', '2021-02-22 13:36:33'),
(404, 'boboyeafolabii@gmail.com', 'User login', '2021-02-22 13:43:51'),
(405, 'boboyeafolabii@gmail.com', 'User login', '2021-02-22 13:45:01'),
(406, 'marketing@trinityng.com', 'User login', '2021-02-22 14:22:28'),
(407, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-22 15:29:44'),
(408, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-02-22 15:29:55'),
(409, 'marketing@trinityng.com', 'User login', '2021-02-22 15:46:37'),
(410, 'marketing@trinityng.com', 'User login', '2021-02-23 04:21:20'),
(411, 'marketing@trinityng.com', 'User login', '2021-02-23 08:15:32'),
(412, 'admin@admin.com', 'User login', '2021-02-23 09:02:51'),
(413, 'marketing@trinityng.com', 'User login', '2021-02-23 09:20:18'),
(414, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 09:54:24'),
(415, 'boboyeafolabi@gmail.com', 'User login', '2021-02-23 10:06:48'),
(416, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 10:23:39'),
(417, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 10:49:18'),
(418, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 10:51:55'),
(419, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 11:02:29'),
(420, 'admin@admin.com', 'User login', '2021-02-23 11:06:00'),
(421, 'marketing@trinityng.com', 'User login', '2021-02-23 11:57:48'),
(422, 'marketing@trinityng.com', 'User login', '2021-02-23 12:47:35'),
(423, 'admin@admin.com', 'User login', '2021-02-23 12:50:10'),
(424, 'boboyeafolabi@gmail.com', 'User login', '2021-02-23 12:51:17'),
(425, 'olasunade@yahoo.com', 'User login', '2021-02-23 12:52:19'),
(426, 'olasunade@yahoo.com', 'User login', '2021-02-23 12:52:51'),
(427, 'olasunade@yahoo.com', 'User login', '2021-02-23 12:58:53'),
(428, 'olasunade@yahoo.com', 'User login', '2021-02-23 13:14:46'),
(429, 'olasunade@yahoo.com', 'User login', '2021-02-23 13:17:04'),
(430, 'olasunade@yahoo.com', 'User login', '2021-02-23 13:33:27'),
(431, 'olasunade@yahoo.com', 'User login', '2021-02-23 13:39:40'),
(432, 'bode_5@yahoo.com', 'User login', '2021-02-23 13:47:30'),
(433, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 13:53:01'),
(434, 'marketing@trinityng.com', 'User login', '2021-02-23 13:53:42'),
(435, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-23 13:55:54'),
(436, 'sholasolomon@yahoo.com', 'User login', '2021-02-23 15:20:52'),
(437, 'sholasolomon@yahoo.com', 'User login', '2021-02-23 15:23:36'),
(438, 'sholasolomon@yahoo.com', 'User login', '2021-02-23 15:29:19'),
(439, 'marketing@trinityng.com', 'User login', '2021-02-23 16:49:18'),
(440, 'marketing@trinityng.com', 'User login', '2021-02-23 18:17:07'),
(441, 'marketing@trinityng.com', 'User login', '2021-02-23 21:18:45'),
(442, 'boboyeafolabi@gmail.com', 'User login', '2021-02-24 08:04:14'),
(443, 'marketing@trinityng.com', 'User login', '2021-02-24 08:46:43'),
(444, 'trinityat20@gmail.com', 'User login', '2021-02-24 08:57:42'),
(445, 'eddytim4u@gmail.com', 'User login', '2021-02-24 09:03:49'),
(446, 'bernardaina@yahoo.com', 'User login', '2021-02-24 09:14:16'),
(447, 'bernardaina@yahoo.com', 'User login', '2021-02-24 09:18:33'),
(448, 'eddytim4u@gmail.com', 'User login', '2021-02-24 09:53:54'),
(449, 'marketing@trinityng.com', 'User login', '2021-02-24 10:24:36'),
(450, 'getrowe@yahoo.com', 'User login', '2021-02-24 10:32:31'),
(451, 'boboyeafolabi@gmail.com', 'User login', '2021-02-24 11:38:13'),
(452, 'imaobongj@yahoo.com', 'User login', '2021-02-24 11:39:06'),
(453, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-02-24 15:01:19'),
(454, 'bimbora1010@gmail.com', 'User login', '2021-02-25 21:40:01'),
(455, 'SAMOJES@YAHOO.COM', 'User login', '2021-02-26 02:39:17'),
(456, 'yinkabose@yahoo.com', 'User login', '2021-02-26 04:34:26'),
(457, 'yinkabose@yahoo.com', 'User login', '2021-02-26 04:42:06'),
(458, 'yinkabose@yahoo.com', 'User login', '2021-02-26 04:48:23'),
(459, 'marketing@trinityng.com', 'User login', '2021-02-26 09:10:30'),
(460, 'yinkabose@yahoo.com', 'User login', '2021-02-26 16:08:36'),
(461, 'abussygirl@yahoo.com', 'User login', '2021-02-26 16:11:16'),
(462, 'yinkabose@yahoo.com', 'User login', '2021-02-26 16:37:29'),
(463, 'yinkabose@yahoo.com', 'User login', '2021-02-26 16:39:37'),
(464, 'yinkabose@yahoo.com', 'User login', '2021-02-26 16:44:01'),
(465, 'yinkabose@yahoo.com', 'User login', '2021-02-27 09:47:14'),
(466, 'yinkabose@yahoo.com', 'User login', '2021-02-27 09:58:04'),
(467, 'marketing@trinityng.com', 'User login', '2021-02-27 15:07:34'),
(468, 'marketing@trinityng.com', 'User login', '2021-02-28 05:04:27'),
(469, 'mindlaw2000@yahoo.com', 'User login', '2021-02-28 07:30:39'),
(470, 'marketing@trinityng.com', 'User login', '2021-02-28 10:39:54'),
(471, 'marketing@trinityng.com', 'User login', '2021-02-28 14:36:38'),
(472, 'marketing@trinityng.com', 'User login', '2021-02-28 20:04:33'),
(473, 'marketing@trinityng.com', 'User login', '2021-03-01 07:48:52'),
(474, 'admin@admin.com', 'User login', '2021-03-01 09:42:46'),
(475, 'marketing@trinityng.com', 'User login', '2021-03-01 11:04:36'),
(476, 'oyeleyeoluyombo@yahoo.com', 'User login', '2021-03-01 12:22:49'),
(477, 'marketing@trinityng.com', 'User login', '2021-03-01 12:30:07'),
(478, 'marketing@trinityng.com', 'User login', '2021-03-01 12:32:10'),
(479, 'elyonjfy@yahoo.com', 'User login', '2021-03-01 12:43:18'),
(480, 'edwardifeanyijp@gmail.com', 'User login', '2021-03-01 12:51:06'),
(481, 'taiwooluwaseun55@yahoo.com', 'User login', '2021-03-01 12:53:50'),
(482, 'funke.abioye@yahoo.com', 'User login', '2021-03-01 13:36:54'),
(483, 'funke.abioye@yahoo.com', 'User login', '2021-03-01 13:47:09'),
(484, 'solujosun@gmail.com', 'User login', '2021-03-01 14:31:21'),
(485, 'SAMOJES@YAHOO.COM', 'User login', '2021-03-01 14:58:37'),
(486, 'marketing@trinityng.com', 'User login', '2021-03-01 15:28:16'),
(487, 'muyiwafagbemi@yahoo.co.uk', 'User login', '2021-03-01 15:54:01'),
(488, 'nellyomo03@gmail.com', 'User login', '2021-03-01 16:17:58'),
(489, 'nellyomo03@gmail.com', 'User login', '2021-03-01 16:18:38'),
(490, 'mindlaw2000@yahoo.com', 'User login', '2021-03-01 16:27:43'),
(491, 'mindlaw2000@yahoo.com', 'User login', '2021-03-01 16:43:38'),
(492, 'edwardifeanyijp@gmail.com', 'User login', '2021-03-01 17:36:27'),
(493, 'boboyeafolabi@gmail.com', 'User login', '2021-03-01 18:33:49'),
(494, 'boboyeafolabi@gmail.com', 'User login', '2021-03-01 18:36:18'),
(495, 'edwardifeanyijp@gmail.com', 'User login', '2021-03-01 19:18:16'),
(496, 'marketing@trinityng.com', 'User login', '2021-03-01 20:41:25'),
(497, 'marketing@trinityng.com', 'User login', '2021-03-01 22:11:34'),
(498, 'mindlaw2000@yahoo.com', 'User login', '2021-03-02 05:42:48'),
(499, 'marketing@trinityng.com', 'User login', '2021-03-02 06:31:36'),
(500, 'marketing@trinityng.com', 'User login', '2021-03-02 07:35:07'),
(501, 'ojo.omoleye16@kwasu.edu.ng', 'User login', '2021-03-02 08:09:37'),
(502, 'chika4god07@yahoo.com', 'User login', '2021-03-02 10:01:01'),
(503, 'marketing@trinityng.com', 'User login', '2021-03-02 10:19:25'),
(504, 'marketing@trinityng.com', 'User login', '2021-03-02 10:20:17'),
(505, 'chika4god07@yahoo.com', 'User login', '2021-03-02 10:27:28'),
(506, 'chika4god07@yahoo.com', 'User login', '2021-03-02 10:39:29'),
(507, 'solujosun@gmail.com', 'User login', '2021-03-02 10:43:45'),
(508, 'marketing@trinityng.com', 'User login', '2021-03-02 12:14:56'),
(509, 'chika4god07@yahoo.com', 'User login', '2021-03-02 12:29:53'),
(510, 'marketing@trinityng.com', 'User login', '2021-03-02 13:15:58'),
(511, 'marketing@trinityng.com', 'User login', '2021-03-02 15:25:25'),
(512, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-02 20:01:43'),
(513, 'marketing@trinityng.com', 'User login', '2021-03-03 07:41:31'),
(514, 'marketing@trinityng.com', 'User login', '2021-03-03 07:42:15'),
(515, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-03 08:27:24'),
(516, 'abussygirl@yahoo.com', 'User login', '2021-03-03 09:56:49'),
(517, 'abussygirl@gmail.com', 'User login', '2021-03-03 09:57:32'),
(518, 'marketing@trinityng.com', 'User login', '2021-03-03 10:26:56'),
(519, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-03 10:43:57'),
(520, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-03 11:31:19'),
(521, 'marketing@trinityng.com', 'User login', '2021-03-03 13:29:33'),
(522, 'marketing@trinityng.com', 'User login', '2021-03-03 15:27:20'),
(523, 'omomogloria@gmail.com', 'User login', '2021-03-03 15:42:00'),
(524, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-03 17:13:28'),
(525, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-03 19:10:27'),
(526, 'marketing@trinityng.com', 'User login', '2021-03-04 08:39:44'),
(527, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-04 10:20:03'),
(528, 'marketing@trinityng.com', 'User login', '2021-03-04 11:48:37'),
(529, 'muhammadbaba1023@gmail.com', 'User login', '2021-03-04 12:37:16'),
(530, 'imaobongj@yahoo.com', 'User login', '2021-03-04 13:52:17'),
(531, 'amygifted86@gmail.com', 'User login', '2021-03-04 13:56:51'),
(532, 'amygifted86@gmail.com', 'User login', '2021-03-04 15:47:03'),
(533, 'boboyeafolabi@gmail.com', 'User login', '2021-03-04 15:50:20'),
(534, 'biguncle_1@yahoo.co.uk', 'User login', '2021-03-04 16:08:07'),
(535, 'chika4god07@yahoo.com', 'User login', '2021-03-05 01:35:18'),
(536, 'chika4god07@yahoo.com', 'User login', '2021-03-05 01:38:18'),
(537, 'chika4god07@yahoo.com', 'User login', '2021-03-05 01:38:43'),
(538, 'chika4god07@yahoo.com', 'User login', '2021-03-05 02:16:20'),
(539, 'boboyeafolabi@gmail.com', 'User login', '2021-03-05 06:24:51'),
(540, 'marketing@trinityng.com', 'User login', '2021-03-05 07:47:32'),
(541, 'chika4god07@yahoo.com', 'User login', '2021-03-05 08:04:45'),
(542, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-05 08:27:25'),
(543, 'chika4god07@yahoo.com', 'User login', '2021-03-05 09:05:54'),
(544, 'chika4god07@yahoo.com', 'User login', '2021-03-05 10:28:23'),
(545, 'marketing@trinityng.com', 'User login', '2021-03-05 10:57:31'),
(546, 'boboyeafolabi@gmail.com', 'User login', '2021-03-05 13:17:01'),
(547, 'marketing@trinityng.com', 'User login', '2021-03-05 14:13:33'),
(548, 'marketing@trinityng.com', 'User login', '2021-03-05 17:07:52'),
(549, 'marketing@trinityng.com', 'User login', '2021-03-05 18:02:03'),
(550, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-05 20:06:40'),
(551, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-05 21:40:12'),
(552, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-05 22:01:47'),
(553, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-05 22:18:16'),
(554, 'marketing@trinityng.com', 'User login', '2021-03-05 22:36:46'),
(555, 'marketing@trinityng.com', 'User login', '2021-03-06 12:35:57'),
(556, 'funke.abioye@yahoo.com', 'User login', '2021-03-06 14:52:58'),
(557, 'funke.abioye@yahoo.com', 'User login', '2021-03-06 16:33:01'),
(558, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-07 10:55:30'),
(559, 'marketing@trinityng.com', 'User login', '2021-03-07 13:32:10'),
(560, 'abussygirl@gmail.com', 'User login', '2021-03-07 20:22:23'),
(561, 'chika4god07@yahoo.com', 'User login', '2021-03-08 06:42:31'),
(562, 'chika4god07@yahoo.com', 'User login', '2021-03-08 06:46:08'),
(563, 'solujosun@gmail.com', 'User login', '2021-03-08 07:28:26'),
(564, 'solujosun@gmail.com', 'User login', '2021-03-08 08:33:53'),
(565, 'marketing@trinityng.com', 'User login', '2021-03-08 08:54:52'),
(566, 'marketing@trinityng.com', 'User login', '2021-03-08 09:01:20'),
(567, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-08 09:25:32'),
(568, 'marketing@trinityng.com', 'User login', '2021-03-08 09:52:25'),
(569, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-08 12:15:59'),
(570, 'marketing@trinityng.com', 'User login', '2021-03-08 13:51:39'),
(571, 'solujosun@gmail.com', 'User login', '2021-03-08 14:54:23'),
(572, 'trinitypjs@gmail.com', 'User login', '2021-03-08 14:59:58'),
(573, 'solujosun@gmail.com', 'User login', '2021-03-08 15:03:08'),
(574, 'marketing@trinityng.com', 'User login', '2021-03-08 15:03:10'),
(575, 'marketing@trinityng.com', 'User login', '2021-03-08 15:05:47'),
(576, 'marketing@trinityng.com', 'User login', '2021-03-08 15:06:22'),
(577, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-08 15:06:38'),
(578, 'solujosun@yahoo.co.uk', 'User login', '2021-03-08 15:12:29'),
(579, 'admin@admin.com', 'User login', '2021-03-08 15:14:07'),
(580, 'marketing@trinityng.com', 'User login', '2021-03-08 15:24:11'),
(581, 'marketing@trinityng.com', 'User login', '2021-03-08 15:26:46'),
(582, 'sholasolomon@yahoo.com', 'User login', '2021-03-08 15:38:01'),
(583, 'boboyeafolabi@gmail.com', 'User login', '2021-03-08 15:41:36'),
(584, 'sholasolomon@yahoo.com', 'User login', '2021-03-08 18:09:11'),
(585, 'abussygirl@gmail.com', 'User login', '2021-03-08 18:10:05'),
(586, 'mindlaw2000@yahoo.com', 'User login', '2021-03-08 18:11:46'),
(587, 'admin@admin.com', 'User login', '2021-03-08 18:15:39'),
(588, 'admin@admin.com', 'User login', '2021-03-08 18:16:19'),
(589, 'solujosun@yahoo.co.uk', 'User login', '2021-03-08 20:19:17'),
(590, 'marketing@trinityng.com', 'User login', '2021-03-09 05:38:31'),
(591, 'boboyeafolabi@gmail.com', 'User login', '2021-03-09 07:09:22'),
(592, 'tosinadebamiro@gmail.com', 'User login', '2021-03-09 07:43:30'),
(593, 'marketing@trinityng.com', 'User login', '2021-03-09 07:47:29'),
(594, 'marketing@trinityng.com', 'User login', '2021-03-09 08:40:20'),
(595, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-09 08:40:47'),
(596, 'tosinadebamiro@gmail.com', 'User login', '2021-03-09 10:19:58'),
(597, 'amygifted86@gmail.com', 'User login', '2021-03-09 10:40:35'),
(598, 'sholasolomon@yahoo.com', 'User login', '2021-03-09 11:02:01'),
(599, 'admin@admin.com', 'User login', '2021-03-09 11:03:15'),
(600, 'marketing@trinityng.com', 'User login', '2021-03-09 11:15:04'),
(601, 'funke.abioye@yahoo.com', 'User login', '2021-03-09 11:40:32'),
(602, 'bimbora1010@gmail.com', 'User login', '2021-03-09 12:01:43'),
(603, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-09 12:07:14'),
(604, 'marketing@trinityng.com', 'User login', '2021-03-09 12:11:42'),
(605, 'komolafeonome@yahoo.com', 'User login', '2021-03-09 13:34:25'),
(606, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-09 17:23:45'),
(607, 'marketing@trinityng.com', 'User login', '2021-03-10 06:45:28'),
(608, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-10 07:11:09'),
(609, 'marketing@trinityng.com', 'User login', '2021-03-10 09:33:48'),
(610, 'admin@admin.com', 'User login', '2021-03-10 09:49:38'),
(611, 'tosinadebamiro@gmail.com', 'User login', '2021-03-10 10:21:40'),
(612, 'boboyeafolabi@gmail.com', 'User login', '2021-03-10 10:33:03'),
(613, 'marketing@trinityng.com', 'User login', '2021-03-10 12:02:20'),
(614, 'etubom1@yahoo.com', 'User login', '2021-03-10 12:17:03'),
(615, 'boboyeafolabi@gmail.com', 'User login', '2021-03-10 12:18:43'),
(616, 'tinuabina@yahoo.com', 'User login', '2021-03-10 13:35:38'),
(617, 'marketing@trinityng.com', 'User login', '2021-03-10 13:45:54'),
(618, 'marketing@trinityng.com', 'User login', '2021-03-10 14:43:37'),
(619, 'tinuabina@yahoo.com', 'User login', '2021-03-10 15:28:44'),
(620, 'marketing@trinityng.com', 'User login', '2021-03-11 07:52:14'),
(621, 'etubom1@yahoo.com', 'User login', '2021-03-11 09:08:54'),
(622, 'boboyeafolabi@gmail.com', 'User login', '2021-03-11 09:33:13'),
(623, 'marketing@trinityng.com', 'User login', '2021-03-11 10:25:42'),
(624, 'boboyeafolabi@gmail.com', 'User login', '2021-03-11 11:43:02'),
(625, 'marketing@trinityng.com', 'User login', '2021-03-11 14:40:25'),
(626, 'marketing@trinityng.com', 'User login', '2021-03-11 17:34:31'),
(627, 'marketing@trinityng.com', 'User login', '2021-03-11 18:23:02'),
(628, 'boboyeafolabi@gmail.com', 'User login', '2021-03-12 08:47:31'),
(629, 'marketing@trinityng.com', 'User login', '2021-03-12 09:30:10'),
(630, 'marketing@trinityng.com', 'User login', '2021-03-12 10:54:25'),
(631, 'admin@admin.com', 'User login', '2021-03-12 12:08:49'),
(632, 'marketing@trinityng.com', 'User login', '2021-03-12 12:27:49'),
(633, 'boboyeafolabi@gmail.com', 'User login', '2021-03-12 12:44:03'),
(634, 'dele.raymond@gmail.com', 'User login', '2021-03-12 14:26:23'),
(635, 'boboyeafolabi@gmail.com', 'User login', '2021-03-12 14:32:13'),
(636, 'boboyeafolabi@gmail.com', 'User login', '2021-03-12 14:38:13'),
(637, 'admin@admin.com', 'User login', '2021-03-12 14:51:12'),
(638, 'admin@admin.com', 'User login', '2021-03-12 15:23:14'),
(639, 'boboyeafolabi@gmail.com', 'User login', '2021-03-12 15:45:57'),
(640, 'marketing@trinityng.com', 'User login', '2021-03-13 07:48:14'),
(641, 'funke.abioye@yahoo.com', 'User login', '2021-03-13 13:28:08'),
(642, 'boboyeafolabi@gmail.com', 'User login', '2021-03-13 13:58:21'),
(643, 'marketing@trinityng.com', 'User login', '2021-03-14 10:44:19'),
(644, 'marketing@trinityng.com', 'User login', '2021-03-14 14:00:56'),
(645, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-14 14:47:33'),
(646, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-14 21:02:18'),
(647, 'marketing@trinityng.com', 'User login', '2021-03-15 07:19:58'),
(648, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-15 07:23:14'),
(649, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-15 09:39:01'),
(650, 'boboyeafolabi@gmail.com', 'User login', '2021-03-15 10:57:41'),
(651, 'boboyeafolabi@gmail.com', 'User login', '2021-03-15 12:41:26'),
(652, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-15 23:04:43'),
(653, 'Adesola.Odetundun@gmail.com', 'User login', '2021-03-16 00:58:59'),
(654, 'Adesola.Odetundun@gmail.com', 'User login', '2021-03-16 01:08:43'),
(655, 'marketing@trinityng.com', 'User login', '2021-03-16 09:17:17'),
(656, 'marketing@trinityng.com', 'User login', '2021-03-16 10:57:50'),
(657, 'admin@admin.com', 'User login', '2021-03-16 11:21:44'),
(658, 'marketing@trinityng.com', 'User login', '2021-03-16 14:47:17'),
(659, 'marketing@trinityng.com', 'User login', '2021-03-16 15:52:26'),
(660, 'marketing@trinityng.com', 'User login', '2021-03-16 16:47:29'),
(661, 'marketing@trinityng.com', 'User login', '2021-03-16 22:45:53'),
(662, 'marketing@trinityng.com', 'User login', '2021-03-17 01:46:25'),
(663, 'admin@admin.com', 'User login', '2021-03-17 10:27:01'),
(664, 'adebolay@yahoo.com', 'User login', '2021-03-17 11:49:59'),
(665, 'marketing@trinityng.com', 'User login', '2021-03-17 12:12:59'),
(666, 'boboyeafolabi@gmail.com', 'User login', '2021-03-17 13:28:34'),
(667, 'marketing@trinityng.com', 'User login', '2021-03-17 13:53:29'),
(668, 'marketing@trinityng.com', 'User login', '2021-03-18 08:41:36'),
(669, 'honomerike94@gmail.com', 'User login', '2021-03-18 08:59:13'),
(670, 'honomerike94@gmail.com', 'User login', '2021-03-18 09:05:24'),
(671, 'adebolay@yahoo.com', 'User login', '2021-03-18 09:20:33'),
(672, 'marketing@trinityng.com', 'User login', '2021-03-18 09:47:28'),
(673, 'honomerike94@gmail.com', 'User login', '2021-03-18 09:51:20'),
(674, 'honomerike94@gmail.com', 'User login', '2021-03-18 09:52:15'),
(675, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-18 11:13:26'),
(676, 'marketing@trinityng.com', 'User login', '2021-03-18 11:37:31'),
(677, 'boboyeafolabi@gmail.com', 'User login', '2021-03-18 12:13:27'),
(678, 'marketing@trinityng.com', 'User login', '2021-03-18 13:49:51'),
(679, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-18 14:50:02'),
(680, 'boboyeafolabi@gmail.com', 'User login', '2021-03-18 16:15:49'),
(681, 'marketing@trinityng.com', 'User login', '2021-03-18 17:33:07'),
(682, 'admin@admin.com', 'User login', '2021-03-18 20:32:06'),
(683, 'marketing@trinityng.com', 'User login', '2021-03-19 02:50:23'),
(684, 'marketing@trinityng.com', 'User login', '2021-03-19 09:14:02'),
(685, 'marketing@trinityng.com', 'User login', '2021-03-19 09:55:36'),
(686, 'admin@admin.com', 'User login', '2021-03-19 10:51:05'),
(687, 'marketing@trinityng.com', 'User login', '2021-03-19 11:05:29'),
(688, 'marketing@trinityng.com', 'User login', '2021-03-19 12:41:02'),
(689, 'donsonate@yahoo.com', 'User login', '2021-03-19 13:32:05'),
(690, 'boboyeafolabi@gmail.com', 'User login', '2021-03-19 14:13:38'),
(691, 'ar_nold_21@yahoo.co.uk', 'User login', '2021-03-19 23:15:18'),
(692, 'boboyeafolabi@gmail.com', 'User login', '2021-03-20 02:55:45'),
(693, 'boboyeafolabi@gmail.com', 'User login', '2021-03-20 06:47:29'),
(694, 'boboyeafolabi@gmail.com', 'User login', '2021-03-20 06:48:00'),
(695, 'omotolamajiyagbe@yahoo.com', 'User login', '2021-03-20 08:03:57'),
(696, 'boboyeafolabi@gmail.com', 'User login', '2021-03-20 08:48:32'),
(697, 'boboyeafolabi@gmail.com', 'User login', '2021-03-20 10:11:41'),
(698, 'boboyeafolabi@gmail.com', 'User login', '2021-03-20 10:44:48'),
(699, 'admin@admin.com', 'User login', '2021-03-20 14:30:00'),
(700, 'marketing@trinityng.com', 'User login', '2021-03-22 07:55:17'),
(701, 'marketing@trinityng.com', 'User login', '2021-03-22 10:12:25'),
(702, 'boboyeafolabi@gmail.com', 'User login', '2021-03-22 10:37:49'),
(703, 'marketing@trinityng.com', 'User login', '2021-03-22 10:52:39'),
(704, 'boboyeafolabi@gmail.com', 'User login', '2021-03-22 13:00:47'),
(705, 'marketing@trinityng.com', 'User login', '2021-03-22 18:43:43'),
(706, 'marketing@trinityng.com', 'User login', '2021-03-23 03:43:12'),
(707, 'marketing@trinityng.com', 'User login', '2021-03-23 10:46:23'),
(708, 'boboyeafolabi@gmail.com', 'User login', '2021-03-23 12:45:01'),
(709, 'admin@admin.com', 'User login', '2021-03-23 18:28:15'),
(710, 'marketing@trinityng.com', 'User login', '2021-03-24 10:00:13'),
(711, 'marketing@trinityng.com', 'User login', '2021-03-24 11:24:36'),
(712, 'admin@admin.com', 'User login', '2021-03-24 14:30:10'),
(713, 'admin@admin.com', 'User login', '2021-03-24 16:23:46'),
(714, 'admin@admin.com', 'User login', '2021-03-25 10:42:09'),
(715, 'admin@admin.com', 'User login', '2021-03-25 15:29:19'),
(716, 'admin@admin.com', 'User login', '2021-03-25 16:15:47'),
(717, 'admin@admin.com', 'User login', '2021-03-26 05:46:50'),
(718, 'boboyeafolabi@gmail.com', 'User login', '2021-03-26 10:27:06'),
(719, 'admin@admin.com', 'User login', '2021-03-26 15:53:21'),
(720, 'admin@admin.com', 'User login', '2021-03-26 15:55:03'),
(721, 'marketing@trinityng.com', 'User login', '2021-03-27 01:20:55'),
(722, 'marketing@trinityng.com', 'User login', '2021-03-27 01:21:55'),
(723, 'durupaul22@gmail.com', 'User login', '2021-03-27 18:04:40'),
(724, 'durupaul22@gmail.com', 'User login', '2021-03-27 18:41:29'),
(725, 'marketing@trinityng.com', 'User login', '2021-03-29 06:19:18'),
(726, 'boboyeafolabi@gmail.com', 'User login', '2021-03-29 09:14:26'),
(727, 'boboyeafolabi@gmail.com', 'User login', '2021-03-29 10:35:51'),
(728, 'boboyeafolabi@gmail.com', 'User login', '2021-03-29 11:51:28'),
(729, 'anobisarha@gmail.com', 'User login', '2021-03-29 12:00:38'),
(730, 'anobisarha@gmail.com', 'User login', '2021-03-29 12:32:38'),
(731, 'boboyeafolabi@gmail.com', 'User login', '2021-03-29 13:00:11'),
(732, 'boboyeafolabi@gmail.com', 'User login', '2021-03-29 14:14:47'),
(733, 'marketing@trinityng.com', 'User login', '2021-03-30 07:39:10'),
(734, 'marketing@trinityng.com', 'User login', '2021-03-30 08:54:15'),
(735, 'elochukwujoy@yahoo.com', 'User login', '2021-03-30 10:03:19'),
(736, 'marketing@trinityng.com', 'User login', '2021-03-30 10:45:46'),
(737, 'temitopeosimokun@gmail.com', 'User login', '2021-03-30 12:12:54'),
(738, 'marketing@trinityng.com', 'User login', '2021-03-30 12:44:41'),
(739, 'temitopeosimokun@gmail.com', 'User login', '2021-03-30 12:51:36'),
(740, 'boboyeafolabi@gmail.com', 'User login', '2021-03-30 16:46:32'),
(741, 'marketing@trinityng.com', 'User login', '2021-03-31 12:32:45'),
(742, 'oomicinc@gmail.com', 'User login', '2021-03-31 18:15:06'),
(743, 'oomicinc@gmail.com', 'User login', '2021-03-31 18:52:49'),
(744, 'oomicinc@gmail.com', 'User login', '2021-03-31 18:54:47'),
(745, 'boboyeafolabi@gmail.com', 'User login', '2021-04-01 12:58:29'),
(746, 'boboyeafolabi@gmail.com', 'User login', '2021-04-01 14:46:45'),
(747, 'elochukwujoy@yahoo.com', 'User login', '2021-04-02 17:38:32'),
(748, 'marketing@trinityng.com', 'User login', '2021-04-05 11:57:00'),
(749, 'oomicinc@gmail.com', 'User login', '2021-04-06 07:24:46'),
(750, 'naijaspeed1@gmail.com', 'User login', '2021-04-06 07:57:28'),
(751, 'boboyeafolabi@gmail.com', 'User login', '2021-04-06 10:57:50'),
(752, 'marketing@trinityng.com', 'User login', '2021-04-06 14:05:53'),
(753, 'boboyeafolabi@gmail.com', 'User login', '2021-04-06 15:14:53'),
(754, 'marketing@trinityng.com', 'User login', '2021-04-06 16:59:35'),
(755, 'admin@admin.com', 'User login', '2021-04-07 05:16:58'),
(756, 'marketing@trinityng.com', 'User login', '2021-04-07 11:41:06'),
(757, 'egbetayoayodele@gmail.com', 'User login', '2021-04-08 06:11:24'),
(758, 'boboyeafolabi@gmail.com', 'User login', '2021-04-08 09:15:23'),
(759, 'boboyeafolabi@gmail.com', 'User login', '2021-04-08 10:23:16'),
(760, 'marketing@trinityng.com', 'User login', '2021-04-08 10:51:00'),
(761, 'boboyeafolabi@gmail.com', 'User login', '2021-04-08 11:55:30'),
(762, 'busayoyinka@yahoo.com', 'User login', '2021-04-08 17:32:40'),
(763, 'busayoyinka@yahoo.com', 'User login', '2021-04-08 17:38:59'),
(764, 'boboyeafolabi@gmail.com', 'User login', '2021-04-08 17:58:06'),
(765, 'boboyeafolabi@gmail.com', 'User login', '2021-04-09 13:39:30'),
(766, 'marketing@trinityng.com', 'User login', '2021-04-10 10:14:25'),
(767, 'olawmi@yahoo.com', 'User login', '2021-04-12 10:01:35'),
(768, 'boboyeafolabi@gmail.com', 'User login', '2021-04-12 13:14:06'),
(769, 'olohitaio@gmail.com', 'User login', '2021-04-12 14:54:17'),
(770, 'boboyeafolabi@gmail.com', 'User login', '2021-04-13 12:45:25'),
(771, 'abussygirl@gmail.com', 'User login', '2021-04-13 15:57:55'),
(772, 'marketing@trinityng.com', 'User login', '2021-04-14 06:03:54'),
(773, 'marketing@trinityng.com', 'User login', '2021-04-14 10:41:54'),
(774, 'boboyeafolabi@gmail.com', 'User login', '2021-04-15 13:41:22'),
(775, 'boboyeafolabi@gmail.com', 'User login', '2021-04-19 15:18:00'),
(776, 'olawumiojo@yahoo.com', 'User login', '2021-04-20 13:57:41'),
(777, 'boboyeafolabi@gmail.com', 'User login', '2021-04-21 13:52:21'),
(778, 'olawumiojo@yahoo.com', 'User login', '2021-04-21 17:35:46'),
(779, 'olawumiojo@yahoo.com', 'User login', '2021-04-21 19:07:24'),
(780, 'olawumiojo@yahoo.com', 'User login', '2021-04-21 19:09:51'),
(781, 'boboyeafolabi@gmail.com', 'User login', '2021-04-23 05:16:53'),
(782, 'marketing@trinityng.com', 'User login', '2021-04-26 11:21:25'),
(783, 'marketing@trinityng.com', 'User login', '2021-04-26 12:10:15'),
(784, 'marketing@trinityng.com', 'User login', '2021-04-26 15:21:49'),
(785, 'marketing@trinityng.com', 'User login', '2021-04-27 03:44:36'),
(786, 'marketing@trinityng.com', 'User login', '2021-04-27 07:06:00'),
(787, 'marketing@trinityng.com', 'User login', '2021-04-27 08:22:25'),
(788, 'boboyeafolabi@gmail.com', 'User login', '2021-04-27 09:20:42'),
(789, 'marketing@trinityng.com', 'User login', '2021-04-27 09:31:42'),
(790, 'boboyeafolabi@gmail.com', 'User login', '2021-04-27 12:17:51'),
(791, 'marketing@trinityng.com', 'User login', '2021-04-27 13:45:40'),
(792, 'admin@admin.com', 'User login', '2021-04-27 13:47:08'),
(793, 'olawumiojo@yahoo.com', 'User login', '2021-04-27 15:45:14'),
(794, 'olawumiojo@yahoo.com', 'User login', '2021-04-27 16:07:41'),
(795, 'olawumiojo@yahoo.com', 'User login', '2021-04-27 16:29:51'),
(796, 'olawumiojo@yahoo.com', 'User login', '2021-04-28 04:31:44'),
(797, 'marketing@trinityng.com', 'User login', '2021-04-28 08:56:40'),
(798, 'anobisarha@gmail.com', 'User login', '2021-04-28 11:35:24'),
(799, 'marketing@trinityng.com', 'User login', '2021-04-30 06:31:25'),
(800, 'marketing@trinityng.com', 'User login', '2021-04-30 09:05:54'),
(801, 'genpol2006@yahoo.com', 'User login', '2021-04-30 10:50:02'),
(802, 'egbetayoayodele@yahoo.com', 'User login', '2021-05-01 04:43:36'),
(803, 'egbetayoayodele@yahoo.com', 'User login', '2021-05-01 06:43:07'),
(804, 'egbetayoayodele@yahoo.com', 'User login', '2021-05-01 07:11:22'),
(805, 'marketing@trinityng.com', 'User login', '2021-05-01 09:32:34'),
(806, 'marketing@trinityng.com', 'User login', '2021-05-02 03:58:32'),
(807, 'marketing@trinityng.com', 'User login', '2021-05-03 12:07:04'),
(808, 'marketing@trinityng.com', 'User login', '2021-05-03 17:46:08'),
(809, 'pectoria@yahoo.com', 'User login', '2021-05-03 18:40:53'),
(810, 'marketing@trinityng.com', 'User login', '2021-05-04 07:43:10'),
(811, 'marketing@trinityng.com', 'User login', '2021-05-04 09:52:52'),
(812, 'marketing@trinityng.com', 'User login', '2021-05-04 13:45:34'),
(813, 'gregoryovieh@yahoo.co.uk', 'User login', '2021-05-04 14:54:05'),
(814, 'marketing@trinityng.com', 'User login', '2021-05-04 14:58:28'),
(815, 'marketing@trinityng.com', 'User login', '2021-05-04 16:05:13'),
(816, 'marketing@trinityng.com', 'User login', '2021-05-04 21:41:58'),
(817, 'marketing@trinityng.com', 'User login', '2021-05-05 07:44:07'),
(818, 'marketing@trinityng.com', 'User login', '2021-05-06 10:48:37'),
(819, 'admin@admin.com', 'User login', '2021-05-06 11:18:55'),
(820, 'oyedejioluwasegundaree@gmail.com', 'User login', '2021-05-06 16:36:02'),
(821, 'Oluwakemiadeyele@gmail.com', 'User login', '2021-05-06 22:42:46'),
(822, 'marketing@trinityng.com', 'User login', '2021-05-07 09:28:41'),
(823, 'olawmi@yahoo.com', 'User login', '2021-05-07 12:22:35'),
(824, 'boboyeafolabi@gmail.com', 'User login', '2021-05-07 17:45:07'),
(825, 'marketing@trinityng.com', 'User login', '2021-05-08 09:05:02'),
(826, 'marketing@trinityng.com', 'User login', '2021-05-08 12:19:04'),
(827, 'marketing@trinityng.com', 'User login', '2021-05-09 07:59:34'),
(828, 'marketing@trinityng.com', 'User login', '2021-05-10 09:08:14'),
(829, 'boboyeafolabi@gmail.com', 'User login', '2021-05-10 11:28:11'),
(830, 'boboyeafolabi@gmail.com', 'User login', '2021-05-10 12:10:16'),
(831, 'jbgiwa@gmail.com', 'User login', '2021-05-10 12:39:18'),
(832, 'boboyeafolabi@gmail.com', 'User login', '2021-05-10 12:50:18'),
(833, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:15:46'),
(834, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:25:17'),
(835, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:28:34'),
(836, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:30:31'),
(837, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:48:58'),
(838, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:51:20'),
(839, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:54:49'),
(840, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:55:33'),
(841, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:56:05'),
(842, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:58:20'),
(843, 'jbgiwa@gmail.com', 'User login', '2021-05-10 13:59:00'),
(844, 'marketing@trinityng.com', 'User login', '2021-05-10 18:11:17'),
(845, 'Oluwakemiadeyele@gmail.com', 'User login', '2021-05-10 18:11:43'),
(846, 'marketing@trinityng.com', 'User login', '2021-05-10 18:56:13'),
(847, 'boboyeafolabi@gmail.com', 'User login', '2021-05-11 08:15:11'),
(848, 'anobisarha@gmail.com', 'User login', '2021-05-11 08:35:17'),
(849, 'marketing@trinityng.com', 'User login', '2021-05-11 09:00:54'),
(850, 'sholasol@outlook.com', 'User login', '2021-05-11 09:32:07'),
(851, 'olawmi@yahoo.com', 'User login', '2021-05-11 09:57:20'),
(852, 'sholasol@outlook.com', 'User login', '2021-05-11 10:20:51'),
(853, 'jbgiwa@gmail.com', 'User login', '2021-05-11 10:22:43'),
(854, 'jbgiwa@gmail.com', 'User login', '2021-05-11 10:40:50'),
(855, 'marketing@trinityng.com', 'User login', '2021-05-11 10:42:47'),
(856, 'jbgiwa@gmail.com', 'User login', '2021-05-11 10:49:04'),
(857, 'jbgiwa@gmail.com', 'User login', '2021-05-11 10:52:51'),
(858, 'berisa_st@yahoo.com', 'User login', '2021-05-12 06:39:31'),
(859, 'marketing@trinityng.com', 'User login', '2021-05-12 10:18:16'),
(860, 'marketing@trinityng.com', 'User login', '2021-05-12 10:35:43'),
(861, 'marketing@trinityng.com', 'User login', '2021-05-12 11:28:00'),
(862, 'marketing@trinityng.com', 'User login', '2021-05-13 05:27:31'),
(863, 'marketing@trinityng.com', 'User login', '2021-05-13 10:41:43'),
(864, 'vickykups@yahoo.com', 'User login', '2021-05-13 16:11:26'),
(865, 'vickykups@yahoo.com', 'User login', '2021-05-13 16:40:43'),
(866, 'marketing@trinityng.com', 'User login', '2021-05-14 03:34:02'),
(867, 'vickykups@yahoo.com', 'User login', '2021-05-14 06:44:38'),
(868, 'marketing@trinityng.com', 'User login', '2021-05-14 11:04:54'),
(869, 'sholasol@outlook.com', 'User login', '2021-05-14 11:42:37'),
(870, 'sholasol@outlook.com', 'User login', '2021-05-14 11:48:01'),
(871, 'dele.raymond@hotmail.com', 'User login', '2021-05-14 11:51:55'),
(872, 'boboyeafolabi@gmail.com', 'User login', '2021-05-14 12:22:37'),
(873, 'marketing@trinityng.com', 'User login', '2021-05-14 12:51:47'),
(874, 'marketing@trinityng.com', 'User login', '2021-05-14 15:24:11'),
(875, 'boboyeafolabi@gmail.com', 'User login', '2021-05-15 06:21:40'),
(876, 'marketing@trinityng.com', 'User login', '2021-05-15 09:23:45'),
(877, 'elochukwujoy@yahoo.com', 'User login', '2021-05-15 09:47:39'),
(878, 'emmanuelezenwuba200@gmail.com', 'User login', '2021-05-15 09:51:47'),
(879, 'marketing@trinityng.com', 'User login', '2021-05-15 14:50:49'),
(880, 'marketing@trinityng.com', 'User login', '2021-05-16 18:00:23'),
(881, 'marketing@trinityng.com', 'User login', '2021-05-16 18:04:32'),
(882, 'marketing@trinityng.com', 'User login', '2021-05-17 09:42:41'),
(883, 'marketing@trinityng.com', 'User login', '2021-05-17 10:34:37'),
(884, 'boboyeafolabi@gmail.com', 'User login', '2021-05-17 10:51:25'),
(885, 'jbgiwa@gmail.com', 'User login', '2021-05-17 11:18:20'),
(886, 'marketing@trinityng.com', 'User login', '2021-05-17 11:19:35'),
(887, 'jbgiwa@gmail.com', 'User login', '2021-05-17 11:27:26'),
(888, 'boboyeafolabi@gmail.com', 'User login', '2021-05-17 11:52:23'),
(889, 'boboyeafolabi@gmail.com', 'User login', '2021-05-17 11:52:35'),
(890, 'Oluwakemiadeyele@gmail.com', 'User login', '2021-05-17 12:36:01'),
(891, 'Oluwakemiadeyele@gmail.com', 'User login', '2021-05-17 12:38:09'),
(892, 'laoluthomas@gmail.com', 'User login', '2021-05-17 14:42:57'),
(893, 'boboyeafolabi@gmail.com', 'User login', '2021-05-17 15:08:58'),
(894, 'jbgiwa@gmail.com', 'User login', '2021-05-17 19:22:51'),
(895, 'marketing@trinityng.com', 'User login', '2021-05-18 08:26:51'),
(896, 'eraphael2002@yahoo.com', 'User login', '2021-05-18 09:09:29'),
(897, 'marketing@trinityng.com', 'User login', '2021-05-18 12:38:01'),
(898, 'marketing@trinityng.com', 'User login', '2021-05-18 12:51:15'),
(899, 'Oluwakemiadeyele@gmail.com', 'User login', '2021-05-18 12:56:39'),
(900, 'abinifie_j@yahoo.com', 'User login', '2021-05-19 01:44:08'),
(901, 'dannyolise@yahoo.com', 'User login', '2021-05-19 09:42:33'),
(902, 'admin@admin.com', 'User login', '2021-05-19 10:39:18'),
(903, 'marketing@trinityng.com', 'User login', '2021-05-20 07:09:20'),
(904, 'marketing@trinityng.com', 'User login', '2021-05-20 08:24:52'),
(905, 'dele.raymond@gmail.com', 'User login', '2021-05-20 12:21:35'),
(906, 'marketing@trinityng.com', 'User login', '2021-05-20 12:21:55'),
(907, 'boboyeafolabi@gmail.com', 'User login', '2021-05-21 07:56:04'),
(908, 'boboyeafolabi@gmail.com', 'User login', '2021-05-21 09:38:53'),
(909, 'marketing@trinityng.com', 'User login', '2021-05-21 12:53:47'),
(910, 'vickykups@yahoo.com', 'User login', '2021-05-22 08:05:26'),
(911, 'olawumiojo@yahoo.com', 'User login', '2021-05-22 09:07:51'),
(912, 'olawumiojo@yahoo.com', 'User login', '2021-05-22 09:43:38'),
(913, 'olawumiojo@yahoo.com', 'User login', '2021-05-22 09:52:36'),
(914, 'boboyeafolabi@gmail.com', 'User login', '2021-05-22 13:09:44'),
(915, 'marketing@trinityng.com', 'User login', '2021-05-25 07:34:28'),
(916, 'boboyeafolabi@gmail.com', 'User login', '2021-05-25 14:40:39'),
(917, 'boboyeafolabi@gmail.com', 'User login', '2021-05-25 15:46:22'),
(918, 'boboyeafolabi@gmail.com', 'User login', '2021-05-26 13:17:04'),
(919, 'boboyeafolabi@gmail.com', 'User login', '2021-06-02 12:54:36'),
(920, 'marketing@trinityng.com', 'User login', '2021-06-16 10:54:55'),
(921, 'marketing@trinityng.com', 'User login', '2021-06-27 02:04:09'),
(922, 'boboyeafolabi@gmail.com', 'User login', '2021-06-29 11:36:26'),
(923, 'boboyeafolabi@gmail.com', 'User login', '2021-07-02 07:47:18'),
(924, 'marketing@trinityng.com', 'User login', '2021-07-05 15:28:16'),
(925, 'mgbakoronyi@gmail.com', 'User login', '2021-07-08 12:55:48'),
(926, 'abinifie_j@yahoo.com', 'User login', '2021-07-16 15:39:28'),
(927, 'abinifie_j@yahoo.com', 'User login', '2021-07-16 18:37:16'),
(928, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 10:25:01'),
(929, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 11:04:25'),
(930, 'marketing@trinityng.com', 'User login', '2021-07-19 11:12:38'),
(931, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 11:19:07'),
(932, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 12:37:11'),
(933, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 19:49:09'),
(934, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 20:02:27'),
(935, 'abinifie_j@yahoo.com', 'User login', '2021-07-19 20:05:32'),
(936, 'boboyeafolabi@gmail.com', 'User login', '2021-07-28 13:06:22'),
(937, 'marketing@trinityng.com', 'User login', '2021-08-05 08:16:09'),
(938, 'admin@admin.com', 'User login', '2021-08-10 17:40:43'),
(939, 'admin@admin.com', 'User login', '2021-08-12 22:15:43'),
(940, 'admin@admin.com', 'User login', '2021-08-13 08:38:53'),
(941, 'admin@admin.com', 'User login', '2021-08-13 11:17:54'),
(942, 'admin@admin.com', 'User login', '2021-08-13 16:11:27'),
(943, 'sammylucas4ever@gmail.com', 'User login', '2021-08-17 20:47:37'),
(944, 'oadesokan@yahoo.com', 'User login', '2021-08-24 11:15:35'),
(945, 'roliomayuku@gmail.com', 'User login', '2021-09-02 10:24:25'),
(946, 'oadesokan@yahoo.com', 'User login', '2021-09-05 19:50:07'),
(947, 'oadesokan@yahoo.com', 'User login', '2021-09-05 20:01:55'),
(948, 'izzylyf001@gmail.com', 'User login', '2021-10-10 14:36:34'),
(949, 'marketing@trinityng.com', 'User login', '2021-10-11 08:59:53'),
(950, 'boboyeafolabi@gmail.com', 'User login', '2021-10-11 09:05:52'),
(951, 'admin@admin.com', 'User login', '2021-10-11 09:23:10'),
(952, 'marketing@trinityng.com', 'User login', '2021-10-13 07:49:19'),
(953, 'marketing@trinityng.com', 'User login', '2021-10-13 19:32:47'),
(954, 'marketing@trinityng.com', 'User login', '2021-10-14 08:06:43'),
(955, 'marketing@trinityng.com', 'User login', '2021-10-20 09:58:15'),
(956, 'adeyemo.tricol@gmail.com', 'User login', '2021-10-20 10:04:31'),
(957, 'adeyemo.tricol@gmail.com', 'User login', '2021-10-20 10:09:56'),
(958, 'marketing@trinityng.com', 'User login', '2021-10-20 13:23:44'),
(959, 'marketing@trinityng.com', 'User login', '2021-10-21 14:45:28'),
(960, 'marketing@trinityng.com', 'User login', '2021-10-22 09:56:35'),
(961, 'admin@admin.com', 'User login', '2021-10-22 12:56:46'),
(962, 'marketing@trinityng.com', 'User login', '2021-10-23 09:18:27'),
(963, 'marketing@trinityng.com', 'User login', '2021-10-25 13:35:51'),
(964, 'marketing@trinityng.com', 'User login', '2021-11-02 12:38:49'),
(965, 'marketing@trinityng.com', 'User login', '2021-11-03 09:32:56'),
(966, 'marketing@trinityng.com', 'User login', '2021-11-04 13:52:48'),
(967, 'marketing@trinityng.com', 'User login', '2021-11-08 12:30:47'),
(968, 'marketing@trinityng.com', 'User login', '2021-11-17 11:34:37');
INSERT INTO `activity` (`id`, `user`, `activity`, `created`) VALUES
(969, 'admin@admin.com', 'User login', '2021-11-23 11:59:44'),
(970, 'admin@admin.com', 'User login', '2021-11-23 12:42:56'),
(971, 'marketing@trinityng.com', 'User login', '2021-11-23 13:00:41'),
(972, 'boboyeafolabi@gmail.com', 'User login', '2021-11-23 14:04:20'),
(973, 'marketing@trinityng.com', 'User login', '2021-11-23 14:35:09'),
(974, 'marketing@trinityng.com', 'User login', '2021-11-23 17:26:12'),
(975, 'marketing@trinityng.com', 'User login', '2021-11-27 12:40:56'),
(976, 'marketing@trinityng.com', 'User login', '2021-11-30 19:49:35'),
(977, 'marketing@trinityng.com', 'User login', '2021-12-01 11:45:39'),
(978, 'marketing@trinityng.com', 'User login', '2021-12-02 13:19:10'),
(979, 'marketing@trinityng.com', 'User login', '2021-12-07 11:45:13'),
(980, 'marketing@trinityng.com', 'User login', '2021-12-10 21:45:50'),
(981, 'boboyeafolabi@gmail.com', 'User login', '2021-12-13 11:55:35'),
(982, 'admin@admin.com', 'User login', '2021-12-13 12:14:54'),
(983, 'boboyeafolabi@gmail.com', 'User login', '2021-12-13 14:32:10'),
(984, 'marketing@trinityng.com', 'User login', '2021-12-14 08:12:50'),
(985, 'boboyeafolabi@gmail.com', 'User login', '2021-12-14 10:16:54'),
(986, 'boboyeafolabi@gmail.com', 'User login', '2021-12-14 10:18:39'),
(987, 'marketing@trinityng.com', 'User login', '2021-12-14 10:21:03'),
(988, 'marketing@trinityng.com', 'User login', '2021-12-22 13:42:09'),
(989, 'AkingbalaGafar@gmail.com', 'User login', '2022-01-03 11:00:31'),
(990, 'AkingbalaGafar@gmail.com', 'User login', '2022-01-03 11:02:02'),
(991, 'admin@admin.com', 'User login', '2022-01-04 08:49:31'),
(992, 'admin@admin.com', 'User login', '2022-01-04 10:56:55'),
(993, 'admin@admin.com', 'User login', '2022-01-04 11:01:01'),
(994, 'admin@admin.com', 'User login', '2022-01-04 11:03:54'),
(995, 'marketing@trinityng.com', 'User login', '2022-01-05 14:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(11) NOT NULL,
  `blog_id` int(23) DEFAULT NULL,
  `username` varchar(75) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `center` varchar(100) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`id`, `name`, `center`, `phone`) VALUES
(1, 'Ofada, College Premises', 'Ofada', '07077995211, 08144641795'),
(2, 'Trinity University, Yaba', 'Lagos', '09077995211, 08144641795'),
(3, 'Badagry, Nigeria French Language Village', 'Badagry', '08035748036'),
(4, 'Lakeland Primary School,  Funny,  Warri', 'Warri', '08057105670'),
(5, 'Olumawu School, 92, Ademola Adetokunbo Crescent,  Wise 2, Abuja', 'Abuja', '08036121500'),
(6, 'Montessori International School,  15, king Perekunle, G.R.A. Phase 11, P/Harcourt', 'P/Harcourt', '08138506540, 08191573509'),
(7, 'Bellwood Hotel,\r\nOK Panama Road,  G. R. A,  Asaba', 'Asaba', '08086666383'),
(8, 'Online Exam', 'Online', '07068666097, 07068666145'),
(9, 'Walk-in at an agreed time', 'Walk-in', ' 07068666097, 07068666145');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` text,
  `status` tinyint(1) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permission`) VALUES
(1, 'Business Admin', ''),
(2, 'Administrator', '{\"admin\": 1, \"moderator\": 1}'),
(3, 'Affiliate', '');

-- --------------------------------------------------------

--
-- Table structure for table `imgUpload`
--

CREATE TABLE `imgUpload` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  `page` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgUpload`
--

INSERT INTO `imgUpload` (`id`, `title`, `category`, `image`, `description`, `page`, `created`) VALUES
(1, 'Students', 'student', 'uploads/IMG_8984.jpg', 'Our Students', 'student', '2021-03-13'),
(2, 'Students', 'student', 'uploads/IMG_8990.jpg', 'Our Students', 'student', '2021-03-13'),
(3, 'Students', 'student', 'uploads/IMG_9003.jpg', 'Our Students', 'student', '2021-03-13'),
(4, 'Students', 'student', 'uploads/IMG_9010.jpg', 'Our Students', 'student', '2021-03-13'),
(5, 'Students', 'student', 'uploads/IMG_9014.jpg', 'Our Students', 'student', '2021-03-13'),
(6, 'Students', 'student', 'uploads/IMG_9047.jpg', 'Our Students', 'student', '2021-03-13'),
(7, 'Students', 'student', 'uploads/IMG_9060.jpg', 'Our Students', 'student', '2021-03-13'),
(8, 'Students', 'student', 'uploads/IMG_9073.jpg', 'Our Students', 'student', '2021-03-13'),
(9, 'Students', 'student', 'uploads/IMG_9081.jpg', 'Our Students', 'student', '2021-03-13'),
(10, 'Students', 'student', 'uploads/IMG_9082.jpg', 'Our Students', 'student', '2021-03-13'),
(11, 'Student', 'student', 'uploads/IMG_2630.jpg', 'Our Students', 'student', '2021-03-14'),
(12, 'Student', 'student', 'uploads/IMG_2663.jpg', 'Our Students', 'student', '2021-03-14'),
(13, 'Staff', 'staff', 'uploads/IMG_2779.jpg', 'Our Staff', 'staff', '2021-03-14'),
(14, 'Staff', 'staff', 'uploads/IMG_2787.jpg', 'Our Staff', 'staff', '2021-03-14'),
(15, 'Staff', 'staff', 'uploads/IMG_2805.jpg', 'Our Staff', 'staff', '2021-03-14'),
(16, 'Staff', 'staff', 'uploads/IMG_2613.jpg', 'Our Staff', 'staff', '2021-03-14'),
(17, 'Staff', 'staff', 'uploads/IMG_2644.jpg', 'Our Staff', 'staff', '2021-03-14'),
(18, 'Staff', 'staff', 'uploads/IMG_2747.jpg', 'Our Staff', 'staff', '2021-03-14'),
(19, 'Staff', 'staff', 'uploads/IMG_2763.jpg', 'Our Staff', 'staff', '2021-03-14'),
(20, 'Staff', 'staff', 'uploads/IMG_2776.jpg', 'Our Staff', 'staff', '2021-03-14'),
(21, 'Staff', 'staff', 'uploads/IMG_2779.jpg', 'Our Staff', 'staff', '2021-03-14'),
(22, 'Staff', 'staff', 'uploads/IMG_2805.jpg', 'Our Staff', 'staff', '2021-03-14'),
(23, 'Facilities', 'facility', 'uploads/IMG_2813.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(24, 'Facilities', 'facility', 'uploads/IMG_2829.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(25, 'Facilities', 'facility', 'uploads/IMG_2854.JPG', 'Our Facilities', 'facility', '2021-03-14'),
(26, 'Facilities', 'facility', 'uploads/IMG_8992.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(27, 'Facilities', 'facility', 'uploads/IMG_9000.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(28, 'Facilities', 'facility', 'uploads/IMG_9003.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(29, 'Facilities', 'facility', 'uploads/IMG_9041.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(30, 'Facilities', 'facility', 'uploads/IMG_9072.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(31, 'Facilities', 'facility', 'uploads/IMG_9086.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(32, 'Facilities', 'facility', 'uploads/IMG_9089.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(33, 'Facilities', 'facility', 'uploads/IMG_9095.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(34, 'Facilities', 'facility', 'uploads/IMG_9108.jpg', 'Our Facilities', 'facility', '2021-03-14'),
(35, 'Facilities', 'facility', 'uploads/IMG_9183.JPG', 'Our Facilities', 'facility', '2021-03-14'),
(36, 'School Administrator', 'admin', 'uploads/adm.jpg', 'School Administrator', 'admin', '2021-03-17'),
(37, 'Principal Senior School', 'admin', 'uploads/adm3.jpg', 'Principal Senior School', 'admin', '2021-03-17'),
(38, 'Vice Principal Senior School', 'admin', 'uploads/ad5.jpg', 'Vice Principal Senior Secondary School', 'admin', '2021-03-17'),
(39, 'Personal Assistant', 'admin', 'uploads/adm1.jpg', 'Personal Assistant', 'admin', '2021-03-17'),
(40, 'Human Resource Manager', 'admin', 'uploads/adm4.jpg', 'Human Resource Manager', 'admin', '2021-03-17'),
(41, 'biology', 'biology', 'uploads/IMG_9036.jpg', 'Biology Laboratory', 'biology', '2021-03-18'),
(42, 'biology', 'biology', 'uploads/IMG_9037.jpg', 'Biology Laboratory', 'biology', '2021-03-18'),
(43, 'computer', 'computer', 'uploads/IMG_9043.jpg', 'Biology Laboratory', 'biology', '2021-03-18'),
(44, 'biology', 'biology', 'uploads/IMG_9050.jpg', 'Biology Laboratory', 'biology', '2021-03-18'),
(45, 'Physics', 'physics', 'uploads/IMG_8991.jpg', 'Physics Laboratory', 'physics', '2021-03-18'),
(46, 'Chemistry', 'chemistry', 'uploads/IMG_9031.jpg', 'Computer Laboratory', 'chemistry', '2021-03-18'),
(47, 'Chemistry', 'chemistry', 'uploads/IMG_9031.jpg', 'Chemistry Lab', 'chemistry', '2021-03-18'),
(48, 'Physics Laboratory', 'physics', 'uploads/IMG_8983.jpg', 'Physics Laboratory', 'physics', '2021-03-16'),
(49, 'Physics Laboratory', 'physics', 'uploads/IMG_8984.jpg', 'Physics Laboratory', 'physics', '2021-03-16'),
(50, 'Physics Laboratory', 'physics', 'uploads/IMG_8986.jpg', 'Physics Laboratory', 'physics', '2021-03-16'),
(51, 'Physics Laboratory', 'physics', 'uploads/IMG_8990.jpg', 'Physics Laboratory', 'physics', '2021-03-16'),
(52, 'Physics Laboratory', 'physics', 'uploads/IMG_8991.jpg', 'Physics Laboratory', 'physics', '2021-03-16'),
(53, 'Physics Laboratory', 'physics', 'uploads/IMG_8992.jpg', 'Physics Laboratory', 'biology', '2021-03-16'),
(54, 'Home Economics', 'economics', 'uploads/IMG_8996.jpg', 'Home Economics', 'economics', '2021-03-16'),
(55, 'Home Economics', 'economics', 'uploads/IMG_8998.jpg', 'Home Economics', 'economics', '2021-03-16'),
(56, 'Home Economics', 'economics', 'uploads/IMG_9000.jpg', 'Home Economics', 'economics', '2021-03-16'),
(57, 'Home Economics', 'economics', 'uploads/IMG_9003.jpg', 'Home Economics', 'economics', '2021-03-16'),
(58, 'Home Economics', 'economics', 'uploads/IMG_9010.jpg', 'Home Economics', 'economics', '2021-03-16'),
(59, 'Computer Laboratory', 'computer', 'uploads/IMG_9053.jpg', 'Computer Laboratory', 'computer', '2021-03-16'),
(60, 'Computer Laboratory', 'computer', 'uploads/IMG_9060.jpg', 'Computer Laboratory', 'chemistry', '2021-03-16'),
(61, 'Computer Laboratory', 'computer', 'uploads/IMG_9061.jpg', 'Computer Laboratory', 'computer', '2021-03-16'),
(62, 'Computer Laboratory', 'computer', 'uploads/comp.jpg', 'Computer Laboratory', 'computer', '2021-03-16'),
(63, 'Computer Laboratory', 'computer', 'uploads/complab.jpg', 'Computer Laboratory', 'computer', '2021-03-16'),
(64, 'Art', 'art', 'uploads/IMG_9066.jpg', 'Art Laboratory', 'art', '2021-03-19'),
(65, 'Art', 'art', 'uploads/IMG_9068.jpg', 'Art Laboratory', 'art', '2021-03-19'),
(66, 'Art', 'art', 'uploads/IMG_9069.jpg', 'Art Laboratory', 'art', '2021-03-19'),
(67, 'Art', 'art', 'uploads/IMG_9071.jpg', 'Art Laboratory', 'art', '2021-03-19'),
(68, 'Art', 'art', 'uploads/IMG_9078.jpg', 'Art Laboratory', 'art', '2021-03-19'),
(69, 'Art', 'art', 'uploads/IMG_9079.jpg', 'Art Laboratory', 'art', '2021-03-19'),
(70, 'Language', 'language', 'uploads/IMG_9085.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(71, 'Language', 'language', 'uploads/IMG_9090.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(72, 'Language', 'language', 'uploads/IMG_9091.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(73, 'Language', 'language', 'uploads/IMG_9094.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(74, 'Language', 'language', 'uploads/IMG_9098.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(75, 'Language', 'language', 'uploads/IMG_9101.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(76, 'Language', 'language', 'uploads/IMG_9102.jpg', 'Language Laboratory', 'language', '2021-03-19'),
(77, 'hostel', 'hostel', 'uploads/IMG_9109.jpg', 'School hostels', 'hostel', '2021-03-19'),
(78, 'hostel', 'hostel', 'uploads/IMG_9111.jpg', 'School hostels', 'hostel', '2021-03-19'),
(79, 'hostel', 'hostel', 'uploads/IMG_9115.jpg', 'School hostels', 'hostel', '2021-03-19'),
(80, 'hostel', 'hostel', 'uploads/IMG_9120.jpg', 'School hostels', 'hostel', '2021-03-19'),
(81, 'hostel', 'hostel', 'uploads/IMG_9124.jpg', 'School hostels', 'hostel', '2021-03-19'),
(82, 'hostel', 'hostel', 'uploads/IMG_9129.jpg', 'School hostels', 'hostel', '2021-03-19'),
(83, 'hostel', 'hostel', 'uploads/IMG_9132.jpg', 'School hostels', 'hostel', '2021-03-19'),
(84, 'hostel', 'hostel', 'uploads/IMG_9133.jpg', 'School hostels', 'hostel', '2021-03-19'),
(85, 'hostel', 'hostel', 'uploads/IMG_9134.jpg', 'School hostels', 'hostel', '2021-03-19'),
(86, 'Admin', 'admin', 'uploads/ad5.jpg', 'Vice Principal Senior School', 'admin', '2021-03-19'),
(87, 'Admin', 'admin', 'uploads/adm.jpg', 'School Administrator', 'admin', '2021-03-19'),
(88, 'Admin', 'admin', 'uploads/adm1.jpg', 'PA to School Administrator', 'admin', '2021-03-19'),
(89, 'Admin', 'admin', 'uploads/adm3.jpg', 'Principal Senior School', 'admin', '2021-03-19'),
(90, 'Admin', 'admin', 'uploads/adm4.jpg', 'Human Resources Manager', 'admin', '2021-03-19'),
(91, 'Clinic', 'clinic', 'uploads/clinic.jpg', 'School Clinic', 'clinic', '2021-03-20'),
(92, 'Clinic', 'clinic', 'uploads/clinic1.jpg', 'School Clinic', 'clinic', '2021-03-20'),
(93, 'Clinic', 'clinic', 'uploads/clinic2.jpg', 'School Clinic', 'clinic', '2021-03-20'),
(94, 'Clinic', 'clinic', 'uploads/clinic3.jpg', 'School Clinic', 'clinic', '2021-03-20'),
(95, 'Clinic', 'clinic', 'uploads/clinic4.jpg', 'School Clinic', 'clinic', '2021-03-20'),
(96, 'Clinic', 'clinic', 'uploads/clinic5.jpg', 'School Clinic', 'clinic', '2021-03-20'),
(97, 'Management Staff', 'admin', 'uploads/trinity-secondary-affiliate-slide-7.jpg', 'Principal Junior School', 'admin', '2021-03-23'),
(98, 'Management Staff', 'admin', 'uploads/trinity-secondary-affiliate-slide-6.jpg', 'Vice Principal Junior School', 'admin', '2021-03-23'),
(99, 'Admission', 'event', 'uploads/trinity-secondary-slide.jpg', 'Admission flyer', 'event', '2021-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `student` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `mode` varchar(50) DEFAULT NULL,
  `refrence` varchar(20) DEFAULT NULL,
  `payfor` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `evidence` varchar(255) DEFAULT NULL,
  `studentcode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `student`, `amount`, `mode`, `refrence`, `payfor`, `date`, `evidence`, `studentcode`) VALUES
(1, 42, 10500, 'bank', NULL, 'Entrance Examination Fee', '2021-02-18', '670125.pdf', '89JWCTU'),
(2, 48, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-20', '521460.png', ''),
(3, 49, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-20', '117943.png', 'VJW0EAF'),
(4, 49, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-20', '823275.jpg', 'VJW0EAF'),
(5, 59, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-23', '843171.jpg', '0VGKJ7D'),
(6, 70, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-24', '116632.pdf', '4TGW2FO'),
(7, 74, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-27', '165879.png', 'G1UL3JQ'),
(8, 48, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-01', '425421.png', 'BNMV2SP'),
(9, 79, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-01', '509741.png', 'L2CD6HW'),
(10, 82, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-01', '193057.pdf', 'ST6N79Z'),
(11, 76, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-01', '307673.png', 'EVA6H8J'),
(12, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-01', '386965.pdf', 'L87M34E'),
(13, 84, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-03', '170962.jpg', 'WI4V25J'),
(14, 22, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-05', '837940.jpg', 'M806O1A'),
(15, 22, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-05', '531196.jpg', 'M806O1A'),
(16, 97, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-07', '281682.pdf', '97SD0MN'),
(17, 54, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-07', '186038.jpeg', 'ID7HX2M'),
(18, 54, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-07', '910577.jpeg', 'QM6JB3A'),
(19, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-08', '2434.pdf', NULL),
(20, 100, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-08', '535322.pdf', 'M1VWAZ2'),
(21, 102, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-08', '524466.jpeg', '0VWRT69'),
(22, 103, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-08', '413509.png', '9ZLD340'),
(23, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-08', '195327.png', '9ZLD340'),
(24, 81, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-09', '545287.pdf', 'PKE63HM'),
(25, 81, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-09', '516884.pdf', 'AY0S1W5'),
(26, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-09', '940110.jpeg', 'NXOZ435'),
(27, 106, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-10', '956814.htm', 'HO73ELK'),
(28, 71, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-10', '890003.jpeg', 'N809JSV'),
(29, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-11', '107246.jpg', 'E706O5N'),
(30, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-16', '344569.jpeg', 'E706O11'),
(31, NULL, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-16', '7013.jpeg', 'GPUSYR2'),
(32, 116, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-18', '378824.pdf', '2IMTYS0'),
(33, 114, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-18', '44048.pdf', 'BZU5H8Q'),
(34, 119, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-27', '736205.jpg', '9PDOURI'),
(35, 27, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-29', '81372.jpeg', '2G8YM4E'),
(36, 36, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-29', '189089.jpeg', 'LVM6K1N'),
(37, 123, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-30', '519296.pdf', 'P7YTL5B'),
(38, 123, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-30', '759646.pdf', 'J0RBGA2'),
(39, 124, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-31', '92120.pdf', 'KN6QPLY'),
(40, 124, 10000, 'bank', '', 'Entrance Examination Fee', '2021-03-31', '909986.pdf', 'ERQZHOD'),
(41, 131, 10000, 'bank', '', 'Entrance Examination Fee', '2021-04-08', '143567.jpg', 'EWOITMJ'),
(42, 132, 10000, 'bank', '', 'Entrance Examination Fee', '2021-04-08', '846942.pdf', 'Q1DOUYH'),
(43, 133, 10000, 'bank', '', 'Entrance Examination Fee', '2021-04-12', '467451.pdf', 'G3T4DPK'),
(44, 134, 10000, 'bank', '', 'Entrance Examination Fee', '2021-04-12', '254306.png', 'R3685XH'),
(45, 135, 10000, 'bank', '', 'Entrance Examination Fee', '2021-04-21', '95450.pdf', 'KWY8E14'),
(46, 139, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-01', '934088.jpg', 'JHPS8I9'),
(47, 140, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-03', '237376.pdf', 'AHD3QGW'),
(48, 140, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-03', '333503.pdf', 'AHD3QGW'),
(49, 27, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-11', '628883.jpeg', 'LCUW0EZ'),
(50, 27, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-11', '768082.jpeg', 'LCUW0EZ'),
(51, 151, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-11', '563039.jpg', '18TULXV'),
(52, 151, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-11', '971589.jpg', '8YAVMBW'),
(53, 154, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-11', '8834.png', 'P7E20HT'),
(54, 157, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-14', '885338.pdf', 'GUFKHNS'),
(55, 158, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-14', '465074.jpeg', 'FH0N7U1'),
(56, 161, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-17', '23691.pdf', 'UAB0DXL'),
(57, 143, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-18', '167192.pdf', '7Y5BIU9'),
(58, 166, 10000, 'bank', '', 'Entrance Examination Fee', '2021-05-19', '853253.jpg', '05ZD7CW'),
(59, 165, 10000, 'bank', '', 'Entrance Examination Fee', '2021-07-19', '392366.pdf', 'ISP4W3T');

-- --------------------------------------------------------

--
-- Table structure for table `prefect`
--

CREATE TABLE `prefect` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(55) DEFAULT NULL,
  `user` varchar(100) DEFAULT NULL,
  `created` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slidder`
--

CREATE TABLE `slidder` (
  `id` int(11) NOT NULL,
  `image` text,
  `status` tinyint(1) DEFAULT '0',
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='States in Nigeria.';

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross River'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'FCT'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT 'NULL',
  `mname` varchar(255) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `reff_by` varchar(110) DEFAULT NULL,
  `status` varchar(9) NOT NULL DEFAULT 'Active',
  `created` varchar(200) DEFAULT NULL,
  `ffname` varchar(200) DEFAULT NULL,
  `femail` varchar(200) DEFAULT NULL,
  `fphone` varchar(255) DEFAULT NULL,
  `foaddr` text,
  `faddr` text,
  `foccu` varchar(255) DEFAULT NULL,
  `mfname` varchar(255) DEFAULT NULL,
  `memail` varchar(255) DEFAULT NULL,
  `mphone` varchar(40) DEFAULT NULL,
  `moaddr` text,
  `maddr` text,
  `moccu` varchar(255) DEFAULT NULL,
  `gfname` varchar(255) DEFAULT NULL,
  `gphone` varchar(40) DEFAULT NULL,
  `gemail` varchar(255) DEFAULT NULL,
  `goaddr` text,
  `gaddr` text,
  `goccu` varchar(255) DEFAULT NULL,
  `preclass` varchar(255) DEFAULT NULL,
  `classenrol` varchar(255) DEFAULT NULL,
  `lga` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `preschool` varchar(255) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `passport` varchar(100) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `birthcert` varchar(100) DEFAULT NULL,
  `examdate` varchar(40) DEFAULT NULL,
  `examcode` varchar(40) DEFAULT NULL,
  `center` varchar(255) DEFAULT NULL,
  `studentcode` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `email`, `gender`, `phone`, `reff_by`, `status`, `created`, `ffname`, `femail`, `fphone`, `foaddr`, `faddr`, `foccu`, `mfname`, `memail`, `mphone`, `moaddr`, `maddr`, `moccu`, `gfname`, `gphone`, `gemail`, `goaddr`, `gaddr`, `goccu`, `preclass`, `classenrol`, `lga`, `nationality`, `preschool`, `dob`, `state`, `passport`, `payment`, `birthcert`, `examdate`, `examcode`, `center`, `studentcode`) VALUES
(22, 'ADEDEJI', NULL, 'OLUKOKUN', 'olukokun@hotmail.com', NULL, '+447824619627', NULL, 'Unpaid', '2021-02-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '174038.jpg', NULL, '905951.jpg', NULL, NULL, NULL, 'GF7HH80'),
(24, 'CHIDOZIE', 'IVAN', 'OGBU', 'chika4god07@yahoo.com', 'Male', '08033746762', NULL, 'Paid', '2021-02-13', 'OGBU COLLINS OKAFOR', 'collins_ogbu@yahoo.uk.co ', '08033036474', 'PLOT 202 ETIM INYANG CRESCENT , VICTORIA ISLAND LAGOS .', 'ROAD 4, HOUSE 20C , FEMI OKUNNU ESTATE, PHASE 2, LEKKI , LAGOS.', 'GAS & OIL MARKETER ', 'OGBU ', 'chika4god07@yahoo.com ', '08033746762', '  20 C , FEMI OKUNNU ESTATE , PHASE 2,  LAGOS ', 'ROAD 4, HOUSE 20C , FEMI OKUNNU ESTATE , PHASE 2, LEKKI , LAGOS .', 'SELF EMPLOYED ', 'MR & MRS OGBU COLLINS & CHIKA ', '08033036474 / 08033746762', 'collins_ogbu@yahoo.uk.co, chika4god07@yahoo.com ', 'PILOT 202 , ETIM INYANG CRESCENT, VICTORIA ISLAND LAGOS. ', 'RD 4, HSE 20C , FEMI OKUNNU EST. PHSE 2 , LEKKI , LAGOS ', 'GAS & OIL MAKETER ', 'PRIMARY 6', 'JS 1', 'NSUKKA', 'NIGERIAN', 'CORONA PRIMARY SCHOOL LEKKI, LAGOS ', '2009-04-21', 'ENUGU ', '000100.jpeg', NULL, '905951.jpg', NULL, 'M806O1A', 'Lagos', 'M806O1A'),
(26, 'Oluwadunbarin', 'Ayomikun', 'Komolafe', 'komolafeonome@yahoo.com', NULL, '08034023702', NULL, 'Paid', '2021-02-13', 'Olujinmi Komolafe', 'ojimme@gmail.com', '08034023702', '48/50 Odumlami Street, Lagos', '5, Onanuga Street, Magodo', 'Telecome Engineer', 'Onome Komolafe', 'komolafeonome@yahoo.com', '07034049289', ' Nigeria Stock Ex Building, Lagos', '5, Onanuga Street, Magodo', 'Operation Manager', '', '', '', '', '', '', '5', 'JSS1', 'Obokun', 'Nigeria', 'Straight Gate Primary School, magodo', '2010-12-10', 'Osun', '616928.jpeg', NULL, '309208.jpeg', NULL, 'E706O11', 'Online', 'E706O11'),
(28, 'Oyinkan', NULL, 'Diya Awosika', 'oyinkanawosika@gmail.com', NULL, '08052223868', NULL, 'Unpaid', '2021-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'E706OMM'),
(29, 'CHIMEREMEZE', 'GODSWILL', 'OKEZIE', 'anobisarha@gmail.com', 'Male', '08132812743', NULL, 'Paid', '2021-02-15', 'KENNEDY IFEANYICHUKWU OKEZIE', 'ugochijoy123@yahoo.com', '08033233922', 'PLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATEPLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATE', 'PLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATE', 'GEOLOGIST/BUSINESS', 'MRS UGOCHINYERE JOY OKEZIE', 'ugochijoy123@yahoo.com', '234 909 852 0404', ' PLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATEPLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATE', 'PLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATEPLOT 961,64ROAD ,6TH  AVENUE FESTAC TOWN LAGOS, LAGOS STATE', 'BUSINESS', '', '', '', '', '', '', 'Primary six', 'BSIC 7', 'Umuahia South', 'Nigeria', 'Lagos creative palms school,  Festac Town lagos', '2011-06-23', 'ABIA STATE', '972413.jpg', NULL, '354389.jpg', NULL, NULL, 'Online', 'E706O5N'),
(37, 'Chinenye', 'Chikanyima', 'odinamadu', 'amygifted86@gmail.com', 'Female', '09038380644', NULL, 'Paid', '2021-02-18', 'Kingsley Odinamadu ', 'kingsgrant2010@yahoo.com', '08035293990', 'No 77 Ojuelegba road surulere lagos ', 'Plot 2 Adewoye Abolarin street peace estate Amuwo Odofin ', 'Business ', 'Amara Chinenye Odinamadu', 'amalaonekamma@yahoo.com ', '09038380644', ' No 77 Ojuelegba road surulere lagos ', 'Plot 2 Adewoye Abolarin street  peace estate Amuwo Odofin.', 'Interior designer ', 'Chinenye madu', '08037812229', 'amykings2k10@yahoo.com', 'No 77 ojuelegba road surulere lagos ', 'Plot 2 Adewoye Abolarin street  peace estate Amuwo Odofin.', 'Business ', 'Year 5', 'Basic 7', 'Idemili south  ', 'Nigerian', 'Goshen pillars Montessori  school', '2021-03-31', 'Anambra  state', '89342.jpeg', NULL, '935439.jpeg', NULL, NULL, 'Lagos', 'NXOZ435'),
(39, 'Naomi', 'Ashioma', 'Enudi', 'jonathan.enudi@yahoo.com', 'Female', '08022243487', '', 'Paid', '2021-02-19', 'Jonathan Enudi', 'jonathanenudi@yahoo.com', '08022243487', '57a Oyinkan Abayomi Drive,Ikoyi,Lagos', '1b Soyombo Close,Victory Estate, Ajah', 'Commercial /Operation Management', 'Ogechi Enudi', 'ogechi.madu@yahoo.com', '08023354414', 'Ahmadu Bello Way, Victoria Island', '1b Soyombo Close,Victory Estate, Ajah', 'Banking', '', '', '', '', '', '', 'Grade 5', 'JSS 1', 'Ukwani', 'Nigerian', 'Child of Promise School', '2010-12-26', 'Delta', '771952.jpeg', NULL, '69029.jpeg', NULL, NULL, NULL, '89JWCTU'),
(42, 'Oluwatobi', NULL, 'Omoleye', 'ojo.omoleye16@kwasu.edu.ng', NULL, '08088463347', '', 'Unpaid', '2021-02-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XZUV59L'),
(43, 'AMINA', NULL, 'ABIODU', 'AMINA ABIODU @GMAIL.COM', NULL, '08021387492', '', 'Unpaid', '2021-02-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7T9HAKJ'),
(48, 'OLUWASEMILORE', 'MOYOSORE', 'TAIWO', 'taiwooluwaseun55@yahoo.com', 'Male', '08035616980', '', 'Paid', '2021-02-22', 'MR. FELIX BABATUNDE TAIWO', 'FELIX.TAIWO13@GMAIL.COM', '08028840427', 'UNITED BANK FOR AFRICA HEAD OFFICE, MARINA, LAGOS', 'BLOCK C, FLAT 3 , ALAPERE ESTATE, KETU, LAGOS', 'BANKING', 'MRS. OLUWASEUN MOYIN TAIWO', 'TAIWOOLUWASEUN55@YAHOO.COM', '08035616980', ' UBL INSURANCE BROKERS LTD, 2 DAVIES STREET, OFF MARINA, LAGOS.', 'BLOCK C, FLAT 3 , ALAPERE ESTATE, KETU, LAGOS', 'ACCOUNTING', '', '', '', '', '', '', 'YEAR 6', 'JSS 1', 'IREPODUN', 'NIGERIAN', 'CALEB INTERNATIONAL SCHOOL, MAGODO, LAGOS.', '2011-09-19', 'KWARA', '994546.jpg', NULL, '331522.pdf', NULL, NULL, 'Ofada', 'MUJIN2T'),
(51, 'Inioluwa', 'Paul', 'Shoneye', 'abussygirl@gmail.com', NULL, '08188164627', '', 'Paid', '2021-02-22', 'Oluwaseye Shoneye', 'seyeshoneye@gmail.com', '08023923316', 'Orchid Hotel Road', 'Victoria Crest Estate', 'Engineer', 'Oladotun Shoneye', 'abussygirl@gmail.com', '08188164627', ' Orchid Hotel Road', 'Victoria Crest Estate', 'Financial Services', 'Temitope Popoola', '08096522929', 'tshoneye@yahoo.com', 'Penny Mall, The Providence Street, Lekki Phase 1', 'Ladega Close, Chevy View Estate', 'Entrepreneur', 'Primary 5', 'JSS 1', 'Abeokuta', 'Nigeria', 'Pampers Private School', '2011-04-07', 'Ogun State', '4112.png', NULL, '493915.pdf', NULL, 'QM6JB3A', 'Lagos', 'QM6JB3A'),
(52, 'Tobanimi', NULL, 'fagbemi', 'muyiwafagbemi@yahoo.co.uk', NULL, '08027711168', '', 'Unpaid', '2021-02-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WQTCZAN'),
(65, 'Aderayo  Monteleolaoluwa', NULL, 'Derin-Adefuwa', 'getrowe@yahoo.com', NULL, '08023437825', '', 'Unpaid', '2021-02-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'UD1BP5X'),
(66, 'Davida', 'Ojorebolumi', 'Odumah', 'imaobongj@yahoo.com', 'Female', '08023014281', '', 'Paid', '2021-02-24', 'Kingsley Odumah', 'odumahkingsley@yahoo.com', '08033034461', 'NAFDAC, 10-15 Mobil road, Apapa, Lagos.', '1, Oba M.D. Adebowale Street, Off Prince Dapo Akande Street, Marshy Hill Estate, Akins Bus stop, Addo road, Ajah, Lagos.', 'Civil Servant', 'Ima-obong E. Odumah', 'imaobongj@yahoo.com', '08023014281', ' Dominion Plaza, 73 Badore road, Ajah, Lagos.', 'same as above', 'Entrepreneur', 'Agnes N. Essien', '08024549214', 'tatchywilfred@gmail.com', '40, Ikot Abasi street, Uyo, Akwa Ibom', '12, Emmanuel Umoren Street, Uyo, Akwa Ibom', 'Clergy', 'Primary 6', 'JSS 1', 'Oshimili North', 'Nigerian', 'Kiddie Quest Montessori School', '2009-10-29', 'Delta State', '898537.jpg', NULL, '620045.jpg', NULL, '4TGW2FO', 'Lagos', '4TGW2FO'),
(67, 'Oluwashindara', 'Oluwadamilare', 'Abina', 'tinuabina@yahoo.com', 'Female', '08077777171', '', 'Paid', '2021-02-24', 'Ayodele ABINA', 'abinaayodele106@yahoo.com', '08050888808', '3/5 Wakeel Sotire Street, Bayeku, Ikorodu', 'Blk 59, LSDPC Estate, Ebute Metta, Lagos', 'Business', 'Tinuola ABINA', 'tinuabina@yahoo.com', '08077777171', ' 7A, Oluwa Road, Ikoyi. Lagos', 'Blk 59, LSDPC Estate, Ebute Metta, Lagos', 'Geosciences', '', '', '', '', '', '', 'Year 6', 'JSS1', 'Lagos Island', 'Nigerian', 'Gloryville School, Ebute Metta, Lagos', '2010-06-05', 'Lagos', '935136.jpeg', NULL, '450841.jpeg', NULL, 'N809JSV', 'Lagos', 'N809JSV'),
(69, 'Samuel', NULL, 'Ojewole', 'SAMOJES@YAHOO.COM', NULL, '08033475655', '', 'Unpaid', '2021-02-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'V75WZ81'),
(72, 'VICTOR', 'IYIADE', 'ADEYEYE', 'yinkabose@yahoo.com', 'Male', '+2348034950719', '', 'Paid', '2021-02-26', 'VICTOR OLADEJI ADEYEYE', 'vioyeye@yahoo.com', '+2348067651916', 'CNL, HOSPITAL ROAD, WARRI, DELTA STATE', 'HOUSE 72, OAUTHC PHASE III STAFF QUATRES, ILE-IFE,OSUN STATE', 'MEDICAL DOCTOR', 'GRACE ABOSEDE ADEYEYE', 'yinkabose@yahoo.com', '+2348034950719', ' DEPT OF MEDICINE, OAUTHC, ILE-IFE', 'HOUSE 72, OAUTHC PHASE III STAFF QUATRES, ILE-IFE, OSUN STATE', 'MEDICAL DOCTOR', 'ARCH AND MRS OLAYINKA OLAYIWOLA ABIODUN', '+2347030137446', 'layibos@yahoo.com', 'MINISTRY OF WORKS AND HOUSING, LAGOS STATE', 'AREPO, OGUN STATE', 'ARCHITECT', 'PRIMARY 5', 'JSS ONE', 'IFE NORTH', 'NIGERIAN', 'ELEVE GIFTED MINDS&#39; SCHOOL', '2012-06-24', 'OSUN STATE', '268801.jpg', NULL, '303408.pdf', NULL, 'G1UL3JQ', 'Ofada', 'G1UL3JQ'),
(74, 'Daniel', 'Chidera', 'Duru', 'mindlaw2000@yahoo.com', 'Male', '8037162852', '', 'Paid', '2021-02-28', 'John Duru', 'mindlaw2000@yahoo.com', '08037162852', 'Suite 302, No. 5 Force Road Onikan Lagos Island', '4B Nacomyo Avenue Lekki County', 'Legal Practitioner', 'Rosemary Duru', 'rosamak048@gmail.com', '08023466103', ' Suite 302, No. 5 Force Road Onikan Lagos Island', '4B Nacomyo Avenue Lekki County', 'Legal Practitioner', '', '', '', '', '', '', 'Primary 6', 'JSS 1', 'Ideato South', 'Nigerian', 'SS Peter and Paul', '2010-09-23', 'Imo State', NULL, NULL, NULL, NULL, 'EVA6H8J', 'Lagos', 'EVA6H8J'),
(77, 'Chimnadindu', 'Jesse', 'Edward', 'edwardifeanyijp@gmail.com', 'Male', '+2348022228402', '', 'Paid', '2021-03-01', 'Edward Ifeanyi', 'edwardifeanyijp@gmail.com', '+2348029580029', '54 Marina, Wema Towers, Lagos', '9 Onowu Amiri Street, Runview Estate, Richfield, Ajao Estate, Isolo/Oshodi, Lagos', 'Banking', 'Edward Uche Clare', 'uchezie@yahoo.com', '+2348022228402', ' 35 Fatai Irawo Street, Ajao Estate, Isolo/Oshodi, Lagos', '9 Onowu Amiri Street, Runview Estate, Richfield, Ajao Estate, Isolo/Oshodi, Lagos', 'Consultant', '', '', '', '', '', '', 'Year 5', 'Year 7', 'Ihitte/ Uboma', 'Nigerian', 'Ridgeway Montessori School', '2011-05-22', 'Imo', '649905.jpg', NULL, '984365.jpg', NULL, 'L87M34E', 'Lagos', 'L87M34E'),
(80, 'OLUWASEUNFUNMI', 'MARVEL', 'ABIOYE', 'funke.abioye@yahoo.com', 'Male', '+2348028275124', '', 'Paid', '2021-03-01', 'RAPHAEL ABIOYE', 'rabioye@gmail.com', '+2318155570543', '21 Adeola Odeku street. VI', '1, Riverbrook road, Lekki', 'Accountancy', 'Olufunke Abioye', 'funke.abioye@yahoo.com', '+2348028275124', ' 26, Adetokunbo Ademola Street, VI', '1.Riverbrook road, Lekki', 'accountancy', '', '', '', '', '', '', 'YEAR 6', 'JSSI', 'OYUN', 'NIGERIA', 'CORONA SCHOOL,IKOYI', '2010-05-06', 'KWARA', '148481.jpeg', NULL, '273020.jpg', NULL, 'PKE63HM', 'Lagos', 'PKE63HM'),
(83, 'Cornelius', 'Osimokha', 'Oshiobor', 'biguncle_1@yahoo.co.uk', 'Male', '07034126977', '', 'Paid', '2021-03-02', 'Cornelius Oghenakhogie Oshiobor', 'biguncle_1@yahoo.co.uk', '07034126977', 'West African Gas Pipeline Limited.  Ajido Badagry Lagos', 'Plot 2 block AP residential area 8 OPIC estate Agbara Ogun State', 'Mechanical Engineer', 'Gift Efeotse Oshiobor', 'efe_shantel@yahoo.com', '07039540407', ' GAVO casuals Plot 2 block AP residential area 8 OPIC estate Agbara Ogun State', 'Plot 2 block AP residential area 8 OPIC estate Agbara Ogun State', 'Fashion Designer', '', '', '', '', '', '', 'Primary 6', 'Junior Seconary 1 (JSS1)', 'Etsako East', 'Nigerian', 'Loral International School', '2011-02-11', 'Edo', '724675.jpg', NULL, '283090.jpg', NULL, 'WI4V25J', 'Ofada', 'WI4V25J'),
(87, 'Henry', NULL, 'Afere', 'henryafere734@gmail.com', NULL, '09041254045', '', 'Unpaid', '2021-03-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KLN7BCO'),
(88, 'Ayooluwa', 'Alexander', 'Majiyagbe', 'omotolamajiyagbe@yahoo.com', 'Male', '08035709330', '', 'Paid', '2021-03-04', 'TUNDE MAJIYAGBE', 'bmajiyagbe@gmail.com', '08033774309', 'IBTC PLACE, WALTER CARRINGTON CRESCENT, V.I, LAGOS', '22, AMUSA STREET, ILASAMAJA', 'BANKING', 'Omotola Majiyagbe', 'omotolamajiyagbe@yahoo.com', '08035709330', ' MASSEY STREET CHILDREN&#39; HOSPITAL, LAGOS ISLAND, LAGOS', '22, AMUSA STREET, ILASAMAJA', 'MEDICAL DOCTOR', 'TUNDE MAJIYAGBE', '08033774309', 'bmajiyagbe@gmail.com', 'IBTC PLACE, WALTER CARRINGTON CRESCENT, V.I, LAGOS', '22, AMUSA STREET, ILASAMAJA', 'BANKING', 'YEAR 5', 'JSS1', 'ABEOKUTA SOUTH', 'Nigeria', 'KIDS&#39; COURT SCHOOL, SURULERE ', '2011', 'OGUN', '121011.jpg', NULL, '328161.pdf', NULL, '97SD0MN', 'Lagos', '97SD0MN'),
(89, 'Chizaram', NULL, 'Nzewuenyi', 'diankci@yahoo.com', NULL, '08069760324', '', 'Unpaid', '2021-03-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'YCP9217'),
(90, 'Kelechi Victor', 'Victor', 'Umeh', 'ar_nold_21@yahoo.co.uk', 'Male', '08035201405', '', 'Paid', '2021-03-05', 'Umeh Nnaemeka Oliver Arnold', 'nnaemeka.umeh@shell.com', '08035201405', 'Shell Nigeria Exploration & Production Company Ltd, 21/22 Marina Road, Lagos', '13 Columbine Street, Northern Foreshore, Lekki, Lagos', 'Engineer', 'Umeh Okwudili Stephanie', 'okwudilie@yahoo.com', '08037572624', ' ', '13 Columbine Street, Northern Foreshore, Lekki, Lagos', 'Self-Employed', 'Umeh Nnaemeka Oliver Arnold', '08035201405', 'nnaemeka.umeh@shell.com', 'Shell Nigeria Exploration & Production Company Ltd, 21/22 Marina Road, Lagos', '13 Columbine Street, Northern Foreshore, Lekki, Lagos', 'Engineer', 'Year 6', 'JSS 1', 'Umuahia South', 'Nigeria', 'Bridging Gaps School, Lekki, Lagos', '2009-12-15', 'Abia', '239339.jpg', NULL, '103261.pdf', NULL, 'M1VWAZ2', 'Lagos', 'M1VWAZ2'),
(92, 'Oyinloye', NULL, 'Inioluwa', 'oyinbisaac@gmail.com', NULL, '08033923168', '', 'Unpaid', '2021-03-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CFNRYAS'),
(94, 'Gabriella', 'Ebunifeoluwa ', 'Emmanuel', 'solujosun@yahoo.co.uk', 'Female', '07058223010', '', 'Paid', '2021-03-08', 'Theophilus Emmanuel ', 'Xmodamo@gmail.com ', '+2348080749075', '14A sasegbon street, ikeja GRA', '63 Oyedele ogunniyi street, Anthony village, Lagos', 'Cinematographer ', 'Seyi Emmanuel ', 'solujosun@gmail.com ', '07058223010', ' 5 kunke aresa street', '63 oyedele ogunniyi  street, Anthony ', 'Engineer', '', '', '', '', '', '', 'Pry 6', 'JS1', 'Ado-Ekiti', 'Nigerian ', 'Corona School, Gbagada', '2010-04-09', 'Ekiti', '566425.jpeg', NULL, '129647.jpg', NULL, '9ZLD340', 'Ofada', '9ZLD340'),
(97, 'OLUWAJOMILOJU NAOMI', 'NAOMI', 'OJO', 'bimbora1010@gmail.com', 'Female', '07080478770', '', 'Paid', '2021-03-09', 'OJO FRANKLIN MOBOLAJI', 'mobolajif2@yahoo.co.uk', '08088805908', 'INDUSTRIAL TRAINING FUND APAPA LAGOS', '2, FARO OJORA CLOSE OFF JAMES ROBERTSON STREET SURULERE', 'PUBLIC SERVANT', 'OJO ABIMBOLA OLAIDE', 'bimbora1010@gmail.com', '07080478770', ' LIRS ALAKA SURULERE', '2, FARO OJORA CLOSE OFF JAMES ROBERTSON STREET SURULERE', 'LAWYER/ TAX ADMINISTRATOR', '', '', '', '', '', '', 'Primary six', 'BSIC 7', 'OGBOMOSHO', 'Nigeria', 'VANTAGE HEIGHTS NUR/PRY SCHOOL', '2010-12-08', 'OYO', '897416.jpeg', NULL, '751848.jpeg', NULL, NULL, 'Online', 'IE32B1D'),
(98, 'OLUWAFOLAKEMI', 'GRACE', 'ABIOYE', 'funke.abioye@yahoo.com', 'Female', '+2348028275124', 'PKE63HM', 'Paid', NULL, 'RAPHAEL ABIOYE', 'rabioye@gmail.com', '+2318155570543', '21 Adeola Odeku street. VI', '1, Riverbrook road, Lekki', 'Accountancy', 'Olufunke Abioye', 'funke.abioye@yahoo.com', '+2348028275124', ' 26, Adetokunbo Ademola Street, VI', '1.Riverbrook road, Lekki', 'accountancy', '', '', '', '', '', '', 'SS1', 'SSI', 'OYUN', 'NIGERIA', 'LAGOON SCHOOL, LEKKI', '2006-12-06', 'KWARA', '417062.jpeg', NULL, '453638.docx', NULL, NULL, 'Lagos', 'AY0S1W5'),
(99, 'COVENANT', NULL, 'OKON', 'etubom1@yahoo.com', NULL, '08035059823', '', 'Unpaid', '2021-03-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WEO8V3S'),
(102, 'Aguguo', 'Zite', 'Chigozie', 'eppnigeria@gmail.com', NULL, '08023127806', '', 'Paid', '2021-03-12', 'Chigozie Aguguo', 'Available', '08023127806', 'Available', '53 A, Diamond Close Raji Rasaqi Est.', 'Available', 'Happiness Aguguo', 'Available', '08062753358', ' Available', 'Available', 'Available', '', '', '', '', '', '', '5', 'JSS1', 'Nwangble', 'Nigeria', 'The Brain', '2010-01-01', 'Imo', '107501.png', NULL, '678056.jpeg', NULL, NULL, 'Ofada', 'GPUSYR2'),
(103, 'Chinemerem', NULL, 'Ihekweazu', 'utihekweazu@gmail.com', NULL, '08036696079', '', 'Unpaid', '2021-03-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NF07TRI'),
(104, 'Temiloluwa', 'Ademola', 'Odetundun', 'Adesola.Odetundun@gmail.com', 'Male', '08131537953', '', 'Unpaid', '2021-03-16', 'Olabode Odetundun', 'buddy1970us@yahoo.com', '08066707935', 'Polaris Bank Limited, Akin Adesola victoria island , Lagos', 'No 8 Pearl Nuga Park Estate off Monastery road, Sangotedo, lagos', 'Investment banker', 'Adesola Odetundun', 'Adesola.Odetundun@gmail.com', '08131537953', ' ', 'No 8 Pearl Nuga Park Estate off Monastery Road, Sangotedo,lagos', 'Entrepreneur', '', '', '', '', '', '', 'Primary 5', 'Junior Secondary 1', 'Irepodun ', 'Nigerian', 'Corona school lekki', '2010-09-22', 'Kwara', '116165.jpg', NULL, '543675.jpg', NULL, '65G3SNT', 'Abuja', '65G3SNT'),
(105, 'Oyedeji', 'Oluwadarasimi', 'Oluwasegun', 'oyedejioluwasegundaree@gmail.com', 'Female', '08031303829', '', 'Unpaid', '2021-03-16', 'Oyedeji Oluwasegun', 'oyedejioluwasegundaree@gmail.com', '+2348031303829', '', '12b Vincent Eze Street Ajao Estate, Lagos', 'Sales Manager', 'Oyedeji Kehinde', 'oyedejioluwasegundaree@gmail.com', '08127888053', ' ', '12b Vincent Eze Street Ajao Estate, Lagos', 'Business woman', '', '', '', '', '', '', 'Basic 4', 'Jss1', 'Boluwaduro', 'Nigeria', 'Enjoy Nursery and primary school', '2021-03-05', 'Sound state', NULL, NULL, NULL, NULL, 'EU9YDS4', 'Abuja', 'EU9YDS4'),
(106, 'Oluwaseyitan', 'Maximilian ', 'Famoroti', 'adebolay@yahoo.com', 'Male', '08139535913', '', 'Paid', '2021-03-17', 'oluwaseun famoroti', 'seun.famoroti@gmail.com', '08023175894', 'airport road ikeja', '22/24 bolodeoku street, dideola estate, ogba', 'banking', 'adebola Famoroti ', 'adebolay@yahoo.com ', '08139535913', ' 15A, thomas salako street ogba, Lagos', '22/24 bolodeoku street, dideola estate, ogba', 'business consultant', 'Mr & Mrs Famoroti', '08139535913', 'adebolay@yahoo.com ', ' 15A, thomas salako street ogba, Lagos', '22/24 bolodeoku street, dideola estate, ogba', 'business consultant', 'primary 6', 'JSS1', 'ifako/ijaiye', 'Nigerian ', 'Role model school', '2010-07-18', 'ekiti', '687842.jpg', NULL, '538819.pdf', NULL, 'BZU5H8Q', 'Online', 'BZU5H8Q'),
(107, 'Oluwafunke', NULL, 'Odurole', 'funkyytee@gmail.com', NULL, '08179952457', '', 'Unpaid', '2021-03-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'K41UWIY'),
(108, 'Naomi', 'OGHENEVIYEZE OSEREMEN', 'onomerike', 'honomerike94@gmail.com', 'Female', '08033027026', '', 'Paid', '2021-03-17', 'RAYMOND AFURIOTA ONOMERIKE', 'raymondonomerike@gmail.com', '08023132353', 'PORTAL XPRESS, SUITE D258 IKOTA LEKKI', '6 BALOGUN CLOSE, MARSHY HILL ESTATE, OKE IRAH AJAH LAGOS', 'ENTREPRNUER', 'helen onomerike', 'honomerike94@gmail.com', '08033027026', 'OKE IRA', '6 BALOGUN CLOSE, MARSHY HILL ESTATE,', 'ENTREPRENEUR, TRAVEL AND FOOD', '', '', '', '', '', '', 'PRIMARY SIX', 'JSS1', 'NDOKWA NORTH EAST', 'NIGERIAN', 'KIDDIE QUEST MONTESSORI SCHOOL THOMAS ESTATE AJAH ', '2010-06-03', 'DELTA', '101801.jpg', NULL, '887550.pdf', NULL, '2IMTYS0', 'Online', '2IMTYS0'),
(109, 'sonia', 'Chidera ', 'IWUOHA', 'donsonate@yahoo.com', 'Male', '08106705384', '', 'Unpaid', '2021-03-19', 'Brian Iwuoha', 'donsonate@yahoo.com ', '08106705384', '', '58yaounde street Wuse Zone 6', 'Entrepreneur ', 'Sonia Christina Iwuoha', 'donsonate@yahoo.com ', '08106705384', ' ', '58 yaounde street Wuse Zone 6', 'Entrepreneur ', '', '', '', '', '', '', 'Grade 5', 'J.S.S 1', 'Isiala Mbani ', 'Nigerian', 'Royal family academy ', '2011-03-11', 'Imo', NULL, NULL, NULL, NULL, 'LVS968H', 'Abuja', 'LVS968H'),
(110, 'Oyinloye', NULL, 'Deborah', 'eniolaoyinloye021@gmail.com', NULL, '08033923168', '', 'Unpaid', '2021-03-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4P18CKH'),
(111, 'Oyinloye', NULL, 'Heritage', 'eniolaoyinloye021@gmail.com', NULL, '08033923168', '', 'Unpaid', '2021-03-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HJCB8VU'),
(112, 'Rejoice', NULL, 'Duru-Paul', 'durupaul22@gmail.com', NULL, '08034122118', '', 'Paid', '2021-03-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120919.jpg', NULL, '929193.jpg', NULL, NULL, NULL, '9PDOURI'),
(113, 'Rejoice', NULL, 'Duru-Paul', 'durupaul222@gmail.com', NULL, '08034122118', '', 'Unpaid', '2021-03-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '04QC2GZ'),
(114, 'Christabel  sochikanyima', ' Sochikanyima', 'Odinamadu', 'anobisarha@gmail.com', 'Female', '234 903 838 064', '', 'Paid', '2021-03-29', 'Odinamadu Kingsley obi ', 'amalaonekamma@yahoo.com  ', '08035293990', '77 Ojuelegba road surulere, Lagos.', ' plot 2 Adewoye Abolarin street peace estate Amuwo Odofin, Lagos state ', 'Business man', 'Odinamadu Amara chinenye ', 'amalaonekamma@yahoo.com ', '  09038380644 ', ' 77 Ojuelegba road surulere, Lagos.', 'plot 2 Adewoye Abolarin street peace estate Amuwo Odofin, Lagos state ', ' interior designer', '', '', '', '', '', '', 'Primary Five', 'BSIC 7', ' Idemili south', 'Nigeria', 'Goshen pillars Montessori  school', '2011-03-31', 'Anambra ', '251510.jpeg', NULL, '521007.jpeg', NULL, '2G8YM4E', 'Abuja', '2G8YM4E'),
(115, 'love', NULL, 'yinka', 'anobisarha@gmail.com', NULL, '08132812743', '', 'Unpaid', '2021-03-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9YGBHQK'),
(116, 'Triumph Chimgozirim.', ' Chimgozirim', 'Madugba', 'anobisarha@gmail.com', 'Female', '08132812743', '', 'Paid', '2021-03-29', 'Madugba Nnanyereugo Ugwumba', 'numzyenterprise@gmail.com', '08026653509                    08101053363', 'Numzy Enterprises(Transportation and Logistics) 6 Ayo Otuyemi drive Genesis estate Aboru iyana ipaja', 'No 6 Ayo Otuyemi drive , Genesis estate,Aboru,iyana ipaja', 'Transportation and Logistics', 'Madugba Eziuche Olileanya', 'eziuchemadugba2@yahoo.com', '8127014910', ' No 2 Fagbola street Akwonjo ,opp cele bus stop', 'No 6 Ayo Otuyemi drive , Genesis estate,Aboru,iyana ipaja', 'Micro Financier', '', '', '', '', '', '', 'Primary Five', 'BSIC 7', 'Aboh Mbaise', 'Nigeria', ' Amy Hills School', '2011-10-05', 'Imo State', '614243.jpeg', NULL, '703594.jpeg', NULL, 'LVM6K1N', 'Online', 'LVM6K1N'),
(117, 'Oguegbu', NULL, 'Great', 'emmanuelezenwuba200@gmail.com', NULL, '08085124844', '', 'Unpaid', '2021-03-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZVOG4SI'),
(118, 'Great', NULL, 'Chimdindu Oguegbu', 'elochukwujoy@yahoo.com', NULL, '08085124844', '', 'Unpaid', '2021-03-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9T8K5Q0'),
(119, 'Toluwatise', 'Eghonghonre', 'Osimokun', 'temitopeosimokun@gmail.com', 'Female', '08033123236', '', 'Paid', '2021-03-30', 'Temitope O. Osimokun', 'topeosimokun@gmail.com', '08035612955', 'Nigerian Air Force', 'MOQ 3/4, Sam Ethnan Air Force Base, Ikeja, Lagos', 'Soldering/ Medical Doctor', 'Temitope E. Osimokun', 'temitopeosimokun@gmail.com', '08033123236', '2, Mosafejo Close, Ikoyi, Lagos', 'MOQ 3/4,Sam Ethnan Air Force Base, Ikeja, Lagos', 'School Administrator', 'Mr & Mrs Uduokhai', '08036153676', 'eauduokhai@gmail.com', 'Ikoyi, Lagos', 'Peace Estate, 2 Chief Natufe Street, Off Babs Animashaun Street, Surulere, Lagos', 'Sales', 'Year 6', 'Jss 1', 'ijebu East', 'Nigerian', 'Meadow Hall School', '2010-02-04', 'Ogun ', '210889.jpg', NULL, '730556.jpg', NULL, 'P7YTL5B', 'Online', 'P7YTL5B'),
(120, 'Temitope', NULL, 'Osimokun', 'temitopeosimokun@gmail.com', NULL, '08033123236', '', 'Unpaid', '2021-03-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ACQERHJ'),
(121, 'Tiwaladeayo', 'Ohirhebame', 'Osimokun', 'temitopeosimokun@gmail.com', 'Male', '08033123236', 'P7YTL5B', 'Paid', NULL, 'Temitope O. Osimokun', 'topeosimokun@gmail.com', '08035612955', 'MOQ 3/4', 'MOQ 3/4, Sam Ethnan Air Force Base, Ikeja, Lagos', 'Soldering/ Medical Doctor', 'Temitope E. Osimokun', 'temitopeosimokun@gmail.com', '08033123236', '2, Mosafejo Close, Ikoyi, Lagos', 'MOQ 3/4, Sam Ethnan Air Force Base,', 'School Administrator', 'Mr & Mrs Uduokhai', '08036153676', 'eauduokhai@gmail.com', 'Ikoyi, Lagos', 'Peace Estate, 2 Chief Natufe Street, Off Babs Animashaun Street, Surulere, Lagos', 'Sales', 'Jss 2', 'Jss 3', 'ijebu East', 'Nigeria', 'Meadow Hall College', '2008-07-18', 'Ogun', '366598.jpg', NULL, '898813.jpg', NULL, NULL, 'Abuja', 'J0RBGA2'),
(122, 'Olufunmilade', 'Titobiloluwa', 'Ogunfowora', 'oomicinc@gmail.com', 'Male', '+2348032004855', '', 'Paid', '2021-03-31', 'Ogunfowora Michael', 'oomicinc@gmail.com', '+2348032004855', 'ATC Nigeria', '28A Eden Gardens Lekki-Epe expressway ', 'Engineer', 'Ogunfowora Olabisi', 'o.ogunfowora@gmail.com', '+2348032014855', ' Oomic Integrated Farms- Lekki', '28A Eden Gardens Lekki-Epe expressway ', 'Entrepreneur ', '', '', '', '', '', '', 'SS1 (Science)', 'SS1 (Science)', 'Remo North ', 'Nigerian', 'Mater Ecclesiae College Epe', '2007-08-03', 'Ogun', NULL, NULL, NULL, NULL, 'KN6QPLY', 'Online', 'KN6QPLY'),
(123, 'Olufunminiyi', 'Enoch', 'Ogunfowora', 'oomicinc@gmail.com', 'Male', '+2348032004855', '', 'Paid', '2021-03-31', 'Ogunfowora Michael', 'oomicinc@gmail.com', '+2348032004855', 'ATC Nigeria', '28 Eden Gardens Estate, Lekki-Epe Expressway', 'Engineer', 'Ogunfowora Olabisi', 'o.ogunfowora@gmail.com', '+2348032014855', ' oomic Integrated Farms - Lekki', '28 Eden Gardens Estate, Lekki-Epe Expressway', 'Entrepreneur ', '', '', '', '', '', '', 'JSS1', 'JSS1', 'Remo North', 'Nigerian', 'Mater Ecclesiae', '2009-06-04', 'Ogun', '40612.jpg', NULL, '644972.jpg', NULL, 'ERQZHOD', 'Abuja', 'ERQZHOD'),
(125, 'Adeogun', NULL, 'Eniola Joan', 'adeogunedith@gmail.com', NULL, '08054299995', '', 'Unpaid', '2021-04-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4L6KTX7'),
(126, 'Modestus', NULL, 'Igwe', 'katechukwumah2@gmail.com', NULL, '07017838461', '', 'Unpaid', '2021-04-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TFVOZCE'),
(129, 'Prince', 'Udo', 'Edet', 'naijaspeed1@gmail.com', 'Male', '08096097538', '', 'Unpaid', '2021-04-06', 'Udo Edet', 'naijaspeed1@gmail.com', '08096097538', '44 IBB Road, Calabar', '44 IBB Road, Calabar', 'Civil Servant', 'Mrs. Grace Udo', 'naijaspeed1@gmail.com', '08096097538', ' 44 IBB Road, Calabar', '44 IBB Road, Calabar', 'Nil', 'Mrs. Grace Udo', '08096097538', 'naijaspeed1@gmail.com', ' 44 IBB Road, Calabar', ' 44 IBB Road, Calabar', 'Nil', 'SS1', 'SS2', 'Calabar', 'Nigeria', 'Montesori International School', '2021-04-14', 'Cross River ', '577449.jpg', NULL, '25287.jpg', NULL, 'J2RNM3X', 'Abuja', 'J2RNM3X'),
(130, 'Chukwuede', 'Livinus', 'Chibuike', 'egbetayoayodele@gmail.com', 'Male', '08032528593', '', 'Paid', '2021-04-07', 'Chukwuede Livinus Mbanaso', 'livison2003@yahoo.com', '07035036310', ' 14ben bright street Greenfield estate ago palace way okota lag', '  14ben bright street Greenfield estate ago palace way okota lag', 'Business', 'Chukwuede Nzube Rachel', 'livison2003@yahoo.com', '07032130709', ' 14ben bright street Greenfield estate ago palace way okota lag', ' 14ben bright street Greenfield estate ago palace way okota lag', 'Business', '', '', '', '', '', '', 'Year 6', 'Jss1', 'Ihiala', 'Nigerian', 'Goshen Pillars Montessori School', '2011-05-21', 'Anambra', '571318.jpg', NULL, '444375.jpg', NULL, 'EWOITMJ', 'Abuja', 'EWOITMJ'),
(131, 'Anjolaoluwa', 'Adedeji', 'Windapo', 'busayoyinka@yahoo.com', 'Male', '07034057052', '', 'Paid', '2021-04-08', 'Adekunle Windapo', 'kwindapo@gmail.com', '08022225009', 'Dell 1, Adeola Odeku Victoria Island Lagos', 'House 15 The Address Homes Ilasan, Ikate Elegushi, Lekki', 'Technical Sales Engineer', 'Olubusayo Windapo', 'busayoyinka@yahoo.com', '07034057052, 08023162497', ' Schlumberger Nig Ltd 17/19, Idowu Taylor Street, Victoria Island', 'House 15 The Address Homes Ilasan, Ikate Elegushi, Lekki', 'Account Manager', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'Primary 4', 'JSS 1', 'Lagelu', 'Nigerian', 'Saint Saviour Primary School, Ebute Meta, Lagos State', '2012-01-03', 'Oyo State', '959308.jpg', NULL, '22700.pdf', NULL, 'Q1DOUYH', 'Online', 'Q1DOUYH'),
(132, 'Oluwatomisin', 'Joseph', 'Ogunlana', 'olawmi@yahoo.com', 'Male', '08036620519', '', 'Paid', '2021-04-12', 'OGUNLANA KEHINDE GIDEON', 'olawmi@gmail.com', '08036620519', 'RA International School, NLNG RA, Finima, Bonny Island', '8, Port Harcourt Avenue, NLNG RA Finima, Bonny Island', 'Teacher', 'Ogunlana Adebimpe Olasunmbo', 'bimpeadelaja@yahoo.co.uk', '08038291366', ' 8, Port Harcourt Avenue, NLNG RA Finima, Bonny Island', '8, Port Harcourt Avenue, NLNG RA Finima, Bonny Island', 'Trader', '', '', '', '', '', '', 'Year 6', 'JSS 1', 'Ijebu-East', 'Nigeria', 'RA International School', '2010-05-19', 'Ogun', '644573.jpg', NULL, '600374.jpg', NULL, 'G3T4DPK', 'Online', 'G3T4DPK'),
(133, 'FENIYIN', 'CALEB', 'ADEEYO', 'olohitaio@gmail.com', 'Male', '08069524851', '', 'Paid', '2021-04-12', 'SHERRIF ADEEYO', 'adeeyosherrif@gmail.com', '08131221531', '5 oyinkan abayomi drive ikoyi lagos', 'plot 1 c close association avenue arigbede', 'FINANCIAL MANAGER', 'OLOHITAI ADEEYO', 'olohitaio@gmail.com', '08069524851', ' LAGOS STATE INTERNAL REVENUE GOOD SHEPERD BUILDING ALAUSA L', 'PLOT 1 C CLOSE ASSOCIATIN AVENUE ARIGBEDE', 'TAX AUDITOR', '', '', '', '', '', '', 'JSS3', 'SS1', 'EDE', 'NIGERIAN', 'REDEEMERS HIGH SCHOOL', '2008-03-21', 'OSUN', '308647.jpg', NULL, '158719.jpg', NULL, 'R3685XH', 'Abuja', 'R3685XH'),
(134, 'Oluwafeyikemi', 'Olamipo', 'Ojo', 'olawumiojo@yahoo.com', 'Female', '08033018043', '', 'Paid', '2021-04-20', 'Babatunde Olawumi Ojo', 'olawumiojo@yahoo.com', '08033018043', 'CommScope; c/o FOAC Nominees, 188 Awolowo Road, Ikoyi', '13C Aba Johnson Crescent, off Adeniyi Jones Avenue, Ikeja', 'Information Technology', 'Taiwo Folake Ojo', 'taiwofojo@yahoo.com', '08033018044', ' 11, Majekodunmi Street, Ikeja, Lagos', '13C, Aba Johnson Crescent, off Adeniyi Jones Avenue,Ikeja', 'Insurance', '', '', '', '', '', '', 'Year 6', 'JS1', 'Lagos', 'Nigeria', 'Bambini School, Ikeja, Lagos', '2010-04-24', 'Osun', '952379.jpg', NULL, '466503.pdf', NULL, 'KWY8E14', 'Online', 'KWY8E14'),
(135, 'Alex', NULL, 'Johnson', 'ajroyj@gmail.com', NULL, '8178819496', '', 'Unpaid', '2021-04-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '08NIUGE'),
(136, 'Oyeniyi. Oluwadarasimi', 'Elizabeth', 'Elizabeth', 'genpol2006@yahoo.com', 'Female', '08101182298', '', 'Unpaid', '2021-04-30', 'Oyeniyi Adewale Paul', 'genpol2006@yahoo.com', '08101182298', '1st gate G.R.A abijo ajah', '1, alhaji wasiu oluwa abijo ajah', 'Construction', 'Oyeniyi oluwakemi', 'pauloyeniyi49@gmail.com', '07032090132', 'Mrs', '1st Gate G.R.A Abijo Ajah', 'Foodstuffs seller', 'Oyeniyi Adewale Paul', '08101182298', 'genpol2006@yahoo.com', '1st gate G.R.A Abijo ajha', '1, alhaji wasiu oluwa abijo ajah', 'Construction', 'Pry 5', 'G.s.s1', 'Aye daade', 'Nigeria', 'Olatol', '2011-11-30', 'Osun ', NULL, NULL, NULL, NULL, 'ERG1BUZ', 'Lagos', 'ERG1BUZ'),
(137, 'Raphael', NULL, 'Eze', 'eraphael2002@yahoo.com', NULL, '2348055571305', '', 'Unpaid', '2021-04-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'J8VU76Q'),
(138, 'Chidolue', 'Chisom', 'Favour', 'egbetayoayodele@yahoo.com', 'Female', '09065146828', '', 'Paid', '2021-05-01', 'Mr Chidolue', 'chidoluefavour@gmail.com', '09098854047', '27 Email Nzom Green Field Estate', '27 Email Nzom Green Field Estate', 'Business', 'Mra Chidolue', 'chidoluefavour@gmail.com', '09065146828', ' 27 Emak Nzom Green Field Estate', '27 Emak Nzom Green Field Estate', 'Business', '', '', '', '', '', '', 'Year 6', 'Jss1', 'Nnewi north', 'Nigerian', 'Dayspring on high', '2011-01-11', 'Anambra', '836294.jpg', NULL, '188744.jpg', NULL, 'JHPS8I9', 'Lagos', 'JHPS8I9'),
(139, 'Godâ€™sGrace', 'Oluwatofunmi ', 'Alamu', 'pectoria@yahoo.com', 'Female', '08165474696', '', 'Paid', '2021-05-03', 'Abimbola Peter Alamu', 'Abimbola.alamu@yahoo.com', '08165474696', 'The Shell Petroleum Development Company of Nigeria Ltd (SPDC) Port Harcourt ', 'Trophy of Grace House, No 19 Ordu Avenue by Eleto Street, Eliowhani, Port Harcourt, Rivers State, Nigeria', 'Engineering', 'Adeola Victoria Alamu', 'Pectoria@yahoo.com', '08165724223', '  PECTORIA Guesthouse, JATA Stree, Oke-Aanu, Ogbomoso', 'Trophy of Grace House, No 19 Ordu Avenue by Eleto Street, Eliowhani, Port Harcourt, Rivers State, Nigeria', 'Hospitality', 'Abimbola Peter Alamu', '08165474696', 'Abimbola.alamu@yahoo.com', 'The Shell Petroleum Development Company of Nigeria Ltd (SPDC) Port Harcourt ', 'Trophy of Grace House, No 19 Ordu Avenue by Eleto Street, Eliowhani, Port Harcourt, Rivers State, Nigeria', 'Engineering ', 'Year 8', 'Senior Secondary School 1', 'Ogbomoso North', 'Nigerian', 'The British School in The Netherlands', '2008-07-07', 'Oyo', '317292.jpg', NULL, '98634.jpg', NULL, 'AHD3QGW', 'Online', 'AHD3QGW'),
(140, 'Gregory', NULL, 'Elogie', 'gregoryovieh@yahoo.co.uk', NULL, '08064935029', '', 'Unpaid', '2021-05-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'SFT8PGB'),
(141, 'Abiodun', NULL, 'Mubarak', 'ashabimorenikeji8@gmail.com', NULL, '08128135495', '', 'Unpaid', '2021-05-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XDWBNU5'),
(142, 'Daniel', 'Oluwatamilore ', 'Adeyele', 'Oluwakemiadeyele@gmail.com', 'Male', '08036245267', '', 'Paid', '2021-05-06', 'Temitope Adeyele ', 'topeadet@yahoo.com', '08064901929', 'Plot 90 Ajose Adeogun Victoria Island Lagos', '28 Kingsbay Estate Oba Avenue Ikota Villa Estate Lekki Lagos ', 'Engineer ', 'Keni Adeyele', 'Oluwakemiadeyele@gmail.com ', '08036245267', '6A Saheed Ola Adelekan Close Lekki phase 1', '28 Kingsbay Estate Oba Avenue Ikota Villa Lekki Lagos ', 'Human Resource ', '', '', '', '', '', '', 'Primary 5', 'JSS 1', 'Yagba West', 'Nigerian', 'Kiddie Quest Montessori School', '2011-11-10', 'Kogi', '155518.jpg', NULL, '7479.jpg', NULL, '7Y5BIU9', 'Lagos', '7Y5BIU9'),
(143, 'Oluwatomisin', NULL, 'Ogunlana', 'olawmi@gmail.com', NULL, '08036620519', '', 'Unpaid', '2021-05-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DZIG1M2'),
(144, 'Timinipre Irene', NULL, 'Egberipou', 'irene26@gmail.com', NULL, '07061962925', '', 'Unpaid', '2021-05-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2MW3L4R'),
(145, 'Idobo', NULL, 'Akpan', 'idobogeorge@gmail.com', NULL, '08144348191', '', 'Unpaid', '2021-05-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DVL6N5O'),
(146, 'Ogundare', NULL, 'Aliyah', 'ogunade1233@gmail.com', NULL, '07040964104', '', 'Unpaid', '2021-05-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'J65NM9G'),
(147, 'olofu', NULL, 'francis', 'olofufrancis46@gmail.com', NULL, '07043948472', '', 'Unpaid', '2021-05-09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3TN9AJX'),
(148, 'Favour', NULL, 'Udoka', '', NULL, '08065088623', '', 'Unpaid', '2021-05-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZMQ8250'),
(149, 'Victoria', NULL, 'Enodien', 'brightenodien@gmail.com', NULL, '07040255560', '', 'Unpaid', '2021-05-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZWPAJ8D'),
(150, 'Akintunde', NULL, 'Ogundipe', 'tundecustoms@yahoo.com', NULL, '08067226010', '', 'Unpaid', '2021-05-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3O4XYCP'),
(151, 'Joshua', NULL, 'Giwa', 'jbgiwa@gmail.com', NULL, '08098591294', '', 'Unpaid', '2021-05-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HQZAPW7'),
(152, 'Onomzii', 'Bahago', 'Joshua', 'jbgiwa@gmail.com', 'Female', '08098591294', '', 'Paid', '2021-05-10', 'Joshua Bahago Giwa', 'jbgiwa@gmail.com', '+2348025292360', '4B Augustus Aikhomu Road, Utako, Abuja', 'Road 17, Chidi&#39;s Court', 'Civil Service ', 'Jummai Joshua ', 'jbgiwa@gmail.com', '+2348063202719', '    Road 17, Chidi&#39;s Court, Cluster One Estate, Ikota , Lagos ', 'Road 17, Chidi&#39;s Court, Cluster One Estate, Ikota , Lagos ', 'Private Business', '', '', '', '', '', '', 'Basic 6', 'JS 1', 'Kajuru ', 'Nigeria', 'St. Mary&#39;s Schools, Ikota, Lagos', '2011-06-02', 'Kaduna', '199568.jpg', NULL, '18157.jpg', NULL, '18TULXV', 'Lagos', '18TULXV'),
(153, 'Onomzaa', '', 'Joshua', 'jbgiwa@gmail.com', 'Female', '08098591294', '', 'Paid', '2021-05-10', 'Joshua Bahago Giwa', 'jbgiwa@gmail.com', '+2348025292360', '4B Augustus Aikhomu Road, Utako, Abuja', 'Road 17, Chidi&#39;s Court', 'Civil Service ', 'Jummai Joshua ', 'jbgiwa@gmail.com', '+2348063202719', '  Road 17, Chidi&#39;s Court,Cluster One Estate, Ikota Villa Estates,', 'Road 17, Chidi&#39;s Court,Cluster One Estate, Ikota Villa Estates,', 'Private Business', '', '', '', '', '', '', 'Basic 6', 'JS 1', 'Kajuru ', 'Nigeria', 'St. Mary&#39;s Schools, Ikota, Lagos', '2011-06-02', 'Kaduna', '672836.jpg', NULL, '100150.jpg', NULL, '8YAVMBW', 'Lagos', '8YAVMBW'),
(154, 'Boluwatife-Daniel', NULL, 'Olurinto', 'olurintomorris@gmail.com', NULL, '+234 806 240 63', '', 'Unpaid', '2021-05-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3AIHST4'),
(155, 'Terah', NULL, 'Bot', 'chrisjbot@gmail.com', NULL, '08035142064', '', 'Unpaid', '2021-05-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7EOHZ20'),
(156, 'Eniola Joan', NULL, 'Adeogun', 'Boboyeafolabi@gmail.com', NULL, '07068666097', '', 'Unpaid', '2021-05-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QIJ0RO9'),
(157, 'Eniola Joan', NULL, 'Adeogun', 'anobisarha@gmail.com', NULL, '08132812743', '', 'Unpaid', '2021-05-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B3Q8IDO'),
(158, 'eniola', 'Joan', 'Adeogun', 'anobisarha@gmail.com', 'Female', '08132812743', '', 'Paid', '2021-05-11', 'Samuel Adeogun', 'engrsamuel.adeogun@gmail.com  Or Samuel.adeogun@shell.com', '08054299996', 'SPDC warri Delta state', 'No 1 Agnes Jefia close, off refinery Road Effurun Delta state', 'petroleum Engineer', 'Adeogun Edith', 'Adeogunedith@gmail.com', ':08054299995/08038668432', ' ', 'No 1 Agnes Jefia close, off refinery Road Effurun Delta state', 'self employed', '', '', '', '', '', '', '5', 'BSIC 7', '', 'Nigeria', ':Edjeba Estate school warri Delta state', '2010-10-16', 'Ogun state', '207364.jpeg', NULL, '505917.jpeg', NULL, 'LCUW0EZ', 'Online', 'LCUW0EZ'),
(160, 'Edet', NULL, 'Edem', 'edetedem141@gmail.com', NULL, '08134683705', '', 'Unpaid', '2021-05-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2KVHIO3'),
(161, 'Stella', NULL, 'Maris', 'berisa_st@yahoo.com', NULL, '07032341498', '', 'Unpaid', '2021-05-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8A2SNR5'),
(162, 'Adedemilade', '', 'Akinmade', 'vickykups@yahoo.com', 'Male', '08032013163', '', 'Paid', '2021-05-13', 'Adetola Akinmade', 'knmd4000@gmail.com', '08032003163', 'NATCOM, 5 Cable Street,Marina, Lagos State', '9 Bola Ogunsanya Street, Magodo GRA II, Lagos State', 'Engineer', 'Olufunke V Akinmade', 'vickykups@yahoo.com', '+2348032013163', '22 Oguntolu Street, Shomolu, Lagos State', '9 Bola Ogunsanya Street, Magodo GRA II, Lagos State', 'Project Manager', 'Adetola  Akinmade', '08032003163', 'knmd4000@gmail.com', ' 5 Cable Street, Marina, Lagos State', '9 Bola Ogunsanya Street, Magodo GRA II, Lagos State', 'Engineer', 'Year 5', 'Year 7', 'Ifo', 'Nigerian', 'The Beautiful Beginning School', '2011-02-03', 'Ogun', '51516.jpg', NULL, '348645.pdf', NULL, 'GUFKHNS', 'Lagos', 'GUFKHNS'),
(165, 'Victory osamudiamhen', NULL, 'Ikekhide', 'divconmd@gmail.com', NULL, '08033238655', '', 'Unpaid', '2021-05-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LXOKUDC'),
(166, 'Ojone', NULL, 'Eliana', 'thedove012001@gmail.com', NULL, '08035970786', '', 'Unpaid', '2021-05-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F8PST5L'),
(167, 'Ireoluwamide', 'Victoria', 'Thomas', 'laoluthomas@gmail.com', 'Female', '08023525089', '', 'Paid', '2021-05-17', 'Thomas Albert Olutoye', 'albertolutoyethomas@yahoo.com', '0803 350 7622', 'Berger Paints Plc 120 Oba Akran Avenue Ikeja Lagos', '9 Wakeel Kayode Street, Orimerunmu, Mowe', 'Human Resource Manager', 'Thomas Irene Olaoluwa', 'laoluthomas@gmail.com', '0802 352 5089', '9PSB 16 Adeola Odeku Street Victoria Island Lagos', '9 Wakeel Kayode Street, Orimerunmu, Mowe', 'Lawyer', '', '', '', '', '', '', 'J.S.S.1', 'J.S.S.2', 'Shagamu', 'Nigerian', 'Holy Child College, Ikoyi', '2009-12-28', '', '701155.jpg', NULL, '540809.jpg', NULL, 'UAB0DXL', 'Online', 'UAB0DXL'),
(168, 'Mohammed', NULL, 'Konneh', 'konnehmohammed132@gmail.com', NULL, '0776229251', '', 'Unpaid', '2021-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GWTF8NB'),
(169, 'Oladipupo', NULL, 'Olufowobi', 'Olufowobioladipupo@parent.com', NULL, '08030506249', '', 'Unpaid', '2021-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'W47YMF9'),
(170, 'Oladipupo', NULL, 'Olufowobi', 'abiolaolufowobi4@gmail.com', NULL, '08030506249', '', 'Unpaid', '2021-05-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GOB6KI2'),
(171, 'Inifie', 'Japhet', 'Abraham', 'abinifie_j@yahoo.com', 'Male', '08037588882', '', 'Paid', '2021-05-19', 'Abraham,. Inifie Japhet', 'abinifie_j@yaho.com', '08037588882', 'Plot 447/448 Constitution Avenue, CBD Abuja', 'House 30A Femi Okkunu Estate Phase 2, Lekki Lagos', 'Public Servant', 'Martha Abaham', 'marthalolo@yahoo.com', '08028191993', '  First Bank of Nigeria, Ikota Lekki Lagos', 'House 30A Femi Okkunu Estate Phase 2, Lekki Lagos', 'Banking', '', '', '', '', '', '', 'Year 5', 'JSS 1', 'Nembe', 'Nigerian', 'The Rock Montessori School', '2011-01-17', 'Bayelsa State', '787699.jpg', NULL, '899291.pdf', NULL, 'ISP4W3T', 'Online', 'ISP4W3T'),
(172, 'Victory', 'Osamudiamhen', 'Ikekhide', 'dannyolise@yahoo.com', 'Male', '08039335411', '', 'Paid', '2021-05-19', 'Andy IKEKHIDE ', 'andyikekhide@yahoo.com', '08033238655', 'No 14, Henry Ojogu Street, Lekki Phase One, Lekki Lagos', 'Plot 167, 111rd, Gowon Estate, Ipaja, Lagos ', 'Engineer', 'Faith Ikekhide ', 'faith.ikekhide@yahoo.com', '08023032941', '  The Great Commission (TGC) Christian Network, plot 112, E close, 3rd Avenue, Gowon Estate, Ipaja, Lagos ', 'Plot 167, 111rd, Gowon Estate, Ipaja, Lagos', 'Clergy', 'Faith Ikekhide ', '08023032941', 'faith.ikekhide@yahoo.com', 'The Great Commission (TGC) Christian Network, plot 112, E close, 3rd Avenue, Gowon Estate, Ipaja, Lagos ', 'Plot 167, 111rd, Gowon Estate, Ipaja, Lagos', 'Clergy', 'Primary Six', 'Jss 1', 'Esan Southeast', 'Nigeriqn', 'Ferscoat International School ', '2010-08-28', 'Edo', '481846.jpg', NULL, '1731.pdf', NULL, '05ZD7CW', 'Ofada', '05ZD7CW'),
(173, 'Olufowobi', NULL, 'Oladipupo', 'abiolaolufowobi4@gmail.com', NULL, '08030506249', '', 'Unpaid', '2021-05-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'VQ6U873'),
(174, 'TEMILOLA', NULL, 'ABE', 'christianaopeyemiabe@gmail.com', NULL, '08034977691', '', 'Unpaid', '2021-05-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0UELI2Z');
INSERT INTO `student` (`id`, `fname`, `mname`, `lname`, `email`, `gender`, `phone`, `reff_by`, `status`, `created`, `ffname`, `femail`, `fphone`, `foaddr`, `faddr`, `foccu`, `mfname`, `memail`, `mphone`, `moaddr`, `maddr`, `moccu`, `gfname`, `gphone`, `gemail`, `goaddr`, `gaddr`, `goccu`, `preclass`, `classenrol`, `lga`, `nationality`, `preschool`, `dob`, `state`, `passport`, `payment`, `birthcert`, `examdate`, `examcode`, `center`, `studentcode`) VALUES
(175, 'Darasimi', NULL, 'sutton', 'elizabethsutton288@yahoo.com', NULL, '08027888009', '', 'Unpaid', '2021-06-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HO85FRW'),
(176, 'Zikoranachidinma', NULL, 'Okereke', 'zikora.okereke@outlook.com', NULL, '08035667801', '', 'Unpaid', '2021-06-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1HV0KGL'),
(177, 'Princewill', NULL, 'Nwaogu', 'maduabuchipeace8@gmail.com', NULL, '08168013739', '', 'Unpaid', '2021-06-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F4Z8BM9'),
(178, 'DIMEJI', NULL, 'AJAYI', 'dimeji.ajayi@gmail.com', NULL, '08033132134', '', 'Unpaid', '2021-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KRB9HCA'),
(179, 'Hadassah Kememeniose', NULL, 'Mgbakor', 'mgbakoronyi@gmail.com', NULL, '08034084721', '', 'Unpaid', '2021-07-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'XFJ7ARH'),
(180, 'Esosa', NULL, 'Nowa-Omorogbe', 'ifynowa@gmail.com', NULL, '08172004255', '', 'Unpaid', '2021-07-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LZ3ADC1'),
(181, 'Shalom', NULL, 'Adeniyi', 'busayoaremu@yahoo.com', NULL, '07038323889', '', 'Unpaid', '2021-07-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'GSHA2RN'),
(182, 'Ikpeminoghena Alberta', NULL, 'Okhakhu', 'pokhakhu@gmail.com', NULL, '08026719404', '', 'Unpaid', '2021-08-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BK48W0O'),
(183, 'Osasenaga MIchael', NULL, 'Ohangbon', 'ohangbonm@gmail.com', NULL, '08033235829', '', 'Unpaid', '2021-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'I7H4F1R'),
(184, 'David', NULL, 'Bohan', 'shile.habib1@gmail.com', NULL, '0814653166', '', 'Unpaid', '2021-08-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8D7H3QR'),
(185, 'Aderinola', NULL, 'Adesokan', 'oadesokan@yahoo.com', NULL, '08105466350', '', 'Unpaid', '2021-08-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZXD3QT1'),
(186, 'Eric', NULL, 'Odinamadu', 'Ericaodinamadu@yahoo.com', NULL, '08033460870', '', 'Unpaid', '2021-08-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9L0WC8P'),
(187, 'MATHEA', 'Oritsetimeyin', 'OMAYUKU', 'roliomayuku@gmail.com', 'Female', '08034880913', '', 'Unpaid', '2021-09-02', 'Mr Fredrick Omayuku ', 'omay@chevron.com', '07034000081, 08022921164 ', '2 Chevron Drive, Lekki Penninsula ii 12825, Lekki ', 'House E-59, close 53, Road 4, Victoria Garden City,LEKKI AJAH, LAGOS  ', 'Engineer ', 'Mrs Roli Omayuku ', 'roliomayuku@gmail.com', '08034880913,  08055880913', 'House E-59, close 53, Road 4, Victoria Garden City,LEKKI AJAH, LAGOS', 'House E-59, close 53, Road 4, Victoria Garden City,LEKKI AJAH, LAGOS', 'Baker ', 'Mr Fredrick Omayuku ', '07034000081, 08022921164', 'omay@chevron.com', '2 Chevron Drive, Lekki Penninsula ii 12825, Lekki ', 'House E-59, close 53, Road 4, Victoria Garden City,LEKKI AJAH, LAGOS', 'Engineer ', 'Primary 5', 'Jss 1', 'Warri South', 'Nigerian ', 'Greensprings school ', '2011-05-18', 'Delta', NULL, NULL, NULL, NULL, '8D0WGLB', 'Lagos', '8D0WGLB'),
(188, 'Unegbu', NULL, 'Susan', 'metchesuzzan@gmail.com', NULL, '08060116925', '', 'Unpaid', '2021-09-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7K0GH2U'),
(189, '', NULL, 'OLALEKAN', 'lezyok2007@yahoo.com', NULL, '08068879346', '', 'Unpaid', '2021-09-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZB0FMU2'),
(190, 'Mitchell', NULL, 'Oyewole', 'ezeoyewole@gmail.com', NULL, '07037374769', '', 'Unpaid', '2021-09-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F7CE8GH'),
(191, 'DAVID', NULL, 'UKPONG', 'tonyeukpong@gmail.com', NULL, '08036707040', '', 'Unpaid', '2021-09-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'BFRLPSO'),
(192, 'Isaiah', NULL, 'Okpako', 'izzylyf001@gmail.com', NULL, '09030285993', '', 'Unpaid', '2021-10-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'J6CXSQA'),
(193, 'Adeyemo Kehinde', NULL, 'Adeyemo', 'adeyemobecky@gmail.com', NULL, '08034242339', '', 'Unpaid', '2021-10-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MD75KI2'),
(194, 'Kehinde', NULL, 'Adeyemo', 'adeyemobecky@gmail.com', NULL, '08034242339', '', 'Unpaid', '2021-10-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'B7IEW56'),
(195, 'Oyinade', NULL, 'Adeyemo', 'adeyemo.tricol@gmail.com', NULL, '08026736144', '', 'Unpaid', '2021-10-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'F5JG4PS'),
(196, 'Adewale', 'Adeboye', 'Orioye', 'adewaleadeboye47@yahoo.com', 'Male', '09049651598', NULL, 'Active', '2021-10-21', 'Omoseyin', 'adeflex47@gmail.com', '08081266186', '2 i dont know the address', '1 sb olayemi  close langbasa', 'Managing Director', 'Omotayo', 'adewaleadeboye47@gmail.com', '08081266188', 'ajah', '1 sb olayemi close', 'Business', 'seyi', '08099009090', 'guradian@guardian.com', 'shittu street', 'safeway estate', 'specialist', 'SS2', 'SS3', 'Ilaje', '', 'Mountain of Knowledge', '2001-09-20', 'Ondo', NULL, NULL, NULL, NULL, 'SHTYV85', NULL, 'SHTYV85'),
(197, 'Adewale', 'Adeboye', 'Orioye', 'adewaleadeboye47@yahoo.com', 'Male', '09049651598', NULL, 'Paid', '2021-10-21', 'Omoseyin', 'adeflex47@gmail.com', '09049651566', '2 i dont know the address', '1 sb olayemi  close langbasa', 'Managing Director', 'Omotayo', 'adewaleadeboye47@gmail.com', '08081266186', 'Ajah', '1 sb olayemi close', 'Business Woman', 's', '', '', '', '', '', 'SS2', 'SS3', 'Ilaje', 'Lagos', 'Mountain of Knowledge', '2001-09-20', 'Ondo', '31222.png', '833894.jpg', NULL, NULL, 'LI0TPVU', NULL, 'LI0TPVU'),
(198, 'Edor', 'Comfort', 'Precious', 'dele.preciouscomfort@gmail.com', 'Female', '07036041565', NULL, 'Paid', '2021-10-22', 'Edor Prince', 'dele.raymond@hotmail.com', '0807777777777', 'Bdbznxnxnn', 'Hdbznnxnbxb', 'Hxbznznxnxn', 'Bxbxnxnx bdndn', 'dele@gmail.com', '08012345677', 'Hdjdndndndn', 'Jsjdhhsjjsj', 'Bdbxnxnxnxn', 'Bdbxbxbxn', '08023456778', 'hdbdndb@gmail.com', 'Hdbdbdb', 'Hdjjdndndn', 'Hxbxbxnxbx', 'Primary 6', 'Year 7', 'Egbeda', 'Nigeria', 'Bettysc', '2009-10-22', 'Ekiti', '253645.png', '18277.png', NULL, NULL, 'NKF3QZG', NULL, 'NKF3QZG'),
(199, 'Ayomide', 'Quadri', 'Akerele', 'akereleayomide106@gmail.com', 'Male', '08152397199', NULL, 'Paid', '2021-10-22', 'Akerele Samsideen', 'Akereleayomide16@gmail.com', '08073195568', 'beside prince &amp; princess hotel', '7, wahab ashafa street, langbasa, ajah, lagos', 'Supplier', 'Akerele Mulikat Adeola', 'akereleayomide100@gmail.com', '08152397199', 'beside prince &amp; princess hotel', '7, wahab ashafa street, langbasa, ajah, lagos', 'Supplier', 'Akerele Temitope Aminat', '08152397199', 'temipraise@gmail.com', 'beside prince &amp; princess hotel', '7, wahab ashafa street, langbasa, ajah, lagos', 'Civil Servant', 'SS1', 'SS3', 'Eti-Osa', 'Nigerian', 'Vesture of Glory', '2003-06-04', 'lagos', '887726.png', '69026.png', NULL, NULL, 'SAJ037O', NULL, 'SAJ037O'),
(200, 'Ayomide', 'Quadri', 'Akerele', 'idahjohnpaul@gmail.com', 'Male', '08152397199', NULL, 'Paid', '2021-10-22', 'Akerele Samsideen', 'Akereleayomide16@gmail.com', '08152397199', 'beside prince &amp; princess hotel', '7, wahab ashafa street, langbasa, ajah, lagos', 'Supplier', 'Akerele Mulikat Adeola', 'akereleayomide100@gmail.com', '08152397199', 'beside prince &amp; princess hotel', '7, wahab ashafa street, langbasa, ajah, lagos', 'Supplier', 'Akerele Temitope Aminat', '08152397199', 'temipraise@gmail.com', 'beside prince &amp; princess hotel', '7, wahab ashafa street, langbasa, ajah, lagos', 'Civil Servant', 'SS1', 'SS3', 'Eti-Osa', 'Nigerian', 'Vesture of Glory', '2021-10-07', 'lagos', '610661.png', '673067.png', NULL, NULL, '38FETL5', NULL, '38FETL5'),
(201, 'HADASSAH', 'KEMEMENIOSE', 'MGBAKOR', 'mgbakoronyi@gmail.com', 'FEMALE', '08034084721', NULL, 'Paid', '2021-10-24', 'MGBAKOR RAYMOND EFOSA', 'raymondmgbakor@yahoo.com', '08037252901', 'GOVERNORS OFFICE , GOVERNMENT HOUSE ASABA', 'No 2, 3RD STREET ,LIBERTY ESTATE OFF HIGHCOURT ROAD ASABA', 'PUBLIC SERVANT', 'MGBAKOR ONYI JACQUELYN', 'mgbakoronyi@gmail.com', '08034084721', 'DELTA STATE DRUG REVOLVING FUND ASABA', 'No 2, 3RD STREET LIBERTY ESTATE OFF HIGHCOURT ROAD ASABA', 'PHARMACIST', 'OMUMU EWERE STEPHANIE', '07036529477', 'omumuewere@gmail.com', 'CENTRAL BANK NIGERIA, ABUJA', 'E14 paradise estate lifecamp abuja', 'LAWYER', 'GRADE 5', 'JSS1', 'IKA NORTH EAST', 'NIGERIAN', 'PERFECTA MONTESSORI', '2012-09-26', 'DELTA STATE', '540442.jpg', '402773.jpg', NULL, NULL, 'U29YSR3', NULL, 'U29YSR3'),
(202, 'Toluwanimi', 'Emmanuel', 'Adetunji', 'ogunrinumodupe@gmail.com', 'Male', '08066523745', NULL, 'Active', '2021-10-25', 'Samson Adetunji', 'tunjisamson@gmail.com', '08066563343', 'Attwool College , Lagos', 'House 10, Engr Benson Awanebi Street, Rehoboth Villa, Ona Osa, Ibeju Lekki , Lagos', 'Educationist', 'Modupeade Christianah ADETUNJI', 'modupe.adetunji@trinityuniversity.edu.ng', '08066523745', 'Dept. of Biological Sciences, Trinity University, Yaba, Lagos', 'Same as father\'s address', 'Lecturing', '', '', '', '', '', '', 'Grade 5', 'Jss1', 'Iwo', 'Nigerian', 'Attwool Sunflower School, Lagos', '2012-09-25', 'Osun', NULL, NULL, NULL, NULL, '896Z2EQ', NULL, '896Z2EQ'),
(203, 'Ewomazino', '', 'Omugbe', 'mail2rezi@yahoo.com', 'Female', '08033368578', NULL, 'Active', '2021-11-02', 'Othuke Omugbe', 'othuks4real@yahoo.com', '08033504033', 'Plot 654, 15th Street  ddpa estate, Effurun Warri', 'Plot 809, 22nd Street, ddpa estate, Effurun Warri', 'Contractor', 'Orezi Omugbe', 'mail2rezi@yahoo.com', '08033368578', '', 'Plot 809, 22nd Street, ddpa estate, Effurun Warri', 'Business woman', 'Elo Edeoghon', '08023113497', 'zinoedeoghon@yahoo.com', '', '15E, Joseph Ajayi close, off Babajide Awolesi Ave, Magodo phase 1, Isheri, Lagos', 'Business woman', 'SSS 1', 'SSS 1', 'Isoko South', 'Nigerian', 'Preston International school', '2008-04-02', 'Delta state', NULL, NULL, NULL, NULL, 'WF7416T', NULL, 'WF7416T'),
(204, 'Connor Zion', 'Osazele', 'Okunbor', 'cokerbose@yahoo.com', 'Male', '08067077308', NULL, 'Active', '2021-11-03', 'Elvis Okunbor', 'elvisokunbor@gmail.com', '08067077308', 'No 1 Olowora street  magodo', '3TC 35 LSDPC/TINUBU ESTATE', 'Industrial Entrepreneur', 'Tina Okunbor', 'teccokunbor@yahoo.com', '08067077308', '142 Ahmadu Bello way', '3TC 35 Lsdpc/Tinubu', 'Investment banker', '', '', '', '', '', '', 'Primary 6', 'Jss 1', 'Igueben', 'Nigeria', 'Masterhills Schools', '2011-11-17', 'Edo', NULL, NULL, NULL, NULL, '78NXYKZ', NULL, '78NXYKZ'),
(205, 'OLUWATOBI', 'KELECHI IHEJIKA', 'OSHIKOYA', 'PATSYOSHIKOYA@GMAIL.COM', 'MALE', '08122345666', NULL, 'Paid', '2021-11-10', 'TEMITOPE OSHIKOYA', 'TOPEOSHI@GMAIL.COM', '07034632219', '', '', 'ECONOMIST', 'PATIENCE OSHIKOYA', 'PATSYOSHIKOYA@GMAIL.COM', '08122345666', '', 'B7 TOPAZ ROAD, GOSHEN BEACH ESTATE, LEKKI, LAGOS', 'LAWYER', '', '', '', '', '', '', '6 SAPHIRE', '2022', 'ETI OSA', 'NIGERIAN', 'BRIDGING GAPS', '2011-06-02', 'LAGOS', '146310.', '389401.jpeg', NULL, NULL, 'C793QXK', NULL, 'C793QXK'),
(206, 'DANIEL', 'KASIEMOBI', 'ODILI', 'lyndon78@hotmail.com', 'MALE', '08030400520', NULL, 'Paid', '2021-11-13', 'ODILI', 'lyndon@nodnylgroup.com', '08030400520', 'Suite D157 Ikota complex VGC Lagos', 'Road 38, F275/276B VGC Lagos', 'Nodnyl Group', 'CHINWE ODILI', 'lyndon78@hotmail.com', '08030400520', 'Suite D157 Ikota complex VGC Lagos', 'Road 38, F275/276B VGC Lagos', 'Nodnyl Realtors', '', '', '', '', '', '', 'YEAR 6', 'JSS 1', 'AKWA', 'NIGERIA', 'Bridging Gaps School', '2011-03-14', 'ANAMBRA', '39816.jpg', '980336.jpg', NULL, NULL, 'EY15C3N', NULL, 'EY15C3N'),
(207, 'DANIELLA', 'NNENNA', 'ODILI', 'lyndon78@hotmail.com', 'FEMALE', '08030400520', NULL, 'Paid', '2021-11-17', 'ODILI', 'lyndon@nodnylgroup.com', '08030400520', 'Suite D157 Ikota complex VGC Lagos', 'Road 38, F275/276B VGC Lagos', 'Nodnyl Group', 'CHINWE ODILI', 'lyndon78@hotmail.com', '08030400520', 'Suite D157 Ikota complex VGC Lagos', 'Road 38, F275/276B VGC Lagos', 'Nodnyl Realtors', '', '', '', '', '', '', 'YEAR 6', 'JSS 1', 'AKWA', 'NIGERIA', 'Bridging Gaps School', '2021-03-14', 'ANAMBRA', '574548.jpg', '275395.jpg', NULL, NULL, 'WEYP0RC', NULL, 'WEYP0RC'),
(208, 'Eyiosa', 'John', 'Aisien', 'osamendea@yahoo.com', 'Male', '2348037250295', NULL, 'Active', '2021-11-23', 'Osamende Aisien', 'osamendea@yahoo.com', '2348037250295', 'Globus Bank Limited,  Adeyemo Alakija, VI', '66 Emmnuel High Street, Ojota Lagos', 'Banking', 'Joy Aisien', 'amagiyaetan@yahoo.com', '2348063202503', 'Lagos State Minitry of Health', '66 Emmnuel High Street, Ojota Lagos', 'Scientifi Officer', 'Osamende Aisien', '2348037250295', 'osamendea@yahoo.com', 'Globus Bank Limited, Adeyemo Alakija, VI', '66 Emmnuel High Street, Ojota Lagos', 'Banking', 'five', 'Js 1', 'Oredo', 'Nigerian', '', '2012-04-22', 'Edo', NULL, NULL, NULL, NULL, 'X27LRIM', NULL, 'X27LRIM'),
(209, 'Chimamanda', 'Michelle', 'MUOEDU', 'martinomuoedu@gmail.com', 'Female', '08039444568', NULL, 'Active', '2021-11-23', 'MUOEDU, Martin Ifeanyi', 'martinomuoedu@gmail.com', '08039444568', 'First Bank of Nigeria Ltd', 'Amora Odida Abatete, Idemili North L.G.A, Anambra State.', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Year 5 Crystal', 'J.S.S 1', 'Idemili North', 'Nigerian/U.S American', 'Early Spring Montessori School, Divine Estate GRA, Plot 3375, Emma Orji Street, Off Ago Palace Way, Lagos.', '2012-07-25', 'Anambra', NULL, NULL, NULL, NULL, 'M6SX85C', NULL, 'M6SX85C'),
(210, 'Chimamanda', 'Michelle', 'MUOEDU', 'martinomuoedu@gmail.com', 'Female', '08039444568', NULL, 'Paid', '2021-11-23', 'MUOEDU, Martin Ifeanyi', 'martinomuoedu@gmail.com', '08039444568', 'First Bank of Nigeria Ltd, Head Office, 35 Marina Lagos.', 'Amora Odida Abatete, Idemili North L.G.A, Anambra State.', 'Banker', 'MUOEDU, Uchenna Agatha', 'muoedu2012@gmail.com', '08060640223', 'NTS Nigeria Ltd', 'Amora Odida Abatete, Idemili North L.G.A, Anambra State.', 'Project Manager', '', '', '', '', '', '', 'Year 5 Crystal', 'J.S.S 1', 'Idemili North', 'Nigerian/U.S American', 'Early Spring Montessori School, Divine Estate GRA, Plot 3375, Emma Orji Street, Off Ago Palace Way, Lagos.', '2012-07-25', 'Anambra', '691360.jpg', '424889.jpg', NULL, NULL, '4FCMDT5', NULL, '4FCMDT5'),
(211, 'Kamsiyochukwu', 'David', 'Uzowulu', 'kdthrice76@gmail.com', 'Male', '08025888292', NULL, 'Paid', '2021-11-24', 'Chibuike Obinna Uzowulu', 'kdthrice76@gmail.com', '08025888292', '2 Chevron drive, Lekki Peninsula , Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Engineering', 'Chioma Nneamaka Uzowulu', 'chiomauzowulu@yahoo.com', '08037109759', '1B Jedmoon Court II, off Chevron Drive, Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Teaching', 'Chinemelu Uzowulu', '08027519905', '', 'Enugu', 'Enugu', 'Pastoring', 'Year 6', 'Jss1', 'Idemili South', 'Nigerian', 'Bridging Gaps School', '2011-01-23', 'Anambra', '335729.jpg', '632545.', NULL, NULL, '0M5TE9Z', NULL, '0M5TE9Z'),
(212, 'Kosisochukwu', 'Daniel', 'Uzowulu', 'kdthrice76@gmail.com', 'Male', '08025888292', NULL, 'Active', '2021-11-24', 'Chibuike Obinna Uzowulu', 'kdthrice76@gmail.com', '08025888292', '2 Chevron drive, Lekki Peninsula , Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Engineering', 'Chioma Nneamaka Uzowulu', 'chiomauzowulu@yahoo.com', '08037109759', '1B Jedmoon Court II, off Chevron Drive, Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Teaching', 'Chinemelu Uzowulu', '08027519905', '', 'Enugu', 'Enugu', 'Pastorate', 'Year 6', 'Jss1', 'Idemili South', 'Nigerian', 'Bridging Gaps School', '2011-01-23', 'Anambra', NULL, NULL, NULL, NULL, 'LVTFM68', NULL, 'LVTFM68'),
(213, 'Kamsiyochukwu', 'David', 'Uzowulu', 'kdthrice76@gmail.com', '', '08025888292', NULL, 'Active', '2021-11-24', 'Chibuike Obinna Uzowulu', 'kdthrice76@gmail.com', '08025888292', '2 Chevron drive, Lekki Peninsula , Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Engineering', 'Chioma Nneamaka Uzowulu', 'chiomauzowulu@yahoo.com', '08037109759', '1B Jedmoon Court II, off Chevron Drive, Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Teaching', 'Chinemelu Uzowulu', '08027519905', '', 'Enugu', 'Enugu', 'Pastorate', 'Year 6', 'Jss1', 'Idemili South', 'Nigerian', 'Bridging Gaps School', '2011-01-23', 'Anambra', NULL, NULL, NULL, NULL, 'H9R7B4C', NULL, 'H9R7B4C'),
(214, 'Kamsiyochukwu', 'David', 'Uzowulu', 'kdthrice76@gmail.com', 'Male', '08025888292', NULL, 'Paid', '2021-11-24', 'Chibuike Obinna Uzowulu', 'kdthrice76@gmail.com', '08025888292', '2 Chevron drive, Lekki Peninsula , Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Engineering', 'Chioma Nneamaka Uzowulu', 'chiomauzowulu@yahoo.com', '08037109759', '1B Jedmoon Court II, off Chevron Drive, Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Teaching', 'Chinemelu Uzowulu', '08027519905', '', 'Enugu', 'Enugu', 'Pastorate', 'Year 6', 'Jss1', 'Idemili South', 'Nigerian', 'Bridging Gaps School', '2011-01-23', 'Anambra', '285809.jpg', '808745.pdf', NULL, NULL, '9BPAXY5', NULL, '9BPAXY5'),
(215, 'Kosisochukwu', 'Daniel', 'Uzowulu', 'kdthrice76@gmail.com', 'Male', '08025888292', NULL, 'Paid', '2021-11-24', 'Chibuike Obinna Uzowulu', 'kdthrice76@gmail.com', '08025888292', '2 Chevron drive, Lekki Peninsula , Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Engineering', 'Chioma Nneamaka Uzowulu', 'chiomauzowulu@yahoo.com', '08037109759', '1B Jedmoon Court II, off Chevron Drive, Lekki Lagos', '1 Columbine Street, Northern Foreshore Estate, Lekki Lagos', 'Teaching', 'Chinemelu Uzowulu', '08027519905', '', 'Enugu', 'Enugu', 'Pastorate', 'Year 6', 'Jss1', 'Idemili South', 'Nigerian', 'Bridging Gaps School', '2011-01-23', 'Anambra', '5378.jpg', '573249.pdf', NULL, NULL, 'VUDYR8B', NULL, 'VUDYR8B'),
(216, 'Gabrielle', 'Oseremen', 'Iyamabo', 'aliyamabo@yahoo.com', 'Female', '08034344604', NULL, 'Paid', '2021-11-24', 'Albert Iyamabo', 'aliyamabo@yahoo.com', '08034344604', 'Block 12, Flat 2, LSDPC Estate Glover Street Ebute Metta Lagos', 'Block 12, Flat 2, LSDPC Estate Glover Street Ebute Metta Lagos', 'Architect', 'Olamide Albert-Iyamabo', 'simplydiamond@gmail.com', '08028160283', 'ECS Aliance, 1A Second Street Osborne Foreshore Estate Ikoyi Lagos', 'Block 12, Flat 2, LSDPC Estate Glover Street Ebute Metta Lagos', 'HR Consultant', '', '', '', '', '', '', 'Yr 5', 'JSS1', 'Esan North-East LGA', 'Nigerian', 'Bridging Gaps School Lekki Lagos', '2011-08-13', 'Edo State', '20688.jpg', '926601.jpg', NULL, NULL, 'S8O0DJU', NULL, 'S8O0DJU'),
(217, 'Sharon', 'Chibueze', 'Onyebolise', 'obc4u2c@yahoo.com', 'Female', '08038786692', NULL, 'Active', '2021-11-27', 'Bright Onyebolise', 'obc4u2c@yahoo.com', '08038786692', 'EY, 13 Floor, UBA House, 57 Marina, Lagos', '13 comfort close, Ojodu Estate, Ojodu Berger', 'Accountant', 'Helen Onyebolise', 'sharonkenclothings@yahoo.com', '08037315258', '50 Odozi Street', '13 comfort close, Ojodu Estate, Ojodu Berger', 'Business', 'Bright Onyebolise', '08038786692', 'obc4u2c@yahoo.com', 'EY, 13 Floor, UBA House, 57 Marina, Lagos', '13 comfort close, Ojodu Estate, Ojodu Berger', 'Accountant', 'Basic 5', 'JSS 1', 'Ukwuani', 'Nigerian', 'Arit Private School', '2012-10-09', 'Delta', NULL, NULL, NULL, NULL, 'W0YB125', NULL, 'W0YB125'),
(218, 'Uyiosa', 'John', 'Aisien', 'osamendea@yahoo.com', 'Male', '23408037250295', NULL, 'Paid', '2021-11-28', 'Osamende Aisien', 'osamendea@yahoo.com', '2348037250295', '6, Adeyemo Alakija, Victoria Island, Lagos', '66 Emmnuel High Street, Ojota Lagos', 'Banking', 'Joy  Etan Aisien', 'amagiyaetan@yahoo.com', '08063202503', '7, Ajasa Street, King George V Road, Onikan, Lagos', '66 Emmnuel High Street, Ojota Lagos', 'Civil Servant', 'Osamende Aisien', '2348037250295', 'osamendea@yahoo.com', '6, Adeyemo Alakija, Victoria Island, Lagos', '66 Emmnuel High Street, Ojota Lagos', 'Banking', 'Primary 5', 'JSS 1', 'Ikpoba- Okha', 'Nigerian', 'Role Model Primary School', '2012-04-28', 'Edo', '54509.jpeg', '942292.pdf', NULL, NULL, 'A61I54C', NULL, 'A61I54C'),
(219, 'Olaoluwa', 'William', 'Osikomaiya', 'bukolaosikomaiya@gmail.com', '', '08052503511', NULL, 'Active', '2021-11-30', 'Benjamin Osikomaiya', 'benbanwo@gmail.com', '08051219870', 'Suite 24, TBS, Lagos', 'Emerald Estate , Ajah', 'Business Man', 'Bukola Osikomaiya', 'bukolaosikomaiya@gmail.com', '08052503511', 'PwC, Landmark Towers, Oniru-VI', 'Emerald Estate, Ajah', 'Consulting', 'Parents', '08051219870', 'benbanwo@gmail.com', 'same as parents', 'same as parents', 'same as parents', 'Year 6', 'Year 7', 'Odogbolu', 'Nigerian', 'Canterbury International School, Ajah', '2011-03-10', 'Ogun', NULL, NULL, NULL, NULL, '46M3TRK', NULL, '46M3TRK'),
(220, 'Olaoluwa', 'William', 'Osikomaiya', 'bukolaosikomaiya@gmail.com', 'Male', '08052503511', NULL, 'Active', '2021-11-30', 'Benjamin Osikomaiya', 'benbanwo@gmail.com', '08051219870', 'Suite 24, TBS, Lagos', 'Emerald Estate , Ajah', 'Business Man', 'Bukola Osikomaiya', 'bukolaosikomaiya@gmail.com', '08052503511', 'PwC, Landmark Towers, Oniru-VI', 'Emerald Estate, Ajah', 'Consulting', 'Parents', '08051219870', 'benbanwo@gmail.com', 'same as parents', 'same as parents', 'same as parents', 'Year 6', 'Year 7', 'Odogbolu', 'Nigerian', 'Canterbury International School, Ajah', '2011-03-10', 'Ogun', NULL, NULL, NULL, NULL, 'AVE1N67', NULL, 'AVE1N67'),
(221, 'Olamide', 'Grace', 'Osikomaiya', 'bukolaosikomaiya@gmail.com', 'Female', '08052503511', NULL, 'Active', '2021-11-30', 'Benjamin Osikomaiya', 'benbanwo@gmail.com', '08051219870', 'Suite 24, TBS, Lagos', 'Emerald Estate , Ajah', 'Business Man', 'Bukola Osikomaiya', 'bukolaosikomaiya@gmail.com', '08052503511', 'PwC, Landmark Towers, Oniru-VI', 'Emerald Estate, Ajah', 'Consulting', 'Parents', '08051219870', 'benbanwo@gmail.com', 'same as parents', 'same as parents', 'same as parents', 'Year 9', 'Year 10', 'Odogbolu', 'Nigerian', 'Caleb British International School', '2009-06-27', 'Ogun', NULL, NULL, NULL, NULL, 'YHSB75W', NULL, 'YHSB75W'),
(222, 'Chimamanda', 'Maryanne', 'Agu', 'divineagu@gmail.com', 'Female', '+2348068978282', NULL, 'Paid', '2021-12-02', 'George Agu', 'georgeagu@activedgetechnologies.com', '+2348039582985', '4B Utomi Airie Avenue Lekki Phase1', '4B Utomi Airie Avenue Lekki Phase1', 'CEO', 'Ngozi Caroline Agu', 'divineagu@gmail.com', '+2348068978282', '4B Utomi Airie Avenue Lekki Phase1', '4B Utomi Airie Avenue Lekki Phase1', 'Director', '', '', '', '', '', '', 'Year 6', 'J.S1', 'Udi', 'Nigeria', 'Bridging Gaps School Chevron Drive, Lekki Lagos', '2011-05-07', 'Enugu', '749063.jpg', '226601.jpeg', NULL, NULL, '6ZK7P18', NULL, '6ZK7P18'),
(223, 'Oluwadamisola', 'Bryan', 'Olusanya', 'shobiddy@yahoo.com', 'Male', '08077387313', NULL, 'Active', '2021-12-03', 'Oluwabukunola Olusanya', 'bukenzo@gmail.com', '08093128128', 'Chevron Lagos', 'Plot 31A Road 16, Ikota Villa Estate, Lekki', 'IT Analyst', 'Toyin Olusanya', 'shobiddy@yahoo.com', '08077387313', 'Nigerian Civil Aviation Authority', 'Same as fathers', 'Civil Servant', '', '', '', '', '', '', 'Primary 6', 'JSS1', 'Ijebu Ode', 'Nigerian', 'Splendid Steps School', '2011-04-14', 'Ogun', NULL, NULL, NULL, NULL, '39LHVK4', NULL, '39LHVK4'),
(224, 'Zoe', 'Irijuoluwa', 'Rhema', 'rhemaesther01@gmail.com', 'Male', '07032167195', NULL, 'Paid', '2021-12-03', 'Rhema Olasunkanmi', 'rhemapedia@gmail.com', '08035770306', 'Odili road Port Harcourt', 'No 3, Silifat Abiola street, Ogba', 'Clergy', 'Rhema Olajumoke', 'rhemaesther01@gmail.com', '07032167195', 'As above', 'ST 4 Delight Estate, Ikota housing estate beside Megachicken Ikota', 'Realtor', 'Rhema Olajumoke', '07032167195', 'rhemaesther01@gmail.com', 'As above', 'ST 4 Delight Estate, Ikota housing estate beside Megachicken Ikota', 'Realtor', 'Year 6', 'Jss1', '', 'Nigeria', 'Splendid steps school', '2011-12-31', 'Ogun', '904650.jpg', '787213.jpg', NULL, NULL, '2QX1U5O', NULL, '2QX1U5O'),
(225, 'JOSHUA', 'OLUWATIMILEHIN', 'AJAYI', 'omololaa261@gmail.com', 'MALE', '08029252678', NULL, 'Active', '2021-12-06', 'GABRIEL BAYODE AJAYI', 'gbajayi@unilag.edu.ng', '08027906070', 'university of Lagos', '16, bajulaiye compound, Somolu, Yaba', 'Civil Servant', 'Omolola Omosalewa Ajayi', 'omololaa261@gmail.com', '08029252678', 'University of Lagos', '10, Olusoji Street, Ladi Lak, Yaba, Lagos', 'Civil Servant', 'Omolola Omosalewa Ajayi', '08029252678', 'omololaa261@gmail.com', 'University of Lagos', '10, Olusoji Street, Ladi Lak, Yaba, Lagos', 'Civil Servant', 'BASIC 6', 'JSS1', 'IJERO', 'NIGERIAN', 'TORIA SCHOOL, YABA', '2012-01-02', 'EKITI', NULL, NULL, NULL, NULL, 'YEOV32F', NULL, 'YEOV32F'),
(226, 'Chimkamara', 'Kosisochukwu', 'OGBO', 'Calodeblazzer@yahoo.com', 'Female', '08033773821', NULL, 'Paid', '2021-12-06', 'Mr Ogbo Chidozie', 'Cogbo@yahoo.com', '08033074750', 'ED MAJESTIC TILES LTD / MAJESTIC HOUSE, Plot 15 Christ Embassy  Close Off Ago Palace Way, Okota-Lagos', 'Plot 1393 Hakeem Agboola Crescent, Unity Estate Amuwo Odofin Lagos', 'Trading', 'Mrs Ogbo Chinyere', 'Calodeblazzer@yahoo.com', '08033773821', 'ED MAJESTIC TILES LTD / MAJESTIC HOUSE, Plot 15 Christ Embassy  Close Off Ago Palace Way, Okota-Lagos', 'Plot 1393 Hakeem Agboola Crescent, Unity Estate Amuwo Odofin Lagos', 'Self-employed', 'Mr &amp; Mrs Ogbo', '08033773821', 'Calodeblazzer@yahoo.com', 'ED MAJESTIC TILES LTD / MAJESTIC HOUSE, Plot 15 Christ Embassy  Close Off Ago Palace Way, Okota-Lagos', 'Plot 1393 Hakeem Agboola Crescent, Unity Estate', 'Trading', 'Primary 5', 'JSS1', 'Idemili South', 'Nigerian', 'Queensland Academy', '2012-12-28', 'Anambra', '482115.jpg', '367496.jpg', NULL, NULL, 'TK6MN5J', NULL, 'TK6MN5J'),
(227, 'Chiemeka', 'Alexander', 'Obialo', 'chiemeka.obialo@gmail.com', 'Male', '08120606084', NULL, 'Active', '2021-12-08', 'Chikezie Obialo', 'chikezie.obialo@gmail.com', '08037986205', 'Mixta Africa', '5 Bethel Close Thomas Estate Ajah', 'Senior Investment Associates', 'Ezinne Obialo', 'ezinne.obialo82@gmail.com', '08052521079', 'Waterfront plaza okeira Addo road, Ajah', '5 Bethel Close Thomas Estate Ajah', 'Business', 'Ezinne Obialo', '08052521079', 'ezinne.obialo82@gmail.com', 'Waterfront plaza okeira Addo road,Ajah', '5 Bethel Close Thomas Estate, Ajah', 'Business', 'Grade 6', 'Jss 1', 'Nkwerre', 'Nigeria', 'Child of Promise ,Ajah ,Lagos', '2011-11-20', 'Imo', NULL, NULL, NULL, NULL, 'TLMEZND', NULL, 'TLMEZND'),
(228, 'Obotu', 'Isaac', 'Edward', 'emminetworking@gmail.com', 'Male', '08036447515', NULL, 'Active', '2021-12-08', 'Emmanuel Edward', 'emminetworking@gmail.com', '08036447515', 'Seven up Bottling Company Limited ljora', 'KM 12 Zaria Road', 'Business Administrator', 'Alice Edwards', 'aliwards379@gmail.com', '08076751258', 'First Divine New Breed Kano', 'No.108, Line chairman,Naibawa Kano', 'Teaching and Administration', '', '', '', '', '', '', 'Jss2', 'Jss3', 'Ogbadibo', 'Nigerian', 'FGC Kano', '2009-09-09', 'Benue', NULL, NULL, NULL, NULL, 'DI2MG89', NULL, 'DI2MG89'),
(229, 'Ochanya', 'Salvation', 'Emmanuel', 'emminetworking@gmail.com', 'Female', '08036447515', NULL, 'Active', '2021-12-08', 'Emmanuel Edward', 'emminetworking@gmail.com', '08036447515', 'Seven up Bottling Company Limited ljora', 'KM 12 Zaria Road', 'Business Administrator', 'Alice Edwards', 'aliwards379@gmail.com', '08076751258', 'First Divine New Breed Kano', 'No.108, Line chairman,Naibawa Kano', 'Teaching and Administration', '', '', '', '', '', '', 'Jss2', 'Jss3', 'Ogbadibo', 'Nigerian', 'FGC Kano', '2010-04-03', 'Benue', NULL, NULL, NULL, NULL, 'SZRF1EA', NULL, 'SZRF1EA'),
(230, 'Ondugbe', 'Rhema', 'Emmanuel', 'emminetworking@gmail.com', 'Female', '08036447515', NULL, 'Active', '2021-12-08', 'Emmanuel Edward', 'emminetworking@gmail.com', '08036447515', 'Seven up Bottling Company Limited ljora', 'KM 12 Zaria Road', 'Business Administrator', 'Alice Edwards', 'aliwards379@gmail.com', '08076751258', 'First Divine New Breed Kano', 'No.108, Line chairman,Naibawa Kano', 'Teaching and Administration', '', '', '', '', '', '', 'Jss1', 'Jss2', 'Ogbadibo', 'Nigerian', 'FGC Kano', '2011-05-11', 'Benue', NULL, NULL, NULL, NULL, 'W8SBJV9', NULL, 'W8SBJV9'),
(231, 'Charis', 'Ndifreke', 'Assam', 'mrsememassam@gmail.com', 'Female', '08034839340', NULL, 'Active', '2021-12-15', 'Mr Ette Assam', 'ette.assam@gmail.com', '08034010351', '18 Isaac John,Jibowu.', '18 Isaac John,Jibowu.', 'Chef', 'Mrs Emem Assam', 'mrsememassam@gmail.com', '08034839340', '52 Nsefik eyo Layout,calabar.', 'Plot 101 Asari eso layout, calabar.', 'Business', 'Mr Martins Esi', '07084963296', 'marobsi@gmail.com', '7 madu Agu Street surulere,Lagos.', '401 Road,Festac Town Lagos.', 'Accountant', 'Year 6', 'JSS 1', 'Eket', 'Nigerian', 'Kids N Us schools,calabar', '2011-02-08', 'Akwa-Ibom', NULL, NULL, NULL, NULL, 'IH24UQG', NULL, 'IH24UQG'),
(232, 'Charis', 'Ndifreke', 'Assam', 'mrsememassam@gmail.com', 'Female', '08034839340', NULL, 'Active', '2021-12-16', 'Mr Ette Assam', 'ette.assam@gmail.com', '08034010351', '18 Isaac John,Jibowu.', '18 Isaac John,Jibowu.', 'Chef', 'Mrs Emem Assam', 'mrsememassam@gmail.com', '08034839340', '52 Nsefik eyo Layout,calabar.', 'Plot 101 Asari eso layout, calabar.', 'Business', 'Mr Martins Esi', '07084963296', 'marobsi@gmail.com', '7 madu Agu Street surulere,Lagos.', '401 Road,Festac Town Lagos.', 'Accountant', 'Year 6', 'JSS 1', 'Eket', 'Nigerian', 'Kids N Us schools,calabar', '2011-02-08', 'Akwa-Ibom', NULL, NULL, NULL, NULL, 'PT0O31Z', NULL, 'PT0O31Z'),
(233, 'Charis', 'Ndifreke', 'Assam', 'mrsememassam@gmail.com', 'Female', '08034839340', NULL, 'Paid', '2021-12-16', 'Mr Ette Assam', 'ette.assam@gmail.com', '08034010351', '18 Isaac John,Jibowu.', '18 Isaac John,Jibowu.', 'Chef', 'Mrs Emem Assam', 'mrsememassam@gmail.com', '08034839340', '52 Nsefik eyo Layout,calabar.', 'Plot 101 Asari eso layout, calabar.', 'Business', 'Mr Martins Esi', '07084963296', 'marobsi@gmail.com', '7 madu Agu Street surulere,Lagos.', '401 Road,Festac Town Lagos.', 'Accountant', 'Year 6', 'JSS 1', 'Eket', 'Nigerian', 'Kids N Us schools,calabar', '2011-02-08', 'Akwa-Ibom', '754176.jpg', '914843.jpg', NULL, NULL, 'RXFGY29', NULL, 'RXFGY29'),
(234, 'Eunice', 'Osaruese', 'Aisien', 'osamendea@yahoo.com', 'Female', '2348037250295', NULL, 'Paid', '2021-12-18', 'Osamende Aisien', 'osamendea@yahoo.com', '2348037250295', 'Globus Bank Limited,  Adeyemo Alakija, VI', '66 Emmnuel High Street, Ojota Lagos', 'Banking', 'Joy  Etan Aisien', 'amagiyaetan@yahoo.com', '2348063202503', 'Lagos State Minitry of Health', 'Benin City', 'Civil Servant', 'Osamende Aisien', '2348037250295', 'osamendea@yahoo.com', '6, Adeyemo Alakija, Victoria Island, Lagos', '66 Emmnuel High Street, Ojota Lagos', 'Banking', 'Primary 4', 'JSS 1', 'Oredo', 'Nigerian', 'Role Model Primary School', '2013-05-14', 'Edo', '973498.png', '917899.pdf', NULL, NULL, 'E3AHW5I', NULL, 'E3AHW5I'),
(235, 'Mmesomachukwu', 'Justina', 'Nkemdirim', 'tonynkem11@gmail.com', 'Female', '08038457619', NULL, 'Active', '2021-12-22', 'Anthony nkemdirim', 'tonynkem11@gmail.com', '08038457619', '', '4b jinowu estate road, abule egba, Lagos state', 'Private business', 'Justina nkemdirim', 'tonynkem11@gmail.com', '07038296509', '4b jinowu estate road , abule egba, lagos', '4b jinowu estate road, abule egba, lagos', 'Private business', 'Same as above', '', '', '', '', '', 'Basic 5', 'Jss1', 'Owerri west', 'Nigeria', 'Module  international nursery and primary school', '2012-07-25', 'Imo', NULL, NULL, NULL, NULL, 'Z1FJE5L', NULL, 'Z1FJE5L'),
(236, 'TOLUWALOPEMI', 'RICHARD', 'ALLI-BALOGUN', 'topesanusi@yahoo.com', 'male', '08033225943', NULL, 'Active', '2021-12-27', 'HAKEEM LEKAN ALLI-BALOGUN', 'allibaloo@yahoo.com', '08035962190', '', '4E, OGUNKELU AVENUE, AROWOJOBE ESTATE, MENDE, MARYLAND, LAGOS', 'BUSINESS EXECUTIVE', 'TEMITOPE ALLI-BALOGUN', 'topesanusi@yahoo.com', '08033225943', '9A, BANKOLE OKI STRETT, IKOYI, LAGOS', '4E, OGUNKELU AVENUE, AROWOJOBE ESTATE, MENDE, MARYLAND, LAGOS', 'ACCOUNTANT', '', '', '', '', '', '', 'YEAR 5', 'YEAR 7', 'LAGOS MAINLAND', 'NIGERIAN', 'THE OAKWOOD MONTESSORI SCHOOL', '2012-10-20', 'LAGOS', NULL, NULL, NULL, NULL, '0SBV47I', NULL, '0SBV47I'),
(237, 'TOLUWALOPEMI', 'RICHARD', 'ALLI-BALOGUN', 'topesanusi@yahoo.com', 'Male', '08033225943', NULL, 'Paid', '2021-12-27', 'HAKEEM LEKAN ALLI-BALOGUN', 'allibaloo@yahoo.com', '08035962190', '', '4E, OGUNKELU AVENUE, AROWOJOBE ESTATE, MENDE, MARYLAND, LAGOS', 'Business Executive', 'TEMITOPE ALLI-BALOGUN', 'topesanusi@yahoo.com', '08033225943', '9a, Bankole oki Street, Ikoyi, Lagos', 'Same as above', 'Accountant', '', '', '', '', '', '', 'Year 5', 'Year 7', 'Lagos Mainland', 'NIGERIAN', 'THE OAKWOOD MONTESSORI SCHOOL', '2012-10-20', 'Lagos', '328102.jpg', '917325.pdf', NULL, NULL, 'AXIN91K', NULL, 'AXIN91K');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `company` varchar(100) DEFAULT 'NULL',
  `fname` varchar(255) DEFAULT 'NULL',
  `lname` varchar(100) DEFAULT NULL,
  `studentcode` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL,
  `salt` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(9) NOT NULL DEFAULT 'Active',
  `group` int(11) DEFAULT NULL,
  `joined` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `address` text,
  `address2` text,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `station` varchar(200) DEFAULT NULL,
  `refferal` varchar(255) DEFAULT NULL,
  `ref_by` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `company`, `fname`, `lname`, `studentcode`, `email`, `password`, `salt`, `phone`, `role`, `status`, `group`, `joined`, `gender`, `image`, `address`, `address2`, `city`, `state`, `zip`, `code`, `station`, `refferal`, `ref_by`) VALUES
(1, '', 'Admin', 'Admin', NULL, 'admin@admin.com', '72eb72cd70b3395d04e0c01aada6447e23754988e0913030f35bef6c5c9d312a', 'ªœÖ!Há¿H”$’=Í®¹ü.JÕS&ÍrÓ ‘', '09083242100', 'Admin', 'Active', 2, '2020-04-02', NULL, 'profile/256426.png', '2 Adeyemo Alakija Street, ', 'Lagos, Nigeria', 'Lagos', 'Lagos', '23401', 'LFEH(Tx', NULL, NULL, NULL),
(3, 'NULL', 'Raymond', 'Bamidele', NULL, 'dele.raymond@trinityng.com', '72eb72cd70b3395d04e0c01aada6447e23754988e0913030f35bef6c5c9d312a', 'ªœÖ!Há¿H”$’=Í®¹ü.JÕS&ÍrÓ ‘', '09088877700', 'Admin', 'Active', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'NULL', 'Noah', 'Wola', NULL, 'dele.raymond@gmail.com', 'e2a0f89184177c505efb77a3ea60e28beb69ad6d48e7124ae9337c2373188648', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08077560041', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'NULL', 'ADEDEJI', 'OLUKOKUN', 'GF7HH80', 'olukokun@hotmail.com', '500ade89be71abd61a7d111df92308ed755cc1230aeb605e710662e296982c20', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '+447824619627', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'NULL', 'Titilola', 'Dele', NULL, 'raylaymond@gmail.com', 'f6f8222b7b4fed788f0c651c2b1eb63ae3c82becdf41e7d6af7cc5ca0acef8e8', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07046349760', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'NULL', 'CHIDOZIE', 'OGBU', 'M806O1A', 'chika4god07@yahoo.com', '159c1a9a9a6ba6a5a6ab2a5c47510831f872b5d28f9f626dd1b3b065724d7531', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033746762', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'NULL', 'Oluwadunbarin', 'Komolafe', 'E706O11', 'komolafeonome@yahoo.com', '0246421b643408575d766acc0adece0008f265e293355e8f14478013a82d2c7d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034023702', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'NULL', 'Oyinkan', 'Diya Awosika', 'E706OMM', 'oyinkanawosika@gmail.com', 'cb5198e3310367fbcf9be78caf94d33b82b859d6e676e3c303f1fc6728d27f8f', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08052223868', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'NULL', 'CHIMEREMEZE', 'OKEZIE', 'E706O5N', 'anobisarha@gmail.com', '7b86e01ddf887e9c2a1d4fc41c51eb388f0b77342d45da552f7c621a1a06a1b3', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08132812743', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'NULL', 'Trinity Education &amp;', 'Foundation', NULL, 'raymond.dele@yahoo.com', '083fbe4f5cbe625ef54e653cf9158e658bc39e43c21b28b0b1ba9d143b661385', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08077560041', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03330', NULL, 'www.trinityng.com/admission-portal?id=03330', NULL),
(34, 'NULL', 'Tricol', 'Marketing', NULL, 'marketing@trinityng.com', 'b9cee7655fc808f5ae87701c4a6b93fd63f2b5fbe3203ab666d45cc82079f579', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07046349760', 'Admin', 'Active', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12133', NULL, 'www.trinityng.com/admission-portal?id=12133', NULL),
(36, 'NULL', 'Boboye', 'Afolabi', NULL, 'boboyeafolabi@gmail.com', '72eb72cd70b3395d04e0c01aada6447e23754988e0913030f35bef6c5c9d312a', 'ªœÖ!Há¿H”$’=Í®¹ü.JÕS&ÍrÓ ‘', '09077995211', 'Admin', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '00030', NULL, 'www.trinityng.com/admission-portal?id=00030', NULL),
(40, 'NULL', 'Chinenye', 'odinamadu', 'NXOZ435', 'amygifted86@gmail.com', '850b752bd67c0e7446879aa62a6f5b6c00898d6e4b4e87788499df1c327f2a2d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09038380644', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'NULL', 'Naomi', 'Enudi', '89JWCTU', 'jonathan.enudi@yahoo.com', 'e08e4161a66434ddadfc717fc29fe1f53b20e05c14f5e1e528b5e91c46e37c14', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08022243487', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(43, 'NULL', 'Smith', 'Mukoro', NULL, 'smithiemuk@yahoo.com', 'b1684a14c298b6040d94dab44f4c3c4de99df0ad998167f54b40e145fd4ff875', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07037447052', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10523', NULL, 'www.trinityng.com/admission-portal?id=10523', NULL),
(46, 'NULL', 'Oluwatobi', 'Omoleye', 'XZUV59L', 'ojo.omoleye16@kwasu.edu.ng', '6458ef4dda4a5301c2f58e3872dfab7310e9ab1ede10991af14a0d5c5bf43226', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08088463347', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(47, 'NULL', 'AMINA', 'ABIODU', '7T9HAKJ', 'AMINA ABIODU @GMAIL.COM', '2f4ec8bf6cd55ce84972b8f2d6c95864aa7518aed012bf49e7fce046271c219e', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08021387492', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(48, 'NULL', 'Oyeleye', 'Oluyombo', 'BNMV2SP', 'oyeleyeoluyombo@yahoo.com', 'cf9b8bbd02d39154578ae3a0d5acd82584fb80e5e75d57a28372f8a0d4f03a30', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08038053319', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(52, 'NULL', 'OLUWASEMILORE', 'TAIWO', 'MUJIN2T', 'taiwooluwaseun55@yahoo.com', '1fda3856cae12afb8b6f96ebe68631aee2af199290c641b4d0f6949e01b25999', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035616980', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(55, 'NULL', 'Inioluwa', 'Shoneye', 'QM6JB3A', 'abussygirl@gmail.com', 'c029df491d44f797cab44a3f35c2aada629353f085ddb49a0e6b69d061e93285', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08188164627', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(56, 'NULL', 'Tobanimi', 'fagbemi', 'WQTCZAN', 'muyiwafagbemi@yahoo.co.uk', '49e5318ea4a97b1fef0546691469a4dd5f7b9534407307b75e012cc4c4e7e0e5', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08027711168', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(68, 'NULL', 'Aderayo  Monteleolaoluwa', 'Derin-Adefuwa', 'UD1BP5X', 'getrowe@yahoo.com', 'fa851a6a3f8cf367115b1129f9dc0bb4a8fc76b5a49bd30a8d8432e1028f2ebd', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08023437825', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(69, 'NULL', 'Adebo', 'Segun', NULL, 'samadebisi@gmail.com', 'e3b12af4ab7bb978d1285e3d5a7390e7bc89a7a0dc92e3e1aed606095980a781', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08023335912', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '53033', NULL, 'www.trinityng.com/admission-portal?id=53033', NULL),
(70, 'NULL', 'Davida', 'Odumah', '4TGW2FO', 'imaobongj@yahoo.com', 'ea737f354485b927e8fc961250d62d18cfe46332d20849771e5bc7f10a7e56f0', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08023014281', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(71, 'NULL', 'Oluwashindara', 'Abina', 'N809JSV', 'tinuabina@yahoo.com', 'fe0b6fe02910a7d4570b4ffd2a031399c2f2f64607d9fa7a4ac6aa74fc727978', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08077777171', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(73, 'NULL', 'Samuel', 'Ojewole', 'V75WZ81', 'SAMOJES@YAHOO.COM', '2788bce4770cc1e58eec9c81118addd37703fc894d2156781bcde5a5651743e5', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033475655', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(76, 'NULL', 'Daniel', 'Duru', 'EVA6H8J', 'mindlaw2000@yahoo.com', '4a797d633b89ed87894765eed6270bc2674f45d1c81046ba58168c1f7897244b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '8037162852', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(78, 'NULL', 'Chimnadindu', 'Edward', 'L87M34E', 'edwardifeanyijp@gmail.com', '7330bc56a6514ab3e7d64c7186b7a03e445c7c590f9e1e81a33b6342ba8fad65', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '+2348022228402', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(80, 'NULL', 'oluyombo', 'oyeleye', NULL, 'elyonjfy@yahoo.com', 'cf9b8bbd02d39154578ae3a0d5acd82584fb80e5e75d57a28372f8a0d4f03a30', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08038053319', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '22332', NULL, 'www.trinityng.com/admission-portal?id=22332', NULL),
(81, 'NULL', 'OLUWASEUNFUNMI', 'ABIOYE', 'PKE63HM', 'funke.abioye@yahoo.com', '5ac7c2654bf17bf3f18eee35485c468a0bd4e8ef9962722da76b7d860c175685', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '+2348028275124', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(84, 'NULL', 'Cornelius', 'Oshiobor', 'WI4V25J', 'biguncle_1@yahoo.co.uk', '6aa97e6efc89237e493071b51a893771b7ea87995a5da3acc8b68ef82f8cc129', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07034126977', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(86, 'NULL', 'Adebukola', 'Musa', NULL, 'adebukolabolarinwa@yahoo.com', '32be65d8560fd64f82f3d75a9e65853a1a8b673f84138b22277a19c4796ea74d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08027785500', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '34301', NULL, 'www.trinityng.com/admission-portal?id=34301', NULL),
(87, 'NULL', 'Samuel', 'Ojewole', NULL, 's.b.de.great1@gmail.com', '9e1f3ff31fb003e703b0fbd3afd567de826fbc58f8e2da7453e98053c3416471', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033475655', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '25035', NULL, 'www.trinityng.com/admission-portal?id=25035', NULL),
(88, 'NULL', 'Omolola', 'Babatunde', NULL, 'lolababa74@yahoo.com', 'a531f7aa62c626a934ca63e900193ce8452ce19e17f2f1b750983b668c99288b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035748035', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01301', NULL, 'www.trinityng.com/admission-portal?id=01301', NULL),
(89, 'NULL', 'Olagboye', 'Dotun', NULL, 'olagboyedotund@gmail.com', '9048ea0f7801fe5cf1c354ebe4d1c7c28825421a37e73d4da3e1a8f1283a2036', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07018567290', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '01453', NULL, 'www.trinityng.com/admission-portal?id=01453', NULL),
(90, 'NULL', 'Fadeyibi', 'Olukemi', NULL, 'olukemi05fad@yahoo.com', '5c9b79e863161751e79a9711be1e4ab686987018c4d602184c235684ff681605', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07037366962', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03354', NULL, 'www.trinityng.com/admission-portal?id=03354', NULL),
(92, 'NULL', 'OJO', 'ADEGBOYEGA', NULL, 'ojay1911@gmail.com', '9336289c10fff71c619b64199fc165a77726fccaf36c6f1c2f23672d98bb10a6', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08060470513', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '45540', NULL, 'www.trinityng.com/admission-portal?id=45540', NULL),
(93, 'NULL', 'Adebanjo', 'Oseni', NULL, 'lanrebanjo2002@yahoo.co.in', '253f0b416f6e7e93b98c2f18da58797b0d952a58f077989ef174e94444276f1c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08056139346', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '03455', NULL, 'www.trinityng.com/admission-portal?id=03455', NULL),
(94, 'NULL', 'FUNMILAYO', 'AWOYEMI', NULL, 'omolaraawoyemi34@gmail.com', 'f6c756b6638eb9cb92a965cf2206fa337f6880c0f54ff4d1c97555e4da2cd220', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08165887382', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '23330', NULL, 'www.trinityng.com/admission-portal?id=23330', NULL),
(95, 'NULL', 'Folakemi', 'Oluseyi', NULL, 'fakeyeoluseyi@gmail.com', '9e8b19453d18d4a9463c49b2ed27e0e42d44fbb3942f02ee7d66368a4be4a313', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08039342200', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55031', NULL, 'www.trinityng.com/admission-portal?id=55031', NULL),
(96, 'NULL', 'Henry', 'Afere', 'KLN7BCO', 'henryafere734@gmail.com', 'c3678691eb16921a44203a4285ffea90e499bccf24fc95fcad92789531c80ec4', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09041254045', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(97, 'NULL', 'Ayooluwa', 'Majiyagbe', '97SD0MN', 'omotolamajiyagbe@yahoo.com', '8e11e34037346c1d4b7f228ebce471d18c69203480828be9c41c0448d6a0b03e', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035709330', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(98, 'NULL', 'Lawrence', 'Agbejimi', NULL, 'lawrenceagbejimi@gmail.com', 'c6cb9dbef940ffe61cf4c51a284ecebf1bcd5b8c9899a421f6ef85450715ab03', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033988074', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '44213', NULL, 'www.trinityng.com/admission-portal?id=44213', NULL),
(99, 'NULL', 'Chizaram', 'Nzewuenyi', 'YCP9217', 'diankci@yahoo.com', 'ea15bc8c9cbe1b8d45388e7ca0f569685ed4f1c6be971c517238209634eae7b4', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08069760324', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(100, 'NULL', 'Kelechi Victor', 'Umeh', 'M1VWAZ2', 'ar_nold_21@yahoo.co.uk', '6597c556a787e96716c49159efc3ffd34472c78391fb86d1e4ee4908b327d902', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035201405', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(103, 'NULL', 'Gabriella', 'Emmanuel', '9ZLD340', 'solujosun@yahoo.co.uk', 'd348e3e365a9b621e7c19551ee46245d5fbb98ee25a3f62949e886c14de24d4e', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07058223010', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(105, 'NULL', 'Chima', 'Ukaegbu', NULL, 'ukaegbuchimaobi10@gmail.com', 'cb08ff74d221da829bb281e8890f14c127671437483232683e1aa47331051500', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034039287', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11051', NULL, 'www.trinityng.com/admission-portal?id=11051', NULL),
(107, 'NULL', 'COVENANT', 'OKON', 'WEO8V3S', 'etubom1@yahoo.com', 'e7526e9f643d9cedf8117a2722b3e5c5c1afa9ba70f577689402d9a87e667193', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035059823', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(110, 'NULL', 'Aguguo', 'Chigozie', 'GPUSYR2', 'eppnigeria@gmail.com', '29c131ee1ccc80777a6e443af87ef96d1cbf7aca858a992580496c36d6008b57', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08023127806', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(111, 'NULL', 'Chinemerem', 'Ihekweazu', 'NF07TRI', 'utihekweazu@gmail.com', '644e3b3bd3e720e6cd8c0c3e67493073ebc55d9d436c248d91276fb623552ac6', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08036696079', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(112, 'NULL', 'Temiloluwa', 'Odetundun', '65G3SNT', 'Adesola.Odetundun@gmail.com', '564b14736a1ed206204c5c0fbde98ebf2a7d6e41202f3e164edabd5ff1f1091d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08131537953', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(113, 'NULL', 'Oyedeji', 'Oluwasegun', 'EU9YDS4', 'oyedejioluwasegundaree@gmail.com', '31d51b3ccfe4d5b5a471bed842b30ba64404a29e79249a3204558661356dcee2', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08031303829', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(114, 'NULL', 'Oluwaseyitan', 'Famoroti', 'BZU5H8Q', 'adebolay@yahoo.com', '52700f86b120e323dd63444f322da1983dcf7b7e6d2884c04d48a6f0578fa81d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08139535913', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(115, 'NULL', 'Oluwafunke', 'Odurole', 'K41UWIY', 'funkyytee@gmail.com', '03968bedcced6a1f448ef0207252b321ed072259eff2a24cc272609e9abe87d2', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08179952457', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(116, 'NULL', 'Naomi', 'onomerike', '2IMTYS0', 'honomerike94@gmail.com', '5a6af46df12f4ab5a50c3af614070326f6912cd28739b558eabbfef59ffb490a', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033027026', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(117, 'NULL', 'sonia', 'IWUOHA', 'LVS968H', 'donsonate@yahoo.com', '85a33f7b89fd2d746dd938bcc376e45dc6b2732a2f4a18214a3ad5fe71b47616', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08106705384', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(118, 'NULL', 'Oyinloye', 'Deborah', '4P18CKH', 'eniolaoyinloye021@gmail.com', 'f29dac8f26630f2a9096eb5c9307b76561a80eb94f856808c114e227dc18da23', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033923168', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(119, 'NULL', 'Rejoice', 'Duru-Paul', '9PDOURI', 'durupaul22@gmail.com', '6f007e4dd2cbf8ceb6ac8ef7e1f1bddde06e4a3cf941e7b7bcdc17e09e8a5b1b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034122118', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(120, 'NULL', 'Rejoice', 'Duru-Paul', '04QC2GZ', 'durupaul222@gmail.com', '6f007e4dd2cbf8ceb6ac8ef7e1f1bddde06e4a3cf941e7b7bcdc17e09e8a5b1b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034122118', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(121, 'NULL', 'Oguegbu', 'Great', 'ZVOG4SI', 'emmanuelezenwuba200@gmail.com', '1b85447cdf5450e9ac34307d210e290f4b98c66d90d0949085a501133a8eb03c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08085124844', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(122, 'NULL', 'Great', 'Chimdindu Oguegbu', '9T8K5Q0', 'elochukwujoy@yahoo.com', '1b85447cdf5450e9ac34307d210e290f4b98c66d90d0949085a501133a8eb03c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08085124844', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(123, 'NULL', 'Toluwatise', 'Osimokun', 'P7YTL5B', 'temitopeosimokun@gmail.com', 'cfccad372921a19a385f187fe80644ec5f2076a90a0878a04c8ea4aa17f6d3c2', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033123236', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(124, 'NULL', 'Olufunmilade', 'Ogunfowora', 'KN6QPLY', 'oomicinc@gmail.com', '6256405b8d1da72be5c40cce48c6bb4a6b8b5c4931e195f42c01b4b8f7d34c0f', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '+2348032004855', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(126, 'NULL', 'Adeogun', 'Eniola Joan', '4L6KTX7', 'adeogunedith@gmail.com', 'd4ebfd547ec14a2a9c332f81f93a48b504c398dba76694812bed9a1eca262af4', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08054299995', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(127, 'NULL', 'Modestus', 'Igwe', 'TFVOZCE', 'katechukwumah2@gmail.com', 'fe314da6f5d0c2c7494aa0166eaeb703e1725ef455e8cad0d96ed96117d47c13', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07017838461', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(130, 'NULL', 'Prince', 'Edet', 'J2RNM3X', 'naijaspeed1@gmail.com', 'c68504bcb1cd45e20784ad03ff3bb06caaa3adab4286b9101c7d551ea846dcc8', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08096097538', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(131, 'NULL', 'Chukwuede', 'Chibuike', 'EWOITMJ', 'egbetayoayodele@gmail.com', 'bb126355da2ffc414b5462500bd26a689d3b4af911214064587d06c6715a0a66', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08032528593', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(132, 'NULL', 'Anjolaoluwa', 'Windapo', 'Q1DOUYH', 'busayoyinka@yahoo.com', 'fae5585a91989c3fef013dd899303af5ef9e89bc5b567086fa3771a9c344ae5d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07034057052', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(133, 'NULL', 'Oluwatomisin', 'Ogunlana', 'G3T4DPK', 'olawmi@yahoo.com', 'f0851adba6bf5f84f8886c946000dc669d3f652896c9aa47d7e11374c53dd17b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08036620519', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(134, 'NULL', 'FENIYIN', 'ADEEYO', 'R3685XH', 'olohitaio@gmail.com', '62d89ad201665547133ded69f498b79da012f894b81b412387e8acea884bf7a1', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08069524851', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(135, 'NULL', 'Oluwafeyikemi', 'Ojo', 'KWY8E14', 'olawumiojo@yahoo.com', 'cac3dcea346c35dc890960ab71bedef9d6bb555ecf210c8721d842161a601dea', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033018043', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(136, 'NULL', 'Alex', 'Johnson', '08NIUGE', 'ajroyj@gmail.com', '10ef17da299153af3926553c965f4fbe02a3f807f2217420b22494b6aa1d10f0', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '8178819496', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(137, 'NULL', 'Oyeniyi. Oluwadarasimi', 'Elizabeth', 'ERG1BUZ', 'genpol2006@yahoo.com', '3e6b6d40acc3195962a000f623383c0d7e6856335570d0a6a73802307969f068', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08101182298', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(138, 'NULL', 'Raphael', 'Eze', 'J8VU76Q', 'eraphael2002@yahoo.com', '1c66ec245b057fe31f8b82813788d72bbbac391b857d82b2d44f7f6712428985', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '2348055571305', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(139, 'NULL', 'Chidolue', 'Favour', 'JHPS8I9', 'egbetayoayodele@yahoo.com', 'bf65af800799990b44335f9798b683065c0b723e106d21061890888b7543e3ad', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09065146828', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(140, 'NULL', 'Godâ€™sGrace', 'Alamu', 'AHD3QGW', 'pectoria@yahoo.com', 'cbd8653c25f9c72e8cbd2c0ebf33972a037dfc9f0797cc5596b777426567051b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08165474696', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(141, 'NULL', 'Gregory', 'Elogie', 'SFT8PGB', 'gregoryovieh@yahoo.co.uk', '7adbfb0b915293dce22bcbdf5b01fe280236b4fa9acaa5c6936e43ce9248b854', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08064935029', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(142, 'NULL', 'Abiodun', 'Mubarak', 'XDWBNU5', 'ashabimorenikeji8@gmail.com', 'b35249493def40d428953583b82e766444d1888a526248a5c435648bb237ea79', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08128135495', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(143, 'NULL', 'Daniel', 'Adeyele', '7Y5BIU9', 'Oluwakemiadeyele@gmail.com', '5dbebba591f254cdf7adbbf0a2c68bdb6acdebe9c7451760ad11fb6d2c9648b4', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08036245267', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(144, 'NULL', 'Timinipre Irene', 'Egberipou', '2MW3L4R', 'irene26@gmail.com', '98de31e160962537b62827d10d60de85a8c1d67f0feb5a40e513baeb17319e36', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07061962925', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(145, 'NULL', 'Idobo', 'Akpan', 'DVL6N5O', 'idobogeorge@gmail.com', 'e1b7372c966a2542393d85081f59eb514f7700a8dc28c311c36671a8ec2653d2', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08144348191', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(146, 'NULL', 'Ogundare', 'Aliyah', 'J65NM9G', 'ogunade1233@gmail.com', 'fdde1451657265a9f63d1ab072e584f2ff1441e5a58e79a8266139962e4e6a5d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07040964104', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(147, 'NULL', 'olofu', 'francis', '3TN9AJX', 'olofufrancis46@gmail.com', '4584b5f35f813f6ad62c73384b2cfe9344b6c153bca6ecbb98c41ddd8a71f238', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07043948472', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(148, 'NULL', 'Favour', 'Udoka', 'ZMQ8250', '', '07e2a308350fe99c8209e33871aa5815ed419f6b5a304bcd85fa342d7b919290', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08065088623', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(149, 'NULL', 'Victoria', 'Enodien', 'ZWPAJ8D', 'brightenodien@gmail.com', 'e955ff23235748330faf07b5d3149027ef150873b9391c7f984df5bf1fc4e69c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07040255560', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(150, 'NULL', 'Akintunde', 'Ogundipe', '3O4XYCP', 'tundecustoms@yahoo.com', 'a3309bb4cde8aea96e39202b7b32ad111a22de717cba2b5520d41276ca34ca12', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08067226010', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(151, 'NULL', 'Joshua', 'Giwa', 'HQZAPW7', 'jbgiwa@gmail.com', '87ec2d966b4ada20eceb685bab5d75a381f0af59c4096dd343583c8d3d5c2577', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08098591294', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(152, 'NULL', 'Boluwatife-Daniel', 'Olurinto', '3AIHST4', 'olurintomorris@gmail.com', 'f35d1e36bcd2a99d3bbe6dd6a1a3ae0df0d90b8217e1ab471ef4e955fde43b33', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '+234 806 240 63', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(153, 'NULL', 'Terah', 'Bot', '7EOHZ20', 'chrisjbot@gmail.com', '89a52c569cbca19515eae36a43182edff64b6e96f712a9a26f27b46bd1c999e7', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035142064', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(155, 'NULL', 'Edet', 'Edem', '2KVHIO3', 'edetedem141@gmail.com', '21b8f6a46520b8ff1e60b761565539bca62dda1665e395255009c498ea61acbd', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08134683705', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(156, 'NULL', 'Stella', 'Maris', '8A2SNR5', 'berisa_st@yahoo.com', 'a239062f9c0ba54cf85c0634c372995313e4b89501f44f64e7917a86f5a2d289', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07032341498', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(157, 'NULL', 'Adedemilade', 'Akinmade', 'GUFKHNS', 'vickykups@yahoo.com', '20673d7009cf302fdbce40170fc849a2988244b2119ab8b6e2a5f787bc8e210f', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08032013163', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(159, 'NULL', 'Victory osamudiamhen', 'Ikekhide', 'LXOKUDC', 'divconmd@gmail.com', '3b4dfd095543f6d63ef49b017434ea7e56d0aa39c51304891b85965727b84cda', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033238655', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(160, 'NULL', 'Ojone', 'Eliana', 'F8PST5L', 'thedove012001@gmail.com', '3662bec8fcb4e6eaa8f6a1b231828386fdf2c118978d0e090836c86064cc7b2d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035970786', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(161, 'NULL', 'Ireoluwamide', 'Thomas', 'UAB0DXL', 'laoluthomas@gmail.com', 'e3ff0bdecb8bac20c61ca9118bf07f3399f704e86f235cf21cd21035a6b52f8d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08023525089', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(162, 'NULL', 'Mohammed', 'Konneh', 'GWTF8NB', 'konnehmohammed132@gmail.com', '0807aac46aa06cec67808e4773629d708b3f471c3f2bc91a64685305dac5e324', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '0776229251', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(163, 'NULL', 'Oladipupo', 'Olufowobi', 'W47YMF9', 'Olufowobioladipupo@parent.com', 'f174f7f2c100e7c5d4a357aa59fee263129d9ec76a36c03c1534c9fadf4b4f5e', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08030506249', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(164, 'NULL', 'Oladipupo', 'Olufowobi', 'GOB6KI2', 'abiolaolufowobi4@gmail.com', 'f174f7f2c100e7c5d4a357aa59fee263129d9ec76a36c03c1534c9fadf4b4f5e', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08030506249', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(165, 'NULL', 'Inifie', 'Abraham', 'ISP4W3T', 'abinifie_j@yahoo.com', 'dea859cacccb87d79a33a57a975c895aa84a041fe485d8b58a9dfacaa7a61d5e', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08037588882', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(166, 'NULL', 'Victory', 'Ikekhide', '05ZD7CW', 'dannyolise@yahoo.com', '314e5006b2cdbdec89578ca638e2fb9b868db5a0fe6210954351d5c6a4cdf489', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08039335411', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(167, 'NULL', 'TEMILOLA', 'ABE', '0UELI2Z', 'christianaopeyemiabe@gmail.com', 'f8575165449c9b51eeda5d49f1ffbeee8023e9ce64becf82c9ed9b82c07d0885', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034977691', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(168, 'NULL', 'Darasimi', 'sutton', 'HO85FRW', 'elizabethsutton288@yahoo.com', '7e32884c4518c6c64756c59e40d419f85a8c4a0808b4ba2c1414a5dd4ea8aa1a', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08027888009', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(169, 'NULL', 'Zikoranachidinma', 'Okereke', '1HV0KGL', 'zikora.okereke@outlook.com', '05a61762a6c68e0d07410e309fc15b232e55c573283dcc80dfce1f933bb7612a', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08035667801', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(170, 'NULL', 'Princewill', 'Nwaogu', 'F4Z8BM9', 'maduabuchipeace8@gmail.com', '5b2d97d45b868b6360f94b73de13da18190286946a4f87f7ac7daa8eaecaac44', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08168013739', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(171, 'NULL', 'DIMEJI', 'AJAYI', 'KRB9HCA', 'dimeji.ajayi@gmail.com', '568aa43c8fc714e356e8cb3c79ada255128670dd78fce6b030ba418ec5574da8', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033132134', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(172, 'NULL', 'Hadassah Kememeniose', 'Mgbakor', 'XFJ7ARH', 'mgbakoronyi@gmail.com', '9acbe9bcdce9a04b1acdb164e6042b5a575b625121f363addce93d419279919c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034084721', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(173, 'NULL', 'Esosa', 'Nowa-Omorogbe', 'LZ3ADC1', 'ifynowa@gmail.com', 'ebf4ced0c940c6e16fbc65ecc2d27ffe3077298529d5f1642caec57108c4f07a', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08172004255', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(174, 'NULL', 'Shalom', 'Adeniyi', 'GSHA2RN', 'busayoaremu@yahoo.com', 'b37f6df5fc97b03279e8a923d533b1353b230a1573aa0f60d384286dc613c71f', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07038323889', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(175, 'NULL', 'Ikpeminoghena Alberta', 'Okhakhu', 'BK48W0O', 'pokhakhu@gmail.com', '20bdfa4a79ee53a6009345686fd44335c4daa77a8ac72d7781b290d3c5ff41de', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08026719404', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(176, 'NULL', 'Osasenaga MIchael', 'Ohangbon', 'I7H4F1R', 'ohangbonm@gmail.com', '215151dcefc9765ccbfaffb1f9c4f6f82218a4be65e279cb6f5bbecbcf0f72a0', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033235829', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(177, 'NULL', 'David', 'Bohan', '8D7H3QR', 'shile.habib1@gmail.com', '2646027fb1ec3f7bf5b2a51cbb66b8c176465887f4b5f14d99c61224e36df57f', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '0814653166', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(178, 'NULL', 'Akinola', 'Lucas', NULL, 'sammylucas4ever@gmail.com', '7d41a8894637cb3ec66c06d4ae4bce0fa10aeab18c32cda97ad448a912418598', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09011078666', 'Affiliate', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '40135', NULL, 'www.trinityng.com/admission-portal?id=40135', NULL),
(179, 'NULL', 'Aderinola', 'Adesokan', 'ZXD3QT1', 'oadesokan@yahoo.com', 'dbc130462bf8609468e480e45a1f9ec104acbbd0cd177c6ae55ca723ba240db5', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08105466350', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(180, 'NULL', 'Eric', 'Odinamadu', '9L0WC8P', 'Ericaodinamadu@yahoo.com', '79f43bf3f73df5c372f389f469707576b37848e79c1955d345ae0cabc829ae19', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08033460870', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(181, 'NULL', 'MATHEA', 'OMAYUKU', '8D0WGLB', 'roliomayuku@gmail.com', '7d097bfee4dd8a6107c51cbdfd283cbfc90919643bbd8dacc0d5de08433265ed', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034880913', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(182, 'NULL', 'Unegbu', 'Susan', '7K0GH2U', 'metchesuzzan@gmail.com', 'a6ee6eaff2a2f7d662b9e618b421db115979191c0a951fa9245beb2e7b971c62', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08060116925', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(183, 'NULL', '', 'OLALEKAN', 'ZB0FMU2', 'lezyok2007@yahoo.com', '7e92009e3ce3d31002928ed1b33635c617b3a19d046589550fd5247055d14b19', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08068879346', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(184, 'NULL', 'Mitchell', 'Oyewole', 'F7CE8GH', 'ezeoyewole@gmail.com', 'e1159900e5faaf09db0d16e666b31217079360286d0376441875e0d09ef0e30d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07037374769', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(185, 'NULL', 'DAVID', 'UKPONG', 'BFRLPSO', 'tonyeukpong@gmail.com', 'fa9d3449d52a6b0ef49ae1d05a1302b6fae41aeafdc6dafa8bf7ea1107424f46', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08036707040', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(186, 'NULL', 'Isaiah', 'Okpako', 'J6CXSQA', 'izzylyf001@gmail.com', '63d3becdb0bc96deab43f7a85b2f97fbad1e2a66f84e22a655c6b3c230d3fcca', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09030285993', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(187, 'NULL', 'Adeyemo Kehinde', 'Adeyemo', 'MD75KI2', 'adeyemobecky@gmail.com', '5d671c11a407abb2f82a5126f71b0a1c795e9c144ad9f45a835babad4e596f55', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08034242339', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(188, 'NULL', 'Oyinade', 'Adeyemo', 'F5JG4PS', 'adeyemo.tricol@gmail.com', '7b4b1a342610e8d942185f6d3abfb8bf505829cc3c219d2c2febcdb46d6b4fb5', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08026736144', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(189, 'NULL', 'Akingbala', 'Damilola', NULL, 'AkingbalaGafar@gmail.com', '6450e392c6f8d2d933671d746174468d8bbb68486a7f79f9e4195c85afde282d', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08137841657', 'Affiliate', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '41112', NULL, 'www.trinityng.com/admission-portal?id=41112', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_session`
--

CREATE TABLE `user_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_session`
--

INSERT INTO `user_session` (`id`, `user_id`, `hash`) VALUES
(1, 1, 'bfb363df7c91c0726e015ed0b49740b7615b66ec68caa28f5a9c917ffccaf292');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imgUpload`
--
ALTER TABLE `imgUpload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prefect`
--
ALTER TABLE `prefect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidder`
--
ALTER TABLE `slidder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=996;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `imgUpload`
--
ALTER TABLE `imgUpload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `prefect`
--
ALTER TABLE `prefect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slidder`
--
ALTER TABLE `slidder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
