<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Verificação 2FA</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f1f1f1;
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
      margin: 0;
    }

    .verify-container {
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 100%;
      max-width: 350px;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    input[type="text"] {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 10px 20px;
      margin-top: 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #388E3C;
    }
  </style>
</head>
<body>
  <div class="verify-container">
    <h2>Verificação em 2 Etapas</h2>
    <form action="auth/verify_2fa.php" method="post">
      <input type="text" name="codigo" placeholder="Código recebido por e-mail" required><br>
      <button type="submit">Verificar</button>
    </form>
  </div>
</body>
</html>
