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
	marca varchar(30) not null, 
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
#inserts huawei
INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (1, 'Huawei', 'P30 Lite', 'p30Lite', 349.99, '48 MP', '4 GB', 'p30Lite.png', '1080 x 2312', true, true, '2.2 GHz', '128 GB', 'Kirin 710', '152.9 x 72.7 x 7.4 mm', 'Android');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (2, 'Huawei', 'P40', 'p40', 599.99, '50 MP', '6 GB', 'p40.png', '1080 x 2340', true, true, '2.86 GHz', '128 GB', 'Kirin 990 5G', '148.9 x 71.1 x 8.5 mm', 'Android');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (3, 'Huawei', 'P40 Lite', 'p40Lite', 299.99, '48 MP', '6 GB', 'p40Lite.png', '1080 x 2310', true, true, '2.27 GHz', '128 GB', 'Kirin 810', '159.2 x 76.3 x 8.7 mm', 'Android');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (4, 'Huawei', 'P40 Pro', 'p40pro', 899.99, '50 MP', '8 GB', 'p40pro.png', '1200 x 2640', true, true, '2.86 GHz', '256 GB', 'Kirin 990 5G', '158.2 x 72.6 x 9 mm', 'Android');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (5, 'Huawei', 'P50', 'p50', 1199.99, '50 MP', '8 GB', 'p50.png', '1224 x 2700', true, true, '3.13 GHz', '256 GB', 'Kirin 9000', '156.7 x 74 x 8.3 mm', 'Android');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (6, 'Huawei', 'Smartphone de alta gama', 'P40 Lite', 399.99, '64 MP', '6 GB', 'p40Lite.png', '1080 x 2310', true, false, '2.27 GHz', '128 GB', 'Kirin 810', '159.2 x 76.3 x 8.7 mm', 'Android 10, EMUI 10.1, sin servicios de Google');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (7, 'Huawei', 'Smartphone de alta gama', 'P40 Lite', 399.99, '64 MP', '6 GB', 'p40Lite.png', '1080 x 2310', true, false, '2.27 GHz', '128 GB', 'Kirin 810', '159.2 x 76.3 x 8.7 mm', 'Android 10, EMUI 10.1, sin servicios de Google');


INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (8, 'Huawei', 'Smartphone de alta gama', 'P40', 599.99, '50 MP', '8 GB', 'p40.png', '1080 x 2340', true, true, '2.86 GHz', '128 GB', 'Kirin 990 5G', '148.9 x 71.1 x 8.5 mm', 'Android 10, EMUI 10.1, sin servicios de Google');


INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (9, 'Huawei', 'Smartphone de alta gama', 'P40 Pro', 799.99, '50 MP', '8 GB', 'p40pro.png', '1200 x 2640', true, true, '2.86 GHz', '256 GB', 'Kirin 990 5G', '158.2 x 72.6 x 9 mm', 'Android 10, EMUI 10.1, sin servicios de Google');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (10, 'Huawei', 'Smartphone de alta gama', 'P50', 899.99, '50 MP', '8 GB', 'p50.png', '1224 x 2700', true, true, '2.84 GHz', '128 GB', 'Kirin 9000 5G', '156.7 x 74 x 8.3 mm', 'Android 11, HarmonyOS 2.0');

#inserts para iphone

