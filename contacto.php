<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/contacto.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
</head>
<body>
    <div class="primer">
        <div class="sec">
            <div class="primer_inf"><i class="fa-solid fa-location-dot"></i><p>Malabo/San_Juan</p></div>
            <div class="primer_inf"><i class="fa-solid fa-phone-flip"></i><p>+240 555543679</p></div>
        </div>
        <div class="seco">
            <div class="primer_inf"><i class="fa-solid fa-envelope"></i><p>Alice_Dulces@gmail.com</p></div>
        </div>
    </div>
    <header class="header">
        <div class=" con">
            <div class="logo d-flex">
                <img src="./img/pasteleria.png" alt="">
                <h2 style="margin: 5px">ALICE DULCES</h2>
            </div>
            <nav class="nav d-none d-lg-block">
                <ul>
                    <li><a href="./index.php" class="ancla">Inicio</a></li>
                    <li><a href="./productos.php" class="ancla">Producto</a></li>
                    <li><a href="./sobre.php" class="ancla">Sobre Nosotros</a></li>
                    <li><a href="./contacto.php" class="ancla">Contacto</a></li>
                    <!-- <li><a href="./carrito.php" class="ancla"><i class="fa-solid fa-cart-shopping"></i></a></li> -->
                    <!-- <li><a href="./login.php" class="admin"><i class="fa-solid fa-user"></i></a></li> -->
                </ul>
            </nav>

            <div class="menu-am d-lg-none">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>

                <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">MENÚ DE NAVEGACIÓN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                    <nav class="nave">
                        <ul>
                            <li><a href="#" class="ancla">Inicio</a></li>
                            <li><a href="./productos.php" class="ancla">Producto</a></li>
                            <li><a href="./sobre.php" class="ancla">Sobre Nosotros</a></li>
                            <li><a href="./contacto.php" class="ancla">Contacto</a></li>
                            <!-- <li><a href="./carrito.php" class="ancla"><i class="fa-solid fa-cart-shopping"></i></a></li> -->
                            <!-- <li><a href="./login.php" class="admin"><i class="fa-solid fa-user"></i></a></li> -->
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-header container-fluid d-flex flex-column justify-content-center align-items-strat">
                <h1 class="txt mx-4">CONTACTANOS</h1>
        </div>
    </header>
    <div class="contacto">
        <div class="alice">
            <h2>Envianos un mensaje </h2>
        </div>
        <div class="eso">
            <div class="caja">
                <div class="cajita">
                    <div class="direccion">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Direccion: Malabo/San_Juan</p>
                    </div>
                    <div class="direccion">
                        <i class="fa-solid fa-route"></i>
                        <p>Telefono: +240 55543234</p>
                    </div>
                    <div class="direccion">
                        <i class="fa-solid fa-envelope"></i>
                        <p>Correo: AliceDulces@gmail.com</p>
                    </div>
                    <div class="direccion">
                        <i class="fa-solid fa-route"></i>
                        <p>Horas de Atencion : 24 horas</p>
                    </div>
                    <div class="direcciones">
                        <p>Siguenos en nuestras redes sociales</p>
                        <div class="redes">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formu">
                    <form action="" class="for">
                        <div class="nombre">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="correo">
                            <input type="text" class="form-control" placeholder="Correo">
                            <input type="text" class="form-control" placeholder="Asunto">
                        </div>
                        <div class="mensaje">
                            <textarea name="" id="" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="enviar">
                            <input type="submit" class="btn btn-success">
                        </div>
                    </form>
            </div>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.323322838894!2d8.795784373969704!3d3.7395537962343433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10669f642b881999%3A0xdd8aeadd5290df8f!2sPanader%C3%ADa%20San%20Juan!5e0!3m2!1ses!2s!4v1740408055919!5m2!1ses!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     
        

    <script src="./js/bootstrap.min.js"></script>
</body>
</html>