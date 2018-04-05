-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2017 at 12:48 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` varchar(200) NOT NULL,
  `option_1` varchar(50) NOT NULL,
  `option_2` varchar(50) NOT NULL,
  `option_3` varchar(50) NOT NULL,
  `option_4` varchar(50) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `tid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`, `tid`) VALUES
('	\r\nHow much time will it take for an amount of Rs. 450 to yield Rs. 81 as interest at 4.5% per annum of simple interest?', '3.5 years', '4 years', '4.5 years', '5 years', '2', 1),
('	\r\nOn 8th Feb, 2005 it was Tuesday. What was the day of the week on 8th Feb, 2004?', 'Tuesday', 'Monday', 'Sunday', 'Wednesday', '3', 2),
('	\r\nThe angle of elevation of a ladder leaning against a wall is 60º and the foot of the ladder is 4.6 m away from the wall. The length of the ladder is:', '2.3 m', '4.6 m', '7.8 m', '9.2 m', '4', 3),
('	\r\nThe length of the bridge, which a train 130 metres long and travelling at 45 km/hr can cross in 30 seconds, is', '200 m', '225m', '245 m', '250 m', '3', 4),
('A certain amount earns simple interest of Rs. 1750 after 7 years. Had the interest been 2% more, how much more interest would it have earned?', 'Rs. 245', 'Rs. 350', 'Cannot be determined ', 'None of these', '3', 5),
('A goods train runs at the speed of 72 kmph and crosses a 250 m long platform in 26 seconds. What is the length of the goods train?', '230 m', '240 m', '260 m', '270 m', '4', 6),
('A man buys a cycle for Rs. 1400 and sells it at a loss of 15%. What is the selling price of the cycle?', 'Rs. 1090', 'Rs. 1160', 'Rs. 1190', 'Rs. 1202', '3', 7),
('A shopkeeper expects a gain of 22.5% on his cost price. If in a week, his sale was of Rs. 392, what was his profit?', 'Rs. 18.20	', 'Rs. 70 ', 'Rs. 72', 'Rs. 88.25', 'Rs. 72', 8),
('A sum fetched a total simple interest of Rs. 4016.25 at the rate of 9 p.c.p.a. in 5 years. What is the sum?', 'Rs. 4462.50', 'Rs. 8032.50', 'Rs. 8900', 'Rs. 8925', 'Rs. 8925', 9),
('A sum of money at simple interest amounts to Rs. 815 in 3 years and to Rs. 854 in 4 years. The sum is:', 'Rs. 650', 'Rs. 690', 'Rs. 698', 'Rs. 700', 'Rs. 698', 10),
('A sum of Rs. 12,500 amounts to Rs. 15,500 in 4 years at the rate of simple interest. What is the rate of interest?', '3%	', '4%', '5%', 'None of these', 'None of these', 11),
('A trader mixes 26 kg of rice at Rs. 20 per kg with 30 kg of rice of other variety at Rs. 36 per kg and sells the mixture at Rs. 30 per kg. His profit percent is:', 'No profit, no loss', '5%', '8% ', '10%', '5%', 12),
('A train 240 m long passes a pole in 24 seconds. How long will it take to pass a platform 650 m long?', '65 s', '89 s', '100 s', '150 s', '89 s', 13),
('A train 360 m long is running at a speed of 45 km/hr. In what time will it pass a bridge 140 m long?', '40 s', '42 s', '45 s', '48 s', '40 s', 14),
('A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', '150 metres', 15),
('A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?', '3', '4', '5', '6', '5', 16),
('From a point P on a level ground, the angle of elevation of the top tower is 30º. If the tower is 100 m high, the distance of point P from the foot of the tower is:', '149 m', '156 m', '173 m', '200 m', '173 m', 17),
('If 6th March, 2005 is Monday, what was the day of the week on 6th March, 2004?', 'Sunday', 'Saturday', 'Tuesday', 'Wednesday', 'Sunday', 18),
('It was Sunday on Jan 1, 2006. What was the day of the week Jan 1, 2010?', 'Sunday', 'Saturday', 'Friday', 'Wednesday', 'Friday', 19),
('January 1, 2007 was Monday. What day of the week lies on Jan. 1, 2008?', 'Monday', 'Tuesday', 'Wednesday', 'Sunday', 'Tuesday', 20),
('January 1, 2008 is Tuesday. What day of the week lies on Jan 1, 2009?', 'Monday', 'Wednesday', 'Thursday', 'Sunday', 'Thursday', 21),
('On 8th Dec, 2007 Saturday falls. What day of the week was it on 8th Dec, 2006?', 'Sunday', 'Thursday', 'Tuesday', 'Friday', 'Friday', 22),
('The calendar for the year 2007 will be the same for the year:', '2014', '2016', '2017', '2018', '2018', 23),
('The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:', '15', '16', '18', '25', '16', 24),
('The last day of a century cannot be', 'Monday', 'Wednesday', 'Tuesday', 'Friday', 'Tuesday', 25),
('Today is Monday. After 61 days, it will be:', 'Wednesday', 'Saturday', 'Tuesday', 'Thursday', 'Saturday', 26),
('What was the day of the week on 17th June, 1998?', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Wednesday', 27),
('What was the day of the week on 28th May, 2006?', 'Thursday', 'Friday', 'Saturday', 'Sunday', 'Sunday', 28),
('What will be the day of the week 15th August, 2010?', 'Sunday', 'Monday', 'Tuesday', 'Friday', 'Sunday', 29),
('What will be the ratio of simple interest earned by certain amount at the same rate of interest for 6 years and that for 9 years?', '1 : 3	', '1 : 4', '2 : 3', 'Data inadequate', 'Data inadequate', 30),
('When a plot is sold for Rs. 18,700, the owner loses 15%. At what price must that plot be sold in order to gain 15%?', 'Rs. 21,000', 'Rs. 22,500', 'Rs. 25,300', 'Rs. 25,800', 'Rs. 25,300', 31),
('Which of the following is not a leap year?', '700', '800', '1200', '2000', '700', 32);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(10) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `login`, `test_id`, `test_date`, `score`) VALUES
(44, 'shagun', 18, '2017-11-14', 5);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(5) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `num_ques` int(5) NOT NULL,
  `duration` int(10) NOT NULL,
  `dtype` varchar(20) NOT NULL,
  `test_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `start_date`, `end_date`, `num_ques`, `duration`, `dtype`, `test_pass`) VALUES
