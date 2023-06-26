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

select * from vehículo;
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
fecha date not null

/*
mecánico int(11) not null,
constraint foreign Key (mecánico) references mecánico(id_mecánico)
ON UPDATE CASCADE
ON DELETE CASCADE
*/
);

create table if not exists cliente(
id_cliente int(11) auto_increment primary key,
nombre varchar(50) not null,
apellido varchar(30) not null,
correo varchar(100) NOT NULL,
genero varchar(30) not null,
dirección varchar(100) not null,
teléfono varchar(25) not null,
tarjeta varchar(25) not null,
dui varchar(25) not null,
fecha_nac  date not null,
contra varchar(50) NOT NULL
/*
vehículo int(11) not null,
constraint foreign Key (vehículo) references vehículo(id_vehículo)
ON UPDATE CASCADE
ON DELETE CASCADE*/
); 

create table if not exists reserva(
id_reserva int(11) auto_increment primary key,
razón varchar(200) not null,
Costo varchar(15) not null,
fecha_res date not null,
/*servicio int not null,*/
/*constraint foreign Key (servicio) references servicio(id_servicio),*/
/*cliente int(11) not null,*/
/*constraint foreign Key (cliente) references cliente(id_cliente)*/
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
