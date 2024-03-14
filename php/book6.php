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
                <img class="card-img" src="../img/el arte de sobrevivir.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>El arte de sobrevivir</h2>
                    <p>Obra editada por Ernst Ziegler.En la obra de Arthur Schopenhauer, pensador misántropo y pesimista 
                    denostado por sus amargas invectivas, el lector no encontrará cándidos pensamientos con los que acompañar 
                    plácidamente el paso de los días. Sin embargo, se equivocará si busca en el autor tan solo una amarga visión 
                    de la vida, severos diagnósticos sobre la época que le tocó vivir o incluso, en último término, una exhortación 
                    al suicidio. Como muestra la presente selección de textos, a cargo de Ernst Ziegler, lo que brota de su pensamiento 
                    es la convicción de que debemos comenzar a vivir de nuevo cada día, pues resulta todo un arte permanecer con vida.
                    «La única forma de existencia es el momento presente, que es también la posesión más segura, aquella que nadie nos 
                    podrá arrebatar jamás.»Arthur Schopenhauer</p>
                    <a  class="button-books" download="El arte de sobrevivir" href="../src/06_EL ARTE DE SOBREVIVIR.pdf">Descargar</a>
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