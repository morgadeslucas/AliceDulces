<?php
    require "../admin/php/conexion.php";
    $sql = "SELECT * FROM producto";
    $result = mysqli_query($conexion, $sql);
    $json = [];

    while($product = $result->fetch_assoc())
        $json [] = $product;

    echo json_encode($json);
?>