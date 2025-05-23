<?php

    require "./php/conexion.php";

    $sql = "  SELECT COUNT(*) AS total_productos FROM producto";
    $result = $conexion->query($sql);

    $pedido = "SELECT COUNT(*) AS total_pedido FROM pedido";
    $respu = $conexion->query($pedido);

    $confir = "SELECT COUNT(*) AS pedido_confirmado FROM pedido WHERE estado = 'confirmado'";
    $rest = $conexion->query($confir);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>
<body>
    <?php include './aside.php'?>
    <div class="contenedor">
        <div class="perfil">
            <h5>BIENVENIDO Sr/a SANTANDER</h5>
            <div class="notifi">
                <div class="noti_ico">
                    <a href="./reserva.php"><i class="fa-solid fa-bell"></i></a>
                </div>
                <span>2</span>
            </div>
        </div>
        <div class="infore">
            <div class="infore_con">
                <i class="fa-solid fa-boxes-stacked"></i> 
                  <?php while($row = $result->fetch_assoc()){?>             
                <h3>Total de productos</h3>
                <p><?php echo $row['total_productos']?></p>
                <?php } ?>
            </div>
            <div class="infore_con">
                <i class="fa-solid fa-cookie-bite"></i>
                <?php while($fila = $respu->fetch_assoc()){?>             
                <h3>Total de pedidos</h3>
                <p><?php echo $fila['total_pedido']?></p>
                <?php } ?>
            </div>
            <div class="infore_con">
                <i class="fa-regular fa-circle-check"></i>
                <?php while($obj = $rest->fetch_assoc()){?>             
                <h3>Pedidos Confirmados</h3>
                <p><?php echo $obj['pedido_confirmado']?></p>
                <?php } ?>
            </div>
            <div class="infore_con">
                <i class="fa-solid fa-clipboard-list"></i>
                <h3>Productos Restantes</h3>
                <p>300</p>
            </div>
        </div>
        <div class="tabla">
            <div class="text">
                <h3>Productos mas vendidos</h3>
            </div>
            <div class="tab_con ">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre Producto</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Cantidad Vendida</th>
                            <th class="text-center">Cantidad Restante</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">Pastel de coco</td>
                            <td class="text-center">5000 francos</td>
                            <td class="text-center">15</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de coco</td>
                            <td class="text-center">5000 francos</td>
                            <td class="text-center">15</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de coco</td>
                            <td class="text-center">5000 francos</td>
                            <td class="text-center">15</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de coco</td>
                            <td class="text-center">5000 francos</td>
                            <td class="text-center">15</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de coco</td>
                            <td class="text-center">5000 francos</td>
                            <td class="text-center">15</td>
                            <td class="text-center">5</td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de coco</td>
                            <td class="text-center">5000 francos</td>
                            <td class="text-center">15</td>
                            <td class="text-center">5</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>