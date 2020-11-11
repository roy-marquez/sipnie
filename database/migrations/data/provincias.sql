-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# -- Dumping structure for table select_db.provincias
# CREATE TABLE IF NOT EXISTS `provincias` (
#   `id` tinyint(3) unsigned NOT NULL COMMENT 'código de provincia de 1 a 7',
#   `provincia_nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'nombre de la provincia',
#   `created_at` timestamp NULL DEFAULT NULL,
#   `updated_at` timestamp NULL DEFAULT NULL,
#   PRIMARY KEY (`id`)
# ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table select_db.provincias: ~7 rows (approximately)
/*!40000 ALTER TABLE `provincias` DISABLE KEYS */;
INSERT INTO `provincias` (`id`, `provincia_nombre`) VALUES
	(1, 'San José'),
	(2, 'Alajuela'),
	(3, 'Cartago'),
	(4, 'Heredia'),
	(5, 'Guancaste'),
	(6, 'Puntarenas'),
	(7, 'Limón');
/*!40000 ALTER TABLE `provincias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
