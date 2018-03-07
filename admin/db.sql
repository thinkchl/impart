-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: rrgdkj
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `t_components_company`
--

DROP TABLE IF EXISTS `t_components_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_components_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addr` varchar(255) DEFAULT NULL,
  `disabled` tinyint(1) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_components_company`
--

LOCK TABLES `t_components_company` WRITE;
/*!40000 ALTER TABLE `t_components_company` DISABLE KEYS */;
INSERT INTO `t_components_company` VALUES (1,'江苏淮安',0,'314842311@qq.com','Gk52nCWmGPUw8EHb1x5i.gif;Unz0cHq5zycpujvEXO4j.gif','江苏冉冉光电科技有限公司','13291285280'),(2,'江苏南京',0,'support@chaoyun.com','3WydQx8jGVF7LuHLRpv4.gif','江苏超云科技有限公司','13357821040'),(3,'江苏南京',0,'admin@dingyantec.com','PSkT6kD7Q9DCQ9Kp7A6M.gif','南京鼎岩信息科技有限公司','025-84967299'),(4,'江苏南京',0,'huayuan@huayuan.com','rNA5dT64X5HgMlf4lY9v.gif','南京华源云科技有限公司','18854789032'),(5,'江苏镇江',0,'support@xinyu.com','dgPftlNbknMlwPKhXfnt.png','星雨广电','1893489788'),(6,'江苏南京',0,'sopping@fanlin.com','LqYmBmQWy39suWmb4R1z.gif','南京泛霖科技有限公司','025-84965782');
/*!40000 ALTER TABLE `t_components_company` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-21  5:22:30
