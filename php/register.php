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
            <button class="button-nav" id="loginButton" onclick="redirectToLogin()">Iniciar Sesión</button>
            <button class="button-nav" id="registerButton" onclick="redirectToRegister()">Registro</button>
        </nav>
        
        <div class="content-form">
            <div class="form-container">
                <form action="./procesar_registro.php" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" id="apellido" name="apellido" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="direccion">Direccion:</label>
                            <input type="text" id="direccion" name="direccion" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="nombreUsuario">Nombre de Usuario:</label>
                            <input type="text" id="nombreUsuario" name="nombreUsuario" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                            <input type="date" id="fechaNacimiento" name="fechaNacimiento" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <input type="password" id="contrasena" name="contrasena" required>
                        </div>
                        <div class="form-group">
                            <label for="repitaContrasena">Repita la Contraseña:</label>
                            <input type="password" id="repitaContrasena" name="repitaContrasena" required>
                        </div>
                    </div>
                   
                    <button type="submit" class="form-submit">Registrarse</button>
                </form>
            </div>
        </div>

        <footer class="logfoot">
            <p>&copy; 2024 Bookhub. Todos los derechos reservados.</p>
        </footer>
    
        <script>

        </script>
    </body>
</html>