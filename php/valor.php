<?php
    session_start();

    

    $_SESSION['id_producto'] = $_POST['id_producto'];
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['precio'] = $_POST['precio'];

    echo 1;
?>