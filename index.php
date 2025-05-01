<?php
session_start();
if (!isset($_SESSION['autenticado'])) {
    header("Location: login.html");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head><title>Bem-vindo</title></head>
<body>
<h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
<a href="auth/logout.php">Sair</a>
</body>
</html>
