-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 05:16 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `entrance_examination`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`cat_Id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `questions_added` varchar(255) NOT NULL DEFAULT '0',
  `no_of_items` int(11) NOT NULL,
  `time_limit` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_Id`, `cat_name`, `questions_added`, `no_of_items`, `time_limit`) VALUES
(6, 'English', '20', 20, '12 minutes'),
(7, 'Mathematics', '20', 20, '12 minutes'),
(8, 'History', '20', 20, '12 minutes'),
(9, 'Filipino', '20', 20, '12 minutes'),
(10, 'Science', '20', 20, '12 minutes');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`exam_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q1_remarks` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q2_remarks` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q3_remarks` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q4_remarks` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q5_remarks` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q6_remarks` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q7_remarks` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q8_remarks` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q9_remarks` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q10_remarks` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q11_remarks` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q12_remarks` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q13_remarks` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q14_remarks` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q15_remarks` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q16_remarks` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q17_remarks` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q18_remarks` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q19_remarks` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `q20_remarks` int(11) NOT NULL,
  `q21` int(11) NOT NULL,
  `q21_remarks` int(11) NOT NULL,
  `q22` int(11) NOT NULL,
  `q22_remarks` int(11) NOT NULL,
  `q23` int(11) NOT NULL,
  `q23_remarks` int(11) NOT NULL,
  `q24` int(11) NOT NULL,
  `q24_remarks` int(11) NOT NULL,
  `q25` int(11) NOT NULL,
  `q25_remarks` int(11) NOT NULL,
  `q26` int(11) NOT NULL,
  `q26_remarks` int(11) NOT NULL,
  `q27` int(11) NOT NULL,
  `q27_remarks` int(11) NOT NULL,
  `q28` int(11) NOT NULL,
  `q28_remarks` int(11) NOT NULL,
  `q29` int(11) NOT NULL,
  `q29_remarks` int(11) NOT NULL,
  `q30` int(11) NOT NULL,
  `q30_remarks` int(11) NOT NULL,
  `q31` int(11) NOT NULL,
  `q31_remarks` int(11) NOT NULL,
  `q32` int(11) NOT NULL,
  `q32_remarks` int(11) NOT NULL,
  `q33` int(11) NOT NULL,
  `q33_remarks` int(11) NOT NULL,
  `q34` int(11) NOT NULL,
  `q34_remarks` int(11) NOT NULL,
  `q35` int(11) NOT NULL,
  `q35_remarks` int(11) NOT NULL,
  `q36` int(11) NOT NULL,
  `q36_remarks` int(11) NOT NULL,
  `q37` int(11) NOT NULL,
  `q37_remarks` int(11) NOT NULL,
  `q38` int(11) NOT NULL,
  `q38_remarks` int(11) NOT NULL,
  `q39` int(11) NOT NULL,
  `q39_remarks` int(11) NOT NULL,
  `q40` int(11) NOT NULL,
  `q40_remarks` int(11) NOT NULL,
  `q41` int(11) NOT NULL,
  `q41_remarks` int(11) NOT NULL,
  `q42` int(11) NOT NULL,
  `q42_remarks` int(11) NOT NULL,
  `q43` int(11) NOT NULL,
  `q43_remarks` int(11) NOT NULL,
  `q44` int(11) NOT NULL,
  `q44_remarks` int(11) NOT NULL,
  `q45` int(11) NOT NULL,
  `q45_remarks` int(11) NOT NULL,
  `q46` int(11) NOT NULL,
  `q46_remarks` int(11) NOT NULL,
  `q47` int(11) NOT NULL,
  `q47_remarks` int(11) NOT NULL,
  `q48` int(11) NOT NULL,
  `q48_remarks` int(11) NOT NULL,
  `q49` int(11) NOT NULL,
  `q49_remarks` int(11) NOT NULL,
  `q50` int(11) NOT NULL,
  `q50_remarks` int(11) NOT NULL,
  `q51` int(11) NOT NULL,
  `q51_remarks` int(11) NOT NULL,
  `q52` int(11) NOT NULL,
  `q52_remarks` int(11) NOT NULL,
  `q53` int(11) NOT NULL,
  `q53_remarks` int(11) NOT NULL,
  `q54` int(11) NOT NULL,
  `q54_remarks` int(11) NOT NULL,
  `q55` int(11) NOT NULL,
  `q55_remarks` int(11) NOT NULL,
  `q56` int(11) NOT NULL,
  `q56_remarks` int(11) NOT NULL,
  `q57` int(11) NOT NULL,
  `q57_remarks` int(11) NOT NULL,
  `q58` int(11) NOT NULL,
  `q58_remarks` int(11) NOT NULL,
  `q59` int(11) NOT NULL,
  `q59_remarks` int(11) NOT NULL,
  `q60` int(11) NOT NULL,
  `q60_remarks` int(11) NOT NULL,
  `q61` int(11) NOT NULL,
  `q61_remarks` int(11) NOT NULL,
  `q62` int(11) NOT NULL,
  `q62_remarks` int(11) NOT NULL,
  `q63` int(11) NOT NULL,
  `q63_remarks` int(11) NOT NULL,
  `q64` int(11) NOT NULL,
  `q64_remarks` int(11) NOT NULL,
  `q65` int(11) NOT NULL,
  `q65_remarks` int(11) NOT NULL,
  `q66` int(11) NOT NULL,
  `q66_remarks` int(11) NOT NULL,
  `q67` int(11) NOT NULL,
  `q67_remarks` int(11) NOT NULL,
  `q68` int(11) NOT NULL,
  `q68_remarks` int(11) NOT NULL,
  `q69` int(11) NOT NULL,
  `q69_remarks` int(11) NOT NULL,
  `q70` int(11) NOT NULL,
  `q70_remarks` int(11) NOT NULL,
  `q71` int(11) NOT NULL,
  `q71_remarks` int(11) NOT NULL,
  `q72` int(11) NOT NULL,
  `q72_remarks` int(11) NOT NULL,
  `q73` int(11) NOT NULL,
  `q73_remarks` int(11) NOT NULL,
  `q74` int(11) NOT NULL,
  `q74_remarks` int(11) NOT NULL,
  `q75` int(11) NOT NULL,
  `q75_remarks` int(11) NOT NULL,
  `q76` int(11) NOT NULL,
  `q76_remarks` int(11) NOT NULL,
  `q77` int(11) NOT NULL,
  `q77_remarks` int(11) NOT NULL,
  `q78` int(11) NOT NULL,
  `q78_remarks` int(11) NOT NULL,
  `q79` int(11) NOT NULL,
  `q79_remarks` int(11) NOT NULL,
  `q80` int(11) NOT NULL,
  `q80_remarks` int(11) NOT NULL,
  `q81` int(11) NOT NULL,
  `q81_remarks` int(11) NOT NULL,
  `q82` int(11) NOT NULL,
  `q82_remarks` int(11) NOT NULL,
  `q83` int(11) NOT NULL,
  `q83_remarks` int(11) NOT NULL,
  `q84` int(11) NOT NULL,
  `q84_remarks` int(11) NOT NULL,
  `q85` int(11) NOT NULL,
  `q85_remarks` int(11) NOT NULL,
  `q86` int(11) NOT NULL,
  `q86_remarks` int(11) NOT NULL,
  `q87` int(11) NOT NULL,
  `q87_remarks` int(11) NOT NULL,
  `q88` int(11) NOT NULL,
  `q88_remarks` int(11) NOT NULL,
  `q89` int(11) NOT NULL,
  `q89_remarks` int(11) NOT NULL,
  `q90` int(11) NOT NULL,
  `q90_remarks` int(11) NOT NULL,
  `q91` int(11) NOT NULL,
  `q91_remarks` int(11) NOT NULL,
  `q92` int(11) NOT NULL,
  `q92_remarks` int(11) NOT NULL,
  `q93` int(11) NOT NULL,
  `q93_remarks` int(11) NOT NULL,
  `q94` int(11) NOT NULL,
  `q94_remarks` int(11) NOT NULL,
  `q95` int(11) NOT NULL,
  `q95_remarks` int(11) NOT NULL,
  `q96` int(11) NOT NULL,
  `q96_remarks` int(11) NOT NULL,
  `q97` int(11) NOT NULL,
  `q97_remarks` int(11) NOT NULL,
  `q98` int(11) NOT NULL,
  `q98_remarks` int(11) NOT NULL,
  `q99` int(11) NOT NULL,
  `q99_remarks` int(11) NOT NULL,
  `q100` int(11) NOT NULL,
  `q100_remarks` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `filipino` int(11) NOT NULL,
  `science` int(11) NOT NULL,
  `history` int(11) NOT NULL,
  `date_of_exam` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_Id`, `user_Id`, `q1`, `q1_remarks`, `q2`, `q2_remarks`, `q3`, `q3_remarks`, `q4`, `q4_remarks`, `q5`, `q5_remarks`, `q6`, `q6_remarks`, `q7`, `q7_remarks`, `q8`, `q8_remarks`, `q9`, `q9_remarks`, `q10`, `q10_remarks`, `q11`, `q11_remarks`, `q12`, `q12_remarks`, `q13`, `q13_remarks`, `q14`, `q14_remarks`, `q15`, `q15_remarks`, `q16`, `q16_remarks`, `q17`, `q17_remarks`, `q18`, `q18_remarks`, `q19`, `q19_remarks`, `q20`, `q20_remarks`, `q21`, `q21_remarks`, `q22`, `q22_remarks`, `q23`, `q23_remarks`, `q24`, `q24_remarks`, `q25`, `q25_remarks`, `q26`, `q26_remarks`, `q27`, `q27_remarks`, `q28`, `q28_remarks`, `q29`, `q29_remarks`, `q30`, `q30_remarks`, `q31`, `q31_remarks`, `q32`, `q32_remarks`, `q33`, `q33_remarks`, `q34`, `q34_remarks`, `q35`, `q35_remarks`, `q36`, `q36_remarks`, `q37`, `q37_remarks`, `q38`, `q38_remarks`, `q39`, `q39_remarks`, `q40`, `q40_remarks`, `q41`, `q41_remarks`, `q42`, `q42_remarks`, `q43`, `q43_remarks`, `q44`, `q44_remarks`, `q45`, `q45_remarks`, `q46`, `q46_remarks`, `q47`, `q47_remarks`, `q48`, `q48_remarks`, `q49`, `q49_remarks`, `q50`, `q50_remarks`, `q51`, `q51_remarks`, `q52`, `q52_remarks`, `q53`, `q53_remarks`, `q54`, `q54_remarks`, `q55`, `q55_remarks`, `q56`, `q56_remarks`, `q57`, `q57_remarks`, `q58`, `q58_remarks`, `q59`, `q59_remarks`, `q60`, `q60_remarks`, `q61`, `q61_remarks`, `q62`, `q62_remarks`, `q63`, `q63_remarks`, `q64`, `q64_remarks`, `q65`, `q65_remarks`, `q66`, `q66_remarks`, `q67`, `q67_remarks`, `q68`, `q68_remarks`, `q69`, `q69_remarks`, `q70`, `q70_remarks`, `q71`, `q71_remarks`, `q72`, `q72_remarks`, `q73`, `q73_remarks`, `q74`, `q74_remarks`, `q75`, `q75_remarks`, `q76`, `q76_remarks`, `q77`, `q77_remarks`, `q78`, `q78_remarks`, `q79`, `q79_remarks`, `q80`, `q80_remarks`, `q81`, `q81_remarks`, `q82`, `q82_remarks`, `q83`, `q83_remarks`, `q84`, `q84_remarks`, `q85`, `q85_remarks`, `q86`, `q86_remarks`, `q87`, `q87_remarks`, `q88`, `q88_remarks`, `q89`, `q89_remarks`, `q90`, `q90_remarks`, `q91`, `q91_remarks`, `q92`, `q92_remarks`, `q93`, `q93_remarks`, `q94`, `q94_remarks`, `q95`, `q95_remarks`, `q96`, `q96_remarks`, `q97`, `q97_remarks`, `q98`, `q98_remarks`, `q99`, `q99_remarks`, `q100`, `q100_remarks`, `total`, `english`, `math`, `filipino`, `science`, `history`, `date_of_exam`) VALUES
(8, 42, 29, 0, 30, 1, 31, 0, 32, 0, 33, 0, 34, 0, 35, 0, 36, 0, 37, 0, 38, 0, 39, 0, 40, 0, 41, 0, 42, 0, 43, 0, 44, 0, 45, 0, 46, 0, 47, 0, 48, 0, 50, 0, 51, 0, 52, 0, 53, 0, 54, 0, 55, 0, 56, 0, 57, 0, 58, 0, 59, 0, 60, 0, 61, 0, 62, 0, 63, 0, 64, 0, 65, 0, 66, 0, 67, 0, 68, 0, 69, 0, 111, 0, 112, 0, 113, 0, 114, 0, 115, 0, 116, 0, 117, 0, 118, 0, 119, 0, 120, 0, 121, 0, 122, 0, 123, 0, 124, 0, 125, 0, 126, 0, 127, 0, 128, 0, 129, 0, 130, 0, 71, 0, 72, 0, 73, 0, 74, 0, 75, 0, 76, 0, 77, 0, 78, 0, 79, 0, 80, 0, 81, 0, 82, 0, 83, 0, 84, 0, 85, 0, 86, 0, 87, 0, 88, 0, 89, 0, 90, 0, 91, 0, 92, 0, 93, 0, 94, 0, 95, 0, 96, 0, 97, 0, 98, 0, 99, 0, 100, 0, 101, 0, 102, 0, 103, 0, 104, 0, 105, 0, 106, 0, 107, 0, 108, 0, 109, 0, 110, 0, 1, 1, 0, 0, 0, 0, '2022-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `insideschool_org`
--

CREATE TABLE IF NOT EXISTS `insideschool_org` (
`Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `School_Org` varchar(255) NOT NULL,
  `School_Position` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `insideschool_org`
