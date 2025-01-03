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
    <link rel="stylesheet" href="css/nav-footer.css">
    <link rel="stylesheet" href="css/style-sobre-nos.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navegação -->
    <header class="navbar">
        <div class="container nav-container">
            <div class="logo">
                <img src="img/logo-af.png" alt="Logo da Empresa">
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
                    de ponta e um atendimento dedicado para garantir a sua tranquilidade e segurança. Com anos de
                    experiência, entendemos a importância de proteger o que é importante para você.
                </p>
            </div>
            <div class="imagem">
                <img src="icons/sobre-nos2.svg" alt="Imagem de rastreamento veicular">
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

    <!-- Rodapé -->
    <footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Informações de localização -->
            <div class="col-md-3">
                <h5>Localização</h5>
                <p>Estrada de Ribamar, Loja 04, Vila Kiola<br>São José de Ribamar, MA, 65110-000</p>
            </div>

            <!-- Informações de contato -->
            <div class="col-md-3">
                <h5>Contato</h5>
                <p>Email: contato@empresa.com.br</p>
                <p>Telefone: (11) 1234-5678</p>
            </div>

            <!-- Links úteis -->
            <div class="col-md-3">
                <h5>Links úteis</h5>
                <ul class="list-unstyled">
                    <li><a href="home.php">Inicio</a></li>
                    <li><a href="duvidas.php">Dúvidas</a></li>
                    <li><a href="sobre-nos.php">Sobre nós</a></li>
                    <li><a href="planos.php">Planos</a></li>
                    <li><a href="area-do-cliente.php">Área do cliente</a></li>
                </ul>
            </div>

            <!-- Redes sociais -->
            <div class="col-md-3">
                <h5>Redes sociais</h5>
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i> Facebook</a><br>
                <a href="https://www.instagram.com/af.rastreadores?igsh=anl0bHVrNnR5dW1t" class="social-icon"><i class="fab fa-instagram"></i> Instagram</a><br>
                <a href="https://wa.me/5598991258772?" class="social-icon"><i class="fab fa-whatsapp"></i> whatsapp</a><br>
            </div>
        </div>
    </div>

        <!-- Ícone abaixo da localização -->

        <!-- Ícones abaixo da localização -->
        <div class="icon mt-5">
            <div class="row justify-content-center">
                <div class="col-4 col-sm-2 mb-3">
                    <!-- Ícone-1 -->
                    <img src="icons/icon-1.svg" alt="icon-1" class="img-fluid">
                </div>

                <div class="col-4 col-sm-2 mb-3">
                    <!-- Ícone-2 -->
                    <img src="icons/icon-4.svg" alt="icon-2" class="img-fluid">
                </div>

                <div class="col-4 col-sm-2 mb-3">
                    <!-- Ícone-3 -->
                    <img src="icons/icon-5.svg" alt="icon-3" class="img-fluid">
                </div>

                <div class="col-4 col-sm-2 mb-3">
                    <!-- Ícone-4 -->
                    <img src="icons/icon-3.svg" alt="icon-4" class="img-fluid">
                </div>

                <div class="col-4 col-sm-2 mb-3">
                    <!-- Ícone-5 -->
                    <img src="icons/icon-6.svg" alt="icon-5" class="img-fluid">
                </div>
            </div>
        </div>

    </footer>

</body>