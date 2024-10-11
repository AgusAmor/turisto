var modalContainer = document.getElementById('modalContainer');

document.getElementById('btn_iniciarSesion').onclick = function() {
    openModal();
};

document.getElementById('btn_iniciarSesion2').onclick = function() {
    openModal();
};

document.getElementById('btn_cerrarModal').onclick = function() {
    closeModal();
};

window.onclick = function(event) {
    if (event.target === modalContainer) {
        closeModal();
    }
}

// Función para abrir el modal
function openModal() {
    modalContainer.style.opacity='1';
    modalContainer.style.transform='translateY(0%)';
}

// Función para cerrar el modal
function closeModal() {
    modalContainer.style.opacity='0';
    modalContainer.style.transform='translateY(-100%)';
}