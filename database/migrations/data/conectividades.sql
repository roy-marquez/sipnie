-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sipnie_db.conectividades: ~0 rows (approximately)
/*!40000 ALTER TABLE `conectividades` DISABLE KEYS */;
INSERT INTO `conectividades` (`id`, `tipo_conexion`, `velocidad_max_mbps`) VALUES
	(1, 'Indefinida', 0),
	(2, 'Fibra óptica', 10),
	(3, 'Fibra óptica', 20),
	(4, 'Fibra óptica', 45),
	(5, 'Fibra óptica', 75),
	(6, 'Fibra óptica', 100),
	(7, 'Cable módem', 10),
	(8, 'Cable módem', 20),
	(9, 'Cable módem', 50),
	(10, 'Cable módem', 100),
	(11, 'Inalámbrico', 10),
	(12, 'Inalámbrico', 20),
	(13, 'Inalámbrico', 50),
	(14, 'Inalámbrico', 100);
/*!40000 ALTER TABLE `conectividades` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
