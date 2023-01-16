-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 09:04 AM
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
  `bmi` varchar(11) NOT NULL,
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
(83, 'Lacy', 170, 56, '19', 'Healthy Weight', '1', 'Fallon', '2023-01-16 03:34:11', '2023-01-16 03:34:11'),
(84, 'Price', 175, 58, '19', 'Healthy Weight', '2', 'Finn', '2023-01-16 03:37:36', '2023-01-16 03:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `program_id` int(50) NOT NULL,
  `bmi` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `student_id`, `program_id`, `bmi`, `date_created`, `date_time_updated`) VALUES
(4, 'Lacy', 0, 19, '2023-01-16', '2023-01-16 03:34:11'),
(5, 'Price', 0, 19, '2023-01-16', '2023-01-16 03:37:36');

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
(1450, 'Lacy', '2023-01-16', 'Milk, Cheese, Lemon, Bread, Pumpkin Seeds', 'Jogging ', '1', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1451, 'Lacy', '2023-01-16', 'Cereals, Beef, Bell Peppers, Sweet Potato, Eggs', 'Bear Crawl\r\n', '2', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1452, 'Lacy', '2023-01-16', 'Corn, Crab, Bell Peppers, Pasta, Chicken', 'Stretching', '3', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1453, 'Lacy', '2023-01-16', 'Biscuits, Beef, Peanuts, Pasta, Crab', 'Jumping\r\n', '4', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1454, 'Lacy', '2023-01-16', 'Biscuits, Cheese, Mangos, Honey, Cheese', 'Jumping\r\n', '5', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1455, 'Lacy', '2023-01-16', 'Honey, Chicken, Apples, Potato, Crab', 'Catching Balls \r\n', '6', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1456, 'Lacy', '2023-01-16', 'Milk, Fish, Corn, Oats, Eggs', 'Push-up \r\n', '7', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1457, 'Lacy', '2023-01-16', 'Wheats, Chicken, Potato, Corn, Crab', 'Squats And Lunges\r\n', '8', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1458, 'Lacy', '2023-01-16', 'Biscuits, Rice, Bell Peppers, Sweet Potato, Crab', 'Sit-ups\r\n', '9', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1459, 'Lacy', '2023-01-16', 'Oats, Chicken, Chicken, Eggs, Chicken', 'Squats And Lunges\r\n', '10', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1460, 'Lacy', '2023-01-16', 'Corn, Rice, Coconut Juice, Wheats, Pumpkin Seeds', 'Jumping\r\n', '11', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1461, 'Lacy', '2023-01-16', 'Biscuits, Cheese, Carrots, Pasta, Crab', 'Push-up \r\n', '12', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1462, 'Lacy', '2023-01-16', 'Corn, Fish, Bananas, Cereals, Beef', 'Catching Balls \r\n', '13', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1463, 'Lacy', '2023-01-16', 'Nuts, Eggs, Watermelon, Honey, Beef', 'Squats And Lunges\r\n', '14', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1464, 'Lacy', '2023-01-16', 'Wheats, Fish, Avocados, Milk, Fish', 'Push-up \r\n', '15', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1465, 'Lacy', '2023-01-16', 'Biscuits, Cheese, Cauliflower, Cereals, Beef', 'Jumping\r\n', '16', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1466, 'Lacy', '2023-01-16', 'Nuts, Crab, Peanuts, Nuts, Eggs', 'Stretching', '17', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1467, 'Lacy', '2023-01-16', 'Noodles, Crab, Monggo, Potato, Beef', 'Catching Balls \r\n', '18', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1468, 'Lacy', '2023-01-16', 'Nuts, Eggs, Corn, Bread, Beef', 'Stretching', '19', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1469, 'Lacy', '2023-01-16', 'Cereals, Pumpkin Seeds, Spinach, Milk, Crab', 'Stretching', '20', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1470, 'Lacy', '2023-01-16', 'Sweet Potato, Cheese, Bell Peppers, Pasta, Crab', 'Squats And Lunges\r\n', '21', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1471, 'Lacy', '2023-01-16', 'Bread, Chicken, Watermelon, Corn, Eggs', 'Squats And Lunges\r\n', '22', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1472, 'Lacy', '2023-01-16', 'Corn, Crab, Eggs, Pasta, Fish', 'Sit-ups\r\n', '23', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1473, 'Lacy', '2023-01-16', 'Bread, Rice, Seaweed, Biscuits, Rice', 'Push-up \r\n', '24', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1474, 'Lacy', '2023-01-16', 'Oats, Crab, Avocados, Pasta, Beef', 'Jogging ', '25', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1475, 'Lacy', '2023-01-16', 'Milk, Beef, Monggo, Noodles, Fish', 'Sit-ups\r\n', '26', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1476, 'Lacy', '2023-01-16', 'Sweet Potato, Rice, Mangos, Cereals, Pumpkin Seeds', 'Stretching', '27', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1477, 'Lacy', '2023-01-16', 'Oats, Fish, Pineapple, Sweet Potato, Chicken', 'Jumping\r\n', '28', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1478, 'Lacy', '2023-01-16', 'Noodles, Eggs, Malunggay, Bread, Fish', 'Bear Crawl\r\n', '29', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1479, 'Lacy', '2023-01-16', 'Cheese, Beef, Curry Chicken, Grains, Crab', 'Push-up \r\n', '30', 0, 0, '2023-02-15', '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(1480, 'Price', '2023-01-16', 'Wheats, Pumpkin Seeds, Lemon, Wheats, Crab', 'Jumping\r\n', '1', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1481, 'Price', '2023-01-16', 'Bread, Beef, Ham & Cheese, Honey, Fish', 'Jumping\r\n', '2', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1482, 'Price', '2023-01-16', 'Eggs, Pumpkin Seeds, Potato, Cheese, Crab', 'Squats And Lunges\r\n', '3', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1483, 'Price', '2023-01-16', 'Corn, Crab, Seaweed, Nuts, Pumpkin Seeds', 'Squats And Lunges\r\n', '4', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1484, 'Price', '2023-01-16', 'Cheese, Rice, Avocados, Potato, Pumpkin Seeds', 'Stretching', '5', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1485, 'Price', '2023-01-16', 'Oats, Crab, Bananas, Oats, Beef', 'Push-up \r\n', '6', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1486, 'Price', '2023-01-16', 'Eggs, Crab, Spinach, Cheese, Fish', 'Bear Crawl\r\n', '7', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1487, 'Price', '2023-01-16', 'Sweet Potato, Beef, Carrots, Cereals, Chicken', 'Jogging ', '8', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1488, 'Price', '2023-01-16', 'Pasta, Cheese, Parsley, Oats, Pumpkin Seeds', 'Catching Balls \r\n', '9', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1489, 'Price', '2023-01-16', 'Grains, Eggs, Coconut Juice, Biscuits, Beef', 'Jumping\r\n', '10', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1490, 'Price', '2023-01-16', 'Nuts, Chicken, Potato, Nuts, Cheese', 'Jogging ', '11', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1491, 'Price', '2023-01-16', 'Cereals, Cheese, Potato, Grains, Eggs', 'Jumping\r\n', '12', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1492, 'Price', '2023-01-16', 'Bread, Fish, Stir Fried Tofu, Corn, Beef', 'Sit-ups\r\n', '13', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1493, 'Price', '2023-01-16', 'Grains, Rice, Curry Chicken, Honey, Pumpkin Seeds', 'Jumping\r\n', '14', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1494, 'Price', '2023-01-16', 'Wheats, Eggs, Avocados, Wheats, Chicken', 'Jumping\r\n', '15', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1495, 'Price', '2023-01-16', 'Sweet Potato, Beef, Lemon, Bread, Fish', 'Catching Balls \r\n', '16', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1496, 'Price', '2023-01-16', 'Milk, Fish, Malunggay, Bread, Cheese', 'Catching Balls \r\n', '17', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1497, 'Price', '2023-01-16', 'Pasta, Cheese, Carrots, Noodles, Beef', 'Stretching', '18', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1498, 'Price', '2023-01-16', 'Noodles, Beef, Meat, Wheats, Rice', 'Stretching', '19', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1499, 'Price', '2023-01-16', 'Cheese, Pumpkin Seeds, Parsley, Sweet Potato, Eggs', 'Stretching', '20', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1500, 'Price', '2023-01-16', 'Honey, Rice, Cauliflower, Milk, Beef', 'Jogging ', '21', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1501, 'Price', '2023-01-16', 'Noodles, Rice, Watermelon, Cereals, Beef', 'Bear Crawl\r\n', '22', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1502, 'Price', '2023-01-16', 'Potato, Eggs, Mangos, Sweet Potato, Eggs', 'Catching Balls \r\n', '23', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1503, 'Price', '2023-01-16', 'Cheese, Rice, Pineapple, Grains, Chicken', 'Jumping\r\n', '24', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1504, 'Price', '2023-01-16', 'Pasta, Rice, Malunggay, Cheese, Beef', 'Jogging ', '25', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1505, 'Price', '2023-01-16', 'Biscuits, Fish, Cauliflower, Cereals, Cheese', 'Bear Crawl\r\n', '26', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1506, 'Price', '2023-01-16', 'Bread, Fish, Monggo, Pasta, Fish', 'Jumping\r\n', '27', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1507, 'Price', '2023-01-16', 'Cheese, Cheese, Apples, Milk, Fish', 'Jumping\r\n', '28', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1508, 'Price', '2023-01-16', 'Noodles, Fish, Saluyot, Biscuits, Eggs', 'Sit-ups\r\n', '29', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(1509, 'Price', '2023-01-16', 'Bread, Chicken, Mangos, Cereals, Crab', 'Sit-ups\r\n', '30', 0, 0, '2023-02-15', '2023-01-16 03:37:43', '2023-01-16 03:37:43');

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
(3, 2, 'Lacy', 0, 'What was your favorite food as a child?', '123', 'What was your first car?', 'haha', '2023-01-16 03:34:27', '2023-01-16 03:34:27'),
(4, 2, 'Price', 0, 'What was your first car?', '123', 'Who is your first crush?', 'haha', '2023-01-16 03:37:46', '2023-01-16 03:37:46');

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
  `age` varchar(50) NOT NULL,
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
  `four_ps` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `age`, `gender`, `room`, `house`, `street`, `subdivision`, `barangay`, `city`, `zip`, `image`, `grade`, `section`, `four_ps`, `date_created`, `date_time_created`, `date_time_updated`) VALUES
