<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="icon" type="image/png" sizes="64x64" href="/img/favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1>Registro</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- Aquí coloca los campos del formulario (nombre de usuario, contraseña, etc.) -->
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Registrarse</button>
    </form>
</body>
</html>
