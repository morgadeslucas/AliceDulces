<?php


    require '../admin/php/conexion.php';

    $fecha_actual;

    $fecha_actual = date('Y-m-d');
    
    $fecha_caducidad;

    $suma = strtotime('+7 days', strtotime($fecha_actual));
    $fecha_caducidad = date('Y-m-d',$suma);


    if(isset($_POST['nombre_cliente'])){
        $id_producto = $_POST['id_producto'];
        $nombre_cliente = $_POST['nombre_cliente'];
        $direccion = $_POST['direccion'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $nombre_producto =$_POST['producto'];
        $cantidad = $_POST['cantidad'];
        $precio = $_POST['precio'];
        $total = $_POST['total'];

        setcookie('Nombre_cliente',$_POST['nombre_cliente'],time()+30,"/");
        setcookie('direccion',$_POST['direccion'],time()+30,"/");
        setcookie('telefono',$_POST['telefono'],time()+30,"/");


        $sql = "INSERT INTO pedido(nombre_cliente,direccion_cliente,telefono_contacto,correo_cliente,id_producto,fecha_caducidad,cantidad,total)
        VALUE ('$nombre_cliente','$direccion','$telefono','$correo',$id_producto,'$fecha_caducidad',$cantidad,$total)";
        $result = $conexion->query($sql);

        if($result){
            echo 1;
            session_start();
            session_destroy();
        }else{
            echo 2;
        }
    }

?>