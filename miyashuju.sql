-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.5-10.0.14-MariaDB - mariadb.org binary distribution
-- 服务器操作系统:                      Win64
-- HeidiSQL 版本:                  8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出 miya 的数据库结构
DROP DATABASE IF EXISTS `miya`;
CREATE DATABASE IF NOT EXISTS `miya` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `miya`;


-- 导出  表 miya.goods 结构
DROP TABLE IF EXISTS `goods`;
CREATE TABLE IF NOT EXISTS `goods` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

-- 正在导出表  miya.goods 的数据：~110 rows (大约)
DELETE FROM `goods`;
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` (`index`, `images`, `name`, `price`) VALUES
	(1, 'https://img05.miyabaobei.com/d1/p3/item/10/1077/1077430_normal_4.jpg@base@tag=imgScale&w=447', '大王 GOO.N', '$148'),
	(2, 'https://img06.miyabaobei.com/d1/p5/item/12/1204/1204103_topic_1.jpg@base@tag=imgScale&w=447', '新西兰原装 a2', '$1088'),
	(3, 'https://img05.miyabaobei.com/d1/p5/2018/06/14/d7/66/d76695a4c7255c14c448d2098ce614ae669149528.jpg@base@tag=imgScale&w=447', '新西兰原装 a2', '$1088'),
	(4, 'https://img06.miyabaobei.com/d1/p5/item/16/1667/1667324_topic_1.jpg@base@tag=imgScale&w=447', '新西兰原装 a2', '$1088'),
	(5, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '新西兰原装 a2', '$1088'),
	(6, 'https://img06.miyabaobei.com/d1/p5/item/12/1204/1204103_topic_1.jpg@base@tag=imgScale&w=447', '奶粉', '$1088'),
	(7, 'https://img06.miyabaobei.com/d1/p5/item/12/1204/1204103_topic_1.jpg@base@tag=imgScale&w=447', '奶粉', '$1088'),
	(10, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(11, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(12, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(13, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(14, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(15, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(16, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(17, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(18, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(19, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(20, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(21, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(22, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(23, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(24, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(25, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(26, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(27, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(28, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(29, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(30, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(31, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(32, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(33, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(34, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(35, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(36, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(37, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(38, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(39, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(40, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(41, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(42, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(43, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(44, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(45, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(46, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(47, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(48, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(49, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(50, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(51, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(52, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(53, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(54, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(55, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(56, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(57, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(58, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(59, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(60, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(61, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(62, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(63, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(64, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(65, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(66, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(67, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(68, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(69, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(70, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(71, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(72, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(73, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(74, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(75, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(76, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(77, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(78, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(79, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(80, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(81, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(82, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(83, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(84, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(85, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(86, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(87, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(88, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(89, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(90, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(91, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(92, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(93, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(94, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(95, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(96, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(97, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(98, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(99, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(100, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(101, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(102, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(103, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(104, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(105, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '范德萨', '$1088'),
	(106, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088'),
	(107, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088'),
	(108, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088'),
	(109, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088'),
	(110, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088'),
	(111, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088'),
	(112, 'https://img05.miyabaobei.com/d1/p4/item/12/1204/1204107_topic_1.jpg@base@tag=imgScale&w=447', '宝宝奶粉', '$1088');
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;


-- 导出  表 miya.list 结构
DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `images` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `oldprice` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- 正在导出表  miya.list 的数据：~10 rows (大约)
DELETE FROM `list`;
/*!40000 ALTER TABLE `list` DISABLE KEYS */;
INSERT INTO `list` (`index`, `images`, `name`, `state`, `price`, `oldprice`) VALUES
	(1, 'https://img05.miyabaobei.com/d1/p5/item/10/1050/1050442_topic_1.jpg@base@tag=imgScale&w=447', '花王纸尿裤L54片*2包', '多面透气 小屁屁持久干爽', '￥175', '￥389'),
	(2, 'https://img06.miyabaobei.com/d1/p5/item/10/1059/1059257_topic_1.jpg@base@tag=imgScale&w=447', '尤妮佳纸尿裤M64片*2包', '超薄透气 舒适不渗漏', '￥158', '￥233'),
	(3, 'https://img05.miyabaobei.com/d1/p5/item/25/2512/2512357_topic_1_fc1c5cb1.jpg@base@tag=imgScale&w=447', '韩国保宁洗衣皂200g*9块', '三种香味组合套装', '￥88', '￥188'),
	(4, 'https://img06.miyabaobei.com/d1/p5/2017/11/10/3a/fa/3afa74e113f43cc8cb2febebb03df96f087874788.jpg@base@tag=imgScale&w=447', '雅培小安素香草味900g', '爱尔兰天然牧场', '￥159', '￥300'),
	(5, 'https://img03.miyabaobei.com/d1/p5/2018/06/14/cf/67/cf67e5476f2f9ef9c4a3e9ffbf639cb3669389671.jpg', '新西兰原装 a2 【原厂原箱 新包装 】婴儿奶粉3段12~36M 900g*6罐', '新包装 原厂原箱 新日期新风尚', '￥108', '￥199'),
	(6, 'https://img03.miyabaobei.com/d1/p4/item/10/1076/1076458_normal_4.jpg', '新西兰原装 a2 【品牌授权】PLATINUM婴儿奶粉3段12~36M 900g*2罐', '特有a2酪蛋白 助力宝宝成长', '￥385.00', '￥688'),
	(7, 'https://img03.miyabaobei.com/d1/p3/item/10/1077/1077421_normal_4.jpg', '大王 GOO.N 纸尿裤 XL42片*2包 （12-20kg）', '绵柔贴身 瞬间吸收', '￥218.00', '￥455'),
	(8, 'https://img03.miyabaobei.com/d1/p3/item/10/1047/1047865_normal_4.jpg', '尤妮佳 moony 纸尿裤L54片*4包 （9-14kg）', '特殊剪裁伸缩护围更立体', '￥280.00', '￥389'),
	(9, 'https://img03.miyabaobei.com/d1/p5/2018/04/28/8c/15/8c151d5511c76b1876a918cdc4fdb483046323522.jpg', '花王 Merries 拉拉裤L50*2包装 （9-14kg） L50和L50+2随机发货', '温柔呵护宝宝娇嫩的肌肤', '￥176.00', '￥299'),
	(10, 'https://img05.miyabaobei.com/d1/p5/2018/05/06/2c/39/2c3905a874a7e4a45550621f13a31d71831811896.jpg@base@tag=imgScale&w=447', '雅培亲体4段900g', '好配方，好营养，满足宝宝所需', '￥125.00', '￥189');
/*!40000 ALTER TABLE `list` ENABLE KEYS */;


-- 导出  表 miya.users 结构
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `index` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0',
  `status` int(11) DEFAULT '1' COMMENT '1:正常 0：异常',
  PRIMARY KEY (`index`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

-- 正在导出表  miya.users 的数据：~7 rows (大约)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`index`, `username`, `password`, `status`) VALUES
	(69, '15198862053', '111', 1),
	(70, '15198862011', '111', 1),
	(71, '15198862000', '111', 1),
	(72, '15198862111', '111', 1),
	(73, '15198862012', '111', 1),
	(74, '15198862222', '111', 1),
	(75, '15198862223', '111', 1),
	(76, '15198862221', '111', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
