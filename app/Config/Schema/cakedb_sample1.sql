-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- ホスト: localhost
-- 生成時間: 2011 年 11 月 16 日 09:41
-- サーバのバージョン: 5.5.12
-- PHP のバージョン: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- データベース: `cakedb_sample1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `contacts`
--


-- --------------------------------------------------------

--
-- テーブルの構造 `contacts_mtr_favolites`
--

DROP TABLE IF EXISTS `contacts_mtr_favolites`;
CREATE TABLE IF NOT EXISTS `contacts_mtr_favolites` (
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

DROP TABLE IF EXISTS `mtr_ages`;
CREATE TABLE IF NOT EXISTS `mtr_ages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- テーブルのデータをダンプしています `mtr_ages`
--

INSERT INTO `mtr_ages` (`id`, `name`) VALUES
(1, '10代'),
(2, '20代'),
(3, '30代'),
(4, '40代'),
(5, '50代'),
(6, '60歳以上');

-- --------------------------------------------------------

--
-- テーブルの構造 `mtr_favolites`
--

DROP TABLE IF EXISTS `mtr_favolites`;
CREATE TABLE IF NOT EXISTS `mtr_favolites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- テーブルのデータをダンプしています `mtr_favolites`
--

INSERT INTO `mtr_favolites` (`id`, `name`) VALUES
(1, '読書'),
(2, '映画鑑賞'),
(3, '音楽鑑賞'),
(4, 'スポーツ観戦'),
(5, 'インターネット'),
(6, 'ガーデニング'),
(7, 'その他');

-- --------------------------------------------------------

--
-- テーブルの構造 `mtr_sexes`
--

DROP TABLE IF EXISTS `mtr_sexes`;
CREATE TABLE IF NOT EXISTS `mtr_sexes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- テーブルのデータをダンプしています `mtr_sexes`
--

INSERT INTO `mtr_sexes` (`id`, `name`) VALUES
(1, '男性'),
(2, '女性');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- テーブルのデータをダンプしています `users`
--

