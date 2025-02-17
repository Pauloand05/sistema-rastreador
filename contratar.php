<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>AF RASTREADORES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="css/global/nav-footer.css">
    <link rel="stylesheet" href="css/style-contratar.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo-af-32x32.png">
</head>

<body>

    <header class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <img src="image/logo-af.png" alt="Logo da Empresa">
            </div>
            <button class="menu-toggle" aria-label="Abrir menu">☰</button>
            <nav class="nav-links active">
                <button class="menu-close" aria-label="Fechar menu">✕</button>
                <a href="home.php">Início</a>
                <a href="sobre-nos.php">Sobre Nós</a>
                <a href="planos.php">Planos</a>
                <a href="duvidas.php">Dúvidas</a>
                <a href="#footer">Contato</a>
            </nav>
        </div>
    </header>

    <script src="js/navbar.js"></script>

    <section class="contrato-section">
        <div class="form-container">
            <h2>Preencha as informações</h2>
            <form id="contratoForm" action="enviar_email.php" method="POST">
                <label for="nome">Nome Completo:</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite seu nome">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu email">

                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required placeholder="Digite seu telefone">

                <label for="plano">Plano de Interesse:</label>
                <select id="plano" name="plano" required>
                    <option value="" disabled selected>Selecione um plano</option>
                    <option value="moto">Plano Moto</option>
                    <option value="carro">Plano Carro</option>
                    <option value="caminhao">Caminhões / Frotas</option>
                </select>

                <button type="submit" class="submit-btn">Enviar</button>
            </form>
            <p id="mensagemSucesso" class="hidden">Estamos encaminhando seus interesses para nosso gerente. Entraremos em contato assim que possível!</p>
            <p id="mensagemErro" class="hidden">Algo deu errado ao enviar sua mensagem. Tente novamente mais tarde.</p>
            <a href="planos.php#plans" class="back-btn">Voltar</a>
        </div>
    </section>

    <script>
        $(document).ready(function() {
            // Máscara para o telefone
            $('#telefone').mask('(00) 00000-0000');

            // Envio do formulário via AJAX
            $('#contratoForm').on('submit', function(e) {
                e.preventDefault(); // Impede o envio normal do formulário

                // Limpa as mensagens anteriores
                $('#mensagemSucesso').addClass('hidden');
                $('#mensagemErro').addClass('hidden');

                // Desativa o botão para evitar múltiplos envios
                $('.submit-btn').attr('disabled', true).text('Enviando...');

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response === 'success') {
                            $('#mensagemSucesso').removeClass('hidden');
                            $('.submit-btn').attr('disabled', false).text('Enviar');
                        } else {
                            $('#mensagemErro').removeClass('hidden');
                            // Reativa o botão caso o envio falhe
                            $('.submit-btn').attr('disabled', false).text('Enviar');
                        }
                    },
                    error: function() {
                        $('#mensagemErro').removeClass('hidden');
                        // Reativa o botão caso ocorra um erro no envio
                        $('.submit-btn').attr('disabled', false).text('Enviar');
                    }
                });
            });
        });
    </script>

    <footer class="footer" id="footer">
        <div class="footer-container container">
            <div class="footer-content">
                <div class="column">
                    <h2>Localização</h2>
                    <p>Estrada de Ribamar, Loja 04, Vila Kiola<br>São José de Ribamar, MA, 65110-000</p>
                </div>
                <div class="column">
                    <h2>Contato</h2>
                    <p>Email: contato@empresa.com.br</p>
                    <p>Telefone: (11) 1234-5678</p>
                </div>
                <div class="column">
                    <h2>Links de Navegação</h2>
                    <ul class="list-unstyled">
                        <li><a class="social-icon" href="home.php">Inicio</a></li>
                        <li><a class="social-icon" href="duvidas.php">Dúvidas</a></li>
                        <li><a class="social-icon" href="sobre-nos.php">Sobre nós</a></li>
                        <li><a class="social-icon" href="planos.php">Planos</a></li>
                        <li><a class="social-icon" href="#">Área do cliente</a></li>
                    </ul>
                </div>
                <div class="column">
                    <h2>Redes sociais</h2>
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i><span>Facebook</span></a>
                    <a href="https://www.instagram.com/af.rastreadores?igsh=anl0bHVrNnR5dW1t" class="social-icon"><i class="fab fa-instagram"></i><span>Instagram</span></a>
                    <a href="https://wa.me/5598991258772?" class="social-icon"><i class="fab fa-whatsapp"></i><span>Whatsapp</span></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>