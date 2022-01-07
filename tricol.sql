-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 26, 2021 at 10:17 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tricol`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(11) NOT NULL,
  `user` varchar(200) DEFAULT NULL,
  `activity` text DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
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
(300, 'sholasolomon@yahoo.com', 'User login', '2021-02-13 12:32:20'),
(301, 'sholasolomon@yahoo.com', 'User login', '2021-02-13 12:48:32'),
(302, 'admin@admin.com', 'User login', '2021-02-13 14:56:25'),
(303, 'oke.james@gmail.com', 'User login', '2021-02-13 15:45:08'),
(304, 'oke.james@gmail.com', 'User login', '2021-02-13 16:16:51'),
(305, 'sholasolomon@yahoo.com', 'User login', '2021-02-15 16:16:28'),
(306, 'sholasolomon@yahoo.com', 'User login', '2021-02-15 16:24:54'),
(307, 'sholasolomon@yahoo.com', 'User login', '2021-02-15 16:46:03'),
(308, 'sholasolomon@yahoo.com', 'User login', '2021-02-16 07:47:04'),
(309, 'a.affiliate@yahoo.com', 'User login', '2021-02-17 09:28:13'),
(310, 'user@affiliate.com', 'User login', '2021-02-17 10:45:37'),
(311, 'admin@admin.com', 'User login', '2021-02-17 10:45:45'),
(312, 'user@affiliate.com', 'User login', '2021-02-17 10:46:15'),
(313, 'a.affiliate@yahoo.com', 'User login', '2021-02-17 19:30:16');

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
  `evidence` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `student`, `amount`, `mode`, `refrence`, `payfor`, `date`, `evidence`) VALUES
(1, 15, 10500, 'paystack', '194406250', 'Entrance Examination Fee', '2021-02-11', NULL),
(2, 15, 10500, 'paystack', '194406250', 'Entrance Examination Fee', '2021-02-11', NULL),
(3, 15, 10500, 'paystack', '194406250', 'Entrance Examination Fee', '2021-02-11', NULL),
(4, 17, 10500, 'paystack', '299774836', 'Entrance Examination Fee', '2021-02-12', NULL),
(5, 17, 10500, 'paystack', '299774836', 'Entrance Examination Fee', '2021-02-12', NULL),
(6, 17, 10500, 'paystack', '709974530', 'Entrance Examination Fee', '2021-02-12', NULL),
(7, 17, 10500, 'bank', NULL, 'Entrance Examination Fee', '2021-02-16', NULL),
(8, 17, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-16', '325494.png'),
(9, 17, 10000, 'bank', '', 'Entrance Examination Fee', '2021-02-16', '863553.png');

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
  `studentCode` varchar(30) DEFAULT NULL,
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
  `foaddr` text DEFAULT NULL,
  `faddr` text DEFAULT NULL,
  `foccu` varchar(255) DEFAULT NULL,
  `mfname` varchar(255) DEFAULT NULL,
  `memail` varchar(255) DEFAULT NULL,
  `mphone` varchar(40) DEFAULT NULL,
  `moaddr` text DEFAULT NULL,
  `maddr` text DEFAULT NULL,
  `moccu` varchar(255) DEFAULT NULL,
  `gfname` varchar(255) DEFAULT NULL,
  `gphone` varchar(40) DEFAULT NULL,
  `gemail` varchar(255) DEFAULT NULL,
  `goaddr` text DEFAULT NULL,
  `gaddr` text DEFAULT NULL,
  `goccu` varchar(255) DEFAULT NULL,
  `preclass` varchar(255) DEFAULT NULL,
  `classenrol` varchar(255) DEFAULT NULL,
  `lga` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `preschool` varchar(255) DEFAULT NULL,
  `dob` varchar(30) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `passport` varchar(100) DEFAULT NULL,
  `birthcert` varchar(100) DEFAULT NULL,
  `examdate` varchar(40) DEFAULT NULL,
  `examcode` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentCode`, `fname`, `mname`, `lname`, `email`, `gender`, `phone`, `reff_by`, `status`, `created`, `ffname`, `femail`, `fphone`, `foaddr`, `faddr`, `foccu`, `mfname`, `memail`, `mphone`, `moaddr`, `maddr`, `moccu`, `gfname`, `gphone`, `gemail`, `goaddr`, `gaddr`, `goccu`, `preclass`, `classenrol`, `lga`, `nationality`, `preschool`, `dob`, `state`, `passport`, `birthcert`, `examdate`, `examcode`) VALUES
