<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["comment"]) && isset($_GET["book"])) {
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
        $stmt = $conn->prepare("INSERT INTO comentarios (texto, libro_id) VALUES (?, ?)");
        $stmt->bind_param("si", $commentText, $bookParam);
        $stmt->execute();

        // Después de insertar el comentario, recuperar la información del comentario recién insertado
        $insertedCommentId = $conn->insert_id;
        $sql = "SELECT * FROM `comentarios` WHERE `id` = $insertedCommentId";
        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Obtener la información del comentario
            $commentInfo = $result->fetch_assoc();

            // Devolver la información del comentario en formato JSON
            echo json_encode($commentInfo);
        } else {
            // Si no hay comentarios, imprimir un mensaje de error
            echo json_encode(array('error' => 'No se pudo recuperar el comentario recién insertado.'));
        }

        // Cerrar la conexión a la base de datos
        $stmt->close();
        $conn->close();

        // Redirigir al archivo HTML después de insertar el comentario
        // header("Location: book$bookParam.html");
        // exit();  // No es necesario redirigir aquí ya que estamos manejando la respuesta mediante AJAX
    } else {
        echo "Por favor, introduce un comentario válido.";
    }
}
?>
