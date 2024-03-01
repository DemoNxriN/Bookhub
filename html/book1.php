<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
        <link rel="stylesheet" href="../css/style.css">
        <title>Bookhub</title>
    </head>
    <body>
    
        <header>
            <img class="logo" src="../img/Logo.png" alt="Logo">
        </header>
    
        <nav>
            <button class="button-nav" onclick="redirectToIndex()">Inicio</button >
            <button class="button-nav" onclick="redirectToLogin()">Inicio de Sesión</button>
            <button class="button-nav" onclick="redirectToRegister()">Registro</button>
            <button class="button-nav" onclick="redirectToContact()">Contacto</button>
        </nav>
        <div class="content">        
            <div class="card-container">
                <div class="card-content">
                    <img class="card-img" src="../img/belleza negra.jpg" alt="Descripción de la imagen">
                    <div class="card-text">
                        <h2>Belleza Negra</h2>
                        <p>El protagonista de nuestro relato es un hermoso caballo negro con una infancia feliz,
                             hasta que un desgraciado suceso obliga a su dueño a venderlo. Comienza así un largo 
                             trasiego con diferentes amos y toda clase de aventuras, en las que vivimos de cerca 
                             caracteres, costumbres, crueldades e incluso idearios políticos de las gentes más 
                             diversas.  Escrito desde el profundo respeto a los animales, el relato transmite 
                             sufrimiento, pero también alegría, comprensión y amor. Una sucesión de emociones 
                             que lo han convertido en un clásico de la literatura… no solo juvenil.
                        </p>
                        <a  class="button-books" download="Belleza Nega" href="../src/01_BELLEZA NEGRA.pdf">Descargar</a>
                        <a  class="button-books" href="#">Comprar</a>
                    </div>
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

<?php
    require_once('connecta_db_persistent.php');
    try{
        $sql = 'SELECT Usuario FROM `login` WHERE Opcion = :rol';
        $preparada = $db->prepare($sql);
        $preparada->execute(array(':rol' => '1111111111111111'));

        if($preparada){
            echo '<p>' . $preparada->rowCount() . '</p>';
            echo '<table>';
            foreach ($preparada as $fila) {
                echo '<tr>';
                echo '<td>' . $fila['Usuario'] . '</td>';
                echo '</tr>';
            }
            echo '</table>';
        }
    }catch(PDOException $e){
        echo 'Error amb la BDs: ' . $e->getMessage();
    }
    

<script>

    function redirectToIndex() {
        window.location.href = "../index.html";
    }

    function redirectToLogin() {
        window.location.href = "./login.html";
    }

    function redirectToRegister() {
        window.location.href = "./register.html";
    }

    function redirectToContact() {
        window.location.href = "./contact.html";
    }
    
</script>