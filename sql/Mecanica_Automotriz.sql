create database if not exists mecanica_automotriz;

use mecanica_automotriz;

create table if not exists taller(
id_taller int primary key  auto_increment,
nombre varchar(100) not null,
categoria varchar(100) not null,
instalaciones int not null,
direccion varchar(100) not null
);

create table if not exists cargo(
id int primary key auto_increment,
descripcion varchar(250) not null
);
insert into cargo (id,descripcion) values ('1', 'administrador'), ('2', 'cliente');

create table if not exists servicio(
id_servicio int primary key  auto_increment,
tipo varchar(100) not null,
descripcion varchar(100) not null
/*
id_taller int,
foreign Key (id_taller) references taller(id_taller)*/
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

id_cargo int,
foreign Key (id_cargo) references cargo(id)
/*
id_taller int,
foreign Key (id_taller) references taller(id_taller)*/
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
fecha date not null
/*
id_mecanico int,
foreign Key (id_mecanico) references mecanico(id_mecanico)*/
);

select * from cliente;
create table if not exists cliente(
id_cliente int primary key  auto_increment,
nombre varchar(50) not null,
apellido varchar(30) not null,
genero varchar(30) not null,
direccion varchar(30) not null,
telefono int not null,
tarjeta int not null,
correo varchar(30) not null,
dui varchar(30) not null,
fecha_nac  date not null,
contra varchar(30) not null,

id_cargo int,
foreign Key (id_cargo) references cargo(id)

/*
id_vehiculo int,
foreign Key (id_vehiculo) references vehiculo(id_vehiculo)*/
);

create table if not exists reserva(
id_reserva int primary key  auto_increment,
razon varchar(200) not null,
Costo varchar(15) not null,
fecha_res date
 /*
id_servicio int,
foreign Key (id_servicio) references servicio(id_servicio),
id_cliente int,
foreign Key (id_cliente) references cliente(id_cliente)*/
);

create table if not exists reporte(
id_reporte int primary key  auto_increment,
descripcion varchar(100) not null,
fecha date
/*
id_mecanico int,
foreign Key (id_mecanico) references mecanico(id_mecanico),
id_cliente int,
foreign Key (id_cliente) references cliente(id_cliente)*/
);


	