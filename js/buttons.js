function login() {
    console.log('Iniciando sesión...');

    updateLoginState(true);
}

function logout() {
    console.log('Cerrando sesión...');

    updateLoginState(false);
}

function updateLoginState(isLoggedIn) {
    if (isLoggedIn) {

        const loginButton = document.getElementById('loginButton');
        loginButton.innerText = 'Suscribirme';
        loginButton.onclick = subscribe;

        const registerButton = document.getElementById('registerButton');
        registerButton.innerText = 'Cerrar Sesión';
        registerButton.onclick = logout;
    } else {

        const loginButton = document.getElementById('loginButton');
        loginButton.innerText = 'Inicio de Sesión';
        loginButton.onclick = redirectToLogin;
        const registerButton = document.getElementById('registerButton');
        registerButton.innerText = 'Registro';
        registerButton.onclick = redirectToRegister;
    }
}

function subscribe() {
    console.log('Suscribiendo al usuario...');
}

window.onload = function() {
    const isLoggedIn = false;
    updateLoginState(isLoggedIn);
};
