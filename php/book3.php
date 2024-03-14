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

        <div class="card-container">
            <div class="card-content">
                <img class="card-img" src="../img/el arte de la guerra.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>El arte de la guerra</h2>
                    <p>Es un libro de estrategia que inspiró a Napoleón, Maquiavelo, Mao Tse Tung y muchas más figuras históricas. Este libro de dos mil quinientos años de antigüedad, es uno de los más importantes textos clásicos chinos, 
                    en el que, a pesar del tiempo transcurrido, ninguna de sus máximas ha quedado anticuada, ni hay un solo consejo que hoy no sea útil. Pero la obra del general Sun Tzu no es únicamente un libro de práctica militar, 
                    sino un tratado que enseña la estrategia suprema de aplicar con sabiduría el conocimiento de la naturaleza humana en los momentos de confrontación. No es, por tanto, un libro sobre la guerra; 
                    es una obra para comprender las raíces de un conflicto y buscar una solución. «La mejor victoria es vencer sin combatir», nos dice Sun Tzu, «y esa es la distinción entre le hombre prudente y el ignorante»</p>  
                    <a  class="button-books" download="El arte de la guerra" href="../src/03_EL ARTE DE LA GUERRA.pdf">Descargar</a>
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