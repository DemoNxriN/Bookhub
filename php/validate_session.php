<?php
// Inicia la sesión si no está iniciada
session_start();

// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['nombre_usuario'])) {
    // El usuario ha iniciado sesión, puedes realizar cualquier acción adicional aquí si es necesario
} else {
    // Si no hay una sesión activa, redirige al usuario a la página de inicio de sesión
    header('Location: login.php');
    exit; // Termina el script para evitar que se ejecute más código
}
?>
