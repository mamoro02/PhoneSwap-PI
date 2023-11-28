-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 12:33:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `phoneswap`
--

-- --------------------------------------------------------

drop database if exists phoneswap;

CREATE DATABASE phoneswap;

USE phoneswap;
--
-- Estructura de tabla para la tabla `cliente`
--

drop table if exists cliente;

CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL,
  `nombreCuenta` varchar(30) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `contraseña` varchar(15) DEFAULT NULL,
  `nombreCliente` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nombreCuenta`, `correo`, `contraseña`, `nombreCliente`, `apellido`, `telefono`) VALUES
(1, 'cafema', 'carlos@gmail.com', '1234', 'Carlos', 'Ferrer', 622723498);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--
drop table if exists marca;

CREATE TABLE `marca` (
  `idMarca` int(11) NOT NULL,
  `nombreMarca` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`idMarca`, `nombreMarca`) VALUES
(1, 'Huawei'),
(2, 'Apple'),
(3, 'Samsung'),
(4, 'Xiaomi'),
(5, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--
drop table if exists modelo;
CREATE TABLE `modelo` (
  `idModelo` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `precioActual` float DEFAULT NULL,
  `megaPixeles` varchar(10) DEFAULT NULL,
  `ram` varchar(10) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `resolucion` varchar(10) DEFAULT NULL,
  `cincoG` tinyint(1) DEFAULT NULL,
  `dobleSim` tinyint(1) DEFAULT NULL,
  `velocidadCpu` varchar(10) DEFAULT NULL,
  `capacidad` varchar(10) DEFAULT NULL,
  `tipoCpu` varchar(20) DEFAULT NULL,
  `dimensiones` varchar(15) DEFAULT NULL,
  `sistemaOperativo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`idModelo`, `marca`, `descripcion`, `modelo`, `precioActual`, `megaPixeles`, `ram`, `imagen`, `resolucion`, `cincoG`, `dobleSim`, `velocidadCpu`, `capacidad`, `tipoCpu`, `dimensiones`, `sistemaOperativo`) VALUES
