<?php
session_start();
if (!isset($_SESSION['autenticado'])) {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Bem-vindo</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #e9f0f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .welcome-container {
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      text-align: center;
      max-width: 400px;
      width: 100%;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    a {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      padding: 10px 20px;
      background-color: #d9534f;
      color: white;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    a:hover {
      background-color: #c9302c;
    }
  </style>
</head>
<body>
  <div class="welcome-container">
    <h1>Bem-vindo, <?php echo htmlspecialchars($_SESSION['usuario']); ?>!</h1>
    <a href="auth/logout.php">Sair</a>
  </div>
</body>
</html>
