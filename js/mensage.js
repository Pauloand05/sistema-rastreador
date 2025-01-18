const form = document.getElementById('contratoForm');
    const mensagemSucesso = document.getElementById('mensagemSucesso');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita o envio real do formulário
        mensagemSucesso.classList.remove('hidden'); // Exibe a mensagem de sucesso
        form.reset(); // Limpa os campos do formulário
    });