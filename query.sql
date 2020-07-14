CREATE TABLE `USUARIO` (
  `ci` INT NOT NULL,
  `clave` VARCHAR(20) NULL,
  PRIMARY KEY (`id`)
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