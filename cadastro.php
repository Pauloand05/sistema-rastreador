<?php

    //colocar o código php do backend

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Carregando jQuery primeiro -->
    <script src="js/jquery.min.js"></script>
    <!-- JQuery (caso esteja usando JQuery Mask) -->
    <script src="js/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Cadastro</title>
</head>
<body>
    <div id="login">

        <div class="caixa">

            <img src="img/logo-af.png" alt="">

            <h1>CADASTRO</h1>

            <div class="nome">
                <input type="text" placeholder="Nome">
            </div>

            <div class="telefone">
                <input type="text" class="form-control" id="telefone" placeholder="Telefone">
            </div>
            
            <div class="email">
                <input type="email" placeholder="E-mail">
            </div>

            <div class="senha">
                <input type="password" id="senha" placeholder="Senha">
                <i id="eye" class="fas fa-eye icone" onclick="togglePassword()"></i>
            </div>

            <div class="senha">
                <input type="password" id="senha" placeholder="Senha">
                <i id="eye" class="fas fa-eye icone" onclick="togglePassword()"></i>
            </div>

            <div class="area-entrar">
                <p>Já tem uma conta? <a href="login.php">Entre Aqui!</a></p>
                <input class="btn-entrar" type="submit" value="Entrar">
            </div>
        </div>
    </div>
        <!-- Script de Telefone -->
    <script>
        $(document).ready(function() {
            // Máscara para o telefone
            $('#telefone').mask('(00) 00000-0000');
        });
    </script>
        <!-- script do icone -->
    <script>
    function togglePassword() {
        var senha = document.getElementById('senha');
        var eyeIcon = document.getElementById('eye');

        if (senha.type === "password") {
            senha.type = "text";  // Mostra a senha
            eyeIcon.classList.remove('fa-eye');  // Troca o ícone
            eyeIcon.classList.add('fa-eye-slash');  // Ícone de olho fechado
        } else {
            senha.type = "password";  // Esconde a senha
            eyeIcon.classList.remove('fa-eye-slash');  // Troca o ícone
            eyeIcon.classList.add('fa-eye');  // Ícone de olho aberto
        }
    }
    </script>
</body>
</html>