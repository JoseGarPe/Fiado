-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2020 a las 21:24:32
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
-- Estructura de tabla para la tabla `producer`
--

CREATE TABLE `producer` (
  `user_id_prod` int(11) NOT NULL,
  `id_type_prod` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `amount_fund` decimal(11,2) NOT NULL DEFAULT '0.00',
  `retenido` decimal(11,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producer`
--

INSERT INTO `producer` (`user_id_prod`, `id_type_prod`, `id_user`, `amount_fund`, `retenido`) VALUES
(1, 1, 1, '1300.00', '0.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `initial_amount` decimal(11,2) NOT NULL DEFAULT '0.00',
  `total_installments` int(11) NOT NULL,
  `interest_rate` decimal(11,4) NOT NULL,
  `installment_amount` decimal(11,2) NOT NULL,
  `reason` varchar(1500) COLLATE utf8_spanish2_ci NOT NULL,
  `status` varchar(75) COLLATE utf8_spanish2_ci NOT NULL,
  `amount_entered` double(11,4) NOT NULL DEFAULT '0.0000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `request`
--

INSERT INTO `request` (`request_id`, `user_id`, `initial_amount`, `total_installments`, `interest_rate`, `installment_amount`, `reason`, `status`, `amount_entered`) VALUES
(1, 0, '0.00', 0, '0.0000', '0.00', '', 'Solicitando', 0.0000),
(2, 13, '1500.00', 7, '0.1500', '25.50', 'a', 'Solicitado', 1500.0000),
(3, 13, '1500.00', 7, '0.1500', '25.50', 'cirugia', 'Solicitado', 500.0000),
(4, 15, '1500.00', 7, '0.1500', '25.50', 'cirugia', 'Solicitado', 0.0000),
(5, 15, '1800.00', 7, '0.1500', '25.50', 'cirugia', 'Solicitado', 500.0000),
(6, 11, '2000.00', 7, '0.1500', '25.50', 'emergencia', 'Solicitado', 300.0000),
(7, 12, '200.00', 6, '0.2800', '5.50', 'emergencia', 'Solicitado', 0.0000),
(8, 1, '1000.00', 6, '3.3300', '111.00', 'COVID-19', 'Solicitado', 0.0000),
(9, 1, '1000.00', 6, '3.3300', '111.00', 'COVID-19', 'Solicitado', 0.0000),
(10, 1, '1000.00', 6, '3.3300', '111.00', 'COVID-19', 'Solicitado', 0.0000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `response_producer`
--

CREATE TABLE `response_producer` (
  `response_id` int(11) NOT NULL,
  `user_id_prod` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `contribution_amount` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `response_producer`
--

INSERT INTO `response_producer` (`response_id`, `user_id_prod`, `request_id`, `contribution_amount`) VALUES
(1, 1, 1, '1500.00'),
(2, 1, 1, '1500.00'),
(3, 1, 2, '500.00'),
(4, 1, 2, '500.00'),
(5, 1, 2, '500.00'),
(6, 1, 3, '500.00'),
(7, 1, 5, '500.00'),
(8, 1, 2, '15.00'),
(9, 1, 2, '15.00'),
(11, 1, 6, '100.00'),
(12, 1, 6, '100.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type_producer`
--

CREATE TABLE `type_producer` (
  `id_type_prod` int(11) NOT NULL,
  `type_prod` varchar(125) COLLATE utf8_spanish2_ci NOT NULL,
  `status` int(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `type_producer`
--

INSERT INTO `type_producer` (`id_type_prod`, `type_prod`, `status`) VALUES
(1, 'Persona Natural', 1),
(2, 'Cooperativa', 1),
(3, 'Persona Natural', 1),
(4, 'Cooperativa', 1);

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
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `client_id` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `client_secret` varchar(256) COLLATE utf8_spanish2_ci NOT NULL,
  `token` varchar(256) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`user_id`, `client_id`, `client_secret`, `token`) VALUES
(1, 'desarrollador', '9ff772b2f7bc2efe8a884e75c190e488db8b6ac98e71593815aac9424ba7a03f', 'aeaebd4bf6df74f9');

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
-- Indices de la tabla `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`user_id_prod`),
  ADD KEY `fk_user_prod` (`id_user`),
  ADD KEY `fk_type_prod_prod` (`id_type_prod`);

--
-- Indices de la tabla `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indices de la tabla `response_producer`
--
ALTER TABLE `response_producer`
  ADD PRIMARY KEY (`response_id`);

--
-- Indices de la tabla `type_producer`
--
ALTER TABLE `type_producer`
  ADD PRIMARY KEY (`id_type_prod`);

--
-- Indices de la tabla `type_user`
--
ALTER TABLE `type_user`
  ADD PRIMARY KEY (`id_type_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT de la tabla `producer`
--
ALTER TABLE `producer`
  MODIFY `user_id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `response_producer`
--
ALTER TABLE `response_producer`
  MODIFY `response_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `type_producer`
--
ALTER TABLE `type_producer`
  MODIFY `id_type_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `type_user`
--
ALTER TABLE `type_user`
  MODIFY `id_type_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producer`
--
ALTER TABLE `producer`
  ADD CONSTRAINT `fk_type_prod_prod` FOREIGN KEY (`id_type_prod`) REFERENCES `type_producer` (`id_type_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_prod` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_type_user` FOREIGN KEY (`id_type_user`) REFERENCES `type_user` (`id_type_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
