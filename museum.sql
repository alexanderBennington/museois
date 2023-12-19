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
  `rfc` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nss` (`nss`),
  UNIQUE KEY `curp` (`curp`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administracion`
--

LOCK TABLES `administracion` WRITE;
/*!40000 ALTER TABLE `administracion` DISABLE KEYS */;
INSERT INTO `administracion` VALUES (1,'Ekaterina II','Orlov','Romanova','12345678911','ORRE900715ABCDEFG1','DIRECCION','eorlovr1500','ekaterina','ORRE900715XYZ'),(2,'Millicent','Valencia','Montes','12345678913','VAMM160885ABCDEFG1','CONS_REST','mvalenciam1600','millicent','VAMM160885XYZ'),(4,'Tadeo','Jones','Jackson','12345678914','JOJT170984ABCDEFG1','CIS','tjonesj1700','tadeo','JOJT170984XYZ'),(5,'Patricio','Wisely','Baxter','12345678915','WIBP171084ABCDEFG1','ADMINISTRATIVO','pwiselyb1800','patricio','WIBP171084XYZ'),(6,'Monsieur','Collignon','Delacroix','12345678918','CODM831115ABCDEFG1','OPERATIVO_TAQ','mcollignond2000','Monsieur','CODM831115XYZ'),(7,'Master','Of','Puppets','12345678920','OFPM900629ABCDEFG1','PORTAL_INF','mofp2000','master','OFPM900629XYZ'),(8,'Adrián','Velasco','Matute','9876543210','VEMA790715ABCDEFG1','SEGURIDAD','mvelascom1000','matute','VEMA790715XYZ'),(9,'Alex','Hernández','Torres','1234567812','HETA000710ABCDEFG1','INTENDENCIA','ahernandezt1500','alex','HETA000710XYZ');
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
  `contenido` text DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `dato1` varchar(20) DEFAULT NULL,
  `dato2` varchar(20) DEFAULT NULL,
  `dato3` varchar(20) DEFAULT NULL,
  `dato4` varchar(20) DEFAULT NULL,
  `estado` varchar(3) NOT NULL DEFAULT 'NO',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anuncios`
--

LOCK TABLES `anuncios` WRITE;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` VALUES (5,'La historia de México en un vistazo','De los orígenes a la actualidad','Esta exhibición presenta un recorrido por la historia de México, desde sus orígenes hasta la actualidad. Los visitantes podrán conocer los principales acontecimientos y personajes que han marcado el desarrollo de nuestro país.\r\n<br><br>\r\nLa exhibición se divide en cinco secciones:\r\n<br><br>\r\n<ul>\r\n<li>Los orígenes: Esta sección presenta los primeros habitantes de México, desde los grupos nómadas hasta las grandes civilizaciones mesoamericanas.</li><br>\r\n\r\n<li>La conquista y la colonia: Esta sección narra la llegada de los españoles a México y el establecimiento de la colonia.</li>\r\n\r\n<li>La independencia: Esta sección relata el proceso de independencia de México, desde los primeros movimientos independentistas hasta la consumación de la independencia.</li><br>\r\n\r\n<li>El siglo XIX: Esta sección presenta los principales acontecimientos del siglo XIX mexicano, como la Reforma, la Intervención Francesa y la Segunda Intervención Francesa.</li><br>\r\n\r\n<li>El siglo XX: Esta sección narra los acontecimientos más importantes del siglo XX mexicano, como la Revolución Mexicana, la Guerra Civil Española y la Guerra Fría.</li><br>\r\n</ul>\r\nLa exhibición cuenta con una gran variedad de objetos y documentos que ayudan a los visitantes a comprender la historia de México. Entre los objetos que se exhiben se encuentran piezas arqueológicas, documentos históricos, armas, fotografías y obras de arte.\r\n<br><br>\r\nLa exhibición está dirigida a todo público, desde niños hasta adultos. Es una excelente oportunidad para conocer la historia de México de una manera divertida e interactiva.\r\n<br><br>','historia.jpg','General','80','Publico','Historia','SI','2023-11-22 03:06:54'),(6,'La diversidad de la vida','Una mirada al mundo animal','Esta exhibición presenta una amplia gama de animales, desde los más pequeños insectos hasta los más grandes mamíferos. Los visitantes podrán aprender sobre la diversidad de formas, tamaños y comportamientos de los animales.\r\n<br><br>\r\nLa exhibición se divide en seis secciones:\r\n<br><br>\r\n<ul>\r\n<li>Los invertebrados: Esta sección presenta los animales sin columna vertebral, como los insectos, los arácnidos, los moluscos y los peces.</li>\r\n<br>\r\n<li>Los vertebrados: Esta sección presenta los animales con columna vertebral, como los anfibios, los reptiles, las aves y los mamíferos.</li>\r\n<br>\r\n<li>Los animales marinos: Esta sección presenta los animales que viven en el océano, como los peces, las ballenas, los delfines y los corales.</li>\r\n<br>\r\n<li>Los animales terrestres: Esta sección presenta los animales que viven en la tierra, como los mamíferos, los reptiles, las aves y los anfibios.</li>\r\n<br>\r\n<li>Los animales de México: Esta sección presenta los animales que viven en México, como el jaguar, el águila real, el venado cola blanca y la mariposa monarca.</li>\r\n<br>\r\n<li>Los animales en peligro de extinción: Esta sección presenta los animales que corren el riesgo de desaparecer, como el tigre de Bengala, el panda gigante y el rinoceronte blanco.</li>\r\n<br>\r\n</ul>\r\nLa exhibición cuenta con una gran variedad de objetos y documentos que ayudan a los visitantes a comprender la diversidad de la vida animal. Entre los objetos que se exhiben se encuentran animales disecados, esqueletos, huevos y pieles.\r\n<br><br>\r\nLa exhibición está dirigida a todo público, desde niños hasta adultos. Es una excelente oportunidad para aprender sobre el mundo animal de una manera divertida e interactiva.\r\n<br><br>','zoo.jpg','Especial','50','Publico','Historia','SI','2023-11-22 03:14:52'),(7,'Los primeros pasos de la humanidad','Un viaje a través de la prehistoria','Esta exhibición presenta un recorrido por la prehistoria, desde los primeros homínidos hasta el desarrollo de las primeras civilizaciones. Los visitantes podrán conocer los principales acontecimientos y descubrimientos de esta etapa de la historia.\r\n<br><br>\r\nLa exhibición se divide en cuatro secciones:\r\n<br><br>\r\n<ul>\r\n<li>Los primeros homínidos: Esta sección presenta los primeros seres humanos, desde los australopitecos hasta los neandertales.</li>\r\n<br>\r\n<li>La revolución neolítica: Esta sección narra el desarrollo de la agricultura y la ganadería, que marcó el inicio de la civilización.</li>\r\n<br>\r\n<li>Las primeras civilizaciones: Esta sección presenta las principales civilizaciones de la prehistoria, como la civilización del valle del Indo, la civilización mesopotámica y la civilización egipcia.</li>\r\n<br>\r\n<li>El fin de la prehistoria: Esta sección narra el declive de las civilizaciones prehistóricas y el surgimiento de las primeras sociedades complejas.</li>\r\n<br>\r\n</ul>\r\nLa exhibición cuenta con una gran variedad de objetos y documentos que ayudan a los visitantes a comprender la prehistoria. Entre los objetos que se exhiben se encuentran fósiles, herramientas, cerámicas y obras de arte.\r\n<br><br>\r\nLa exhibición está dirigida a todo público, desde niños hasta adultos. Es una excelente oportunidad para conocer el pasado de la humanidad de una manera divertida e interactiva.','prehistoria.jpg','General','80','Publico','Prehistoria','SI','2023-11-22 03:27:01'),(8,'La arquitectura mexicana a través del tiempo','Un recorrido por la historia de la construcción en México','Esta exhibición presenta un recorrido por la historia de la arquitectura mexicana, desde las primeras construcciones prehispánicas hasta las obras modernas. Los visitantes podrán conocer los principales estilos arquitectónicos que se han desarrollado en México, así como las técnicas y materiales utilizados.\r\n<br><br>\r\nLa exhibición se divide en cinco secciones:\r\n<br><br>\r\n<ul>\r\n<li>Arquitectura prehispánica: Esta sección presenta las principales construcciones de las civilizaciones mesoamericanas, como los templos, las pirámides y los palacios.</li>\r\n<br>\r\n<li>Arquitectura colonial: Esta sección presenta las construcciones de la época colonial, como las iglesias, los conventos y las haciendas.</li>\r\n<br>\r\n<li>Arquitectura del siglo XIX: Esta sección presenta las construcciones del siglo XIX, como los palacios, los teatros y las casas de estilo neoclásico.</li>\r\n<br>\r\n<li>Arquitectura del siglo XX: Esta sección presenta las construcciones del siglo XX, como los edificios Art Deco, los edificios modernos y los edificios sustentables.</li>\r\n<br>\r\n<li>Arquitectura contemporánea: Esta sección presenta las construcciones de la actualidad, como los edificios de diseño vanguardista y los edificios sostenibles.</li>\r\n<br>\r\n</ul>\r\nLa exhibición cuenta con una gran variedad de objetos y documentos que ayudan a los visitantes a comprender la arquitectura mexicana. Entre los objetos que se exhiben se encuentran maquetas, planos, fotografías y obras de arte.\r\n<br><br>\r\nLa exhibición está dirigida a todo público, desde niños hasta adultos. Es una excelente oportunidad para aprender sobre la arquitectura mexicana de una manera divertida e interactiva.\r\n<br><br>','historia.jpg','General','80','Publico','Historia','SI','2023-11-22 03:29:44');
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
  `id` varchar(30) NOT NULL,
  `nombre_obra` varchar(50) DEFAULT NULL,
  `fecha_adicion` date DEFAULT NULL,
  `id_zona` varchar(30) DEFAULT NULL,
  `id_investigador` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coleccion`
--

LOCK TABLES `coleccion` WRITE;
/*!40000 ALTER TABLE `coleccion` DISABLE KEYS */;
INSERT INTO `coleccion` VALUES ('BIOM-SCN-009','Biósfera en Miniatura','2023-12-03','SCN-003','CRE-005'),('CODM-GIT-010','Códigos de la Máquina','2023-12-03','GIT-004','CRE-006'),('CONM-ZEE-005','Constelaciones Mecánicas','2023-12-03','ZEE-005','CRE-005'),('EPOD-ZHA-016','Época Dorada','2023-12-03','ZHA-001','SII-008'),('ESQD-SCN-008','Esqueleto de Dinosaurio','2023-12-03','SCN-003','SII-008'),('ESTD-ZHA-017','Estatua de la Diosa','2023-12-03','ZHA-001','CRE-005'),('IDEF-GAC-015','Identidad Fragmentada','2023-12-03','GAC-002','SII-007'),('JARM-SCN-007','El Jardín de las Mariposas','2023-12-03','SCN-003','SII-007'),('LATU-GAC-013','El Latido Urbano','2023-12-03','GAC-002','CRE-005'),('LIBS-ALM-003','El Libro de los Sueños','2023-12-03','ALM-006','SII-007'),('REAV-GIT-012','Realidad Virtual','2023-12-03','GIT-004','SII-008'),('RELA-ALM-002','Reliquia Arqueológica','2023-12-03','ALM-006','CRE-006'),('ROBP-GIT-011','Robot Poeta','2023-12-03','GIT-004','SII-007'),('ROCL-ZEE-006','Rocas Lunares','2023-12-03','ZEE-005','CRE-006'),('SONS-GAC-014','Sonidos del Silencio','2023-12-03','GAC-002','CRE-006'),('TESN-ZHA-018','Tesoro del Navegante','2023-12-03','ZHA-001','CRE-006'),('VELP-ALM-001','El Velero Perdido','2023-12-03','ALM-006','CRE-005'),('VIAE-ZEE-004','Viaje Estelar','2023-12-03','ZEE-005','CRE-005');
/*!40000 ALTER TABLE `coleccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido_paterno` varchar(30) DEFAULT NULL,
  `apellido_materno` varchar(30) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `rfc` varchar(20) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `nss` varchar(20) DEFAULT NULL,
  `escolaridad` varchar(20) DEFAULT NULL,
  `cv` varchar(100) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `clave` varchar(30) DEFAULT NULL,
  `id_zona` varchar(50) DEFAULT NULL,
  `datos_biometricos` bigint(20) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
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
INSERT INTO `empleados` VALUES ('CCT-003','Javier','Cruz','López','1996-02-13','CULJ960213XYZ','CULJ960213ABCDEFG1','12345678102','INGENIERIA','empleadoA.jpg','INFORMATICO','jcruzl1500','javier','AP-SI07',429307582256670,'5888238725'),('CCT-004','Alejandra','Mendoza','Morales','1996-10-17','MEMA961017XYZ','MEMA961017ABCDEFG1','12345678103','INGENIERIA','empleadoA.jpg','INFORMATICO','amendozam1600','alejandra','AP-SI07',127681783519388,'5154381129'),('CMV-027','Raúl','Méndez','Jiménez','1987-05-04','MEJR870504XYZ','MEJR870504ABCDEFG1','74639582754','BACHILLERATO','empleadoC.jpg','SEGURIDAD','rmendezj1400','raul','SEG-CMV09',350486201560577,'5107189500'),('CMV-028','Laura','Vargas','Márquez','1990-04-07','VAML900407XYZ','VAML900407ABCDEFG1','75937676942','BACHILLERATO','empleadoB.jpg','SEGURIDAD','lvargasm1500','laura','SEG-CMV09',369385687978366,'572804147'),('COC-013','Oscar','Medina','Santos','2001-12-15','MESO011215XYZ','MESO011215ABCDEFG1','98743127654','BACHILLERATO','empleadoC.jpg','OPERATIVO/TAQ','omedinas1100','oscar','EPO-CC05',795469865943742,'542452265'),('COC-014','Isabel','Varela','Peña','2002-02-02','VAPI020202XYZ','VAPI020202ABCDEFG1','98652387120','BACHILLERATO','empleadoD.jpg','OPERATIVO/TAQ','ivarelap1500','isabel','EPO-CC05',869192296517260,'5993848916'),('CRE-005','Paola','Rodríguez','Gómez','1985-10-16','ROGP851016XYZ','ROGP851016ABCDEFG1','12345678104','LICENCIATURA','empleadoB.jpg','INVESTIGADOR','prodriguezg1500','paola','CIE-CRE04',959551915488719,'5841887814'),('CRE-006','Martín','Salazar','Ortiz','1977-07-07','SAOM770707XYZ','SAOM770707ABCDEFG1','12345678105','DOCTORADO','empleadoB.jpg','CATALOGADOR','msalazaro1500','martin','CIE-CRE04',190182718625462,'5227892356'),('CRE-035','Patricio','Sánchez','Mendoza','2002-02-06','SAMP020206XYZ','SAMP020206ABCDEFG1','98765432900','BACHILLERATO','empleadoB.jpg','MONITOR','psanchezm1500','patricio','CIE-CRE04',72257877394797,'5613798367'),('CRE-036','Matilde','Rodríguez','Navarro','1997-06-11','RONM970611XYZ','RONM970611ABCDEFG1','98765432901','BACHILLERATO','empleadoB.jpg','GUIA','mrodriguezn1500','matilde','CIE-CRE04',790741261831243,'5385314799'),('GAC-017','Sergio','Martínez','Sánchez','1998-10-05','MASS981005XYZ','MASS981005ABCDEFG1','56478339201','BACHILLERATO','empleadoA.jpg','MONITOR','smartinezs1500','sergio','GAC-002',736932707705472,'585178924'),('GAC-018','Ana','Paredes','Castro','2001-01-01','PACA010101XYZ','PACA010101ABCDEFG1','12094587234','BACHILLERATO','empleadoA.jpg','GUIA','aparedezc1200','ana','GAC-002',312439783767275,'5269950256'),('GEE-021','Roberto','Sánchez','Vargas','1994-06-16','SAVR940616XYZ','SAVR940616ABCDEFG1','94732845921','BACHILLERATO','empleadoD.jpg','INTENDENCIA','rsanchezv1222','roberto','INT-GEE12',351400826453604,'594214540'),('GEE-022','Brenda','López','Rosales','1990-04-06','LORB900406XYZ','LORB900406ABCDEFG1','47583085732','BACHILLERATO','empleadoD.jpg','INTENDENCIA','blopezg1200','brenda','INT-GEE12',819684811699842,'5661221964'),('GIT-019','Luis','González','Nieves','2000-12-12','GONL001212XYZ','GONL001212ABCDEFG1','87235428931','BACHILLERATO','empleadoA.jpg','MONITOR','lgonzalezn1500','luis','GIT-004',44221609872040,'523466232'),('GIT-020','Diana','Rangel','Flores','1994-07-22','RAFD940722XYZ','RAFD940722ABCDEFG1','98043846291','BACHILLERATO','empleadoA.jpg','GUIA','drangelf1300','diana','GIT-004',762053644994323,'5133665297'),('JEE-023','Rodrigo','Díaz','Mendoza','2000-04-05','DIMR000405XYZ','DIMR000405ABCDEFG1','75939485851','BACHILLERATO','empleadoD.jpg','INTENDENCIA','rdiazm1200','rodrigo','INT-JEE11',677603426089141,'5597927820'),('JEE-024','Patricia','Salgado','Gutiérrez','1999-06-02','SAGP990602XYZ','SAGP990602ABCDEFG1','4394573982','BACHILLERATO','empleadoD.jpg','INTENDENCIA','psalgadog1300','patricia','INT-JEE11',101856226196378,'5588643241'),('LCP-011','Carolina','Jiménez','Guzmán','1995-03-12','JIGC950312XYZ','JIGC950312ABCDEFG1','12345378911','INGENIERIA','empleadoC.jpg','CONS_REST','cjimenezg1000','carolina','CR-LCP02',476470883448115,'5149432775'),('LCP-012','Juan','Herrera','Molina','1992-02-06','HEMJ920206XYZ','HEMJ920206ABCDEFG1','125674387341','BACHILLERATO','empleadoC.jpg','CONS_REST','jherreram1200','juan','CR-LCP02',76785769385086,'5981234185'),('SCS-029','Ernesto','Torres','Díaz','1992-05-07','TODE920507XYZ','TODE920507ABCDEFG1','34986720896','BACHILLERATO','empleadoC.jpg','SEGURIDAD','etorresd1200','ernesto','SEG-SCS10',954516227314729,'5457872630'),('SCS-030','Rosa','Moreno','Núñez','1998-03-04','MONR980304XYZ','MONR980304ABCDEFG1','84033849203','BACHILLERATO','empleadoB.jpg','SEGURIDAD','rmorenon1400','rosa','SEG-SCS10',542223859152033,'5345660627'),('SID-001','Marina','Vargas','Herrera','1999-06-08','VAHM990608XYZ','VAHM990608ABCDEFG1','12345678100','INGENIERIA','empleadoA.jpg','INFORMATICO','mvargash1500','maria','AP-ID08',847570644549625,'5354685275'),('SID-002','Andrés','Soto','Ramírez','1995-10-11','SORA951011XYZ','SORA951011ABCDEFG1','12345678101','INGENIERIA','empleadoA.jpg','INFORMATICO','asotor1500','andres','AP-ID08',611181676025671,'5736444525'),('SII-007','Laura','Flores','Torres','1987-10-14','FLTL871014XYZ','FLTL871014ABCDEFG1','12345678106','LICENCIATURA','empleadoB.jpg','INVESTIGADOR','lflorest1500','laura','CIE-SII03',513196477213126,'5618166830'),('SII-008','Daniel','Pérez','Díaz','1976-10-06','PEDD761006XYZ','PEDD761006ABCDEFG1','12345678107','DOCTORADO','empleadoB.jpg','CATALOGADOR','dperezd1500','daniel','CIE-SII03',732437388722260,'5881500610'),('SII-037','Patricio','Vega','Miranda','2001-06-05','VEMP010605XYZ','VEMP010605ABCDEFG1','98765432902','BACHILLERATO','empleadoB.jpg','MONITOR','pvegam1500','patricio','CIE-SII03',122597542705570,'5553002588'),('SII-038','Matilda','Martínez','Castillo','1997-06-21','MACM971021XYZ','MACM971021ABCDEFG1','98765432904','BACHILLERATO','empleadoB.jpg','GUIA','mmartinezc1500','matilda','CIE-SII03',415675578094716,'5120511140'),('SRA-009','Elena','Ramírez','Núñez','1997-02-04','RANE970204XYZ','RANE970204ABCDEFG1','12345678345','INGENIERIA','empleadoC.jpg','CONS_REST','eramirezn1500','elena','CR-AV01',710585293090516,'5943547970'),('SRA-010','Ricardo','González','Silva','1994-06-22','GOSR940622XYZ','GOSR940622ABCDEFG1','12344667723','BACHILLERATO','empleadoC.jpg','CONS_REST','rgonzaless1400','ricardo','CR-AV01',305899761902075,'5356206461'),('TAC-015','Francisco','García','Márquez','2001-01-01','GAMF010101XYZ','GAMF010101ABCDEFG1','12903456872','BACHILLERATO','empleadoD.jpg','OPERATIVO/TAQ','fgarciamarquez1233','francisco','EPO-TAC06',397742960972472,'5950388424'),('TAC-016','Carmen','Ríos','Ortiz','2000-03-05','RIOC000305XYZ','RIOC000305ABCDEFG1','10298347565','BACHILLERATO','empleadoD.jpg','OPERATIVO/TAQ','criosortiz1200','carmen','EPO-TAC06',71015549889780,'5683322772'),('ZHA-033','Diego','Ríos','Varela','2000-08-07','RIVD000807XYZ','RIVD000807ABCDEFG1','86936738294','BACHILLERATO','empleadoB.jpg','MONITOR','driosv1300','diego','ZHA-001',161848897265129,'5565448616'),('ZHA-034','Mariana','Castro','Pérez','2002-06-05','CAPM020605XYZ','CAPM020605ABCDEFG1','74039687877','BACHILLERATO','empleadoB.jpg','GUIA','mcastrop1599','mariana','ZHA-001',596197867389952,'5777274795');
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
-- Table structure for table `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `de_usuario_id` varchar(20) DEFAULT NULL,
  `para_usuario_id` varchar(20) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes`
--

LOCK TABLES `mensajes` WRITE;
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
INSERT INTO `mensajes` VALUES (1,'1','CCT-004','hola a todos','2023-12-16 01:01:29'),(2,'CCT-004','1','hola tambien tu','2023-12-16 01:02:16'),(3,'1','CCT-004','como estas?','2023-12-16 01:02:31'),(4,'CCT-004','1','bien y tu?','2023-12-16 01:02:40'),(5,'SII-007','1','dsadsad asdsadsa dasd','2023-12-16 01:36:56'),(6,'1','SII-007','ok','2023-12-16 01:37:15'),(7,'1','CCT-004','como tan muchacho?','2023-12-16 07:01:27'),(8,'1','CCT-004','todo bien?','2023-12-16 07:04:14'),(9,'CCT-004','1','esto ha salido muy bien','2023-12-16 07:07:05'),(10,'1','CCT-004','Creo que demasiado bien','2023-12-16 07:07:19'),(11,'1','CCT-004','o mejor','2023-12-16 07:08:01'),(12,'1','SID-002','señorita la necesito en la oficina ahora','2023-12-16 07:08:43');
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensajes_general`
--

