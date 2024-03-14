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
            <button class="button-nav" id="loginButton" onclick="redirectToLogin()">Inicio de Sesión</button>
            <button class="button-nav" id="registerButton" onclick="redirectToRegister()">Registro</button>  
        </nav>

        <div class="card-container">
            <div class="card-content">
                <img class="card-img" src="../img/alicia a traves del espejo.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>Alicia a traves del espejo</h2>
                    <p>Cuando Alicia (Mia Wasikowska) despierta en el País de las Maravillas, la joven protagonista deberá viajar a través de este mundo mágico e intentar cambiar el pasado con la ayuda de un enigmático artilugio conocido como la cronosfera, todo con el fin de rescatar a su amigo el Sombrerero Loco (Johnny Depp). Solo así podrá detener al malvado Tiempo (Sacha Baron Cohen) antes de que se cumpla el plazo marcado por el reloj y el País de las Maravillas se convierta en un mundo estéril y sin vida. Y, por si fuera poco, también estará en su mano frenar los malvados planes de la Reina Roja (Helena Bonham Carter), con la que se volverá a ver las caras en un nuevo enfrentamiento.

En esta nueva aventura de fantasía, Alicia, con la ayuda de algunos nuevos amigos, tendrá que enfrentarse a distintos obstáculos para lograr su objetivo en esa realidad en la que todo es mágicamente posible o imposible.</p>
                    <a  class="button-books" download="Alicia a través del espejo" href="../src/02_ALICIA A TRAVES DEL ESPEJO.pdf">Descargar</a>
                    <a  class="button-books" href="#">Comprar</a>
                </div>
            </div>
        </div>
        
    <div class="comment-section">
        <h2>Comentarios</h2>
        <form action="../php/comments.php" method="post">
            <label for="comment">Deja tu comentario:</label>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <input type="submit" value="Publicar comentario">
        </form>
    </div>

    <div class="commentsContainer" id="commentsContainer_book1">
        <div class="comment">
            <h3>Nombre del Comentarista</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aut nobis earum inventore, dolore sit distinctio numquam possimus quas. Quia architecto dignissimos expedita, reiciendis totam minima eaque quo itaque ut!.</p>
        </div>
        <div class="comment">
            <h3>Nombre del Comentarista</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex accusantium repellat cupiditate ipsam excepturi deserunt, omnis aliquid illo inventore iste quaerat sequi quas voluptates odit fuga veniam maxime ipsum nesciunt..</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Bookhub. Todos los derechos reservados.</p>
    </footer>
</body>

</html>

<script>

</script>