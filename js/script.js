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



// SLIDER
function initSlider(sliderContainer) {
  const slider = sliderContainer.querySelector('.slider');
  const slides = slider.querySelectorAll('.slide');
  let slideIndex = 0;
  const slidesVisible = 3;
  const totalGroups = Math.ceil(slides.length / slidesVisible);

  let autoSlide;

  // Función para mover el slider
  function moverSlide(n) {
    slideIndex += n;

    if (slideIndex < 0) {
      slideIndex = totalGroups;
    }

    if (slideIndex >= totalGroups) {
      slideIndex = 0;
    }

    const offset = -slideIndex * 100 / slidesVisible;
    slider.style.transform = `translateX(${offset}%)`;
  }

  // Iniciar deslizamiento automático
  function startAutoSlide() {
    autoSlide = setInterval(() => moverSlide(1), 5000);
  }

  // Detener deslizamiento automático
  function stopAutoSlide() {
    clearInterval(autoSlide);
  }

  // Manejar botones prev y next
  const prevButton = sliderContainer.querySelector('.prev');
  const nextButton = sliderContainer.querySelector('.next');

  prevButton.addEventListener('click', () => {
    stopAutoSlide();
    moverSlide(-1);
    startAutoSlide();
  });

  nextButton.addEventListener('click', () => {
    stopAutoSlide();
    moverSlide(1);
    startAutoSlide();
  });

  // Inicia el deslizamiento automático al cargar
  startAutoSlide();
}

// Inicia todos los sliders
document.querySelectorAll('.slider-container').forEach(initSlider);


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