-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sipnie_db.modelos: ~8 rows (approximately)
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` (`id`, `subcategoria_id`, `marca_id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 9, 2, 'HP PROBOOK 450 G6', 'Computadora Laptop', '2021-02-23 21:06:22', '2021-02-23 21:06:22'),
	(2, 11, 3, 'POWER EDGE T140', 'Servidor de Torre', '2021-02-23 21:07:57', '2021-02-23 21:07:57'),
	(3, 61, 6, 'H283A PowerLite S6+', 'Proyector', '2021-02-23 21:10:21', '2021-02-23 21:10:21'),
	(4, 68, 25, 'ZXHN F680', 'Router Inalámbrico', '2021-02-23 21:11:52', '2021-02-23 21:15:20'),
	(5, 12, 24, 'PHANTOM 4 Pro Plus', 'Dron profesional', '2021-02-24 12:46:15', '2021-02-24 12:48:45'),
	(6, 59, 29, 'UN55NU7095GXZS', 'Televisor LED 55" 4K UHD', '2021-02-24 12:51:14', '2021-02-24 12:51:14'),
	(7, 27, 30, 'TB-X505L KIT+OFFICE', 'Sistema Operativo: Android 9.0\r\nTipo de Pantalla: IPS\r\nResolución de pantalla: 1280x800\r\nTamaño de la Pantalla: 10.1 pulgadas\r\nCapacidad de memoria interna: 16 GB\r\nClase Procesador: Qualcomm® Snapdragon™ 429\r\nMegapíxeles en cámara: 5 Megapíxeles\r\nConectividad: Bluetooth, Wi-Fi\r\nConexión USB: Sí\r\nPuertos HDMI: No', '2021-02-24 13:46:47', '2021-02-24 13:46:47'),
	(8, 24, 2, 'HP INK TANK 315', 'Multifuncional HP 315 INK', '2021-02-24 13:49:37', '2021-02-24 13:49:37');
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
