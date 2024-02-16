<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comment"])) {
    // Obtener y limpiar el comentario del formulario
    $commentText = trim($_POST["comment"]);
    $commentText = htmlspecialchars($commentText);

    // Obtener el valor del parámetro book de la URL
    $bookParam = isset($_GET['book']) ? $_GET['book'] : '';

    // Validar que el comentario no esté vacío y que el valor del parámetro sea válido
    if (!empty($commentText) && is_numeric($bookParam) && $bookParam >= 1 && $bookParam <= 20) {
        // Conexión a la base de datos (ajusta los detalles según tu configuración)
        $servername = "bbdd.bookhub.cat";
        $username = "ddb219390";
        $password = "lTDYST8S9KlIwU";
        $dbname = "ddb219390";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar la consulta SQL de manera segura para insertar el comentario
        $stmt = $conn->prepare("INSERT INTO comentarios (texto) VALUES (?)");
        $stmt->bind_param("s", $commentText);
        $stmt->execute();

        // Cerrar la conexión a la base de datos
        $stmt->close();
        $conn->close();

        // Redirigir al archivo HTML después de insertar el comentario
        header("Location: book$bookParam.html");
        exit();
    } else {
        echo "Por favor, introduce un comentario válido.";
    }
}
?>