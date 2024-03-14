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
                <img class="card-img" src="../img/El asno de oro.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>El asno de oro</h2>
                    <p>En “el asno de oro” un mercader Corinto de nombre Lucio, sufre una metamorfosis. Es transformado 
                    en asno por Fotis, una criada, fruto de un accidente.Tras esta metamorfosis, el animal a pesar de conservar 
                    sus facultades humanas carece del don de la palabra. Así sufre una serie de adversidades, cada cual más penosa 
                    y pasa por varios amos hasta recuperar por fin su condición humana.Esto sucede gracias a la intervención de Isis, 
                    ya que en una procesión que se realizaba en honor a ésta, Lucio (asno) comió pétalos de rosas lo que le devolvió su 
                    condición humana. Agradecido Lucio se pone al servicio de la diosa Isis y se hace iniciar en sus sagrados misterios.</p>
                    <a download="El asno de oro" href="../src/18_EL ASNO DE ORO.pdf">Descargar</a>
                    <a  class="button-books" download="El asno de oro" href="../src/18_EL ASNO DE ORO.pdf">Descargar</a>
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