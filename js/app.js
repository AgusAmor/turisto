// GUARDAR EL SCROLL (INDEX)
// Guarda la posición del scroll antes de redirigir
document.querySelectorAll('.btn_package').forEach(button => {
  button.addEventListener('click', function() {
      const idPackage = this.getAttribute('data-id_package');
      
      // Guarda la posición del scroll y establece una bandera
      localStorage.setItem('scrollPosition', window.scrollY);
      localStorage.setItem('fromSlider', 'true');
      
      // Redirige a la URL con el id_package dinámico
      window.location.href = "model/moreInfoPackage.php?id_package=" + idPackage;
  });
});

// Restaura la posición del scroll solo si viene del slider
window.addEventListener('load', function() {
  const scrollPosition = localStorage.getItem('scrollPosition');
  const fromSlider = localStorage.getItem('fromSlider');

  // Si la bandera indica que venimos del slider, restaurar scroll
  if (scrollPosition && fromSlider === 'true') {
      window.scrollTo(0, scrollPosition);
      // Limpiar el localStorage para no aplicar el scroll siempre
      localStorage.removeItem('scrollPosition');
      localStorage.removeItem('fromSlider');
  }
});


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


// VALIDACION CONTRASEÑA (REGISTER)
document.getElementById('formRegistrarseCheckPass').onsubmit = function(event) {
  var pass = document.getElementById('pass');
  var pass2 = document.getElementById('pass2');
  
  var registrarse = document.getElementById('registrarse');
  var formRegistrarseCheckPass = document.getElementById('formRegistrarseCheckPass');
  
  // Primero, permite la validación nativa de HTML5
  if (!this.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
      this.reportValidity(); // Muestra los mensajes de error del navegador
      return false;
  }

  // Luego, valida que las contraseñas sean iguales
  if (pass.value !== pass2.value) {
    alert("Las contraseñas no coinciden");
  } else {
    formRegistrarseCheckPass.action = "model/signUpCheck.php";
    formRegistrarseCheckPass.submit();
  }
};