create database if not exists mecanica_automotriz;

use mecanica_automotriz;

create table if not exists taller(
id_taller int primary key  auto_increment,
nombre varchar(100) not null,
categoria varchar(100) not null,
instalaciones int not null,
direccion varchar(100) not null
);

create table if not exists servicio(
id_servicio int primary key  auto_increment,
tipo varchar(100) not null,
descripcion varchar(100) not null,

id_taller int,
foreign Key (id_taller) references taller(id_taller)
);

create table if not exists mecanico(
id_mecanico int primary key  auto_increment,
nombre varchar(50) not null,
apellido varchar(50) not null,
rol varchar(25) not null,
dui int,
telefono int,
direccion varchar(50) not null,
fechanac date,
genero varchar(15) not null,
remuneracion varchar(15) not null,

id_taller int,
foreign Key (id_taller) references taller(id_taller)
);

create table if not exists vehiculo(
id_vehiculo int primary key  auto_increment,
modelo varchar(25) not null,
tipo varchar(15) not null,
placa varchar(25) not null,
dominio varchar(15) not null,
color varchar(15) not null,
num_motor varchar(15) not null,
clase varchar(15) not null,
marca varchar(15) not null,
fecha date not null,


id_mecanico int,
foreign Key (id_mecanico) references mecanico(id_mecanico)
);
select * from vehiclienteculo;


create table if not exists cliente(
id_cliente serial primary key,
nombre varchar(50) not null,
apellido varchar(30) not null,
genero varchar(30) not null,
direccion varchar(30) not null,
telefono int not null,
tarjeta int not null,
correo varchar(30) not null,
dui varchar(30) not null,
fecha_nac  date not null,

id_vehiculo int,
foreign Key (id_vehiculo) references vehiculo(id_vehiculo)
);

SELECT * FROM cliente;

create table if not exists reserva(
id_reserva int primary key  auto_increment,
razon varchar(200) not null,
Costo varchar(15) not null,
fecha_res date,
 
id_servicio int,
foreign Key (id_servicio) references servicio(id_servicio),
id_cliente int,
foreign Key (id_cliente) references cliente(id_cliente)
);

SELECT * FROM reserva;


create table if not exists reporte(
id_reporte int primary key  auto_increment,
descripcion varchar(100) not null,
fecha date,

id_mecanico int,
foreign Key (id_mecanico) references mecanico(id_mecanico),
id_cliente int,
foreign Key (id_cliente) references cliente(id_cliente)
);


/*
INSERT INTO taller (nombre, categoria, instalaciones,direccion)
VALUES ('Secret-Danger', 'Autos', 8 ,'3a Calle Poniente, entre 15 y, 17 Avenida Nte. #916, San Salvador CP 1101');
*/

/*
INSERT INTO servicio (tipo, descripcion,id_taller) VALUES ('Limpieza','Hacerle una limpieza en el exterior del auto con agua y jabon',1),
 ('Pintura','Detallado con calidad y una ppintura excelente para todo tipo de auto',1),
 ('Mantenimiento','Revision general del auto con reporte del mismo ',1);
*/

/*
INSERT INTO mecanico (nombre, apellido,rol,dui,telefono,direccion,fechanac,genero,remuneracion,id_taller)VALUES 
('Lucas Francisco','Avelar Ramirez','Mecanico automotriz','1231543-9','83952850','12b Calle Oriente,Nte. #535, San Salvador CP 1101','1995/9/10','Hombre','$500',1),
('Luis Enrique','Ramirez Avelar','Pintor','12375753-2','93722321','65g Calle Poniente,Nte. #321, San Migel CP 2940','1991/5/2','Hombre','$575',1),
('Ricardo Almilcar','Avelar Estrada','Limpiador','143242421-9','812313522','17c Calle Poniente,Nte. #363, Santa Ana CP 4521','1999/9/9','Hombre','$654',1);
*/

/*
INSERT INTO vehiculo(modelo,tipo,placa,dominio,color,motor,clase,marca,fecha,id_mecanico) VALUES 
('R34 M-SPEC','deportivo','P1 -E16','Propiedad','azul',243242424,'Automovil(d)', 'Nissan','2005/2/12',1),
(' GT-R R35','deportivo','l1 -E56','Propiedad','rojo', 313131235,'Automovil(s)', 'Nissan','2006/3/9',2),
('supra mk4',' deportivo','k3 -G59','Propiedad','amarillo',432564513,'Automovil(s)', 'Toyota','2003/5/11',3),
('Lancer Evolution','deportivo compacto','f2 -323d','Propiedad','rojo',381039192,'Automovil(c)', 'Mitsubishi','2011/8/2',2),
('Porsche 911 GT3','Sports car ', 'h3 -83d','Propiedad','blanco',432613693,'Automovil(s)', 'Porsche', '2003/2/9',1);
*/

/*
INSERT INTO cliente (nombre,apellido,genero,direccion, telefono, tarjeta,correo,dui,fecha_nac,id_vehiculo) VALUES 
('Ricardo Daniel','Guevara Avelar','hombre','43j Calle Poniente,Nte. #323, Santa Ana CP 4264', '35849023', '93242748400801','avelar@gmail.com', '328023109-0','2000/4/4',5),
('Juan Jose','Galdamez Soto', 'hombre','92a Calle Oriente,Nte. #131, San Migel CP 2342','23436524', '18023712638717','galdamez@gmail.com', '9274829380-0','2002/12/6',2), 
('Marcos-Antonio','avila bernal','hombre','84u Calle Poniente,Nte. #243, San Salvador CP 6456', '913213712', '4242424267221','avilar@gmail.com', '32342561-5','2003/2/10',3),
('Luis Francisco','Estradela Guzman','hombre','23g Calle Poniente,Nte. #764, La libertad  CP 5431', '202852196', '356309225992','estradela@gmail.com', '42342347-8','2002/1/2',1),
('Jose Julian','Garcia Alvarez','hombre','86l Calle Oriente,Nte. #634, San Salvador CP 2426', '42349426', '0434923492','garcias@gmail.com', '32409829-3','2000/1/2',4);
*/

/*
INSERT INTO reserva (razon, gastos,fecha_res,id_servicio,id_cliente) VALUES 
('Revision General del r34','$50','5/3/2023',3,4),
('Cambio de pintura al carro r35 color azul','$150','24/1/2023',2,2),
('revision de frenos del porsche','$60','4/8/2022',3,1),
('Cambio de pintura al evolution color verde','$100','12/10/2022',2,5),
('Limpieza interna del supra','$100','13/1/2022',1,2);
*/

/*
INSERT INTO reporte (descripcion, fecha,id_mecanico,id_cliente) VALUES 
('Cambio de pintura al carro r35 color azul','24/1/2023',2,2),
('Cambio de pintura al evolution color verde','12/10/2022',2,5),
('Revision General del r34','5/3/2023',1,4),
('Limpieza interna del supra4','13/1/2022',3,3),
('revision de frenos del porsche','4/8/2022',1,1);
*/