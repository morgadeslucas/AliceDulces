<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
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
                    <li><a href="./login.php" class="admin"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </nav>

            <div class="menu-am d-lg-none">
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><i class="fa-solid fa-bars"></i></button>

                <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
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
                            <li><a href="./login.php" class="admin"><i class="fa-solid fa-user"></i></a></li>
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
</body>
</html>