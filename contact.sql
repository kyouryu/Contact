-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2012 年 7 月 17 日 06:59
-- サーバのバージョン: 5.5.9
-- PHP のバージョン: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `cakebook_sample1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mtr_sex_id` int(11) NOT NULL,
  `mtr_age_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- テーブルのデータをダンプしています `contacts`
--

INSERT INTO `contacts` VALUES(1, '2012-07-12 03:06:11', '2012-07-12 03:06:11', '坂口', 'sryou1985@gmail.com', 2, 1, 'aaaaaaaa', 'aaaaa');
INSERT INTO `contacts` VALUES(2, '2012-07-12 11:53:52', '2012-07-12 11:53:52', 'ss', 'sryou1985@gmail.com', 1, 1, 'sss', 'ss');
INSERT INTO `contacts` VALUES(3, '2012-07-12 11:54:03', '2012-07-12 11:54:03', 'rrr', 'sryou1985@gmail.com', 2, 1, 'rrrrrrrrrrrrrr', 'wwwwwwwww');
INSERT INTO `contacts` VALUES(4, '2012-07-12 11:54:15', '2012-07-12 11:54:15', 'rrrrrrrrr', 'sryou1985@gmail.com', 2, 1, 'rrrrrrrrw', 'wwwwwwwwwwf');

-- --------------------------------------------------------

--
-- テーブルの構造 `contacts_mtr_favolites`
--

CREATE TABLE `contacts_mtr_favolites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `mtr_favolite_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `contacts_mtr_favolites`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `mtr_ages`
--

CREATE TABLE `mtr_ages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- テーブルのデータをダンプしています `mtr_ages`
--

INSERT INTO `mtr_ages` VALUES(1, '10代');
INSERT INTO `mtr_ages` VALUES(2, '20代');
INSERT INTO `mtr_ages` VALUES(3, '30代');
INSERT INTO `mtr_ages` VALUES(4, '40代');
INSERT INTO `mtr_ages` VALUES(5, '50代');
INSERT INTO `mtr_ages` VALUES(6, '60歳以上');

-- --------------------------------------------------------

--
-- テーブルの構造 `mtr_favolites`
--

CREATE TABLE `mtr_favolites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- テーブルのデータをダンプしています `mtr_favolites`
--

INSERT INTO `mtr_favolites` VALUES(1, '読書');
INSERT INTO `mtr_favolites` VALUES(2, '映画鑑賞');
INSERT INTO `mtr_favolites` VALUES(3, '音楽鑑賞');
INSERT INTO `mtr_favolites` VALUES(4, 'スポーツ観戦');
INSERT INTO `mtr_favolites` VALUES(5, 'インターネット');
INSERT INTO `mtr_favolites` VALUES(6, 'ガーデニング');
INSERT INTO `mtr_favolites` VALUES(7, 'その他');

-- --------------------------------------------------------

--
-- テーブルの構造 `mtr_sexes`
--

CREATE TABLE `mtr_sexes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `mtr_sexes`
--

INSERT INTO `mtr_sexes` VALUES(1, '男性');
INSERT INTO `mtr_sexes` VALUES(2, '女性');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `users`
--

INSERT INTO `users` VALUES(1, '2012-03-29 00:00:21', '2012-07-12 13:43:52', 'admin', '738913f617f40fafbb831d1c6f07d911557c4037');
INSERT INTO `users` VALUES(2, '2012-07-12 03:04:46', '2012-07-12 13:54:32', 'sryou1985', '4d116209372ae397b9c74de8275a16d363a23739');
