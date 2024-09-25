// SELECT FORM
document.addEventListener('DOMContentLoaded', function () {
    const elemento = document.getElementById('origen');
    const choices = new Choices(elemento, {
      placeholderValue: 'Indique el origen de su viaje',
      searchEnabled: true 
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const elemento = document.getElementById('destino');
    const choices = new Choices(elemento, {
      placeholderValue: 'Indique el destino de su viaje',
      searchEnabled: true 
    });
});


// HEADER STICKY
const header = document.getElementById('header');
const logo = document.getElementById('logo');
const logoScroll = document.getElementById('logoScroll');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { // Cambia la cantidad de píxeles que deseas
                header.classList.add('scrolled');
              } else {
                header.classList.remove('scrolled');
              }
        });