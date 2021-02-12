/*
SQLyog Ultimate v8.82 
MySQL - 5.0.86-community-nt : Database - csitechnology_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`csitechnology_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `csitechnology_db`;

/*Table structure for table `t_admin_user` */

DROP TABLE IF EXISTS `t_admin_user`;

CREATE TABLE `t_admin_user` (
  `Id` int(50) NOT NULL auto_increment,
  `Name` varchar(255) default NULL,
  `Email` varchar(255) default NULL,
  `Email_Verified_at` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `Password` varchar(255) default NULL,
  `Image` tinyblob,
  `created_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_admin_user` */

insert  into `t_admin_user`(`Id`,`Name`,`Email`,`Email_Verified_at`,`Password`,`Image`,`created_at`,`updated_at`) values (1,'SONAM','admin@dcsitechnology.bt','2021-02-11 12:19:40','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `t_supplier` */

DROP TABLE IF EXISTS `t_supplier`;

CREATE TABLE `t_supplier` (
  `Id` int(50) NOT NULL auto_increment,
  `Supplier_Id` int(50) default NULL,
  `Name` varchar(255) default NULL,
  `Designation` varchar(255) default NULL,
  `Mobile_Number` varchar(255) default NULL,
  `Email_Address` varchar(255) default NULL,
  `Password` varchar(255) default NULL,
  `Company_Name` varchar(255) default NULL,
  `Country` varchar(255) default NULL,
  `City` varchar(255) default NULL,
  `Postal_Code` varchar(255) default NULL,
  `License_No` varchar(255) default NULL,
  `License_Img` blob,
  `Telephone_No` varchar(255) default NULL,
  `L_Registration_Date` date default NULL,
  `Company_Address` text,
  `Company_Description` text,
  `Decleration` varchar(100) default NULL,
  `Apply_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `Update_date` timestamp NOT NULL default '0000-00-00 00:00:00',
  `Status` varchar(255) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier` */

/*Table structure for table `t_supplier_master` */

DROP TABLE IF EXISTS `t_supplier_master`;

CREATE TABLE `t_supplier_master` (
  `Id` int(50) NOT NULL auto_increment,
  `Name` varchar(255) default NULL,
  `Status` varchar(50) default 'Yes',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier_master` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
