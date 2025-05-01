<?php

require_once __DIR__ . '/../config/db.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $senha);

if ($stmt->execute()) {
    header("Location: ../login.html?success=1");
} else {
    echo "Erro ao cadastrar: " . $conn->error;
}
?>
