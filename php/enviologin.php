<?php

    require "../admin/php/conexion.php";

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $pass = $_POST['contra'];

        $sql = "INSERT INTO usuario(nombre_usuario,email,contra) VALUES ('$nombre','$correo','$pass')";
        $result = $conexion->query($sql);

        if($result){
            echo 1;
        }else{
            echo 2;
        }
    }



?>