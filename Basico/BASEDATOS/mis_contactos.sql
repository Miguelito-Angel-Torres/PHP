
CREATE DATABASE miscontactos;
USE miscontactos;

/*En MySQL existen 2 tipos de engine para tablas:
1: MyISAM -Tablas Planas,son como si fuera trabajar datos en Excel.
2: InnoDB - Tablas Relacionales,son como si fuera a trabajar datos  en Access
*/
CREATE TABLE contactos(
	email VARCHAR(50) NOT  NULL,
	nombre VARCHAR(50) NOT NULL,
	sexo char(1) not null,
	nacimiento date,
	telefono varchar(50),
	pais varchar(50) not null,
	imagen varchar(50),
	PRIMARY KEY(email),
	FULLTEXT KEY buscador(email,nombre,sexo,telefono,pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

CREATE TABLE pais(
	id_pais int not null AUTO_INCREMENT,
	pais VARCHAR(50) NOT NULL,
	PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais(id_pais,pais) VALUES
	(1,"Mexico"),
	(2,"Colombia"),
	(3,"Guatamala"),
	(4,"España"),
	(5,"Brasil"),
	(6,"Uruguay"),
	(7,"Perù"),
	(8,"Argentina"),
	(9,"Chile"),
	(10,"Paraguay"),
	(11,"Honduras"),
	(12,"El Salvador"),
	(13,"Nicaragua"),
	(14,"Costa Rica"),
	(15,"Panamà"),
	(16,"Venezuela"),
	(17,"Ecuador"),
	(18,"Bolivia"),
	(19,"Canada"),
	(20,"Estado Unidos"),
	(21,"Groenlandia"),
	(22,"Repùblica Dominicana"),
	(23,"Haitì"),
	(24,"Cuba"),
	(25,"Belice"),
	(26,"Inglaterra"),
	(27,"Francia"),
	(28,"Alemania"),
	(29,"Italia"),
	(30,"Japòn"),
	(31,"China"),
	(32,"Egipto"),
	(33,"Sudafrica"),
	(34,"Australia"),
	(35,"Nueva Zelanda");

