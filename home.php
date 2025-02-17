<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AF RASTREADORES</title>
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
                    estiver. Oferecemos tecnologia de ponta para garantir a Segurança que você merece
                </p>
                <a href="planos.php#plans" class="cta-button">Conheça Nossos Planos</a>
            </div>
            <div class="hero-image-area">
                <div class="carousel-section">
                    <div class="carousel-container">
                        <div class="carousel-slide">
                            <div class="carousel-item">
                                <img src="image/home-carousel/foto0.jpg" alt="Foto 1" class="poster">
                            </div>
                            <div class="carousel-item">
                                <img src="image/home-carousel/foto1.jpg" alt="Foto 2" class="poster">
                            </div>
                            <div class="carousel-item">
                                <img src="image/home-carousel/foto2.jpg" alt="Foto 3" class="poster">
                            </div>
                            <div class="carousel-item">
                                <img src="image/home-carousel/foto3.jpg" alt="Foto 4" class="poster">
                            </div>
                            <div class="carousel-item">
                                <img src="image/home-carousel/foto4.jpg" alt="Foto 5" class="poster">
                            </div>
                        </div>
                        <button class="prev-btn">&lt;</button>
                        <button class="next-btn">&gt;</button>
                        <div class="carousel-indicators">
                            <span class="indicator" data-index="0"></span>
                            <span class="indicator" data-index="1"></span>
                            <span class="indicator" data-index="2"></span>
                            <span class="indicator" data-index="3"></span>
                            <span class="indicator" data-index="4"></span>
                        </div>
                    </div>
                </div>
                <script src="js/carousel.js"></script>
            </div>
        </div>
    </section>

    <section class="security-promo">
        <div class="promo-container">
            <div class="promo-image">
                <img src="image/rastreamento.jpg" alt="Segurança para sua família ou negócio" />
            </div>
            <div class="promo-content">
                <h2>Proteção sob medida para seu veículo ou frota</h2>
                <p>
                    Monitore e qualquer lugar a frota da sua empresa em tempo real com nossas soluções de segurança.
                    Garantimos a proteção 24 horas por dia, com total controle na palma da sua mão.
                    Veja mais sobre nossos planos e escolha a melhor opção para você.
                </p>
                <a href="planos.php#plans" class="cta-button">Saiba Mais</a>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="cta-content">
            <h2>Controle segurança a um clique!</h2>
            <p>Garanta o rastreamento, monitoramento e proteção 24 horas por dia. Comece agora a transformar a gestão
                dos seus veículos</p>
            <a href="https://wa.me/5598992244831?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20o%20rastreamento%20veicular!!"
                class="cta-button" target="_blank">Fale Conosco</a>
        </div>
    </section>

    <section class="section-cards">
        <h2 class="section-h2">Porque escolher a <span class="name">AF Rastreadores</span>?</h2>
        <div class="cards-container">
            <div class="cards-grid">
                <div class="card">
                    <img src="image/icons/map-icon.svg" alt="Ícone de Rastreamento e Monitoramento">
                    <h3>Rastreamento e Monitoramento</h3>
                    <p>Monitore e rastreie seu veículo através da plataforma web ou aplicativos Android
                        e iOS.</p>
                </div>

                <!-- Segurança Eletrônica 24 horas -->
                <div class="card">
                    <img src="image/icons/clock-shield.svg" alt="Ícone de Segurança Eletrônica">
                    <h3>Prontidão e Excelência no Atendimento</h3>
                    <p>Atendimento e Serviço em prontidão para atender suas demandas e espectativas</p>
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
                    <h3>Urbano e Rural</h3>
                    <p>O sistema de ponta permite você sempre localizar seu veículo, tanto em ambiente urbano, quanto rural.</p>
                </div>

                <!-- De qualquer lugar do mundo -->
                <div class="card">
                    <img src="image/icons/world-check.svg" alt="Ícone de Acesso de Qualquer Lugar">
                    <h3>De qualquer lugar do mundo</h3>
                    <p>Nossos serviços são disponibilizados 100% online e podem ser acessados de qualquer lugar.</p>
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
                    <p>Email: af.rastreadores@gmail.com</p>
                    <p>Telefone: (98) 99224-4831</p>
                </div>

                <div class="column">
                    <h2>Links de Navegação</h2>
                    <ul class="list-unstyled">
                        <li><a class="social-icon" href="home.php">Inicio</a></li>
                        <li><a class="social-icon" href="sobre-nos.php">Sobre nós</a></li>
                        <li><a class="social-icon" href="planos.php">Planos</a></li>
                        <li><a class="social-icon" href="duvidas.php">Dúvidas</a></li>
                        <li><a class="social-icon" href="#footer">Contato</a></li>
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
                    <a href="https://wa.me/5598992244831?" class="social-icon">
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