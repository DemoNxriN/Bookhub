<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"]
    $password = $_POST["password"]
    $confirm_password = $_POST["confirm_password"]

    // Impresion de datos
    echo "Usuario registrado:"
    echo "Usuario: $username"
    echo "Contraseña: $password"
    echo "Confirmar Contraseña: $confirm_password"
}

if ($_POST["password"] === $_POST["confirm_password"]) {
    // success!
 }
 else {
    // failed
 }
?>