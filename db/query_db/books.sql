-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2020 a las 04:21:01
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `books-db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_books` int(10) NOT NULL,
  `name_book` varchar(250) DEFAULT NULL,
  `description_book` varchar(250) DEFAULT NULL,
  `author_book` varchar(250) DEFAULT NULL,
  `publication_year_book` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_books`, `name_book`, `description_book`, `author_book`, `publication_year_book`) VALUES
(1, 'La Fuerza de Sheccid', 'Es una historia de un joven que narra sobre su amor platonico', 'carlos cauthemoc sanchez', 2013),
(2, 'El Alquimista', 'Un viajero en busca de la piedra filosofal mas bonito', 'Anonimo', 1900),
(4, 'La Odisea', 'Narra las historias de un personaje griego', 'Homero', 1600),
(5, 'Mi planta de naranja Lima', 'Historia de un niño pobre', 'Anonimo', 2002),
(6, 'La Metamorfosis', 'Un ejecutivo experimenta una metamorfosis y cambia a ser inecto', 'Franz Kafka', 1990),
(7, 'La fuerza de sheccid', 'es una historia de un joven que narra sobre su amor platonico', 'carlos cuauthemoc sanchez', 2015);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_books`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_books` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
