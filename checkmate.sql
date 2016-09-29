/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.5.16 : Database - checkmate
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `checkmate`;

USE `checkmate`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `inmate` */

DROP TABLE IF EXISTS `inmate`;

CREATE TABLE `inmate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about` varchar(500) DEFAULT NULL,
  `inmate_id` varchar(11) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `othername` varchar(50) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `date_of_birth` varchar(50) DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `charges` varchar(50) DEFAULT NULL,
  `sentence` varchar(50) DEFAULT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `end_date` varchar(50) DEFAULT NULL,
  `pic` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `inmate` */

insert  into `inmate`(`id`,`about`,`inmate_id`,`lastname`,`firstname`,`othername`,`alias`,`nationality`,`date_of_birth`,`age`,`gender`,`address`,`charges`,`sentence`,`start_date`,`end_date`,`pic`) values (1,'','','Gamor','Emmanuel','Cole','','Ghanaian','12-02-2012','35','M','Mile7','','','05/02/2016 - 05/10/2016',NULL,'alert.jpg'),(2,'','','Lawerh','Jonathan','','','','12-02-2012','35','','','','','',NULL,'');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `othernames` varchar(50) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `badge` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(150) NOT NULL DEFAULT 'member',
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id_user`,`firstname`,`lastname`,`othernames`,`username`,`badge`,`sex`,`password`,`level_user`,`date`) values (1,'Micah','Micah',NULL,'admin',NULL,NULL,'ec7f74ffa2d24e38795e40f50937b96d','admin',NULL),(2,'Emmanuel','Gamor','Cole','member','12346','male','ec7f74ffa2d24e38795e40f50937b96d','member','2016-05-18 00:56:31'),(4,'Moses','Addae','','member','23444',NULL,'admin','member','2016-05-18 19:20:16'),(5,'Jonathan','Lawerh','','member','789523641',NULL,'5f4dcc3b5aa765d61d8327deb882cf99','member','2016-05-18 19:33:21'),(8,'tedfguhuj','trfguyh','','admin','yugyhkj',NULL,'5f4dcc3b5aa765d61d8327deb882cf99','member','2016-05-18 22:01:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
