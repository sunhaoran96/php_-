-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-12 08:53:32
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
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `createtime` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `thumb`, `url`, `createtime`, `description`) VALUES
(2, '图书大促销', 'http://imgsrc.baidu.com/forum/w%3D580/sign=a14cfbe935a85edffa8cfe2b795509d8/f9dcd100baa1cd116ff6e099b812c8fcc2ce2dc2.jpg', 'http://news.xinhuanet.com/tw/2016-08/27/c_129258232.htm', 0, ''),
(3, '文学沙龙', 'http://hiphotos.baidu.com/doc/pic/item/f703738da977391209bafa3ffc198618377ae2d4.jpg', 'http://yuedu.baidu.com/ebook/8c65adab76eeaeaad0f33015?pn=1', 1, ''),
(4, '教师资格证辅导书热销中', 'http://b.hiphotos.baidu.com/image/h%3D200/sign=b1aeebedaeefce1bf52bcfca9f51f3e8/bba1cd11728b4710985355d7cacec3fdfc0323a8.jpg', 'http://baike.baidu.com/link?url=SC2M3trICpXqORBAKzt-Fz7R6djzDrSCl0PROSuxM-fmnvA2MtZDEIbG9hr4OKOuZgZsnaat2USJ86JtrEoCB0KIwAz9gKNO_vHyCPrMZHas2q9MITEbdZ5RigQ1PTt3xgLvkWMhOcvsEn3UbBnIuq', 1, ''),
(32, '高木直子漫画推荐', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1481762978&di=3e854db2e29f7810c07c4456fedaafa6&imgtype=jpg&er=1&src=http%3A%2F%2Freader.book1993.com%2Fuploadfile%2Fh_images%2F201307931860253540.jpg', 'http://tieba.baidu.com/p/4017144712', 0, ''),
(33, '高木直子漫画推荐', 'https://timgsa.baidu.com/timg?image&quality=80&size=b10000_10000&sec=1481762978&di=3e854db2e29f7810c07c4456fedaafa6&imgtype=jpg&er=1&src=http%3A%2F%2Freader.book1993.com%2Fuploadfile%2Fh_images%2F201307931860253540.jpg', 'http://tieba.baidu.com/p/4017144712', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
