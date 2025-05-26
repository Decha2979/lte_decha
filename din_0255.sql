-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 22 ส.ค. 2017  15:15น.
-- รุ่นของเซิร์ฟเวอร์: 5.5.31
-- รุ่นของ PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `mrgo_db`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `din_0255`
--

CREATE TABLE `din_0255` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `sao` varchar(50) NOT NULL DEFAULT '',
  `amper` varchar(50) NOT NULL DEFAULT '',
  `t_off` varchar(50) DEFAULT NULL,
  `t_per` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `www` varchar(50) DEFAULT NULL,
  `abt_admin` varchar(50) DEFAULT NULL,
  `type_local` varchar(50) DEFAULT NULL,
  `hotel` varchar(50) DEFAULT NULL,
  `doc` varchar(50) DEFAULT NULL,
  `room` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=257 ;

--
-- dump ตาราง `din_0255`
--

INSERT INTO `din_0255` VALUES(236, 'นางรัดใจ  ฉิมนิล', 'อบต.สำนักตะคร้อ', 'เทพารักษ์		  ', '', '     ', '', 'พุทธ', 'นวก.ศึกษา', 'โอนเงินแล้ว', '', 'E-2-3 โอนเงิน 3 พ.ค.4,800.-', '2');
