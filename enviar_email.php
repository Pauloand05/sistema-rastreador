<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Função para limpar os dados recebidos
function limpar($dados) {
    return htmlspecialchars(stripslashes(trim($dados)));
}

// Verificando se a solicitação é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Coletando os dados do formulário
    $nome = limpar($_POST['nome']);
    $email = limpar($_POST['email']);
    $telefone = limpar($_POST['telefone']);
    $plano = limpar($_POST['plano']);

    // Verificando se todos os campos foram preenchidos
    if (empty($nome) || empty($email) || empty($telefone) || empty($plano)) {
        echo 'error';
        exit;
    }

    // Configuração do PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'alyssonsamueldasilva6@gmail.com'; // Seu e-mail do Gmail
        $mail->Password = 'igic gqkc ctyb xjqy'; // Senha do aplicativo (não a senha normal do Gmail)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuração do remetente
        $mail->setFrom('alyssonsamueldasilva6@gmail.com', 'AF Rastreadores');

        // Configuração do destinatário (e-mail do patrão)
        $mail->addAddress('alyssonsamueldasilva6@gmail.com', 'Gerente');

        // Assunto do e-mail
        $mail->Subject = 'Novo Formulário de Contratação';

        // Corpo do e-mail
        $body = "
            <h2>Informações de Contratação</h2>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Telefone:</strong> $telefone</p>
            <p><strong>Plano de Interesse:</strong> $plano</p>
        ";
        $mail->isHTML(true);
        $mail->Body = $body;

        // Enviando o e-mail
        if ($mail->send()) {
            echo 'success';
        } else {
            echo 'error';
        }

    } catch (Exception $e) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
} else {
    echo 'error';
}
?>
