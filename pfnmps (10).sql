-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 05:07 AM
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
(14, '202286384', 'fumejem@mailinator.com', '123', 'Lila', 'Yuli', 'Uriel', 2, 'Colt', 1, 0x3332363532353238325f323135323139393436383331383331375f373639373735303836333034313531323134305f6e2e6a7067, '2023-01-25 09:57:07', '2023-01-25 09:57:07');

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
(93, 'Cameron', 157, 66, '26.77593411', 'Healthy Weight', '3', 'Kieran', '2023-01-26 12:07:07', '2023-01-26 12:07:07');

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
(10, 'Ivana', 0, 22, '2023-01-26', '2023-01-26 11:22:40'),
(11, 'Noel', 0, 22, '2023-01-26', '2023-01-26 12:05:47'),
(12, 'Cameron', 0, 27, '2023-01-26', '2023-01-26 12:07:07');

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
(1693, 'Cameron', '2023-01-26', 'Milk, Cheese, Bell Peppers, Biscuits, Cheese', 'Catching Balls \r\n', '1', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1694, 'Cameron', '2023-01-26', 'Oats, Beef, Eggs, Noodles, Fish', 'Bear Crawl\r\n', '2', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1695, 'Cameron', '2023-01-26', 'Sweet Potato, Beef, Broccoli, Sweet Potato, Crab', 'Catching Balls \r\n', '3', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1696, 'Cameron', '2023-01-26', 'Grains, Cheese, Broccoli, Potato, Fish', 'Bear Crawl\r\n', '4', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1697, 'Cameron', '2023-01-26', 'Oats, Pumpkin Seeds, Saluyot, Potato, Eggs', 'Push-up \r\n', '5', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1698, 'Cameron', '2023-01-26', 'Pasta, Chicken, Bananas, Honey, Eggs', 'Squats And Lunges\r\n', '6', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1699, 'Cameron', '2023-01-26', 'Cheese, Eggs, Apples, Nuts, Pumpkin Seeds', 'Jogging ', '7', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1700, 'Cameron', '2023-01-26', 'Nuts, Beef, Oranges, Eggs, Chicken', 'Sit-ups\r\n', '8', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1701, 'Cameron', '2023-01-26', 'Potato, Crab, Ham & Cheese, Wheats, Pumpkin Seeds', 'Jogging ', '9', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1702, 'Cameron', '2023-01-26', 'Honey, Eggs, Malunggay, Noodles, Cheese', 'Stretching', '10', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1703, 'Cameron', '2023-01-26', 'Cheese, Crab, Coconut Juice, Biscuits, Fish', 'Bear Crawl\r\n', '11', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1704, 'Cameron', '2023-01-26', 'Cereals, Beef, Parsley, Biscuits, Fish', 'Stretching', '12', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1705, 'Cameron', '2023-01-26', 'Milk, Pumpkin Seeds, Potato, Corn, Eggs', 'Catching Balls \r\n', '13', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1706, 'Cameron', '2023-01-26', 'Biscuits, Crab, Corn, Grains, Crab', 'Catching Balls \r\n', '14', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1707, 'Cameron', '2023-01-26', 'Cheese, Eggs, Potato, Grains, Rice', 'Bear Crawl\r\n', '15', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1708, 'Cameron', '2023-01-26', 'Noodles, Chicken, Seaweed, Corn, Pumpkin Seeds', 'Catching Balls \r\n', '16', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1709, 'Cameron', '2023-01-26', 'Honey, Pumpkin Seeds, Chicken, Pasta, Chicken', 'Squats And Lunges\r\n', '17', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1710, 'Cameron', '2023-01-26', 'Pasta, Pumpkin Seeds, Apples, Noodles, Cheese', 'Sit-ups\r\n', '18', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1711, 'Cameron', '2023-01-26', 'Cheese, Chicken, Chicken, Pasta, Rice', 'Squats And Lunges\r\n', '19', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1712, 'Cameron', '2023-01-26', 'Milk, Cheese, Spinach, Corn, Chicken', 'Squats And Lunges\r\n', '20', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1713, 'Cameron', '2023-01-26', 'Corn, Pumpkin Seeds, Apples, Cheese, Fish', 'Jogging ', '21', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1714, 'Cameron', '2023-01-26', 'Potato, Fish, Peanuts, Bread, Cheese', 'Jumping\r\n', '22', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1715, 'Cameron', '2023-01-26', 'Honey, Crab, Eggs, Corn, Eggs', 'Bear Crawl\r\n', '23', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1716, 'Cameron', '2023-01-26', 'Milk, Cheese, Bell Peppers, Pasta, Crab', 'Squats And Lunges\r\n', '24', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1717, 'Cameron', '2023-01-26', 'Wheats, Fish, Bananas, Cereals, Eggs', 'Squats And Lunges\r\n', '25', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1718, 'Cameron', '2023-01-26', 'Pasta, Pumpkin Seeds, Potato, Honey, Cheese', 'Sit-ups\r\n', '26', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1719, 'Cameron', '2023-01-26', 'Potato, Crab, Seaweed, Corn, Chicken', 'Bear Crawl\r\n', '27', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1720, 'Cameron', '2023-01-26', 'Potato, Crab, Ham & Cheese, Corn, Pumpkin Seeds', 'Jumping\r\n', '28', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1721, 'Cameron', '2023-01-26', 'Corn, Beef, Saluyot, Corn, Crab', 'Stretching', '29', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(1722, 'Cameron', '2023-01-26', 'Grains, Eggs, Broccoli, Wheats, Eggs', 'Push-up \r\n', '30', 0, 0, '2023-02-25', '2023-01-26 12:07:10', '2023-01-26 12:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `program_records_2`
--

CREATE TABLE `program_records_2` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `date_started` date NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_records_2`
--

INSERT INTO `program_records_2` (`id`, `student_id`, `date_started`, `date_created`, `date_updated`) VALUES
(2, 'Cameron', '2023-01-27', '2023-01-26', '2023-01-26'),
(3, 'Cameron', '2023-01-28', '2023-01-26', '2023-01-26'),
(4, 'Cameron', '2023-01-29', '2023-01-26', '2023-01-26'),
(5, 'Cameron', '2023-01-30', '2023-01-26', '2023-01-26'),
(6, 'Cameron', '2023-01-31', '2023-01-26', '2023-01-26'),
(7, 'Cameron', '2023-02-01', '2023-01-26', '2023-01-26'),
(8, 'Cameron', '2023-02-02', '2023-01-26', '2023-01-26'),
(9, 'Cameron', '2023-02-03', '2023-01-26', '2023-01-26'),
(10, 'Cameron', '2023-02-04', '2023-01-26', '2023-01-26'),
(11, 'Cameron', '2023-02-05', '2023-01-26', '2023-01-26'),
(12, 'Cameron', '2023-02-06', '2023-01-26', '2023-01-26'),
(13, 'Cameron', '2023-02-07', '2023-01-26', '2023-01-26'),
(14, 'Cameron', '2023-02-08', '2023-01-26', '2023-01-26'),
(15, 'Cameron', '2023-02-09', '2023-01-26', '2023-01-26'),
(16, 'Cameron', '2023-02-10', '2023-01-26', '2023-01-26'),
(17, 'Cameron', '2023-02-11', '2023-01-26', '2023-01-26'),
(18, 'Cameron', '2023-02-12', '2023-01-26', '2023-01-26'),
(19, 'Cameron', '2023-02-13', '2023-01-26', '2023-01-26'),
(20, 'Cameron', '2023-02-14', '2023-01-26', '2023-01-26'),
(21, 'Cameron', '2023-02-15', '2023-01-26', '2023-01-26'),
(22, 'Cameron', '2023-02-16', '2023-01-26', '2023-01-26'),
(23, 'Cameron', '2023-02-17', '2023-01-26', '2023-01-26'),
(24, 'Cameron', '2023-02-18', '2023-01-26', '2023-01-26'),
(25, 'Cameron', '2023-02-19', '2023-01-26', '2023-01-26'),
(26, 'Cameron', '2023-02-20', '2023-01-26', '2023-01-26'),
(27, 'Cameron', '2023-02-21', '2023-01-26', '2023-01-26'),
(28, 'Cameron', '2023-02-22', '2023-01-26', '2023-01-26'),
(29, 'Cameron', '2023-02-23', '2023-01-26', '2023-01-26'),
(30, 'Cameron', '2023-02-24', '2023-01-26', '2023-01-26'),
(31, 'Cameron', '2023-02-25', '2023-01-26', '2023-01-26');

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
(10, 2, 'Inez', 0, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '1234', '2023-01-25 09:53:19', '2023-01-25 09:53:19'),
(11, 1, '0', 0, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '14', '2023-01-25 09:57:12', '2023-01-25 09:57:12'),
(12, 2, 'Ivana', 0, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '1', '2023-01-26 11:22:49', '2023-01-26 11:22:49'),
(13, 2, 'Cameron', 0, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '12', '2023-01-26 12:07:15', '2023-01-26 12:07:15');

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
(98, 'Cameron', 'Gail', 'Jane', 'Benjamin', '2005-01-25', '18', 'Female', 'JOEL', 'SHELLY', 'GRIFFIN', 'KYLYNN', 'EDAN', 'HEIDI', '795', 0x3332333632333736325f3534303737383131313331323439375f353131363739303730373431363239353634345f6e202831292e6a7067, 'Grade 4', 'Elijah', 0, '2023-01-26', '2023-01-26 12:07:07', '2023-01-26 12:07:07');

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
(406, 'Cameron', 0, 1, '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(407, 'Cameron', 1, 0, '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(408, 'Cameron', 2, 0, '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(409, 'Cameron', 3, 0, '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(410, 'Cameron', 4, 1, '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(411, 'Cameron', 5, 1, '2023-01-26 12:07:10', '2023-01-26 12:07:10'),
(412, 'Cameron', 6, 0, '2023-01-26 12:07:10', '2023-01-26 12:07:10');

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
(90, '202289415', 'lefakajy@mailinator.com', 'Welcome@12345', 'Hyatt', 'Daniel', 'Mary', 'Levi', 'JOEL', 'SHELLY', 'GRIFFIN', 'KYLYNN', 'EDAN', 'HEIDI', '795', 'Male', 2, 0x3330383932393836395f353337353638343333323535333837345f383032363536353732373638323230383438315f6e2e6a7067, 'Cameron', '2023-01-26 12:07:07', '2023-01-26 12:07:07');

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
-- Indexes for table `program_records_2`
--
ALTER TABLE `program_records_2`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1723;

--
-- AUTO_INCREMENT for table `program_records_2`
--
ALTER TABLE `program_records_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

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
