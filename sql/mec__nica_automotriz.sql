-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-06-2023 a las 10:43:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mecánica_automotriz`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `contra` varchar(250) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `correo`, `contra`, `cargo`) VALUES
(1, 'admin1@gmail.com', '12345', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `dirección` varchar(100) NOT NULL,
  `teléfono` varchar(25) NOT NULL,
  `tarjeta` varchar(25) NOT NULL,
  `dui` varchar(25) NOT NULL,
  `fecha_nac` date NOT NULL,
  `contra` varchar(100) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `correo`, `genero`, `dirección`, `teléfono`, `tarjeta`, `dui`, `fecha_nac`, `contra`, `cargo`) VALUES
(1, 'Edson', 'Alvarenga', 'edson@gmail.com', 'Hombre', 'Drecha izquirda basalkahsh', '79193428', '4654561', '895623-9', '2000-10-05', '123', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecánico`
--

CREATE TABLE `mecánico` (
  `id_mecánico` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `teléfono` varchar(10) NOT NULL,
  `dirección` varchar(50) NOT NULL,
  `fechaNacido` date NOT NULL,
  `genero` varchar(15) NOT NULL,
  `remuneración` varchar(15) NOT NULL,
  `id_taller` int(11) NOT NULL,
  `contra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mecánico`
--

INSERT INTO `mecánico` (`id_mecánico`, `nombre`, `apellido`, `correo`, `rol`, `dui`, `teléfono`, `dirección`, `fechaNacido`, `genero`, `remuneración`, `id_taller`, `contra`) VALUES
(1, 'Alejandro', 'Alvarenga', 'aleMeca@gmail.com', 'Limpieza', '895623-9', '79193428', 'Soyapango', '2000-05-20', 'Hombre', '$500', 1, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(11) NOT NULL,
  `descripción` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `mecánico` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `razón` varchar(200) NOT NULL,
  `Costo` varchar(15) NOT NULL,
  `fecha_res` date NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id_reserva`, `razón`, `Costo`, `fecha_res`, `id_cliente`) VALUES
(1, 'si', '$500', '2005-03-20', 1),
(2, 'si', '$500', '2023-06-15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripción` varchar(250) NOT NULL,
  `taller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `id_taller` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoría` varchar(100) NOT NULL,
  `instalaciones` int(11) NOT NULL,
  `dirección` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`id_taller`, `nombre`, `categoría`, `instalaciones`, `dirección`) VALUES
(1, 'jsjsjsjs', 'sjjsjsjsjssssssssssssssssssss', 4, 'sjsjsjdsjsj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehículo`
--

CREATE TABLE `vehículo` (
  `id_vehículo` int(11) NOT NULL,
  `modelo` varchar(25) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `placa` varchar(25) NOT NULL,
  `dominio` varchar(15) NOT NULL,
  `color` varchar(15) NOT NULL,
  `num_motor` varchar(15) NOT NULL,
  `clase` varchar(15) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `mecánico`
--
ALTER TABLE `mecánico`
  ADD PRIMARY KEY (`id_mecánico`),
  ADD KEY `id_taller` (`id_taller`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `mecánico` (`mecánico`),
  ADD KEY `cliente` (`cliente`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `taller` (`taller`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indices de la tabla `vehículo`
--
ALTER TABLE `vehículo`
  ADD PRIMARY KEY (`id_vehículo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mecánico`
--
ALTER TABLE `mecánico`
  MODIFY `id_mecánico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `id_taller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `vehículo`
--
ALTER TABLE `vehículo`
  MODIFY `id_vehículo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mecánico`
--
ALTER TABLE `mecánico`
  ADD CONSTRAINT `mecánico_ibfk_1` FOREIGN KEY (`id_taller`) REFERENCES `taller` (`id_taller`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`mecánico`) REFERENCES `mecánico` (`id_mecánico`),
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`taller`) REFERENCES `taller` (`id_taller`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
