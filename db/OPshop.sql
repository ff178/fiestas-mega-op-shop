SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `OPshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `OPshop` ;

-- -----------------------------------------------------
-- Table `OPshop`.`Users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Users` (
  `idUsers` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NOT NULL ,
  `pass` VARCHAR(45) NOT NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  `type` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`idUsers`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`Car`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Car` (
  `idCar` INT NOT NULL AUTO_INCREMENT ,
  `idUsers` INT NOT NULL ,
  `qProduct` INT NULL ,
  `qService` INT NULL ,
  `qRental` INT NULL ,
  INDEX `fk_Buy_Users1_idx` (`idUsers` ASC) ,
  PRIMARY KEY (`idCar`, `idUsers`) ,
  CONSTRAINT `fk_Buy_Users1`
    FOREIGN KEY (`idUsers` )
    REFERENCES `OPshop`.`Users` (`idUsers` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`Category`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Category` (
  `idCategory` INT NOT NULL AUTO_INCREMENT ,
  `tittle` VARCHAR(45) NOT NULL ,
  `descrip` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCategory`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`Product`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Product` (
  `idProduct` INT NOT NULL AUTO_INCREMENT ,
  `tittle` VARCHAR(45) NOT NULL ,
  `price` DOUBLE NOT NULL ,
  `descrip` VARCHAR(45) NOT NULL ,
  `quanty` INT NOT NULL ,
  `dispon` TINYINT(1) NOT NULL ,
  `idCategory` INT NOT NULL ,
  PRIMARY KEY (`idProduct`) ,
  INDEX `fk_Product_Category1_idx` (`idCategory` ASC) ,
  CONSTRAINT `fk_Product_Category1`
    FOREIGN KEY (`idCategory` )
    REFERENCES `OPshop`.`Category` (`idCategory` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`Pics`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Pics` (
  `idPic` INT NOT NULL AUTO_INCREMENT ,
  `tittle` VARCHAR(45) NOT NULL ,
  `idProduct` INT NOT NULL ,
  PRIMARY KEY (`idPic`) ,
  INDEX `fk_Pic_Product1_idx` (`idProduct` ASC) ,
  CONSTRAINT `fk_Pic_Product1`
    FOREIGN KEY (`idProduct` )
    REFERENCES `OPshop`.`Product` (`idProduct` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`Service`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Service` (
  `idService` INT NOT NULL AUTO_INCREMENT ,
  `tittle` VARCHAR(45) NOT NULL ,
  `price` DOUBLE NOT NULL ,
  `descrip` VARCHAR(45) NOT NULL ,
  `pic` VARCHAR(45) NOT NULL ,
  `dispon` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`idService`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`Rental`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`Rental` (
  `idRental` INT NOT NULL AUTO_INCREMENT ,
  `tittle` VARCHAR(45) NOT NULL ,
  `priceDay` DOUBLE NOT NULL ,
  `descrip` VARCHAR(45) NOT NULL ,
  `quanty` INT NOT NULL ,
  `pic` VARCHAR(45) NOT NULL ,
  `dispon` TINYINT(1) NOT NULL ,
  `daysR` INT NULL ,
  PRIMARY KEY (`idRental`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`ticket`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`ticket` (
  `idticket` INT NOT NULL AUTO_INCREMENT ,
  `date` DATETIME NOT NULL ,
  `idCar` INT NOT NULL ,
  PRIMARY KEY (`idticket`) ,
  INDEX `fk_ticket_Car1_idx` (`idCar` ASC) ,
  CONSTRAINT `fk_ticket_Car1`
    FOREIGN KEY (`idCar` )
    REFERENCES `OPshop`.`Car` (`idCar` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`CarRental`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`CarRental` (
  `idCar` INT NOT NULL ,
  `idRental` INT NOT NULL ,
  INDEX `fk_CarRental_Car1_idx` (`idCar` ASC) ,
  INDEX `fk_CarRental_Rental1_idx` (`idRental` ASC) ,
  PRIMARY KEY (`idCar`, `idRental`) ,
  CONSTRAINT `fk_CarRental_Car1`
    FOREIGN KEY (`idCar` )
    REFERENCES `OPshop`.`Car` (`idCar` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CarRental_Rental1`
    FOREIGN KEY (`idRental` )
    REFERENCES `OPshop`.`Rental` (`idRental` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`CarService`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`CarService` (
  `idCar` INT NOT NULL ,
  `idService` INT NOT NULL ,
  INDEX `fk_CarService_Car2_idx` (`idCar` ASC) ,
  INDEX `fk_CarService_Service2_idx` (`idService` ASC) ,
  PRIMARY KEY (`idCar`, `idService`) ,
  CONSTRAINT `fk_CarService_Car2`
    FOREIGN KEY (`idCar` )
    REFERENCES `OPshop`.`Car` (`idCar` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CarService_Service2`
    FOREIGN KEY (`idService` )
    REFERENCES `OPshop`.`Service` (`idService` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OPshop`.`CarProduct`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `OPshop`.`CarProduct` (
  `idCar` INT NOT NULL ,
  `idProduct` INT NOT NULL ,
  INDEX `fk_CarProduct_Car1_idx` (`idCar` ASC) ,
  INDEX `fk_CarProduct_Product1_idx` (`idProduct` ASC) ,
  PRIMARY KEY (`idCar`, `idProduct`) ,
  CONSTRAINT `fk_CarProduct_Car1`
    FOREIGN KEY (`idCar` )
    REFERENCES `OPshop`.`Car` (`idCar` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_CarProduct_Product1`
    FOREIGN KEY (`idProduct` )
    REFERENCES `OPshop`.`Product` (`idProduct` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `OPshop` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
