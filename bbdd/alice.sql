-- Active: 1728287207948@@127.0.0.1@3306@alice_dulces
drop database alice_dulces;
create database alice_dulces;
use alice_dulces;

create table usuario(
	id_usuario int primary key auto_increment,
    nombre_usuario varchar(100),
    email varchar(100),
    contra varchar(100)
);


create table pedido(
	id_pedido int primary key auto_increment,
    nombre_cliente varchar(100) NOT NULL,
    direccion_cliente varchar(100) NOT NULL,
    telefono_contacto varchar(100) NOT NULL,
    correo_cliente varchar(100),
    id_producto int NOT NULL,
    fecha_pedido timestamp default current_timestamp,
    fecha_caducidad date ,
    cantidad int,
    total int,
    estado enum("Pendiente","Confirmado","Cancelado") default "Pendiente",
    
	FOREIGN KEY (id_producto) REFERENCES producto(id_producto)
);


create table producto(
	id_producto int primary key auto_increment,
    foto VARCHAR(100) not null,
    nombre_producto varchar(100) not null,
    descripcion varchar(100) not null,
    precio int not null,
    stock_disponible int
);


create table pago(
	id_pago int primary key auto_increment,
    id_pedido int,
    fecha_pago date not null,
    monto int not null,
    estado enum("Completado","Pendiente"),
    
	FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido)
);
