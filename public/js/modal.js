var btn_iniciarSesion = document.getElementById('btn_iniciarSesion');
var btn_iniciarSesion2 = document.getElementById('btn_iniciarSesion2');
var modalContainer = document.getElementById('modalContainer');
var btn_cerrarModal = document.getElementById('btn_cerrarModal');

if (btn_iniciarSesion) {
    btn_iniciarSesion.onclick = function() {
        openModal();
    };
}

if (btn_iniciarSesion2) {
    btn_iniciarSesion2.onclick = function() {
        openModal();
    };
}

if (btn_cerrarModal) {
    btn_cerrarModal.onclick = function() {
        closeModal();
    };
}

window.onclick = function(event) {
    if (event.target === modalContainer) {
        closeModal();
    }
}

// Función para abrir el modal
function openModal() {
    modalContainer.classList.remove('closing'); // Asegúrate de que la clase de cierre se quite
    modalContainer.classList.add('open');  // Agrega la clase 'open' para iniciar la animación de apertura
}

// Función para cerrar el modal
function closeModal() {
    modalContainer.classList.add('closing'); // Inicia la animación de cierre
    setTimeout(function() {
        modalContainer.classList.remove('open', 'closing'); // Remueve las clases después de la animación
    }, 500);  // El tiempo de espera debe coincidir con el tiempo de la animación CSS
}