-- MySQL dump 10.15  Distrib 10.0.23-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: alioolio
-- ------------------------------------------------------
-- Server version	10.0.23-MariaDB-1~trusty-log

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_delidatecode`
--

DROP TABLE IF EXISTS `tb_delidatecode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_delidatecode` (
  `IDX` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `DELIDATE` varchar(45) DEFAULT NULL COMMENT '배송일',
  PRIMARY KEY (`IDX`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_delidatecode`
--

LOCK TABLES `tb_delidatecode` WRITE;
/*!40000 ALTER TABLE `tb_delidatecode` DISABLE KEYS */;
INSERT INTO `tb_delidatecode` VALUES (1,'1주일이내'),(2,'7일~14일'),(3,'15일~21일'),(4,'22일~28일'),(5,'29일~35일'),(6,'35일초과');
/*!40000 ALTER TABLE `tb_delidatecode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_evaluation`
--

DROP TABLE IF EXISTS `tb_evaluation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_evaluation` (
  `PCODE` varchar(50) NOT NULL,
  `QUALITY` decimal(2,1) unsigned NOT NULL DEFAULT '0.0' COMMENT '품질점수',
  `SELLER_QUALITY` decimal(2,1) unsigned NOT NULL DEFAULT '0.0',
  `DELI_POINT` decimal(2,1) unsigned NOT NULL DEFAULT '0.0',
  `POINT` decimal(2,1) unsigned NOT NULL DEFAULT '0.0',
  KEY `FK_tb_evaluation_tb_products` (`PCODE`),
  CONSTRAINT `FK_tb_evaluation_tb_products` FOREIGN KEY (`PCODE`) REFERENCES `tb_products` (`PCODE`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_evaluation`
--

LOCK TABLES `tb_evaluation` WRITE;
/*!40000 ALTER TABLE `tb_evaluation` DISABLE KEYS */;
INSERT INTO `tb_evaluation` VALUES ('32418714928',0.0,0.0,0.0,0.0);
/*!40000 ALTER TABLE `tb_evaluation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_hash`
--

DROP TABLE IF EXISTS `tb_hash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_hash` (
  `IDX` int(11) unsigned NOT NULL,
  `TAG` varchar(255) NOT NULL COMMENT '해시태그',
  `CNT` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '해시태그가 사용 된 갯수',
  PRIMARY KEY (`IDX`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_hash`
--

LOCK TABLES `tb_hash` WRITE;
/*!40000 ALTER TABLE `tb_hash` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_hash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_migrations`
--

DROP TABLE IF EXISTS `tb_migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_migrations`
--

LOCK TABLES `tb_migrations` WRITE;
/*!40000 ALTER TABLE `tb_migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_post`
--

DROP TABLE IF EXISTS `tb_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_post` (
  `IDX` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `PCODE` varchar(50) DEFAULT NULL COMMENT '상품코드',
  `REVIEW` text COMMENT '상품리뷰',
  `HCODE` text COMMENT 'Hash Tag code',
  `WRITER` varchar(50) DEFAULT NULL COMMENT '작성자',
  `REGDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '작성일',
  PRIMARY KEY (`IDX`),
  KEY `FK_tb_post_tb_products` (`PCODE`),
  KEY `FK_tb_post_tb_user_info` (`WRITER`),
  CONSTRAINT `FK_tb_post_tb_products` FOREIGN KEY (`PCODE`) REFERENCES `tb_products` (`PCODE`) ON UPDATE CASCADE,
  CONSTRAINT `FK_tb_post_tb_user_info` FOREIGN KEY (`WRITER`) REFERENCES `tb_user_info` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_post`
--

LOCK TABLES `tb_post` WRITE;
/*!40000 ALTER TABLE `tb_post` DISABLE KEYS */;
INSERT INTO `tb_post` VALUES (2,'32418714928',NULL,NULL,'aaa','2015-09-16 04:46:58');
/*!40000 ALTER TABLE `tb_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_products`
--

DROP TABLE IF EXISTS `tb_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_products` (
  `PCODE` varchar(50) NOT NULL,
  `PNAME` varchar(255) NOT NULL,
  PRIMARY KEY (`PCODE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_products`
--

LOCK TABLES `tb_products` WRITE;
/*!40000 ALTER TABLE `tb_products` DISABLE KEYS */;
INSERT INTO `tb_products` VALUES ('32417072587','Korea UC40 Plus Projector Mini Pico portable projector Beamer AV A/V USB & SD HDMI eco-oriented Projector Multi Language Free'),('32418714928','Arrival Xiaomi Air Purifier small as an A4 Papercapacity of 406 m 3h Smartphone Remote Control And Alerts Air Purifiers'),('32419830953','Original 10.6\" Chuwi vi10 Pro dual OS tablet pc Windows8.1& Android4.4 2GB RAM 32GB/64GB ROM Intel Z3736F Quad Core HDMI OTG'),('32420438290','Xiaomi Smart HD CCTV Camera Xiaomi Small Ants Standard and Night Vision Edition Mini Smart Webcam Camcorder for Smart Home Life'),('32468589498','NEW Teclast X98 Plus 9.7\"Air retina Screen Intel Cherry Trail T3 Z8300 Window10 Tablet PC 2048x1536 4GB RAM 64GB eMMC WiFi HDMI'),('32497046831','GPD XD 5 Inch Android4.4 Gamepad Tablet PC 2GB/32GB RK3288 android game player Handled Game Console H-IPS 1280*768 Game Player'),('32522017471','Original 8.0 inch IPS Onda V820w CH Windows 10 IntelZ8300 Quad core 64bit 2GB/32GB Windows10 Tablet PC WIN10 HDMI OTG 1280*800'),('32551868407','NEW Original Xiaomi Mi Pad 2 Prime MiPad todos Metal corpo 7.9 polegada 2048 X 1536 Intel Atom X5 Z8500 16GB ROM 8MP Tablet PC');
/*!40000 ALTER TABLE `tb_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rel_post_hash`
--

DROP TABLE IF EXISTS `tb_rel_post_hash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_rel_post_hash` (
  `PCODE` int(10) unsigned NOT NULL,
  `HCODE` int(10) unsigned NOT NULL,
  UNIQUE KEY `index1` (`PCODE`,`HCODE`),
  KEY `for_hash_rel_idx` (`HCODE`),
  CONSTRAINT `for_hash_rel` FOREIGN KEY (`HCODE`) REFERENCES `tb_hash` (`IDX`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `for_post_rel` FOREIGN KEY (`PCODE`) REFERENCES `tb_post` (`IDX`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rel_post_hash`
--

LOCK TABLES `tb_rel_post_hash` WRITE;
/*!40000 ALTER TABLE `tb_rel_post_hash` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_rel_post_hash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user_info`
--

DROP TABLE IF EXISTS `tb_user_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user_info` (
  `ID` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user_info`
--

LOCK TABLES `tb_user_info` WRITE;
/*!40000 ALTER TABLE `tb_user_info` DISABLE KEYS */;
INSERT INTO `tb_user_info` VALUES ('aaa');
/*!40000 ALTER TABLE `tb_user_info` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-04 13:07:15
