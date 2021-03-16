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

-- Dumping data for table sipnie_db.subcategorias: ~0 rows (approximately)
/*!40000 ALTER TABLE `subcategorias` DISABLE KEYS */;
INSERT INTO `subcategorias` (`id`, `categoria_id`, `nombre`, `alias_1`, `alias_2`, `alias_3`) VALUES
	(1, 1, 'Adaptador', 'Conector', 'Transformador', ''),
	(2, 1, 'Cable-Extension', 'Cable USB', 'HDMI', 'Cable Impresora'),
	(3, 1, 'Candado', '', '', ''),
	(4, 1, 'Encapsulador', '', '', ''),
	(5, 2, 'Aire Acondicionado', 'AC', '', ''),
	(6, 2, 'Ventilador', 'Abanico', '', ''),
	(7, 3, 'CPU-Torre', 'cpu', 'Cajón', ''),
	(9, 3, 'Portátil', 'Laptop', '', ''),
	(10, 3, 'MiniPC', '', '', ''),
	(11, 3, 'Servidor', 'Server', '', ''),
	(12, 4, 'Dron', 'Drone', '', ''),
	(13, 5, 'Extensión Eléctrica', '', '', ''),
	(14, 5, 'Regleta', 'Toma', '', ''),
	(15, 5, 'Regulador Voltaje', 'Regulador', '', ''),
	(16, 5, 'UPS-Batería', 'Ups', 'Batería', ''),
	(17, 6, 'Electrica', '', '', ''),
	(18, 6, 'Manual', '', '', ''),
	(19, 7, 'Consumible', 'Cartucho', 'Tinta', 'Filamento'),
	(20, 7, 'Impresora 3D', '', '', ''),
	(21, 7, 'Inyeccion de Tinta', 'Inyeccion', '', ''),
	(22, 7, 'Laser', '', '', ''),
	(23, 7, 'Matriz', '', '', ''),
	(24, 7, 'Multifuncional', '', '', ''),
	(25, 7, 'Plotter', '', '', ''),
	(26, 8, 'Celular', 'Smartphone', 'Telefono', ''),
	(27, 8, 'Tableta', 'Tablet', '', ''),
	(28, 9, 'Archivador', 'Archivo', '', ''),
	(29, 9, 'Escritorio', '', '', ''),
	(30, 9, 'Extintor', 'Extinguidor', '', ''),
	(31, 9, 'Mesa', '', '', ''),
	(32, 9, 'Silla', '', '', ''),
	(33, 10, 'CajonCPU', 'Case', '', ''),
	(34, 10, 'Disco Duro', 'HDD', '', ''),
	(35, 10, 'DVD/CD', 'Quemador', 'Quemadora', ''),
	(36, 10, 'Enfriamiento', 'Abanico', 'Ventilador', 'Cooling'),
	(37, 10, 'FuentePoder', 'Fuente', '', ''),
	(38, 10, 'Procesador', '', '', ''),
	(39, 10, 'Memoria ', '', '', ''),
	(40, 10, 'Tarjeta Audio', '', '', ''),
	(41, 10, 'Tarjeta Madre', '', '', ''),
	(42, 10, 'Tarjeta Red', '', '', ''),
	(43, 10, 'Tarjeta Video', '', '', ''),
	(44, 11, 'Audifonos', '', '', ''),
	(45, 11, 'Disco Duro Externo', '', '', ''),
	(46, 11, 'Cámara', '', '', ''),
	(47, 11, 'CD/DVD Externo', 'Quemador', '', ''),
	(48, 11, 'Escaner', 'Scanner', 'Scaner', 'Lector'),
	(49, 11, 'Memoria USB', 'llave', '', ''),
	(50, 11, 'Microfono', '', '', ''),
	(51, 11, 'Monitor', '', '', ''),
	(52, 11, 'Mouse', '', '', ''),
	(53, 11, 'Parlantes', '', '', ''),
	(54, 11, 'TabletaDibujo', '', '', ''),
	(55, 11, 'Teclado', '', '', ''),
	(56, 11, 'Webcam', '', '', ''),
	(57, 12, 'Equipo Audio', '', '', ''),
	(58, 12, 'ControlRemoto', '', '', ''),
	(59, 12, 'Pantalla-TV', '', '', ''),
	(60, 12, 'Pizarra Inteligente', 'Pizarra', '', ''),
	(61, 12, 'Proyector', '', '', ''),
	(62, 13, 'Accesorio Red', '', '', ''),
	(63, 13, 'Cable Red', '', '', ''),
	(64, 13, 'Firewall Fisico', '', '', ''),
	(65, 13, 'Gabinete', '', '', ''),
	(66, 13, 'Hub', '', '', ''),
	(67, 13, 'Rack', '', '', ''),
	(68, 13, 'Router', '', '', ''),
	(69, 13, 'switch', '', '', ''),
	(70, 14, 'Arduino', '', '', ''),
	(71, 14, 'Lego', '', '', ''),
	(72, 14, 'Motores', '', '', ''),
	(73, 14, 'Rasberry Pi', '', '', ''),
	(74, 14, 'Sensores', '', '', ''),
	(75, 14, 'Prototipado', '', '', '');
/*!40000 ALTER TABLE `subcategorias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
