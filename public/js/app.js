// TITLE EN MOBILE NIÑOS (INDEX)
const item = document.getElementById('spanNinios');
const titlePopup = document.getElementById('titlePopup');

item.addEventListener('touchstart', (e) => {
  const titleText = item.getAttribute('title');
  if (titleText) {
    titlePopup.textContent = titleText;
    titlePopup.style.display = 'block';
    titlePopup.style.left = `${e.touches[0].pageX}px`;
    titlePopup.style.top = `${e.touches[0].pageY}px`;
  }
});

// Evento touchend para ocultar el title
item.addEventListener('touchend', () => {
  titlePopup.style.display = 'none';
});

// Opcional: ocultar el title cuando se mueve el dedo (por ejemplo, en un scroll)
item.addEventListener('touchmove', () => {
  titlePopup.style.display = 'none';
});


// OCULTAR CAMPOS DEL FORM
function toggleRequired() {
  // Detecta si es un tamaño de pantalla mobile
  if (window.matchMedia("(max-width: 768px)").matches) {
      // Mobile: deshabilitar los campos de escritorio
      document.getElementById("ida").removeAttribute("required");
      document.getElementById("vuelta").removeAttribute("required");
      document.getElementById("adultos").removeAttribute("required");
      document.getElementById("ninios").removeAttribute("required");
      document.getElementById("mascotas").removeAttribute("required");

      // Mobile: habilitar los campos de mobile
      document.getElementById("idaM").setAttribute("required", true);
      document.getElementById("vueltaM").setAttribute("required", true);
      document.getElementById("adultosM").setAttribute("required", true);
      document.getElementById("niniosM").setAttribute("required", true);
      document.getElementById("mascotasM").setAttribute("required", true);
  } else {
      // Desktop: deshabilitar los campos de mobile
      document.getElementById("idaM").removeAttribute("required");
      document.getElementById("vueltaM").removeAttribute("required");
      document.getElementById("adultosM").removeAttribute("required");
      document.getElementById("niniosM").removeAttribute("required");
      document.getElementById("mascotasM").removeAttribute("required");

      // Desktop: habilitar los campos de escritorio
      document.getElementById("ida").setAttribute("required", true);
      document.getElementById("vuelta").setAttribute("required", true);
      document.getElementById("adultos").setAttribute("required", true);
      document.getElementById("ninios").setAttribute("required", true);
      document.getElementById("mascotas").setAttribute("required", true);
  }
}

// Ejecuta al cargar la página y al redimensionar la ventana
window.addEventListener('DOMContentLoaded', toggleRequired);
window.addEventListener('resize', toggleRequired);


// SELECT FORM (INDEX)
// document.addEventListener('DOMContentLoaded', function () {
//     const elemento = document.getElementById('origen');
//     const choices = new Choices(elemento, {
//       placeholderValue: 'Indique el origen de su viaje',
//       searchEnabled: true 
//     });
// });

// document.addEventListener('DOMContentLoaded', function () {
//     const elemento = document.getElementById('destino');
//     const choices = new Choices(elemento, {
//       placeholderValue: 'Indique el destino de su viaje',
//       searchEnabled: true 
//     });
// });