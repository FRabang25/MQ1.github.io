/*
MySQL Data Transfer
Source Host: localhost
Source Database: mq1db
Target Host: localhost
Target Database: mq1db
Date: 10/7/2017 2:00:53 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `uname` varchar(50) DEFAULT NULL,
  `pword` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `users` VALUES ('123', '123');
INSERT INTO `users` VALUES ('raff', '');
INSERT INTO `users` VALUES ('raff', '');
