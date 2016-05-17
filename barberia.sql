-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2016 a las 03:48:11
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

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

CREATE TABLE IF NOT EXISTS `barberia` (
  `Cod_barberia` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Ciudad` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `barberia`
--

INSERT INTO `barberia` (`Cod_barberia`, `Nombre`, `Direccion`, `Telefono`, `Ciudad`) VALUES
('456', 'barberia NY', 'calle 96', '2589656', 'itagui'),
('565', 'afrika', 'calle 88', '78785454', 'medellin'),
('5899', 'Babilonia', 'calle 88', '2222222', 'caldas'),
('896', 'barberia 80', 'crr 80', '1245453', 'itagui');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barberia_servicio`
--

CREATE TABLE IF NOT EXISTS `barberia_servicio` (
  `Cod_barberia` varchar(50) NOT NULL,
  `Id_servicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE IF NOT EXISTS `citas` (
  `Cod_cita` varchar(50) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` varchar(30) NOT NULL,
  `Id_Usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_cita`
--

CREATE TABLE IF NOT EXISTS `detalle_cita` (
  `Id_detalle_cita` varchar(50) NOT NULL,
  `Cod_cita` varchar(50) NOT NULL,
  `Id_servicio` varchar(50) NOT NULL,
  `Id_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `Id_Usuario` varchar(50) NOT NULL,
  `Cod_barberia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `Id_servicio` varchar(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Precio` varchar(50) NOT NULL,
  `Duracion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`Id_servicio`, `Nombre`, `Precio`, `Duracion`) VALUES
('147', 'depilada', '6700', '40 min'),
('303', 'barba', '7000', '1 hora'),
('777', 'corte', '50000', '5 min');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
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
('j.andres', '123', '78784543', 'andres uribe', 'calle 68', '78745454', '212454545', 'j.andres@hotmail.com', 'Administrador'),
('luigi', 'l78', '456454', 'fernei castro', 'calle 28', '78745100', '14545787', 'luigi@gmail.com', 'Administrador'),
('papo', 'p14', '4787871', 'omar andres', 'calle 45 b', '4878454', '4545212', 'papo@hotmail.com', 'Empleado'),
('pepe', 'pepe2', '7845123', 'pepe sanchez', 'calle 55', '87874541', '897845152', 'pepes@hotmail.com', 'Usuario'),
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
  ADD PRIMARY KEY (`Cod_barberia`,`Id_servicio`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`Cod_cita`),
  ADD KEY `Id_Usuario` (`Id_Usuario`),
  ADD KEY `Id_Usuario_2` (`Id_Usuario`);

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
  ADD PRIMARY KEY (`Id_Usuario`,`Cod_barberia`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