DROP TABLE IF EXISTS `mensajes_general`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensajes_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` varchar(20) DEFAULT NULL,
  `mensaje` text DEFAULT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensajes_general`
--

LOCK TABLES `mensajes_general` WRITE;
/*!40000 ALTER TABLE `mensajes_general` DISABLE KEYS */;
INSERT INTO `mensajes_general` VALUES (1,'1','Hola Buen dia','2023-12-16 18:19:50'),(2,'CCT-004','Hola Buen dia','2023-12-16 18:20:31'),(3,'SII-008','Hola Buen dia','2023-12-16 18:20:48'),(4,'SII-007','cómo estan?','2023-12-16 18:21:08'),(5,'1','todo bien?','2023-12-16 18:40:51');
/*!40000 ALTER TABLE `mensajes_general` ENABLE KEYS */;
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
  `fecha_entrega` datetime DEFAULT current_timestamp(),
  `detalles` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reporte`
--

LOCK TABLES `reporte` WRITE;
/*!40000 ALTER TABLE `reporte` DISABLE KEYS */;
INSERT INTO `reporte` VALUES (13,2,'2023-12-13 01:09:48','Todo chevere'),(14,1,'2023-12-13 22:53:04','Se ha lavado el esqueleto, y se ha dado un mayor mantenimiento, bla bla bla.');
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
  `id_articulo` varchar(20) DEFAULT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `detalles` text DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL,
  `id_encargado` varchar(20) DEFAULT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitud`
