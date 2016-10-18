-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema red_belt_prep
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema red_belt_prep
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `red_belt_prep` DEFAULT CHARACTER SET utf8 ;
USE `red_belt_prep` ;

-- -----------------------------------------------------
-- Table `red_belt_prep`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `red_belt_prep`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NULL,
  `alias` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `red_belt_prep`.`books`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `red_belt_prep`.`books` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NULL,
  `author` VARCHAR(255) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `red_belt_prep`.`reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `red_belt_prep`.`reviews` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `review` TEXT NULL,
  `rating` INT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  `user_id` INT NOT NULL,
  `book_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_review_users_idx` (`user_id` ASC),
  INDEX `fk_review_books1_idx` (`book_id` ASC),
  CONSTRAINT `fk_review_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `red_belt_prep`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_review_books1`
    FOREIGN KEY (`book_id`)
    REFERENCES `red_belt_prep`.`books` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
