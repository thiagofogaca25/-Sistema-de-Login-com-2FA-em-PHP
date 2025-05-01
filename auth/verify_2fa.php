<?php
session_start();

if ($_POST['codigo'] == $_SESSION['2fa_codigo']) {
    $_SESSION['autenticado'] = true;
    unset($_SESSION['2fa_codigo']);
    header("Location: ../index.php");
} else {
    echo "Código incorreto.";
}
