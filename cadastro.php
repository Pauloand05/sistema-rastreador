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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Carregando jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Cadastro</title>
</head>
<body>
    <div id="login">
        <div class="caixa">
            <img src="img/logo-af.png" alt="Logo">
            <h1>CADASTRO</h1>

            <form id="formCadastro" onsubmit="return validarFormulario();">
                <div class="nome">
                    <input type="text" id="nome" placeholder="Nome" required>
                </div>

                <div class="telefone">
                    <input type="text" class="form-control" id="telefone" placeholder="Telefone" required>
                </div>
                
                <div class="email">
                    <input type="email" id="email" placeholder="E-mail" required>
                </div>

                <!-- Campo de senha -->
                <div class="senha">
                    <input type="password" id="senha1" placeholder="Senha" required>
                    <i id="eye1" class="fas fa-eye icone" onclick="togglePassword('senha1', 'eye1')"></i>
                </div>

                <!-- Confirmação de senha -->
                <div class="senha">
                    <input type="password" id="senha2" placeholder="Confirmar Senha" required>
                    <i id="eye2" class="fas fa-eye icone" onclick="togglePassword('senha2', 'eye2')"></i>
                </div>

                <div class="area-entrar">
                    <p>Já tem uma conta? <a href="login.php">Entre Aqui!</a></p>
                    <input class="btn-entrar" type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>

    <!-- Script de Telefone -->
    <script>
        $(document).ready(function() {
            // Máscara para o telefone
            $('#telefone').mask('(00) 00000-0000');
        });

        // Função para alternar a visibilidade da senha
        function togglePassword(inputId, iconId) {
            var input = document.getElementById(inputId);
            var icon = document.getElementById(iconId);

            if (input.type === "password") {
                input.type = "text"; // Mostrar senha
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = "password"; // Ocultar senha
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Validação do formulário
        function validarFormulario() {
            var senha1 = document.getElementById("senha1").value;
            var senha2 = document.getElementById("senha2").value;

            if (senha1.length < 8) {
                alert("A senha deve ter no mínimo 8 caracteres.");
                return false;
            }

            if (senha1 !== senha2) {
                alert("As senhas não coincidem!");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>
