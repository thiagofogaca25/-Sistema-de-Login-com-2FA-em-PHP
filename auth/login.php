<?php
session_start();
require_once __DIR__ . '/../config/db.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($senha, $user['senha'])) {
    $_SESSION['usuario'] = $user['nome'];
    header("Location: ../index.php");
} else {
    echo "Login inválido!";
}
$_SESSION['usuario_email'] = $user['email'];
$_SESSION['usuario'] = $user['nome'];
header("Location: send_2fa.php");
exit;

?>
