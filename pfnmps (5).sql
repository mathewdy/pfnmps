-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 01:39 AM
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
(54, 'Kessie', 62913306, 605450, 0, 'Under Weight', '3', 'Chava', '2023-01-03 08:18:44', '0000-00-00 00:00:00'),
(56, 'Amity', 51106612, 759610, 0, 'Under Weight', '4', 'Asher', '2023-01-03 08:31:20', '0000-00-00 00:00:00'),
(57, 'Aspen', 32472783, 1144442, 0, 'Under Weight', '1', 'Idona', '2023-01-03 08:35:09', '0000-00-00 00:00:00'),
(58, 'Alea', 56132286, 1190713, 0, 'Under Weight', '2', 'Halee', '2023-01-03 08:37:57', '0000-00-00 00:00:00');

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
(721, 'Kessie', '2023-01-03', 'Cheese, Beef, Ham & Cheese, Nuts, Beef', 'Stretching', '1', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(722, 'Kessie', '2023-01-03', 'Potato, Rice, Oranges, Pasta, Rice', 'Jogging ', '2', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(723, 'Kessie', '2023-01-03', 'Cereals, Beef, Apples, Potato, Rice', 'Sit-ups\r\n', '3', 0, 1, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(724, 'Kessie', '2023-01-03', 'Noodles, Crab, Apples, Eggs, Chicken', 'Stretching', '4', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(725, 'Kessie', '2023-01-03', 'Cheese, Beef, Monggo, Wheats, Beef', 'Jogging ', '5', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(726, 'Kessie', '2023-01-03', 'Milk, Pumpkin Seeds, Peanuts, Biscuits, Pumpkin Seeds', 'Jumping\r\n', '6', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(727, 'Kessie', '2023-01-03', 'Wheats, Crab, Bell Peppers, Noodles, Cheese', 'Bear Crawl\r\n', '7', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(728, 'Kessie', '2023-01-03', 'Noodles, Cheese, Peanuts, Pasta, Cheese', 'Bear Crawl\r\n', '8', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(729, 'Kessie', '2023-01-03', 'Biscuits, Chicken, Cauliflower, Wheats, Crab', 'Squats And Lunges\r\n', '9', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(730, 'Kessie', '2023-01-03', 'Sweet Potato, Crab, Stir Fried Tofu, Noodles, Fish', 'Jumping\r\n', '10', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(731, 'Kessie', '2023-01-03', 'Honey, Crab, Chocolate, Noodles, Rice', 'Squats And Lunges\r\n', '11', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(732, 'Kessie', '2023-01-03', 'Grains, Chicken, Malunggay, Pasta, Cheese', 'Sit-ups\r\n', '12', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(733, 'Kessie', '2023-01-03', 'Nuts, Beef, Chocolate, Eggs, Beef', 'Sit-ups\r\n', '13', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(734, 'Kessie', '2023-01-03', 'Noodles, Chicken, Avocados, Potato, Cheese', 'Squats And Lunges\r\n', '14', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(735, 'Kessie', '2023-01-03', 'Pasta, Cheese, Bell Peppers, Potato, Rice', 'Bear Crawl\r\n', '15', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(736, 'Kessie', '2023-01-03', 'Eggs, Eggs, Apples, Honey, Crab', 'Stretching', '16', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(737, 'Kessie', '2023-01-03', 'Honey, Crab, Chocolate, Grains, Rice', 'Stretching', '17', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(738, 'Kessie', '2023-01-03', 'Nuts, Eggs, Malunggay, Cheese, Beef', 'Push-up \r\n', '18', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(739, 'Kessie', '2023-01-03', 'Biscuits, Rice, Corn, Bread, Crab', 'Jumping\r\n', '19', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(740, 'Kessie', '2023-01-03', 'Nuts, Beef, Potato, Cereals, Crab', 'Bear Crawl\r\n', '20', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(741, 'Kessie', '2023-01-03', 'Pasta, Rice, Coconut Juice, Cereals, Crab', 'Squats And Lunges\r\n', '21', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(742, 'Kessie', '2023-01-03', 'Nuts, Fish, Coconut Juice, Oats, Crab', 'Bear Crawl\r\n', '22', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(743, 'Kessie', '2023-01-03', 'Biscuits, Rice, Stir Fried Tofu, Pasta, Eggs', 'Bear Crawl\r\n', '23', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(744, 'Kessie', '2023-01-03', 'Pasta, Pumpkin Seeds, Parsley, Honey, Pumpkin Seeds', 'Sit-ups\r\n', '24', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(745, 'Kessie', '2023-01-03', 'Milk, Eggs, Potato, Grains, Pumpkin Seeds', 'Bear Crawl\r\n', '25', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(746, 'Kessie', '2023-01-03', 'Bread, Eggs, Cauliflower, Wheats, Rice', 'Stretching', '26', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(747, 'Kessie', '2023-01-03', 'Eggs, Cheese, Ham & Cheese, Corn, Beef', 'Jumping\r\n', '27', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(748, 'Kessie', '2023-01-03', 'Cheese, Eggs, Eggs, Bread, Eggs', 'Stretching', '28', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(749, 'Kessie', '2023-01-03', 'Potato, Chicken, Peanuts, Bread, Chicken', 'Sit-ups\r\n', '29', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(750, 'Kessie', '2023-01-03', 'Biscuits, Eggs, Broccoli, Nuts, Cheese', 'Push-up \r\n', '30', 0, 0, '2023-02-02', '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(781, 'Amity', '2023-01-03', 'Cheese, Cheese, Avocados, Oats, Pumpkin Seeds', 'Jumping\r\n', '1', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(782, 'Amity', '2023-01-03', 'Noodles, Beef, Peanuts, Milk, Cheese', 'Jumping\r\n', '2', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(783, 'Amity', '2023-01-03', 'Biscuits, Eggs, Carrots, Cheese, Eggs', 'Catching Balls \r\n', '3', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(784, 'Amity', '2023-01-03', 'Nuts, Chicken, Chocolate, Potato, Rice', 'Stretching', '4', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(785, 'Amity', '2023-01-03', 'Wheats, Eggs, Pineapple, Oats, Pumpkin Seeds', 'Jogging ', '5', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(786, 'Amity', '2023-01-03', 'Honey, Fish, Coconut Juice, Corn, Chicken', 'Catching Balls \r\n', '6', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(787, 'Amity', '2023-01-03', 'Bread, Pumpkin Seeds, Oranges, Sweet Potato, Chicken', 'Sit-ups\r\n', '7', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(788, 'Amity', '2023-01-03', 'Honey, Rice, Monggo, Sweet Potato, Beef', 'Jogging ', '8', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(789, 'Amity', '2023-01-03', 'Oats, Crab, Curry Chicken, Grains, Crab', 'Jogging ', '9', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(790, 'Amity', '2023-01-03', 'Potato, Rice, Curry Chicken, Pasta, Chicken', 'Sit-ups\r\n', '10', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(791, 'Amity', '2023-01-03', 'Cereals, Chicken, Coconut Juice, Potato, Eggs', 'Push-up \r\n', '11', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(792, 'Amity', '2023-01-03', 'Corn, Crab, Chocolate, Noodles, Eggs', 'Jumping\r\n', '12', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(793, 'Amity', '2023-01-03', 'Pasta, Chicken, Chocolate, Pasta, Crab', 'Push-up \r\n', '13', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(794, 'Amity', '2023-01-03', 'Milk, Cheese, Monggo, Honey, Eggs', 'Push-up \r\n', '14', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(795, 'Amity', '2023-01-03', 'Biscuits, Eggs, Broccoli, Potato, Pumpkin Seeds', 'Jumping\r\n', '15', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(796, 'Amity', '2023-01-03', 'Potato, Crab, Ham & Cheese, Milk, Cheese', 'Sit-ups\r\n', '16', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(797, 'Amity', '2023-01-03', 'Cereals, Chicken, Monggo, Potato, Cheese', 'Stretching', '17', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(798, 'Amity', '2023-01-03', 'Pasta, Chicken, Bell Peppers, Corn, Crab', 'Jumping\r\n', '18', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(799, 'Amity', '2023-01-03', 'Potato, Crab, Cauliflower, Corn, Cheese', 'Bear Crawl\r\n', '19', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(800, 'Amity', '2023-01-03', 'Noodles, Cheese, Oranges, Bread, Cheese', 'Squats And Lunges\r\n', '20', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(801, 'Amity', '2023-01-03', 'Cereals, Rice, Parsley, Noodles, Eggs', 'Bear Crawl\r\n', '21', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(802, 'Amity', '2023-01-03', 'Honey, Chicken, Malunggay, Sweet Potato, Pumpkin Seeds', 'Jumping\r\n', '22', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(803, 'Amity', '2023-01-03', 'Noodles, Cheese, Chocolate, Honey, Crab', 'Stretching', '23', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(804, 'Amity', '2023-01-03', 'Potato, Cheese, Chocolate, Biscuits, Cheese', 'Push-up \r\n', '24', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(805, 'Amity', '2023-01-03', 'Biscuits, Cheese, Malunggay, Cheese, Beef', 'Sit-ups\r\n', '25', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(806, 'Amity', '2023-01-03', 'Pasta, Beef, Corn, Nuts, Crab', 'Squats And Lunges\r\n', '26', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(807, 'Amity', '2023-01-03', 'Wheats, Rice, Ham & Cheese, Eggs, Fish', 'Sit-ups\r\n', '27', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(808, 'Amity', '2023-01-03', 'Honey, Fish, Peanuts, Corn, Rice', 'Catching Balls \r\n', '28', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(809, 'Amity', '2023-01-03', 'Noodles, Eggs, Corn, Sweet Potato, Pumpkin Seeds', 'Squats And Lunges\r\n', '29', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(810, 'Amity', '2023-01-03', 'Cheese, Rice, Curry Chicken, Grains, Crab', 'Jogging ', '30', 0, 0, '2023-02-02', '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(811, 'Aspen', '2023-01-03', 'Pasta, Chicken, Malunggay, Corn, Fish', 'Push-up \r\n', '1', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(812, 'Aspen', '2023-01-03', 'Oats, Chicken, Pineapple, Milk, Chicken', 'Jumping\r\n', '2', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(813, 'Aspen', '2023-01-03', 'Potato, Pumpkin Seeds, Eggs, Milk, Chicken', 'Squats And Lunges\r\n', '3', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(814, 'Aspen', '2023-01-03', 'Noodles, Fish, Chicken, Eggs, Beef', 'Sit-ups\r\n', '4', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(815, 'Aspen', '2023-01-03', 'Honey, Fish, Curry Chicken, Noodles, Crab', 'Sit-ups\r\n', '5', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(816, 'Aspen', '2023-01-03', 'Nuts, Beef, Carrots, Pasta, Eggs', 'Catching Balls \r\n', '6', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(817, 'Aspen', '2023-01-03', 'Honey, Fish, Lemon, Bread, Beef', 'Jogging ', '7', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(818, 'Aspen', '2023-01-03', 'Bread, Beef, Spinach, Biscuits, Beef', 'Catching Balls \r\n', '8', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(819, 'Aspen', '2023-01-03', 'Cheese, Cheese, Malunggay, Oats, Crab', 'Stretching', '9', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(820, 'Aspen', '2023-01-03', 'Potato, Rice, Potato, Honey, Pumpkin Seeds', 'Squats And Lunges\r\n', '10', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(821, 'Aspen', '2023-01-03', 'Potato, Pumpkin Seeds, Carrots, Bread, Eggs', 'Catching Balls \r\n', '11', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(822, 'Aspen', '2023-01-03', 'Sweet Potato, Beef, Meat, Cereals, Rice', 'Push-up \r\n', '12', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(823, 'Aspen', '2023-01-03', 'Bread, Fish, Meat, Eggs, Fish', 'Squats And Lunges\r\n', '13', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(824, 'Aspen', '2023-01-03', 'Cheese, Eggs, Mangos, Biscuits, Pumpkin Seeds', 'Bear Crawl\r\n', '14', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(825, 'Aspen', '2023-01-03', 'Honey, Rice, Parsley, Wheats, Chicken', 'Catching Balls \r\n', '15', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(826, 'Aspen', '2023-01-03', 'Corn, Cheese, Eggs, Pasta, Pumpkin Seeds', 'Catching Balls \r\n', '16', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(827, 'Aspen', '2023-01-03', 'Milk, Beef, Chicken, Eggs, Beef', 'Squats And Lunges\r\n', '17', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(828, 'Aspen', '2023-01-03', 'Wheats, Beef, Lemon, Sweet Potato, Crab', 'Sit-ups\r\n', '18', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(829, 'Aspen', '2023-01-03', 'Bread, Chicken, Oranges, Sweet Potato, Rice', 'Stretching', '19', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(830, 'Aspen', '2023-01-03', 'Potato, Beef, Ham & Cheese, Honey, Eggs', 'Stretching', '20', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(831, 'Aspen', '2023-01-03', 'Eggs, Fish, Ham & Cheese, Noodles, Fish', 'Sit-ups\r\n', '21', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(832, 'Aspen', '2023-01-03', 'Eggs, Beef, Peanuts, Noodles, Fish', 'Sit-ups\r\n', '22', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(833, 'Aspen', '2023-01-03', 'Corn, Chicken, Seaweed, Eggs, Beef', 'Push-up \r\n', '23', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(834, 'Aspen', '2023-01-03', 'Sweet Potato, Chicken, Cauliflower, Eggs, Chicken', 'Jogging ', '24', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(835, 'Aspen', '2023-01-03', 'Milk, Crab, Saluyot, Cereals, Eggs', 'Stretching', '25', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(836, 'Aspen', '2023-01-03', 'Nuts, Chicken, Coconut Juice, Noodles, Beef', 'Squats And Lunges\r\n', '26', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(837, 'Aspen', '2023-01-03', 'Noodles, Cheese, Saluyot, Cereals, Cheese', 'Jogging ', '27', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(838, 'Aspen', '2023-01-03', 'Honey, Chicken, Oranges, Pasta, Cheese', 'Stretching', '28', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(839, 'Aspen', '2023-01-03', 'Wheats, Chicken, Bell Peppers, Honey, Fish', 'Bear Crawl\r\n', '29', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(840, 'Aspen', '2023-01-03', 'Biscuits, Pumpkin Seeds, Stir Fried Tofu, Cereals, Beef', 'Push-up \r\n', '30', 0, 0, '2023-02-02', '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(841, 'Alea', '2023-01-03', 'Milk, Fish, Lemon, Milk, Crab', 'Bear Crawl\r\n', '1', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(842, 'Alea', '2023-01-03', 'Eggs, Fish, Oranges, Noodles, Pumpkin Seeds', 'Jogging ', '2', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(843, 'Alea', '2023-01-03', 'Nuts, Crab, Eggs, Cereals, Beef', 'Squats And Lunges\r\n', '3', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(844, 'Alea', '2023-01-03', 'Nuts, Pumpkin Seeds, Apples, Milk, Rice', 'Catching Balls \r\n', '4', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(845, 'Alea', '2023-01-03', 'Potato, Rice, Monggo, Noodles, Beef', 'Jumping\r\n', '5', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(846, 'Alea', '2023-01-03', 'Biscuits, Rice, Monggo, Cheese, Chicken', 'Squats And Lunges\r\n', '6', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(847, 'Alea', '2023-01-03', 'Noodles, Beef, Apples, Oats, Crab', 'Squats And Lunges\r\n', '7', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(848, 'Alea', '2023-01-03', 'Cereals, Cheese, Apples, Grains, Eggs', 'Squats And Lunges\r\n', '8', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(849, 'Alea', '2023-01-03', 'Grains, Chicken, Broccoli, Biscuits, Beef', 'Catching Balls \r\n', '9', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(850, 'Alea', '2023-01-03', 'Noodles, Crab, Bananas, Biscuits, Cheese', 'Squats And Lunges\r\n', '10', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(851, 'Alea', '2023-01-03', 'Sweet Potato, Chicken, Monggo, Milk, Eggs', 'Squats And Lunges\r\n', '11', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(852, 'Alea', '2023-01-03', 'Sweet Potato, Cheese, Meat, Noodles, Fish', 'Push-up \r\n', '12', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(853, 'Alea', '2023-01-03', 'Cereals, Eggs, Mangos, Bread, Crab', 'Jogging ', '13', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(854, 'Alea', '2023-01-03', 'Milk, Rice, Parsley, Bread, Eggs', 'Sit-ups\r\n', '14', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(855, 'Alea', '2023-01-03', 'Grains, Cheese, Stir Fried Tofu, Grains, Pumpkin Seeds', 'Push-up \r\n', '15', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(856, 'Alea', '2023-01-03', 'Honey, Chicken, Potato, Cheese, Beef', 'Stretching', '16', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(857, 'Alea', '2023-01-03', 'Potato, Crab, Apples, Nuts, Pumpkin Seeds', 'Jumping\r\n', '17', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(858, 'Alea', '2023-01-03', 'Biscuits, Crab, Potato, Sweet Potato, Rice', 'Jumping\r\n', '18', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(859, 'Alea', '2023-01-03', 'Sweet Potato, Eggs, Malunggay, Sweet Potato, Fish', 'Bear Crawl\r\n', '19', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(860, 'Alea', '2023-01-03', 'Grains, Beef, Peanuts, Bread, Fish', 'Jogging ', '20', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(861, 'Alea', '2023-01-03', 'Potato, Rice, Monggo, Corn, Rice', 'Jogging ', '21', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(862, 'Alea', '2023-01-03', 'Pasta, Eggs, Malunggay, Honey, Fish', 'Bear Crawl\r\n', '22', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(863, 'Alea', '2023-01-03', 'Potato, Chicken, Saluyot, Honey, Crab', 'Squats And Lunges\r\n', '23', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(864, 'Alea', '2023-01-03', 'Noodles, Beef, Spinach, Noodles, Eggs', 'Bear Crawl\r\n', '24', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(865, 'Alea', '2023-01-03', 'Grains, Rice, Eggs, Cheese, Rice', 'Jogging ', '25', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(866, 'Alea', '2023-01-03', 'Potato, Chicken, Broccoli, Noodles, Chicken', 'Bear Crawl\r\n', '26', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(867, 'Alea', '2023-01-03', 'Biscuits, Cheese, Stir Fried Tofu, Pasta, Beef', 'Push-up \r\n', '27', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(868, 'Alea', '2023-01-03', 'Cheese, Rice, Stir Fried Tofu, Bread, Rice', 'Jumping\r\n', '28', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(869, 'Alea', '2023-01-03', 'Cereals, Pumpkin Seeds, Apples, Oats, Fish', 'Bear Crawl\r\n', '29', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(870, 'Alea', '2023-01-03', 'Eggs, Rice, Chicken, Cereals, Beef', 'Push-up \r\n', '30', 0, 0, '2023-02-02', '2023-01-03 08:38:04', '2023-01-03 08:38:04');

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
(27, 2, 'Aspen', 0, 'What was your favorite food as a child?', '123', 'What was your first car?', 'haha', '2023-01-03 08:38:09', '2023-01-03 08:38:09');

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
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `room`, `house`, `street`, `subdivision`, `barangay`, `city`, `zip`, `image`, `grade`, `section`, `date_time_created`, `date_time_updated`) VALUES
(58, 'Kessie', 'Sigourneyhahahaha', 'Mira', 'Genevieve', '2002-12-30', 'Female', 'BAKER', 'KAMEKO', 'HALEY', 'ANN', 'MARAH', 'COOPER', '29098', 0x3330313730363830375f323936373038393733303235303732395f373834363531393638393536373331323436395f6e2e706e67, 'Grade 1', 'Xavier', '2023-01-03 08:18:44', '2023-01-03 08:29:18'),
(60, 'Amity', 'Sasha', 'Magee', 'Jordan', '1974-08-09', 'Female', 'MUFUTAU', 'ZEUS', 'XANDER', 'ORSON', 'LYLE', 'PETER', '59540', 0x3332313733373639325f3535323138303833363536363934345f383939383535373833303530333530383231335f6e2e6a7067, 'Grade 5', 'Tyrone', '2023-01-03 08:31:20', '2023-01-03 08:31:20'),
(61, 'Aspen', 'Kimberly', 'TaShya', 'Oren', '2004-02-06', 'Male', 'BERK', 'WALLACE', 'MARTENA', 'JOHN', 'ARTHUR', 'NATHANIEL', '42944', 0x3239353636323433335f313737383734353535323530313331365f3531323139303333323031393930373039315f6e2e706e67, 'Grade 5', 'Priscilla', '2023-01-03 08:35:09', '2023-01-03 08:35:09'),
(62, 'Alea', 'Carissa', 'Winifred', 'Gray', '2011-10-03', 'Male', 'AMANDA', 'TODD', 'DENNIS', 'MOLLY', 'FAY', 'KEIKO', '43243', 0x3332313733373639325f3535323138303833363536363934345f383939383535373833303530333530383231335f6e2e6a7067, 'Grade 5', 'Inga', '2023-01-03 08:37:57', '2023-01-03 08:37:57');

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
(212, 'Kessie', 1, 1, '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(213, 'Kessie', 2, 1, '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(214, 'Kessie', 3, 1, '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(215, 'Kessie', 4, 1, '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(216, 'Kessie', 5, 1, '2023-01-03 08:18:50', '2023-01-03 08:18:50'),
(222, 'Amity', 1, 1, '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(223, 'Amity', 2, 1, '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(224, 'Amity', 3, 1, '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(225, 'Amity', 4, 1, '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(226, 'Amity', 5, 1, '2023-01-03 08:31:33', '2023-01-03 08:31:33'),
(227, 'Aspen', 1, 1, '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(228, 'Aspen', 2, 1, '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(229, 'Aspen', 3, 1, '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(230, 'Aspen', 4, 0, '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(231, 'Aspen', 5, 1, '2023-01-03 08:35:22', '2023-01-03 08:35:22'),
(232, 'Alea', 1, 1, '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(233, 'Alea', 2, 1, '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(234, 'Alea', 3, 1, '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(235, 'Alea', 4, 0, '2023-01-03 08:38:04', '2023-01-03 08:38:04'),
(236, 'Alea', 5, 0, '2023-01-03 08:38:04', '2023-01-03 08:38:04');

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
(50, '202261454', 'lubej@mailinator.com', '', 'Gillian', 'Imani', 'Adrienne', '', 'BAKER', 'KAMEKO', 'HALEY', 'ANN', 'MARAH', 'COOPER', '29098', 'Female', 2, 0x3332313631313634355f313233363231343735303332353936345f363835303535383736363237383437363632375f6e2e6a7067, 'Kessie', '2023-01-03 08:18:44', '2023-01-03 08:18:44'),
(52, '202271717', 'vuxo@mailinator.com', 'Welcome@12345', 'Evan', 'Buffy', 'Phyllis', '', 'MUFUTAU', 'ZEUS', 'XANDER', 'ORSON', 'LYLE', 'PETER', '59540', 'Female', 2, 0x3331333334303732325f353437333936353430393339323433325f313837323737303438393735393032313738365f6e2e6a7067, 'Amity', '2023-01-03 08:31:20', '2023-01-03 08:31:20'),
(53, '202244660', 'xohu@mailinator.com', 'Welcome@12345', 'Joan', 'Echo', 'Velma', '', 'BERK', 'WALLACE', 'MARTENA', 'JOHN', 'ARTHUR', 'NATHANIEL', '42944', 'Female', 2, 0x65705f312e6a7067, 'Aspen', '2023-01-03 08:35:09', '2023-01-03 08:35:09'),
(54, '20221018', 'cesabiri@mailinator.com', 'Welcome@12345', 'Deacon', 'Margaret', 'Ori', '', 'AMANDA', 'TODD', 'DENNIS', 'MOLLY', 'FAY', 'KEIKO', '43243', 'Female', 2, 0x3331353230343737315f313038363436393230383639353934335f3839303432303536383031353139383538385f6e2e6a7067, 'Alea', '2023-01-03 08:37:57', '2023-01-03 08:37:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=871;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_type`) REFERENCES `user_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
