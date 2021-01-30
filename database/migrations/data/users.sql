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

-- Dumping data for table sipnie_db.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `name`, `password`, `apellido1`, `apellido2`, `tipo_doc_id`, `num_doc_id`, `email`, `email_verified_at`, `estado_usuario_id`, `es_funcionario_pnie`, `avatar_ruta`, `celular`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'dev', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'sipnie', '', 1, NULL, 'dev@sipnie.net', NULL, 1, 1, 'dev.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:13:25'),
	(2, 2, 'admin', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'pnie', '', 1, NULL, 'admin@sipnie.net', NULL, 1, 1, 'pnie-administrador.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:13:42'),
	(3, 3, 'ingeniero.pnie', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'pnie', '', 1, NULL, 'ingeniero.pnie@sipnie.net', NULL, 1, 1, 'pnie-ing.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:14:06'),
	(4, 4, 'docente.pnie', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'pnie', NULL, 1, NULL, 'docente.pnie@sipnie.net', NULL, 1, 1, 'pnie-docente.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:14:18'),
	(5, 5, 'docente.cole', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'colegio', NULL, 1, NULL, 'docente.cole@sipnie.net', NULL, 1, 0, 'cole-docente.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:14:48'),
	(6, 6, 'admin.cole', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'colegio', NULL, 1, NULL, 'admin.cole@sipnie.net', NULL, 1, 0, 'cole-admin.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:23:25'),
	(7, 1, 'roy', '$2y$10$bLp3m9dXFkIqheidq03w1umx0LtQ7OPSHyDM3W7eZVqk5wL3lLgty', 'sipnie', NULL, 1, NULL, 'roy@sipnie.net', NULL, 1, 0, 'usuario.png', NULL, NULL, '2021-01-27 21:58:09', '2021-01-28 19:15:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
