<?php
// Configuración de la conexión a la base de datos
$servidor = 'localhost';
$usuario = 'nombre_usuario';
$contrasena = 'contraseña';
$base_datos = 'phoneswap.sql';

// Conexión a la base de datos
$conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);
if ($conexion->connect_error) {
  die('Error en la conexión: ' . $conexion->connect_error);
}

function validarPago() {
  global $conexion;

  // Obtener los valores de los campos
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $telefono = $_POST['telefono'];
  $email = $_POST['email'];

  // Consulta para verificar los datos en la base de datos
  $consulta = "SELECT * FROM clientes WHERE nombre = '$nombre' AND apellido = '$apellido' AND telefono = '$telefono' AND correo = '$email'";
  
  $resultado = $conexion->query($consulta);
  if ($resultado->num_rows > 0) {
    // Mostrar la alerta de pedido realizado correctamente
    echo "<script>alert('¡Se ha realizado el pedido correctamente!');</script>";
  } else {
    // Mostrar el mensaje de error
    echo "<script>alert('Por favor, complete todos los campos correctamente.');</script>";
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  validarPago();
}
?>