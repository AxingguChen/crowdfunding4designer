/*
Navicat MySQL Data Transfer

Source Server         : xammp
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : crowdfunding

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-03-09 20:43:59
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clothes_size
-- ----------------------------
DROP TABLE IF EXISTS `clothes_size`;
CREATE TABLE `clothes_size` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
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
-- Table structure for clothes_type
-- ----------------------------
DROP TABLE IF EXISTS `clothes_type`;
CREATE TABLE `clothes_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
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
-- Table structure for projects
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_type_id` int(10) unsigned NOT NULL,
  `sex` enum('female','neutral','male') DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `technical_drawing` varchar(255) DEFAULT NULL,
  `projectpic` varchar(255) DEFAULT NULL,
  `desciption` varchar(255) DEFAULT NULL,
  `madeof` varchar(255) DEFAULT NULL,
  `howtowash` varchar(255) DEFAULT NULL,
  `whyme` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `cost` float unsigned zerofill DEFAULT NULL,
  `minmum_sale` int(10) unsigned zerofill DEFAULT NULL,
  `current_sale` int(10) unsigned zerofill DEFAULT NULL,
  `price` float unsigned zerofill DEFAULT NULL,
  `round` tinyint(4) DEFAULT NULL,
  `flag_close` bit(1) DEFAULT NULL,
  `flag_publish` bit(1) DEFAULT NULL,
  `flag_cost` bit(1) DEFAULT NULL,
  `flag_pending` bit(1) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `publish_date` timestamp NULL DEFAULT NULL,
  `deadline` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `projects_clothes_type_fk` (`clothes_type_id`),
  KEY `projects_users_fk` (`users_id`),
  CONSTRAINT `projects_clothes_type_fk` FOREIGN KEY (`clothes_type_id`) REFERENCES `clothes_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `projects_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of projects
-- ----------------------------
INSERT INTO `projects` VALUES ('1', '1', '2', 'male', 'awesome jacket', '3925183033', 'img/drawing/1.pdf', 'img/project/1-1.jpg', 'this is a awesome old style jacket', 'cutton', null, null, null, '000000000030', '0000000200', '0000000033', '000000000045', '1', '\0', '', '', '', '2015-02-27 11:46:33', '2015-03-09 20:17:42', '2015-01-27 11:48:07', '2015-03-09 20:17:42');

-- ----------------------------
-- Table structure for project_comment
-- ----------------------------
DROP TABLE IF EXISTS `project_comment`;
CREATE TABLE `project_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `comment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_projects_fk` (`projects_id`),
  KEY `comment_users_fk` (`user_id`),
  CONSTRAINT `comment_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `comment_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_comment
-- ----------------------------

-- ----------------------------
-- Table structure for project_order
-- ----------------------------
DROP TABLE IF EXISTS `project_order`;
CREATE TABLE `project_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_size_id` int(10) unsigned NOT NULL,
  `number` int(11) unsigned DEFAULT NULL,
  `flag_funding` bit(1) DEFAULT NULL,
  `flag_payment` bit(1) DEFAULT NULL,
  `fag_delivery` bit(1) DEFAULT NULL,
  `deadline` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `order_projects_fk` (`projects_id`),
  KEY `order_users_fk` (`users_id`),
  KEY `order_clothes_size_id` (`clothes_size_id`),
  CONSTRAINT `order_clothes_size_id` FOREIGN KEY (`clothes_size_id`) REFERENCES `clothes_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `order_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_order
-- ----------------------------

-- ----------------------------
-- Table structure for project_preorder
-- ----------------------------
DROP TABLE IF EXISTS `project_preorder`;
CREATE TABLE `project_preorder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects_id` int(10) unsigned NOT NULL,
  `users_id` int(10) unsigned NOT NULL,
  `clothes_size_id` int(10) unsigned NOT NULL,
  `number` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `preorder_users_fk` (`users_id`),
  KEY `preorder_projects_fk` (`projects_id`),
  KEY `preorder_clothes_size_fk` (`clothes_size_id`),
  CONSTRAINT `preorder_clothes_size_fk` FOREIGN KEY (`clothes_size_id`) REFERENCES `clothes_size` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `preorder_projects_fk` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `preorder_users_fk` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of project_preorder
-- ----------------------------

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
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
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
  `flag_pending` bit(1) DEFAULT NULL,
  `flag_accepted` bit(1) DEFAULT NULL,
  `flag_declined` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'axinggu@gmail', 'SHA-1 or MD5', 'chen', 'yuxing', 'i am a deisgner college junior student.', 'Italy', 'Milano', 'rubattino, first street, no 19', '20134', '2015-02-27 11:41:50', '2015-02-27 11:44:12', 'img/avatar/1.jpg', null, 'Politecnico di Milano', 'design', '3925183033', null, null, null, '\0', '\0', '\0');
