<?php

    require "./conexion.php";

    $id_producto = $_POST['id_producto'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $descripcion = $_POST['descripcion'];

    $foto = $_FILES['foto']['name'];
    $temp = $_FILES['foto']['tmp_name'];
    $destion = "../img/";

    if($foto == ""){
        $sql = "UPDATE producto SET nombre_producto = '$nombre', descripcion = '$descripcion', precio = '$precio', stock_disponible = '$stock' WHERE id_producto = '$id_producto'";
        $resultado = $conexion->query($sql);

        if($resultado){
            echo 1;
        }else{
            echo 2;
        }

    }else{
        $select = "SELECT * FROM producto WHERE id_producto = '$id_producto'";
        $resultado = $conexion->query($select);
        $row = $resultado->fetch_assoc();
        $fotoAntigua = $row['foto'];
        $archivo = "../img/" .$fotoAntigua;
        unlink($archivo);

        if(move_uploaded_file($temp,$destion.$foto)){
            $sql = "UPDATE producto SET foto = '$foto', nombre_producto = '$nombre', descripcion = '$descripcion', precio = '$precio', stock_disponible = '$stock' WHERE id_producto = '$id_producto'";
            $resultado = $conexion->query($sql);

            if($resultado){
                echo 1;
            }else{
                echo 2;
            }
        }
    }


?>