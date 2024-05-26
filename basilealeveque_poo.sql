-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.2.0 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour basilealeveque_poo
CREATE DATABASE IF NOT EXISTS `basilealeveque_poo` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `basilealeveque_poo`;

-- Listage de la structure de la table basilealeveque_poo. motos
CREATE TABLE IF NOT EXISTS `motos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `type` enum('Enduro','Custom','Sportive','Roadster') NOT NULL,
  `price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table basilealeveque_poo.motos : 4 rows
/*!40000 ALTER TABLE `motos` DISABLE KEYS */;
INSERT INTO `motos` (`id`, `brand`, `model`, `type`, `price`, `image`) VALUES
	(2, 'Kawasaki', 'Ninja ZX-10R', 'Sportive', 16000, 'https://img.freepik.com/photos-gratuite/vue-moto-cool-puissante_23-2150704865.jpg?w=740&t=st=1716647857~exp=1716648457~hmac=3345b622db9c568344494fd152f29198c2926237baf138768e9733bc1bf69dec'),
	(3, 'Harley-Davidson', 'Iron 883', 'Custom', 8999, 'https://img.freepik.com/photos-gratuite/vue-moto-cool-puissante_23-2150704865.jpg?w=740&t=st=1716647857~exp=1716648457~hmac=3345b622db9c568344494fd152f29198c2926237baf138768e9733bc1bf69dec'),
	(4, 'BMW', 'R 1250 GS', 'Enduro', 17495, 'https://img.freepik.com/photos-gratuite/vue-moto-cool-puissante_23-2150704865.jpg?w=740&t=st=1716647857~exp=1716648457~hmac=3345b622db9c568344494fd152f29198c2926237baf138768e9733bc1bf69dec'),
	(5, 'Yamaha', 'MT-07', 'Roadster', 6999, 'https://img.freepik.com/photos-gratuite/vue-moto-cool-puissante_23-2150704865.jpg?w=740&t=st=1716647857~exp=1716648457~hmac=3345b622db9c568344494fd152f29198c2926237baf138768e9733bc1bf69dec');
/*!40000 ALTER TABLE `motos` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
