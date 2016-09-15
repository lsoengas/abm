/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.5.5-10.1.13-MariaDB : Database - test-db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`test-db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `test-db`;

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(id,description) values (1,'Administrador'),(2,'Operario'),(3,'Jefe de area');

/*Table structure for table `task_state` */

DROP TABLE IF EXISTS `task_state`;

CREATE TABLE `task_state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `task_state` */

insert  into `task_state`(id,description) values (1,'Pendiente'),(2,'Realizado'),(3,'Vencido');

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `id_users` int(19) NOT NULL,
  `id_state` int(19) NOT NULL DEFAULT '1',
  `date_start` datetime NOT NULL,
  `date_finish` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

/*Data for the table `tasks` */

insert  into `tasks`(id,description,id_users,id_state,date_start,date_finish) values (33,'coco',0,2,'2016-05-19 10:49:19','2016-05-19 14:55:18'),(34,'asd',1,2,'2016-05-19 10:52:25','2016-05-19 14:55:18'),(35,'sdf',1,2,'2016-05-19 10:53:05','2016-05-19 14:55:22'),(36,'asd',5,2,'2016-05-19 10:53:10','2016-05-19 14:55:22'),(37,'qw',1,2,'2016-05-19 10:59:40','2016-05-19 14:55:23'),(38,'asd',1,2,'2016-05-19 13:40:52','2016-05-19 13:41:22'),(39,'qrqrqweqweqweqwe',4,2,'2016-05-19 13:52:40','2016-05-19 13:52:43'),(40,'dfg',1,2,'2016-05-20 11:33:48','2016-05-20 11:33:52');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `start_date` datetime NOT NULL,
  `role` int(19) NOT NULL,
  PRIMARY KEY (`id`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(id,first_name,surname,username,password,start_date,role) values (1,'Leandro','Soengas','lsoengas','1657ec96792937f71c20c9e1bdc2300f','2016-05-06 16:30:38',1),(2,'Martin','Bembenuti','mbembenuti','1657ec96792937f71c20c9e1bdc2300f','2016-05-14 13:24:44',1),(3,'Fernando','Oliva','foliva','1657ec96792937f71c20c9e1bdc2300f','2016-05-16 16:23:20',3),(4,'Solange','Parisi','sparisi','1657ec96792937f71c20c9e1bdc2300f','2016-05-16 16:24:48',2),(5,'Rodrigo','Tortora','rtortora','1657ec96792937f71c20c9e1bdc2300f','2016-05-16 16:26:23',2),(6,'sebastian','castro','scastro','1657ec96792937f71c20c9e1bdc2300f','2016-05-16 16:28:34',1),(7,'user','koko','salamin','827ccb0eea8a706c4c34a16891f84e7b','2016-05-16 16:35:18',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
