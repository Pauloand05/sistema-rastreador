<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planos de Rastreadores</title>
    
    <!-- Arquivo CSS do Bootstrap (local) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Arquivo CSS do seu próprio estilo -->
    <link rel="stylesheet" href="css/style-planos.css">
     <!-- Outras tags -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
        <div class="cabecalho py-5 ">
            <h1>Planos de Rastreamento</h1>
            <p>Escolha o plano que melhor se adapta às suas necessidades de segurança.</p>
        </div>
    </header>


        <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="img/imagem-af.jpeg" class="d-block w-100" alt="imagem-1">
        <div class="carousel-caption d-none d-md-block">
            <h5>Mantenha seu veículo seguro</h5>
            <p>Temos a melhor rede de rastreamento do estado do maranhão.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/imagen-1.jpg" class="d-block w-100" alt="imagem-2">
        <div class="carousel-caption d-none d-md-block">
            <h5>Comodiade e tranquilidade</h5>
            <p>O se veículo é rastreado 24h em tempo real.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="img/imagem-3.jpg" class="d-block w-100" alt="imagem-3">
        <div class="carousel-caption d-none d-md-block">
            <h5>Assistência e segurança</h5>
            <p>Sinta-se protegido a cada kilometro.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>


    <!-- Seção de Planos -->
    <section class="container py-5">
        <div class="row text-center">
            <!-- Plano Básico -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Plano Básico</h5>
                        <h3 class="card-price">R$ 29,99/mês</h3>
                        <p class="card-text">Rastreamento básico para veículos. Ideal para quem busca segurança a baixo custo.</p>
                        <ul class="list-unstyled">
                            <li>Localização em tempo real</li>
                            <li>Alertas via SMS</li>
                            <li>Relatório semanal</li>
                        </ul>
                        <div>
                            <a href="#" class="btn btn-primary">Contratar</a>
                            <a href="https://wa.me/5598991258772?text=Oi, gostaria de saber mais sobre o produto!
                            " class="btn btn-secondary btn-contratar">Fale Conosco!</a>
                        </div> 
                    </div>
                </div>
            </div>

            <!-- Plano Intermediário -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Plano Intermediário</h5>
                        <h3 class="card-price">R$ 59,99/mês</h3>
                        <p class="card-text">Rastreamento com mais recursos para quem precisa de um controle mais completo do veículo.</p>
                        <ul class="list-unstyled">
                            <li>Localização em tempo real</li>
                            <li>Alertas via SMS e e-mail</li>
                            <li>Relatório diário</li>
                            <li>Histórico de rotas</li>
                        </ul>
                        <div>
                            <a href="#" class="btn btn-primary">Contratar</a>
                            <a href="https://wa.me/5598991258772?text=Oi, gostaria de saber mais sobre o produto!
                            "class="btn btn-secondary btn-contratar">Fale Conosco!</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plano Premium -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Plano Premium</h5>
                        <h3 class="card-price">R$ 99,99/mês</h3>
                        <p class="card-text">Plano completo para quem precisa de recursos avançados e controle total do rastreamento.</p>
                        <ul class="list-unstyled">
                            <li>Localização em tempo real</li>
                            <li>Alertas via SMS, e-mail e aplicativo</li>
                            <li>Relatório em tempo real</li>
                            <li>Histórico completo de rotas</li>
                            <li>Monitoramento 24/7</li>
                        </ul>
                        <div>
                            <a href="#" class="btn btn-primary" >Contratar</a>
                            <a href="https://wa.me/5598991258772?text=Oi, gostaria de saber mais sobre o produto!
                            " class="btn btn-secondary btn-contratar">Fale Conosco!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
    <h2 class="text-center mb-4">O que nossos clientes dizem</h2>
    <div class="row">
        <div class="col-md-4 mb-4 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <p class="card-text">"O serviço de rastreamento foi excelente, ajudou a garantir a segurança do meu veículo!"</p>
                    <footer class="blockquote-footer">João Silva, Cliente</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <p class="card-text">"A equipe de suporte é muito atenciosa e a plataforma é fácil de usar."</p>
                    <footer class="blockquote-footer">Maria Oliveira, Cliente</footer>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 d-flex">
            <div class="card w-100">
                <div class="card-body">
                    <p class="card-text">"Recomendo para todos que buscam rastreamento confiável e seguro!"</p>
                    <footer class="blockquote-footer">Carlos Souza, Cliente</footer>
                </div>
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

    <!-- Arquivo JS do Bootstrap (local) -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/navbar.js"></script>
</body>
</html>
