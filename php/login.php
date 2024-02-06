<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="icon" type="image/png" sizes="64x64" href="/img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Iniciar Sesión</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Aquí iría tu lógica de manejo de formularios
        // Puedes acceder a los datos del formulario con $_POST
        // Por ejemplo, $_POST["username"], $_POST["password"], etc.
        // Realizar validaciones y procesos de inicio de sesión aquí
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Aquí coloca los campos del formulario (nombre de usuario, contraseña, etc.) -->
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
