<?php

require "../php/conexion.php";

if (!isset($_POST['fk_pedido'])) {
    die("Error: No se proporcionó el ID del pedido.");
}

$pedido = $_POST['fk_pedido'];

echo $pedido;

$sql = "SELECT 
                pedido.id_pedido,
                pedido.nombre_cliente,
                pedido.direccion_cliente,
                pedido.telefono_contacto,
                pedido.correo_cliente,
                pedido.fecha_pedido,
                pedido.fecha_caducidad,
                pedido.cantidad,
                pedido.total,
                pedido.estado,
                producto.nombre_producto,
                producto.precio As precio_producto
            FROM 
                pedido
            INNER JOIN 
                producto
            ON 
                pedido.id_producto = producto.id_producto
            WHERE 
                pedido.id_pedido = '$pedido'";

$resultado = $conexion->query($sql);

$fila = $resultado->fetch_assoc();

$nombre = $fila['nombre_cliente'];
$fecha_pedido = $fila['fecha_pedido'];
$fecha_caducidad = $fila['fecha_caducidad'];
$nombre_producto = $fila['nombre_producto'];
$cantidad_producto = $fila['cantidad'];
$precio = $fila['precio_producto'];
$total = $fila['total'];
$correo = $fila['correo_cliente'];




$destino = "$correo";
$asunto = "Confirmacion de pedido";
$conten = "HOla Mundo!";
$cuerpo = '<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Pedido</title>
</head>
<body style="font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;">
    <div class="container" style="max-width: 450px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <div class="header" style=" text-align: center;
            padding: 20px 0;
            border-bottom: 1px solid #eee;">
            <img src="../../img/pasteleria.png" alt="Logo de la Empresa" class="logo" style="width:90px; height:90px;">
            <h1>¡Gracias por tu pedido!</h1>
        </div>
        
        <div class="order-confirmation" style="background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 5px;
            margin: 20px 0;">
            <h2>Pedido Confirmado</h2>
            <p>Tu pedido ha sido recibido y Aceptado.</p>
        </div>
        
        <p>Estimado/a' .$nombre. ',</p>
        
        <p>Nos complace confirmar que hemos recibido tu pedido. A continuación encontrarás los detalles:</p>
        
        <div class="order-details" style="margin: 20px 0;
            border: 1px solid #eee;
            border-radius: 5px;
            padding: 15px;">
            <h3>Detalles del Pedido:</h3>
            <p><strong>Fecha del Pedido:</strong>'.$fecha_pedido.'</p>
            <p><strong>Fecha de Recogida:</strong>'.$fecha_caducidad.'</p>
        </div>
        
        <table class="product-table" style="width: 100%;
            border-collapse: collapse;
            margin: 20px 0;">
            <tr>
                <th style="background-color: #f2f2f2;
            text-align: left;
            padding: 10px;">Producto</th>
                <th style="background-color: #f2f2f2;
            text-align: left;
            padding: 10px;">Cantidad</th>
                <th style="background-color: #f2f2f2;
            text-align: left;
            padding: 10px;">Precio</th>
            </tr>
            <tr>
                <td style="padding: 10px;
            border-bottom: 1px solid #eee;">'.$nombre_producto.'</td>
                <td style="padding: 10px;
            border-bottom: 1px solid #eee;">'.$cantidad_producto.'</td>
                <td class="price" style=" text-align: right;
            font-weight: bold;">'.$precio.'</td>
            </tr>
        </table>
        
        <div class="total" style="text-align: right;
            font-size: 18px;
            margin: 20px 0;">
            <p><strong>Total:</strong>'.$total.' XFA</p>
        </div>
        
        
        <p>Si tienes alguna pregunta sobre tu pedido, no dudes en contactarnos respondiendo a este correo [ Alicedulces@gmail.com ] o llamando a nuestro servicio de atención al cliente al [ +240 555541067 ].</p>
        
        <p>¡Gracias por confiar en nosotros!</p>
        
        <div class="footer" style="text-align: center;
            padding: 20px 0;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;">
            <p>&copy; 2025 [Alice Dulces]. Todos los derechos reservados.</p>
            <p>Puedes ver nuestra <a href="#">política de privacidad</a> y <a href="#">términos de servicio</a>.</p>
            <p>Si prefieres no recibir estos correos, <a href="#">cancela tu suscripción</a>.</p>
        </div>
    </div>
</body>
</html>';

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $mail = mail($destino,$asunto, $cuerpo,$headers);

    if($mail){
        echo 1;
    }else{
        echo 2;
    }


?>