-- MySQL dump 10.16  Distrib 10.2.9-MariaDB, for osx10.12 (x86_64)
--
-- Host: localhost    Database: testing
-- ------------------------------------------------------
-- Server version	10.2.9-MariaDB

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
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `author` (
  `author_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `author`
--

LOCK TABLES `author` WRITE;
/*!40000 ALTER TABLE `author` DISABLE KEYS */;
INSERT INTO `author` VALUES (1,'Frank Herbert','USA'),(2,'Richard Laymon','Canada'),(3,'Carmen Ynez','Canada'),(4,'Stephen King','USA'),(5,'Lee Sheldon','Russia'),(6,'Daniel Chambers','England'),(7,'Sally Unger','Canada'),(8,'John Lescroart','USA'),(9,'Robert Sawyer','Canada'),(10,'Tommy Dougald','Canada'),(16,'Michael Thompson','Mexico'),(17,'Jim Butcher','USA'),(18,'Mark Twain','USA'),(19,'Brent Weeks','USA'),(20,'Isaac Asimov','USA'),(21,'Michael Connelly','USA'),(22,'Enid Blyton','England');
/*!40000 ALTER TABLE `author` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_published` int(11) DEFAULT NULL,
  `num_pages` int(11) DEFAULT NULL,
  `in_print` tinyint(1) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `format_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  FULLTEXT KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'Dune',1975,556,1,5.99,'dune.jpg',1,1,1,1),(2,'Island',2002,345,1,4.99,'island.jpg',2,2,1,2),(3,'A Day in the Life',2012,704,1,22.99,'a_day_in_the_life.jpg',3,3,2,3),(4,'Under the Dome',2010,1200,0,17.99,'under_the_dome.jpg',4,1,3,2),(5,'Carpet Baggers',1977,340,1,3.99,'the_carpet_baggers.jpg',5,4,1,4),(6,'Not a Penny More',1980,300,1,5.99,'not_a_penny_more.jpg',6,5,1,5),(7,'A Mixed Blessing',2002,450,1,12.99,'a_mixed_blessing.jpg',7,6,3,5),(8,'The Oath',2008,500,0,24.99,'the_oath.jpg',8,2,2,6),(9,'Carrie',1975,300,1,4.99,'carrie.jpg',4,1,1,2),(10,'Flash Forward',2006,417,1,19.99,'flash_forward.jpg',9,7,2,1),(11,'The Black Box',2012,345,1,25.99,'black_box.jpg',21,5,2,3),(12,'Caves of Steel',1957,198,1,4.99,'caves_of_steel.jpg',20,5,2,1),(13,'Castle of Adventure',1944,224,1,33.99,'castle_of_adventure.jpg',22,5,2,1),(14,'Dune Messiah',1977,350,1,2.99,'dune_messiah.jpg',1,1,1,1);
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `format`
--

DROP TABLE IF EXISTS `format`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `format` (
  `format_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`format_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `format`
--

LOCK TABLES `format` WRITE;
/*!40000 ALTER TABLE `format` DISABLE KEYS */;
INSERT INTO `format` VALUES (1,'Paper'),(2,'Hardcover'),(3,'Trade Paper');
/*!40000 ALTER TABLE `format` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'SF'),(2,'Horror'),(3,'Literature'),(4,'Drama'),(5,'Politics'),(6,'Legal'),(19,'Cars'),(20,'Electronics');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publisher`
--

DROP TABLE IF EXISTS `publisher`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publisher` (
  `publisher_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`publisher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publisher`
--

LOCK TABLES `publisher` WRITE;
/*!40000 ALTER TABLE `publisher` DISABLE KEYS */;
INSERT INTO `publisher` VALUES (1,'Ballantine Books','New York','775-1234'),(2,'Dell','New York','766-1313'),(3,'Penguin Books','London','445-0987'),(4,'Putnam','New York','234-8876'),(5,'Delacorte','Toronto','555-1212'),(6,'Sun Press','Toronto','664-1234'),(7,'DAW','New York','543-1234');
/*!40000 ALTER TABLE `publisher` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Tom','Jones','tom@hotmail.com',45,'$2y$10$5.MfiJNHNR2O1yNuwz792O5xAJce4/PFoUscgDP.eZkEurdiQPtPm','2018-08-06 16:39:18'),(2,'Tom','Jones','tom@hotmail.com',45,'$2y$10$Ydkst7.PUOOmaN2IEHBnYeF2X/1uso3EZ8I6EgCBICxj3iiKp9jqa','2018-08-06 16:39:59'),(3,'Tom','Jones','tom@hotmail.com',45,'$2y$10$SJzRZ5kmCSZIoOUnP/SviuH6Q2uoYK2p5/afi/YboovnEryoRkZ02','2018-08-06 16:40:12'),(4,'Tom','Jones','tom@hotmail.com',45,'$2y$10$ruyETKoo6ovpIoSZto4NNu9JlHKE.WmFCokJmEOZp7qyA4M921VPG','2018-08-06 16:41:07'),(5,'Tom','Jones','tom@hotmail.com',45,'$2y$10$0HaFFEffRO421VsdXQ5GluZnvSgJs4FF7Cwp/99I6ma57VvkpRNiG','2018-08-06 16:43:36'),(6,'Tom','Jones','tom@hotmail.com',45,'$2y$10$BlSuzh05/UlwyfDP4A6qD.9kNgIOoS9kJ.JIjBlnT5D5mpYzoV8q.','2018-08-06 16:45:06'),(7,'Steve','George','steve@glort.com',58,'$2y$10$qgHUcBCXz2TkFZ8IkHEJG.gcFzgUum3GzMlsVG6VulA0C9FXs83yq','2018-08-06 16:49:36'),(8,'sadfsadf','sadsdaf','george@dorkwin.com',33,'$2y$10$MfQcvbM0Pha2QTmnT9ozJOU2xO9EW7zLfvKDACRVVNmxF2K5Xo.Aa','2018-08-09 14:27:56');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-09 21:26:30
