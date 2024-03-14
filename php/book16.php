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
                <img class="card-img" src="../img/Diario de un seductor.jpg" alt="Descripción de la imagen">
                <div class="card-text">
                    <h2>Diario de un seductor</h2>
                    <p>Narra la relación entre Juan, el seductor engaña y la manipula, y la ingenua Cordelia. Sin embargo, 
                    más allá de la trama literaria, abundar en la psicología del seductor no es sino un bello recurso que el filósofo 
                    danés utiliza para reflexionar sobre el hombre estético, a saber: el hombre que atrapado por la fuerza de la inmediatez 
                    y el goce sensual vaga por la vida víctima de sus instintos y sin poder ver en lo que le rodea nada más que un medio para 
                    satisfacer sus apetencias. Del mismo autor, en esta colección:" Temor y Temblor" ," El concepto de la angustia" ," In vino 
                    veritas" y" La repetición" .</p>
                    <a  class="button-books" download="Diario de un seductor" href="../src/16_DIARIO DE UN SEDUCTOR.pdf">Descargar</a>
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