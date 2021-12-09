 MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)

 Host: 127.0.0.1    Database: veterinaria
 
 Server version	8.0.27-0ubuntu0.20.04.1

 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 */;
SET @OLD_TIME_ZONE=@@TIME_ZONE */;
SET TIME_ZONE='+00:00' */;
 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


 Table structure for table `comunas`


DROP TABLE IF EXISTS `comunas`;
 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 */;
CREATE TABLE `comunas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `region_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
 SET character_set_client = @saved_cs_client */;


 Dumping data for table `comunas`


ALTER TABLE `comunas` DISABLE KEYS */;
INSERT INTO `comunas` VALUES (1,'Temuco',2),(2,'Concepción',3),(3,'San Miguel',1),(4,'Recoleta',1);
ALTER TABLE `comunas` ENABLE KEYS */;


 Table structure for table `funcionarios`


DROP TABLE IF EXISTS `funcionarios`;
 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 */;
CREATE TABLE `funcionarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rut` varchar(20) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `comuna_id` int NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
 SET character_set_client = @saved_cs_client */;


 Dumping data for table `funcionarios`


ALTER TABLE `funcionarios` DISABLE KEYS */;
ALTER TABLE `funcionarios` ENABLE KEYS */;


 Table structure for table `regiones`


DROP TABLE IF EXISTS `regiones`;
 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 */;
CREATE TABLE `regiones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
 SET character_set_client = @saved_cs_client */;


 Dumping data for table `regiones`


ALTER TABLE `regiones` DISABLE KEYS */;
INSERT INTO `regiones` VALUES (1,'Metropolitana de Santiago'),(2,'De la Araucania'),(3,'Del Biobio');
ALTER TABLE `regiones` ENABLE KEYS */;
SET TIME_ZONE=@OLD_TIME_ZONE */;

 SET SQL_MODE=@OLD_SQL_MODE */;
 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 SET SQL_NOTES=@OLD_SQL_NOTES */;

 Dump completed on 2021-11-15 22:44:51
