<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/redirections.js" ></script>
        <title>Bookhub</title>
    </head>
    <body>
    
        <header>
            <img class="logo" src="./img/Logo.png" alt="Logo">
        </header>
    
        <nav>
            <button class="button-nav" onclick="redirectToIndex()">Inicio</button>
            <button class="button-nav" onclick="redirectToContact()">Contacto</button>
            <button class="button-nav" id="loginButton" onclick="login()">Inicio de Sesión</button>
            <button class="button-nav" id="registerButton" onclick="register()">Registro</button>    
        </nav>
    
        <section class="main-content"> 
            <article>
                <h2>Belleza Negra</h2>
                <img src="./img/belleza negra.jpg" alt="Portada Libro 1">
                <h4>Anna Sewell</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book1.php')">Ver más</button>
            </article>
    
            <article>
                <h2>Alicia a través del espejo</h2>
                <img src="./img/alicia a traves del espejo.jpg" alt="Portada Libro 2">
                <h4>Lewis Carroll</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book2.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El arte de la guerra</h2>
                <img src="./img/el arte de la guerra.jpg" alt="Portada Libro 2">
                <h4>Sun Tzu</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book3.php')">Ver más</button>
            </article>
            
            <article>
                <h2>De la tierra a la luna</h2>
                <img src="./img/de la tierra a la luna.jpg" alt="Portada Libro 2">
                <h4>Julio Verne</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book4.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Drácula</h2>
                <img src="./img/dracula.jpg" alt="Portada Libro 2">
                <h4>Bram Stoker</h4>
                <button class="main-page"  onclick="redirectToDetails('./html/book5.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El arte de sobrevivir</h2>
                <img src="./img/el arte de sobrevivir.jpg" alt="Portada Libro 2">
                <h4>Arthur Schopenhouer</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book6.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El conde de Montecristo</h2>
                <img src="./img/el conde de montecristo.jpg" alt="Portada Libro 2">
                <h4>Alejandro Dumas</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book7.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Bodas de sangre</h2>
                <img src="./img/bodas de sangre.jpg" alt="Portada Libro 2">
                <h4>Federico García Lorca</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book8.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Anna Karenina</h2>
                <img src="./img/anna karenina.jpg" alt="Portada Libro 2">
                <h4>Lev Tolsti</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book9.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El diario de Ana Frank</h2>
                <img src="./img/el diario de ana frank.jpg" alt="Portada Libro 2">
                <h4>Ana Frank</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book10.php')">Ver más</button>
            </article>

            <article>
                <h2>El libro de la selva</h2>
                <img src="./img/el libro de la selva.jpg" alt="Portada Libro 2">
                <h4>Rudyard Kipling</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book11.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Ante la bandera</h2>
                <img src="./img/ante la bandera.jpg" alt="Portada Libro 2">
                <h4>Julio Verne</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book12.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Cuento de navidad</h2>
                <img src="img/cuento de navidad.jpg" alt="Portada Libro 2">
                <h4>Charles Dickens</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book13.php')">Ver más</button>
            </article>  
            
            <article>
                <h2>Cuentos de la selva</h2>
                <img src="img/cuentos de la selva.jpg" alt="Portada Libro 2">
                <h4>Horacio Quiroga</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book14.php')">Ver más</button>
            </article>
            
            <article>
                <h2>De profundis</h2>
                <img src="img/de profundis.jpg" alt="Portada Libro 2">
                <h4>Oscar Wilde</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book15.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Diario de un seductor</h2>
                <img src="img/diario de un seductor.jpg" alt="Portada Libro 2">
                <h4>Sören Kierkegaard</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book16.php')">Ver más</button>
            </article>  
            
            <article>
                <h2>El angel de la sombra</h2>
                <img src="img/el angel de la sombra.jpg" alt="Portada Libro 2">
                <h4>Leopoldo Lugones</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book17.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El asno de oro</h2>
                <img src="img/el asno de oro.jpg" alt="Portada Libro 2">
                <h4>Lucio Apuleyo</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book18.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El buen soldado</h2>
                <img src="img/el buen soldado.jpg" alt="Portada Libro 19">
                <h4>Ford Madox</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book19.php')">Ver más</button>
            </article>  
            
            <article>
                <h2>El cuervo</h2>
                <img src="img/el cuervo.jpg" alt="Portada Libro 20">
                <h4>Edgar Alan Poe</h4>
                <button class="main-page" onclick="redirectToDetails('./html/book20.php')">Ver más</button>
            </article>            
    
        </section>
    <footer>
        <p>&copy; 2024 Bookhub. Todos los derechos reservados.</p>
    </footer>
    </body>
</html>

<script>

</script>