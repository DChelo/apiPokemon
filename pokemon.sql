-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2023 a las 01:41:32
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
-- Base de datos: `pokemon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'angelo', '$2y$10$6cfwkdlqA8fpRHAT1Syl5ORAJawmeVpZEkARSwjQA0x7yJ44NABY2', 'admin@gmail.com'),
(2, 'angelo', '$2y$10$2hbzZCNiamwS2Neckd0i3uKSJgk7446J8IJ9VDdlOiA4FPpYswSGK', 'admin@gmail.com'),
(3, '', '$2y$10$mwqk5ZEWrELKFCsfk4O2BeapnFejkw5I.Q/dtP9xETTas0BZvvjDK', ''),
(4, 'estrada', '$2y$10$w/L6vKMVnUfPh1.8Z/SWOehZBQ8x8S5eXibGCNmHC4765WXNr3Hwm', 'millennium.angelos@gmail.com'),
(5, '', '$2y$10$NhrhIpX/gCYB6r11ZaP.k.6uxZpuJF5yhRQijXnfkyPotI/AWU3Pu', ''),
(6, '', '$2y$10$uZsnWCURHTAPmTnb3wtVuOkVa9OTCX4kv4JTvSJjbgTTc2TeuKd1K', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
