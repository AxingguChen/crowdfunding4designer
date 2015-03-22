-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-03-22 17:29:56
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crowdfunding`
--

-- --------------------------------------------------------

--
-- 表的结构 `clothes_size`
--

CREATE TABLE IF NOT EXISTS `clothes_size` (
  `clothes_size_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clothes_size_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothes_size_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `clothes_size`
--

INSERT INTO `clothes_size` (`clothes_size_id`, `clothes_size_name`) VALUES
(1, 'xs'),
(2, 's'),
(3, 'm'),
(4, 'l'),
(5, 'xl'),
(6, 'xxl'),
(7, 'xxxl');

-- --------------------------------------------------------

--
-- 表的结构 `clothes_style`
--

CREATE TABLE IF NOT EXISTS `clothes_style` (
  `clothes_style_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clothes_style_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothes_style_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `clothes_style`
--

INSERT INTO `clothes_style` (`clothes_style_id`, `clothes_style_name`) VALUES
(1, 'work'),
(2, 'nightlife'),
(3, 'weekend'),
(4, 'street'),
(5, 'travel'),
(6, 'sport');

-- --------------------------------------------------------

--
-- 表的结构 `clothes_type`
--

CREATE TABLE IF NOT EXISTS `clothes_type` (
  `clothes_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clothes_type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothes_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `clothes_type`
--

INSERT INTO `clothes_type` (`clothes_type_id`, `clothes_type_name`) VALUES
(1, 'Tops & Tees'),
(2, 'Coat & Jackets'),
(3, 'Underwear'),
(4, 'Shirts'),
(5, 'Hoodies & Sweatershirts'),
(6, 'Jeans'),
(7, 'Pants'),
(8, 'Suits & Blazer'),
(9, 'Shorts'),
(10, 'Sweaters'),
(11, 'Accessories'),
(12, ''),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, 'Dresses'),
(22, 'Coats & Jacket'),
(23, 'Blouses & Shirts'),
(24, 'Tops & Tees'),
(25, 'Hoodies & Sweatershirts'),
(26, 'Intimates'),
(27, 'Swimwear'),
(28, 'Pants & Capris'),
(29, 'Sweaters'),
(30, 'Skirts'),
(31, 'Leggings'),
(32, 'Accessories');

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `groups_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`groups_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`groups_id`, `name`) VALUES
(1, 'admin'),
(3, 'checker'),
(10, 'designer'),
(12, 'user'),
(15, 'guest');

-- --------------------------------------------------------

--
-- 表的结构 `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projects_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_users_id` int(10) unsigned NOT NULL,
  `projects_clothes_type_id` int(10) unsigned NOT NULL,
  `projects_clothes_style_id` int(10) unsigned NOT NULL,
  `sex` enum('female','neutral','male') DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `technical_drawing` varchar(255) DEFAULT NULL,
  `projectpic` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `madeof` varchar(255) DEFAULT NULL,
  `howtowash` varchar(255) DEFAULT NULL,
  `whyme` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cost` float unsigned zerofill DEFAULT NULL,
  `minimum_sale` int(10) unsigned zerofill DEFAULT NULL,
  `current_sale` int(10) unsigned zerofill DEFAULT NULL,
  `price` float unsigned zerofill DEFAULT NULL,
  `round` tinyint(4) DEFAULT NULL,
  `flag_close` bit(1) DEFAULT b'0',
  `flag_publish` bit(1) DEFAULT b'0',
  `flag_cost` bit(1) DEFAULT b'0',
  `flag_pending` bit(1) DEFAULT b'0',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `publish_date` timestamp NULL DEFAULT NULL,
  `deadline` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`projects_id`),
  KEY `projects_users_fk` (`projects_users_id`),
  KEY `projects_clothes_style_fk` (`projects_clothes_style_id`),
  KEY `projects_clothes_type_fk` (`projects_clothes_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `projects`
--

