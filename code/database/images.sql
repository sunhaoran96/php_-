-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-12 08:52:48
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
-- 表的结构 `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mediaId` varchar(255) CHARACTER SET utf8 NOT NULL,
  `picUrl` varchar(255) CHARACTER SET utf8 NOT NULL,
  `filepath` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `images`
--

INSERT INTO `images` (`id`, `mediaId`, `picUrl`, `filepath`) VALUES
(26, 'ACPYGwaxb2t21H_PRQfIx5CghaGMswHjctQphP7R6lY', 'http://mmbiz.qpic.cn/mmbiz_jpg/XbOKymhGaIUEiadF651fDoPWR3DfzGrz8iaaPBc6ud3ok5EMcR0cGVOqr2U8fLJ1vlD3v7EBib64CejPVJQzo598g/0?wx_fmt=jpeg', '006a6WUUgw1ew4dj58zi3j30uo16mgqm.jpg'),
(27, 'ACPYGwaxb2t21H_PRQfIx9lhW-njOgQdH-xe7MBi0Vw', 'http://mmbiz.qpic.cn/mmbiz_jpg/XbOKymhGaIVYEXOGXxTTfTuz1iam3TxA8rwXtfSy42d8fEASCU0GJ49l1wdvKUg9abKTq9x3KH21iaIKXOsQIldg/0?wx_fmt=jpeg', '006a6WUUgw1ew4dj58zi3j30uo16mgqm.jpg'),
(28, 'ACPYGwaxb2t21H_PRQfIx5f02qSqOf1h6cD_pEN5PSs', 'http://mmbiz.qpic.cn/mmbiz_jpg/XbOKymhGaIVYEXOGXxTTfTuz1iam3TxA86cRcqQxog6jCibqzZEfa7MIop69mhT8PA7qAmSS4ebSCYSqia8nboxNw/0?wx_fmt=jpeg', 'dd5a6b0f285ee0f2b7dd0c6268535e98 (1).jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
