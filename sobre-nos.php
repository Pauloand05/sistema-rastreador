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
    <link rel="stylesheet" href="assets/css/global/nav-footer.css">
    <link rel="stylesheet" href="assets/css/style-about-us.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navegação -->
    <header class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <img src="assets/image/logo-af.png" alt="Logo da Empresa">
            </div>
            <button class="menu-toggle" aria-label="Abrir menu">
                ☰
            </button>
            <nav class="nav-links active">
                <button class="menu-close" aria-label="Fechar menu">✕</button>
                <a href="/pages-test/home.html">Início</a>
                <a href="/pages-test/about-us.html">Sobre Nós</a>
                <a href="#services">Planos</a>
                <a href="/pages-test/doubts.html">Dúvidas</a>
                <a href="#footer">Contato</a>
            </nav>
        </div>
    </header>
    <script src="assets/js/navbar.js"></script>
    <section id="sobre-nos" class="sobre-nos">
        <div class="container">
            <div class="texto">
                <h2 class="titulo">Conheça a <span class="name">AF Rastreadores</span></h2>
                <p class="descricao">
                    Somos especialistas em rastreamento veicular, oferecendo soluções inovadoras que combinam tecnologia
                    de ponta e um atendimento dedicado para garantir a sua tranquilidade e segurança. Com anos de
                    experiência, entendemos a importância de proteger o que é importante para você.
                </p>
            </div>
            <div class="imagem">
                <img src="/pages-test/assets/image/sobre-nos2.svg" alt="Imagem de rastreamento veicular">
            </div>
        </div>
    </section>

    <section class="principios-af">
        <div class="container">
            <h2>Missão · Visão · Valores</h2>

            <div class="value-section">
                <div class="value-title">
                    <h3>Missão <span>🎯</span></h3>
                </div>
                <div class="value-text">
                    <p>
                        Nossa missão é fornecer rastreamento eficiente e confiável, garantindo segurança e tranquilidade
                        para nossos clientes, enquanto inovamos no mercado de proteção veicular.
                    </p>
                </div>
            </div>

            <div class="value-section right">
                <div class="value-title">
                    <h3>Visão <span>🏍️</span></h3>
                </div>
                <div class="value-text">
                    <p>
                        Ser reconhecida como a principal referência em rastreamento veicular no Brasil, com tecnologia
                        de ponta e um compromisso inabalável com a satisfação dos nossos clientes.
                    </p>
                </div>
            </div>

            <div class="value-section left">
                <div class="value-title">
                    <h3>Valores <span>✅</span></h3>
                </div>
                <div class="value-text">
                    <ul>
                        <li><strong>Inovação:</strong> Adotar soluções tecnológicas para proteger e facilitar a vida dos
                            nossos clientes.</li>
                        <li><strong>Segurança:</strong> Garantir confiança e proteção em cada serviço oferecido.</li>
                        <li><strong>Compromisso:</strong> Priorizar a excelência e a satisfação em todos os processos.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer" id="footer">
        <div class="footer-container container">
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
                    <li><a class="social-icon" href="/pages-test/home.html">Inicio</a></li>
                    <li><a class="social-icon" href="/pages-test/doubts.html">Dúvidas</a></li>
                    <li><a class="social-icon" href="/pages-test/about-us.html">Sobre nós</a></li>
                    <li><a class="social-icon" href="planos.php">Planos</a></li>
                    <li><a class="social-icon" href="area-do-cliente.php">Área do cliente</a></li>
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
    </footer>
</body>