<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de Rastreamento</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/global/nav-footer.css">
    <link rel="stylesheet" href="css/style-duvidas.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navegação -->
    <header class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <img src="image/logo-af.png" alt="Logo da Empresa">
            </div>
            <button class="menu-toggle" aria-label="Abrir menu">
                ☰
            </button>
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

    <!-- Seção principal com imagem e texto -->
    <section class="main-section">
        <div class="main-container">
            <div class="contact-form">
                <h2>Envie sua dúvida</h2>
                <p>Preencha os campos obrigatórios abaixo para enviar sua dúvida.</p>
                <form action="#" method="post">
                    <input type="text" placeholder="Nome completo" required>
                    <input type="email" placeholder="E-mail" required>
                    <input type="text" placeholder="Assunto" required>
                    <textarea placeholder="Descreva sua dúvida" rows="5" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>

            <!-- Dúvidas frequentes -->
            <div class="faq-section">
                <h2>Dúvidas Frequentes</h2>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>Como funciona o rastreamento de veículos em São Luís?</h3>
                    <p class="faq-answer">Nosso sistema utiliza tecnologia GPS para monitorar seus veículos em tempo
                        real, cobrindo toda a área urbana de São Luís e principais rodovias estaduais. Você pode acessar
                        a localização pelo nosso aplicativo ou portal.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>O rastreamento funciona em áreas sem cobertura de internet?</h3>
                    <p class="faq-answer">Sim, em áreas sem sinal de internet, nossos dispositivos continuam registrando
                        a localização. Assim que o sinal for restabelecido, todas as informações são atualizadas
                        automaticamente.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>Quanto tempo leva para instalar o rastreador no veículo?</h3>
                    <p class="faq-answer">A instalação geralmente leva entre 30 e 40 minutos. Nossos técnicos são
                        especializados e podem realizar o serviço na sua residência ou local de trabalho em São Luís.
                    </p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>O que acontece se o veículo sair da área de São Luís?</h3>
                    <p class="faq-answer">Caso o veículo saia da cidade, o sistema continuará rastreando, desde que
                        esteja dentro da área de cobertura nacional. Oferecemos planos personalizados para quem viaja
                        com frequência.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>É possível rastrear motos e bicicletas?</h3>
                    <p class="faq-answer">Sim, nosso sistema é adaptável para rastrear diferentes tipos de veículos,
                        incluindo motos e bicicletas. É uma solução ideal para entregadores ou quem precisa monitorar
                        pequenas frotas.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>Tenho acesso ao histórico de rotas percorridas?</h3>
                    <p class="faq-answer">Sim, você pode acessar o histórico completo das rotas percorridas pelo seu
                        veículo nos últimos 30 dias diretamente pelo nosso portal ou aplicativo.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>O que faço em caso de roubo ou furto do veículo?</h3>
                    <p class="faq-answer">Entre em contato imediatamente com nossa central de monitoramento. Nossa
                        equipe trabalhará junto às autoridades para localizar e recuperar seu veículo o mais rápido
                        possível.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>Qual a diferença entre rastreamento básico e avançado?</h3>
                    <p class="faq-answer">No plano básico, você tem acesso à localização em tempo real e histórico de
                        rotas. O plano avançado inclui alertas de velocidade, geofencing (delimitação de áreas), e
                        relatório de desempenho do veículo.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>Como o sistema garante a privacidade dos meus dados?</h3>
                    <p class="faq-answer">Utilizamos criptografia avançada para proteger todas as informações do
                        cliente. Apenas você e usuários autorizados têm acesso ao sistema.</p>
                </div>
                <div class="faq-item">
                    <h3><span class="faq-icon">+</span>Quais áreas de São Luís possuem maior cobertura de sinal?</h3>
                    <p class="faq-answer">Áreas centrais como Renascença, Turu, Cohama e Calhau possuem cobertura de
                        sinal ideal. Mesmo em bairros mais afastados, nossa tecnologia garante o rastreamento sem
                        interrupções.</p>
                </div>
            </div>
        </div>

        <script src="js/duvidas.js"></script>
    </section>

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

                <!-- Redes sociais -->
                <div class="column">
                    <h2>Redes sociais</h2>
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                        <span>Facebook</span>
                    </a>
                    <a href="https://www.instagram.com/af.rastreadores?igsh=anl0bHVrNnR5dW1t" class="social-icon">
                        <i class="fab fa-instagram"></i>
                        <span>Instagram</span>
                    </a>
                    <a href="https://wa.me/5598991258772?" class="social-icon">
                        <i class="fab fa-whatsapp"></i>
                        <span>Whatsapp</span>
                    </a>
                </div>
            </div>
            <div class="footer-icons-content">
                <img src="image/icons/footer-icons/icon-1.svg" alt="" class="footer-icon">
                <img src="image/icons/footer-icons/icon-4.svg" alt="" class="footer-icon">
                <img src="image/icons/footer-icons/icon-5.svg" alt="" class="footer-icon">
                <img src="image/icons/footer-icons/icon-3.svg" alt="" class="footer-icon">
            </div>
        </div>
    </footer>
</body>

</html>