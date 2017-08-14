-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-08-2017 a las 21:23:27
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `municipalidad_bd_2.0`
--
DROP DATABASE `municipalidad_bd_2.0`;
CREATE DATABASE IF NOT EXISTS `municipalidad_bd_2.0` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `municipalidad_bd_2.0`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--
-- Creación: 09-08-2017 a las 00:05:26
--

CREATE TABLE `asignaciones` (
  `Cod_Dep` varchar(10) NOT NULL,
  `Cod_Cargo` varchar(10) NOT NULL,
  `Id_Empleado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `asignaciones`
--

INSERT INTO `asignaciones` (`Cod_Dep`, `Cod_Cargo`, `Id_Empleado`) VALUES
('D-001', 'C-001', '0318-1986-07654'),
('D-001', 'C-002', '0314-1999-00123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--
-- Creación: 09-08-2017 a las 00:05:25
--

CREATE TABLE `cargos` (
  `Cod_Cargo` varchar(10) NOT NULL,
  `Nom_Cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`Cod_Cargo`, `Nom_Cargo`) VALUES
('C-001', 'Jefe'),
('C-002', 'Asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--
-- Creación: 09-08-2017 a las 00:05:25
--

CREATE TABLE `departamentos` (
  `Cod_Dep` varchar(10) NOT NULL,
  `Nom_Dep` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`Cod_Dep`, `Nom_Dep`) VALUES
('D-001', 'Administracion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--
-- Creación: 09-08-2017 a las 00:05:26
--

CREATE TABLE `empleados` (
  `Id_Empleado` varchar(15) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellido1` varchar(50) NOT NULL,
  `Apellido2` varchar(50) NOT NULL,
  `Lugar_Nac` varchar(100) NOT NULL,
  `Fecha_Nac` date NOT NULL,
  `Profesion` varchar(50) NOT NULL,
  `Domicilio` text NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Nombre_Emergencia` varchar(100) NOT NULL,
  `Numero_Emergencia` int(11) NOT NULL,
  `Estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Nombres`, `Apellido1`, `Apellido2`, `Lugar_Nac`, `Fecha_Nac`, `Profesion`, `Domicilio`, `Telefono`, `Fecha_Ingreso`, `Correo`, `Nombre_Emergencia`, `Numero_Emergencia`, `Estado`) VALUES
('0314-1999-00123', 'Leny', 'Avila', 'Ortega', 'Tegucigalpa', '1999-08-08', 'Arquitecto', 'Col. Santa Marta', 97432178, '2013-04-07', 'leny_ortega99@gmail.com', 'Pedro Avila', 33221144, 'Activo'),
('0318-1986-07654', 'Luis David', 'Perdomo', 'Aguilar', 'Comayagua, Comayagua', '1986-12-12', 'Gerente de Negocios', 'B. El Centro, Siguatepeque', 98765447, '2010-12-12', 'luisper_432@gmail.com', 'Marta Perez', 88765432, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--
-- Creación: 14-08-2017 a las 18:18:46
--

CREATE TABLE `historial` (
  `Id_Pago` int(11) NOT NULL,
  `Cod_Dep` varchar(10) NOT NULL,
  `Cod_Cargo` varchar(10) NOT NULL,
  `Id_Empleado` varchar(15) NOT NULL,
  `Sueldo_Base` float NOT NULL,
  `Ded_IHSS` float NOT NULL,
  `Ded_Especiales` float NOT NULL,
  `Salario_Neto` float NOT NULL,
  `Fecha` date NOT NULL,
  `Pago_Extra` float NOT NULL DEFAULT '0',
  `Descripcion_Pago_Extra` varchar(255) NOT NULL DEFAULT 'No Hay'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`Id_Pago`, `Cod_Dep`, `Cod_Cargo`, `Id_Empleado`, `Sueldo_Base`, `Ded_IHSS`, `Ded_Especiales`, `Salario_Neto`, `Fecha`, `Pago_Extra`, `Descripcion_Pago_Extra`) VALUES
(16, 'D-001', 'C-001', '0318-1986-07654', 15000, 1380, 1110, 12510, '2017-08-14', 0, 'No Hay'),
(17, 'D-001', 'C-002', '0314-1999-00123', 9000, 630, 540, 7830, '2017-08-14', 0, 'No Hay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planillas`
--
-- Creación: 09-08-2017 a las 00:05:27
--

CREATE TABLE `planillas` (
  `Cod_Planilla` varchar(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Sueldo_Base` float NOT NULL,
  `Ded_IHSS` float NOT NULL,
  `Ded_Especiales` float NOT NULL,
  `Salario_Neto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planillas`
--

INSERT INTO `planillas` (`Cod_Planilla`, `Descripcion`, `Tipo`, `Sueldo_Base`, `Ded_IHSS`, `Ded_Especiales`, `Salario_Neto`) VALUES
('P-001', 'Jefes', 'C-001', 15000, 9.2, 7.4, 12510),
('P-002', 'Para Asistentes', 'C-002', 9000, 7, 6, 7830);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 09-08-2017 a las 00:05:27
--

CREATE TABLE `usuarios` (
  `Cod_Usuario` varchar(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Id_Empleado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Cod_Usuario`, `Username`, `Pass`, `Tipo`, `Estado`, `Id_Empleado`) VALUES
('U-001', 'Luis Perdomo', 'luis123', 'Administrador', 'Activo', '0318-1986-07654'),
('U-002', 'LenyAvila', '123', 'Estandar', 'Activo', '0314-1999-00123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD KEY `Cod_Dep` (`Cod_Dep`),
  ADD KEY `Cod_Cargo` (`Cod_Cargo`),
  ADD KEY `Id_Empleado` (`Id_Empleado`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`Cod_Cargo`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`Cod_Dep`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`Id_Pago`),
  ADD KEY `Cod_Dep` (`Cod_Dep`),
  ADD KEY `Cod_Cargo` (`Cod_Cargo`),
  ADD KEY `Id_Empleado` (`Id_Empleado`);

--
-- Indices de la tabla `planillas`
--
ALTER TABLE `planillas`
  ADD PRIMARY KEY (`Cod_Planilla`),
  ADD KEY `Tipo` (`Tipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Cod_Usuario`),
  ADD KEY `Id_Empleado` (`Id_Empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `Id_Pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`Cod_Dep`) REFERENCES `departamentos` (`Cod_Dep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`Cod_Cargo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignaciones_ibfk_3` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`Cod_Dep`) REFERENCES `departamentos` (`Cod_Dep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`Cod_Cargo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_3` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `planillas`
--
ALTER TABLE `planillas`
  ADD CONSTRAINT `planillas_ibfk_1` FOREIGN KEY (`Tipo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
