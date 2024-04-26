<?php


?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/buttons.js"></script>
        <title>Bookhub</title>
    </head>
    <body>
    
        <header>
            <img class="logo" src="./img/Logo.png" alt="Logo">
        </header>
    
        <nav>
            <button class="button-nav" onclick="redirectToIndex()">Inicio</button>
            <button class="button-nav" onclick="redirectToContact()">Contacto</button>
            <button class="button-nav" id="loginButton" onclick="redirectToLogin()">Iniciar Sesión</button>
            <button class="button-nav" id="registerButton" onclick="redirectToRegister()">Registro</button>   
        </nav>
    
        <section class="main-content"> 
            <article>
                <h2>Belleza Negra</h2>
                <img src="./img/belleza negra.jpg" alt="Portada Libro 1">
                <h4>Anna Sewell</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book1.php')">Ver más</button>
            </article>
    
            <article>
                <h2>Alicia a través del espejo</h2>
                <img src="./img/alicia a traves del espejo.jpg" alt="Portada Libro 2">
                <h4>Lewis Carroll</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book2.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El arte de la guerra</h2>
                <img src="./img/el arte de la guerra.jpg" alt="Portada Libro 3">
                <h4>Sun Tzu</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book3.php')">Ver más</button>
            </article>
            
            <article>
                <h2>De la tierra a la luna</h2>
                <img src="./img/de la tierra a la luna.jpg" alt="Portada Libro 4">
                <h4>Julio Verne</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book4.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Drácula</h2>
                <img src="./img/dracula.jpg" alt="Portada Libro 5">
                <h4>Bram Stoker</h4>
                <button class="main-page"  onclick="redirectToDetails('./php/book5.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El arte de sobrevivir</h2>
                <img src="./img/el arte de sobrevivir.jpg" alt="Portada Libro 6">
                <h4>Arthur Schopenhouer</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book6.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El conde de Montecristo</h2>
                <img src="./img/el conde de montecristo.jpg" alt="Portada Libro 7">
                <h4>Alejandro Dumas</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book7.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Bodas de sangre</h2>
                <img src="./img/bodas de sangre.jpg" alt="Portada Libro 8">
                <h4>Federico García Lorca</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book8.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Anna Karenina</h2>
                <img src="./img/anna karenina.jpg" alt="Portada Libro 9">
                <h4>Lev Tolsti</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book9.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El diario de Ana Frank</h2>
                <img src="./img/el diario de ana frank.jpg" alt="Portada Libro 10">
                <h4>Ana Frank</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book10.php')">Ver más</button>
            </article>

            <article>
                <h2>El libro de la selva</h2>
                <img src="./img/el libro de la selva.jpg" alt="Portada Libro 11">
                <h4>Rudyard Kipling</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book11.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Ante la bandera</h2>
                <img src="./img/ante la bandera.jpg" alt="Portada Libro 12">
                <h4>Julio Verne</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book12.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Cuento de navidad</h2>
                <img src="img/cuento de navidad.jpg" alt="Portada Libro 13">
                <h4>Charles Dickens</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book13.php')">Ver más</button>
            </article>  
            
            <article>
                <h2>Cuentos de la selva</h2>
                <img src="img/cuentos de la selva.jpg" alt="Portada Libro 14">
                <h4>Horacio Quiroga</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book14.php')">Ver más</button>
            </article>
            
            <article>
                <h2>De profundis</h2>
                <img src="img/de profundis.jpg" alt="Portada Libro 15">
                <h4>Oscar Wilde</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book15.php')">Ver más</button>
            </article>
            
            <article>
                <h2>Diario de un seductor</h2>
                <img src="img/diario de un seductor.jpg" alt="Portada Libro 16">
                <h4>Sören Kierkegaard</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book16.php')">Ver más</button>
            </article>  
            
            <article>
                <h2>El angel de la sombra</h2>
                <img src="img/el angel de la sombra.jpg" alt="Portada Libro 17">
                <h4>Leopoldo Lugones</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book17.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El asno de oro</h2>
                <img src="img/el asno de oro.jpg" alt="Portada Libro 18">
                <h4>Lucio Apuleyo</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book18.php')">Ver más</button>
            </article>
            
            <article>
                <h2>El buen soldado</h2>
                <img src="img/el buen soldado.jpg" alt="Portada Libro 19">
                <h4>Ford Madox</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book19.php')">Ver más</button>
            </article>  
            
            <article>
                <h2>El cuervo</h2>
                <img src="img/el cuervo.jpg" alt="Portada Libro 20">
                <h4>Edgar Alan Poe</h4>
                <button class="main-page" onclick="redirectToDetails('./php/book20.php')">Ver más</button>
            </article>            
    
        </section>
    <footer class="ifoot">
        <p>&copy; 2024 Bookhub. Todos los derechos reservados.</p>
    </footer>
    </body>
</html>

<script>
   
   function redirectToIndex() {
    window.location.href = "../index.php";
}

function redirectToContact() {
    window.location.href = "./php/contact.php";
}

function redirectToLogin() {
    window.location.href = "./php/login.php";
}

function redirectToRegister() {
    window.location.href = "./php/register.php";
}

function redirectToDetails(page) {
    window.location.href = page;
}

</script>

