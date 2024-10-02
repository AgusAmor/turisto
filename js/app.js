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


// VALIDACION CONTRASEÑA
var pass = document.getElementById('pass');
var pass2 = document.getElementById('pass2');

var registrarse = document.getElementById('registrarse');
var formRegistrarseCheckPass = document.getElementById('formRegistrarseCheckPass');

registrarse.onclick = function(event) {
    event.preventDefault();
    if (pass.value !== pass2.value) {
        alert("Las contraseñas no coinciden");
    } else {
        formRegistrarseCheckPass.action = "model/signUpCheck.php";
        formRegistrarseCheckPass.submit();
    }
}