const slider = document.querySelector('.slider');
    let currentIndex = 0;
    const totalSlides = 8;
    const slidesToShow = 4;
    const slideWidth = 240;

    function moveSlides() {
        // Si aún no llegamos al final, movemos a la siguiente diapositiva
        if (currentIndex < totalSlides - slidesToShow) {
          slider.style.transition = 'transform 0.5s ease';
          currentIndex++;
        } else {
          // Si llegamos al final, volvemos rápidamente al inicio
          slider.style.transition = 'transform 1s ease'; // Eliminar la transición temporalmente
          currentIndex = 0; // Reseteamos al primer slide
          slider.style.transform = `translateX(0px)`; // Volvemos instantáneamente al inicio
          setTimeout(() => {
          slider.style.transition = 'transform 0.5s ease'; // Restaurar la transición
          }, 20); // Pequeña demora para permitir el reinicio visual
        }

        // Movemos las diapositivas a la siguiente posición
        slider.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
    }

    // Deslizamos las diapositivas cada 2 segundos
    setInterval(moveSlides, 5000);