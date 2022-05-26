-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: final_project
-- ------------------------------------------------------
-- Server version	8.0.24

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
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `content` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `body` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content`
--

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'navigation','{\"logo\":{\"image\":\"assets\\/images\\/1\\/logo.png\",\"link\":\"\\/\",\"alt\":\"logo\"},\"links\":[{\"image\":\"assets\\/images\\/1\\/pets.png\",\"title\":\"Home\",\"href\":\"\\/\",\"anchor\":false},{\"image\":\"assets\\/images\\/1\\/pets-tutorial.png\",\"title\":\"Pets tutorial\",\"href\":\"#Pets-tutorials\",\"anchor\":true},{\"image\":\"assets\\/images\\/1\\/pet-shop.png\",\"title\":\"Goods\",\"href\":\"#Goods\",\"anchor\":true},{\"image\":\"assets\\/images\\/1\\/gallery.png\",\"title\":\"Gallery\",\"href\":\"#Gallery\",\"anchor\":true},{\"image\":\"assets\\/images\\/1\\/review.png\",\"title\":\"Review\",\"href\":\"#Review\",\"anchor\":true},{\"image\":\"assets\\/images\\/1\\/blog.png\",\"title\":\"Blog\",\"href\":\"#Blog\",\"anchor\":true}]}\n'),(2,'banner','{\"slides\":[{\"title\":\"SALE\",\"description\":\"-50% FOR THIS FEED\",\"image\":{\"alt\":\"stock\",\"path\":\"assets\\/images\\/1\\/dog food.png\",\"classes\":\"d-block w-50\"},\"button\":{\"text\":\"Buy now\",\"href\":\"#\",\"is_popup\":true}},{\"title\":\"SALE\",\"description\":\"-30% FOR THIS FEED\",\"image\":{\"alt\":\"stock\",\"path\":\"assets\\/images\\/1\\/cat food.png\",\"classes\":\"d-block w-50\"},\"button\":{\"text\":\"Buy now\",\"href\":\"#\",\"is_popup\":true}},{\"title\":\"SALE\",\"description\":\"-20% FOR THIS FEED\",\"image\":{\"alt\":\"stock\",\"path\":\"assets\\/images\\/1\\/dog-treat.png\",\"classes\":\"d-block w-50\"},\"button\":{\"text\":\"Buy now\",\"href\":\"#\",\"is_popup\":true}}]}'),(3,'pets-tutorials','{\"sides\":{\"left\":{\"link\":\"#\",\"image\":\"assets\\/images\\/1\\/play-button.png\"},\n\"right\":{\"description\":\"If you love your pet,then suggest you follow our videos in which we give tips on caring for your pet\"}}}'),(4,'goods','{\"title\":\"What goods do we have in the store\",\"description\":\"Who are in extremely love with eco friendly dog toys and healthy food\"}'),(5,'gallery','{\"title\":\"What goods do we have in the store\",\"description\":\"Who are in extremely love with eco friendly dog toys and healthy food\",\"gallery\":{\"item-1\":{\"image\":\"assets\\/images\\/2\\/img1.jpg\",\"alt\":\"Image 1\"},\"item-2\":{\"image\":\"assets\\/images\\/2\\/img2.jpg\",\"alt\":\"Image 2\"},\"item-3\":{\"image\":\"assets\\/images\\/2\\/img3.jpg\",\"alt\":\"Image 3\"},\"item-4\":{\"image\":\"assets\\/images\\/2\\/img4.jpg\",\"alt\":\"Image 4\"},\"item-5\":{\"image\":\"assets\\/images\\/2\\/img5.jpg\",\"alt\":\"Image 5\"},\"item-6\":{\"image\":\"assets\\/images\\/2\\/img6.jpg\",\"alt\":\"Image 6\"}}}'),(6,'review','{\"title\":\"What goods do we have in the store\",\"description\":\"Who are in extremely love with eco friendly dog toys and healthy food\",\"review-1\":{\"name\":\"Anna\",\"image\":\"assets\\/images\\/2\\/rating.png\",\"text\":\"Very pleasant staff. Our food is always in stock. Fast shipping. Believe nice.\"},\"review-2\":{\"name\":\"Tim\",\"image\":\"assets\\/images\\/2\\/rating%202.png\",\"text\":\"They give a discount to regular customers and always put some nice treats.\"}}'),(7,'blog','{\"title\":\"What goods do we have in the store\",\"description\":\"Who are in extremely love with eco friendly dog toys and healthy food\",\"blog-1\":{\"image\":\"assets\\/images\\/2\\/blog1.jpg\",\"name\":\"CatDog\",\"text\":\"CatDog are a conjoined flexible cat and dog sibling.Cat is the smarter and more cunning and Dog is the more happy-go-lucky and more naive\",\"data\":\"1 April 2022\"},\"blog-2\":{\"image\":\"assets\\/images\\/2\\/blog2.jpg\",\"name\":\"CatDog\",\"text\":\"CatDog are a conjoined flexible cat and dog sibling.Cat is the smarter and more cunning and Dog is the more happy-go-lucky and more naive.\",\"data\":\"9 April 2022\"}}');
/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `options` text,
  `quantity` int NOT NULL,
  `price` float DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `price` float DEFAULT '0',
  `quantity` int unsigned DEFAULT NULL,
  `description` text NOT NULL,
  `is_option` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Dog food',25,500,'Improves digestion, gives energy, shiny coat and healthy teeth.',0),(2,'Cat food',19,450,'Improves digestion, gives energy, shiny coat and healthy teeth.',0),(3,'Rabbit food',9,399,'Improves digestion, gives energy, shiny coat and healthy teeth.',0),(4,'Toy for dog',11,490,'Нelps to throw out energy and makes your pet tired.',0),(5,'Toy for cat',7,329,'Нelps to throw out energy and makes your pet tired.',0),(6,'Grass for rabbit',4,350,'Gives vitamins and makes the coat softer, also helps to create the illusion of a walk.',0),(7,'Bowl for dog',9,149,'Allows you to drink the dog during a summer walk and keep it in good shape.',0),(8,'Comd for cats',7,201,'Gets rid of unwanted hair during your pet\'s shedding season.',0),(9,'Wheel for a hamster',13,100,'Helps to expend energy, get rid of excess weight and cheer up your hamster.',0),(10,'Delivery',15,500,'null',1),(11,'Bags for poop',5,480,'null',1),(12,'Treats for training',9,600,'null',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `is_admin` tinyint(1) DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `balance` float DEFAULT '0',
  `email` varchar(155) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-05-18 23:51:39
