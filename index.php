<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALICE DULCES</title>
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
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
                <a href="./login.php"><img src="./img/pasteleria.png" alt=""></a>
                <h2 style="margin: 5px">ALICE DULCES</h2>
            </div>
            <nav class="nav d-none d-lg-block">
                <ul>
                    <li><a href="#" class="ancla">Inicio</a></li>
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
        <div class="text-header container d-flex flex-column justify-content-center align-items-center">
                <h1 class="txt">BIENVENIDOS</h1>
                <h3 class="txt">A</h3>
                <h1 class="txt">ALICE DULCES</h1>
                <p class="txt">Donde el sabor hacer la calidad</p>
                <p class="txt">Lorem ipsum dolor sit amet consectetur adipisicing elit Consequuntur sit</p>
        </div>
    </header>
    
    <section class="sobre_nosotros container flex-column">
        <div class="about  m-3">
            <h2>ABOUT OUR BUSINESS</h2>
        </div>
        <div class="about m-2">
            <P> 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> 
                Aut accusamus, cumque molestias repudiandae eos aliquid? Reiciendis, 
                quibusdam quam corrupti reprehenderit quis voluptas culpa nisi quod <br>
                voluptate error, sapiente delectus beatae.
            </P>
        </div>
    </section>

    <section class="container d-flex justify-content-evenly flex-wrap on">
        <div class=" horario">
            <div class="con_horario">
                <!-- <h3>Nuestro Horario</h3>
                <p>Lunes: 8:00-14:30.</p>
                <p>Martes: 8:00-14:30.</p>
                <p>Miercoles: 8:00-14:30.</p>
                <p>Jueves: 8:00-14:30.</p>
                <p>Viernes: 8:00-14:30.</p>
                <p>Sábado: 8:00-14:30.</p>
                <p>Domingo: CLOSED.</p> -->
                <table class="table">
                    <thead>
                        <tr>
                            <h3>Nuestro Horario</h3>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">Lunes:</td>
                            <td class="text-center"> 8:00-14:30.</td>
                        </tr>
                        <tr>
                            <td class="text-center">Martes:</td>
                            <td class="text-center"> 8:00-14:30.</td>
                        </tr>
                        <tr>
                            <td class="text-center">Miercoles:</td>
                            <td class="text-center"> 8:00-14:30</td>
                        </tr>
                        <tr>
                            <td class="text-center">Jueves:</td>
                            <td class="text-center"> 8:00-14:30</td>
                        </tr>
                        <tr>
                            <td class="text-center">Viernes: </td>
                            <td class="text-center">8:00-14:30</td>
                        </tr>
                        <tr>
                            <td class="text-center">Sabado:</td>
                            <td class="text-center"> 8:00-14:30</td>
                        </tr>
                        <tr>
                            <td class="text-center">Domingo: </td>
                            <td class="text-center"> 8:00-14:30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=" horario">
            <img class="horario_img" src="./img/6.jpg" alt="">
        </div>
    </section>
    <section class="mt-2">
        <div class="product_index container-fluid d-flex justify-content-center flex-wrap">
            <div class="about container d-flex justify-content-center">
                    <h2>BEST PRODUCT</h2>
            </div>
            <div class="tarjeta">
                <div class="tarjeta_img">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="tarjeta_txt">
                    <h4>Pastel de frutas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="tarjeta_precio">
                    <p>2500 xfa</p>
                </div>
            </div>
            <div class="tarjeta">
                <div class="tarjeta_img">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="tarjeta_txt">
                    <h4>Pastel de frutas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="tarjeta_precio">
                    <p>2500 xfa</p>
                </div>
            </div>
            <div class="tarjeta">
                <div class="tarjeta_img">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="tarjeta_txt">
                    <h4>Pastel de frutas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="tarjeta_precio">
                    <p>2500 xfa</p>
                </div>
            </div>
            <div class="tarjeta">
                <div class="tarjeta_img">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="tarjeta_txt">
                    <h4>Pastel de frutas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="tarjeta_precio">
                    <p>2500 xfa</p>
                </div>
            </div>
            <div class="tarjeta">
                <div class="tarjeta_img">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="tarjeta_txt">
                    <h4>Pastel de frutas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="tarjeta_precio">
                    <p>2500 xfa</p>
                </div>
            </div>
            <div class="tarjeta">
                <div class="tarjeta_img">
                    <img src="./img/10.jpg" alt="">
                </div>
                <div class="tarjeta_txt">
                    <h4>Pastel de frutas</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="tarjeta_precio">
                    <p>2500 xfa</p>
                </div>
            </div>

        </div>
    </section>

    <div class="servicios">
        <div class="serve">
            <div class="caja_service">
                <i class="fa-solid fa-cookie"></i>
                <p>Ofrecemos productos caceros</p>
            </div>
            <div class="caja_service">
                <i class="fa-solid fa-stopwatch"></i>
                <p>Ofrecemos productos caceros</p>
            </div>
            <div class="caja_service">
                <i class="fa-solid fa-cookie"></i>
                <p>Ofrecemos productos caceros</p>
            </div>
        </div>
    </div>

    <section class="container banner3">
        <div class="iman">
            <img src="./img/12.jpg" alt="">
            <div class="inc">
                <h4>EN ALICE DULCES </h4>
                <p>ofrecemos producto deliciosos y de calidad</p>
            </div>
        </div>
        <div class="iman">
            <img src="./img/14.jpg" alt="">
            <div class="inc">
                <h4>EN ALICE DULCES </h4>
                <p>ofrecemos producto deliciosos y de calidad</p>
            </div>
        </div>
        <div class="iman">
            <img src="./img/17.jpg" alt="">
            <div class="inc">
                <h4>EN ALICE DULCES </h4>
                <p>ofrecemos producto deliciosos y de calidad</p>
            </div>
        </div>

    </section>
    <script src="./js/bootstrap.min.js"></script>   
</body>
</html>