INSERT INTO modelo VALUES (11, 'Apple', 'iPhone 13', 'iPhone 13', 999.99, '12', '6GB', 'iphone13.png', '1080p', true, false, '2.5GHz', '256GB', 'A14 Bionic', '146.7 x 71.5 x 7.65 mm', 'iOS 15');
INSERT INTO modelo VALUES (12, 'Apple', 'iPhone 14', 'iPhone 14', 1199.99, '14', '8GB', 'iphone14.png', '1440p', true, false, '3.0GHz', '512GB', 'A16 Bionic', '150.9 x 75.7 x 8.3 mm', 'iOS 16');
INSERT INTO modelo VALUES (13, 'Apple', 'iPhone SE', 'iPhone SE', 499.99, '12', '4GB', 'iphonese.png', '720p', true, false, '2.3GHz', '128GB', 'A13 Bionic', '138.4 x 67.3 x 7.3 mm', 'iOS 15');
INSERT INTO modelo VALUES (14, 'Apple', 'iPhone 13 Mini', 'iPhone 13 Mini', 799.99, '12', '6GB', 'iphone13mini.png', '1080p', true, false, '2.5GHz', '256GB', 'A14 Bionic', '131.5 x 64.2 x 7.65 mm', 'iOS 15');
INSERT INTO modelo VALUES (15, 'Apple', 'iPhone X', 'iPhone X', 599.99, '12', '3GB', 'iphonex.png', '1080p', false, false, '2.39GHz', '64GB', 'A11 Bionic', '143.6 x 70.9 x 7.7 mm', 'iOS 11');
INSERT INTO modelo VALUES (16, 'Apple', 'iPhone XR', 'iPhone XR', 699.99, '12', '4GB', 'iphonexr.png', '720p', false, false, '2.49GHz', '128GB', 'A12 Bionic', '150.9 x 75.7 x 8.3 mm', 'iOS 12');
INSERT INTO modelo VALUES (17, 'Apple', 'iPhone 14 Pro', 'iPhone 14 Pro', 1499.99, '16', '12GB', 'iphone14pro.png', '2160p', true, true, '3.5GHz', '1TB', 'A16 Bionic', '150.5 x 74.7 x 7.65 mm', 'iOS 16');
INSERT INTO modelo VALUES (18, 'Apple', 'iPhone 12', 'iPhone 12', 799.99, '12', '4GB', 'iphone12.png', '1080p', true, false, '2.4GHz', '128GB', 'A14 Bionic', '146.7 x 71.5 x 7.4 mm', 'iOS 14');
INSERT INTO modelo VALUES (19, 'Apple', 'iPhone 14 Pro Max', 'iPhone 14 Pro Max', 1799.99, '16', '12GB', 'iphone14pro.png', '2160p', true, true, '3.5GHz', '2TB', 'A16 Bionic', '160.8 x 78.1 x 7.65 mm', 'iOS 16.5');

#inserts para samsung

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (20, 'Samsung', 'Galaxy Z Flip', 'Galaxy Z Flip', 1099.99, '12', '8GB', 'samsungZflip.png', '1080 x 2636', true, true, '2.95 GHz', '256GB', 'Qualcomm Snapdragon 855+', '87.4 x 73.6 x 17.3 mm', 'Android 10');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (21, 'Samsung', 'Galaxy S23 Ultra', 'Galaxy S23 Ultra', 1599.99, '108', '16GB', 'samsungGalaxyS23Ultra.png', '1440 x 3200', true, true, '2.9 GHz', '512GB', 'Exynos 2200', '164.6 x 73.4 x 8.9 mm', 'Android 13');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (22, 'Samsung', 'Galaxy S23 Plus', 'Galaxy S23 Plus', 1399.99, '108', '12GB', 'samsungGalaxyS23Plus.png', '1440 x 3200', true, true, '2.9 GHz', '256GB', 'Exynos 2200', '164.6 x 73.4 x 8.9 mm', 'Android 13');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (23, 'Samsung', 'Galaxy S22', 'Galaxy S22', 999.99, '64', '8GB', 'samsungGalaxyS22.png', '1080 x 2400', true, true, '2.4 GHz', '128GB', 'Exynos 2100', '151.7 x 71.2 x 7.9 mm', 'Android 12');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (24, 'Samsung', 'Galaxy S21 FE', 'Galaxy S21 FE', 699.99, '64', '6GB', 'samsungGalaxyS21Fe.png', '1080 x 2400', true, true, '2.4 GHz', '128GB', 'Qualcomm Snapdragon 888', '160.9 x 73.2 x 8.3 mm', 'Android 11');

#insert para nothing

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (25, 'Nothing', 'Smartphone sin igual', 'NothingPhone', 899.99, '108 MP', '8 GB', 'nothingPhone.png', '1440 x 3200', true, false, '2.84 GHz', '256 GB', 'Qualcomm Snapdragon 888', '163.7 x 76.4 x 8.8 mm', 'Android 11');

#insert para honor

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (26, 'Honor', 'Innovación tecnológica', 'Honor Magic 5', 799.99, '64 MP', '6 GB', 'honormagic5.png', '1080 x 2400', true, false, '2.6 GHz', '128 GB', 'Kirin 990', '157.2 x 73.2 x 8 mm', 'Android 10');

