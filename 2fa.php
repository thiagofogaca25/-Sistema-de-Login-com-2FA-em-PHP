<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>2FA</title></head>
<body>
<h2>Verificação em 2 etapas</h2>
<form action="auth/verify_2fa.php" method="post">
    Código recebido por e-mail: <input type="text" name="codigo" required><br>
    <button type="submit">Verificar</button>
</form>
</body>
</html>
