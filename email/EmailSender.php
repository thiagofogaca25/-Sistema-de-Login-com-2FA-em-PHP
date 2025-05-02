<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require_once __DIR__ . '/../PHPMailer/src/SMTP.php';
require_once __DIR__ . '/../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender {
    public function enviar($destino, $assunto, $mensagem) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = ''; // Use um email de testes!
            $mail->Password = ''; // Use uma senha de app real!
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('', 'PHP Auth_2FA'); // Use um email de testes!
            $mail->addAddress($destino);
            $mail->isHTML(true);
            $mail->Subject = $assunto;
            $mail->Body = $mensagem;

            $mail->send();
        }catch (Exception $e) {
            echo "Erro ao enviar e-mail: " . $e->getMessage();
            echo "Código de erro: " . $mail->ErrorInfo;
        }
    }
}
