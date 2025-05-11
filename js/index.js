document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.slide');
    let index = 0;

    function updateSlide() {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
        index = (index + 1) % slides.length; // Cycle through slides
    }

    // Update the slide every 3 seconds
    setInterval(updateSlide, 3000);

    // Initialize the first slide
    slides[index].classList.add('active');
});