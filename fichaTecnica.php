<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$idModelo = isset($_GET['idModelo']) ? (int) $_GET['idModelo'] : "";

$mobileRepository = new MobileRepository;

$currentModel = $mobileRepository->getModel($idModelo);

$fiveG = ($currentModel->getFiveG() == true) ? 'SI' : 'NO';

$doubleSim = ($currentModel->getDoubleSim() == true) ? 'SI': 'NO';

/* var_dump($mobileRepository->getModel($idModelo));
exit;  */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Indice - Phone Swap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/ficha.css">
</head>

<body>
    <!-- barra de navegacion -->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark fixed-top">

                <!-- Icono y nombre de la empresa -->
                <div class="row col-3 offset-1 ">
                    <a class="navbar-brand" href="inicio.php">
                        <img src="imagenes/icon/icono.png" width="33" style="transform: scale(2.0); margin-right: 5px;"
                            class="d-inline-block align-top" alt="">
                        <b>Phone Swap</b>
                    </a>
                </div>
                <!-- Barra de busqueda -->
                <div class="row col-3 offset-1">
                </div>
                <!-- Icono login y enlace a login.php -->
                <div class="row col-1 offset-1">
                    <a href="login.php" style="color: white; display: inline-block; align-items: center; margin-left: 80px;">Login<br></a>
                </div>
                <div class="row col-2">
                    <a href="miCuenta.php"><img src="imagenes/icon/iconLogin.png" alt="Login" style="width: 30px; margin-left: 80px;"></a>
                </div>
            </nav>
        </div>

        <!--Jumbotron-->
        <div class="container-fluid">
            <div class="jumbotron" style="background-image: url('./imagenes/fichaTecnica.png'); height:600px; background-size: cover;">
            </div>
        </div>
        </header>
        <main>
            <!--h1 principal-->
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><br><h1> Especificaciones </h1></div>
                <div class="col-md-4"></div>
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <!--Estadisticas de los productos separados por hr-->
            <div class="row">
                <div class="col-md-12"  style="height:50px"><h3>Diseño</h3></div>
                <div class="col-md-4"><p><?= $currentModel->getModel() ?></p></div>
                <div class="col-md-4"></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"  style="height:50px"><h5>Colores</h5></div>
                <div class="col-md-4"> AZUL | ROJO | VERDE | NEGRO | BLANCO | PÚRPURA | PLATEADO | DORADO </div>
                <div class="col-md-4"  style="height:100px"></div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-12"><h3>Especificación</h3></div>
                <div class="col-md-4"><p><?= $currentModel->getModel() ?> </p></div>
                <div class="col-md-4"></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Procesador</h5></div>
                <div class="col-md-4">Velocidad CPU <br> <?= $currentModel->getCpuSpeed() ?></div>
                <div class="col-md-4">Tipo CPU <br><?= $currentModel->getCpuType() ?></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Pantalla</h5></div>
                <div class="col-md-4">Resolución <br> <?= $currentModel->getResolution() ?></div>
                <div class="col-md-4"></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Cámara</h5></div>
                <div class="col-md-4">Mega Píxeles <br> <?= $currentModel->getMegaPixels() ?></div>
                <div class="col-md-4"></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Almacenamiento</h5></div>
                <div class="col-md-4"> Capacidad<br><?= $currentModel->getStorage() ?> </div>
                <div class="col-md-4">Memoria RAM <br> <?= $currentModel->getRam() ?> </div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Redes/Bandas</h5></div>
                <div class="col-md-4">Doble Sim: <?= $doubleSim ?></div>
                <div class="col-md-4"> 5G: <?= $fiveG ?> </div>
 
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Sistema Operativo</h5></div>
                <div class="col-md-4"> <?= $currentModel->getSo() ?> </div>
                <div class="col-md-4"></div>
            </div><hr>
            <div class="row">
                <div class="col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Especificaciones físicas</h5></div>
                <div class="col-md-4"> Dimensiones<br><?= $currentModel->getDimensions() ?> </div>
                <div class="col-md-4"> </div>

            </div><hr>
            <!--Fin de estadisticas-->
        </div>
        <section>
            <!--Información adicional sobre los productos de PhoneSwap-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
            <p>
                Colores exclusivos online sólo disponibles en PhoneSwap.es. 
                <br>
                <br>
                La disponibilidad real de almacenamiento puede variar en función del software preinstalado. La disponibilidad de las opciones de almacenamiento puede variar según el país,
                la región o el operador. 
                <br>
                Es posible que algunas opciones de almacenamiento sólo estén disponibles en PhoneSwap.es.
                <br>
                <br>
                Los anchos de banda admitidos por el dispositivo pueden variar según el país, la región o el operador.
                <br>
                <br>
                Capacidad de la batería (típica): valor típico probado en condiciones de laboratorio de terceros. El valor típico es el valor promedio estimado considerando la desviación en <br> 
                la capacidad de la batería entre las muestras de batería probadas según el estándar IEC 61960. 
                <br>
                <br>
                La duración real de la batería puede variar según el entorno de la red, los patrones de uso y otros factores. <br>
            </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <br>
            <br>
            <br>
        </section>

        </main>
        <!--footer-->
        <footer class="text-white text-center text-lg-start bg-dark">

            <div class="container p-4">
    
                <div class="row mt-4">
                    <!-- Columna de la izquierda -->
                    <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Phone Swap</h5>
    
                        <p>
                            De martes a domingo de 8:00 a 20:00h.
                        </p>
    
                        <p>
                            Internet 24h.
                        </p>
    
                        <div class="mt-4">
                            <!-- Facebook -->
                            <a href="https://www.facebook.com/LaRambleta/?locale=es_ES" type="button"
                                class="btn btn-floating btn-light btn-lg"><i class="bi bi-facebook"></i></a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/rambleta/?hl=es" type="button"
                                class="btn btn-floating btn-light btn-lg"><i class="bi bi-instagram"></i></a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/La_Rambleta?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                                type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-twitter"></i></a>
    
                        </div>
                    </div>
    
    
                    <!-- Columna de la centro -->
                    <div class="col-lg-4 col-md-6 ">
                        <h5 style="text-align: center;">CONTACTO</h5>
                        <ul class="fa-ul" style="margin-left: 1.65em; list-style: none">
                            <li class="mb-3">
                                <span class="fa-li"><i class="bi bi-house-door-fill"></i></span><span class="ms-2">Bulevar
                                    Carrer del Rei En Jaume I, 2, 46470</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="bi bi-envelope"></i></i></span><span
                                    class="ms-2">info@phoneswap.es</span>
                            </li>
                            <li class="mb-3">
                                <span class="fa-li"><i class="bi bi-phone"></i></span><span class="ms-2">961 15 23 32</span>
                            </li>
                        </ul>
                    </div>
    
    
                    <!-- Columna de la derecha -->
                    <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                        <h5 class="text-uppercase mb-4">Mapa</h5>
    
                        <!--Google map-->
                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 200px">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3082.954188277158!2d-0.414915584634646!3d39.402542479495956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604e82a8672a35%3A0xed578f5f80fed685!2sFlorida%20Universitaria!5e0!3m2!1ses!2ses!4v1683828098274!5m2!1ses!2ses"
                                width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
    
                </div>
    
            </div>
            <!--container -->
    
            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://github.com/mamoro02">Phone Swap</a>
            </div>
    
        </footer>
        <script type='text/javascript'></script>
</body>
</html>