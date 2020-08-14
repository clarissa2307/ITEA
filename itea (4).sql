-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 04:29:32
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
  `fecha` date NOT NULL,
  `correo` varchar(55) NOT NULL,
  `estudio` varchar(55) NOT NULL,
  `calle` varchar(55) NOT NULL,
  `ext` int(50) NOT NULL,
  `inte` int(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `localidad` varchar(55) NOT NULL,
  `colonia` varchar(55) NOT NULL,
  `telefono` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `educando`
--

INSERT INTO `educando` (`id_educando`, `nombre`, `apellidop`, `apellidom`, `curp`, `edad`, `genero`, `fecha`, `correo`, `estudio`, `calle`, `ext`, `inte`, `municipio`, `localidad`, `colonia`, `telefono`) VALUES
(36, 'Benjamine', 'Salamanca', 'Rojas', 'SARM010723MTLLJRA6', 21, 'Hombre', '2020-08-28', 'Marthaleo07@gmail.com', 'Alfabetizacion', 'bahia', 4, 2, 'Huamantla', 'Huamantla', 'xico', '(247) 122-');

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
  `passa` varchar(55) NOT NULL,
  `passu` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellidopaterno`, `apellidmaterno`, `correo`, `passa`, `passu`, `rol`) VALUES
(1, 'martha', 'sala', 'rojas', 'd@gmail.com', '1234', '', 1),
(43, 'martha', 'SALA', 'ROJA', 'martha2307', '', '1234', 2),
(44, 'Martha', 'Salamanca', 'Clarissa', 'me783787@gmail.com', '', '123', 2),
(48, 'ivan', 'salamanca', 'rojas', 'azul2307', '', '123', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `educando`
--
ALTER TABLE `educando`
  ADD PRIMARY KEY (`id_educando`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `educando`
--
ALTER TABLE `educando`
  MODIFY `id_educando` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
