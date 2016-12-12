-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-12 08:52:59
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
-- 表的结构 `tb_order`
--

CREATE TABLE IF NOT EXISTS `tb_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动编号',
  `orderid` varchar(20) NOT NULL COMMENT '订单号',
  `goodsname` varchar(255) NOT NULL COMMENT '商品名称',
  `ordermount` int(11) NOT NULL COMMENT '订购数量',
  `poststatus` varchar(20) NOT NULL COMMENT '订单状态',
  `recevstatus` varchar(20) NOT NULL COMMENT '收货状态',
  `price` double NOT NULL COMMENT '总价',
  `receivername` varchar(255) NOT NULL COMMENT '收货人姓名',
  `receiveaddress` varchar(255) NOT NULL COMMENT '收货地址',
  `receivertel` varchar(255) NOT NULL COMMENT '收货人电话',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tb_order`
--

INSERT INTO `tb_order` (`id`, `orderid`, `goodsname`, `ordermount`, `poststatus`, `recevstatus`, `price`, `receivername`, `receiveaddress`, `receivertel`) VALUES
(1, '100001', '从你的全世界路过', 2, '未处理', '未收货', 122, '郭飞玄', '河北师范大学', '123445555');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
