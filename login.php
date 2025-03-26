<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <a href="./index.php" class="inicio">Volver al Inicio</a>
    <form class="formulario" id="inicio" method="POST">
        <div class="login">
            <h1>LOGIN</h1>
        </div>
        <div class="inputs">
            <input name="email" type="email" class="form-control" placeholder="Introduzca su nombre de usuario">
            <input name="pwd" type="password" class="form-control" placeholder="Introduzca su contraseña">
        </div>
        <div class="enviar">
            <input type="submit" class="form-control" value="Iniciar Sesión">
        </div>
    </form>
    <div class="crearCuenta">
        <a href="./loginsesion.php">Crear Cuenta</a>
    </div>


    <script src="./js/iniciarsesion.js"></script>
</body>
</html>