<?php

require_once('./connection.php');

$nombreUsuario = $_POST["nombreUsuario"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];
$repitaContrasena = $_POST["repitaContrasena"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fechaNacimiento = $_POST["fechaNacimiento"];
$direccion = $_POST["direccion"];



$sql = "INSERT INTO usuario (nombreUsuario, email, contrasena, nombre, apellido, fechaNacimiento, direccion)
        VALUES ('$nombreUsuario', '$email', '$contrasena', '$nombre', '$apellido', '$fechaNacimiento', '$direccion')";

if ($conn->query($sql) === TRUE) {
    $mensaje = urlencode("Registro exitoso para $nombreUsuario");
    header("Location: ./login.php?mensaje=$mensaje");
}

else {
    echo "Error al registrar el usuario: " . $conn->error;
}

$conn->close();

?>
