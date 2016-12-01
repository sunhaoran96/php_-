-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 �?12 �?01 �?09:58
-- 服务器版本: 5.5.47
-- PHP 版本: 5.5.30

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `xinjiushudian`
--

-- --------------------------------------------------------

--
-- 表的结构 `it_activity`
--

CREATE TABLE IF NOT EXISTS `it_activity` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '标题',
  `content` varchar(255) NOT NULL COMMENT '文本',
  `url` varchar(255) NOT NULL COMMENT '图片',
  `createtime` datetime NOT NULL COMMENT '日期',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `it_newbooks`
--

CREATE TABLE IF NOT EXISTS `it_newbooks` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `createtime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_bookinfo`
--

CREATE TABLE IF NOT EXISTS `tb_bookinfo` (
  `BookId` int(11) NOT NULL AUTO_INCREMENT,
  `BookTypeId` int(11) NOT NULL,
  `BookName` varchar(20) NOT NULL,
  `BookPress` varchar(20) NOT NULL,
  `BookAuthor` varchar(20) NOT NULL,
  `BookPrice` double NOT NULL,
  `BookStoremount` int(11) NOT NULL,
  `BookStoretime` datetime NOT NULL,
  PRIMARY KEY (`BookId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_booktypeinfo`
--

CREATE TABLE IF NOT EXISTS `tb_booktypeinfo` (
  `BookTypeId` int(11) NOT NULL AUTO_INCREMENT COMMENT '图书类型编号',
  `BookTypeName` varchar(50) NOT NULL COMMENT '类别名称',
  PRIMARY KEY (`BookTypeId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_manager`
--

CREATE TABLE IF NOT EXISTS `tb_manager` (
  `AdminId` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员编号',
  `AdminName` varchar(20) NOT NULL COMMENT '管理员名称',
  `AdminPwd` varchar(20) NOT NULL COMMENT '密码',
  `AdminFlag` int(11) NOT NULL COMMENT '管理员权限',
  PRIMARY KEY (`AdminId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `OrderId` varchar(20) NOT NULL COMMENT '订单号',
  `Orderdate` varchar(20) NOT NULL COMMENT '下单日期',
  `Ordermount` int(11) NOT NULL COMMENT '订购数量',
  `BookName` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL COMMENT '留言',
  `postmethod` varchar(20) NOT NULL COMMENT '送货方式',
  `paymethod` varchar(20) NOT NULL COMMENT '支付方式',
  `recevername` varchar(20) NOT NULL COMMENT '收货人姓名',
  `receveraddr` varchar(255) NOT NULL COMMENT '收货地址',
  `recevertel` varchar(20) NOT NULL COMMENT '收货人联系方式',
  `totalprice` double NOT NULL COMMENT '总价',
  PRIMARY KEY (`OrderId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tb_orderdetail`
--

CREATE TABLE IF NOT EXISTS `tb_orderdetail` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `OrderId` varchar(20) NOT NULL COMMENT '订单号',
  `BookId` int(11) NOT NULL COMMENT '图书编号',
  `ordermount` int(11) NOT NULL COMMENT '订购数量',
  `poststatus` varchar(20) NOT NULL COMMENT '配送状态',
  `recevstatus` varchar(20) NOT NULL COMMENT '收货状态',
  `price` double NOT NULL COMMENT '总价',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
