const carouselSlide = document.querySelector('.carousel-slide');
const carouselImages = document.querySelectorAll('.carousel-image');

const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let counter = 1;
const size = carouselImages[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

nextBtn.addEventListener('click', () => {
    if (counter >= carouselImages.length - 1) return;
    carouselSlide.style.transition = 'transform 0.5s ease-in-out';
    counter++;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

prevBtn.addEventListener('click', () => {
    if (counter <= 0) return;
    carouselSlide.style.transition = 'transform 0.5s ease-in-out';
    counter--;
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
});

function nextSlide() {
    if (counter >= carouselImages.length - 1) {
        carouselSlide.style.transition = 'none';
        counter = 1;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    } else {
        carouselSlide.style.transition = 'transform 0.5s ease-in-out';
        counter++;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
}

setInterval(nextSlide, 5000);