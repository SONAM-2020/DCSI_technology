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
  `Image` varchar(200) default NULL,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_category_master` */

insert  into `t_category_master`(`Id`,`Category_Name`,`Description`,`Image`,`Status`) values (1,'Equipment','one and two','uploads/category2.png','Active'),(2,'Machinery','eferfreferf','uploads/category3.png','Active');

/*Table structure for table `t_country_master` */

DROP TABLE IF EXISTS `t_country_master`;

CREATE TABLE `t_country_master` (
  `Id` int(11) NOT NULL auto_increment,
  `Country_Name` varchar(200) NOT NULL,
  `Status` enum('Active','inActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=latin1;

/*Data for the table `t_country_master` */

insert  into `t_country_master`(`Id`,`Country_Name`,`Status`) values (1,'Aruba','Active'),(2,'Afghanistan','Active'),(3,'Angola','Active'),(4,'Anguilla','Active'),(5,'Åland','Active'),(6,'Albania','Active'),(7,'Andorra','Active'),(8,'United Arab Emirates','Active'),(9,'Argentina','Active'),(10,'Armenia','Active'),(11,'American Samoa','Active'),(12,'Antarctica','Active'),(13,'French Southern Territories','Active'),(14,'Antigua and Barbuda','Active'),(15,'Australia','Active'),(16,'Austria','Active'),(17,'Azerbaijan','Active'),(18,'Burundi','Active'),(19,'Belgium','Active'),(20,'Benin','Active'),(21,'Bonaire','Active'),(22,'Burkina Faso','Active'),(23,'Bangladesh','Active'),(24,'Bulgaria','Active'),(25,'Bahrain','Active'),(26,'Bahamas','Active'),(27,'Bosnia and Herzegovina','Active'),(28,'Saint Barthélemy','Active'),(29,'Belarus','Active'),(30,'Belize','Active'),(31,'Bermuda','Active'),(32,'Bolivia','Active'),(33,'Brazil','Active'),(34,'Barbados','Active'),(35,'Brunei','Active'),(36,'Bhutan','Active'),(37,'Bouvet Island','Active'),(38,'Botswana','Active'),(39,'Central African Republic','Active'),(40,'Canada','Active'),(41,'Cocos [Keeling] Islands','Active'),(42,'Switzerland','Active'),(43,'Chile','Active'),(44,'China','Active'),(45,'Ivory Coast','Active'),(46,'Cameroon','Active'),(47,'Democratic Republic of the Congo','Active'),(48,'Republic of the Congo','Active'),(49,'Cook Islands','Active'),(50,'Colombia','Active'),(51,'Comoros','Active'),(52,'Cape Verde','Active'),(53,'Costa Rica','Active'),(54,'Cuba','Active'),(55,'Curacao','Active'),(56,'Christmas Island','Active'),(57,'Cayman Islands','Active'),(58,'Cyprus','Active'),(59,'Czech Republic','Active'),(60,'Germany','Active'),(61,'Djibouti','Active'),(62,'Dominica','Active'),(63,'Denmark','Active'),(64,'Dominican Republic','Active'),(65,'Algeria','Active'),(66,'Ecuador','Active'),(67,'Egypt','Active'),(68,'Eritrea','Active'),(69,'Western Sahara','Active'),(70,'Spain','Active'),(71,'Estonia','Active'),(72,'Ethiopia','Active'),(73,'Finland','Active'),(74,'Fiji','Active'),(75,'Falkland Islands','Active'),(76,'France','Active'),(77,'Faroe Islands','Active'),(78,'Micronesia','Active'),(79,'Gabon','Active'),(80,'United Kingdom','Active'),(81,'Georgia','Active'),(82,'Guernsey','Active'),(83,'Ghana','Active'),(84,'Gibraltar','Active'),(85,'Guinea','Active'),(86,'Guadeloupe','Active'),(87,'Gambia','Active'),(88,'Guinea-Bissau','Active'),(89,'Equatorial Guinea','Active'),(90,'Greece','Active'),(91,'Grenada','Active'),(92,'Greenland','Active'),(93,'Guatemala','Active'),(94,'French Guiana','Active'),(95,'Guam','Active'),(96,'Guyana','Active'),(97,'Hong Kong','Active'),(98,'Heard Island and McDonald Islands','Active'),(99,'Honduras','Active'),(100,'Croatia','Active'),(101,'Haiti','Active'),(102,'Hungary','Active'),(103,'Indonesia','Active'),(104,'Isle of Man','Active'),(105,'India','Active'),(106,'British Indian Ocean Territory','Active'),(107,'Ireland','Active'),(108,'Iran','Active'),(109,'Iraq','Active'),(110,'Iceland','Active'),(111,'Israel','Active'),(112,'Italy','Active'),(113,'Jamaica','Active'),(114,'Jersey','Active'),(115,'Jordan','Active'),(116,'Japan','Active'),(117,'Kazakhstan','Active'),(118,'Kenya','Active'),(119,'Kyrgyzstan','Active'),(120,'Cambodia','Active'),(121,'Kiribati','Active'),(122,'Saint Kitts and Nevis','Active'),(123,'South Korea','Active'),(124,'Kuwait','Active'),(125,'Laos','Active'),(126,'Lebanon','Active'),(127,'Liberia','Active'),(128,'Libya','Active'),(129,'Saint Lucia','Active'),(130,'Liechtenstein','Active'),(131,'Sri Lanka','Active'),(132,'Lesotho','Active'),(133,'Lithuania','Active'),(134,'Luxembourg','Active'),(135,'Latvia','Active'),(136,'Macao','Active'),(137,'Saint Martin','Active'),(138,'Morocco','Active'),(139,'Monaco','Active'),(140,'Moldova','Active'),(141,'Madagascar','Active'),(142,'Maldives','Active'),(143,'Mexico','Active'),(144,'Marshall Islands','Active'),(145,'Macedonia','Active'),(146,'Mali','Active'),(147,'Malta','Active'),(148,'Myanmar [Burma]','Active'),(149,'Montenegro','Active'),(150,'Mongolia','Active'),(151,'Northern Mariana Islands','Active'),(152,'Mozambique','Active'),(153,'Mauritania','Active'),(154,'Montserrat','Active'),(155,'Martinique','Active'),(156,'Mauritius','Active'),(157,'Malawi','Active'),(158,'Malaysia','Active'),(159,'Mayotte','Active'),(160,'Namibia','Active'),(161,'New Caledonia','Active'),(162,'Niger','Active'),(163,'Norfolk Island','Active'),(164,'Nigeria','Active'),(165,'Nicaragua','Active'),(166,'Niue','Active'),(167,'Netherlands','Active'),(168,'Norway','Active'),(169,'Nepal','Active'),(170,'Nauru','Active'),(171,'New Zealand','Active'),(172,'Oman','Active'),(173,'Pakistan','Active'),(174,'Panama','Active'),(175,'Pitcairn Islands','Active'),(176,'Peru','Active'),(177,'Philippines','Active'),(178,'Palau','Active'),(179,'Papua New Guinea','Active'),(180,'Poland','Active'),(181,'Puerto Rico','Active'),(182,'North Korea','Active'),(183,'Portugal','Active'),(184,'Paraguay','Active'),(185,'Palestine','Active'),(186,'French Polynesia','Active'),(187,'Qatar','Active'),(188,'Réunion','Active'),(189,'Romania','Active'),(190,'Russia','Active'),(191,'Rwanda','Active'),(192,'Saudi Arabia','Active'),(193,'Sudan','Active'),(194,'Senegal','Active'),(195,'Singapore','Active'),(196,'South Georgia and the South Sandwich Islands','Active'),(197,'Saint Helena','Active'),(198,'Svalbard and Jan Mayen','Active'),(199,'Solomon Islands','Active'),(200,'Sierra Leone','Active'),(201,'El Salvador','Active'),(202,'San Marino','Active'),(203,'Somalia','Active'),(204,'Saint Pierre and Miquelon','Active'),(205,'Serbia','Active'),(206,'South Sudan','Active'),(207,'São Tomé and Príncipe','Active'),(208,'Suriname','Active'),(209,'Slovakia','Active'),(210,'Slovenia','Active'),(211,'Sweden','Active'),(212,'Swaziland','Active'),(213,'Sint Maarten','Active'),(214,'Seychelles','Active'),(215,'Syria','Active'),(216,'Turks and Caicos Islands','Active'),(217,'Chad','Active'),(218,'Togo','Active'),(219,'Thailand','Active'),(220,'Tajikistan','Active'),(221,'Tokelau','Active'),(222,'Turkmenistan','Active'),(223,'East Timor','Active'),(224,'Tonga','Active'),(225,'Trinidad and Tobago','Active'),(226,'Tunisia','Active'),(227,'Turkey','Active'),(228,'Tuvalu','Active'),(229,'Taiwan','Active'),(230,'Tanzania','Active'),(231,'Uganda','Active'),(232,'Ukraine','Active'),(233,'U.S. Minor Outlying Islands','Active'),(234,'Uruguay','Active'),(235,'United States','Active'),(236,'Uzbekistan','Active'),(237,'Vatican City','Active'),(238,'Saint Vincent and the Grenadines','Active'),(239,'Venezuela','Active'),(240,'British Virgin Islands','Active'),(241,'U.S. Virgin Islands','Active'),(242,'Vietnam','Active'),(243,'Vanuatu','Active'),(244,'Wallis and Futuna','Active'),(245,'Samoa','Active'),(246,'Kosovo','Active'),(247,'Yemen','Active'),(248,'South Africa','Active'),(249,'Zambia','Active'),(250,'Zimbabwe','Active');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier_company` */

