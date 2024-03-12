<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        <link rel="stylesheet" href="../css/style.css">
        <script src="../js/redirections.js"></script>
        <title>Bookhub</title>
    </head>
    <body>
    
        <header>
            <img class="logo" src="../img/Logo.png" alt="Logo">
        </header>
    
        <nav>
            <button class="button-nav" onclick="redirectToIndex()">Inicio</button>
            <button class="button-nav" onclick="redirectToContact()">Contacto</button>
            <button class="button-nav" id="loginButton" onclick="login()">Inicio de Sesión</button>
            <button class="button-nav" id="registerButton" onclick="register()">Registro</button>    
        </nav>

        <div class="content-form">
            <div class="form-container">
                <form action="../php/procesar_login.php" method="post">
                    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" required>
                        </div>
                        <div class="form-group"><button type="submit" class="form-submit">Iniciar Sesión</button></div>
                    
                </form>
            </div>
        </div>

        <footer>
            <p>&copy; 2024 Bookhub. Todos los derechos reservados.</p>
        </footer>
    </body>

</html>

<script>

</script>