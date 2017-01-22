/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yblog

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-01-22 16:13:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for yblog_admin_user
-- ----------------------------
DROP TABLE IF EXISTS `yblog_admin_user`;
CREATE TABLE `yblog_admin_user` (
  `admin_id` int(8) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(24) DEFAULT NULL,
  `admin_psw` varchar(64) DEFAULT NULL,
  `group_id` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yblog_admin_user
-- ----------------------------
