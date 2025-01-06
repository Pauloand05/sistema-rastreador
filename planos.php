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
    <link rel="stylesheet" href="css/style-planos.css">
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
                <a href="plans.php">Planos</a>
                <a href="duvidas.php">Dúvidas</a>
                <a href="#footer">Contato</a>
            </nav>
        </div>
    </header>
    <script src="js/navbar.js"></script>

    <section class="title-section">
        <h1>Planos de Rastreamento</h1>
        <p>Escolha o plano que melhor se adapta as suas necessidades de segurança.</p>
    </section>
    <section class="carousel-section">
        <div class="carousel-container">
            <div class="carousel-slide">
                <div class="carousel-item">
                    <img src="image/poster3.jpg" alt="Poster 1" class="poster">
                    <div class="carousel-text">
                        <h3>Comodiade e tranquilidade</h3>
                        <p>O se veículo é rastreado 24h em tempo real.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/poster1.jpg" alt="Poster 2" class="poster">
                    <div class="carousel-text">
                        <h3>Mantenha seu veículo seguro</h3>
                        <p>Temos a melhor rede de rastreamento do estado do maranhão.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="image/poster2.jpeg" alt="Poster 3" class="poster">
                    <div class="carousel-text">
                        <h3>Assistência e segurança</h3>
                        <p>Sinta-se protegido a cada kilometro.</p>
                    </div>
                </div>
            </div>
            <button class="prev-btn">&lt;</button>
            <button class="next-btn">&gt;</button>
            <div class="carousel-indicators">
                <span class="indicator" data-index="0"></span>
                <span class="indicator" data-index="1"></span>
                <span class="indicator" data-index="2"></span>
            </div>
        </div>
    </section>
    <script src="js/carousel.js"></script>

    <section class="plans-section" id="plans">
        <div class="plans-container">
            <div class="plan-card">
                <div class="card-content">
                    <h3>Plano Básico</h3>
                    <p class="price">R$ 29,99/mês</p>
                    <p class="description">
                        Rastreamento básico para veículos. Ideal para quem busca segurança a baixo custo.
                    </p>
                    <ul>
                        <li>Localização em tempo real</li>
                        <li>Alertas via SMS</li>
                        <li>Relatório semanal</li>
                    </ul>
                </div>
                <div class="btn-area">
                    <a class="btn btn-primary">Contratar</a>
                    <a href="https://wa.me/5598991258772?text=Oi, gostaria de saber mais sobre o Plano Básico!"
                        class="btn btn-secondary">Fale Conosco!</a>
                </div>
            </div>

            <div class="plan-card">
                <div class="card-content">
                    <h3>Plano Intermediário</h3>
                    <p class="price">R$ 59,99/mês</p>
                    <p class="description">
                        Rastreamento com mais recursos para quem precisa de um controle mais completo do veículo.
                    </p>
                    <ul>
                        <li>Localização em tempo real</li>
                        <li>Alertas via SMS e e-mail</li>
                        <li>Relatório diário</li>
                        <li>Histórico de rotas</li>
                    </ul>
                </div>
                <div class="btn-area">
                    <a class="btn btn-primary">Contratar</a>
                    <a href="https://wa.me/5598991258772?text=Oi, gostaria de saber mais sobre o Plano Intermediário!"
                        class="btn btn-secondary">Fale Conosco!</a>
                </div>
            </div>

            <div class="plan-card">
                <div class="card-content">
                    <h3>Plano Premium</h3>
                    <p class="price">R$ 99,99/mês</p>
                    <p class="description">
                        Plano completo para quem precisa de recursos avançados e controle total do rastreamento.
                    </p>
                    <ul>
                        <li>Localização em tempo real</li>
                        <li>Alertas via SMS, e-mail e aplicativo</li>
                        <li>Relatório em tempo real</li>
                        <li>Histórico completo de rotas</li>
                        <li>Monitoramento 24/7</li>
                    </ul>
                </div>
                <div class="btn-area">
                    <a class="btn btn-primary">Contratar</a>
                    <a href="https://wa.me/5598991258772?text=Oi, gostaria de saber mais sobre o Plano Premium!"
                        class="btn btn-secondary">Fale Conosco!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-section">
        <h2>O que nossos clientes dizem</h2>
        <div class="testimonials-container">
            <div class="testimonial-card">
                <p>"O serviço de rastreamento foi excelente, ajudou a garantir a segurança do meu veículo!"</p>
                <p class="author">— João Silva, Cliente</p>
            </div>

            <div class="testimonial-card">
                <p>"A equipe de suporte é muito atenciosa e a plataforma é fácil de usar."</p>
                <p class="author">— Maria Oliveira, Cliente</p>
            </div>

            <div class="testimonial-card">
                <p>"Recomendo para todos que buscam rastreamento confiável e seguro!"</p>
                <p class="author">— Carlos Souza, Cliente</p>
            </div>
        </div>
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
                        <li><a class="social-icon" href="plans.php">Planos</a></li>
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