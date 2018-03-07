-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: project
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
-- Table structure for table `t_action`
--

DROP TABLE IF EXISTS `t_action`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `img` varchar(40) DEFAULT NULL,
  `content` blob,
  `createdate` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `action_fk_user` (`uid`),
  CONSTRAINT `action_fk_user` FOREIGN KEY (`uid`) REFERENCES `t_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_action`
--

LOCK TABLES `t_action` WRITE;
/*!40000 ALTER TABLE `t_action` DISABLE KEYS */;
INSERT INTO `t_action` VALUES (1,'中关村创业者瞄准痛点抢先机','uploads/gXsFEcljgA0J9ynX14Sb.png','中国第一个国家级高薪技术产业开发区、第一个国家自主创新示范区、第一个国家级人才特区，被誉为“中国的硅谷”的中关村经过多年高速发展，吸引并孕育出一大批拥有自主知识产权的新技术','2017-07-24',1),(2,'民革中央建言：搭建青年创业就业服务平台','uploads/QBs9kTERELOWTTnPf6He.png','从北京中关村地铁口出来再走十分钟，远远就能看到“中关村创业大街”的牌匾，每天，无数怀揣创业梦想的青年汇聚于此，在全面建成小康社会决胜街','2017-07-24',1),(3,'经济参考报：法国创新企业为何青睐中国','uploads/p8jHV9BDB7oyJBPjqJY6.gif','法国和中国的合作近年来已经不再传统领域，开始保持技术创新领域方面的机会，而在创新合作方面，除了活跃着阿尔斯通、法国电力、不少中小企业同样','2017-07-24',1);
/*!40000 ALTER TABLE `t_action` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_company`
--

DROP TABLE IF EXISTS `t_company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `img` varchar(40) DEFAULT NULL,
  `content` blob,
  `createdate` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_fk_user` (`uid`),
  CONSTRAINT `company_fk_user` FOREIGN KEY (`uid`) REFERENCES `t_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_company`
--

LOCK TABLES `t_company` WRITE;
/*!40000 ALTER TABLE `t_company` DISABLE KEYS */;
INSERT INTO `t_company` VALUES (2,'创业邦','uploads/R4fxZ7Nmra2y7z33Yy67.jpg','最强创业者，离资本最近','2017-07-24',1),(3,'拓荒族','uploads/0hgWIdfhu3mWqBtXvyS2.gif','集办公、营销、孵化功能三位一体的企业发展生态圈','2017-07-24',1),(4,'洋葱投','uploads/0BRV7wbCsMezcxndA2mb.gif','洋葱投致力于创业者打造一个全方位、宽领域、多元化的创投服务平台','2017-07-24',1),(5,'可可豆创新孵化平台','uploads/0VJmYekgV7D8uheCNdca.gif','可可豆创新孵化平台隶属于洛可可创新设计集团','2017-07-24',1),(6,'中科金','uploads/YLdk1TPNFP1zROrRmil6.jpg','为科技企业提供多元化、多层次、全方位的金融服务','2017-07-24',1),(7,'硬派空间','uploads/2PcocPZJHNAKIvaxtOIB.jpg','硬派空间位于中关村创业大街，由创业大街运营管理公司置科创创办','2017-07-24',1),(8,'车库咖啡','uploads/oksg4zQ47pZTtfWDFSxm.gif','成立于2011年4月，是中关村创业大街上最早的一批创业主题咖啡厅之一','2017-07-24',1),(9,'3W咖啡','uploads/hY0k0C2JtjLZK3CbvjMs.gif','互联网主题官，旗下包含3W咖啡官、3W创新传媒、3W孵化器、3W基金、拉钩招聘','2017-07-24',1),(10,'Binqqo咖啡','uploads/YVN33bkAH7DPiF3hcPEB.gif','一家以咖啡和空间为载体，利用群智，跨届创新的创新型孵化器','2017-07-24',1),(11,'创业邦','uploads/R4fxZ7Nmra2y7z33Yy67.jpg','最强创业者，离资本最近','2017-07-24',2),(12,'拓荒族','uploads/0hgWIdfhu3mWqBtXvyS2.gif','集办公、营销、孵化功能三位一体的企业发展生态圈','2017-07-24',2),(13,'洋葱投','uploads/0BRV7wbCsMezcxndA2mb.gif','洋葱投致力于创业者打造一个全方位、宽领域、多元化的创投服务平台','2017-07-24',2),(14,'可可豆创新孵化平台','uploads/0VJmYekgV7D8uheCNdca.gif','可可豆创新孵化平台隶属于洛可可创新设计集团','2017-07-24',2),(15,'中科金','uploads/YLdk1TPNFP1zROrRmil6.jpg','为科技企业提供多元化、多层次、全方位的金融服务','2017-07-24',2),(16,'硬派空间','uploads/2PcocPZJHNAKIvaxtOIB.jpg','硬派空间位于中关村创业大街，由创业大街运营管理公司置科创创办','2017-07-24',2),(17,'车库咖啡','uploads/oksg4zQ47pZTtfWDFSxm.gif','成立于2011年4月，是中关村创业大街上最早的一批创业主题咖啡厅之一','2017-07-24',2),(18,'3W咖啡','uploads/hY0k0C2JtjLZK3CbvjMs.gif','互联网主题官，旗下包含3W咖啡官、3W创新传媒、3W孵化器、3W基金、拉钩招聘','2017-07-24',2),(19,'Binqqo咖啡','uploads/YVN33bkAH7DPiF3hcPEB.gif','一家以咖啡和空间为载体，利用群智，跨届创新的创新型孵化器','2017-07-24',2),(20,'创业邦','uploads/R4fxZ7Nmra2y7z33Yy67.jpg','最强创业者，离资本最近','2017-07-24',2),(21,'拓荒族','uploads/0hgWIdfhu3mWqBtXvyS2.gif','集办公、营销、孵化功能三位一体的企业发展生态圈','2017-07-24',2),(22,'洋葱投','uploads/0BRV7wbCsMezcxndA2mb.gif','洋葱投致力于创业者打造一个全方位、宽领域、多元化的创投服务平台','2017-07-24',2),(23,'可可豆创新孵化平台','uploads/0VJmYekgV7D8uheCNdca.gif','可可豆创新孵化平台隶属于洛可可创新设计集团','2017-07-24',2),(24,'中科金','uploads/YLdk1TPNFP1zROrRmil6.jpg','为科技企业提供多元化、多层次、全方位的金融服务','2017-07-24',2),(25,'硬派空间','uploads/2PcocPZJHNAKIvaxtOIB.jpg','硬派空间位于中关村创业大街，由创业大街运营管理公司置科创创办','2017-07-24',2),(26,'车库咖啡','uploads/oksg4zQ47pZTtfWDFSxm.gif','成立于2011年4月，是中关村创业大街上最早的一批创业主题咖啡厅之一','2017-07-24',2),(27,'3W咖啡','uploads/hY0k0C2JtjLZK3CbvjMs.gif','互联网主题官，旗下包含3W咖啡官、3W创新传媒、3W孵化器、3W基金、拉钩招聘','2017-07-24',2),(28,'Binqqo咖啡','uploads/YVN33bkAH7DPiF3hcPEB.gif','一家以咖啡和空间为载体，利用群智，跨届创新的创新型孵化器','2017-07-24',2),(29,'创业邦','uploads/R4fxZ7Nmra2y7z33Yy67.jpg','最强创业者，离资本最近','2017-07-24',2),(30,'拓荒族','uploads/0hgWIdfhu3mWqBtXvyS2.gif','集办公、营销、孵化功能三位一体的企业发展生态圈','2017-07-24',2),(31,'洋葱投','uploads/0BRV7wbCsMezcxndA2mb.gif','洋葱投致力于创业者打造一个全方位、宽领域、多元化的创投服务平台','2017-07-24',2),(32,'可可豆创新孵化平台','uploads/0VJmYekgV7D8uheCNdca.gif','可可豆创新孵化平台隶属于洛可可创新设计集团','2017-07-24',2),(33,'中科金','uploads/YLdk1TPNFP1zROrRmil6.jpg','为科技企业提供多元化、多层次、全方位的金融服务','2017-07-24',2),(34,'硬派空间','uploads/2PcocPZJHNAKIvaxtOIB.jpg','硬派空间位于中关村创业大街，由创业大街运营管理公司置科创创办','2017-07-24',2),(35,'车库咖啡','uploads/oksg4zQ47pZTtfWDFSxm.gif','成立于2011年4月，是中关村创业大街上最早的一批创业主题咖啡厅之一','2017-07-24',2),(36,'3W咖啡','uploads/hY0k0C2JtjLZK3CbvjMs.gif','互联网主题官，旗下包含3W咖啡官、3W创新传媒、3W孵化器、3W基金、拉钩招聘','2017-07-24',2),(37,'Binqqo咖啡','uploads/YVN33bkAH7DPiF3hcPEB.gif','一家以咖啡和空间为载体，利用群智，跨届创新的创新型孵化器','2017-07-24',2);
/*!40000 ALTER TABLE `t_company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_news`
--

DROP TABLE IF EXISTS `t_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL,
  `img` varchar(40) DEFAULT NULL,
  `content` blob,
  `createdate` date DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_fk_user` (`uid`),
  CONSTRAINT `news_fk_user` FOREIGN KEY (`uid`) REFERENCES `t_user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_news`
--

LOCK TABLES `t_news` WRITE;
/*!40000 ALTER TABLE `t_news` DISABLE KEYS */;
INSERT INTO `t_news` VALUES (1,'法国创新型企业在华“加速”','uploads/ufgUm0Rnr19cc6uuSdna.jpg','3月7日下午，北京中关村创业大街汇集了来自法国的5家数字领域的创新企业代表，这标志着由法国的领军潜力，将面向未来、前途无限','2017-07-24',1),(2,'中关村创业者瞄准痛点抢先机','uploads/pbyvyTSRV0xdBjFfupp9.jpg','中国第一个国家级高薪技术产业开发区、第一个国家自主创新示范区、第一个国家级人才特区，被誉为“中国的硅谷”的中关村经过多年高速发展，吸引并孕育出一大批拥有自主知识产权的新技术','2017-07-24',1),(3,'民革中央建言：搭建青年创业就业服务平台','uploads/6GHDNN94Q0NT5FVgSff3.jpg','从北京中关村地铁口出来再走十分钟，远远就能看到“中关村创业大街”的牌匾，每天，无数怀揣创业梦想的青年汇聚于此，在全面建成小康社会决胜街 ','2017-07-24',1),(4,'经济参考报：法国创新企业为何青睐中国 ','uploads/y4UNt93I1ZcHl9V6NQgF.jpg','法国和中国的合作近年来已经不再传统领域，开始保持技术创新领域方面的机会，而在创新合作方面，除了活跃着阿尔斯通、法国电力、不少中小企业同样','2017-07-24',1),(31,'这是一天','uploads/6h9qVf6DlKFiBas7rqsG.jpg','这是一天这是一天这是一天这是一天这是一天','2017-07-25',3);
/*!40000 ALTER TABLE `t_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_user`
--

LOCK TABLES `t_user` WRITE;
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` VALUES (1,'Think','think','314842311@qq.com'),(2,'candy','candy','314842311@qq.com'),(3,'allen','allen','314842311@qq.com'),(4,'kevin','kevin','314842311@qq.com'),(5,'gyx','123','970843727@qq.com');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-25  8:50:48
