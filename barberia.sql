-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2016 a las 04:48:42
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barberia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberia`
--

DROP TABLE IF EXISTS `barberia`;
CREATE TABLE `barberia` (
  `Cod_barberia` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `GeoX` longtext NOT NULL,
  `GeoY` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barberia`
--

INSERT INTO `barberia` (`Cod_barberia`, `Nombre`, `Direccion`, `Telefono`, `Ciudad`, `GeoX`, `GeoY`) VALUES
('1234', 'lolos', 'cra fff', '3569878', 'Itagui', '', ''),
('1254', 'mon', 'cra fff', '3659871', 'Itagui', '', ''),
('564654', 'Barber Garage', 'cra 55#61-25', '2811731', 'Medellin', '6.172801655990832', '-75.61102353036404');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barberia`
--
ALTER TABLE `barberia`
  ADD PRIMARY KEY (`Cod_barberia`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
