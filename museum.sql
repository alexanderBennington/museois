-- MariaDB dump 10.19  Distrib 10.4.20-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: museum
-- ------------------------------------------------------
-- Server version	10.4.20-MariaDB

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
-- Table structure for table `administracion`
--

DROP TABLE IF EXISTS `administracion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido_paterno` varchar(30) DEFAULT NULL,
  `apellido_materno` varchar(30) DEFAULT NULL,
  `nss` varchar(20) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nss` (`nss`),
  UNIQUE KEY `curp` (`curp`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administracion`
--

LOCK TABLES `administracion` WRITE;
/*!40000 ALTER TABLE `administracion` DISABLE KEYS */;
INSERT INTO `administracion` VALUES (1,'Ekaterina II','Orlov','Romanova','12345678911','ORRE900715ABCDEFG1','DIRECCION','eorlovr1500','ekaterina');
/*!40000 ALTER TABLE `administracion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `subtitulo` varchar(100) DEFAULT NULL,
  `contenido` char(1) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `dato1` varchar(20) DEFAULT NULL,
  `dato2` varchar(20) DEFAULT NULL,
  `dato3` varchar(20) DEFAULT NULL,
  `dato4` varchar(20) DEFAULT NULL,
  `dato5` varchar(20) DEFAULT NULL,
  `dato6` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aseo`
--

DROP TABLE IF EXISTS `aseo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aseo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `id_zona` int(11) DEFAULT NULL,
  `id_intendencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aseo`
--

LOCK TABLES `aseo` WRITE;
/*!40000 ALTER TABLE `aseo` DISABLE KEYS */;
/*!40000 ALTER TABLE `aseo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coleccion`
--

DROP TABLE IF EXISTS `coleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coleccion` (
  `id` int(11) NOT NULL,
  `nombre_obra` varchar(50) DEFAULT NULL,
  `fecha_adicion` date DEFAULT NULL,
  `id_zona` int(11) DEFAULT NULL,
  `id_investigador` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coleccion`
--

LOCK TABLES `coleccion` WRITE;
/*!40000 ALTER TABLE `coleccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `coleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido_paterno` varchar(30) DEFAULT NULL,
  `apellido_materno` varchar(30) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `nss` varchar(20) DEFAULT NULL,
  `escolaridad` varchar(20) DEFAULT NULL,
  `zona` int(11) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rfc` (`rfc`),
  UNIQUE KEY `curp` (`curp`),
  UNIQUE KEY `nss` (`nss`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1002,'Joseline','Martinez','Rodriguez','1999-12-26','MARJ991226XYZ','MARJ991226ABCDEFG1','12345678912','BACHILLERATO',2,'EmpleadoD.jpg','INVESTIGADOR','jmartinezr2600','joseline'),(10001,'Kevin','Sánchez','Torres','2023-10-31','SATK000715XYZ','SATK000715HMCNRVA1','12345678911','INGENIERIA',1,'empleadoA.jpg','INTENDENCIA','ksanchezt1500','kevin');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `informatica`
--

DROP TABLE IF EXISTS `informatica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `informatica` (
  `id_ns` int(11) NOT NULL,
  `dispositivo` varchar(30) DEFAULT NULL,
  `dir_ip` varchar(20) DEFAULT NULL,
  `id_zona` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ns`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `informatica`
--

LOCK TABLES `informatica` WRITE;
/*!40000 ALTER TABLE `informatica` DISABLE KEYS */;
/*!40000 ALTER TABLE `informatica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro_coleccion`
--

DROP TABLE IF EXISTS `registro_coleccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro_coleccion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empleado_encargado` int(11) DEFAULT NULL,
  `id_coleccion` int(11) DEFAULT NULL,
  `fecha_ingreso` datetime DEFAULT current_timestamp(),
  `observaciones` char(1) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `id_solicitud` int(11) DEFAULT NULL,
  `id_reporte` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro_coleccion`
--

LOCK TABLES `registro_coleccion` WRITE;
/*!40000 ALTER TABLE `registro_coleccion` DISABLE KEYS */;
/*!40000 ALTER TABLE `registro_coleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reporte`
--

DROP TABLE IF EXISTS `reporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_solicitud` int(11) DEFAULT NULL,
  `id_articulo` int(11) DEFAULT NULL,
  `fecha_entrega` datetime DEFAULT NULL,
  `detalles` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `reporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitud`
--

DROP TABLE IF EXISTS `solicitud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_articulo` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `tipo` varchar(30) DEFAULT NULL,
  `detalles` char(1) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `taquilla`
--

DROP TABLE IF EXISTS `taquilla`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `taquilla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_boleto` varchar(30) DEFAULT NULL,
  `precio` decimal(5,2) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `equipo` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `taquilla`
--

LOCK TABLES `taquilla` WRITE;
/*!40000 ALTER TABLE `taquilla` DISABLE KEYS */;
/*!40000 ALTER TABLE `taquilla` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitas`
--

DROP TABLE IF EXISTS `visitas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitas` (
  `id` int(11) NOT NULL,
  `fecha_registro` datetime DEFAULT current_timestamp(),
  `fecha_visita` datetime DEFAULT NULL,
  `grupo` varchar(50) DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_guia` int(11) DEFAULT NULL,
  `id_monitor` int(11) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitas`
--

LOCK TABLES `visitas` WRITE;
/*!40000 ALTER TABLE `visitas` DISABLE KEYS */;
/*!40000 ALTER TABLE `visitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zona_museo`
--

DROP TABLE IF EXISTS `zona_museo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zona_museo` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) DEFAULT NULL,
  `id_encargado` int(11) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zona_museo`
--

LOCK TABLES `zona_museo` WRITE;
/*!40000 ALTER TABLE `zona_museo` DISABLE KEYS */;
/*!40000 ALTER TABLE `zona_museo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zona_visita`
--

DROP TABLE IF EXISTS `zona_visita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zona_visita` (
  `id` int(11) NOT NULL,
  `id_visita` int(11) DEFAULT NULL,
  `id_zona` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zona_visita`
--

LOCK TABLES `zona_visita` WRITE;
/*!40000 ALTER TABLE `zona_visita` DISABLE KEYS */;
/*!40000 ALTER TABLE `zona_visita` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-20 19:35:10
