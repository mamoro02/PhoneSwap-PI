<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$id = (int) $_GET['id'];

$cesta = new Carrito;

$security = new Security;

$security->checkLoggedIn(); //si el usuario no está registrado no puede acceder a la compra

$arrCesta = $cesta->getCesta($id);
/* 
session_destroy(); */

$cestaObjetos = $cesta->getModelsCesta($arrCesta);

/* var_dump($cestaObjetos); */

$totalPrice = 0;

foreach ($cestaObjetos as $movil) {
    $totalPrice += $movil["precioActual"];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>carrito de compra</title>
    <link rel="shortcut icon" href="imagen/icon/">
    <link rel="stylesheet" type="text/css" href="/assets/css/carritoDeCompra.css">

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="./assets/css/indexStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">



</head>

<body>
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark fixed-top">

                <!-- Icono y nombre de la empresa -->
                <div class="row col-3 offset-1">
                    <a class="navbar-brand" href="inicio.php">
                        <img src="imagenes/icon/icono.png" width="33" style="transform: scale(2.0)" class="d-inline-block align-top" alt="">
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
    </header><br><br><br>


    <main>
        <h1 style="text-align: center;">TU CESTA </h1>

        <h5 style="text-align: left;">Productos añadidos a tu cesta</h5>
        <table>
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>descripcion</th>
                    <th>precio</th>
                    <th>Cantidad</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!--                 <tr>
                    <td>Apple</td>
                    <td>Iphone 11</td>
                    <td>500</td>
                    <td>1</td>
                </tr> -->

                <?= $cesta->drawCarrito($cestaObjetos) ?>
                <tr>
                    <td>Precio Total</td>
                    <td><?= $totalPrice ?></td>
                </tr>

            </tbody>
        </table>
        <a href="Pago.php"><button class="checkout-btn">Pagar</button></a>

    </main>


</body>

</html>