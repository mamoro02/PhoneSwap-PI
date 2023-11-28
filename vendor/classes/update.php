<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phoneswap";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $newName = $_POST["new_name"];
    $newtlf = $_POST["new_tlf"];
    $newEmail = $_POST["new_email"];
    $newPass = $_POST["new_pass"];

    // Verificar si el email es válido
    if (!filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido";
        exit;
    }

    // Escapar los valores para evitar problemas de seguridad y sintaxis SQL
    $newName = $conn->real_escape_string($newName);
    $newtlf = $conn->real_escape_string($newtlf);
    $newEmail = $conn->real_escape_string($newEmail);
    $newPass = $conn->real_escape_string($newPass);

    // Consulta SQL para actualizar los datos
    $sql = "UPDATE cliente SET ";
    
    if (!empty($newName)) {
        $sql .= "nombreCuenta = '$newName', ";
    }

    if (!empty($newtlf)) {
        $sql .= "telefono = '$newtlf', ";
    }

    if (!empty($newPass)) {
        $sql .= "contraseña = '$newPass', ";
    }

    // Eliminar la coma final de la consulta SQL
    $sql = rtrim($sql, ", ");

    // Agregar la condición WHERE para el correo electrónico
    $sql .= " WHERE correo = '$newEmail'";

    if ($conn->query($sql) === TRUE) {
        // Redirigir al usuario a la página principal
        header("Location: ../../inicio.php");
        exit;
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
    }
}

// Cerrar conexión
$conn->close();
?>







