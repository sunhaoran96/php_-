-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-12 08:52:51
-- 服务器版本： 5.5.32
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
-- 表的结构 `tb_booktypeinfo`
--

CREATE TABLE IF NOT EXISTS `tb_booktypeinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booktypeid` int(11) NOT NULL,
  `booktypename` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tb_booktypeinfo`
--

INSERT INTO `tb_booktypeinfo` (`id`, `booktypeid`, `booktypename`) VALUES
(1, 101, '四六级考试'),
(2, 102, '考研必备'),
(3, 103, '小说天地'),
(4, 104, '杂志周刊'),
(5, 105, '文具'),
(6, 106, '其他');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
