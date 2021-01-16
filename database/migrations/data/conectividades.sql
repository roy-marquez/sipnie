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

/*!40000 ALTER TABLE `conectividades` DISABLE KEYS */;
INSERT INTO `conectividades` ( `tipo_conexion`,`velocidad_max_mbps` ) VALUES
	('Indefinida', 0),
	('Fibra óptica', 10),
	('Fibra óptica', 20),
	('Fibra óptica', 45),
	('Fibra óptica', 75),
	('Fibra óptica', 100),
	('Cable módem', 10),
	('Cable módem', 20),
	('Cable módem', 50),
	('Cable módem', 100),
    ('Inalámbrico', 10),
    ('Inalámbrico', 20),
    ('Inalámbrico', 50),
    ('Inalámbrico', 100);
/*!40000 ALTER TABLE `conectividades` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
