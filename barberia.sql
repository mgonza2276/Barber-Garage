-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2016 a las 18:43:51
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barberia`
--
CREATE DATABASE IF NOT EXISTS `barberia` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `barberia`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberia`
--

CREATE TABLE `barberia` (
  `Cod_barberia` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Ciudad` varchar(50) NOT NULL,
  `GeoX` longtext NOT NULL,
  `GeoY` longtext NOT NULL,
  `Hora_inicio` time NOT NULL,
  `Hora_fin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barberia`
--

INSERT INTO `barberia` (`Cod_barberia`, `Nombre`, `Direccion`, `Telefono`, `Ciudad`, `GeoX`, `GeoY`, `Hora_inicio`, `Hora_fin`) VALUES
('4589', 'victor', 'calle 63 a ', '126658', 'itagui', '6.2412769883680035', '-75.57147234678268', '12:00:00', '20:00:00'),
('5899', 'Babilonia', 'calle 88', '45454545', 'caldas', '', '', '10:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberia_servicio`
--

CREATE TABLE `barberia_servicio` (
  `Cod_barberia` varchar(50) NOT NULL,
  `Id_servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `Cod_cita` int(11) NOT NULL,
  `Fecha` varchar(50) NOT NULL,
  `Hora` varchar(30) NOT NULL,
  `Minutos` varchar(2) NOT NULL,
  `Formato` varchar(2) NOT NULL,
  `Servicio` varchar(50) NOT NULL,
  `Barbero` varchar(50) NOT NULL,
  `Id_Usuario` varchar(50) NOT NULL,
  `Cod_barberia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`Cod_cita`, `Fecha`, `Hora`, `Minutos`, `Formato`, `Servicio`, `Barbero`, `Id_Usuario`, `Cod_barberia`) VALUES
(25, 'Lunes, 1 Agosto, 2016', '2', '00', 'am', 'corte', 'jorge lopez', 'pepe', '5899');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cita`
--

CREATE TABLE `detalle_cita` (
  `Id_detalle_cita` varchar(50) NOT NULL,
  `Cod_cita` int(11) NOT NULL,
  `Id_servicio` varchar(50) NOT NULL,
  `Id_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Cod_empleado` int(11) NOT NULL,
  `Cod_barberia` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Cod_empleado`, `Cod_barberia`, `Nombre`) VALUES
(3, '5899', 'Alfonso Marin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `Id_servicio` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` varchar(50) NOT NULL,
  `Duracion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`Id_servicio`, `Nombre`, `Precio`, `Duracion`) VALUES
('147', 'depilada', '2000', '50 min'),
('303', 'barba', '3000', '1 hora'),
('4545', 'corte', '5000', '30min'),
('5623', 'peinar', '7500', '20 min');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` varchar(50) NOT NULL,
  `Clave` varchar(50) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
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
('caliche', 'caliche22', '45612365', 'carlos arturo', 'css', '2562425', '1452368952', 'ca@gmail.com', 'Usuario'),
('chombo', 'chombo58', '1478536', 'juan camilo', 'ca56', '2365897', '2813698258', 'ch@gmail.com', 'Administrador'),
('j.andres', '123', '78784543', 'andres uribe', 'calle 63 a n 58', '78745454', '212454545', 'j.andres@hotmail.com', 'Administrador'),
('luigi', 'l78', '456454', 'fernei castro', 'calle 28', '78745100', '14545787', 'luigi@gmail.com', 'Administrador'),
('mango', 'mangomango', '5655645', 'mango', 'calle 65', '4785412', '1236547896', 'mg@hotmail.com', 'Usuario'),
('norguys', 'norguys123456', '7847541212', 'estiven monsalve', 'calle 22', '4564545', '1478521478', 'nor@gmail.com', 'Empleado'),
('papo', 'p14', '4787871', 'omar andres', 'calle 45 b', '4878454', '4545212', 'papo@hotmail.com', 'Empleado'),
('pepe', 'pepe2', '7845123', 'pepe sanchez', 'calle 55', '87874541', '897845152', 'pepes@hotmail.com', 'Usuario'),
('poli', 'poli789', '454541', 'julian valencia', 'calle58', '2563142', '1236547896', 'jv@hotmail.com', 'Usuario'),
('vato', 'vato357', '789456123', 'jose luis chilavert', 'callejon', '2589632', '1231231231', 'di@hotmail.com', 'Administrador'),
('yayo', 'y23', '157874512', 'jorge lopez', 'calle 87', '5454545212', '54878454', 'yayo@gmail.com', 'Empleado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barberia`
--
ALTER TABLE `barberia`
  ADD PRIMARY KEY (`Cod_barberia`);

--
-- Indices de la tabla `barberia_servicio`
--
ALTER TABLE `barberia_servicio`
  ADD PRIMARY KEY (`Cod_barberia`,`Id_servicio`),
  ADD KEY `Id_servicio` (`Id_servicio`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Cod_cita`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Usuario_2` (`Id_Usuario`),
  ADD KEY `Cod_barberia` (`Cod_barberia`);

--
-- Indices de la tabla `detalle_cita`
--
ALTER TABLE `detalle_cita`
  ADD PRIMARY KEY (`Id_detalle_cita`),
  ADD KEY `Cod_cita` (`Cod_cita`),
  ADD KEY `Id_servicio` (`Id_servicio`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Cod_empleado`),
  ADD KEY `Cod_barberia` (`Cod_barberia`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`Id_servicio`);

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
  MODIFY `Cod_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Cod_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `barberia_servicio`
--
ALTER TABLE `barberia_servicio`
  ADD CONSTRAINT `barberia_servicio_ibfk_1` FOREIGN KEY (`Id_servicio`) REFERENCES `servicio` (`Id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `barberia_servicio_ibfk_2` FOREIGN KEY (`Cod_barberia`) REFERENCES `barberia` (`Cod_barberia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`Id_Usuario`) REFERENCES `usuario` (`Id_usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalle_cita`
--
ALTER TABLE `detalle_cita`
  ADD CONSTRAINT `detalle_cita_ibfk_2` FOREIGN KEY (`Id_servicio`) REFERENCES `servicio` (`Id_servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_cita_ibfk_3` FOREIGN KEY (`Cod_cita`) REFERENCES `citas` (`Cod_cita`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Cod_barberia`) REFERENCES `barberia` (`Cod_barberia`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
