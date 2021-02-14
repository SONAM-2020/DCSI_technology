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

/*Table structure for table `t_category_master` */

DROP TABLE IF EXISTS `t_category_master`;

CREATE TABLE `t_category_master` (
  `Id` int(11) NOT NULL auto_increment,
  `Category_Name` varchar(200) NOT NULL,
  `Description` text,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_category_master` */

/*Table structure for table `t_country_master` */

DROP TABLE IF EXISTS `t_country_master`;

CREATE TABLE `t_country_master` (
  `Id` int(11) NOT NULL auto_increment,
  `Country_Name` varchar(200) NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_country_master` */

/*Table structure for table `t_product_images` */

DROP TABLE IF EXISTS `t_product_images`;

CREATE TABLE `t_product_images` (
  `Id` int(11) NOT NULL auto_increment,
  `Image_Name` varchar(200) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `FK_t_product_images_mappng` (`Product_Id`),
  CONSTRAINT `FK_t_product_images_mappng` FOREIGN KEY (`Product_Id`) REFERENCES `t_products_master` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_product_images` */

/*Table structure for table `t_products_master` */

DROP TABLE IF EXISTS `t_products_master`;

CREATE TABLE `t_products_master` (
  `Id` int(50) NOT NULL auto_increment,
  `Product_Name` varchar(255) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Company_Id` int(11) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Model_No` varchar(255) default NULL,
  `Description` text,
  `Last_Updated_Date` datetime NOT NULL,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`),
  KEY `FK_t_products_category_mapping` (`Category_Id`),
  CONSTRAINT `FK_t_products_category_mapping` FOREIGN KEY (`Category_Id`) REFERENCES `t_category_master` (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_products_master` */

/*Table structure for table `t_request_equipment_details` */

DROP TABLE IF EXISTS `t_request_equipment_details`;

CREATE TABLE `t_request_equipment_details` (
  `Id` int(11) NOT NULL auto_increment,
  `Equipment_Name` varchar(200) NOT NULL,
  `Description` text,
  `Quantity` int(11) default NULL,
  `Estimated_Price` varchar(100) default NULL,
  `Request_Personal_Id` int(11) default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_request_equipment_details` */

/*Table structure for table `t_request_personal_details` */

DROP TABLE IF EXISTS `t_request_personal_details`;

CREATE TABLE `t_request_personal_details` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(200) NOT NULL,
  `Address` text NOT NULL,
  `Contact_No` varchar(100) NOT NULL,
  `Email` varchar(200) default NULL,
  `Submission_Date` datetime default NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_request_personal_details` */

/*Table structure for table `t_role_master` */

DROP TABLE IF EXISTS `t_role_master`;

CREATE TABLE `t_role_master` (
  `Id` int(11) NOT NULL auto_increment,
  `Role_Name` varchar(100) NOT NULL,
  `Status` enum('Active','InActive') NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_role_master` */

insert  into `t_role_master`(`Id`,`Role_Name`,`Status`) values (1,'Admin','Active'),(2,'Local Supplier','Active'),(3,'Global_Supplier','Active');

/*Table structure for table `t_status_master` */

DROP TABLE IF EXISTS `t_status_master`;

CREATE TABLE `t_status_master` (
  `Id` int(11) NOT NULL auto_increment,
  `Status_Name` varchar(200) NOT NULL,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_status_master` */

insert  into `t_status_master`(`Id`,`Status_Name`,`Status`) values (1,'Submitted','Active');

/*Table structure for table `t_supplier_company` */

DROP TABLE IF EXISTS `t_supplier_company`;

CREATE TABLE `t_supplier_company` (
  `Id` int(11) NOT NULL auto_increment,
  `Supplier_Type_Id` int(11) NOT NULL,
  `User_Id` int(11) NOT NULL,
  `Company_Name` varchar(255) NOT NULL,
  `Country_Id` int(11) default NULL,
  `City` varchar(255) default NULL,
  `Postal_Code` varchar(255) default NULL,
  `License_No` varchar(255) default NULL,
  `License_Img` blob,
  `Telephone_No` varchar(255) default NULL,
  `License_Registration_Date` date default NULL,
  `Company_Address` text,
  `Company_Description` text,
  `Company_Website` varchar(200) default NULL,
  `Submitted_Date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `Update_date` timestamp NOT NULL default '0000-00-00 00:00:00',
  `Updated_By` int(11) default NULL,
  `Status_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `FK_t_supplier_status_mapping` (`Status_Id`),
  KEY `FK_t_supplier_company` (`Country_Id`),
  CONSTRAINT `FK_t_supplier_company` FOREIGN KEY (`Country_Id`) REFERENCES `t_country_master` (`Id`),
  CONSTRAINT `FK_t_supplier_status_mapping` FOREIGN KEY (`Status_Id`) REFERENCES `t_status_master` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier_company` */

insert  into `t_supplier_company`(`Id`,`Supplier_Type_Id`,`User_Id`,`Company_Name`,`Country_Id`,`City`,`Postal_Code`,`License_No`,`License_Img`,`Telephone_No`,`License_Registration_Date`,`Company_Address`,`Company_Description`,`Company_Website`,`Submitted_Date`,`Update_date`,`Updated_By`,`Status_Id`) values (1,0,4,'company',NULL,NULL,NULL,'sdfas','../uploads/rin_side.png','02333566','2021-02-16','sdfsdf','asdfasdf','http://bhutansyncits.com','2021-02-14 12:20:30','0000-00-00 00:00:00',NULL,1),(2,1,5,'e-bhutan',NULL,NULL,NULL,'12312312','../uploads/main1.png','12312312','2021-02-16','sdfsdf','asdfasdf','http://e-bhutan.com','2021-02-14 12:37:27','0000-00-00 00:00:00',NULL,1);

/*Table structure for table `t_supplier_type` */

DROP TABLE IF EXISTS `t_supplier_type`;

CREATE TABLE `t_supplier_type` (
  `Id` int(11) NOT NULL auto_increment,
  `Supplier_Type` varchar(200) NOT NULL,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier_type` */

insert  into `t_supplier_type`(`Id`,`Supplier_Type`,`Status`) values (1,'Local','Active'),(2,'International','Active');

/*Table structure for table `t_user_master` */

DROP TABLE IF EXISTS `t_user_master`;

CREATE TABLE `t_user_master` (
  `Id` int(50) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Image` tinyblob,
  `Contact_No` varchar(8) NOT NULL,
  `Designation` varchar(200) default NULL,
  `Role_Id` int(11) NOT NULL,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`),
  KEY `FK_t_user_role_mapping` (`Role_Id`),
  CONSTRAINT `FK_t_user_role_mapping` FOREIGN KEY (`Role_Id`) REFERENCES `t_role_master` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `t_user_master` */

insert  into `t_user_master`(`Id`,`Name`,`Email`,`Password`,`Image`,`Contact_No`,`Designation`,`Role_Id`,`Status`) values (1,'SONAM','admin@dcsitechnology.bt','$2y$10$xAGBI03TCNXegn97SAkf9eGxflVG22gAK2kG1RrHfbeL0l74Ntkhq',NULL,'',NULL,1,'Active'),(2,'name test','email','$2y$10$XK6dkgV3mJhs56EJscM1SeToeQfLIicPGOOnnp8rbspx.IPzPR/ui',NULL,'12312312','designation',2,'InActive'),(3,'name test','email','$2y$10$GgErJSiKDGSxVbOE8BJS8.DujslAM2yj5P7vLjllDhmcIIR9i3hJ2',NULL,'12312312','designation',2,'InActive'),(4,'name test','email','$2y$10$xAGBI03TCNXegn97SAkf9eGxflVG22gAK2kG1RrHfbeL0l74Ntkhq',NULL,'12312312','designation',2,'InActive'),(5,'Tshewan','email@gmail.com','$2y$10$Qt7WHMwHQyXgR1/BNanGFe6QCq38KgXJKXlp1O8VR/M3HCRep5cpS',NULL,'12312312','Programmer',2,'InActive');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
