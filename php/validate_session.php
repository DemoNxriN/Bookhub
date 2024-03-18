<?php

session_start();

if (isset($_SESSION['nombre_usuario'])) {
    echo "Sesión iniciada como: " . $_SESSION['nombre_usuario'];
} else {
    header('Location: .././php/login.php');
    exit;
}

?>
