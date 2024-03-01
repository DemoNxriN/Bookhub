<?php
$servername = "bbdd.bookhub.cat";
$username = "ddb219390";
$password = "lTDYST8S9KlIwU";
$dbname = "ddb219390";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombreUsuario = $_POST["nombreUsuario"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];
$repitaContrasena = $_POST["repitaContrasena"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$fechaNacimiento = $_POST["fechaNacimiento"];

// Validaciones y procesamiento de la base de datos aquí
// ...

// Ejemplo: Insertar datos en la base de datos
$sql = "INSERT INTO usuario (nombreUsuario, email, contrasena, nombre, apellido, fechaNacimiento)
        VALUES ('$nombreUsuario', '$email', '$contrasena', '$nombre', '$apellido', '$fechaNacimiento')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso para $nombreUsuario";
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
