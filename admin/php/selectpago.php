<?php

    require "./conexion.php";

    $query = "SELECT pago.id_pago, pago.fecha_pago, pago.monto, pago.estado, pago.id_pedido, 
                     pedido.nombre_cliente AS cliente_nombre, pedido.correo_cliente AS cliente_correo 
              FROM pago 
              INNER JOIN pedido ON pago.id_pedido = pedido.id_pedido";

    $result = $conexion->query($query);

    $json =[];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $json[] = $row;
            // echo "Fecha de Pago: " . $row['fecha_pago'] . " - Monto: " . $row['monto'] . 
            //      " - Estado: " . $row['estado'] . " - ID Pedido: " . $row['id_pedido'] . 
            //      " - Cliente: " . $row['cliente_nombre'] . " - Correo: " . $row['cliente_correo'] . "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }

    echo json_encode($json);




?>