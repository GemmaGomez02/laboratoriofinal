-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2023 a las 22:05:26
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursosqldos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariodos`
--

CREATE TABLE `usuariodos` (
  `id` int(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `primer_apellido` varchar(30) NOT NULL,
  `segundo_apellido` varchar(30) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `contrasena` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuariodos`
--

INSERT INTO `usuariodos` (`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `email`, `usuario`, `contrasena`) VALUES
(1, 'pepa', 'lopez', 'perez', 'pepa@lopez.com', 'pepa', 'Pe123'),
(2, 'juan ', 'pena', 'pena', 'juanpena@email.com', 'juan', 'Ju123'),
(3, 'loli', 'lopez', 'fernandez', 'lolilo@email.com', 'loli', 'Lol123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuariodos`
--
ALTER TABLE `usuariodos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuariodos`
--
ALTER TABLE `usuariodos`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
