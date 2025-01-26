document.querySelectorAll('.rating input').forEach((input) => {
    input.addEventListener('change', function () {
        const ratingInputs = document.querySelectorAll('.rating input');
        ratingInputs.forEach((radio) => {
            const label = radio.nextElementSibling; // Pega o <label> correspondente
            if (radio.checked || radio.value <= this.value) {
                label.style.color = '#ffcc00'; // Preenche as estrelas até a selecionada
            } else {
                label.style.color = '#ddd'; // Reseta as estrelas à direita
            }
        });
    });
});

document.getElementById('feedback-form').addEventListener('submit', function (event) {
    event.preventDefault(); // Impede o envio tradicional do formulário

    // Captura o comentário e a avaliação selecionada
    const feedbackText = document.getElementById('feedback').value.trim();
    const rating = document.querySelector('input[name="rating"]:checked')
        ? document.querySelector('input[name="rating"]:checked').value
        : 0;

    if (rating == 0) {
        alert('Por favor, selecione uma avaliação!');
        return;
    }

    if (!feedbackText) {
        alert('Por favor, escreva um comentário antes de enviar!');
        return;
    }

    // Exibe os dados na página
    document.getElementById('display-feedback').textContent = feedbackText;
    document.getElementById('display-rating').textContent = `${rating} Estrela(s)`;

    // Exibe a seção com a avaliação
    document.getElementById('feedback-display').style.display = 'block';

    // Limpa o formulário após envio
    document.getElementById('feedback-form').reset();

    // Reseta as estrelas visualmente após envio
    document.querySelectorAll('.rating label').forEach((label) => {
        label.style.color = '#ddd';
    });
});
