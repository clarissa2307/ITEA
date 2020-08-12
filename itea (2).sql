-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2020 a las 01:32:55
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `id_domicilio` int(11) NOT NULL,
  `calle` varchar(55) NOT NULL,
  `ext` int(11) NOT NULL,
  `inte` int(11) NOT NULL,
  `municipio` varchar(55) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `colonia` varchar(55) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `id_educando` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educando`
--

CREATE TABLE `educando` (
  `id_educando` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellidop` varchar(55) NOT NULL,
  `apellidom` varchar(55) NOT NULL,
  `curp` varchar(30) NOT NULL,
  `edad` int(11) NOT NULL,
  `genero` varchar(55) NOT NULL,
  `feche nacimiento` date NOT NULL,
  `correo` varchar(55) NOT NULL,
  `estudio` varchar(55) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellidopaterno` varchar(55) NOT NULL,
  `apellidmaterno` varchar(55) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `passu` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidopaterno`, `apellidmaterno`, `correo`, `pass`, `passu`, `rol`) VALUES
(1, 'martha', 'sala', 'rojas', 'd@gmail.com', '', '1234', 1),
(43, 'martha', 'SALA', 'ROJA', 'martha2307', '1234', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`id_domicilio`),
  ADD UNIQUE KEY `id_educando` (`id_educando`);

--
-- Indices de la tabla `educando`
--
ALTER TABLE `educando`
  ADD PRIMARY KEY (`id_educando`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `id_domicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `educando`
--
ALTER TABLE `educando`
  MODIFY `id_educando` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD CONSTRAINT `domicilio-educando` FOREIGN KEY (`id_educando`) REFERENCES `educando` (`id_educando`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `educando`
--
ALTER TABLE `educando`
  ADD CONSTRAINT `educando-usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
