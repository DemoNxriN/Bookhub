<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Impresion de datos
    echo "Inicio de sesión exitoso:<br>";
    echo "Usuario: $username<br>";
    echo "Contraseña: $password<br>";
}
?>