(17, '2017-11-14 15:59:00', '2017-11-15 08:39:00', 80, 1000, 'soft', 'dev'),
(18, '2017-11-14 17:47:00', '2017-11-15 18:47:00', 5, 60, 'soft', 'dev');

-- --------------------------------------------------------

--
-- Table structure for table `test_2`
--

CREATE TABLE `test_2` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `ques_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_2`
--

INSERT INTO `test_2` (`id`, `test_id`, `ques_id`) VALUES
(1, 2, '1'),
(2, 2, '3'),
(3, 2, '5'),
(4, 2, '7'),
(7, 2, '2'),
(8, 2, '4');

-- --------------------------------------------------------

--
-- Table structure for table `test_18`
--

CREATE TABLE `test_18` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `ques_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_18`
--

INSERT INTO `test_18` (`id`, `test_id`, `ques_id`) VALUES
(1, 18, 2),
(2, 18, 3),
(3, 18, 4),
(4, 18, 5),
(5, 18, 6);

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE `useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `loginid` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `utype` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `institute` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `loginid`, `pass`, `utype`, `firstname`, `lastname`, `institute`, `email`, `contact`) VALUES
(1, 'devesh', 'devesh', 'teacher', 'Devesh', 'Rathi', 'IIM Amritsar', 'deveshkrathi@gmail.com', '9409026615'),
(2, 'shagun', 'shagun', 'student', 'Shagun', 'Ramola', 'Graphic Era University', 'shagunramola@outlook.com', '7016421451'),
(3, 'vartika', 'vartika', 'student', 'vartika', 'aggarwal', 'Graphic Era University', 'vaggarwal@gmail.com', '9028365479'),
(5, 'ujjwal', 'ujjwal', 'student', 'ujjwal', 'tyagi', 'Graphic Era University', 'utyagi@gmail.com', '984592367'),
(6, 'manish', 'manish', 'teacher', 'manish', 'mahajan', 'Graphic Era University', 'mmahajan@gmail.com', '9847352701');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `test_2`
--
ALTER TABLE `test_2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ques_id` (`ques_id`);

--
-- Indexes for table `test_18`
--
ALTER TABLE `test_18`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ques_id` (`ques_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `test_2`
--
ALTER TABLE `test_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `test_18`
--
ALTER TABLE `test_18`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
