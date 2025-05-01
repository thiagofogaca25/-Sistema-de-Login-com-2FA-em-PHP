# 🔐 Sistema de Login com Verificação em Duas Etapas (2FA)

Este projeto implementa um sistema simples de login com autenticação em duas etapas via e-mail, utilizando **PHP**, **MySQL** e a biblioteca **PHPMailer**.

## 🚀 Funcionalidades

- ✅ Cadastro de usuário
- ✅ Login com verificação de senha
- ✅ Verificação em duas etapas (2FA) por e-mail
- ✅ Proteção de rotas
- ✅ Senhas criptografadas com `password_hash()`

## ⚙️ Pré-requisitos

- PHP 7.4 ou superior
- MySQL
- Extensão `openssl` habilitada
- Conta Gmail com [senha de app](https://support.google.com/accounts/answer/185833)

## 🧑‍💻 Instalação

1. Clone o repositório:

```bash
git clone https://github.com/thiagofogaca25/Sistema-de-Login-com-2FA-em-PHP
cd Sistema-de-Login-com-2FA-em-PHP
```

2.Crie o banco de dados e a tabela:
```bash
CREATE DATABASE login_2fa;

USE login_2fa;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
```

3.Configure a conexão com o banco de dados editando config/db.php com os dados do MySQL:
```bash
$host = 'localhost';
$db   = 'login_2fa';
$user = 'root';
$pass = 'root';

```

4.Configure o envio de e-mails editando email/EmailSender.php com seu Gmail e senha de app:
```bash
$mail->Username = 'seuemail@gmail.com';
$mail->Password = 'sua_senha_de_app';
$mail->setFrom('seuemail@gmail.com', 'PHP Auth_2FA');

```
⚠️ Importante: Use uma senha de aplicativo do Gmail, não sua senha principal.

▶️ Como usar

Acesse http://localhost:8000/register.html e crie sua conta.

Faça login em login.html.

Um código 2FA será enviado ao seu e-mail.

Insira o código na tela 2fa.php.

Acesso garantido à página protegida index.php.

🔐 Segurança

Senhas armazenadas com password_hash()

Sessões protegidas com $_SESSION

Verificação 2FA válida apenas durante a sessão

Envio de e-mails seguro via SMTP (TLS)

📦 Dependências
PHPMailer (copiado manualmente para PHPMailer/src)

PHP com OpenSSL ativo

MySQL
