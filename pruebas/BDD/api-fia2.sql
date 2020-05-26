-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-05-2020 a las 03:19:11
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api-fia2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_user`
--

CREATE TABLE `type_user` (
  `id_type_user` int(11) NOT NULL,
  `type_user` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `type_user`
--

INSERT INTO `type_user` (`id_type_user`, `type_user`, `status`) VALUES
(1, 'Administrador', 2),
(2, 'Promotor', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `password` varchar(275) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Nuevo Usuario',
  `direccion` varchar(250) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'N/A',
  `country` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `state` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `city` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `zip` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `token` varchar(1500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `id_type_user` int(11) NOT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `user`, `direccion`, `country`, `state`, `city`, `zip`, `created`, `modified`, `token`, `id_type_user`, `status`) VALUES
(1, 'Administrador', 'Chilltex', 'administrador@gmail.com', 'b20b0f63ce2ed361e8845d6bf2e59811aaa06ec96bcdb92f9bc0c5a25e83c9a6', 'admin', 'calle el chinguito', 'El salvador', 'San Salvador', 'Santa Tecla', '503', '2020-05-24 23:58:43', '2020-05-24 23:58:43', NULL, 1, 1),
(2, 'Josue', 'Garcia', 'josue.garpe96@gmail.com', '2c2eff44842c719962f745f1cd00684e86e2b104ca31221bc9b9f4a9cdfe4815', 'JosueGarpe', 'Calle Principal, Block 8 Casa#20', 'El Salvador', 'San Salvador', 'Apopa', '503', '2020-05-25 00:13:09', '2020-05-25 00:13:09', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1OTAzNjU5NjAsIm5iZiI6MTU5MDM2NTk3MCwiZXhwIjoxNTkwMzY2NTYwLCJkYXRhIjp7ImlkIjoiMiIsImVtYWlsIjoiam9zdWUuZ2FycGU5NkBnbWFpbC5jb20ifX0.6dQnOqdDd6EmnljsmDWzULUcn0CsZX_NenzWetVxQZU', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_type_user` (`id_type_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_type_user` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
