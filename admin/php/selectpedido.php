<?php

    require "./conexion.php";

    $sql = "SELECT 
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
        pedido.id_producto = producto.id_producto;";
    $res = $conexion->query($sql);

    $array = [];

    while($fila = $res->fetch_assoc())
        $array [] = $fila;

        echo json_encode($array);

?>