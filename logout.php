<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start();

// Destruir la sesión
session_destroy();

// Redirigir a index.html utilizando JavaScript
echo '<script>window.location.href = "inicio.php";</script>';
