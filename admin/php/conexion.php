<?php

    $servidor = 'localhost';
    $usuario = 'root';
    $clave = '';
    $bd = 'alice_dulces';

    $conexion = new mysqli($servidor, $usuario, $clave, $bd);

    // if($conexion){
    //     echo 'Conexión exitosa';
    // }else{
    //     echo 'Conexión fallida';
    // }

?>