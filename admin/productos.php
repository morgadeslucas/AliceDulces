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
            <div class="con_in">
                <input type="text" placeholder="Buscar Producto..." class="form-control">
            </div>
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
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Añadir nuevo Producto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" class="formulario">
                            <input type="text" class="form-control" placeholder="Introduzce el nombre del producto">
                            <input type="text" class="form-control" placeholder="Introduzca el precio">
                            <input type="number" class="form-control" placeholder="Introduzca la cantidad en Stock">
                            <textarea name="" class="form-control" placeholder="Descripcion" id=""></textarea>
                        </form>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-success">Enviar</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="imprimir">
                <a href="">
                    <i class="fa-regular fa-clipboard"></i>
                    <p>Imprimir informe</p>
                </a>
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
                    <tbody>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">Pastel de Arandanos</td>
                            <td class="text-center">10000</td>
                            <td class="text-center">20</td>
                            <td class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                            <td>
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>