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
                <img class="card-img" src="../img/Bodas de sangre.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>Bodas de sangre</h2>
                    <p>Producción poética y teatral enmarcado en un paisaje andaluz. Drama sobre la vida y la muerte. 
                    Pero de un modo arcano y ancestral, en la que figuran mitos, leyenda y paisajes que introducen al 
                    lector en un mundo de sombrías pasiones que derivan en los celos, la persecución y en el trágico final: 
                    la muerte. El amor se destaca como la única fuerza que puede vencerla. La obra recoge las costumbres de 
                    la tierra del autor, que aún perduran. Todo ello a partir de objetos simbólicos que anuncian la tragedia. 
                    Es constante en la obra lorquiana la obsesión por el puñal, el cuchillo y la navaja, que en Bodas de sangre 
                    atraen la fascinación y, a la vez, presagian la muerte. Además de los elementos naturales que también se desatacan como la luna.</p>
                    <a  class="button-books" download="Bodas de sangre" href="../src/08_BODAS DE SANGRE.pdf">Descargar</a>
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