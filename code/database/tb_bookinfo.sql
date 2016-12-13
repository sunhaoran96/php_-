-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?12 �?12 �?21:25
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wechat`
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
  `bookimg` varchar(255) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `tb_bookinfo`
--

INSERT INTO `tb_bookinfo` (`bookid`, `booktypename`, `bookname`, `bookprice`, `bookstoremount`, `bookimg`) VALUES
(2, '小说天地', '从你的全世界路过', 12, 4, 'http://wqba96.cn/public/bookstore/images/a2.jpg'),
(1, '四六级考试', '匆匆那年', 23, 34, 'http://wqba96.cn/public/bookstore/images/a4.jpg'),
(3, '小说天地', '小王子', 45, 3, 'http://wqba96.cn/public/bookstore/images/a7.jpg'),
(4, '小说天地', '夏有乔木', 21, 100, 'http://wqba96.cn/public/bookstore/images/d1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
