<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-contato.css">
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
                        <a class="nav-link active" aria-current="page" href="home.php">Início</a>
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
                        <a class="nav-link" href="contato.php">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
    
    <section class="main-section">
        <div class="main-container">
            <p>Este é um exemplo de uma seção com fundo bicolor e um container centralizado para exibir conteúdos importantes.</p>
        </div>
    </section>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>