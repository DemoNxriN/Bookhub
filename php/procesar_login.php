<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí procesas los datos del formulario
    $email = $_POST["email"];  // La variable $email ahora representa el correo electrónico
    $contrasena = $_POST["contrasena"];

    // Validaciones y autenticación de la base de datos aquí
    // ...

    // Ejemplo de mensaje de éxito
    echo "<p style='color: green;'>¡Inicio de sesión exitoso para $email por correo electrónico!</p>";
}
?>
