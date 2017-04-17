-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 11 月 29 日 11:28
-- 服务器版本: 5.1.65
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `com12177_seokeywords`
--

-- --------------------------------------------------------

--
-- 表的结构 `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_bin NOT NULL,
  `blog` text COLLATE utf8_bin NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `blog`, `time`) VALUES
(1, '修复BUG', 0x31e3808175706b6579646174612e706870202020e4bfaee694b9e697b6e997b4efbc9a32303132e5b9b43130e69c883138e697a5e4bb8ae5a4a92c2032313a33323a32360d0a20202020202020757073697465646174612e7068702020e4bfaee694b9e697b6e997b4efbc9a32303132e5b9b43130e69c883138e697a5e4bb8ae5a4a92c2032313a33323a32380d0a20202020202020e4bfaee6ada3e4bba3e7a081efbc9b425547efbc9ae5a29ee58aa0e7bd91e59d80e697b6efbc8ce5ad98e59ca8e7bd91e59d80e697b6e4be9de784b6e4bc9ae6b7bbe58aa0e79a84e68385e586b5e38082, '2012-10-18 14:21:56'),
(3, '1211', 0x31313131, '2012-10-18 15:46:44'),
(4, '113333', 0x32323232, '2012-10-18 16:10:09'),
(5, '貌似放在“站长之家”的源码有点问题。', 0x5254e38082e38082e38082e5a5bde5838fe69c89e782b9e997aee9a298efbc8ce68980e4bba5e5a4a7e5aeb6e58fafe4bba5e588b0e68891e79a84e8b0b7e6ad8ce68998e7aea1e982a3e9878ce4b88be8bdbdefbc8ce79c9fe79a84e5be88e68ab1e6ad89e593887e7e7e0d0a687474703a2f2f636f64652e676f6f676c652e636f6d2f702f68662d73656f2d6b6579776f7264732f2020e5a682e69e9ce69c89425547efbc8ce5b88ce69c9be5a4a7e5aeb6e58f8ae697b6e58f8de9a688e38082e59ba0e4b8bae68891e59ca8e69cace59cb0e6b58be8af95e697b6e6b2a1e69c89e997aee9a298efbc8ce4b88ae4bca0e588b0e7a9bae997b4e69c89e697b6e4bc9ae69c89e4b880e4ba9be997aee9a298efbc8ce784b6e5908ee68891e58f8ae697b6e4bfaee5a48defbc8ce4bd86e698afe58f91e588b0e7ab99e995bfe4b98be5aeb6e79a84e78988e69cace58fafe883bde5b0b1e6b2a1e69c89e8bf99e4b988e58f8ae697b6e4bfaee5a48de4ba86e38082e79c9fe79a84e5be88e68ab1e6ad89e38082, '2012-10-22 20:36:32'),
(6, '你汇报', 0xe8be85e5afbce8b4b9, '2012-11-06 16:32:12'),
(7, '2012-11-29 0:12 修复BUG', 0x31e38081e59ca8e5908ee58fb0e5a29ee58aa0e4bfaee694b9e5af86e7a081e58a9fe883bdefbc8ce5b9b6e4b894e5a29ee58aa073686131e58aa0e5af86efbc9b32e38081e5a29ee58aa0e5bf85e9a1bbe799bbe99986e6898de883bde6b7bbe58aa0e695b0e68daee79a84e58a9fe883bdefbc9b33e38081e4bfaee5a48de5be88e5a49ae5ad98e59ca8e79a84425547efbc9b, '2012-11-29 00:13:41');

-- --------------------------------------------------------

--
-- 表的结构 `domaintotal`
--

CREATE TABLE IF NOT EXISTS `domaintotal` (
  `idrang` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `daterank` date NOT NULL,
  `baidu` varchar(38) COLLATE utf8_bin NOT NULL,
  `qihoo` varchar(38) COLLATE utf8_bin NOT NULL,
  `google` varchar(38) COLLATE utf8_bin NOT NULL,
  `sogou` varchar(38) COLLATE utf8_bin NOT NULL,
  `soso` varchar(38) COLLATE utf8_bin NOT NULL,
  `youdao` varchar(38) COLLATE utf8_bin NOT NULL,
  `bing` varchar(38) COLLATE utf8_bin NOT NULL,
  `yisou` varchar(38) COLLATE utf8_bin NOT NULL,
  `zhongsou` varchar(38) COLLATE utf8_bin NOT NULL,
  `panguso` varchar(38) COLLATE utf8_bin NOT NULL,
  `jike` varchar(38) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idrang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=101 ;

--
-- 转存表中的数据 `keywords`
--

INSERT INTO `keywords` (`id`, `keyword`, `time`) VALUES
(6, '广州户外家具', '2012-09-12 16:10:29'),
(5, '阳光户外家具', '2012-09-12 15:53:51'),
(7, '广州市阳光户外', '2012-09-12 17:49:03'),
(8, '广州阳光户外', '2012-09-12 17:49:46'),
(9, '番禺户外家具', '2012-09-12 17:49:54'),
(41, '广州户外太阳伞', '2012-10-15 14:17:21'),
(16, '阳光户外', '2012-10-15 10:29:39'),
(15, '户外家具', '2012-10-15 10:18:16'),
(42, '广州番禺户外家具', '2012-10-15 14:42:04'),
(43, '广东阳光户外', '2012-10-15 14:47:36'),
(44, '广东番禺区户外家具厂', '2012-10-15 14:54:21'),
(45, '阳光户外休闲篷', '2012-10-15 14:57:44'),
(46, '广州太阳伞', '2012-10-15 15:05:06'),
(47, '户外阳光家具厂', '2012-10-16 13:19:36'),
(48, '广州家具厂', '2012-10-16 13:20:09'),
(49, '广州阳光户外家具', '2012-10-17 09:26:12'),
(52, '休闲家具', '2012-10-18 09:05:10'),
(53, '广东阳光休闲户外家具', '2012-10-18 10:33:31'),
(55, '番禺家具厂', '2012-10-18 11:47:09'),
(56, '广州户外家具厂', '2012-10-18 11:48:03'),
(67, '翰烽SEO关键词管理系统', '2012-10-19 20:41:02');

-- --------------------------------------------------------

--
-- 表的结构 `ranking`
--

CREATE TABLE IF NOT EXISTS `ranking` (
  `idrang` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `daterank` date NOT NULL,
  `baidu` varchar(38) COLLATE utf8_bin NOT NULL,
  `qihoo` varchar(38) COLLATE utf8_bin NOT NULL,
  `google` varchar(38) COLLATE utf8_bin NOT NULL,
  `sogou` varchar(38) COLLATE utf8_bin NOT NULL,
  `soso` varchar(38) COLLATE utf8_bin NOT NULL,
  `youdao` varchar(38) COLLATE utf8_bin NOT NULL,
  `bing` varchar(38) COLLATE utf8_bin NOT NULL,
  `yisou` varchar(38) COLLATE utf8_bin NOT NULL,
  `zhongsou` varchar(38) COLLATE utf8_bin NOT NULL,
  `panguso` varchar(38) COLLATE utf8_bin NOT NULL,
  `jike` varchar(38) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idrang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=42 ;

--
-- 转存表中的数据 `ranking`
--

INSERT INTO `ranking` (`idrang`, `id`, `time`, `daterank`, `baidu`, `qihoo`, `google`, `sogou`, `soso`, `youdao`, `bing`, `yisou`, `zhongsou`, `panguso`, `jike`) VALUES
(7, 9, '2012-10-13 16:23:18', '2012-10-13', '1.4', '1.1', '1.1', '1.1', '4.4', '1.8', '1.3', '1.2', '1.2', '1.10', '0'),
(8, 8, '2012-10-13 16:33:20', '2012-10-13', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '0', '0'),
(9, 5, '2012-10-13 16:40:35', '2012-10-13', '1.2', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '0', '0'),
(10, 15, '2012-10-15 10:28:47', '2012-10-15', '5.3', '2.6', '2.1', '0', '5.5', '0', '4.3', '3.10', '0', '4.8', '0'),
(11, 16, '2012-10-15 10:35:15', '2012-10-15', '1.7', '1.4', '1.3', '1.2', '1.2', '1.9', '1.3', '1.8', '0', '1.8', '0'),
(17, 41, '2012-10-15 14:36:46', '2012-10-15', '2.6', '0', '1.1', '1.9', '0', '0', '1.4', '5.10', '0', '0', '0'),
(18, 42, '2012-10-15 14:46:35', '2012-10-15', '1.3', '1.3', '1.1', '1.1', '1.3', '1.4', '1.4', '1.2', '1.6', '1.4', '0'),
(19, 43, '2012-10-15 14:52:15', '2012-10-15', '1.3', '1.1', '1.1', '1.10', '1.2', '1.1', '1.1', '1.2', '1.8', '0', '0'),
(20, 44, '2012-10-15 14:56:24', '2012-10-15', '1.1', '1.1', '1.1', '1.1', '1.2', '1.1', '1.2', '1.1', '0', '0', '0'),
(21, 45, '2012-10-15 15:03:47', '2012-10-15', '1.1', '1.2', '1.5', '0', '0', '1.1', '1.1', '0', '0', '0', '0'),
(22, 46, '2012-10-15 15:37:37', '2012-10-15', '1.10', '0', '2.5', '0', '0', '0', '0', '0', '0', '0', '0'),
(23, 48, '2012-10-16 13:35:45', '2012-10-16', '0', '1.6', '1.2', '0', '0', '3.4', '0', '0', '0', '0', '0'),
(24, 47, '2012-10-16 13:50:42', '2012-10-16', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '0', '1.1', '0'),
(25, 16, '2012-10-17 09:25:14', '2012-10-17', '1.6', '1.4', '1.3', '1.2', '1.3', '2.9', '1.3', '1.5', '0', '1.9', '0'),
(26, 49, '2012-10-17 09:27:55', '2012-10-17', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.1', '1.10', '0'),
(29, 55, '2012-10-19 18:47:06', '2012-10-19', '09', '', '', '', '', '', '', '', '', '', ''),
(38, 7, '2012-10-24 13:05:06', '2012-10-24', '10', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `sitetotal`
--

CREATE TABLE IF NOT EXISTS `sitetotal` (
  `idrang` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `time` datetime NOT NULL,
  `daterank` date NOT NULL,
  `baidu` varchar(38) COLLATE utf8_bin NOT NULL,
  `qihoo` varchar(38) COLLATE utf8_bin NOT NULL,
  `google` varchar(38) COLLATE utf8_bin NOT NULL,
  `sogou` varchar(38) COLLATE utf8_bin NOT NULL,
  `soso` varchar(38) COLLATE utf8_bin NOT NULL,
  `youdao` varchar(38) COLLATE utf8_bin NOT NULL,
  `bing` varchar(38) COLLATE utf8_bin NOT NULL,
  `yisou` varchar(38) COLLATE utf8_bin NOT NULL,
  `zhongsou` varchar(38) COLLATE utf8_bin NOT NULL,
  `panguso` varchar(38) COLLATE utf8_bin NOT NULL,
  `jike` varchar(38) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idrang`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `sitetotal`
--

INSERT INTO `sitetotal` (`idrang`, `id`, `time`, `daterank`, `baidu`, `qihoo`, `google`, `sogou`, `soso`, `youdao`, `bing`, `yisou`, `zhongsou`, `panguso`, `jike`) VALUES
(2, 60, '2012-11-29 10:18:42', '2012-11-28', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `adminname`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- 表的结构 `websites`
--

CREATE TABLE IF NOT EXISTS `websites` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `website` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `websites`
--

INSERT INTO `websites` (`id`, `website`, `time`) VALUES
(2, 'www.sunny-outdoor.com', '2012-10-18 14:20:07'),
(3, '026k.com', '2012-10-18 21:00:04'),
(4, 'zzzzy.com', '2012-10-18 21:00:33'),
(5, 'oupag.com', '2012-10-18 21:01:40'),
(9, 'www.oude-outdoor.com', '2012-10-18 21:33:34'),
(24, 'www.sunny-oude.com', '2012-10-19 16:01:19'),
(54, 'www.gxvtc.com', '2012-11-08 00:34:10'),
(60, 'seokeywords.zzzzy.com', '2012-11-16 16:59:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
