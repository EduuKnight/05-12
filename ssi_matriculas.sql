-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: ssi
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matriculas` (
  `IdMatriculas` int NOT NULL AUTO_INCREMENT,
  `Nome` varchar(150) DEFAULT NULL,
  `Cpf` varchar(15) DEFAULT NULL,
  `DataNasc` date DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` varchar(45) DEFAULT NULL,
  `Plano` varchar(45) DEFAULT NULL,
  `Valor` float DEFAULT NULL,
  `Modalidade` varchar(45) DEFAULT NULL,
  `Status` enum('Aguardando','Ativo','Pausado','Suspenso') DEFAULT 'Aguardando',
  PRIMARY KEY (`IdMatriculas`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` VALUES (1,'Vilma da Silva','051.457.576-20','2023-11-16','F','vilma@vilma.com','3128855444','Easy',189.8,'Natação','Aguardando'),(40,'junio','154.768.356-20','2005-05-16','M','tonin@gmail.com','2356854','Premium',99.99,'Karate','Aguardando'),(41,'maria mi','154.768.356-20','2000-03-10','','mariaeduarda@gmail.com','2356854','Premium',99.99,'Futebol','Aguardando'),(42,'junio','154.768.356-20','2005-05-16','M','tonin@gmail.com','2356854','Premium',99.99,'Karate','Pausado'),(44,'lais','160.234.442-31','2023-11-06','F','lais@gmail.com','31999634388','Premium',99.99,'Karate','Pausado'),(45,'iza','160.234.442-31','2023-11-28','F','iza@gmail.com','31999634388','Premium',99.99,'Karate','Aguardando'),(46,'edu','160.234.442-31','2023-12-07','M','eduardo25110501@gmail.com','31999634388','Premium',99.99,'Karate','Aguardando'),(47,'luis','160.234.442-31','2023-11-28','M','luis@gmail.com','31999634388','Premium',99.99,'Karate','Aguardando');
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-05  9:18:29
