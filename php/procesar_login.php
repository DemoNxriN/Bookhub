<?php

require_once('./connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];

    // Validaciones y autenticación de la base de datos aquí
    // ...

    // Ejemplo de mensaje de éxito
    echo "<p style='color: green;'>¡Inicio de sesión exitoso para $email por correo electrónico!</p>";
}
?>
