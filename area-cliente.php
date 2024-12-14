<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-area-cliente.css">
    <title>Área do Cliente - AF RASTREADORES</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Área do Cliente</h2>
                <p class="text-center mb-5">Bem-vindo à plataforma AF RASTREADORES. Acesse nossos serviços de rastreamento de veículos com facilidade.</p>

                <!-- Seção Informações sobre o serviço -->
                <section class="mt-4 card custom-card">
                    <h4 class="text-center">Sobre os nossos serviços</h4>
                    <p>Nosso sistema de rastreamento de veículos permite que você tenha o controle total sobre a localização do seu veículo em tempo real, garantindo mais segurança e comodidade. Com a nossa plataforma, você pode:</p>
                    <ul>
                        <li>Rastrear seu veículo a qualquer hora e em qualquer lugar.</li>
                        <li>Receber alertas em tempo real sobre a localização do seu veículo.</li>
                        <li>Proteger seu veículo contra roubos e furtos.</li>
                    </ul>
                </section>

                <!-- Seção Benefícios de Cadastro -->
                <section class="mt-4 card custom-card">
                    <h4 class="text-center">Benefícios de se cadastrar</h4>
                    <p>Ao se cadastrar na nossa plataforma, você poderá:</p>
                    <ul>
                        <li>Configurar o rastreamento do seu veículo.</li>
                        <li>Acessar relatórios e históricos de localização.</li>
                        <li>Receber ofertas exclusivas e atualizações sobre novos recursos.</li>
                    </ul>
                </section>

                <!-- Botões de Ação -->
                <div class="text-center mt-4">
                    <a href="cadastro.php" class="btn btn-primary w-100">Cadastrar-se</a>
                </div>
                <div class="text-center mt-3">
                    <a href="login.php" class="btn btn-outline-primary w-100">Fazer Login</a>
                </div>

                <!-- Seção de Suporte e Contato -->
                <section class="mt-5 card custom-card">
                    <h4 class="text-center">Precisa de ajuda?</h4>
                    <p class="text-center">Se você tiver dúvidas ou precisar de ajuda, não hesite em entrar em contato com nossa equipe de suporte:</p>
                    <ul class="list-unstyled text-center">
                        <li><strong>Email:</strong> suporte@afrastreadores.com</li>
                        <li><strong>Telefone:</strong> (99) 9999-9999</li>
                    </ul>
                </section>

                <!-- Depoimentos de Clientes -->
                <section class="mt-5 card custom-card">
                    <h4 class="text-center">O que nossos clientes dizem</h4>
                    <div class="carousel slide" id="carouselExampleCaptions" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100">
                                    <p>"O sistema de rastreamento me deu a segurança que eu precisava para monitorar meu veículo. A interface é fácil de usar e as notificações são rápidas!"</p>
                                    <p><strong>João Silva</strong> - Cliente Satisfeito</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100">
                                    <p>"Excelente serviço! A localização em tempo real me ajudou a recuperar meu carro quando foi furtado. Recomendo a todos!"</p>
                                    <p><strong>Ana Souza</strong> - Cliente Satisfeita</p>
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
                </section>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>