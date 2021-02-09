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

-- Dumping data for table sipnie_db.materias: ~22 rows (approximately)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` ( `nombre`, `alias_1`,`alias_2`,`alias_3`) VALUES
    ('_INDEFINIDA', null, null, null),
	('HP','hp','Hewlett-Packard','Hewlett Packard'),
	('DELL', 'Dell', 'dell', null),
	('ZENITH', null, null, null),
	('3COM', '3com', null, null),
	('EPSON', 'Epson', null, null),
	('CASIO', 'Casio', null, null),
	('LOGITECH', 'Logitech', 'LOGI', 'Logi'),
	('FORZA', null, null, null),
    ('D-LINK', 'D-Link', 'd-link', null),
    ('LG', 'lg', null, null),
    ('SEAGATE', 'Seagate', null, null),
    ('MAKITA', null, null, null),
    ('ACER', null, null, null),
    ('CISCO', 'Cisco', null, null),
    ('SONY', 'Sony', null, null),
    ('CDP', null, null, null),
    ('FPC', null, null, null),
    ('NEXXT', 'Nexxt', null, null),
    ('UBIQUITI', 'Ubiquiti', null, null),
    ('MIKROTIK', 'MikroTik', null, null),
    ('TARGUS', null, null, null),
    ('XTECH', 'Xtech', 'xtech', 'X-tech'),
    ('DJI', null, null, null),
    ('ZTE', null, null, null),
    ('IOMEGA', 'Iomega', null, null),
    ('ATEK', 'Atek', null, null),
    ('BROTHER', 'Brother', null, null),
    ('SAMSUNG', 'Samsung', null, null),
    ('LENOVO', 'Lenovo', null, null),
    ('TOA', null, null, null),
    ('VEGA', null, null, null),
    ('GENIUS', 'Genius', null, null),
    ('JP', null, null, null);
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
