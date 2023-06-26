-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema mecánica_automotriz
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mecánica_automotriz
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mecánica_automotriz` DEFAULT CHARACTER SET utf8mb4 ;
USE `mecánica_automotriz` ;

-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`admin` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(250) NOT NULL,
  `contra` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(30) NOT NULL,
  `correo` VARCHAR(100) NOT NULL,
  `genero` VARCHAR(30) NOT NULL,
  `dirección` VARCHAR(100) NOT NULL,
  `teléfono` VARCHAR(25) NOT NULL,
  `tarjeta` VARCHAR(25) NOT NULL,
  `dui` VARCHAR(25) NOT NULL,
  `fecha_nac` DATE NOT NULL,
  `contra` VARCHAR(100) NOT NULL,
  `cargo` INT(11) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`taller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`taller` (
  `id_taller` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `categoría` VARCHAR(100) NOT NULL,
  `instalaciones` INT(11) NOT NULL,
  `dirección` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_taller`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`mecánico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`mecánico` (
  `id_mecánico` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `correo` VARCHAR(250) NOT NULL,
  `rol` VARCHAR(25) NOT NULL,
  `dui` VARCHAR(20) NOT NULL,
  `teléfono` VARCHAR(10) NOT NULL,
  `dirección` VARCHAR(50) NOT NULL,
  `fechaNacido` DATE NOT NULL,
  `genero` VARCHAR(15) NOT NULL,
  `remuneración` VARCHAR(15) NOT NULL,
  `id_taller` INT(11) NOT NULL,
  `contra` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_mecánico`),
  INDEX `id_taller` (`id_taller` ASC) VISIBLE,
  CONSTRAINT `mecánico_ibfk_1`
    FOREIGN KEY (`id_taller`)
    REFERENCES `mecánica_automotriz`.`taller` (`id_taller`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`vehículo-mec`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`vehículo-mec` (
  `id_vehículo` INT(11) NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(25) NOT NULL,
  `tipo` VARCHAR(25) NOT NULL,
  `placa` VARCHAR(25) NOT NULL,
  `dominio` VARCHAR(15) NOT NULL,
  `color` VARCHAR(15) NOT NULL,
  `num_motor` VARCHAR(15) NOT NULL,
  `clase` VARCHAR(15) NOT NULL,
  `marca` VARCHAR(15) NOT NULL,
  `fecha` DATE NOT NULL,
  `mecanico` INT(11) NOT NULL,
  PRIMARY KEY (`id_vehículo`),
  INDEX `vehí-mec_ibfk_1` (`mecanico` ASC) VISIBLE,
  CONSTRAINT `vehí-mec_ibfk_1`
    FOREIGN KEY (`mecanico`)
    REFERENCES `mecánica_automotriz`.`mecánico` (`id_mecánico`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`reporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`reporte` (
  `id_reporte` INT(11) NOT NULL AUTO_INCREMENT,
  `descripción` VARCHAR(100) NOT NULL,
  `fecha` DATE NOT NULL,
  `vehiculo_mec` INT(11) NOT NULL,
  PRIMARY KEY (`id_reporte`),
  INDEX `vehiculo_mec` (`vehiculo_mec` ASC) VISIBLE,
  CONSTRAINT `reporte_ibfk_1`
    FOREIGN KEY (`vehiculo_mec`)
    REFERENCES `mecánica_automotriz`.`vehículo-mec` (`id_vehículo`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`reserva` (
  `id_reserva` INT(11) NOT NULL AUTO_INCREMENT,
  `razón` VARCHAR(200) NOT NULL,
  `Costo` VARCHAR(15) NOT NULL,
  `fecha_res` DATE NOT NULL,
  `id_cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_reserva`),
  CONSTRAINT `id_cliente`
    FOREIGN KEY ()
    REFERENCES `mecánica_automotriz`.`cliente` ()
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`servicio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`servicio` (
  `id_servicio` INT(11) NOT NULL AUTO_INCREMENT,
  `tipo` VARCHAR(100) NOT NULL,
  `descripción` VARCHAR(250) NOT NULL,
  `taller` INT(11) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  INDEX `taller` (`taller` ASC) VISIBLE,
  CONSTRAINT `servicio_ibfk_1`
    FOREIGN KEY (`taller`)
    REFERENCES `mecánica_automotriz`.`taller` (`id_taller`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `mecánica_automotriz`.`vehículo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mecánica_automotriz`.`vehículo` (
  `id_vehículo` INT(11) NOT NULL AUTO_INCREMENT,
  `modelo` VARCHAR(25) NOT NULL,
  `tipo` VARCHAR(25) NOT NULL,
  `placa` VARCHAR(25) NOT NULL,
  `dominio` VARCHAR(15) NOT NULL,
  `color` VARCHAR(15) NOT NULL,
  `num_motor` VARCHAR(15) NOT NULL,
  `clase` VARCHAR(15) NOT NULL,
  `marca` VARCHAR(15) NOT NULL,
  `fecha` DATE NOT NULL,
  `cliente` INT(11) NOT NULL,
  PRIMARY KEY (`id_vehículo`),
  INDEX `vehículo_ibfk_1` (`cliente` ASC) VISIBLE,
  CONSTRAINT `vehículo_ibfk_1`
    FOREIGN KEY (`cliente`)
    REFERENCES `mecánica_automotriz`.`cliente` (`id_cliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
