-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2023 at 11:57 AM
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
(8, '20228648', 'giwejo@mailinator.com', 'Pa$$w0rd!', 'Roanna123', 'Alexandra', 'Vance', 1, 'Alea', 1, 0x70617373706f72742e504e47, '2022-12-29 08:37:48', '2022-12-29 08:37:48'),
(11, '202280110', 'cogywebino@mailinator.com', '12345', 'Vivien', 'Petra', 'Dacey', 2, 'Nita', 1, 0x3331353333313530315f3637323830333736313231343136325f353734333231383235333433333035363131325f6e2e6a7067, '2022-12-29 08:49:38', '2022-12-29 08:49:38');

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
(42, 'Jelani', 27426819, 2005063, 0, 'Under Weight', '3', 'Eleanor', '2022-12-27 03:58:28', '0000-00-00 00:00:00'),
(44, 'Colby', 28956802, 914530, 0, 'Under Weight', '1', 'Garrison', '2023-01-01 07:53:38', '0000-00-00 00:00:00'),
(45, 'Karen', 71438858, 620940, 0, 'Under Weight', '4', 'Hillary', '2023-01-01 07:54:23', '0000-00-00 00:00:00'),
(46, 'Kadeem', 59427618, 770130, 0, 'Under Weight', '4', 'Aquila', '2023-01-01 07:54:54', '0000-00-00 00:00:00'),
(47, 'Timothy', 53928966, 619253, 0, 'Under Weight', '1', 'Isaac', '2023-01-01 07:55:25', '0000-00-00 00:00:00'),
(48, 'Phillip', 29227401, 1005842, 0, 'Under Weight', '1', 'Britanni', '2023-01-01 07:55:57', '0000-00-00 00:00:00'),
(49, 'Berk', 37354396, 925570, 0, 'Under Weight', '3', 'Chadwick', '2023-01-01 08:15:46', '0000-00-00 00:00:00'),
(50, 'Isadora', 58013542, 238840, 0, 'Under Weight', '4', 'Ezra', '2023-01-01 08:17:56', '0000-00-00 00:00:00'),
(51, 'Willa', 40144254, 670070, 0, 'Under Weight', '1', 'Xavier', '2023-01-01 08:33:33', '0000-00-00 00:00:00');

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
(361, 'Jelani', '2022-12-27', 'Milk, Eggs, Apples, Milk, Eggs', 'Sit-ups\r\n', '1', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(362, 'Jelani', '2022-12-27', 'Noodles, Chicken, Stir Fried Tofu, Potato, Beef', 'Stretching', '2', 1, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(363, 'Jelani', '2022-12-27', 'Pasta, Fish, Bananas, Nuts, Crab', 'Catching Balls \r\n', '3', 1, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(364, 'Jelani', '2022-12-27', 'Oats, Fish, Malunggay, Bread, Pumpkin Seeds', 'Sit-ups\r\n', '4', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(365, 'Jelani', '2022-12-27', 'Bread, Beef, Broccoli, Milk, Chicken', 'Stretching', '5', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(366, 'Jelani', '2022-12-27', 'Wheats, Rice, Broccoli, Pasta, Rice', 'Push-up \r\n', '6', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(367, 'Jelani', '2022-12-27', 'Nuts, Chicken, Monggo, Wheats, Cheese', 'Bear Crawl\r\n', '7', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(368, 'Jelani', '2022-12-27', 'Eggs, Rice, Potato, Nuts, Beef', 'Stretching', '8', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(369, 'Jelani', '2022-12-27', 'Noodles, Cheese, Broccoli, Pasta, Pumpkin Seeds', 'Push-up \r\n', '9', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(370, 'Jelani', '2022-12-27', 'Biscuits, Beef, Apples, Biscuits, Fish', 'Sit-ups\r\n', '10', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(371, 'Jelani', '2022-12-27', 'Noodles, Cheese, Lemon, Oats, Beef', 'Sit-ups\r\n', '11', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(372, 'Jelani', '2022-12-27', 'Nuts, Cheese, Bell Peppers, Potato, Cheese', 'Sit-ups\r\n', '12', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(373, 'Jelani', '2022-12-27', 'Grains, Pumpkin Seeds, Parsley, Eggs, Cheese', 'Catching Balls \r\n', '13', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(374, 'Jelani', '2022-12-27', 'Bread, Eggs, Meat, Nuts, Fish', 'Jumping\r\n', '14', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(375, 'Jelani', '2022-12-27', 'Cereals, Cheese, Potato, Noodles, Crab', 'Catching Balls \r\n', '15', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(376, 'Jelani', '2022-12-27', 'Milk, Eggs, Bananas, Nuts, Fish', 'Catching Balls \r\n', '16', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(377, 'Jelani', '2022-12-27', 'Bread, Chicken, Coconut Juice, Wheats, Rice', 'Jogging ', '17', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(378, 'Jelani', '2022-12-27', 'Oats, Fish, Cauliflower, Eggs, Crab', 'Sit-ups\r\n', '18', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(379, 'Jelani', '2022-12-27', 'Eggs, Rice, Spinach, Bread, Beef', 'Stretching', '19', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(380, 'Jelani', '2022-12-27', 'Pasta, Eggs, Bananas, Pasta, Chicken', 'Bear Crawl\r\n', '20', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(381, 'Jelani', '2022-12-27', 'Wheats, Chicken, Bell Peppers, Honey, Eggs', 'Catching Balls \r\n', '21', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(382, 'Jelani', '2022-12-27', 'Noodles, Crab, Potato, Noodles, Chicken', 'Jogging ', '22', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(383, 'Jelani', '2022-12-27', 'Grains, Eggs, Potato, Honey, Pumpkin Seeds', 'Push-up \r\n', '23', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(384, 'Jelani', '2022-12-27', 'Cheese, Beef, Chicken, Wheats, Crab', 'Sit-ups\r\n', '24', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(385, 'Jelani', '2022-12-27', 'Cereals, Cheese, Stir Fried Tofu, Sweet Potato, Rice', 'Squats And Lunges\r\n', '25', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(386, 'Jelani', '2022-12-27', 'Noodles, Chicken, Curry Chicken, Oats, Pumpkin Seeds', 'Stretching', '26', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(387, 'Jelani', '2022-12-27', 'Nuts, Rice, Avocados, Milk, Fish', 'Jogging ', '27', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(388, 'Jelani', '2022-12-27', 'Sweet Potato, Cheese, Ham & Cheese, Honey, Chicken', 'Stretching', '28', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(389, 'Jelani', '2022-12-27', 'Biscuits, Beef, Bananas, Milk, Crab', 'Push-up \r\n', '29', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(390, 'Jelani', '2022-12-27', 'Corn, Crab, Broccoli, Cheese, Pumpkin Seeds', 'Push-up \r\n', '30', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(421, 'Colby', '2023-01-01', 'Oats, Eggs, Spinach, Pasta, Crab', 'Catching Balls \r\n', '1', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(422, 'Colby', '2023-01-01', 'Cereals, Crab, Meat, Bread, Cheese', 'Jogging ', '2', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(423, 'Colby', '2023-01-01', 'Biscuits, Beef, Meat, Potato, Rice', 'Stretching', '3', 0, 1, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(424, 'Colby', '2023-01-01', 'Sweet Potato, Rice, Malunggay, Sweet Potato, Beef', 'Sit-ups\r\n', '4', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(425, 'Colby', '2023-01-01', 'Honey, Eggs, Saluyot, Cereals, Beef', 'Squats And Lunges\r\n', '5', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(426, 'Colby', '2023-01-01', 'Oats, Chicken, Potato, Corn, Beef', 'Stretching', '6', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(427, 'Colby', '2023-01-01', 'Oats, Beef, Oranges, Honey, Pumpkin Seeds', 'Catching Balls \r\n', '7', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(428, 'Colby', '2023-01-01', 'Corn, Chicken, Pineapple, Bread, Fish', 'Catching Balls \r\n', '8', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(429, 'Colby', '2023-01-01', 'Noodles, Cheese, Monggo, Nuts, Rice', 'Push-up \r\n', '9', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(430, 'Colby', '2023-01-01', 'Oats, Chicken, Eggs, Honey, Crab', 'Squats And Lunges\r\n', '10', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(431, 'Colby', '2023-01-01', 'Honey, Beef, Avocados, Potato, Beef', 'Jogging ', '11', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(432, 'Colby', '2023-01-01', 'Honey, Eggs, Chicken, Wheats, Rice', 'Sit-ups\r\n', '12', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(433, 'Colby', '2023-01-01', 'Eggs, Rice, Spinach, Sweet Potato, Cheese', 'Jumping\r\n', '13', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(434, 'Colby', '2023-01-01', 'Sweet Potato, Fish, Pineapple, Oats, Crab', 'Squats And Lunges\r\n', '14', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(435, 'Colby', '2023-01-01', 'Pasta, Crab, Ham & Cheese, Noodles, Pumpkin Seeds', 'Stretching', '15', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(436, 'Colby', '2023-01-01', 'Cheese, Rice, Watermelon, Eggs, Cheese', 'Bear Crawl\r\n', '16', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(437, 'Colby', '2023-01-01', 'Sweet Potato, Rice, Malunggay, Eggs, Eggs', 'Squats And Lunges\r\n', '17', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(438, 'Colby', '2023-01-01', 'Eggs, Cheese, Malunggay, Pasta, Rice', 'Squats And Lunges\r\n', '18', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(439, 'Colby', '2023-01-01', 'Cereals, Crab, Parsley, Bread, Beef', 'Stretching', '19', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(440, 'Colby', '2023-01-01', 'Cheese, Rice, Malunggay, Corn, Eggs', 'Catching Balls \r\n', '20', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(441, 'Colby', '2023-01-01', 'Honey, Fish, Lemon, Sweet Potato, Pumpkin Seeds', 'Catching Balls \r\n', '21', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(442, 'Colby', '2023-01-01', 'Grains, Fish, Carrots, Oats, Eggs', 'Stretching', '22', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(443, 'Colby', '2023-01-01', 'Honey, Beef, Peanuts, Biscuits, Cheese', 'Bear Crawl\r\n', '23', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(444, 'Colby', '2023-01-01', 'Potato, Eggs, Stir Fried Tofu, Milk, Rice', 'Push-up \r\n', '24', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(445, 'Colby', '2023-01-01', 'Cheese, Beef, Parsley, Corn, Cheese', 'Push-up \r\n', '25', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(446, 'Colby', '2023-01-01', 'Corn, Pumpkin Seeds, Monggo, Nuts, Chicken', 'Jogging ', '26', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(447, 'Colby', '2023-01-01', 'Bread, Beef, Eggs, Wheats, Beef', 'Push-up \r\n', '27', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(448, 'Colby', '2023-01-01', 'Cereals, Eggs, Watermelon, Sweet Potato, Crab', 'Squats And Lunges\r\n', '28', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(449, 'Colby', '2023-01-01', 'Bread, Crab, Malunggay, Cheese, Cheese', 'Stretching', '29', 0, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(450, 'Colby', '2023-01-01', 'Pasta, Rice, Parsley, Honey, Rice', 'Bear Crawl\r\n', '30', 1, 0, '2023-01-31', '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(451, 'Karen', '2023-01-01', 'Wheats, Chicken, Stir Fried Tofu, Honey, Cheese', 'Catching Balls \r\n', '1', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(452, 'Karen', '2023-01-01', 'Cheese, Cheese, Oranges, Biscuits, Beef', 'Sit-ups\r\n', '2', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(453, 'Karen', '2023-01-01', 'Nuts, Cheese, Avocados, Biscuits, Eggs', 'Squats And Lunges\r\n', '3', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(454, 'Karen', '2023-01-01', 'Grains, Beef, Parsley, Wheats, Chicken', 'Bear Crawl\r\n', '4', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(455, 'Karen', '2023-01-01', 'Sweet Potato, Eggs, Spinach, Noodles, Cheese', 'Stretching', '5', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(456, 'Karen', '2023-01-01', 'Biscuits, Chicken, Seaweed, Oats, Cheese', 'Push-up \r\n', '6', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(457, 'Karen', '2023-01-01', 'Eggs, Pumpkin Seeds, Stir Fried Tofu, Nuts, Chicken', 'Bear Crawl\r\n', '7', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(458, 'Karen', '2023-01-01', 'Bread, Pumpkin Seeds, Watermelon, Bread, Eggs', 'Sit-ups\r\n', '8', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(459, 'Karen', '2023-01-01', 'Grains, Beef, Meat, Honey, Rice', 'Squats And Lunges\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(460, 'Karen', '2023-01-01', 'Corn, Pumpkin Seeds, Coconut Juice, Potato, Pumpkin Seeds', 'Jogging ', '10', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(461, 'Karen', '2023-01-01', 'Cheese, Beef, Parsley, Cereals, Fish', 'Sit-ups\r\n', '11', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(462, 'Karen', '2023-01-01', 'Pasta, Crab, Carrots, Potato, Pumpkin Seeds', 'Push-up \r\n', '12', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(463, 'Karen', '2023-01-01', 'Milk, Crab, Carrots, Honey, Fish', 'Jumping\r\n', '13', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(464, 'Karen', '2023-01-01', 'Bread, Fish, Oranges, Wheats, Pumpkin Seeds', 'Push-up \r\n', '14', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(465, 'Karen', '2023-01-01', 'Sweet Potato, Beef, Bananas, Wheats, Cheese', 'Catching Balls \r\n', '15', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(466, 'Karen', '2023-01-01', 'Pasta, Beef, Chicken, Cereals, Crab', 'Catching Balls \r\n', '16', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(467, 'Karen', '2023-01-01', 'Bread, Pumpkin Seeds, Peanuts, Pasta, Cheese', 'Jumping\r\n', '17', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(468, 'Karen', '2023-01-01', 'Grains, Pumpkin Seeds, Monggo, Bread, Chicken', 'Squats And Lunges\r\n', '18', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(469, 'Karen', '2023-01-01', 'Oats, Crab, Chicken, Pasta, Cheese', 'Push-up \r\n', '19', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(470, 'Karen', '2023-01-01', 'Corn, Fish, Monggo, Cheese, Eggs', 'Push-up \r\n', '20', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(471, 'Karen', '2023-01-01', 'Potato, Rice, Coconut Juice, Corn, Fish', 'Squats And Lunges\r\n', '21', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(472, 'Karen', '2023-01-01', 'Potato, Fish, Parsley, Pasta, Beef', 'Jumping\r\n', '22', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(473, 'Karen', '2023-01-01', 'Corn, Crab, Meat, Potato, Rice', 'Squats And Lunges\r\n', '23', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(474, 'Karen', '2023-01-01', 'Oats, Rice, Carrots, Milk, Chicken', 'Squats And Lunges\r\n', '24', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(475, 'Karen', '2023-01-01', 'Bread, Pumpkin Seeds, Pineapple, Oats, Eggs', 'Stretching', '25', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(476, 'Karen', '2023-01-01', 'Nuts, Crab, Oranges, Grains, Eggs', 'Jogging ', '26', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(477, 'Karen', '2023-01-01', 'Biscuits, Crab, Saluyot, Pasta, Fish', 'Squats And Lunges\r\n', '27', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(478, 'Karen', '2023-01-01', 'Oats, Rice, Cauliflower, Potato, Beef', 'Stretching', '28', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(479, 'Karen', '2023-01-01', 'Eggs, Crab, Eggs, Nuts, Rice', 'Bear Crawl\r\n', '29', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(480, 'Karen', '2023-01-01', 'Pasta, Crab, Broccoli, Biscuits, Fish', 'Squats And Lunges\r\n', '30', 0, 0, '2023-01-31', '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(481, 'Kadeem', '2023-01-01', 'Sweet Potato, Beef, Broccoli, Wheats, Beef', 'Catching Balls \r\n', '1', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(482, 'Kadeem', '2023-01-01', 'Cheese, Cheese, Broccoli, Honey, Fish', 'Jumping\r\n', '2', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(483, 'Kadeem', '2023-01-01', 'Bread, Fish, Chicken, Potato, Eggs', 'Jumping\r\n', '3', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(484, 'Kadeem', '2023-01-01', 'Corn, Cheese, Coconut Juice, Nuts, Crab', 'Squats And Lunges\r\n', '4', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(485, 'Kadeem', '2023-01-01', 'Corn, Rice, Chocolate, Sweet Potato, Crab', 'Bear Crawl\r\n', '5', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(486, 'Kadeem', '2023-01-01', 'Wheats, Fish, Saluyot, Bread, Eggs', 'Stretching', '6', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(487, 'Kadeem', '2023-01-01', 'Milk, Chicken, Chocolate, Bread, Beef', 'Jogging ', '7', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(488, 'Kadeem', '2023-01-01', 'Wheats, Cheese, Bell Peppers, Honey, Eggs', 'Catching Balls \r\n', '8', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(489, 'Kadeem', '2023-01-01', 'Biscuits, Rice, Broccoli, Nuts, Eggs', 'Squats And Lunges\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(490, 'Kadeem', '2023-01-01', 'Grains, Chicken, Spinach, Pasta, Beef', 'Sit-ups\r\n', '10', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(491, 'Kadeem', '2023-01-01', 'Milk, Cheese, Coconut Juice, Biscuits, Rice', 'Squats And Lunges\r\n', '11', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(492, 'Kadeem', '2023-01-01', 'Wheats, Chicken, Spinach, Bread, Eggs', 'Jumping\r\n', '12', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(493, 'Kadeem', '2023-01-01', 'Oats, Chicken, Carrots, Corn, Beef', 'Push-up \r\n', '13', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(494, 'Kadeem', '2023-01-01', 'Biscuits, Chicken, Meat, Biscuits, Chicken', 'Jogging ', '14', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(495, 'Kadeem', '2023-01-01', 'Eggs, Rice, Curry Chicken, Sweet Potato, Chicken', 'Sit-ups\r\n', '15', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(496, 'Kadeem', '2023-01-01', 'Cereals, Crab, Bell Peppers, Biscuits, Pumpkin Seeds', 'Jogging ', '16', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(497, 'Kadeem', '2023-01-01', 'Noodles, Pumpkin Seeds, Apples, Potato, Chicken', 'Push-up \r\n', '17', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(498, 'Kadeem', '2023-01-01', 'Biscuits, Pumpkin Seeds, Chicken, Noodles, Cheese', 'Catching Balls \r\n', '18', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(499, 'Kadeem', '2023-01-01', 'Eggs, Fish, Carrots, Grains, Beef', 'Bear Crawl\r\n', '19', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(500, 'Kadeem', '2023-01-01', 'Pasta, Fish, Spinach, Biscuits, Chicken', 'Sit-ups\r\n', '20', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(501, 'Kadeem', '2023-01-01', 'Biscuits, Fish, Spinach, Cheese, Beef', 'Sit-ups\r\n', '21', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(502, 'Kadeem', '2023-01-01', 'Noodles, Rice, Malunggay, Biscuits, Beef', 'Catching Balls \r\n', '22', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(503, 'Kadeem', '2023-01-01', 'Cereals, Pumpkin Seeds, Corn, Cereals, Rice', 'Stretching', '23', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(504, 'Kadeem', '2023-01-01', 'Honey, Crab, Curry Chicken, Potato, Cheese', 'Jumping\r\n', '24', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(505, 'Kadeem', '2023-01-01', 'Grains, Eggs, Pineapple, Milk, Cheese', 'Bear Crawl\r\n', '25', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(506, 'Kadeem', '2023-01-01', 'Noodles, Fish, Saluyot, Cereals, Beef', 'Squats And Lunges\r\n', '26', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(507, 'Kadeem', '2023-01-01', 'Eggs, Crab, Saluyot, Grains, Crab', 'Bear Crawl\r\n', '27', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(508, 'Kadeem', '2023-01-01', 'Pasta, Chicken, Peanuts, Cheese, Crab', 'Push-up \r\n', '28', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(509, 'Kadeem', '2023-01-01', 'Eggs, Fish, Seaweed, Biscuits, Eggs', 'Push-up \r\n', '29', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(510, 'Kadeem', '2023-01-01', 'Honey, Cheese, Potato, Pasta, Beef', 'Squats And Lunges\r\n', '30', 0, 0, '2023-01-31', '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(511, 'Timothy', '2023-01-01', 'Potato, Rice, Pineapple, Corn, Beef', 'Bear Crawl\r\n', '1', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(512, 'Timothy', '2023-01-01', 'Nuts, Beef, Oranges, Potato, Fish', 'Squats And Lunges\r\n', '2', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(513, 'Timothy', '2023-01-01', 'Nuts, Eggs, Seaweed, Sweet Potato, Crab', 'Bear Crawl\r\n', '3', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(514, 'Timothy', '2023-01-01', 'Milk, Fish, Bell Peppers, Noodles, Cheese', 'Sit-ups\r\n', '4', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(515, 'Timothy', '2023-01-01', 'Oats, Eggs, Carrots, Eggs, Chicken', 'Jogging ', '5', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(516, 'Timothy', '2023-01-01', 'Eggs, Cheese, Eggs, Corn, Pumpkin Seeds', 'Sit-ups\r\n', '6', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(517, 'Timothy', '2023-01-01', 'Bread, Chicken, Eggs, Bread, Chicken', 'Push-up \r\n', '7', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(518, 'Timothy', '2023-01-01', 'Noodles, Pumpkin Seeds, Monggo, Wheats, Rice', 'Stretching', '8', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(519, 'Timothy', '2023-01-01', 'Noodles, Cheese, Mangos, Corn, Rice', 'Squats And Lunges\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(520, 'Timothy', '2023-01-01', 'Grains, Rice, Peanuts, Corn, Pumpkin Seeds', 'Squats And Lunges\r\n', '10', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(521, 'Timothy', '2023-01-01', 'Eggs, Fish, Lemon, Pasta, Rice', 'Catching Balls \r\n', '11', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(522, 'Timothy', '2023-01-01', 'Corn, Fish, Pineapple, Cereals, Beef', 'Push-up \r\n', '12', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(523, 'Timothy', '2023-01-01', 'Cereals, Cheese, Pineapple, Noodles, Cheese', 'Bear Crawl\r\n', '13', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(524, 'Timothy', '2023-01-01', 'Grains, Cheese, Meat, Honey, Cheese', 'Bear Crawl\r\n', '14', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(525, 'Timothy', '2023-01-01', 'Pasta, Crab, Chocolate, Honey, Eggs', 'Stretching', '15', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(526, 'Timothy', '2023-01-01', 'Milk, Cheese, Corn, Honey, Crab', 'Bear Crawl\r\n', '16', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(527, 'Timothy', '2023-01-01', 'Sweet Potato, Cheese, Meat, Corn, Beef', 'Jogging ', '17', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(528, 'Timothy', '2023-01-01', 'Pasta, Chicken, Apples, Pasta, Pumpkin Seeds', 'Sit-ups\r\n', '18', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(529, 'Timothy', '2023-01-01', 'Grains, Crab, Chicken, Cheese, Rice', 'Push-up \r\n', '19', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(530, 'Timothy', '2023-01-01', 'Oats, Chicken, Bananas, Cereals, Pumpkin Seeds', 'Catching Balls \r\n', '20', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(531, 'Timothy', '2023-01-01', 'Cheese, Crab, Avocados, Biscuits, Eggs', 'Jogging ', '21', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(532, 'Timothy', '2023-01-01', 'Cheese, Pumpkin Seeds, Seaweed, Honey, Beef', 'Jogging ', '22', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(533, 'Timothy', '2023-01-01', 'Grains, Eggs, Meat, Nuts, Chicken', 'Catching Balls \r\n', '23', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(534, 'Timothy', '2023-01-01', 'Cereals, Eggs, Watermelon, Sweet Potato, Chicken', 'Catching Balls \r\n', '24', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(535, 'Timothy', '2023-01-01', 'Nuts, Eggs, Watermelon, Grains, Cheese', 'Squats And Lunges\r\n', '25', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(536, 'Timothy', '2023-01-01', 'Noodles, Beef, Potato, Biscuits, Chicken', 'Stretching', '26', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(537, 'Timothy', '2023-01-01', 'Wheats, Pumpkin Seeds, Cauliflower, Milk, Pumpkin Seeds', 'Jumping\r\n', '27', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(538, 'Timothy', '2023-01-01', 'Oats, Pumpkin Seeds, Avocados, Eggs, Beef', 'Squats And Lunges\r\n', '28', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(539, 'Timothy', '2023-01-01', 'Pasta, Pumpkin Seeds, Cauliflower, Honey, Rice', 'Bear Crawl\r\n', '29', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(540, 'Timothy', '2023-01-01', 'Nuts, Chicken, Seaweed, Nuts, Chicken', 'Catching Balls \r\n', '30', 0, 0, '2023-01-31', '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(541, 'Phillip', '2023-01-01', 'Pasta, Chicken, Peanuts, Cheese, Rice', 'Jogging ', '1', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(542, 'Phillip', '2023-01-01', 'Cheese, Fish, Monggo, Sweet Potato, Eggs', 'Squats And Lunges\r\n', '2', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(543, 'Phillip', '2023-01-01', 'Cereals, Fish, Carrots, Pasta, Cheese', 'Squats And Lunges\r\n', '3', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(544, 'Phillip', '2023-01-01', 'Cheese, Cheese, Seaweed, Sweet Potato, Crab', 'Catching Balls \r\n', '4', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(545, 'Phillip', '2023-01-01', 'Cheese, Cheese, Oranges, Oats, Crab', 'Squats And Lunges\r\n', '5', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(546, 'Phillip', '2023-01-01', 'Pasta, Rice, Ham & Cheese, Oats, Rice', 'Jumping\r\n', '6', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(547, 'Phillip', '2023-01-01', 'Cheese, Crab, Peanuts, Honey, Crab', 'Squats And Lunges\r\n', '7', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(548, 'Phillip', '2023-01-01', 'Oats, Cheese, Bell Peppers, Potato, Cheese', 'Bear Crawl\r\n', '8', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(549, 'Phillip', '2023-01-01', 'Potato, Cheese, Meat, Biscuits, Cheese', 'Jumping\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(550, 'Phillip', '2023-01-01', 'Biscuits, Cheese, Chocolate, Milk, Beef', 'Jogging ', '10', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(551, 'Phillip', '2023-01-01', 'Wheats, Fish, Bananas, Potato, Cheese', 'Push-up \r\n', '11', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(552, 'Phillip', '2023-01-01', 'Eggs, Cheese, Coconut Juice, Wheats, Pumpkin Seeds', 'Squats And Lunges\r\n', '12', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(553, 'Phillip', '2023-01-01', 'Sweet Potato, Fish, Oranges, Cheese, Beef', 'Bear Crawl\r\n', '13', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(554, 'Phillip', '2023-01-01', 'Honey, Pumpkin Seeds, Chocolate, Sweet Potato, Chicken', 'Push-up \r\n', '14', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(555, 'Phillip', '2023-01-01', 'Cheese, Pumpkin Seeds, Avocados, Oats, Crab', 'Jumping\r\n', '15', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(556, 'Phillip', '2023-01-01', 'Grains, Cheese, Bananas, Cheese, Eggs', 'Jumping\r\n', '16', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(557, 'Phillip', '2023-01-01', 'Cereals, Fish, Chocolate, Milk, Rice', 'Catching Balls \r\n', '17', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(558, 'Phillip', '2023-01-01', 'Nuts, Cheese, Curry Chicken, Grains, Pumpkin Seeds', 'Bear Crawl\r\n', '18', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(559, 'Phillip', '2023-01-01', 'Potato, Pumpkin Seeds, Seaweed, Sweet Potato, Rice', 'Stretching', '19', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(560, 'Phillip', '2023-01-01', 'Wheats, Fish, Coconut Juice, Oats, Cheese', 'Catching Balls \r\n', '20', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(561, 'Phillip', '2023-01-01', 'Biscuits, Beef, Malunggay, Cheese, Chicken', 'Jumping\r\n', '21', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(562, 'Phillip', '2023-01-01', 'Cheese, Pumpkin Seeds, Coconut Juice, Potato, Chicken', 'Bear Crawl\r\n', '22', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(563, 'Phillip', '2023-01-01', 'Honey, Beef, Eggs, Wheats, Beef', 'Squats And Lunges\r\n', '23', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(564, 'Phillip', '2023-01-01', 'Pasta, Cheese, Monggo, Cereals, Beef', 'Squats And Lunges\r\n', '24', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(565, 'Phillip', '2023-01-01', 'Eggs, Rice, Saluyot, Noodles, Eggs', 'Jogging ', '25', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(566, 'Phillip', '2023-01-01', 'Pasta, Fish, Apples, Nuts, Cheese', 'Bear Crawl\r\n', '26', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(567, 'Phillip', '2023-01-01', 'Corn, Fish, Ham & Cheese, Sweet Potato, Rice', 'Jumping\r\n', '27', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(568, 'Phillip', '2023-01-01', 'Honey, Eggs, Potato, Noodles, Eggs', 'Squats And Lunges\r\n', '28', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(569, 'Phillip', '2023-01-01', 'Grains, Cheese, Chicken, Milk, Beef', 'Squats And Lunges\r\n', '29', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(570, 'Phillip', '2023-01-01', 'Pasta, Beef, Potato, Grains, Cheese', 'Bear Crawl\r\n', '30', 0, 0, '2023-01-31', '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(571, 'Berk', '2023-01-01', 'Nuts, Crab, Stir Fried Tofu, Corn, Chicken', 'Push-up \r\n', '1', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(572, 'Berk', '2023-01-01', 'Pasta, Cheese, Potato, Pasta, Beef', 'Push-up \r\n', '2', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(573, 'Berk', '2023-01-01', 'Grains, Cheese, Carrots, Nuts, Chicken', 'Jogging ', '3', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(574, 'Berk', '2023-01-01', 'Eggs, Beef, Bell Peppers, Milk, Beef', 'Bear Crawl\r\n', '4', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(575, 'Berk', '2023-01-01', 'Cereals, Cheese, Stir Fried Tofu, Milk, Eggs', 'Sit-ups\r\n', '5', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(576, 'Berk', '2023-01-01', 'Cereals, Rice, Oranges, Nuts, Crab', 'Catching Balls \r\n', '6', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(577, 'Berk', '2023-01-01', 'Cheese, Cheese, Spinach, Eggs, Pumpkin Seeds', 'Jogging ', '7', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(578, 'Berk', '2023-01-01', 'Grains, Fish, Mangos, Potato, Crab', 'Catching Balls \r\n', '8', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(579, 'Berk', '2023-01-01', 'Noodles, Rice, Bananas, Grains, Cheese', 'Sit-ups\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(580, 'Berk', '2023-01-01', 'Biscuits, Rice, Saluyot, Corn, Cheese', 'Catching Balls \r\n', '10', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(581, 'Berk', '2023-01-01', 'Corn, Chicken, Avocados, Honey, Cheese', 'Bear Crawl\r\n', '11', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(582, 'Berk', '2023-01-01', 'Biscuits, Fish, Stir Fried Tofu, Wheats, Pumpkin Seeds', 'Catching Balls \r\n', '12', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(583, 'Berk', '2023-01-01', 'Grains, Crab, Monggo, Oats, Cheese', 'Catching Balls \r\n', '13', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(584, 'Berk', '2023-01-01', 'Nuts, Chicken, Seaweed, Cheese, Crab', 'Bear Crawl\r\n', '14', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(585, 'Berk', '2023-01-01', 'Grains, Chicken, Malunggay, Nuts, Eggs', 'Stretching', '15', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(586, 'Berk', '2023-01-01', 'Noodles, Beef, Malunggay, Grains, Pumpkin Seeds', 'Bear Crawl\r\n', '16', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(587, 'Berk', '2023-01-01', 'Oats, Crab, Saluyot, Nuts, Crab', 'Jumping\r\n', '17', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(588, 'Berk', '2023-01-01', 'Biscuits, Beef, Seaweed, Bread, Eggs', 'Sit-ups\r\n', '18', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(589, 'Berk', '2023-01-01', 'Cheese, Eggs, Broccoli, Biscuits, Rice', 'Stretching', '19', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(590, 'Berk', '2023-01-01', 'Bread, Fish, Eggs, Noodles, Rice', 'Jogging ', '20', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(591, 'Berk', '2023-01-01', 'Biscuits, Rice, Avocados, Bread, Beef', 'Jumping\r\n', '21', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(592, 'Berk', '2023-01-01', 'Biscuits, Pumpkin Seeds, Chicken, Potato, Rice', 'Bear Crawl\r\n', '22', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(593, 'Berk', '2023-01-01', 'Wheats, Fish, Lemon, Cheese, Cheese', 'Push-up \r\n', '23', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(594, 'Berk', '2023-01-01', 'Sweet Potato, Pumpkin Seeds, Coconut Juice, Honey, Crab', 'Jogging ', '24', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(595, 'Berk', '2023-01-01', 'Cereals, Pumpkin Seeds, Peanuts, Potato, Crab', 'Squats And Lunges\r\n', '25', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(596, 'Berk', '2023-01-01', 'Potato, Beef, Corn, Sweet Potato, Rice', 'Jogging ', '26', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(597, 'Berk', '2023-01-01', 'Cereals, Pumpkin Seeds, Broccoli, Corn, Crab', 'Catching Balls \r\n', '27', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(598, 'Berk', '2023-01-01', 'Bread, Beef, Watermelon, Bread, Eggs', 'Stretching', '28', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(599, 'Berk', '2023-01-01', 'Potato, Chicken, Saluyot, Pasta, Chicken', 'Bear Crawl\r\n', '29', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(600, 'Berk', '2023-01-01', 'Milk, Chicken, Parsley, Honey, Cheese', 'Bear Crawl\r\n', '30', 0, 0, '2023-01-31', '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(601, 'Isadora', '2023-01-01', 'Potato, Beef, Parsley, Grains, Pumpkin Seeds', 'Jogging ', '1', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(602, 'Isadora', '2023-01-01', 'Corn, Cheese, Watermelon, Grains, Chicken', 'Squats And Lunges\r\n', '2', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(603, 'Isadora', '2023-01-01', 'Sweet Potato, Chicken, Pineapple, Grains, Cheese', 'Stretching', '3', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(604, 'Isadora', '2023-01-01', 'Wheats, Chicken, Parsley, Noodles, Fish', 'Stretching', '4', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(605, 'Isadora', '2023-01-01', 'Milk, Beef, Curry Chicken, Noodles, Chicken', 'Squats And Lunges\r\n', '5', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(606, 'Isadora', '2023-01-01', 'Cereals, Beef, Meat, Grains, Fish', 'Squats And Lunges\r\n', '6', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(607, 'Isadora', '2023-01-01', 'Milk, Pumpkin Seeds, Broccoli, Pasta, Fish', 'Jumping\r\n', '7', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(608, 'Isadora', '2023-01-01', 'Sweet Potato, Crab, Carrots, Milk, Eggs', 'Stretching', '8', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(609, 'Isadora', '2023-01-01', 'Cereals, Crab, Seaweed, Cheese, Beef', 'Bear Crawl\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(610, 'Isadora', '2023-01-01', 'Grains, Fish, Watermelon, Potato, Rice', 'Squats And Lunges\r\n', '10', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(611, 'Isadora', '2023-01-01', 'Potato, Beef, Broccoli, Cereals, Eggs', 'Sit-ups\r\n', '11', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(612, 'Isadora', '2023-01-01', 'Wheats, Fish, Lemon, Milk, Beef', 'Jogging ', '12', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(613, 'Isadora', '2023-01-01', 'Milk, Cheese, Avocados, Milk, Beef', 'Bear Crawl\r\n', '13', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(614, 'Isadora', '2023-01-01', 'Nuts, Eggs, Ham & Cheese, Pasta, Beef', 'Push-up \r\n', '14', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(615, 'Isadora', '2023-01-01', 'Noodles, Chicken, Pineapple, Oats, Cheese', 'Bear Crawl\r\n', '15', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(616, 'Isadora', '2023-01-01', 'Biscuits, Cheese, Bell Peppers, Biscuits, Rice', 'Push-up \r\n', '16', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(617, 'Isadora', '2023-01-01', 'Nuts, Pumpkin Seeds, Lemon, Sweet Potato, Eggs', 'Jogging ', '17', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(618, 'Isadora', '2023-01-01', 'Corn, Cheese, Chocolate, Potato, Chicken', 'Sit-ups\r\n', '18', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(619, 'Isadora', '2023-01-01', 'Milk, Cheese, Ham & Cheese, Potato, Fish', 'Stretching', '19', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(620, 'Isadora', '2023-01-01', 'Bread, Rice, Peanuts, Grains, Pumpkin Seeds', 'Jumping\r\n', '20', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(621, 'Isadora', '2023-01-01', 'Eggs, Chicken, Malunggay, Honey, Pumpkin Seeds', 'Bear Crawl\r\n', '21', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(622, 'Isadora', '2023-01-01', 'Oats, Rice, Monggo, Cereals, Chicken', 'Bear Crawl\r\n', '22', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(623, 'Isadora', '2023-01-01', 'Bread, Fish, Chicken, Pasta, Cheese', 'Push-up \r\n', '23', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(624, 'Isadora', '2023-01-01', 'Cheese, Fish, Seaweed, Grains, Fish', 'Jumping\r\n', '24', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(625, 'Isadora', '2023-01-01', 'Grains, Cheese, Stir Fried Tofu, Cheese, Rice', 'Squats And Lunges\r\n', '25', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(626, 'Isadora', '2023-01-01', 'Biscuits, Beef, Eggs, Corn, Rice', 'Jumping\r\n', '26', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(627, 'Isadora', '2023-01-01', 'Oats, Fish, Chicken, Grains, Eggs', 'Jumping\r\n', '27', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(628, 'Isadora', '2023-01-01', 'Biscuits, Crab, Eggs, Grains, Rice', 'Push-up \r\n', '28', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(629, 'Isadora', '2023-01-01', 'Wheats, Rice, Watermelon, Oats, Cheese', 'Jumping\r\n', '29', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(630, 'Isadora', '2023-01-01', 'Oats, Fish, Apples, Sweet Potato, Cheese', 'Bear Crawl\r\n', '30', 0, 0, '2023-01-31', '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(631, 'Willa', '2023-01-01', 'Sweet Potato, Cheese, Potato, Noodles, Rice', 'Jumping\r\n', '1', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(632, 'Willa', '2023-01-01', 'Cereals, Crab, Monggo, Cereals, Rice', 'Push-up \r\n', '2', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(633, 'Willa', '2023-01-01', 'Cheese, Beef, Cauliflower, Oats, Beef', 'Catching Balls \r\n', '3', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(634, 'Willa', '2023-01-01', 'Honey, Eggs, Ham & Cheese, Milk, Pumpkin Seeds', 'Catching Balls \r\n', '4', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(635, 'Willa', '2023-01-01', 'Wheats, Pumpkin Seeds, Stir Fried Tofu, Wheats, Pumpkin Seeds', 'Stretching', '5', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(636, 'Willa', '2023-01-01', 'Cheese, Eggs, Stir Fried Tofu, Potato, Fish', 'Jogging ', '6', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(637, 'Willa', '2023-01-01', 'Nuts, Rice, Watermelon, Honey, Crab', 'Jumping\r\n', '7', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(638, 'Willa', '2023-01-01', 'Biscuits, Eggs, Meat, Cheese, Beef', 'Bear Crawl\r\n', '8', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(639, 'Willa', '2023-01-01', 'Pasta, Pumpkin Seeds, Apples, Cereals, Eggs', 'Squats And Lunges\r\n', '9', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(640, 'Willa', '2023-01-01', 'Pasta, Beef, Lemon, Noodles, Chicken', 'Jumping\r\n', '10', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(641, 'Willa', '2023-01-01', 'Biscuits, Eggs, Spinach, Biscuits, Chicken', 'Jumping\r\n', '11', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(642, 'Willa', '2023-01-01', 'Biscuits, Fish, Spinach, Eggs, Fish', 'Stretching', '12', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(643, 'Willa', '2023-01-01', 'Sweet Potato, Beef, Pineapple, Wheats, Eggs', 'Catching Balls \r\n', '13', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(644, 'Willa', '2023-01-01', 'Honey, Eggs, Coconut Juice, Potato, Eggs', 'Stretching', '14', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(645, 'Willa', '2023-01-01', 'Nuts, Fish, Bell Peppers, Nuts, Chicken', 'Catching Balls \r\n', '15', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(646, 'Willa', '2023-01-01', 'Milk, Fish, Coconut Juice, Grains, Rice', 'Sit-ups\r\n', '16', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(647, 'Willa', '2023-01-01', 'Potato, Beef, Coconut Juice, Honey, Eggs', 'Catching Balls \r\n', '17', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(648, 'Willa', '2023-01-01', 'Wheats, Chicken, Ham & Cheese, Biscuits, Fish', 'Stretching', '18', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(649, 'Willa', '2023-01-01', 'Wheats, Fish, Meat, Milk, Chicken', 'Catching Balls \r\n', '19', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(650, 'Willa', '2023-01-01', 'Noodles, Rice, Chocolate, Oats, Rice', 'Catching Balls \r\n', '20', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(651, 'Willa', '2023-01-01', 'Potato, Chicken, Eggs, Corn, Fish', 'Sit-ups\r\n', '21', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(652, 'Willa', '2023-01-01', 'Eggs, Chicken, Seaweed, Bread, Pumpkin Seeds', 'Stretching', '22', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(653, 'Willa', '2023-01-01', 'Wheats, Crab, Pineapple, Corn, Fish', 'Stretching', '23', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(654, 'Willa', '2023-01-01', 'Sweet Potato, Crab, Saluyot, Potato, Cheese', 'Jogging ', '24', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(655, 'Willa', '2023-01-01', 'Grains, Crab, Coconut Juice, Wheats, Fish', 'Stretching', '25', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(656, 'Willa', '2023-01-01', 'Eggs, Crab, Monggo, Eggs, Fish', 'Catching Balls \r\n', '26', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(657, 'Willa', '2023-01-01', 'Pasta, Beef, Pineapple, Honey, Beef', 'Jogging ', '27', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(658, 'Willa', '2023-01-01', 'Biscuits, Crab, Monggo, Corn, Crab', 'Bear Crawl\r\n', '28', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(659, 'Willa', '2023-01-01', 'Biscuits, Beef, Curry Chicken, Bread, Rice', 'Jumping\r\n', '29', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(660, 'Willa', '2023-01-01', 'Eggs, Chicken, Malunggay, Cheese, Crab', 'Sit-ups\r\n', '30', 0, 0, '2023-01-31', '2023-01-01 08:33:37', '2023-01-01 08:33:37');

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
(9, 1, '0', 123, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '12', '2022-12-29 08:37:53', '2022-12-29 08:37:53'),
(10, 1, '0', 123, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', '12', '2022-12-29 08:49:43', '2022-12-29 08:49:43'),
(11, 2, 'Jelani', 0, 'What was your favorite food as a child?', '123', 'What is the name of your first pet?', 'haha', '2023-01-01 06:09:51', '2023-01-01 06:09:51'),
(12, 2, 'Jelani', 0, 'What was your favorite food as a child?', 'haha', 'What is the name of your first pet?', '123', '2023-01-01 07:53:50', '2023-01-01 07:53:50'),
(13, 2, 'Jelani', 0, 'What was your favorite food as a child?', 'hahaha', 'Who is your first crush?', '123', '2023-01-01 07:54:33', '2023-01-01 07:54:33'),
(14, 2, 'Jelani', 0, 'What was your favorite food as a child?', 'hahaha', 'What elementary school did you attend?', '123', '2023-01-01 07:55:06', '2023-01-01 07:55:06'),
(15, 2, 'Jelani', 0, 'What was your favorite food as a child?', '123123', 'Who is your first crush?', 'hahaha', '2023-01-01 07:55:35', '2023-01-01 07:55:35'),
(16, 2, 'Jelani', 0, 'What was your favorite food as a child?', '123', 'What was your first car?', '15', '2023-01-01 07:56:05', '2023-01-01 07:56:05'),
(17, 2, 'Jelani', 0, 'What was your favorite food as a child?', 'hahaha', 'Who is your first crush?', '123', '2023-01-01 08:15:53', '2023-01-01 08:15:53'),
(18, 2, 'Jelani', 0, 'What was your favorite food as a child?', 'haha', 'Who is your first crush?', '123', '2023-01-01 08:18:05', '2023-01-01 08:18:05'),
(19, 2, 'Jelani', 0, 'What was your favorite food as a child?', 'haha', 'What was your first car?', '123', '2023-01-01 08:33:40', '2023-01-01 08:33:40');

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
(46, 'Jelani', 'Mathew ahhahahahahahahaha', 'Dalisay123123', 'Hahahahha', '2023-01-01', '', 'ROANNA', 'FATIMA', 'RINAH', 'KAREEM', 'JAEL', 'ROTH', '55555', 0x323032322d31302d30375431315f30345f35312e706e67, 'Grade 1', 'tite', '0000-00-00 00:00:00', '2023-01-01 07:41:43'),
(48, 'Colby', 'Yetta', 'Buckminster', 'Lesley', '1972-10-04', 'Female', 'ARSENIO', 'HAYDEN', 'SERINA', 'NYSSA', 'JARED', 'ELIZABETH', '18230', 0x3331353237313134325f313137323237333938333637343139365f353631303534333633303338363538373134335f6e2e6a7067, 'Grade 2', 'Hope', '2023-01-01 07:53:38', '2023-01-01 07:53:38'),
(49, 'Karen', 'Tucker', 'Blake', 'Grant', '1977-08-21', 'Female', 'ORLI', 'QUYN', 'YOSHIO', 'FULLER', 'JILLIAN', 'YOLANDA', '48760', 0x323032322d31302d30375431315f30345f35312e706e67, 'Grade 3', 'Cheryl', '2023-01-01 07:54:23', '2023-01-01 07:54:23'),
(50, 'Kadeem', 'Todd', 'Reagan', 'Portia', '1972-11-05', 'Female', 'NOELLE', 'AURELIA', 'CHRISTOPHER', 'GAGE', 'KYLAN', 'INGA', '59875', 0x70726566657272656420636f756e7472792e504e47, 'Grade 6', 'Stacey', '2023-01-01 07:54:54', '2023-01-01 07:54:54'),
(51, 'Timothy', 'Price', 'Linus', 'Coby', '2018-07-29', 'Male', 'SHARON', 'GRIFFIN', 'JORDAN', 'GISELLE', 'FREYA', 'HARPER', '82483', 0x3331353333313530315f3637323830333736313231343136325f353734333231383235333433333035363131325f6e2e6a7067, 'Grade 3', 'Nerea', '2023-01-01 07:55:25', '2023-01-01 07:55:25'),
(52, 'Phillip', 'Kalia', 'Tasha', 'Cody', '2002-01-11', 'Male', 'AMOS', 'MACKENSIE', 'CEDRIC', 'AHMED', 'TIGER', 'NEREA', '52685', 0x3331353230343737315f313038363436393230383639353934335f3839303432303536383031353139383538385f6e2e6a7067, 'Grade 2', 'Flynn', '2023-01-01 07:55:57', '2023-01-01 07:55:57'),
(53, 'Berk', 'Christopher', 'Wayne', 'Isadora', '1983-07-11', 'Female', 'MACY', 'BRIAR', 'BETHANY', 'XAVIER', 'VIRGINIA', 'ZIA', '38062', 0x3331303234333335325f3432393136393131393335383231315f373538343835343739343334333031393933355f6e2e6a7067, 'Grade 5', 'Evan', '2023-01-01 08:15:46', '2023-01-01 08:15:46'),
(54, 'Isadora', 'Anne', 'Gannon', 'Kyle', '1983-04-15', 'Female', 'JACKSON', 'YETTA', 'RUDYARD', 'VERNON', 'KITRA', 'ILLANA', '87199', 0x6161612e504e47, 'Grade 4', 'Brandon', '2023-01-01 08:17:56', '2023-01-01 08:17:56'),
(55, 'Willa', 'Garrett', 'Mannix', 'Alfreda', '1976-08-10', 'Female', 'CHAVA', 'JORDAN', 'TIGER', 'MAIA', 'CAMERON', 'ARDEN', '66576', 0x6161612e504e47, 'Grade 3', 'Mercedes', '2023-01-01 08:33:33', '2023-01-01 08:33:33');

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
(152, 'Jelani', 1, 1, '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(153, 'Jelani', 2, 0, '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(154, 'Jelani', 3, 1, '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(155, 'Jelani', 4, 0, '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(156, 'Jelani', 5, 1, '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(162, 'Colby', 1, 1, '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(163, 'Colby', 2, 0, '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(164, 'Colby', 3, 1, '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(165, 'Colby', 4, 1, '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(166, 'Colby', 5, 1, '2023-01-01 07:53:44', '2023-01-01 07:53:44'),
(167, 'Karen', 1, 1, '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(168, 'Karen', 2, 1, '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(169, 'Karen', 3, 1, '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(170, 'Karen', 4, 1, '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(171, 'Karen', 5, 1, '2023-01-01 07:54:28', '2023-01-01 07:54:28'),
(172, 'Kadeem', 1, 0, '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(173, 'Kadeem', 2, 0, '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(174, 'Kadeem', 3, 1, '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(175, 'Kadeem', 4, 1, '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(176, 'Kadeem', 5, 0, '2023-01-01 07:55:00', '2023-01-01 07:55:00'),
(177, 'Timothy', 1, 0, '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(178, 'Timothy', 2, 1, '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(179, 'Timothy', 3, 0, '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(180, 'Timothy', 4, 0, '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(181, 'Timothy', 5, 1, '2023-01-01 07:55:31', '2023-01-01 07:55:31'),
(182, 'Phillip', 1, 1, '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(183, 'Phillip', 2, 1, '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(184, 'Phillip', 3, 1, '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(185, 'Phillip', 4, 1, '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(186, 'Phillip', 5, 1, '2023-01-01 07:56:02', '2023-01-01 07:56:02'),
(187, 'Berk', 1, 1, '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(188, 'Berk', 2, 1, '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(189, 'Berk', 3, 1, '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(190, 'Berk', 4, 1, '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(191, 'Berk', 5, 1, '2023-01-01 08:15:49', '2023-01-01 08:15:49'),
(192, 'Isadora', 1, 0, '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(193, 'Isadora', 2, 0, '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(194, 'Isadora', 3, 0, '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(195, 'Isadora', 4, 1, '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(196, 'Isadora', 5, 1, '2023-01-01 08:18:02', '2023-01-01 08:18:02'),
(197, 'Willa', 1, 1, '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(198, 'Willa', 2, 1, '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(199, 'Willa', 3, 1, '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(200, 'Willa', 4, 1, '2023-01-01 08:33:37', '2023-01-01 08:33:37'),
(201, 'Willa', 5, 1, '2023-01-01 08:33:37', '2023-01-01 08:33:37');

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
(38, '202287551', 'qerocu@mailinator.com', 'Welcome@12345', 'Hyatt123123', 'Beck123', 'Rebecca', '+639156915704', 'ISABELLE', 'TEEGAN', 'JAYME', 'JARED', 'ROSALYN', 'ZEUS123', '59846', 'Female', 2, 0x3331383836333736325f313534363637373337393132393630365f363039373835383836373832303830343536315f6e2e6a7067, 'Jelani', '2022-12-27 03:58:28', '2022-12-27 03:58:28'),
(40, '202279429', 'rerorisiz@mailinator.com', 'Welcome@12345', 'Abra', 'Hunter', 'Ivy', '', 'ARSENIO', 'HAYDEN', 'SERINA', 'NYSSA', 'JARED', 'ELIZABETH', '18230', 'Female', 2, 0x3330363630383136325f3533333232333732313839373533385f323138373038343234393930383934323839365f6e2e706e67, 'Colby', '2023-01-01 07:53:38', '2023-01-01 07:53:38'),
(41, '202294129', 'lykamukab@mailinator.com', 'Welcome@12345', 'Odysseus', 'Ishmael', 'Kristen', '', 'ORLI', 'QUYN', 'YOSHIO', 'FULLER', 'JILLIAN', 'YOLANDA', '48760', 'Female', 2, 0x3331303039323838355f3436303135343031393235323639385f313736393337323730363136393430353537315f6e2e6a7067, 'Karen', '2023-01-01 07:54:23', '2023-01-01 07:54:23'),
(42, '202279667', 'cibex@mailinator.com', 'Welcome@12345', 'Kevin', 'Nathaniel', 'Riley', '', 'NOELLE', 'AURELIA', 'CHRISTOPHER', 'GAGE', 'KYLAN', 'INGA', '59875', 'Male', 2, 0x3331383836333736325f313534363637373337393132393630365f363039373835383836373832303830343536315f6e2e6a7067, 'Kadeem', '2023-01-01 07:54:54', '2023-01-01 07:54:54'),
(43, '202231686', 'nysohy@mailinator.com', 'Welcome@12345', 'Mercedes', 'Jamalia', 'Jade', '', 'SHARON', 'GRIFFIN', 'JORDAN', 'GISELLE', 'FREYA', 'HARPER', '82483', 'Female', 2, 0x6c6f6262795f312e6a7067, 'Timothy', '2023-01-01 07:55:25', '2023-01-01 07:55:25'),
(44, '202296591', 'kigitadypu@mailinator.com', 'Welcome@12345', 'Otto', 'Nomlanga', 'Shelley', '', 'AMOS', 'MACKENSIE', 'CEDRIC', 'AHMED', 'TIGER', 'NEREA', '52685', 'Male', 2, 0x39343134383030345f323832303930393232313336343734345f39373138383935393531353331323132385f6e2e6a7067, 'Phillip', '2023-01-01 07:55:57', '2023-01-01 07:55:57'),
(45, '202238688', 'vekevicehi@mailinator.com', 'Welcome@12345', 'Jasmine', 'Kelly', 'Charles', '', 'MACY', 'BRIAR', 'BETHANY', 'XAVIER', 'VIRGINIA', 'ZIA', '38062', 'Female', 2, 0x3330373335393738385f3430373433313236313433323236355f313331353234333836363836373235303733355f6e2e706e67, 'Berk', '2023-01-01 08:15:46', '2023-01-01 08:15:46'),
(46, '202237274', 'nijigyxag@mailinator.com', 'Welcome@12345', 'Matthew', 'Adam', 'Nicole', '', 'JACKSON', 'YETTA', 'RUDYARD', 'VERNON', 'KITRA', 'ILLANA', '87199', 'Male', 2, 0x3332303831373637385f3938363031393230323339323730365f313633373433343232333933313333343731385f6e2e6a7067, 'Isadora', '2023-01-01 08:17:56', '2023-01-01 08:17:56'),
(47, '202287497', 'nexazaqos@mailinator.com', 'Welcome@12345', 'Miranda', 'Jelani', 'Tanek', '', 'CHAVA', 'JORDAN', 'TIGER', 'MAIA', 'CAMERON', 'ARDEN', '66576', 'Male', 2, 0x3331353237373330395f3439373232343633353638393036305f343736343732313631393034333233393338385f6e2e6a7067, 'Willa', '2023-01-01 08:33:33', '2023-01-01 08:33:33');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=661;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
