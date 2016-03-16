/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.16 : Database - mvc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mvc` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `mvc`;

/*Table structure for table `destination` */

DROP TABLE IF EXISTS `destination`;

CREATE TABLE `destination` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `destination` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `destination` */

LOCK TABLES `destination` WRITE;

insert  into `destination`(`id`,`destination`) values (1,'Dubai');
insert  into `destination`(`id`,`destination`) values (2,'London');
insert  into `destination`(`id`,`destination`) values (3,'Las Vegas');
insert  into `destination`(`id`,`destination`) values (4,'Australia');

UNLOCK TABLES;

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `d_id` int(3) NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `hotel` */

LOCK TABLES `hotel` WRITE;

insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (1,'Atlantis - The Palm',1,'Tel : (02)-423-1242   $4500');
insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (2,'Hiton Hotel',2,'Our hotel will provide u everything what u want.');
insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (3,'MGM Grand',3,'Tel : (02)-423-1242   $8430');
insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (4,'Crown Casino',4,'Tel : (03)-333-1234   $2340');
insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (5,'The Arabian Resort',1,'Tel : (06)-423-5672   $1400');
insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (6,'Dubai Hotel',1,'Welcome!!!!!!!!');
insert  into `hotel`(`id`,`name`,`d_id`,`description`) values (7,'Golden Mountain',4,'Tel : (02)-533-4922   $8950');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