--

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;
INSERT INTO `solicitud` VALUES (1,'ESQD-SCN-008','2023-12-08 00:17:24','S','TERMINADO','SRA-009',NULL),(2,'BIOM-SCN-009','2023-12-08 00:18:25','Se necesita dar mantenimiento preventivo.','TERMINADO','SRA-010','RAJADURA'),(3,'ROBP-GIT-011','2023-12-11 23:08:21','Tenemos que corregir','CANCELADO','SRA-009',NULL),(4,'VELP-ALM-001','2023-12-13 23:19:50','Se esta dañando','PENDIENTE','SRA-010','RAJADURA'),(5,'BIOM-SCN-009','2023-12-13 23:20:35','No pues ya no se','APROBADO','SRA-009',NULL),(7,'ESTD-ZHA-017','2023-12-18 01:46:09','Se debe de regresar al almacén para poder limpiarla.','APROBADO','LCP-012','MANTENIMIENTO');
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_registro` datetime DEFAULT current_timestamp(),
  `fecha_visita` date DEFAULT NULL,
  `grupo` varchar(50) DEFAULT NULL,
  `hora_salida` time DEFAULT NULL,
  `id_guia` varchar(20) DEFAULT NULL,
  `id_monitor` varchar(20) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `hora_entrada` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitas`
