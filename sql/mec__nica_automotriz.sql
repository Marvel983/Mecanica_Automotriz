-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 10:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mecánica_automotriz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cargo`
--

-- CREATE TABLE `cargo` (
--  `id_cargo` int(11) NOT NULL,
-- `descripción` varchar(250) NOT NULL
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `tarjeta` varchar(50) NOT NULL,
  `dui` int(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `contra` varchar(50) NOT NULL,
  `id_cargo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellido`, `correo`, `genero`, `direccion`, `telefono`, `tarjeta`, `dui`, `fecha_nac`, `contra`, `id_cargo`) VALUES
(1, 'dede', 'deded', 'deded@gmail.com', 'ncnwd', 'huhuh', 'uhuhu', 'uuhiuiuhiu', 0, '2300-05-10', '29b3435265c2580d883a5d831680536a', 2),
(2, 'Ricardo Daniel', 'Guevara Avelar', 'RDGuevaraA@gmail.com', 'Prefiero no decirlo', 'Escalon', '78451236', 'blablabla', 0, '3033-07-20', 'f688ae26e9cfa3ba6235477831d5122e', 2),
(3, 'w', 'w', 'w@gaaaaa', 'q', 'q', 'q', 'q', 0, '3333-02-22', 'e54a37b1124ecdf5b1a19edaa29a682a', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mecánico`
--

CREATE TABLE `mecánico` (
  `id_mecánico` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `rol` varchar(25) NOT NULL,
  `dui` varchar(20) NOT NULL,
  `teléfono` varchar(10) NOT NULL,
  `dirección` varchar(50) NOT NULL,
  `fechaNacido` date NOT NULL,
  `genero` varchar(15) NOT NULL,
  `remuneración` varchar(15) NOT NULL,
  `id_taller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(11) NOT NULL,
  `descripción` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `mecánico` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reserva`
--

CREATE TABLE `reserva` (
  `id_reserva` int(11) NOT NULL,
  `razón` varchar(200) NOT NULL,
  `Costo` varchar(15) NOT NULL,
  `fecha_res` date NOT NULL,
  `servicio` int(11) NOT NULL,
  `cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `descripción` varchar(250) NOT NULL,
  `taller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taller`
--

CREATE TABLE `taller` (
  `id_taller` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `categoría` varchar(100) NOT NULL,
  `instalaciones` int(11) NOT NULL,
  `dirección` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehículo`
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
  `fecha` date NOT NULL,
  `mecánico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `mecánico`
--
ALTER TABLE `mecánico`
  ADD PRIMARY KEY (`id_mecánico`),
  ADD KEY `id_taller` (`id_taller`);

--
-- Indexes for table `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `mecánico` (`mecánico`),
  ADD KEY `cliente` (`cliente`);

--
-- Indexes for table `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id_reserva`),
  ADD KEY `servicio` (`servicio`),
  ADD KEY `cliente` (`cliente`);

--
-- Indexes for table `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `taller` (`taller`);

--
-- Indexes for table `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`id_taller`);

--
-- Indexes for table `vehículo`
--
ALTER TABLE `vehículo`
  ADD PRIMARY KEY (`id_vehículo`),
  ADD KEY `mecánico` (`mecánico`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mecánico`
--
ALTER TABLE `mecánico`
  MODIFY `id_mecánico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id_reserva` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taller`
--
ALTER TABLE `taller`
  MODIFY `id_taller` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehículo`
--
ALTER TABLE `vehículo`
  MODIFY `id_vehículo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mecánico`
--
ALTER TABLE `mecánico`
  ADD CONSTRAINT `mecánico_ibfk_1` FOREIGN KEY (`id_taller`) REFERENCES `taller` (`id_taller`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`mecánico`) REFERENCES `mecánico` (`id_mecánico`),
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`servicio`) REFERENCES `servicio` (`id_servicio`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`taller`) REFERENCES `taller` (`id_taller`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehículo`
--
ALTER TABLE `vehículo`
  ADD CONSTRAINT `vehículo_ibfk_1` FOREIGN KEY (`mecánico`) REFERENCES `mecánico` (`id_mecánico`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
