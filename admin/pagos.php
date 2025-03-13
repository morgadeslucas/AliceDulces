<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/pagos.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>
<body>
    <?php include './aside.php'?>
    <div class="stock_con">
        <div class="perfil">
            <h5>BIENVENIDO Sr/a SANTANDER</h5>
        </div>
        <div class="text_stock">
            <h2>REGISTRO DE LOS PAGOS DE LAS RESERVAS</h2>
        </div>
        <div class="con_boton">
            <div class="agregar">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Registrar Pago
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="formulario">
                            <input type="text" class="form-control" placeholder="Introduzce el nombre del producto">
                            <input type="text" class="form-control" placeholder="Introduzca el precio">
                            <input type="text" class="form-control" placeholder="Introduzca la cantidad en Stock">
                            <textarea name="" class="form-control" placeholder="Descripcion" id=""></textarea>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Understood</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>