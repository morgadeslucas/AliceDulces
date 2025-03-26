<?php

    require "./conexion.php";

    if(isset($_POST['nombre'])){

        $destino = "../img/";
        $foto = $_FILES['foto']['name'];
        $temp = $_FILES['foto']['tmp_name'];
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $descripcion = $_POST['descripcion'];

        $arrayNombreArchi = explode('.', $foto);
        $extension = strtolower(end($arrayNombreArchi));

        $arrayExtre = array('jpg','png','jpeg','gif');

        if(in_array($extension,$arrayExtre)){
            if(move_uploaded_file($temp,$destino.$foto)){
                $sql = "INSERT INTO producto (foto,nombre_producto,descripcion,precio,stock_disponible) VALUES ('$foto','$nombre','$descripcion', '$precio', '$stock')";
                $resultado = $conexion->query($sql);

                if($resultado){
                    echo 1;
                }else{
                    echo 2;
                }

            }
        }
    }




?>