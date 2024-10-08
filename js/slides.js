const slider = document.querySelector('.slider');
let currentIndex = 0;
const totalSlides = 8;
const slidesToShow = 4;
const slideWidth = 240;
let slideInterval;

function moveSlides() {
    if (currentIndex < totalSlides - slidesToShow) {
        slider.style.transition = 'transform 0.5s ease';
        currentIndex++;
    } else {
        // volver al inicio cuando llega al final
        slider.style.transition = 'transform 1s ease';
        currentIndex = 0;
        slider.style.transform = `translateX(0px)`;
    }
    // mover hacia adelante
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
}

// botones
function moverSlide(direction) {
    // corta el movimiento automatico
    clearInterval(slideInterval);

    if (direction === 1) { // hacia adelante
        if (currentIndex < totalSlides - slidesToShow) {
            currentIndex++;
        } else {
            currentIndex = 0; // volver al inicio cuando llega al final
        }
    } else if (direction === -1) { // hacia atrás
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - slidesToShow; // al final si estamos al inicio
        }
    }

    // movimiento manual
    slider.style.transition = 'transform 0.5s ease';
    slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

    // retrasa la animacion antes de mover automanicamente de nuevo
    setTimeout(() => {
        startAutoSlide();
    }, 500);
}

// desplazamiento automático
function startAutoSlide() {
    slideInterval = setInterval(moveSlides, 5000);
}

startAutoSlide();



if (btn_cerrarModalPackage) {
    btn_cerrarModalPackage.onclick = function() {
        modalPackageContainer.classList.remove('open');
    };
}