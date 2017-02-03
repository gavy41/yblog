/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : yblog

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-02-03 20:52:08
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yblog_admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `yblog_admin_user`;
CREATE TABLE `yblog_admin_user` (
  `admin_id` int(8) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(24) DEFAULT NULL,
  `admin_psw` varchar(64) DEFAULT NULL,
  `auth_key` varchar(64) DEFAULT '',
  `group_id` tinyint(3) DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yblog_admin_user
-- ----------------------------
INSERT INTO `yblog_admin_user` VALUES ('39', 'gavy', 'cdd6f519c25265675ff0a86ad6a28d65', '8jsDIxjOso8OUdCUFK-oNPxU3YshP_5j', '2');
INSERT INTO `yblog_admin_user` VALUES ('40', 'admin', '3e9fedb9521a4bc26b637da1c35020d7', 'f1mzLSf9Xox_e0qh5G9UOhrOUADw6krn', '1');
