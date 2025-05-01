<?php
session_start();
require_once(__DIR__ . '/../email/EmailSender.php');


if (!isset($_SESSION['usuario_email'])) {
    die("Acesso não autorizado");
}

$codigo = rand(100000, 999999);
$_SESSION['2fa_codigo'] = $codigo;

// Enviar e-mail
$enviador = new EmailSender();
$enviador->enviar($_SESSION['usuario_email'], "Codigo 2FA", "Seu código é: $codigo");

header("Location: ../2fa.php");
?>
