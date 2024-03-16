// Función para actualizar el estado de inicio de sesión
function updateLoginState(isLoggedIn) {
    const loginButton = document.getElementById('loginButton');
    const registerButton = document.getElementById('registerButton');

    if (isLoggedIn) {
        loginButton.innerText = 'Suscribirme';
        loginButton.onclick = subscribe;
        registerButton.innerText = 'Cerrar Sesión';
        registerButton.onclick = logout;
    } else {
        loginButton.innerText = 'Iniciar Sesión';
        loginButton.onclick = redirectToLogin;
        registerButton.innerText = 'Registro';
        registerButton.onclick = redirectToRegister;
    }
}

// Función para iniciar sesión
function login() {
    console.log('Iniciando sesión...');
    // Aquí se podría hacer una solicitud al servidor para iniciar sesión
    // Luego, llamar a updateLoginState con el resultado
    // Por ahora, simplemente simulamos que el usuario está iniciando sesión
    updateLoginState(true);
}

// Función para cerrar sesión
function logout() {
    console.log('Cerrando sesión...');
    // Aquí se podría hacer una solicitud al servidor para cerrar sesión
    // Luego, llamar a updateLoginState con el resultado
    // Por ahora, simplemente simulamos que el usuario está cerrando sesión
    updateLoginState(false);
}

// Función para suscribirse
function subscribe() {
    console.log('Suscribiendo al usuario...');
}

// Función para redirigir a la página de inicio de sesión
function redirectToLogin() {
    console.log('Redirigiendo a la página de inicio de sesión...');
    // Cambia 'login.php' por la ruta real de tu página de inicio de sesión
    window.location.href = 'login.php';
}

// Función para redirigir a la página de registro
function redirectToRegister() {
    console.log('Redirigiendo a la página de registro...');
    // Cambia 'register.php' por la ruta real de tu página de registro
    window.location.href = 'register.php';
}

// Carga inicial de la página
window.onload = function() {
    // Aquí podrías realizar una solicitud al servidor para verificar el estado de inicio de sesión
    // Por ahora, simplemente supongamos que el usuario no está autenticado al cargar la página
    updateLoginState(false);
};
