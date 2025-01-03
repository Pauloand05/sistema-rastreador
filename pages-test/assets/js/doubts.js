document.querySelectorAll('.faq-item').forEach(item => {
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');

    item.addEventListener('click', () => {
        if (item.classList.contains('open')) {
            // Recolher resposta
            answer.style.maxHeight = null;
            item.classList.remove('open');
            icon.textContent = "+"; // Muda o ícone para "+"
        } else {
            // Expandir resposta
            answer.style.maxHeight = answer.scrollHeight + "px";
            item.classList.add('open');
            icon.textContent = "−"; // Muda o ícone para "-"
        }
    });
});