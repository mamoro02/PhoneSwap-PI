drop database if exists phoneSwap;

CREATE DATABASE phoneSwap;

USE phoneSwap;
drop table if exists cliente;
create table cliente(
idCliente int primary key, 
nombreCliente varchar(50),
apellido varchar(50),
tel int
);
drop table if exists cuenta;
create table cuenta(
idCuenta int primary key,
nombreCuneta varchar(100),
correo varchar(100),
contraseña varchar (100),
idCliente int,   
CONSTRAINT idCliente FOREIGN KEY (idCliente) REFERENCES cliente (idCliente)
);

drop table if exists movil;

create table movil (
idMovil int primary key,
color varchar(20),
operador varchar(20),
marca varchar(50),
dobleSim varchar(20),
memoriaRam varchar(20),
velocidadProcesador varchar(20),
numeroDeNucleos int,
megapixels int,
sistemaOperativo varchar(20),
resolución varchar(30),
conector varchar(30),
añoDeLanzamiento date,
eSim varchar (10),
abatible varchar(10),
5G  varchar(10),
tipoDeCamara varchar (30),
peso varchar(30),
altura varchar(30),
anchura varchar(30),
profundidad varchar(30),
modelo varchar (50),
capacidad varchar (20), 
dimensiones varchar (30),
camara varchar(30),
precio double,
fechaCompra date,
fechaVenta date,
idCuenta int,
CONSTRAINT idCuenta FOREIGN KEY (idCuenta) REFERENCES cuenta (idCuenta)
);