--

INSERT INTO `insideschool_org` (`Id`, `user_Id`, `School_Org`, `School_Position`) VALUES
(13, 78, 'cc', 'cc'),
(38, 80, '', ''),
(39, 81, '', ''),
(40, 82, '', ''),
(43, 83, '', ''),
(44, 84, '', ''),
(45, 41, 'fds', 'fds'),
(46, 41, 'fds', 'fsd'),
(47, 41, 'fds', 'fds'),
(48, 41, 'fds', 'fsd'),
(49, 41, 'fds', 'fds'),
(50, 41, 'fds', 'fsd'),
(51, 41, 'fds', 'fds'),
(52, 41, 'fds', 'fsd'),
(53, 41, 'fds', 'fds'),
(54, 41, 'fds', 'fsd'),
(55, 41, 'fds', 'fds'),
(56, 41, 'fds', 'fsd'),
(57, 41, 'fds', 'fds'),
(58, 41, 'fds', 'fsd'),
(59, 41, 'fds', 'fds'),
(60, 41, 'fds', 'fsd'),
(61, 42, 'jhgj', 'hgjgh'),
(62, 42, 'ff', 's5');

-- --------------------------------------------------------

--
-- Table structure for table `outsideschool_org`
--

CREATE TABLE IF NOT EXISTS `outsideschool_org` (
`Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `OutsideSchool_Org` varchar(255) NOT NULL,
  `OutsideSchool_Position` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `outsideschool_org`
--

INSERT INTO `outsideschool_org` (`Id`, `user_Id`, `OutsideSchool_Org`, `OutsideSchool_Position`) VALUES
(13, 78, 'cc', 'cc'),
(39, 80, '', ''),
(40, 81, '', ''),
(41, 82, '', ''),
(45, 83, '', ''),
(46, 84, '', ''),
(47, 41, 'fdsf', 'dsf'),
(48, 41, 'fdsf', 'sdf'),
(49, 41, 'fdsf', 'dsf'),
(50, 41, 'fdsf', 'sdf'),
(51, 41, 'fdsf', 'dsf'),
(52, 41, 'fdsf', 'sdf'),
(53, 41, 'fdsf', 'dsf'),
(54, 41, 'fdsf', 'sdf'),
(55, 41, 'fdsf', 'dsf'),
(56, 41, 'fdsf', 'sdf'),
(57, 41, 'fdsf', 'dsf'),
(58, 41, 'fdsf', 'sdf'),
(59, 41, 'fdsf', 'dsf'),
(60, 41, 'fdsf', 'sdf'),
(61, 41, 'fdsf', 'dsf'),
(62, 41, 'fdsf', 'sdf'),
(63, 42, 'ggg', 'gg'),
(64, 42, 'gfdg', '45'),
(65, 42, 'gfd', 'g45');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`quest_Id` int(11) NOT NULL,
  `quest_category_Id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choice_one` varchar(255) NOT NULL,
  `choice_two` varchar(255) NOT NULL,
  `choice_three` varchar(255) NOT NULL,
  `choice_four` varchar(255) NOT NULL,
  `correct_answer` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`quest_Id`, `quest_category_Id`, `question`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `correct_answer`) VALUES
(29, 6, 'I wish I _____ those words. But now it''s too late.', 'not having said', 'never said', 'have never said', 'had never said', 'never said'),
(30, 6, 'The woman, who has been missing for 10 days, is believed _____.', 'to be abducted', 'to have been abducted', 'to be abducting', 'to have been abducting', 'to be abducted'),
(31, 6, 'They didn''t reach an agreement ______ their differences.', 'on account of', 'because', 'due', 'owing', 'because'),
(32, 6, 'I''m very happy _____ in India. I really miss being there.', 'to live', 'to have lived', 'to be lived', 'to be living', 'to live'),
(33, 6, 'She was working on her computer with her baby next to _____.', 'herself', 'her', 'her own', 'hers', 'hers'),
(34, 6, '_____ to offend anyone, she said both cakes were equally good.', 'Not wanting', 'As not wanting', 'She didn''t want', 'Because not wanting', 'Not wanting'),
(35, 6, '_____ in trying to solve this problem. It''s clearly unsolvable.', 'There''s no point', 'There isn''t point', 'It''s no point', 'It''s no need', 'It''s no point'),
(36, 6, 'Last year, when I last met her, she told me she _____ a letter every day for the last two months.', 'had written', 'had been writing', 'has written', 'wrote', 'had been writing'),
(37, 6, 'He _____ robbed as he was walking out of the bank.', 'had', 'did', 'got', 'were', 'did'),
(38, 6, '_____ forced to do anything. He acted of his own free will.', 'In no way was he', 'No way he was', 'In any way he was', 'In any way was he', 'In any way he was'),
(39, 6, 'It _____ the best idea to pay for those tickets by credit card. It was too risky.', 'may not have been', 'might not be', 'may not be', 'must not have been', 'must not have been'),
(40, 6, 'They _____ in the basement for three months.', 'were made sleeping', 'were made sleep', 'were made to sleep', 'made to sleep', 'were made sleeping'),
(41, 6, 'We''ll never know what might have happened _____ the email earlier.', 'if he sent', 'had he sent', 'if he has sent', 'did he sent', 'if he has sent'),
(42, 6, 'If success _____, we need to prepare ourselves for every possible scenario.', 'is to be achieved', 'is achieved', 'will be achieved', 'is due to achieve', 'is due to achieve'),
(43, 6, '______ gifts to the judges.', 'It''s not allowed offering', 'It''s not permitted offering', 'It''s not permitted to offer', 'It''s not allowed to offer', 'It''s not permitted offering'),
(44, 6, 'I ______ bus on Mondays.', '''m going to work with', '''m going to work by', 'go to work with', 'go to work by', '''m going to work with'),
(45, 6, 'Sorry, but this chair is ______.', 'me', 'my', 'mine', 'our', 'mine'),
(46, 6, 'A: ''How old ______?''   B: ''I ______ .''', 'are you / am 20 years old.', 'are you / am 20 years.', 'have you / have 20 years old', 'do you have / have 20 years.', 'are you / am 20 years old.'),
(47, 6, 'I ______ to the cinema.', 'not usually go', 'don''t go usually', 'don''t usually go', 'do not go usually', 'do not go usually'),
(48, 6, 'Where ______ ?', 'your sister works', 'does your sister work', 'your sister work', 'do your sister work', 'does your sister work'),
(50, 7, 'Which is greater than 4?', '5', '-5', '-1/2', '-25', '5'),
(51, 7, 'Which is the smallest?', '-1', '-1/2', '0', '3', '-1'),
(52, 7, 'Combine terms: 12a + 26b -4b â€“ 16a.', '4a + 22b', '-28a + 30b', '-4a + 22b', '28a + 30b', '-4a + 22b'),
(53, 7, 'Simplify: (4 â€“ 5) â€“ (13 â€“ 18 + 2)', '-1', 'â€“2', '1', '2', '2'),
(54, 7, 'What is |-26|?', '-26', '26', '0', '1', '26'),
(55, 7, 'Multiply: (x â€“ 4)(x + 5)', 'x2 + 5x - 20', 'x2 - 4x - 20', 'x2 - x - 20', 'x2 + x - 20', 'x2 + x - 20'),
(56, 7, 'Factor: 5x2 â€“ 15x â€“ 20.', '5(x-4)(x+1)', '-2(x-4)(x+5)', '-5(x+4)(x-1)', '5(x+4)(x+1)', '5(x-4)(x+1)'),
(57, 7, 'Factor: 3y(x â€“ 3) -2(x â€“ 3)', '(x â€“ 3)(x â€“ 3)', '(x â€“ 3)2', '(x â€“ 3)(3y â€“ 2)', '3y(x â€“ 3)', '(x â€“ 3)(3y â€“ 2)'),
(58, 7, 'Solve for x: 2x â€“ y = (3/4)x + 6.', '(y + 6)/5', '4(y + 6)/5', '(y + 6)', '4(y - 6)/5', '4(y + 6)/5'),
(59, 7, 'Find the value of 3 + 2 â€¢ (8 â€“ 3)', '25', '13', '17', '24', '24'),
(60, 7, '121 Divided by 11 is ', '11', '10', '18', '18', '11'),
(61, 7, '60 Times of 8 Equals to', '480', '300', '250', '400', '480'),
(62, 7, 'Find the Missing Term in Multiples of 6 : 6, 12, 18, 24, _, 36, 42, _ 54, 60.', '32, 45', '30, 48', '24, 40', '25, 49', '30, 48'),
(63, 7, 'What is the Next Prime Number after 7 ?', '13', '12', '14', '11', '11'),
(64, 7, 'The Product of 131 Ã— 0 Ã— 300 Ã— 4', '11', '0', '46', '45', '0'),
(65, 7, 'Solve 3 + 6 Ã— ( 5 + 4) Ã· 3 - 7', '11', '16', '14', '15', '14'),
(66, 7, 'Solve 23 + 3 Ã· 3', '24', '25', '26', '27', '24'),
(67, 7, 'What is 6% Equals to', '0.06', '0.6', '0.006', '0.0006', '0.06'),
(68, 7, 'How Many Years are there in a Decade?', '5 years ', '10 years', '15 years', '20 years', '10 years'),
(69, 7, 'How Many Months Make a Century?', '12', '120', '1200', '12000', '1200'),
(71, 10, 'Which animal lays eggs?', 'Dog', 'Cat', 'Duck', 'Sheep', 'Duck'),
(72, 10, 'A male cow is called?', 'Ox', 'Dog', 'Sheep', 'Monkey', 'Ox'),
(73, 10, 'All animals need food, air, and ____ to survive.', 'House', 'Water', 'Chocolate', 'Fruits', 'Water'),
(74, 10, 'Which one is a fur-bearing animal?', 'Hen', 'Crocodile', 'Tortoise', 'Cat', 'Cat'),
(75, 10, 'What is Earthâ€™s only natural satellite?', 'Sun', 'Mars', 'Venus', 'Moon', 'Moon'),
(76, 10, 'The tree has a branch filled with green _____.', 'Hair', 'Root', 'Leaves', 'Trunk', 'Leaves'),
(77, 10, 'What part of the body helps you move?', 'Eyes', 'Lungs', 'Pancreas', 'Muscles', 'Muscles'),
(78, 10, 'The two holes of the nose are called?', 'Eyelids', 'Nostrils', 'Nails', 'Hair', 'Nostrils'),
(79, 10, 'What star shines in the day and provides light?', 'Moon', 'Venus', 'Mars', 'Sun', 'Sun'),
(80, 10, 'Legs have feet and arms have ___.', 'Ankles', 'Pelvis', 'Hands', 'Skull', 'Hands'),
(81, 10, 'Which organ covers the entire body and protects it?', 'Liver', 'Heart', 'Skin', 'Brain', 'Skin'),
(82, 10, 'Which shape is a round?', 'Rectangle', 'Circle', 'Square', 'Triangle', 'Circle'),
(83, 10, 'Who invented the first functional telephone?', 'Albert Einstein', 'Nikola Tesla', 'Thomas Alva Edison', 'Alexander Graham Bell', 'Alexander Graham Bell'),
(84, 10, 'What is the young one of a cow called?', 'Puppy', 'Kitten', 'Calf', 'Baby', 'Calf'),
(85, 10, 'Dark rain clouds can give out lightning and ____.', 'Thunder', 'Snow', 'Sunlight', 'Wind', 'Thunder'),
(86, 10, 'Your hands have four fingers and a ____.', 'Knee', 'Ankle', 'Elbow', 'Thumb', 'Thumb'),
(87, 10, 'Which part of the bird lets it fly high in the sky?', 'Beak', 'Feet', 'Wings', 'Claws', 'Wings'),
(88, 10, 'Animals that suckle their young one are called ____.', 'Reptiles', 'Birds', 'Amphibians', 'Mammals', 'Mammals'),
(89, 10, 'What part of the plant conducts photosynthesis?', 'Branch', 'Leaf', 'Root', 'Trunk', 'Leaf'),
(90, 10, 'What is the boiling point of water?', '25Â°C', '50Â°C', '75Â°C', '100Â°C', '100Â°C'),
(91, 8, 'Whose death sparked World War I?', 'Kaiser Wilhelm', 'Archbishop Ussher', 'Queen Victoria', 'Archduke Franz Ferdinand', 'Archduke Franz Ferdinand'),
(92, 8, 'Which of these nations was neutral in World War I?', 'Germany', 'Norway', 'Italy', 'England', 'Norway'),
(93, 8, 'Which of these ships was sunk by a German submarine?', 'Arizona', 'Lusitania', 'Titanic', 'Andrea Doria', 'Lusitania'),
(94, 8, 'Which weapon was first used at the Battle of the Somme in World War I?', 'Submarine', 'Tank', 'Jet fighter', 'Chariot', 'Tank'),
(95, 8, 'World War I ended in:', '1925', '1918', '1920', '1915', '1918'),
(96, 8, 'Which of these people was a spy in World War I?', 'James Bond', 'Mata Hari', 'Benedict Arnold', 'Serge Plekhanov', 'Mata Hari'),
(97, 8, 'How many republics made up the former Soviet Union?', '15', '12', '20', '10', '15'),
(98, 8, 'When was the first Nobel Prize in economics awarded?', '1969', '1949', '1909', '1929', '1969'),
(99, 8, 'Which book was written by NiccolÃ² Machiavelli?', 'The Once and Future King', 'The Prince', 'The Good Earth', 'War and Peace', 'The Prince'),
(100, 8, 'Of what country was SimÃ³n BolÃ­var president?', 'Bolivia', 'Peru', 'Argentina', 'Chile', 'Peru'),
(101, 8, 'Which Indian president was involved in the struggle for Irish independence?', 'V.V. Giri', 'Neelam Sanjiva Reddy', 'Gulzarilal Nanda', 'S. Radhakrishnan', 'V.V. Giri'),
(102, 8, 'Who was Karl Marxâ€™s associate and fellow political theoretician?', 'Friedrich Nietzsche', 'Friedrich II', 'Friedrich Engels', 'Friedrich Reich', 'Friedrich Engels'),
(103, 8, 'Where were the Aegean Bronze Age civilizations located?', 'Algeria', 'India', 'Greece', 'Spain', 'Greece'),
(104, 8, 'Which of these battles did not involve Roman soldiers?', 'Arretium', 'Chalons', 'Cannae', 'Thermopylae', 'Thermopylae'),
(105, 8, 'Through which national park does the Continental Divide not pass?', 'Yellowstone', 'Rocky Mountain', 'Glacier', 'Yosemite', 'Yosemite'),
(106, 8, 'On what peninsula in Washington would you find the Olympic Mountains?', 'Seattle Peninsula', ' Puget Peninsula', 'Washington Peninsula', 'Olympic Peninsula', 'Olympic Peninsula'),
(107, 8, 'Who was the first U.S. president to appear on television?', 'Richard Nixon', 'Ronald Reagan', 'Abraham Lincoln', 'Franklin Delano Roosevelt', 'Franklin Delano Roosevelt'),
(108, 8, 'What automobile was named after Henry Fordâ€™s only son?', 'Buick', 'Oldsmobile', 'Isuzu', 'Edsel', 'Edsel'),
(109, 8, 'In what American state would you find Denali?', 'Alabama', 'Arkansas', 'Alaska', 'Arizona', 'Alaska'),
(110, 8, 'Which state seceded from Virginia in 1863?', 'the District of Columbia', 'North Carolina', 'West Virginia', 'Maryland', 'West Virginia'),
(111, 9, 'Ang kambal katinig ay...?  ', 'Pares Minimal', 'Klaster', 'Diptonggo', 'Salawikain', 'Pares Minimal'),
(112, 9, 'Kilala bilang "Huseng Batute" ', 'Gregorio H. del Pilar', 'Melchora Aquino', 'Apolinario Mabini', 'Jose Corazon de Hesus', 'Melchora Aquino'),
(113, 9, 'Tumatanggap ng kilos sa isang pangungusap ', 'Di - tuwirang layon', ' Tuwirang layon', 'Simuno', 'Panaguri', 'Simuno'),
(114, 9, 'Pahapyaw na pagbasa ', 'Sintaksis', 'Skimming', 'Sesura', 'Sukat', 'Sukat'),
(115, 9, 'Awit na panghehele ', 'Lullaby', 'Sesura', 'Bugtong', 'Oyayi', 'Lullaby'),
(116, 9, 'Ito ang mga salitang tumutukoy sa tao, bagay, hayop, lugar at pangyayari.', 'PANGAHALIP', 'PANGALAN', 'PANGNGALAN', 'KLASTER', 'PANGNGALAN'),
(117, 9, 'Aling pangngalan ang naiiba sa pangkat?', 'KALABAW', 'MANOK', 'PUNO', 'KABAYO', 'MANOK'),
(118, 9, 'Nagpunta kami sa parke at namasyal. Alin ang PANGNGALAN sa pangungusap?', 'KAMI', 'PARKE', 'NAMASYAL', 'NAGPUNTA', 'NAGPUNTA'),
(119, 9, 'Lapis, Pantasa, Papel at Aklat. Ano ang kategorya ng Pangngalan?', 'TAO', 'LUGAR', 'BAGAY', 'PANGYAYARI', 'LUGAR'),
(120, 9, 'Ito ay mga pangngalang tiyak at sigurado.', 'PAMBALANA', 'PANTANGI', 'KONGKRETO', 'PANGALAN', 'PANGALAN'),
(121, 9, 'Aling titik ang gamit ng mga pangngalang pambalana?', 'MALIIT', 'MALIIT AT MALAKI', 'MALAKI', 'ALPABETO', 'MALIIT'),
(122, 9, 'Ito ang mga pangngalang hindi tiyak o sigurado.', 'PANTANGI', 'PAMBALANA', 'PANGALAN', 'DIPTONGGO', 'DIPTONGGO'),
(123, 9, 'Alin ang pangngalang pambalana ng salitang NIKE?', 'LAPIS', 'SAPATOS', 'KOMPYUTER', 'PAGKAIN', 'PAGKAIN'),
(124, 9, 'Ipinagmamalaki ko ang aking mga KAIBIGAN.', 'BAGAY', 'PANGYAYARI', 'LUGAR', 'TAO', 'TAO'),
(125, 9, 'Ibibili ko ng sapatos si kuya sa PALENGKE.', 'BAGAY', 'LUGAR', 'PANGYAYARI ', 'TAO', 'PANGYAYARI '),
(126, 9, 'Sabay sabay kaming nagdarasal sa simbahan tuwing KAARAWAN ni Lolo.', 'BAGAY', 'LUGAR', 'PANGYAYARI', 'TAO', 'TAO'),
(127, 9, 'Nagluto si ATE ng spagetti noong pasko.', 'BAGAY', 'LUGAR', 'PANGYAYARI', 'TAO', 'BAGAY'),
(128, 9, 'Ang mga anyong tubig at lupa ay biyaya ng Diyos sa atin.', 'pantangi', 'tahas', 'basal', 'lansakan', 'tahas'),
(129, 9, 'Maipagmamalaki nang husto ng mga Pilipino ang kagandahan ng ating bansa. ', 'pantangi', 'tahas', 'basal', 'lansakan', 'lansakan'),
(130, 9, 'Sa Pamantasan ng De La Salle nag-aaral ang mga nanalo sa volleball. ', 'pantangi', 'tahas', 'basal', 'lansakan', 'lansakan');

-- --------------------------------------------------------

--
-- Table structure for table `siblingsrecord`
--

CREATE TABLE IF NOT EXISTS `siblingsrecord` (
`siblingsID` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `Name_Siblings` varchar(255) NOT NULL,
  `School_Place_Work` varchar(255) NOT NULL,
  `Siblings_Age` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `siblingsrecord`
--

INSERT INTO `siblingsrecord` (`siblingsID`, `user_Id`, `Name_Siblings`, `School_Place_Work`, `Siblings_Age`) VALUES
(30, 78, 'v', 'v', '13'),
(31, 78, 'b', 'b', '3'),
(40, 78, 'DAD', 'DADA', '2'),
(60, 80, '', '', ''),
(61, 81, '', '', ''),
(62, 82, '', '', ''),
(66, 83, '', '', ''),
(67, 84, '', '', ''),
(68, 41, 'DAD', 'DADA', '2'),
(69, 41, 'dada', 'dada', '35'),
(70, 41, 'DAD', 'DADA', '2'),
(71, 41, 'dada', 'dada', '35'),
(72, 41, 'DAD', 'DADA', '2'),
(73, 41, 'dada', 'dada', '35'),
(74, 41, 'DAD', 'DADA', '2'),
(75, 41, 'dada', 'dada', '35'),
(76, 41, 'dada', 'dada', '35'),
(77, 41, 'DAD', 'DADA', '2'),
(78, 41, 'dada', 'dada', '35'),
(79, 41, 'DAD', 'DADA', '2'),
(80, 41, '', '', ''),
(81, 41, '', '', ''),
(82, 41, '', '', ''),
(83, 42, 'gg', 'gg', '3'),
(84, 42, 'dd', 'dd', '4'),
(85, 42, 'fdsf', 'sdfsd', '34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_Id` int(11) NOT NULL,
  `school_year` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `enrollmentStatus` varchar(50) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `age` varchar(50) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bh_Address` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `birth_order` varchar(20) NOT NULL,
  `civilstatus` varchar(50) NOT NULL,
  `school` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `spouseName` varchar(100) NOT NULL,
  `no_of_Children` varchar(10) NOT NULL,
  `F_Name` varchar(255) NOT NULL,
  `F_Address` varchar(255) NOT NULL,
  `F_Landline` varchar(255) NOT NULL,
  `F_Contact` varchar(255) NOT NULL,
  `F_Education` varchar(255) NOT NULL,
  `F_Occupation` varchar(255) NOT NULL,
  `F_Annual_Income` varchar(255) NOT NULL,
  `F_Religion` varchar(255) NOT NULL,
  `M_Name` varchar(255) NOT NULL,
  `M_Address` varchar(255) NOT NULL,
  `M_Landline` varchar(255) NOT NULL,
  `M_Contact` varchar(255) NOT NULL,
  `M_Education` varchar(255) NOT NULL,
  `M_Occupation` varchar(255) NOT NULL,
  `M_Annual_Income` varchar(255) NOT NULL,
  `M_Religion` varchar(255) NOT NULL,
  `Name_Siblings` varchar(255) NOT NULL,
  `School_Place_Work` text NOT NULL,
  `Siblings_Age` varchar(20) NOT NULL,
  `Parent_status` varchar(255) NOT NULL,
  `G_Name` varchar(255) NOT NULL,
  `G_Address` varchar(255) NOT NULL,
  `G_Landline` varchar(255) NOT NULL,
  `G_Contact` varchar(255) NOT NULL,
  `G_Relation` varchar(255) NOT NULL,
  `Emerge_Name` varchar(255) NOT NULL,
  `Emerge_Address` varchar(255) NOT NULL,
  `Emerge_Contact` varchar(100) NOT NULL,
  `Elem_School` varchar(255) NOT NULL,
  `Elem_Place` varchar(255) NOT NULL,
  `Elem_DateAttended` varchar(100) NOT NULL,
  `HS_School` varchar(255) NOT NULL,
  `HS_Place` varchar(255) NOT NULL,
  `HS_DateAttended` varchar(100) NOT NULL,
  `College_School` varchar(255) NOT NULL,
  `College_Place` varchar(255) NOT NULL,
  `College_DateAttended` varchar(100) NOT NULL,
  `Voc_School` varchar(255) NOT NULL,
  `Voc_Place` varchar(255) NOT NULL,
  `Voc_DateAttended` varchar(100) NOT NULL,
  `easySubject` varchar(100) NOT NULL,
  `difficultSubject` varchar(100) NOT NULL,
  `Sub_lowestGrade` varchar(50) NOT NULL,
  `Sub_HighestGrade` varchar(50) NOT NULL,
  `Awards` varchar(255) NOT NULL,
  `GWA` varchar(20) NOT NULL,
  `NatureSchooling` varchar(50) NOT NULL,
  `InterruptedforHowLong` text NOT NULL,
  `Reason` text NOT NULL,
  `School_Org` text NOT NULL,
  `School_Position` text NOT NULL,
  `OutsideSchool_Org` text NOT NULL,
  `OutsideSchool_Position` text NOT NULL,
  `Interests` text NOT NULL,
  `Skills` text NOT NULL,
  `Hobbies` text NOT NULL,
  `Characteristics` text NOT NULL,
  `presentProblems` text NOT NULL,
  `presentFears` text NOT NULL,
  `Disabilities` text NOT NULL,
  `ChronicIllness` text NOT NULL,
  `Med_Reg_taken` text NOT NULL,
  `Accidents_exp` text NOT NULL,
  `Operation_exp` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'user.png',
  `user_status` varchar(20) NOT NULL DEFAULT 'Pending',
  `user_type` varchar(20) NOT NULL DEFAULT 'User',
  `verification_code` varchar(255) NOT NULL,
  `date_registered` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=85 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `school_year`, `semester`, `enrollmentStatus`, `firstname`, `middlename`, `lastname`, `suffix`, `gender`, `dob`, `age`, `place_of_birth`, `address`, `bh_Address`, `landline`, `email`, `contact`, `birth_order`, `civilstatus`, `school`, `language`, `religion`, `nationality`, `spouseName`, `no_of_Children`, `F_Name`, `F_Address`, `F_Landline`, `F_Contact`, `F_Education`, `F_Occupation`, `F_Annual_Income`, `F_Religion`, `M_Name`, `M_Address`, `M_Landline`, `M_Contact`, `M_Education`, `M_Occupation`, `M_Annual_Income`, `M_Religion`, `Name_Siblings`, `School_Place_Work`, `Siblings_Age`, `Parent_status`, `G_Name`, `G_Address`, `G_Landline`, `G_Contact`, `G_Relation`, `Emerge_Name`, `Emerge_Address`, `Emerge_Contact`, `Elem_School`, `Elem_Place`, `Elem_DateAttended`, `HS_School`, `HS_Place`, `HS_DateAttended`, `College_School`, `College_Place`, `College_DateAttended`, `Voc_School`, `Voc_Place`, `Voc_DateAttended`, `easySubject`, `difficultSubject`, `Sub_lowestGrade`, `Sub_HighestGrade`, `Awards`, `GWA`, `NatureSchooling`, `InterruptedforHowLong`, `Reason`, `School_Org`, `School_Position`, `OutsideSchool_Org`, `OutsideSchool_Position`, `Interests`, `Skills`, `Hobbies`, `Characteristics`, `presentProblems`, `presentFears`, `Disabilities`, `ChronicIllness`, `Med_Reg_taken`, `Accidents_exp`, `Operation_exp`, `password`, `image`, `user_status`, `user_type`, `verification_code`, `date_registered`, `username`) VALUES
(40, '', '', '', 'Erwin', 'Cabag', 'Son', '', 'Male', '2017-02-07', '5', '', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'admin@gmail.com', '9359428961', '', '', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0192023a7bbd73250516f069df18b500', 'daniel-lincoln-NR705beN_CU-unsplash.jpg', 'Confirmed', 'Admin', '374025', '2022-09-10', ''),
(41, 'gagafdsf', '1st Semester', 'Transferee', 'Erwingfdgfdfdsf', 'Cabagsdf', 'Sonfsd', '', 'Male', '2021-03-04', '1', '', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'sonerwingfd12@gmail.com', '9359428963', '', '', 'Pdsadadaurok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Interrupted', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '033c91317f9b6795106a825cf8ef773d', '25 (1).jpg', 'Confirmed', 'User', '', '2022-10-22', 'Wis'),
(42, 'gfdfdfsd', '', '', 'Erwin', 'Cabag', 'Son', 'Jr', 'Male', '2018-02-07', '18', '', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'sonerwin12@gmail.com', '9359428963', '', '', 'Purok San Isidro, Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Father With another Partner,Mother With Another Partner,', '', '', '', '', '', '', '', '', '', '', '', 'gfdgg', 'gfd', '', 'dfgd', 'gfd', '', '', '', '', 'ENGLISHENGLISHENGLISH', 'ENGLISHENGLISH', 'ENGLISHENGLISH', 'ENGLISHENGLISH', '', '23', 'Interrupted', '', '', '', '', '', '', 'gfd', 'gfd', 'df', 'fdgdfg', 'gdfg', 'dfgdfg', '', 'fdgdf', 'fdgdg', 'gdfg', 'gdfg', '329349', '12.jpg', 'Confirmed', 'User', '507900', '2022-10-22', 'HAHA'),
(70, 'fds', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'Norlyngelfdsfdsig16@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Father With another Partner,Mother With Another Partner,', '', '', '', '', '', '', '', '', 'gf', 'gf', 'gf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '25.jpg', 'Pending', 'User', '', '0000-00-00', ''),
(71, 'fdf', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', 'gfdgdfg', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', 'dfg', 'gfdgg', 'Norlyngeliggfdgfd16@gmail.com', '', '', '', '', 'gf', 'gfdgf', 'gfd', '', '', '', '', '', '', '', '', '', '', 'gfd', '', '', '', '', '', '', '', '', '', '', 'Married Annulled/Legally Separated,Mother OFW,', '', '', '', '', '', '', '', '', '', '', '', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', 'HAHAHAHA', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '25.jpg', 'Pending', 'User', '', '0000-00-00', ''),
(73, 'gfdgdg', '2nd Semester', 'Freshmen', 'gfdg', 'fdgg', 'fdg', '', 'Female', '2022-12-02', '2 weeks old', 'gfdgdgfdg', 'gfdg', '', 'fd', 'Norlyngeligfdgfdgdgdgfdgdg16@gmail.com', '9359428963', '', '', 'fdgd', '', 'dfgd', 'gdfg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'user.png', 'Pending', 'User', '', '0000-00-00', ''),
(74, 'CCCCCCC', '1st Semester', 'Transferee', 'CCCCCCCCCCCCCC', 'CCCCCCC', 'CCCCCCC', '', 'Male', '2022-12-07', '1 week old', 'CCCCCCC', 'CCCCCCC', 'CCCCCCC', 'CCCCCCC', 'NorlyngeCCCCCCClig16@gmail.com', 'CCCCCCC', '2nd', '', 'CCCCCCC', 'CCCCCCC', 'CCCCCCC', 'CCCCCCC', '', '', 'CCCCCCC', '', '', '', '', '', '', '', 'CCCCCCC', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'user.png', 'Pending', 'User', '', '0000-00-00', ''),
(75, 'vdvdvd', '', 'Transferee', 'vdvdvd', 'vdvdvd', 'vdvdvd', '', 'Female', '2022-12-08', '1 week old', '', '', '', '', 'vdvdvdvdvdvd@gmail.com', '', '', '', '', '', '', '', '', '', 'vdvdvd', '', '', '', '', '', '', '', 'vdvdvd', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'user.png', 'Pending', 'User', '', '0000-00-00', ''),
(76, '', '', '', 'nnnnnnnnn', 'nnnnnnnnn', 'nnnnnnnnn', '', '', '', '', '', 'nnnnnnnnn', '', '', 'nnnnnnnnn@gmail.com', '', '', '', 'nnnnnnnnn', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'user.png', 'Pending', 'User', '', '0000-00-00', ''),
(77, 'bvbvbv', '2nd Semester', 'Freshmen', 'bvbvbv', 'bvbvbv', 'bvbvbv', '', 'Male', '2022-12-05', '1 week old', 'bvbvbv', 'bvbvbvbvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv@gmail.com', '9359428963', '2nd', 'Single', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'NA', 'NA', 'bvbvbv', 'bvbvbv', 'bvbvbv', '9123456789', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', '', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', '', '', '', 'Permanently Separated,Father OFW,', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', '', 'bvbvbv', 'bvbvbv', 'bvbvbvbvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'Interrupted', 'bvbvbv', 'bvbvbv', '', '', '', '', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbvbvbvbv', 'bvbvbv', '', 'bvbvbv', 'bvbvbv', 'bvbvbv', 'bvbvbv', '', '25.jpg', 'Pending', 'User', '', '0000-00-00', ''),
(78, 'New', '1st Semester', 'Freshmen', 'New', 'New', 'New', 'New', 'Male', '2022-12-09', '1 week old', 'New', 'New', 'New', 'New', 'Norlyngelig16New@gmail.com', '9359428963', '2nd', 'Single', 'New', 'New', 'New', 'New', 'NA', 'NA', 'New', 'New', 'New', '9123456789', 'New', 'New', 'New', 'New', 'New', 'New', 'New', '9123465798', 'New', 'New', 'New', 'New', '', '', '', 'Living together,Permanently Separated,Married Annulled/Legally Separated,Father With another Partner,', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', 'New', '2022-12-13', 'New', 'New', '2022-12-06', 'New', 'New', '2022-11-30', 'New', 'New', '2022-12-01', 'New', 'New', 'New', 'New', 'New', 'New', 'Continuous', 'New', 'New', '', '', '', '', 'New', 'New', 'New', 'New', 'New', 'New', '', 'New', 'New', 'New', 'New', '366187', '25.jpg', 'Pending', 'User', '', '2022-12-17', ''),
(79, 'vc', '2nd Semester', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'Norlyngelig1fdsfsd6@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '147303', 'user.png', 'Pending', 'User', '', '2022-12-17', ''),
(80, '', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'fdsfs3rse@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '317709', 'user.png', 'Pending', 'User', '', '2022-12-17', ''),
(81, '', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'Norlyngeligfdsfsd43fds16@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '668843', 'user.png', 'Pending', 'User', '', '2022-12-17', ''),
(82, '', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'Norlyngeligfdsf323131316@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '223332', 'user.png', 'Pending', 'User', '', '2022-12-17', ''),
(83, '', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'Norlyngdadasd243elig16@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '247233', 'user.png', 'Pending', 'User', '', '2022-12-17', ''),
(84, '', '', '', 'Norlyn', 'Son', 'Gelig', '', '', '', '', '', 'Sitio Upper Landing, Daanlungsod, Medellin, Cebu', '', '', 'Norlyngedsadasdada432lig16@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '391299', 'user.png', 'Pending', 'User', '', '2022-12-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
`ans_Id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `q1_answer` text NOT NULL,
  `q2_answer` text NOT NULL,
  `q3_answer` text NOT NULL,
  `q4_answer` text NOT NULL,
  `q5_answer` text NOT NULL,
  `q6_answer` text NOT NULL,
  `q7_answer` text NOT NULL,
  `q8_answer` text NOT NULL,
  `q9_answer` text NOT NULL,
  `q10_answer` text NOT NULL,
  `q11_answer` text NOT NULL,
  `q12_answer` text NOT NULL,
  `q13_answer` text NOT NULL,
  `q14_answer` text NOT NULL,
  `q15_answer` text NOT NULL,
  `q16_answer` text NOT NULL,
  `q17_answer` text NOT NULL,
  `q18_answer` text NOT NULL,
  `q19_answer` text NOT NULL,
  `q20_answer` text NOT NULL,
  `q21_answer` text NOT NULL,
  `q22_answer` text NOT NULL,
  `q23_answer` text NOT NULL,
  `q24_answer` text NOT NULL,
  `q25_answer` text NOT NULL,
  `q26_answer` text NOT NULL,
  `q27_answer` text NOT NULL,
  `q28_answer` text NOT NULL,
  `q29_answer` text NOT NULL,
  `q30_answer` text NOT NULL,
  `q31_answer` text NOT NULL,
  `q32_answer` text NOT NULL,
  `q33_answer` text NOT NULL,
  `q34_answer` text NOT NULL,
  `q35_answer` text NOT NULL,
  `q36_answer` text NOT NULL,
  `q37_answer` text NOT NULL,
  `q38_answer` text NOT NULL,
  `q39_answer` text NOT NULL,
  `q40_answer` text NOT NULL,
  `q41_answer` text NOT NULL,
  `q42_answer` text NOT NULL,
  `q43_answer` text NOT NULL,
  `q44_answer` text NOT NULL,
  `q45_answer` text NOT NULL,
  `q46_answer` text NOT NULL,
  `q47_answer` text NOT NULL,
  `q48_answer` text NOT NULL,
  `q49_answer` text NOT NULL,
  `q50_answer` text NOT NULL,
  `q51_answer` text NOT NULL,
  `q52_answer` text NOT NULL,
  `q53_answer` text NOT NULL,
  `q54_answer` text NOT NULL,
  `q55_answer` text NOT NULL,
  `q56_answer` text NOT NULL,
  `q57_answer` text NOT NULL,
  `q58_answer` text NOT NULL,
  `q59_answer` text NOT NULL,
  `q60_answer` text NOT NULL,
  `q61_answer` text NOT NULL,
  `q62_answer` text NOT NULL,
  `q63_answer` text NOT NULL,
  `q64_answer` text NOT NULL,
  `q65_answer` text NOT NULL,
  `q66_answer` text NOT NULL,
  `q67_answer` text NOT NULL,
  `q68_answer` text NOT NULL,
  `q69_answer` text NOT NULL,
  `q70_answer` text NOT NULL,
  `q71_answer` text NOT NULL,
  `q72_answer` text NOT NULL,
  `q73_answer` text NOT NULL,
  `q74_answer` text NOT NULL,
  `q75_answer` text NOT NULL,
  `q76_answer` text NOT NULL,
  `q77_answer` text NOT NULL,
  `q78_answer` text NOT NULL,
  `q79_answer` text NOT NULL,
  `q80_answer` text NOT NULL,
  `q81_answer` text NOT NULL,
  `q82_answer` text NOT NULL,
  `q83_answer` text NOT NULL,
  `q84_answer` text NOT NULL,
  `q85_answer` text NOT NULL,
  `q86_answer` text NOT NULL,
  `q87_answer` text NOT NULL,
  `q88_answer` text NOT NULL,
  `q89_answer` text NOT NULL,
  `q90_answer` text NOT NULL,
  `q91_answer` text NOT NULL,
  `q92_answer` text NOT NULL,
  `q93_answer` text NOT NULL,
  `q94_answer` text NOT NULL,
  `q95_answer` text NOT NULL,
  `q96_answer` text NOT NULL,
  `q97_answer` text NOT NULL,
  `q98_answer` text NOT NULL,
  `q99_answer` text NOT NULL,
  `q100_answer` text NOT NULL,
  `date_of_exam` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user_answers`
--

INSERT INTO `user_answers` (`ans_Id`, `user_Id`, `q1_answer`, `q2_answer`, `q3_answer`, `q4_answer`, `q5_answer`, `q6_answer`, `q7_answer`, `q8_answer`, `q9_answer`, `q10_answer`, `q11_answer`, `q12_answer`, `q13_answer`, `q14_answer`, `q15_answer`, `q16_answer`, `q17_answer`, `q18_answer`, `q19_answer`, `q20_answer`, `q21_answer`, `q22_answer`, `q23_answer`, `q24_answer`, `q25_answer`, `q26_answer`, `q27_answer`, `q28_answer`, `q29_answer`, `q30_answer`, `q31_answer`, `q32_answer`, `q33_answer`, `q34_answer`, `q35_answer`, `q36_answer`, `q37_answer`, `q38_answer`, `q39_answer`, `q40_answer`, `q41_answer`, `q42_answer`, `q43_answer`, `q44_answer`, `q45_answer`, `q46_answer`, `q47_answer`, `q48_answer`, `q49_answer`, `q50_answer`, `q51_answer`, `q52_answer`, `q53_answer`, `q54_answer`, `q55_answer`, `q56_answer`, `q57_answer`, `q58_answer`, `q59_answer`, `q60_answer`, `q61_answer`, `q62_answer`, `q63_answer`, `q64_answer`, `q65_answer`, `q66_answer`, `q67_answer`, `q68_answer`, `q69_answer`, `q70_answer`, `q71_answer`, `q72_answer`, `q73_answer`, `q74_answer`, `q75_answer`, `q76_answer`, `q77_answer`, `q78_answer`, `q79_answer`, `q80_answer`, `q81_answer`, `q82_answer`, `q83_answer`, `q84_answer`, `q85_answer`, `q86_answer`, `q87_answer`, `q88_answer`, `q89_answer`, `q90_answer`, `q91_answer`, `q92_answer`, `q93_answer`, `q94_answer`, `q95_answer`, `q96_answer`, `q97_answer`, `q98_answer`, `q99_answer`, `q100_answer`, `date_of_exam`) VALUES
(8, 42, 'NA', 'to be abducted', 'NA', 'to have lived', 'NA', 'NA', 'There isn''t point', 'NA', 'were', 'NA', 'NA', 'were made sleep', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', '2022-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`cat_Id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`exam_Id`);

--
-- Indexes for table `insideschool_org`
--
ALTER TABLE `insideschool_org`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `outsideschool_org`
--
ALTER TABLE `outsideschool_org`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`quest_Id`);

--
-- Indexes for table `siblingsrecord`
--
ALTER TABLE `siblingsrecord`
 ADD PRIMARY KEY (`siblingsID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_Id`);

--
-- Indexes for table `user_answers`
--
ALTER TABLE `user_answers`
 ADD PRIMARY KEY (`ans_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `cat_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `exam_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `insideschool_org`
--
ALTER TABLE `insideschool_org`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `outsideschool_org`
--
ALTER TABLE `outsideschool_org`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `quest_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=131;
--
-- AUTO_INCREMENT for table `siblingsrecord`
--
ALTER TABLE `siblingsrecord`
MODIFY `siblingsID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `user_answers`
--
ALTER TABLE `user_answers`
MODIFY `ans_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
