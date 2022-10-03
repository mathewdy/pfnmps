-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 11:10 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
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

INSERT INTO `admins` (`id`, `user_id`, `username`, `password`, `email`, `first_name`, `middle_name`, `last_name`, `gender`, `address`, `user_type`, `image`, `date_time_created`, `date_time_updated`) VALUES
(4, '123', 'admin', '123', 'mathewdalisay@gmail.com', '', '', '', 0, '', 1, '', '2022-07-04 00:56:30', '2022-07-04 00:56:30');

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
(4, 3, 'kiwis'),
(5, 3, 'cherries'),
(6, 3, 'bananas'),
(7, 3, 'oranges'),
(8, 3, 'grapes'),
(9, 3, 'guava'),
(10, 3, 'melon'),
(11, 3, 'strawberries'),
(12, 3, 'grapefruit'),
(13, 3, 'blackberries'),
(14, 3, 'avocados'),
(15, 3, 'plums'),
(16, 3, 'lemon'),
(17, 3, 'dragon fruit'),
(18, 3, 'pears'),
(19, 3, 'limes'),
(20, 3, 'pineapple'),
(21, 3, 'malunggay'),
(22, 3, 'saluyot'),
(23, 3, 'monggo'),
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
(11, 'mathew123', 23, 23, 23, 'Normal Weight', '', 'asdasdasdasdasdsad', '2022-07-06 08:01:14', '2022-07-06 08:01:14'),
(14, '129837', 210399, 1469, 0, 'Under Weight', '1', 'ijni', '2022-10-03 05:05:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nutritionists`
--

CREATE TABLE `nutritionists` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program_records`
--

CREATE TABLE `program_records` (
  `id` int(11) NOT NULL,
  `nutritionist_id` varchar(20) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `date_started` date NOT NULL,
  `accumulated_days` varchar(30) NOT NULL,
  `foods` varchar(255) NOT NULL,
  `exercises` varchar(255) NOT NULL,
  `day` text NOT NULL,
  `ended_day` date NOT NULL,
  `date_time_created` datetime NOT NULL,
  `date_time_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_records`
--

INSERT INTO `program_records` (`id`, `nutritionist_id`, `student_id`, `date_started`, `accumulated_days`, `foods`, `exercises`, `day`, `ended_day`, `date_time_created`, `date_time_updated`) VALUES
(2, '', '129837', '2022-10-03', '', 'Corn, Fish, Bananas, Cereals, Fish', 'Sit-ups\r\n', '1', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00'),
(3, '', '129837', '2022-10-03', '', 'Bread, Cheese, Lemon, Wheats, Crab', 'Stretching', '2', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00'),
(4, '', '129837', '2022-10-03', '', 'Bread, Cheese, Watermelon, Sweet Potato, Beef', 'Jumping\r\n', '3', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00'),
(5, '', '129837', '2022-10-03', '', 'Bread, Cheese, Melon, Biscuits, Pumpkin Seeds', 'Jumping\r\n', '4', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00'),
(6, '', '129837', '2022-10-03', '', 'Eggs, Rice, Lemon, Cereals, Pumpkin Seeds', 'Squats And Lunges\r\n', '5', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00'),
(7, '', '129837', '2022-10-03', '', 'Pasta, Rice, Malunggay, Pasta, Eggs', 'Push-up \r\n', '6', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00'),
(8, '', '129837', '2022-10-03', '', 'Sweet Potato, Pumpkin Seeds, Watermelon, Noodles, Fish', 'Sit-ups\r\n', '7', '2022-11-02', '2022-10-03 05:09:36', '0000-00-00 00:00:00');

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
(15, 'mathew123', 'Mathew123123', 'Francisco123123', 'Dalisay123123', '2022-07-11', 'Female', '123333', 'SA BAHAY33', ' KO33', 'PUTANGINA MO3', '1233333', '1111333333', '123123123333', 0x3230313434363737305f3839323032393131383034373935345f373931303634303233333433353038373931365f6e2e6a7067, 'Grade 3', '123123123asdas333', '2022-07-06 08:01:14', '2022-07-06 08:37:37'),
(22, '129837', 'Jade mark', 'Hundsum', 'Sakdlj', '2022-10-05', 'Male', '009', '09', 'OIJ', 'MIOJNOI', '88', 'JKJSND', '23', 0x666c6f7763686172745f657276696e286e65775f70726f6772616d292e64726177696f2e706e67, 'Grade 1', '21312', '2022-10-03 05:05:43', '2022-10-03 05:05:43');

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
(37, 'mathew123', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'mathew123', 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'mathew123', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'mathew123', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'mathew123', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '129837', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '129837', 2, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '129837', 3, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '129837', 4, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '129837', 5, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  `address` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `user_id`, `email`, `password`, `first_name`, `middle_name`, `last_name`, `contact_number`, `room`, `house`, `street`, `subdivision`, `barangay`, `city`, `zip`, `address`, `gender`, `user_type`, `image`, `student_id`, `date_time_created`, `date_time_updated`) VALUES
(7, '202280578', 'hehez@gmail.com', '123', 'Leonida4', 'Frnaciso444', 'Dalisay44', '', '12344', 'SA BAHAY4', ' KO4', 'PUTANGINA MO44', '1234', '11114', '123123123444', '', 'Male', 2, 0x7072696d6172792e6a7067, 'mathew123', '2022-07-06 08:01:14', '2022-07-06 09:05:31'),
(14, '202228995', 'om@gmail.com', 'Welcome@12345', 'Okm', 'Omom', 'Omo', '', '009', '09', 'OIJ', 'MIOJNOI', '88', 'JKJSND', '23', '', 'Male', 2, 0x666c6f7763686172745f657276696e286f6c64292e64726177696f2e706e67, '129837', '2022-10-03 05:05:43', '2022-10-03 05:05:43');

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
-- Indexes for table `nutritionists`
--
ALTER TABLE `nutritionists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `program_records`
--
ALTER TABLE `program_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nutritionist_id` (`nutritionist_id`,`student_id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `nutritionists`
--
ALTER TABLE `nutritionists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_records`
--
ALTER TABLE `program_records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students_survery_answers`
--
ALTER TABLE `students_survery_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  ADD CONSTRAINT `program_records_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
