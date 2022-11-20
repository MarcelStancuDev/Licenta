-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.18-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for licenta


-- Dumping structure for table licenta.anunturi
CREATE TABLE IF NOT EXISTS `anunturi` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `tipAnunt` varchar(50) DEFAULT NULL,
  `descriere` varchar(250) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table licenta.anunturi: ~2 rows (approximately)

INSERT INTO `anunturi` (`id`, `tipAnunt`, `descriere`, `data`) VALUES
	(5, 'Anunt important', 'Test\r\n', '2021-05-13 13:45:37'),
	(6, 'Test', 'Test', '2021-05-13 13:49:13');
/*!40000 ALTER TABLE `anunturi` ENABLE KEYS */;

-- Dumping structure for table licenta.licenta
CREATE TABLE IF NOT EXISTS `licenta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `moisture` int(20) NOT NULL,
  `time` datetime NOT NULL,
  `idRaspberry` int(10) NOT NULL,
  `nume` varchar(50) NOT NULL,
  `coordGPS` varchar(250) NOT NULL,
  `locatie` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idRaspberry` (`idRaspberry`),
  CONSTRAINT `FK_licenta_raspberry` FOREIGN KEY (`idRaspberry`) REFERENCES `raspberry` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8mb4;


INSERT INTO `licenta` (`id`, `moisture`, `time`, `idRaspberry`, `nume`, `coordGPS`, `locatie`, `status`) VALUES
	(66, 30, '2021-04-05 12:12:52', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(72, 100, '2021-04-05 12:14:57', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(73, 4, '2021-04-05 12:14:59', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(74, 40, '2021-04-05 12:15:02', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(75, 12, '2021-04-05 12:15:05', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(76, 22, '2021-04-05 12:15:15', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(91, 50, '2021-04-07 16:46:28', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(92, 90, '2021-04-12 10:47:19', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(98, 9, '2021-04-19 21:48:26', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(108, 61, '2021-04-28 20:46:09', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(109, 90, '2021-04-29 00:16:09', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(110, 16, '2021-05-06 13:16:26', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(114, 65, '2021-05-11 11:10:38', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(123, 53, '2021-05-11 11:41:35', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(124, 48, '2021-05-11 11:41:45', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(125, 30, '2021-05-11 11:42:02', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(126, 28, '2021-05-11 11:42:12', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(127, 30, '2021-05-21 11:42:12', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(128, 20, '2021-05-21 16:14:08', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(129, 10, '2021-06-03 20:03:04', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(130, 11, '2021-06-03 08:24:59', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(131, 12, '2021-06-03 10:28:41', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(132, 10, '2021-06-06 09:27:41', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(133, 99, '2021-06-06 21:08:41', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(134, 38, '2021-06-07 07:47:43', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(135, 38, '2021-06-07 08:47:48', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(136, 38, '2021-06-07 09:47:53', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(137, 37, '2021-06-07 10:47:58', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(138, 37, '2021-06-07 11:48:03', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(139, 37, '2021-06-07 12:48:08', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(140, 40, '2021-06-07 13:48:13', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(141, 41, '2021-06-07 14:48:18', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(142, 39, '2021-06-07 15:48:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(143, 40, '2021-06-07 16:48:28', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(144, 41, '2021-05-31 09:55:38', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(145, 41, '2021-06-02 08:55:43', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(146, 41, '2021-06-03 09:55:48', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(147, 41, '2021-06-05 07:55:53', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(148, 41, '2021-06-06 08:55:58', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(149, 41, '2021-06-07 09:56:03', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(150, 41, '2021-06-08 10:56:08', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(151, 49, '2021-06-08 11:56:13', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(152, 48, '2021-06-08 15:56:18', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(153, 46, '2021-06-08 13:56:23', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(154, 50, '2021-06-09 14:56:23', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(155, 90, '2021-06-09 15:56:23', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(156, 10, '2021-06-10 21:56:23', 3, 'senzor_umiditate3', '45.1806115,27.336516', 'Tecuci', 'Activ'),
	(157, 30, '2021-06-07 17:56:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(158, 49, '2021-06-07 18:56:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(159, 65, '2021-06-07 20:56:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(160, 51, '2021-06-07 21:56:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(161, 51, '2021-06-07 23:56:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(162, 61, '2021-06-08 00:57:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(163, 57, '2021-06-08 02:56:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(164, 30, '2021-06-08 03:57:23', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(165, 40, '2021-06-08 19:14:50', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(166, 65, '2021-06-08 20:14:53', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(167, 60, '2021-06-08 21:14:56', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(168, 68, '2021-06-08 22:14:59', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(169, 99, '2021-06-11 08:15:02', 2, 'senzor_umiditate2', '45.183648629,28.803718932', 'Tulcea', 'Activ'),
	(170, 42, '2021-06-09 09:01:49', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ'),
	(172, 50, '2021-06-11 09:01:49', 1, 'senzor_umiditate1', '45.413190,28.0290', 'Galati', 'Activ');
/*!40000 ALTER TABLE `licenta` ENABLE KEYS */;

-- Dumping structure for table licenta.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `cpassword` varchar(250) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `biografie` varchar(50) DEFAULT NULL,
  `numeFam` varchar(50) DEFAULT NULL,
  `prenume` varchar(50) DEFAULT NULL,
  `adresa` varchar(50) DEFAULT NULL,
  `oras` varchar(50) DEFAULT NULL,
  `zip` int(8) DEFAULT NULL,
  `statusLogare` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `umiditateMinima` int(3) DEFAULT 20,
  `umiditateMaxima` int(3) DEFAULT 80,
  `notificari` tinyint(1) NOT NULL DEFAULT 1,
  `idSenzor` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table licenta.login: ~9 rows (approximately)

INSERT INTO `login` (`id`, `username`, `email`, `password`, `cpassword`, `created_at`, `biografie`, `numeFam`, `prenume`, `adresa`, `oras`, `zip`, `statusLogare`, `status`, `umiditateMinima`, `umiditateMaxima`, `notificari`, `idSenzor`) VALUES
	(1, 'admin', 'admin@yahoo.com', 'admin', 'admin', '2021-04-27 09:36:51', 'Detalii personale', 'Stancu', 'Marcel', 'Str.Stefan Cel Mare', 'Galati', 807171, 'Inactiv', 'Acceptat', 20, 80, 1, '1:30|90,3:20|60,4:30|100'),
	(12, '123', '123@yahoo.com', '123456', '123456', '2021-04-09 21:00:50', 'asddwefwe', 'asd', 'asd', 'Str.Stefan Cel Mare', 'Galati', 807171, 'Inactiv', 'Acceptat', 20, 80, 1, NULL),
	(17, '1234', '1234@yahoo.com', 'test123', 'test123', '2021-04-16 13:51:33', '-', '1234', '1234', '-', '-', 807171, 'Inactiv', 'Acceptat', 20, 90, 1, '0'),
	(35, 'test', 'test@yahoo.com', 'test123456', 'test123456', '2021-05-25 17:38:43', 'test', 'test', 'test', 'test', 'test', 123455, 'Inactiv', 'Acceptat', 20, 80, 1, NULL),
	(36, 'test', 'test123@yahoo.com', 'test123456', 'test123456', '2021-05-26 14:56:39', '-', 'test123', 'test', '-', '-', 0, NULL, 'Acceptat', 20, 80, 1, NULL),
	(37, 'testare', 'testare@yahoo.com', 'testare', 'testare', '2021-06-04 12:10:08', '-', 'testare', 'testare', '-', '-', 0, 'Inactiv', 'Acceptat', 20, 80, 1, NULL),
	(38, 'client', 'andreinastase@yahoo.com', 'client123', 'client123', '2021-06-09 13:57:15', '-', 'Andrei', 'Nastase', '-', '-', 0, 'Inactiv', 'Acceptat', 20, 80, 1, '1:10|100'),
	(39, 'teste', 'teste@yahoo.com', 'teste123', 'teste123', '2021-06-11 11:23:57', '-', 'teste', 'teste', '-', '-', 0, NULL, 'Dezactivat', 20, 80, 1, NULL),
	(41, 'abcd', 'abcd123@yahoo.com', '123456', '123456', '2021-06-27 19:50:38', '-', 'abcd', 'abcd', '-', '-', 0, 'Inactiv', 'Dezactivat', 20, 80, 1, '1:20|70');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table licenta.raspberry
CREATE TABLE IF NOT EXISTS `raspberry` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nume` varchar(50) NOT NULL,
  `coordGPS` varchar(250) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp(),
  `locatie` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;


INSERT INTO `raspberry` (`id`, `nume`, `coordGPS`, `data`, `locatie`) VALUES
	(1, 'senzor_umiditate1', '45.413190,28.0290', '2021-04-07 13:23:03', 'Galati'),
	(2, 'senzor_umiditate2', '45.183648629,28.803718932', '2021-04-19 10:24:13', 'Tulcea'),
	(3, 'senzor_umiditate3', '45.1806115,27.336516', '2021-06-06 11:59:17', 'Tecuci'),
	(4, 'senzor_umiditate4', '123,123', '2021-06-14 18:20:33', 'Liesti,Galati');
/*!40000 ALTER TABLE `raspberry` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
