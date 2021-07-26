-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2020 a las 07:26:25
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema saga_familia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema saga_familia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `saga_familia` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `saga_familia` ;

-- -----------------------------------------------------
-- Table `saga_familia`.`recetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saga_familia`.`recetas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `calorias` INT NOT NULL,
  `tiempo` INT NOT NULL,
  `porcion` INT NOT NULL,
  `imagen` VARCHAR(45) NOT NULL,
  `procedimiento` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `saga_familia`.`tbl_horarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saga_familia`.`tbl_horarios` (
  `id_horario` INT NOT NULL AUTO_INCREMENT,
  `id` INT NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_horario`),
  INDEX `fk_receta_horario_idx` (`id` ASC) VISIBLE,
  CONSTRAINT `fk_receta_horario`
    FOREIGN KEY (`id`)
    REFERENCES `saga_familia`.`recetas` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 21
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


-- -----------------------------------------------------
-- Table `saga_familia`.`tbl_ingrediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saga_familia`.`tbl_ingrediente` (
  `id_ingrediente` INT NOT NULL AUTO_INCREMENT,
  `id` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `cantidad` FLOAT NOT NULL,
  `medida` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_ingrediente`),
  INDEX `fk_receta_ingrediente_idx` (`id` ASC) VISIBLE,
  CONSTRAINT `fk_receta_ingrediente`
    FOREIGN KEY (`id`)
    REFERENCES `saga_familia`.`recetas` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 46
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


/*
ALTER TABLE `saga_familia`.`tbl_horarios` 
ADD CONSTRAINT `fk_receta_horario`
  FOREIGN KEY (`id`)
  REFERENCES `saga_familia`.`recetas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


ALTER TABLE `saga_familia`.`tbl_ingrediente` 
ADD INDEX `fk_receta_ingrediente_idx` (`id` ASC) VISIBLE;
;
ALTER TABLE `saga_familia`.`tbl_ingrediente` 
ADD CONSTRAINT `fk_receta_ingrediente`
  FOREIGN KEY (`id`)
  REFERENCES `saga_familia`.`recetas` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

  */