<?php

    require "../admin/php/conexion.php";

    $sql = "SELECT * FROM producto LIMIT 6";
    $resul = $conexion->query($sql);

    $json = [];

    while($product = $resul->fetch_assoc())
        $json [] = $product;

    echo json_encode($json);

?>