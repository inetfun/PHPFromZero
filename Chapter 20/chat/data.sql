SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- 
-- ���ݿ�: `joychat`
-- 
CREATE DATABASE `joychat` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `joychat`;
-- --------------------------------------------------------
-- 
-- ��Ľṹ `messages`
-- 
CREATE TABLE `messages` (
  `id` int(10) NOT NULL auto_increment,
  `user_id` int(10) NOT NULL,
  `message` text NOT NULL,
  `text_color` varchar(10) NOT NULL,
  `post_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
-- 
-- �������е����� `messages`
-- 
-- --------------------------------------------------------
CREATE TABLE `users` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `last_request_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;