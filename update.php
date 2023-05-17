<?php
// Obtener los valores enviados desde el formulario
$userName = $_POST["nombreCuenta"];
$email = $_POST["correo"];
$tlf = $_POST["telefono"];
$password = $_POST["contraseña"];

// Incluir el archivo de conexión a la base de datos
require_once "./vendor/classes/Connection.php"; // Reemplaza "conexion.php" con la ruta y nombre de tu archivo de conexión

try {
    // Ejecutar la consulta de actualización
    $sql = "UPDATE cliente SET nombreCuenta = :userName, correo = :email, telefono = :tlf, contraseña = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':tlf', $tlf);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Redirigir al usuario a la página de inicio
    header("Location: index.php");
    exit;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    // Manejo del error en caso de que ocurra
}
?>

