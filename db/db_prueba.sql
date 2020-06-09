-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2020 a las 21:55:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `case`
--

CREATE TABLE `case` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  `reason` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `address` varchar(250) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `case`
--

INSERT INTO `case` (`id`, `estado`, `reason`, `address`, `id_user`) VALUES
(3, 1, 'gg', 'aaaa', 12),
(5, 1, 'gg', 'bbbb', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '1',
  `fullname` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `identification` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cellphone` varchar(1250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `estado`, `fullname`, `email`, `identification`, `cellphone`) VALUES
(12, '1', 'Rafael Luckert', 'rafael.luckert@hotmail.com', '1140896453', '3007836737'),
(13, '1', 'Prueba', 'rafael.luckert@hotmail.com', '303030', '3007836737'),
(14, '1', 'Prueba', 'prueba@gmail.com', '11222333', '12344'),
(15, '1', 'Prueba2', 'prueba@gmail.com', '11222333444', '123444');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_fk` (`id_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `case`
--
ALTER TABLE `case`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `case`
--
ALTER TABLE `case`
  ADD CONSTRAINT `case_fk` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
