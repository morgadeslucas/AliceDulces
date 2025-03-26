<?php

    session_start();
    $_SESSION['id_producto'];
    $_SESSION['nombre'];
    $_SESSION['precio'];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/pedido.css">
</head>
<body>
    <div class="frase"> 
        <h3>¡Bienvenido!, Rellene sus datos y disfruta tu compra. </h3>
    </div>

    <div class="formulario">
        <form class="form" method="POST" id="login">
            <div class="titulo">
                <h3>Haga su pedido!</h3>
            </div>
            <div>
                <input type="hidden" class="form-control" name="id_producto" id="id_producto" placeholder="Id Producto" value="<?php echo $_SESSION['id_producto']?>">
            </div>
            <div class="nombre">
                <input type="text" value="<?php if(isset($_COOKIE['Nombre_cliente'])){echo $_COOKIE['Nombre_cliente'];}?>" class="form-control" name="nombre_cliente" id="nombre" placeholder="Nombre">
            </div>
            <div class="contacto">
                <div class="contact1">
                    <input type="text" value="<?php if(isset($_COOKIE['direccion'])){echo $_COOKIE['direccion'];}?>" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
                </div>
                <div class="contact2 ">
                    <input type="text" value="<?php if(isset($_COOKIE['telefono'])){echo $_COOKIE['telefono'];}?>" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
                </div>
            </div>
            <div class="correo">
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo">
            </div>
            <div class="nom_product">
                <div class="contact1">
                    <input type="text" class="form-control" name="producto" id="nombre_producto" placeholder="Producto" value="<?php echo $_SESSION['nombre']?>"> 
                </div>
                <div class="contact2">
                    <input type="number" class="form-control" name="cantidad" id="cantidad" placeholder="cantidad">
                </div>
            </div>
            <div class="nombre">
                <input type="text" class="form-control" name="precio" id="precio" placeholder="" value="<?php echo $_SESSION['precio']?>" readonly>
            </div>
            <div class="nombre">
                <input type="text" class="form-control" name="total" id="total" placeholder="total" readonly>
            </div>
            <div class="enviar">
                <input type="submit" class="form-control btn btn-primary" value="Realizar Pedido">
            </div>
        </form>
    </div>

    <div class="ancla">
        <a href="./productos.php">Volver a la interfaz anterior</a>
    </div>

    <script src="./js/pedido.js"></script>
</body>
</html>