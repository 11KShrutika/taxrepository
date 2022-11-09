-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: abc
-- ------------------------------------------------------
-- Server version	5.7.7-rc-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_bill_details`
--

DROP TABLE IF EXISTS `tbl_bill_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_bill_details` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `compid` int(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `net_amt` int(100) NOT NULL,
  `paid_amt` int(200) NOT NULL,
  `rem_amt` int(200) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `col_1` varchar(200) NOT NULL,
  `col_2` varchar(200) NOT NULL,
  `col_3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bill_details`
--

LOCK TABLES `tbl_bill_details` WRITE;
/*!40000 ALTER TABLE `tbl_bill_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_bill_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_company`
--

DROP TABLE IF EXISTS `tbl_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_company` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `regi_id` varchar(200) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `company` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `gstno` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `col_1` varchar(200) NOT NULL,
  `col_2` varchar(200) NOT NULL,
  `col_3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_company`
--

LOCK TABLES `tbl_company` WRITE;
/*!40000 ALTER TABLE `tbl_company` DISABLE KEYS */;
INSERT INTO `tbl_company` VALUES (1,'1','0','w','w','w','w','w','w','w','w','0000-00-00','0000-00-00',0,'','','');
/*!40000 ALTER TABLE `tbl_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_items`
--

DROP TABLE IF EXISTS `tbl_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_items` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `bill_id` varchar(200) NOT NULL,
  `particaluar` varchar(500) NOT NULL,
  `amt` int(100) NOT NULL,
  `cgst` int(100) NOT NULL,
  `igst` int(100) NOT NULL,
  `sgst` int(100) NOT NULL,
  `cgsta` int(100) NOT NULL,
  `igsta` int(100) NOT NULL,
  `sgsta` int(100) NOT NULL,
  `net_amt` int(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `col_1` varchar(200) NOT NULL,
  `col_2` varchar(200) NOT NULL,
  `col_3` varchar(200) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_items`
--

LOCK TABLES `tbl_items` WRITE;
/*!40000 ALTER TABLE `tbl_items` DISABLE KEYS */;
INSERT INTO `tbl_items` VALUES (12,'','tyu',12,1,3,1,0,0,0,2,'0000-00-00','0000-00-00','','','',0),(13,'','tyu',12,1,3,1,0,0,0,2,'0000-00-00','0000-00-00','','','',0);
/*!40000 ALTER TABLE `tbl_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_login` (
  `id` int(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `delete_at` tinyint(1) NOT NULL DEFAULT '0',
  `col_1` varchar(200) NOT NULL,
  `col_2` varchar(200) NOT NULL,
  `col_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_login`
--

LOCK TABLES `tbl_login` WRITE;
/*!40000 ALTER TABLE `tbl_login` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_recipt`
--

DROP TABLE IF EXISTS `tbl_recipt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_recipt` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(200) NOT NULL,
  `rec_id` varchar(200) NOT NULL,
  `billid` int(200) NOT NULL,
  `rec_date` varchar(500) NOT NULL,
  `netamt` varchar(500) NOT NULL,
  `paymode` varchar(500) NOT NULL,
  `bankname` varchar(500) NOT NULL,
  `checkdd` varchar(500) NOT NULL,
  `checkdate` varchar(500) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `col_1` varchar(200) NOT NULL,
  `col_2` varchar(200) NOT NULL,
  `col_3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_recipt`
--

LOCK TABLES `tbl_recipt` WRITE;
/*!40000 ALTER TABLE `tbl_recipt` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_recipt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `mob_no` int(200) NOT NULL,
  `isdelete` tinyint(1) NOT NULL DEFAULT '0',
  `col_1` varchar(200) NOT NULL,
  `col_2` varchar(200) NOT NULL,
  `col_3` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'abc'
--

--
-- Dumping routines for database 'abc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-09 13:27:14
