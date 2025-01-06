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
    <link rel="stylesheet" href="css/style-home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo-af-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="image/logo-af-48x48.png">
    <link rel="icon" type="image/png" sizes="64x64" href="image/logo-af-64x64.png">
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
    <section class="background-image">
        <div class="hero-section container">
            <div class="hero-content">
                <h1>Segurança Em Movimento</h1>
                <p>Com a <span class="name">AF Rastreadores</span>, você acompanha e protege o seu veículo de onde
                    quiser. Oferecemos tecnologia de ponta para garantir a Segurança que você merece
                </p>
                <a href="planos.php#planos" class="cta-button">Conheça Nossos Planos</a>
            </div>
            <div class="hero-image-area">
                <img src="image/car.png" alt="Carro Branco" class="img-hero">
            </div>
        </div>
    </section>

    <section class="security-promo">
        <div class="promo-container">
            <div class="promo-image">
                <img src="image/family.jpg" alt="Segurança para sua família ou negócio" />
            </div>
            <div class="promo-content">
                <h2>Proteção sob medida para sua família e negócio</h2>
                <p>
                    Monitore sua residência ou empresa em tempo real com nossas soluções de segurança.
                    Garantimos a proteção dos seus bens e entes queridos 24 horas por dia, com total controle na palma
                    da sua mão.
                </p>
                <a href="planos.php#planos" class="cta-button">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>Controle segurança a um clique!</h2>
            <p>Garanta o rastreamento, monitoramento e proteção 24 horas por dia. Comece agora a transformar a gestão
                dos seus veículos e bens.</p>
            <a href="planos.php#planos" class="cta-button">Fale Conosco</a>
        </div>
    </section>

    <section class="section-cards">
        <h2 class="section-h2">Porque escolher a <span class="name">AF Rastreadores</span>?</h2>
        <div class="cards-container">
            <div class="cards-grid">
                <div class="card">
                    <img src="image/icons/map-icon.svg" alt="Ícone de Rastreamento e Monitoramento">
                    <h3>Rastreamento e Monitoramento</h3>
                    <p>Monitore e rastreie seu veículo 24 horas por dia através da plataforma web ou aplicativos Android
                        e iOS.</p>
                </div>

                <!-- Segurança Eletrônica 24 horas -->
                <div class="card">
                    <img src="image/icons/clock-shield.svg" alt="Ícone de Segurança Eletrônica">
                    <h3>Segurança Eletrônica 24 horas</h3>
                    <p>Monitore seu imóvel 24 horas através de nossos aplicativos para Android e iOS.</p>
                </div>

                <!-- Telemetria Veicular -->
                <div class="card">
                    <img src="image/icons/speedometer.svg" alt="Ícone de Telemetria Veicular">
                    <h3>Telemetria Veicular</h3>
                    <p>Controle e gerencie o seu veículo com KMs percorridos, horímetro, despesas e manutenções do
                        veículo.</p>
                </div>

                <!-- Informações em Tempo Real -->
                <div class="card">
                    <img src="image/icons/data-graph.svg" alt="Ícone de Informações em Tempo Real">
                    <h3>Informações em Tempo Real</h3>
                    <p>Veja as informações do seu veículo em tempo real como velocidade, ignição e muito mais.</p>
                </div>

                <!-- Rastreamento Agrícola -->
                <div class="card">
                    <img src="image/icons/tractor.svg" alt="Ícone de Rastreamento Agrícola">
                    <h3>Rastreamento Agrícola</h3>
                    <p>Importe e exporte talhões em KML/KMZ e tenha a gestão das suas máquinas em nossa plataforma.</p>
                </div>

                <!-- De qualquer lugar do mundo -->
                <div class="card">
                    <img src="image/icons/world-check.svg" alt="Ícone de Acesso de Qualquer Lugar">
                    <h3>De qualquer lugar do mundo</h3>
                    <p>Nossos serviços são disponibilizados 100% na nuvem e podem ser acessados de qualquer lugar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
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