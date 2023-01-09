-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 03:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pfnmps`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `exercises` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `exercises`) VALUES
(1, 'Jogging '),
(2, 'push-up \r\n'),
(3, 'jumping\r\n'),
(4, 'catching balls \r\n'),
(5, 'bear crawl\r\n'),
(6, 'squats and lunges\r\n'),
(7, 'sit-ups\r\n'),
(8, 'stretching');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `image` blob NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_id`, `email`, `password`, `first_name`, `middle_name`, `last_name`, `gender`, `address`, `user_type`, `image`, `date_time_created`, `date_time_updated`) VALUES
(12, '202234766', 'lepi@mailinator.com', 'tite123', 'Susan', 'Francesca', 'Amir', 1, 'Garrison', 1, 0x3331313939333537315f313430353337393030333332393831365f313734363037373334383932363234373035305f6e2e706e67, '2023-01-03 08:26:07', '2023-01-03 08:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `id` int(11) NOT NULL,
  `food_type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`id`, `food_type_id`, `name`) VALUES
(1, 3, 'watermelon'),
(2, 3, 'apples'),
(3, 3, 'mangos'),
(4, 3, 'Monggo'),
(5, 3, 'Meat'),
(6, 3, 'bananas'),
(7, 3, 'oranges'),
(8, 3, 'Potato'),
(9, 3, 'Stir fried tofu'),
(10, 3, 'Curry chicken'),
(11, 3, 'Eggs'),
(12, 3, 'Ham & Cheese'),
(13, 3, 'Chocolate'),
(14, 3, 'avocados'),
(15, 3, 'Coconut Juice'),
(16, 3, 'lemon'),
(17, 3, 'Chicken'),
(18, 3, 'Carrots'),
(19, 3, 'Peanuts'),
(20, 3, 'pineapple'),
(21, 3, 'malunggay'),
(22, 3, 'saluyot'),
(23, 3, 'Corn'),
(24, 3, 'Spinach'),
(25, 3, 'Broccoli'),
(26, 3, 'Seaweed'),
(27, 3, 'Bell peppers'),
(28, 3, 'Carrots'),
(29, 3, 'Parsley'),
(30, 3, 'Cauliflower'),
(61, 1, 'cereals'),
(62, 1, 'eggs'),
(63, 1, 'bread'),
(64, 1, 'milk'),
(65, 1, 'pasta'),
(66, 1, 'grains'),
(67, 1, 'sweet potato'),
(68, 1, 'potato'),
(69, 1, 'honey'),
(70, 1, 'nuts'),
(71, 1, 'noodles'),
(72, 1, 'corn'),
(73, 1, 'wheats'),
(74, 1, 'cheese'),
(75, 1, 'biscuits'),
(76, 1, 'oats'),
(77, 2, 'Pumpkin Seeds'),
(78, 2, 'Fish'),
(79, 2, 'beef'),
(80, 2, 'rice'),
(81, 2, 'chicken'),
(82, 2, 'cheese'),
(83, 2, 'eggs'),
(84, 2, 'crab');

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`id`, `name`) VALUES
(1, 'go'),
(2, 'grow'),
(3, 'glow');

-- --------------------------------------------------------

--
-- Table structure for table `health_infos`
--

CREATE TABLE `health_infos` (
  `id` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `active_level` varchar(50) NOT NULL,
  `health_history` varchar(255) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `health_infos`
--

INSERT INTO `health_infos` (`id`, `student_id`, `height`, `weight`, `bmi`, `status`, `active_level`, `health_history`, `date_time_created`, `date_time_updated`) VALUES
(67, 'Maisie', 0, 0, 20, 'Under Weight', '4', 'Gannon', '2023-01-09 07:01:58', '0000-00-00 00:00:00'),
(68, 'Karen', 3, 56, 18, 'Under Weight', '1', 'Charlotte', '2023-01-09 07:23:50', '0000-00-00 00:00:00'),
(69, 'tite', 158, 56, 22, 'Healthy Weight', '2', 'Judith', '2023-01-09 10:12:30', '0000-00-00 00:00:00'),
(70, 'tite123', 175, 56, 18, 'Under Weight', '2', 'Merrill', '2023-01-09 10:15:14', '0000-00-00 00:00:00'),
(71, 'Hasad', 175, 58, 19, 'Healthy Weight', '3', 'Naida', '2023-01-09 10:17:04', '0000-00-00 00:00:00'),
(72, 'Claire', 157, 56, 23, 'Healthy Weight', '1', 'Hu', '2023-01-09 10:17:58', '0000-00-00 00:00:00'),
(73, 'Joseph', 175, 56, 18, 'Under Weight', '1', 'Leonard', '2023-01-09 10:20:43', '0000-00-00 00:00:00'),
(74, 'Castor', 175, 56, 18, 'Under Weight', '2', 'Joel', '2023-01-09 10:22:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `program_records`
--

CREATE TABLE `program_records` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `date_started` date NOT NULL,
  `foods` varchar(255) NOT NULL,
  `exercises` varchar(255) NOT NULL,
  `day` varchar(50) NOT NULL,
  `food_acknowledge` int(11) NOT NULL,
  `exercise_acknowledge` int(11) NOT NULL,
  `ended_day` date NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_records`
--

INSERT INTO `program_records` (`id`, `student_id`, `date_started`, `foods`, `exercises`, `day`, `food_acknowledge`, `exercise_acknowledge`, `ended_day`, `date_time_created`, `date_time_updated`) VALUES
(1051, 'Maisie', '2023-01-09', 'Wheats, Crab, Stir Fried Tofu, Sweet Potato, Beef', 'Squats And Lunges\r\n', '1', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1052, 'Maisie', '2023-01-09', 'Biscuits, Pumpkin Seeds, Chicken, Noodles, Chicken', 'Push-up \r\n', '2', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1053, 'Maisie', '2023-01-09', 'Wheats, Cheese, Avocados, Honey, Pumpkin Seeds', 'Catching Balls \r\n', '3', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1054, 'Maisie', '2023-01-09', 'Eggs, Rice, Curry Chicken, Cheese, Cheese', 'Stretching', '4', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1055, 'Maisie', '2023-01-09', 'Oats, Beef, Bell Peppers, Biscuits, Eggs', 'Jumping\r\n', '5', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1056, 'Maisie', '2023-01-09', 'Grains, Cheese, Ham & Cheese, Cheese, Fish', 'Jogging ', '6', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1057, 'Maisie', '2023-01-09', 'Grains, Pumpkin Seeds, Parsley, Corn, Rice', 'Squats And Lunges\r\n', '7', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1058, 'Maisie', '2023-01-09', 'Honey, Rice, Stir Fried Tofu, Cheese, Chicken', 'Catching Balls \r\n', '8', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1059, 'Maisie', '2023-01-09', 'Sweet Potato, Eggs, Avocados, Grains, Rice', 'Bear Crawl\r\n', '9', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1060, 'Maisie', '2023-01-09', 'Pasta, Pumpkin Seeds, Peanuts, Potato, Eggs', 'Squats And Lunges\r\n', '10', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1061, 'Maisie', '2023-01-09', 'Bread, Cheese, Saluyot, Cheese, Pumpkin Seeds', 'Squats And Lunges\r\n', '11', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1062, 'Maisie', '2023-01-09', 'Oats, Chicken, Apples, Corn, Eggs', 'Push-up \r\n', '12', 0, 1, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1063, 'Maisie', '2023-01-09', 'Milk, Cheese, Seaweed, Sweet Potato, Cheese', 'Push-up \r\n', '13', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1064, 'Maisie', '2023-01-09', 'Noodles, Eggs, Bananas, Noodles, Beef', 'Bear Crawl\r\n', '14', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1065, 'Maisie', '2023-01-09', 'Biscuits, Crab, Parsley, Wheats, Beef', 'Jogging ', '15', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1066, 'Maisie', '2023-01-09', 'Eggs, Cheese, Potato, Eggs, Eggs', 'Jumping\r\n', '16', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1067, 'Maisie', '2023-01-09', 'Corn, Crab, Coconut Juice, Cereals, Rice', 'Sit-ups\r\n', '17', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1068, 'Maisie', '2023-01-09', 'Sweet Potato, Chicken, Potato, Pasta, Pumpkin Seeds', 'Stretching', '18', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1069, 'Maisie', '2023-01-09', 'Honey, Crab, Seaweed, Wheats, Fish', 'Push-up \r\n', '19', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1070, 'Maisie', '2023-01-09', 'Cheese, Rice, Bananas, Cheese, Crab', 'Jogging ', '20', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1071, 'Maisie', '2023-01-09', 'Oats, Cheese, Lemon, Milk, Cheese', 'Jumping\r\n', '21', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1072, 'Maisie', '2023-01-09', 'Cereals, Crab, Saluyot, Nuts, Rice', 'Jogging ', '22', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1073, 'Maisie', '2023-01-09', 'Corn, Eggs, Corn, Noodles, Cheese', 'Jogging ', '23', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1074, 'Maisie', '2023-01-09', 'Potato, Cheese, Corn, Eggs, Eggs', 'Jogging ', '24', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1075, 'Maisie', '2023-01-09', 'Sweet Potato, Crab, Carrots, Sweet Potato, Beef', 'Sit-ups\r\n', '25', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1076, 'Maisie', '2023-01-09', 'Biscuits, Rice, Watermelon, Pasta, Cheese', 'Jumping\r\n', '26', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1077, 'Maisie', '2023-01-09', 'Cheese, Rice, Cauliflower, Potato, Rice', 'Jumping\r\n', '27', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1078, 'Maisie', '2023-01-09', 'Sweet Potato, Cheese, Malunggay, Honey, Cheese', 'Sit-ups\r\n', '28', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1079, 'Maisie', '2023-01-09', 'Wheats, Eggs, Coconut Juice, Cheese, Eggs', 'Squats And Lunges\r\n', '29', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1080, 'Maisie', '2023-01-09', 'Eggs, Eggs, Eggs, Potato, Eggs', 'Sit-ups\r\n', '30', 0, 0, '2023-02-08', '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(1081, 'Karen', '2023-01-09', 'Biscuits, Fish, Lemon, Bread, Beef', 'Catching Balls \r\n', '1', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1082, 'Karen', '2023-01-09', 'Sweet Potato, Eggs, Ham & Cheese, Wheats, Cheese', 'Catching Balls \r\n', '2', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1083, 'Karen', '2023-01-09', 'Sweet Potato, Eggs, Carrots, Eggs, Eggs', 'Squats And Lunges\r\n', '3', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1084, 'Karen', '2023-01-09', 'Pasta, Eggs, Avocados, Pasta, Chicken', 'Sit-ups\r\n', '4', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1085, 'Karen', '2023-01-09', 'Honey, Eggs, Broccoli, Noodles, Rice', 'Sit-ups\r\n', '5', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1086, 'Karen', '2023-01-09', 'Oats, Chicken, Coconut Juice, Cereals, Beef', 'Bear Crawl\r\n', '6', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1087, 'Karen', '2023-01-09', 'Potato, Eggs, Cauliflower, Nuts, Fish', 'Catching Balls \r\n', '7', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1088, 'Karen', '2023-01-09', 'Cheese, Fish, Mangos, Eggs, Crab', 'Jumping\r\n', '8', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1089, 'Karen', '2023-01-09', 'Sweet Potato, Chicken, Coconut Juice, Eggs, Pumpkin Seeds', 'Bear Crawl\r\n', '9', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1090, 'Karen', '2023-01-09', 'Sweet Potato, Pumpkin Seeds, Curry Chicken, Grains, Eggs', 'Squats And Lunges\r\n', '10', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1091, 'Karen', '2023-01-09', 'Grains, Beef, Bananas, Cereals, Chicken', 'Jumping\r\n', '11', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1092, 'Karen', '2023-01-09', 'Grains, Cheese, Cauliflower, Pasta, Crab', 'Push-up \r\n', '12', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1093, 'Karen', '2023-01-09', 'Oats, Beef, Carrots, Pasta, Cheese', 'Sit-ups\r\n', '13', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1094, 'Karen', '2023-01-09', 'Grains, Pumpkin Seeds, Ham & Cheese, Cheese, Rice', 'Push-up \r\n', '14', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1095, 'Karen', '2023-01-09', 'Potato, Eggs, Corn, Noodles, Chicken', 'Sit-ups\r\n', '15', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1096, 'Karen', '2023-01-09', 'Nuts, Cheese, Meat, Cereals, Fish', 'Jumping\r\n', '16', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1097, 'Karen', '2023-01-09', 'Nuts, Cheese, Parsley, Bread, Crab', 'Jogging ', '17', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1098, 'Karen', '2023-01-09', 'Biscuits, Rice, Apples, Grains, Rice', 'Push-up \r\n', '18', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1099, 'Karen', '2023-01-09', 'Oats, Crab, Spinach, Eggs, Rice', 'Jumping\r\n', '19', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1100, 'Karen', '2023-01-09', 'Biscuits, Rice, Bananas, Corn, Cheese', 'Push-up \r\n', '20', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1101, 'Karen', '2023-01-09', 'Milk, Cheese, Bananas, Eggs, Beef', 'Squats And Lunges\r\n', '21', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1102, 'Karen', '2023-01-09', 'Pasta, Crab, Avocados, Cheese, Crab', 'Push-up \r\n', '22', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1103, 'Karen', '2023-01-09', 'Biscuits, Pumpkin Seeds, Watermelon, Bread, Fish', 'Catching Balls \r\n', '23', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1104, 'Karen', '2023-01-09', 'Corn, Eggs, Corn, Grains, Eggs', 'Stretching', '24', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1105, 'Karen', '2023-01-09', 'Sweet Potato, Eggs, Avocados, Wheats, Rice', 'Push-up \r\n', '25', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1106, 'Karen', '2023-01-09', 'Pasta, Beef, Broccoli, Biscuits, Rice', 'Bear Crawl\r\n', '26', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1107, 'Karen', '2023-01-09', 'Pasta, Beef, Bell Peppers, Nuts, Crab', 'Push-up \r\n', '27', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1108, 'Karen', '2023-01-09', 'Cereals, Crab, Chocolate, Pasta, Pumpkin Seeds', 'Sit-ups\r\n', '28', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1109, 'Karen', '2023-01-09', 'Eggs, Pumpkin Seeds, Peanuts, Cheese, Beef', 'Jumping\r\n', '29', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1110, 'Karen', '2023-01-09', 'Milk, Cheese, Seaweed, Bread, Fish', 'Stretching', '30', 0, 0, '2023-02-08', '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(1120, 'Hasad', '2023-01-09', 'Biscuits, Crab, Cauliflower, Nuts, Cheese', 'Stretching', '1', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1121, 'Hasad', '2023-01-09', 'Oats, Chicken, Pineapple, Honey, Cheese', 'Catching Balls \r\n', '2', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1122, 'Hasad', '2023-01-09', 'Pasta, Rice, Cauliflower, Potato, Rice', 'Sit-ups\r\n', '3', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1123, 'Hasad', '2023-01-09', 'Milk, Eggs, Curry Chicken, Sweet Potato, Cheese', 'Bear Crawl\r\n', '4', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1124, 'Hasad', '2023-01-09', 'Grains, Rice, Pineapple, Oats, Pumpkin Seeds', 'Jogging ', '5', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1125, 'Hasad', '2023-01-09', 'Cereals, Pumpkin Seeds, Curry Chicken, Grains, Cheese', 'Jumping\r\n', '6', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1126, 'Hasad', '2023-01-09', 'Corn, Fish, Carrots, Bread, Rice', 'Bear Crawl\r\n', '7', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1127, 'Hasad', '2023-01-09', 'Milk, Rice, Corn, Grains, Chicken', 'Jumping\r\n', '8', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1128, 'Hasad', '2023-01-09', 'Sweet Potato, Beef, Bell Peppers, Noodles, Rice', 'Stretching', '9', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1129, 'Hasad', '2023-01-09', 'Cheese, Eggs, Cauliflower, Eggs, Pumpkin Seeds', 'Push-up \r\n', '10', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1130, 'Hasad', '2023-01-09', 'Milk, Rice, Saluyot, Biscuits, Chicken', 'Jumping\r\n', '11', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1131, 'Hasad', '2023-01-09', 'Corn, Crab, Malunggay, Potato, Eggs', 'Squats And Lunges\r\n', '12', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1132, 'Hasad', '2023-01-09', 'Corn, Eggs, Broccoli, Pasta, Cheese', 'Stretching', '13', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1133, 'Hasad', '2023-01-09', 'Pasta, Pumpkin Seeds, Watermelon, Cereals, Rice', 'Push-up \r\n', '14', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1134, 'Hasad', '2023-01-09', 'Wheats, Crab, Parsley, Wheats, Cheese', 'Sit-ups\r\n', '15', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1135, 'Hasad', '2023-01-09', 'Potato, Beef, Apples, Corn, Chicken', 'Sit-ups\r\n', '16', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1136, 'Hasad', '2023-01-09', 'Honey, Cheese, Eggs, Wheats, Rice', 'Jumping\r\n', '17', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1137, 'Hasad', '2023-01-09', 'Biscuits, Beef, Eggs, Sweet Potato, Eggs', 'Stretching', '18', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1138, 'Hasad', '2023-01-09', 'Cheese, Chicken, Chocolate, Corn, Eggs', 'Bear Crawl\r\n', '19', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1139, 'Hasad', '2023-01-09', 'Cereals, Rice, Watermelon, Potato, Cheese', 'Jumping\r\n', '20', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1140, 'Hasad', '2023-01-09', 'Oats, Pumpkin Seeds, Coconut Juice, Oats, Fish', 'Push-up \r\n', '21', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1141, 'Hasad', '2023-01-09', 'Milk, Beef, Potato, Eggs, Crab', 'Jumping\r\n', '22', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1142, 'Hasad', '2023-01-09', 'Potato, Cheese, Ham & Cheese, Wheats, Chicken', 'Squats And Lunges\r\n', '23', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1143, 'Hasad', '2023-01-09', 'Oats, Eggs, Oranges, Corn, Fish', 'Jogging ', '24', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1144, 'Hasad', '2023-01-09', 'Wheats, Chicken, Lemon, Cheese, Chicken', 'Push-up \r\n', '25', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1145, 'Hasad', '2023-01-09', 'Noodles, Eggs, Lemon, Grains, Beef', 'Sit-ups\r\n', '26', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1146, 'Hasad', '2023-01-09', 'Eggs, Cheese, Watermelon, Cheese, Beef', 'Bear Crawl\r\n', '27', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1147, 'Hasad', '2023-01-09', 'Bread, Cheese, Avocados, Noodles, Fish', 'Catching Balls \r\n', '28', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1148, 'Hasad', '2023-01-09', 'Grains, Pumpkin Seeds, Stir Fried Tofu, Biscuits, Chicken', 'Stretching', '29', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1149, 'Hasad', '2023-01-09', 'Honey, Eggs, Ham & Cheese, Nuts, Eggs', 'Push-up \r\n', '30', 0, 0, '2023-02-08', '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(1150, 'Claire', '2023-01-09', 'Sweet Potato, Crab, Spinach, Grains, Rice', 'Stretching', '1', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1151, 'Claire', '2023-01-09', 'Cereals, Pumpkin Seeds, Bell Peppers, Cereals, Pumpkin Seeds', 'Stretching', '2', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1152, 'Claire', '2023-01-09', 'Cheese, Chicken, Chicken, Sweet Potato, Chicken', 'Jumping\r\n', '3', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1153, 'Claire', '2023-01-09', 'Potato, Eggs, Eggs, Sweet Potato, Crab', 'Squats And Lunges\r\n', '4', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1154, 'Claire', '2023-01-09', 'Sweet Potato, Beef, Chocolate, Bread, Pumpkin Seeds', 'Push-up \r\n', '5', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1155, 'Claire', '2023-01-09', 'Sweet Potato, Crab, Oranges, Bread, Chicken', 'Bear Crawl\r\n', '6', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1156, 'Claire', '2023-01-09', 'Wheats, Fish, Monggo, Eggs, Chicken', 'Jogging ', '7', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1157, 'Claire', '2023-01-09', 'Oats, Rice, Peanuts, Pasta, Crab', 'Bear Crawl\r\n', '8', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1158, 'Claire', '2023-01-09', 'Milk, Fish, Malunggay, Milk, Cheese', 'Squats And Lunges\r\n', '9', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1159, 'Claire', '2023-01-09', 'Cheese, Pumpkin Seeds, Chocolate, Grains, Pumpkin Seeds', 'Sit-ups\r\n', '10', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1160, 'Claire', '2023-01-09', 'Noodles, Chicken, Spinach, Oats, Crab', 'Catching Balls \r\n', '11', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1161, 'Claire', '2023-01-09', 'Nuts, Fish, Potato, Grains, Pumpkin Seeds', 'Jumping\r\n', '12', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1162, 'Claire', '2023-01-09', 'Nuts, Crab, Apples, Cheese, Pumpkin Seeds', 'Sit-ups\r\n', '13', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1163, 'Claire', '2023-01-09', 'Grains, Cheese, Chocolate, Bread, Rice', 'Catching Balls \r\n', '14', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1164, 'Claire', '2023-01-09', 'Oats, Fish, Corn, Potato, Eggs', 'Stretching', '15', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1165, 'Claire', '2023-01-09', 'Wheats, Cheese, Curry Chicken, Milk, Crab', 'Jogging ', '16', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1166, 'Claire', '2023-01-09', 'Biscuits, Cheese, Corn, Cereals, Fish', 'Jogging ', '17', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1167, 'Claire', '2023-01-09', 'Honey, Rice, Spinach, Biscuits, Pumpkin Seeds', 'Bear Crawl\r\n', '18', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1168, 'Claire', '2023-01-09', 'Honey, Crab, Cauliflower, Cheese, Cheese', 'Jogging ', '19', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1169, 'Claire', '2023-01-09', 'Grains, Eggs, Corn, Noodles, Fish', 'Jogging ', '20', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1170, 'Claire', '2023-01-09', 'Wheats, Chicken, Eggs, Noodles, Cheese', 'Catching Balls \r\n', '21', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1171, 'Claire', '2023-01-09', 'Honey, Eggs, Lemon, Cereals, Pumpkin Seeds', 'Push-up \r\n', '22', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1172, 'Claire', '2023-01-09', 'Grains, Eggs, Meat, Noodles, Crab', 'Jumping\r\n', '23', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1173, 'Claire', '2023-01-09', 'Milk, Rice, Stir Fried Tofu, Potato, Beef', 'Bear Crawl\r\n', '24', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1174, 'Claire', '2023-01-09', 'Biscuits, Chicken, Broccoli, Oats, Beef', 'Bear Crawl\r\n', '25', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1175, 'Claire', '2023-01-09', 'Milk, Fish, Watermelon, Noodles, Rice', 'Bear Crawl\r\n', '26', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1176, 'Claire', '2023-01-09', 'Milk, Chicken, Spinach, Noodles, Rice', 'Push-up \r\n', '27', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1177, 'Claire', '2023-01-09', 'Wheats, Chicken, Avocados, Eggs, Fish', 'Squats And Lunges\r\n', '28', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1178, 'Claire', '2023-01-09', 'Milk, Pumpkin Seeds, Monggo, Grains, Chicken', 'Bear Crawl\r\n', '29', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1179, 'Claire', '2023-01-09', 'Cereals, Fish, Spinach, Oats, Eggs', 'Jogging ', '30', 0, 0, '2023-02-08', '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(1180, 'Joseph', '2023-01-09', 'Oats, Eggs, Potato, Oats, Rice', 'Push-up \r\n', '1', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1181, 'Joseph', '2023-01-09', 'Eggs, Beef, Bell Peppers, Noodles, Fish', 'Jumping\r\n', '2', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1182, 'Joseph', '2023-01-09', 'Oats, Cheese, Watermelon, Grains, Beef', 'Jogging ', '3', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1183, 'Joseph', '2023-01-09', 'Bread, Fish, Pineapple, Cereals, Chicken', 'Push-up \r\n', '4', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1184, 'Joseph', '2023-01-09', 'Wheats, Beef, Bananas, Oats, Rice', 'Catching Balls \r\n', '5', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1185, 'Joseph', '2023-01-09', 'Honey, Crab, Carrots, Biscuits, Beef', 'Push-up \r\n', '6', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1186, 'Joseph', '2023-01-09', 'Noodles, Eggs, Cauliflower, Potato, Fish', 'Stretching', '7', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1187, 'Joseph', '2023-01-09', 'Sweet Potato, Crab, Malunggay, Potato, Cheese', 'Catching Balls \r\n', '8', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1188, 'Joseph', '2023-01-09', 'Nuts, Pumpkin Seeds, Parsley, Cereals, Crab', 'Jumping\r\n', '9', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1189, 'Joseph', '2023-01-09', 'Eggs, Rice, Corn, Nuts, Fish', 'Sit-ups\r\n', '10', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1190, 'Joseph', '2023-01-09', 'Milk, Beef, Peanuts, Sweet Potato, Beef', 'Jogging ', '11', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1191, 'Joseph', '2023-01-09', 'Corn, Beef, Coconut Juice, Corn, Fish', 'Squats And Lunges\r\n', '12', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1192, 'Joseph', '2023-01-09', 'Milk, Eggs, Peanuts, Cheese, Cheese', 'Catching Balls \r\n', '13', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1193, 'Joseph', '2023-01-09', 'Milk, Rice, Potato, Cereals, Pumpkin Seeds', 'Jumping\r\n', '14', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1194, 'Joseph', '2023-01-09', 'Milk, Eggs, Chocolate, Cereals, Beef', 'Catching Balls \r\n', '15', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1195, 'Joseph', '2023-01-09', 'Nuts, Cheese, Bell Peppers, Sweet Potato, Cheese', 'Catching Balls \r\n', '16', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1196, 'Joseph', '2023-01-09', 'Oats, Cheese, Oranges, Oats, Cheese', 'Catching Balls \r\n', '17', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1197, 'Joseph', '2023-01-09', 'Sweet Potato, Beef, Ham & Cheese, Potato, Eggs', 'Catching Balls \r\n', '18', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1198, 'Joseph', '2023-01-09', 'Nuts, Eggs, Watermelon, Honey, Chicken', 'Jumping\r\n', '19', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1199, 'Joseph', '2023-01-09', 'Eggs, Crab, Bell Peppers, Nuts, Eggs', 'Sit-ups\r\n', '20', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1200, 'Joseph', '2023-01-09', 'Milk, Chicken, Chocolate, Nuts, Chicken', 'Sit-ups\r\n', '21', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1201, 'Joseph', '2023-01-09', 'Noodles, Crab, Cauliflower, Corn, Eggs', 'Squats And Lunges\r\n', '22', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1202, 'Joseph', '2023-01-09', 'Honey, Crab, Stir Fried Tofu, Sweet Potato, Cheese', 'Stretching', '23', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1203, 'Joseph', '2023-01-09', 'Grains, Pumpkin Seeds, Watermelon, Noodles, Pumpkin Seeds', 'Catching Balls \r\n', '24', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1204, 'Joseph', '2023-01-09', 'Wheats, Eggs, Curry Chicken, Milk, Cheese', 'Jogging ', '25', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1205, 'Joseph', '2023-01-09', 'Cereals, Chicken, Broccoli, Sweet Potato, Crab', 'Sit-ups\r\n', '26', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1206, 'Joseph', '2023-01-09', 'Cereals, Cheese, Seaweed, Biscuits, Rice', 'Squats And Lunges\r\n', '27', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1207, 'Joseph', '2023-01-09', 'Milk, Pumpkin Seeds, Meat, Oats, Fish', 'Jumping\r\n', '28', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1208, 'Joseph', '2023-01-09', 'Honey, Fish, Chicken, Biscuits, Beef', 'Jogging ', '29', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1209, 'Joseph', '2023-01-09', 'Cheese, Pumpkin Seeds, Chicken, Eggs, Eggs', 'Sit-ups\r\n', '30', 0, 0, '2023-02-08', '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(1210, 'Castor', '2023-01-09', 'Biscuits, Pumpkin Seeds, Avocados, Cereals, Crab', 'Sit-ups\r\n', '1', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1211, 'Castor', '2023-01-09', 'Potato, Cheese, Apples, Cereals, Chicken', 'Sit-ups\r\n', '2', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1212, 'Castor', '2023-01-09', 'Cereals, Eggs, Corn, Corn, Crab', 'Push-up \r\n', '3', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1213, 'Castor', '2023-01-09', 'Sweet Potato, Crab, Saluyot, Honey, Cheese', 'Sit-ups\r\n', '4', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1214, 'Castor', '2023-01-09', 'Milk, Fish, Cauliflower, Cheese, Cheese', 'Squats And Lunges\r\n', '5', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1215, 'Castor', '2023-01-09', 'Eggs, Cheese, Spinach, Nuts, Cheese', 'Push-up \r\n', '6', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1216, 'Castor', '2023-01-09', 'Pasta, Beef, Saluyot, Oats, Beef', 'Push-up \r\n', '7', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1217, 'Castor', '2023-01-09', 'Corn, Crab, Mangos, Nuts, Pumpkin Seeds', 'Push-up \r\n', '8', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1218, 'Castor', '2023-01-09', 'Biscuits, Crab, Cauliflower, Wheats, Beef', 'Squats And Lunges\r\n', '9', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1219, 'Castor', '2023-01-09', 'Honey, Cheese, Chicken, Cheese, Rice', 'Push-up \r\n', '10', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1220, 'Castor', '2023-01-09', 'Cheese, Fish, Monggo, Wheats, Beef', 'Squats And Lunges\r\n', '11', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1221, 'Castor', '2023-01-09', 'Nuts, Eggs, Cauliflower, Sweet Potato, Pumpkin Seeds', 'Jumping\r\n', '12', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1222, 'Castor', '2023-01-09', 'Wheats, Beef, Bananas, Milk, Rice', 'Stretching', '13', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1223, 'Castor', '2023-01-09', 'Bread, Crab, Seaweed, Oats, Eggs', 'Push-up \r\n', '14', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1224, 'Castor', '2023-01-09', 'Grains, Rice, Broccoli, Wheats, Eggs', 'Squats And Lunges\r\n', '15', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1225, 'Castor', '2023-01-09', 'Potato, Beef, Pineapple, Biscuits, Crab', 'Catching Balls \r\n', '16', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1226, 'Castor', '2023-01-09', 'Honey, Crab, Coconut Juice, Milk, Chicken', 'Push-up \r\n', '17', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1227, 'Castor', '2023-01-09', 'Oats, Cheese, Parsley, Grains, Eggs', 'Jumping\r\n', '18', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1228, 'Castor', '2023-01-09', 'Grains, Pumpkin Seeds, Corn, Eggs, Beef', 'Push-up \r\n', '19', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1229, 'Castor', '2023-01-09', 'Honey, Crab, Ham & Cheese, Biscuits, Fish', 'Sit-ups\r\n', '20', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1230, 'Castor', '2023-01-09', 'Honey, Rice, Saluyot, Corn, Fish', 'Bear Crawl\r\n', '21', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1231, 'Castor', '2023-01-09', 'Honey, Crab, Bell Peppers, Pasta, Pumpkin Seeds', 'Jogging ', '22', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1232, 'Castor', '2023-01-09', 'Potato, Chicken, Saluyot, Bread, Fish', 'Jogging ', '23', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1233, 'Castor', '2023-01-09', 'Grains, Rice, Broccoli, Cheese, Pumpkin Seeds', 'Catching Balls \r\n', '24', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1234, 'Castor', '2023-01-09', 'Grains, Crab, Peanuts, Nuts, Pumpkin Seeds', 'Sit-ups\r\n', '25', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1235, 'Castor', '2023-01-09', 'Cheese, Pumpkin Seeds, Monggo, Wheats, Chicken', 'Bear Crawl\r\n', '26', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1236, 'Castor', '2023-01-09', 'Sweet Potato, Chicken, Bell Peppers, Oats, Beef', 'Bear Crawl\r\n', '27', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1237, 'Castor', '2023-01-09', 'Wheats, Cheese, Stir Fried Tofu, Noodles, Beef', 'Catching Balls \r\n', '28', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1238, 'Castor', '2023-01-09', 'Biscuits, Chicken, Malunggay, Grains, Beef', 'Jogging ', '29', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(1239, 'Castor', '2023-01-09', 'Potato, Eggs, Corn, Cereals, Rice', 'Sit-ups\r\n', '30', 0, 0, '2023-02-08', '2023-01-09 10:22:43', '2023-01-09 10:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `user_type` int(11) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_1` varchar(50) NOT NULL,
  `answer_1` varchar(50) NOT NULL,
  `question_2` varchar(50) NOT NULL,
  `answer_2` varchar(50) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_type`, `student_id`, `user_id`, `question_1`, `answer_1`, `question_2`, `answer_2`, `date_time_created`, `date_time_updated`) VALUES
(22, 2, 'Kessie', 0, 'What is the name of your first pet?', '123', 'What was your favorite food as a child?', '1', '2023-01-03 08:18:55', '2023-01-03 08:18:55'),
(23, 2, 'Kay', 0, 'What was your favorite food as a child?', 'haha', 'What is the name of your first pet?', '123', '2023-01-03 08:21:31', '2023-01-03 08:21:31'),
(24, 1, '0', 202280110, 'What was your first car?', '123', 'What elementary school did you attend?', 'haha', '2023-01-03 08:26:17', '2023-01-03 08:26:17'),
(25, 2, 'Kay', 0, 'What was your favorite food as a child?', '123', 'What was your first car?', '1234', '2023-01-03 08:31:38', '2023-01-03 08:31:38'),
(26, 2, 'Kay', 0, 'What was your favorite food as a child?', 'hahahaha', 'What is the name of your first pet?', '123', '2023-01-03 08:35:27', '2023-01-03 08:35:27'),
(27, 2, 'Aspen', 0, 'What was your favorite food as a child?', '123', 'What was your first car?', 'haha', '2023-01-03 08:38:09', '2023-01-03 08:38:09'),
(28, 2, 'Troy', 0, 'What was your favorite food as a child?', '123', 'Who is your first crush?', '1235', '2023-01-07 09:21:19', '2023-01-07 09:21:19'),
(29, 2, 'Laura', 0, 'What was your first car?', 'haha', 'What was your favorite food as a child?', 'hahaha', '2023-01-08 11:52:03', '2023-01-08 11:52:03'),
(30, 2, 'Jessica', 0, 'What was your favorite food as a child?', 'asdas', 'What is the name of your first pet?', 'saf', '2023-01-08 12:02:05', '2023-01-08 12:02:05'),
(31, 2, 'Yen', 0, 'What was your favorite food as a child?', 'haha', 'Who is your first crush?', 'asd', '2023-01-09 06:27:28', '2023-01-09 06:27:28'),
(32, 2, 'Mannix', 0, 'What was your favorite food as a child?', 'haha', 'What was your first car?', '123', '2023-01-09 06:30:15', '2023-01-09 06:30:15'),
(33, 2, 'Reuben', 0, 'What was your favorite food as a child?', 'haha', 'What was your first car?', 'hahaha', '2023-01-09 06:59:01', '2023-01-09 06:59:01'),
(34, 2, 'Maisie', 0, 'What is the name of your first pet?', 'haha', 'What was your favorite food as a child?', '123', '2023-01-09 07:02:08', '2023-01-09 07:02:08'),
(35, 2, 'Karen', 0, 'What was your favorite food as a child?', 'haha', 'What was your first car?', '123', '2023-01-09 07:24:00', '2023-01-09 07:24:00'),
(36, 2, 'Karen', 0, 'What was your favorite food as a child?', 'asdf', 'What is the name of your first pet?', '123', '2023-01-09 10:18:08', '2023-01-09 10:18:08'),
(37, 2, 'Karen', 0, 'What was your favorite food as a child?', 'hahaha', 'Who is your first crush?', '123123', '2023-01-09 10:20:49', '2023-01-09 10:20:49'),
(38, 2, 'Karen', 0, 'What is the name of your first pet?', '123', 'Who is your first crush?', 'asdasd', '2023-01-09 10:22:48', '2023-01-09 10:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `subdivision` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `image` blob NOT NULL,
  `grade` varchar(10) NOT NULL,
  `section` varchar(50) NOT NULL,
  `date_created` date NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `room`, `house`, `street`, `subdivision`, `barangay`, `city`, `zip`, `image`, `grade`, `section`, `date_created`, `date_time_created`, `date_time_updated`) VALUES
(71, 'Maisie', 'Pearl', 'Odette', 'Amber', '2016-12-10', 'Male', 'DAWN', 'KRISTEN', 'EVANGELINE', 'KRISTEN', 'BEATRICE', 'KEEGAN', '14003', 0x6c632e706e67, 'Grade 1', 'Winter', '2023-01-09', '2023-01-09 07:01:58', '2023-01-09 07:16:48'),
(72, 'Karen', 'Ruth', 'Melyssa', 'Xantha', '2015-05-28', 'Male', 'MALACHI', 'TALON', 'MACY', 'CASEY', 'DEANNA', 'JESSAMINE', '92709', 0x3332303435303632315f3530363930343031313533363237395f323230343739333336373033343430333131395f6e2e6a7067, 'Grade 1', 'Vladimir123', '2023-01-09', '2023-01-09 07:23:50', '2023-01-09 07:28:42'),
(73, 'tite', 'Noel', 'Zane', 'Britanney', '1970-10-13', 'Male', 'BIANCA', 'DALTON', 'AIDAN', 'HADASSAH', 'BETHANY', 'EMMA', '61804', 0x3332303432343434345f3535363637323237353936303437335f353237323131363237353838313337323132345f6e2e6a7067, 'Grade 3', 'Harriet', '2023-01-09', '2023-01-09 10:12:30', '2023-01-09 10:12:30'),
(74, 'tite123', 'Akeem', 'Leilani', 'Yoshi', '1995-07-20', 'Male', 'SKYLER', 'GAGE', 'CLINTON', 'NOELLE', 'GENEVIEVE', 'WING', '82924', 0x3237393538333434345f353334323235363034353832353334315f323534373134333037333737393532323532335f6e2e6a7067, 'Grade 4', 'Beck', '2023-01-09', '2023-01-09 10:15:14', '2023-01-09 10:15:14'),
(75, 'Hasad', 'Dale', 'Roary', 'Kelsie', '1992-08-08', 'Female', 'ULLA', 'HIROKO', 'AURELIA', 'FITZGERALD', 'SHEILA', 'KYLA', '68740', 0x3331383836333736325f313534363637373337393132393630365f363039373835383836373832303830343536315f6e2e6a7067, 'Grade 3', 'Jordan', '2023-01-09', '2023-01-09 10:17:04', '2023-01-09 10:17:04'),
(76, 'Claire', 'Channing', 'Bruno', 'Keith', '2000-03-12', 'Female', 'JORDEN', 'VIVIEN', 'PAUL', 'PAKI', 'VALENTINE', 'MARAH', '59912', 0x65705f312e6a7067, 'Grade 2', 'Stephanie', '2023-01-09', '2023-01-09 10:17:58', '2023-01-09 10:17:58'),
(77, 'Joseph', 'Sylvester', 'Nell', 'Josephine', '1975-11-20', 'Female', 'BRITANNEY', 'BARRY', 'GEORGE', 'ZANE', 'BRYNN', 'TIMON', '12936', 0x6c632e706e67, 'Grade 4', 'Palmer', '2023-01-09', '2023-01-09 10:20:43', '2023-01-09 10:20:43'),
(78, 'Castor', 'Macy', 'Azalia', 'Karen', '2018-07-04', 'Female', 'NASH', 'QUINN', 'HAYLEY', 'SHELLY', 'FELICIA', 'CANDICE', '15561', 0x3332303435303632315f3530363930343031313533363237395f323230343739333336373033343430333131395f6e2e6a7067, 'Grade 4', 'Hector', '2023-01-09', '2023-01-09 10:22:39', '2023-01-09 10:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `students_survery_answers`
--

CREATE TABLE `students_survery_answers` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_survery_answers`
--

INSERT INTO `students_survery_answers` (`id`, `student_id`, `question`, `answer`, `date_time_created`, `date_time_updated`) VALUES
(267, 'Maisie', 1, 1, '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(268, 'Maisie', 2, 1, '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(269, 'Maisie', 3, 1, '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(270, 'Maisie', 4, 1, '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(271, 'Maisie', 5, 1, '2023-01-09 07:02:03', '2023-01-09 07:02:03'),
(272, 'Karen', 1, 1, '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(273, 'Karen', 2, 1, '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(274, 'Karen', 3, 0, '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(275, 'Karen', 4, 1, '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(276, 'Karen', 5, 1, '2023-01-09 07:23:56', '2023-01-09 07:23:56'),
(281, 'Hasad', 1, 1, '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(282, 'Hasad', 2, 0, '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(283, 'Hasad', 3, 1, '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(284, 'Hasad', 4, 1, '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(285, 'Hasad', 5, 1, '2023-01-09 10:17:10', '2023-01-09 10:17:10'),
(286, 'Claire', 1, 1, '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(287, 'Claire', 2, 1, '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(288, 'Claire', 3, 1, '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(289, 'Claire', 4, 1, '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(290, 'Claire', 5, 1, '2023-01-09 10:18:04', '2023-01-09 10:18:04'),
(291, 'Joseph', 1, 1, '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(292, 'Joseph', 2, 1, '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(293, 'Joseph', 3, 1, '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(294, 'Joseph', 4, 1, '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(295, 'Joseph', 5, 1, '2023-01-09 10:20:46', '2023-01-09 10:20:46'),
(296, 'Castor', 1, 1, '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(297, 'Castor', 2, 1, '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(298, 'Castor', 3, 1, '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(299, 'Castor', 4, 1, '2023-01-09 10:22:43', '2023-01-09 10:22:43'),
(300, 'Castor', 5, 1, '2023-01-09 10:22:43', '2023-01-09 10:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `house` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `subdivision` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `user_type` int(11) NOT NULL,
  `image` blob NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `email`, `password`, `first_name`, `middle_name`, `last_name`, `contact_number`, `room`, `house`, `street`, `subdivision`, `barangay`, `city`, `zip`, `gender`, `user_type`, `image`, `student_id`, `date_time_created`, `date_time_updated`) VALUES
(63, '202284822', 'noxysesex@mailinator.com', 'Pa$$w0rd!', 'Mariam', 'Tana', 'Blaine', '', 'DAWN', 'KRISTEN', 'EVANGELINE', 'KRISTEN', 'BEATRICE', 'KEEGAN', '14003', 'Male', 2, 0x3331383836333736325f313534363637373337393132393630365f363039373835383836373832303830343536315f6e2e6a7067, 'Maisie', '2023-01-09 07:01:58', '2023-01-09 07:01:58'),
(64, '2022604', 'pinecise@mailinator.com', 'Pa$$w0rd!', 'Brennan', 'Portia', 'Scarlet', '', 'MALACHI12', 'TALON', 'MACY', 'CASEY', 'DEANNA', 'JESSAMINE213', '92709123', 'Male', 2, 0x3332313631313634355f313233363231343735303332353936345f363835303535383736363237383437363632375f6e2e6a7067, 'Karen', '2023-01-09 07:23:50', '2023-01-09 07:23:50'),
(65, '202299427', 'syqyvi@mailinator.com', 'Welcome@12345', 'Solomon', 'Yvonne', 'Beverly', '', 'BIANCA', 'DALTON', 'AIDAN', 'HADASSAH', 'BETHANY', 'EMMA', '61804', 'Male', 2, 0x3331353530323637325f3835363832333938323131363539355f373632343434323135313834333837313634375f6e2e6a7067, 'tite', '2023-01-09 10:12:30', '2023-01-09 10:12:30'),
(66, '202298484', 'vomefugaby@mailinator.com', 'Welcome@12345', 'Madison', 'Rafael', 'Scarlet', '', 'SKYLER', 'GAGE', 'CLINTON', 'NOELLE', 'GENEVIEVE', 'WING', '82924', 'Male', 2, 0x3331353333373236355f3830373739343433373137353832345f3336303932363132323435333838323034395f6e2e6a7067, 'tite123', '2023-01-09 10:15:14', '2023-01-09 10:15:14'),
(67, '202297251', 'bagipeqym@mailinator.com', 'Welcome@12345', 'Sasha', 'Catherine', 'Flavia', '', 'ULLA', 'HIROKO', 'AURELIA', 'FITZGERALD', 'SHEILA', 'KYLA', '68740', 'Male', 2, 0x6161612e504e47, 'Hasad', '2023-01-09 10:17:04', '2023-01-09 10:17:04'),
(68, '202285711', 'mabevasis@mailinator.com', 'Welcome@12345', 'Evangeline', 'Abdul', 'Denton', '', 'JORDEN', 'VIVIEN', 'PAUL', 'PAKI', 'VALENTINE', 'MARAH', '59912', 'Male', 2, 0x74702e504e47, 'Claire', '2023-01-09 10:17:58', '2023-01-09 10:17:58'),
(69, '202239876', 'kesecuw@mailinator.com', 'Welcome@12345', 'Alvin', 'Claudia', 'Nina', '', 'BRITANNEY', 'BARRY', 'GEORGE', 'ZANE', 'BRYNN', 'TIMON', '12936', 'Male', 2, 0x6c632e6a7067, 'Joseph', '2023-01-09 10:20:43', '2023-01-09 10:20:43'),
(70, '202280659', 'pagofelot@mailinator.com', 'Welcome@12345', 'Hyacinth', 'Tana', 'Audrey', '', 'NASH', 'QUINN', 'HAYLEY', 'SHELLY', 'FELICIA', 'CANDICE', '15561', 'Male', 2, 0x6161612e504e47, 'Castor', '2023-01-09 10:22:39', '2023-01-09 10:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'parent'),
(3, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`user_type`),
  ADD KEY `user_type` (`user_type`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_type_id` (`food_type_id`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_infos`
--
ALTER TABLE `health_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `program_records`
--
ALTER TABLE `program_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nutritionist_id` (`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`user_type`,`student_id`),
  ADD KEY `user_type` (`user_type`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `health_infos`
--
ALTER TABLE `health_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1240;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foods`
--
ALTER TABLE `foods`
  ADD CONSTRAINT `foods_ibfk_1` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `health_infos`
--
ALTER TABLE `health_infos`
  ADD CONSTRAINT `health_infos_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `program_records`
--
ALTER TABLE `program_records`
  ADD CONSTRAINT `program_records_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  ADD CONSTRAINT `students_survery_answers_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