insert  into `t_supplier_company`(`Id`,`Supplier_Type_Id`,`User_Id`,`Company_Name`,`Country_Id`,`City`,`Postal_Code`,`License_No`,`License_Img`,`Telephone_No`,`License_Registration_Date`,`Company_Address`,`Company_Description`,`Company_Website`,`Submitted_Date`,`Update_date`,`Updated_By`,`Status_Id`) values (1,0,4,'company',NULL,NULL,NULL,'sdfas','../uploads/rin_side.png','02333566','2021-02-16','sdfsdf','asdfasdf','http://bhutansyncits.com','2021-02-14 12:20:30','0000-00-00 00:00:00',NULL,1),(2,1,5,'e-bhutan',NULL,NULL,NULL,'12312312','../uploads/main1.png','12312312','2021-02-16','sdfsdf','asdfasdf','http://e-bhutan.com','2021-02-14 12:37:27','0000-00-00 00:00:00',NULL,1),(3,2,6,'BhutanSync Infotech Solution',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'dvgegvr','dvdvsdv','http://bhutansyncits.com','2021-02-14 03:04:53','0000-00-00 00:00:00',NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `t_user_master` */

insert  into `t_user_master`(`Id`,`Name`,`Email`,`Password`,`Image`,`Contact_No`,`Designation`,`Role_Id`,`Status`) values (1,'SONAM','admin@dcsitechnology.bt','$2y$10$mr4ydh6Xqr1QrBOvphT66.SAvUjwESA2lm07k4FDXtCx8XH7jtzFy',NULL,'',NULL,1,'Active'),(2,'name test','email','$2y$10$XK6dkgV3mJhs56EJscM1SeToeQfLIicPGOOnnp8rbspx.IPzPR/ui',NULL,'12312312','designation',2,'InActive'),(3,'name test','email','$2y$10$GgErJSiKDGSxVbOE8BJS8.DujslAM2yj5P7vLjllDhmcIIR9i3hJ2',NULL,'12312312','designation',2,'InActive'),(4,'name test','email','$2y$10$xAGBI03TCNXegn97SAkf9eGxflVG22gAK2kG1RrHfbeL0l74Ntkhq',NULL,'12312312','designation',2,'InActive'),(5,'Tshewan','email@gmail.com','$2y$10$Qt7WHMwHQyXgR1/BNanGFe6QCq38KgXJKXlp1O8VR/M3HCRep5cpS',NULL,'12312312','Programmer',2,'InActive'),(6,'Sonam Dorji','sonam@bhutansyncits.com','$2y$10$mr4ydh6Xqr1QrBOvphT66.SAvUjwESA2lm07k4FDXtCx8XH7jtzFy',NULL,'17458669','General Manager',3,'Active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
