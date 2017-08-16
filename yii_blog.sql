# Host: 127.0.0.1  (Version: 5.6.35-log)
# Date: 2017-08-16 23:15:12
# Generator: MySQL-Front 5.3  (Build 4.57)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "yb_article"
#

DROP TABLE IF EXISTS `yb_article`;
CREATE TABLE `yb_article` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(8) unsigned DEFAULT '0' COMMENT '类型',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `intro` varchar(255) DEFAULT NULL COMMENT '简介',
  `content` mediumtext COMMENT '内容',
  `raw` varchar(255) DEFAULT NULL COMMENT 'github链接',
  `is_raw` tinyint(1) unsigned DEFAULT '0' COMMENT '是否是raw',
  `add_time` datetime DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章表';

#
# Data for table "yb_article"
#

INSERT INTO `yb_article` VALUES (1,1,'asd','asdad','asdsad\t','1',0,'1899-12-30 01:00:00');

#
# Structure for table "yb_article_type"
#

DROP TABLE IF EXISTS `yb_article_type`;
CREATE TABLE `yb_article_type` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章分类';

#
# Data for table "yb_article_type"
#


#
# Structure for table "yb_user"
#

DROP TABLE IF EXISTS `yb_user`;
CREATE TABLE `yb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) DEFAULT NULL COMMENT '昵称',
  `passwd` char(32) DEFAULT NULL COMMENT '密码',
  `add_time` varchar(255) DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "yb_user"
#

