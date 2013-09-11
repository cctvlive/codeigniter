- phpMyAdmin SQL Dump
-- version 3.3.8.1
-- http://www.phpmyadmin.net
--
-- 主机: w.rdc.sae.sina.com.cn:3307
-- 生成日期: 2013 年 09 月 11 日 20:24
-- 服务器版本: 5.5.23
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_phpoop`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(255) NOT NULL AUTO_INCREMENT,
  `useradmin` varchar(35) NOT NULL COMMENT '授权用户的所在原微博位置的用户名称,而不是登陆名',
  `passwd` varchar(78) NOT NULL COMMENT '授权用户的密码  授权时为空',
  `insrt` datetime DEFAULT NULL COMMENT '插入时间',
  `type` tinyint(4) NOT NULL COMMENT '授权用户的-----类型 2 新浪 3 腾讯',
  `group_id` char(255) NOT NULL DEFAULT '' COMMENT '会员分组,group表',
  `name` varchar(255) NOT NULL DEFAULT '腾讯会员' COMMENT '会员分类',
  `email` varchar(255) DEFAULT NULL COMMENT '授权用户的邮件',
  `uptime` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `u_img` varchar(255) NOT NULL COMMENT '授权用户的头像',
  `mode` int(11) DEFAULT NULL COMMENT '授权用户的手机',
  `true_name` char(255) DEFAULT NULL COMMENT '授权用户的真实姓名',
  `access_token_key` char(255) DEFAULT NULL COMMENT '新浪绑定授权用户 KEY 有值者绑定 反之不绑定,',
  `gender` char(255) DEFAULT NULL COMMENT '性别',
  `gender_demo` char(255) DEFAULT NULL COMMENT 'gender注释',
  `key_id` varchar(225) NOT NULL COMMENT '第三方id',
  `status` tinyint(4) NOT NULL COMMENT '绑定状态',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `key_id` (`key_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