#insert para poco

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (27, 'Poco', 'La bestia de Poco', 'Poco X5', 549.99, '48 MP', '6 GB', 'pocoX5.png', '1080 x 2400', true, true, '2.3 GHz', '128 GB', 'Qualcomm Snapdragon 732G', '164.2 x 76.5 x 9.3 mm', 'Android 11');

#insert para realme

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (28, 'Realme', 'Potencia y estilo', 'Realme Narzo 50A', 199.99, '50 MP', '4 GB', 'realmeNarzo50A.png', '720 x 1600', false, true, '2.0 GHz', '64 GB', 'MediaTek Helio G85', '164.5 x 75.9 x 9.8 mm', 'Android 11');

#insertar para xiaomi

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (29, 'Xiaomi', 'Smartphone de alta gama', 'Poco F4 GT', 599.99, '64 MP', '8 GB', 'PocoF4GT.png', '1080', true, true, '2.8GHz', '256GB', 'Snapdragon 870', '163.7 x 76.4 x 8.8 mm', 'Android 11');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (30, 'Xiaomi', 'Smartphone de alta gama', 'Poco X5 5G', 399.99, '48 MP', '6 GB', 'PocoX55G.png', '1080', true, true, '2.0GHz', '128GB', 'Mediatek Helio G85', '164.2 x 75.9 x 9.2 mm', 'Android 11');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (31, 'Xiaomi', 'Smartphone de gama media', 'Redmi 10 (2022)', 199.99, '50 MP', '4 GB', 'Redmi102022.png', '1080', true, true, '2.0GHz', '64GB', 'Mediatek Helio G88', '161.2 x 75.6 x 9.1 mm', 'Android 11');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (32, 'Xiaomi', 'Smartphone de alta gama', 'Redmi Note 11 Pro+ 5G', 899.99, '108 MP', '12 GB', 'RedmiNote11Pro+5G.png', '1080', true, true, '3.0GHz', '512GB', 'Snapdragon 870', '164.2 x 75.9 x 8.5 mm', 'Android 11');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo) 
VALUES (33, 'Xiaomi', 'Smartphone de gama media', 'Redmi Note 12', 349.99, '64 MP', '4 GB', 'RedmiNote12.png', '1080', true, true, '2.5GHz', '128GB', 'Mediatek Helio G96', '161.1 x 75.2 x 8.5 mm', 'Android 11');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (34, 'Xiaomi', 'Redmi Note 13 Pro', 'Redmi Note 13 Pro', 499.99, '108 MP', '12 GB', 'RedmiNote13Pro.png', '1080p', true, true, '2.5GHz', '512 GB', 'Snapdragon 888+', '163.9 x 75.7 x 8.9 mm', 'Android 13');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (35, 'Xiaomi', 'Xiaomi Mi Mix 4', 'Mi Mix 4', 1299.99, '108 MP', '16 GB', 'XiaomiMiMix4.png', '1440p', true, true, '3.2GHz', '1 TB', 'Snapdragon 898', '165.4 x 75.5 x 8.9 mm', 'Android 13');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (36, 'Xiaomi', 'Xiaomi Mi 13 Lite', 'Mi 13 Lite', 399.99, '64 MP', '6 GB', 'XiaomiMi13Lite.png', '1080p', true, true, '2.3GHz', '128 GB', 'Snapdragon 778G', '160.5 x 75.7 x 7.6 mm', 'Android 12');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (37, 'Xiaomi', 'Xiaomi Poco F5', 'Poco F5', 449.99, '64 MP', '8 GB', 'PocoF5.png', '1080p', true, true, '2.8GHz', '256 GB', 'Snapdragon 870', '160.6 x 75.5 x 7.8 mm', 'Android 12');

INSERT INTO modelo (idModelo, marca, descripcion, modelo, precioActual, megaPixeles, ram, imagen, resolucion, cincoG, dobleSim, velocidadCpu, capacidad, tipoCpu, dimensiones, sistemaOperativo)
VALUES (38, 'Xiaomi', 'Redmi Note 13', 'Redmi Note 13', 299.99, '48 MP', '4 GB', 'RedmiNote13.png', '720p', true, true, '2.0GHz', '64 GB', 'Mediatek Helio G88', '161.9 x 75.2 x 8.3 mm', 'Android 12');


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










