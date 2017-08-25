-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-21 02:14:10
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `message-board`
--

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `qq` int(16) NOT NULL,
  `content` char(180) NOT NULL,
  `pubtime` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_id`, `username`, `qq`, `content`, `pubtime`) VALUES
(1, '一拳超人', 0, '世界上 ，没有一拳解决不了的事，如果有，那就两拳。\r\n', 1497966377),
(2, '风清扬', 11111111, '看独孤九剑', 1497966520),
(3, '鸣人', 222222222, '我要成为火影!!', 1497966702),
(4, '孙悟空', 44444444, '渐渐被你吸引...........', 1497966828),
(5, '欧文', 55555555, '\r\n真理惟一可靠的标准就是永远自相符合', 1497970825),
(6, '爱因斯坦', 6666666, '相对性理论是什么??', 1497970936),
(7, '斯理兰卡', 7777, '世界上一成不变的东西，只有“任何事物都是在不断变化的”这条真理', 1497970968),
(8, '阿库娅', 888888, '汝，勿要忍耐。想喝的時候就喝，想吃的時候就吃便好。因為明天並不見得還能吃到.沒錯。汝，勿要忍耐。就算那是別人碗裡的炸雞，只要想吃就要去吃。想吃涼粉史萊姆的話，可不能忍著不吃。畢竟，有忍耐對身體不好這句話 ---by 为美好的世界献上祝福', 1497971207),
(9, '坂本龙马', 999999, '君子从时', 1497971298),
(10, '李鸿章', 10101010, '三千年未有之大变局', 1497971418);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
