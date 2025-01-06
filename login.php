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
    <link rel="stylesheet" href="css/style-login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="image/logo-af-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="image/logo-af-48x48.png">
    <link rel="icon" type="image/png" sizes="64x64" href="image/logo-af-64x64.png">
    <title>Login</title>
</head>
<body>
    <div id="login">

        <div class="caixa">

            <img src="img/logo-af.png" alt="">

            <h1>LOGIN</h1>
            
            <div class="email">
                <input type="email" placeholder="E-mail">
            </div>

            <div class="senha">
                <input type="password" id="senha" placeholder="Senha">
                <i id="eye" class="fas fa-eye icone" onclick="togglePassword()"></i>
            </div>

            <div class="area-entrar">
                <p>Ainda não tem uma conta? <a href="cadastro.php">Crie uma!</a></p>
                <input class="btn-entrar" type="submit" value="Entrar">
            </div>

        </div>
    </div>
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