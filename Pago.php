<!DOCTYPE html>
<html lang="en">
<head>
	
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'>

    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/f46ccf0588.js" crossorigin="anonymous"></script>
    
    <title>tramitacion de Pago</title>
    <link rel="shortcut icon" href="imagen/icon/">
	<link rel="stylesheet" type="text/css" href="./assets/css/pago.css">

    <script>
        function validarPago() {
          // Obtener los valores de los campos
          var nombre = document.getElementById('nombre').value;
          var apellido = document.getElementById('apellido').value;
          var email = document.getElementById('email').value;
          var telefono = document.getElementById('telefono').value;

    
          // Verificar si todos los campos están llenos
          if (
            nombre !== '' &&
            apellido !== '' &&
            email !== '' &&
            telefono !== ''
          ) {if (email.includes('@gmail') || email.includes('@hotmail')) {
            // Mostrar la alerta de pedido realizado correctamente
                alert('¡Se ha realizado el pedido correctamente!');
            // Redirigir a la pagina de inicio
                window.location.href = 'inicio.php';
            } else {
            // Mostrar el mensaje de error
                alert('Por favor, ingrese un correo válido (debe contener "@gmail" o "@hotmail").');
            }
            } else {
            // Mostrar el mensaje de error
                alert('Por favor, complete todos los campos.');
            }
        }
            
    </script>
    //validacion de los campos de pago
        <form method="POST" action="verificacion.php" onsubmit="validarPago()">            
    </form>

</head>
<body>
    

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

    <div class="container">
        <table>
          <tr>
            <th class="columna1">Información Personal</th>
            <th class="columna2">Información de Pago</th>
          </tr>
          <tr>
            <td class="columna1">
              <label for="nombre">Nombre:</label><br>
              <input type="text" id="nombre" name="nombre" required><br><br>
    
              <label for="apellido">Apellido:</label><br>
              <input type="text" id="apellido" name="apellido" required><br><br>
    
              <label for="direccion">Dirección:</label><br>
              <input type="text" id="direccion" name="direccion" required><br><br>
    
              <label for="email">Email:</label><br>
              <input type="email" id="email" name="direccionemail" required><br><br>
    
              <label for="telefono">Teléfono:</label><br>
              <input type="number" id="telefono" name="telefono" required>
            </td>
            <td>
              <label for="metodo">Método de Pago:</label><br>
              <select id="metodo" name="metodo">
                <option value="visa">Visa</option>
                <option value="mastercard">Mastercard</option>
              </select><br><br>
    
              <label for="numero">Número de Tarjeta:</label><br>
              <input type="number" id="numero" name="numero"  required><br><br>
    
              <label for="fecha">Fecha de Vencimiento:</label><br>
              <input type="month" id="fecha" name="fecha" required><br><br>
    
              <label for="cvv">CVV:</label><br>
              <input type="number" id="cvv" name="cvv"  maxlength="3" required><br><br>

              <div class="form-group">
                <button onclick="validarPago()" type="submit">Finalizar pago</button>
              </div>

            </td>
          </tr>
        </table>
    </div>


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
              <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://github.com/mamoro02">Phone Swap</a>
        </div>

    </footer>

</body>
</html>