-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2021 a las 13:46:04
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultas_cto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `querys`
--

CREATE TABLE `querys` (
  `id` bigint(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  `title_query` varchar(255) NOT NULL,
  `problem_query` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `querys`
--

INSERT INTO `querys` (`id`, `email`, `name`, `title_query`, `problem_query`, `created_at`) VALUES
(1, 'deyf5@gmail.com', 'biplop', 'hola', 'Tengo un problema', '2021-11-22 08:23:59'),
(2, 'fuentesf5@gmail.com', 'sergi', 'hola buenas', 'Tengo el mismo problema que Biplop', '2021-11-22 08:23:59'),
(3, 'carvajalf5@gmail.com', 'ariann', 'hola soy Ariann', 'Hoy falté a clase', '2021-11-22 08:23:59'),
(4, 'martinezf5@gmail.com', 'lucas', 'hola soy Lucas', 'Soy chévere', '2021-11-22 08:23:59'),
(5, 'harry@potter.com', 'harry', 'hola', 'no me va la connexion', '2021-11-24 11:18:27');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `querys`
--
ALTER TABLE `querys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `querys`
--
ALTER TABLE `querys`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
