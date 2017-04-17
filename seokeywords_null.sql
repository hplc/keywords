-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 11 月 29 日 11:20
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
