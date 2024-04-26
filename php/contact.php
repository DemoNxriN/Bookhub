<?php

/*require_once('./validate_session.php');*/

?>

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

        <section class="main-content"> 
            <section>
            <div class="iframemap" style="width: 100%"><iframe width="600" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=450&amp;hl=en&amp;q=Pla%C3%A7a%20de%20les%20Arts,%2011,%2008401%20Granollers,%20Barcelona+(Bookhub)&amp;t=&amp;z=19&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/sport-gps/">fitness tracker</a></iframe></div>
            </section>
        </section>

        <footer class="logfoot">
            <p>&copy; 2024 Bookhub. Todos los derechos reservados.</p>
        </footer>
    </body>

</html>

<script>
    
</script>