/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - aplimed181217
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nik` varchar(40) NOT NULL DEFAULT '',
  `namalengkap` varchar(90) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `jenis_user` varchar(20) DEFAULT NULL,
  `DeptID` int(2) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `end_login` datetime DEFAULT NULL,
  `last_access_from` varchar(16) DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `online` tinyint(1) DEFAULT NULL,
  `jenisID` int(11) DEFAULT NULL,
  `DokterID` int(11) DEFAULT NULL,
  `user_jenisID` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`) USING BTREE,
  KEY `NewIndex1` (`user_jenisID`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=271 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id`,`nik`,`namalengkap`,`login`,`jenis_user`,`DeptID`,`level`,`status`,`password`,`last_login`,`end_login`,`last_access_from`,`editable`,`online`,`jenisID`,`DokterID`,`user_jenisID`) values 
(1,'2018121734','Hariyanto',NULL,NULL,NULL,NULL,'A','c4ca4238a0b923820dcc509a6f75849b',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(270,'tester','Tester',NULL,NULL,NULL,NULL,'A','dcc0d2629d84378b300fe09b3867b460',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
