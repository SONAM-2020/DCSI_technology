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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_category_master` */

insert  into `t_category_master`(`Id`,`Category_Name`,`Description`,`Image`,`Status`) values (1,'Machinery','fewfewffew','category3.png','Active'),(2,'Tools & Equipment',NULL,NULL,'Active'),(3,'Accessories',NULL,NULL,'Active');

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

insert  into `t_company_details`(`Id`,`Name`,`Contact_Number`,`Email_Address`,`Location_Address`,`Fackbook_Link`,`Twitter_Link`,`Youtube_Link`,`Googleplus_Link`,`Logo`,`Company_Description`,`status`) values (1,'DCSI TECHNOLOGY','17458669','info@dcsitechnology.bt','Ministry of Economic Affair ,Thimphu Bhutan','https://www.facebook.com/dcsitechnology','https://www.twitter.com/dcsitechnology','https://www.Youtube.com/dcsitechnology','https://www.google.com/dcsitechnology','dcsilogoblack.png','<p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-family: Arial; font-size: 14px; text-align: start;\">The Department of Cottage &amp; Small Industry (DCSI) was established under the Ministry of Economic Affairs (MOEA) in July 2010; with the appointment of a director and transfer of staffs from the erstwhile MSME division of the Department of Industry (DoI). Considering the fact that more than 95% of the industries in Bhutan are small and cottage scale, the Royal Government created this department to spearhead the development of cottage and small industry in the country. Its head office is located within the MoEA complex, Thimphu.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-family: Arial; font-size: 14px; text-align: start;\">Guided by the philosophy of GNH, to become a premier agency promoting growth of a vibrant and sustainable cottage and small industries contributing to the overall socio-economic development of the country.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-family: Arial; font-size: 14px; text-align: start;\">To create an enabling environment to facilitate and support sustainable growth and development of Cottage &amp; Small Industries (CSI) in the country for equitable income distribution, employment generation and balanced regional development.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><br></p>',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `t_image_slider` */

insert  into `t_image_slider`(`Id`,`Image`,`Name`,`Description`,`Status`) values (10,'slider122.png','TECHNOLOGY TRANSFER AND DATABASE CENTER','This technology transfer website serves as an online database for the exchange of technology offers and requests in Bhutan. The website has several features including a technology offers and requests database in Bhutan and International, technology transfer partner links,','Active'),(13,'slider1.png','The Asian and Pacific Centre for Transfer of Technology','The Asian and Pacific Centre for Transfer of Technology (APCTT) is a regional institution of the United Nations Economic and Social Commission for Asia and the Pacific servicing the Asia-Pacific region.','Active');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `t_news_announcement` */

insert  into `t_news_announcement`(`Id`,`News_title`,`Description`,`Image`,`Post_date`,`Status`) values (3,'Ground Breaking Ceremony for Construction of Pasakha Dry Port','<p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 12px;\">Dasho Sonam Wangyel, Secretary for Ministry of Home and Cultural Affairs who is also the Chairman of the SC19TF graced the Salang Tendril (ground breaking ceremony) for the construction of Pasakha Dry port in Phuentsholing. The ceremony was also attended by the members of SC19TF, Consul General of the Embassy of India and the regional heads of Phuentsholing.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 14px; font-family: Arial;\">Pasakha dry port is one of the biggest infrastructural development projects undertaken by the Department of Trade. It is part of the government’s continuous efforts to facilitate trade and improve logistical facilities for our import and export. The prefeasibility study was carried out in 2016/17 with the financial and technical assistance from the World Bank. The need for dry port facilities has become critical and necessary to address logistical challenges faced by a landlocked country like Bhutan for export and business.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 14px; font-family: Arial;\">Pasakha dry port is being developed on an area of 15.06 acres which is strategically located near Pasakha industries and Bhutan-Indo border at Ahllay land custom station. The project is financed under the Trade support Facility program supported by the Government of India with overall cost estimation of around 1.7 billion.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 14px; font-family: Arial;\">The project has three major packages to be executed. The construction of 1.2 km length boundary RCC wall which is currently underway is the first package and is scheduled to be completed towards end of 2021. Other major packages in the pipeline include approach road to the project site, refilling of the project area, and the construction of civil structures such as administrative building, guest house, warehouses and internal roads.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 14px; font-family: Arial;\">The construction of Pasakha dry port is expected to significantly address logistical challenges faced by the private sector such as processing of import/export, transshipment of cargoes, long transit times, and high freight costs for movement of goods across the border. The port will also help reduce the risk of damages and pilferages to cargo during the processing, storage, and transshipment while providing improved facilities for traders. The dry port will cater for import and export of goods for/from western and central regions of Bhutan, besides Pasakha industries.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 14px; font-family: Arial;\">The construction of RCC wall has been awarded to Hi-Tech Construction Co. at an evaluated cost of 194.7 million. The project employs close to 180 employees, out of which more than 95% are Bhutanese workers from southern dzongkhags. The construction is carried out in a self-contained mode under strict compliance to the Covid-19 containment protocols issued by Covid-19 taskforce and Ministry of Health.</span></p><p style=\"text-align: justify; box-sizing: inherit; margin-bottom: 15px; color: rgb(114, 114, 114); font-family: dzongkha, dzongkha; font-size: 14px;\"><span style=\"font-size: 14px; font-family: Arial;\">The project is implemented by Project Implementation Unit based in Pasakha under Department of Trade, Ministry of Economic Affairs. The development of overall project is expected to be completed by early 2024.</span></p>','../uploads/NewsAnnouncement/news1.png','2021-02-16 10:51:17','Active');

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

insert  into `t_partner_details`(`Id`,`Name`,`Image`,`Description`,`status`) values (1,'The Asian and Pacific Centre for Transfer of Technology(APCTT)','apctt.jpg','<div style=\"text-align: justify;\"><span style=\"font-size: 14px;\">The Asian and Pacific Centre for Transfer of Technology (APCTT) is a regional institution of the United Nations Economic and Social Commission for Asia and the Pacific servicing the Asia-Pacific region.</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 14px;\">The Centre works towards strengthening the national capacity of member States to nurture and promote national innovation systems and to create an enabling environment for the development and transfer of technology. The Centre was established in 1977 in Bangalore, India, and moved to New Delhi in 1993.</span></div><p style=\"text-align: justify;\"><span style=\"font-weight: bolder; font-size: 14px;\">1. Science, Technology, and Innovation</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">APCTT assists member countries in the development and management of sound National Innovation Systems. We provide capacity-building support to foster technology innovation, technology-based entrepreneurship, and competitiveness of Small and Medium-Sized Enterprises.</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder; font-size: 14px;\">2. Technology Transfer</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">APCTT provides capacity-building support to member countries to develop, transfer, commercialize, and adopt new and emerging technologies that have the transformative potential to achieve Sustainable Development Goals.&nbsp;</span><span style=\"font-weight: bolder;\"><br></span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder; font-size: 14px;\">3. Regional Cooperation</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">APCTT works to promote regional cooperation and networking related to Science, Technology, and Innovation policymaking and technology transfer.&nbsp;</span></p><p style=\"text-align: justify;\"><span style=\"font-weight: bolder; font-size: 14px;\">4. Technology Intelligence</span></p><p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">APCTT publishes several knowledge products, including the Asia-Pacific Tech Monitor, to disseminate information on new and emerging issues related to Science, Technology, and Innovation policy, latest technological innovations, market developments, and events.&nbsp;</span></p><div><br></div>','Active');

/*Table structure for table `t_product_images` */

DROP TABLE IF EXISTS `t_product_images`;

CREATE TABLE `t_product_images` (
  `Id` int(11) NOT NULL auto_increment,
  `Image_Name` varchar(200) NOT NULL,
  `Product_Id` int(11) NOT NULL,
  PRIMARY KEY  (`Id`),
  KEY `FK_t_product_images_mappng` (`Product_Id`),
  CONSTRAINT `FK_t_product_images_mappng` FOREIGN KEY (`Product_Id`) REFERENCES `t_products_master` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `t_product_images` */

insert  into `t_product_images`(`Id`,`Image_Name`,`Product_Id`) values (7,'uploads/productImages/comp5/product_large2.png',2),(8,'uploads/productImages/comp5/product_large1.png',2),(9,'uploads/productImages/comp5/product_large1.png',2),(10,'uploads/productImages/comp5/product_large1.png',3),(11,'uploads/productImages/comp5/product_large1.png',3),(12,'uploads/productImages/comp5/product_large1.png',3),(13,'uploads/productImages/comp5/product_large3.png',4),(14,'uploads/productImages/comp5/product_large3.png',4),(15,'uploads/productImages/comp5/product_large3.png',4),(16,'uploads/productImages/comp6/product_large2.png',5),(17,'uploads/productImages/comp6/product_large2.png',6);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `t_products_master` */

insert  into `t_products_master`(`Id`,`Product_Name`,`Category_Id`,`Company_Id`,`Price`,`Model_No`,`Description`,`Last_Updated_Date`,`Status`) values (2,'Baking Machine',1,5,'2000','122333','Power Source	Gas, Electric, Diesel\nCapacity	20Kg - 5000 Kg per Hour\nMachine Body Material	Steel\nDesign Type	Standard\nBaking Capacity	36 trays, 32 trays, Upto 500 Trays, 12 trays, 64 trays, 16 trays\nAutomation Grade	Automatic\nVoltage (V)	220 Volt / 440 Volt\nDisplay Type	PLC\nWarranty	1 year','2021-02-15 09:44:55','Active'),(3,'Ketichen Set',2,5,'2000','122333','Capacity	5 kg - 30 kg per Batch\nMachine Type	Automatic\nMachine Body Material	Metal\nDesign Type	Standard\nBaking Capacity	2 Trays or 4 Trays\nAutomation Grade	Automatic\nCondition	New\nVoltage (V)	220 Volt\nFrequency (Hertz)	50Hz','2021-02-15 10:00:26','Active'),(4,'Planetary Mixer',3,5,'2000','122333','Minimum Order Quantity	1 Set\nCapacity	3 litres - 100 litres\nUsage/Application	For Making Soft Dough\nDesign Type	Standard\nVoltage (volts)	220 Volt/ 440 Volt\nVoltage (V)	220 Volt / 440 Volt\nBowl Capacity (L)	3 Litres to 100 Litres\nCondition	New\nAutomation Grade	Automatic','2021-02-15 10:01:20','Active'),(5,'Dehydrator',1,6,'2000','122333','derbrthtyjbthy6','2021-02-16 11:07:03','Active'),(6,'Dehydrator',2,6,'2000','122333','fergergerg rthtytyh','2021-02-16 11:08:25','Active');

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

insert  into `t_role_master`(`Id`,`Role_Name`,`Status`) values (1,'Admin','Active'),(2,'Local Supplier','Active'),(3,'Global Supplier','Active');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `t_supplier_company` */

insert  into `t_supplier_company`(`Id`,`Supplier_Type_Id`,`User_Id`,`Company_Name`,`Country_Id`,`City`,`Postal_Code`,`License_No`,`License_Img`,`Telephone_No`,`License_Registration_Date`,`Company_Address`,`Company_Description`,`Company_Website`,`Submitted_Date`,`Update_date`,`Updated_By`,`Remarks`,`Status_Id`) values (5,1,10,'Druk Green Kitchen',NULL,NULL,NULL,'123456','../uploads/online.jpg','02333566','2021-02-16','1212212 4r34r34r34','343t34t4t43t4t43','http://bhutansyncits.com','2021-02-15 04:18:01','2021-02-15 09:26:47',1,'approved',2),(6,1,11,'DCSI',NULL,NULL,NULL,'12333','../uploads/banner11.png','02333566','2021-02-01','cfsduvgdvgdfu','dfvdfjgvdfvdfjkv','www.mymusicentertainment.com','2021-02-16 06:03:52','2021-02-16 11:04:58',1,'all docc updte',2);

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

/*Table structure for table `t_technology_request` */

DROP TABLE IF EXISTS `t_technology_request`;

CREATE TABLE `t_technology_request` (
  `Id` int(11) NOT NULL auto_increment,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) default NULL,
  `Contact_No` varchar(200) default NULL,
  `Present_Address` text,
  `Equipment_Name` varchar(255) default NULL,
  `Equipment_Description` text,
  `Submitted_Date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `Response` text,
  `Status` enum('Active','InActive') default 'Active',
  PRIMARY KEY  (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `t_technology_request` */

insert  into `t_technology_request`(`Id`,`Name`,`Email`,`Contact_No`,`Present_Address`,`Equipment_Name`,`Equipment_Description`,`Submitted_Date`,`Response`,`Status`) values (1,'Sonam Dorji','sonam@bhutansyncits.com','17458669','12123224324','baking machine','scsacsv','2021-02-15 23:50:51','dcvsdvsdvsdv','Active'),(2,'Karma','sdorji815@gmail.com','17458669','MOEA','Pulser','regrgbthyhy','2021-02-16 11:09:40',NULL,'Active');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `t_user_master` */

insert  into `t_user_master`(`Id`,`Name`,`Email`,`Password`,`Image`,`Contact_No`,`Designation`,`Role_Id`,`Status`) values (1,'SONAM','admin@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'',NULL,1,'Active'),(4,'name test','email','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'12312312','designation',2,'Active'),(5,'Tshewan','email@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'12312312','Programmer',2,'Active'),(8,'Tshewang Tenzin','wangzin53@gmail.com','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'12312312','designation',3,'Active'),(9,'Tshewang Tenzin','staff@newedge.bt','$2y$10$oVQ6BavZ3QGabxRjyvKxduBq4lJFSQwAR6cPfGzLb9F6CDFP38iay',NULL,'12312312','designation',3,'Active'),(10,'Druk Green Kitchenvdve','druk@gmail.com','$2y$10$eU09nJVSrha/7h60Ah/gye6J7cZDspTE6i7S76jPrF32BloVj7gqq','dcsilogo.png','17458644','General Manger',2,'Active'),(11,'Karma','sonam@bhutansyncits.com','$2y$10$kyOHUPhq8bhAAJlIvAQn9.5fugAI1i.wxtyZrRcnVfGVe3LdoDKzK',NULL,'17458669','CEO',2,'Active');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
