create database if not exists mecánica_automotriz;

use mecánica_automotriz;

create table if not exists taller(
id_taller int(11) auto_increment primary key  ,
nombre varchar(100) not null,
categoría varchar(100) not null,
instalaciones int not null,
dirección varchar(100) not null
);

create table if not exists cargo(
id int primary key auto_increment,
descripción varchar(250) not null
);


create table if not exists servicio(
id_servicio int(11) auto_increment primary key ,
tipo varchar(100) not null,
descripción varchar(250) not null,
taller int(11) not null,
constraint foreign Key (taller) references taller(id_taller)
ON UPDATE CASCADE
ON DELETE CASCADE
);

create table if not exists mecánico(
id_mecánico int(11) auto_increment primary key ,
nombre varchar(50) not null,
apellido varchar(50) not null,
rol varchar(25) not null,
dui varchar(20) not null,
teléfono varchar(10) not null,
dirección varchar(50) not null,
fechaNacido date not null,
genero varchar(15) not null,
remuneración varchar(15) not null,
id_taller int(11) not null,
foreign Key (id_taller) references taller(id_taller)
ON UPDATE CASCADE
ON DELETE CASCADE
);

create table if not exists vehículo(
id_vehículo int(11) auto_increment primary key,
modelo varchar(25) not null,
tipo varchar(25) not null,
placa varchar(25) not null,
dominio varchar(15) not null,
color varchar(15) not null,
num_motor varchar(15) not null,
clase varchar(15) not null,
marca varchar(15) not null,
fecha date not null,
mecánico int(11) not null,
constraint foreign Key (mecánico) references mecánico(id_mecánico)
ON UPDATE CASCADE
ON DELETE CASCADE
);

create table if not exists cliente(
id_cliente int(11) auto_increment primary key,
nombre varchar(50) not null,
apellido varchar(30) not null,
genero varchar(30) not null,
direcciÓn varchar(100) not null,
teléfono varchar(25) not null,
tarjeta varchar(25) not null,
correo varchar(30) not null,
dui varchar(25) not null,
fecha_nac  date not null,
vehículo int(11) not null,
constraint foreign Key (vehículo) references vehículo(id_vehículo)
ON UPDATE CASCADE
ON DELETE CASCADE
);

create table if not exists reserva(
id_reserva int(11) auto_increment primary key,
razón varchar(200) not null,
Costo varchar(15) not null,
fecha_res date not null,
servicio int not null,
constraint foreign Key (servicio) references servicio(id_servicio),
cliente int(11) not null,
constraint foreign Key (cliente) references cliente(id_cliente)
ON UPDATE CASCADE
ON DELETE CASCADE
);

create table if not exists reporte(
id_reporte int(11) auto_increment primary key,
descripción varchar(100) not null,
fecha date not null,
mecánico int(11) not null,
constraint foreign Key (mecánico) references mecánico(id_mecánico),
cliente int(11) not null,
constraint foreign Key (cliente) references cliente(id_cliente)
ON UPDATE CASCADE
ON DELETE CASCADE
);

/*
insert into cargo (id,descripción) values ('1', 'administrador'), ('2', 'cliente');

INSERT INTO taller (nombre, categoría, instalaciones,dirección)
VALUES ('Secret-Danger', 'Autos', 8 ,'3a Calle Poniente, entre 15 y, 17 Avenida Nte. #916, San Salvador CP 1101');



INSERT INTO servicio (tipo, descripción,taller) VALUES ('Limpieza','Hacerle una limpieza en el exterior del auto con agua y jabon',1),
 ('Pintura','Detallado con calidad y una pintura excelente para todo tipo de auto',1),
 ('Mantenimiento','Revision general del auto con reporte del mismo ',1);



INSERT INTO mecánico (nombre, apellido,rol,dui,teléfono,dirección,fechaNacido,genero,remuneración,id_taller)VALUES 
('Lucas Francisco','Avelar Ramirez','Mecánico automotriz','1231543-9','83952850','12b Calle Oriente,Nte. #535, San Salvador CP 1101','1995/9/10','Hombre','$500',1),
('Luis Enrique','Ramirez Avelar','Pintor','12375753-2','93722321','65g Calle Poniente,Nte. #321, San Miguel CP 2940','1991/5/2','Hombre','$575',1),
('Ricardo Amilcar','Avelar Estrada','Limpiador','143242421-9','812313522','17c Calle Poniente,Nte. #363, Santa Ana CP 4521','1999/9/9','Hombre','$654',1);



INSERT INTO vehículo(modelo,tipo,placa,dominio,color,num_motor,clase,marca,fecha,mecánico) VALUES 
('R34 M-SPEC','deportivo','P1 -E16','Propiedad','azul',243242424,'Automóvil(d)', 'Nissan','2005/2/12',1),
(' GT-R R35','deportivo','l1 -E56','Propiedad','rojo', 313131235,'Automóvil(s)', 'Nissan','2006/3/9',2),
('supra mk4',' deportivo','k3 -G59','Propiedad','amarillo',432564513,'Automóvil(s)', 'Toyota','2003/5/11',3),
('Lancer Evolution','deportivo','f2 -323d','Propiedad','rojo',381039192,'Automóvil(c)', 'Mitsubishi','2011/8/2',2),
('Porsche 911 GT3','Sports car ', 'h3 -83d','Propiedad','blanco',432613693,'Automóvil(s)', 'Porsche', '2003/2/9',1);



INSERT INTO cliente (nombre,apellido,genero,dirección, teléfono, tarjeta,correo,dui,fecha_nac,vehículo) VALUES 
('Ricardo Daniel','Guevara Avelar','hombre','43j Calle Poniente', '35849023', '93242','avelar@gmail.com', '328023109-0','2000/4/4',6),
('Juan Jose','Galdamez Soto', 'hombre','CP 2342','23436524', '1802371','galdamez@gmail.com', '9274829380-0','2002/12/6',6), 
('Marcos-Antonio','avila bernal','hombre','8, San Salvador CP 6456', '913212', '4242424267','avilar@gmail.com', '32342561-5','2003/2/10',7),
('Luis Francisco','Estradela Guzman','hombre','La libertad  CP 5431', '202852196', '35630922','estradela@gmail.com', '42342347-8','2002/1/2',8),
('Jose Julian','Garcia Alvarez','hombre','san Salvador CP 2426', '42349426', '0434923492','garcias@gmail.com', '32409829-3','2000/1/2',9);



INSERT INTO reserva (razón, costo,fecha_res,servicio,cliente) VALUES 
('Revision General del r34','$50','2023/5/3',3,31),
('Cambio de pintura al carro r35 color azul','$150','2023/01/24',2,32),
('revision de frenos del Porsche','$60','2022/8/4',3,34),
('Cambio de pintura al evolution color verde','$100','2022/10/12',2,33),
('Limpieza interna del supra','$100','2022/1/13',1,37);



INSERT INTO reporte (descripción, fecha,mecánico,cliente) VALUES 
('Cambio de pintura al carro r35 color azul','2023/01/24',2,31),
('Cambio de pintura al evolution color verde','2022/10/12',2,32),
('Revision General del r34','2023/3/5',1,33),
('Limpieza interna del supra4','2022/1/13',3,34),
('revision de frenos del Porsche','2022/8/4',1,35);
*/