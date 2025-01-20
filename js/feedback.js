document.getElementById('feedback-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio tradicional do formulário

    // Captura o comentário e a avaliação selecionada
    const feedbackText = document.getElementById('feedback').value;
    const rating = document.querySelector('input[name="rating"]:checked') ? document.querySelector('input[name="rating"]:checked').value : 0;

    if (rating == 0) {
        alert('Por favor, selecione uma avaliação!');
        return;
    }

    // Exibe os dados na página
    document.getElementById('display-feedback').textContent = feedbackText;
    document.getElementById('display-rating').textContent = `${rating} Estrela(s)`;

    // Exibe a seção com a avaliação
    document.getElementById('feedback-display').style.display = 'block';

    //Limpa o formulário após envio
    document.getElementById('feedback-form').reset();
});
