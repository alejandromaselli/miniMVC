CREATE DATABASE IF NOT EXISTS sistema;

CREATE TABLE `sistema`.`persona` ( 
	`id_usuario` INT(10) NOT NULL AUTO_INCREMENT, 
	`nombre` VARCHAR(30) NOT NULL , 
	`apellido` VARCHAR(30) NOT NULL ,
	`edad` VARCHAR(30) NOT NULL , 
	`usuario` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`id_persona`)
	);


CREATE TABLE `sistema`.`usuario` ( 
	`id_usuario` INT(10) NOT NULL , 
	`nombre_usuario` VARCHAR(30) NOT NULL , 
	`clave` VARCHAR(30) NOT NULL , 
	PRIMARY KEY (`id_usuario`)
	) ENGINE = InnoDB;

ALTER TABLE `usuario` 
ADD CONSTRAINT `llave_usuario` 
FOREIGN KEY (`id_usuario`) 
REFERENCES `persona`(`id_persona`);


CREATE TABLE `sistema`.`tipo_rol` ( 
	`id_tipo_rol` INT(10) NOT NULL , 
	`nombre` VARCHAR(30) NOT NULL , 
	PRIMARY KEY (`id_tipo_rol`)
) ENGINE = InnoDB;

ALTER TABLE `rol` 
ADD CONSTRAINT `llave_rol` 
FOREIGN KEY (`id_rol`) 
REFERENCES `tipo_rol`(`id_tipo_rol`);

ALTER TABLE `rol` 
ADD CONSTRAINT `llave2_rol` 
FOREIGN KEY (`id_usuario`) 
REFERENCES `usuario`(`id_usuario`);

create table `sistema`.`rol`( 
	`id_rol` INT(10),
	`id_usuario` INT(10),
);

create table `sistema`.`tipo_permiso` ( 
	`id_tipo_permiso` INT(10),
	`nombre` varchar(10),
	`id_rol` int(10)
	primary key(id_tipo_permiso)
);



create table `sistema`.`Modulo` ( 
	`id_modulo` INT(10),
	`nombre` varchar(10),
	`id_usuario` int(10),
	primary key(id_modulo)
	);

ALTER TABLE `modulo` 
ADD CONSTRAINT `llave_modulo` 
FOREIGN KEY (`id_usuario`) 
REFERENCES `usuario`(`id_usuario`);

create table `sistema`.`acceso` ( 
	`id_usuario` INT(10),
	`id_modulo` INT(30)
	);

ALTER TABLE `acceso` 
ADD CONSTRAINT `llave_acceso` 
FOREIGN KEY (`id_modulo`) 
REFERENCES `modulo`(`id_modulo`);

ALTER TABLE `acceso` 
ADD CONSTRAINT `llave2_acceso` 
FOREIGN KEY (`id_usuario`) 
REFERENCES `usuario`(`id_usuario`);

create table `sistema`.`pagina` ( 
	`id_permiso` INT(10),
	`id_modulo` int(10)
	);

ALTER TABLE `pagina` 
ADD CONSTRAINT `llave_pagina` 
FOREIGN KEY (`id_permiso`) 
REFERENCES `tipo_permiso`(`id_tipo_permiso`);

ALTER TABLE `pagina` 
ADD CONSTRAINT `llave2_pagina` 
FOREIGN KEY (`id_modulo`) 
REFERENCES `modulo`(`id_modulo`);

---------------------------inserts

INSERT into usuario(id_usuario,nombre_usuario,clave) values (1,'jamas','123');
INSERT into persona(id_usuario,nombre,apellido,edad) values (1,'jose','maselli',20);