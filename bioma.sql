create database bioma;

use bioma;
create table usuario(
	id int not null auto_increment,
    nombre varchar(20) not null,
    apellido varchar(20) not null,
    direccion varchar(255),
    email varchar(50) not null,
    contra varchar(40) not null,
    acceso varchar(7) not null,
    estado varchar(10) not null,
    primary key (id)
);

create table categoria(
	id int not null auto_increment,
    nombre varchar(10) not null,
    primary key (id)
);

create table producto(
	id int not null auto_increment,
    nombre varchar(30) not null,
    tipo varchar(20) not null,
    precio float not null,
    imagen varchar(25),
    categoria_id int not null,
    primary key (id),
    foreign key (categoria_id) references categoria (id)
);

insert into categoria (nombre) 
values
	('fruta'),
    ('verdura'),
    ('bolson'),
    ('almacen');

insert into producto (nombre, tipo, precio, imagen, categoria_id)
values
	('Cebolla Morada', 'organico', 1000, 'img/catalogo/001.jpeg', 2),
    ('Manzana Granny Smith', 'organico', 1200, 'img/catalogo/002.jpeg', 1),
	('Pepino', 'agroecologico', 1790, 'img/catalogo/003.jpeg', 2),
    ('Zanahoria', 'organico', 790, 'img/catalogo/004.jpeg', 2),
    ('Zapallito redondo', 'agroecologico', 1300, 'img/catalogo/005.jpeg', 2);
    
insert into usuario (nombre, apellido, email, contra, acceso, estado)
values
	('Agustin', 'Amor', 'awa@gmail', MD5('123qwe'), 'admin', 'activo');

