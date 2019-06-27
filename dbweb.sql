CREATE DATABASE  IF NOT EXISTS `tripmate_cloud` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tripmate_cloud`;
-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: db_web
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `hotel`
--

DROP TABLE IF EXISTS `hotel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel` (
  `idhotel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id unik hotel',
  `nm_htl` varchar(100) DEFAULT NULL COMMENT '''nama hotel''',
  `desc` varchar(100) DEFAULT NULL,
  `photo_dir` varchar(100) DEFAULT NULL COMMENT '''lokasi foto home hotel''',
  `counter` int(5) DEFAULT '0' COMMENT 'Akreditas, count seberapa banyak yang booking',
  PRIMARY KEY (`idhotel`),
  UNIQUE KEY `idhotel_UNIQUE` (`idhotel`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel`
--

LOCK TABLES `hotel` WRITE;
/*!40000 ALTER TABLE `hotel` DISABLE KEYS */;
INSERT INTO `hotel` VALUES (9,'Hotel Mahkamah','Jakarta - Jakarta Selatan','img/collectionRoom/col-1.jpg',0),(14,'Hotel Mansyur','Jakarta - Jakarta Selatan','img/collectionRoom/col-2.jpg',0),(15,'Hotel Pesona Indah','Jakarta - Jakarta Timur','img/collectionRoom/col-3.jpg',0),(17,'Hotel Kamangsur','Jakarta - Jakarta Timur','img/collectionRoom/col-5.jpg',0),(18,'Hotel Denjaka','Bandung - Jasinga','img/collectionRoom/col-6.jpg',0),(19,'Hotel Melawai','Bandung - Cisueg','img/collectionRoom/col-7.jpg',0),(20,'Hotel Kamikamika','Sulawesi - Cibituntung','img/collectionRoom/col-8.jpg',0),(21,'Hotel Samitra Indah ','Tangerang - Ciueuit','img/collectionRoom/col-9.jpg',0),(22,'Hotel Kamisahrikan','Bandung - Asia Afrika','img/collectionRoom/col-10.jpg',0),(23,'asdhuhi','asdasd',' 	img/collectionRoom/col-4.jpg',0);
/*!40000 ALTER TABLE `hotel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_desc_photo`
--

DROP TABLE IF EXISTS `hotel_desc_photo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_desc_photo` (
  `id_ket_foto` int(11) NOT NULL AUTO_INCREMENT,
  `idhotel` int(11) DEFAULT NULL,
  `photo_dir` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_ket_foto`),
  KEY `idhotel_idx` (`idhotel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_desc_photo`
--

LOCK TABLES `hotel_desc_photo` WRITE;
/*!40000 ALTER TABLE `hotel_desc_photo` DISABLE KEYS */;
/*!40000 ALTER TABLE `hotel_desc_photo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_order`
--

DROP TABLE IF EXISTS `hotel_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_order` (
  `idhotel_order` int(11) NOT NULL AUTO_INCREMENT,
  `idhotel` int(11) DEFAULT NULL,
  `startdate` varchar(15) DEFAULT NULL,
  `enddate` varchar(15) DEFAULT NULL,
  `isaccept` tinyint(4) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `guest` varchar(5) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  PRIMARY KEY (`idhotel_order`),
  UNIQUE KEY `idhotel_order_UNIQUE` (`idhotel_order`),
  KEY `idhotel_idx` (`idhotel`),
  CONSTRAINT `idhotel` FOREIGN KEY (`idhotel`) REFERENCES `hotel` (`idhotel`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_order`
--

LOCK TABLES `hotel_order` WRITE;
/*!40000 ALTER TABLE `hotel_order` DISABLE KEYS */;
INSERT INTO `hotel_order` VALUES (23,14,'29-Jun-2018','12-Jul-2018',1,'081672','al@gmail.com','4','2018-06-27 21:24:54'),(24,22,'2-Jun-2018','1-Jul-2018',0,'081586269554','reynaldirizki43@gmail.com','5','2018-06-27 21:25:04'),(25,19,'2-Jun-2018','28-Jun-2018',1,'081586269554','Santai@gmail.com','1','2018-06-27 21:25:21'),(26,9,'2-Jun-2018','28-Jun-2018',1,'08399','reynaldirizki43@gmail.com','5','2018-06-27 21:25:15'),(27,14,'27-Jun-2018','24-Jun-2018',0,'08399','reynaldirizki43@gmail.com','1','2018-06-27 21:26:59'),(28,21,'27-Jun-2018','28-Jun-2018',1,'081672','aldi@gmail.com','3','2018-06-27 23:11:07'),(29,18,'29-Jun-2018','30-Jun-2018',0,'098238787872','reynaldirizki@gmail.com','1','2018-06-28 00:11:59');
/*!40000 ALTER TABLE `hotel_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uas`
--

DROP TABLE IF EXISTS `uas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uas` (
  `idUAS` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` varchar(45) DEFAULT NULL,
  `sekolah` varchar(45) DEFAULT NULL,
  `no_kom` int(11) DEFAULT NULL,
  `kerusakan` varchar(45) DEFAULT NULL,
  `other` varchar(45) DEFAULT NULL,
  `pelapor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUAS`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uas`
--

LOCK TABLES `uas` WRITE;
/*!40000 ALTER TABLE `uas` DISABLE KEYS */;
INSERT INTO `uas` VALUES (1,'27 Juni 2019','smk 18',18,'cpu mati','bodi rusak','rizki'),(2,'y7y3','ijhi',8,'kji','8u',''),(3,'28 Juni 2019','smk 19',19,'Kerusakan Parah','Other',''),(4,'90 juni','sekolah 90',90,'rusak','iotger','pelapor'),(5,'18 juni','sekolah 80',80,'rusak ajah','other ','pelapor');
/*!40000 ALTER TABLE `uas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `web_dua`
--

DROP TABLE IF EXISTS `web_dua`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `web_dua` (
  `idweb_dua` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(3) DEFAULT NULL,
  `nama` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idweb_dua`),
  UNIQUE KEY `idweb_dua_UNIQUE` (`idweb_dua`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `web_dua`
--

LOCK TABLES `web_dua` WRITE;
/*!40000 ALTER TABLE `web_dua` DISABLE KEYS */;
INSERT INTO `web_dua` VALUES (2,102,'kiki'),(3,103,'glen'),(4,104,'lili'),(5,101,'aldy');
/*!40000 ALTER TABLE `web_dua` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_web'
--

--
-- Dumping routines for database 'db_web'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-17  1:56:10
