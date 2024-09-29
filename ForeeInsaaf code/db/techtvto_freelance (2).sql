-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 04:16 PM
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
-- Database: `techtvto_freelance`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_categories`
--

CREATE TABLE `case_categories` (
  `id` int(11) NOT NULL,
  `cat` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `ex1` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `case_categories`
--

INSERT INTO `case_categories` (`id`, `cat`, `date`, `ex1`) VALUES
(1, 'Robbery', '2023-11-09', ''),
(2, 'Cybercrime', '2023-11-09', ''),
(3, 'Kidnapping', '2023-11-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `degree` char(100) DEFAULT NULL,
  `university` char(100) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `summary` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `degree`, `university`, `start_date`, `end_date`, `summary`) VALUES
(4, 3, '1', 'Sindh', '2023-11-17', '2023-11-16', '111111'),
(5, 3, '1', 'Sindh', '2023-11-22', '2023-11-22', '123test'),
(6, 2, 'test', 'Sindh', '2023-12-14', '2023-12-29', 'esfsd');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `project_name` varchar(200) DEFAULT NULL,
  `project_type` varchar(200) DEFAULT NULL,
  `case_type` varchar(200) DEFAULT NULL,
  `city` char(100) DEFAULT NULL,
  `country` char(100) DEFAULT NULL,
  `project_desc` varchar(300) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `user_id`, `project_name`, `project_type`, `case_type`, `city`, `country`, `project_desc`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'okkkkk', 'Jaa', 'Jaa', 'lahore', 'pakistan', 'desc', '2023-10-31', '2023-11-01', 0),
(2, 1, 'i am test name1', 'Jaa', 'Jaa', 'lahore1', 'pakistan1', 'description1', '2023-10-31', '2023-11-02', 0),
(3, 1, 'ok', 'Jaa', 'Jaa', 'lahore', 'pakistan', 'desc', '2023-11-01', '2023-11-01', 0),
(4, 1, 'bank men chori hogae', 'Apps Developmen', 'UI Development', 'karachi', 'pakistan', 'chor sab  paise le gae', '2023-11-01', NULL, 0),
(5, 1, 'Lawyer did andolan infront of high court', 'UI Development', 'Jaa', 'islamabad', 'pakistan', 'this is a descriptive description', '2023-11-01', NULL, 0),
(6, 1, 'A man was kidnapped', 'UI Development', 'UI Development', 'delhi', 'India', 'this a man lived in india was kidnapped', '2023-11-01', NULL, 0),
(7, 4, 'new', 'Apps Developmen', 'Apps Developmen', 'shikarpur', 'pakistan', 'hello this is description', '2023-11-02', NULL, 0),
(8, 7, 'test', 'Jaa', 'Jaa', 'karachi', 'Pakistan', 'done', '2023-11-08', NULL, 0),
(9, 3, 'test', '', 'Cybercrime', 'karachi', 'pakistan', 'hello my phone has been ', '2023-11-09', '2023-11-09', 0),
(10, 3, 'test', '', 'Kidnapping', '123city', 'pakistan', 'hello test', '2024-01-22', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `proposels`
--

CREATE TABLE `proposels` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `p_price` varchar(1000) NOT NULL,
  `p_hearings` varchar(1000) NOT NULL,
  `p_cover_desc` varchar(5000) NOT NULL,
  `p_status` int(11) NOT NULL,
  `p_ex1` varchar(1000) NOT NULL,
  `p_ex2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `proposels`
--

INSERT INTO `proposels` (`id`, `user_id`, `project_id`, `p_price`, `p_hearings`, `p_cover_desc`, `p_status`, `p_ex1`, `p_ex2`) VALUES
(7, 2, 1, '123', '12345', '123test41', 1, '', ''),
(8, 8, 2, '12', '12', 'cover', 1, '', ''),
(9, 8, 2, '12', '12', 'cover', 1, '', ''),
(10, 8, 4, '12', '12', '12', 1, '', ''),
(11, 2, 9, '12', '123', '123test', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `role` int(10) DEFAULT NULL,
  `name` char(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `country` char(100) DEFAULT NULL,
  `city` char(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `category` char(100) DEFAULT NULL,
  `office_address` varchar(200) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `register_time` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `number` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role`, `name`, `image`, `email`, `country`, `city`, `password`, `category`, `office_address`, `description`, `register_time`, `gender`, `number`) VALUES
(1, 0, 'Imran', 'Imran_Ahmed_Khan_Niazi.jpg', 'imran@gmail.com', 'pakistan', 'Islamadabad', 'pas12', NULL, 'high court', 'i am laywer', '0000-00-00', '', ''),
(2, 1, 'Suhbat', '1701877108.jpg', 'suhbat@gmail.com', 'pakistan', 'larkana', '123', '', 'high court', 'i am laywers  asf asdf adfsd adsf adsf asd ', '0000-00-00', 'male', '6363110'),
(3, 0, 'test', '1701266828.jpg', 'test@test.com', 'test', 'test', 'test', NULL, '123123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus.', '0000-00-00', 'female', '12345678'),
(4, 0, 'Jan Muhammad', 'd988dcc7-4d2f-4126-a3d8-d8251dfb1cf6 (1).jpg', 'muhammadjan761@gmail.com', 'Pakistan', 'Karachi', 'test', NULL, NULL, NULL, '2023-11-02', '', ''),
(7, 0, 'rafay imtiaz', 'prodcut-12.jpg', 'rafayimrtiaz123@gmail.com', 'Pakistan', 'Karachi', '123', NULL, NULL, NULL, '2023-11-08', '', ''),
(8, 1, 'rafay imtiaz', 'prodcut-11.jpg', 'rafayimtiaz@gmail.com', 'Pakistan', 'Karachi', '123', 'llb', 'Mahmoodabad karachi', 'hello this Rafy imtiaz B.A LLB', '2023-11-08', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_experience`
--

CREATE TABLE `user_experience` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `title` char(100) DEFAULT NULL,
  `company` char(100) DEFAULT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `summary` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`id`, `user_id`, `title`, `company`, `start_date`, `end_date`, `summary`) VALUES
(4, 3, '1', '1', '2023-11-14', '2023-11-30', '123123'),
(5, 3, '1', '1', '2023-10-31', '2023-11-30', '1111'),
(6, 3, '2', '2', '2023-11-09', '2023-11-30', 'hello'),
(7, 2, 'test', 'test', '2023-12-07', '2023-12-13', 'sadfdsaf'),
(8, 2, 'test', 'test', '2023-12-07', '2023-12-29', 'sedsfdsf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_categories`
--
ALTER TABLE `case_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `proposels`
--
ALTER TABLE `proposels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_categories`
--
ALTER TABLE `case_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `proposels`
--
ALTER TABLE `proposels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_experience`
--
ALTER TABLE `user_experience`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
