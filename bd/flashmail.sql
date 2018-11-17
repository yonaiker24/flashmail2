-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-11-2018 a las 16:39:14
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flashmail`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `nombre` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `apellido` varchar(20) CHARACTER SET armscii8 NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id` int(20) NOT NULL,
  `id_usuario` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`nombre`, `apellido`, `fecha_nacimiento`, `id`, `id_usuario`) VALUES
('Gabriel', 'Ortega', '1991-05-06', 4, 4),
('Gabriel', 'Ortega', '1981-06-09', 5, 5),
('Gabriel', 'Ortega', '1980-05-12', 6, 6),
('Gabriel', 'Ortega', '1980-05-12', 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id` int(20) NOT NULL,
  `id_cliente` int(20) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `zona` varchar(200) NOT NULL,
  `codigo_postal` varchar(15) NOT NULL,
  `zona_2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id`, `id_cliente`, `pais`, `estado`, `ciudad`, `zona`, `codigo_postal`, `zona_2`) VALUES
(5, 4, 'VE', 'Distrito Capital', 'Caracas', 'Caricuao', '1010', 'Mucuritas'),
(6, 5, 'ES', 'DistritoCapital', 'Caracas', 'Caricuao, Mucuritas, Mucuritas', '1010', 'Mucuritas'),
(7, 6, 'VE', 'Distrito Capital', 'Caracas', 'Caricuao, Mucuritas, Mucuritas, Mucuritas', '1010', 'Mucuritas'),
(8, 7, 'VE', 'Distrito Capita', 'sadasda', 'Caricuao, Mucuritas, Mucuritas, Mucuritas', 'asdada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `contrasena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `correo`, `contrasena`) VALUES
(4, 'gabriel.enr1998@gmail.com', 'Steelseries-24'),
(5, 'gabriel.enr1998@gmail.com', 'Steelseries-24'),
(6, 'gabriel.enr1998@gmail.com', 'Steelseries-24'),
(7, 'gabriel.enr1998@gmail.com', 'Steelseries-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
