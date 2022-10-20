-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2022 a las 15:21:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_series`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platform`
--

CREATE TABLE `platform` (
  `id_platform` int(11) NOT NULL,
  `company` varchar(45) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platform`
--

INSERT INTO `platform` (`id_platform`, `company`, `price`) VALUES
(1, 'netflix', 800),
(2, 'hbo', 500),
(3, 'Prime', 400),
(7, 'Disney Plus', 1210);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serie`
--

CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `id_platform_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `serie`
--

INSERT INTO `serie` (`id_serie`, `name`, `genre`, `image`, `id_platform_fk`) VALUES
(25, 'Better Call Saul', 'drama', 'img/series635166f021bce.jpg', 1),
(26, 'Loki', 'accion- fantasia', 'img/series6351670cc9587.jpg', 7),
(27, 'Game of Thrones', 'accion - drama', 'img/series6351674d98a94.jpg', 2),
(28, 'Handmaid\'s tale', 'drama - distopia', 'img/series635167a5ad155.jpg', 2),
(29, 'Peaky Blinders', 'drama', 'img/series635167ee5567f.jpg', 1),
(30, 'Vikings', 'accion-drama', 'img/series635168198a3cf.jpg', 1),
(31, 'Silicon Valley', 'comedia', 'img/series6351682f51d5f.jpg', 2),
(32, 'Breaking Bad', 'drama', 'img/series635168dc7f144.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `email`, `password`) VALUES
(1, 'javierse9@gmail.com', '$2y$10$DKyMugeMtJ9gdaKw3U6U8uWoL1WHuDp/6/TQxOqgeKz0ZYgnVb6c.'),
(2, 'javierondicol84@gmail.com', '$2y$10$M2STCmVS0sGpkirKuJLrb.be8CMUOJ31QJvmLSNUSWEa973e0vMlm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id_platform`);

--
-- Indices de la tabla `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id_serie`),
  ADD KEY `id_platform_fk` (`id_platform_fk`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `platform`
--
ALTER TABLE `platform`
  MODIFY `id_platform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `serie`
--
ALTER TABLE `serie`
  MODIFY `id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `serie`
--
ALTER TABLE `serie`
  ADD CONSTRAINT `id_platform_fk` FOREIGN KEY (`id_platform_fk`) REFERENCES `platform` (`id_platform`),
  ADD CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`id_platform_fk`) REFERENCES `platform` (`id_platform`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
