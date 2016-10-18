-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema trips
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema trips
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `trips` DEFAULT CHARACTER SET utf8 ;
USE `trips` ;

-- -----------------------------------------------------
-- Table `trips`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trips`.`users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `username` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `trips`.`destinations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trips`.`destinations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `location` VARCHAR(255) NULL DEFAULT NULL,
  `description` VARCHAR(255) NULL DEFAULT NULL,
  `start` DATE NULL DEFAULT NULL,
  `end` DATE NULL DEFAULT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_destinations_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_destinations_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `trips`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 31
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `trips`.`users_has_destinations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `trips`.`users_has_destinations` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT(11) NOT NULL,
  `destination_id` INT(11) NOT NULL,
  `created_at` DATETIME NULL DEFAULT NULL,
  `updated_at` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_users_has_destinations_destinations1_idx` (`destination_id` ASC, `user_id` ASC),
  INDEX `fk_users_has_destinations_users_idx` (`user_id` ASC),
  CONSTRAINT `fk_users_has_destinations_destinations1`
    FOREIGN KEY (`destination_id` , `user_id`)
    REFERENCES `trips`.`destinations` (`id` , `id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `fk_users_has_destinations_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `trips`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
