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
            <h2>REGISTRO DE LOS PAGOS DE LOS PEDIDOs</h2>
        </div>
        <div class="con_boton">
            <div class="agregar">
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Registrar Pago
                </button> -->

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar Pago</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="formulario" id="pagos">
                            <input name="id_pago" type="hidden" class="form-control" placeholder="id_pago" id="id_pago" >
                            <input name="id_pedido" type="hidden" class="form-control" placeholder="id_pedido" id="id_pedido">
                            <input name="fecha_pago" type="date" class="form-control" placeholder="fecha_pago" id="fecha_pago">
                            <input name="monto" type="hidden" class="form-control" placeholder="Monto" id="monto" >
                            <select class="form-control" name="estado" id="estado">
                                <option value="">Estado de pago</option>
                                <option value="Completado">Complatado</option>
                            </select>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="pago container mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">Nombre Cliente</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Fecha pago</th>
                        <th class="text-center">Monto</th>
                        <th class="text-center">Estado</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla_pago">
                    <!-- <tr>
                        <td class="text-center">Santander</td>
                        <td class="text-center">Santander@gmail.com</td>
                        <td class="text-center">09-09-2025</td>
                        <td class="text-center">200000</td>
                        <td class="text-center">Pediente</td>
                        <td class="text-center">
                           <button class="btn btn-success"><i class="fa-solid fa-check"></i></button> 
                           <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button> 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Santander</td>
                        <td class="text-center">Santander@gmail.com</td>
                        <td class="text-center">09-09-2025</td>
                        <td class="text-center">200000</td>
                        <td class="text-center">Pediente</td>
                        <td class="text-center">
                           <button class="btn btn-success"><i class="fa-solid fa-check"></i></button> 
                           <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button> 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Santander</td>
                        <td class="text-center">Santander@gmail.com</td>
                        <td class="text-center">09-09-2025</td>
                        <td class="text-center">200000</td>
                        <td class="text-center">Pediente</td>
                        <td class="text-center">
                           <button class="btn btn-success"><i class="fa-solid fa-check"></i></button> 
                           <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button> 
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">Santander</td>
                        <td class="text-center">Santander@gmail.com</td>
                        <td class="text-center">09-09-2025</td>
                        <td class="text-center">200000</td>
                        <td class="text-center">Pediente</td>
                        <td class="text-center">
                           <button class="btn btn-success"><i class="fa-solid fa-check"></i></button> 
                           <button class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button> 
                        </td>
                    </tr> -->
                </tbody>
            </table>
        </div>
    </div>

    <script src="./js/bootstrap.min.js"></script> 
    <script src="./js/crudpagos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</body>
</html>