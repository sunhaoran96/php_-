-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-12 08:52:22
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
-- 表的结构 `tb_bookinfo`
--

CREATE TABLE IF NOT EXISTS `tb_bookinfo` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `booktypename` varchar(255) NOT NULL,
  `bookname` varchar(20) NOT NULL,
  `bookprice` int(11) NOT NULL,
  `bookstoremount` int(11) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tb_bookinfo`
--

INSERT INTO `tb_bookinfo` (`bookid`, `booktypename`, `bookname`, `bookprice`, `bookstoremount`) VALUES
(2, '小说天地', '从你的全世界路过', 12, 4),
(1, '四六级考试', '匆匆那年', 23, 34),
(3, '小说天地', '小王子', 45, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
