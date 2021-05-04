-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 01:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcqportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL COMMENT '1=Active, 2= Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `last_login`, `status`) VALUES
(4, 'darshana', '12345', '2020-09-25 16:37:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `guestId` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer_given` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `guestId`, `question`, `answer_given`, `date_time`) VALUES
(1, 1, 'Which of these is NOT a city in India?', 'Islamabad', '2020-09-25 12:08:21'),
(2, 1, 'What five letter word is the motto of the IBM Computer company?', 'Click', '2020-09-25 12:08:21'),
(3, 1, 'Which infamous European traitor was known as \"the last person to enter Parliament with honest intentions\"?', 'Guy Fawkes', '2020-09-25 12:08:21'),
(4, 1, 'Which of the following United States Presidents served the shortest term in office?', 'James A. Garfield', '2020-09-25 12:08:21'),
(5, 1, 'How many playable characters are there in Super Smash Bros. for Nintendo 3DS and Wii U?', '55', '2020-09-25 12:08:21'),
(6, 1, 'In Dota 2, what is Earthshaker\'s real name?', 'Carl', '2020-09-25 12:08:21'),
(7, 1, 'In \"Resident Evil 2\", what is Leon Kennedy\'s middle name?', 'Shaun', '2020-09-25 12:08:21'),
(8, 1, 'Which of the following films was directed by Ivan Reitman, written by Gary Ross, featured Kevin Kline, and was released in 1993?', 'Will', '2020-09-25 12:08:21'),
(9, 1, 'What was Britney Spears\' debut single?', '(You Drive Me) Crazy', '2020-09-25 12:08:21'),
(10, 1, 'Who won the 2017 Formula One World Drivers\' Championship?', 'Sebastian Vettel', '2020-09-25 12:08:21'),
(11, 1, 'Which of these is NOT a city in India?', 'Islamabad', '2020-09-25 12:12:34'),
(12, 1, 'What five letter word is the motto of the IBM Computer company?', 'Click', '2020-09-25 12:12:34'),
(13, 1, 'Which infamous European traitor was known as \"the last person to enter Parliament with honest intentions\"?', 'Guy Fawkes', '2020-09-25 12:12:34'),
(14, 1, 'Which of the following United States Presidents served the shortest term in office?', 'James A. Garfield', '2020-09-25 12:12:34'),
(15, 1, 'How many playable characters are there in Super Smash Bros. for Nintendo 3DS and Wii U?', '55', '2020-09-25 12:12:34'),
(16, 1, 'In Dota 2, what is Earthshaker\'s real name?', 'Carl', '2020-09-25 12:12:34'),
(17, 1, 'In \"Resident Evil 2\", what is Leon Kennedy\'s middle name?', 'Shaun', '2020-09-25 12:12:34'),
(18, 1, 'Which of the following films was directed by Ivan Reitman, written by Gary Ross, featured Kevin Kline, and was released in 1993?', 'Will', '2020-09-25 12:12:34'),
(19, 1, 'What was Britney Spears\' debut single?', '(You Drive Me) Crazy', '2020-09-25 12:12:34'),
(20, 1, 'Who won the 2017 Formula One World Drivers\' Championship?', 'Sebastian Vettel', '2020-09-25 12:12:34'),
(21, 1, 'Which of these is NOT a city in India?', 'Islamabad', '2020-09-25 12:14:24'),
(22, 1, 'What five letter word is the motto of the IBM Computer company?', 'Click', '2020-09-25 12:14:24'),
(23, 1, 'Which infamous European traitor was known as \"the last person to enter Parliament with honest intentions\"?', 'Guy Fawkes', '2020-09-25 12:14:24'),
(24, 1, 'Which of the following United States Presidents served the shortest term in office?', 'James A. Garfield', '2020-09-25 12:14:24'),
(25, 1, 'How many playable characters are there in Super Smash Bros. for Nintendo 3DS and Wii U?', '55', '2020-09-25 12:14:24'),
(26, 1, 'In Dota 2, what is Earthshaker\'s real name?', 'Carl', '2020-09-25 12:14:24'),
(27, 1, 'In \"Resident Evil 2\", what is Leon Kennedy\'s middle name?', 'Shaun', '2020-09-25 12:14:24'),
(28, 1, 'Which of the following films was directed by Ivan Reitman, written by Gary Ross, featured Kevin Kline, and was released in 1993?', 'Will', '2020-09-25 12:14:24'),
(29, 1, 'What was Britney Spears\' debut single?', '(You Drive Me) Crazy', '2020-09-25 12:14:24'),
(30, 1, 'Who won the 2017 Formula One World Drivers\' Championship?', 'Sebastian Vettel', '2020-09-25 12:14:24'),
(31, 1, 'Which of these is NOT a city in India?', 'Islamabad', '2020-09-25 12:14:53'),
(32, 1, 'What five letter word is the motto of the IBM Computer company?', 'Click', '2020-09-25 12:14:53'),
(33, 1, 'Which infamous European traitor was known as \"the last person to enter Parliament with honest intentions\"?', 'Guy Fawkes', '2020-09-25 12:14:53'),
(34, 1, 'Which of the following United States Presidents served the shortest term in office?', 'James A. Garfield', '2020-09-25 12:14:53'),
(35, 1, 'How many playable characters are there in Super Smash Bros. for Nintendo 3DS and Wii U?', '55', '2020-09-25 12:14:53'),
(36, 1, 'In Dota 2, what is Earthshaker\'s real name?', 'Carl', '2020-09-25 12:14:53'),
(37, 1, 'In \"Resident Evil 2\", what is Leon Kennedy\'s middle name?', 'Shaun', '2020-09-25 12:14:53'),
(38, 1, 'Which of the following films was directed by Ivan Reitman, written by Gary Ross, featured Kevin Kline, and was released in 1993?', 'Will', '2020-09-25 12:14:53'),
(39, 1, 'What was Britney Spears\' debut single?', '(You Drive Me) Crazy', '2020-09-25 12:14:53'),
(40, 1, 'Who won the 2017 Formula One World Drivers\' Championship?', 'Sebastian Vettel', '2020-09-25 12:14:53'),
(41, 2, 'During the Mongolian invasions of Japan, what were the Mongol boats mostly stopped by?', 'Samurai', '2020-09-25 12:16:18'),
(42, 2, 'Which popular rock band has a one-armed drummer?', 'Lynyrd Skynyrd', '2020-09-25 12:16:18'),
(43, 2, 'The proof for the Chinese Remainder Theorem used in Number Theory was NOT developed by its first publisher, Sun Tzu.', 'True', '2020-09-25 12:16:18'),
(44, 2, 'The \'Squaring the Circle\' problem is solvable.', 'True', '2020-09-25 12:16:18'),
(45, 2, 'What is the name of the villian in the 2015 Russian-American Sci-Fi Movie \"Hardcore Henry\"?', 'Akan', '2020-09-25 12:16:18'),
(46, 2, 'When was Hubba Bubba first introduced?', '1972', '2020-09-25 12:16:18'),
(47, 2, 'What is the land connecting North America and South America?', 'Isthmus of Panama', '2020-09-25 12:16:18'),
(48, 2, 'Which of the following is not one of the Greek Fates?', 'Clotho', '2020-09-25 12:16:18'),
(49, 2, 'Which country was Josef Stalin born in?', 'Russia', '2020-09-25 12:16:18'),
(50, 2, 'What is the name of the City in Saints Row The Third?', 'Liberty', '2020-09-25 12:16:18'),
(51, 3, 'In \"Metal Gear Solid 2\", you will see through the eyes of Psycho Mantis if you go first person during his boss fight.', 'False', '2020-09-25 12:26:19'),
(52, 3, 'According to Toby Fox, what was the method to creating the initial tune for Megalovania?', 'Using a Composer Software', '2020-09-25 12:26:19'),
(53, 3, 'The key of sharps does the key of G# minor contain?', '3', '2020-09-25 12:26:19'),
(54, 3, 'What is Meg\'s full name in \"Family Guy\"?', 'Who-Cares Griffin', '2020-09-25 12:26:19'),
(55, 3, 'Which sign of the zodiac comes between Virgo and Scorpio?', 'Capricorn', '2020-09-25 12:26:19'),
(56, 3, 'In \"Need for Speed: Porsche Unleashed\", the player can only drive cars manufactured by Porsche.', 'True', '2020-09-25 12:26:19'),
(57, 3, 'What is the star sign of someone born on Valentines day?', 'Aquarius', '2020-09-25 12:26:19'),
(58, 3, 'In Game of Thrones what is the name of Jon Snow\'s sword?', '', '2020-09-25 12:26:19'),
(59, 3, 'The Los Angeles Dodgers were originally from what U.S. city?', '', '2020-09-25 12:26:19'),
(60, 3, 'When was \"Luigi\'s Mansion 3\" released?', 'January 13th, 2019', '2020-09-25 12:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guestId` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestId`, `username`, `email`, `marks`, `duration`, `date_time`) VALUES
(1, 'Darshu', 'www.darshu16@gmail.com', 2, 33649, '2020-09-25 12:08:04'),
(2, 'Vishu', 'darshana.badwaik@outlook.com', 3, 33067, '2020-09-25 12:15:51'),
(3, 'Sangita', 'sangita@gmail.com', 2, 33016, '2020-09-25 12:26:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guestId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guestId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
