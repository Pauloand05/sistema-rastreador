<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <title>AF RASTREADORES</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- Logo -->
            <img src="img/logo-af.png" alt="Logo-AF" class="logo-nav">
            <!--icone para resposividade-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <img src="icons/icone-hamburguer.png" alt="Ícone de Menu">
                </span>
            </button>
            <!-- Links da Navbar -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto"> <!-- Alinha os itens à direita -->
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Planos</a>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categoria
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Moto</a></li>
                            <li><a class="dropdown-item" href="#">Carro</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Caminhão</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="#">Dúvidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <section class="container-inicio">
        <div class="img-titulo">
            <img src="img/log-AF.jpg" alt="Logo AF">
            <h1 class="titulo">Tranquilidade para você, sua família ou seu negócio!</h1>
        </div>

        <div class="btn">
            <button class="btn-plano">
                Conheça nossos planos >
            </button>
        </div>
    </section>

    <section class="container-meio">
        <p class="p1">A solução ideal para você</p>
    </section>

    <h1 class="paragrafo-seguranca"> Segurança para seu <span class="cores-H1"> veículo</span> e sua <span class="cores-H1">empresa</span></h1>
    <h1 class="separador"></h1>
    <section class="conteiner-pos-meio">
        <div class="imageTranquilidade">
            <img src="img/image-section-pos-meio.jpg" alt="" class="transparent-image">
            <h1 class="texto-imagem">Tranquilidade para você,<br><span class="textoDaTranquilidade">sua família ou seu negócio</span></h1>
            <p class="texto-imagem">Oferecemos soluções 100% em nuvem proporcionando flexibilidade e redução de custos para empresas.</p>
            <p class="texto-imagem-p">Oferecemos soluções 100% em nuvem proporcionando flexibilidade e redução de custos para empresas.
                <button class="botao">Conheça nossas soluções</button>
        </div>
        <div class="imageTranquilidade">
            <img src="img/image-tranquilidade.jpg" alt="">
        </div>
    </section>

    <section class="franquia">
        <div class="franquia-image">
            <img src="img/imageFranquia2.jpeg" alt="">
            <h1 class="textoFranquia"><span class="TextFranquiaspan">Franquias por todo o País para a sua comodidade</span></h1>
        </div>
    </section>

    <div class="separador-2"></div>
    <section class="container-meio">
        <p class="p11">entregamos</p>
        <h1><strong>Resultados para todos nossos clientes</strong></h1>
    </section>

    <section class="Contadores">
        <div class="contador">
            <span class="numero" data-target="7">0</span>
            <p><span class="destaque">países</span> de atuação</p>
        </div>
        <div class="contador">
            <span class="numero" data-target="100000">0</span>
            <p><span class="destaque">mil</span> clientes beneficiados</p>
        </div>
        <div class="contador">
            <span class="numero" data-target="20">0</span>
            <p><span class="destaque">equipamentos</span> homologados</p>
        </div>
    </section>
    <section class="FeitoParaVoce">
        <div class="containerParaVoce">
            <p class="p11">Soluções ideais para você e seu negócio</p>
            <h1>Feito para você!</h1>
        </div>
    </section>
    <section class="features">
        <div class="container">
            <div class="feature-item">
                <img src="img/imgRastreamento.jpg" alt="Ícone de Rastreamento e Monitoramento" class="icon">
                <h3>Rastreamento e Monitoramento</h3>
                <p>Monitore e rastreie seu veículo 24 horas por dia através da plataforma web ou aplicativos Android e iOS.</p>
            </div>
            <div class="feature-item">
                <img src="img/imgSegurança.png" alt="Ícone de Segurança Eletrônica" class="icon">
                <h3>Segurança Eletrônica 24 horas</h3>
                <p>Monitore seu imóvel 24 horas através de nossos aplicativos para Android e iOS.</p>
            </div>
            <div class="feature-item">
                <img src="img/imgTelemetria.jpg" alt="Ícone de Telemetria Veicular" class="icon">
                <h3>Telemetria Veicular</h3>
                <p>Controle e gerencie o seu veículo com KMs percorridos, horímetro, despesas e manutenções do veículo.</p>
            </div>
            <div class="feature-item">
                <img src="img/imgTempo.jpg" alt="Ícone de Informações em Tempo Real" class="icon">
                <h3>Informações em Tempo Real</h3>
                <p>Veja as informações do seu veículo em tempo real como velocidade, ignição e muito mais.</p>
            </div>
            <div class="feature-item">
                <img src="img/imgService.jpg" alt="Ícone de Rastreamento Agrícola" class="icon">
                <h3>Rastreamento Agrícola</h3>
                <p>Importe e exporte talhões em KML/KMZ e tenha a gestão das suas máquinas em nossa plataforma.</p>
            </div>
            <div class="feature-item">
                <img src="img/imgMundo.jpg" alt="Ícone de Nuvem" class="icon">
                <h3>De qualquer lugar do mundo</h3>
                <p>Nossos serviços são disponibilizados 100% em nuvem e podem ser acessados de qualquer lugar.</p>
            </div>
        </div>

    </section>
    <section class="container-conheca">
        <section>
            <button class="b">Conheça nossas soluções</button>
            <section class="texto-conheca ">
                <p class="paragrafoConheca">Conheça um pouco</p>
                <h1 class="paragrafoConheca">Sobre a AF</h1>
            </section>

            <div class="quadro-com-imagem">
                <div class="quadro">
                    <p>
                        Atuando na área de segurança veicular desde 2012, a Rastrek é a maior empresa de rastreamento do Brasil.
                        Evoluindo junto com as tecnologias disponibilizadas no seu segmento, expandiu seus conhecimentos com a
                        participação direta de seus profissionais em projetos de sistemas de rastreamento e bloqueio veicular.
                        <br><br>
                        Com o pensamento totalmente direcionado à satisfação de seus clientes no quesito logística, manutenção de frota
                        e segurança, disponibilizando informações em tempo real sobre os veículos de nossos clientes, permitindo um controle
                        de frota e logística ágil, na tomada de decisões, reduzindo significativamente os custos no transporte e fiscalizando
                        o uso da frota no cumprimento de suas atribuições.
                    </p>
                </div>

                <div class="imagem">
                    <!-- Você pode adicionar sua imagem escolhida aqui -->
                    <img src="img/amizade.avif" alt="Descrição da imagem">
                </div>
            </div>
        </section>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Função para animar os contadores
        const animateCounters = () => {
            const counters = document.querySelectorAll('.numero');

            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target'); // Valor final
                const speed = target / 200; // Velocidade da contagem

                const updateCount = () => {
                    const current = +counter.innerText; // Valor atual
                    const increment = Math.ceil(speed); // Incremento

                    if (current < target) {
                        counter.innerText = current + increment; // Atualiza o valor
                        setTimeout(updateCount, 30); // Rechama a função
                    } else {
                        counter.innerText = target; // Garante o valor final exato
                    }
                };

                updateCount();
            });
        };

        // Executa a animação quando a página carregar
        document.addEventListener('DOMContentLoaded', animateCounters);
    </script>
</body>

</html>