-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2017 a las 02:09:23
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `municipalidad_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `Cod_Cargo` int(11) NOT NULL COMMENT 'Código del cargo',
  `Nom_Cargo` varchar(50) NOT NULL COMMENT 'Nombre de cargo',
  PRIMARY KEY (`Cod_Cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`Cod_Cargo`, `Nom_Cargo`) VALUES
(201, 'Alcalde'),
(202, 'Vicealcalde'),
(203, 'Jefe de Departamento'),
(204, 'Secretario/a'),
(205, 'Asistente'),
(206, 'Aseador/a'),
(207, 'Vigilante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_emp`
--

CREATE TABLE IF NOT EXISTS `cargos_emp` (
  `Cod_CE` int(11) NOT NULL COMMENT 'Código de relación entre cargo y empleado',
  `Cod_Cargo` int(11) NOT NULL COMMENT 'Codigo de cargo',
  `ID_Empleado` varchar(15) NOT NULL COMMENT 'Identidad del empleado',
  PRIMARY KEY (`Cod_CE`),
  KEY `Cod_Cargo` (`Cod_Cargo`),
  KEY `ID_Empleado` (`ID_Empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargos_emp`
--

INSERT INTO `cargos_emp` (`Cod_CE`, `Cod_Cargo`, `ID_Empleado`) VALUES
(1, 201, '0318-1975-00012'),
(2, 202, '0314-1980-00128'),
(3, 203, '0318-1989-08421'),
(4, 203, '0321-1993-12345'),
(5, 203, '0318-1995-00123'),
(6, 205, '0321-1994-00581');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `Cod_Dep` int(11) NOT NULL COMMENT 'Código de deparatamento',
  `Nom_Dep` text NOT NULL COMMENT 'Nombre de departamento',
  PRIMARY KEY (`Cod_Dep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`Cod_Dep`, `Nom_Dep`) VALUES
(101, 'Administracion'),
(102, 'Contabilidad'),
(103, 'Informatica'),
(104, 'Catastro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dep_cargos`
--

CREATE TABLE IF NOT EXISTS `dep_cargos` (
  `Cod_DC` int(11) NOT NULL COMMENT 'Código de relación entre departamento y cargo',
  `Cod_Dep` int(11) NOT NULL COMMENT 'Código de departamento',
  `Cod_Cargo` int(11) NOT NULL COMMENT 'Código de cargo',
  PRIMARY KEY (`Cod_DC`),
  KEY `Cod_Dep` (`Cod_Dep`),
  KEY `Cod_Cargo` (`Cod_Cargo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dep_cargos`
--

INSERT INTO `dep_cargos` (`Cod_DC`, `Cod_Dep`, `Cod_Cargo`) VALUES
(1, 101, 201),
(2, 101, 202),
(3, 101, 203),
(4, 101, 204),
(5, 102, 203),
(6, 102, 204),
(7, 103, 203),
(8, 103, 205);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `ID_Empleado` varchar(15) NOT NULL COMMENT 'Numero de identidad ',
  `Nombres` varchar(100) NOT NULL COMMENT 'Primeros nombres ',
  `Apellido1` varchar(50) NOT NULL COMMENT 'Apellido paterno',
  `Apellido2` varchar(50) NOT NULL COMMENT 'Apellido materno',
  `Lugar_Nacimiento` varchar(100) NOT NULL COMMENT 'Lugar de nacimiento',
  `Fecha_Nacimiento` date NOT NULL COMMENT 'Fecha de nacimiento',
  `Profesion` varchar(50) NOT NULL COMMENT 'Profesión o grado de estudio',
  `Domicilio` varchar(100) NOT NULL COMMENT 'Dirección de domiciio',
  `Telefono` int(20) NOT NULL COMMENT 'Numero de telefono',
  `Fecha_Ingreso` date NOT NULL COMMENT 'Fecha en la que ingreso a la empresa',
  `Correo` varchar(100) NOT NULL COMMENT 'Direccion de correo electronico',
  `Nombre_Emergencia` varchar(100) NOT NULL COMMENT 'Nombre de persona a quien acudir en caso de emergencia',
  `Numero_Emergencia` int(11) NOT NULL COMMENT 'Numero de persona a la cual llamar en caso de emergencia',
  PRIMARY KEY (`ID_Empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_Empleado`, `Nombres`, `Apellido1`, `Apellido2`, `Lugar_Nacimiento`, `Fecha_Nacimiento`, `Profesion`, `Domicilio`, `Telefono`, `Fecha_Ingreso`, `Correo`, `Nombre_Emergencia`, `Numero_Emergencia`) VALUES
('0314-1980-00128', 'Marilin Alba', 'Maldonado', 'Garcia', 'Tegucigalpa', '1980-12-21', 'Lic. Administracion de Empresas', 'B. El Centro, Siguatepeque', 93282984, '2017-01-02', 'marialba332@yahoo.es', 'Marcos Castillo', 92374923),
('0318-1975-00012', 'Antonio Rafael', 'Perez', 'Muñoz', 'Siguatepeque', '1975-09-14', 'Lic. Administracion de Empresas', 'B. San Miguel, Siguatepeque', 99873459, '2017-01-01', 'rafantony@yahoo.es', 'Estela Muñoz', 34649834),
('0318-1989-08421', 'Elmer Josue', 'Cantillanos', '', 'Comayagua', '1989-09-21', 'Ing. Industrial', 'B. El Parnaso, Siguatepeque', 34567892, '2017-02-23', 'elmerjos983@hotmail.com', 'David Muñoz', 98523573),
('0318-1995-00123', 'Maria', 'Lopez', 'Peñalba', 'Comayagua', '1995-02-24', 'Lic. Gerencia de Negocios', 'B. El Centro, Siguatepeque', 99887766, '2017-01-03', 'marialopen@gmail.com', 'Luis Peñalba', 99778866),
('0321-1993-12345', 'Lucas Daniel', 'Pineda', 'Erazo', 'Taulabe', '1993-04-21', 'Ing. Sistemas', 'B. San Juan, Siguatepeque', 33445566, '2017-02-22', 'lucaserazo@gmail.com', 'Oscar Erazo', 33442211),
('0321-1994-00581', 'Angela', 'Gomez', 'Cantarero', 'Taulabe', '1994-07-28', 'Tec. Computacion', 'Col. Mata, Siguatepeque', 87532839, '2017-03-13', 'angelgom@gmail.com', 'Marta Gomez', 99634818);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_em`
--

CREATE TABLE IF NOT EXISTS `pagos_em` (
  `Cod_Pago` int(11) NOT NULL COMMENT 'Código de pago realizado',
  `Cod_DC` int(11) NOT NULL COMMENT 'Codigo de relacion entre departamento y cargo',
  `Cod_CE` int(11) NOT NULL COMMENT 'Codigo de relacion entre cargo y empleado',
  `Cod_Rem` int(11) NOT NULL COMMENT 'Codigo de remuneracion',
  `Fecha_Pago` date NOT NULL COMMENT 'Fecha en la que se realizo el pago',
  PRIMARY KEY (`Cod_Pago`),
  KEY `Cod_DC` (`Cod_DC`),
  KEY `Cod_CE` (`Cod_CE`),
  KEY `Cod_Rem` (`Cod_Rem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagos_em`
--

INSERT INTO `pagos_em` (`Cod_Pago`, `Cod_DC`, `Cod_CE`, `Cod_Rem`, `Fecha_Pago`) VALUES
(1, 1, 1, 1201, '2017-01-25'),
(2, 2, 2, 1202, '2017-01-25'),
(3, 3, 5, 1203, '2017-01-25'),
(4, 4, 4, 1203, '2017-01-25'),
(5, 5, 3, 1203, '2017-01-25'),
(6, 7, 4, 1203, '2017-01-25'),
(7, 8, 6, 1204, '2017-01-25'),
(8, 1, 1, 1201, '2017-02-25'),
(9, 2, 2, 1202, '2017-02-25'),
(10, 1, 1, 1201, '2017-03-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remuneraciones`
--

CREATE TABLE IF NOT EXISTS `remuneraciones` (
  `Cod_Rem` int(11) NOT NULL COMMENT 'Codigo de remuneracion',
  `Sueldo` double(10,2) NOT NULL COMMENT 'Sueldo base del empleado',
  `Ded_Especiales` double(10,2) NOT NULL COMMENT 'Deducciones especiales',
  `IHSS` double(10,2) NOT NULL COMMENT 'Deduccion por seguro social',
  `Ded_Retraso` double(10,2) NOT NULL COMMENT 'Deduccion por retraso a la hora de llegada',
  `Salario_Neto` double(10,2) NOT NULL COMMENT 'Salario con sus deducciones aplicadas',
  PRIMARY KEY (`Cod_Rem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `remuneraciones`
--

INSERT INTO `remuneraciones` (`Cod_Rem`, `Sueldo`, `Ded_Especiales`, `IHSS`, `Ded_Retraso`, `Salario_Neto`) VALUES
(1201, 50000.00, 1500.00, 300.00, 0.00, 48500.00),
(1202, 27000.00, 810.00, 300.00, 0.00, 25890.00),
(1203, 15000.00, 450.00, 300.00, 0.00, 14250.00),
(1204, 9280.00, 278.40, 300.00, 9.66, 8692.00);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cargos_emp`
--
ALTER TABLE `cargos_emp`
  ADD CONSTRAINT `cargos_emp_ibfk_1` FOREIGN KEY (`Cod_Cargo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cargos_emp_ibfk_2` FOREIGN KEY (`ID_Empleado`) REFERENCES `empleados` (`ID_Empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `dep_cargos`
--
ALTER TABLE `dep_cargos`
  ADD CONSTRAINT `dep_cargos_ibfk_1` FOREIGN KEY (`Cod_Dep`) REFERENCES `departamentos` (`Cod_Dep`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dep_cargos_ibfk_2` FOREIGN KEY (`Cod_Cargo`) REFERENCES `cargos` (`Cod_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos_em`
--
ALTER TABLE `pagos_em`
  ADD CONSTRAINT `pagos_em_ibfk_1` FOREIGN KEY (`Cod_DC`) REFERENCES `dep_cargos` (`Cod_DC`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagos_em_ibfk_2` FOREIGN KEY (`Cod_CE`) REFERENCES `cargos_emp` (`Cod_CE`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pagos_em_ibfk_3` FOREIGN KEY (`Cod_Rem`) REFERENCES `remuneraciones` (`Cod_Rem`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
