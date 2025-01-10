<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>AF RASTREADORES</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/global/nav-footer.css">
    <link rel="stylesheet" href="css/style-contratar.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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

    <div id="informacoes">
        
        <h1>
            Preencha as informações para prosseguir!
        </h1>

        <p>
            Para prosseguir com o contrato, preencha com suas informações para entrarmos em contato e lhe explicar os detalhes do plano!
        </p>

        <div class="nome">
            <input type="text" placeholder="Nome">
        </div>

        <div class="email">
            <input type="email" placeholder="Email">
        </div>

        <div class="telefone">
            <input type="tel" placeholder="Telefone">
        </div>

        <select class="form-select" aria-label="Default select example">
            <option selected>Munincipío</option>
            <option value="1">São Luis</option>
            <option value="2">São José de Ribamar</option>
            <option value="3">Raposa</option>
        </select>
    </div>
    
</body>
</html>