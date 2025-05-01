Claro! Aqui está a versão mais bonita e organizada do seu README:

````markdown
# 🔐 Sistema de Login com Verificação em Duas Etapas (2FA)

Este projeto implementa um sistema simples de login com autenticação em duas etapas via e-mail, utilizando **PHP**, **MySQL** e a biblioteca **PHPMailer**.

## 🚀 Funcionalidades

- ✅ Cadastro de usuário
- ✅ Login com verificação de senha
- ✅ Verificação em duas etapas (2FA) por e-mail
- ✅ Proteção de rotas
- ✅ Senhas criptografadas com `password_hash()`

## ⚙️ Pré-requisitos

Antes de começar, você precisa ter instalado:

- PHP 7.4 ou superior
- MySQL
- Extensão `openssl` habilitada no PHP
- Conta Gmail com [senha de app](https://support.google.com/accounts/answer/185833)

## 🧑‍💻 Instalação

Siga os passos abaixo para configurar o projeto em sua máquina:

### 1. Clone o repositório

```bash
git clone https://github.com/thiagofogaca25/Sistema-de-Login-com-2FA-em-PHP
cd Sistema-de-Login-com-2FA-em-PHP
````

### 2. Crie o banco de dados e a tabela

No MySQL, execute os seguintes comandos para criar o banco de dados e a tabela de usuários:

```sql
CREATE DATABASE login_2fa;

USE login_2fa;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);
```

### 3. Configure a conexão com o banco de dados

Edite o arquivo `config/db.php` com os dados do seu banco de dados MySQL:

```php
$host = 'localhost';
$db   = 'login_2fa';
$user = 'root';
$pass = 'root';
```

### 4. Configure o envio de e-mails

Edite o arquivo `email/EmailSender.php` para configurar seu Gmail e senha de app. Não use sua senha principal do Gmail, utilize uma senha de app.

```php
$mail->Username = 'seuemail@gmail.com';
$mail->Password = 'sua_senha_de_app';
$mail->setFrom('seuemail@gmail.com', 'PHP Auth_2FA');
```

> ⚠️ **Importante**: Use uma senha de aplicativo do Gmail, não sua senha principal.

## ▶️ Como usar

1. Acesse `http://localhost:8000/register.html` e crie sua conta.
2. Faça login em `login.html`.
3. Um código 2FA será enviado ao seu e-mail.
4. Insira o código recebido na tela `2fa.php`.
5. Após a verificação, você terá acesso à página protegida `index.php`.

## 🔐 Segurança

* Senhas são armazenadas de forma segura usando `password_hash()`.
* Sessões são protegidas com `$_SESSION`.
* A verificação 2FA é válida apenas durante a sessão ativa.
* O envio de e-mails é feito de forma segura via SMTP com TLS.

## 📦 Dependências

* [PHPMailer](https://github.com/PHPMailer/PHPMailer) (copiado manualmente para `PHPMailer/src`)
* PHP com OpenSSL ativo
* MySQL

## 🧾 Exemplo de `.gitignore`

Não compartilhe suas configurações sensíveis no Git. Crie um arquivo `.gitignore` com o seguinte conteúdo:

```gitignore
/config/db.php
/email/EmailSender.php
/vendor/
/*.log
*.env
*.bak
.DS_Store
```

## 🧠 Melhorias futuras

* Envio de SMS como opção de 2FA
* Expiração do código 2FA
* Tela de recuperação de senha
* Utilização de tokens JWT para autenticação

## 🛠 Autor

**Seu Nome**
[github.com/seu-usuario](https://github.com/seu-usuario)

Feito com ❤️ e PHP 🐘

```

Esse formato deixa o README bem estruturado e fácil de ler. Basta copiar e colar! Se precisar de mais algum ajuste, é só avisar.
```
