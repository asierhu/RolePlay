CREATE TABLE `rolegame`.`creature`(
	`idCreature` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(150),
	`description` VARCHAR(255),
	`avatar` VARCHAR(255),
	`attackPower` INT(11),
	`lifeLevel` INT(11),
	`weapon` VARCHAR(45),
	PRIMARY KEY (`idCreature`)
) 