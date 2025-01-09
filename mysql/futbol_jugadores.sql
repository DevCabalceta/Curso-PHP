-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: futbol
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jugadores`
--

DROP TABLE IF EXISTS `jugadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jugadores` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `nuevo` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugadores`
--

LOCK TABLES `jugadores` WRITE;
/*!40000 ALTER TABLE `jugadores` DISABLE KEYS */;
INSERT INTO `jugadores` VALUES (1,'TER STEGEN','Porteros','http://localhost/PHP/The-Team/sql/Jugadores/p1.jpg',0),(2,'PEÑA','Porteros','http://localhost/PHP/The-Team/sql/Jugadores/p2.jpg',1),(3,'SZCZESNY','Porteros','http://localhost/PHP/The-Team/sql/Jugadores/p3.jpg',0),(4,'CUBARSÍ','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d1.jpg',0),(5,'BALDE','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d2.jpg',0),(6,'ARAUJO','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d3.jpg',1),(7,'MARTINEZ','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d4.jpg',0),(8,'CHRISTENSE','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d5.jpg',1),(9,'KOUNDE','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d6.jpg',0),(10,'GARCÍA','Defensas','http://localhost/PHP/The-Team/sql/Jugadores/d7.jpg',0),(11,'GAVI ','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c1.jpg',1),(12,'PEDRI','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c2.jpg',0),(13,'TORRE','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c3.jpg',0),(14,'LÓPEZ','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c4.jpg',0),(15,'CASADÓ','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c5.jpg',0),(16,'OLMO','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c6.jpg',1),(17,'DE JONG','Centrocampistas','http://localhost/PHP/The-Team/sql/Jugadores/c7.jpg',0),(18,'TORRES ','Delanteros','http://localhost/PHP/The-Team/sql/Jugadores/g1.jpg',0),(19,'LEWANDOWSKI ','Delanteros','http://localhost/PHP/The-Team/sql/Jugadores/g2.jpg',1),(20,'FATI','Delanteros','http://localhost/PHP/The-Team/sql/Jugadores/g3.jpg',0),(21,'RAPHINA','Delanteros','http://localhost/PHP/The-Team/sql/Jugadores/g4.jpg',0),(22,'VÍCTOR','Delanteros','http://localhost/PHP/The-Team/sql/Jugadores/g5.jpg',0),(23,'LAMINE YAMAL','Delanteros','http://localhost/PHP/The-Team/sql/Jugadores/g6.jpg',0),(24,'HANSI FLICK','Cuerpo Técnico','http://localhost/PHP/The-Team/sql/Jugadores/t1.jpg',0);
/*!40000 ALTER TABLE `jugadores` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-09  8:37:32
