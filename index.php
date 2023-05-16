<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$security = new Security;

$userName = $security->getUserData();

/* var_dump($security->getUserData()); */

?>
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Phone Swap</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

</head>

<body oncontextmenu='return false' class='snippet-body'>
    <!-- barra de navegacion -->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark  fixed-top">

                <!-- Icono y nombre de la empresa -->
                <div class="row col-3 offset-1">
                    <a class="navbar-brand" href="#">
                        <img src="imagenes/icon/icono.png" width="33" style="transform: scale(2.0); margin-right: 5px;" class="d-inline-block align-top" alt="">
                        <b>Phone Swap</b>
                    </a>
                </div>
                <!-- Barra de busqueda -->
                <div class="row col-3 offset-1">
                    <form action="" method="post">
                        <select name="status">
                            <option value="Huawei" selected>Huawei</option>
                            <option value="Iphone">Iphone</option>
                            <option value="Samsung">Samsung</option>
                            <option value="Xiaomi">Xiaomi</option>
                        </select>
                        <button type="submit"><img src="images/arrow@2x.png" alt=""></button>
                    </form>
                </div>
                <!-- Icono login y enlace a login.php -->
                <div class="row col-1 offset-1">
                    <?= "<p style='color:white'>$userName</p>" ?>
                    <a href="login.php" style="color: white; display: inline-block; align-items: center; margin-left: 110px;">Login</a>
                </div>
                <div class="row col-2">
                    <a href="miCuenta.html"><img src="imagenes/icon/iconLogin.png" alt="Login" style="width: 30px; margin-left: 80px;"></a>
                </div>
            </nav>

        </div>
        <!-- Banner de fondo -->

        <div id="carouselExampleControls" class="carousel slide mx-auto" data-ride="carousel" style="width: 60%">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagenes/icon/fotoBanner1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/icon/fotoBanner2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/icon/fotoBanner3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagenes/icon/fotoBanner4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"></span>
            </a>
        </div>


    </header>
    <main>
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">IPHONE</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn  mb-3 mr-1" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn  mb-3 mr-1" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphone12.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 12</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphone13.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 13</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphone13mini.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 13 mini</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphone14.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 14</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphone14pro.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 14 pro</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphonese.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone SE</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphonex.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone X</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>
                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphonexr.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone XR</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>
                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-3">SAMSUNG</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a class="btn mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">

                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/samsung/honorMagic5Pro.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Honor Magic 5 Pro</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/samsung/pocoX5.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Poco X5</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/samsung/realmeNarzo50A.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Realme Narzo 50A</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-3  text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/samsung/samsungGalaxyEnterpriseEdition.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 14</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">

                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphone14pro.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone 14 pro</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphonese.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone SE</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>

                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphonex.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone X</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>
                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3 text-center">
                                            <div class="card">
                                                <img class="img-fluid" alt="100%x280" src="imagenes/img/iphone/iphonexr.png">
                                                <div class="card-body">
                                                    <h4 class="card-title ">Iphone XR</h4>
                                                    <p class="card-text">With supporting text below as a natural lead-in
                                                        to
                                                        additional content.</p>
                                                    <a href="#" class="btn">Detalles</a>
                                                </div>
                                                <div class="card-footer text-muted ">
                                                    450€
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    <script type='text/javascript'></script>
</body>

</html>