INSERT INTO `projects` (`projects_id`, `projects_users_id`, `projects_clothes_type_id`, `projects_clothes_style_id`, `sex`, `title`, `contact_email`, `technical_drawing`, `projectpic`, `description`, `madeof`, `howtowash`, `whyme`, `comment`, `cost`, `minimum_sale`, `current_sale`, `price`, `round`, `flag_close`, `flag_publish`, `flag_cost`, `flag_pending`, `create_date`, `update_date`, `publish_date`, `deadline`) VALUES
(1, 1, 2, 1, 'male', 'awesome jacket', '123@gmail.com', 'img/drawing/1.pdf', 'img/project/1-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', NULL, 000000000030, 0000000200, 0000000033, 000000000045, 11, b'0', b'1', b'1', b'1', '2015-02-27 03:46:33', '2015-03-22 16:23:28', '2015-01-27 03:48:07', '2015-03-14 01:52:27'),
(2, 2, 3, 2, 'female', 'comfortable underwear', 'axinggu@qq.com', 'img/drawing/1.pdf', 'img/project/2-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', NULL, 000000000010, 0000000200, 0000000045, 000000000015, 1, b'0', b'1', b'1', b'1', '2015-03-14 01:50:48', '2015-03-14 01:55:31', '2015-03-14 01:55:05', '2015-05-15 01:54:37'),
(3, 1, 2, 1, 'male', 'awesome shirt', 'axinggu@gmail.com', 'img/drawing/3.pdf', 'img/project/3-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', NULL, 000000000030, 0000000200, 0000000033, 000000000045, 1, b'0', b'1', b'1', b'1', '2015-02-27 03:46:33', '2015-03-14 01:52:27', '2015-01-27 03:48:07', '2015-03-14 01:52:27'),
(4, 2, 3, 2, 'female', 'comfortable jeans', 'axinggu@qq.com', 'img/drawing/4.pdf', 'img/project/4-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', NULL, 000000000010, 0000000200, 0000000045, 000000000015, 1, b'0', b'1', b'1', b'1', '2015-03-14 01:50:48', '2015-03-14 01:55:31', '2015-03-14 01:55:05', '2015-05-15 01:54:37'),
(5, 1, 2, 1, 'male', 'awesome dress', 'axinggu@gmail.com', 'img/drawing/5.pdf', 'img/project/5-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', NULL, 000000000030, 0000000200, 0000000033, 000000000045, 1, b'0', b'1', b'1', b'1', '2015-02-27 03:46:33', '2015-03-14 01:52:27', '2015-01-27 03:48:07', '2015-03-14 01:52:27'),
(6, 2, 3, 2, 'female', 'comfortable hat', 'axinggu@qq.com', 'img/drawing/6.pdf', 'img/project/6-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', NULL, 000000000010, 0000000200, 0000000045, 000000000015, 1, b'0', b'1', b'1', b'1', '2015-03-14 01:50:48', '2015-03-14 01:55:31', '2015-03-14 01:55:05', '2015-05-15 01:54:37'),
(7, 1, 2, 1, 'male', 'awesome coat', 'axinggu@gmail.com', 'img/drawing/7.pdf', 'img/project/7-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', NULL, 000000000030, 0000000200, 0000000033, 000000000045, 1, b'0', b'1', b'1', b'1', '2015-02-27 03:46:33', '2015-03-14 01:52:27', '2015-01-27 03:48:07', '2015-03-14 01:52:27'),
(8, 2, 3, 1, 'female', 'fashin hoodiefashin hoodie', '123@qq.com', 'img/drawing/8.pdf', 'img/project/8-1.jpg', 'this is a comforta', 'cutton 100%', 'No problem fo ', 'design based on human body. make you feel extremely comfortable', NULL, 000000000010, 0000000200, 0000000045, 000000000015, 1, b'0', b'1', b'1', b'1', '2015-03-14 01:50:48', '2015-03-22 16:07:58', '2015-03-14 01:55:05', '2015-05-15 01:54:37'),
(9, 1, 1, 1, NULL, 'awesome jacket', '321@qq.com', NULL, NULL, 'this is a awesome old style jacket', 'cutton 80% & lather 20%', '123', 'design based on human body. make you feel extremely comfortable', NULL, NULL, 0000000123, 0000000123, NULL, 11, b'0', b'0', b'0', b'0', '2015-03-22 16:27:21', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `project_comment`
--

CREATE TABLE IF NOT EXISTS `project_comment` (
  `projects_comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `comment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`projects_comment_id`),
  KEY `comment_projects_fk` (`projects_id`),
  KEY `comment_users_fk` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `project_comment`
--

INSERT INTO `project_comment` (`projects_comment_id`, `projects_id`, `user_id`, `comment`, `comment_date`) VALUES
(1, 2, 2, '123123', '2015-03-22 16:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `project_order`
--

CREATE TABLE IF NOT EXISTS `project_order` (
  `preject_order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_size_id` int(10) unsigned NOT NULL,
  `number` int(11) unsigned DEFAULT NULL,
  `flag_funding` bit(1) DEFAULT NULL,
  `flag_payment` bit(1) DEFAULT NULL,
  `fag_delivery` bit(1) DEFAULT NULL,
  `deadline` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`preject_order_id`),
  KEY `order_projects_fk` (`projects_id`),
  KEY `order_users_fk` (`users_id`),
  KEY `order_clothes_size_id` (`clothes_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `project_preorder`
--

CREATE TABLE IF NOT EXISTS `project_preorder` (
  `project_preorder_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_size_id` int(10) unsigned NOT NULL,
  `number` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`project_preorder_id`),
  KEY `preorder_users_fk` (`users_id`),
  KEY `preorder_projects_fk` (`projects_id`),
  KEY `preorder_clothes_size_fk` (`clothes_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `testcurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `asdf` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

--
-- 转存表中的数据 `test`
--

INSERT INTO `test` (`id`, `name`, `datetime`, `timestamp`, `testcurrent`, `asdf`) VALUES
(1, 'asdf', '2015-02-12 08:52:20', NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(2, 'asdffd', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(3, 'asdffs', NULL, '2015-02-11 00:54:58', '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(4, 'axinggu', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(5, 'yuxing', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(6, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(7, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(8, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(9, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(10, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(11, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(12, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(13, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(14, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(15, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(16, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(17, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(18, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(19, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(20, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(21, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(22, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(23, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(24, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(25, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(26, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(27, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(28, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(29, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(30, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(31, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(32, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(33, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(34, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(35, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(36, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(37, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(38, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(39, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(40, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(41, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(42, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(43, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(44, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(45, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(46, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(47, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(48, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(49, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(50, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(51, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(52, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(53, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(54, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(55, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(56, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(57, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(58, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(59, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(60, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(61, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(62, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(63, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(64, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(65, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(66, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(67, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(68, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(69, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(70, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(71, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(72, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(73, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(74, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(75, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(76, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(77, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(78, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(79, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(80, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(81, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(82, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(83, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(84, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(85, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(86, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(87, 'testqwqwasd', NULL, '2015-02-11 01:33:26', '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(88, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(89, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(90, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(91, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(92, 'testtest', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(93, 'test', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(94, 'asdjhfasd', NULL, NULL, '2015-02-11 01:28:35', '2015-02-11 01:32:24'),
(95, 'papapa', NULL, NULL, '2015-02-11 01:30:41', '2015-02-11 01:32:24'),
(96, 'asdasdasd', '2015-02-11 09:32:43', '2015-02-11 01:33:17', '2015-02-11 01:32:43', '2015-02-11 01:32:43');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_groups_id` int(10) unsigned NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zipcode` int(10) unsigned DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `avatar` varchar(255) DEFAULT NULL COMMENT 'profile picture',
  `certificate_file` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `cellphone` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `bank_holder` varchar(255) DEFAULT NULL,
  `paypal` varchar(255) DEFAULT NULL,
  `flag_pending` bit(1) DEFAULT b'0',
  `flag_accepted` bit(1) DEFAULT b'0',
  `flag_declined` bit(1) DEFAULT b'0',
  PRIMARY KEY (`users_id`,`email`),
  KEY `users_groups_fk` (`users_groups_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`users_id`, `users_groups_id`, `email`, `username`, `password`, `lastname`, `firstname`, `about`, `country`, `city`, `address`, `zipcode`, `create_date`, `update_date`, `avatar`, `certificate_file`, `school`, `major`, `cellphone`, `bank_account`, `bank_holder`, `paypal`, `flag_pending`, `flag_accepted`, `flag_declined`) VALUES
(1, 10, 'axinggu@gmail.com', 'axinggu', 'b6692ea5df920cad691c20319a6fffd7a4a766b8', 'chen2', 'yuxing', 'i am a deisgner college junior student.', 'Italy', 'Milano', 'rubattino, first street, no 19', 20134, '2015-02-27 03:41:50', '2015-03-22 02:20:41', 'img/avatar/1.jpg', NULL, 'Politecnico di Milano', 'design', '3925183033', '6222', 'chan', '123456', b'0', b'1', b'0'),
(2, 10, 'axinggu@qq.com', 'axinggu', 'b6692ea5df920cad691c20319a6fffd7a4a766b8', 'chan', 'jackie', 'i am a deisgner college junior student.', 'China', 'HongKong', 'central Distrct', 999077, '2015-03-14 01:45:51', '2015-03-22 01:26:37', 'img/avatar/2.jpg', NULL, 'HongKong University', 'design', '3939393939', NULL, NULL, NULL, b'0', b'1', b'0'),
(4, 12, '0', NULL, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-21 11:41:06', '2015-03-21 13:36:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0'),
(5, 12, 'test@qq.com', NULL, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'last', 'first', 'this is about', 'China', 'Guangzhou', 'this is the address', 510410, '2015-03-21 11:50:34', '2015-03-21 13:34:13', 'img/avatar/3.jpg', NULL, 'school', 'major', '1234567890', '1234567890112423', 'jackie chan', NULL, b'0', b'0', b'0'),
(6, 12, 'test1@qq.com', NULL, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-21 11:51:38', '2015-03-21 13:36:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0'),
(7, 12, 'test33@qq.com', NULL, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-21 11:52:54', '2015-03-21 13:36:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0'),
(8, 12, 'asdf@qq.com', NULL, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-21 13:36:24', '2015-03-21 13:36:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0'),
(9, 12, 'axinggu1@qq.com', NULL, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-21 14:25:31', '2015-03-22 01:25:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0'),
(11, 12, 'asdf11@qq.com', 'axinggu', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-22 01:24:23', '2015-03-22 01:24:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0'),
(12, 12, 'asdf123@qq.com', 'axinggu', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-03-22 02:00:08', '2015-03-22 02:00:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, b'0', b'0', b'0');

--
-- 限制导出的表
--

--
-- 限制表 `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_clothes_style_fk` FOREIGN KEY (`projects_clothes_style_id`) REFERENCES `clothes_style` (`clothes_style_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_clothes_type_fk` FOREIGN KEY (`projects_clothes_type_id`) REFERENCES `clothes_type` (`clothes_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `projects_users_fk` FOREIGN KEY (`projects_users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `project_comment`
--
ALTER TABLE `project_comment`
  ADD CONSTRAINT `comment_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`projects_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `project_order`
--
ALTER TABLE `project_order`
  ADD CONSTRAINT `order_clothes_size_id` FOREIGN KEY (`clothes_size_id`) REFERENCES `clothes_size` (`clothes_size_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`projects_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `project_preorder`
--
ALTER TABLE `project_preorder`
  ADD CONSTRAINT `preorder_clothes_size_fk` FOREIGN KEY (`clothes_size_id`) REFERENCES `clothes_size` (`clothes_size_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preorder_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`projects_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `preorder_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_groups_fk` FOREIGN KEY (`users_groups_id`) REFERENCES `groups` (`groups_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
