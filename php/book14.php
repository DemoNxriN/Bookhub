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
            <button class="button-nav" id="loginButton" onclick="redirectToLogin()">Iniciar Sesión</button>
            <button class="button-nav" id="registerButton" onclick="redirectToRegister()">Registro</button> 
        </nav>
        
        <div class="card-container">
            <div class="card-content">
                <img class="card-img" src="../img/Cuentos de la selva.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>Cuentos de la selva</h2>
                    <p>Libro de cuentos para niños protagonizados por yacarés, flamencos, tigres y coatíes. La selva es el escenario y 
                    personaje omnipresente de estos cuentos. Por ese entonces, Quiroga decide abandonar la comodidad del ambiente urbano 
                    para instalarse en la selva misionera. Esta, con su violencia natural incontenible, frente al hombre, aliado a veces, 
                    destructor las más, de esa naturaleza salvaje. Quiroga quiso inventar un lenguaje selvático de América, en contraposición 
                    de la tendencia del común de los escritores a imitar las modas literarias de Europa.</p>
                    <a  class="button-books" download="Cuentos de la selva" href="../src/14_CUENTOS DE LA SELVA.pdf">Descargar</a>
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