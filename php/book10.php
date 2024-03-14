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
                <img class="card-img" src="../img/el diario de ana frank.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>El diario de Anna Frank</h2>
                    <p>El diario de Ana Frank, de 1947, narra el horror de la persecución nazi en primera persona. Constituye un libro 
                    único en su género. Entre el 12 de junio de 1942 hasta el 1° de agosto de 1944 una niña de trece años llamada Ana Frank 
                    escribió en su diario -al que llamó “Kitty”- un testimonio estremecedor: la supervivencia en una buhardilla de unos almacenes 
                    en Amsterdam de ocho personas escondidas de la invasión y ocupación nazi. En ALIBRATE puedes encontrar todas las reseñas y opiniones 
                    del libro El diario de Ana Frank.</p>
                    <a  class="button-books" download="El diario de Ana Frank" href="../src/10_EL DIARIO DE ANA FRANK.pdf">Descargar</a>
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