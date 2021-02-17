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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_category_master` */

insert  into `t_category_master`(`Id`,`Category_Name`,`Description`,`Image`,`Status`) values (1,'Category3','fewfewffew','category3.png','Active');

/*Table structure for table `t_company_details` */

DROP TABLE IF EXISTS `t_company_details`;

CREATE TABLE `t_company_details` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(255) NOT NULL,
  `Contact_Number` varchar(200) default NULL,
  `Email_Address` varchar(200) default NULL,
  `Location_Address` varchar(200) default NULL,
  `Fackbook_Link` varchar(200) default NULL,
  `Twitter_Link` varchar(200) default NULL,
  `Youtube_Link` varchar(200) default NULL,
  `Googleplus_Link` varchar(200) default NULL,
  `Logo` varchar(255) default NULL,
  `Company_Description` text,
  `status` enum('Active','InActive') default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_company_details` */

insert  into `t_company_details`(`Id`,`Name`,`Contact_Number`,`Email_Address`,`Location_Address`,`Fackbook_Link`,`Twitter_Link`,`Youtube_Link`,`Googleplus_Link`,`Logo`,`Company_Description`,`status`) values (1,'CSI Technology','17458669','info@dcsitechnology.bt','MOEA, Thimphu Bhutan','https://www.facebook.com/dcsitechnology','https://www.twitter.com/dcsitechnology','https://www.Youtube.com/dcsitechnology','https://www.google.com/dcsitechnology','dcsilogo1.png','<p>This technology transfer website serves as an online database for the exchange of technology offers and requests in Bhutan. The website has several features including a technology offers and requests database in Bhutan and International, technology transfer partner links, basic and practical knowledge on technology transfer, technology news, and technology events. This online database search engine enables buyers and sellers of technology to search not only from our local Bhutanese suppliers but also connected to selected International database centers. Over 20 public technology databases are currently searchable using this online database Search Engine and it is planned to link more technology databases from Europe, North America, and Africa. </p>',NULL);

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

/*Table structure for table `t_image_slider` */

DROP TABLE IF EXISTS `t_image_slider`;

