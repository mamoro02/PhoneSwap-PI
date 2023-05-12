drop database if exists phoneswap;

CREATE DATABASE phoneswap;

use phoneswap;

drop table if exists cliente;

CREATE TABLE cliente(
	idCliente int primary key, 
	nombreCuenta varchar(30), 
	correo varchar(50), 
	contraseña varchar(15), 
	nombreCliente varchar(30),
	apellido varchar(30), 
	telefono int
); 

drop table if exists modelo;

CREATE TABLE modelo(
	idModelo int primary key, 
	marca varchar(30), 
	descripcion varchar(30), 
	modelo varchar(30),
    precioActual float,
	megaPixeles varchar(10), 
	ram varchar(10), 
	imagen varchar(20), 
	resolucion varchar(10), 
	cincoG bool, 
	dobleSim bool, 
	velocidadCpu varchar(10), 
	capacidad varchar(10),
	tipoCpu varchar(20),
	dimensiones varchar(15), 
	sistemaOperativo varchar(15)
);



drop table if exists movil;

CREATE TABLE movil(
numSerie varchar(30) primary key, 
idModelo int, 
idCliente int,
precioVenta float, 
fechaVenta date,
comentarios varchar(100),
constraint fk_idModelo foreign key (idModelo) references modelo(idModelo),
constraint fk_idCliente foreign key (idCliente) references cliente(idCliente)
);











