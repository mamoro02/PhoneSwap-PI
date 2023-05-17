<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$idModelo = isset($_GET['idModelo']) ? (int) $_GET['idModelo'] : "";

/* var_dump($idModelo);
exit; */

$mobileRepository = new MobileRepository;

$currentModel = $mobileRepository->getModel($idModelo);

/* var_dump($mobileRepository->getModel($idModelo));
exit; */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/producto.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d53a6eefdb.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- barra de navegacion -->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark fixed-top">

                <!-- Icono y nombre de la empresa -->
                <div class="row col-3 offset-1">
                    <a class="navbar-brand" href="index.php">
                        <img src="imagenes/icon/icono.png" width="33" style="transform: scale(2.0)"
                            class="d-inline-block align-top" alt="">
                        <b>Phone Swap</b>
                    </a>
                </div>
                <!-- Barra de busqueda -->
                <div class="row col-3 offset-1">
                    <form class="form-inline mx-auto my-auto">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
                <!-- Icono login y enlace a login.php -->
                <div class="row col-1 offset-1">
                    <a href="login.php" style="color: white; display: inline-block; align-items: center; margin-left: 110px;">Login</a>
                </div>
                <div class="row col-2">
                    <a href="miCuenta.html"><img src="imagenes/icon/iconLogin.png" alt="Login" style="width: 30px; margin-left: 80px;"></a>
                </div>
            </nav>
        </div>
    </header>
    <br>
    <br>
    <main>
       
    <div class="container-fluid">
        <div class="row" style="height: 110vh; margin-right: 0;">
            <div class="col-md-6">
                    <img src="imagenes/img/<?= $currentModel->getImage() ?>" alt="Imagen" style="Width: 95%; height:95%; margin-top: 10px;">
            </div>
            <div class="col-md-6" style="background-color: rgb(241, 246, 250);">
                <h2 style="position: absolute; margin-left: 40px; margin-top: 20px; font-size: 25px; "><?= $currentModel->getModel() ?></h2>
                <button class="btn btn-buy">Comprar</button></h2>
                <br>
                <p style="position: absolute; margin-left: 40px; padding:10px; margin-top: 30px;"><a <?= "href='fichaTecnica.php?idModelo=".$currentModel->getIdModel()."'" ?>>Ficha técnica</a></p>
                
                <!--Prueba de estrellas de valoración-->

                <!--<form>
                    <div class="form-group">
                        <label for="valoracion">Valoración:</label>
                        <select class="form-control" id="valoracion">
                            <option>1 estrella <i class="fas fa-star"></i></option>
                            <option>2 estrellas <i class="fas fa-star"></i><i class="fas fa-star"></i></option>
                            <option>3 estrellas <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></option>
                            <option>4 estrellas <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></option>
                            <option>5 estrellas <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></option>
                        </select>
                    </div>
                </form>-->



                <div class="row" style="margin-top: 120px;">
                    <div class="col-md-12 estado-telefono text-center">
                      <h2 class="estado-title" style="font-family: 'Raleway', sans-serif; font-weight: bold;">Estado del teléfono</h2>
                      <button type="button" class="btn btn-estado-telefono" disabled><b>Bueno</b></button>
                      <button type="button" class="btn btn-estado-telefono"><b>Muy bueno</b></button>
                      <button type="button" class="btn btn-estado-telefono"><b>Excelente</b></button>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12 storage-section text-center">
                      <h2 class="storage-title">Almacenamiento</h2>
                      <button type="button" class="btn storage-button"><b>64GB</b></button>
                      <button type="button" class="btn storage-button"><b>128GB</b></button>
                      <button type="button" class="btn storage-button"><b>256GB</b></button>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-12 colors-container text text-center">
                      <h2 class="colors-title">Colores</h2>
                      <div class="row">
                        <div class="col-md-12 text-center">
                          <button class="btn btn-colors  btn-lg m-2"><b>Red</b></button>
                          <button class="btn btn-colors  btn-lg m-2"><b>Green</b></button>
                          <button class="btn btn-colors  btn-lg m-2"><b>Purple</b></button>
                        </div>
                        <div class="col-md-12 text-center">
                          <button class="btn btn-colors  btn-lg m-2"><b>White</b></button>
                          <button class="btn btn-colors  btn-lg m-2"><b>Yellow</b></button>
                          <button class="btn btn-colors  btn-lg m-2"><b>Black</b></button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-compare">Comparar</button></h2>
                  <br>
                  
                  

            </div>
        </div>
    </div>
    </main>

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
                        <a href="https://www.facebook.com/LaRambleta/?locale=es_ES" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-facebook"></i></a>
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/rambleta/?hl=es" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-instagram"></i></a>
                        <!-- Twitter -->
                        <a href="https://twitter.com/La_Rambleta?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" type="button" class="btn btn-floating btn-light btn-lg"><i class="bi bi-twitter"></i></a>

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
                            <span class="fa-li"><i class="bi bi-envelope"></i></i></span><span class="ms-2">info@phoneswap.es</span>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3082.954188277158!2d-0.414915584634646!3d39.402542479495956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604e82a8672a35%3A0xed578f5f80fed685!2sFlorida%20Universitaria!5e0!3m2!1ses!2ses!4v1683828098274!5m2!1ses!2ses" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

</body>

</html>