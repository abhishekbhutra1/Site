/*
Navicat MySQL Data Transfer

Source Server         : imggallery
Source Server Version : 50721
Source Host           : localhost:3306
Source Database       : gallery

Target Server Type    : MYSQL
Target Server Version : 50721
File Encoding         : 65001

Date: 2018-08-14 16:30:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `signin`
-- ----------------------------
DROP TABLE IF EXISTS `signin`;
CREATE TABLE `signin` (
`name`  varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`emailid`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`phone`  bigint(10) NOT NULL ,
`password`  varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`dirpath`  varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`emailid`, `phone`, `password`, `dirpath`, `name`)
)
ENGINE=MyISAM
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci

;

-- ----------------------------
-- Records of signin
-- ----------------------------
BEGIN;
COMMIT;