(1, 1, 'P30 Lite', 'p30Lite', 349.99, '48 MP', '4 GB', 'p30Lite.png', '1080 x 231', 1, 1, '2.2 GHz', '128 GB', 'Kirin 710', '152.9 x 72.7 x ', 'Android'),
(2, 1, 'P40', 'p40', 599.99, '50 MP', '6 GB', 'p40.png', '1080 x 234', 1, 1, '2.86 GHz', '128 GB', 'Kirin 990 5G', '148.9 x 71.1 x ', 'Android'),
(3, 1, 'P40 Lite', 'p40Lite', 299.99, '48 MP', '6 GB', 'p40Lite.png', '1080 x 231', 1, 1, '2.27 GHz', '128 GB', 'Kirin 810', '159.2 x 76.3 x ', 'Android'),
(4, 1, 'P40 Pro', 'p40pro', 899.99, '50 MP', '8 GB', 'p40pro.png', '1200 x 264', 1, 1, '2.86 GHz', '256 GB', 'Kirin 990 5G', '158.2 x 72.6 x ', 'Android'),
(5, 1, 'P50', 'p50', 1199.99, '50 MP', '8 GB', 'p50.png', '1224 x 270', 1, 1, '3.13 GHz', '256 GB', 'Kirin 9000', '156.7 x 74 x 8.', 'Android'),
(6, 1, 'Smartphone de alta gama', 'P40 Lite', 399.99, '64 MP', '6 GB', 'p40Lite.png', '1080 x 231', 1, 0, '2.27 GHz', '128 GB', 'Kirin 810', '159.2 x 76.3 x ', 'Android 10, EMU'),
(7, 1, 'Smartphone de alta gama', 'P40 Lite', 399.99, '64 MP', '6 GB', 'p40Lite.png', '1080 x 231', 1, 0, '2.27 GHz', '128 GB', 'Kirin 810', '159.2 x 76.3 x ', 'Android 10, EMU'),
(8, 1, 'Smartphone de alta gama', 'P40', 599.99, '50 MP', '8 GB', 'p40.png', '1080 x 234', 1, 1, '2.86 GHz', '128 GB', 'Kirin 990 5G', '148.9 x 71.1 x ', 'Android 10, EMU'),
(9, 1, 'Smartphone de alta gama', 'P40 Pro', 799.99, '50 MP', '8 GB', 'p40pro.png', '1200 x 264', 1, 1, '2.86 GHz', '256 GB', 'Kirin 990 5G', '158.2 x 72.6 x ', 'Android 10, EMU'),
(10, 1, 'Smartphone de alta gama', 'P50', 899.99, '50 MP', '8 GB', 'p50.png', '1224 x 270', 1, 1, '2.84 GHz', '128 GB', 'Kirin 9000 5G', '156.7 x 74 x 8.', 'Android 11, Har'),
(11, 2, 'iPhone 13', 'iPhone 13', 999.99, '12', '6GB', 'iphone13.png', '1080p', 1, 0, '2.5GHz', '256GB', 'A14 Bionic', '146.7 x 71.5 x ', 'iOS 15'),
(12, 2, 'iPhone 14', 'iPhone 14', 1199.99, '14', '8GB', 'iphone14.png', '1440p', 1, 0, '3.0GHz', '512GB', 'A16 Bionic', '150.9 x 75.7 x ', 'iOS 16'),
(13, 2, 'iPhone SE', 'iPhone SE', 499.99, '12', '4GB', 'iphonese.png', '720p', 1, 0, '2.3GHz', '128GB', 'A13 Bionic', '138.4 x 67.3 x ', 'iOS 15'),
(14, 2, 'iPhone 13 Mini', 'iPhone 13 Mini', 799.99, '12', '6GB', 'iphone13mini.png', '1080p', 1, 0, '2.5GHz', '256GB', 'A14 Bionic', '131.5 x 64.2 x ', 'iOS 15'),
(15, 2, 'iPhone X', 'iPhone X', 599.99, '12', '3GB', 'iphonex.png', '1080p', 0, 0, '2.39GHz', '64GB', 'A11 Bionic', '143.6 x 70.9 x ', 'iOS 11'),
(16, 2, 'iPhone XR', 'iPhone XR', 699.99, '12', '4GB', 'iphonexr.png', '720p', 0, 0, '2.49GHz', '128GB', 'A12 Bionic', '150.9 x 75.7 x ', 'iOS 12'),
(17, 2, 'iPhone 14 Pro', 'iPhone 14 Pro', 1499.99, '16', '12GB', 'iphone14pro.png', '2160p', 1, 1, '3.5GHz', '1TB', 'A16 Bionic', '150.5 x 74.7 x ', 'iOS 16'),
(18, 2, 'iPhone 12', 'iPhone 12', 799.99, '12', '4GB', 'iphone12.png', '1080p', 1, 0, '2.4GHz', '128GB', 'A14 Bionic', '146.7 x 71.5 x ', 'iOS 14'),
(19, 2, 'iPhone 14 Pro Max', 'iPhone 14 Pro Max', 1799.99, '16', '12GB', 'iphone14pro.png', '2160p', 1, 1, '3.5GHz', '2TB', 'A16 Bionic', '160.8 x 78.1 x ', 'iOS 16.5'),
(20, 3, 'Galaxy Z Flip', 'Galaxy Z Flip', 1099.99, '12', '8GB', 'samsungZflip.png', '1080 x 263', 1, 1, '2.95 GHz', '256GB', 'Qualcomm Snapdragon ', '87.4 x 73.6 x 1', 'Android 10'),
(21, 3, 'Galaxy S23 Ultra', 'Galaxy S23 Ultra', 1599.99, '108', '16GB', 'samsungGalaxyS23Ultra.png', '1440 x 320', 1, 1, '2.9 GHz', '512GB', 'Exynos 2200', '164.6 x 73.4 x ', 'Android 13'),
(22, 3, 'Galaxy S23 Plus', 'Galaxy S23 Plus', 1399.99, '108', '12GB', 'samsungGalaxyS23Plus.png', '1440 x 320', 1, 1, '2.9 GHz', '256GB', 'Exynos 2200', '164.6 x 73.4 x ', 'Android 13'),
(23, 3, 'Galaxy S22', 'Galaxy S22', 999.99, '64', '8GB', 'samsungGalaxyS22.png', '1080 x 240', 1, 1, '2.4 GHz', '128GB', 'Exynos 2100', '151.7 x 71.2 x ', 'Android 12'),
(24, 3, 'Galaxy S21 FE', 'Galaxy S21 FE', 699.99, '64', '6GB', 'samsungGalaxyS21Fe.png', '1080 x 240', 1, 1, '2.4 GHz', '128GB', 'Qualcomm Snapdragon ', '160.9 x 73.2 x ', 'Android 11'),
(25, 5, 'Smartphone sin igual', 'NothingPhone', 899.99, '108 MP', '8 GB', 'nothingPhone.png', '1440 x 320', 1, 0, '2.84 GHz', '256 GB', 'Qualcomm Snapdragon ', '163.7 x 76.4 x ', 'Android 11'),
(26, 3, 'Innovación tecnológica', 'Honor Magic 5', 799.99, '64 MP', '6 GB', 'honormagic5.png', '1080 x 240', 1, 0, '2.6 GHz', '128 GB', 'Kirin 990', '157.2 x 73.2 x ', 'Android 10'),
(27, 5, 'La bestia de Poco', 'Poco X5', 549.99, '48 MP', '6 GB', 'pocoX5.png', '1080 x 240', 1, 1, '2.3 GHz', '128 GB', 'Qualcomm Snapdragon ', '164.2 x 76.5 x ', 'Android 11'),
(28, 5, 'Potencia y estilo', 'Realme Narzo 50A', 199.99, '50 MP', '4 GB', 'realmeNarzo50A.png', '720 x 1600', 0, 1, '2.0 GHz', '64 GB', 'MediaTek Helio G85', '164.5 x 75.9 x ', 'Android 11'),
(29, 4, 'Smartphone de alta gama', 'Poco F4 GT', 599.99, '64 MP', '8 GB', 'PocoF4GT.png', '1080', 1, 1, '2.8GHz', '256GB', 'Snapdragon 870', '163.7 x 76.4 x ', 'Android 11'),
(30, 4, 'Smartphone de alta gama', 'Poco X5 5G', 399.99, '48 MP', '6 GB', 'PocoX55G.png', '1080', 1, 1, '2.0GHz', '128GB', 'Mediatek Helio G85', '164.2 x 75.9 x ', 'Android 11'),
(31, 4, 'Smartphone de gama media', 'Redmi 10 (2022)', 199.99, '50 MP', '4 GB', 'Redmi102022.png', '1080', 1, 1, '2.0GHz', '64GB', 'Mediatek Helio G88', '161.2 x 75.6 x ', 'Android 11'),
(32, 4, 'Smartphone de alta gama', 'Redmi Note 11 Pro+ 5G', 899.99, '108 MP', '12 GB', 'RedmiNote11Pro+5G.png', '1080', 1, 1, '3.0GHz', '512GB', 'Snapdragon 870', '164.2 x 75.9 x ', 'Android 11'),
(33, 4, 'Smartphone de gama media', 'Redmi Note 12', 349.99, '64 MP', '4 GB', 'RedmiNote12.png', '1080', 1, 1, '2.5GHz', '128GB', 'Mediatek Helio G96', '161.1 x 75.2 x ', 'Android 11'),
(34, 4, 'Redmi Note 13 Pro', 'Redmi Note 13 Pro', 499.99, '108 MP', '12 GB', 'RedmiNote13Pro.png', '1080p', 1, 1, '2.5GHz', '512 GB', 'Snapdragon 888+', '163.9 x 75.7 x ', 'Android 13'),
(35, 4, 'Xiaomi Mi Mix 4', 'Mi Mix 4', 1299.99, '108 MP', '16 GB', 'XiaomiMiMix4.png', '1440p', 1, 1, '3.2GHz', '1 TB', 'Snapdragon 898', '165.4 x 75.5 x ', 'Android 13'),
(36, 4, 'Xiaomi Mi 13 Lite', 'Mi 13 Lite', 399.99, '64 MP', '6 GB', 'XiaomiMi13Lite.png', '1080p', 1, 1, '2.3GHz', '128 GB', 'Snapdragon 778G', '160.5 x 75.7 x ', 'Android 12'),
(37, 4, 'Xiaomi Poco F5', 'Poco F5', 449.99, '64 MP', '8 GB', 'PocoF5.png', '1080p', 1, 1, '2.8GHz', '256 GB', 'Snapdragon 870', '160.6 x 75.5 x ', 'Android 12'),
(38, 4, 'Redmi Note 13', 'Redmi Note 13', 299.99, '48 MP', '4 GB', 'RedmiNote13.png', '720p', 1, 1, '2.0GHz', '64 GB', 'Mediatek Helio G88', '161.9 x 75.2 x ', 'Android 12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movil`
--
drop table if exists movil;
CREATE TABLE `movil` (
  `numSerie` varchar(30) NOT NULL,
  `idModelo` int(11) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `precioVenta` float DEFAULT NULL,
  `fechaVenta` date DEFAULT NULL,
  `comentarios` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movil`
--

INSERT INTO `movil` (`numSerie`, `idModelo`, `idCliente`, `precioVenta`, `fechaVenta`, `comentarios`) VALUES
('AEI45CMR1BX', 22, NULL, NULL, NULL, NULL),
('AUB85AJY7YE', 10, NULL, NULL, NULL, NULL),
('AVV87SQT4GV', 3, NULL, NULL, NULL, NULL),
('BFK53LSP0MX', 14, NULL, NULL, NULL, NULL),
('BHD92ORI1XX', 20, NULL, NULL, NULL, NULL),
('BHR23HCJ6JS', 17, NULL, NULL, NULL, NULL),
('BJY10ZMP5MR', 21, NULL, NULL, NULL, NULL),
('BOI84PCW0VX', 29, NULL, NULL, NULL, NULL),
('BOX60QTB0NH', 25, NULL, NULL, NULL, NULL),
('BPJ59RZQ6CX', 32, NULL, NULL, NULL, NULL),
('BSJ52QPS6EM', 20, NULL, NULL, NULL, NULL),
('BXL48SIO8QU', 12, NULL, NULL, NULL, NULL),
('BYG59SNC7SO', 28, NULL, NULL, NULL, NULL),
('BYQ48VND6KT', 33, NULL, NULL, NULL, NULL),
('CBD57GYO7HZ', 32, NULL, NULL, NULL, NULL),
('CEP35BJV0RL', 24, NULL, NULL, NULL, NULL),
('CGK05FTV1JJ', 24, NULL, NULL, NULL, NULL),
('CKU51GYR6ET', 19, NULL, NULL, NULL, NULL),
('CLI27NAR0EL', 17, NULL, NULL, NULL, NULL),
('CLN91RNR0NI', 20, NULL, NULL, NULL, NULL),
('CNJ17LWN4NS', 30, NULL, NULL, NULL, NULL),
('CTG12EFO4GN', 34, NULL, NULL, NULL, NULL),
('CYO52UGK0QV', 1, NULL, NULL, NULL, NULL),
('CYY84XWX4MQ', 2, NULL, NULL, NULL, NULL),
('DLM28HPW1AE', 28, NULL, NULL, NULL, NULL),
('DMX38WGY5QD', 10, NULL, NULL, NULL, NULL),
('DPO48WDR0JU', 35, NULL, NULL, NULL, NULL),
('DRN51GJF4CW', 12, NULL, NULL, NULL, NULL),
('DTH88HRX6UE', 20, NULL, NULL, NULL, NULL),
('DVL78TAN3GN', 33, NULL, NULL, NULL, NULL),
('DXN22LKL4TN', 6, NULL, NULL, NULL, NULL),
('EHL67CVX6SI', 35, NULL, NULL, NULL, NULL),
('EIP95BSY6PS', 8, NULL, NULL, NULL, NULL),
('EWJ96MYD7HR', 7, NULL, NULL, NULL, NULL),
('EXJ91SVR9YC', 11, NULL, NULL, NULL, NULL),
('FBL26VKD2QK', 23, NULL, NULL, NULL, NULL),
('FCI99XRG4EB', 26, NULL, NULL, NULL, NULL),
('FEG54KNO3CS', 8, NULL, NULL, NULL, NULL),
('FGV32GJY4PU', 18, NULL, NULL, NULL, NULL),
('FHW34ECM7TS', 26, NULL, NULL, NULL, NULL),
('FOD24NXC7BX', 3, NULL, NULL, NULL, NULL),
('FPW88RJH1RO', 4, NULL, NULL, NULL, NULL),
('FQE19ZHG8HX', 24, NULL, NULL, NULL, NULL),
('FXP61KGP2PI', 19, NULL, NULL, NULL, NULL),
('FXX23GJX8QY', 9, NULL, NULL, NULL, NULL),
('GCZ29IVG0HE', 37, NULL, NULL, NULL, NULL),
('GKY77REC6OX', 15, NULL, NULL, NULL, NULL),
('GOR33EGM1MF', 1, NULL, NULL, NULL, NULL),
('GTO14IGF1PN', 24, NULL, NULL, NULL, NULL),
('GUQ94QVL6VP', 9, NULL, NULL, NULL, NULL),
('GVC14UWY5WS', 18, NULL, NULL, NULL, NULL),
('GVO41PQI6DL', 22, NULL, NULL, NULL, NULL),
('GYS28JBQ8HP', 25, NULL, NULL, NULL, NULL),
('GZY54IRU4CF', 20, NULL, NULL, NULL, NULL),
('HCT78HEF7YI', 19, NULL, NULL, NULL, NULL),
('HFO28ZYE6BM', 6, NULL, NULL, NULL, NULL),
('HHR84RHT4EH', 19, NULL, NULL, NULL, NULL),
('HJL48SEI7HV', 7, NULL, NULL, NULL, NULL),
('HOD39NMQ1PH', 4, NULL, NULL, NULL, NULL),
('HRN24WSO3GH', 32, NULL, NULL, NULL, NULL),
('HVK42NCU3VN', 3, NULL, NULL, NULL, NULL),
('IEN91XBW3PV', 24, NULL, NULL, NULL, NULL),
('INC31PVK9EI', 24, NULL, NULL, NULL, NULL),
('ISO51CBH4HG', 30, NULL, NULL, NULL, NULL),
('IUE84TRZ6GG', 35, NULL, NULL, NULL, NULL),
('IWO31PHI2EW', 29, 1, NULL, NULL, NULL),
('IYD12BMF8IV', 31, NULL, NULL, NULL, NULL),
('JEC83CAM7EK', 28, NULL, NULL, NULL, NULL),
('JOG44WFZ4YM', 36, NULL, NULL, NULL, NULL),
('JQW36ANY1LQ', 4, NULL, NULL, NULL, NULL),
('JRQ54UJK1KH', 4, NULL, NULL, NULL, NULL),
('JSH73SCT7HV', 34, NULL, NULL, NULL, NULL),
('JSP63UYJ5HG', 10, NULL, NULL, NULL, NULL),
('JTL83TYJ1MP', 15, NULL, NULL, NULL, NULL),
('JYD43DYY3JG', 2, NULL, NULL, NULL, NULL),
('JYJ36TEL4JL', 18, NULL, NULL, NULL, NULL),
('KEJ42WSD4PH', 12, NULL, NULL, NULL, NULL),
('KHG85MGU6HN', 18, NULL, NULL, NULL, NULL),
('KIC23XFP5TW', 1, NULL, NULL, NULL, NULL),
('KKO28AUG6HQ', 38, NULL, NULL, NULL, NULL),
('KOJ67FPV0WH', 3, NULL, NULL, NULL, NULL),
('KPS82JZE5RB', 19, NULL, NULL, NULL, NULL),
('KQU55YWN4EW', 22, NULL, NULL, NULL, NULL),
('KRD11ONQ6WI', 25, NULL, NULL, NULL, NULL),
('KSI39VJL0PR', 37, NULL, NULL, NULL, NULL),
('KTQ33NVY4OX', 17, NULL, NULL, NULL, NULL),
('KZW83JUS9QR', 8, NULL, NULL, NULL, NULL),
('LFE34MEK7HH', 27, 1, NULL, NULL, NULL),
('LGZ42MDS6DA', 6, NULL, NULL, NULL, NULL),
('LHP62OPI5NW', 3, NULL, NULL, NULL, NULL),
('LHY23KHN4NH', 34, NULL, NULL, NULL, NULL),
('LIM93IIU4MS', 3, NULL, NULL, NULL, NULL),
('LVO15PLW3UL', 5, NULL, NULL, NULL, NULL),
('MOH98XNK1SS', 22, NULL, NULL, NULL, NULL),
('MPG32OCE6JU', 29, NULL, NULL, NULL, NULL),
('MQH63CTG6EX', 22, NULL, NULL, NULL, NULL),
('MQT23DSP5XC', 29, NULL, NULL, NULL, NULL),
('MUI51YSP7CZ', 15, NULL, NULL, NULL, NULL),
('NBW86BJF3ED', 17, NULL, NULL, NULL, NULL),
('NED46RUG6OU', 28, NULL, NULL, NULL, NULL),
('NGE25FWQ1CC', 20, NULL, NULL, NULL, NULL),
('NHR57BDB1NM', 15, NULL, NULL, NULL, NULL),
('NKH33ATL0SF', 24, NULL, NULL, NULL, NULL),
('NLX57JCN5FJ', 10, NULL, NULL, NULL, NULL),
('NMV46LKK1ZP', 10, NULL, NULL, NULL, NULL),
('NPK53QYZ1OJ', 9, NULL, NULL, NULL, NULL),
('NQU67QQR3GY', 12, NULL, NULL, NULL, NULL),
('NTI57LEN9LV', 15, NULL, NULL, NULL, NULL),
('NVH56HMW2XX', 11, NULL, NULL, NULL, NULL),
('NVK91GQN6KL', 24, NULL, NULL, NULL, NULL),
('NVQ15CFD4EZ', 31, NULL, NULL, NULL, NULL),
('OEA78RGD0RS', 28, NULL, NULL, NULL, NULL),
('OEK24BMN8BT', 19, NULL, NULL, NULL, NULL),
('OEO82STX0AE', 23, NULL, NULL, NULL, NULL),
('OHP08JJV6FP', 34, NULL, NULL, NULL, NULL),
('OHW29PDM7BY', 29, NULL, NULL, NULL, NULL),
('OMC64TPT3UI', 5, NULL, NULL, NULL, NULL),
('OMG66QWO1WO', 15, NULL, NULL, NULL, NULL),
('OSK87BNC8VK', 3, NULL, NULL, NULL, NULL),
('OSU13BCQ2JW', 15, NULL, NULL, NULL, NULL),
('OZQ68VEH8SP', 11, NULL, NULL, NULL, NULL),
('PDW24RYT1RP', 18, NULL, NULL, NULL, NULL),
('PEE85OUY2QR', 29, NULL, NULL, NULL, NULL),
('PKO61BJR7YD', 8, NULL, NULL, NULL, NULL),
('PLU26BWS3SU', 19, NULL, NULL, NULL, NULL),
('PSE63HFJ3MJ', 8, NULL, NULL, NULL, NULL),
('PXP68GOT0XQ', 31, NULL, NULL, NULL, NULL),
('QBZ58NLO0KX', 11, NULL, NULL, NULL, NULL),
('QEY08LES7FW', 4, NULL, NULL, NULL, NULL),
('QSH81JXT0BS', 22, NULL, NULL, NULL, NULL),
('QSS98CPP2EM', 4, NULL, NULL, NULL, NULL),
('QVW40NBL2XW', 13, NULL, NULL, NULL, NULL),
('QYM67VNS0QS', 5, NULL, NULL, NULL, NULL),
('RCR44ISD5SE', 12, NULL, NULL, NULL, NULL),
('RCS77NIM2NF', 9, NULL, NULL, NULL, NULL),
('REJ61RXP4PW', 16, NULL, NULL, NULL, NULL),
('RJT28PYI7HQ', 23, NULL, NULL, NULL, NULL),
('RPD51GYO5EH', 22, NULL, NULL, NULL, NULL),
('RTK65LIP9OS', 2, NULL, NULL, NULL, NULL),
('SAO65GBJ1IA', 14, NULL, NULL, NULL, NULL),
('SDX63PIT4IE', 18, NULL, NULL, NULL, NULL),
('SEG87FTC3ZB', 4, NULL, NULL, NULL, NULL),
('SHD81JRV5NH', 8, NULL, NULL, NULL, NULL),
('SPE10XGV8QI', 8, NULL, NULL, NULL, NULL),
('STD73FAE6EG', 23, NULL, NULL, NULL, NULL),
('SVF87RDH8TE', 34, NULL, NULL, NULL, NULL),
('SXE75MBT7MH', 4, NULL, NULL, NULL, NULL),
('SXS46NRC1QL', 23, NULL, NULL, NULL, NULL),
('TEH81ZVV9UJ', 7, NULL, NULL, NULL, NULL),
('THK63ESG2GO', 11, NULL, NULL, NULL, NULL),
('TIF58WXV7NY', 37, NULL, NULL, NULL, NULL),
('TKK69HWH2UK', 6, NULL, NULL, NULL, NULL),
('TKN47FRB2YT', 38, NULL, NULL, NULL, NULL),
('TOL61HYX0KI', 11, NULL, NULL, NULL, NULL),
('TQG52IIO2UP', 7, NULL, NULL, NULL, NULL),
('TTJ78JHU7OK', 25, NULL, NULL, NULL, NULL),
('TUQ73MLA3DB', 11, NULL, NULL, NULL, NULL),
('TYB67GEG7IT', 10, NULL, NULL, NULL, NULL),
('TZB76YHW5UV', 11, NULL, NULL, NULL, NULL),
('UEW16PXS5EN', 12, NULL, NULL, NULL, NULL),
('UGC24BWQ0SH', 24, NULL, NULL, NULL, NULL),
('UHC77BNG4XW', 10, NULL, NULL, NULL, NULL),
('UIC11PGK4PL', 17, NULL, NULL, NULL, NULL),
('UJI30CWU0NO', 30, NULL, NULL, NULL, NULL),
('UUD27SNY5NA', 20, NULL, NULL, NULL, NULL),
('VGR84NQX2RC', 30, NULL, NULL, NULL, NULL),
('VJN41EYB1GM', 5, NULL, NULL, NULL, NULL),
('VKN77EYB3OE', 26, NULL, NULL, NULL, NULL),
('VKT62JOC8CR', 3, NULL, NULL, NULL, NULL),
('VMC51HMN4BB', 18, NULL, NULL, NULL, NULL),
('VOL26DZW5LI', 22, NULL, NULL, NULL, NULL),
('VPW14OFH3WH', 20, NULL, NULL, NULL, NULL),
('VQM43FIQ8IX', 15, NULL, NULL, NULL, NULL),
('VSJ85TAK8HT', 13, NULL, NULL, NULL, NULL),
('WDF54XFU3UC', 11, NULL, NULL, NULL, NULL),
('WEN38FFU6AI', 17, NULL, NULL, NULL, NULL),
('WFI58FSN5DQ', 20, NULL, NULL, NULL, NULL),
('WHT35TKI3OE', 34, NULL, NULL, NULL, NULL),
('WRC66GCQ0LK', 24, NULL, NULL, NULL, NULL),
('WRP79EUT6DA', 1, NULL, NULL, NULL, NULL),
('WVF65YEK5SU', 36, NULL, NULL, NULL, NULL),
('WWY56YNK3LV', 8, NULL, NULL, NULL, NULL),
('XCI54CNC1YY', 13, NULL, NULL, NULL, NULL),
('XML32PPE7KS', 16, NULL, NULL, NULL, NULL),
('XNO96ZYQ1GM', 16, NULL, NULL, NULL, NULL),
('XWP23MGN1VI', 27, NULL, NULL, NULL, NULL),
('XXD05VJC8CR', 16, NULL, NULL, NULL, NULL),
('YBB21HCO0OV', 22, NULL, NULL, NULL, NULL),
('YCW35BXI1DE', 18, NULL, NULL, NULL, NULL),
('YFP50BSR2HF', 31, NULL, NULL, NULL, NULL),
('YMK57PHC7CB', 34, NULL, NULL, NULL, NULL),
('YMP33JRR7BA', 5, NULL, NULL, NULL, NULL),
('YNR17TGD2MG', 4, NULL, NULL, NULL, NULL),
('YQD23DEW7DC', 34, NULL, NULL, NULL, NULL),
('YSL69FVL2SF', 14, NULL, NULL, NULL, NULL),
('ZEI91GEQ0VZ', 20, NULL, NULL, NULL, NULL),
('ZKB75QOP0SM', 6, NULL, NULL, NULL, NULL),
('ZKI88VBI7WW', 26, NULL, NULL, NULL, NULL),
('ZWL79VAY4YC', 5, NULL, NULL, NULL, NULL),
('ZXM43LDC4BI', 26, 1, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idModelo`),
  ADD KEY `fk_marca` (`marca`);

--
-- Indices de la tabla `movil`
--
ALTER TABLE `movil`
  ADD PRIMARY KEY (`numSerie`),
  ADD KEY `fk_idModelo` (`idModelo`),
  ADD KEY `fk_idCliente` (`idCliente`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_marca` FOREIGN KEY (`marca`) REFERENCES `marca` (`idMarca`);

--
-- Filtros para la tabla `movil`
--
ALTER TABLE `movil`
  ADD CONSTRAINT `fk_idCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `fk_idModelo` FOREIGN KEY (`idModelo`) REFERENCES `modelo` (`idModelo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

