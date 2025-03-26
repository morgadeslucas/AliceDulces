<?php
    require "./conexion.php";

    $sql = "SELECT * FROM producto";
    $result = $conexion->query($sql);

    $json = [];

    while($fila = $result->fetch_assoc())
        $json [] = $fila;

    echo json_encode($json);
?>