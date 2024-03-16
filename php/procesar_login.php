<?php
// Incluye el archivo de validación de sesión
require_once('./validate_session.php');

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluye el archivo de conexión
    require_once('./connection.php');

    // Define las variables y las inicializa con valores vacíos
    $nombreUsuario = $contrasena = "";

    // Verifica si los campos del formulario no están vacíos
    if (isset($_POST['nombreUsuario']) && isset($_POST['contrasena'])) {
        $nombreUsuario = $_POST['nombreUsuario'];
        $contrasena = $_POST['contrasena'];

        // Previene la inyección de SQL
        $nombreUsuario = mysqli_real_escape_string($conn, $nombreUsuario);
        $contrasena = mysqli_real_escape_string($conn, $contrasena);

        // Query para verificar las credenciales del usuario
        $sql = "SELECT * FROM usuario WHERE nombreUsuario = '$nombreUsuario' AND contrasena = '$contrasena'";
        $result = mysqli_query($conn, $sql);

        // Verifica si se encontró algún usuario con las credenciales proporcionadas
        if (mysqli_num_rows($result) == 1) {
            // Inicia la sesión
            session_start();

            // Almacena el nombre de usuario en la sesión
            $_SESSION['nombre_usuario'] = $nombreUsuario;

            // Redirige al usuario a la página de inicio
            header('Location: ../index.php');
            exit;
        } else {
            // Si las credenciales son incorrectas, muestra un mensaje de error
            echo "<script>alert('Nombre de usuario o contraseña incorrectos');</script>";
        }
    }
}
?>
