<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comment"])) {
    // Obtener y limpiar el comentario del formulario
    $commentText = trim($_POST["comment"]);
    $commentText = htmlspecialchars($commentText);

    // Validar que el comentario no esté vacío
    if (!empty($commentText)) {
        // Conexión a la base de datos
        $servername = "bbdd.bookhub.cat";
        $username = "ddb219390";
        $password = "lTDYST8S9KlIwU";
        $dbname = "ddb219390";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Preparar la consulta SQL
        $stmt = $conn->prepare("INSERT INTO comentario (texto) VALUES (?)");
        $stmt->bind_param("s", $commentText);
        $stmt->execute();

        $stmt->close();
        $conn->close();

        // Redirigir el reenvío del formulario al recargar la página
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "Por favor, introduce un comentario válido.";
    }
}
?>