--

LOCK TABLES `visitas` WRITE;
/*!40000 ALTER TABLE `visitas` DISABLE KEYS */;
INSERT INTO `visitas` VALUES (1,'2023-12-06 18:15:03','2023-12-20','ESCOM ','13:40:00','CRE-036','CRE-035','PENDIENTE','12:40:00'),(3,'2023-12-18 01:02:00','2023-12-20','ESIME','15:00:00','GIT-020','GIT-019','PENDIENTE','13:00:00');
/*!40000 ALTER TABLE `visitas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitas_zonas`
--

DROP TABLE IF EXISTS `visitas_zonas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitas_zonas` (
  `id_visita` int(11) NOT NULL,
  `zona` varchar(50) NOT NULL,
  PRIMARY KEY (`id_visita`,`zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitas_zonas`
--

LOCK TABLES `visitas_zonas` WRITE;
/*!40000 ALTER TABLE `visitas_zonas` DISABLE KEYS */;
INSERT INTO `visitas_zonas` VALUES (1,'AP-SI07'),(1,'CR-AV01'),(1,'GIT-004'),(1,'SEG-CMV09'),(1,'ZHA-001');
/*!40000 ALTER TABLE `visitas_zonas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zona_museo`
--

DROP TABLE IF EXISTS `zona_museo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zona_museo` (
  `id` varchar(20) NOT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `id_administracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zona_museo`
--

LOCK TABLES `zona_museo` WRITE;
/*!40000 ALTER TABLE `zona_museo` DISABLE KEYS */;
INSERT INTO `zona_museo` VALUES ('ALM-006','ABIERTO','Almacén',5),('AP-ID08','ABIERTO','Sala de Innovación Digital',7),('AP-SI07','ABIERTO','Centro de Control Tecnológico',7),('CIE-CRE04','ABIERTO','Centro de Recursos Educativos',4),('CIE-SII03','ABIERTO','Sala de Investigación Interactiva',4),('CR-AV01','ABIERTO','Sala de Restauración Avanzada',2),('CR-LCP02','ABIERTO','Laboratorio de Conservación Preventiva',2),('EPO-CC05','ABIERTO','Centro de Operaciones y Coordinación',6),('EPO-TAC06','ABIERTO','Área de Taquillas y Atención al Cliente',6),('GAC-002','ABIERTO','Galería de Arte Contemporáneo',5),('GIT-004','ABIERTO','Galería de Innovación Tecnológica',5),('INT-GEE12','ABIERTO','Galería de Eventos Especiales',9),('INT-JEE11','ABIERTO','Jardines y Espacios Exteriores',9),('SCN-003','ABIERTO','Sala de Ciencias Naturales',5),('SEG-CMV09','ABIERTO','Centro de Monitoreo y Vigilancia',8),('SEG-SCS10','ABIERTO','Sala de Capacitación en Seguridad',8),('ZEE-005','ABIERTO','Zona de Exploración Espacial',5),('ZHA-001','ABIERTO','Zona de Historia Antigua',5);
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

-- Dump completed on 2023-12-19  6:33:54
