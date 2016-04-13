-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2016 a las 23:15:12
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barber_garage`
--
CREATE DATABASE IF NOT EXISTS `barber_garage` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `barber_garage`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberia`
--

DROP TABLE IF EXISTS `barberia`;
CREATE TABLE `barberia` (
  `Cod_barberia` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `Cod_cita` int(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time NOT NULL,
  `Id_usuario` varchar(50) NOT NULL,
  `Cod_barberia` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `Id_servicio` int(50) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Duracion` varchar(100) NOT NULL,
  `Cod_barberia` int(50) NOT NULL,
  `Id_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `Id_usuario` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Celular` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Perfil` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_usuario`, `Clave`, `Cedula`, `Nombre`, `Direccion`, `Telefono`, `Celular`, `Correo`, `Perfil`) VALUES
('carlos', '121313131', '11', 'dfs', '321321', '2313232', 'sdfsdfsd', 'dfsdfsd', 'mgonza12'),
('mgonza12', '1152684915', '1152684915', 'Michael', 'crra 55#61-25', '2811731', '3226612809', 'mygonzalez519@misena.edu.co', 'Administrador'),
('mgonzalez', '21231231', '11', 'dfs', '321321', '2313232', 'sdfsdfsd', 'dfsdfsd', 'Barbero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barberia`
--
ALTER TABLE `barberia`
  ADD PRIMARY KEY (`Cod_barberia`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Cod_cita`),
  ADD KEY `Cod_barberia` (`Cod_barberia`),
  ADD KEY `Cedula` (`Id_usuario`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`Id_servicio`),
  ADD KEY `Cod_barberia` (`Cod_barberia`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `Cod_cita` int(50) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`Cod_barberia`) REFERENCES `barberia` (`Cod_barberia`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`Cod_barberia`) REFERENCES `barberia` (`Cod_barberia`),
  ADD CONSTRAINT `servicio_ibfk_2` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
