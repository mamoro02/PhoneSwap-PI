<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Indice - Phone Swap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/miCuenta.css">
</head>

<body>
    <!-- barra de navegacion -->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark fixed-top">

                <!-- Icono y nombre de la empresa -->
                <div class="row col-3 offset-1">
                    <a class="navbar-brand" href="inicio.php">
                        <img src="imagenes/icon/icono.png" width="33" style="transform: scale(2.0)"
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
    </header>
            <main>
                <div class="container-fluid">
                    <div class="row" style=" height: 800px" ;>
                        <div class="col-md-2"></div>
                        <div class="col-md-8 align-self-center">
                            <h1 class="title">DATOS PERSONALES</h1>
            <form method="post" action="vendor\classes\update.php">
                <label>
                    <i class="fa-solid fa-user"></i>
                    <input placeholder="email" type="email" id="email" name="new_email" required>
                </label>
                <label>
                    <i class="fa-solid fa-user"></i>
                    <input placeholder="username" type="text" id="username" name="new_name">
                </label>
                <label>
                    <i class="fa-solid fa-phone"></i>
                    <input placeholder="phone number" type="tel" id="tlf" name="new_tlf">
                </label>
                <label>
                    <i class="fa-solid fa-lock"></i>
                    <input placeholder="password" type="password" id="password" name="new_pass">
                </label>
                <br>
                <button type="submit" id="button-finalizar">Finalizar</button>
            </form>

                            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                            <script>
                                $(document).ready(function() {
                                    // Llamada a la función update al hacer clic en el botón "Editar"
                                    $(".editar").click(function() {
                                        var form = $(this).closest("form");
                                        var formData = form.serialize();

                                        $.ajax({
                                            url: "vendor/classes/update.php", // Ruta correcta a update.php
                                            type: "POST",
                                            data: formData,
                                            success: function(response) {
                                                // Realizar acciones adicionales si es necesario
                                                console.log(response);
                                            },
                                            error: function(xhr, status, error) {
                                                console.log("Error: " + error);
                                            }
                                        });
                                    });

                                    // Redirigir al usuario a la página de inicio al hacer clic en el botón "Finalizar"
                                    $("#button-finalizar").click(function() {
                                        window.location.href = "inicio.php";
                                    });
                                });
                            </script>



                            <script src="main.js"></script>
                        </div>
                        <div class="col-md-2"></div>
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
            <script type='text/javascript'></script>
</body>

</html>