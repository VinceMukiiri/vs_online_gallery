-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2014 at 11:27 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` text,
  `content_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `user_idx` (`user_id`),
  KEY `content_idx` (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_text`, `content_id`, `user_id`, `date`) VALUES
(1, 'Nice job on the content. Keep up the good work!!', 12, 2, 1411999563),
(2, 'Again, keep it up!', 12, 2, 1411999697),
(3, 'How exactly do you find the derivative of the product between two functions?', 14, 3, 1412011364);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext,
  `description` text,
  `file_name` varchar(100) DEFAULT NULL,
  `file_type` varchar(20) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `uploader_user_id` int(11) DEFAULT NULL,
  `upload_date` bigint(20) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `title`, `description`, `file_name`, `file_type`, `group_id`, `uploader_user_id`, `upload_date`, `view_count`) VALUES
(9, 'The human Intellect', 'One of the powers of the human mind', 'theme5-06_intellect.pdf', '.pdf', NULL, 2, 1411985277, 29),
(10, 'The human will', 'A description of the the will of the human person', 'theme6-06_human_will1.pdf', '.pdf', NULL, 2, 1411985744, 3),
(11, 'Philosophical Anthropology', 'General Philosophical Anthropology Notes', 'Philosophical_Anthropology_Notes_20131.pdf', '.pdf', NULL, 2, 1411985782, 0),
(12, 'Sensitive Life', 'Internal and External Senses', 'theme2-06_sensitive_life1.pdf', '.pdf', NULL, 2, 1411985817, 10),
(13, 'Limits', 'An overview of how to calculate limits', 'CHAPTER_1-_Limits.pdf', '.pdf', NULL, 2, 1411985922, 12),
(14, 'Derivatives', 'How to calculate derivatives', 'Derivatives_of_Functions.pdf', '.pdf', NULL, 2, 1411985946, 6);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(45) NOT NULL,
  `group_hashed_password` varchar(32) NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups_users`
--

CREATE TABLE IF NOT EXISTS `groups_users` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  KEY `groupid_idx` (`group_id`),
  KEY `userid_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `hashed_password` varchar(32) NOT NULL,
  `user_type` int(11) NOT NULL,
  `first_name` varchar(15) DEFAULT NULL,
  `second_name` varchar(15) DEFAULT NULL,
  `profile_picture` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `hashed_password`, `user_type`, `first_name`, `second_name`, `profile_picture`, `email`) VALUES
(1, 'Vince', '25d55ad283aa400af464c76d713c07ad', 0, 'Vincent', 'Mukiiri', NULL, NULL),
(2, 'EdMukiiri', '25d55ad283aa400af464c76d713c07ad', 0, 'Edwin', 'Githinji', 'mask5.jpg', 'EdMukiiri@my-site.co.ke'),
(3, 'VinceMukiiri', 'b315e6132959204fe95ddf3fdfa1b480', 0, 'Vince', '0', NULL, 'vincemukiiri@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `content` FOREIGN KEY (`content_id`) REFERENCES `content` (`content_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `groups_users`
--
ALTER TABLE `groups_users`
  ADD CONSTRAINT `groupid` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `userid` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
