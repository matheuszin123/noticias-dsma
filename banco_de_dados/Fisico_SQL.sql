-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`TB_jornalista`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TB_jornalista` (
  `idTB_jornalista` BIGINT(10) NOT NULL,
  `nome_jornalista` VARCHAR(150) NOT NULL,
  `email_jornalista` VARCHAR(150) NOT NULL,
  `senha_jornalista` VARCHAR(100) NOT NULL,
  `genero_jornalista` VARCHAR(100) NULL,
  `pais_jornalista` VARCHAR(45) NOT NULL,
  `estado_jornalista` VARCHAR(45) NOT NULL,
  `cidade_jornalista` VARCHAR(45) NOT NULL,
  `celular_jornalista` BIGINT(15) NOT NULL,
  `fonefixo_jornalista` BIGINT(15) NOT NULL,
  `cpf_jornalista` BIGINT(11) NOT NULL,
  PRIMARY KEY (`idTB_jornalista`),
  UNIQUE INDEX `idTB_jornalista_UNIQUE` (`idTB_jornalista` ASC) VISIBLE,
  UNIQUE INDEX `email_jornalista_UNIQUE` (`email_jornalista` ASC) VISIBLE,
  UNIQUE INDEX `cpf_jornalista_UNIQUE` (`cpf_jornalista` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TB_cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TB_cliente` (
  `idTB_cliente` BIGINT(10) NOT NULL,
  `nome_cliente` VARCHAR(150) NOT NULL,
  `email_cliente` VARCHAR(150) NOT NULL,
  `senha_cliente` VARCHAR(100) NOT NULL,
  `genero_cliente` VARCHAR(100) NOT NULL,
  `estado_cliente` VARCHAR(45) NOT NULL,
  `pais_cliente` VARCHAR(45) NOT NULL,
  `cidade_cliente` VARCHAR(45) NOT NULL,
  `fonefixo_cliente` BIGINT(15) NOT NULL,
  `celular_cliente` BIGINT(15) NOT NULL,
  PRIMARY KEY (`idTB_cliente`),
  UNIQUE INDEX `idTB_cliente_UNIQUE` (`idTB_cliente` ASC) VISIBLE,
  UNIQUE INDEX `celular_cliente_UNIQUE` (`celular_cliente` ASC) VISIBLE,
  UNIQUE INDEX `fonefixo_cliente_UNIQUE` (`fonefixo_cliente` ASC) VISIBLE,
  UNIQUE INDEX `email_cliente_UNIQUE` (`email_cliente` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TB_noticias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TB_noticias` (
  `idTB_noticias` BIGINT(200) NOT NULL AUTO_INCREMENT,
  `relator_noticias` VARCHAR(200) NOT NULL,
  `titulo_noticias` VARCHAR(300) NULL,
  `politica_noticias` LONGTEXT NOT NULL,
  `famosos_noticias` LONGTEXT NOT NULL,
  `saude_noticias` LONGTEXT NOT NULL,
  `geek_noticias` LONGTEXT NOT NULL,
  `esporte_noticias` LONGTEXT NOT NULL,
  `geral_noticias` LONGTEXT NOT NULL,
  PRIMARY KEY (`idTB_noticias`),
  UNIQUE INDEX `idTB_noticias_UNIQUE` (`idTB_noticias` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TB_informar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TB_informar` (
  `datapublicacao_informar` DATE NOT NULL,
  `id_informar` BIGINT(10) NOT NULL,
  `TB_jornalista_idTB_jornalista` BIGINT(10) NOT NULL,
  `TB_noticias_idTB_noticias` BIGINT(200) NOT NULL,
  PRIMARY KEY (`id_informar`, `TB_jornalista_idTB_jornalista`, `TB_noticias_idTB_noticias`),
  INDEX `fk_TB_informar_TB_jornalista_idx` (`TB_jornalista_idTB_jornalista` ASC) VISIBLE,
  INDEX `fk_TB_informar_TB_noticias1_idx` (`TB_noticias_idTB_noticias` ASC) VISIBLE,
  CONSTRAINT `fk_TB_informar_TB_jornalista`
    FOREIGN KEY (`TB_jornalista_idTB_jornalista`)
    REFERENCES `mydb`.`TB_jornalista` (`idTB_jornalista`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TB_informar_TB_noticias1`
    FOREIGN KEY (`TB_noticias_idTB_noticias`)
    REFERENCES `mydb`.`TB_noticias` (`idTB_noticias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TB_acessar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TB_acessar` (
  `idTB_acessar` BIGINT(10) NOT NULL,
  `horaacesso_acessar` DATE NOT NULL,
  `TB_noticias_idTB_noticias` BIGINT(200) NOT NULL,
  `TB_cliente_idTB_cliente` BIGINT(10) NOT NULL,
  PRIMARY KEY (`idTB_acessar`, `TB_noticias_idTB_noticias`, `TB_cliente_idTB_cliente`),
  INDEX `fk_TB_acessar_TB_noticias1_idx` (`TB_noticias_idTB_noticias` ASC) VISIBLE,
  INDEX `fk_TB_acessar_TB_cliente1_idx` (`TB_cliente_idTB_cliente` ASC) VISIBLE,
  CONSTRAINT `fk_TB_acessar_TB_noticias1`
    FOREIGN KEY (`TB_noticias_idTB_noticias`)
    REFERENCES `mydb`.`TB_noticias` (`idTB_noticias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_TB_acessar_TB_cliente1`
    FOREIGN KEY (`TB_cliente_idTB_cliente`)
    REFERENCES `mydb`.`TB_cliente` (`idTB_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
