// SELECT FORM
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


// HEADER STICKY
const header = document.getElementById('header');
const logo = document.getElementById('logo');
const logoScroll = document.getElementById('logoScroll');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});


var burger = document.getElementById('burger');
var closeNavBar = document.getElementById('closeNavBar');
var headerBarMobile = document.getElementById('headerBarMobile');

if(burger){
  burger.onclick = function() {
    headerBarMobile.classList.add('openNavBar');
  };
}

if(closeNavBar){
  closeNavBar.onclick = function() {
    headerBarMobile.classList.remove('openNavBar');
};
}

// GUARDAR EL SCROLL
// Guarda la posición del scroll antes de redirigir
document.querySelectorAll('.btn_package').forEach(button => {
  button.addEventListener('click', function() {
      // Obtiene el valor de 'data-id_package' del botón que fue clicado
      const idPackage = this.getAttribute('data-id_package');
      
      // Guarda la posición del scroll en localStorage
      localStorage.setItem('scrollPosition', window.scrollY);
      
      // Redirige a la URL con el id_package dinámico
      window.location.href = "model/moreInfoPackage.php?id_package=" + idPackage;
  });
});

// Restaura la posición del scroll cuando la página se carga
window.addEventListener('load', function() {
  const scrollPosition = localStorage.getItem('scrollPosition');
  if (scrollPosition) {
      window.scrollTo(0, scrollPosition);
  }
});



// VALIDACION CONTRASEÑA
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