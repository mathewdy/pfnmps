-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2023 at 07:50 AM
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
(81, 'William', 157, 55, 22, 'Healthy Weight', '1', 'Molly', '2023-01-15 06:20:00', '2023-01-15 06:20:00'),
(82, 'Rhoda', 155, 50, 21, 'Healthy Weight', '2', 'Kylie', '2023-01-15 07:06:50', '2023-01-15 07:06:50');

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
(1, 'Cody', 0, 0, '2023-01-15', '2023-01-15 06:10:15'),
(2, 'William', 0, 0, '2023-01-15', '2023-01-15 06:20:00'),
(3, 'Rhoda', 0, 21, '2023-01-15', '2023-01-15 07:06:50');

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
(1390, 'William', '2023-01-15', 'Nuts, Fish, Spinach, Eggs, Beef', 'Bear Crawl\r\n', '1', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1391, 'William', '2023-01-15', 'Milk, Fish, Chocolate, Honey, Chicken', 'Jumping\r\n', '2', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1392, 'William', '2023-01-15', 'Oats, Cheese, Avocados, Milk, Beef', 'Bear Crawl\r\n', '3', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1393, 'William', '2023-01-15', 'Potato, Crab, Ham & Cheese, Grains, Eggs', 'Sit-ups\r\n', '4', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1394, 'William', '2023-01-15', 'Milk, Fish, Lemon, Biscuits, Fish', 'Bear Crawl\r\n', '5', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1395, 'William', '2023-01-15', 'Sweet Potato, Cheese, Oranges, Grains, Cheese', 'Jumping\r\n', '6', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1396, 'William', '2023-01-15', 'Sweet Potato, Cheese, Spinach, Cereals, Beef', 'Jogging ', '7', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1397, 'William', '2023-01-15', 'Milk, Chicken, Bell Peppers, Noodles, Cheese', 'Push-up \r\n', '8', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1398, 'William', '2023-01-15', 'Cheese, Rice, Curry Chicken, Eggs, Beef', 'Catching Balls \r\n', '9', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1399, 'William', '2023-01-15', 'Pasta, Beef, Carrots, Noodles, Fish', 'Push-up \r\n', '10', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1400, 'William', '2023-01-15', 'Pasta, Chicken, Lemon, Corn, Eggs', 'Sit-ups\r\n', '11', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1401, 'William', '2023-01-15', 'Potato, Eggs, Chocolate, Noodles, Fish', 'Bear Crawl\r\n', '12', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1402, 'William', '2023-01-15', 'Milk, Chicken, Ham & Cheese, Bread, Rice', 'Stretching', '13', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1403, 'William', '2023-01-15', 'Wheats, Pumpkin Seeds, Pineapple, Milk, Beef', 'Stretching', '14', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1404, 'William', '2023-01-15', 'Cereals, Eggs, Chocolate, Pasta, Cheese', 'Catching Balls \r\n', '15', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1405, 'William', '2023-01-15', 'Corn, Beef, Bell Peppers, Wheats, Chicken', 'Squats And Lunges\r\n', '16', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1406, 'William', '2023-01-15', 'Nuts, Fish, Ham & Cheese, Honey, Rice', 'Stretching', '17', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1407, 'William', '2023-01-15', 'Pasta, Crab, Pineapple, Eggs, Fish', 'Stretching', '18', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1408, 'William', '2023-01-15', 'Sweet Potato, Rice, Eggs, Potato, Rice', 'Sit-ups\r\n', '19', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1409, 'William', '2023-01-15', 'Eggs, Beef, Peanuts, Cereals, Beef', 'Push-up \r\n', '20', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1410, 'William', '2023-01-15', 'Cheese, Cheese, Chicken, Corn, Crab', 'Catching Balls \r\n', '21', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1411, 'William', '2023-01-15', 'Oats, Cheese, Meat, Biscuits, Cheese', 'Squats And Lunges\r\n', '22', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1412, 'William', '2023-01-15', 'Wheats, Fish, Oranges, Corn, Crab', 'Sit-ups\r\n', '23', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1413, 'William', '2023-01-15', 'Noodles, Fish, Broccoli, Sweet Potato, Beef', 'Jogging ', '24', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1414, 'William', '2023-01-15', 'Grains, Fish, Spinach, Potato, Rice', 'Squats And Lunges\r\n', '25', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1415, 'William', '2023-01-15', 'Biscuits, Crab, Apples, Cheese, Rice', 'Bear Crawl\r\n', '26', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1416, 'William', '2023-01-15', 'Noodles, Chicken, Watermelon, Eggs, Pumpkin Seeds', 'Bear Crawl\r\n', '27', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1417, 'William', '2023-01-15', 'Cereals, Rice, Seaweed, Grains, Rice', 'Squats And Lunges\r\n', '28', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1418, 'William', '2023-01-15', 'Noodles, Fish, Malunggay, Milk, Chicken', 'Catching Balls \r\n', '29', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1419, 'William', '2023-01-15', 'Oats, Pumpkin Seeds, Curry Chicken, Wheats, Chicken', 'Catching Balls \r\n', '30', 0, 0, '2023-02-14', '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(1420, 'Rhoda', '2023-01-15', 'Grains, Pumpkin Seeds, Ham & Cheese, Grains, Beef', 'Squats And Lunges\r\n', '1', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1421, 'Rhoda', '2023-01-15', 'Wheats, Eggs, Peanuts, Milk, Chicken', 'Catching Balls \r\n', '2', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1422, 'Rhoda', '2023-01-15', 'Honey, Cheese, Potato, Potato, Rice', 'Catching Balls \r\n', '3', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1423, 'Rhoda', '2023-01-15', 'Cheese, Chicken, Mangos, Biscuits, Chicken', 'Push-up \r\n', '4', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1424, 'Rhoda', '2023-01-15', 'Oats, Cheese, Bell Peppers, Wheats, Chicken', 'Push-up \r\n', '5', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1425, 'Rhoda', '2023-01-15', 'Nuts, Rice, Spinach, Biscuits, Fish', 'Bear Crawl\r\n', '6', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1426, 'Rhoda', '2023-01-15', 'Potato, Rice, Oranges, Honey, Pumpkin Seeds', 'Jogging ', '7', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1427, 'Rhoda', '2023-01-15', 'Milk, Crab, Seaweed, Oats, Pumpkin Seeds', 'Sit-ups\r\n', '8', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1428, 'Rhoda', '2023-01-15', 'Cheese, Beef, Parsley, Biscuits, Eggs', 'Jumping\r\n', '9', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1429, 'Rhoda', '2023-01-15', 'Grains, Fish, Lemon, Bread, Rice', 'Jogging ', '10', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1430, 'Rhoda', '2023-01-15', 'Wheats, Pumpkin Seeds, Bell Peppers, Wheats, Beef', 'Sit-ups\r\n', '11', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1431, 'Rhoda', '2023-01-15', 'Biscuits, Crab, Potato, Oats, Beef', 'Catching Balls \r\n', '12', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1432, 'Rhoda', '2023-01-15', 'Pasta, Cheese, Chocolate, Bread, Crab', 'Jumping\r\n', '13', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1433, 'Rhoda', '2023-01-15', 'Cheese, Beef, Malunggay, Cereals, Eggs', 'Sit-ups\r\n', '14', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1434, 'Rhoda', '2023-01-15', 'Grains, Beef, Malunggay, Nuts, Beef', 'Jumping\r\n', '15', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1435, 'Rhoda', '2023-01-15', 'Cereals, Chicken, Avocados, Biscuits, Crab', 'Stretching', '16', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1436, 'Rhoda', '2023-01-15', 'Potato, Rice, Corn, Pasta, Pumpkin Seeds', 'Bear Crawl\r\n', '17', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1437, 'Rhoda', '2023-01-15', 'Honey, Eggs, Lemon, Corn, Chicken', 'Squats And Lunges\r\n', '18', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1438, 'Rhoda', '2023-01-15', 'Sweet Potato, Beef, Parsley, Corn, Beef', 'Squats And Lunges\r\n', '19', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1439, 'Rhoda', '2023-01-15', 'Cereals, Pumpkin Seeds, Peanuts, Sweet Potato, Rice', 'Sit-ups\r\n', '20', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1440, 'Rhoda', '2023-01-15', 'Honey, Chicken, Spinach, Biscuits, Cheese', 'Sit-ups\r\n', '21', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1441, 'Rhoda', '2023-01-15', 'Biscuits, Eggs, Parsley, Wheats, Beef', 'Jogging ', '22', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1442, 'Rhoda', '2023-01-15', 'Cereals, Cheese, Apples, Grains, Chicken', 'Sit-ups\r\n', '23', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1443, 'Rhoda', '2023-01-15', 'Biscuits, Eggs, Curry Chicken, Cheese, Rice', 'Push-up \r\n', '24', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1444, 'Rhoda', '2023-01-15', 'Wheats, Pumpkin Seeds, Ham & Cheese, Biscuits, Pumpkin Seeds', 'Catching Balls \r\n', '25', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1445, 'Rhoda', '2023-01-15', 'Corn, Chicken, Malunggay, Nuts, Rice', 'Catching Balls \r\n', '26', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1446, 'Rhoda', '2023-01-15', 'Corn, Rice, Broccoli, Grains, Cheese', 'Bear Crawl\r\n', '27', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1447, 'Rhoda', '2023-01-15', 'Nuts, Eggs, Chicken, Oats, Chicken', 'Jumping\r\n', '28', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1448, 'Rhoda', '2023-01-15', 'Cheese, Pumpkin Seeds, Meat, Honey, Chicken', 'Push-up \r\n', '29', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(1449, 'Rhoda', '2023-01-15', 'Pasta, Crab, Ham & Cheese, Eggs, Beef', 'Jogging ', '30', 0, 0, '2023-02-14', '2023-01-15 07:06:58', '2023-01-15 07:06:58');

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
(1, 2, 'William', 0, 'What is the name of your first pet?', '123', 'What was your first car?', 'haha', '2023-01-15 06:20:26', '2023-01-15 06:20:26'),
(2, 2, 'Rhoda', 0, 'What was your favorite food as a child?', 'haha', 'What was your first car?', 'hahaha', '2023-01-15 07:07:06', '2023-01-15 07:07:06');

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
(85, 'William', 'Hiroko', 'Amery', 'Lila', '2009-08-08', '', 'Male', 'HALEY', 'QUENTIN', 'YEN', 'MASON', 'JADA', 'EVE', '30947', 0x6d6174682e6a7067, 'Kinder', 'Bo', 0, '2023-01-15', '2023-01-15 06:20:00', '2023-01-15 06:20:00'),
(86, 'Rhoda', 'Evangeline', 'Merritt', 'Melodie', '1991-01-23', '', 'Female', 'AMAYA', 'DENTON', 'IGNACIA', 'DEMETRIUS', 'KEEFE', 'RAJAH', '52039', 0x70726f6a656374206d616e616765722e504e47, 'Grade 1', 'Shaeleigh', 0, '2023-01-15', '2023-01-15 07:06:50', '2023-01-15 07:06:50');

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
(326, 'William', 0, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(327, 'William', 1, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(328, 'William', 2, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(329, 'William', 3, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(330, 'William', 4, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(331, 'William', 5, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(332, 'William', 6, 1, '2023-01-15 06:20:21', '2023-01-15 06:20:21'),
(333, 'Rhoda', 0, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(334, 'Rhoda', 1, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(335, 'Rhoda', 2, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(336, 'Rhoda', 3, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(337, 'Rhoda', 4, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(338, 'Rhoda', 5, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58'),
(339, 'Rhoda', 6, 1, '2023-01-15 07:06:58', '2023-01-15 07:06:58');

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
(76, '202286899', 'dasiferoq@mailinator.com', 'Welcome@12345', 'Nehru', 'Jena', 'Malachi', '', 'DEBRA', 'GRAHAM', 'HOLLEE', 'RINAH', 'ELEANOR', 'WILMA', '38899', 'Female', 2, 0x7265706f72745f73797374656d2e6a7067, 'Cody', '2023-01-15 06:10:15', '2023-01-15 06:10:15'),
(77, '202235660', 'kozudo@mailinator.com', 'Welcome@12345', 'Dennis', 'Susan', 'Brett', '', 'HALEY', 'QUENTIN', 'YEN', 'MASON', 'JADA', 'EVE', '30947', 'Male', 2, 0x70726f6a656374206d616e616765722e504e47, 'William', '2023-01-15 06:20:00', '2023-01-15 06:20:00'),
(78, '202229168', 'vypibe@mailinator.com', 'Welcome@12345', 'Maia', 'Lois', 'Kendall', '', 'AMAYA', 'DENTON', 'IGNACIA', 'DEMETRIUS', 'KEEFE', 'RAJAH', '52039', 'Female', 2, 0x7265706f72745f73797374656d2e6a7067, 'Rhoda', '2023-01-15 07:06:50', '2023-01-15 07:06:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1450;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
