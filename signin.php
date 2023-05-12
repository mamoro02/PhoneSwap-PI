
<!DOCTYPE html>
<html lang="en">

<head>
    <title>SignIn - Phone Swap</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/login.css">
</head>

<body>
    <!-- barra de navegacion -->
    <header>
        <div class="container-fluid">
            <nav class="navbar navbar-dark bg-dark">

                <!-- Icono y nombre de la empresa -->
                <div class="row col-3 offset-1">
                    <a class="navbar-brand" href="#">
                        <img src="imagenes/icon/icono.png" width="33" style="transform: scale(2.0); margin-right: 5px;"
                            class="d-inline-block align-top" alt="">
                        <b>Phone Swap</b>
                    </a>
                </div>
                <div class="row col-3 offset-1"></div>
                <div class="row col-3 offset-1"></div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row" style=" height: 800px";>
                <div class="col-md-7"><img src="./imagenes/login.png"></div>
                <div class="col-md-4 align-self-center">     
            <form action="" method="post" class="signIn">
                <h1 class="title">SIGN IN</h1>
                <label>
                    <i class="fa-solid fa-user"></i>
                    <input placeholder="username" type="text" id="username" name="userName">
                </label>
                <label>
                    <i class="fa-solid fa-user"></i>
                    <input placeholder="email" type="email" id="email" name="email">
                </label>
                <label>
                    <i class="fa-solid fa-lock"></i>
                    <input placeholder="password" type="password" id="password" name="password">
                </label>
                <label>
                    <i class="fa-solid fa-lock"></i>
                    <input placeholder="nombre" type="text" id="nameClient" name="nameClient">
                </label>
                <label>
                    <i class="fa-solid fa-lock"></i>
                    <input placeholder="apellido" type="text" id="sureName" name="sureName">
                </label>
                <label>
                    <i class="fa-solid fa-lock"></i>
                    <input placeholder="telefono" type="tel" id="telephone" name="telephone">
                </label>
                <button id="button">Sign in</button>
            </form>
            
            <script src="main.js"></script>
        </div>
        <div class="col-md-1"></div>
        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>