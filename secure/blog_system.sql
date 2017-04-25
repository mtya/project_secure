-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 08:25 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`, `role`) VALUES
(1, 'Admin', 'admin', 'user'),
(2, 'manager ', '12', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`) VALUES
(1, 'Phones'),
(2, 'Computers'),
(3, 'TVs'),
(4, 'Projector');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `is_confirm` int(11) NOT NULL DEFAULT '0',
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `user_email`, `comment`, `post_id`, `is_confirm`, `answer`) VALUES
(6, 'Ahmad', 'ahmad@gmail.com', 'please if possible to send me the cost of this new released product ', 1, 1, 'Right now the net price is 450$, Thanks'),
(7, 'mayata', 'mayata@gmail.com', 'Really liked it the best offers ever seen it.', 3, 1, ''),
(8, 'Ahmad', 'ahmad@gmail.com', 'one of the best company with best product over the world, like it.', 3, 0, ''),
(9, 'mayata', 'mayata@gmail.com', 'Dell is worlds leading company also its product are with best quality ', 2, 0, ''),
(10, 'Milad', 'milad@gmail.com', 'Im using this product and satisfied with it.', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_text` longtext NOT NULL,
  `post_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_text`, `post_cat`) VALUES
(1, 'Galaxy', 'This is the new model of the galaxy you will enjoy with it ', 1),
(2, 'Dell', 'Dell Inc. (stylized as DELL) was an American privately owned multinational computer technology company based in Round Rock, Texas, United States, that developed, sold, repaired, and supported computers and related products and services. Eponymously named after its founder, Michael Dell, the company was one of the largest technological corporations in the world, employing more than 103,300 people worldwide', 2),
(3, 'LG', 'LG Corp. established as Lak-Hui Chemical Industrial Corp. in 1947.[3] In 1952, Lak-Hui (pronounced "Lucky", currently LG Chem) became the first Korean company to enter the plastics industry. As the company expanded its plastic business, it established GoldStar Co. Ltd. (currently LG Electronics Inc.) In 1958, both companies Lucky and GoldStar merged and formed Lucky-GoldStar.', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
