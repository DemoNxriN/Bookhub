<?php
// Establecer la conexión a la base de datos (ajusta los detalles según tu configuración)
$servername = "adminbbdd.panel247.com";
$username = "ddb219390";
$password = "lTDYST8S9KlIwU";
$dbname = "ddb219390";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para seleccionar todos los comentarios
$sql = "SELECT * FROM `comentarios`";
$result = $conn->query($sql);

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Iterar sobre los resultados y mostrar los comentarios
    while ($row = $result->fetch_assoc()) {
        echo "<div class='comment'>{$row['texto']} - {$row['fecha']}</div>";
    }
} else {
    // Si no hay comentarios, mostrar un mensaje
    echo "No hay comentarios aún.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
