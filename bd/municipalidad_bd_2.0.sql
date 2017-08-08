-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2017 a las 01:36:54
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `municipalidad_bd_2.0`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaciones`
--

CREATE TABLE IF NOT EXISTS `asignaciones` (
  `Cod_Dep` varchar(10) NOT NULL,
  `Cod_Cargo` varchar(10) NOT NULL,
  `Id_Empleado` varchar(15) NOT NULL,
  KEY `Cod_Dep` (`Cod_Dep`),
  KEY `Cod_Cargo` (`Cod_Cargo`),
  KEY `Id_Empleado` (`Id_Empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `Cod_Cargo` varchar(10) NOT NULL,
  `Nom_Cargo` varchar(100) NOT NULL,
  PRIMARY KEY (`Cod_Cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `Cod_Dep` varchar(10) NOT NULL,
  `Nom_Dep` varchar(100) NOT NULL,
  PRIMARY KEY (`Cod_Dep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
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
  `Estado` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_Empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `Id_Pago` varchar(100) NOT NULL,
  `Cod_Dep` varchar(10) NOT NULL,
  `Cod_Cargo` varchar(10) NOT NULL,
  `Id_Empleado` varchar(15) NOT NULL,
  `Sueldo_Base` float NOT NULL,
  `Ded_IHSS` float NOT NULL,
  `Ded_Especiales` float NOT NULL,
  `Salario_Neto` float NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Descripcion` text NOT NULL,
  KEY `Cod_Dep` (`Cod_Dep`),
  KEY `Cod_Cargo` (`Cod_Cargo`),
  KEY `Id_Empleado` (`Id_Empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planillas`
--

CREATE TABLE IF NOT EXISTS `planillas` (
  `Cod_Planilla` varchar(10) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Sueldo_Base` float NOT NULL,
  `Ded_IHSS` float NOT NULL,
  `Ded_Especiales` float NOT NULL,
  `Salario_Neto` float NOT NULL,
  PRIMARY KEY (`Cod_Planilla`),
  KEY `Tipo` (`Tipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Cod_Usuario` varchar(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Id_Empleado` varchar(15) NOT NULL,
  PRIMARY KEY (`Cod_Usuario`),
  KEY `Id_Empleado` (`Id_Empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignaciones`
--
ALTER TABLE `asignaciones`
  ADD CONSTRAINT `asignaciones_ibfk_3` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`Cod_Dep`) REFERENCES `departamentos` (`Cod_Dep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`Cod_Cargo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_3` FOREIGN KEY (`Id_Empleado`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`Cod_Dep`) REFERENCES `departamentos` (`Cod_Dep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`Cod_Cargo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

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