CREATE TABLE `t_image_slider` (
  `Id` int(11) NOT NULL auto_increment,
  `Image` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Status` enum('Active','InActive') NOT NULL default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `t_image_slider` */

insert  into `t_image_slider`(`Id`,`Image`,`Name`,`Description`,`Status`) values (10,'banner.png','Sonam Dorji','efefewrf','Active');

/*Table structure for table `t_mail_template` */

DROP TABLE IF EXISTS `t_mail_template`;

CREATE TABLE `t_mail_template` (
  `Template_Id` bigint(11) NOT NULL auto_increment,
  `Template_Subject` varchar(250) default NULL,
  `Template_Module` varchar(250) default NULL,
  `Template_Mail_Body` text,
  PRIMARY KEY  (`Template_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `t_mail_template` */

insert  into `t_mail_template`(`Template_Id`,`Template_Subject`,`Template_Module`,`Template_Mail_Body`) values (1,'REGISTRATION APPROVAL','REGISTRATION_APPROVE',' <!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta NAME=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta NAME=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style TYPE=\"text/css\">\r\n    body {\r\n        width: 100%;\r\n        margin: 0;\r\n        padding: 0;\r\n        -webkit-font-smoothing: antialiased;\r\n    }\r\n    @media only screen AND (MAX-width: 800px) {\r\n        TABLE[class=\"table-row\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n            padding-LEFT: 20px !important;\r\n            padding-RIGHT: 20px !important;\r\n        }\r\n        TABLE[class=\"table-row-fixed\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n        }\r\n        TABLE[class=\"table-col\"], TABLE[class=\"table-col-border\"] {\r\n            FLOAT: NONE !important;\r\n            width: 100% !important;\r\n            padding-LEFT: 0 !important;\r\n            padding-RIGHT: 0 !important;\r\n            TABLE-layout: FIXED;\r\n        }\r\n        td[class=\"table-col-td\"] {\r\n            width: 100% !important;\r\n        }\r\n        TABLE[class=\"table-col-border\"] + TABLE[class=\"table-col-border\"] {\r\n            padding-top: 12px;\r\n            margin-top: 12px;\r\n            border-top: 1px solid #E8E8E8;\r\n        }\r\n        TABLE[class=\"table-col\"] + TABLE[class=\"table-col\"] {\r\n            margin-top: 15px;\r\n        }\r\n        td[class=\"table-row-td\"] {\r\n            padding-LEFT: 0 !important;\r\n            padding-RIGHT: 0 !important;\r\n        }\r\n        TABLE[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n            width: 100% !important;\r\n        }\r\n        img {\r\n            MAX-width: 100% !important;\r\n            display: inline !important;\r\n        }\r\n        img[class=\"pull-right\"] {\r\n            FLOAT: RIGHT;\r\n            margin-LEFT: 11px;\r\n            MAX-width: 125px !important;\r\n            padding-bottom: 0 !important;\r\n        }\r\n        img[class=\"pull-left\"] {\r\n            FLOAT: LEFT;\r\n            margin-RIGHT: 11px;\r\n            MAX-width: 125px !important;\r\n            padding-bottom: 0 !important;\r\n        }\r\n        TABLE[class=\"table-space\"], TABLE[class=\"header-row\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n        }\r\n        td[class=\"header-row-td\"] {\r\n            width: 100% !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 480px) {\r\n        TABLE[class=\"table-row\"] {\r\n            padding-LEFT: 16px !important;\r\n            padding-RIGHT: 16px !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 320px) {\r\n        TABLE[class=\"table-row\"] {\r\n            padding-LEFT: 12px !important;\r\n            padding-RIGHT: 12px !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 458px) {\r\n        td[class=\"table-td-wrap\"] {\r\n            width: 100% !important;\r\n        }\r\n    }\r\n  </style>\r\n </head>\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n	<TABLE class=\"table-row\" width=\"680\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <TABLE class=\"table-col\" align=\"left\" width=\"630\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\">\r\n	<tbody>\r\n		<tr>\r\n			<td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n				\r\n				<DIV style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n				  <p><b style=\"color: #777777;\">Hi ##Name##.<br>\r\n						Thank you for registering with DCSI as one of the supplier. Our team has reviewed your registeration details and we approved accordingly. Now you may login and add your products </b></p>\r\n				  <p><b>Thank you for connecting with us</b>\r\n					\r\n				  </p>\r\n				</DIV>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	</TABLE>\r\n</td></tr></tbody></TABLE>\r\n\r\n<TABLE class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <TABLE class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n  </td></tr></tbody></TABLE>\r\n</td></tr></tbody></TABLE>\r\n<TABLE class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></TABLE>\r\n<TABLE class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></TABLE></td></tr></TABLE>\r\n</td></tr>\r\n </TABLE>\r\n </body>\r\n </html>           '),(2,'REGISTRATION REJECTION','REGISTRATION_REJECT',' <!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta NAME=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta NAME=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style TYPE=\"text/css\">\r\n    body {\r\n        width: 100%;\r\n        margin: 0;\r\n        padding: 0;\r\n        -webkit-font-smoothing: antialiased;\r\n    }\r\n    @media only screen AND (MAX-width: 800px) {\r\n        TABLE[class=\"table-row\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n            padding-LEFT: 20px !important;\r\n            padding-RIGHT: 20px !important;\r\n        }\r\n        TABLE[class=\"table-row-fixed\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n        }\r\n        TABLE[class=\"table-col\"], TABLE[class=\"table-col-border\"] {\r\n            FLOAT: NONE !important;\r\n            width: 100% !important;\r\n            padding-LEFT: 0 !important;\r\n            padding-RIGHT: 0 !important;\r\n            TABLE-layout: FIXED;\r\n        }\r\n        td[class=\"table-col-td\"] {\r\n            width: 100% !important;\r\n        }\r\n        TABLE[class=\"table-col-border\"] + TABLE[class=\"table-col-border\"] {\r\n            padding-top: 12px;\r\n            margin-top: 12px;\r\n            border-top: 1px solid #E8E8E8;\r\n        }\r\n        TABLE[class=\"table-col\"] + TABLE[class=\"table-col\"] {\r\n            margin-top: 15px;\r\n        }\r\n        td[class=\"table-row-td\"] {\r\n            padding-LEFT: 0 !important;\r\n            padding-RIGHT: 0 !important;\r\n        }\r\n        TABLE[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n            width: 100% !important;\r\n        }\r\n        img {\r\n            MAX-width: 100% !important;\r\n            display: inline !important;\r\n        }\r\n        img[class=\"pull-right\"] {\r\n            FLOAT: RIGHT;\r\n            margin-LEFT: 11px;\r\n            MAX-width: 125px !important;\r\n            padding-bottom: 0 !important;\r\n        }\r\n        img[class=\"pull-left\"] {\r\n            FLOAT: LEFT;\r\n            margin-RIGHT: 11px;\r\n            MAX-width: 125px !important;\r\n            padding-bottom: 0 !important;\r\n        }\r\n        TABLE[class=\"table-space\"], TABLE[class=\"header-row\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n        }\r\n        td[class=\"header-row-td\"] {\r\n            width: 100% !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 480px) {\r\n        TABLE[class=\"table-row\"] {\r\n            padding-LEFT: 16px !important;\r\n            padding-RIGHT: 16px !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 320px) {\r\n        TABLE[class=\"table-row\"] {\r\n            padding-LEFT: 12px !important;\r\n            padding-RIGHT: 12px !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 458px) {\r\n        td[class=\"table-td-wrap\"] {\r\n            width: 100% !important;\r\n        }\r\n    }\r\n  </style>\r\n </head>\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n	<TABLE class=\"table-row\" width=\"680\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <TABLE class=\"table-col\" align=\"left\" width=\"630\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\">\r\n	<tbody>\r\n		<tr>\r\n			<td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n				\r\n				<DIV style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n				  <p><b style=\"color: #777777;\">Hi ##Name##.<br>\r\n						Thank you for submitting application for registration with us. However, we are sorry that your application has been rejected due to ##REJECT_REASON##. </b></p>\r\n				  <p><b>Thank you for connecting with us</b>\r\n					\r\n				  </p>\r\n				</DIV>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	</TABLE>\r\n</td></tr></tbody></TABLE>\r\n\r\n<TABLE class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <TABLE class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n  </td></tr></tbody></TABLE>\r\n</td></tr></tbody></TABLE>\r\n<TABLE class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></TABLE>\r\n<TABLE class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></TABLE></td></tr></TABLE>\r\n</td></tr>\r\n </TABLE>\r\n </body>\r\n </html>           '),(3,'REGISTRATION SUBMISSION','REGISTRATION_SUBMISSION',' <!doctype html>\r\n <html xmlns=\"http://www.w3.org/1999/xhtml\">\r\n <head>\r\n  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />\r\n  <meta NAME=\"viewport\" content=\"initial-scale=1.0\" />\r\n  <meta NAME=\"format-detection\" content=\"telephone=no\" />\r\n  <title></title>\r\n  <style TYPE=\"text/css\">\r\n    body {\r\n        width: 100%;\r\n        margin: 0;\r\n        padding: 0;\r\n        -webkit-font-smoothing: antialiased;\r\n    }\r\n    @media only screen AND (MAX-width: 800px) {\r\n        TABLE[class=\"table-row\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n            padding-LEFT: 20px !important;\r\n            padding-RIGHT: 20px !important;\r\n        }\r\n        TABLE[class=\"table-row-fixed\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n        }\r\n        TABLE[class=\"table-col\"], TABLE[class=\"table-col-border\"] {\r\n            FLOAT: NONE !important;\r\n            width: 100% !important;\r\n            padding-LEFT: 0 !important;\r\n            padding-RIGHT: 0 !important;\r\n            TABLE-layout: FIXED;\r\n        }\r\n        td[class=\"table-col-td\"] {\r\n            width: 100% !important;\r\n        }\r\n        TABLE[class=\"table-col-border\"] + TABLE[class=\"table-col-border\"] {\r\n            padding-top: 12px;\r\n            margin-top: 12px;\r\n            border-top: 1px solid #E8E8E8;\r\n        }\r\n        TABLE[class=\"table-col\"] + TABLE[class=\"table-col\"] {\r\n            margin-top: 15px;\r\n        }\r\n        td[class=\"table-row-td\"] {\r\n            padding-LEFT: 0 !important;\r\n            padding-RIGHT: 0 !important;\r\n        }\r\n        TABLE[class=\"navbar-row\"] , td[class=\"navbar-row-td\"] {\r\n            width: 100% !important;\r\n        }\r\n        img {\r\n            MAX-width: 100% !important;\r\n            display: inline !important;\r\n        }\r\n        img[class=\"pull-right\"] {\r\n            FLOAT: RIGHT;\r\n            margin-LEFT: 11px;\r\n            MAX-width: 125px !important;\r\n            padding-bottom: 0 !important;\r\n        }\r\n        img[class=\"pull-left\"] {\r\n            FLOAT: LEFT;\r\n            margin-RIGHT: 11px;\r\n            MAX-width: 125px !important;\r\n            padding-bottom: 0 !important;\r\n        }\r\n        TABLE[class=\"table-space\"], TABLE[class=\"header-row\"] {\r\n            FLOAT: NONE !important;\r\n            width: 98% !important;\r\n        }\r\n        td[class=\"header-row-td\"] {\r\n            width: 100% !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 480px) {\r\n        TABLE[class=\"table-row\"] {\r\n            padding-LEFT: 16px !important;\r\n            padding-RIGHT: 16px !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 320px) {\r\n        TABLE[class=\"table-row\"] {\r\n            padding-LEFT: 12px !important;\r\n            padding-RIGHT: 12px !important;\r\n        }\r\n    }\r\n    @media only screen AND (MAX-width: 458px) {\r\n        td[class=\"table-td-wrap\"] {\r\n            width: 100% !important;\r\n        }\r\n    }\r\n  </style>\r\n </head>\r\n <body style=\"font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;\" bgcolor=\"#E4E6E9\" leftmargin=\"0\" topmargin=\"0\" marginheight=\"0\" marginwidth=\"0\">\r\n	<TABLE class=\"table-row\" width=\"680\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;\" valign=\"top\" align=\"left\">\r\n  <TABLE class=\"table-col\" align=\"left\" width=\"630\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\">\r\n	<tbody>\r\n		<tr>\r\n			<td class=\"table-col-td\" width=\"378\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;\" valign=\"top\" align=\"left\">\r\n				\r\n				<DIV style=\"font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;\">\r\n				  <p><b style=\"color: #777777;\">Hi ##Name##.<br>\r\n						Thank you for submitting application for registration with us. Our team will review your details soon as possible and contact you throuth this mail. </b></p>\r\n				  <p><b>Thank you for connecting with us</b>\r\n					\r\n				  </p>\r\n				</DIV>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n	</TABLE>\r\n</td></tr></tbody></TABLE>\r\n\r\n<TABLE class=\"table-row-fixed\" width=\"450\" bgcolor=\"#FFFFFF\" style=\"table-layout: fixed; background-color: #ffffff;\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-row-fixed-td\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;\" valign=\"top\" align=\"left\">\r\n  <TABLE class=\"table-col\" align=\"left\" width=\"448\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" style=\"table-layout: fixed;\"><tbody><tr><td class=\"table-col-td\" width=\"448\" style=\"font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;\" valign=\"top\" align=\"left\">\r\n  </td></tr></tbody></TABLE>\r\n</td></tr></tbody></TABLE>\r\n<TABLE class=\"table-space\" height=\"1\" style=\"height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"1\" style=\"height: 1px; width: 450px; background-color: #ffffff;\" width=\"450\" bgcolor=\"#FFFFFF\" align=\"left\">&nbsp;</td></tr></tbody></TABLE>\r\n<TABLE class=\"table-space\" height=\"36\" style=\"height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"><tbody><tr><td class=\"table-space-td\" valign=\"middle\" height=\"36\" style=\"height: 36px; width: 450px; background-color: #e4e6e9;\" width=\"450\" bgcolor=\"#E4E6E9\" align=\"left\">&nbsp;</td></tr></tbody></TABLE></td></tr></TABLE>\r\n</td></tr>\r\n </TABLE>\r\n </body>\r\n </html>           ');

/*Table structure for table `t_news_announcement` */

DROP TABLE IF EXISTS `t_news_announcement`;

CREATE TABLE `t_news_announcement` (
  `Id` int(20) NOT NULL auto_increment,
  `News_title` text,
  `Description` text,
  `Image` blob,
  `Post_date` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `Status` enum('Active','InActive') default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_news_announcement` */

insert  into `t_news_announcement`(`Id`,`News_title`,`Description`,`Image`,`Post_date`,`Status`) values (2,'csacfsd','<p>sdfsdvs</p>','banner.png','2021-02-15 16:48:22','Active');

/*Table structure for table `t_order_details` */

DROP TABLE IF EXISTS `t_order_details`;

CREATE TABLE `t_order_details` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact_No` varchar(100) NOT NULL,
  `Quantity` varchar(11) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  `Company_Id` int(11) NOT NULL,
  `Submitted_Date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_order_details` */

insert  into `t_order_details`(`Id`,`Name`,`Email`,`Contact_No`,`Quantity`,`Product_Id`,`Company_Id`,`Submitted_Date`) values (1,'Tshewang Tenzin','sjdfbaskdfnajknfajksdbf','12312312','2',2,5,'2021-02-17 06:05:29');

/*Table structure for table `t_partner_details` */

DROP TABLE IF EXISTS `t_partner_details`;

CREATE TABLE `t_partner_details` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(200) default NULL,
  `Image` varchar(255) default NULL,
  `Description` text,
  `status` enum('Active','InActive') default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `t_partner_details` */

insert  into `t_partner_details`(`Id`,`Name`,`Image`,`Description`,`status`) values (1,'The Asian and Pacific Centre for Transfer of Technology(APCTT)','apctt.jpg','<div style=\"text-align: justify;\">The Asian and Pacific Centre for Transfer of Technology (APCTT) is a regional institution of the United Nations Economic and Social Commission for Asia and the Pacific servicing the Asia-Pacific region.</div><div style=\"text-align: justify;\">The Centre works towards strengthening the national capacity of member States to nurture and promote national innovation systems and to create an enabling environment for the development and transfer of technology. The Centre was established in 1977 in Bangalore, India, and moved to New Delhi in 1993.</div><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">1. Science, Technology, and Innovation</span></p><p style=\"text-align: justify;\">APCTT assists member countries in the development and management of sound National Innovation Systems. We provide capacity-building support to foster technology innovation, technology-based entrepreneurship, and competitiveness of Small and Medium-Sized Enterprises.</p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">2. Technology Transfer</span></p><p style=\"text-align: justify;\">APCTT provides capacity-building support to member countries to develop, transfer, commercialize, and adopt new and emerging technologies that have the transformative potential to achieve Sustainable Development Goals.&nbsp;<span style=\"font-weight: bolder;\"><br></span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">3. Regional Cooperation</span></p><p style=\"text-align: justify;\">APCTT works to promote regional cooperation and networking related to Science, Technology, and Innovation policymaking and technology transfer.&nbsp;</p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder;\">4. Technology Intelligence</span></p><p style=\"text-align: justify;\">APCTT publishes several knowledge products, including the Asia-Pacific Tech Monitor, to disseminate information on new and emerging issues related to Science, Technology, and Innovation policy, latest technological innovations, market developments, and events.&nbsp;</p><div><br></div>','Active');

/*Table structure for table `t_product_images` */

DROP TABLE IF EXISTS `t_product_images`;

CREATE TABLE `t_product_images` (
  `Id` int(11) NOT NULL auto_increment,
  `Image_Name` varchar(200) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `FK_t_product_images_mappng` (`Product_Id`),
  CONSTRAINT `FK_t_product_images_mappng` FOREIGN KEY (`Product_Id`) REFERENCES `t_products_master` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `t_product_images` */

insert  into `t_product_images`(`Id`,`Image_Name`,`Product_Id`) values (7,'uploads/productImages/comp5/2.jpg',2),(8,'uploads/productImages/comp5/aboutImages.jpg',2),(9,'uploads/productImages/comp5/banks.png',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_products_master` */

insert  into `t_products_master`(`Id`,`Product_Name`,`Category_Id`,`Company_Id`,`Price`,`Model_No`,`Description`,`Last_Updated_Date`,`Status`) values (2,'Laptop',1,5,'120000','2019','{dzo_code: [\"The Dzongkhag Code should be of 2 digits .\"]}\ndzo_code: [\"The Dzongkhag Code should be of 2 digits .\"]\n0: \"The Dzongkhag Code should be of 2 digits .\"','2021-02-16 09:06:47','Active');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_status_master` */

insert  into `t_status_master`(`Id`,`Status_Name`,`Status`) values (1,'Submitted','Active'),(2,'Approved','Active'),(3,'Rejected','Active');

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
  `Remarks` text,
  `Status_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `FK_t_supplier_status_mapping` (`Status_Id`),
  KEY `FK_t_supplier_company` (`Country_Id`),
  CONSTRAINT `FK_t_supplier_company` FOREIGN KEY (`Country_Id`) REFERENCES `t_country_master` (`Id`),
  CONSTRAINT `FK_t_supplier_status_mapping` FOREIGN KEY (`Status_Id`) REFERENCES `t_status_master` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier_company` */

insert  into `t_supplier_company`(`Id`,`Supplier_Type_Id`,`User_Id`,`Company_Name`,`Country_Id`,`City`,`Postal_Code`,`License_No`,`License_Img`,`Telephone_No`,`License_Registration_Date`,`Company_Address`,`Company_Description`,`Company_Website`,`Submitted_Date`,`Update_date`,`Updated_By`,`Remarks`,`Status_Id`) values (5,1,10,'New Edge Technologies pvt.ltd',NULL,NULL,NULL,'12312312','../uploads/aboutImages.jpg','12312312','2021-02-17','Chubachu, Thimphu','Software Company','www.newedge.bt','2021-02-16 04:03:39','2021-02-16 09:05:05',1,'Approved',2),(6,1,11,'sdfg',NULL,NULL,NULL,'dsfg','../uploads/13.jpg','12312312','2021-02-26','ghjg','jhghj',';fknbskjgnb','2021-02-17 04:38:45','2021-02-17 10:16:51',1,'',2),(7,1,12,'skjdrgn',NULL,NULL,NULL,'nskjdfgn','../uploads/aboutImages.jpg','12312312','2021-02-12','sdfgds','thisdjfnaskdfn','www.newedge.bt','2021-02-17 05:19:44','2021-02-17 10:29:34',1,'this si thasdnfsakdfasf',3),(8,1,13,'skdjfgn',NULL,NULL,NULL,'ksdjfngkjsdg','../uploads/33.jpg','nskdfjng','2021-02-27','','','skdjfg','2021-02-17 05:25:08','0000-00-00 00:00:00',NULL,NULL,1),(9,1,14,'skjdfgb',NULL,NULL,NULL,'nksjdfgn','../uploads/13.jpg','skdfjg','2021-02-23','ksdjfg','nksjdfg','www.newedge.bt','2021-02-17 05:27:13','2021-02-17 10:27:58',1,'Just to test the mail functionality',3),(10,2,15,'skdfjng',2,'Thimphu','sdfgds',NULL,NULL,'sdnkfgnsdf',NULL,'skdjfngkj','nskfjdng','nksdfngkjsdgn','2021-02-17 05:33:36','0000-00-00 00:00:00',NULL,NULL,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `t_user_master` */

insert  into `t_user_master`(`Id`,`Name`,`Email`,`Password`,`Image`,`Contact_No`,`Designation`,`Role_Id`,`Status`) values (1,'SONAM','admin@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'',NULL,1,'Active'),(10,'Tshewang Tenzin','wangzin53@gmail.com12','$2y$10$gMp0pl73EppXoruHujgKn.UybSqTIq8NmNbLiNNROCltP7VqkSXOu','91869138_10151334439614944_5415809410700148736_o.jpg','17880455','Programmer',2,'Active'),(11,'Tshewang Tenzin','wangzin53@gmail.com1','$2y$10$XaRyLSNaqYYWZYQqGeXNEeO7Yl7VH16OAVh3PT0nDtw5iCgReqzgC',NULL,'12312312','designation',2,'Active'),(12,'Tshewang Tenzin','wangzin53@gmail.com2','$2y$10$0w4Qs7efwphqOIQdeipOLO69WiI5AyeqproWHubIovSmsz3bPl4rW',NULL,'12312312','designation',2,'InActive'),(13,'Tshewang Tenzin','sss','$2y$10$f4Szlu0wP81XMnISkKTWkeaVrwzvj2SGTP0IAw6RaBRMlsLGIVaY.',NULL,'12312312','designation',2,'InActive'),(14,'Sonam Dorji','sdorji815@gmail.com','$2y$10$tGOjlTqDGwMDz2tP2m2XQe8JR19JWTe.dcv8XfYXv/MEqQjpzrUmm',NULL,'12312312','Programmer',2,'InActive'),(15,'sjdfbnjksdfnakjsfn','wangzin53@gmail.com','$2y$10$iTNzDmjP6pDCVbKH.BTQw.8v5f2KUHbN//eqcuibgSAPRX9DZvl1m',NULL,'12312312','skdjfn',3,'InActive');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