(1, NULL, 'Abdulhammed', NULL, 'Adio', 'admin@admin.com', NULL, '0812356765', '50253', 'offline', '2021-01-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(2, '89JWCTU', 'wadww', NULL, 'wdwsd', '', NULL, 'wsdws', NULL, 'Paid', '2021-01-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(3, NULL, 'Abdulhammed', NULL, 'Adio', 'adio@admin.com', NULL, '0812356765', NULL, 'offline', '2021-01-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(4, NULL, 'Sodiq', NULL, 'Student', 'sodiq@gmail.com', NULL, '09098786756', '0', 'offline', '2021-01-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(5, NULL, 'Emmanuel', NULL, 'Olaniyi', 'emma@yahoo.com', NULL, '07089575445', '0', 'offline', '2021-01-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(6, NULL, 'Tunji', NULL, 'Ojo', 'tunji@gmail.com', NULL, '0909864534', '0', 'offline', '2021-01-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(7, NULL, 'Soji', NULL, 'Ade', 'ade@gmail.com', NULL, '0908766', '0', 'offline', '2021-01-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(8, NULL, 'Soqi', NULL, 'Alao', 'alao@gmail.com', NULL, '08098766', 'hammed@affiliate.com', 'offline', '2021-01-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(10, NULL, 'Mary', NULL, 'Ojo', 'sholasqz@gmail.com', NULL, '08000022202', NULL, 'Unpaid', '2021-02-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(11, NULL, 'Ojo', NULL, 'John', 'sholas@yahoo.com', NULL, '08173853134', '50253', 'Unpaid', '2021-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(12, NULL, 'Ojo', NULL, 'Kolawole', 'o.kola@gmail.com', NULL, '081736574689', NULL, 'Unpaid', '2021-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(13, NULL, 'Test', NULL, 'Test', 'test@tes.com', NULL, '09087654322', NULL, 'Unpaid', '2021-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(14, NULL, 'John', NULL, 'Kay', 'j.kay@gmail.com', NULL, '0908876555335', '50253', 'Unpaid', '2021-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(15, NULL, 'Henry', NULL, 'James', 'h.james@yahoo.com', NULL, '08123423412', NULL, 'Unpaid', '2021-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(16, NULL, 'Glory', NULL, 'Jane', 'g.jane@yahoo.com', NULL, '08123456709', '50253', 'Unpaid', '2021-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(17, NULL, 'James', 'Ola', 'Oke', 'oke.james@gmail.com', 'Male', '+2349087653423', NULL, 'Unpaid', '2021-02-10', 'Ola Wale', 'o.wale@gmail.com', '09087654312', 'Ajah', 'Ajah', 'Business', 'Ola Kemi', 'o.kemi@gmail.com', '08076543212', 'Ajah', 'Ajah', 'Business', 'Joy James', '07063245287', 'j.joy@gmail.com', 'Ajah', 'Ajah', 'Business', 'Pre Class', 'Basic 7', 'Eti Osa', 'Nigerian', 'School', '2021-02-11', 'Lagos', '429410.png', '136773.png', NULL, NULL),
(18, NULL, 'Semilore', NULL, 'Ojo', 's.ojo@hybridsoft.com.ng', NULL, '08173853134', NULL, 'Unpaid', '2021-02-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '429410.png', '136773.png', NULL, NULL),
(19, 'E706O5N', 'Mary', 'Darasimi', 'Akeju', 'sholasolomon@yahoo.com', 'Female', '08173853134', NULL, 'Unpaid', '2021-02-11', 'Ojo Solomon', 's.ojo@email.com', '08173853134', 'Ajah', 'Ajah', 'Business', 'Ojo Ay', 'ay.ojo@yahoo.com', '08173853134', '  Ajah', 'Ajah', 'Business', '', '', '', '', '', '', 'Pry 5', 'Basic 7', 'Eti Osa', 'Nigerian', 'Magnus champion', '2021-02-12', 'Lagos', '429410.png', '136773.png', NULL, NULL),
(21, NULL, 'Test', NULL, 'Test', 'test@std.com', NULL, '09087654323', '50253', 'Unpaid', '2021-02-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'Ade', NULL, 'John', 'a.john@yahoo.com', NULL, '08099999999', '55245', 'Unpaid', '2021-02-17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `company` varchar(100) DEFAULT 'NULL',
  `fname` varchar(255) DEFAULT 'NULL',
  `lname` varchar(100) DEFAULT NULL,
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
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
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

INSERT INTO `users` (`id`, `company`, `fname`, `lname`, `email`, `password`, `salt`, `phone`, `role`, `status`, `group`, `joined`, `gender`, `image`, `address`, `address2`, `city`, `state`, `zip`, `code`, `station`, `refferal`, `ref_by`) VALUES
(1, '', 'Ojo', 'Ojo', 'admin@admin.com', '72eb72cd70b3395d04e0c01aada6447e23754988e0913030f35bef6c5c9d312a', 'ªœÖ!Há¿H”$’=Í®¹ü.JÕS&ÍrÓ ‘', '09083242100', 'Admin', 'Active', 2, '2020-04-02', NULL, 'profile/256426.png', '2 Adeyemo Alakija Street, ', 'Lagos, Nigeria', 'Lagos', 'Lagos', '23401', 'LFEH(Tx', NULL, NULL, NULL),
(2, 'hybridsoft', 'admin', 'admin', 'admin@admin', '$2y$10$mY122n0cP3mtx.e9oj4nC.MIo9n.R9tMYt1SoWY3Rxsl/q8aOvGwu', '$2y$10$mY122n0cP3mtx.e9oj4nC.MIo9n.R9tMYt1SoWY3Rxsl/q8aOvGwu', '09098146934', 'Admin', 'Active', 1, '2021-01-21', 'Male', NULL, 'iba', 'Ojo, ', 'Iba', 'Lagos', '+234', '1234', 'Ogun', NULL, NULL),
(3, 'NULL', 'Aff', 'Aff', 'aff@affiliate.com', 'password', NULL, '09088877700', 'Affiliate', 'Declined', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'NULL', 'Test', 'Test', 'test@test.com', '46ba8ff278323b613c4361eea82b33736d74b8df77854dfbc66f50bb5450a597', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '07099999900', 'Affiliate', 'Active', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'NULL', 'John', 'John', 'john@affiliate.com', '46ba8ff278323b613c4361eea82b33736d74b8df77854dfbc6...', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08055544433', 'Affiliate', 'Active', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.trinityng.com/admission-portal?id=22234', '22234'),
(6, 'NULL', 'Test', 'Test', 'info@test.com', '46ba8ff278323b613c4361eea82b33736d74b8df77854dfbc66f50bb5450a597', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09099999900', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.trinityng.com/admission-portal?id=12004', '12004'),
(7, 'NULL', 'Affiliate', 'Affiliate', 'a.affiliate@yahoo.com', '46ba8ff278323b613c4361eea82b33736d74b8df77854dfbc66f50bb5450a597', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09088899900', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '50253', NULL, 'www.trinityng.com/admission-portal?id=50253', '50253'),
(8, 'NULL', 'Mary', 'Ojo', 'sholasqz@gmail.com', '64f4f78d666cfff002c99cab7167332889974030a553d6a304878a3a2caaae23', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08000022202', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'NULL', 'Ojo', 'John', 'sholas@yahoo.com', '8bc9622e369798d250da868220fd6bec6bfb2c450cf0551109c9fc1759af186c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08173853134', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'NULL', 'Ojo', 'Kolawole', 'o.kola@gmail.com', '5d52361e3a1c10bfaa4b89a63a6c36fca03fa31ad1319412a456f1baeaa7f3f6', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '081736574689', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'NULL', 'Test', 'Test', 'test@tes.com', 'bc266c1633cc3168b0869d433a02021916a1fd63f7f0707b4b4b076ef8aed30b', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09087654322', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'NULL', 'John', 'Kay', 'j.kay@gmail.com', 'ff51fa35b248324d6f817a65eb54557c64b97b4d4cea7a9b4bec57e3bd02a13a', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '0908876555335', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'NULL', 'Henry', 'James', 'h.james@yahoo.com', '00ade9a97f9006e6c307419b4e59963da92561bfc9815ebcb353bfa703a0a4c8', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08123423412', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'NULL', 'Glory', 'Jane', 'g.jane@yahoo.com', '3ad2c41ac1e991c8bf4a6427057f02b5d40c3a37bfcf248ea42c06165c7e2b3a', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08123456709', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'NULL', 'James', 'Oke', 'oke.james@gmail.com', 'e1deb37eb5db22f88af617086a89a5dae771b8de8f1de8b0ab0ea51d39123c54', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '+2349087653423', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'NULL', 'Semilore', 'Ojo', 's.ojo@hybridsoft.com.ng', '8bc9622e369798d250da868220fd6bec6bfb2c450cf0551109c9fc1759af186c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08173853134', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'NULL', 'Mary', 'Akeju', 'sholasolomon@yahoo.com', '8bc9622e369798d250da868220fd6bec6bfb2c450cf0551109c9fc1759af186c', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08173853134', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'NULL', 'Test', 'Test', 'test@std.com', 'dddf3b44ac1b7f3af4f86f3b1183826d9f8facd271554d646f91b925c37709f7', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09087654323', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'NULL', 'User', 'Affiliate', 'user@affiliate.com', '46ba8ff278323b613c4361eea82b33736d74b8df77854dfbc66f50bb5450a597', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '09088909000', 'Affiliate', 'Active', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55245', NULL, 'www.trinityng.com/admission-portal?id=55245', NULL),
(21, 'NULL', 'Ade', 'John', 'a.john@yahoo.com', 'f0fe3b3dcdec8d6f03a97e07bb8bfc5e8efb9f46017081d0c49f4421e44082de', 'cxÃÅ½Ã uH@Ã“Æ’Ã¥UÃ‹PÅ¾ÃÃ¾ÃŠÃ¢0sÃ¾naâ€Ãˆ(Ã¸ ', '08099999999', 'Student', 'offline', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '55245');

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
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
