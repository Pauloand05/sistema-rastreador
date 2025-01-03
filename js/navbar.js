const menuToggle = document.querySelector('.menu-toggle');
const navLinks = document.querySelector('.nav-links');
const menuClose = document.querySelector('.menu-close');

// Abrir o menu
menuToggle.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});

// Fechar o menu ao clicar no botão "X"
menuClose.addEventListener('click', () => {
    navLinks.classList.remove('active');
}); 
