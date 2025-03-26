<?php

    require "./conexion.php";

    $valor = $_POST['buscar'];
    $json = [];

    $sql = "SELECT * FROM producto WHERE nombre_producto Like '%''$valor''%'";
    $respuesta = $conexion->query($sql);

    if(mysqli_num_rows($respuesta)>0){
        while($product =  $respuesta->fetch_assoc()){
            $json [] = $product;
        }
    }else{
        echo 2;
    }

    echo json_encode($json);

?>