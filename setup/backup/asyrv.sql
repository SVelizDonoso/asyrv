-- MySQL dump 10.11
--
-- Host: localhost    Database: asyrv
-- ------------------------------------------------------
-- Server version	5.0.51a-3ubuntu5

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
-- Table structure for table `blogsec`
--

DROP TABLE IF EXISTS `blogsec`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `blogsec` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `desc` varchar(1000) default NULL,
  `url` varchar(200) default NULL,
  `img` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1 COMMENT='blogs de seguridad TI';
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `blogsec`
--

LOCK TABLES `blogsec` WRITE;
/*!40000 ALTER TABLE `blogsec` DISABLE KEYS */;
INSERT INTO `blogsec` VALUES (1,'El Lado del Mal','Blog personal de Chema Alonso. Habla sobre técnicas de hacking y muchos artículos interesantes relacionados con la seguridad informática (y otras cosas “fikis” que tanto nos gustan XD). Últimamente han habido varios artículos sobre Latch, una herramienta muy interesante para añadir una capa de seguridad extra a servicios en Internet.','www.elladodelmal.com','../../img/blogs/1.JPG'),(2,'Security By Default','Se trata de un blog llevado por un grupo de profesionales de la seguridad informática en el que se incluyen varias secciones sobre herramientas, eventos, libros recomendados, entre otras cosas. Es un blog en el que se publican entradas con mucha frecuencia y que cuenta con el reconocimiento de la comunidad por su alto contenido técnico. ','www.securitybydefault.com','../../img/blogs/2.JPG'),(3,'DaboBlog','Blog personal de David Hernández (aka. Dabo), este es “el sitio” por excelencia para todos los que usamos GNU/Linux y específicamente Debian. David es un profesional excelente que incluye en su blog personal  muy buenos contenidos sobre administración de servidores y hacking en sistemas basados en GNU/Linux.','www.daboblog.com','../../img/blogs/3.JPG'),(4,'DragonJar','Una de las comunidades más grandes en habla hispana fundada por Andrés Restrepo, en la que encontrarás múltiples recursos en forma de vídeo tutoriales, entrevistas, manuales, un foro de usuarios con bastante movimiento, etc.','www.dragonjar.org','../../img/blogs/4.JPG'),(5,'Flu Project','Un blog mantenido por Juan Antonio Calles y Pablo Gonzáles, en el que todos los días podrás encontrar un nuevo artículo con noticias, manuales técnicos y eventos relacionados con la seguridad informática. También incluyen un listado de herramientas de seguridad y retos hacking que resultan muy útiles para practicar. ','www.flu-project.com','../../img/blogs/5.JPG'),(6,'Pentester.es','Es un blog especialmente interesante por incluir contenido completamente técnico en el que se explican al detalle pruebas de concepto y explotación de vulnerabilidades. Aunque no se actualiza con tanta frecuencia como los anteriores, lo considero como uno de los mejores blogs en español sobre hacking y exploiting.','www.pentester.es','../../img/blogs/6.JPG'),(7,'Seguridad y Redes','Llevo varios años siguiendo este blog, leyendo cada una de sus entradas y ¿qué puedo decir? Nunca me ha defraudado. Creo que es el sitio con más información sobre redes de datos en castellano del que he tenido el gusto de aprender. ','seguridadyredes.wordpress.com','../../img/blogs/7.JPG'),(8,'Inseguros','El blog de \'kinomakino\' en el que encontraras recursos muy interesantes sobre Pentesting, especialmente sobre sistemas basados en Windows y tecnologías Microsoft, aunque como todo buen blog de hacking, no se limita únicamente a eso. Tiene una colección bastante completa de libros recomendados, los cuales, desde mi punto de vista, son los mejores que hay actualmente sobre seguridad informática. Además, también tiene un listado de recursos y blogs recomendados bastante completa.','kinomakino.blogspot.com.es','../../img/blogs/8.JPG'),(9,'HackPlayers','Otro gran blog que se suma a esta lista. Incluye información sobre retos, cursos, herramientas, etc.','www.hackplayers.com','../../img/blogs/9.JPG'),(10,'Seguridad a lo Jabali',' Si tuviera que elegir en tres palabras para definir este blog serian: divertido, educativo y  practico. A mi modo de ver, son las principales características de este sitio.','www.seguridadjabali.com','../../img/blogs/10.JPG'),(11,'Un tal 4an0nymous en el pc','Blog personal de Germán Sánchez.Este blog siempre me ha resultado muy entretenido de leer por la forma en la que el autor explica las cosas, es un profesional que además de ser muy bueno por lo que se puede ver en su blog, tiene un sentido del humor que me resulta muy ameno. Habla un poco de todo, explotación de software, ataques en entornos web, maleware, etc.','www.enelpc.com','../../img/blogs/11.JPG'),(12,'Kontrol0','Sitio web de Ismael Gonzáles, autor del libro “Backbox 3 – Iniciación al Pentesting” y la herramienta “K0SASP” para hacking en sistemas MacOS. Personalmente, una de las cosas que más gustan de este blog, es que casi todas las entradas son cortas, precisas y prácticas, de esas de las que te enteras rápidamente sobre lo que el autor quiere explicar y poner en práctica. ','www.kontrol0.com','../../img/blogs/12.JPG'),(13,'sniferl4bs',' Blog de Jose Moruno Cadima,otro sitio genial sobre seguridad informática y técnicas de hacking. Hay publicaciones constantes que seguramente serán de tu interés.  ','www.sniferl4bs.com','../../img/blogs/13.JPG'),(14,'Elhacker.net','Se trata de una comunidad que cuenta con una amplia trayectoria y con miles de usuarios registrados. En el foro y en el blog encontrarás contenidos actualizados todos los días sobre seguridad informática y sistemas en general. Hay gente con mucho nivel con la que puedes contactar directamente o por medio de comentarios, algo que te vendrá muy bien para resolver dudas o saber cómo se hacen ciertas cosas.','www.elhacker.net','../../img/blogs/14.JPG'),(15,'State X','Blog personal de Albert Sanchez, que si bien lleva un par de años rondando en la red y publica prácticamente a diario, creo que aun no ha tenido suficiente difusión (o a lo mejor sí XD). En cualquier caso, es otro blog en el que podrás aprender sobre técnicas básicas de ataque, así como también, algunos artículos sobre Python en los que el autor habla de sus “andaduras” con este lenguaje.','infostatex.blogspot.com.es','../../img/blogs/15.JPG'),(16,'Securit CRS','Un blog de noticias muy interesante en el que te habla de las principales tendencias en lo relacionado a actividades maliciosas, cibercrimen y otros temas de actualidad. La forma en la que el autor relata cada artículo es simplemente genial, os recomiendo su lectura','securitcrs.wordpress.com','../../img/blogs/16.JPG'),(17,'Dadme un punto de Red y moveré el mundo!!','Se trata de un blog que data del año 2007 y aunque últimamente ha tenido pocas publicaciones, hay algunos artículos interesantes sobre seguridad informática y administración de servidores.','monimandarina.blogspot.com.es','../../img/blogs/17.JPG'),(18,'Penny of Security','La primera entrada que leí de este blog, me pareció tan entretenida que desde entonces sigo pendiente de nuevas publicaciones. Lleva poco tiempo en circulación (poco menos de un año) pero tiene muy buena pinta de cara al futuro de sus contenidos. Os recomiendo seguir su evolución, en unos años puede ser un espacio informativo muy bueno. ','pennyofsecurity.blogspot.com.es','../../img/blogs/18.JPG'),(19,'Backtrack Academy','Sitio donde puedes encontrar cursos gratis/pagados,foros, artículos y noticias del mundo del hacking. Su creador es Felipe Barrios.','backtrackacademy.com/blog','../../img/blogs/19.JPG'),(20,'securityartwork','Sitio donde puedes encontrar articulos de diversos autores y tematicas diversas como por ejemplo; Ciberseguridad industrial, Continuidad de Negocio, Cumplimiento, Eventos, Formación y concienciación, Gestión, Herramientas, I+D, Inteligencia, IoT, Noticias, Seg. Desarrollo, Seg. Física, Seguridad TI.','securityartwork.es','../../img/blogs/20.JPG'),(21,'ReYDeS','Blogs muy bueno, con bastantes articulos de hacking, recomendable 100%','www.reydes.com/d/?q=blog','../../img/blogs/21.JPG');
/*!40000 ALTER TABLE `blogsec` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `clave` varchar(45) default NULL,
  `direccion` varchar(45) default NULL,
  `comuna` varchar(45) default NULL,
  `telefono` varchar(45) default NULL,
  PRIMARY KEY  (`idclientes`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'admin','admin','av. algo','puente alto','677787543'),(2,'asyrv','asyrv','gran avenida','el bosque','32221245'),(3,'user','password','americo vespucio','la cisterna','43237789');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL auto_increment,
  `usuario` varchar(45) default NULL,
  `com` varchar(700) default NULL,
  `fecha` varchar(12) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` VALUES (1,'Anonymous','Happy Hacking','18 Jan 2018');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `empleados` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `salario` int(11) default NULL,
  `edad` int(11) default NULL,
  `foto` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Pablo Neruda',320800,69,'fotos/1.jpg'),(2,'Gabriela Mistral',170750,67,'fotos/2.jpg'),(3,'Violeta Parra',86000,49,'fotos/3.png'),(4,'San Alberto Hurtado',433060,51,'fotos/4.jpg'),(5,'Manuel Rodríguez',162700,33,'fotos/5.jpg'),(6,'Arturo Prat',372000,31,'fotos/6.jpg'),(7,'Lautaro',137500,23,'fotos/7.jpg'),(8,'Víctor Jara',327900,40,'fotos/8.jpg'),(9,'José Miguel Carrera',205500,35,'fotos/9.jpg'),(10,'Salvador Allende',103600,65,'fotos/10.jpg');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `futurama`
--

DROP TABLE IF EXISTS `futurama`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `futurama` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `descripcion` varchar(1000) NOT NULL,
  `url` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `futurama`
--

LOCK TABLES `futurama` WRITE;
/*!40000 ALTER TABLE `futurama` DISABLE KEYS */;
INSERT INTO `futurama` VALUES (1,'Philip J. Fry','Philip J. Fry (normalmente conocido como Fry) es el protagonista de Futurama, la serie de animación para televisión creada por Matt Groening, creador de Los Simpson. Fry es un joven repartidor de pizza en el año 1999 que, por accidente, cae en una cámara criogénica y queda congelado por espacio de 1.000 años. Se despierta en el año 2999 y, después de conocer a Leela y Bender, empieza a trabajar como repartidor en la empresa de mensajería interplanetaria Planet Express. Sobrevivió a un infarto.','../../img/futu/jfry.jpg'),(2,'Turanga Leela','Turanga Leela [/tu\'ranga \'lila/] conocida como Leela es un personaje de la serie animada Futurama, mutante de alcantarilla, capitana de Planet Express.\nPhilip J. Fry, personaje principal de la serie, está enamorado de ella. Su voz es doblada al inglés por Katey Sagal.\nLeela creció en un orfanato, desconociendo información relativa a sus padres, origen o especie.\nSe unió a la sociedad humana como una extraterrestre, aunque si no fuera por su ojo podría pasar como una humana normal. Su esqueleto contiene 205 huesos.\nDebido a que tiene un solo ojo, carece de la visión estereoscópica y por lo tanto tiene problemas con la percepción de profundidad, a pesar de esto no parece tener ninguna dificultad pilotando la nave de Planet Express.','../../img/futu/leela.jpg'),(3,'Bender Doblador Rodríguez ','Bender Bending Rodríguez (Bender Doblador Rodríguez en la versión española de la serie; Bender Doblador Soto y Bender B. Rodríguez en Hispanoamérica) es un personaje de Futurama.Es el mejor amigo de Fry, y el cocinero de Planet Express. Fue fabricado en Tijuana, México, en el año 2997 (según el capítulo 3ACV01 - Amazonas con ganas). Existe un robot idéntico a él, salvo por una barbilla negra: Flexo. Aparece en cuatro capítulos, en uno es un amigo inseparable de Bender, mientras que en el otro se llevan bastante mal.','../../img/futu/bender.jpg'),(4,'Doctor Zoidberg','El Doctor John A. Zoidberg, normalmente conocido como Doctor Zoidberg es un personaje de ficción de la serie de televisión Futurama. Zoidberg es el médico de la empresa Planet Express.\n\nEs un alienígena parecido a una langosta procedente del planeta Decapod 10. Zoidberg combina características de varias criaturas marinas, escabulléndose de lado como un cangrejo, expulsando tinta como un pulpo o calamar, y creando perlas en su tracto digestivo como las ostras. Su ciclo de vida es bastante interesante: reúne las características de distintos animales marinos. Desde su nacimiento, las etapas larvarias de su especie, según la forma en que rejuvenece en un capítulo, tienen las características de: Una esponja marina, un gusano tubícola, una estrella de mar, un erizo de mar, un pez sapo, una lamprea, una almeja, un cangrejo herradura y una sepia.','../../img/futu/zoidberg.jpg');
/*!40000 ALTER TABLE `futurama` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(45) default NULL,
  `clave` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3'),(2,'asyrv','2ed02d8b06f83c0071eac77e0ec2f5a2'),(3,'user','25890deab1075e916c06b9e1efc2e25f');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-05 10:29:32
