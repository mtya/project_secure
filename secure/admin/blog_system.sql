-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 02 Avril 2017 à 15:38
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blog_system`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `admin_username`, `admin_password`) VALUES
(1, 'maksud', '202cb962ac59075b964b07152d234b70'),
(2, 'mayata', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `cats`
--

CREATE TABLE IF NOT EXISTS `cats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `cats`
--

INSERT INTO `cats` (`id`, `cat_name`) VALUES
(8, 'phones'),
(9, 'computers');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `is_confirm` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `user_name`, `user_email`, `comment`, `post_id`, `is_confirm`) VALUES
(1, 'mayata', 'test@gmail.com', 'jkkjjkjkkjkjkgkjhkkjhkjhkhk', 1, 1),
(2, 'maksud', 'mak@test.com', 'kahjhjshksgjgjhghjgj', 2, 1),
(3, 'mtya', 'mtya88@gmail.com', 'testtttttt', 4, 1),
(4, 'mtya', 'mtya88@gmail.com', '12356', 2, 1),
(5, 'jjj', 'jj@ttt.fr', 'lkljjkjklljkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 1, 1),
(6, 'mayata', 'mtya88@gmail.com', 'how price', 6, 1),
(7, 'maksud', 'maksud@gmail.com', 'i want this phone', 5, 1),
(8, 'mtyq', 'ffhhghghg@kkk.fr', 'bu ne kqdqt', 7, 0);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_title` text NOT NULL,
  `post_text` text NOT NULL,
  `post_cat` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_text`, `post_cat`) VALUES
(5, 'galaxy', 'new galaxy s7', 8),
(6, 'dell', 'dell 45223 ', 9),
(7, 'Nokia', '2017 new nokia phone', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
