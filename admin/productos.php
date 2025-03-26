<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/productos.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
</head>
<body>
    <?php include './aside.php'?>
    <div class="product_con">
        <div class="perfil">
            <h5>BIENVENIDO Sr/a SANTANDER</h5>
        </div>
        <div class="buscador">
            <form method="GET">
                <div class="con_in">
                    <input type="text" placeholder="Buscar Producto..." class="form-control" id="buscar" name="buscar">
                </div>
            </form>
        </div>
        <div class="texto">
            <h3>LISTADO DE LOS PRODUCTOS</h3>
        </div>

        <div class="botones">
            <div class="anadir">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Añadir Producto
                </button>

                <!-- Modal -->
                 <!-- Model Registor -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header border-0">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Añadir nuevo Producto</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="formulario" method="POST" id="form">
                                <input type="file" class="form-control" placeholder="Introduzce la imagen del producto" name="foto">
                                <input type="text" class="form-control" placeholder="Introduzce el nombre del producto" name="nombre">
                                <input type="text" class="form-control" placeholder="Introduzca el precio" name="precio">
                                <input type="number" class="form-control" placeholder="Introduzca la cantidad en Stock" name="stock">
                                <textarea name="descripcion" class="form-control" placeholder="Descripcion" id=""></textarea>

                                <div class="modal-footer border-0">
                                    <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Cancelar</button>
                                    <input type="submit" class="btn btn-success" name="enviar">
                                </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="imprimir">
                <a href="./resportes/listaproductos.php">
                    <i class="fa-regular fa-clipboard"></i>
                    <p>Imprimir informe</p>
                </a>
            </div>
        </div>


        <div class="modal fade" id="ActualizarProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header border-0">
                    <h1 class="modal-title fs-5" id="ActualizarProduct">Actualizar Productos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="formulario" method="POST" id="formulario">
                        <input type="hidden" name="id_producto" id="id_producto">
                        <input type="file" class="form-control" placeholder="Introduzce la imagen del producto" name="foto" id="foto">
                        <input type="text" class="form-control" placeholder="Introduzce el nombre del producto" name="nombre" id="nombre" readonly>
                        <input type="text" class="form-control" placeholder="Introduzca el precio" name="precio" id="precio">
                        <input type="number" class="form-control" placeholder="Introduzca la cantidad en Stock" name="stock" id="stock">
                        <textarea name="descripcion" class="form-control" placeholder="Descripcion" id="descripcion"></textarea>

                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary mt-3" data-bs-dismiss="modal">Cancelar</button>
                            <input type="submit" class="btn btn-success" name="enviar">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <div class="tab">
            <div class="caja">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Nombre del producto</th>
                            <th class="text-center">Precio</th>
                            <th class="text-center">Cantidad en Stock</th>
                            <th class="text-center">Descripcion</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        <!-- <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/crudproducto.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
</body>
</html>