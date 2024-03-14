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
                <img class="card-img" src="../img/el libro de la selva.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>El libro de la selva</h2>
                    <p>Cuentos que plantean reflexiones morales, protagonizados por niños y animales que razonan y hablan. Aquí conoceremos al entrañable Mowgli, 
                    adoptado por una familia de lobos, que lo protegen y lo integran en su manada. El pequeño Mowgli vivirá bajo la amenaza de Shere Khan, un tigre 
                    malvado que quiere devorarlo, pero contará con la ayuda de Baloo, el oso más divertido jamás visto, y de Bagheera, una pantera protectora, quienes 
                    le enseñarán la ley de la selva, las lenguas de los animales que la habitan y los peligros que acechan, y juntos vivirán una aventura sin igual. Y 
                    también disfrutaremos de un sinfín de personajes valientes que lucharán por conseguir una tregua entre humanos y animales, como la rebelde y aventurera 
                    foca Kotick; el heroico saltamontes que hará todo lo posible por salvar a su familia humana; el joven Tomai, que será testigo de “la danza de los elefantes”, 
                    una curiosa reunión de paquidermos en el corazón de la selva que los expertos cazadores consideraban un mito. Y finalmente, los mismos animales opinarán sobre 
                    el modo en el que se deben enfrentar a los servicios que les imponen los hombres. Sumerjámonos en las profundidades de la selva india con las más nobles emociones 
                    que permanecen intactas en los niños y en nuestros más fieles amigos: los animales..</p>
                    <a  class="button-books" download="El libro de la selva" href="../src/11_EL LIBRO DE LA SELVA.pdf">Descargar</a>
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