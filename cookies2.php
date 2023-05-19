<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <title>Aviso de Cookies</title>
    <!-- El boostrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css" integrity="sha512-xjh/+Pr1fEhD6y0R5rI77X71J1d6vPk0UwKDBZkXOeVbkJz0Y1vJwyEe9zDdKLsW1z8G0zWn9ZsTR/K3w1WJvg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
     /* Los estilos */
#cookie-notice {
  background-color: rgba(255, 157, 162, 0.8);
  color: #333;
  position: fixed;
  bottom: 50%;
  left: 50%;
  transform: translate(-50%, 50%);
  padding: 20px;
  border-radius: 5px;
  text-align: center;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
}

      #cookie-notice h3 {
        margin-top: 0;
      }

      #cookie-notice p {
        margin-bottom: 20px;
      }

      #cookie-notice button {
        margin-right: 10px;
      }
    </style>
  </head>
  <body>
    <div id="cookie-notice" class="container">
      <h3>Aviso de Cookies</h3>
      <p>Este sitio web utiliza cookies para mejorar su experiencia de usuario. Al continuar navegando por este sitio web, usted acepta el uso de cookies. 
        Puede cambiar la configuración de las cookies en cualquier momento a través de las opciones de su navegador.</p>
      <div>
        <button type="button" class="btn btn-success" onclick="acceptCookies()">Aceptar</button>
        <button type="button" class="btn btn-danger" onclick="rejectCookies()">Rechazar</button>
      </div>
    </div>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js" integrity="sha512-OGYs3we3zY6ugF7sY7X8yBrm6tQRl2Iv5lSvVwxPy1jC0WVIZ6lgrbF7J6n9+l0k9wYHSc/Vxv66iOZb8zheFw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      function acceptCookies() {
        // Código para aceptar cookies
        console.log("Cookies aceptadas");
        document.getElementById("cookie-notice").style.display = "none";
      }

      function rejectCookies() {
        // Código para rechazar cookies
        console.log("Cookies rechazadas");
        document.getElementById("cookie-notice").style.display = "none";
      }
    </script>
  </body>
</html>
