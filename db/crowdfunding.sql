/*
Navicat MySQL Data Transfer

Source Server         : xammp
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : crowdfunding

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-03-28 10:46:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for acl
-- ----------------------------
DROP TABLE IF EXISTS `acl`;
CREATE TABLE `acl` (
  `acl_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `acl_groups_id` int(10) unsigned NOT NULL,
  `acl_view` bit(1) DEFAULT b'1',
  `acl_update_profile` bit(1) DEFAULT b'1',
  `acl_view_profile` bit(1) DEFAULT b'1',
  `acl_create_project` bit(1) DEFAULT b'0',
  `acl_update_project` bit(1) DEFAULT b'0',
  `acl_update_check` bit(1) DEFAULT b'0',
  `acl_update_acl` bit(1) DEFAULT b'0',
  PRIMARY KEY (`acl_id`),
  KEY `acl_groups_fk` (`acl_groups_id`),
  CONSTRAINT `acl_groups_fk` FOREIGN KEY (`acl_groups_id`) REFERENCES `groups` (`groups_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of acl
-- ----------------------------
INSERT INTO `acl` VALUES ('1', '1', '', '', '', '', '', '', '');
INSERT INTO `acl` VALUES ('2', '3', '', '', '', '', '', '', '\0');
INSERT INTO `acl` VALUES ('3', '10', '', '', '', '', '', '\0', '\0');
INSERT INTO `acl` VALUES ('4', '12', '', '', '', '\0', '\0', '\0', '\0');
INSERT INTO `acl` VALUES ('5', '15', '', '\0', '\0', '\0', '\0', '\0', '\0');

-- ----------------------------
-- Table structure for clothes_size
-- ----------------------------
DROP TABLE IF EXISTS `clothes_size`;
CREATE TABLE `clothes_size` (
  `clothes_size_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clothes_size_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothes_size_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clothes_size
-- ----------------------------
INSERT INTO `clothes_size` VALUES ('1', 'xs');
INSERT INTO `clothes_size` VALUES ('2', 's');
INSERT INTO `clothes_size` VALUES ('3', 'm');
INSERT INTO `clothes_size` VALUES ('4', 'l');
INSERT INTO `clothes_size` VALUES ('5', 'xl');
INSERT INTO `clothes_size` VALUES ('6', 'xxl');
INSERT INTO `clothes_size` VALUES ('7', 'xxxl');

-- ----------------------------
-- Table structure for clothes_style
-- ----------------------------
DROP TABLE IF EXISTS `clothes_style`;
CREATE TABLE `clothes_style` (
  `clothes_style_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clothes_style_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothes_style_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clothes_style
-- ----------------------------
INSERT INTO `clothes_style` VALUES ('1', 'work');
INSERT INTO `clothes_style` VALUES ('2', 'nightlife');
INSERT INTO `clothes_style` VALUES ('3', 'weekend');
INSERT INTO `clothes_style` VALUES ('4', 'street');
INSERT INTO `clothes_style` VALUES ('5', 'travel');
INSERT INTO `clothes_style` VALUES ('6', 'sport');

-- ----------------------------
-- Table structure for clothes_type
-- ----------------------------
DROP TABLE IF EXISTS `clothes_type`;
CREATE TABLE `clothes_type` (
  `clothes_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `clothes_type_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothes_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clothes_type
-- ----------------------------
INSERT INTO `clothes_type` VALUES ('1', 'Tops & Tees');
INSERT INTO `clothes_type` VALUES ('2', 'Coat & Jackets');
INSERT INTO `clothes_type` VALUES ('3', 'Underwear');
INSERT INTO `clothes_type` VALUES ('4', 'Shirts');
INSERT INTO `clothes_type` VALUES ('5', 'Hoodies & Sweatershirts');
INSERT INTO `clothes_type` VALUES ('6', 'Jeans');
INSERT INTO `clothes_type` VALUES ('7', 'Pants');
INSERT INTO `clothes_type` VALUES ('8', 'Suits & Blazer');
INSERT INTO `clothes_type` VALUES ('9', 'Shorts');
INSERT INTO `clothes_type` VALUES ('10', 'Sweaters');
INSERT INTO `clothes_type` VALUES ('11', 'Accessories');
INSERT INTO `clothes_type` VALUES ('12', '');
INSERT INTO `clothes_type` VALUES ('13', '');
INSERT INTO `clothes_type` VALUES ('14', '');
INSERT INTO `clothes_type` VALUES ('15', '');
INSERT INTO `clothes_type` VALUES ('16', '');
INSERT INTO `clothes_type` VALUES ('17', '');
INSERT INTO `clothes_type` VALUES ('18', '');
INSERT INTO `clothes_type` VALUES ('19', '');
INSERT INTO `clothes_type` VALUES ('20', '');
INSERT INTO `clothes_type` VALUES ('21', 'Dresses');
INSERT INTO `clothes_type` VALUES ('22', 'Coats & Jacket');
INSERT INTO `clothes_type` VALUES ('23', 'Blouses & Shirts');
INSERT INTO `clothes_type` VALUES ('24', 'Tops & Tees');
INSERT INTO `clothes_type` VALUES ('25', 'Hoodies & Sweatershirts');
INSERT INTO `clothes_type` VALUES ('26', 'Intimates');
INSERT INTO `clothes_type` VALUES ('27', 'Swimwear');
INSERT INTO `clothes_type` VALUES ('28', 'Pants & Capris');
INSERT INTO `clothes_type` VALUES ('29', 'Sweaters');
INSERT INTO `clothes_type` VALUES ('30', 'Skirts');
INSERT INTO `clothes_type` VALUES ('31', 'Leggings');
INSERT INTO `clothes_type` VALUES ('32', 'Accessories');

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `groups_id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`groups_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin');
INSERT INTO `groups` VALUES ('3', 'checker');
INSERT INTO `groups` VALUES ('10', 'designer');
INSERT INTO `groups` VALUES ('12', 'user');
INSERT INTO `groups` VALUES ('15', 'guest');

-- ----------------------------
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
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
  `projects_comment` varchar(255) DEFAULT NULL,
  `cost` float unsigned DEFAULT NULL,
  `minimum_sale` int(10) unsigned DEFAULT NULL,
  `current_sale` int(10) unsigned DEFAULT NULL,
  `price` float unsigned DEFAULT NULL,
  `round` tinyint(4) DEFAULT NULL,
  `flag_close` bit(1) DEFAULT b'0',
  `flag_publish` bit(1) DEFAULT b'0',
  `flag_cost` bit(1) DEFAULT b'0',
  `flag_pending` bit(1) DEFAULT b'0',
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `publish_date` timestamp NULL DEFAULT NULL,
  `projects_deadline` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`projects_id`),
  KEY `projects_users_fk` (`projects_users_id`),
  KEY `projects_clothes_style_fk` (`projects_clothes_style_id`),
  KEY `projects_clothes_type_fk` (`projects_clothes_type_id`),
  CONSTRAINT `projects_clothes_style_fk` FOREIGN KEY (`projects_clothes_style_id`) REFERENCES `clothes_style` (`clothes_style_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `projects_clothes_type_fk` FOREIGN KEY (`projects_clothes_type_id`) REFERENCES `clothes_type` (`clothes_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `projects_users_fk` FOREIGN KEY (`projects_users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', '1', '8', '1', 'female', 'awesome jacket', 'axinggu@gmail.com', './assets/img/project/1.pdf', 'img/project/1-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', 'need more detailed about prototype', '0', '200', '33', '45', '1', '\0', '', '', '', '2015-02-27 11:46:33', '2015-03-26 19:17:56', '2015-01-27 11:48:07', '2015-03-14 09:52:27');
INSERT INTO `projects` VALUES ('2', '2', '3', '2', 'female', 'comfortable underwear', 'axinggu@qq.com', 'img/drawing/2.pdf', 'img/project/2-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', null, '10', '200', '45', '15', '1', '\0', '', '', '', '2015-03-14 09:50:48', '2015-03-25 00:06:01', '2015-03-14 09:55:05', '2015-05-15 09:54:37');
INSERT INTO `projects` VALUES ('3', '1', '2', '1', 'male', 'awesome shirt', 'axinggu@gmail.com', 'img/drawing/3.pdf', 'img/project/3-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', null, '30', '200', '33', '45', '1', '\0', '', '', '', '2015-02-27 11:46:33', '2015-03-14 09:52:27', '2015-01-27 11:48:07', '2015-03-14 09:52:27');
INSERT INTO `projects` VALUES ('4', '2', '3', '2', 'female', 'comfortable jeans', 'axinggu@qq.com', 'img/drawing/4.pdf', 'img/project/4-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', null, '10', '200', '45', '15', '1', '\0', '', '', '', '2015-03-14 09:50:48', '2015-03-14 09:55:31', '2015-03-14 09:55:05', '2015-05-15 09:54:37');
INSERT INTO `projects` VALUES ('5', '1', '2', '1', 'male', 'awesome dress', 'axinggu@gmail.com', 'img/drawing/5.pdf', 'img/project/5-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', null, '30', '200', '33', '45', '1', '\0', '', '', '', '2015-02-27 11:46:33', '2015-03-14 09:52:27', '2015-01-27 11:48:07', '2015-03-14 09:52:27');
INSERT INTO `projects` VALUES ('6', '2', '3', '2', 'female', 'comfortable hat', 'axinggu@qq.com', 'img/drawing/6.pdf', 'img/project/6-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', null, '10', '200', '45', '15', '1', '\0', '', '', '', '2015-03-14 09:50:48', '2015-03-14 09:55:31', '2015-03-14 09:55:05', '2015-05-15 09:54:37');
INSERT INTO `projects` VALUES ('7', '1', '2', '1', 'male', 'awesome coat', 'axinggu@gmail.com', 'img/drawing/7.pdf', 'img/project/7-1.jpg', 'this is a awesome old style jacket', 'cutton 80% & lather 20%', 'The water temperature should be under 45 C degrees. Hand wash is recommended.', 'Fashionable design, nice color and unique style', null, '30', '200', '33', '45', '1', '\0', '', '', '', '2015-02-27 11:46:33', '2015-03-14 09:52:27', '2015-01-27 11:48:07', '2015-03-14 09:52:27');
INSERT INTO `projects` VALUES ('8', '2', '3', '2', 'female', 'fashin hoodie', 'axinggu@qq.com', 'img/drawing/8.pdf', 'img/project/8-1.jpg', 'this is a comfortable underwear', 'cutton 100%', 'No problem for any way to wash', 'design based on human body. make you feel extremely comfortable', null, '10', '200', '45', '15', '1', '\0', '', '', '', '2015-03-14 09:50:48', '2015-03-14 09:55:31', '2015-03-14 09:55:05', '2015-05-15 09:54:37');
INSERT INTO `projects` VALUES ('9', '1', '8', '4', null, '1asdfsadf', 'asdfhi@qq.com', null, null, 'asdfasdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', null, null, '200', '0', null, '1', '\0', '\0', '\0', '\0', '2015-03-23 19:39:01', null, null, null);
INSERT INTO `projects` VALUES ('10', '1', '30', '2', 'male', 'adfasdfasdf', 'asdffdas@qq.com', null, null, 'this is description', 'madeof', 'howtowash', 'whyme', null, null, null, null, null, null, '\0', '\0', '\0', '\0', '2015-03-23 20:32:26', null, null, null);
INSERT INTO `projects` VALUES ('11', '1', '30', '2', 'male', 'adfasdfasdf', 'asdffdas@qq.com', null, null, 'this is description', 'madeof', 'howtowash', 'whyme', null, null, null, null, null, null, '\0', '\0', '\0', '\0', '2015-03-23 20:32:55', null, null, null);
INSERT INTO `projects` VALUES ('12', '1', '30', '2', 'male', 'adfasdfasdf', 'asdffdas@qq.com', null, null, 'this is description', 'madeof', 'howtowash', 'whyme', null, null, null, null, null, null, '\0', '\0', '\0', '\0', '2015-03-23 20:33:20', null, null, null);
INSERT INTO `projects` VALUES ('13', '1', '30', '2', 'male', 'adfasdfasdf', 'asdffdas@qq.com', null, null, 'this is description', 'madeof', 'howtowash', 'whyme', null, null, null, null, null, null, '\0', '\0', '\0', '\0', '2015-03-23 20:33:23', null, null, null);
INSERT INTO `projects` VALUES ('14', '1', '30', '2', 'male', 'adfasdfasdf', 'asdffdas@qq.com', null, null, 'this is description', 'madeof', 'howtowash', 'whyme', null, null, null, null, null, null, '\0', '\0', '\0', '\0', '2015-03-23 20:33:47', null, null, null);

-- ----------------------------
-- Table structure for project_comment
-- ----------------------------
DROP TABLE IF EXISTS `project_comment`;
CREATE TABLE `project_comment` (
  `project_comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `comment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_comment_id`),
  KEY `comment_projects_fk` (`projects_id`),
  KEY `comment_users_fk` (`user_id`),
  CONSTRAINT `comment_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`projects_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comment_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_comment
-- ----------------------------
INSERT INTO `project_comment` VALUES ('1', '1', '1', 'say something', '2015-03-22 21:56:22');
INSERT INTO `project_comment` VALUES ('2', '1', '2', 'awesome product', '2015-03-22 21:57:02');

-- ----------------------------
-- Table structure for project_order
-- ----------------------------
DROP TABLE IF EXISTS `project_order`;
CREATE TABLE `project_order` (
  `preject_order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_size_id` int(10) unsigned NOT NULL,
  `project_order_number` int(11) unsigned DEFAULT NULL,
  `flag_funding` bit(1) DEFAULT NULL,
  `flag_payment` bit(1) DEFAULT NULL,
  `fag_delivery` bit(1) DEFAULT NULL,
  `user_deadline` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `project_order_comment` varchar(255) DEFAULT NULL,
  `project_order_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`preject_order_id`),
  KEY `order_projects_fk` (`projects_id`),
  KEY `order_users_fk` (`users_id`),
  KEY `order_clothes_size_id` (`clothes_size_id`),
  CONSTRAINT `order_clothes_size_id` FOREIGN KEY (`clothes_size_id`) REFERENCES `clothes_size` (`clothes_size_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`projects_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `order_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_order
-- ----------------------------

-- ----------------------------
-- Table structure for project_preorder
-- ----------------------------
DROP TABLE IF EXISTS `project_preorder`;
CREATE TABLE `project_preorder` (
  `project_preorder_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_size_id` int(10) unsigned NOT NULL,
  `project_preorder_number` int(10) unsigned DEFAULT NULL,
  `project_preorder_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_preorder_id`),
  KEY `preorder_users_fk` (`users_id`),
  KEY `preorder_projects_fk` (`projects_id`),
  KEY `preorder_clothes_size_fk` (`clothes_size_id`),
  CONSTRAINT `preorder_clothes_size_fk` FOREIGN KEY (`clothes_size_id`) REFERENCES `clothes_size` (`clothes_size_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `preorder_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`projects_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `preorder_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_preorder
-- ----------------------------
INSERT INTO `project_preorder` VALUES ('1', '1', '1', '2', '2', '2015-03-27 11:24:15');

-- ----------------------------
-- Table structure for test
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `testcurrent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `asdf` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of test
-- ----------------------------
INSERT INTO `test` VALUES ('1', 'asdf', '2015-02-12 08:52:20', null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('2', 'asdffd', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('3', 'asdffs', null, '2015-02-11 08:54:58', '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('4', 'axinggu', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('5', 'yuxing', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('6', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('7', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('8', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('9', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('10', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('11', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('12', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('13', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('14', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('15', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('16', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('17', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('18', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('19', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('20', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('21', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('22', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('23', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('24', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('25', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('26', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('27', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('28', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('29', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('30', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('31', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('32', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('33', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('34', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('35', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('36', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('37', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('38', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('39', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('40', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('41', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('42', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('43', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('44', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('45', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('46', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('47', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('48', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('49', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('50', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('51', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('52', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('53', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('54', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('55', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('56', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('57', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('58', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('59', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('60', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('61', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('62', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('63', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('64', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('65', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('66', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('67', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('68', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('69', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('70', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('71', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('72', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('73', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('74', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('75', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('76', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('77', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('78', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('79', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('80', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('81', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('82', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('83', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('84', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('85', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('86', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('87', 'testqwqwasd', null, '2015-02-11 09:33:26', '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('88', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('89', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('90', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('91', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('92', 'testtest', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('93', 'test', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('94', 'asdjhfasd', null, null, '2015-02-11 09:28:35', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('95', 'papapa', null, null, '2015-02-11 09:30:41', '2015-02-11 09:32:24');
INSERT INTO `test` VALUES ('96', 'asdasdasd', '2015-02-11 09:32:43', '2015-02-11 09:33:17', '2015-02-11 09:32:43', '2015-02-11 09:32:43');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
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
  KEY `users_groups_fk` (`users_groups_id`),
  CONSTRAINT `users_groups_fk` FOREIGN KEY (`users_groups_id`) REFERENCES `groups` (`groups_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '10', 'axinggu@gmail.com', 'axinggu', 'b6692ea5df920cad691c20319a6fffd7a4a766b8', 'chen', 'yuxing', 'i am a deisgner college junior student.1', 'Italy', 'Milano', 'rubattino, first street, no 19', '20134', '2015-02-27 11:41:50', '2015-03-26 23:01:35', 'img/avatar/1.jpg', null, 'Politecnico di Milano', 'design', '3925183033', '62222', 'chan', '123456', '\0', '', '\0');
INSERT INTO `users` VALUES ('2', '10', 'axinggu@qq.com', 'jackie', 'b6692ea5df920cad691c20319a6fffd7a4a766b8', 'peng', 'jackie', 'i am a deisgner college junior student.', 'China', 'HongKong', 'central Distrct', '999077', '2015-03-14 09:45:51', '2015-03-22 22:08:03', 'img/avatar/2.jpg', null, 'HongKong University', 'design', '3939393939', null, null, null, '\0', '', '\0');
INSERT INTO `users` VALUES ('4', '12', '0', null, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-21 19:41:06', '2015-03-21 21:36:39', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('5', '12', 'test@qq.com', null, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'last', 'first', 'this is about', 'China', 'Guangzhou', 'this is the address', '510410', '2015-03-21 19:50:34', '2015-03-21 21:34:13', 'img/avatar/3.jpg', null, 'school', 'major', '1234567890', '1234567890112423', 'jackie chan', null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('6', '12', 'test1@qq.com', null, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-21 19:51:38', '2015-03-21 21:36:37', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('7', '12', 'test33@qq.com', null, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-21 19:52:54', '2015-03-21 21:36:35', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('8', '12', 'asdf@qq.com', null, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-21 21:36:24', '2015-03-21 21:36:24', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('9', '12', 'axinggu1@qq.com', null, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-21 22:25:31', '2015-03-22 09:25:51', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('11', '12', 'asdf11@qq.com', 'axinggu', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-22 09:24:23', '2015-03-22 09:24:23', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
INSERT INTO `users` VALUES ('12', '12', 'asdf123@qq.com', 'axinggu', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', null, null, null, null, null, null, null, '2015-03-22 10:00:08', '2015-03-22 10:00:08', null, null, null, null, null, null, null, null, '\0', '\0', '\0');
