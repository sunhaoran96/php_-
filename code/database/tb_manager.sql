-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-12 08:53:47
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wechat`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_manager`
--

CREATE TABLE IF NOT EXISTS `tb_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `AdminName` varchar(20) NOT NULL COMMENT '管理员名称',
  `AdminPwd` varchar(20) NOT NULL COMMENT '密码',
  `AdminFlag` int(11) NOT NULL COMMENT '管理员权限',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `tb_manager`
--

INSERT INTO `tb_manager` (`id`, `AdminName`, `AdminPwd`, `AdminFlag`) VALUES
(6, 'liuyuan', 'fff', 0),
(10, 'linux', '332', 444),
(12, 'linux', '332', 444),
(13, 'xiang', '444', 0),
(14, 'huang', 'ddddd', 0),
(15, 'huang', 'ddddd', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
