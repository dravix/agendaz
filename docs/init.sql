CREATE TABLE `agendaz`.`contacto` (
  `IdContacto` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Email` VARCHAR(50) NULL,
  `Direccion` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`IdContacto`));
  
  CREATE TABLE `agendaz`.`telefono` (
  `IdTelefono` INT NOT NULL AUTO_INCREMENT,
  `IdContacto` INT NOT NULL,
  `Numero` VARCHAR(20) NULL,
  PRIMARY KEY (`IdTelefono`),
  CONSTRAINT `fk_propietario`
    FOREIGN KEY (`IdContacto`)
    REFERENCES `agendaz`.`contacto` (`IdContacto`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT);
