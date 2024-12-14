<?php // funcionalidades futuras ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Rastreamento de Veículos</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style-contato.css">
</head>

<body>
    <div class="container">
        <h1>Fale Conosco</h1>
        <p class="text-center">Entre em contato conosco para tirar dúvidas, sugerir melhorias ou relatar problemas.</p>

        <form>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="4" placeholder="Escreva sua mensagem" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        <hr class="my-4">

        <h2>Informações de Contato</h2>
        <ul>
            <li><strong>E-mail:</strong> suporte@rastveiculos.com</li>
            <li><strong>Telefone:</strong> +55 (99) 1234-5678</li>
            <li><strong>Endereço:</strong> Rua dos Exemplos, 123 - Centro, Sua Cidade - SP</li>
        </ul>

        <div class="text-center mt-4">
            <a href="home.php" class="btn btn-secondary">Voltar à página inicial</a>
        </div>
        
    </div>
</body>

</html>
