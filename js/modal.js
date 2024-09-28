var btn_iniciarSesion = document.getElementById('btn_iniciarSesion');
var modalContainer = document.getElementById('modalContainer');

if (btn_iniciarSesion) {
    btn_iniciarSesion.onclick = function() {
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