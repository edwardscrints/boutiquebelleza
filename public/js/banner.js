document.addEventListener('DOMContentLoaded', function () {
    //console.log("slider.js ha sido cargado y ejecutado.");

    let slides = document.querySelectorAll('.slide'); // Cambia 'slider-image' a 'slide'
    console.log(slides);  // Verifica que las imágenes están siendo seleccionadas correctamente

    let currentIndex = 0;
    const totalSlides = slides.length;

    function showNextSlide() {
        //console.log("Cambiando de imagen desde banner...");

        // Ocultar la imagen actual
        slides[currentIndex].classList.remove('opacity-100');
        slides[currentIndex].classList.add('opacity-0');

        // Incrementar el índice para pasar a la siguiente imagen
        currentIndex = (currentIndex + 1) % totalSlides;

        // Mostrar la nueva imagen con un retraso para la transición
        setTimeout(() => {
            slides[currentIndex].classList.remove('opacity-0');
            slides[currentIndex].classList.add('opacity-100');
        }, 500);  // Retraso de 500 ms para permitir que la transición de la imagen anterior ocurra
    }

    setInterval(showNextSlide, 7000);  // Cambia la imagen cada 7 segundos
});