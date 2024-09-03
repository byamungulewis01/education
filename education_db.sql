-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 10:58 AM
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
-- Database: `education_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `school_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `price`, `school_id`, `program_id`, `created_at`, `updated_at`) VALUES
(3, 'Advanced Diploma in Accounting Science', 'Advanced Diploma in Accounting Science', '100', 2, 1, '2023-10-19 02:40:23', '2023-10-19 02:40:23'),
(4, 'Advanced Diploma in Auditing', 'Advanced Diploma in Auditing', '80', 2, 1, '2023-10-19 02:41:50', '2023-10-19 02:41:50'),
(5, 'Advanced Diploma in Blockchain & Digital Assets', 'Advanced Diploma in Blockchain & Digital Assets', '67', 2, 1, '2023-10-19 02:42:50', '2023-10-19 02:42:50'),
(6, 'Advanced Diploma in Economics', 'Advanced Diploma in Economics', '60', 2, 1, '2023-10-19 02:45:41', '2023-10-19 02:45:41'),
(7, 'Advanced Diploma in Entrepreneurship', 'Advanced Diploma in Entrepreneurship', '89', 2, 1, '2023-10-19 02:46:27', '2023-10-19 02:46:27'),
(8, 'Masters  in Accounting Science', 'Masters  in Accounting Science', '100', 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Masters  in Auditing', 'Masters  in Auditing', '80', 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Masters  in Blockchain & Digital Assets', 'Masters  in Blockchain & Digital Assets', '67', 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Masters  in Economics', 'Masters  in Economics', '60', 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Masters  in Entrepreneurship', 'Masters  in Entrepreneurship', '0', 2, 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Diploma in Accounting Science', 'Diploma in Accounting Science', '100', 2, 4, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(14, 'Diploma in Auditing', 'Diploma in Auditing', '80', 2, 4, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(15, 'Diploma in Blockchain & Digital Assets', 'Diploma in Blockchain & Digital Assets', '67', 2, 4, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(16, 'Diploma in Economics', 'Diploma in Economics', '60', 2, 4, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(17, 'Diploma in Entrepreneurship', 'Diploma in Entrepreneurship', '89', 2, 4, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(18, 'Doctor of Philosophy in Accounting Science', 'Doctor of Philosophy in Accounting Science', '100', 2, 5, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(19, 'Doctor of Philosophy in Auditing', 'Doctor of Philosophy in Auditing', '80', 2, 5, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(20, 'Doctor of Philosophy in Blockchain & Digital Assets', 'Doctor of Philosophy in Blockchain & Digital Assets', '67', 2, 5, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(21, 'Doctor of Philosophy in Economics', 'Doctor of Philosophy in Economics', '60', 2, 5, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(22, 'Doctor of Philosophy in Entrepreneurship', 'Doctor of Philosophy in Entrepreneurship', '89', 2, 5, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(23, 'Bachelor in Accounting Science', 'Bachelor in Accounting Science', '100', 2, 3, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(24, 'Bachelor in Auditing', 'Bachelor in Auditing', '80', 2, 3, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(25, 'Bachelor in Blockchain & Digital Assets', 'Bachelor in Blockchain & Digital Assets', '67', 2, 3, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(26, 'Bachelor in Economics', 'Bachelor in Economics', '60', 2, 3, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(27, 'Bachelor in Entrepreneurship', 'Bachelor in Entrepreneurship', '89', 2, 3, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(28, 'Master  in Anaesthesia', 'Master  in Anaesthesia', '120', 1, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(29, 'Master  in Anthropology', 'Master  in Anthropology', '100', 1, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(30, 'Master  in Biological Chemistry', 'Master  in Biological Chemistry', '0', 1, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(31, 'Master  in Cell Biology', 'Master  in Cell Biology', '203', 1, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(32, 'Master  in Clinical Chemistry', 'Master  in Clinical Chemistry', '170', 1, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(33, 'Advanced Diploma in Anaesthesia', 'Advanced Diploma in Anaesthesia', '120', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Advanced Diploma in Anthropology', 'Advanced Diploma in Anthropology', '100', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Advanced Diploma in Biological Chemistry', 'Advanced Diploma in Biological Chemistry', '200', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Advanced Diploma in Cell Biology', 'Advanced Diploma in Cell Biology', '203', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Advanced Diploma in Clinical Chemistry', 'Advanced Diploma in Clinical Chemistry', '170', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Bachelor in Anaesthesia', 'Bachelor in Anaesthesia', '120', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Bachelor in Anthropology', 'Bachelor in Anthropology', '100', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Bachelor in Biological Chemistry', 'Bachelor in Biological Chemistry', '200', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Bachelor in Cell Biology', 'Bachelor in Cell Biology', '203', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Bachelor in Clinical Chemistry', 'Bachelor in Clinical Chemistry', '0', 1, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Diploma in Anaesthesia', 'Diploma in Anaesthesia', '120', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Diploma in Anthropology', 'Diploma in Anthropology', '100', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Diploma in Biological Chemistry', 'Diploma in Biological Chemistry', '200', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Diploma in Cell Biology', 'Diploma in Cell Biology', '203', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Diploma in Clinical Chemistry', 'Diploma in Clinical Chemistry', '170', 1, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Doctor of Philosophy in Anaesthesia', 'Doctor of Philosophy in Anaesthesia', '120', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Doctor of Philosophy in Anthropology', 'Doctor of Philosophy in Anthropology', '0', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Doctor of Philosophy in Biological Chemistry', 'Doctor of Philosophy in Biological Chemistry', '200', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Doctor of Philosophy in Cell Biology', 'Doctor of Philosophy in Cell Biology', '203', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Doctor of Philosophy in Clinical Chemistry', 'Doctor of Philosophy in Clinical Chemistry', '170', 1, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Master in Computer Science', 'Master in Computer Science', '120', 4, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(54, 'Master in Conservation Biology', 'Master in Conservation Biology', '100', 4, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(55, 'Master in Crop Protection', 'Master in Crop Protection', '200', 4, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(56, 'Master in Design', 'Master in Design', '203', 4, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(57, 'Master in Earth Science', 'Master in Earth Science', '170', 4, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(58, 'Advanced Diploma in Computer Science', 'Advanced Diploma in Computer Science', '0', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Advanced Diploma in Conservation Biology', 'Advanced Diploma in Conservation Biology', '100', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Advanced Diploma in Crop Protection', 'Advanced Diploma in Crop Protection', '200', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Advanced Diploma in Design', 'Advanced Diploma in Design', '203', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Advanced Diploma in Earth Science', 'Advanced Diploma in Earth Science', '170', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Bachelor in Computer Science', 'Bachelor in Computer Science', '120', 4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Bachelor in Conservation Biology', 'Bachelor in Conservation Biology', '100', 4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Bachelor in Crop Protection', 'Bachelor in Crop Protection', '200', 4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Bachelor in Design', 'Bachelor in Design', '203', 4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, 'Bachelor in Earth Science', 'Bachelor in Earth Science', '170', 4, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, 'Diploma in Computer Science', 'Diploma in Computer Science', '120', 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, 'Diploma in Conservation Biology', 'Diploma in Conservation Biology', '100', 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, 'Diploma in Crop Protection', 'Diploma in Crop Protection', '200', 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, 'Diploma in Design', 'Diploma in Design', '203', 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, 'Diploma in Earth Science', 'Diploma in Earth Science', '170', 4, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, 'Doctor of Philosophy in Computer Science', 'Doctor of Philosophy in Computer Science', '120', 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, 'Doctor of Philosophy in Conservation Biology', 'Doctor of Philosophy in Conservation Biology', '100', 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, 'Doctor of Philosophy in Crop Protection', 'Doctor of Philosophy in Crop Protection', '200', 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, 'Doctor of Philosophy in Design', 'Doctor of Philosophy in Design', '203', 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, 'Doctor of Philosophy in Earth Science', 'Doctor of Philosophy in Earth Science', '170', 4, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, 'Master in City Planning', 'Master in City Planning', '120', 5, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(79, 'Master in Commercial Law', 'Master in Commercial Law', '100', 5, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(80, 'Master in Arts and Creative Industry', 'Master in Arts and Creative Industry', '200', 5, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(81, 'Master in Criminology', 'Master in Criminology', '203', 5, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(82, 'Master in English and Linguistics', 'Master in English and Linguistics', '170', 5, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(83, 'Advanced Diploma in City Planning', 'Advanced Diploma in City Planning', '120', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, 'Advanced Diploma in Commercial Law', 'Advanced Diploma in Commercial Law', '100', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, 'Advanced Diploma in Arts and Creative Industry', 'Advanced Diploma in Arts and Creative Industry', '200', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, 'Advanced Diploma in Criminology', 'Advanced Diploma in Criminology', '203', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, 'Advanced Diploma in English and Linguistics', 'Advanced Diploma in English and Linguistics', '170', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, 'Bachelor in City Planning', 'Bachelor in City Planning', '120', 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, 'Bachelor in Commercial Law', 'Bachelor in Commercial Law', '100', 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, 'Bachelor in Arts and Creative Industry', 'Bachelor in Arts and Creative Industry', '200', 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, 'Bachelor in Criminology', 'Bachelor in Criminology', '203', 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, 'Bachelor in English and Linguistics', 'Bachelor in English and Linguistics', '170', 5, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, 'Diploma in City Planning', 'Diploma in City Planning', '120', 5, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'Diploma in Commercial Law', 'Diploma in Commercial Law', '100', 5, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'Diploma in Arts and Creative Industry', 'Diploma in Arts and Creative Industry', '200', 5, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'Diploma in Criminology', 'Diploma in Criminology', '203', 5, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'Diploma in English and Linguistics', 'Diploma in English and Linguistics', '170', 5, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'Doctor of Philosophy in City Planning', 'Doctor of Philosophy in City Planning', '120', 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'Doctor of Philosophy in Commercial Law', 'Doctor of Philosophy in Commercial Law', '100', 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, 'Doctor of Philosophy in Arts and Creative Industry', 'Doctor of Philosophy in Arts and Creative Industry', '200', 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, 'Doctor of Philosophy in Criminology', 'Doctor of Philosophy in Criminology', '203', 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, 'Doctor of Philosophy in English and Linguistics', 'Doctor of Philosophy in English and Linguistics', '170', 5, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, 'Master in Theology', 'Master in Theology', '120', 6, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(104, 'Master in Pastoral Ministry', 'Master in Pastoral Ministry', '100', 6, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(105, 'Master in Christian Ministy', 'Master in Christian Ministy', '200', 6, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(106, 'Master in Bible Studies', 'Master in Bible Studies', '203', 6, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(107, 'Master in Systematic Theology', 'Master in Systematic Theology', '170', 6, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(108, 'Advanced Diploma in Theology', 'Advanced Diploma in Theology', '120', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, 'Advanced Diploma in Pastoral Ministry', 'Advanced Diploma in Pastoral Ministry', '100', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, 'Advanced Diploma in Christian Ministy', 'Advanced Diploma in Christian Ministy', '200', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, 'Advanced Diploma in Bible Studies', 'Advanced Diploma in Bible Studies', '203', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, 'Advanced Diploma in Systematic Theology', 'Advanced Diploma in Systematic Theology', '170', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, 'Bachelor in Theology', 'Bachelor in Theology', '120', 6, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, 'Bachelor in Pastoral Ministry', 'Bachelor in Pastoral Ministry', '100', 6, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, 'Bachelor in Christian Ministy', 'Bachelor in Christian Ministy', '200', 6, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, 'Bachelor in Bible Studies', 'Bachelor in Bible Studies', '203', 6, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, 'Bachelor in Systematic Theology', 'Bachelor in Systematic Theology', '170', 6, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, 'Diploma in Theology', 'Diploma in Theology', '120', 6, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, 'Diploma in Pastoral Ministry', 'Diploma in Pastoral Ministry', '100', 6, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, 'Diploma in Christian Ministy', 'Diploma in Christian Ministy', '200', 6, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, 'Diploma in Bible Studies', 'Diploma in Bible Studies', '203', 6, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, 'Diploma in Systematic Theology', 'Diploma in Systematic Theology', '170', 6, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, 'Doctor of Philosophy in Theology', 'Doctor of Philosophy in Theology', '120', 6, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, 'Doctor of Philosophy in Pastoral Ministry', 'Doctor of Philosophy in Pastoral Ministry', '100', 6, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, 'Doctor of Philosophy in Christian Ministy', 'Doctor of Philosophy in Christian Ministy', '200', 6, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, 'Doctor of Philosophy in Bible Studies', 'Doctor of Philosophy in Bible Studies', '203', 6, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, 'Doctor of Philosophy in Systematic Theology', 'Doctor of Philosophy in Systematic Theology', '170', 6, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, 'Master in Auditing Education', 'Master in Auditing Education', '120', 7, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(130, 'Master in Agronomy Education', 'Master in Agronomy Education', '100', 7, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(131, 'Master in Accounting Science Education', 'Master in Accounting Science Education', '200', 7, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(132, 'Master in Animal Production Education', 'Master in Animal Production Education', '203', 7, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(133, 'Master in Botany Education', 'Master in Botany Education', '170', 7, 6, '2023-10-18 21:00:00', '2023-10-18 21:00:00'),
(134, 'Advanced Diploma in Auditing Education', 'Advanced Diploma in Auditing Education', '120', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, 'Advanced Diploma in Agronomy Education', 'Advanced Diploma in Agronomy Education', '100', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, 'Advanced Diploma in Accounting Science Education', 'Advanced Diploma in Accounting Science Education', '200', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, 'Advanced Diploma in Animal Production Education', 'Advanced Diploma in Animal Production Education', '203', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, 'Advanced Diploma in Botany Education', 'Advanced Diploma in Botany Education', '170', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, 'Bachelor in Auditing Education', 'Bachelor in Auditing Education', '120', 7, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, 'Bachelor in Agronomy Education', 'Bachelor in Agronomy Education', '100', 7, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, 'Bachelor in Accounting Science Education', 'Bachelor in Accounting Science Education', '200', 7, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, 'Bachelor in Animal Production Education', 'Bachelor in Animal Production Education', '203', 7, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, 'Bachelor in Botany Education', 'Bachelor in Botany Education', '170', 7, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, 'Diploma in Auditing Education', 'Diploma in Auditing Education', '120', 7, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, 'Diploma in Agronomy Education', 'Diploma in Agronomy Education', '100', 7, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, 'Diploma in Accounting Science Education', 'Diploma in Accounting Science Education', '200', 7, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, 'Diploma in Animal Production Education', 'Diploma in Animal Production Education', '203', 7, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, 'Diploma in Botany Education', 'Diploma in Botany Education', '170', 7, 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, 'Doctor of Philosophy in Auditing Education', 'Doctor of Philosophy in Auditing Education', '120', 7, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, 'Doctor of Philosophy in Agronomy Education', 'Doctor of Philosophy in Agronomy Education', '100', 7, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, 'Doctor of Philosophy in Accounting Science Education', 'Doctor of Philosophy in Accounting Science Education', '200', 7, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, 'Doctor of Philosophy in Animal Production Education', 'Doctor of Philosophy in Animal Production Education', '203', 7, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, 'Doctor of Philosophy in Botany Education', 'Doctor of Philosophy in Botany Education', '170', 7, 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, 'Advanced in Computer  Networking', 'Advanced in Computer  Networking', '100', 4, 1, '2023-10-19 06:43:15', '2023-10-19 06:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`id`, `student_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 4, 58, '2023-10-21 03:48:54', '2023-10-21 03:48:54'),
(2, 4, 12, '2023-10-21 05:43:01', '2023-10-21 05:43:01'),
(3, 4, 28, '2023-10-21 05:56:24', '2023-10-21 05:56:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_16_065756_create_students_table', 1),
(6, '2023_10_16_130755_create_schools_table', 2),
(7, '2023_10_16_130805_create_programs_table', 2),
(8, '2023_10_17_070859_create_courses_table', 3),
(9, '2023_10_21_062901_create_enrolls_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Advenced Diploma', 'Advenced Diploma', '2023-10-16 17:48:21', '2023-10-16 17:48:30'),
(3, 'Bachelor Degree', 'Bachelor Degree', '2023-10-19 02:36:01', '2023-10-19 02:36:01'),
(4, 'Diploma', 'Diploma', '2023-10-19 02:36:19', '2023-10-19 02:36:19'),
(5, 'Doctor of Philosophy (PhD)', 'Doctor of Philosophy (PhD)', '2023-10-19 02:36:57', '2023-10-19 02:36:57'),
(6, 'Master Degree', 'Master Degree', '2023-10-19 02:37:15', '2023-10-19 02:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `imageName` varchar(255) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `title`, `imageName`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Health Science', '1697707455.png', 'Health Science is a multidisciplinary field that encompasses the study and application of knowledge in various aspects of health and healthcare.', '2023-10-16 16:44:44', '2023-10-19 06:24:15'),
(2, 'Business and Economic', '1697707390.png', 'Business economics is a field of applied economics that studies the financial, organizational, market-related, and environmental issues faced by corporations.', '2023-10-16 16:45:13', '2023-10-19 06:23:10'),
(4, 'Science and Technology', 'course.png', 'Science encompasses the systematic study of the structure and behaviour of the physical and natural world through observation and experiment, and technology is the application of scientific knowledge for practical purposes.', '2023-10-19 02:28:59', '2023-10-19 02:28:59'),
(5, 'Social Science', '1697707587.png', 'Social science is the study of people: as individuals, communities and societies; their behaviours and interactions with each other and with their built, technological and natural environments.', '2023-10-19 02:30:06', '2023-10-19 06:26:27'),
(6, 'Bible Studies', '1697707190.png', 'Biblical studies \"is primarily concerned with the foundational, base-level \'meaning\' of passages or sections of the biblical texts (known as \'exegesis\') and the developments and circumstances regarding Judaism and early Christianity.\"', '2023-10-19 02:31:10', '2023-10-19 06:19:50'),
(7, 'Education', '1697707547.jpg', 'The mean is the arithmetic average score, or the number you get when you add up all the individual scores, then divide by the number of students.', '2023-10-19 02:33:20', '2023-10-19 06:25:47');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL DEFAULT 'default.jpeg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `phone`, `dob`, `gender`, `password`, `imageName`, `created_at`, `updated_at`) VALUES
(1, 'NDIKUMANA', 'Eric', 'ndikumana@gmail.com', '+250786655443', '2023-10-16 07:11:39', 'male', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'default.jpeg', '2023-10-16 04:11:39', '2023-10-16 04:11:39'),
(2, 'Divine', 'UWIMBABAZI', 'divineuwimbabazi@gmail.com', '0788754332', '2009-01-05', 'female', '$2y$10$LucjDJ4RhW88n0poCPckZOeUTGqbMBpj67WntZMcFz63lnL4BMg5G', 'default.jpeg', '2023-10-18 13:11:30', '2023-10-18 13:11:30'),
(4, 'BYAMUNGU', 'Lewis', 'byamungulewis@gmail.com', '+250785436135', '2001-02-06', 'male', '$2y$10$CbT4OjpmNEZzWs5yHu8lCO8kR7na5TXk/DqHKkOAwLT3QAuFkCx3u', 'default.jpeg', '2023-10-21 02:13:16', '2023-10-21 02:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL DEFAULT 'default.png',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `role` enum('admin','instructor') NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `imageName`, `status`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'NDIKUMANA Eric', '+250785436135', 'ndikumana@gmail.com', 'default.png', 'active', 'admin', '2023-10-16 04:11:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LeVnAGXd27fbiw1ichrzAygthgCBPm8UGCPCrxCeGrAczqZWuTdxWX3ooLZh', '2023-10-16 04:11:39', '2023-10-16 04:11:39'),
(2, 'BYAMUNGU Lewis', '+250788754332', 'byamungulewis@gmail.com', '1697812535.jpg', 'inactive', 'admin', NULL, '$2y$10$8wxSSjnzMFcX9jerj4QnkO8GEeNE4HWKG78N7UVxMp8WpwcaDAzhS', NULL, '2023-10-20 11:35:35', '2023-10-20 11:48:10'),
(4, 'Divine UWIMBABAZI', '+25078875438', 'divineuwimbabazi@gmail.com', '1697815453.jpg', 'active', 'instructor', NULL, '$2y$10$uragZr22cqCBm6Hmb4upeeRXCvhnTJnXHqtGUAH24AfN2VwtOR846', NULL, '2023-10-20 12:24:13', '2023-10-20 12:24:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_title_unique` (`title`),
  ADD KEY `courses_school_id_foreign` (`school_id`),
  ADD KEY `courses_program_id_foreign` (`program_id`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrolls_student_id_foreign` (`student_id`),
  ADD KEY `enrolls_course_id_foreign` (`course_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programs_title_unique` (`title`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schools_title_unique` (`title`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_phone_unique` (`phone`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `enrolls`
--
ALTER TABLE `enrolls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `courses_school_id_foreign` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD CONSTRAINT `enrolls_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `enrolls_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
