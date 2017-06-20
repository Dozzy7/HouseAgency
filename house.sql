/*
Navicat MySQL Data Transfer

Source Server         : APP
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : house

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-20 13:36:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ausername` varchar(20) NOT NULL,
  `apassword` char(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for appoinments
-- ----------------------------
DROP TABLE IF EXISTS `appoinments`;
CREATE TABLE `appoinments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `houseID` int(11) NOT NULL,
  `choosen_date` date NOT NULL,
  `choosen_time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_appointments_table_1` (`userID`),
  KEY `fk_appointments_table_2` (`houseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of appoinments
-- ----------------------------

-- ----------------------------
-- Table structure for houses
-- ----------------------------
DROP TABLE IF EXISTS `houses`;
CREATE TABLE `houses` (
  `houseID` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `rooms` int(11) NOT NULL,
  `listing` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`houseID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of houses
-- ----------------------------
INSERT INTO `houses` VALUES ('1', 'a1', 'Nice House', '1200', '4', 'For Sale', 'pinghe', 'Jin');
INSERT INTO `houses` VALUES ('2', 'a2', 'Another nice house', '1200', '4', 'For Rent', 'pinghe', 'Jin');
INSERT INTO `houses` VALUES ('3', 'a3', 'House', '1200', '4', 'For Sale', 'pinghe', 'Jin');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `user_type` enum('Buyer','Agent') NOT NULL,
  `f_name` varchar(50) DEFAULT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `contact` int(11) NOT NULL,
  `upassword` char(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'pea', 'Buyer', 'Pea', 'Ngesheya', '188104167103', '12345', 'pea@yahoo.com');

-- ----------------------------
-- Table structure for users_favorites
-- ----------------------------
DROP TABLE IF EXISTS `users_favorites`;
CREATE TABLE `users_favorites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `houseID` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_favorites_table_1` (`userID`),
  KEY `fk_users_favorites_table_2` (`houseID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users_favorites
-- ----------------------------
