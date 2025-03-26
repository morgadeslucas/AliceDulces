<?php

require "./conexion.php";
    // Validar la conexión a la base de datos
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener y sanitizar el ID del pedido
$id_pedido = isset($_POST['id_pedido']) ? (int)$_POST['id_pedido'] : 0;

if ($id_pedido <= 0) {
    die("ID de pedido inválido.");
}

// Actualizar el estado del pedido usando consultas preparadas
$sql = "UPDATE pedido SET estado = 'Confirmado' WHERE id_pedido = ?";
$stmt = mysqli_prepare($conexion, $sql);
mysqli_stmt_bind_param($stmt, "i", $id_pedido);

if (!mysqli_stmt_execute($stmt)) {
    die("Error al actualizar el pedido: " . mysqli_error($conexion));
}

// Consultar los datos del pedido
$select = "SELECT 
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
                producto.precio
            FROM 
                pedido
            INNER JOIN 
                producto
            ON 
                pedido.id_producto = producto.id_producto
            WHERE 
                pedido.id_pedido = ?";
$stmt_select = mysqli_prepare($conexion, $select);
mysqli_stmt_bind_param($stmt_select, "i", $id_pedido);
mysqli_stmt_execute($stmt_select);

$resulta = mysqli_stmt_get_result($stmt_select);

// Construir el JSON con los resultados
$json = [];
// while ($row = mysqli_fetch_assoc($resulta)) {
//     $json[] = $row;
// }
$row = $resulta->fetch_assoc();

function horaActual($hora = 'H-i-s'){
    date_default_timezone_set('UTC');
    return date(($hora));
}

$id_pedido = $row['id_pedido'];
$nombre_cliente = $row['nombre_cliente'];
$horas = horaActual();
$monto = $row['total'];

$pago = "INSERT INTO pago (id_pedido,fecha_pago,monto,estado) 
VALUES('$id_pedido','$horas','$monto','pendiente')";

$re = $conexion->query($pago);


// Devolver el JSON
echo json_encode($json);

// Cerrar las consultas preparadas y la conexión
mysqli_stmt_close($stmt);
mysqli_stmt_close($stmt_select);
mysqli_close($conexion);
?>