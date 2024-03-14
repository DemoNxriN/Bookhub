<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <img class="card-img" src="../img/cuento de navidad.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>Cuento de navidad</h2>
                    <p>Ebenezer Scrooge era un hombre avaro. Su avaricia y frialdad arrugaron sus facciones, enrojecieron sus ojos 
                    y tornaron sus labios de color azul. Hasta su forma de caminar fue endurecida por ahorrar energías. Era tal su 
                    avaricia que ni el mal clima podía quitarle una reacción. Para el Sr. Scrooge, Navidad era una fecha caracterizada 
                    por la ineficiencia. Detestaba la ineficiencia, el gasto innecesario de dinero en regalos para personas mal agradecidas 
                    y caridades para holgazanes y vagabundos indignos de ayuda. El destino, sin embargo, intentará derretir el hielo que recubre 
                    el corazón del viejo. Será visitado por espíritus dedicados a enseñarle lo bueno de Noche Buena. Embárcate en la más conocida 
                    historia de Navidad, escrita por uno de los más importantes autores Ingleses.</p>
                    <a download="Cuento de navidad" href="../src/13_CUENTO DE NAVIDAD.pdf">Descargar</a>
                    <a  class="button-books" download="Cuento de navidad" href="../src/13_CUENTO DE NAVIDAD.pdf">Descargar</a>
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