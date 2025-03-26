<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/loginsesion.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    <div class="registro_dato">
        <p>Para realizar el registro se necesita que rellene toda la informacion que se le pide en el formulario</p>
        <p>Muchas Gracias!</p>
    </div>
    <form class="form" id="formulario" method="POST">
        <div class="sesion">
            <h2>REGISTRAR CUENTA</h2>
        </div>
       <div class="contenido">
            <div class="nombre">
                <div class="nom"><input name="nombre" class="form-control" placeholder="Nombre" type="text"></div>
            </div>
            <div class="nombre">
                <div class="nom"><input name="correo" class="form-control" placeholder="Correo" type="email"></div>
            </div>
            <div class="contra">
                <input name="contra" class="form-control" placeholder="Introduzca su contraseña" type="password">
            </div>

       </div>
       <div class="submit">
        <input name="enviar" class="form-control btn btn-success" type="submit" value="Crear Cuenta" >
       </div>
    </form>

        <div class="volver">
            <a href="./login.php"><i class="fa-solid fa-door-open"></i>volver</a>
        </div>

    <script src="./js/enviologin.js"></script>
</body>
</html>