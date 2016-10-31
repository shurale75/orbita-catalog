CREATE DATABASE  IF NOT EXISTS `orbita-catalog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `orbita-catalog`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 192.168.56.101    Database: orbita-catalog
-- ------------------------------------------------------
-- Server version	5.6.33-0ubuntu0.14.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (4,'Category1','tagcat11, tagcat12, tagcat13'),(5,'Category2','tagcat21, tagcat22, tagcat23'),(6,'Category3','tagcat31, tagcat32, tagcat33');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration_versions`
--

LOCK TABLES `migration_versions` WRITE;
/*!40000 ALTER TABLE `migration_versions` DISABLE KEYS */;
INSERT INTO `migration_versions` VALUES ('20161026103810');
/*!40000 ALTER TABLE `migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `new_view`
--

DROP TABLE IF EXISTS `new_view`;
/*!50001 DROP VIEW IF EXISTS `new_view`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `new_view` AS SELECT 
 1 AS `id`,
 1 AS `cat_id`,
 1 AS `uid`,
 1 AS `title`,
 1 AS `description`,
 1 AS `image`,
 1 AS `vip`,
 1 AS `link`,
 1 AS `status`,
 1 AS `created`,
 1 AS `updated`,
 1 AS `lang`,
 1 AS `grade`,
 1 AS `key_words`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `sites`
--

DROP TABLE IF EXISTS `sites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `vip` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `lang` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `key_words` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BC00AA63E6ADA943` (`cat_id`),
  KEY `IDX_BC00AA63539B0606` (`uid`),
  CONSTRAINT `FK_BC00AA63539B0606` FOREIGN KEY (`uid`) REFERENCES `users` (`id`),
  CONSTRAINT `FK_BC00AA63E6ADA943` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sites`
--

LOCK TABLES `sites` WRITE;
/*!40000 ALTER TABLE `sites` DISABLE KEYS */;
INSERT INTO `sites` VALUES (1,4,1,'Site1','Description Description Description Description 1 1 1','beach.jpg',1,'http://www.site1.com',1,'2016-08-22 07:36:13','2016-08-22 07:36:13','rus',1,'SiteKeyword1 SiteKeyword1 SiteKeyword1'),(2,4,1,'Site2','Description Description Description Description 2 2 2','misdirection.jpg',0,'http://www.site2.com',1,'2016-08-22 07:36:13','2016-08-22 07:36:13','rus',1,'SiteKeyword2 SiteKeyword2 SiteKeyword2'),(3,5,2,'Site3','Description Description Description Description 3 3 3','one_or_zero.jpg',0,'http://www.site3.com',1,'2016-09-23 07:36:13','2016-08-22 07:36:13','rus',1,'SiteKeyword3 SiteKeyword3 SiteKeyword3'),(4,6,3,'Site4','Description Description Description Description 4 4 4','pool_leak.jpg',0,'http://www.site4.com',1,'2016-09-22 07:36:13','2016-08-22 07:36:13','rus',1,'SiteKeyword4 SiteKeyword4 SiteKeyword4'),(5,5,2,'Site5','Description Description Description Description 5 5 5','the_grid.jpg',1,'http://www.site5.com',1,'2016-08-22 07:36:13','2016-08-22 07:36:13','rus',1,'SiteKeyword5 SiteKeyword5 SiteKeyword5'),(6,4,1,'asd','asd','asd.sad',0,'gfhdf',0,'2016-10-24 12:54:00','2016-10-24 12:54:00','uio',0,'vcj'),(7,4,1,'asd','asd','asd.sad',0,'gfhdf',0,'2016-10-24 12:54:00','2016-10-24 12:54:00','uio',0,'vcj'),(8,5,1,'zzzz','zzzzz','beach.jpg',0,'sss',0,'2016-10-25 03:22:00','2016-10-25 03:22:00','ddd',0,'dddd'),(9,5,1,'asaaa','aaaaa','beach.jpg',1,'ddddd',0,'2016-10-25 03:32:00','2016-10-25 03:32:00','ddd',0,'aassss'),(13,4,3,'New Site','new new new new','beach.jpg',0,'www.new.site',0,'2016-10-25 06:05:00','2016-10-25 06:05:00','rus',1,'new site'),(14,6,2,'New Site111','new site 111 111 new new','beach.jpg',0,'www.newsite1.com',0,'2016-10-26 10:39:58',NULL,'rus',NULL,'new site');
/*!40000 ALTER TABLE `sites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'User1','user1@mail.com'),(2,'User2','user2@mail.com'),(3,'User3','user3@mail.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `new_view`
--

/*!50001 DROP VIEW IF EXISTS `new_view`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`homestead`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `new_view` AS (select `sites`.`id` AS `id`,`sites`.`cat_id` AS `cat_id`,`sites`.`uid` AS `uid`,`sites`.`title` AS `title`,`sites`.`description` AS `description`,`sites`.`image` AS `image`,`sites`.`vip` AS `vip`,`sites`.`link` AS `link`,`sites`.`status` AS `status`,`sites`.`created` AS `created`,`sites`.`updated` AS `updated`,`sites`.`lang` AS `lang`,`sites`.`grade` AS `grade`,`sites`.`key_words` AS `key_words` from `sites` where (`sites`.`vip` = 1) limit 5) union all (select `sites`.`id` AS `id`,`sites`.`cat_id` AS `cat_id`,`sites`.`uid` AS `uid`,`sites`.`title` AS `title`,`sites`.`description` AS `description`,`sites`.`image` AS `image`,`sites`.`vip` AS `vip`,`sites`.`link` AS `link`,`sites`.`status` AS `status`,`sites`.`created` AS `created`,`sites`.`updated` AS `updated`,`sites`.`lang` AS `lang`,`sites`.`grade` AS `grade`,`sites`.`key_words` AS `key_words` from `sites` order by `sites`.`created` desc limit 5) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-31 13:51:24
