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
    <link rel="stylesheet" href="css/style-sobre-nos.css">
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
    <section id="sobre-nos" class="sobre-nos">
        <div class="container">
            <div class="texto">
                <h2 class="titulo">Conheça a <span class="name">AF Rastreadores</span></h2>
                <p class="descricao">
                    Somos especialistas em rastreamento veicular, oferecendo soluções inovadoras que combinam tecnologia
                    de ponta e um atendimento dedicado para garantir a sua tranquilidade e segurança para o seu veículo. Com anos de
                    experiência, entendemos a importância de proteger seu bem importante para você.
                </p>
            </div>
            <div class="imagem">
                <img src="image/car.png" alt="Imagem de rastreamento veicular">
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