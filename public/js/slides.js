// GUARDAR EL SCROLL (INDEX)
// Guarda la posición del scroll antes de redirigir
document.querySelectorAll('.btn_package').forEach(button => {
    button.addEventListener('click', function() {
        const idPackage = this.getAttribute('data-id_package');
        
        // Guarda la posición del scroll y establece una bandera
        localStorage.setItem('scrollPosition', window.scrollY);
        localStorage.setItem('fromSlider', 'true');
        
        // Redirige a la URL con el id_package dinámico
        window.location.href = "app/model/moreInfoPackage.php?id_package=" + idPackage;
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


// const slider = document.querySelector('.slider');
// let currentIndex = 0;
// const totalSlides = 8;
// const slidesToShow = 4;
// const slideWidth = 240;
// let slideInterval;

// function moveSlides() {
//     if (currentIndex < totalSlides - slidesToShow) {
//         slider.style.transition = 'transform 0.5s ease';
//         currentIndex++;
//     } else {
//         // volver al inicio cuando llega al final
//         slider.style.transition = 'transform 1s ease';
//         currentIndex = 0;
//         slider.style.transform = `translateX(0px)`;
//     }
//     // mover hacia adelante
//     slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
// }

// // botones
// function moverSlide(direction) {
//     // corta el movimiento automatico
//     clearInterval(slideInterval);

//     if (direction === 1) { // hacia adelante
//         if (currentIndex < totalSlides - slidesToShow) {
//             currentIndex++;
//         } else {
//             currentIndex = 0; // volver al inicio cuando llega al final
//         }
//     } else if (direction === -1) { // hacia atrás
//         if (currentIndex > 0) {
//             currentIndex--;
//         } else {
//             currentIndex = totalSlides - slidesToShow; // al final si estamos al inicio
//         }
//     }

//     // movimiento manual
//     slider.style.transition = 'transform 0.5s ease';
//     slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

//     // retrasa la animacion antes de mover automanicamente de nuevo
//     setTimeout(() => {
//         startAutoSlide();
//     }, 500);
// }

// // desplazamiento automático
// function startAutoSlide() {
//     slideInterval = setInterval(moveSlides, 5000);
// }

// startAutoSlide();



if (btn_cerrarModalPackage) {
    btn_cerrarModalPackage.onclick = function() {
        modalPackageContainer.classList.remove('open');
    };
}


const sliders = document.querySelectorAll('.slider');

sliders.forEach((slider) => {
    let currentIndex = 0;
    const totalSlides = 8; // Asegúrate de que este valor sea dinámico si es necesario
    const slidesToShow = 4;
    const slideWidth = 240;
    let slideInterval;

    function moveSlides() {
        slider.style.transition = 'transform 0.5s ease';
        currentIndex = (currentIndex < totalSlides - slidesToShow) ? currentIndex + 1 : 0;
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    // Desplazamiento automático
    function startAutoSlide() {
        slideInterval = setInterval(moveSlides, 5000);
    }

    startAutoSlide();

    // Función para mover manualmente
    function moverSlide(direction) {
        clearInterval(slideInterval); // Detener el auto-desplazamiento

        if (direction === 1) { // Hacia adelante
            currentIndex = (currentIndex < totalSlides - slidesToShow) ? currentIndex + 1 : 0;
        } else if (direction === -1) { // Hacia atrás
            currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - slidesToShow;
        }

        // Movimiento manual
        slider.style.transition = 'transform 0.5s ease';
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

        // Reiniciar el auto-desplazamiento
        setTimeout(startAutoSlide, 500);
    }

    // // Seleccionando los botones dentro del contexto del slider actual
    // const prevButton = slider.parentElement.querySelector('.btn_slides .prev');
    // const nextButton = slider.parentElement.querySelector('.btn_slides .next');

    // // Configurando los eventos para los botones
    // prevButton.addEventListener('click', () => moverSlide(-1));
    // nextButton.addEventListener('click', () => moverSlide(1));
});