-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2020 a las 00:31:30
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `shop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabausuarios`
--

CREATE TABLE `tabausuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(2500) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(4000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tabausuarios`
--

INSERT INTO `tabausuarios` (`id`, `nombre`, `usuario`, `password`, `correo`, `foto`) VALUES
(1, 'Raul Garcia', 'Admin', '12345', 'garcia19raul@gmail.com', 'foto.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabausuarios`
--
ALTER TABLE `tabausuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabausuarios`
--
ALTER TABLE `tabausuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
