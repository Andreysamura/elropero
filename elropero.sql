-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para elropero
CREATE DATABASE IF NOT EXISTS `elropero` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci */;
USE `elropero`;

-- Volcando estructura para tabla elropero.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `id_registro` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_ropa` bigint(20) NOT NULL,
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `talla` decimal(10,2) DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `cantidad` bigint(20) DEFAULT NULL,
  `precio_compra` decimal(10,2) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id_registro`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla elropero.producto: ~9 rows (aproximadamente)
INSERT INTO `producto` (`id_registro`, `cod_ropa`, `modelo`, `talla`, `tipo`, `precio`, `cantidad`, `precio_compra`, `fecha_registro`) VALUES
	(3, 2222, 'Camiseta', 28.00, 'Deportivo', 50.00, 148, 200.00, '2022-08-02'),
	(4, 3333, 'Short de Playa', 25.00, 'Playa', 50.00, 100, 150.00, '2022-08-03'),
	(5, 4444, 'Playera Polo', 30.00, 'Casual', 120.00, 220, 150.00, '2022-08-04'),
	(6, 5555, 'Jogger ', 32.00, 'Urbano', 140.00, 250, 180.00, '2022-08-06'),
	(7, 6666, 'Camisa', 32.00, 'Formal', 150.00, 299, 100.00, '2022-08-07'),
	(8, 7777, 'Camisa Levis', 32.00, 'Escolar', 150.00, 350, 160.00, '2022-08-08'),
	(9, 8888, 'Chaqueta', 38.00, 'Urbano', 200.00, 400, 120.00, '2022-08-09'),
	(10, 9999, 'Blusas ', 25.00, 'Casual', 60.00, 150, 250.00, '2022-08-20');

-- Volcando estructura para tabla elropero.venta
CREATE TABLE IF NOT EXISTS `venta` (
  `id_venta` bigint(20) NOT NULL AUTO_INCREMENT,
  `cod_ropa` bigint(20) DEFAULT NULL,
  `nombre_cliente` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL DEFAULT '',
  `modelo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `tipo` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `talla` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `cantidad` bigint(20) DEFAULT NULL,
  `total_pr` bigint(20) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  PRIMARY KEY (`id_venta`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- Volcando datos para la tabla elropero.venta: ~0 rows (aproximadamente)

-- Volcando estructura para disparador elropero.venta_calzado
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';
DELIMITER //
CREATE TRIGGER `venta_calzado` AFTER INSERT ON `venta`
 FOR EACH ROW BEGIN 
	update producto set cantidad = cantidad-new.cantidad  where cod_ropa = new.cod_ropa;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
