-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2015 at 07:08 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_470`
--

-- --------------------------------------------------------

--
-- Table structure for table `connections`
--

CREATE TABLE IF NOT EXISTS `connections` (
  `Con_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Fr` int(11) NOT NULL,
  `NotiDate` varchar(255) DEFAULT NULL,
  `Event` text,
  `Pat_Id` int(11) NOT NULL,
  `PsychiatristId` int(11) NOT NULL,
  `New` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  PRIMARY KEY (`Con_ID`),
  KEY `Pat_Id` (`Pat_Id`),
  KEY `PsychiatristId` (`PsychiatristId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `connections`
--

INSERT INTO `connections` (`Con_ID`, `Fr`, `NotiDate`, `Event`, `Pat_Id`, `PsychiatristId`, `New`, `Status`) VALUES
(35, 0, 'Friday 10th of April 2015 08:16:34 PM<br>', 'Approved your request', 5, 4, 0, 1),
(36, 0, 'Sunday 12th of April 2015 09:56:04 AM<br>', 'Approved your request', 6, 4, 0, 1),
(37, 0, 'Sunday 12th of April 2015 01:29:57 PM<br>', 'Approved your request', 5, 4, 0, 1),
(38, 0, 'Sunday 12th of April 2015 01:30:53 PM<br>', 'Approved your request', 5, 4, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `imgtrack`
--

CREATE TABLE IF NOT EXISTS `imgtrack` (
  `id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgtrack`
--

INSERT INTO `imgtrack` (`id`, `count`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `MsgId` int(11) NOT NULL AUTO_INCREMENT,
  `MsgDate` varchar(255) DEFAULT NULL,
  `Message` text,
  `Pat_Id` int(11) NOT NULL,
  `PsychiatristId` int(11) NOT NULL,
  `fr` int(11) NOT NULL,
  `tom` int(11) NOT NULL,
  `propic` varchar(250) NOT NULL,
  PRIMARY KEY (`MsgId`),
  KEY `Pat_Id` (`Pat_Id`),
  KEY `PsychiatristId` (`PsychiatristId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=126 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MsgId`, `MsgDate`, `Message`, `Pat_Id`, `PsychiatristId`, `fr`, `tom`, `propic`) VALUES
(115, 'Friday 10th of April 2015 08:18:02 PM', 'Hello Ananta :)', 5, 4, 1, 0, 'up/11087404_922127167808315_1398715536_n5.jpg'),
(116, 'Friday 10th of April 2015 08:18:14 PM', 'I am having some problem', 5, 4, 1, 0, 'up/11087404_922127167808315_1398715536_n5.jpg'),
(117, 'Friday 10th of April 2015 08:18:26 PM', 'How can I help please ?', 5, 4, 0, 1, 'up/11088723_922127204474978_333648979_n4.jpg'),
(118, 'Saturday 11th of April 2015 01:27:04 AM', 'We are always here for your support...', 5, 4, 0, 1, 'up/11088723_922127204474978_333648979_n4.jpg'),
(119, 'Saturday 11th of April 2015 05:41:20 PM', 'all test', 5, 4, 0, 1, 'up/11088723_922127204474978_333648979_n4.jpg'),
(120, 'Saturday 11th of April 2015 05:41:23 PM', 'alltest', 5, 4, 0, 1, 'up/11088723_922127204474978_333648979_n4.jpg'),
(121, 'Saturday 11th of April 2015 05:41:27 PM', 'all test', 5, 4, 0, 1, 'up/11088723_922127204474978_333648979_n4.jpg'),
(122, 'Sunday 12th of April 2015 09:58:02 AM', 'hello sir i am facing problem', 6, 4, 0, 1, 'up/11068836_922127221141643_1739286409_n-0016.jpg'),
(123, 'Sunday 12th of April 2015 09:58:22 AM', 'yes please how can i help?', 6, 4, 1, 0, 'up/11087404_922127167808315_1398715536_n5.jpg'),
(124, 'Sunday 12th of April 2015 01:32:04 PM', 'hello', 5, 4, 1, 0, 'up/11087404_922127167808315_1398715536_n5.jpg'),
(125, 'Sunday 12th of April 2015 11:26:32 PM', 'test', 5, 4, 1, 0, 'up/11087404_922127167808315_1398715536_n5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `PatientId` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `ProPic` varchar(255) DEFAULT NULL,
  `Occupation` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `OnlineNow` int(11) NOT NULL,
  PRIMARY KEY (`PatientId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`PatientId`, `LastName`, `FirstName`, `Gender`, `Age`, `ProPic`, `Occupation`, `Email`, `Password`, `OnlineNow`) VALUES
(5, 'Foysal', 'Abu', 'Male', 12, 'up/age_47.jpg', 'Student', 'foysal@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(6, 'robin', 'Shafiq', 'Male', 12, 'up/11068836_922127221141643_1739286409_n-0016.jpg', 'student', 'sha@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(7, 'Robin', 'Test', 'Male', 12, 'img_icon/blank_pic.jpg', 'student', ' test@gmail.com', 'c8ffe9a587b126f152ed3d89a146b445', 0);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
  `ProbId` int(11) NOT NULL AUTO_INCREMENT,
  `Subject` varchar(255) DEFAULT NULL,
  `Details` text,
  `PreferedTime` varchar(255) DEFAULT NULL,
  `Creation_Date` varchar(255) DEFAULT NULL,
  `Pat_Id` int(11) NOT NULL,
  `PsychiatristId` int(11) NOT NULL,
  `ConnectionState` int(11) NOT NULL,
  PRIMARY KEY (`ProbId`),
  KEY `Pat_Id` (`Pat_Id`),
  KEY `PsychiatristId` (`PsychiatristId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`ProbId`, `Subject`, `Details`, `PreferedTime`, `Creation_Date`, `Pat_Id`, `PsychiatristId`, `ConnectionState`) VALUES
(20, 'ADHD Issue', 'I am feeling Hyperactive', '10:15am-11:15am', 'Friday 10th of April 2015 08:16:34 PM<br>', 5, 4, 1),
(21, 'ADHD', 'ami onek heper afjdkfj', '9:00am-10:00am', 'Sunday 12th of April 2015 09:56:04 AM<br>', 6, 4, 1),
(22, 'OCD', 'This will work now', '10:15am-11:15am', 'Sunday 12th of April 2015 01:30:53 PM<br>', 5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrists`
--

CREATE TABLE IF NOT EXISTS `psychiatrists` (
  `PsychiatristId` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(255) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `ProPic` varchar(255) DEFAULT NULL,
  `FieldOfExp` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `OnlineNow` int(11) NOT NULL,
  PRIMARY KEY (`PsychiatristId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `psychiatrists`
--

INSERT INTO `psychiatrists` (`PsychiatristId`, `LastName`, `FirstName`, `ProPic`, `FieldOfExp`, `Email`, `Password`, `OnlineNow`) VALUES
(4, 'Jalil', 'Ananta', 'up/11087404_922127167808315_1398715536_n5.jpg', 'ADHD', 'ananta@gmail.com', '47bce5c74f589f4867dbd57e9ca9f808', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connections`
--
ALTER TABLE `connections`
  ADD CONSTRAINT `connections_ibfk_1` FOREIGN KEY (`Pat_Id`) REFERENCES `patients` (`PatientId`),
  ADD CONSTRAINT `connections_ibfk_2` FOREIGN KEY (`PsychiatristId`) REFERENCES `psychiatrists` (`PsychiatristId`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`Pat_Id`) REFERENCES `patients` (`PatientId`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`PsychiatristId`) REFERENCES `psychiatrists` (`PsychiatristId`);

--
-- Constraints for table `problems`
--
ALTER TABLE `problems`
  ADD CONSTRAINT `problems_ibfk_1` FOREIGN KEY (`Pat_Id`) REFERENCES `patients` (`PatientId`),
  ADD CONSTRAINT `problems_ibfk_2` FOREIGN KEY (`PsychiatristId`) REFERENCES `psychiatrists` (`PsychiatristId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
