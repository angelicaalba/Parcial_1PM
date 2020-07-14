CREATE TABLE `USUARIO` (
  `ci` INT NOT NULL,
  `clave` VARCHAR(20) NULL,
  PRIMARY KEY (`ci`)
)


-- -----------------------------------------------------
-- Table `academico`.`IDENTIFICADOR`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IDENTIFICADOR` (
  `ci` INT NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `fechanac` DATE NOT NULL,
  `color` VARCHAR(20) NULL,
  `foto` VARCHAR(20) NULL,
  `lugarres` INT NOT NULL,
  PRIMARY KEY (`ci`),

)



INSERT INTO `identificador` (`ci`, `nombre`, `fechanac`, `color`, `foto`, `lugarres`) VALUES ('8335375', 'Angelica Alba Quispe ', '1996-12-27', ' azul', 'angelica.jpg', '01');
INSERT INTO `identificador` (`ci`, `nombre`, `fechanac`, `color`, `foto`, `lugarres`) VALUES ('555555', 'Pepito Perez Flores', '2019-08-20', 'negro', 'pepito.jpg', '02');
