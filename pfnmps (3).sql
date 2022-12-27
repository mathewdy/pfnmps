-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 10:03 AM
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
(42, 'Jelani', 27426819, 2005063, 0, 'Under Weight', '3', 'Eleanor', '2022-12-27 03:58:28', '0000-00-00 00:00:00');

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
(361, 'Jelani', '2022-12-27', 'Milk, Eggs, Apples, Milk, Eggs', 'Sit-ups\r\n', '1', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(362, 'Jelani', '2022-12-27', 'Noodles, Chicken, Stir Fried Tofu, Potato, Beef', 'Stretching', '2', 1, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(363, 'Jelani', '2022-12-27', 'Pasta, Fish, Bananas, Nuts, Crab', 'Catching Balls \r\n', '3', 1, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(364, 'Jelani', '2022-12-27', 'Oats, Fish, Malunggay, Bread, Pumpkin Seeds', 'Sit-ups\r\n', '4', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(365, 'Jelani', '2022-12-27', 'Bread, Beef, Broccoli, Milk, Chicken', 'Stretching', '5', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(366, 'Jelani', '2022-12-27', 'Wheats, Rice, Broccoli, Pasta, Rice', 'Push-up \r\n', '6', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(367, 'Jelani', '2022-12-27', 'Nuts, Chicken, Monggo, Wheats, Cheese', 'Bear Crawl\r\n', '7', 0, 1, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(368, 'Jelani', '2022-12-27', 'Eggs, Rice, Potato, Nuts, Beef', 'Stretching', '8', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(369, 'Jelani', '2022-12-27', 'Noodles, Cheese, Broccoli, Pasta, Pumpkin Seeds', 'Push-up \r\n', '9', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
(370, 'Jelani', '2022-12-27', 'Biscuits, Beef, Apples, Biscuits, Fish', 'Sit-ups\r\n', '10', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34'),
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
(390, 'Jelani', '2022-12-27', 'Corn, Crab, Broccoli, Cheese, Pumpkin Seeds', 'Push-up \r\n', '30', 0, 0, '2023-01-26', '2022-12-27 03:58:34', '2022-12-27 03:58:34');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `student_id` varchar(255) NOT NULL,
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

INSERT INTO `questions` (`id`, `student_id`, `question_1`, `answer_1`, `question_2`, `answer_2`, `date_time_created`, `date_time_updated`) VALUES
(7, 'Jelani', 'What is the name of your first pet?', '123', 'What was your first car?', '14', '2022-12-27 03:58:41', '2022-12-27 03:58:41');

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
(46, 'Jelani', 'Drew', 'Nelle', 'Allistair', '1975-03-30', 'Male', 'ISABELLE', 'TEEGAN', 'JAYME', 'JARED', 'ROSALYN', 'ZEUS', '59846', 0x3332303831373637385f3938363031393230323339323730365f313633373433343232333933313333343731385f6e2e6a7067, 'Grade 6', 'Urielle', '2022-12-27 03:58:28', '2022-12-27 03:58:28');

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
(156, 'Jelani', 5, 1, '2022-12-27 03:58:34', '2022-12-27 03:58:34');

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
(38, '202287551', 'qerocu@mailinator.com', 'Welcome@12345', 'Hyatt123123', 'Beck123', 'Rebecca', '+639156915704', 'ISABELLE', 'TEEGAN', 'JAYME', 'JARED', 'ROSALYN', 'ZEUS123', '59846', 'Female', 2, 0x3331383836333736325f313534363637373337393132393630365f363039373835383836373832303830343536315f6e2e6a7067, 'Jelani', '2022-12-27 03:58:28', '2022-12-27 03:58:28');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=391;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
