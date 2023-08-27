-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: medical
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `doctorname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Mohamed Sameh Mohamed Farid','mohamedsameh162000@gmail.com','123','122','Male','Choose your Doctor','0112444973122222222','pending','user'),(12,'Mariam Amr','mariamamr778@gmail.com','aaaaaa','11','female','ahmed','12','1\r\n','user'),(18,'Mohamed aly','mohamedaly@yahoo.com','1234567','23','','','0100001283','','doctor\r\n'),(20,'Aly mohamed','aly@yahoo.com','12345678','','','','','','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'6 ways to heal trauma without medication _ Bessel van der Kolk _ Big Think.mp4','videos/6 ways to heal trauma without medication _ Bessel van der Kolk _ Big Think.mp4'),(2,'10 Signs of Hidden Anxiety.mp4','videos/10 Signs of Hidden Anxiety.mp4'),(3,'10 Things Depression Makes Us Do.mp4','videos/10 Things Depression Makes Us Do.mp4'),(4,'Calm your anxiety with three natural and affordable remedies.mp4','videos/Calm your anxiety with three natural and affordable remedies.mp4'),(5,'DEPRESSION __ الاكتئاب - أعراضه وعلاجه.mp4','videos/DEPRESSION __ الاكتئاب - أعراضه وعلاجه.mp4'),(6,'How Facing Your Fears Can Help You Conquer Them.mp4','videos/How Facing Your Fears Can Help You Conquer Them.mp4'),(7,'How to FIX DEPRESSION on your own.mp4','videos/How to FIX DEPRESSION on your own.mp4'),(8,'How To Know If You Have Anxiety.mp4','videos/How To Know If You Have Anxiety.mp4'),(9,'What is depression_ - Helen M. Farrell.mp4','videos/What is depression_ - Helen M. Farrell.mp4'),(10,'القلق العام.mp4','videos/القلق العام.mp4'),(11,'تمارين تنفس للتخلص من الإكتئاب في ٥ دقائق _ كراما يوغا.mp4','videos/تمارين تنفس للتخلص من الإكتئاب في ٥ دقائق _ كراما يوغا.mp4'),(12,'تمارين يوغا للتخلص من الإكتئاب _ يوغا للاكتئاب _ كراما يوغا.mp4','videos/تمارين يوغا للتخلص من الإكتئاب _ يوغا للاكتئاب _ كراما يوغا.mp4'),(13,'ثنائي القطب.mp4','videos/ثنائي القطب.mp4'),(14,'ما هو الفُصام؟.mp4','videos/ما هو الفُصام؟.mp4'),(15,'ما هو الوسواس القهري وما هي أسبابه.mp4','videos/ما هو الوسواس القهري وما هي أسبابه.mp4'),(16,'هذه ليست النهاية! الحياة لا يزال لديها الكثير لتقدمه! (تحفيز للإكتئاب والقلق) _ Depression & Anxiety.mp4','videos/هذه ليست النهاية! الحياة لا يزال لديها الكثير لتقدمه! (تحفيز للإكتئاب والقلق) _ Depression & Anxiety.mp4');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-16 18:09:49
