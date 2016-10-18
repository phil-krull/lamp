-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema friends
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema friends
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `friends` DEFAULT CHARACTER SET utf8 ;
USE `friends` ;

-- -----------------------------------------------------
-- Table `friends`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `friends`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `alias` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `date_of_birth` DATE NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `friends`.`friends`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `friends`.`friends` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_friends_users1_idx` (`user_id` ASC),
  CONSTRAINT `fk_friends_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `friends`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `friends`.`friends_has_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `friends`.`friends_has_users` (
  `friend_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`friend_id`, `user_id`),
  INDEX `fk_friends_has_users_users1_idx` (`user_id` ASC),
  INDEX `fk_friends_has_users_friends_idx` (`friend_id` ASC),
  CONSTRAINT `fk_friends_has_users_friends`
    FOREIGN KEY (`friend_id`)
    REFERENCES `friends`.`friends` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_friends_has_users_users1`
    FOREIGN KEY (`user_id`)
    REFERENCES `friends`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
