-- Active: 1728287207948@@127.0.0.1@3306@alice_dulces
create database alice_dulces;
use alice_dulces;
drop database alice_dulces;

create table usuario(
	id_usuario int primary key auto_increment,
    nombre_usuario varchar(100),
    email varchar(100),
    contra varchar(100)
);

-- create table cliente(
-- 	id_cliente int primary key auto_increment,
--     nombre varchar(100) not null,
--     apellido varchar(100) not null,
--     direccion varchar(100) not null,
--     telefono_contact varchar(100) not null,
--     correo varchar(100)
-- );

-- insert into cliente (nombre,apellido,direccion,telefono_contact,correo)
-- value
-- ("Santander","Morgades","Ukomba","+240 555432345","Santandermorgades@gmail.com"),
-- ("Lucas","Santander Morgades","Ikunde","+240 222344567","Lucassantander@gmail.com"),
-- ("Martina","Andrea ondo","Ekuku","+240 555309785","AndreaOndo@gmail.com");

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

SELECT 
    pedido.id_pedido,
    pedido.nombre_cliente,
    pedido.direccion_cliente,
    pedido.telefono_contacto,
    pedido.correo_cliente,
    pedido.fecha_pedido,
    pedido.fecha_caducidad,
    pedido.cantidad,
    pedido.total,
    pedido.estado,
    producto.nombre_producto,
    producto.precio
FROM 
    pedido
INNER JOIN 
    producto
ON 
    pedido.id_producto = producto.id_producto;

        SELECT 
            pedido.id_pedido,
            pedido.nombre_cliente,
            pedido.direccion_cliente,
            pedido.telefono_contacto,
            pedido.correo_cliente,
            pedido.fecha_pedido,
            pedido.fecha_caducidad,
            pedido.cantidad,
            pedido.total,
            pedido.estado,
            producto.nombre_producto,
            producto.precio
        FROM 
            pedido
        INNER JOIN 
            producto
        ON 
            pedido.id_producto = producto.id_producto;
            

        UPDATE pedido
        SET estado = 'Cancelado'
        WHERE id_pedido = 2;



SELECT pedido.nombre_cliente,pedido.direccion_cliente,pedido.correo_cliente 
-- insert into pedido(id_cliente,id_producto,fecha_pedido,fecha_caducidad,estado)
-- value
-- (1,2,"2025-05-04","2025-05-10","pendiente"),
-- (1,3,"2025-01-14","2025-01-24","Confirmado"),
-- (2,1,"2025-03-04","2025-03-9","pendiente"),
-- (3,3,"2025-04-04","2025-04-12","Cancelado");

create table producto(
	id_producto int primary key auto_increment,
    foto VARCHAR(100) not null,
    nombre_producto varchar(100) not null,
    descripcion varchar(100) not null,
    precio int not null,
    stock_disponible int
);



-- insert into producto(nombre_producto,descripcion,precio,stock_disponible) 
-- value
-- ("Pastel de Coco","Tarta hecha a base un biscocho,cremada de coco y nata casera",5000,30),
-- ("Pastel de Chocolate","Tarta de chocolate negro con nueces y frutos secos",15000,10),
-- ("Pastel Blanco","Tarta de chocolate blanco con crema y elementos adicionales",10000,15),
-- ("Tarta de fresa","Tarta de fresa con chocolate negro",5000,20);

create table pago(
	id_pago int primary key auto_increment,
    id_pedido int,
    fecha_pago date not null,
    monto int not null,
    estado enum("Completado","Pendiente"),
    
	FOREIGN KEY (id_pedido) REFERENCES pedido(id_pedido)
);

SELECT pago.fecha_pago, pago.monto, pago.estado, pago.id_pedido, 
                     pedido.nombre_cliente AS cliente_nombre, pedido.correo_cliente AS cliente_correo 
              FROM pago 
              INNER JOIN pedido ON pedido.id_pedido = pago.id_pedido;

SELECT * from pedido WHERE estado = 'confirmado';
UPDATE pago
SET estado = 'Completado'
WHERE id_pago = 1;