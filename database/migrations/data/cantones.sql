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

# -- Dumping structure for table select_db.cantones
# CREATE TABLE IF NOT EXISTS `cantones` (
#   `id` smallint(5) unsigned NOT NULL COMMENT 'código de cantón, 3 dígitos: 1 de provincia y 2 de canton',
#   `provincia_id` tinyint(3) unsigned NOT NULL,
#   `canton_nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
#   PRIMARY KEY (`id`),
#   KEY `cantones_provincia_id_foreign` (`provincia_id`),
#   CONSTRAINT `cantones_provincia_id_foreign` FOREIGN KEY (`provincia_id`) REFERENCES `provincias` (`id`)
# ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table select_db.cantones: ~0 rows (approximately)
/*!40000 ALTER TABLE `cantones` DISABLE KEYS */;
INSERT INTO `cantones` (`id`, `provincia_id`, `canton_nombre`) VALUES
	(101, 1, 'San José'),
	(102, 1, 'Escazú'),
	(103, 1, 'Desamparados'),
	(104, 1, 'Puriscal'),
	(105, 1, 'Tarrazú'),
	(106, 1, 'Aserrí'),
	(107, 1, 'Mora'),
	(108, 1, 'Goicoechea'),
	(109, 1, 'Santa Ana'),
	(110, 1, 'Alajuelita'),
	(111, 1, 'Vasquez de Coronado'),
	(112, 1, 'Acosta'),
	(113, 1, 'Tibás'),
	(114, 1, 'Moravia'),
	(115, 1, 'Montes de Oca'),
	(116, 1, 'Turrubares'),
	(117, 1, 'Dota'),
	(118, 1, 'Curridabat'),
	(119, 1, 'Pérez Zeledón'),
	(120, 1, 'León Cortés'),
	(201, 2, 'Alajuela'),
	(202, 2, 'San Ramón'),
	(203, 2, 'Grecia'),
	(204, 2, 'San Mateo'),
	(205, 2, 'Atenas'),
	(206, 2, 'Naranjo'),
	(207, 2, 'Palmares'),
	(208, 2, 'Poás'),
	(209, 2, 'Orotina'),
	(210, 2, 'San Carlos'),
	(211, 2, 'Alfaro Ruiz'),
	(212, 2, 'Valverde Vega'),
	(213, 2, 'Upala'),
	(214, 2, 'Los Chiles'),
	(215, 2, 'Guatuso'),
	(216, 2, 'Río Cuarto'),
	(301, 3, 'Cartago'),
	(302, 3, 'Paraíso'),
	(303, 3, 'La Unión'),
	(304, 3, 'Jiménez'),
	(305, 3, 'Turrialba'),
	(306, 3, 'Alvarado'),
	(307, 3, 'Oreamuno'),
	(308, 3, 'El Guarco'),
	(401, 4, 'Heredia'),
	(402, 4, 'Barva'),
	(403, 4, 'Santo Domingo'),
	(404, 4, 'Santa Bárbara'),
	(405, 4, 'San Rafael'),
	(406, 4, 'San Isidro'),
	(407, 4, 'Belén'),
	(408, 4, 'Flores'),
	(409, 4, 'San Pablo'),
	(410, 4, 'Sarapiquí '),
	(501, 5, 'Liberia'),
	(502, 5, 'Nicoya'),
	(503, 5, 'Santa Cruz'),
	(504, 5, 'Bagaces'),
	(505, 5, 'Carrillo'),
	(506, 5, 'Cañas'),
	(507, 5, 'Abangares'),
	(508, 5, 'Tilarán'),
	(509, 5, 'Nandayure'),
	(510, 5, 'La Cruz'),
	(511, 5, 'Hojancha'),
	(601, 6, 'Puntarenas'),
	(602, 6, 'Esparza'),
	(603, 6, 'Buenos Aires'),
	(604, 6, 'Montes de Oro'),
	(605, 6, 'Osa'),
	(606, 6, 'Quepos'),
	(607, 6, 'Golfito'),
	(608, 6, 'Coto Brus'),
	(609, 6, 'Parrita'),
	(610, 6, 'Corredores'),
	(611, 6, 'Garabito'),
	(701, 7, 'Limón'),
	(702, 7, 'Pococí'),
	(703, 7, 'Siquirres '),
	(704, 7, 'Talamanca'),
	(705, 7, 'Matina'),
	(706, 7, 'Guácimo');
/*!40000 ALTER TABLE `cantones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
