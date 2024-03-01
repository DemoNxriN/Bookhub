# Bookhub
Domain branch for the BookHub project website


<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Aquí procesas los datos del formulario
        $nombreUsuario = $_POST["nombreUsuario"];
        $email = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $repitaContrasena = $_POST["repitaContrasena"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fechaNacimiento = $_POST["fechaNacimiento"];

    // Validaciones y procesamiento de la base de datos aquí
                // ...

    // Ejemplo de mensaje de éxito
    echo "<p style='color: green;'>¡Registro exitoso para $nombreUsuario!</p>";
}
?>
