<?php

    require "./conexion.php";

    $id_pago = $_POST['id_pago'];
    $id_pedido = $_POST['id_pedido'];
    $fecha = $_POST['fecha_pago'];
    $monto = $_POST['monto'];
    $estado = $_POST['estado'];


    $sql = "SELECT * FROM pago WHERE id_pago = '$id_pago'";
    $resul = $conexion->query($sql);

    if ($resul) {
        $update = " UPDATE pago SET fecha_pago = '$fecha', estado = '$estado' WHERE id_pago = '$id_pago'";
        $resultado = $conexion->query($update);

        if ($resultado) {
            echo 1;
        }else{
            echo 2;
        }

    }


?>