(88, 'Lacy', 'Brandon', 'Zorita', 'Hayfa', '2009-10-14', '13', 'Female', 'DORIAN', 'BEVERLY', 'TASHA', 'KYLIE', 'BAKER', 'PALMER', '78707', 0x70726f6a656374206d616e616765722e504e47, 'Grade 2', 'Kay', 0, '2023-01-16', '2023-01-16 03:34:11', '2023-01-16 03:34:11'),
(89, 'Price', 'Cruz', 'Andrew', 'Denton', '2017-04-04', '5', 'Female', 'CARTER', 'ALADDIN', 'LEIGH', 'UMA', 'SILAS', 'SANDRA', '90550', 0x3332333632333736325f3534303737383131313331323439375f353131363739303730373431363239353634345f6e2e6a7067, 'Grade 5', 'Clarke', 0, '2023-01-16', '2023-01-16 03:37:36', '2023-01-16 03:37:36');

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
(340, 'Lacy', 0, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(341, 'Lacy', 1, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(342, 'Lacy', 2, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(343, 'Lacy', 3, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(344, 'Lacy', 4, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(345, 'Lacy', 5, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(346, 'Lacy', 6, 1, '2023-01-16 03:34:23', '2023-01-16 03:34:23'),
(347, 'Price', 0, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(348, 'Price', 1, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(349, 'Price', 2, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(350, 'Price', 3, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(351, 'Price', 4, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(352, 'Price', 5, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43'),
(353, 'Price', 6, 1, '2023-01-16 03:37:43', '2023-01-16 03:37:43');

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
(80, '202296179', 'zyxilen@mailinator.com', 'Welcome@12345', 'Shea', 'Jackson', 'Caleb', '+639156915704', 'DORIAN', 'BEVERLY', 'TASHA', 'KYLIE', 'BAKER', 'PALMER', '78707', 'Male', 2, 0x7265706f72745f73797374656d2e6a7067, 'Lacy', '2023-01-16 03:34:11', '2023-01-16 03:34:11'),
(81, '202231819', 'mumigowavy@mailinator.com', 'Welcome@12345', 'Graham', 'Drew', 'George', '', 'CARTER', 'ALADDIN', 'LEIGH', 'UMA', 'SILAS', 'SANDRA', '90550', 'Female', 2, 0x646576656c6f7065722e504e47, 'Price', '2023-01-16 03:37:36', '2023-01-16 03:37:36');

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
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1510;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

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
