var btn_bolson = document.getElementById('btn_bolson');
var btn_login = document.getElementById('btn_login');
var btn_signup = document.getElementById('btn_signup');
var btn_catalogo = document.getElementById('btn_catalogo');
var btn_cerrarModal = document.getElementById('btn_cerrarModal');
var btn_abirModal = document.getElementById('btn_abirModal');
var modal_container = document.getElementById('modal-container');
var modalCarrito = document.getElementById('modalCarrito');

if (btn_bolson) {
    btn_bolson.onclick = function() {
        window.location.href = "/web-app/bolson";
    };
}

if (btn_login) {
    btn_login.onclick = function() {
        window.location.href = '/web-app/login';
    };
}

if (btn_signup) {
    btn_signup.onclick = function() {
        window.location.href = '/web-app/signup';
    };
}

if (btn_catalogo) {
    btn_catalogo.onclick = function() {
        window.location.href = '/web-app/catalogo';
    };
}

if (btn_abirModal) {
    btn_abirModal.onclick = function() {
        modal_container.style.display = "grid";
    };
}

if (btn_cerrarModal) {
    btn_cerrarModal.onclick = function() {
        modal_container.style.display = "none";
    };
}

if (modal_container) {
    modal_container.onclick = function() {
        modal_container.style.display = "none";
    };
}

if (modalCarrito) {
    modalCarrito.onclick = function(event) {
        event.stopPropagation();
    };
}