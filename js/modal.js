var btn_iniciarSesion = document.getElementById('btn_iniciarSesion');
var btn_iniciarSesion2 = document.getElementById('btn_iniciarSesion2');
var modalContainer = document.getElementById('modalContainer');

if (btn_iniciarSesion) {
    btn_iniciarSesion.onclick = function() {
        modalContainer.classList.add('open');
    };
}

if (btn_iniciarSesion2) {
    btn_iniciarSesion2.onclick = function() {
        modalContainer.classList.add('open');
    };
}

if (btn_cerrarModal) {
    btn_cerrarModal.onclick = function() {
        modalContainer.classList.remove('open');
    };
}

window.onclick = function(event) {
    if (event.target === modalContainer) {
        modalContainer.classList.remove('open');
    }
}