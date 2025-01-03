const slide = document.querySelector('.carousel-slide');
const items = document.querySelectorAll('.carousel-item');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const indicators = document.querySelectorAll('.indicator');

// Clonar o primeiro e o último slides
const firstClone = items[0].cloneNode(true);
const lastClone = items[items.length - 1].cloneNode(true);

firstClone.id = 'first-clone';
lastClone.id = 'last-clone';

slide.appendChild(firstClone);
slide.insertBefore(lastClone, items[0]);

const allItems = document.querySelectorAll('.carousel-item'); // Atualizar os itens
let index = 1; // Começa no primeiro slide real
const size = items[0].clientWidth;

// Configurar a posição inicial
slide.style.transform = `translateX(-${index * 100}%)`;

const updateIndicators = () => {
    indicators.forEach((indicator, i) => {
        indicator.classList.toggle('active', i === (index - 1 + items.length) % items.length);
    });
};

const moveToSlide = () => {
    slide.style.transition = 'transform 0.5s ease-in-out';
    slide.style.transform = `translateX(-${index * 100}%)`;
    updateIndicators();
};

const checkClones = () => {
    if (allItems[index].id === 'first-clone') {
        slide.style.transition = 'none';
        index = 1;
        slide.style.transform = `translateX(-${index * 100}%)`;
    } else if (allItems[index].id === 'last-clone') {
        slide.style.transition = 'none';
        index = items.length;
        slide.style.transform = `translateX(-${index * 100}%)`;
    }
};

prevBtn.addEventListener('click', () => {
    if (index <= 0) return;
    index--;
    moveToSlide();
});

nextBtn.addEventListener('click', () => {
    if (index >= allItems.length - 1) return;
    index++;
    moveToSlide();
});

indicators.forEach((indicator) => {
    indicator.addEventListener('click', () => {
        index = parseInt(indicator.dataset.index, 10) + 1; // Ajustar para clones
        moveToSlide();
    });
});

// Detectar transição completa
slide.addEventListener('transitionend', checkClones);
